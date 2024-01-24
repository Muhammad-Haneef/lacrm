@extends('layouts.admin')
@section('content')  

      <x-card>
        <x-slot name="body">
          <x-setting-title-listing :rows="$rows" />
        </x-slot>
      </x-card>

@endsection