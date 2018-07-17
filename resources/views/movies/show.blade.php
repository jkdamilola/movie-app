@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
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
            <div class="well" id="reviews-anchor">
                @auth
                    <div class="row">
                        <div class="col-md-12">
                            @include('flash::message')
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="#reviews-anchor" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
                        <hr id="hr-id">
                    </div>
                @endauth
                <div class="row" id="post-review-box" style="display:none;">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/review') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="movie_id" value="{{$movie->id}}">
                            <div class="form-group row">
                                <label for="review_name" class="col-md-3 col-form-label text-md-right">Name</label>

                                <div class="col-md-8">
                                    <input id="review_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="review_comment" class="col-md-3 col-form-label text-md-right">Comment</label>

                                <div class="col-md-8">
                                    <textarea rows="5" id="review_comment" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" required></textarea>

                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('comment') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="fas fa-ban"></span> Cancel</a>
                                <button class="btn btn-success btn-lg" type="submit">Submit</button>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
                @foreach($movie->reviews as $review)
                    <div class="row review">
                        <div class="col-md-12">
                            <strong>{{$review->name}}</strong> <span class="pull-right">{{$review->created_at->diffForHumans()}}</span>
                            <p>{{$review->comment}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection