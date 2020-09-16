
@extends('layouts.master')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <!--/ Current balance & total transactions cards-->

    <!-- User statistics & appointment cards-->
    <div class="row">
            <div id="card-stats" class="pt-0" >
                        
                        <div class="col s12 m6 l6 xl3">
                            <a href="{{route('brand.list')}}">
                            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                <div class="padding-4">
                                    <div class="row">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5">branding_watermark
                                        </i>
                                        <p>Brands</p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                         <h5 class="mb-0 white-text">{{$latestbrand}}</h5> 
                                        {{-- <h5 class="mb-0 white-text">2</h5> --}}

                                        <p class="no-margin">New</p>
                                         <p>{{$totalbrand}}</p> 
                                       

                                    </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    
                        
                        <div class="col s12 m6 l6 xl3">
                            <a href="{{route('buyer.list')}}">
                            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                <div class="padding-4">
                                    <div class="row">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5">perm_identity</i>
                                        <p>Clients</p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0 white-text">{{$latestBuyer}}</h5> 
                                       

                                        <p class="no-margin">New</p>
                                        <p>{{$totalbuyer}}</p> 
                                       
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    
                        <div class="col s12 m6 l6 xl3">
                                <a href="{{route('location.list')}}">
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                    <div class="padding-4">
                                        <div class="row">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">location_on
                                            </i>
                                            <p>Loactions</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                        {{-- <h5 class="mb-0 white-text">{{$latestlocation}}</h5> --}}
                                        <h5 class="mb-0 white-text">5</h5>

                                            <p class="no-margin">New</p>
                                            {{-- <p>{{$totallocation}}</p> --}}
                                            <p>5</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                        </div>

                        <div class="col s12 m6 l6 xl3">
                            <a href="{{route('supplier.list')}}">
                                <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                    <div class="padding-4">
                                        <div class="row">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">airport_shuttle</i>
                                            <p>Supplier</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                             <h5 class="mb-0 white-text">${{$totalOpeningBalance}}</h5> 
                                            {{-- <h5 class="mb-0 white-text">6</h5> --}}

                                            <p class="no-margin">Today</p>
                                        <p>{{$totalsupplier}}</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                        </div>


            </div>



            <div class="col s12 m4 l3 " style="margin-top:30px">
               <div class="card pt-0 pb-0 animate fadeLeft">
                  <div class="dashboard-revenue-wrapper padding-2 ml-2">
                     <span class="new badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">+ 42.6%</span>
                     <p class="mt-2 mb-0">Total Purchase</p>
                     <p class="no-margin grey-text lighten-3">360 avg</p>
                     <h5>3,450</h5>
                  </div>
               </div>
            </div>
            
            <div class="col s12 m4 l3 animate fadeUp" style="margin-top:30px">
               <div class="card pt-0 pb-0">
                  <div class="dashboard-revenue-wrapper padding-2 ml-2">
                     <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+ 12%</span>
                     <p class="mt-2 mb-0">Total Sales</p>
                     <p class="no-margin grey-text lighten-3">23.1% avg</p>
                     <h5>+2500</h5>
                  </div>
               </div>
            </div>

            <div class="col s12 m4 l3" style="margin-top:30px">
               <div class="card pt-0 pb-0 animate fadeRight">
                  <div class="dashboard-revenue-wrapper padding-2 ml-2">
                     <span class="new badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ $900</span>
                     <p class="mt-2 mb-0">Sales Due</p>
                     <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                     <h5>$ 22,300</h5>
                  </div>
               </div>
            </div>
 
            <div class="col s12 m4 l3" style="margin-top:30px">
                <div class="card pt-0 pb-0 animate fadeRight">
                   <div class="dashboard-revenue-wrapper padding-2 ml-2">
                      <span class="new badge gradient-45deg-green-teal gradient-shadow mt-2 mr-2">+ $900</span>
                      <p class="mt-2 mb-0">Purchases Due</p>
                      <p class="no-margin grey-text lighten-3">$30,512 avg</p>
                      <h5>$ 11,300</h5>
                   </div>
                </div>
            </div> 

            <div class="col s12 l4">
                <!-- Recent Users -->
                <div class="card recent-buyers-card animate fadeUp">
                    <div class="card-content">
                        <h4 class="card-title mb-0">Recent Users <i class="material-icons float-right">more_vert</i></h4>
                        {{-- <p class="medium-small pt-2">Today</p> --}}
                        <ul class="collection mb-0">
                            @foreach ($users as $user)
                            <li class="collection-item avatar">
                                <img src="https://pipesak.com/wp-content/uploads/2019/09/Mike-Place-Holder-PipeSak-About-Page.jpg" alt="" class="circle" />
                                <p class="font-weight-600">{{$user->name}}</p>
                                <p class="medium-small">{{$user->created_at->diffForHumans()}}</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                            </li>   
                            @endforeach
                            

                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="col s12 m6 l8">
                <div class="card subscriber-list-card animate fadeRight">
                    <div class="card-content pb-1">
                        <h4 class="card-title mb-0">New Buyers<i class="material-icons float-right">more_vert</i></h4>
                    </div>
                    <table class="subscription-table responsive-table highlight">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($buyers as $buyer)
                            <tr>
                                <td>{{$buyer->buyer_name}}</td>
                                <td>{{$buyer->buyer_address}}</td>
                                <td>{{$buyer->buyer_company}}</td>
                                <td><span class="{{$buyer->buyer_status=="Active"? "badge green lighten-5 green-text text-accent-4":"badge pink lighten-5 pink-text text-accent-2"}}">{{$buyer->buyer_status}}</span></td>
                                <td><a class="border-primary" href="{{ route('buyer.edit', $buyer->id)}}"><i class="material-icons  edit-icon" style="margin-right: 5px;
                                    ">edit</i></a><a href="{{ route('buyer.show', $buyer->id)}}"><i class="material-icons">remove_red_eye</i></a></td>

                            </tr>
                            @endforeach
                        
                        
                            
                            {{-- <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td> --}}
                            

                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>
    <!--/ Current balance & appointment cards-->
  
    <div id="work-collections">
        <div class="row">
            {{-- Most brought productcs --}}
            <div class="col s12 m12 l7">
                <ul id="projects-collection" class="collection z-depth-1 animate fadeLeft">
                <li class="collection-item avatar">
                    <i class="material-icons cyan circle">card_travel</i>
                    <h6 class="collection-header m-0">Products:</h6>
                    <p>Most Popular Products</p>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Iphone 12</p>
                            <p class="collections-content">Sold-80</p>
                        </div>
                        <div class="col s3"><span class="task-cat cyan">Mobile</span></div>
                        <div class="col s3">
                            <div id="project-line-1"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Baby Lotion</p>
                            <p class="collections-content">Sold-70</p>
                        </div>
                        <div class="col s3"><span class="task-cat red accent-2">Personal Care</span></div>
                        <div class="col s3">
                            <div id="project-line-2"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Omega g68</p>
                            <p class="collections-content">Sold-50</p>
                        </div>
                        <div class="col s3"><span class="task-cat teal accent-4">Accessory</span></div>
                        <div class="col s3">
                            <div id="project-line-3"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Dettol sanitizer</p>
                            <p class="collections-content">Sold-40</p>
                        </div>
                        <div class="col s3"><span class="task-cat deep-orange accent-2">Health</span></div>
                        <div class="col s3">
                            <div id="project-line-4"></div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            {{-- Weekly earning --}}
            <div class="col s12 m4 l5">
                <div id="weekly-earning" class="card animate fadeUp">
                   <div class="card-content">
                      <h4 class="header m-0">Total Expenses:<i class="material-icons right grey-text lighten-3">more_vert</i></h4>
                      <p class="no-margin grey-text lighten-3 medium-small">Mon 15 - Sun 21</p>
                      <h3 class="header">$899.39 <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                      </h3>
                      <div class="center-align">
                         <p class="lighten-3">Total Weekly Earning</p> <br>
                         <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">View
                            Full</a>
                      </div>
                   </div>
                </div>
             </div>
        
        </div>
    </div>
    
    {{-- location chart --}}
    <div class="col s12 m6 l6">
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>

    {{-- Sale chart --}}
    <div class="col s12 m6 l6">
        <canvas id="line-chart" width="400" height="200"></canvas>
    </div>

     
</div>


<script>
        // Location chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [ 'Division', 'District','Area'],
                datasets: [{
                    label: 'Location',
                    data: [ 8,6,4],

                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        
             // Sale chart
            new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: ['1st','2nd','3rd','4th'],
                datasets: [{ 
                    data: [86,4414,2000,3306],
                    label: "Sales/Week(1 Month)",
                    borderColor: "#3e95cd",
                    //fill: false
                },
                { 
                    data: [3333,1200,1500,1306],
                    label: "Purchases/Week(1 Month)",
                    borderColor: "#8e5ea2",
                    fill: false
                }
                ]
            },
            // options: {
            //     title: {
            //     display: true,
            //     text: 'Sales Per Week(1 Month)'
            //     }
            // }
            });
</script> 
@endsection

@push('script')
    {{-- Custom Scripts--}}
    <script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>
@endpush
