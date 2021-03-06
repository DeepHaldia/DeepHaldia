<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->

<div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <h2 class="text-center mx-auto">RESERVATION MANAGER</h2>
                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row">


                            <div class="col-lg-3 col-md-2 mb-3">
                                <div class="input-affix">
                                    <i class="prefix-icon anticon anticon-search opacity-04"></i>
                                    <input type="text" class="form-control" placeholder="Search Reservation">
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 mb-3">
                                <select name="search_by" size="1" class="form-control">
                                    <option value="name">Name</option>
                                    <option value="id">Reservation ID</option>
                                    <option value="email">E-mail</option>
                                    <option value="phone_number">Phone Number</option>
                                    <option value="cellphone">Mobile Phone</option>
                                    <option value="payment_status">Payment Status</option>
                                    <option value="approval_code">Gateway Response</option>
                                </select>
                            </div>
                           <div class="col-lg-3 col-md-3 text-center mb-3">
                                <a href="reservation-list-reports.html" type="button" class="btn btn-primary">
                                    <i class="anticon anticon-book"></i>
                                    <span class="m-l-5">Get Report</span>
                            </a>
                            </div>
                            <div class="col-lg-3 col-md-4 text-center mx mb-3">
                                <a class="btn btn-primary mb-3" href="{{ url('admin/reservation_add') }}">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add New Reservation</span>
                                </a>
                            
                            
                                <!------------------------------Start of Modal-->
                                <!-- Large modal -->
                                </div>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reports</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <table border="1" cellpadding="5" cellspacing="0" width="100%" align="center" style="font-size: 14px;">
                                                        <tbody>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th bgcolor="#999999">2021</th>
                                                                <th bgcolor="#999999">2020</th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    June
                                                                </td>
                                                                <td></td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    July
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    August
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr bgcolor="#cccccc">
                                                                <td>Total Transfers</td>
                                                                <td>0</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr bgcolor="#cccccc">
                                                                <td>YTD Transfers</td>
                                                                <td></td>
                                                                <td>36</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="alert alert-success mt-4">
                                                        <h4 class="alert-heading text-center">Reports</h4>
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1" class="d-table">For</label>
                                                                <div class="d-flex">
                                                                    <select name="vehicle_id" size="1" class="form-control col-md-6 m-1">
                                                                        <option value="">All Vehicles</option>
                                                                        <option value="1">Town Car</option>
                                                                        <option value="2">Luxury Van</option>
                                                                        <option value="3">Limousine</option>
                                                                    </select>
                                                                    <select name="status_id" size="1" class="form-control col-md-6 m-1">
                                                                        <option value="">All Statuses</option>
                                                                        <option value="1">Processing</option>
                                                                        <option value="2">Confirmed</option>
                                                                        <option value="3">Departed</option>
                                                                        <option value="4">Arrived</option>
                                                                        <option value="5">Awaiting Arrival</option>
                                                                        <option value="6">Awaiting Departure</option>
                                                                        <option value="7">Credit card verification error</option>
                                                                        <option value="11">Cancelled</option>
                                                                    </select>
                                                                </div><!-------------------------------dflex--------------->
                                                                <select name="trip_type" size="1" class="form-control m-1">
                                                                    <option value="">All Trip Types</option>
                                                                    <optgroup label="Orlando Area">
                                                                        <option value="1">Orlando Area - One Way</option>
                                                                        <option value="2">Orlando Area - Round Trip</option>
                                                                    </optgroup>
                                                                    <optgroup label="Sanford Area">
                                                                        <option value="sanford">Sanford Airport</option>
                                                                    </optgroup>
                                                                    <optgroup label="Cruise Transfer">
                                                                        <option value="3">MCO to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                        <option value="4">MCO to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                        <option value="5">Disney/Universal to Cruise Terminal/Port Area - One Way</option>
                                                                        <option value="6">Disney/Universal to Cruise Terminal/Port Area - Round Trip</option>
                                                                        <option value="7">MCO&gt;Disney or Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                                                        <option value="8">MCO&gt;Cruise Terminals&gt;Disney or Universal&gt;MCO (3 leg)</option>
                                                                        <option value="9">Sanford to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                        <option value="11">Sanford to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                        <option value="10">Sanford&gt;Cruise Terminals&gt;Disney or Universal&gt;Sanford</option>
                                                                    </optgroup>
                                                                    <optgroup label="Attraction Transfer">
                                                                        <option value="12">Disney Resort to Universal/Sea World - One Way</option>
                                                                        <option value="13">Disney Resort to Universal/Sea World - Round Trip</option>
                                                                        <option value="77">Disney Resort to SeaWorld Theme Park - One Way</option>
                                                                        <option value="78">Disney Resort to SeaWorld Theme Park - Round Trip</option>
                                                                        <option value="79">Disney Resort to Universal Theme Park - One Way</option>
                                                                        <option value="80">Disney Resort to Universal Theme Park - Round Trip</option>
                                                                    </optgroup>
                                                                </select>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="d-table">From</label>
                                                                    <div class="d-flex">
                                                                        <input class="form-control col-md-6" type="date" />
                                                                        <small class="alertText">select date</small>
                                                                    </div><!-------------------------------dflex--------------->
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="d-table">To</label>
                                                                    <div class="d-flex">
                                                                        <input class="form-control col-md-6" type="date" />
                                                                        <small class="alertText">select date</small>
                                                                    </div><!-------------------------------dflex--------------->
                                                                </div>
                                                                <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Get Report</a>
                                                        </form>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!------------------------------end of Modal-->
                            </div>

                        </div>
                        <!--------end row--------->


                    </div>
                    <div class="container-fluid" style="margin-top:3rem;">

                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mx-auto">
                                        <thead>
                                            <tr>
                                               
                                                <th>Name</th>
                                                <th>Car Type</th>
                                                <th>From/To</th>
                                                <th>Arrival<br /> Date/Time</th>
                                                <th>Departure<br /> Date/Time</th>
                                                <th>Pickup<br>Time</th>
                                                <th>Date Submitted</th>
                                                <th>Price</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($reservation_list as $item)
                                                

                                            <tr>
                                              
                                                <td>
                                                    <div class="media align-items-center">                                                        
                                                       <span>{{ $item->name }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>{{ $item->car_type }} </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                           <span>{{ $item->from_to }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="align-items-center">
                                                        {{ $item->arrival_date_time }}
                                                    </span>                                 
                                                </td>
                                                <td>
                                                  {{ $item->departure_date_time }}
                                                </td>
                                                <td>{{ $item->pickup_time }}</td>
                                                <td>{{ $item->date_submitted }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-animated scale-left d-flex">
                                                        <a class="text-gray font-size-18" href="app-edit-reservation-list.html" target="_blank">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="fas fa-edit"></i>

                                                            </button>
                                                        </a>
                                                        <a class="text-gray font-size-18" href="#">
                                                            <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                                                <i class="fas fa-envelope"></i>

                                                            </button>
                                                                                                                    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">sunstatelimo.com says</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            Are you sure you want to resend confirmation email?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>
  <!------------------end of modal-->
                                                        </a>

                                                        <a class="text-gray font-size-18" href="invoicePage.html" target="_blank">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="fas fa-print"></i>

                                                            </button>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td>
                                                    <div class="align-items-center">
                                                        There is no data..
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="create-new-project">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add a New Reservation</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="accordion">
                                        <div class="card mb-0">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                    Transportation Information
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class=" ">
                                                    <form>
                                                        <div class="form-group row mt-3">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="new-project-name">Client</label>
                                                                <select class="form-control custom-select" id="inlineFormCustomSelectPref">
                                                                    <option selected>Alex Dam</option>
                                                                    <option value="1">Marie clove</option>
                                                                    <option value="2">Mark Benzer</option>
                                                                    <option value="3">Carl</option>
                                                                </select>

                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="new-project-name">Vehicle</label>
                                                                <select class="form-control custom-select" id="inlineFormCustomSelectPref">
                                                                    <option selected>Town Car</option>
                                                                    <option value="1">Luxury Van</option>
                                                                    <option value="2">Limousin</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="new-project-name">Passenger</label>
                                                                <select class="form-control custom-select" id="inlineFormCustomSelectPref">
                                                                    <option selected>1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="1">5</option>
                                                                    <option value="2">6</option>
                                                                    <option selected>7</option>
                                                                    <option value="1">8</option>
                                                                    <option value="2">9</option>
                                                                    <option value="3">10</option>
                                                                    <option value="1">11</option>
                                                                    <option value="2">12</option>
                                                                    <option value="1">13</option>
                                                                    <option value="2">14</option>
                                                                    <option value="1">15</option>
                                                                    <option value="2">16</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="new-project-name">Car Seat</label>
                                                                <select class="form-control custom-select" id="inlineFormCustomSelectPref">
                                                                    <option selected>Yes</option>
                                                                    <option value="1">No</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="new-project-name">Booster Seat</label>
                                                                <select class="form-control custom-select" id="inlineFormCustomSelectPref">
                                                                    <option selected="">Yes</option>
                                                                    <option value="1">No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label class="d-table">Trip Type</label>
                                                               <select name="trip_type" class="form-control" id="getFname" size="1" onchange="admSelectCheck(this);">
                                                                <option id="defaultOption" value="1" selected="selected"> -- Select One -- </option>
                                                                <optgroup label="Orlando Area">
                                                                    <option id="wayOption" value="7">Orlando Area - One Way</option>
                                                                    <option id="admOption" value="0">Orlando Area - Round Trip</option>
                                                                </optgroup>
                                                                <optgroup label="Cruise Transfer">
                                                                    <option id="admOption" value="0">Disney/Universal&gt;Cruise&gt;MCO - Round trip</option>
                                                                    <option id="wayOption" value="7">MCO to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                    <option id="admOption" value="0">MCO to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                    <option id="wayOption" value="7">Disney/Universal to Cruise Terminal/Port Area - One Way</option>
                                                                    <option id="admOption" value="0">Disney/Universal to Cruise Terminal/Port Area - Round Trip</option>
                                                                    <option id="threeOption" value="3">MCO&gt;Disney or Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                                                    <option id="threeOption" value="3">MCO&gt;Cruise Terminals&gt;Disney or Universal&gt;MCO (3 leg)</option>
                                                                    <option id="wayOption" value="7">Sanford to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                    <option id="admOption" value="0">Sanford to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                    <option id="threeOption" value="3">Sanford&gt;Cruise Terminals&gt;Disney or Universal&gt;Sanford</option>
                                                                </optgroup>
                                                                <optgroup label="Attraction Transfer">
                                                                    <option id="wayOption" value="7">Disney Resort to Universal/Sea World - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to Universal/Sea World - Round Trip</option>
                                                                    <option id="wayOption" value="7">Disney Resort to SeaWorld Theme Park - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to SeaWorld Theme Park - Round Trip</option>
                                                                    <option id="wayOption" value="7">Disney Resort to Universal Theme Park - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to Universal Theme Park - Round Trip</option>
                                                                </optgroup>
                                                            </select>
                                                            </div>
                                                            
                                                            <div id="wayDivCheck" class="customBundle box" style="display:none;">
                                                               
                                                           
                                                        <div class="form-group ml-2 mt-3 tripValidation">
                                                            <div class="p-3 mb-2 bg-info text-white text-center"><b>Transfer</b></div>
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">From:</label>
                                                                <select class="form-control" name="from1" id="from1" required="yes" size="1" onchange="javascript:getNewlocationContent1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                                                                    <option value="" selected="selected"> -- Select One -- </option>
                                                                    <optgroup label="Orlando Airports">
                                                                                      <option value="421">Orlando Airport </option>
                                                                  <option value="512">Orlando Exec. Airport</option>
                                                                  <option value="422">Orlando Sanford Airport </option>
                                                                                      </optgroup>
                                                                    <optgroup label="Orlando Hotels">
                                                                                     <option value="186">Adventure Motel</option>
                                                                  <option value="187">All-Star Movies Resort</option>
                                                                  <option value="188">All-Star Music Resort</option>
                                                                  <option value="189">All-Star Sports Resort</option>
                                                                  <option value="389">Ambassador Motel</option>
                                                                  <option value="22">Ambassador TD Waterhouse</option>
                                                                  <option value="190">Amerihost Resort at Main Gate</option>
                                                                  <option value="69">AmeriSuites Convention Center</option>
                                                                  <option value="1">AmeriSuites International Airport </option>
                                                                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                                                                  <option value="70">AmeriSuites Universal</option>
                                                                  <option value="23">Amtrak - Orlando</option>
                                                                  <option value="193">Animal Kingdom Park</option>
                                                                  <option value="194">Arabian Nights</option>
                                                                  <option value="71">Bay Hill Club &amp; Lodge</option>
                                                                  <option value="72">Baymont In &amp; Suites</option>
                                                                  <option value="195">Baymont Inn Kissimmee</option>
                                                                  <option value="73">Baymont Universal Hotel</option>
                                                                  <option value="24">Best Value Inn</option>
                                                                  <option value="390">Best Western Heritage Park</option>
                                                                  <option value="196">Best Western Lake Buena Vista</option>
                                                                  <option value="198">Best Western Lakeside</option>
                                                                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                                                                  <option value="74">Best Western MovieLand</option>
                                                                  <option value="391">Best Western Mt. Vernon</option>
                                                                  <option value="25">Best Western Orlando West</option>
                                                                  <option value="75">Best Western Plaza International</option>
                                                                  <option value="76">Best Western Universal Inn</option>
                                                                  <option value="26">Best Western Winter Garden</option>
                                                                  <option value="199">Blizzard Beach</option>
                                                                  <option value="200">Blue Tree Resort</option>
                                                                  <option value="201">BoardWalk at Disney</option>
                                                                  <option value="202">Bryans Spanish Cove</option>
                                                                  <option value="203">Budget Inn West</option>
                                                                  <option value="204">Buena Vista Motel</option>
                                                                  <option value="205">Buena Vista Palace Resort and Spa</option>
                                                                  <option value="206">Buena Vista Suites</option>
                                                                  <option value="392">Candlewood Suites</option>
                                                                  <option value="207">Caribbean Beach Resort</option>
                                                                  <option value="208">Caribe Royale Suites</option>
                                                                  <option value="209">Casa Rosa Main Gate</option>
                                                                  <option value="210">Celebration Hotel</option>
                                                                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                                                                  <option value="218">Celebrity World Resort</option>
                                                                  <option value="212">Central Motel</option>
                                                                  <option value="213">Chalet Motel</option>
                                                                  <option value="214">Chateau Motel</option>
                                                                  <option value="215">Chatham Square</option>
                                                                  <option value="216">Cirque Du Soleil</option>
                                                                  <option value="27">Citrus Bowl</option>
                                                                  <option value="28">Citrus Club</option>
                                                                  <option value="2">Clarion Hotel Airport</option>
                                                                  <option value="78">Clarion Hotel Universal</option>
                                                                  <option value="217">Clarion Main Gate West</option>
                                                                  <option value="79">Comfort Inn International</option>
                                                                  <option value="219">Comfort Inn Lake Buena Vista</option>
                                                                  <option value="220">Comfort Inn Main Gate West</option>
                                                                  <option value="393">Comfort Inn North</option>
                                                                  <option value="80">Comfort Inn Universal</option>
                                                                  <option value="221">Comfort Suites</option>
                                                                  <option value="3">Comfort Suites Airport</option>
                                                                  <option value="29">Comfort Suites Downtown Orlando</option>
                                                                  <option value="222">Comfort Suites Main Gate</option>
                                                                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                                                                  <option value="223">Commons Apartments</option>
                                                                  <option value="224">Contemporary Resort</option>
                                                                  <option value="225">Continental Motel</option>
                                                                  <option value="227">Country Hearth Inn &amp; Suites</option>
                                                                  <option value="228">Country Inn &amp; Suites</option>
                                                                  <option value="82">Country Inn &amp; Suites Universal</option>
                                                                  <option value="229">Crown Motel</option>
                                                                  <option value="4">Crowne Plaza Orlando Airport</option>
                                                                  <option value="83">Crowne Plaza Resort</option>
                                                                  <option value="84">Crowne Plaza Universal</option>
                                                                  <option value="231">Cypress Pointe Resort</option>
                                                                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                                                                  <option value="30">Days Inn 33rd Street</option>
                                                                  <option value="5">Days Inn Airport</option>
                                                                  <option value="85">Days Inn Convention Center</option>
                                                                  <option value="86">Days Inn International North</option>
                                                                  <option value="232">Days Inn Kissimmee Airport</option>
                                                                  <option value="233">Days Inn Kissimmee West</option>
                                                                  <option value="234">Days Inn Main Gate East</option>
                                                                  <option value="235">Days Inn Main Gate West</option>
                                                                  <option value="31">Days Inn Midtown</option>
                                                                  <option value="395">Days Inn Turnpike</option>
                                                                  <option value="87">Days Inn Universal</option>
                                                                  <option value="33">Days Inn West Hwy 50</option>
                                                                  <option value="394">Days Inn Winter Park</option>
                                                                  <option value="236">Days Suites - Old Town</option>
                                                                  <option value="34">DeLux Inn</option>
                                                                  <option value="88">Discovery Cove</option>
                                                                  <option value="237">Disney Back Yard Barbeque</option>
                                                                  <option value="238">Disney Beach Club Resort LBV</option>
                                                                  <option value="239">Disney Beach Club Villas</option>
                                                                  <option value="260">Disney MGM Studios</option>
                                                                  <option value="262">Dixie Stampede</option>
                                                                  <option value="263">Dolphin Hotel at Disney</option>
                                                                  <option value="459">Double Tree Guest Suite</option>
                                                                  <option value="89">Doubletree Castle</option>
                                                                  <option value="264">DoubleTree Club Hotel</option>
                                                                  <option value="90">Doubletree Universal Orlando</option>
                                                                  <option value="261">Downtown Disney</option>
                                                                  <option value="254">Eastgate Inn Resort</option>
                                                                  <option value="91">Econo Roadway</option>
                                                                  <option value="35">Econolodge Central</option>
                                                                  <option value="255">Econolodge Hawaiian Village</option>
                                                                  <option value="256">Econolodge Main Gate Central</option>
                                                                  <option value="257">Econolodge Polynesian Resort</option>
                                                                  <option value="258">Embassy Grand Beach</option>
                                                                  <option value="6">Embassy Suites Airport</option>
                                                                  <option value="396">Embassy Suites Altamonte</option>
                                                                  <option value="38">Embassy Suites Downtown Orlando</option>
                                                                  <option value="92">Embassy Suites International Drive</option>
                                                                  <option value="93">Embassy Suites Jamaican</option>
                                                                  <option value="259">Embassy Suites LBV</option>
                                                                  <option value="240">Enterprise Motel</option>
                                                                  <option value="241">Epcot</option>
                                                                  <option value="36">Executive Inn</option>
                                                                  <option value="37">Executive Inn Oak Ridge</option>
                                                                  <option value="94">Extended Stay</option>
                                                                  <option value="96">Extended Stay America Universal</option>
                                                                  <option value="130">Extended Stay Deluxe</option>
                                                                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                                                                  <option value="7">Fairfield Inn Airport</option>
                                                                  <option value="97">Fairfield Inn and Suites</option>
                                                                  <option value="242">Fairfield Inn at Lake Bryan</option>
                                                                  <option value="39">Fairfield Inn Orlando South</option>
                                                                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                                                                  <option value="244">Fantasy World Club Villas</option>
                                                                  <option value="40">Flamingo Motel North</option>
                                                                  <option value="41">Florida Mall</option>
                                                                  <option value="42">Florida Mall Hotel</option>
                                                                  <option value="43">Florida Mall Inn</option>
                                                                  <option value="245">Florida Vacation Villas</option>
                                                                  <option value="246">Fort Wilderness Campgrounds</option>
                                                                  <option value="247">Four Winds Motel</option>
                                                                  <option value="248">Gator Motel</option>
                                                                  <option value="397">Gatorland</option>
                                                                  <option value="249">Gaylord Palms Resort</option>
                                                                  <option value="250">Golden Link Motel</option>
                                                                  <option value="99">Grande Lakes Orlando</option>
                                                                  <option value="252">Grande Lakes Resort</option>
                                                                  <option value="44">Greyhound Bus Lines</option>
                                                                  <option value="253">Grosvenor Resort</option>
                                                                  <option value="45">Guest House International</option>
                                                                  <option value="100">Hampton Inn &amp; Suites</option>
                                                                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                                                                  <option value="8">Hampton Inn Airport</option>
                                                                  <option value="398">Hampton Inn Altamonte</option>
                                                                  <option value="101">Hampton Inn Convention Center</option>
                                                                  <option value="46">Hampton Inn Florida Mall</option>
                                                                  <option value="102">Hampton Inn Kirkman </option>
                                                                  <option value="266">Hampton Inn Lake Buena Vista</option>
                                                                  <option value="267">Hampton Inn Main Gate</option>
                                                                  <option value="268">Hampton Inn Main Gate West</option>
                                                                  <option value="103">Hampton Inn Universal</option>
                                                                  <option value="105">Hard Rock Hotel</option>
                                                                  <option value="106">Hard Rock Live</option>
                                                                  <option value="107">Hawthorn Suites At SeaWorld </option>
                                                                  <option value="108">Hawthorn Suites Universal</option>
                                                                  <option value="269">Hawthorne Suites LBV</option>
                                                                  <option value="270">High Point World Resort</option>
                                                                  <option value="110">Hilton Garden Inn</option>
                                                                  <option value="9">Hilton Garden Inn Airport</option>
                                                                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                                                                  <option value="111">Hilton Grand Vacation Club</option>
                                                                  <option value="271">Hilton Grand Vacation I - Drive</option>
                                                                  <option value="272">Hilton in the Walt Disney Resort</option>
                                                                  <option value="538">Hilton Orlando</option>
                                                                  <option value="112">Holiday Express Wet 'n' Wild</option>
                                                                  <option value="113">Holiday Inn Convention Center</option>
                                                                  <option value="10">Holiday Inn Express Airport</option>
                                                                  <option value="399">Holiday Inn Express Exit 244</option>
                                                                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                                                                  <option value="274">Holiday Inn Express LBV</option>
                                                                  <option value="114">Holiday Inn International Drive</option>
                                                                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                                                                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                                                                  <option value="400">Holiday Inn Orlando North</option>
                                                                  <option value="11">Holiday Inn Select Airport</option>
                                                                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                                                                  <option value="115">Holiday Inn Universal Towers</option>
                                                                  <option value="277">Holiday Inn Walt Disney World</option>
                                                                  <option value="278">Holiday Villas Of Sommerset</option>
                                                                  <option value="116">Holy Land Zion Experience</option>
                                                                  <option value="117">Homewood Suites International</option>
                                                                  <option value="279">Homewood Suites Lake Buena Vista</option>
                                                                  <option value="280">Homewood Suites Parkway</option>
                                                                  <option value="118">Horizons at Orlando</option>
                                                                  <option value="401">Hotel Orlando North</option>
                                                                  <option value="281">House of Blues</option>
                                                                  <option value="282">Howard Johnson Enchanted Land</option>
                                                                  <option value="283">Howard Johnson Express &amp; Suite</option>
                                                                  <option value="284">Howard Johnson Express Inn</option>
                                                                  <option value="119">Howard Johnson Express Inn Suites</option>
                                                                  <option value="120">Howard Johnson Hawaiian Court</option>
                                                                  <option value="121">Howard Johnson International  Drive</option>
                                                                  <option value="285">Howard Johnson MGE Watermania</option>
                                                                  <option value="122">Howard Johnson Plaza Resort</option>
                                                                  <option value="286">Howard Johnson Westgate</option>
                                                                  <option value="48">Howard Johnson's TD Waterhouse</option>
                                                                  <option value="402">Howard Johnson's Turnpike</option>
                                                                  <option value="49">Howard Vernon Motel</option>
                                                                  <option value="287">Hyatt Grand Cypress</option>
                                                                  <option value="12">Hyatt Orlando Airport</option>
                                                                  <option value="534">Hyatt Place </option>
                                                                  <option value="123">I-Drive Inn</option>
                                                                  <option value="124">Inn and Suites International</option>
                                                                  <option value="288">Inn at Summer Bay</option>
                                                                  <option value="125">Islands Of Adventure</option>
                                                                  <option value="50">Jet Air Orlando</option>
                                                                  <option value="126">JW Marriott Grande Lakes</option>
                                                                  <option value="289">Kids Village</option>
                                                                  <option value="403">Kingswood Resort</option>
                                                                  <option value="290">Knight's Inn Kissimmee</option>
                                                                  <option value="291">Knight's Inn Main Gate East</option>
                                                                  <option value="292">Knight's Inn Main Gate West</option>
                                                                  <option value="51">Knights Inn East Colonial</option>
                                                                  <option value="127">La Quinta Inn &amp; Suites</option>
                                                                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                                                                  <option value="13">La Quinta Inn Airport</option>
                                                                  <option value="152">La Quinta International Drive</option>
                                                                  <option value="95">La Quinta International Drive North</option>
                                                                  <option value="404">La Quinta Orlando North</option>
                                                                  <option value="293">Lake Buena Vista Hotel</option>
                                                                  <option value="405">Lambert Inn</option>
                                                                  <option value="52">Landmark Hotel</option>
                                                                  <option value="294">Legacy Grand Hotel</option>
                                                                  <option value="128">Leisure Resorts</option>
                                                                  <option value="295">Liki Tiki Village</option>
                                                                  <option value="53">Loch Haven Inn</option>
                                                                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                                                                  <option value="297">Magic Castle Main Gate</option>
                                                                  <option value="298">Magic Kingdom</option>
                                                                  <option value="299">Magic Tree Resort</option>
                                                                  <option value="300">Main Gate Inn</option>
                                                                  <option value="301">Maple Leaf Hotel</option>
                                                                  <option value="15">Marriott Airport</option>
                                                                  <option value="54">Marriott Court Yard Downtown</option>
                                                                  <option value="16">Marriott Courtyard Airport</option>
                                                                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                                                                  <option value="129">Marriott Courtyard International Drive</option>
                                                                  <option value="406">Marriott Courtyard Mailand</option>
                                                                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                                                                  <option value="153">Marriott Cypress Harbor</option>
                                                                  <option value="55">Marriott Downtown Centroplex</option>
                                                                  <option value="154">Marriott Grand Vista</option>
                                                                  <option value="304">Marriott Orlando World Center</option>
                                                                  <option value="155">Marriott Residence At SeaWorld</option>
                                                                  <option value="156">Marriott Residence Inn I-Drive</option>
                                                                  <option value="157">Marriott Residence Universal</option>
                                                                  <option value="158">Masters Inn International Drive</option>
                                                                  <option value="305">Masters Inn Main Gate East</option>
                                                                  <option value="306">Masters Inn Main Gate West</option>
                                                                  <option value="307">Medieval Times</option>
                                                                  <option value="159">Mercado</option>
                                                                  <option value="160">Microtel Inn and Suites</option>
                                                                  <option value="308">Monte Carlo Motel</option>
                                                                  <option value="161">Motel 6 International Drive</option>
                                                                  <option value="309">Motel 6 Orlando</option>
                                                                  <option value="310">Motel 6 Orlando West</option>
                                                                  <option value="311">Nickelodeon Family Suites</option>
                                                                  <option value="312">Oak Plantation Resort</option>
                                                                  <option value="313">Oasis Inn Main Gate</option>
                                                                  <option value="314">Oasis Lakes Resort</option>
                                                                  <option value="315">Old Key West</option>
                                                                  <option value="316">Old Town</option>
                                                                  <option value="162">Orange County Convention Center</option>
                                                                  <option value="317">Orbit One</option>
                                                                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                                                                  <option value="318">Orlando Premium Outlets</option>
                                                                  <option value="164">Orlando Resort</option>
                                                                  <option value="165">Orlando Sunshine Resort</option>
                                                                  <option value="319">Outdoor Resort</option>
                                                                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                                                                  <option value="321">Palm Motel</option>
                                                                  <option value="131">Parc Corniche Resorts</option>
                                                                  <option value="322">Park Inn West</option>
                                                                  <option value="407">Park Plaza Hotel</option>
                                                                  <option value="323">Parkside Record Inn &amp; Suites</option>
                                                                  <option value="324">Parkway International</option>
                                                                  <option value="325">Parkway Motel</option>
                                                                  <option value="56">Parliament House</option>
                                                                  <option value="132">Peabody Orlando</option>
                                                                  <option value="133">Pirates Dinner Adventure</option>
                                                                  <option value="326">Planet Hollywood</option>
                                                                  <option value="134">Pointe Orlando</option>
                                                                  <option value="327">Polynesian Isles Resort</option>
                                                                  <option value="328">Polynesian Resort</option>
                                                                  <option value="329">Pop Century Resort</option>
                                                                  <option value="330">Port Orleans French Quarter</option>
                                                                  <option value="331">Port Orleans Riverside</option>
                                                                  <option value="135">Portofino Bay Hotel</option>
                                                                  <option value="332">Premium Outlet Mall</option>
                                                                  <option value="136">Prime Factory Outlet Mall</option>
                                                                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                                                                  <option value="18">Quality Inn Airport</option>
                                                                  <option value="408">Quality Inn Altamonte</option>
                                                                  <option value="137">Quality Inn Low Q</option>
                                                                  <option value="333">Quality Inn Main Gate West</option>
                                                                  <option value="138">Quality Inn Plaza International</option>
                                                                  <option value="334">Quality Inn Polynesian Resort</option>
                                                                  <option value="335">Quality Inn Suites East Gate</option>
                                                                  <option value="409">Quality Inn Turnpike</option>
                                                                  <option value="336">Quality Suites Main Gate East</option>
                                                                  <option value="139">Quality Suites Universal Studios</option>
                                                                  <option value="140">Race Rock</option>
                                                                  <option value="375">Radison World Gate Resort</option>
                                                                  <option value="141">Radisson Barcelo</option>
                                                                  <option value="373">Radisson Lake Buena Vista</option>
                                                                  <option value="374">Radisson Parkway</option>
                                                                  <option value="58">Radisson Plaza Downtown Orlando</option>
                                                                  <option value="412">Ramada Downtown Kissimmee</option>
                                                                  <option value="376">Ramada East Gate Fountain Park</option>
                                                                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                                                                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                                                                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                                                                  <option value="60">Ramada Ltd. Florida Mall</option>
                                                                  <option value="377">Ramada Plaza Gateway</option>
                                                                  <option value="61">Ramada Plaza John Young</option>
                                                                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                                                                  <option value="413">Ramada Vacation Homes</option>
                                                                  <option value="411">RDV Sportsplex</option>
                                                                  <option value="379">Red Carpet Inn</option>
                                                                  <option value="143">Red Roof Inn International Drive</option>
                                                                  <option value="380">Red Roof Inn Main Gate East</option>
                                                                  <option value="144">Red Roof Inn Universal</option>
                                                                  <option value="523">Regal Sun LBV</option>
                                                                  <option value="19">Renaissance Airport</option>
                                                                  <option value="145">Renaissance Orlando Resort</option>
                                                                  <option value="414">Residence Inn Altamonte</option>
                                                                  <option value="531">Reunion </option>
                                                                  <option value="146">Riande Continental Plaza</option>
                                                                  <option value="415">Ritz Express</option>
                                                                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                                                                  <option value="337">RIU Orlando Resort</option>
                                                                  <option value="148">Rodeway Inn International Drive</option>
                                                                  <option value="149">Rosen Centre Hotel</option>
                                                                  <option value="150">Rosen Plaza Hotel</option>
                                                                  <option value="338">Royal Celebration Inn</option>
                                                                  <option value="151">Royal Pacific Resort</option>
                                                                  <option value="339">Royal Palms</option>
                                                                  <option value="340">Royal Plaza</option>
                                                                  <option value="341">Saratoga Resort Villas</option>
                                                                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                                                                  <option value="166">SeaWorld</option>
                                                                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                                                                  <option value="344">Sevilla Inn</option>
                                                                  <option value="525">Shades of Green</option>
                                                                  <option value="346">Sheraton Safari</option>
                                                                  <option value="167">Sheraton Studio City Hotel</option>
                                                                  <option value="20">Sheraton Suites</option>
                                                                  <option value="21">Sheraton Suites Airport</option>
                                                                  <option value="347">Sheraton Vistana Resort</option>
                                                                  <option value="348">Sheraton Vistana Villages</option>
                                                                  <option value="168">Sheraton World</option>
                                                                  <option value="169">Shingle Creek</option>
                                                                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                                                                  <option value="350">Sierra Suites Lake Buena Vista</option>
                                                                  <option value="351">Silver Lake Resort</option>
                                                                  <option value="170">Sleep Inn</option>
                                                                  <option value="171">Sleep Inn &amp; Suites</option>
                                                                  <option value="352">Sleep Inn Main Gate</option>
                                                                  <option value="172">Spring Hill Suites</option>
                                                                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                                                                  <option value="416">Stadium Inn</option>
                                                                  <option value="354">Star Island Resort</option>
                                                                  <option value="175">Staybridge Suites I-Drive</option>
                                                                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                                                                  <option value="173">Studio Inn</option>
                                                                  <option value="174">Studio Plus</option>
                                                                  <option value="62">Suburban Lodge</option>
                                                                  <option value="176">Suburban Lodge</option>
                                                                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                                                                  <option value="358">Summer Florida Inn</option>
                                                                  <option value="359">Sun Motel</option>
                                                                  <option value="360">Super 8</option>
                                                                  <option value="361">Super 8 East Main Gate</option>
                                                                  <option value="362">Super 8 Lake Side Main Gate</option>
                                                                  <option value="177">Super 8 Universal</option>
                                                                  <option value="417">Super 8 Vine Street</option>
                                                                  <option value="363">Swan Hotel</option>
                                                                  <option value="63">TD Waterhouse Centre</option>
                                                                  <option value="536">The Fountains Resort</option>
                                                                  <option value="364">Thriftlodge East</option>
                                                                  <option value="365">Travelers Inn</option>
                                                                  <option value="418">Travelodge Altamonte</option>
                                                                  <option value="64">Travelodge Centroplex</option>
                                                                  <option value="65">Travelodge East Colonial</option>
                                                                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                                                                  <option value="178">Travelodge I-Drive</option>
                                                                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                                                                  <option value="367">Travelodge Main Gate East</option>
                                                                  <option value="368">Travelodge Suites East Gate Orange</option>
                                                                  <option value="369">Travelodge Suites Main Gate East</option>
                                                                  <option value="370">Tropical Palms Resort</option>
                                                                  <option value="371">Typhoon Lagoon</option>
                                                                  <option value="77">Universals CityWalk</option>
                                                                  <option value="67">Vacation Lodge </option>
                                                                  <option value="372">Vacation Village At Parkway</option>
                                                                  <option value="420">Vacation Village Resort</option>
                                                                  <option value="381">Viking Motel</option>
                                                                  <option value="382">Villas Of Grand Cypress</option>
                                                                  <option value="383">Vista Way Apartments</option>
                                                                  <option value="532">Waldorf Astoria Orlando</option>
                                                                  <option value="179">Wellesley Inn &amp; Suites</option>
                                                                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                                                                  <option value="181">West Gate Lakes</option>
                                                                  <option value="182">West Gate Palace</option>
                                                                  <option value="385">West Gate Towers</option>
                                                                  <option value="386">West Gate Vacation Villas</option>
                                                                  <option value="384">Westgate Inn</option>
                                                                  <option value="68">Westin Grand Bohemian</option>
                                                                  <option value="66">Westside Inn &amp; Suites</option>
                                                                  <option value="183">Wet 'n' Wild</option>
                                                                  <option value="529">Wilderness Lodge</option>
                                                                  <option value="184">Wingate Hotel</option>
                                                                  <option value="185">Wyndham Orlando Resort</option>
                                                                  <option value="522">Wyndham Palace Resorts</option>
                                                                  <option value="388">Yacht Club</option>
                                                                </optgroup>
                                              <optgroup label="Cruise Lines">
                                                                                     <option value="423">Disney Cruise Line</option>
                                                                  <option value="425">Carnival Cruise Line</option>
                                                                  <option value="426">Norwegian Cruise Line</option>
                                                                  <option value="427">Royal Caribbean International</option>
                                                                  <option value="428">Radisson Resort</option>
                                                                  <option value="429">Royal Mansions Resort</option>
                                                                  <option value="430">Other</option>
                                                                </optgroup>
                                              
                                              <optgroup label="Theme Parks">
                                                <option value="431">Universal Studios</option>
                                                <option value="432">Sea World</option>
                                                                    </optgroup>
                                                                    <optgroup label="Disney resorts">
                                                                                     <option value="441">AKL Resort</option>
                                                                  <option value="440">All Star Movies</option>
                                                                  <option value="439">All Star Music</option>
                                                                  <option value="438">All Star Sports</option>
                                                                  <option value="443">Beach Club Resort</option>
                                                                  <option value="457">Best western LBV</option>
                                                                  <option value="442">Board Walk Resort</option>
                                                                  <option value="451">Caribbean Beach Resort</option>
                                                                  <option value="433">Contemporary</option>
                                                                  <option value="445">Coronado Springs </option>
                                                                  <option value="446">Dolphin Resort</option>
                                                                  <option value="434">Grand Floridian</option>
                                                                  <option value="455">Hilton LBV</option>
                                                                  <option value="535">LEGO LAND</option>
                                                                  <option value="533">LEGO Land</option>
                                                                  <option value="452">Old Key West Resort</option>
                                                                  <option value="436">Polynesian</option>
                                                                  <option value="450">Pop Century Resort</option>
                                                                  <option value="448">Port Orleans French Quarter Resort</option>
                                                                  <option value="449">Port Orleans Riverside Resort </option>
                                                                  <option value="456">Regal Sun LBV</option>
                                                                  <option value="458">Royal Plaza LBV</option>
                                                                  <option value="453">Saratoga Springs Resort</option>
                                                                  <option value="432">Sea World</option>
                                                                  <option value="437">Shades of Green</option>
                                                                  <option value="447">Swan Resort</option>
                                                                  <option value="431">Universal Studios</option>
                                                                  <option value="435">Wilderness Lodge</option>
                                                                  <option value="454">Wyndham Palace Resorts</option>
                                                                  <option value="444">Yacht Club Resort</option>
                                                                </optgroup>
                                              
                                              
                                              <optgroup label="SHADES OF GREEN TRANSFERS">
                                              </optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                                                                    <option value="517">Shades of Green</option>
                                                                    </optgroup>
                                                                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                                                                         <option value="513">Greyhound</option>
                                                                                                          <option value="514">Amtrak Orlando</option>
                                                                                                          <option value="516">Port Canaveral</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                                                                        <option value="460">Animal Kingdom</option>
                                                                                                          <option value="461">Blizzard Beach</option>
                                                                                                          <option value="462">Epcot Center</option>
                                                                                                          <option value="463">Magic Kingdom</option>
                                                                                                          <option value="464">Hollywood Studios</option>
                                                                                                          <option value="465">Downtown Disney</option>
                                                                                                          <option value="466">Typhoon Lagoon</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                                                                        <option value="467">Pirate Dinner Show</option>
                                                                                                          <option value="468">Arabian Knights</option>
                                                                                                          <option value="469">Bush Gardens</option>
                                                                                                          <option value="470">Citrus Bowl</option>
                                                                                                          <option value="471">Gatorland</option>
                                                                                                          <option value="472">Kennedy Space Center</option>
                                                                                                          <option value="473">Medevil Times</option>
                                                                                                          <option value="474">Sea World</option>
                                                                                                          <option value="475">Amway Arena</option>
                                                                                                          <option value="476">Univeral Studios</option>
                                                                                                          <option value="477">Wet'n Wild</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                                                                        <option value="478">Swan/Dolphin</option>
                                                                                                          <option value="479">Epcot Resorts</option>
                                                                                                          <option value="480">Coranado Springs</option>
                                                                                                          <option value="481">All Star Resorts</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                                                                        <option value="482">Bay Hill</option>
                                                                                                          <option value="483">Villas of Grand Cypress</option>
                                                                                                          <option value="484">Lake Buena Vista Golf</option>
                                                                                                          <option value="485">Lake Nona</option>
                                                                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                                                                        <option value="487">Belz Factory Outlet</option>
                                                                                                          <option value="488">Crossroads LBV</option>
                                                                                                          <option value="489">Florida Mall</option>
                                                                                                          <option value="490">Mall of Millenia</option>
                                                                                                          <option value="491">Point Orlando</option>
                                                                                                          <option value="492">Premium Outlet</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                                                                        <option value="493">Antonio's Sandlake</option>
                                                                                                          <option value="494">Charley's Steak 192</option>
                                                                                                          <option value="495">Charley's Steak I-Drive</option>
                                                                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                                                                          <option value="497">Louis Downtown</option>
                                                                                                          <option value="498">Moonfish Sandlake</option>
                                                                                                          <option value="499">Morton's of Chicago</option>
                                                                                                          <option value="500">Rachel's Steak House</option>
                                                                                                          <option value="501">Ruth Chris Steak House</option>
                                                                                                          <option value="502">Timpano's</option>
                                                                                                          <option value="503">Tuscany (MWC)</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                                                                        <option value="504">Celebrations Hospital</option>
                                                                                                          <option value="505">Convention Center</option>
                                                                                                          <option value="506">I-Drive North</option>
                                                                                                          <option value="507">I-Drive South</option>
                                                                                                          <option value="530">Daytona 500</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                                                                        <option value="508">Marriott World Center</option>
                                                                                                          <option value="509">Mary Queen of the Universe</option>
                                                                                                          <option value="510">Sandlake Hospital</option>
                                                                                                          <option value="511">South OBT</option>
                                                                                                        </optgroup>
                                                                  
                                              </select>
                                                            </div>
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Transfer Date:</label>
                                                                <input type="date" class="form-control" />
                                                                <small>MM/DD/YYYY</small>
                                                            </div><!------------end of form group-->
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Time:</label>
                                                                <div class="d-flex">
                                                                    <select class="form-control col-md-2 mr-1" name="h1"><option value="12">12</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>
                                                                    <select class="form-control col-md-2 ml-1 mr-1"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
                                                                    <select class="form-control col-md-2 ml-1"><option value="AM">AM</option><option value="PM">PM</option></select>
                                                                </div><!------d-flex-->
                                                            </div><!------------end of form group-->
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">To:</label>
                                                                <select class="form-control" required="yes" size="1" onchange="javascript:getNewlocationtoContent1_1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                                                                    <option value="" selected="selected"> -- Select One -- </option>
                                                                    <optgroup label="Orlando Airports">
                                                                                      <option value="421">Orlando Airport </option>
                                                                  <option value="512">Orlando Exec. Airport</option>
                                                                  <option value="422">Orlando Sanford Airport </option>
                                                                                      </optgroup>
                                                                    <optgroup label="Orlando Hotels">
                                                                                     <option value="186">Adventure Motel</option>
                                                                  <option value="187">All-Star Movies Resort</option>
                                                                  <option value="188">All-Star Music Resort</option>
                                                                  <option value="189">All-Star Sports Resort</option>
                                                                  <option value="389">Ambassador Motel</option>
                                                                  <option value="22">Ambassador TD Waterhouse</option>
                                                                  <option value="190">Amerihost Resort at Main Gate</option>
                                                                  <option value="69">AmeriSuites Convention Center</option>
                                                                  <option value="1">AmeriSuites International Airport </option>
                                                                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                                                                  <option value="70">AmeriSuites Universal</option>
                                                                  <option value="23">Amtrak - Orlando</option>
                                                                  <option value="193">Animal Kingdom Park</option>
                                                                  <option value="194">Arabian Nights</option>
                                                                  <option value="71">Bay Hill Club &amp; Lodge</option>
                                                                  <option value="72">Baymont In &amp; Suites</option>
                                                                  <option value="195">Baymont Inn Kissimmee</option>
                                                                  <option value="73">Baymont Universal Hotel</option>
                                                                  <option value="24">Best Value Inn</option>
                                                                  <option value="390">Best Western Heritage Park</option>
                                                                  <option value="196">Best Western Lake Buena Vista</option>
                                                                  <option value="198">Best Western Lakeside</option>
                                                                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                                                                  <option value="74">Best Western MovieLand</option>
                                                                  <option value="391">Best Western Mt. Vernon</option>
                                                                  <option value="25">Best Western Orlando West</option>
                                                                  <option value="75">Best Western Plaza International</option>
                                                                  <option value="76">Best Western Universal Inn</option>
                                                                  <option value="26">Best Western Winter Garden</option>
                                                                  <option value="199">Blizzard Beach</option>
                                                                  <option value="200">Blue Tree Resort</option>
                                                                  <option value="201">BoardWalk at Disney</option>
                                                                  <option value="202">Bryans Spanish Cove</option>
                                                                  <option value="203">Budget Inn West</option>
                                                                  <option value="204">Buena Vista Motel</option>
                                                                  <option value="205">Buena Vista Palace Resort and Spa</option>
                                                                  <option value="206">Buena Vista Suites</option>
                                                                  <option value="392">Candlewood Suites</option>
                                                                  <option value="207">Caribbean Beach Resort</option>
                                                                  <option value="208">Caribe Royale Suites</option>
                                                                  <option value="209">Casa Rosa Main Gate</option>
                                                                  <option value="210">Celebration Hotel</option>
                                                                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                                                                  <option value="218">Celebrity World Resort</option>
                                                                  <option value="212">Central Motel</option>
                                                                  <option value="213">Chalet Motel</option>
                                                                  <option value="214">Chateau Motel</option>
                                                                  <option value="215">Chatham Square</option>
                                                                  <option value="216">Cirque Du Soleil</option>
                                                                  <option value="27">Citrus Bowl</option>
                                                                  <option value="28">Citrus Club</option>
                                                                  <option value="2">Clarion Hotel Airport</option>
                                                                  <option value="78">Clarion Hotel Universal</option>
                                                                  <option value="217">Clarion Main Gate West</option>
                                                                  <option value="79">Comfort Inn International</option>
                                                                  <option value="219">Comfort Inn Lake Buena Vista</option>
                                                                  <option value="220">Comfort Inn Main Gate West</option>
                                                                  <option value="393">Comfort Inn North</option>
                                                                  <option value="80">Comfort Inn Universal</option>
                                                                  <option value="221">Comfort Suites</option>
                                                                  <option value="3">Comfort Suites Airport</option>
                                                                  <option value="29">Comfort Suites Downtown Orlando</option>
                                                                  <option value="222">Comfort Suites Main Gate</option>
                                                                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                                                                  <option value="223">Commons Apartments</option>
                                                                  <option value="224">Contemporary Resort</option>
                                                                  <option value="225">Continental Motel</option>
                                                                  <option value="227">Country Hearth Inn &amp; Suites</option>
                                                                  <option value="228">Country Inn &amp; Suites</option>
                                                                  <option value="82">Country Inn &amp; Suites Universal</option>
                                                                  <option value="229">Crown Motel</option>
                                                                  <option value="4">Crowne Plaza Orlando Airport</option>
                                                                  <option value="83">Crowne Plaza Resort</option>
                                                                  <option value="84">Crowne Plaza Universal</option>
                                                                  <option value="231">Cypress Pointe Resort</option>
                                                                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                                                                  <option value="30">Days Inn 33rd Street</option>
                                                                  <option value="5">Days Inn Airport</option>
                                                                  <option value="85">Days Inn Convention Center</option>
                                                                  <option value="86">Days Inn International North</option>
                                                                  <option value="232">Days Inn Kissimmee Airport</option>
                                                                  <option value="233">Days Inn Kissimmee West</option>
                                                                  <option value="234">Days Inn Main Gate East</option>
                                                                  <option value="235">Days Inn Main Gate West</option>
                                                                  <option value="31">Days Inn Midtown</option>
                                                                  <option value="395">Days Inn Turnpike</option>
                                                                  <option value="87">Days Inn Universal</option>
                                                                  <option value="33">Days Inn West Hwy 50</option>
                                                                  <option value="394">Days Inn Winter Park</option>
                                                                  <option value="236">Days Suites - Old Town</option>
                                                                  <option value="34">DeLux Inn</option>
                                                                  <option value="88">Discovery Cove</option>
                                                                  <option value="237">Disney Back Yard Barbeque</option>
                                                                  <option value="238">Disney Beach Club Resort LBV</option>
                                                                  <option value="239">Disney Beach Club Villas</option>
                                                                  <option value="260">Disney MGM Studios</option>
                                                                  <option value="262">Dixie Stampede</option>
                                                                  <option value="263">Dolphin Hotel at Disney</option>
                                                                  <option value="459">Double Tree Guest Suite</option>
                                                                  <option value="89">Doubletree Castle</option>
                                                                  <option value="264">DoubleTree Club Hotel</option>
                                                                  <option value="90">Doubletree Universal Orlando</option>
                                                                  <option value="261">Downtown Disney</option>
                                                                  <option value="254">Eastgate Inn Resort</option>
                                                                  <option value="91">Econo Roadway</option>
                                                                  <option value="35">Econolodge Central</option>
                                                                  <option value="255">Econolodge Hawaiian Village</option>
                                                                  <option value="256">Econolodge Main Gate Central</option>
                                                                  <option value="257">Econolodge Polynesian Resort</option>
                                                                  <option value="258">Embassy Grand Beach</option>
                                                                  <option value="6">Embassy Suites Airport</option>
                                                                  <option value="396">Embassy Suites Altamonte</option>
                                                                  <option value="38">Embassy Suites Downtown Orlando</option>
                                                                  <option value="92">Embassy Suites International Drive</option>
                                                                  <option value="93">Embassy Suites Jamaican</option>
                                                                  <option value="259">Embassy Suites LBV</option>
                                                                  <option value="240">Enterprise Motel</option>
                                                                  <option value="241">Epcot</option>
                                                                  <option value="36">Executive Inn</option>
                                                                  <option value="37">Executive Inn Oak Ridge</option>
                                                                  <option value="94">Extended Stay</option>
                                                                  <option value="96">Extended Stay America Universal</option>
                                                                  <option value="130">Extended Stay Deluxe</option>
                                                                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                                                                  <option value="7">Fairfield Inn Airport</option>
                                                                  <option value="97">Fairfield Inn and Suites</option>
                                                                  <option value="242">Fairfield Inn at Lake Bryan</option>
                                                                  <option value="39">Fairfield Inn Orlando South</option>
                                                                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                                                                  <option value="244">Fantasy World Club Villas</option>
                                                                  <option value="40">Flamingo Motel North</option>
                                                                  <option value="41">Florida Mall</option>
                                                                  <option value="42">Florida Mall Hotel</option>
                                                                  <option value="43">Florida Mall Inn</option>
                                                                  <option value="245">Florida Vacation Villas</option>
                                                                  <option value="246">Fort Wilderness Campgrounds</option>
                                                                  <option value="247">Four Winds Motel</option>
                                                                  <option value="248">Gator Motel</option>
                                                                  <option value="397">Gatorland</option>
                                                                  <option value="249">Gaylord Palms Resort</option>
                                                                  <option value="250">Golden Link Motel</option>
                                                                  <option value="99">Grande Lakes Orlando</option>
                                                                  <option value="252">Grande Lakes Resort</option>
                                                                  <option value="44">Greyhound Bus Lines</option>
                                                                  <option value="253">Grosvenor Resort</option>
                                                                  <option value="45">Guest House International</option>
                                                                  <option value="100">Hampton Inn &amp; Suites</option>
                                                                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                                                                  <option value="8">Hampton Inn Airport</option>
                                                                  <option value="398">Hampton Inn Altamonte</option>
                                                                  <option value="101">Hampton Inn Convention Center</option>
                                                                  <option value="46">Hampton Inn Florida Mall</option>
                                                                  <option value="102">Hampton Inn Kirkman </option>
                                                                  <option value="266">Hampton Inn Lake Buena Vista</option>
                                                                  <option value="267">Hampton Inn Main Gate</option>
                                                                  <option value="268">Hampton Inn Main Gate West</option>
                                                                  <option value="103">Hampton Inn Universal</option>
                                                                  <option value="105">Hard Rock Hotel</option>
                                                                  <option value="106">Hard Rock Live</option>
                                                                  <option value="107">Hawthorn Suites At SeaWorld </option>
                                                                  <option value="108">Hawthorn Suites Universal</option>
                                                                  <option value="269">Hawthorne Suites LBV</option>
                                                                  <option value="270">High Point World Resort</option>
                                                                  <option value="110">Hilton Garden Inn</option>
                                                                  <option value="9">Hilton Garden Inn Airport</option>
                                                                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                                                                  <option value="111">Hilton Grand Vacation Club</option>
                                                                  <option value="271">Hilton Grand Vacation I - Drive</option>
                                                                  <option value="272">Hilton in the Walt Disney Resort</option>
                                                                  <option value="538">Hilton Orlando</option>
                                                                  <option value="112">Holiday Express Wet 'n' Wild</option>
                                                                  <option value="113">Holiday Inn Convention Center</option>
                                                                  <option value="10">Holiday Inn Express Airport</option>
                                                                  <option value="399">Holiday Inn Express Exit 244</option>
                                                                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                                                                  <option value="274">Holiday Inn Express LBV</option>
                                                                  <option value="114">Holiday Inn International Drive</option>
                                                                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                                                                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                                                                  <option value="400">Holiday Inn Orlando North</option>
                                                                  <option value="11">Holiday Inn Select Airport</option>
                                                                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                                                                  <option value="115">Holiday Inn Universal Towers</option>
                                                                  <option value="277">Holiday Inn Walt Disney World</option>
                                                                  <option value="278">Holiday Villas Of Sommerset</option>
                                                                  <option value="116">Holy Land Zion Experience</option>
                                                                  <option value="117">Homewood Suites International</option>
                                                                  <option value="279">Homewood Suites Lake Buena Vista</option>
                                                                  <option value="280">Homewood Suites Parkway</option>
                                                                  <option value="118">Horizons at Orlando</option>
                                                                  <option value="401">Hotel Orlando North</option>
                                                                  <option value="281">House of Blues</option>
                                                                  <option value="282">Howard Johnson Enchanted Land</option>
                                                                  <option value="283">Howard Johnson Express &amp; Suite</option>
                                                                  <option value="284">Howard Johnson Express Inn</option>
                                                                  <option value="119">Howard Johnson Express Inn Suites</option>
                                                                  <option value="120">Howard Johnson Hawaiian Court</option>
                                                                  <option value="121">Howard Johnson International  Drive</option>
                                                                  <option value="285">Howard Johnson MGE Watermania</option>
                                                                  <option value="122">Howard Johnson Plaza Resort</option>
                                                                  <option value="286">Howard Johnson Westgate</option>
                                                                  <option value="48">Howard Johnson's TD Waterhouse</option>
                                                                  <option value="402">Howard Johnson's Turnpike</option>
                                                                  <option value="49">Howard Vernon Motel</option>
                                                                  <option value="287">Hyatt Grand Cypress</option>
                                                                  <option value="12">Hyatt Orlando Airport</option>
                                                                  <option value="534">Hyatt Place </option>
                                                                  <option value="123">I-Drive Inn</option>
                                                                  <option value="124">Inn and Suites International</option>
                                                                  <option value="288">Inn at Summer Bay</option>
                                                                  <option value="125">Islands Of Adventure</option>
                                                                  <option value="50">Jet Air Orlando</option>
                                                                  <option value="126">JW Marriott Grande Lakes</option>
                                                                  <option value="289">Kids Village</option>
                                                                  <option value="403">Kingswood Resort</option>
                                                                  <option value="290">Knight's Inn Kissimmee</option>
                                                                  <option value="291">Knight's Inn Main Gate East</option>
                                                                  <option value="292">Knight's Inn Main Gate West</option>
                                                                  <option value="51">Knights Inn East Colonial</option>
                                                                  <option value="127">La Quinta Inn &amp; Suites</option>
                                                                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                                                                  <option value="13">La Quinta Inn Airport</option>
                                                                  <option value="152">La Quinta International Drive</option>
                                                                  <option value="95">La Quinta International Drive North</option>
                                                                  <option value="404">La Quinta Orlando North</option>
                                                                  <option value="293">Lake Buena Vista Hotel</option>
                                                                  <option value="405">Lambert Inn</option>
                                                                  <option value="52">Landmark Hotel</option>
                                                                  <option value="294">Legacy Grand Hotel</option>
                                                                  <option value="128">Leisure Resorts</option>
                                                                  <option value="295">Liki Tiki Village</option>
                                                                  <option value="53">Loch Haven Inn</option>
                                                                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                                                                  <option value="297">Magic Castle Main Gate</option>
                                                                  <option value="298">Magic Kingdom</option>
                                                                  <option value="299">Magic Tree Resort</option>
                                                                  <option value="300">Main Gate Inn</option>
                                                                  <option value="301">Maple Leaf Hotel</option>
                                                                  <option value="15">Marriott Airport</option>
                                                                  <option value="54">Marriott Court Yard Downtown</option>
                                                                  <option value="16">Marriott Courtyard Airport</option>
                                                                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                                                                  <option value="129">Marriott Courtyard International Drive</option>
                                                                  <option value="406">Marriott Courtyard Mailand</option>
                                                                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                                                                  <option value="153">Marriott Cypress Harbor</option>
                                                                  <option value="55">Marriott Downtown Centroplex</option>
                                                                  <option value="154">Marriott Grand Vista</option>
                                                                  <option value="304">Marriott Orlando World Center</option>
                                                                  <option value="155">Marriott Residence At SeaWorld</option>
                                                                  <option value="156">Marriott Residence Inn I-Drive</option>
                                                                  <option value="157">Marriott Residence Universal</option>
                                                                  <option value="158">Masters Inn International Drive</option>
                                                                  <option value="305">Masters Inn Main Gate East</option>
                                                                  <option value="306">Masters Inn Main Gate West</option>
                                                                  <option value="307">Medieval Times</option>
                                                                  <option value="159">Mercado</option>
                                                                  <option value="160">Microtel Inn and Suites</option>
                                                                  <option value="308">Monte Carlo Motel</option>
                                                                  <option value="161">Motel 6 International Drive</option>
                                                                  <option value="309">Motel 6 Orlando</option>
                                                                  <option value="310">Motel 6 Orlando West</option>
                                                                  <option value="311">Nickelodeon Family Suites</option>
                                                                  <option value="312">Oak Plantation Resort</option>
                                                                  <option value="313">Oasis Inn Main Gate</option>
                                                                  <option value="314">Oasis Lakes Resort</option>
                                                                  <option value="315">Old Key West</option>
                                                                  <option value="316">Old Town</option>
                                                                  <option value="162">Orange County Convention Center</option>
                                                                  <option value="317">Orbit One</option>
                                                                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                                                                  <option value="318">Orlando Premium Outlets</option>
                                                                  <option value="164">Orlando Resort</option>
                                                                  <option value="165">Orlando Sunshine Resort</option>
                                                                  <option value="319">Outdoor Resort</option>
                                                                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                                                                  <option value="321">Palm Motel</option>
                                                                  <option value="131">Parc Corniche Resorts</option>
                                                                  <option value="322">Park Inn West</option>
                                                                  <option value="407">Park Plaza Hotel</option>
                                                                  <option value="323">Parkside Record Inn &amp; Suites</option>
                                                                  <option value="324">Parkway International</option>
                                                                  <option value="325">Parkway Motel</option>
                                                                  <option value="56">Parliament House</option>
                                                                  <option value="132">Peabody Orlando</option>
                                                                  <option value="133">Pirates Dinner Adventure</option>
                                                                  <option value="326">Planet Hollywood</option>
                                                                  <option value="134">Pointe Orlando</option>
                                                                  <option value="327">Polynesian Isles Resort</option>
                                                                  <option value="328">Polynesian Resort</option>
                                                                  <option value="329">Pop Century Resort</option>
                                                                  <option value="330">Port Orleans French Quarter</option>
                                                                  <option value="331">Port Orleans Riverside</option>
                                                                  <option value="135">Portofino Bay Hotel</option>
                                                                  <option value="332">Premium Outlet Mall</option>
                                                                  <option value="136">Prime Factory Outlet Mall</option>
                                                                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                                                                  <option value="18">Quality Inn Airport</option>
                                                                  <option value="408">Quality Inn Altamonte</option>
                                                                  <option value="137">Quality Inn Low Q</option>
                                                                  <option value="333">Quality Inn Main Gate West</option>
                                                                  <option value="138">Quality Inn Plaza International</option>
                                                                  <option value="334">Quality Inn Polynesian Resort</option>
                                                                  <option value="335">Quality Inn Suites East Gate</option>
                                                                  <option value="409">Quality Inn Turnpike</option>
                                                                  <option value="336">Quality Suites Main Gate East</option>
                                                                  <option value="139">Quality Suites Universal Studios</option>
                                                                  <option value="140">Race Rock</option>
                                                                  <option value="375">Radison World Gate Resort</option>
                                                                  <option value="141">Radisson Barcelo</option>
                                                                  <option value="373">Radisson Lake Buena Vista</option>
                                                                  <option value="374">Radisson Parkway</option>
                                                                  <option value="58">Radisson Plaza Downtown Orlando</option>
                                                                  <option value="412">Ramada Downtown Kissimmee</option>
                                                                  <option value="376">Ramada East Gate Fountain Park</option>
                                                                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                                                                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                                                                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                                                                  <option value="60">Ramada Ltd. Florida Mall</option>
                                                                  <option value="377">Ramada Plaza Gateway</option>
                                                                  <option value="61">Ramada Plaza John Young</option>
                                                                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                                                                  <option value="413">Ramada Vacation Homes</option>
                                                                  <option value="411">RDV Sportsplex</option>
                                                                  <option value="379">Red Carpet Inn</option>
                                                                  <option value="143">Red Roof Inn International Drive</option>
                                                                  <option value="380">Red Roof Inn Main Gate East</option>
                                                                  <option value="144">Red Roof Inn Universal</option>
                                                                  <option value="523">Regal Sun LBV</option>
                                                                  <option value="19">Renaissance Airport</option>
                                                                  <option value="145">Renaissance Orlando Resort</option>
                                                                  <option value="414">Residence Inn Altamonte</option>
                                                                  <option value="531">Reunion </option>
                                                                  <option value="146">Riande Continental Plaza</option>
                                                                  <option value="415">Ritz Express</option>
                                                                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                                                                  <option value="337">RIU Orlando Resort</option>
                                                                  <option value="148">Rodeway Inn International Drive</option>
                                                                  <option value="149">Rosen Centre Hotel</option>
                                                                  <option value="150">Rosen Plaza Hotel</option>
                                                                  <option value="338">Royal Celebration Inn</option>
                                                                  <option value="151">Royal Pacific Resort</option>
                                                                  <option value="339">Royal Palms</option>
                                                                  <option value="340">Royal Plaza</option>
                                                                  <option value="341">Saratoga Resort Villas</option>
                                                                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                                                                  <option value="166">SeaWorld</option>
                                                                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                                                                  <option value="344">Sevilla Inn</option>
                                                                  <option value="525">Shades of Green</option>
                                                                  <option value="346">Sheraton Safari</option>
                                                                  <option value="167">Sheraton Studio City Hotel</option>
                                                                  <option value="20">Sheraton Suites</option>
                                                                  <option value="21">Sheraton Suites Airport</option>
                                                                  <option value="347">Sheraton Vistana Resort</option>
                                                                  <option value="348">Sheraton Vistana Villages</option>
                                                                  <option value="168">Sheraton World</option>
                                                                  <option value="169">Shingle Creek</option>
                                                                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                                                                  <option value="350">Sierra Suites Lake Buena Vista</option>
                                                                  <option value="351">Silver Lake Resort</option>
                                                                  <option value="170">Sleep Inn</option>
                                                                  <option value="171">Sleep Inn &amp; Suites</option>
                                                                  <option value="352">Sleep Inn Main Gate</option>
                                                                  <option value="172">Spring Hill Suites</option>
                                                                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                                                                  <option value="416">Stadium Inn</option>
                                                                  <option value="354">Star Island Resort</option>
                                                                  <option value="175">Staybridge Suites I-Drive</option>
                                                                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                                                                  <option value="173">Studio Inn</option>
                                                                  <option value="174">Studio Plus</option>
                                                                  <option value="62">Suburban Lodge</option>
                                                                  <option value="176">Suburban Lodge</option>
                                                                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                                                                  <option value="358">Summer Florida Inn</option>
                                                                  <option value="359">Sun Motel</option>
                                                                  <option value="360">Super 8</option>
                                                                  <option value="361">Super 8 East Main Gate</option>
                                                                  <option value="362">Super 8 Lake Side Main Gate</option>
                                                                  <option value="177">Super 8 Universal</option>
                                                                  <option value="417">Super 8 Vine Street</option>
                                                                  <option value="363">Swan Hotel</option>
                                                                  <option value="63">TD Waterhouse Centre</option>
                                                                  <option value="536">The Fountains Resort</option>
                                                                  <option value="364">Thriftlodge East</option>
                                                                  <option value="365">Travelers Inn</option>
                                                                  <option value="418">Travelodge Altamonte</option>
                                                                  <option value="64">Travelodge Centroplex</option>
                                                                  <option value="65">Travelodge East Colonial</option>
                                                                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                                                                  <option value="178">Travelodge I-Drive</option>
                                                                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                                                                  <option value="367">Travelodge Main Gate East</option>
                                                                  <option value="368">Travelodge Suites East Gate Orange</option>
                                                                  <option value="369">Travelodge Suites Main Gate East</option>
                                                                  <option value="370">Tropical Palms Resort</option>
                                                                  <option value="371">Typhoon Lagoon</option>
                                                                  <option value="77">Universals CityWalk</option>
                                                                  <option value="67">Vacation Lodge </option>
                                                                  <option value="372">Vacation Village At Parkway</option>
                                                                  <option value="420">Vacation Village Resort</option>
                                                                  <option value="381">Viking Motel</option>
                                                                  <option value="382">Villas Of Grand Cypress</option>
                                                                  <option value="383">Vista Way Apartments</option>
                                                                  <option value="532">Waldorf Astoria Orlando</option>
                                                                  <option value="179">Wellesley Inn &amp; Suites</option>
                                                                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                                                                  <option value="181">West Gate Lakes</option>
                                                                  <option value="182">West Gate Palace</option>
                                                                  <option value="385">West Gate Towers</option>
                                                                  <option value="386">West Gate Vacation Villas</option>
                                                                  <option value="384">Westgate Inn</option>
                                                                  <option value="68">Westin Grand Bohemian</option>
                                                                  <option value="66">Westside Inn &amp; Suites</option>
                                                                  <option value="183">Wet 'n' Wild</option>
                                                                  <option value="529">Wilderness Lodge</option>
                                                                  <option value="184">Wingate Hotel</option>
                                                                  <option value="185">Wyndham Orlando Resort</option>
                                                                  <option value="522">Wyndham Palace Resorts</option>
                                                                  <option value="388">Yacht Club</option>
                                                                </optgroup>
                                              <optgroup label="Cruise Lines">
                                                                                     <option value="423">Disney Cruise Line</option>
                                                                  <option value="425">Carnival Cruise Line</option>
                                                                  <option value="426">Norwegian Cruise Line</option>
                                                                  <option value="427">Royal Caribbean International</option>
                                                                  <option value="428">Radisson Resort</option>
                                                                  <option value="429">Royal Mansions Resort</option>
                                                                  <option value="430">Other</option>
                                                                </optgroup>
                                              <optgroup label="Theme Parks">
                                                <option value="431">Universal Studios</option>
                                                <option value="432">Sea World</option>
                                                                    </optgroup>
                                                                    <optgroup label="Disney resorts">
                                                                                     <option value="441">AKL Resort</option>
                                                                  <option value="440">All Star Movies</option>
                                                                  <option value="439">All Star Music</option>
                                                                  <option value="438">All Star Sports</option>
                                                                  <option value="443">Beach Club Resort</option>
                                                                  <option value="457">Best western LBV</option>
                                                                  <option value="442">Board Walk Resort</option>
                                                                  <option value="451">Caribbean Beach Resort</option>
                                                                  <option value="433">Contemporary</option>
                                                                  <option value="445">Coronado Springs </option>
                                                                  <option value="446">Dolphin Resort</option>
                                                                  <option value="434">Grand Floridian</option>
                                                                  <option value="455">Hilton LBV</option>
                                                                  <option value="535">LEGO LAND</option>
                                                                  <option value="533">LEGO Land</option>
                                                                  <option value="452">Old Key West Resort</option>
                                                                  <option value="436">Polynesian</option>
                                                                  <option value="450">Pop Century Resort</option>
                                                                  <option value="448">Port Orleans French Quarter Resort</option>
                                                                  <option value="449">Port Orleans Riverside Resort </option>
                                                                  <option value="456">Regal Sun LBV</option>
                                                                  <option value="458">Royal Plaza LBV</option>
                                                                  <option value="453">Saratoga Springs Resort</option>
                                                                  <option value="432">Sea World</option>
                                                                  <option value="437">Shades of Green</option>
                                                                  <option value="447">Swan Resort</option>
                                                                  <option value="431">Universal Studios</option>
                                                                  <option value="435">Wilderness Lodge</option>
                                                                  <option value="454">Wyndham Palace Resorts</option>
                                                                  <option value="444">Yacht Club Resort</option>
                                                                </optgroup>
                                              
                                              <optgroup label="SHADES OF GREEN TRANSFERS">
                                              </optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                                                                    <option value="517">Shades of Green</option>
                                                                    </optgroup>
                                                                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                                                                         <option value="513">Greyhound</option>
                                                                                                          <option value="514">Amtrak Orlando</option>
                                                                                                          <option value="516">Port Canaveral</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                                                                        <option value="460">Animal Kingdom</option>
                                                                                                          <option value="461">Blizzard Beach</option>
                                                                                                          <option value="462">Epcot Center</option>
                                                                                                          <option value="463">Magic Kingdom</option>
                                                                                                          <option value="464">Hollywood Studios</option>
                                                                                                          <option value="465">Downtown Disney</option>
                                                                                                          <option value="466">Typhoon Lagoon</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                                                                        <option value="467">Pirate Dinner Show</option>
                                                                                                          <option value="468">Arabian Knights</option>
                                                                                                          <option value="469">Bush Gardens</option>
                                                                                                          <option value="470">Citrus Bowl</option>
                                                                                                          <option value="471">Gatorland</option>
                                                                                                          <option value="472">Kennedy Space Center</option>
                                                                                                          <option value="473">Medevil Times</option>
                                                                                                          <option value="474">Sea World</option>
                                                                                                          <option value="475">Amway Arena</option>
                                                                                                          <option value="476">Univeral Studios</option>
                                                                                                          <option value="477">Wet'n Wild</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                                                                        <option value="478">Swan/Dolphin</option>
                                                                                                          <option value="479">Epcot Resorts</option>
                                                                                                          <option value="480">Coranado Springs</option>
                                                                                                          <option value="481">All Star Resorts</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                                                                        <option value="482">Bay Hill</option>
                                                                                                          <option value="483">Villas of Grand Cypress</option>
                                                                                                          <option value="484">Lake Buena Vista Golf</option>
                                                                                                          <option value="485">Lake Nona</option>
                                                                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                                                                        <option value="487">Belz Factory Outlet</option>
                                                                                                          <option value="488">Crossroads LBV</option>
                                                                                                          <option value="489">Florida Mall</option>
                                                                                                          <option value="490">Mall of Millenia</option>
                                                                                                          <option value="491">Point Orlando</option>
                                                                                                          <option value="492">Premium Outlet</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                                                                        <option value="493">Antonio's Sandlake</option>
                                                                                                          <option value="494">Charley's Steak 192</option>
                                                                                                          <option value="495">Charley's Steak I-Drive</option>
                                                                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                                                                          <option value="497">Louis Downtown</option>
                                                                                                          <option value="498">Moonfish Sandlake</option>
                                                                                                          <option value="499">Morton's of Chicago</option>
                                                                                                          <option value="500">Rachel's Steak House</option>
                                                                                                          <option value="501">Ruth Chris Steak House</option>
                                                                                                          <option value="502">Timpano's</option>
                                                                                                          <option value="503">Tuscany (MWC)</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                                                                        <option value="504">Celebrations Hospital</option>
                                                                                                          <option value="505">Convention Center</option>
                                                                                                          <option value="506">I-Drive North</option>
                                                                                                          <option value="507">I-Drive South</option>
                                                                                                          <option value="530">Daytona 500</option>
                                                                                                        </optgroup>
                                                                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                                                                        <option value="508">Marriott World Center</option>
                                                                                                          <option value="509">Mary Queen of the Universe</option>
                                                                                                          <option value="510">Sandlake Hospital</option>
                                                                                                          <option value="511">South OBT</option>
                                                                                                        </optgroup>
                                                                  
                                              </select>
                                                            </div><!------------end of form group-->
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Driver:</label>
                                                                <select class="form-control" name="drivers_id1">
                                                                    <option value="0"> -- Select One -- </option>
                                                                    <option value="114">Abdel Aziz Tarhani</option><option value="100">ABDERAHMAN MAKBOUL</option><option value="128">Alberto Irausquin</option><option value="75">Alfredo Cipriano Barros</option><option value="130">Andy Negede</option><option value="116">Arsenio Perez-Corujo</option><option value="131">Claudio DeSilva</option><option value="113">Eyob Hailab</option><option value="132">First Choice </option><option value="53">Glenn Rezende </option><option value="127">Kamel Chetouane</option><option value="137">Mebratu Dawit Abraha</option><option value="129">Peter Piantinis</option><option value="122">Rash Test IWS</option><option value="118">Sahid  Alpizar</option><option value="134">Simret  Tegegne</option><option value="136">Tesfu Bokre</option><option value="133">Willie Miller III</option><option value="135">Yohannes   Yohannes</option>				  </select>
                                                            </div><!-------------end of group-->
                                                        </div><!-------------tripValidation-->
                                                </div>
     <!--------------------------wayDivCheck--------------------------------------->

     <div id="admDivCheck" class="customBundle box" style="display:none;">
                              
        <div class="form-group ml-2 mt-3 tripValidation">
            <div class="p-3 mb-2 bg-info text-white text-center"><b>Transfer</b></div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">From:</label>
                <select class="form-control" name="from1" id="from1" required="yes" size="1" onchange="javascript:getNewlocationContent1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>

<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>


<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Transfer Date:</label>
                <input type="date" class="form-control" />
                <small>MM/DD/YYYY</small>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Time:</label>
                <div class="d-flex">
                    <select class="form-control col-md-2 mr-1" name="h1"><option value="12">12</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>
                    <select class="form-control col-md-2 ml-1 mr-1"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
                    <select class="form-control col-md-2 ml-1"><option value="AM">AM</option><option value="PM">PM</option></select>
                </div><!------d-flex-->
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">To:</label>
                <select class="form-control" required="yes" size="1" onchange="javascript:getNewlocationtoContent1_1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>
<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>

<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Driver:</label>
                <select class="form-control" name="drivers_id1">
                    <option value="0"> -- Select One -- </option>
                    <option value="114">Abdel Aziz Tarhani</option><option value="100">ABDERAHMAN MAKBOUL</option><option value="128">Alberto Irausquin</option><option value="75">Alfredo Cipriano Barros</option><option value="130">Andy Negede</option><option value="116">Arsenio Perez-Corujo</option><option value="131">Claudio DeSilva</option><option value="113">Eyob Hailab</option><option value="132">First Choice </option><option value="53">Glenn Rezende </option><option value="127">Kamel Chetouane</option><option value="137">Mebratu Dawit Abraha</option><option value="129">Peter Piantinis</option><option value="122">Rash Test IWS</option><option value="118">Sahid  Alpizar</option><option value="134">Simret  Tegegne</option><option value="136">Tesfu Bokre</option><option value="133">Willie Miller III</option><option value="135">Yohannes   Yohannes</option>				  </select>
            </div><!-------------end of group-->
        </div><!-------------tripValidation-->

       
    </div>
    <!------------------admDivCheck---------->
    <div id="threeDivCheck" class="customBundle box" style="display:none;">
        <div class="form-group ml-2 mt-3 tripValidation">
            <div class="p-3 mb-2 bg-info text-white text-center"><b>Transfer</b></div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">From:</label>
                <select class="form-control" name="from1" id="from1" required="yes" size="1" onchange="javascript:getNewlocationContent1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>

<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>


<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Transfer Date:</label>
                <input type="date" class="form-control" />
                <small>MM/DD/YYYY</small>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Time:</label>
                <div class="d-flex">
                    <select class="form-control col-md-2 mr-1" name="h1"><option value="12">12</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>
                    <select class="form-control col-md-2 ml-1 mr-1"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
                    <select class="form-control col-md-2 ml-1"><option value="AM">AM</option><option value="PM">PM</option></select>
                </div><!------d-flex-->
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">To:</label>
                <select class="form-control" required="yes" size="1" onchange="javascript:getNewlocationtoContent1_1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>
<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>

<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Driver:</label>
                <select class="form-control" name="drivers_id1">
                    <option value="0"> -- Select One -- </option>
                    <option value="114">Abdel Aziz Tarhani</option><option value="100">ABDERAHMAN MAKBOUL</option><option value="128">Alberto Irausquin</option><option value="75">Alfredo Cipriano Barros</option><option value="130">Andy Negede</option><option value="116">Arsenio Perez-Corujo</option><option value="131">Claudio DeSilva</option><option value="113">Eyob Hailab</option><option value="132">First Choice </option><option value="53">Glenn Rezende </option><option value="127">Kamel Chetouane</option><option value="137">Mebratu Dawit Abraha</option><option value="129">Peter Piantinis</option><option value="122">Rash Test IWS</option><option value="118">Sahid  Alpizar</option><option value="134">Simret  Tegegne</option><option value="136">Tesfu Bokre</option><option value="133">Willie Miller III</option><option value="135">Yohannes   Yohannes</option>				  </select>
            </div><!-------------end of group-->
        </div><!-------------tripValidation-->
        <div class="form-group ml-2 mt-3 tripValidation">
            <div class="p-3 mb-2 bg-info text-white text-center"><b>Transfer</b></div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">From:</label>
                <select class="form-control" name="from1" id="from1" required="yes" size="1" onchange="javascript:getNewlocationContent1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>

<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>


<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Transfer Date:</label>
                <input type="date" class="form-control" />
                <small>MM/DD/YYYY</small>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Time:</label>
                <div class="d-flex">
                    <select class="form-control col-md-2 mr-1" name="h1"><option value="12">12</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>
                    <select class="form-control col-md-2 ml-1 mr-1"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
                    <select class="form-control col-md-2 ml-1"><option value="AM">AM</option><option value="PM">PM</option></select>
                </div><!------d-flex-->
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">To:</label>
                <select class="form-control" required="yes" size="1" onchange="javascript:getNewlocationtoContent1_1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                  </optgroup>
                  <optgroup label="Cruise Lines">
                  <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                  </optgroup>
                  <optgroup label="Theme Parks">
                  <option value="431">Universal Studios</option>
                  <option value="432">Sea World</option>
                  </optgroup>
                  <optgroup label="Disney resorts">
                  <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                  </optgroup>

                  <optgroup label="SHADES OF GREEN TRANSFERS">
                  </optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                  <option value="517">Shades of Green</option>
                  </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                  <option value="513">Greyhound</option>
                  <option value="514">Amtrak Orlando</option>
                  <option value="516">Port Canaveral</option>
                  </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Driver:</label>
                <select class="form-control" name="drivers_id1">
                    <option value="0"> -- Select One -- </option>
                    <option value="114">Abdel Aziz Tarhani</option><option value="100">ABDERAHMAN MAKBOUL</option><option value="128">Alberto Irausquin</option><option value="75">Alfredo Cipriano Barros</option><option value="130">Andy Negede</option><option value="116">Arsenio Perez-Corujo</option><option value="131">Claudio DeSilva</option><option value="113">Eyob Hailab</option><option value="132">First Choice </option><option value="53">Glenn Rezende </option><option value="127">Kamel Chetouane</option><option value="137">Mebratu Dawit Abraha</option><option value="129">Peter Piantinis</option><option value="122">Rash Test IWS</option><option value="118">Sahid  Alpizar</option><option value="134">Simret  Tegegne</option><option value="136">Tesfu Bokre</option><option value="133">Willie Miller III</option><option value="135">Yohannes   Yohannes</option>				  </select>
            </div><!-------------end of group-->
        </div><!-------------tripValidation-->
        <div class="form-group ml-2 mt-3 tripValidation">
            <div class="p-3 mb-2 bg-info text-white text-center"><b>Transfer</b></div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">From:</label>
                <select class="form-control" name="from1" id="from1" required="yes" size="1" onchange="javascript:getNewlocationContent1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                  <option value="" selected="selected"> -- Select One -- </option>
                  <optgroup label="Orlando Airports">
                  <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                  </optgroup>
                  <optgroup label="Orlando Hotels">
                  <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>

<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>


<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Transfer Date:</label>
                <input type="date" class="form-control" />
                <small>MM/DD/YYYY</small>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Time:</label>
                <div class="d-flex">
                    <select class="form-control col-md-2 mr-1" name="h1"><option value="12">12</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>
                    <select class="form-control col-md-2 ml-1 mr-1"><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select>
                    <select class="form-control col-md-2 ml-1"><option value="AM">AM</option><option value="PM">PM</option></select>
                </div><!------d-flex-->
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">To:</label>
                <select class="form-control" required="yes" size="1" onchange="javascript:getNewlocationtoContent1_1(this.value); JavaScript:xmlhttpPost('calculate_sog.php');">
                    <option value="" selected="selected"> -- Select One -- </option>
                    <optgroup label="Orlando Airports">
                                      <option value="421">Orlando Airport </option>
                  <option value="512">Orlando Exec. Airport</option>
                  <option value="422">Orlando Sanford Airport </option>
                                      </optgroup>
                    <optgroup label="Orlando Hotels">
                                     <option value="186">Adventure Motel</option>
                  <option value="187">All-Star Movies Resort</option>
                  <option value="188">All-Star Music Resort</option>
                  <option value="189">All-Star Sports Resort</option>
                  <option value="389">Ambassador Motel</option>
                  <option value="22">Ambassador TD Waterhouse</option>
                  <option value="190">Amerihost Resort at Main Gate</option>
                  <option value="69">AmeriSuites Convention Center</option>
                  <option value="1">AmeriSuites International Airport </option>
                  <option value="191">AmeriSuites Lake Buena Vista South</option>
                  <option value="70">AmeriSuites Universal</option>
                  <option value="23">Amtrak - Orlando</option>
                  <option value="193">Animal Kingdom Park</option>
                  <option value="194">Arabian Nights</option>
                  <option value="71">Bay Hill Club &amp; Lodge</option>
                  <option value="72">Baymont In &amp; Suites</option>
                  <option value="195">Baymont Inn Kissimmee</option>
                  <option value="73">Baymont Universal Hotel</option>
                  <option value="24">Best Value Inn</option>
                  <option value="390">Best Western Heritage Park</option>
                  <option value="196">Best Western Lake Buena Vista</option>
                  <option value="198">Best Western Lakeside</option>
                  <option value="197">Best Western Main Gate East Hotel &amp; Suites</option>
                  <option value="74">Best Western MovieLand</option>
                  <option value="391">Best Western Mt. Vernon</option>
                  <option value="25">Best Western Orlando West</option>
                  <option value="75">Best Western Plaza International</option>
                  <option value="76">Best Western Universal Inn</option>
                  <option value="26">Best Western Winter Garden</option>
                  <option value="199">Blizzard Beach</option>
                  <option value="200">Blue Tree Resort</option>
                  <option value="201">BoardWalk at Disney</option>
                  <option value="202">Bryans Spanish Cove</option>
                  <option value="203">Budget Inn West</option>
                  <option value="204">Buena Vista Motel</option>
                  <option value="205">Buena Vista Palace Resort and Spa</option>
                  <option value="206">Buena Vista Suites</option>
                  <option value="392">Candlewood Suites</option>
                  <option value="207">Caribbean Beach Resort</option>
                  <option value="208">Caribe Royale Suites</option>
                  <option value="209">Casa Rosa Main Gate</option>
                  <option value="210">Celebration Hotel</option>
                  <option value="211">Celebrity Resorts Lake Buena Vista</option>
                  <option value="218">Celebrity World Resort</option>
                  <option value="212">Central Motel</option>
                  <option value="213">Chalet Motel</option>
                  <option value="214">Chateau Motel</option>
                  <option value="215">Chatham Square</option>
                  <option value="216">Cirque Du Soleil</option>
                  <option value="27">Citrus Bowl</option>
                  <option value="28">Citrus Club</option>
                  <option value="2">Clarion Hotel Airport</option>
                  <option value="78">Clarion Hotel Universal</option>
                  <option value="217">Clarion Main Gate West</option>
                  <option value="79">Comfort Inn International</option>
                  <option value="219">Comfort Inn Lake Buena Vista</option>
                  <option value="220">Comfort Inn Main Gate West</option>
                  <option value="393">Comfort Inn North</option>
                  <option value="80">Comfort Inn Universal</option>
                  <option value="221">Comfort Suites</option>
                  <option value="3">Comfort Suites Airport</option>
                  <option value="29">Comfort Suites Downtown Orlando</option>
                  <option value="222">Comfort Suites Main Gate</option>
                  <option value="81">Comfort Suites Orlando Turkey Lake</option>
                  <option value="223">Commons Apartments</option>
                  <option value="224">Contemporary Resort</option>
                  <option value="225">Continental Motel</option>
                  <option value="227">Country Hearth Inn &amp; Suites</option>
                  <option value="228">Country Inn &amp; Suites</option>
                  <option value="82">Country Inn &amp; Suites Universal</option>
                  <option value="229">Crown Motel</option>
                  <option value="4">Crowne Plaza Orlando Airport</option>
                  <option value="83">Crowne Plaza Resort</option>
                  <option value="84">Crowne Plaza Universal</option>
                  <option value="231">Cypress Pointe Resort</option>
                  <option value="32">Days Inn &amp; Suites Landstreet</option>
                  <option value="30">Days Inn 33rd Street</option>
                  <option value="5">Days Inn Airport</option>
                  <option value="85">Days Inn Convention Center</option>
                  <option value="86">Days Inn International North</option>
                  <option value="232">Days Inn Kissimmee Airport</option>
                  <option value="233">Days Inn Kissimmee West</option>
                  <option value="234">Days Inn Main Gate East</option>
                  <option value="235">Days Inn Main Gate West</option>
                  <option value="31">Days Inn Midtown</option>
                  <option value="395">Days Inn Turnpike</option>
                  <option value="87">Days Inn Universal</option>
                  <option value="33">Days Inn West Hwy 50</option>
                  <option value="394">Days Inn Winter Park</option>
                  <option value="236">Days Suites - Old Town</option>
                  <option value="34">DeLux Inn</option>
                  <option value="88">Discovery Cove</option>
                  <option value="237">Disney Back Yard Barbeque</option>
                  <option value="238">Disney Beach Club Resort LBV</option>
                  <option value="239">Disney Beach Club Villas</option>
                  <option value="260">Disney MGM Studios</option>
                  <option value="262">Dixie Stampede</option>
                  <option value="263">Dolphin Hotel at Disney</option>
                  <option value="459">Double Tree Guest Suite</option>
                  <option value="89">Doubletree Castle</option>
                  <option value="264">DoubleTree Club Hotel</option>
                  <option value="90">Doubletree Universal Orlando</option>
                  <option value="261">Downtown Disney</option>
                  <option value="254">Eastgate Inn Resort</option>
                  <option value="91">Econo Roadway</option>
                  <option value="35">Econolodge Central</option>
                  <option value="255">Econolodge Hawaiian Village</option>
                  <option value="256">Econolodge Main Gate Central</option>
                  <option value="257">Econolodge Polynesian Resort</option>
                  <option value="258">Embassy Grand Beach</option>
                  <option value="6">Embassy Suites Airport</option>
                  <option value="396">Embassy Suites Altamonte</option>
                  <option value="38">Embassy Suites Downtown Orlando</option>
                  <option value="92">Embassy Suites International Drive</option>
                  <option value="93">Embassy Suites Jamaican</option>
                  <option value="259">Embassy Suites LBV</option>
                  <option value="240">Enterprise Motel</option>
                  <option value="241">Epcot</option>
                  <option value="36">Executive Inn</option>
                  <option value="37">Executive Inn Oak Ridge</option>
                  <option value="94">Extended Stay</option>
                  <option value="96">Extended Stay America Universal</option>
                  <option value="130">Extended Stay Deluxe</option>
                  <option value="98">Fairfield Inn &amp; Suites Universal</option>
                  <option value="7">Fairfield Inn Airport</option>
                  <option value="97">Fairfield Inn and Suites</option>
                  <option value="242">Fairfield Inn at Lake Bryan</option>
                  <option value="39">Fairfield Inn Orlando South</option>
                  <option value="243">Fairfield Inn Resort Bonnet Creek</option>
                  <option value="244">Fantasy World Club Villas</option>
                  <option value="40">Flamingo Motel North</option>
                  <option value="41">Florida Mall</option>
                  <option value="42">Florida Mall Hotel</option>
                  <option value="43">Florida Mall Inn</option>
                  <option value="245">Florida Vacation Villas</option>
                  <option value="246">Fort Wilderness Campgrounds</option>
                  <option value="247">Four Winds Motel</option>
                  <option value="248">Gator Motel</option>
                  <option value="397">Gatorland</option>
                  <option value="249">Gaylord Palms Resort</option>
                  <option value="250">Golden Link Motel</option>
                  <option value="99">Grande Lakes Orlando</option>
                  <option value="252">Grande Lakes Resort</option>
                  <option value="44">Greyhound Bus Lines</option>
                  <option value="253">Grosvenor Resort</option>
                  <option value="45">Guest House International</option>
                  <option value="100">Hampton Inn &amp; Suites</option>
                  <option value="104">Hampton Inn &amp; Suites I-Drive</option>
                  <option value="8">Hampton Inn Airport</option>
                  <option value="398">Hampton Inn Altamonte</option>
                  <option value="101">Hampton Inn Convention Center</option>
                  <option value="46">Hampton Inn Florida Mall</option>
                  <option value="102">Hampton Inn Kirkman </option>
                  <option value="266">Hampton Inn Lake Buena Vista</option>
                  <option value="267">Hampton Inn Main Gate</option>
                  <option value="268">Hampton Inn Main Gate West</option>
                  <option value="103">Hampton Inn Universal</option>
                  <option value="105">Hard Rock Hotel</option>
                  <option value="106">Hard Rock Live</option>
                  <option value="107">Hawthorn Suites At SeaWorld </option>
                  <option value="108">Hawthorn Suites Universal</option>
                  <option value="269">Hawthorne Suites LBV</option>
                  <option value="270">High Point World Resort</option>
                  <option value="110">Hilton Garden Inn</option>
                  <option value="9">Hilton Garden Inn Airport</option>
                  <option value="109">Hilton Garden Inn Westwood Boulevard</option>
                  <option value="111">Hilton Grand Vacation Club</option>
                  <option value="271">Hilton Grand Vacation I - Drive</option>
                  <option value="272">Hilton in the Walt Disney Resort</option>
                  <option value="538">Hilton Orlando</option>
                  <option value="112">Holiday Express Wet 'n' Wild</option>
                  <option value="113">Holiday Inn Convention Center</option>
                  <option value="10">Holiday Inn Express Airport</option>
                  <option value="399">Holiday Inn Express Exit 244</option>
                  <option value="47">Holiday Inn Express Hotel &amp; Suites</option>
                  <option value="274">Holiday Inn Express LBV</option>
                  <option value="114">Holiday Inn International Drive</option>
                  <option value="275">Holiday Inn MGW - Nikki Bird</option>
                  <option value="273">Holiday Inn MGW Blacklake Road</option>
                  <option value="400">Holiday Inn Orlando North</option>
                  <option value="11">Holiday Inn Select Airport</option>
                  <option value="276">Holiday Inn Sunspree Lake Buena Vista</option>
                  <option value="115">Holiday Inn Universal Towers</option>
                  <option value="277">Holiday Inn Walt Disney World</option>
                  <option value="278">Holiday Villas Of Sommerset</option>
                  <option value="116">Holy Land Zion Experience</option>
                  <option value="117">Homewood Suites International</option>
                  <option value="279">Homewood Suites Lake Buena Vista</option>
                  <option value="280">Homewood Suites Parkway</option>
                  <option value="118">Horizons at Orlando</option>
                  <option value="401">Hotel Orlando North</option>
                  <option value="281">House of Blues</option>
                  <option value="282">Howard Johnson Enchanted Land</option>
                  <option value="283">Howard Johnson Express &amp; Suite</option>
                  <option value="284">Howard Johnson Express Inn</option>
                  <option value="119">Howard Johnson Express Inn Suites</option>
                  <option value="120">Howard Johnson Hawaiian Court</option>
                  <option value="121">Howard Johnson International  Drive</option>
                  <option value="285">Howard Johnson MGE Watermania</option>
                  <option value="122">Howard Johnson Plaza Resort</option>
                  <option value="286">Howard Johnson Westgate</option>
                  <option value="48">Howard Johnson's TD Waterhouse</option>
                  <option value="402">Howard Johnson's Turnpike</option>
                  <option value="49">Howard Vernon Motel</option>
                  <option value="287">Hyatt Grand Cypress</option>
                  <option value="12">Hyatt Orlando Airport</option>
                  <option value="534">Hyatt Place </option>
                  <option value="123">I-Drive Inn</option>
                  <option value="124">Inn and Suites International</option>
                  <option value="288">Inn at Summer Bay</option>
                  <option value="125">Islands Of Adventure</option>
                  <option value="50">Jet Air Orlando</option>
                  <option value="126">JW Marriott Grande Lakes</option>
                  <option value="289">Kids Village</option>
                  <option value="403">Kingswood Resort</option>
                  <option value="290">Knight's Inn Kissimmee</option>
                  <option value="291">Knight's Inn Main Gate East</option>
                  <option value="292">Knight's Inn Main Gate West</option>
                  <option value="51">Knights Inn East Colonial</option>
                  <option value="127">La Quinta Inn &amp; Suites</option>
                  <option value="14">La Quinta Inn &amp; Suites Airport</option>
                  <option value="13">La Quinta Inn Airport</option>
                  <option value="152">La Quinta International Drive</option>
                  <option value="95">La Quinta International Drive North</option>
                  <option value="404">La Quinta Orlando North</option>
                  <option value="293">Lake Buena Vista Hotel</option>
                  <option value="405">Lambert Inn</option>
                  <option value="52">Landmark Hotel</option>
                  <option value="294">Legacy Grand Hotel</option>
                  <option value="128">Leisure Resorts</option>
                  <option value="295">Liki Tiki Village</option>
                  <option value="53">Loch Haven Inn</option>
                  <option value="296">Magic Castle East Rodeway Inn West 192</option>
                  <option value="297">Magic Castle Main Gate</option>
                  <option value="298">Magic Kingdom</option>
                  <option value="299">Magic Tree Resort</option>
                  <option value="300">Main Gate Inn</option>
                  <option value="301">Maple Leaf Hotel</option>
                  <option value="15">Marriott Airport</option>
                  <option value="54">Marriott Court Yard Downtown</option>
                  <option value="16">Marriott Courtyard Airport</option>
                  <option value="302">Marriott Courtyard at Little Lake Bryan</option>
                  <option value="129">Marriott Courtyard International Drive</option>
                  <option value="406">Marriott Courtyard Mailand</option>
                  <option value="303">Marriott Courtyard Palm Parkway Lake Buena Vista</option>
                  <option value="153">Marriott Cypress Harbor</option>
                  <option value="55">Marriott Downtown Centroplex</option>
                  <option value="154">Marriott Grand Vista</option>
                  <option value="304">Marriott Orlando World Center</option>
                  <option value="155">Marriott Residence At SeaWorld</option>
                  <option value="156">Marriott Residence Inn I-Drive</option>
                  <option value="157">Marriott Residence Universal</option>
                  <option value="158">Masters Inn International Drive</option>
                  <option value="305">Masters Inn Main Gate East</option>
                  <option value="306">Masters Inn Main Gate West</option>
                  <option value="307">Medieval Times</option>
                  <option value="159">Mercado</option>
                  <option value="160">Microtel Inn and Suites</option>
                  <option value="308">Monte Carlo Motel</option>
                  <option value="161">Motel 6 International Drive</option>
                  <option value="309">Motel 6 Orlando</option>
                  <option value="310">Motel 6 Orlando West</option>
                  <option value="311">Nickelodeon Family Suites</option>
                  <option value="312">Oak Plantation Resort</option>
                  <option value="313">Oasis Inn Main Gate</option>
                  <option value="314">Oasis Lakes Resort</option>
                  <option value="315">Old Key West</option>
                  <option value="316">Old Town</option>
                  <option value="162">Orange County Convention Center</option>
                  <option value="317">Orbit One</option>
                  <option value="163">Orlando Grand Plaza Hotel &amp; Suites</option>
                  <option value="318">Orlando Premium Outlets</option>
                  <option value="164">Orlando Resort</option>
                  <option value="165">Orlando Sunshine Resort</option>
                  <option value="319">Outdoor Resort</option>
                  <option value="320">Palm Lake Resort &amp; Hostile</option>
                  <option value="321">Palm Motel</option>
                  <option value="131">Parc Corniche Resorts</option>
                  <option value="322">Park Inn West</option>
                  <option value="407">Park Plaza Hotel</option>
                  <option value="323">Parkside Record Inn &amp; Suites</option>
                  <option value="324">Parkway International</option>
                  <option value="325">Parkway Motel</option>
                  <option value="56">Parliament House</option>
                  <option value="132">Peabody Orlando</option>
                  <option value="133">Pirates Dinner Adventure</option>
                  <option value="326">Planet Hollywood</option>
                  <option value="134">Pointe Orlando</option>
                  <option value="327">Polynesian Isles Resort</option>
                  <option value="328">Polynesian Resort</option>
                  <option value="329">Pop Century Resort</option>
                  <option value="330">Port Orleans French Quarter</option>
                  <option value="331">Port Orleans Riverside</option>
                  <option value="135">Portofino Bay Hotel</option>
                  <option value="332">Premium Outlet Mall</option>
                  <option value="136">Prime Factory Outlet Mall</option>
                  <option value="57">Quality Inn &amp; Suites Florida Mall</option>
                  <option value="18">Quality Inn Airport</option>
                  <option value="408">Quality Inn Altamonte</option>
                  <option value="137">Quality Inn Low Q</option>
                  <option value="333">Quality Inn Main Gate West</option>
                  <option value="138">Quality Inn Plaza International</option>
                  <option value="334">Quality Inn Polynesian Resort</option>
                  <option value="335">Quality Inn Suites East Gate</option>
                  <option value="409">Quality Inn Turnpike</option>
                  <option value="336">Quality Suites Main Gate East</option>
                  <option value="139">Quality Suites Universal Studios</option>
                  <option value="140">Race Rock</option>
                  <option value="375">Radison World Gate Resort</option>
                  <option value="141">Radisson Barcelo</option>
                  <option value="373">Radisson Lake Buena Vista</option>
                  <option value="374">Radisson Parkway</option>
                  <option value="58">Radisson Plaza Downtown Orlando</option>
                  <option value="412">Ramada Downtown Kissimmee</option>
                  <option value="376">Ramada East Gate Fountain Park</option>
                  <option value="59">Ramada Inn &amp; Suites Orlando</option>
                  <option value="142">Ramada Inn All Suites at SeaWorld</option>
                  <option value="410">Ramada Inn Downtown Kissimmee</option>
                  <option value="60">Ramada Ltd. Florida Mall</option>
                  <option value="377">Ramada Plaza Gateway</option>
                  <option value="61">Ramada Plaza John Young</option>
                  <option value="378">Ramada Resort Main Gate Reedy Creek</option>
                  <option value="413">Ramada Vacation Homes</option>
                  <option value="411">RDV Sportsplex</option>
                  <option value="379">Red Carpet Inn</option>
                  <option value="143">Red Roof Inn International Drive</option>
                  <option value="380">Red Roof Inn Main Gate East</option>
                  <option value="144">Red Roof Inn Universal</option>
                  <option value="523">Regal Sun LBV</option>
                  <option value="19">Renaissance Airport</option>
                  <option value="145">Renaissance Orlando Resort</option>
                  <option value="414">Residence Inn Altamonte</option>
                  <option value="531">Reunion </option>
                  <option value="146">Riande Continental Plaza</option>
                  <option value="415">Ritz Express</option>
                  <option value="147">Ritz-Carlton Grande Lakes, The</option>
                  <option value="337">RIU Orlando Resort</option>
                  <option value="148">Rodeway Inn International Drive</option>
                  <option value="149">Rosen Centre Hotel</option>
                  <option value="150">Rosen Plaza Hotel</option>
                  <option value="338">Royal Celebration Inn</option>
                  <option value="151">Royal Pacific Resort</option>
                  <option value="339">Royal Palms</option>
                  <option value="340">Royal Plaza</option>
                  <option value="341">Saratoga Resort Villas</option>
                  <option value="342">Saratoga Springs Resort &amp; Spa</option>
                  <option value="166">SeaWorld</option>
                  <option value="343">Seralago Hotel &amp; Suites MGE</option>
                  <option value="344">Sevilla Inn</option>
                  <option value="525">Shades of Green</option>
                  <option value="346">Sheraton Safari</option>
                  <option value="167">Sheraton Studio City Hotel</option>
                  <option value="20">Sheraton Suites</option>
                  <option value="21">Sheraton Suites Airport</option>
                  <option value="347">Sheraton Vistana Resort</option>
                  <option value="348">Sheraton Vistana Villages</option>
                  <option value="168">Sheraton World</option>
                  <option value="169">Shingle Creek</option>
                  <option value="349">Sierra Lago Hotel &amp; Suites</option>
                  <option value="350">Sierra Suites Lake Buena Vista</option>
                  <option value="351">Silver Lake Resort</option>
                  <option value="170">Sleep Inn</option>
                  <option value="171">Sleep Inn &amp; Suites</option>
                  <option value="352">Sleep Inn Main Gate</option>
                  <option value="172">Spring Hill Suites</option>
                  <option value="353">Spring Hill Suites at Little Lake Bryan</option>
                  <option value="416">Stadium Inn</option>
                  <option value="354">Star Island Resort</option>
                  <option value="175">Staybridge Suites I-Drive</option>
                  <option value="355">Staybridge Suites Lake Buena Vista</option>
                  <option value="173">Studio Inn</option>
                  <option value="174">Studio Plus</option>
                  <option value="62">Suburban Lodge</option>
                  <option value="176">Suburban Lodge</option>
                  <option value="356">Suites and Resort Hotel on Lake Cecile</option>
                  <option value="358">Summer Florida Inn</option>
                  <option value="359">Sun Motel</option>
                  <option value="360">Super 8</option>
                  <option value="361">Super 8 East Main Gate</option>
                  <option value="362">Super 8 Lake Side Main Gate</option>
                  <option value="177">Super 8 Universal</option>
                  <option value="417">Super 8 Vine Street</option>
                  <option value="363">Swan Hotel</option>
                  <option value="63">TD Waterhouse Centre</option>
                  <option value="536">The Fountains Resort</option>
                  <option value="364">Thriftlodge East</option>
                  <option value="365">Travelers Inn</option>
                  <option value="418">Travelodge Altamonte</option>
                  <option value="64">Travelodge Centroplex</option>
                  <option value="65">Travelodge East Colonial</option>
                  <option value="366">Travelodge Freedom Resort &amp; Spa</option>
                  <option value="178">Travelodge I-Drive</option>
                  <option value="419">Travelodge Kissimmee_Exit 244</option>
                  <option value="367">Travelodge Main Gate East</option>
                  <option value="368">Travelodge Suites East Gate Orange</option>
                  <option value="369">Travelodge Suites Main Gate East</option>
                  <option value="370">Tropical Palms Resort</option>
                  <option value="371">Typhoon Lagoon</option>
                  <option value="77">Universals CityWalk</option>
                  <option value="67">Vacation Lodge </option>
                  <option value="372">Vacation Village At Parkway</option>
                  <option value="420">Vacation Village Resort</option>
                  <option value="381">Viking Motel</option>
                  <option value="382">Villas Of Grand Cypress</option>
                  <option value="383">Vista Way Apartments</option>
                  <option value="532">Waldorf Astoria Orlando</option>
                  <option value="179">Wellesley Inn &amp; Suites</option>
                  <option value="180">Wellesley Inn &amp; Suites Orlando</option>
                  <option value="181">West Gate Lakes</option>
                  <option value="182">West Gate Palace</option>
                  <option value="385">West Gate Towers</option>
                  <option value="386">West Gate Vacation Villas</option>
                  <option value="384">Westgate Inn</option>
                  <option value="68">Westin Grand Bohemian</option>
                  <option value="66">Westside Inn &amp; Suites</option>
                  <option value="183">Wet 'n' Wild</option>
                  <option value="529">Wilderness Lodge</option>
                  <option value="184">Wingate Hotel</option>
                  <option value="185">Wyndham Orlando Resort</option>
                  <option value="522">Wyndham Palace Resorts</option>
                  <option value="388">Yacht Club</option>
                </optgroup>
<optgroup label="Cruise Lines">
                                     <option value="423">Disney Cruise Line</option>
                  <option value="425">Carnival Cruise Line</option>
                  <option value="426">Norwegian Cruise Line</option>
                  <option value="427">Royal Caribbean International</option>
                  <option value="428">Radisson Resort</option>
                  <option value="429">Royal Mansions Resort</option>
                  <option value="430">Other</option>
                </optgroup>
<optgroup label="Theme Parks">
<option value="431">Universal Studios</option>
<option value="432">Sea World</option>
                    </optgroup>
                    <optgroup label="Disney resorts">
                                     <option value="441">AKL Resort</option>
                  <option value="440">All Star Movies</option>
                  <option value="439">All Star Music</option>
                  <option value="438">All Star Sports</option>
                  <option value="443">Beach Club Resort</option>
                  <option value="457">Best western LBV</option>
                  <option value="442">Board Walk Resort</option>
                  <option value="451">Caribbean Beach Resort</option>
                  <option value="433">Contemporary</option>
                  <option value="445">Coronado Springs </option>
                  <option value="446">Dolphin Resort</option>
                  <option value="434">Grand Floridian</option>
                  <option value="455">Hilton LBV</option>
                  <option value="535">LEGO LAND</option>
                  <option value="533">LEGO Land</option>
                  <option value="452">Old Key West Resort</option>
                  <option value="436">Polynesian</option>
                  <option value="450">Pop Century Resort</option>
                  <option value="448">Port Orleans French Quarter Resort</option>
                  <option value="449">Port Orleans Riverside Resort </option>
                  <option value="456">Regal Sun LBV</option>
                  <option value="458">Royal Plaza LBV</option>
                  <option value="453">Saratoga Springs Resort</option>
                  <option value="432">Sea World</option>
                  <option value="437">Shades of Green</option>
                  <option value="447">Swan Resort</option>
                  <option value="431">Universal Studios</option>
                  <option value="435">Wilderness Lodge</option>
                  <option value="454">Wyndham Palace Resorts</option>
                  <option value="444">Yacht Club Resort</option>
                </optgroup>

<optgroup label="SHADES OF GREEN TRANSFERS">
</optgroup><optgroup label="&nbsp;&nbsp;&nbsp;Orlando Hotels">
                    <option value="517">Shades of Green</option>
                    </optgroup>
                    <optgroup label="&nbsp;&nbsp;&nbsp;GATEWAYS">
                                                         <option value="513">Greyhound</option>
                                                          <option value="514">Amtrak Orlando</option>
                                                          <option value="516">Port Canaveral</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY ATTRACTIONS">
                                                        <option value="460">Animal Kingdom</option>
                                                          <option value="461">Blizzard Beach</option>
                                                          <option value="462">Epcot Center</option>
                                                          <option value="463">Magic Kingdom</option>
                                                          <option value="464">Hollywood Studios</option>
                                                          <option value="465">Downtown Disney</option>
                                                          <option value="466">Typhoon Lagoon</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;ATTRACTIONS">
                                                        <option value="467">Pirate Dinner Show</option>
                                                          <option value="468">Arabian Knights</option>
                                                          <option value="469">Bush Gardens</option>
                                                          <option value="470">Citrus Bowl</option>
                                                          <option value="471">Gatorland</option>
                                                          <option value="472">Kennedy Space Center</option>
                                                          <option value="473">Medevil Times</option>
                                                          <option value="474">Sea World</option>
                                                          <option value="475">Amway Arena</option>
                                                          <option value="476">Univeral Studios</option>
                                                          <option value="477">Wet'n Wild</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;DISNEY RESORTS">
                                                        <option value="478">Swan/Dolphin</option>
                                                          <option value="479">Epcot Resorts</option>
                                                          <option value="480">Coranado Springs</option>
                                                          <option value="481">All Star Resorts</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;GOLF COURSES">
                                                        <option value="482">Bay Hill</option>
                                                          <option value="483">Villas of Grand Cypress</option>
                                                          <option value="484">Lake Buena Vista Golf</option>
                                                          <option value="485">Lake Nona</option>
                                                          <option value="486">Eagle Pine/Osprey Ridge</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;SHOPPING">
                                                        <option value="487">Belz Factory Outlet</option>
                                                          <option value="488">Crossroads LBV</option>
                                                          <option value="489">Florida Mall</option>
                                                          <option value="490">Mall of Millenia</option>
                                                          <option value="491">Point Orlando</option>
                                                          <option value="492">Premium Outlet</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;RESTAURANTS">
                                                        <option value="493">Antonio's Sandlake</option>
                                                          <option value="494">Charley's Steak 192</option>
                                                          <option value="495">Charley's Steak I-Drive</option>
                                                          <option value="496">Christini's Fishbone Sandlake</option>
                                                          <option value="497">Louis Downtown</option>
                                                          <option value="498">Moonfish Sandlake</option>
                                                          <option value="499">Morton's of Chicago</option>
                                                          <option value="500">Rachel's Steak House</option>
                                                          <option value="501">Ruth Chris Steak House</option>
                                                          <option value="502">Timpano's</option>
                                                          <option value="503">Tuscany (MWC)</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;OTHER">
                                                        <option value="504">Celebrations Hospital</option>
                                                          <option value="505">Convention Center</option>
                                                          <option value="506">I-Drive North</option>
                                                          <option value="507">I-Drive South</option>
                                                          <option value="530">Daytona 500</option>
                                                        </optgroup>
                  <optgroup label="&nbsp;&nbsp;&nbsp;LBV">
                                                        <option value="508">Marriott World Center</option>
                                                          <option value="509">Mary Queen of the Universe</option>
                                                          <option value="510">Sandlake Hospital</option>
                                                          <option value="511">South OBT</option>
                                                        </optgroup>
                  
</select>
            </div><!------------end of form group-->
            <div class="form-group col-md-12 col-sm-12">
                <label for="exampleFormControlTextarea1">Driver:</label>
                <select class="form-control" name="drivers_id1">
                    <option value="0"> -- Select One -- </option>
                    <option value="114">Abdel Aziz Tarhani</option><option value="100">ABDERAHMAN MAKBOUL</option><option value="128">Alberto Irausquin</option><option value="75">Alfredo Cipriano Barros</option><option value="130">Andy Negede</option><option value="116">Arsenio Perez-Corujo</option><option value="131">Claudio DeSilva</option><option value="113">Eyob Hailab</option><option value="132">First Choice </option><option value="53">Glenn Rezende </option><option value="127">Kamel Chetouane</option><option value="137">Mebratu Dawit Abraha</option><option value="129">Peter Piantinis</option><option value="122">Rash Test IWS</option><option value="118">Sahid  Alpizar</option><option value="134">Simret  Tegegne</option><option value="136">Tesfu Bokre</option><option value="133">Willie Miller III</option><option value="135">Yohannes   Yohannes</option>				  </select>
            </div><!-------------end of group-->
        </div><!-------------tripValidation-->

    </div>
    <div id="defaultDivCheck" class="customBundle box" style="display:none;">
       Click here to select respective options
    </div>
                                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                                                            Continue ->
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                    Passenger Information
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class=" ">
                                                    <div class="form-group row mt-3">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">First Name</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Last Name</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Street Address</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Address Line2</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">City</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">State</label>
                                                            <select name="state" id="state" class="form-control">
                                                                <option value="Outside USA">Outside USA</option>
                                                                <option value="AK">AK</option>

                                                                <option value="AL">AL</option>
                                                                <option value="AR">AR</option>
                                                                <option value="AZ">AZ</option>
                                                                <option value="CA">CA</option>

                                                                <option value="CO">CO</option>
                                                                <option value="CT">CT</option>

                                                                <option value="DC">DC</option>
                                                                <option value="DE">DE</option>
                                                                <option value="FL">FL</option>
                                                                <option value="GA">GA</option>

                                                                <option value="HI">HI</option>
                                                                <option value="IA">IA</option>

                                                                <option value="ID">ID</option>
                                                                <option value="IL">IL</option>
                                                                <option value="IN">IN</option>
                                                                <option value="KS">KS</option>

                                                                <option value="KY">KY</option>
                                                                <option value="LA">LA</option>

                                                                <option value="MA">MA</option>
                                                                <option value="MD">MD</option>
                                                                <option value="ME">ME</option>
                                                                <option value="MI">MI</option>

                                                                <option value="MN">MN</option>
                                                                <option value="MO">MO</option>

                                                                <option value="MS">MS</option>
                                                                <option value="MT">MT</option>
                                                                <option value="NC">NC</option>
                                                                <option value="ND">ND</option>

                                                                <option value="NE">NE</option>
                                                                <option value="NH">NH</option>

                                                                <option value="NJ">NJ</option>
                                                                <option value="NM">NM</option>
                                                                <option value="NV">NV</option>

                                                                <option value="NY">NY</option>

                                                                <option value="OH">OH</option>
                                                                <option value="OK">OK</option>

                                                                <option value="OR">OR</option>
                                                                <option value="PA">PA</option>
                                                                <option value="RI">RI</option>
                                                                <option value="SC">SC</option>

                                                                <option value="SD">SD</option>
                                                                <option value="TN">TN</option>

                                                                <option value="TX">TX</option>
                                                                <option value="UT">UT</option>
                                                                <option value="VA">VA</option>
                                                                <option value="VT">VT</option>

                                                                <option value="WA">WA</option>
                                                                <option value="WI">WI</option>

                                                                <option value="WV">WV</option>
                                                                <option value="WY">WY</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Zip Code</label>
                                                            <input type="number" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Country</label>
                                                            <select name="country" id="country" class="form-control">
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Azores">Azores</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia Herzegowina">Bosnia Herzegowina</option>
                                                                <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian O. Terr">British Indian O. Terr</option>
                                                                <option value="British Virgin Isl">British Virgin Isl</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Rep">Central African Rep</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Isl">Cocos (Keeling) Isl</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Dem Rep">Congo, The Dem Rep</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Corsica">Corsica</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote d` Ivoire">Cote d` Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="East Timor">East Timor</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France (Incl Monaco)">France (Incl Monaco)</option>
                                                                <option value="France, Metropolitan">France, Metropolitan</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French S. Territories">French S. Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard And Mc Donald Isl">Heard And Mc Donald Isl</option>
                                                                <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran">Iran</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Ireland (Eire)">Ireland (Eire)</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic Rep">Korea, Democratic Rep</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia">Macedonia</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Madeira Islands">Madeira Islands</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia">Micronesia</option>
                                                                <option value="Moldova, Republic Of">Moldova, Republic Of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Isl">Northern Mariana Isl</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory">Palestinian Territory</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia-Montenegro">Serbia-Montenegro</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovak Republic">Slovak Republic</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia">South Georgia</option>
                                                                <option value="South Korea">South Korea</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="St. Christopher, Nevis">St. Christopher, Nevis</option>
                                                                <option value="St. Helena">St. Helena</option>
                                                                <option value="St. Lucia">St. Lucia</option>
                                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                <option value="St. Vincent and Gren">St. Vincent and Gren</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard And Jan M Isl">Svalbard And Jan M Isl</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Rep">Syrian Arab Rep</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Isl">Turks and Caicos Isl</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Great Britain">Great Britain</option>
                                                                <option value="United States" selected="selected">United States</option>
                                                                <option value="U.S. Minor Outlying Isl">U.S. Minor Outlying Isl</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Vatican City">Vatican City</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                <option value="Wallis and Furuna Isl">Wallis and Furuna Isl</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Western Samoa">Western Samoa</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                <option value="Zaire">Zaire</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Telephone</label>
                                                            <input type="phone" class="form-control" id="new-project-name" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Alternate Phone Number</label>
                                                            <input type="phone" class="form-control" id="new-project-name" placeholder="Alternate Phone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Mobile</label>
                                                            <input type="number" class="form-control" id="new-project-name" placeholder="Mobile">
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                                                        </div>
                                                    </div>
                                                   

                                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                                        Continue ->

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                                        Billing Information

                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">

                                                    <div class="form-group mt-3 text-center mx-auto">
                                                        <input value="1" id="billing-checkbox" onclick="auto_address_update(document.create_new)" type="checkbox">
                                                        Billing Address is the same as Passenger Address.
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">First Name</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Last Name</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Street Address</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Address Line2</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">City</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">State</label>
                                                            <select name="state" id="state" class="form-control">
                                                                <option value="Outside USA">Outside USA</option>
                                                                <option value="AK">AK</option>

                                                                <option value="AL">AL</option>
                                                                <option value="AR">AR</option>
                                                                <option value="AZ">AZ</option>
                                                                <option value="CA">CA</option>

                                                                <option value="CO">CO</option>
                                                                <option value="CT">CT</option>

                                                                <option value="DC">DC</option>
                                                                <option value="DE">DE</option>
                                                                <option value="FL">FL</option>
                                                                <option value="GA">GA</option>

                                                                <option value="HI">HI</option>
                                                                <option value="IA">IA</option>

                                                                <option value="ID">ID</option>
                                                                <option value="IL">IL</option>
                                                                <option value="IN">IN</option>
                                                                <option value="KS">KS</option>

                                                                <option value="KY">KY</option>
                                                                <option value="LA">LA</option>

                                                                <option value="MA">MA</option>
                                                                <option value="MD">MD</option>
                                                                <option value="ME">ME</option>
                                                                <option value="MI">MI</option>

                                                                <option value="MN">MN</option>
                                                                <option value="MO">MO</option>

                                                                <option value="MS">MS</option>
                                                                <option value="MT">MT</option>
                                                                <option value="NC">NC</option>
                                                                <option value="ND">ND</option>

                                                                <option value="NE">NE</option>
                                                                <option value="NH">NH</option>

                                                                <option value="NJ">NJ</option>
                                                                <option value="NM">NM</option>
                                                                <option value="NV">NV</option>

                                                                <option value="NY">NY</option>

                                                                <option value="OH">OH</option>
                                                                <option value="OK">OK</option>

                                                                <option value="OR">OR</option>
                                                                <option value="PA">PA</option>
                                                                <option value="RI">RI</option>
                                                                <option value="SC">SC</option>

                                                                <option value="SD">SD</option>
                                                                <option value="TN">TN</option>

                                                                <option value="TX">TX</option>
                                                                <option value="UT">UT</option>
                                                                <option value="VA">VA</option>
                                                                <option value="VT">VT</option>

                                                                <option value="WA">WA</option>
                                                                <option value="WI">WI</option>

                                                                <option value="WV">WV</option>
                                                                <option value="WY">WY</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Zip Code</label>
                                                            <input type="number" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="new-project-name">Country</label>
                                                            <select name="country" id="country" class="custom-select">
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Azores">Azores</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia Herzegowina">Bosnia Herzegowina</option>
                                                                <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian O. Terr">British Indian O. Terr</option>
                                                                <option value="British Virgin Isl">British Virgin Isl</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Rep">Central African Rep</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Isl">Cocos (Keeling) Isl</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Dem Rep">Congo, The Dem Rep</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Corsica">Corsica</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote d` Ivoire">Cote d` Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="East Timor">East Timor</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands">Falkland Islands</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France (Incl Monaco)">France (Incl Monaco)</option>
                                                                <option value="France, Metropolitan">France, Metropolitan</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French S. Territories">French S. Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard And Mc Donald Isl">Heard And Mc Donald Isl</option>
                                                                <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran">Iran</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Ireland (Eire)">Ireland (Eire)</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic Rep">Korea, Democratic Rep</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Laos">Laos</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libya">Libya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia">Macedonia</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Madeira Islands">Madeira Islands</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia">Micronesia</option>
                                                                <option value="Moldova, Republic Of">Moldova, Republic Of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Isl">Northern Mariana Isl</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory">Palestinian Territory</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia-Montenegro">Serbia-Montenegro</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovak Republic">Slovak Republic</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia">South Georgia</option>
                                                                <option value="South Korea">South Korea</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="St. Christopher, Nevis">St. Christopher, Nevis</option>
                                                                <option value="St. Helena">St. Helena</option>
                                                                <option value="St. Lucia">St. Lucia</option>
                                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                <option value="St. Vincent and Gren">St. Vincent and Gren</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard And Jan M Isl">Svalbard And Jan M Isl</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Rep">Syrian Arab Rep</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania">Tanzania</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Isl">Turks and Caicos Isl</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Great Britain">Great Britain</option>
                                                                <option value="United States" selected="selected">United States</option>
                                                                <option value="U.S. Minor Outlying Isl">U.S. Minor Outlying Isl</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Vatican City">Vatican City</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Vietnam">Vietnam</option>
                                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                <option value="Wallis and Furuna Isl">Wallis and Furuna Isl</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Western Samoa">Western Samoa</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                <option value="Zaire">Zaire</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                                        Continue ->
                                                    </a>

                                                </div><!------collapse-->
                                            </div><!------card-->
                                            <div class="card mb-0">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                                        Payment Information
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                    <div class=" ">
                                                        <div class="row mt-3">
                                                            <div class="form-group mb-0 col-md-4 col-sm-12">
                                                                <label for="staticEmail2" class="pt-2">Total Amount</label>
                                                                <span class="alertRed">$</span> 
                                                            </div>
                                                           
                                                            <div class="form-group mb-0 col-md-4 col-sm-12">
                                                                <label for="inputPassword2" class="sr-only"></label>
                                                                <input type="text" class="form-control">
                                                                
                                                            </div>
                                                            <div class="form-group mb-0 col-md-4 col-sm-12">
                                                                <button type="submit" class="btn btn-primary">Calculate Total</button>
                                                            </div>
                                                            <small class="mb-4 color-red">(20% driver gratuity will be applied for limo reservations)</small>
                                                        
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Payment Method</label>
                                                                <select class="form-control" id="card_type" name="card_type" size="1">
                                                                    <option value="**" selected="selected">- Select Card Type -</option>
                                                                    <option value="Visa">Visa</option>
                                                                    <option value="MasterCard">MasterCard</option>
                                                                    <option value="Discover">Discover</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Credit Card Number</label>
                                                                <input type="number" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Credit Card Number</label>
                                                            <input type="number" class="form-control" />
                                                        </div>
                                                        <div class="form-group col-md-12 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Expiration Date</label>
                                                            <div class="row">
                                                            <select class="form-control col-md-5 ml-2 mr-1" name="ExpMonth" size="1">
            
                                                                <option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option><option value="Jun">Jun</option><option value="Jul" selected="selected">Jul</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select>
                                                                <select class="form-control col-md-5 ml-3" name="ExpYear" size="1">
            
                                                                    <option value="2041">2041</option><option value="2040">2040</option><option value="2039">2039</option><option value="2038">2038</option><option value="2037">2037</option><option value="2036">2036</option><option value="2035">2035</option><option value="2034">2034</option><option value="2033">2033</option><option value="2032">2032</option><option value="2031">2031</option><option value="2030">2030</option><option value="2029">2029</option><option value="2028">2028</option><option value="2027">2027</option><option value="2026">2026</option><option value="2025">2025</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021" selected="selected">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option></select>
                                                         </div>          
                                                        </div>
                                                        <div class="form-group mt-3 text-justify mx-auto">
                                                            <input value="1" id="billing-checkbox" onclick="auto_address_update(document.create_new)" type="checkbox">
                                                            Please do not charge my credit card. I will be paying cash or traveler check upon arrival I understand I am submitting my credit card info only to guarantee my reservation. I also read and understand Sunstate Transportation cancellation policy.
                                                        </div>
                                                    </div>
                                                   
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                                        Continue ->
                                                    </a>
                                                </div><!-------collapse-->
                                            </div><!------card-->
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                                        Reservation Information
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                    <div class=" ">
                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="staticEmail2">Reservation Status</label>
                                                                <select name="status" size="1" class="form-control">
                                                                    <option value="1">Processing</option>
                                                                    <option value="2">Confirmed</option>
                                                                    <option value="3">Departed</option>
                                                                    <option value="4">Arrived</option>
                                                                    <option value="5">Awaiting Arrival</option>
                                                                    <option value="6">Awaiting Departure</option>
                                                                    <option value="7">Credit card verification error</option>
                                                                    <option value="11">Cancelled</option>
                                                                    <option value="13"></option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="inputPassword2" class=" ">Payment Status</label>
                                                                <select name="status" size="1" class="form-control">
                                                                    <option value="1">Processing</option>
                                                                    <option value="2">Confirmed</option>
                                                                    <option value="3">Departed</option>
                                                                    <option value="4">Arrived</option>
                                                                    <option value="5">Awaiting Arrival</option>
                                                                    <option value="6">Awaiting Departure</option>
                                                                    <option value="7">Credit card verification error</option>
                                                                    <option value="11">Cancelled</option>
                                                                    <option value="13"></option>
                                                                </select>
                                                            </div>
                                                          
                                                        </div>
                                                        
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Approval Code</label>
                                                                <textarea class="form-control">

                                                                </textarea>
                                                            </div>
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="exampleFormControlTextarea1">Customer Comments</label>
                                                                <textarea class="form-control">

                                                                </textarea>
                                                            </div>
                                                        
                                                        <div class="form-group col-md-12 col-sm-12">
                                                            <label for="exampleFormControlTextarea1">Admin Comments</label>
                                                            <textarea class="form-control">

                                                                </textarea>
                                                        </div>
                                                        <div class="form-group mt-3 text-center mx-auto">
                                                            <button class="btn btn-primary">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div><!-------collapse-->
                                            </div><!------card-->
                                        </div><!---------modalbody-->
                                     </div>
                                            
                         </div>
                        </div>
                    </div>
<!---------end of modal---------------------->
                </div> 
            </div>          
                <!-- Content Wrapper END -->
                

 <!--------------start of pagination-->
 <nav class="pagination text-right float-right">
    <ul class="pagination">
      <li class="page-item pl-2">
        <span class="page-link">Previous</span>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item">
        <span class="page-link">
          2
          <span class="sr-only">(current)</span>
        </span>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
  </div>


  @endsection