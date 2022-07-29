<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Agistira Lamunde',
            'phone_number' => '083183530014',
            'email' => 'agiistira@gmail.com'
        ]);
    }
}
