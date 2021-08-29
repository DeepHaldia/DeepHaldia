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
        <h2 class="text-center mx-auto">EXPENSE LOG</h2>
        <div class="page-header no-gutters" style="margin-top:3rem;">
            <div class="row mb-30 text-right">



                <div class="col-lg-7 col-md-7"></div>

                <div class="col-lg-3 text-center mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#create-new-project">
                        <i class="anticon anticon-plus"></i>
                        <span class="m-l-5">Add a New Log</span>
                    </button>
                </div>
                <div class="col-lg-2 text-center mb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-book m-r-5"></i>
                        <span>Get Report</span>
                    </button>
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

                                        <div class="alert alert-success mt-4">
                                            <h4 class="alert-heading text-center">Reports</h4>
                                            <form class=" ">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="d-table"><b>For</b></label>
                                                    <div class="row">
                                                        <select name="vehicle_id" size="1" class="form-control col-md-6 col-sm-12 m-1">
                                                            <option value="">All Vehicles</option>
                                                            <option value="1">Town Car</option>
                                                            <option value="2">Luxury Van</option>
                                                            <option value="3">Limousine</option>
                                                        </select>
                                                        <select name="status_id" size="1" class="form-control col-md-6 col-sm-12 m-1">
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
                                                    <div class="row">
                                                    <select name="trip_type" size="1" class="form-control col-md-12 col-sm-12 ml-1 mr-1">
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
                                                </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">From</label>
                                                        <div class="row">
                                                            <input class="form-control col-md-6 col-sm-12 ml-2 mr-2" type="date" />
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">To</label>
                                                        <div class="row">
                                                            <input class="form-control col-md-6 col-sm-12 ml-2 mr-2" type="date" />
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Get Report</a>

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
                            <table class="table mx-auto">
                                <thead>
                                    <tr>

                                        <th>Date</th>
                                        <th>Account</th>
                                        <th>Memo</th>
                                        <th>Amount</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20/03/04</td>
                                        <td>Details
                                            50788</td>
                                            <td>6, Luxury Van, From: Shades of Green To: Orlando Airport</td>
                                            <td>2500.00</td>
                                    </tr>
                                    <tr>
                                        <td>20/03/04</td>
                                        <td>Details
                                            50788</td>
                                            <td>6, Luxury Van, From: Shades of Green To: Orlando Airport</td>
                                            <td>2500.00</td>
                                    </tr>


                                </tbody>
                            </table>
                           <!--- <h3 class="text-center mx-auto">No expenses found for that date range <a href="#" data-toggle="modal" data-target="#create-new-project">Enter a new Expense</a></h3>-->
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
            </div>
            <div class="modal fade" id="create-new-project">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add a New Log</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>

                                <div class="alert alert-success mt-4">

                                    <form class="">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="d-table">Expense Type</label>

                                            <select class="form-control m-1" name="type">
                                                <option value="" selected="selected">Please Select</option>
                                                <option value="1">Utilities</option>
                                                <option value="2">Rent</option>
                                                <option value="3">Auto Repair</option>
                                                <option value="4">Office Equipment Supplies</option>
                                                <option value="5">Licenses &amp; Taxes</option>
                                                <option value="6">Gas</option>
                                                <option value="7">Salary</option>
                                                <option value="8">Miscellaneous</option>
                                            </select>

                                        </div><!-------------------------------dflex--------------->

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="d-table">Date of Expense</label>
                                            <div class="row">
                                                <input class="form-control col-md-6 col-sm-12 ml-3 mr-3" type="date" />
                                                <small class="alertText text-center">select date</small>
                                            </div><!-------------------------------dflex--------------->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="d-table">Amount of Expense</label>
                                            <input class="form-control col-md-6" type="text" />

                                        </div><!-------------------------------dflex--------------->
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="d-table">Driver Name</label>
                                            <select class="form-control m-1" name="drivers_id">
                                                <option value="">None</option>
                                                <option value="114">Abdel Aziz Tarhani</option>114
                                                <option value="100">ABDERAHMAN MAKBOUL</option>100
                                                <option value="128">Alberto Irausquin</option>128
                                                <option value="75">Alfredo Cipriano Barros</option>75
                                                <option value="130">Andy Negede</option>130
                                                <option value="116">Arsenio Perez-Corujo</option>116
                                                <option value="131">Claudio DeSilva</option>131
                                                <option value="113">Eyob Hailab</option>113
                                                <option value="132">First Choice </option>132
                                                <option value="53">Glenn Rezende </option>53
                                                <option value="127">Kamel Chetouane</option>127
                                                <option value="137">Mebratu Dawit Abraha</option>137
                                                <option value="129">Peter Piantinis</option>129
                                                <option value="122">Rash Test IWS</option>122
                                                <option value="118">Sahid  Alpizar</option>118
                                                <option value="134">Simret  Tegegne</option>134
                                                <option value="136">Tesfu Bokre</option>136
                                                <option value="133">Willie Miller III</option>133
                                                <option value="135">Yohannes   Yohannes</option>135
                                            </select>

                                        </div><!-------------------------------dflex--------------->
                                        <div class="form-group col-md-12 col-sm-12 pl-0 pr-0">
                                            <label for="exampleFormControlInput1" class="d-table">Comment</label>
                                            <textarea rows="4" class="form-control w-100">
                                    </textarea>

                                        </div><!-------------------------------dflex--------------->
                                        <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2 text-right">Add New Log</a>

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------end of modal-->
  
    <!-- Content Wrapper END -->

    @endsection