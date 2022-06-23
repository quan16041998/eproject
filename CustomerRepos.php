<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomer(){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getsCustomerById($ID){
        $sql = 'select a.* ';
        $sql .= 'from customer as a ';
        $sql .= 'where a.ID = ?';

        return DB::select($sql, [$ID]);
    }

    public static function update($customer){
        $sql = 'update customer ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ?, address = ?,';
        $sql .= 'where ID = ? ';

        DB::update($sql, [$customer->name, $customer->dob, $customer->contact, $customer->email,
            $customer->address, $customer->ID]);
    }
}
