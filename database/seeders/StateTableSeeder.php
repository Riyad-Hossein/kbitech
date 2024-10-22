<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = public_path().'/resource-db/states.json';
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $c) {
            $data = [
                'id' => $c['id'],
                'name' => $c['name'],
                'short_name' => $c['short_name']
            ];
            State::create($data);
        }
    }
}
