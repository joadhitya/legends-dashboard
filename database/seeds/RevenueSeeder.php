<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement((string) file_get_contents(database_path('raws/revenues.sql')));
    }
}
