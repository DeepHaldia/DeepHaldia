<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->

<div class="page-container">
    
    
    
    
    <div class="main-content">
        <h2 class="text-center mx-auto">PRICE MANAGER</h2>
        <div class="page-header no-gutters" style="margin-top:3rem;">
            <div class="row mb-30">
                
                
                <div class="col-md-3 text-center mb-3">
                    <div class="input-affix">
                        <i class="prefix-icon anticon anticon-search opacity-04"></i>
                        <input type="text" class="form-control" placeholder="PRICE">
                    </div>
                </div>
                
                
                <div class="col-md-3 text-center mb-3">
                    <select name="vehicle_id" size="1" class="form-control">
                        <option value="">All Vehicles</option>
                        <option value="1">Town Car</option>
                        <option value="2">Luxury Van</option>
                        <option value="3">Limousine</option>
                    </select>
                </div>
                
                <div class="col-md-3 text-center">
                    <a class="btn btn-primary mb-3" href="{{ url('admin/price_pricing_add') }}">
                        <i class="anticon anticon-plus"></i>
                        <span class="m-l-5">Add New Price</span>
                    </a>
                </div>
                
                <div class="col-md-3 text-center">
                                <button type="button" class="btn btn-primary mb-3 ml-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    <i class="anticon anticon-book m-r-5"></i>
                                    <span>Price Calculator</span>
                                </button>
                                <!------------------------------Start of Modal-->
                                <!-- Large modal -->
                                
                                
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PRICE CALCULATOR</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="alert alert-success mt-4">
                                                        
                                                        <div class="form-group row">
                                                            <div class="form-group col-md-8 col-sm-12">
                                                                <label for="exampleFormControlInput1" class="d-table">Vehicle</label>
                                                                
                                                                <select name="vehicle_id" size="1" class="form-control">
                                                                    <option value="">All Vehicles</option>
                                                                    <option value="1">Town Car</option>
                                                                    <option value="2">Luxury Van</option>
                                                                    <option value="3">Limousine</option>
                                                                </select>
                                                            
                                                            </div><!-------------------------------dflex--------------->
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="exampleFormControlInput1" class="d-table">Passengers</label>
                                                                
                                                                <select name="passenger_count" size="1" class="form-control">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                            </select>
                                                            
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                            <label for="new-project-name" class="d-table">
                                                                Trip Type
                                                            </label>
                                                            <select name="trip_type" class="form-control" id="getFname" size="1" onchange="admSelectCheck(this);">
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
                                                        <div class="form-group d-flex">
                                                            <div class="form-group col-md-6">
                                                                <label for="exampleFormControlInput1" class="d-table">Price</label>
                                                                
                                                                <small class="alertText dolarAlign">$</small>
                                                                <input class="form-control" type="text" />
                                                                
                                                                
                                                            </div>
                                                        </div><!---------------dflex-->
                                                        <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Calculate Total</a>
                                                        
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
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Price</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label class="d-table">Vehicle</label>
                                                                <select name="vehicle_id" id="vehicle_id" size="1" class="form-control">
                                                                    <option value="1">Town Car</option>
                                                                    <option value="1">Town Car</option>
                                                                    <option value="2">Luxury Van</option>
                                                                    <option value="3">Limousine</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="d-table">Trip Type</label>
                                                            <select name="trip_type" class="form-control" id="getFname" size="1" onchange="admSelectCheck(this);">
                                                                <option value="0" selected="selected"> -- Select One -- </option>
                                                                <optgroup label="Orlando Area">
                                                                    <option id="wayOption" value="7">Orlando Area - One Way</option>
                                                                    <option id="wayOption" value="7">Orlando Area - Round Trip</option>
                                                                </optgroup>
                                                                <optgroup label="Cruise Transfer">
                                                                    <option id="admOption" value="0">Disney/Universal&gt;Cruise&gt;MCO - Round trip</option>
                                                                    <option id="admOption" value="0">MCO to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                    <option id="admOption" value="0">MCO to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                    <option id="admOption" value="0">Disney/Universal to Cruise Terminal/Port Area - One Way</option>
                                                                    <option id="admOption" value="0">Disney/Universal to Cruise Terminal/Port Area - Round Trip</option>
                                                                    <option id="admOption" value="0">MCO&gt;Disney or Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                                                    <option id="admOption" value="0">MCO&gt;Cruise Terminals&gt;Disney or Universal&gt;MCO (3 leg)</option>
                                                                    <option id="admOption" value="0">Sanford to Cruise Terminal/Port Area Resorts - One Way</option>
                                                                    <option id="admOption" value="0">Sanford to Cruise Terminal/Port Area Resorts - Round Trip</option>
                                                                    <option id="admOption" value="0">Sanford&gt;Cruise Terminals&gt;Disney or Universal&gt;Sanford</option>
                                                                </optgroup>
                                                                <optgroup label="Attraction Transfer">
                                                                    <option id="admOption" value="0">Disney Resort to Universal/Sea World - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to Universal/Sea World - Round Trip</option>
                                                                    <option id="admOption" value="0">Disney Resort to SeaWorld Theme Park - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to SeaWorld Theme Park - Round Trip</option>
                                                                    <option id="admOption" value="0">Disney Resort to Universal Theme Park - One Way</option>
                                                                    <option id="admOption" value="0">Disney Resort to Universal Theme Park - Round Trip</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="d-table">From Zone</label>
                                                            <select name="from" size="1" class="form-control">
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
                                                            <select name="to" size="1" class="form-control">
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
                                                           
                                                           <div class="form-group">
                                                               <label class="d-table">Custom Bundle</label>
                                                               <input class="form-control" type="text" value="Airport to Cruise Terminal/Port Area Resorts - Round Trip">
                                                            </div>
                                                            <div id="admDivCheck" class="customBundle box" style="display:none;">
                                                                <div class="form-group">
                                                                    <label class="d-table">Custom Bundle</label>
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        <div id="wayDivCheck" class="customBundle box" style="display:none;">
                                                            <div class="form-group">
                                                                <label class="d-table">From Zone</label>
                                                                <select name="from" size="1" class="form-control">
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
                                                                <select name="to" size="1" class="form-control">
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
                                                        </div>
                                                        <p class="text-center mx-auto">When you click the trip type, this content will be replaced.</p>
                                                                
                                                        <div class="form-group">
                                                                    <label class="d-table">price</label>
                                                                    <small class="alertText dolarAlign1">$</small>
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                                
                                                                <div class="form-group text-right">
                                                                    <button class="btn btn-primary">Update</button>
                                                                </div>
                                                            </form>
                                                            
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="{{ url('admin/price_pricing_all_delete') }}" method="POST">
                                                @csrf
                                            <table class="table mx-auto">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Vehicle</th>
                                                        <th>Price Title</th>
                                                        <th>Price Value</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @forelse ($price_pricing as $item)
                                                    <tr>
                                                        <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                                        <td>
                                                            <div class="media align-items-center">                                                      
                                                                <span>{{ $item->vehicle_id }}</span>                                                       
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <span>{{ $item->custom_bundle }}</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                {{ $item->price_value }}
                                                            </span>
                                                        </td>
                                                        
                                                        {{-- <td>
                                                            <div class="align-items-center">
                                                                {{ $item->price }}
                                                            </div>
                                                        </td> --}}
                                                        
                                                        <td class="text-right">
                                                            <div class="dropdown dropdown-animated scale-left d-flex">
                                                                <a class="text-gray font-size-18"  href="{{ url('admin/price_pricing_edit',$item->id) }}">
                                                                    <button class="dropdown-item" type="button">
                                                                        <i class="fas fa-edit"></i>
                                                                    </button>
                                                                </a>
                                                                <a class="text-gray font-size-18" href="{{ url('admin/price_pricing_delete',$item->id) }}">
                                                                    <button class="dropdown-item" type="button">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    
                                                    @endforelse
                                                    
                                                    
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
                            <div class="modal fade" id="create-new-project">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center mx-auto" id="exampleModalLongTitle">Add a New Price</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!---------end of modal-->
                            
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
                        <!-- Page Container START -->
                        <!-- Content Wrapper START -->