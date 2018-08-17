<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use exception;

class Candidate extends Model
{
    public static function findCandidate($skills)
    {
        return DB::select("SELECT `users`.`email`, `users`.`name`, `identities`.`telp`, photos.`photo`
                            FROM `users`
                            INNER JOIN `identities` ON users.`email` = `identities`.`email`
                            INNER JOIN `photos` ON `identities`.`email` = `photos`.`email`
                            WHERE `identities`.`email` IN(
                                SELECT DISTINCT skills.`email`
                                FROM skills
                                WHERE skill IN (" . implode(', ', $skills) . ")
                            )
                            AND users.`type` = 1");
    }
}
