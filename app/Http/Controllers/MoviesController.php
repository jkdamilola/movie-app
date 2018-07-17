<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use App\MovieGenre;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MoviesController extends Controller
{
    public function index() {
        $movies = Movie::paginate(1);
        return view('movies.index', compact('movies'));
    }

    public function create() {
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    public function store(Request $request) {
        $this->validate($request, Movie::$createRules);
        $name = $request->input('name');
        
        $checkExistData = Movie::where('name', $name)->count();
        if ($checkExistData == 0) {
            if ($file = $request->hasFile('photo')) {
                $file = $request->file('photo') ;
                $newNameFile = time().'.'.$file->getClientOriginalExtension();
                if (Storage::disk('public')->put($newNameFile, File::get($file))){
                    $flag = true;
                } else {
                    Flash::error('Some error occured, while uploading new image.');
                    return redirect()->back();
                }  
            }
            if ($flag) {
                $input = $request->all();
                $input['photo'] = Storage::url($newNameFile);
                $input['slug'] = preg_replace('/\s+/', '-', strtolower($name));
                $movie = new Movie($input);
                $movie->save();

                $genres = $request->input('genres');
                foreach($genres as $genre) {
                    $moviegenre = new MovieGenre([
                        'movie_id' => $movie->id,
                        'genre_id' => $genre
                    ]);
                    $moviegenre->save();
                }
                Flash::success('Movie saved successfully.');
                return redirect()->back();
            } else {
                Flash::error('Some error occured while uploading image please try again.');
                return redirect()->back();
            }
        } else {
            Flash::error('Movie name already exist.');
            return redirect()->back();
       }
    }

    public function show($slug) {
        $movie = Movie::where('slug', $slug)->first();
        if (empty($movie)) {
            Flash::error('Movie not found');
            return redirect(route('movies.index'));
        }
        return view('movies.show')->with('movie', $movie);
    }
}
