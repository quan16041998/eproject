<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class StylistRepos
{
    public static function getAllStylist(){
        $sql = 'select a.* ';
        $sql .= 'from stylist as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getstylistById($SID){
        $sql = 'select a.* ';
        $sql .= 'from stylist as a ';
        $sql .= 'where a.SID = ?';

        return DB::select($sql, [$SID]);
    }

    public static function update($stylist){
        $sql = 'update stylist ';
        $sql .= 'set name = ?, dob = ?, contact = ?, email = ?, history = ?, urlimg = ? ';
        $sql .= 'where SID = ? ';

        DB::update($sql, [$stylist->name, $stylist->dob, $stylist->contact, $stylist->email,
            $stylist->history, $stylist->urlimg, $stylist->SID]);
    }

    public static function delete($SID){
        $sql = 'delete from stylist ';
        $sql .= 'where SID = ? ';

        DB::delete($sql, [$SID]);
    }


    public static function insert($stylist){
        $sql = 'insert into stylist ';
        $sql .= '(name, dob, contact, email, history, urlimg) ';
        $sql .= 'values(?, ?, ?, ?, ?, ?) ';

        $result = DB::insert($sql, [$stylist->name, $stylist->dob, $stylist->contact,
                                    $stylist->email, $stylist->history, $stylist->urlimg]);
        if ($result){
            return DB::getPdo()->lastInsertID();
        }else {
            return -1;
        }
    }
}
