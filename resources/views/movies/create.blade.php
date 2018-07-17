@extends('layouts.app')

@section('title', 'Create Movie')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Movie</div>
                <div class="card-body">
                    @include('flash::message')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/movies/create') }}" aria-label="New Movie" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Movie Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>

                            <div class="col-md-8">
                                <textarea rows="5" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-md-3 col-form-label text-md-right">Release Date</label>

                            <div class="col-md-8">
                                <input id="release_date" type="date" class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}" name="release_date" required>

                                @if ($errors->has('release_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('release_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rating" class="col-md-3 col-form-label text-md-right">Rating</label>

                            <div class="col-md-8">
                                <select id="rating" type="rating" class="form-control" name="rating" required>
                                    @for ($i=1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                @if ($errors->has('rating'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rating') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-3 col-form-label text-md-right">Genre</label>

                            <div class="col-md-8">
                                <select id="genre" type="genre" class="form-control selectpicker" name="genres[]" multiple required>
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->genre_type }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ticket_price" class="col-md-3 col-form-label text-md-right">Ticket Price</label>

                            <div class="col-md-8">
                                <input id="ticket_price" type="amount" class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" name="ticket_price" required>

                                @if ($errors->has('ticket_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ticket_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-3 col-form-label text-md-right">Country</label>

                            <div class="col-md-8">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-3 col-form-label text-md-right">Photo</label>

                            <div class="col-md-8">
                                <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" value="{{ old('photo') }}" required>

                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary justify-content-center">
                                    <i class="fas fa-btn fa-save"></i> Create Movie
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection