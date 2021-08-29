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
    <div id="menu-toggle" class="main-content">
        <h2 class="text-center mx-auto pt-5">ADD A NEW PRICE</h2>                   
             
        <div class="container w-50" style="margin-top:3rem;">
            <div class="modal-body">
                <form action="{{ url('admin/price_pricing_insert') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="d-table">Vehicle</label>
                        <select name="vehicle_id"  size="1" class="form-control">
                            <option value="1">Town Car</option>
                            <option value="2">Luxury Van</option>
                            <option value="3">Limousine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-table">price Title</label>
                        <input class="form-control" type="text" name="price_value">
                    </div>                    
                    <div class="form-group">
                        <label class="d-table">Trip Type</label>
                        <select name="trip_type" class="form-control"  size="1" onchange="admSelectCheck(this);">
                            <option value="0" selected="selected"> -- Select One -- </option>
                            <optgroup label="Orlando Area">
                                <option id="wayOption1" value="2">Orlando Area - One Way</option>
                                <option id="wayOption1" value="2">Orlando Area - Round Trip</option>
                            </optgroup>
                            <optgroup label="Cruise Transfer">
                                <option id="admOption1" value="0">MCO to Cruise Terminal/Port Area Resorts - One Way</option>
                                <option id="admOption1" value="0">MCO to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                <option id="admOption1" value="0">Disney/Universal to Cruise Terminal/Port Area - One Way</option>
                                <option id="admOption1" value="0">Disney/Universal to Cruise Terminal/Port Area - Round Trip</option>
                                <option id="admOption1" value="0">MCO&gt;Disney or Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                <option id="admOption1" value="0">MCO&gt;Cruise Terminals&gt;Disney or Universal&gt;MCO (3 leg)</option>
                                <option id="admOption1" value="0">Sanford to Cruise Terminal/Port Area Resorts - One Way</option>
                                <option id="admOption1" value="0">Sanford to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                <option id="admOption1" value="0">Sanford&gt;Cruise Terminals&gt;Disney or Universal&gt;Sanford</option>
                            </optgroup>
                            <optgroup label="Attraction Transfer">
                                <option id="admOption1" value="0">Disney Resort to Universal/Sea World - One Way</option>
                                <option id="admOption1" value="0">Disney Resort to Universal/Sea World - Round Trip</option>
                                <option id="admOption1" value="0">Disney Resort to SeaWorld Theme Park - One Way</option>
                                <option id="admOption1" value="0">Disney Resort to SeaWorld Theme Park - Round Trip</option>
                                <option id="admOption1" value="0">Disney Resort to Universal Theme Park - One Way</option>
                                <option id="admOption1" value="0">Disney Resort to Universal Theme Park - Round Trip</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-table">From Zone</label>
                        <select name="location1_id" size="1" class="form-control">
                            <option value="1">ZONE 1 - Orlando Airport</option>
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
                    <div class="form-group">
                        <label class="d-table">To Zone</label>
                        <select name="location2_id" size="1" class="form-control">
                            <option value="21">Zone 8 - Port Canaveral Cruise Terminals</option>
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
                    <div id="admDivCheck" class="customBundle box" >
                        <div class="form-group">
                            <label class="d-table">Custom Bundle</label>
                            <input class="form-control" name="custom_bundle"  type="text">
                        </div>
                    </div>
                    
                    <p class="text-center mx-auto">When you click the trip type, this content will be replaced.</p>
                    
                    <div class="form-group">
                        <label class="d-table">price</label>
                        <small class="alertText dolarAlign1">$</small>
                        <input class="form-control" type="text" name="price">
                    </div>
                    
                    <div class="form-group text-right pt-3">
                        <button class="btn btn-primary">Add Price</button>
                    </div>    
                </form>
                
                
            </div>
            
        </div>
        
        <!---------end of modal-->
    </div>
    <!-- Content Wrapper END -->
    @endsection
    <!-- Page Container START -->
    <option value="1">Town Car</option>