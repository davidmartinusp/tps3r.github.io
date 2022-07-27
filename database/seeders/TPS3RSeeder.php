<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TPS3RModel;

class TPS3RSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TPS3RModel::create([
            'village_kemendagri_code' => '1',
            'transportation_type_id' => '1',
            'trash_box_id' => '1',
            'review_id' => '1',
            'tps3r_name' => 'TPS3R Sekar Tanjung',
            'phone_number' => '085963057687',
            'daily_open' => 'Senin - Sabtu',
            'number_of_employees' => '50',
        ]);
        
    }
}
