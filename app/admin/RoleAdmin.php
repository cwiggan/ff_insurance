<?php

use KraftHaus\Bauhaus\Admin;

class RoleAdmin extends Admin
{
	public function configureList($mapper)
	{
		// Render the title in the overview
		$mapper->identifier('name');
	}

	public function configureForm($mapper)
	{
		// Render a text field and a wysiwyg editor
		$mapper->text('name');
		//$mapper->belongsTo('type')->display('name');
	}
}