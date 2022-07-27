<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrashBoxModel;

class TrashBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrashBoxModel::create([
            'type_of_trash' => 'Plastik',
            'trash_weight' => '10Kg',
            'sensor_status' => 'Available',
            'transport_status' => 'On The Way'
        ]);
    }
}
