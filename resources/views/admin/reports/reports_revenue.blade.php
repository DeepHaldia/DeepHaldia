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

                                      
                    <div class="paddingnote">
                        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                            <div class="card-body">
                                <h2>Reports</h2>
                                <form class=" ">
                                    <div class="mt-3">
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
                                        <select name="trip_type" size="1" class="form-control col-md-12 col-sm-12 m-1">
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
                                        </div>
                                <div class="row mt-4 text-left">
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="inputState"><b>From</b></label>
                                        <input type="date" class="form-control" placeholder=" ">
                                        <label class="form-check-label color-red" for="inlineFormCheck">
                                            Select date
                                        </label>
                                    </div>
    
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="inputState"><b>To</b></label>
                                        <input type="date" class="form-control" placeholder=" ">
                                        <label class="form-check-label color-red" for="inlineFormCheck">
                                            Select date
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-12 mx-auto text-center mt-4">
                                    <a type="submit" class="btn btn-primary mt-2" data-toggle="collapse" href="#collapsegetreport" role="button" aria-expanded="false" aria-controls="collapsegetreport">Get Report</a>
                                    </div>
                                </div>
    
                                </form>
                                <div class="collapse" id="collapsegetreport">
                                    <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table mx-auto">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Car Type</th>
                                                <th>From/To</th>
                                                <th>Arrival<br> Date/Time</th>
                                                <th>Departure<br> Date/Time</th>
                                                <th> Status </th>
                                                
                                                <th>Date Submitted</th>
                                                <th> Price </th>
                                                <th>Action</th>        
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                              

                                            <tr>
                                              
                                                <td>
                                                    <span>
                                                        Adam Teesa
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                      Town Car
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                     Orlando
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="align-items-center">
                                                        12/10/2019<br>
                                                        <div class="align-items-center">
                                                            12:00 AM
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    12/10/2019
                                                </td>
                                                <td>Yes</td>
                                                
                                                <td>
                                                    12/10/2019
                                                </td>
                                                <td>$45</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-animated scale-left d-flex">
                                                        <a class="text-gray font-size-18" href="invoicePage.html" target="_blank">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="fas fa-print"></i>
    
                                                            </button>
                                                        </a>
    
                                                    </div>
                                                </td>
                                            </tr>
                                         
                                        </tbody>
                                         <!--------------start of pagination-->
              
                    <!---------------end of pagination-->
                                    </table>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------start of report-->
                        


                    <form>
                       
                           
                        
                        </div><!-----------end of containerfluid-->
                        {{-- <div class="modal fade" id="create-new-project">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add a New Reservation</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div style="background-color:#ced5f3; padding:5px; border:#677bca solid 1px;">
                                            <span style="color:#677bca; font-weight:bold;">Transportation Information</span>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="new-project-name">Client</label>
                                                <select class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                    <option selected>Alex Dam</option>
                                                    <option value="1">Marie clove</option>
                                                    <option value="2">Mark Benzer</option>
                                                    <option value="3">Carl</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="new-project-name">Vehicle</label>
                                                <select class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                    <option selected>Town Car</option>
                                                    <option value="1">Luxury Van</option>
                                                    <option value="2">Limousin</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Passenger</label>
                                                <select class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
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
                                            <div class="form-group">
                                                <label for="new-project-name">Car Seat</label>
                                                <select class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                    <option selected>Yes</option>
                                                    <option value="1">No</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Booster Seat</label>
                                                <select class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                    <option selected>Yes</option>
                                                    <option value="1">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Trip Type</label>
                                                <select name="trip_type" class="form-control ml-5 b-1 col-md-10" id="getFname" size="1" onchange="admSelectCheck(this);">
                                                    <option value="" selected="selected"> -- Select One -- </option>
                                                    <optgroup label="Orlando Area">
                                                        <option id="admOption" value="0">Orlando Area - One Way</option>
                                                        <option id="admOption" value="0">Orlando Area - Round Trip</option>
                                                    </optgroup>
                                                    <optgroup label="Cruise Transfer">
                                                        <option id="admOption" value="0">Disney/Universal&gt;Cruise&gt;MCO - Round trip</option>
                                                        <option id="admOption" value="0">MCO to Cruise Terminal/Port Area Resorts - One Way</option>
                                                        <option id="admOption" value="0">MCO to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                        <option id="admOption" value="0">Disney/Universal to Cruise Terminal/Port Area - One Way</option>
                                                        <option id="admOption" value="0">Disney/Universal to Cruise Terminal/Port Area - Round Trip</option>
                                                        <option id="wayOption" value="7">MCO&gt;Disney or Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                                        <option id="wayOption" value="7">MCO&gt;Cruise Terminals&gt;Disney or Universal&gt;MCO (3 leg)</option>
                                                        <option id="admOption" value="0">Sanford to Cruise Terminal/Port Area Resorts - One Way</option>
                                                        <option id="wayOption" value="7">Sanford to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                        <option id="wayOption" value="7">Sanford&gt;Cruise Terminals&gt;Disney or Universal&gt;Sanford</option>
                                                    </optgroup>
                                                    <optgroup label="Attraction Transfer">
                                                        <option id="wayOption" value="7">Disney Resort to Universal/Sea World - One Way</option>
                                                        <option id="wayOption" value="7">Disney Resort to Universal/Sea World - Round Trip</option>
                                                        <option id="wayOption" value="7">Disney Resort to SeaWorld Theme Park - One Way</option>
                                                        <option id="wayOption" value="7">Disney Resort to SeaWorld Theme Park - Round Trip</option>
                                                        <option id="wayOption" value="7">Disney Resort to Universal Theme Park - One Way</option>
                                                        <option id="wayOption" value="7">Disney Resort to Universal Theme Park - Round Trip</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <!------------------start of 2 way trip--------------------->
                                            <table id="admDivCheck" style="display:none;" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tbody>
                                                    <tr valign="middle">
                                                        <td>
                                                            <span style="color:#677bca; font-weight:bold;">Transportation Information</span>
                                                        </td>

                                                        <td align="right" height="30" width="30%" class="ob text-black"><strong>Transportation From: <font color="#ff0000" size="2">*</font></strong></td>
                                                        <td align="left" height="30" width="70%" class="ot2">
                                                            <select class="b-1 ml-2" name="from" id="from" size="1">
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
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td align="right" height="30" width="30%" class="ob text-black"><strong>Transportation To: <font color="#ff0000" size="2">*</font></strong></td>
                                                        <td align="left" height="30" width="70%" class="ot2">
                                                            <select class="b-1 ml-2" name="to" id="to" size="1">
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
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!---------------------end of 2 way trip-------------------->
                                            <!--start of 3 way trip-->
                                            <table id="wayDivCheck" style="display:none;" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tbody>
                                                    <tr valign="middle">
                                                        <td align="right" height="30" width="30%" class="ob text-black"><strong>Location 1: <font color="#ff0000" size="2">*</font></strong></td>
                                                        <td align="left" height="30" width="70%" class="ot2">
                                                            <select class="b-1 ml-2" name="location1" id="location1" size="1">
                                                                <option value="" selected="selected"> -- Select One -- </option>

                                                                <optgroup label="Orlando Airports">
                                                                    <option value="421">Orlando International Airport</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td align="right" height="30" width="30%" class="ob text-black"><strong>Location 2: <font color="#ff0000" size="2">*</font></strong></td>
                                                        <td align="left" height="30" width="70%" class="ot2">
                                                            <select class="b-1 ml-2" name="location2" id="location2" size="1">
                                                                <option value="" selected="selected"> -- Select One -- </option>
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
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr valign="middle">
                                                        <td align="right" height="30" width="30%" class="ob text-black"><strong>Location 3: <font color="#ff0000" size="2">*</font></strong></td>
                                                        <td align="left" height="30" width="70%" class="ot2">
                                                            <select class="b-1 ml-2" name="location3" id="location3" size="1">
                                                                <option value="" selected="selected"> -- Select One -- </option>
                                                                <optgroup label="Cruise Lines">
                                                                    <option value="423c">Disney Cruise Line</option>
                                                                    <option value="425c">Carnival Cruise Line</option>
                                                                    <option value="426c">Norwegian Cruise Line</option>
                                                                    <option value="427c">Royal Caribbean International</option>
                                                                    <option value="428c">Radisson Resort</option>
                                                                    <option value="429c">Royal Mansions Resort</option>
                                                                    <option value="430c">Other</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-------------end of 3 way trip------------------------>

                                            <span style="color:#677bca; font-weight:bold;">Passenger Information</span>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">First Name</label>
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Last Name</label>
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Street Address</label>
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Address Line</label>
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">City</label>
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">State</label>
                                                <select name="state" id="state" class="custom-select">
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
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Zip Code</label>
                                                <input type="number" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="new-project-name">State</label>
                                                <select name="state" id="state" class="custom-select">
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
                                            <div class="form-group">
                                                <label for="new-project-name">Country</label>
                                                <input type="number" class="form-control" id="new-project-name" placeholder="Country">
                                            </div>
                                            <div class="form-group">
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
                                            <div class="form-group">
                                                <label for="new-project-name">Telephone</label>
                                                <input type="phone" class="form-control" id="new-project-name" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Alternate Phone Number</label>
                                                <input type="phone" class="form-control" id="new-project-name" placeholder="Alternate Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Mobile</label>
                                                <input type="number" class="form-control" id="new-project-name" placeholder="Mobile">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Confirm Password</label>
                                                <input type="password" class="form-control" id="new-project-name" placeholder="Confirm Password" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary text-center">Create Client</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!---------end of modal-->
                 
               </div>
            <!-- Content Wrapper END -->
                

                                      
                    
@endsection