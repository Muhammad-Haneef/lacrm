@extends('layouts.admin')

@section('content')
    <x-card>
        <x-slot name="body">
          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  {{-- <th class="text-center" style="width:30px"></th> --}}
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Mobile</th>
                  <th class="col-1 text-center">Detail</th>
                  <th class="col-1 text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @if($rows)
                  @foreach ($rows as $row)          
                    <tr>
                      {{-- <td class="text-center">
                          <input class="form-check-input checkbox-primary checkbox-20" type="checkbox">
                      </td>  --}}
                      <td>
                        <div class="media">                      
                          <span 
                            tabindex="0" 
                            role="button" 
                            data-bs-toggle="popover" 
                            data-bs-trigger="focus" 
                            data-bs-placement="right"
                            data-bs-title="Contact Details" 
                            data-bs-content='
                                            <div><strong class="me-2"><i class="icofont icofont-ui-dial-phone"></i></strong><x-call contect="{{$row->home_phone}}" icon="" /></div>
                                            <div><strong class="me-2"><i class="icofont icofont-phone-circle"></i>:</strong><x-call contect="{{$row->other_phone}}" icon="" /></div>
                                            <div><strong class="me-2"><i class="icofont icofont-brand-linkedin"></i>:</strong><a href="{{$row->linkedin}}">{{$row->linkedin}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-social-facebook"></i>:</strong><a href="{{$row->facebook}}">{{$row->facebook}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-social-twitter"></i>:</strong><a href="{{$row->twitter}}">{{$row->twitter}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-pin"></i>:</strong>{{$row->adderss}}</div>
                                            ' 
                            data-bs-html=true
                            data-bs-original-title="Lead Details"
                            class="d-none d-md-block"
                          >
                            <img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="../assets/images/avtar/3.jpg" alt="">
                          </span>


                          <div class="media-body">
                            <h6>{{$row->name}}</h6>
                            <p class="email_add_0">{{$row->email}}</p>
                          </div>
                        </div>
                      </td>      
                      <td>
                        <x-call contect="{{$row->phone}}" />
                      </td>      
                      <td>
                        <x-call contect="{{$row->mobile}}" icon="stock-mobile" />
                      </td>
                      <td class="text-center">
                          <span 
                            tabindex="0" 
                            role="button" 
                            data-bs-toggle="popover" 
                            data-bs-trigger="focus" 
                            data-bs-placement="left"
                            data-bs-title="Contact Details" 
                            data-bs-content='
                                            <div><strong class="me-2"><i class="icofont icofont-ui-dial-phone"></i></strong><x-call contect="{{$row->home_phone}}" icon="" /></div>
                                            <div><strong class="me-2"><i class="icofont icofont-phone-circle"></i>:</strong><x-call contect="{{$row->other_phone}}" icon="" /></div>
                                            <div><strong class="me-2"><i class="icofont icofont-brand-linkedin"></i>:</strong><a href="{{$row->linkedin}}">{{$row->linkedin}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-social-facebook"></i>:</strong><a href="{{$row->facebook}}">{{$row->facebook}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-social-twitter"></i>:</strong><a href="{{$row->twitter}}">{{$row->twitter}}</a></div>
                                            <div><strong class="me-2"><i class="icofont icofont-pin"></i>:</strong>{{$row->adderss}}</div>
                                            ' 
                            data-bs-html=true
                            data-bs-original-title="Lead Details"
                            class="d-none d-md-block"
                          >
                            <i class="icofont icofont-open-eye"></i>
                          </span>
                      </td>
                      <td class="text-center">
                          <a href="{{route('contact-edit', ['id'=>$row->id])}}">
                            <i class="icon-pencil-alt"></i>
                          </a>
                          <a href="#"><i class="icon-trash"></i></a>
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