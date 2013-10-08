<?php

class Document extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function topics()
	{
		return $this->belongsToMany('Topic', 'document_topic');
	}
}