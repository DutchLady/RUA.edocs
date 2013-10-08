<?php

return array(
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Roles',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'role',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Role',

	'filters' => array(
	'name' => array(
    	'title' => 'Role name',
    	'type' => 'text',
		)
	),


	'columns' => array(
		'name' => array(
			'title' => 'Name',
		)
	),

	'edit_fields' => array(
    	'name' => array(
        	'title' => 'Name',
        	'type' => 'text',
    	),
		'permissions' => array(
			'title' => 'Permissions',
			'type' => 'relationship',
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