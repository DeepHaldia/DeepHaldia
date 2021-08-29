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
                    <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal text-center mx-auto">Setting</h2>
                        
                    </div>
                    <div class="container">
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade active show" id="tab-account">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="{{ asset('assets/admin_assets/images/avatars/p3.jpg') }}" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Admin</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max fil size: 5MB
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-tone btn-primary">Upload</button>
                                            </div>
                                        </div>
                                        <div id="accordion">
                                            <div class="card mt-4">
                                              <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                    Company Information
                                                </a>
                                              </div>
                                              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                        <!-----------start of form----------->
                                                                                  
                                        <form action="{{ url('admim/settings_update') }}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="userName">Company Name:</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="" name="company" value="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="email">Street Address:</label>
                                                    <input type="text" class="form-control" id="email" placeholder=" " name="address" value="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Address Line2:</label>
                                                    <input type="text" class="form-control" name="address2" value="Suite 104">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">City:</label>
                                                    <input type="text" class="form-control" id="dob" name="city" value="orlando">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="language">State</label>
                                                    <select name="state" id="state" name="state" class="form-control">
                                                        <option value="FL" selected="selected">FL</option>
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
                                            </div><!-----------end of form group-->
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Zip Code:</label>
                                                    <input type="number" class="form-control" name="zip" value="328194">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Country:</label>
                                                    <select name="country" id="country" class="form-control">
                                                        <option value="USA">USA</option>
                                                        <option value="USA" selected="selected">United States</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Toll Free:</label>
                                                    <input type="text" class="form-control" id="dob" name="tollfree" value="orlando">
                                                </div>
                                            </div><!-----formrow-------------->
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Telephone:</label>
                                                    <input type="number" class="form-control" name="telephone" value="328194">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Fax:</label>
                                                    <input type="number" class="form-control" name="fax" value="407-601-7901">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Email:</label>
                                                    <input type="email" class="form-control" name="email" value="reservations@sunstatelimo.com">
                                                </div>
                                            </div><!-----formrow-------------->
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Slogan:</label>
                                                    <textarea name="slogan" id="slogan" cols="36" rows="2" class="form-control">Orlando's Premiere Transportation Company</textarea>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Home Page Title:</label>
                                                    <textarea name="home_page_title" id="home_page_title" cols="36" rows="2" class="form-control">Orlando Airport's Premier Transportation Services - Limousine, Towncar, Passenger Van</textarea>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Show Contact:</label>
                                                    <select name="show_contact" id="show_contact" class="form-control">
                                                        <option value="Yes">Yes</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div><!-----formrow-------------->
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Show Contact:</label>
                                                    <select name="show_contact" id="show_contact" class="form-control">
                                                        <option value="Yes">Yes</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Show Map:</label>
                                                    <select name="show_contact" id="show_contact" class="form-control">
                                                        <option value="Yes">Yes</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Map Engine:</label>
                                                    <select name="map_engine" id="map_engine" class="form-control">
                                                        <option value="live_search">Live search</option>
                                                        <option value="google">Google</option>
                                                        <option value="yahoo">Yahoo!</option>
                                                        <option value="live_search">Live Search</option>
                                                    </select>
                                                </div>
                                            </div><!-----formrow-------------->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="phoneNumber">Reservation Minimum Time:</label>
                                                    <select name="minimum_time" id="minimum_time" class="form-control">
                                                        <option value="2">48</option>
                                                        <option value="1">24</option>
                                                        <option value="2">48</option>
                                                        <option value="3">72</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="dob">Drivers Daily Wage Minimum Transfers:</label>
                                                    <input name="driver_minimum_transfers" class="form-control" size="10" type="text" value="4">
                                                </div>
                                               
                                            </div><!-----formrow-------------->
                                            <button class="btn btn-primary float-right">Update</button>
                                        </form>
                                                        <!------------end of form---------->
                                                </div>
                                              </div>
                                            </div><!----------------end of card-------------->
                                            <div class="card">
                                              <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                Login Details
                                              </a>
                                              </div>
                                              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="font-weight-semibold" for="oldPassword">User Admin:</label>
                                                                <input type="password" class="form-control" id="oldPassword" value="admin">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="font-weight-semibold" for="oldPassword">Old Password:</label>
                                                                <input type="password" class="form-control" id="oldPassword" placeholder="Old Password">
                                                            </div>
                                                            </div><!-------------------formrow-->
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="font-weight-semibold" for="newPassword">New Password:</label>
                                                                <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                                            </div>
                                                        </div><!----------------------formrow-->
                                                                <div class="form-row float-right">
                                                                    <button class="btn btn-primary">Update</button>
                                                                </div>
                                                            
                                                    </form>
                                                </div>
                                              </div>
                                            </div><!----------------end of card-------------->
                                          
                                          </div><!-----------------------accordion------------->
                                        
                 
                                    </div>
                                </div>
                               
                              
                            </div>
                            <div class="tab-pane fade" id="tab-network">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Network Integration</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #4267b1; background: rgba(66, 103, 177, 0.1)">
                                                                    <i class="anticon anticon-facebook"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Facebook</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://facebook.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-fb" checked="">
                                                                    <label for="switch-fb"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #fff; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)">
                                                                    <i class="anticon anticon-instagram"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Instagram</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-inst">
                                                                    <label for="switch-inst"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #1ca1f2; background: rgba(28, 161, 242, 0.1)">
                                                                    <i class="anticon anticon-twitter"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Twitter</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://twitter.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-tw" checked="">
                                                                    <label for="switch-tw"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #d8487e; background: rgba(216, 72, 126, 0.1)">
                                                                    <i class="anticon anticon-dribbble"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dribbble</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-dr">
                                                                    <label for="switch-dr"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #323131; background: rgba(50, 49, 49, 0.1)">
                                                                    <i class="anticon anticon-github"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Github</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://github.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-gh" checked="">
                                                                    <label for="switch-gh"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #0174af; background: rgba(1, 116, 175, 0.1)">
                                                                    <i class="anticon anticon-linkedin"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Linkedin</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://linkedin.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-ln" checked="">
                                                                    <label for="switch-ln"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #005ef7; background: rgba(0, 94, 247, 0.1)">
                                                                    <i class="anticon anticon-dropbox"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dropbox</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-db">
                                                                    <label for="switch-db"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-notification">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Notification Config</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-blue">
                                                                    <i class="anticon anticon-user"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can look me up</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow people found on your public.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-1" checked="">
                                                                    <label for="switch-config-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-cyan">
                                                                    <i class="anticon anticon-mobile"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can contact me</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any peole to contact.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-2" checked="">
                                                                    <label for="switch-config-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-gold">
                                                                    <i class="anticon anticon-environment"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Show my location</h5>
                                                                    <p class="m-b-0 font-weight-normal">Turning on Location lets you explore what's around you.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-3">
                                                                    <label for="switch-config-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-purple">
                                                                    <i class="anticon anticon-mail"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Email Notifications</h5>
                                                                    <p class="m-b-0 font-weight-normal">Receive daily email notifications.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-4" checked="">
                                                                    <label for="switch-config-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-red">
                                                                    <i class="anticon anticon-question"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Unknow Source</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow all downloads from unknow source.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-5">
                                                                    <label for="switch-config-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-green">
                                                                    <i class="anticon anticon-swap"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Data Synchronization</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow data synchronize with cloud server.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-6" checked="">
                                                                    <label for="switch-config-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-orange">
                                                                    <i class="anticon anticon-usergroup-add"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Groups Invitation</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any groups invitation</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-7" checked="">
                                                                    <label for="switch-config-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                @endsection