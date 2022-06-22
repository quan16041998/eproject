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
    
    public static function getAllcustomer(){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getcustomerById($ID){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'where a.id = ?';

        return DB::select($sql, [$ID]);
    }

    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ?, address = ?';
        $sql .= 'where ID = ? ';

        DB::update($sql, [$customer->name, $customer->dob, $customer->contact, $customer->email,
            $customer->history,$customer->ID]);
    }
}
