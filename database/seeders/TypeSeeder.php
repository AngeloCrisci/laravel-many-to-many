<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $typesName = [
            "Front-end",
            "Back-end",
            "Full-Stack",
            "Data-base",
        ];

        foreach ($typesName as $name){
            $newType = new Type();
            $newType->name = $name;
            $newType->save();
        }

    }
}
