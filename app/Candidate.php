<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use exception;

class Candidate extends Model
{
    public static function findCandidate($request)
    {
        $skills = $request->input('skill');

        if (isset($skills)) {
            $query = "WHERE skill IN (" . implode(', ', $skills) . ")";
        } else{
            $query = "";
        }

        return DB::select("SELECT `users`.`email`, `users`.`name`, `identities`.`telp`, photos.`photo`
                            FROM `users`
                            INNER JOIN `identities` ON users.`email` = `identities`.`email`
                            INNER JOIN `photos` ON `identities`.`email` = `photos`.`email`
                            WHERE `identities`.`email` IN(
                                SELECT DISTINCT skills.`email`
                                FROM skills
                                $query
                            )
                            AND users.`type` = 1");
    }
}
