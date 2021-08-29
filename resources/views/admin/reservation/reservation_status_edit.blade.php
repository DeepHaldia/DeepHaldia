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
                <div id="menu-toggle" class="main-content">
                    <h2 class="text-center mx-auto">Update STATUS</h2>                   
             
                <div class="container-fluid" style="margin-top:3rem;">

                    <div class="paddingnote">
                        <form class="text-center" method="post" action="{{ url('admin/reservation_status_update') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $reservation_status_edit->id }}">
                        <div class="form-group">
                            <label for="new-project-name">Status Name</label>
                            <input type="text" class="form-control col-md-6 mx-auto" name="status_name" value="{{ $reservation_status_edit->name }}" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="new-project-name">Status Description</label>
                            <textarea class="form-control col-md-6 mx-auto" name="message" value="{{ $reservation_status_edit->message }}">
                                {{ $reservation_status_edit->message }}
                            </textarea>
                        </div>
                        <div class="table-responsive-sm" id="no-more-tables">
                            <table class="table mt-5 mx-auto">
                               
                                <tbody>
                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{asset('assets/images/other/icon9.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon1.gif') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon2.gif') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon3.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src=" {{ asset('assets/images/other/icon4.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon5.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon6.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon7.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon10.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon11.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon9.png') }}">
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <img class="img-responsive" src="{{ asset('assets/images/other/icon9.png') }}">
                                        </td>
                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                        <td class="col-md-1 col-sm-12">
                                            <strong><input type="radio" name="bookingTime" value="10:00"/></strong>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>  
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </div>
                    </form>
                    </div>
                </div>
                
                <!---------end of modal-->
            </div>
            <!-- Content Wrapper END -->
            @endsection