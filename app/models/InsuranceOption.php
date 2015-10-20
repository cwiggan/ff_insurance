<?php

class InsuranceOption extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'insurance_options';

	protected $fillable = ['name', 'sort_index','type_id'];

    public function type()
    {
        return $this->belongsTo('InsuranceType');
    }

}