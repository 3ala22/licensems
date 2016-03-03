<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_types')->truncate();
        DB::table('lookups')->truncate();

        $this->call(ActivityTypesSeeder::class);
        $this->call(LookupsSeeder::class);
    }
}
