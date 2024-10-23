<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = array(
            array(
                'id' => '1',
                'name' => 'Marine Service',
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '2',
                'name' => 'Indutrial Equipment',
                'created_at' => Carbon::now(),
            ),
         );

         foreach ($types as $type) {
            BusinessType::create([
             'id' => $type['id'],
             'name' => $type['name'],
             'created_at' => $type['created_at'],
           ]);
        }
    }
}
