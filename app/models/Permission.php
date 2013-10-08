<?php

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	public function roles()
	{
		return $this->belongsToMany('Role', 'permission_role');
	}
}