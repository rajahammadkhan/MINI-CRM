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
<form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card py-4">
                <div class="header">
                    <div class="row py-4">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Company Name </strong></label>
                            <div class="form-line">
                                <input value="{{ old('name') }}" type="text" id="name" class="form-control" name="name"
                                    placeholder="Company Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Email </strong></label>
                            <div class="form-line">
                                <input value="{{ old('email') }}" type="email" id="email" class="form-control"
                                    name="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class=" col-12">
                            <label for="email_address1"> <strong> Website Name </strong></label>
                            <div class="form-line">
                                <input value="{{ old('website') }}" type="text" id="website" class="form-control"
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
                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                        </div>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Logo</span>
                            <input name="logo" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" name="logo" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection