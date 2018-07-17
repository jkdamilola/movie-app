<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\MovieGenres;

class Genre extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'genre_type',
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
        'genre_type' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'genre_type' => 'required',
    ];

    public function setGenreTypeAttribute($value)
    {
        $this->attributes['genre_type'] = ucfirst($value);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function movieGenres()
    {
        return $this->hasMany(MovieGenre::class, 'genre_id');
    }
}
