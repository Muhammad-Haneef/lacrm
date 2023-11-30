<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;
use App\Models\PredefineSms;


class PredefineSmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path:'database/json_data/predefineSms.json');
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            PredefineSms::create([
                'title'=>$row->title,
                'description'=>$row->description
            ]);
        });
    }
}
