@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if ($movies->isEmpty())
				<p>There are currently no movies.</p>
	        @else
                @foreach($movies as $movie)
                    <div class="thumbnail">
                        @if ($movie->photo != null || $movie->photo != '')
                            {{ Html::image($movie->photo, $movie->name, array('width' => '820', 'height' => '320')) }}
                        @else
                            <img src="http://placehold.it/820x320" alt="">
                        @endif
                        <div class="caption-full">
                            <h4 class="pull-right">${{ number_format($movie->ticket_price, 2) }}</h4>
                            <h4><a href="{{ url('films/'.$movie->slug) }}">{{$movie->name}}</a></h4>
                            <h4>
                                <span class="label label-default">{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</span> &nbsp; 
                                <span class="label label-default">{{$movie->country}}</span>
                            </h4>
                            <p>{{$movie->description}}</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">{{$movie->reviews->count()}} {{ str_plural('review', $movie->reviews->count()) }}</p>
                            <p>
                                @for ($i=1; $i <= 5 ; $i++)
                                    <span class="{{ ($i <= $movie->rating) ? 'fas' : 'far'}} fa-star"></span>
                                @endfor
                                {{ number_format($movie->rating, 1) }} stars
                            </p>
                            <p>
                                @foreach($movie->genres as $genre)
                                    <span class="label label-default">{{$genre->genre_type}}</span> &nbsp;
                                @endforeach
                            </p>
                        </div>
                    </div>
                @endforeach
                {{ $movies->render() }}
            @endif
        </div>
    </div>
</div>
@endsection