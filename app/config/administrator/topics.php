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
	'title' => 'Topics',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'topic',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Topic',

	'columns' => array(
		'name' => array(
			'title' => 'Name',
		)
	),

	'edit_fields' => array(
    	'name' => array(
        'title' => 'Name',
        'type' => 'text'
    	),
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