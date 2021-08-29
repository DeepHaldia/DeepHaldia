<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'ContentAdd/Edit')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->


<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <h2 class="text-center mx-auto">ADD PAGE</h2>
        <div class="container w-50" style="margin-top:3rem;">
            <div class="paddingnote">
                <form action="{{ url('admin/content_faq_insert') }}" method="POST">
                    @csrf
                    <div class="form-row d-flex">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="exampleFormControlInput1">Question</label>
                            <input type="text" class="form-control" placeholder="" name="page_title">
                        </div>
                    </div>
                    <div class="form-row d-flex">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="exampleFormControlTextarea1">Answer</label>
                            <textarea class="form-control" rows="3" name="meta_description"></textarea>
                        </div>
                    </div>            
                    
                    <div class="form-group text-right">
                        <button class="btn btn-primary">Add Page</button>
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
 
    <!-- Content Wrapper END -->
    @endsection