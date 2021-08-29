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
        <div class="container-fluid">
            <div class="">
                <h2 class="text-center mx-auto">ADD A NEW DRIVER</h2>
                <form class="paddingUpdate" action="{{ url('admin/user_driver_list_insert') }}" method="POST">
                    @csrf
                <div class=" form-group row">
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name"> Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Please input project name" required="">

                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="name" placeholder="Please input project name" required="">

                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Please input project name">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="new-project-name" placeholder="Mobile">
                    </div>
                </div>
                <div class=" form-group row">  
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required="">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">
                            Cell Phonelabel
                            <input type="number" class="form-control" id="new-project-name" name="cell_phone" placeholder="Cell Phone">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Cellphone Provider</label>
                        <select id="inputState" class="form-control" name="cell_provider">
                            <option value="Metro PCS" selected>Metro PCS</option>
                            <option value="Verizon">Verizon</option>
                            <option value="Tmobile">Tmobile</option>
                            <option value="Sprint">Sprint</option>
                            <option value="ATT">AT&amp;T </option>
                            <option value="Boost Mobile">Boost Mobile</option>
                          </select>
                    
                    </div>
                    </div>
                    <div class=" form-group row">  
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Telephone</label>
                        <input type="text" class="form-control" id="new-project-name" name="telephone" placeholder="Phone">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Address</label>
                        <input type="text" class="form-control" name="address" id="new-project-name" placeholder="Please input project name">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Apt. Number</label>
                        <input type="text" class="form-control" id="new-project-name" name="apt_number" placeholder="Phone">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-4 col-sm-12">
                  
                        <label for="new-project-name">City</label>
                        <input type="text" class="form-control" id="new-project-name"  name="city" placeholder="city">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                       
                        <label for="new-project-name">State</label>
                        <select class="form-control" name="state">
                            <option value="" selected="selected">Select State</option>
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
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Zip</label>
                        <input type="text" class="form-control" name="zip" placeholder="zip">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-4 col-sm-12 ">
                  
                        <label for="new-project-name">Social Security Number:</label>
                        <input type="text" class="form-control" name="security_number" placeholder="Social Security Number:">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                  
                        <label for="new-project-name">Drivers License Number:</label>
                        <input type="text" class="form-control" name="license_number" placeholder="Drivers License Number">
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Per Transfer Wage:</label>
                        <input type="text" class="form-control" name="transfer_wage" placeholder="Per Transfer Wage">
                    </div>                    
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="new-project-name">Daily Wage:</label>
                            <input type="text" class="form-control" name="daily_wage" placeholder="Daily Wage">
                        </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Employment Date:</label>
                        <input type="date" class="form-control mb-0" name="employment_date"><br>
                        <span class="color-red pl-2 pt-0 mt-0">Click to select the date</span>
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="new-project-name">Employment Status:</label>
                        <select class="form-control" name="employment_status">
                            <option value="3">Active</option>
                            <option value="2">Leave of Abscence</option>
                            <option value="1">Terminated</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group text-right">
                        <button class="btn btn-primary">Add New Driver</button>
                    </div>
                    
                </form>


            </div><!--------------------card-->
        </div>
    </div>
    <!-- Content Wrapper END -->

    @endsection