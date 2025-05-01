<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Filosofía', 'description' => 'Frases relacionadas con la filosofía y el pensamiento crítico.'],
            ['name' => 'Informática', 'description' => 'Frases relacionadas con la tecnología y la programación.'],
            ['name' => 'Economía', 'description' => 'Frases relacionadas con la economía y las finanzas.'],
            ['name' => 'Historia', 'description' => 'Frases relacionadas con eventos históricos y personajes importantes.'],
            ['name' => 'Arte', 'description' => 'Frases relacionadas con el arte y la creatividad.'],
            ['name' => 'Ciencia', 'description' => 'Frases relacionadas con descubrimientos y avances científicos.'],
            ['name' => 'Literatura', 'description' => 'Frases de libros, autores y poesía.'],
            ['name' => 'Psicología', 'description' => 'Frases sobre la mente, emociones y comportamiento humano.'],
            ['name' => 'Religión', 'description' => 'Frases relacionadas con la espiritualidad y creencias religiosas.'],
            ['name' => 'Política', 'description' => 'Frases sobre liderazgo, poder y gobernanza.'],

            ['name' => 'Amor', 'description' => 'Frases románticas y sobre el amor.'],
            ['name' => 'Motivación', 'description' => 'Frases inspiradoras y motivacionales.'],
            ['name' => 'Educación', 'description' => 'Frases sobre aprendizaje, enseñanza y conocimiento.'],
            ['name' => 'Naturaleza', 'description' => 'Frases sobre el medio ambiente, animales y paisajes.'],
            ['name' => 'Deportes', 'description' => 'Frases sobre esfuerzo, trabajo en equipo y logros deportivos.'],
            ['name' => 'Viajes', 'description' => 'Frases sobre explorar el mundo y nuevas culturas.'],
            ['name' => 'Amistad', 'description' => 'Frases sobre relaciones de amistad y compañerismo.'],
            ['name' => 'Familia', 'description' => 'Frases sobre la importancia de los lazos familiares.'],
            ['name' => 'Salud', 'description' => 'Frases sobre bienestar físico y mental.'],
            ['name' => 'Humor', 'description' => 'Frases divertidas y humorísticas.'],
            ['name' => 'Ética', 'description' => 'Frases sobre moralidad y valores.'],
            ['name' => 'Tecnología', 'description' => 'Frases sobre innovación y el impacto de la tecnología.'],
            ['name' => 'Trabajo', 'description' => 'Frases sobre esfuerzo, dedicación y éxito profesional.'],
            ['name' => 'Música', 'description' => 'Frases sobre el poder de la música y su impacto.'],
            ['name' => 'Cultura', 'description' => 'Frases sobre tradiciones, costumbres y diversidad cultural.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
