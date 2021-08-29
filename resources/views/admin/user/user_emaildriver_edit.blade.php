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
        <h2 class="text-center mx-auto">ADD Price Zone</h2>
        <div class="container-fluid" style="margin-top:2rem;">

            <div class="paddingnote">
                <div class="container w-50">
                    <form action="{{ url('admin/user_emaildriver_update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="new-project-name">	Email Template Name</label>
                            <input type="text" class="form-control" name="email_templates" value="{{ $user_emaildriver_edit->email_templates }}"  required="">
                        </div>
                        <div class="modal-footer pt-5">
                            <button type="submit" class="btn btn-primary text-center">Add User Email Driver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <!---------end of modal-->
    </div>
    <!-- Content Wrapper END -->
@endsection