<?php

namespace Database\Seeders;

use App\Models\Phrase;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhraseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phrases = Phrase::all();
        $tags = Tag::all();

        $phrases->each(function ($phrase) use ($tags) {
            // select 1 or 4 random tags for each phrase
            $phrase->tags()->attach(
                $tags->random(rand(1, 4))->pluck('id')->toArray()
            );
        });
    }
}
