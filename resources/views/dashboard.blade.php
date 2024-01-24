@extends('layouts.admin')

@section('content')
  
@php
  //echo "<pre>"; print_r($data);
@endphp

  <div class="row size-column">
    <div class="col-xxl-9 col-md-12 box-col-8 grid-ed-12">
      <div class="row">

        <div class="col-xxl-5 col-md-7 box-col-7">
          <div class="row"> 

            <div class="col-sm-12"> 
              <div class="card o-hidden">             
                <div class="card-body balance-widget profile-box">
                  <span class="f-w-500 f-white h5">Matters - Total</span>
                  <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22">
                    <span class="counter h3">{{$data['matters']['total']}}</span>
                    <span class="f-white f-14 f-w-400 ms-1">100%</span>
                  </h4>
                  <a class="purchase-btn btn btn-primary btn-hover-effect f-w-500" href="/matters">
                    View All Matters
                  </a>
                  <div class="mobile-right-img">
                    <img class="mobile-img" src="../assets/images/dashboard/widget.svg" alt="mobile with coin">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-6"> 
              <div class="card small-widget"> 
                <div class="card-body primary"> <span class="f-light">Matters - Pending</span>
                  <div class="d-flex align-items-end gap-1">
                    <h4>{{$data['matters']['pending']}}</h4>
                    <span class="font-primary f-12 f-w-500">
                      <i class="icon-arrow-up"></i>
                      <span>{{($data['matters']['pending']*100)/$data['matters']['total']}}%</span>
                    </span>
                  </div>
                  <div class="bg-gradient"> 
                    <svg class="stroke-icon svg-fill">
                      <use href="../assets/svg/icon-sprite.svg#new-order"></use>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6"> 
              <div class="card small-widget"> 
                <div class="card-body warning"><span class="f-light">Matters - Open</span>
                  <div class="d-flex align-items-end gap-1">
                    <h4>{{$data['matters']['open']}}</h4>
                      <span class="font-warning f-12 f-w-500">
                        <i class="icon-arrow-up"></i>
                        <span>{{($data['matters']['open']*100)/$data['matters']['total']}}%</span>
                      </span>
                  </div>
                  <div class="bg-gradient"> 
                    <svg class="stroke-icon svg-fill">
                      <use href="../assets/svg/icon-sprite.svg#customers"></use>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6"> 
              <div class="card small-widget"> 
                <div class="card-body secondary"><span class="f-light">Matters - In Process</span>
                  <div class="d-flex align-items-end gap-1">
                    <h4>{{$data['matters']['in_process']}}</h4>
                    <span class="font-secondary f-12 f-w-500">
                      <i class="icon-arrow-down"></i>
                      <span>{{($data['matters']['in_process']*100)/$data['matters']['total']}}%</span>
                    </span>
                  </div>
                  <div class="bg-gradient"> 
                    <svg class="stroke-icon svg-fill">
                      <use href="../assets/svg/icon-sprite.svg#sale"></use>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6"> 
              <div class="card small-widget"> 
                <div class="card-body success"><span class="f-light">Matters - Closed</span>
                  <div class="d-flex align-items-end gap-1">
                    <h4>{{$data['matters']['closed']}}</h4>
                      <span class="font-success f-12 f-w-500">
                        <i class="icon-arrow-up"></i>
                        <span>{{($data['matters']['closed']*100)/$data['matters']['total']}}%</span>
                      </span>
                  </div>
                  <div class="bg-gradient"> 
                    <svg class="stroke-icon svg-fill">
                      <use href="../assets/svg/icon-sprite.svg#profit"></use>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-xxl-7 col-md-5 box-col-5">
          <div class="card"> 
            <div class="card-header card-no-border">
              <div class="header-top"> 
                <h5>Latest Leads</h5>
                <div class="f-light d-flex align-items-center">
                  <a class="font-dark f-12" href="{{route('leads')}}">View All <i class="f-w-700 icon-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="recent-table table-responsive condenced-table"> 
                <table class="table"> 
                  <thead> 
                    <tr> 
                      <th class="f-light">Name</th>
                      <th class="f-light">Mobile</th>
                      <th class="f-light text-center">Status</th>
                      <th class="f-light text-center">Details</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @forelse ($data['leads'] as $row)
                      <tr>
                        <td>
                          <a href="{{route('lead-view', ['id'=>$row->id])}}">
                          {{$row->name}}
                          </a>
                        </td>
                        <td>
                          <x-call contect="{{$row->mobile}}" icon="stock-mobile" />
                        </td>
                        <td class="text-center">
                          <span class="badge" style="background-color:{{$row->lead_status->text_color}}10;color:{{$row->lead_status->text_color}}">
                            {{$row->lead_status->title}}
                          </span>
                        </td>
                        <td class="text-center">
                          <span 
                            tabindex="0" 
                            role="button" 
                            data-bs-toggle="popover" 
                            data-bs-trigger="focus" 
                            data-bs-placement="left"
                            data-bs-title="Lead Details" 
                            data-bs-content='
                                            <div><strong class="me-2">Phone:</strong><x-call contect="{{$row->phone}}" /></div>
                                            <div><strong class="me-2">Whatapp:</strong><x-call contect="{{$row->whatsapp}}" /></div>
                                            <div><strong class="me-2">Email:</strong><a href="mailto:{{$row->email}}" >{{$row->email}}</a></div>
                                            <div><strong class="me-2">Area of Law:</strong>{{$row->area_of_law->title}}</div>
                                            <div><strong class="me-2">Address:</strong>{{$row->adderss}}</div>
                                            ' 
                            data-bs-html=true
                            data-bs-original-title="Lead Details">
                            <i class="icofont icofont-open-eye"></i>
                          </span>
                        </td>
                      </tr>
                    @empty
                      
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>





        <div class="col-xxl-3 col-md-6 box-col-6">
          <div class="card"> 
            <div class="card-header card-no-border"> 
              <h5>Monthly Profits</h5><span class="f-light f-w-500 f-14">(Total profit growth of 30%)</span>
            </div>
            <div class="card-body pt-0"> 
              <div class="monthly-profit">
                <div id="profitmonthly"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-9 box-col-12">
          <div class="card">
            <div class="card-header card-no-border"> 
              <h5>Order Overview</h5>
            </div>
            <div class="card-body pt-0">
              <div class="row m-0 overall-card overview-card">
                <div class="col-xl-9 col-md-8 col-sm-7 p-0 box-col-7">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                  <div class="chart-right">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="card-body p-0">
                          <ul class="balance-data"> 
                            <li><span class="circle bg-secondary"></span><span class="f-light ms-1">Refunds</span></li>
                            <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Earning</span></li>
                            <li><span class="circle bg-success"> </span><span class="f-light ms-1">Order</span></li>
                          </ul>
                          <div class="current-sale-container order-container">
                            <div class="overview-wrapper" id="orderoverview"></div>
                            <div class="back-bar-container"> 
                              <div id="order-bar"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-5 p-0 box-col-5">
                  <div class="row g-sm-3 g-2">
                    <div class="col-md-12">
                      <div class="light-card balance-card widget-hover">
                        <div class="svg-box">
                          <svg class="svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#orders"></use>
                          </svg>
                        </div>
                        <div> <span class="f-light">Orders</span>
                          <h6 class="mt-1 mb-0">10,098 </h6>
                        </div>
                        <div class="ms-auto text-end">
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="orderdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="light-card balance-card widget-hover">
                        <div class="svg-box">
                          <svg class="svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#expense"></use>
                          </svg>
                        </div>
                        <div> <span class="f-light">Earning</span>
                          <h6 class="mt-1 mb-0">$12,678</h6>
                        </div>
                        <div class="ms-auto text-end">
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="earningdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="light-card balance-card widget-hover">
                        <div class="svg-box">
                          <svg class="svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#doller-return"></use>
                          </svg>
                        </div>
                        <div> <span class="f-light">Refunds</span>
                          <h6 class="mt-1 mb-0">3,001</h6>
                        </div>
                        <div class="ms-auto text-end">
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-xxl-3 col-xl-3 col-md-4 grid-ed-none box-col-4e d-xxl-block d-none">
      <div class="card">
        <div class="card-header card-no-border">
          <div class="header-top"> 
            <h5>Tasks</h5>
          </div>
        </div>
        <div class="card-body pt-0"> 

          <div class="recent-activity notification">
            <ul> 
              @foreach ($data['task_assign_to_me'] as $row)
                <li class="d-flex">
                  <div class="activity-dot-warning" style="background-color:{{$row->priority->color}};outline: 5px solid {{$row->priority->color}}40;"></div>
                  <div class="w-100 ms-3">
                    <p class="d-flex justify-content-between mb-2">
                      
                      <span class="date-content light-background"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Due Date">{{$row->due_date}}</span>

                      <span class="badge" style="background-color:{{$row->priority->color}}10;color:{{$row->priority->color}}"  data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Priority">
                        {{$row->priority->title}}
                      </span>

                    </p>                    
                    <strong>{{$row->title}}</strong>
                    <span class="small">{{$row->description}}</span>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection