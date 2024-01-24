@extends('layouts.admin')
@section('content')  

      <x-card>
        <x-slot name="body">
          
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th class="col-1 text-center">#</th>
                  <th class="col-1 text-center">Color</th>
                  <th>Title</th>
                  <th class="col-1">Sort Order</th>
                  <th class="col-1">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($rows)
                  @foreach ($rows as $row)          
                    <tr>
                      <td class="text-center">
                          {{$loop->iteration}}
                      </td>      
                      <td class="text-center">
                          <span class="color-swatch shadow-sm" style="background-color:{{$row->color}}">
                          </span>
                      </td>      
                      <td>
                          {{$row->title}}
                      </td>      
                      <td class="text-center">
                          {{$row->sort_by}}
                      </td>
                      <td class="text-center">
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