<?php

use KraftHaus\Bauhaus\Admin;

class InsuranceOptionAdmin extends Admin
{
	public function configureList($mapper)
	{
		// Render the title in the overview
		$mapper->identifier('name');
		$mapper->belongsTo('type')->display('name');

	}

	public function configureForm($mapper)
	{
		// Render a text field and a wysiwyg editor
		$mapper->text('name');
		$mapper->number('sort_index');
		//$mapper->text('type_id');
		$mapper->belongsTo('type')->display('name');
	}
}