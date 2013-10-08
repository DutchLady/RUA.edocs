<?php

return array(
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Users',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'user',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'User',

	'filters' => array(
	'username' => array(
    	'title' => 'Username',
    	'type' => 'text',
		)
	),


	'columns' => array(
		'username' => array(
			'title' => 'Username',
		),
		'email' => array(
			'title' => 'Email',
		),
		'confirmed' => array(
			'title' => 'Activated',
		),
		'created_at' => array(
		    'title' => 'Created At',
		),
		'roles' => array(
		    'title' => "Roles",
		    'relationship' => 'roles', //this is the name of the Eloquent relationship method!
		    'select' => "GROUP_CONCAT((:table).name)", //Query to output table : roles, field : name, only shows one role. Adding more will break the view
	    )
	),

	'edit_fields' => array(
    	'username' => array(
        	'title' => 'Username',
        	'type' => 'text',
    	),
    	'email' => array(
			'title' => 'Email',
			'type' => 'text',
		),
		'password' => array(
        	'title' => 'Password',
        	'type' => 'password',
        	'placeholder' => 'Only for creation',
    	),
    	'password_confirmation' => array(
    		'title' => 'Password Confirmation',
        	'type' => 'password',
		),
		'confirmed' => array(
			'title' => 'Activated',
			'type' => 'bool',
		),
		'roles' => array(
		    'type' => 'relationship',
		    'title' => 'Roles',
		    'name_field' => 'name',
		)
    ),

    /**
	 * The action_permissions option lets you define permissions on the four primary actions: 'create', 'update', 'delete', and 'view'.
	 * It also provides a secondary place to define permissions for your custom actions.
	 *
	 * @type array
	 */
	// 'action_permissions'=> array(
	//     'delete' => function($User)
	//     {
	//         return true;
	//     }
	// ),

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