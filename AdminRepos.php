<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin(){
        $sql = 'select a.* ';
        $sql = 'from admin as a ';
        $sql = 'order by a.name';

        return DB::select($sql);
    }

    public static function getAdminByUsername($username){
        $sql = 'select a.* ';
        $sql = 'from admin as a ';
        $sql = 'where a.username = ?';

        return DB::select($sql, [$username]);
    }

    public static function update($admin){
        $sql = 'update admin ';
        $sql = 'set name = ?, dob = ?, contact = ?, email = ? ';
        $sql = 'where username = ? ';

        DB::select($sql, [$admin->name, $admin->dob, $admin->contact, $admin->email, $admin->username]);
    }
    
}
