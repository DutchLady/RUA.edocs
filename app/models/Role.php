<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	public function users()
	{
		return $this->belongsToMany('User', 'assigned_roles');
	}

	public function permissions()
	{
		return $this->belongsToMany('Permission', 'permission_role');
	}
}