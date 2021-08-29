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
                    <h2 class="text-center mx-auto">Add Locked Date</h2>                   
             
                <div class="container-fluid" style="margin-top:3rem;">

                    <div class="paddingnote">
                        <form class="text-center" method="post" action="{{ url('admin/reservation_lock_date_insert') }}">
                            @csrf
                        <div class="form-group">
                            <label for="new-project-name">From Date</label>
                            <input type="text" class="form-control col-md-6 mx-auto" name="from_date" required="">
                        </div>
                        <div class="form-group">
                            <label for="new-project-name">To Date</label>
                            <input type="text" class="form-control col-md-6 mx-auto" name="to_date" required="">
                        </div>
                        
                        
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Add Status</button>
                        </div>
                    </form>
                    </div>
                </div>
                
                <!---------end of modal-->
            </div>
            <!-- Content Wrapper END -->
            @endsection