<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countrySqlFile = public_path('assets/backend/countries.sql');
        if (File::exists($countrySqlFile)) {
            $sql = File::get($countrySqlFile);
            DB::unprepared($sql);
        }
    }
}
