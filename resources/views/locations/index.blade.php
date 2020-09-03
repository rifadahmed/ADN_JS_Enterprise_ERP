@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
@endpush

@section('content')


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
                                <li class="breadcrumb-item"><a href="#">Manage Location</a>
                                </li>
                                <li class="breadcrumb-item active">Location List
                                </li>
                            </ol>
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
                                        <form>
                                            <div class="col s12 m6 l3">
                                                <label for="users-list-verified">Location Name</label>
                                                <div class="input-field">
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3">
                                                <label for="users-list-role">Location Type</label>
                                                <div class="input-field">
                                                    <select class="form-control" id="users-list-role">
                                                        <option value="">Any</option>
                                                        <option value="Division">Division</option>
                                                        <option value="District">District</option>
                                                        <option value="Area">Area</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3">
                                                <label for="users-list-status">Status</label>
                                                <div class="input-field">
                                                    <select class="form-control" id="users-list-status">
                                                        <option value="">Any</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Idle">Idle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3 display-flex align-items-center show-btn">
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
                                                    <th></th>
                                                    <th>SL</th>
                                                    <th></th>
                                                    <th>Location Name</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Location Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>300</td>
                                                    <td>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Area</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>301</td>
                                                    <td>
                                                    </td>
                                                    <td>Zena Buckley</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>302</td>
                                                    <td>
                                                    </td>
                                                    <td>Delilah Moon</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Area</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>303</td>
                                                    <td>
                                                    </td>
                                                    <td>Hillary Rasmussen</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>304</td>
                                                    <td>
                                                    </td>
                                                    <td>Herman Tate</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>305</td>
                                                    <td>
                                                    </td>
                                                    <td>Kuame Ford</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>307</td>
                                                    <td>
                                                    </td>
                                                    <td>Piper Jordan</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>308</td>
                                                    <td>
                                                    </td>
                                                    <td>Neil Sosa</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>309</td>
                                                    <td>
                                                    </td>
                                                    <td>Caldwell Chapman</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>310</td>
                                                    <td>
                                                    </td>
                                                    <td>Wesley Oneil</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>311</td>
                                                    <td>
                                                    </td>
                                                    <td>Tallulah Fleming</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>312</td>
                                                    <td>
                                                    </td>
                                                    <td>Iris Maddox</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>313</td>
                                                    <td>
                                                    </td>
                                                    <td>Caleb Bradley</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>314</td>
                                                    <td>
                                                    </td>
                                                    <td>Illiana Grimes</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>315</td>
                                                    <td>
                                                    </td>
                                                    <td>Chester Estes</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>316</td>
                                                    <td>
                                                    </td>
                                                    <td>Gregory Hayden</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Division</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>317</td>
                                                    <td>
                                                    </td>
                                                    <td>Jescie Parker</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>318</td>
                                                    <td>
                                                    </td>
                                                    <td>Sydney Cabrera</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>319</td>
                                                    <td>
                                                    </td>
                                                    <td>Gray Valenzuela</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>District</td>
                                                    <td><span class="chip orange lighten-5"><span class="orange-text">Close</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                    <td></td>
                                                </tr>



                                                </tbody>
                                            </table>
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
