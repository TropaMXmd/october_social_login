<?php namespace Tropa\Movies\Models;

use Model;

/**
 * Movie Model
 */
class Movie extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tropa_movies_movies';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
