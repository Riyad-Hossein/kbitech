<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
             'slug' => Str::slug($type['name']),
             'created_at' => $type['created_at'],
           ]);
        }
    }
}
