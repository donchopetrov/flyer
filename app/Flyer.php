<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	/**
	 * Fillable fields for the flyer
	 * 
	 * @var array
	 */
	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description',
	];

	/**
	 * Find the flyer at the given address
	 * 
	 * @param  Builder 	$query
	 * @param  string 	$zip
	 * @param  string 	$street
	 * @return Builder
	 */
	public static function located($zip, $street)
    {
    	$zip = str_replace('-', ' ', $zip);
    	$street = str_replace('-', ' ', $street);

    	return static::where(compact('zip', 'street'))->firstOrFail();
    }

    public function addPhoto(Photo $photo)
    {
    	return $this->photos()->save($photo);
    }

    public function getPriceAttribute($price)
    {
    	return '$' . number_format($price);
    }

	/**
	 * A flyer can have many photos
	 * 
	 * @return Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }
}
