<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieGenre extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    public $fillable = [
        'movie_id',
        'genre_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'movie_id' => 'integer',
        'genre_id' => 'integer'
    ];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movie_id' => 'required',
        'genre_id' => 'required'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id')->select(['id', 'name', 'description', 'release_date', 'rating', 'ticket_price', 'country', 'photo']);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id')->select(['id', 'genre_type']);
    }
}
