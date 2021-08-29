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
        <h3></h3>

        <div class="container-fluid" style="margin-top:3rem;">
            <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <h2>Search</h2>
                    <div class="alert alert-success mt-4">
                    <form class="form-inline">
                        <div class="form-group col-md-5">
                            <label for="inputState"><b>From</b></label>
                            <input type="date" class="form-control m-1" placeholder=" ">
                            <label class="form-check-label color-red ml-4" for="inlineFormCheck">
                                Select date
                            </label>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputState"><b>To</b></label>
                            <input type="date" class="form-control m-1" placeholder=" ">
                            <label class="form-check-label color-red ml-2" for="inlineFormCheck">
                                Select date
                            </label>
                        </div>
                        <div class="form-group text-center mx-auto">
                        <a type="submit" class="btn btn-primary mb-2" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">Search</a>
                        </div>
                    </form>
                    </div><!-----------------end of success-->
                    <div class="collapse" id="collapseMenu">
                        <div class="card card-body">
                        <div class="w-100">
                           
                            <div class="table-responsive-sm" id="no-more-tables">
                                <table class="table mt-5 mx-auto">
                                   
                                    <tbody>
                                        <tr class="col-md-12">
                                            <td class="col-md-4 col-sm-12">
                                                <div class="squareblue"></div>
                                            </td>
                                            <td class="col-md-4 col-sm-12">
                                                <div class="squarered"></div>
                                            </td>
                                            <td class="col-md-4 col-sm-12">
                                                <div class="squareorange"></div>
                                            </td>



                                        </tr>
                                        <tr class="col-md-12">
                                            <td class="col-md-4 col-sm-12">
                                                <strong>FIRST TRANSFER</strong>
                                            </td>
                                            <td class="col-md-4 col-sm-12">
                                                <strong>LAST TRANSFER</strong>
                                            </td>
                                            <td class="col-md-4 col-sm-12">
                                                <strong>TRANSFERS WITH &gt; 2 LEGS</strong>
                                            </td>



                                        </tr>
                                       
                                       
                                    </tbody>
                                </table>
                                <a href="printSchedule.html" target="_blank" type="submit" class="btn btn-primary mb-2">Print Screen</a>
                            </div>
                        </div>
                </div>
            </div><!-------------end of collapse-->


                </div>
            </div><!-------------------end of card------------->
            <div class="card text-center shadow p-3 mb-5 bg-white rounded driverSchedule">

                <div class="card-body">
                    <h1>TODAYS SCHEDULE</h1>
                    <form class="form-inline text-center mx-auto webform" style="display: none;">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <form class="text-center mx-auto mobform pl-5 pr-5">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                        <div class="w-100">
                            <div class="table-responsive-sm" id="no-more-tables">
                                <table class="table mt-5">
                                    <thead>
                                        <tr class="col-md-12">
                                            <th class="col-md-1 col-sm-12"></th>
                                            <th class="col-md-2 col-sm-12">Client, Depart</th>
                                            <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                            <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                            <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                            <th class="col-md-2 col-sm-12">Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="col-md-12">
                                            <td class="col-md-1 col-sm-12">
                                                <div class="alertRed">
                                                    Details<br>50788
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    Peterson, James<br>
                                                    Orlando Area - Round Trip
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    9.46 AM, American Airlines/2075
                                                </div>
                                            </td>
                                            <td class="col-md-3 col-sm-12">
                                                <div class="alertRed">
                                                    6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    CS: Yes, BS: Yes
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    Return
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="col-md-12 text-center">
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    <b>Arrived:</b>07/08/2021 10:56 AM
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                    <b>Cellphone:</b>9728343414
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    Credit Card <span class="alertGreen"><b>Approved</b></span>
                                                </div>
                                            </td>


                                        </tr>
                                     
                                        <tr class="col-md-12">
                                            <td class="col-md-1 col-sm-12">
                                                <div class="alertRed">
                                                    Details<br>50788
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    Peterson, James<br>
                                                    Orlando Area - Round Trip
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    9.46 AM, American Airlines/2075
                                                </div>
                                            </td>
                                            <td class="col-md-3 col-sm-12">
                                                <div class="alertRed">
                                                    6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    CS: Yes, BS: Yes
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertRed">
                                                    Return
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="col-md-12 text-center">
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    <b>Arrived:</b>07/08/2021 10:56 AM
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                    <b>Cellphone:</b>9728343414
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    Credit Card <span class="alertGreen"><b>Approved</b></span>
                                                </div>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div><!----------------w-100-->
                  

                </div>
            </div><!-----------------end of card-->
            <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <h1>TODAYS ARRIVAL</h1>
                    <form class="form-inline text-center mx-auto webform" style="display: none;">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <form class="text-center mx-auto mobform pl-5 pr-5">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <div class="w-100">
                        <div class="table-responsive-sm" id="no-more-tables">
                            <table class="table mt-5">
                                <thead>
                                    <tr class="col-md-12">
                                        <th class="col-md-1 col-sm-12"></th>
                                        <th class="col-md-2 col-sm-12">Client, Depart</th>
                                        <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                        <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                        <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                        <th class="col-md-2 col-sm-12">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertRed">
                                                Details<br>50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Peterson, James<br>
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertRed">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                Credit Card <span class="alertGreen"><b>Approved</b></span>
                                            </div>
                                        </td>


                                    </tr>

                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertRed">
                                                Details<br>50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Peterson, James<br>
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertRed">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                Credit Card <span class="alertGreen"><b>Approved</b></span>
                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!----------------w-100-->
                </div>
            </div><!--------------end of card-->
            <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <h1>TODAYS DEPARTURES</h1>
                    <form class="form-inline text-center mx-auto webform" style="display: none;">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <form class="text-center mx-auto mobform pl-5 pr-5">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <div class="w-100">
                        <div class="table-responsive-sm" id="no-more-tables">
                            <table class="table mt-5">
                                <thead>
                                    <tr class="col-md-12">
                                        <th class="col-md-1 col-sm-12"></th>
                                        <th class="col-md-2 col-sm-12">Client, Depart</th>
                                        <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                        <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                        <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                        <th class="col-md-2 col-sm-12">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertRed">
                                                Details<br>50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Peterson, James<br>
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertRed">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                Credit Card <span class="alertGreen"><b>Approved</b></span>
                                            </div>
                                        </td>


                                    </tr>

                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertRed">
                                                Details<br>50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Peterson, James<br>
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertRed">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertRed">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                Credit Card <span class="alertGreen"><b>Approved</b></span>
                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!----------------w-100-->
                </div>
            </div><!-----------------end of card---->
            <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                <div class="card-body">
                    <h1>TODAYS SCHEDULE</h1>
                    <form class="form-inline text-center mx-auto webform" style="display: none;">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                    <form class="text-center mx-auto mobform pl-5 pr-5">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12 text-center">
                            <label for="inputState"><b>Search By:</b></label>
                            <select name="search_by" size="1" class="form-control"><option value="name">Name</option><option value="id">Reservation ID</option><option value="email">E-mail</option><option value="phone_number">Phone Number</option><option value="cellphone">Mobile Phone</option><option value="payment_status">Payment Status</option><option value="approval_code">Gateway Response</option></select>

                            <label class="form-check-label color-red" for="inlineFormCheck">
                                Select option
                            </label>
                        </div>

                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                            <input type="text" class="form-control" placeholder="search ">
                        </div>
                        <div class="form-group col-lg-3 col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Add a New Reservation</button>
                        </div>
                    </form>
                        <div class="w-100">
                            <div class="table-responsive-sm" id="no-more-tables">
                                <table class="table mt-5">
                                    <thead>
                                        <tr class="col-md-12">
                                            <th class="col-md-1 col-sm-12"></th>
                                            <th class="col-md-2 col-sm-12">Client, Depart</th>
                                            <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                            <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                            <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                            <th class="col-md-2 col-sm-12">Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="col-md-12">
                                            <td class="col-md-1 col-sm-12">
                                                <div class="alertBlue">
                                                    Details<br>50788
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    Peterson, James<br>
                                                    Orlando Area - Round Trip
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    9.46 AM, American Airlines/2075
                                                </div>
                                            </td>
                                            <td class="col-md-3 col-sm-12">
                                                <div class="alertBlue">
                                                    6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    CS: Yes, BS: Yes
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    Return
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="col-md-12 text-center">
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    <b>Arrived:</b>07/08/2021 10:56 AM
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                    <b>Cellphone:</b>9728343414
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    Credit Card <span class="alertGreen"><b>Approved</b></span>
                                                </div>
                                            </td>


                                        </tr>

                                        <tr class="col-md-12">
                                            <td class="col-md-1 col-sm-12">
                                                <div class="alertBlue">
                                                    Details<br>50788
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    Peterson, James<br>
                                                    Orlando Area - Round Trip
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    9.46 AM, American Airlines/2075
                                                </div>
                                            </td>
                                            <td class="col-md-3 col-sm-12">
                                                <div class="alertBlue">
                                                    6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    CS: Yes, BS: Yes
                                                </div>
                                            </td>
                                            <td class="col-md-2 col-sm-12">
                                                <div class="alertBlue">
                                                    Return
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="col-md-12 text-center">
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    <b>Arrived:</b>07/08/2021 10:56 AM
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                <div>
                                                    We have 3 children with us. One is 2 year old, the other are 5 and 6. Do they all need car seats.<br>
                                                    <b>Cellphone:</b>9728343414
                                                </div>
                                            </td>
                                            <td class="col-md-4 col-sm-12" colspan="2">
                                                <div class="text-left">
                                                    Credit Card <span class="alertGreen"><br><b>Approved</b></span>
                                                </div>
                                                <div class="text-right">
                                                    Run Credit Card 
                                                </div>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!----------------w-100-->


                </div>
            </div><!---------------------------end of card-->

   
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

                                <form class="form-inline">
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
                                        <div class="d-flex">
                                            <input class="form-control col-md-6" type="date" />
                                            <small class="alertText">select date</small>
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
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="d-table">Comment</label>
                                        <textarea rows="4" cols="50">
                                    </textarea>

                                    </div><!-------------------------------dflex--------------->
                                    <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Add New Log</a>

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