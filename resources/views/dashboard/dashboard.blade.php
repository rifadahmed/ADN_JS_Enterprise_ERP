@extends('layouts.master')

@section('content')
<div class="section">
    <!-- Current balance & total transactions cards-->
    {{-- <div class="row vertical-modern-dashboard">
        <div class="col s12 m4 l4">
            <!-- Current Balance -->
            <div class="card animate fadeLeft">
                <div class="card-content">
                    <h6 class="mb-0 mt-0 display-flex justify-content-between">
                        Sales
                        <i class="material-icons float-right">more_vert</i>
                    </h6>
                    <p class="medium-small">Sales Accumulation</p>
                    <div class="current-balance-container">
                        <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
                    </div>
                    <h5 class="center-align">TK 50,150.00</h5>
                    <p class="medium-small center-align">Sales of all time</p>
                </div>
            </div>
        </div>
        <div class="col s12 m8 l8 animate fadeRight">
            <!-- Total Transaction -->
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
                    <p class="medium-small">This month transaction</p>
                    <div class="total-transaction-container">
                        <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
        {{-- <div class="col s12 l5">
            <!-- User Statistics -->
            <div class="card user-statistics-card animate fadeLeft">
                <div class="card-content">
                    <h4 class="card-title mb-0">User Statistics <i class="material-icons float-right">more_vert</i></h4>
                    <div class="row">
                        <div class="col s12 m6">
                            <ul class="collection border-none mb-0">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle pink accent-2">trending_up</i>
                                    <p class="medium-small">This year</p>
                                    <h5 class="mt-0 mb-0">60%</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 m6">
                            <ul class="collection border-none mb-0">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle purple accent-4">trending_down</i>
                                    <p class="medium-small">Last year</p>
                                    <h5 class="mt-0 mb-0">40%</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-statistics-container">
                        <div id="user-statistics-bar-chart" class="user-statistics-shadow ct-golden-section"></div>
                    </div>
                </div>
            </div>
        </div> --}}
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
        
        {{-- <div class="col s12 l3">
            <div class="card animate fadeRight">
                <div class="card-content">
                    <h4 class="card-title mb-0">Conversion Ratio</h4>
                    <div class="conversion-ration-container mt-8">
                        <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"></div>
                    </div>
                    <p class="medium-small center-align">This month conversion ratio</p>
                    <h5 class="center-align mb-0 mt-0">62%</h5>
                </div>
            </div>
        </div> --}}
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
                            <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                        </tr>
                        @endforeach
                    
                    
                        
                        {{-- <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td> --}}
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Current balance & appointment cards-->

     
</div>
@endsection

@push('script')
    {{-- Custom Scripts--}}
    <script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>
@endpush
