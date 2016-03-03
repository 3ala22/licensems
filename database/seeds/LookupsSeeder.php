<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LookupsSeeder extends Seeder
{

    protected $lookups = ['legalTypes'];

    protected $legalTypesData = [
        "Limited Liability Company(LLC)",
        "Partnership Company",
        "Private Joint Stock Company",
        "Sole Establishment",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataToInsert = [];


        foreach ($this->lookups as $lookupName) {
            $lookupData = $this->{$lookupName . "Data"};
            $now = date('Y-m-d H:i:s');

            foreach ($lookupData as $lookupId => $lookupValue) {
                $dataToInsert [] = [
                    "lookup_name" => $lookupName,
                    "lookup_id" => $lookupId + 1,
                    "value" => $lookupValue,
                    "created_at" => $now,
                    "updated_at" => $now
                ];
            }
        }

        DB::table('lookups')->insert($dataToInsert);

    }


}

