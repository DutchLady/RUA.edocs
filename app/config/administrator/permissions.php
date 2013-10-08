<?php

/**
 * Films model config
 */

return array(
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Permissions',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'permission',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Permission',

	'columns' => array(
		'display_name' => array(
			'title' => 'Name',
		),
		'name' => array(
			'title' => 'Action'
		)

	),

	'edit_fields' => array(
		'display_name' => array(
			'title' => 'Name',
			'type' => 'text'
		),
		'name' => array(
			'title' => 'Action',
			'type' => 'text'
		)
	),


    /**
	 * The permission option is the per-model authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view this model. Any "falsey" response will result in a 404.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
	    return true;
	}
);