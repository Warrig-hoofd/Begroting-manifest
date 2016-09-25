<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TEMPLATE:
        // -----------------------
        // ['amount' => ''],

        $data = [
            ['amount' => '100'],
            ['amount' => '1000'],
            ['amount' => '10000'],
            ['amount' => '100000'],
            ['amount' => '1000000']
        ];

        $table = DB::table('amounts');
        $table->delete();
        $table->insert($data);
    }
}
