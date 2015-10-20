<?php

class Profile extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $fillable = ['name', 'phone'];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
    public function location()
    {
        return $this->hasOne('Location');
    }
}