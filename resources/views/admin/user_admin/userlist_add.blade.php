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
        <h2 class="text-center mx-auto">ADD A New Users </h2>
        <div class="container-fluid" style="margin-top:2rem;">
            <div class="container w-50">
                <div class="modal-body">
                    <form action="{{url('admin/userlist_insert') }}" method="post">
                        @csrf   
                        <div class="form-group row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="new-project-name">User Name</label>
                            <input name="name" class="form-control" size="39" type="text" required="">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="new-project-name">Password</label>
                            <input name="password" class="form-control" size="39" type="password" required="">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row pl-5 checkboxScroll">                                
                                      <div class="form-group form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" value="" name="slect_opstion" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                         CLIENTS
                                        </label>
                                      </div>
    
                                      <div class="form-group form-check col-md-12">
                                        <input class="form-check-input" type="checkbox" name="slect_option1" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                         RESERVATION
                                        </label>
                                      </div>     
    
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" name="slect_option2" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SHADES OF GREEN RESERVATIONS
                                        </div>                                 
                                   
                                  
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option3" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                VEHICLE
                                        </div>
                                        
                                   
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option4" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                               ZONE
                                        </div>
    
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option5" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                             LOCATION
                                            </label>
                                        </div>
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option6" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                             PRICE
                                            </label>
                                        </div>
                                        
                                        <div class="form-group form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" value="" name="slect_option7" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    PRICE SOG
                                        </div>                                       
                                       
                                      
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option8" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                    PAGES
                                        </div>                                        
                                       
                                        <div class="form-group form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" value="" name="slect_option9" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                  EMAIL
                                        </div>
                                        <div class="form-group form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" value="" name="slect_option10" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                 STATUS
                                                </label>
                                        </div>
                                        <div class="form-group form-check col-md-12">
                                                <input class="form-check-input" type="checkbox" value="" name="slect_option11" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                 REPORTS
                                                </label>
                                        </div>
                                            
                                        <div class="form-group form-check col-md-12">
                                                    <input class="form-check-input" type="checkbox" value="" name="slect_option12" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        USERS
                                        </div>                                      
                                          
                                        <div class="form-group form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" value="" name="slect_option13" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                        SETTINGS
                                        </div>
                                </div><!----------end of row-->
                            </div><!----------------end of colmd6-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Allowed IP Address</label>
                                        <input type="text" name="allow_ipaddress" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Account Type</label>
                                        <select class="form-control" name="account_type">
                                            <option value=""> -- Select Account Type --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Manager">Manager</option>
                                            </select>
                                    </div>
                                </div><!----------end of row-->
                            </div><!----------------end of colmd6-->
                        </div>
                    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary text-center">Add Users</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    
        <!---------end of modal-->
    </div>
    <!-- Content Wrapper END -->
@endsection