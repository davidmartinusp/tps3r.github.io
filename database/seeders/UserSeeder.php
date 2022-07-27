<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserModel::create([
            'user_category_id' => '1',
            'item_id' => '1',
            'tps3r_id' => '1',
            'name' => 'David',
            'email' => 'iputudavid4@gmail.com',
            'gender' => 'Laki-laki',
            'no_telp' => '085737854965',
            'password' => Hash::make('david')
        ]);
    }
}
