<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TEMPLATE:
        // [ 'leak' => ''],


        $data = [
            [ 'leak' => 'Rijkentaks'],
            [ 'leak' => 'Panama Papers'],
            [ 'leak' => 'Lux Leaks'],
            [ 'leak' => 'Bahama Leaks'],
            [ 'leak' => 'Swiss Leaks'],
        ];

        $table = DB::table('leaks');
        $table->delete();
        $table->insert($data);
    }
}
