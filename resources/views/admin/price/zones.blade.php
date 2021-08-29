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
                    <h2 class="text-center mx-auto">Zone MANAGER</h2>
                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row mb-30">
                            <div class="col-md-9"></div>
                            <div class="col-lg-3 text-center mx-auto">
                                <a class="btn btn-primary"  href="{{ url('admin/price_zone_add') }}">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add New Zone</span>
                                </a>
                            </div>

                            <!------------------------------Start of Modal-->
                            <!-- Large modal -->


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
                                <form action="{{ url('admin/price_zone_all_delete') }}" method="post" >
                                    @csrf
                                <table class="table mx-auto">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Zone Title</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Price_Zone as $item)
                                        <tr>
                                            <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"> </td>
                                            <td>
                                                <span>
                                                    {{ $item->name }}
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-animated scale-left d-flex">
                                                    <a class="text-gray font-size-18"  href="{{ url('admin/price_zone_edit',$item->id) }}">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{ url('admin/price_zone_delete', $item->id) }}">
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
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Zone</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
              <!-----------------end of pagination-->
       
                <div class="modal fade" id="create-new-project">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add a New Zones</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <i class="anticon anticon-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">


                                <form anticon="{{ url('admin/price_zone_edit',$item->id) }}" method="post">

                                    <div class="form-group">
                                        <label for="new-project-name">Zone Name</label>
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-project-name">Zone Description</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary text-center">Create Zone</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!---------end of modal-->
            </div>
            <!-- Content Wrapper END -->

            @endsection