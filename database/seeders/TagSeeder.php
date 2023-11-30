<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tSonData = File::get(path: 'database/json_data/tag.json');
        $data = collect(json_decode($tSonData));
        $data->each(function ($row) {
            Tag::create([
                'title' => $row->title,
                'sort_by' => $row->sort_by
            ]);
        });
    }
}
