@extends('management.layouts.master')
@section('title')
    Company Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ml-4">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title"> Company</h4>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{ route('company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card py-4">
                    <div class="header">
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Company Name </strong></label>
                                <div class="form-line">
                                    <input value="{{ $company->name }}" type="text" id="name"
                                           class="form-control"
                                           name="name" placeholder="Company Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Email </strong></label>
                                <div class="form-line">
                                    <input value="{{  $company->email  }}" type="email" id="email"
                                           class="form-control"
                                           name="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Website Name </strong></label>
                                <div class="form-line">
                                    <input value="{{ $company->website }}" type="text" id="website"
                                           class="form-control"
                                           name="website" placeholder="Website Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary  my-2 float-right"> Update</button>
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Logo</span>
                                <input name="logo" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" value="{{$company->logo}}" name="file" type="text">
                            </div>
                            <div class=" container d-flex justify-content-center" >
                                @if (in_array($extension = pathinfo($company->logo, PATHINFO_EXTENSION), ['jpg', 'png', 'bmp','jpeg','PNG',]))


                                    <img style="" src="{{asset('images/media' . '/' .$company->logo)}}" height="200px" width="200px">
                                @elseif($company->logo == "")

                                @else
                                    <i class="fa fa-file fa-3x" aria-hidden="true" height="200px" width="200px"> </i>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
