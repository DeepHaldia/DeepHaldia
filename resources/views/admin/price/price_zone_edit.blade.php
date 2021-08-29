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
                    <form action="{{ url('admin/price_zone_update',) }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $price_zone_edit->id }}">
                        <div class="form-group">
                            <label for="new-project-name">Zone Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $price_zone_edit->name }}"  required="">
                        </div>
                        <div class="form-group">
                            <label for="new-project-name">Zone Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $price_zone_edit->description }}" required="">
                        </div>
                        <div class="modal-footer pt-5">
                            <button type="submit" class="btn btn-primary text-center">Update Zone</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <!---------end of modal-->
    </div>
    <!-- Content Wrapper END -->
@endsection