
@extends('layouts.master')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    <!--/ Current balance & total transactions cards-->

    <!-- User statistics & appointment cards-->
    <div class="row">
        <div id="card-stats" class="pt-0">
            <div class="row">
               <div class="col s12 m6 l6 xl3">
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
                              <p class="no-margin">New</p>
                              <p>{{$totalbrand}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col s12 m6 l6 xl3">
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
               </div>
               <div class="col s12 m6 l6 xl3">
                  <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                     <div class="padding-4">
                        <div class="row">
                           <div class="col s7 m7">
                              <i class="material-icons background-round mt-5">location_on
                            </i>
                              <p>Loactions</p>
                           </div>
                           <div class="col s5 m5 right-align">
                           <h5 class="mb-0 white-text">{{$latestlocation}}</h5>
                              <p class="no-margin">New</p>
                              <p>{{$totallocation}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col s12 m6 l6 xl3">
                  <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                     <div class="padding-4">
                        <div class="row">
                           <div class="col s7 m7">
                              <i class="material-icons background-round mt-5">airport_shuttle</i>
                              <p>Supplier</p>
                           </div>
                           <div class="col s5 m5 right-align">
                              <h5 class="mb-0 white-text">${{$totalOpeningBalance}}</h5>
                              <p class="no-margin">Today</p>
                           <p>{{$totalsupplier}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
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
                            <img src="https://www.shorturl.at/xJLTW" alt="" class="circle" />
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
                    <h4 class="card-title mb-0">Buyer List <i class="material-icons float-right">more_vert</i></h4>
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
                            <td><span class="{{$buyer->buyer_status=="Active"? "badge pink lighten-5 pink-text text-accent-2":"badge green lighten-5 green-text text-accent-4"}}">{{$buyer->buyer_status}}</span></td>
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
    <div class="col s12 m6 l6">
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>
     
</div>


<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [ 'Division', 'District','Area'],
                datasets: [{
                    label: 'Location',
                    data: [ {{$division}},{{$district}},{{$area}}],
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
</script> 
@endsection

@push('script')
    {{-- Custom Scripts--}}
    <script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>
@endpush
