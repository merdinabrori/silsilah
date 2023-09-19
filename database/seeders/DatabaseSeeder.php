<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\Relation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Person::create([
            'nama' => 'Udin Sanudin',
            'nik' => '001',
            'gender' => 0,
            'status' => 1
        ]);
        Person::create([
            'nama' => 'Ini',
            'nik' => null,
            'gender' => 1,
            'status' => 0
        ]);
        Person::create([
            'nama' => 'Ana',
            'nik' => '004',
            'gender' => 1,
            'status' => 0
        ]);
        Person::create([
            'nama' => 'Situ',
            'nik' => '005',
            'gender' => 0,
            'status' => 0
        ]);
        Person::create([
            'nama' => 'Aba',
            'nik' => '007',
            'gender' => 0,
            'status' => 1
        ]);
        Person::create([
            'nama' => 'Embu',
            'nik' => null,
            'gender' => 1,
            'status' => 0
        ]);
        Person::factory(5)->create();

        // relation table
        Relation::create([
            'id_1' => 1,
            'id_2' => 3,
            'hubungan' => 0
        ]);
        Relation::create([
            'id_1' => 1,
            'id_2' => 4,
            'hubungan' => 1
        ]);
        Relation::create([
            'id_1' => 1,
            'id_2' => 5,
            'hubungan' => 3
        ]);
        Relation::create([
            'id_1' => 1,
            'id_2' => 6,
            'hubungan' => 3
        ]);
    }
}
