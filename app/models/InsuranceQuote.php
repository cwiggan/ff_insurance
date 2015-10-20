<?php

class InsuranceQuote extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'insurance_quote';

	protected $fillable = ['name', 'start_time','end_time'];

    public function options()
    {
        return $this->hasMany('InsuranceOption');
    }

}