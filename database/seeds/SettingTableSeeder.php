<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $levels = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
    	
        DB::delete('delete from levels');
        foreach ($levels as $level) {
            DB::insert('insert into levels(level_name) values(:level_name)', [
                'level_name' => $level,
            ]);
        }

    }
}