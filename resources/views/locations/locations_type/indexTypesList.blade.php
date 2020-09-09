

@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
@endpush


@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- BEGIN: Page Main-->
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ isset($title) ? $title : "Title Not Found" }}</span></h5>
                            <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('location.types.list') }}">Manage Category</a>
                                </li>
                                <li class="breadcrumb-item active">Location Types List
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6">
                            <a href="{{ route('location.types.create') }}" class="btn indigo waves-effect waves-light breadcrumbs-btn right">  Create New Location Type</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="row">
                        <!-- users list start -->
                        <section class="users-list-wrapper section">
                            <div class="users-list-filter">
                                <div class="card-panel">
                                    <div class="row">
                                        <form method="GET" action="">
                                            @csrf
                                            <div class="col s12 m6 l4">
                                                <label for="users-list-verified">Location Type Name</label>
                                                <div class="input-field">
                                                    <input type="text" name="search" value="{{ (Request::get('search')) ? Request::get('search') : null }}">
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l4">
                                                <label for="users-list-status">Status</label>
                                                <div class="input-field">
                                                    <select class="form-control" id="users-list-status" name="status">
                                                        <option value="" selected >Any</option>
                                                        <option value="Active" @if(Request::get('status') == 'Active') selected @endif>Active</option>
                                                        <option value="Inactive" @if(Request::get('status') == 'Inactive') selected @endif>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l4 display-flex align-items-center show-btn">
                                                <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="users-list-table">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- datatable start -->
                                        <div class="responsive-table">
                                            <table id="users-list-datatable" class="table">
                                                <thead>
                                                <tr>

                                                    <th>SL</th>
                                                    <th>Location Type Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($locationTypes as $location_type)
                                                    <tr>
                                                        <td>{{ $serial++ }}</td>
                                                        <td>{{$location_type->location_type_name}}</td>

                                                        <td><span class="chip green lighten-5">
                                                            <span class="{{($location_type->location_type_status=="Active")?"green-text":"red-text"}}">{{$location_type->location_type_status}}</span>
                                                          </span>
                                                        </td>
                                                        <td>
                                                            <a class="border-primary" href="{{ route('location.types.edit', $location_type->id)}}"><i class="material-icons  edit-icon">edit</i></a>
                                                            <a href="{{ route('location.types.show', $location_type->id)}}"><i class="material-icons">remove_red_eye</i></a>
                                                        </td>

                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            {{-- <div class="pull-right pagination-one">
                                                {{ $locationTypes->appends(request()->input())->links() }}
                                            </div> --}}

                                        </div>
                                        <!-- datatable ends -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- users list ends -->

                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    <!-- END: Page Main-->

@endsection

@push('script')
    <script src="{{ asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }} "></script>
    <script src="{{ asset('app-assets/js/scripts/page-users.js') }}"></script>
@endpush
