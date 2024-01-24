@extends('layouts.admin')

@section('content')
    <div class="row size-column">
        @if ($rows)
            <div class="col-xxl-9 col-md-12 box-col-8 grid-ed-12">
                @foreach ($rows as $row)
                    <x-card>
                        <div class="row">
                            <div class="col-6">
                                <h5>
                                    {{$row->name}}
                                </h5>
                                <div>
                                    {{-- <i class="icofont icofont-email "></i> --}}
                                    <i class="icofont icofont-send-mail"></i>
                                    <a href="mailto:{{$row->email}}">
                                        {{$row->email}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                            
                                <x-call contect="{{$row->phone}}" />
                                |
                                <x-call contect="{{$row->mobile}}" icon="stock-mobile" />                                
                                |
                                
                                <i class="icofont icofont-brand-whatsapp"></i>
                                <a href="whatsapp:{{$row->whatsapp}}">
                                    {{$row->whatsapp}}
                                </a>
                            </div>
                        </div>
                        <div class="row  align-items-center">
                            <div class="col-md-4 col-12">
                                <div>
                                    <strong>Area of Law :</strong> {{$row->area_of_law->title}}
                                </div>
                                <div>
                                    <strong>Assigned to : </strong>
                                </div>
                                <div>
                                    <strong>Source :</strong> {{$row->lead_source->title}}
                                </div>
                            </div>
                            <div class="col-md-4 text-center col-12">
                                <div>
                                    <i class="icofont icofont-building-alt"></i>
                                    <strong>Organization</strong>
                                </div>
                                <div>
                                    {{$row->organization->name}}
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <i class="icofont icofont-teacher icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Assign Lawyer"></i>
                                        <i class="icofont icofont-ui-email icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Email"></i>
                                        <i class="icofont icofont-ui-chat icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send SMS"></i>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <i class="icofont icofont-open-eye icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details"></i>
                                        <i class="icofont icofont-ui-edit icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Lead"></i>
                                        <i class="icofont icofont-ui-delete icon-btn shadow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Lead"></i>
                                    </div>
                                </div>
                            </div>
                                                        
                        </div>
                    </x-card>
                @endforeach

                <div class="mb-4">
                {{$rows->links('pagination::bootstrap-5')}}
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-md-4 grid-ed-none box-col-4e d-xxl-block d-none">
                right
            </div>
        @else
            <div class="col-12">
                <x-alert type="danger">
                    Sorry! records not found
                </x-alert>
            </div>
        @endif        
    </div>
@endsection