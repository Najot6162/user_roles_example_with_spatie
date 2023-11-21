<?php

namespace Database\Seeders;

use App\Models\employes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        employes::create([
            'name'=>'Ali'
        ]);
        employes::create([
            'name'=>'Vali'
        ]);
        employes::create([
            'name'=>'sobir'
        ]);
        employes::create([
            'name'=>'Gani'
        ]);
    }
}
