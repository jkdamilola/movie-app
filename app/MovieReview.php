<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieReview extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'movie_id',
        'name',
        'comment'
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
        'movie_id' => 'integer',
        'name' => 'string',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'movie_id' => 'required',
        'name' => 'required',
        'comment' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
