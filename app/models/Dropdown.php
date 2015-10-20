<?php

class Dropdown extends \Eloquent
{

	protected $fillable = ['text','type_id'];
	

    public function options()
    {
        return $this->hasMany('DropdownValue');
    }
    public function type()
    {
        return $this->belongsTo('InsuranceType');
    }
}
