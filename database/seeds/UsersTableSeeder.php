<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        //admin
        DB::table('users')->insert([
            'name'=>'Test Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'phone'=>123456789,
            'address'=>'Testowa 1',
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'admin'

        ]);

        //Patient 1
        DB::table('users')->insert([
            'name'=>'Patient 1',
            'email' => $faker->email,
            'password'=>bcrypt('patient'),
            'phone'=>123456789,
            'address'=>$faker->city,
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'patient'

        ]);

        //Patient 2
        DB::table('users')->insert([
            'name'=>'Patient 2',
            'email' => $faker->email,
            'password'=>bcrypt('patient'),
            'phone'=>123456789,
            'address'=>$faker->city,
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'patient'

        ]);

        //Doctor 1
        DB::table('users')->insert([
            'name'=>'Doctor 1',
            'email' => $faker->email,
            'password'=>bcrypt('doctor'),
            'phone'=>123456789,
            'address'=>$faker->city,
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'doctor'

        ]);

        //Doctor 2
        DB::table('users')->insert([
            'name'=>'Doctor 2',
            'email' => $faker->email,
            'password'=>bcrypt('doctor'),
            'phone'=>123456789,
            'address'=>$faker->city,
            'status'=>'Active',
            'pesel'=>'60071581338',
            'type'=>'doctor'

        ]);

        //Specialization 1
        DB::table('specializations')->insert([
            'name'=>'oncology'
        ]);

        //Specialization 2
        DB::table('specializations')->insert([
            'name'=>'surgeon'
        ]);

        //Specialization 3
        DB::table('specializations')->insert([
            'name'=>'internist'
        ]);

    }
}
