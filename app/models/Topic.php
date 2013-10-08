<?php

class Topic extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function documents()
	{
		return $this->belongsToMany('Document', 'document_topic');
	}
}