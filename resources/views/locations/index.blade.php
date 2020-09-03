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
                                                <label for="users-list-role">Location Type id</label>
                                                <div class="input-field">
                                                    <select class="form-control" id="users-list-role">
                                                        <option value="">Any</option>
                                                        <option value="87">87</option>
                                                        <option value="33">33</option>
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
                                                    <th>id</th>
                                                    <th>username</th>
                                                    <th>name</th>
                                                    <th>last activity</th>
                                                    <th>verified</th>
                                                    <th>Location type id</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                    <th>view</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>300</td>
                                                    <td><a href="page-users-view.html">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>301</td>
                                                    <td><a href="page-users-view.html">zena0604</a>
                                                    </td>
                                                    <td>Zena Buckley</td>
                                                    <td>06/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>302</td>
                                                    <td><a href="page-users-view.html">delilah0301</a>
                                                    </td>
                                                    <td>Delilah Moon</td>
                                                    <td>03/01/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>303</td>
                                                    <td><a href="page-users-view.html">hillary1807</a>
                                                    </td>
                                                    <td>Hillary Rasmussen</td>
                                                    <td>18/07/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>304</td>
                                                    <td><a href="page-users-view.html">herman2003</a>
                                                    </td>
                                                    <td>Herman Tate</td>
                                                    <td>20/03/2020</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>305</td>
                                                    <td><a href="page-users-view.html">kuame3008</a>
                                                    </td>
                                                    <td>Kuame Ford</td>
                                                    <td>30/08/2019</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>307</td>
                                                    <td><a href="page-users-view.html">piper0508</a>
                                                    </td>
                                                    <td>Piper Jordan</td>
                                                    <td>05/08/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>308</td>
                                                    <td><a href="page-users-view.html">neil1002</a>
                                                    </td>
                                                    <td>Neil Sosa</td>
                                                    <td>10/02/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>309</td>
                                                    <td><a href="page-users-view.html">caldwell2402</a>
                                                    </td>
                                                    <td>Caldwell Chapman</td>
                                                    <td>24/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>310</td>
                                                    <td><a href="page-users-view.html">wesley0508</a>
                                                    </td>
                                                    <td>Wesley Oneil</td>
                                                    <td>05/08/2020</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>311</td>
                                                    <td><a href="page-users-view.html">tallulah2009</a>
                                                    </td>
                                                    <td>Tallulah Fleming</td>
                                                    <td>20/09/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>312</td>
                                                    <td><a href="page-users-view.html">iris2505</a>
                                                    </td>
                                                    <td>Iris Maddox</td>
                                                    <td>25/05/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>313</td>
                                                    <td><a href="page-users-view.html">caleb1504</a>
                                                    </td>
                                                    <td>Caleb Bradley</td>
                                                    <td>15/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>314</td>
                                                    <td><a href="page-users-view.html">illiana0410</a>
                                                    </td>
                                                    <td>Illiana Grimes</td>
                                                    <td>04/10/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>315</td>
                                                    <td><a href="page-users-view.html">chester0902</a>
                                                    </td>
                                                    <td>Chester Estes</td>
                                                    <td>09/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>316</td>
                                                    <td><a href="page-users-view.html">gregory2309</a>
                                                    </td>
                                                    <td>Gregory Hayden</td>
                                                    <td>23/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>87</td>
                                                    <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                                                    </td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>317</td>
                                                    <td><a href="page-users-view.html">jescie1802</a>
                                                    </td>
                                                    <td>Jescie Parker</td>
                                                    <td>18/02/2019</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>318</td>
                                                    <td><a href="page-users-view.html">sydney3101</a>
                                                    </td>
                                                    <td>Sydney Cabrera</td>
                                                    <td>31/01/2020</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip red lighten-5"><span class="red-text">Idle</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>319</td>
                                                    <td><a href="page-users-view.html">gray2702</a>
                                                    </td>
                                                    <td>Gray Valenzuela</td>
                                                    <td>27/02/2020</td>
                                                    <td>No</td>
                                                    <td>33</td>
                                                    <td><span class="chip orange lighten-5"><span class="orange-text">Close</span></span></td>
                                                    <td><a href="page-users-edit.html"><i class="material-icons">edit</i></a></td>
                                                    <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
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
