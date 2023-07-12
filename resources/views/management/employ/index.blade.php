@extends('management.layouts.master')
@section('title')
Employ- {{ config('app.dashboard') }}
@endsection
@section('content')
<div class="container-fluid px-4">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> Employ</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{ route('employ.create') }}" type="button" class="btn btn-primary"> Add
                            Employ
                        </a>
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th class="col-lg-3">Name</th>
                                    <th class="col-lg-3">Company</th>
                                    <th class="col-lg-3">Email</th>
                                    <th class="col-lg-3">Phone</th>
                                    <th class="col-lg-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employ as $row)
                                <tr>
                                    <td>
                                        {{$row->first_name.' '.$row->last_name}}
                                    </td>
                                    <td>
                                        {{ $row['CompanyName']->name }}
                                    </td>
                                    <td>
                                        {{ $row->email }}
                                    </td>
                                    <td>
                                        {{ $row->phone }}
                                    </td>
                                    <td>
                                        <a class="btn bg-blue btn-circle" href="{{ route('employ.show', $row->id) }}">

                                            <i class="material-icons" href="">edit</i>
                                        </a>
                                        <button type="button"
                                            class="btn bg-red btn-circle waves-effect waves-circle waves-float"
                                            data-toggle="modal" data-target="#exampleModalCenter{{ $row->id }}">
                                            <i class="material-icons"> delete </i>
                                        </button>
                                        <div class="modal fade" id="exampleModalCenter{{ $row->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to proceed this action?
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Close
                                                        </button>
                                                        <form action="{{ route('employ.destroy', $row->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-info waves-effect">
                                                                Delete
                                                            </button>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection