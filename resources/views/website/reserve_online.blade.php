@extends('layouts.website.main')

@section('title', 'Sunstates')

@section('content')
        <div class=clear></div>
        <div class="limoking-page-title-wrapper header-style-2-title-wrapper">
            <div class=limoking-page-title-overlay></div>
            <div class="limoking-page-title-container container">
                <h1 class="limoking-page-title">Service Rates</h1>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row reserveForm">
                <!------------------------------start of modal---------------->

                <div class="modal-header row w-100 ml-0">
                    <h2 class="text-center mx-auto text-black font-600 pt-3">Booking </h2>

                </div>
                <div class="modal-body">
                    <form action="/limoking/yellow/service-rates/#wpcf7-f6029-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="6029">
                            <input type="hidden" name="_wpcf7_version" value="5.4.1">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6029-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <div id="accordion">
                            <div class="card">
                              <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    <h5 class="text-white font-600">Passenger Information</h5>
                                </a>
                              </div>
                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Address</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">City</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="orlando">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Phone Number</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="407-601-7900">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Country</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="FL">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Cell Phone Number</label>
                                <input type="number" class="form-control" placeholder="407-601-7900">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="reservations@sunstatelimo.com">
                            </div>
                        </div>
                        <a class="collapsed card-link float-right" data-toggle="collapse" href="#collapseTwo">
                            <h6 class="continue-link">
                               Continue >>
                            </h5>
                        </a>
                                </div><!-------------------cardbody-->
                              </div><!----------------------collapse-->
                            </div><!--------------------card-->
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <h5 class="text-white font-600">
                                        Transfer Details
                                    </h5>
                              </a>
                              </div>
                              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                 
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Passenger Count</label>
                                <input type="email" class="form-control w-20" id="inputEmail4" placeholder="2">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Date and Time</label>
                                <input type="date" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>
                        <br />
                        <h5 class="text-center mx-auto">Arrival</h5>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4"><b>From:</b> Mumbai Airport</label>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Transfer Date</b></label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputEmail3" placeholder="">
                                    </div>
                                </div>

                            </div><!------------------end of mumbai airport-->
                            <div class="form-group col-md-12">
                                <label for="inputEmail4"><b>From:</b> Select the Airline from the list below</label>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Arriving Airline:</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>British Airways</option>
                                            <option>Indigo</option>
                                            <option>Airindia</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div><!----------------end of section-->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Flight Number:</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>FL23433</option>
                                            <option>FL29833</option>
                                            <option>FL9u95433</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div><!----------------end of section-->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Arriving At:</b></label>
                                    <div class="col-sm-3">
                                        <select class="form-control mobcustomMargin" id="exampleFormControlSelect1">
                                            <option>12</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>

                                        </select>
                                    </div><!-----------end of select-->
                                    <div class="col-sm-3">
                                        <select class="form-control" id="exampleFormControlSelect1">

                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div><!-----------end of select-->
                                    <div class="col-sm-2">
                                        <select class="form-control mobcustomMargin" id="exampleFormControlSelect1">
                                            <option>AM</option>
                                            <option>PM</option>
                                        </select>
                                    </div><!-----------end of select-->
                                </div><!----------------end of section-->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><b>To:</b></label>
                                    <div class="col-sm-8">
                                        <label for="inputEmail3" class="col-sm-12 col-form-label">Norway Exec: Airport</label>
                                    </div>
                                </div><!----------------end of section-->
                                <div class="form-group row ml-3">
                                    <div class="form-check col-md-4">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Food Corner
                                        </label>
                                    </div>
                                    <div class="form-check col-md-4">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Grocery Shop
                                        </label>
                                    </div>
                                    <div class="form-check col-md-4">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Car Seat
                                        </label>
                                    </div>
                                </div>
                            </div><!------------------end of mumbai airport-->
                        </div>
                        <a class="collapsed card-link float-right" data-toggle="collapse" href="#collapseThree">
                            <h6 class="continue-link">
                               Continue >>
                            </h5>
                        </a>
                                </div><!-------------------cardbody-->
                            </div><!----------------------collapse-->
                          </div><!--------------------card-->
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <h5 class="text-white font-600">
                                        Payment Details
                                    </h5>
                                </a>
                              </div>
                              <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="form-check col-md-12 ml-3">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Billing Information Same as Above
                                            </label>
                                        </div>
            
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">First Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder=" ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Last Name</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Credit/Debit Card</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
            
                                    </div>
            
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">type</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>--Selected Card Type---</option>
                                                <option>card1</option>
                                                <option>card2</option>
                                                <option>card3</option>
            
                                            </select>
                                        </div>
            
                                        <div class="form-group col-md-5">
                                            <label for="inputState">Expiry Date</label>
                                            <div class="row">
                                                <select class="form-control col-md-5 mobcustomMargin ml-3 mr-3">
                                                    <option selected>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>Aug</option>
                                                    <option>Sept</option>
                                                    <option>Oct</option>
                                                    <option>Nov</option>
                                                    <option>Dec</option>
            
                                                </select>
                                                <select class="form-control col-md-5 ml-3 mr-3">
                                                    <option selected>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
            
                                                </select>
                                            </div><!-------------row-->
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">CVV</label>
                                            <input type="text" class="form-control ml-2" id="inputZip">
                                        </div>
                                    </div><!------------------formrow-->
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Address</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
            
                                    </div><!------------------formrow-->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">City</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">State</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                    </div><!------------------formrow-->
                                    <div class="form-row">
            
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">zip</label>
                                            <input type="number" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Country</label>
                                            <select class="form-control">
                                                <option selected>United States</option>
                                                <option>Germany</option>
                                                <option>USA</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>Aug</option>
                                                <option>Sept</option>
                                                <option>Oct</option>
                                                <option>Nov</option>
                                                <option>Dec</option>
            
                                            </select>
                                        </div>
                                    </div><!------------------formrow-->
            
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Please do not Charge my Credit card.  I will paying cash or travellor check upon arriaval. I understand I am
                                                submitting my credit card only to gurantee my reservation.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
            
                                            <label class="form-check-label" for="gridCheck">
                                                By clicking the Submit Button below you are confirming this reservation and we will have a driver waiting for
                                                you at the location mentioned above with no credit card needed.  Reservation or confirm immediately and a detailed
                                                confirmation will be emailed to you.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the terms of use, privacy policy and cancelation policy. <br />
                                                <a href="">Click here to Read</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center row">
                                        <button type="submit" class="btn btn-secondary text-center mx-auto">Confirm Reservation</button>
                                    </div>
            
                                    <div class="clear"></div>
                                </div><!-------------------cardbody-->
                            </div><!----------------------collapse-->
                          </div><!--------------------card-->
                          </div><!--------------------accorion-->
                       
                    </form>
                </div>


                <!---------------------------------------------------end of modal-------------------------->

            </div><!-------------------------------row-->
        </div><!-------------------container-->


        @endsection