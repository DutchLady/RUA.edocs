<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends ConfideUser {
	use HasRole;
	public function roles()
	{
		return $this->belongsToMany('Role', 'assigned_roles');
	}

	    public function thisName()
    {
        return $this->username;
    }
	
}