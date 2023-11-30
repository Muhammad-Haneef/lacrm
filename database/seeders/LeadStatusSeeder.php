<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;
use App\Models\LeadStatus;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path:'database/json_data/leadStatus.json');
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            LeadStatus::create([
                'bg_color'=>$row->bg_color,                
                'text_color'=>$row->text_color,                
                'title'=>$row->title,                
                'sort_by'=>$row->sort_by
            ]);
        });
    }
}
