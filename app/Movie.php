<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;  
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'description',
        'release_date',
        'rating',
        'ticket_price',
        'country',
        'photo',
        'slug'
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'release_date' => 'date',
        'rating' => 'integer',
        'ticket_price' => 'double',
        'country' => 'string',
        'photo' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $createRules = [
        'name' => 'required',
        'description' => 'required',
        'release_date' => 'required|date_format:Y-m-d',
        'rating' => 'required|integer',
        'ticket_price' => 'required|numeric',
        'country' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function getReleasedateAttribute($value)
    {
        $carbon = new Carbon($value);
        return $carbon->format('Y-m-d'); 
    }

    /*------------------API Eloquent Relationship --------------------------*/
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres', 'movie_id', 'genre_id')->select(['genre_type']);
    }
    
    public function reviews()
    {
        return $this->hasMany(MovieReview::class, 'movie_id', 'id');
    }
}
