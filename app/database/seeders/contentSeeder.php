<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentDetail;
use App\Models\Label;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = Content::factory()
            ->count(10)
            ->has(
                ContentDetail::factory()
                    ->count(2),
                'content_details'
            )
            ->create();

        $contents->each(function ($content) {
            Label::factory()
                ->count(3)
                ->create([
                    'content_id' => $content->id
                ]);
        });
    }
}
