<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->
                
                
                
            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <h2 class="text-center mx-auto">LOCATION MANAGER</h2>
                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row mb-30">


                            <div class="col-md-3 text-center mb-2">
                                <div class="input-affix">
                                    <i class="prefix-icon anticon anticon-search opacity-04"></i>
                                    <input type="text" class="form-control" placeholder="Search Location">
                                </div>
                            </div>


                            <div class="col-md-3 text-center mb-2">
                                <select name="search_by" class="form-control"><option value="name">Name</option><option value="city">City</option><option value="state">State</option><option value="zip">Zip Code</option><option value="country">Country</option><option value="telephone">Phone</option></select>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-lg-3 text-center mb-2">
                                <a class="btn btn-primary" href="{{ url('admin/price_location_add') }}">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add New Location</span>
                                </a>
                            </div>

                            <!-- Large modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Location</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group row">
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label for="new-project-name">Zone ID</label>
                                                    <select name="zone_id" size="1" class="form-control">
                                                        <option value=" " selected="selected"> -- Select Zone ID -- </option>
                                                        <option value="28"> - </option>
                                                        <option value="22">SeaWorld - SeaWorld Theme Park </option>
                                                        <option value="23">Universal - Universal Theme Park</option>
                                                        <option value="1">ZONE 1 - Orlando Airport</option>
                                                        <option value="2">ZONE 2 - Downtown / South Orlando</option>
                                                        <option value="4">ZONE 3 - International Drive</option>
                                                        <option value="8">ZONE 4 - Lake Buena Vista, Walt Disney World, HWY. 192W</option>
                                                        <option value="14">ZONE 5  - Kissimmee, US 27 &amp; I-4, Altamonte Springs, HWY. 19</option>
                                                        <option value="19">Zone 6 - Orlando Sanford Airport</option>
                                                        <option value="20">ZONE 7 - Magic Kingdom, Animal Kingdom &amp; All Star Resorts</option>
                                                        <option value="21">Zone 8 - Port Canaveral Cruise Terminals</option>
                                                        <option value="24">ZONE 9  - Daytona 500</option>
                                                        <option value="25">Zone-10 - Reunion</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label for="new-project-name">Location Type</label>
                                                    <select name="location_type" size="1" class="form-control">
                                                        <option value=" " selected="selected"> -- Select Location Type -- </option>
                                                        <option value="6">ATTRACTIONS - Shades of Green</option>
                                                        <option value="3">Cruise Lines</option>
                                                        <option value="5">DISNEY ATTRACTIONS - Shades of Green</option>
                                                        <option value="7">DISNEY RESORTS - Shades of Green</option>
                                                        <option value="13">GATEWAYS - Shades of Green</option>
                                                        <option value="8">GOLF COURSES - Shades of Green</option>
                                                        <option value="12">LBV - Shades of Green</option>
                                                        <option value="2">Orlando Airports</option>
                                                        <option value="1">Orlando Hotels</option>
                                                        <option value="14">Orlando Hotels - Shades of Green</option>
                                                        <option value="11">OTHER - Shades of Green</option>
                                                        <option value="10">RESTAURANTS - Shades of Green</option>
                                                        <option value="9">SHOPPING - Shades of Green</option>
                                                        <option value="4">Theme Parks</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label for="new-project-name">Name</label>
                                                    <input name="name" class="form-control col-md-6" size="39" type="text" value="Adventure Motel">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label for="new-project-name">Address</label>
                                                    <input name="name" class="form-control" size="39" type="text" value="4501 West Irlo Bronson Highway">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label for="new-project-name">Country</label>
                                                    <input name="name" class="form-control" size="39" type="text" value="Kissimmee">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label for="new-project-name">State</label>
                                                    <select name="state" id="state" class="form-control">
                                                        <option value="AK">AK</option>
        
                                                        <option value="AL">AL</option>
                                                        <option value="AR">AR</option>
                                                        <option value="AZ">AZ</option>
                                                        <option value="CA">CA</option>
        
                                                        <option value="CO">CO</option>
                                                        <option value="CT">CT</optionf>
        
                                                        <option value="DC">DC</option>
                                                        <option value="DE">DE</option>
                                                        <option value="FL" selected="selected">FL</option>
                                                        <option value="GA">GA</option>
        
                                                        <option value="HI">HI</option>
                                                        <option value="IA">IA</option>
        
                                                        <option value="ID">ID</option>
                                                        <option value="IL">IL</osption>
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
                                                    <label for="new-project-name">Zip Code</label>
                                                    <input name="name" class="form-control" size="39" type="text" value="34746">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label for="new-project-name">Phone Number</label>
                                                    <input name="name" class="form-control" size="39" type="number" value="9999999999">
                                                </div>
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary text-center">Update Location</button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                                <!------------------modal-->

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

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ url('admin/price_location_all_delete') }}" method="POST">
                                        @csrf
                                    <table class="table mx-auto">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Name</th>
                                                <th>Location Type</th>
                                                <th>Zone</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($Price_Locations as $item)
                                            <tr>
                                                <td><input name="id_delete[]" id="id" type="checkbox" value="{{$item->id}}"></td>
                                                <td>
                                                    <div class="media align-items-center">                                                      
                                                    {{$item->name}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>
                                                        {{ $item->location_type }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="align-items-center">
                                                       {{ $item->zone }}
                                                    </div>
                                                </td>

                                                <td class="text-right">
                                                    <div class="dropdown dropdown-animated scale-left d-flex">
                                                        <a class="text-gray font-size-18" href="{{url('admin/price_location_edit', $item->id) }}">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{url('admin/price_locations_delete', $item->id) }}">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="far fa-trash-alt"></i>

                                                            </button>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                                
                                            @endforelse
                                            
                                            <!-- Modal -->
                                            <!------------------modal-->
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group text-left">
                                    <button class="btn btn-primary">Delete Selected</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        
                    </div>
                    <!---------end of modal-->
             </div>
                        <!-------------------start of pagination-->
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
                      <!-----------------end of pagination-->
                <!-- Content Wrapper END -->
@endsection