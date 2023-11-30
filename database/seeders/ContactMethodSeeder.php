<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\File;
use App\Models\ContactMethod;

class ContactMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path:'database/json_data/contactMethod.json');
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            ContactMethod::create([
                'title'=>$row->title,
                'sort_by'=>$row->sort_by
            ]);
        });
    }
}
