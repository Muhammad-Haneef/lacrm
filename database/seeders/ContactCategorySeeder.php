<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ContactCategory;
use illuminate\Support\Facades\File;

class ContactCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jSonData = File::get(path:'database\json_data\contactCategory.json');
        $data = collect(json_decode($jSonData));
        $data->each(function($row){
            ContactCategory::create([
                'title'=>$row->title,
                'sort_by'=>$row->sort_by
            ]);
        });

    }
}
