<?php

class Category extends \Eloquent
{

	protected $fillable = ['name'];
	
    public function type()
    {
        return $this->belongsTo('InsuranceType');
    }
}