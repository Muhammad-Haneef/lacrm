<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;
use App\Models\Priority;


class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path:'database/json_data/priority.json');
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            Priority::create([
                'title'=>$row->title,
                'color'=>$row->color,
                'sort_by'=>$row->sort_by
            ]);
        });
    }
}
