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
	'title' => 'Documents',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'document',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Document',

	'filters' => array(
    	'id' => array(
        	'title' => 'Document ID',
        	'type' => 'key',
    	)
	),

	'columns' => array(
		'name' => array(
			'title' => 'Name',
		),
		'author' => array(
			'title' => 'Author',
		),
		'created_at' => array(
		    'title' => 'Created At',
		),
		'topics' => array(
		    'title' => "Topic",
		    'relationship' => 'topics', //this is the name of the Eloquent relationship method!
		    'select' => "GROUP_CONCAT((:table).name)", //Query to output table : roles, field : name, only shows one role. Adding more will break the view
	    )
	),

	'edit_fields' => array(
    	'name' => array(
        	'title' => 'Name',
        	'type' => 'text',
    	),
    	'author' => array(
        	'title' => 'Author',
        	'type' => 'text',
    	),
    	'content' => array(
        	'title' => 'Synopsis',
        	'type' => 'wysiwyg',
    	),
    	'file' => array(
    		'title' => 'File',
    		'type' => 'file',
    		'location' => storage_path() . '/media_documents/',
    		'naming' => 'random',
    		'length' => 20,
    		'size_limit' => 20,
    		'mimes' => 'pdf',
		),
		'topics' => array(
        	'title' => 'Topic',
        	'type' => 'relationship',
        	'autocomplete' => true,
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