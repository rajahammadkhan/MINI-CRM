@extends('management.layouts.master')
@section('title')
    Employ Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ml-4">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title"> Employ</h4>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{ route('employ.update',$employ->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card py-4">
                    <div class="header">
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> First Name </strong></label>
                                <div class="form-line">
                                    <input value="{{$employ->first_name}}" type="text" id="first_name"
                                           class="form-control"
                                           name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Last Name </strong></label>
                                <div class="form-line">
                                    <input value="{{ $employ->last_name}}" type="text" id="last_name"
                                           class="form-control"
                                           name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Enter Email </strong></label>
                                <div class="form-line">
                                    <input value="{{ $employ->email}}" type="email" id="email"
                                           class="form-control"
                                           name="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class=" col-12">
                                <label for="email_address1"> <strong> Enter Phone </strong></label>
                                <div class="form-line">
                                    <input value="{{$employ->phone}}" type="text" id="phone"
                                           class="form-control"
                                           name="phone" placeholder="Enter Phone">
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
                        <div class="row my-3">
                            <div class=" col-12">
                                <label for="email_address1"><strong>Company Name</strong></label>
                                <select class="form-control select2" name="company_id" id="Quiz-type"
                                        data-placeholder="Select Name">
                                    <option selected disabled value=""> select Company</option>
                                    @foreach ($company as $row)
                                        <option {{ $employ->company_id == $row->id ? 'Selected' : '' }}
                                                value={{$row->id}}>{{$row->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
