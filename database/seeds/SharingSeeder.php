<?php

use Illuminate\Database\Seeder;

class SharingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO Ort VALUES (1, 'Deutschland', NOW(), NOW())");
        DB::insert("INSERT INTO FMarke VALUES(1,'Fischer', NOW(),NOW())");
    }
}
