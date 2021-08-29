<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->  

<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <h2 class="text-center mx-auto">TESTIMONEY MANAGER</h2>
        <div class="page-header no-gutters" style="margin-top:3rem;">
            <div class="row mb-30">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 text-center">
                    <a class="btn btn-primary mb-3" href="{{ url('admin/content_testimonial_add') }}">
                        <i class="anticon anticon-plus"></i>
                        <span class="m-l-5">Add New Testimoney</span>
                    </a>
               
                    <button type="button" class="btn btn-primary mb-3 ml-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-book m-r-5"></i>
                        <span>Filter By Date</span>
                    </button>
                    <!------------------------------Start of Modal-->
                    <!-- Large modal -->


                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">FILTER BY DATE</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="alert alert-success mt-4">


                                            <div class="form-group mt-5">
                                                <label for="exampleFormControlInput1" class="d-table">From</label>
                                                <div class="d-flex">
                                                    <input class="form-control col-md-6" type="date">
                                                    <small class="alertText">select date</small>
                                                </div><!-------------------------------dflex--------------->
                                            </div>
                                            <div class="form-group mt-5">
                                                <label for="exampleFormControlInput1" class="d-table">To</label>
                                                <div class="d-flex">
                                                    <input class="form-control col-md-6" type="date">
                                                    <small class="alertText">select date</small>
                                                </div><!-------------------------------dflex--------------->
                                            </div>

                                            <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Filter By Date</a>

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
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Testimoney</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="new-project-name">Name<span class="alertText">*</span></label>
                                                <input type="text" class="form-control" name="firstname" id="name" Value="Sarah" required="">

                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Email Address</label>
                                                <input type="email" class="form-control" name="lastname" value="test@gmail.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">City</label>
                                                <input type="number" class="form-control" id="new-project-name" value="Orlando">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">State</label>
                                                <input type="email" class="form-control" name="email" id="email" value="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Overall SUN STATE TRANSPORTATION experience</label>
                                                <select class="form-control" name="overall_rating" size="1">
                                                    <option selected="selected" value="5">5 - Excellent</option>
                                                    <option value="4">4 - Above Average</option>
                                                    <option value="3 ">3 - Average</option>
                                                    <option value="2">2 - Below Average</option>
                                                    <option value="1">1 - Poor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Cleanliness of your vehicle</label>
                                                <select class="form-control" name="clean_rating" size="1">
                                                    <option selected="selected" value="5">5 - Excellent</option>
                                                    <option value="4">4 - Above Average</option>
                                                    <option value="3 ">3 - Average</option>
                                                    <option value="2">2 - Below Average</option>
                                                    <option value="1">1 - Poor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Vehicle Type</label>
                                                <select class="form-control" name="vehicle" required="no" size="1">
                                                    <option value="Town Car">Town Car</option>
                                                    <option value="Luxury Van">Luxury Van</option>
                                                    <option selected="selected" value="Limo">Limousine</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Rate the Service</label>
                                                <select class="form-control" name="service_rating" size="1">
                                                    <option selected="selected" value="5">5 - Excellent</option>
                                                    <option value="4">4 - Above Average</option>
                                                    <option value="3 ">3 - Average</option>
                                                    <option value="2">2 - Below Average</option>
                                                    <option value="1">1 - Poor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Rate the Driver</label>
                                                <select class="form-control" name="driver_rating" size="1">
                                                    <option selected="selected" value="5">5 - Excellent</option>
                                                    <option value="4">4 - Above Average</option>
                                                    <option value="3 ">3 - Average</option>
                                                    <option value="2">2 - Below Average</option>
                                                    <option value="1">1 - Poor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Drivers Name (If you remember)</label>
                                                <input type="text" class="form-control" id="new-project-name" value="Jack">
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Value of the service for  the money you spent?</label>
                                                <select name="money_rating" size="1">
                                                    <option selected="selected" value="5">5 - Excellent</option>
                                                    <option value="4">4 - Above Average</option>
                                                    <option value="3">3 - Average</option>
                                                    <option value="2">2 - Below Average</option>
                                                    <option value="1">1 - Poor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Would you use us again?</label>
                                                <select name="use_us_again" size="1">
                                                    <option selected="selected" value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="new-project-name">Testimoney:</label>
                                                <br />
                                                <textarea cols="31" rows="5" name="testimonial">[b][url=http://www.luxurystorecheap.org]handbag[/url][/b]
[b][url=http://www.luxurystorecheap.org]Discount Luxury Store[/url][/b]
[b][url=http://www.luxurystorecheap.org]Imitation Bags and Purses- Louis Vuitton[/url][/b]
[b]&lt;a href="http://www.luxurystorecheap.org"&gt;replica Hermes&lt;/a&gt;[/b]
[b][url=http://www.luxurystorecheap.org]replica Prada[/url][/b]




&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;handbag&lt;/a&gt;&lt;/strong&gt;
&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Discount Luxury Store&lt;/a&gt;&lt;/strong&gt;
&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Imitation Bags and Purses- Louis Vuitton&lt;/a&gt;&lt;/strong&gt;
&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;replica Hermes&lt;/a&gt;&lt;/strong&gt;
&lt;br&gt;&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;replica Prada&lt;/a&gt;&lt;/strong&gt;
&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Discount Luxury Store&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;handbag&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Discount Luxury Store&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Imitation Bags and Purses- Louis Vuitton&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;replica Hermes&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Discount Luxury Store&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;handbag&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Discount Luxury Store&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;Imitation Bags and Purses- Louis Vuitton&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;replica Hermes&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;replica Gucci&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org"&gt;chanel&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org/beltsgt-c-46.html"&gt;belt&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org/beltsgt-c-46.html"&gt;leather belts&lt;/a&gt;&lt;/strong&gt; &lt;br&gt; &lt;strong&gt;&lt;a href="http://www.luxurystorecheap.org/beltsgt-c-46.html"&gt;burberry&lt;/a&gt;&lt;/strong&gt; &lt;br&gt;
</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="new-project-name">Status:</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option selected="selected" value="0">Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="new-project-name">Date:<span class="alertText">*</span></label>
                                                <input type="date" class="form-control">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary text-center">Update Testimoney</button>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <form action="{{ url('admin/content_testimonial_all_delete') }}" method="POST">
                            @csrf
                        <table class="table mx-auto">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>City / State</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($content_testimonial as $item)
                                <tr>
                                    <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                    <td>
                                        <div class="media align-items-center">                                            
                                            {{ $item->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <span>
                                            {{ $item->city }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="align-items-center">
                                            {{ $item->date_submitted }}
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-animated scale-left d-flex">
                                            <a class="text-gray font-size-18" href="{{ url('admin/content_testimonial_edit',$item->id) }}">
                                                <button class="dropdown-item" type="button">
                                                    <i class="fas fa-edit"></i>

                                                </button>
                                            </a>
                                            <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{ url('admin/content_testimonial_delete',$item->id) }}">
                                                <button class="dropdown-item" type="button">
                                                    <i class="far fa-trash-alt"></i>

                                                </button>
                                            </a>

                                        </div>
                                    </td>
                                </tr> 
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group text-left">
                        <button class="btn btn-primary">Delete Selected</button>
                    </div>
                </form>
                </div>
            </div>
            <nav class="pagination text-right float-right">
                <ul class="pagination">
                  <li class="page-item pl-2">
                    <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item">
                    <span class="page-link">
                      2
                      <span class="sr-only">(current)</span>
                    </span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
          
            
            <!---------------end of pagination-->
        </div>
        <div class="modal fade" id="create-new-project" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a new Testimoney</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            
                            <div class="form-group d-flex">
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Name<span class="alertText">*</span></label>
                                <input type="text" class="form-control" name="firstname" id="name" placeholder="name" required="">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Email Address</label>
                                <input type="email" class="form-control" name="lastname" placeholder="email">
                            </div>
                            </div>
                            <div class="form-group d-flex">
                            <div class="form-group col-md-6">
                                <label for="new-project-name">City</label>
                                <input type="number" class="form-control" id="new-project-name" placeholder="city">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new-project-name">State</label>
                                <input type="email" class="form-control" name="email" id="email" value="email" required="">
                            </div>
                            </div>
                            <div class="form-group d-flex">
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Overall SUN STATE TRANSPORTATION experience</label>
                                <select class="form-control" name="overall_rating" size="1">
                                    <option selected="selected" value="5">5 - Excellent</option>
                                    <option value="4">4 - Above Average</option>
                                    <option value="3 ">3 - Average</option>
                                    <option value="2">2 - Below Average</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Cleanliness of your vehicle</label>
                                <select class="form-control" name="clean_rating" size="1">
                                    <option selected="selected" value="5">5 - Excellent</option>
                                    <option value="4">4 - Above Average</option>
                                    <option value="3 ">3 - Average</option>
                                    <option value="2">2 - Below Average</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group d-flex">
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Vehicle Type</label>
                                <select class="form-control" name="vehicle" required="no" size="1">
                                    <option value="Town Car">Town Car</option>
                                    <option value="Luxury Van">Luxury Van</option>
                                    <option selected="selected" value="Limo">Limousine</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
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
                            <div class="form-group d-flex">
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Rate the Driver</label>
                                <select class="form-control" name="driver_rating" size="1">
                                    <option selected="selected" value="5">5 - Excellent</option>
                                    <option value="4">4 - Above Average</option>
                                    <option value="3 ">3 - Average</option>
                                    <option value="2">2 - Below Average</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new-project-name">Drivers Name (If you remember)</label>
                                <input type="text" class="form-control" id="new-project-name" value="Jack">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="new-project-name">Value of the service for  the money you spent?</label>
                                <select name="money_rating" size="1">
                                    <option selected="selected" value="5">5 - Excellent</option>
                                    <option value="4">4 - Above Average</option>
                                    <option value="3">3 - Average</option>
                                    <option value="2">2 - Below Average</option>
                                    <option value="1">1 - Poor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="new-project-name">Would you use us again?</label>
                                <select name="use_us_again" size="1">
                                    <option selected="selected" value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="new-project-name">Testimoney:</label>
                                <br />
                                <textarea class="form-control" cols="31" rows="5" name="testimonial"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="new-project-name">Status:</label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option selected="selected" value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="new-project-name">Date:<span class="alertText">*</span></label>
                                <input type="date" class="form-control">
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-center">Add a New Testimoney</button>
                    </div>


                </div>
            </div>
        </div>
        <!---------end of modal-->
  </div>
    <!-- Content Wrapper END -->
    <!-- Footer START -->
         
<!-- Content Wrapper END -->

@endsection