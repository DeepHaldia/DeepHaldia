<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'ContentAdd/Edit')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->

<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <h2 class="text-center mx-auto">ADD A NEW TESTIMONY</h2>
        <div class="container-fluid" style="margin-top:3rem;">
            <div class="paddingnote">
                <form action="{{ url('admin/content_testimonial_insert') }}" method="POST">   
                    @csrf                        
                    <div class="form-group row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Name<span class="alertText">*</span></label>
                        <input type="text" class="form-control" name="name"  placeholder="name" required="">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Email Address</label>
                        <input type="email" class="form-control" name="email_address" placeholder="email">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">City</label>
                        <input type="text" class="form-control" name="city" placeholder="city">
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
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
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Overall SUN STATE TRANSPORTATION experience</label>
                        <select class="form-control" name="overall_rating" size="1">
                            <option selected="selected" value="5">5 - Excellent</option>
                            <option value="4">4 - Above Average</option>
                            <option value="3 ">3 - Average</option>
                            <option value="2">2 - Below Average</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Cleanliness of your vehicle</label>
                        <select class="form-control mt-3" name="clean_rating" size="1">
                            <option selected="selected" value="5">5 - Excellent</option>
                            <option value="4">4 - Above Average</option>
                            <option value="3 ">3 - Average</option>
                            <option value="2">2 - Below Average</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Vehicle Type</label>
                        <select class="form-control" name="vehicle" required="no" size="1">
                            <option value="Town Car">Town Car</option>
                            <option value="Luxury Van">Luxury Van</option>
                            <option selected="selected" value="Limo">Limousine</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Rate the Service</label>
                        <select class="form-control" name="service_rating" size="1">
                            <option selected="selected" value="5">5 - Excellent</option>
                            <option value="4">4 - Above Average</option>
                            <option value="3 ">3 - Average</option>
                            <option value="2">2 - Below Average</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Rate the Driver</label>
                        <select class="form-control" name="driver_rating" size="1">
                            <option selected="selected" value="5">5 - Excellent</option>
                            <option value="4">4 - Above Average</option>
                            <option value="3 ">3 - Average</option>
                            <option value="2">2 - Below Average</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Drivers Name (If you remember)</label>
                        <input type="text" class="form-control" id="new-project-name" name="drivers_name" value="Jack">
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Value of the service for  the money you spent?</label>
                        <select class="form-control" name="money_rating" size="1">
                            <option selected="selected" value="5">5 - Excellent</option>
                            <option value="4">4 - Above Average</option>
                            <option value="3">3 - Average</option>
                            <option value="2">2 - Below Average</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Would you use us again?</label>
                        <select class="form-control" name="use_us_again" size="1">
                            <option selected="selected" value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="new-project-name">Testimoney:</label>
                        <br>
                        <textarea class="form-control" cols="31" rows="5" name="testimonial"></textarea>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Status:</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option selected="selected" value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="new-project-name">Date:<span class="alertText">*</span></label>
                        <input type="date" name="date_submitted" class="form-control">
                    </div>
                    </div>
                    <div class="form-group text-right">
                       <button class="btn btn-primary">Add Testimony</button>
                    </div>

                </form>


            </div>
        </div>
        <div class="modal fade" id="create-new-project">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a New Zones</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form>

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