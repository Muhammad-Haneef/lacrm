@extends('layouts.admin')
@section('content')  

      <x-card>
        <x-slot name="body">
          <x-setting-title-listing :dtData="$data" />
        </x-slot>
      </x-card>

@endsection