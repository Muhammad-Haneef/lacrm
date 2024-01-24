@extends('layouts.admin')

@section('content')
  
<x-card>
        <x-slot name="body">
          
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th class="col-1 text-center">#</th>
                  <th>Matter #</th>
                  <th>Description</th>
                  <th>Client</th>
                  <th>Lawyer/Caseworker</th>
                  <th>Area of Law</th>
                  <th>Priority</th>
                  <th>Status</th>
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
                      
                      <td>{{$row->matter_number}}</td>      
                      <td>{{$row->description}}</td>      
                      <td>{{$row->lead_id}}</td>      
                      <td>{{$row->originated_by}}</td>      
                      <td>{{$row->area_of_law_id}}</td>      
                      <td>{{$row->priority_id}}</td>      
                      <td>{{$row->matter_status_id}}</td> 
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