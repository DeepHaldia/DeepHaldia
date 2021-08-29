<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')


<!-- Page Container START -->
<div class="page-container">
    <!-- Content Wrapper START -->
    <div class="main-content">
        <h2 class="text-center mx-auto">Edit A New Locaiton</h2>
        <div class="container-fluid" style="margin-top:2rem;">
            <div class="container w-50">
                <div class="modal-body">
                    <form action="{{url('admin/price_location_update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $price_location_edit->id }}">
                        <div class="form-group row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="new-project-name">Zone ID</label>
                            <select size="1" class="form-control" name="zone_id" value="{{ $price_location_edit->zone_id }}" require="">
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
                            <select size="1" class="form-control" name="location_type" value="{{ $price_location_edit->location_type }}">
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
                            <input name="name" class="form-control col-md-6" value="{{ $price_location_edit->name }}" size="39" type="text" required="">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="new-project-name">Address</label>
                            <input name="address" class="form-control" size="39" value="{{ $price_location_edit->address }}" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="new-project-name">City</label>
                            <input name="city" class="form-control" size="39" value="{{ $price_location_edit->city }}" type="text" required="">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="new-project-name">State</label>
                            <select name="state" id="state" class="form-control" required="" value="{{ $price_location_edit->state}}">
                                <option value="AK">AK</option>    
                                <option value="AL">AL</option>
                                <option value="AR">AR</option>
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>    
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>    
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL" selected="selected">FL</option>
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
                            <label for="new-project-name">Zip Code</label>
                            <input name="zip" class="form-control" value="{{ $price_location_edit->zip }}" size="39" type="text">
                        </div>
                        <div class="form-group col-md-6  col-sm-12">
                            <label for="new-project-name">Phone Number</label>
                            <input name="phone" class="form-control" size="39" value="{{ $price_location_edit->phone }}"type="text">
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary text-center">Update Location</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    
        <!---------end of modal-->
    </div>
    <!-- Content Wrapper END -->
@endsection