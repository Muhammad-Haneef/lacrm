@extends('layouts.admin')

@section('content')
  
    <x-card>
        <ul class="nav nav-tabs border-tab border-0 mb-0 nav-danger" id="topline-tab" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link nav-border pt-0 txt-danger nav-danger active" id="topline-top-user-tab" data-bs-toggle="tab" href="#topline-top-user" role="tab" aria-controls="topline-top-user" aria-selected="true"><i class="icofont icofont-man-in-glasses"></i>User</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link nav-border txt-danger nav-danger" id="topline-top-description-tab" data-bs-toggle="tab" href="#topline-top-description" role="tab" aria-controls="topline-top-description" aria-selected="false" tabindex="-1"><i class="icofont icofont-file-document"></i>Description</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link nav-border txt-danger nav-danger" id="topline-top-review-tab" data-bs-toggle="tab" href="#topline-top-review" role="tab" aria-controls="topline-top-review" aria-selected="false" tabindex="-1"><i class="icofont icofont-star"></i>Review</a></li>
        </ul>
        <div class="tab-content" id="topline-tabContent">
            <div class="tab-pane fade active show" id="topline-top-user" role="tabpanel" aria-labelledby="topline-top-user-tab">
            <div class="card-body px-0 pb-0">  
                <div class="user-header pb-2"> 
                <h6 class="fw-bold">User Details:</h6>
                </div>
                <div class="user-content"> 
                <div class="table-responsive">
                    <table class="table mb-0">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">Contact No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Neha</td>
                        <td>India </td>
                        <td>5698741236</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacklin</td>
                        <td>Thailand</td>
                        <td>7800030320</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="topline-top-description" role="tabpanel" aria-labelledby="topline-top-description-tab">
            <div class="card-body px-0 pb-0"> 
                <div class="user-header pb-2"> 
                <h6 class="fw-bold">Description:</h6>
                </div>
                <div class="user-content"> 
                <div class="table-responsive">
                    <table class="table mb-0">
                    <thead>
                        <tr>
                        <th scope="col">Technology</th>
                        <th scope="col">Interest </th>
                        <th scope="col">Salary Expected </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Web Designer</td>
                        <td>HTML,CSS,JS,SCSS</td>
                        <td>45000</td>
                        </tr>
                        <tr>
                        <td>UX Designer</td>
                        <td>Figma,Photoshop,craft</td>
                        <td>20000</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="topline-top-review" role="tabpanel" aria-labelledby="topline-top-review-tab">
            <div class="card-body px-0 pb-0">
                <div class="user-header pb-2"> 
                <h6 class="fw-bold">Review:</h6>
                </div>
                <div class="user-content"> 
                <div class="table-responsive">
                    <table class="table mb-0">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">Rating </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Neha</td>
                        <td>India </td>
                        <td> <i class="ico-color icofont icofont-star"></i><i class="ico-color icofont icofont-star"></i><i class="ico-color icofont icofont-star"></i><i class="ico-color icofont icofont-star"></i></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Irfan</td>
                        <td>India</td>
                        <td> <i class="ico-color icofont icofont-star"></i><i class="ico-color icofont icofont-star"></i><i class="ico-color icofont icofont-star"></i></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </x-card>

@endsection