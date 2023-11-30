<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use App\Models\AreaOfLaw;

class AreaOfLawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jSonData=File::get(path:"database/json_data/areaOfLaw.json");
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            AreaOfLaw::create([
                'title'=>$row->title,
                'sort_by'=>$row->sort_by
            ]);
        });
    }
}
