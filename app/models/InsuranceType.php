<?php

class InsuranceType extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'insurance_type';

	protected $fillable = ['name', 'description'];

    public function options()
    {
        return $this->hasMany('InsuranceOption');
    }

}