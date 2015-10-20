<?php

class Location extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $fillable = ['name', 'address','city', 'state'];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsToMany('User');
    }

}