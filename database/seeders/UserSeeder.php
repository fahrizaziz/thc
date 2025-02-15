<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'PIC Community',
            'email' => 'community@telkomedika.id',
            'password' => bcrypt('Telkomedika@2025#!'),
        ]);
        // $userData = [
        //     [
        //         [
        //             'name' => 'PIC Community',
        //             'email' => 'community@telkomedika.id',
        //             'password' => bcrypt('Telkomedika@2025#!'),
        //             // 'role' => 'koordinator pic community',
        //             // 'clinic_id' => null, // Tidak terkait dengan clinic
        //         ],
        //         [
        //             'name' => 'PIC Participant',
        //             'email' => 'participant@telkomedika.id',
        //             'password' => bcrypt('Telkomedika@2025#!'),
        //             // 'role' => 'koordinator pic participant',
        //             // 'clinic_id' => null, // Tidak terkait dengan clinic
        //         ],
        //         [
        //             'name' => 'PIC Product',
        //             'email' => 'product@telkomedika.id',
        //             'password' => bcrypt('Telkomedika@2025#!'),
        //             // 'role' => 'koordinator pic product',
        //             // 'clinic_id' => null, // Tidak terkait dengan clinic
        //         ],
        //     ],
        // ];
        // foreach ($userData as $key => $val) {
        //     User::create($val);
        // }
    }
}
