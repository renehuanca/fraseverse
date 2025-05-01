<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'motivacion'],
            ['name' => 'éxito'],
            ['name' => 'superación'],
            ['name' => 'amor'],
            ['name' => 'liberdad'],
            ['name' => 'conocimiento'],
            ['name' => 'sabiduria'],
            ['name' => 'tiempo'],
            ['name' => 'felicidad'],
            ['name' => 'proposito'],
            ['name' => 'mente'],
            ['name' => 'verdad'],
            ['name' => 'cambio'],
            ['name' => 'resilencia'],
            ['name' => 'vida'],
            ['name' => 'conciencia'],
            ['name' => 'esperanza'],
            ['name' => 'autoestima'],
            ['name' => 'inspiración'],
            ['name' => 'perseverancia'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
