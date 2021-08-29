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
                    <h2 class="text-center mx-auto">DRIVER'S TRIP SHEET</h2>
                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row mb-30 text-right">



                            <div class="col-lg-6 col-md-7"></div>

                            <div class="col-lg-3 text-right">
                                <!----<button class="btn btn-primary" data-toggle="modal" data-target="#create-new-project">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add a New Log</span>
                                </button>--->
                            </div>
                            <div class="col-lg-3 text-right">
                               
                                <!------------------------------Start of Modal-->
                                <!-- Large modal -->


                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>

                                                    <div class="alert alert-success mt-4">
                                                        <h4 class="alert-heading text-center">Trip Sheet</h4>
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1" class="d-table">Driver's Name</label>
                                                                <div class="d-flex">
                                                                    <select class="form-control" name="drivers_id">
                                                                        <option selected="selected" value=""> None</option>
                                                                        <option value="">None</option>
                                                                        <option value="114">Abdel Aziz Tarhani</option>114
                                                                        <option value="100">ABDERAHMAN MAKBOUL</option>100
                                                                        <option value="128">Alberto Irausquin</option>128
                                                                        <option value="75">Alfredo Cipriano Barros</option>75
                                                                        <option value="130">Andy Negede</option>130
                                                                        <option value="116">Arsenio Perez-Corujo</option>116
                                                                        <option value="131">Claudio DeSilva</option>131
                                                                        <option value="113">Eyob Hailab</option>113
                                                                        <option value="132">First Choice </option>132
                                                                        <option value="53">Glenn Rezende </option>53
                                                                        <option value="127">Kamel Chetouane</option>127
                                                                        <option value="137">Mebratu Dawit Abraha</option>137
                                                                        <option value="129">Peter Piantinis</option>129
                                                                        <option value="122">Rash Test IWS</option>122
                                                                        <option value="118">Sahid  Alpizar</option>118
                                                                        <option value="134">Simret  Tegegne</option>134
                                                                        <option value="136">Tesfu Bokre</option>136
                                                                        <option value="133">Willie Miller III</option>133
                                                                        <option value="135">Yohannes   Yohannes</option>135
                                                                    </select>
                                                                </div><!-------------------------------dflex--------------->

                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="d-table">From</label>
                                                                    <div class="d-flex">
                                                                        <input class="form-control col-md-6" type="date" />
                                                                        <small class="alertText">select date</small>
                                                                    </div><!-------------------------------dflex--------------->
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1" class="d-table">To</label>
                                                                    <div class="d-flex">
                                                                        <input class="form-control col-md-6" type="date" />
                                                                        <small class="alertText">select date</small>
                                                                    </div><!-------------------------------dflex--------------->
                                                                </div>
                                                                <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Get Trip Sheet</a>

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

                            <div class="card text-center shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body">
                                    <!------------start of trip sheet-->
                                    <form>

                                        <div class="alert alert-success mt-4 form-group row">
                                          
                                            
                                                <div class="form-group col-md-4">
                                                    <label for="exampleFormControlInput1" class="d-table">Driver's Name</label>
                                                    <div class="d-flex">
                                                        <select class="form-control" name="drivers_id">
                                                            <option selected="selected" value=""> None</option>
                                                            <option value="">None</option>
                                                            <option value="114">Abdel Aziz Tarhani</option>114
                                                            <option value="100">ABDERAHMAN MAKBOUL</option>100
                                                            <option value="128">Alberto Irausquin</option>128
                                                            <option value="75">Alfredo Cipriano Barros</option>75
                                                            <option value="130">Andy Negede</option>130
                                                            <option value="116">Arsenio Perez-Corujo</option>116
                                                            <option value="131">Claudio DeSilva</option>131
                                                            <option value="113">Eyob Hailab</option>113
                                                            <option value="132">First Choice </option>132
                                                            <option value="53">Glenn Rezende </option>53
                                                            <option value="127">Kamel Chetouane</option>127
                                                            <option value="137">Mebratu Dawit Abraha</option>137
                                                            <option value="129">Peter Piantinis</option>129
                                                            <option value="122">Rash Test IWS</option>122
                                                            <option value="118">Sahid  Alpizar</option>118
                                                            <option value="134">Simret  Tegegne</option>134
                                                            <option value="136">Tesfu Bokre</option>136
                                                            <option value="133">Willie Miller III</option>133
                                                            <option value="135">Yohannes   Yohannes</option>135
                                                        </select>
                                                    </div><!-------------------------------dflex--------------->
                                                </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="exampleFormControlInput1" class="d-table">From</label>
                                                        <div class=" ">
                                                            <input class="form-control" type="date">
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="exampleFormControlInput1" class="d-table">To</label>
                                                        <div class="">
                                                            <input class="form-control" type="date">
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group mt-4 mx-auto text-center">
                                                    <button type="submit" class="btn btn-primary">Get Trip Sheet</a>
                                                    </div>
                                                </div>
                                            
                                        </div></form>
                                    <!---------------end of trip sheet-->
                                   <h2 class="mx-auto">DRIVER'S TRIP SHEET</h2>
                                    <form class="mt-3">
                                        <div class="form-group row">
                                        <div class="col-md-6 text-left">
                                            <div class="form-group mb-2 d-flex">
                                                <label class="mt-2 textB">Date</label>
                                               <input class="form-control border-0" value="12/3/4">
                                              </div>
                                              <div class="form-group mb-2 text-left d-flex">
                                                <label class="mt-2 textB">Driver</label>
                                                <input class="form-control border-0" value="SIMRET TEGEGNE">
                                              </div>
                                        </div>
                                        <div class="col-md-6 form-inline float-right">
                                            <div class="form-group float-right w-100">
                                                <label class="d-contents textB">Car Number</label>
                                                <input type="number" class="form-control w-100">
                                              </div>
                                        </div>
                                    </div>
                                        <h3 class="text-center mx-auto">Please select a driver to view details.</h3>
                                        <div class="form-group row">
                                            <div class="form-group col-md-6">
                                            <a class="btn btn-primary" href="invoice.html" target="_blank">Print Trip Sheet</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <a href="trip_sheet_email.php?cAction=get_trip_sheet&amp;drivers_id=&amp;from=&amp;to=" target="_blank" style="font-size:20px;">Email Trip Sheet</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal fade" id="create-new-project">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add a New Log</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="alert alert-success mt-4">

                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Expense Type</label>

                                                        <select class="form-control m-1" name="type">
                                                            <option value="" selected="selected">Please Select</option>
                                                            <option value="1">Utilities</option>
                                                            <option value="2">Rent</option>
                                                            <option value="3">Auto Repair</option>
                                                            <option value="4">Office Equipment Supplies</option>
                                                            <option value="5">Licenses &amp; Taxes</option>
                                                            <option value="6">Gas</option>
                                                            <option value="7">Salary</option>
                                                            <option value="8">Miscellaneous</option>
                                                        </select>

                                                    </div><!-------------------------------dflex--------------->

                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Date of Expense</label>
                                                        <div class="d-flex">
                                                            <input class="form-control col-md-6" type="date" />
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Amount of Expense</label>
                                                        <input class="form-control col-md-6" type="text" />

                                                    </div><!-------------------------------dflex--------------->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Driver Name</label>
                                                        <select class="form-control m-1" name="drivers_id">
                                                            <option value="">None</option>
                                                            <option value="114">Abdel Aziz Tarhani</option>114
                                                            <option value="100">ABDERAHMAN MAKBOUL</option>100
                                                            <option value="128">Alberto Irausquin</option>128
                                                            <option value="75">Alfredo Cipriano Barros</option>75
                                                            <option value="130">Andy Negede</option>130
                                                            <option value="116">Arsenio Perez-Corujo</option>116
                                                            <option value="131">Claudio DeSilva</option>131
                                                            <option value="113">Eyob Hailab</option>113
                                                            <option value="132">First Choice </option>132
                                                            <option value="53">Glenn Rezende </option>53
                                                            <option value="127">Kamel Chetouane</option>127
                                                            <option value="137">Mebratu Dawit Abraha</option>137
                                                            <option value="129">Peter Piantinis</option>129
                                                            <option value="122">Rash Test IWS</option>122
                                                            <option value="118">Sahid  Alpizar</option>118
                                                            <option value="134">Simret  Tegegne</option>134
                                                            <option value="136">Tesfu Bokre</option>136
                                                            <option value="133">Willie Miller III</option>133
                                                            <option value="135">Yohannes   Yohannes</option>135
                                                        </select>

                                                    </div><!-------------------------------dflex--------------->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Comment</label>
                                                        <textarea rows="4" cols="50">
                                                </textarea>

                                                    </div><!-------------------------------dflex--------------->
                                                    <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Add New Log</a>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------end of modal-->
                </div>
                <!-- Content Wrapper END -->
                <!-- Footer START -->
  @endsection