<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $fullstack = Type::where("name" , "Full-stack")->first();
       $frontend = Type::where("name" , "Front-end")->first();
       $backend = Type::where("name" , "Back-end")->first();
       $database = Type::where("name" , "Data-base")->first();


            Project::create([
                "name" => "laravelComics",
                "date" => "31-10-2024",
                "description" => "Progetto su Laravel incentrato sulle CRUD",
                "link" => "https://github.com/AngeloCrisci/laravel-dc-comics",
                "type_id" => $fullstack->id,
            ]);
            Project::create([
                "name" => "phpOOP2",
                "date" => "05-10-2024",
                "description" => "Progetto su plain PHP icentrato sulle OOP",
                "link" => "https://github.com/AngeloCrisci/php-oop-2",
                "type_id" => $backend->id,
            ]);
            Project::create([
                "name" => "db-univeristy",
                "date" => "15-10-2024",
                "description" => "Progetto è un esercizio SQL volto a praticare l'uso di operazioni avanzate come JOIN, GROUP BY e funzioni di aggregazione",
                "link" => "https://github.com/AngeloCrisci/db-university",
                "type_id" => $database->id,
            ]);
            Project::create([
                "name" => "project vuejs",
                "date" => "08-09-2024",
                "description" => "Progetto di gruppo sull'implementazione JS con Framework VUE",
                "link" => "https://github.com/AngeloCrisci/proj-html-vuejs",
                "type_id" => $frontend->id,
            ]);


    }
}
