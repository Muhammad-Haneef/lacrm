@extends('layouts.admin')

@section('content')  

@php
    $records =
    [
        [
            "link"=>"area-of-law",
            "icon"=>"bin",
            "title"=>"Area Of Law",
            "des"=>"100 records"
        ],
        [
            "link"=>"departments",
            "icon"=>"customers",
            "title"=>"Departments",
            "des"=>"100 records"
        ],
        [
            "link"=>"lead-status",
            "icon"=>"sale",
            "title"=>"Lead Status",
            "des"=>"100 records"
        ],
        [
            "link"=>"contact-categories",
            "icon"=>"return-box",
            "title"=>"Contact Categories",
            "des"=>"100 records"
        ],
        [
            "link"=>"contact-methods",
            "icon"=>"call",
            "title"=>"Contact Methods",
            "des"=>"100 records"
        ],
        [
            "link"=>"matter-status",
            "icon"=>"halfcircle",
            "title"=>"Matter Status",
            "des"=>"100 records"
        ],
        [
            "link"=>"task-status",
            "icon"=>"tag",
            "title"=>"Task Status",
            "des"=>"100 records"
        ],
        [
            "link"=>"priorities",
            "icon"=>"rate",
            "title"=>"Priority",
            "des"=>"100 records"
        ],
        [
            "link"=>"tags",
            "icon"=>"tag",
            "title"=>"Tags",
            "des"=>"100 records"
        ],
        [
            "link"=>"predefine-sms",
            "icon"=>"sms-white",
            "title"=>"Pre-Define SMS",
            "des"=>"100 records"
        ]
    ]

/*
[
    "link"=>"predefine-email",
    "icon"=>"fill-email",
    "title"=>"Pre-Define Email",
    "des"=>"100 records"
]
*/

@endphp

    <div class="row">
        @foreach ($records as $row)
            {{-- Style 1 --}}
            {{-- <x-setting-widget link="{{$row['link']}}" icon="{{$row['icon']}}" title="{{$row['title']}}" des="{{$row['des']}}" />     --}}

            {{-- 
                Style 2 

                NOTE:
                if you pass data to component like this data="$row" it will treat it like sting
                if you pass data to component like this :data="$row" it will treat it like array
            --}}
            <x-setting-widget :data="$row" id="widget-id-{{rand(1,3000)}}" name="widget-id-{{rand(1,3000)}}" />    
        @endforeach
    </div>
    
@endsection