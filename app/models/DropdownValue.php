<?php

class DropdownValue extends \Eloquent
{

	protected $fillable = ['value','dropdown_id'];

    public function type()
    {
        return $this->belongsTo('Dropdown');
    }

}
