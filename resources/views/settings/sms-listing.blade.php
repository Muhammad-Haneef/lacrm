@extends('layouts.admin')
@section('content')  

      <x-card>
        <x-slot name="body">
                    <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th class="col-1 text-center">#</th>
                  <th class="col-1 text-center">Title</th>
                  <th class="col-1 text-center">SMS Text</th>
                  <th class="col-1">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($rows)
                  @foreach ($rows as $row)          
                    <tr>
                      <td class="text-center col-1">
                          {{$loop->iteration}}
                      </td> 
                      <td class="col-2">
                          {{$row->title}}
                      </td>
                      <td>
                          {{$row->description}}
                      </td>      
                      <td class="text-center col-1">
                        <ul class="action"> 
                          <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                          <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </x-slot>
      </x-card>

@endsection