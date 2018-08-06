<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IdentitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::delete('delete from identities');
    	DB::delete('delete from users');
    	
    	DB::insert('insert into users(name, email, password, type, created_at, updated_at) values(:name, :email, :password, :type, :created_at, :updated_at)', [
    		'name' => 'Susila Handika',
    		'email' => 'susilaandika@gmail.com',
    		'password' => bcrypt('rahasia'),
    		'type' => '1',
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);

        DB::insert('insert into identities (name, telp, email, birthday, gender, married, address, created_at, updated_at) values (:name, :telp, :email, :birthday, :gender, :married, :address, :created_at, :updated_at)', [
			'name'       => 'Susila Hadika',
			'telp'       => '081936038572',
			'email'      => 'susilaandika@gmail.com',
			'birthday'   => '2018-07-05',
			'gender'     => 'P',
			'married'    => 'Y',
			'address'    => 'Jalan tukad petanu, Denpasar',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
        ]);

        DB::insert('insert into educations (email, level_id, education_loc_id, major, value, from_date, to_date) values (:email, :level_id, :education_loc_id, :major, :value, :from_date, :to_date)', [
            'email'            => 'susilaandika@gmail.com',
            'level_id'         => 1,
            'education_loc_id' => 1,
            'major'            => '',
            'value'            => 9,
            'from_date'        => '2018-01-01',
            'to_date'          => '2018-01-01'
        ]);
    }
}