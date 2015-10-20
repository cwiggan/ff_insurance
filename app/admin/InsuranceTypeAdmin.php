<?php

use KraftHaus\Bauhaus\Admin;

class InsuranceTypeAdmin extends Admin
{
	public function configureList($mapper)
	{
		// Render the title in the overview
		$mapper->identifier('name');
		$mapper->string('description');
	}

	public function configureForm($mapper)
	{
		// Render a text field and a wysiwyg editor
		$mapper->text('name');
		$mapper->text('description');
	}
}