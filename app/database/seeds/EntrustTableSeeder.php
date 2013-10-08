<?php

class EntrustTableSeeder extends Seeder {

    public function run()
    {
        //Roles
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $userRole = new Role;
        $userRole->name = 'user';
        $userRole->save();

        //Attach role
        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole ); 

        // $user = User::where('username','=','user')->first();
        // $user->attachRole( $userRole );

        //Permissions
        DB::table('permissions')->delete();

        $manageDocs = new Permission;
        $manageDocs->name = 'manage_docs';
        $manageDocs->display_name = 'Manage Docs';
        $manageDocs->save();

        $manageUsers = new Permission;
        $manageUsers->name = 'manage_users';
        $manageUsers->display_name = 'Manage Users';
        $manageUsers->save();

        $searchDocs = new Permission;
        $searchDocs->name = 'search_docs';
        $searchDocs->display_name = 'Search Docs';
        $searchDocs->save();

        $adminRole->perms()->sync(array($manageDocs->id,$manageUsers->id,$searchDocs->id));
        $userRole->perms()->sync(array($searchDocs->id));
    }

}
