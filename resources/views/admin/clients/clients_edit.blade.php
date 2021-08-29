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
        <h2 class="text-center mx-auto">EDIT CLIENT</h2>
        <div class="container-fluid" style="margin-top:2rem;">

            <div class="paddingnote">
                <form action="{{ url('admin/Clients_Update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $Clients_edit->id }}">
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $Clients_edit->first_name }}" placeholder="First name" >

                        </div>
                        <div class="form-group col-md-6">
                            <label for="new-project-name">Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $Clients_edit->last_name }}" placeholder="Last Name" >
                        </div>
                    </div><!------------end of row-->
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">Street Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $Clients_edit->address }}" placeholder="Street Address" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="new-project-name">Address Line2</label>
                            <input type="text" class="form-control" name="address2" value="{{ $Clients_edit->address2 }}" placeholder="address 2" >
                        </div>
                    </div><!------------end of row-->
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">City</label>
                            <input type="text" class="form-control" name="city" value="{{ $Clients_edit->city }}" placeholder="city" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="new-project-name">State</label>
                            <select class="form-control" name="state" value="{{ $Clients_edit->state }}">
                                <option value="Outside USA">Outside USA</option>                        
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
                    </div><!------------end of row-->
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">Zip Code</label>
                            <input type="number" class="form-control" name="zipcode" value="{{ $Clients_edit->zip }}" placeholder="800 000">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="new-project-name">Country</label>
                            <select name="country" name="country" value="{{ $Clients_edit->country }}" class="form-control">
                                <option value="Afghanistan">Afghanistan</option>
                                          <option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option>
                                          <option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Azores">Azores</option>
                                          <option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia Herzegowina">Bosnia Herzegowina</option>
                                          <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option>
                                          <option value="Brazil">Brazil</option><option value="British Indian O. Terr">British Indian O. Terr</option>
                                          <option value="British Virgin Isl">British Virgin Isl</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option>
                                          <option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option>
                                          <option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option>
                                          <option value="Cayman Islands">Cayman Islands</option><option value="Central African Rep">Central African Rep</option><option value="Chad">Chad</option>
                                          <option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option>
                                          <option value="Cocos (Keeling) Isl">Cocos (Keeling) Isl</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option>
                                          <option value="Congo">Congo</option><option value="Congo, The Dem Rep">Congo, The Dem Rep</option><option value="Cook Islands">Cook Islands</option>
                                          <option value="Corsica">Corsica</option><option value="Costa Rica">Costa Rica</option><option value="Cote d` Ivoire">Cote d` Ivoire</option>
                                          <option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option>
                                          <option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option>
                                          <option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option>
                                          <option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option>
                                          <option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option>
                                          <option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option>
                                          <option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France (Incl Monaco)">France (Incl Monaco)</option>
                                          <option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option>
                                          <option value="French Polynesia">French Polynesia</option><option value="French S. Territories">French S. Territories</option>
                                          <option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option>
                                          <option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option>
                                          <option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option>
                                          <option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option>
                                          <option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option>
                                          <option value="Haiti">Haiti</option><option value="Heard And Mc Donald Isl">Heard And Mc Donald Isl</option>
                                          <option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option>
                                          <option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option>
                                          <option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option>
                                          <option value="Ireland (Eire)">Ireland (Eire)</option><option value="Israel">Israel</option><option value="Italy">Italy</option>
                                          <option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option>
                                          <option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option>
                                          <option value="Korea, Democratic Rep">Korea, Democratic Rep</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option>
                                          <option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option>
                                          <option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option>
                                          <option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option>
                                          <option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Madeira Islands">Madeira Islands</option>
                                          <option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option>
                                          <option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option>
                                          <option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option>
                                          <option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option>
                                          <option value="Moldova, Republic Of">Moldova, Republic Of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option>
                                          <option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option>
                                          <option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option>
                                          <option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option>
                                          <option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option>
                                          <option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option>
                                          <option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Isl">Northern Mariana Isl</option><option value="Norway">Norway</option>
                                          <option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option>
                                          <option value="Palestinian Territory">Palestinian Territory</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option>
                                          <option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option>
                                          <option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option>
                                          <option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option>
                                          <option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option>
                                          <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                          <option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia-Montenegro">Serbia-Montenegro</option>
                                          <option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option>
                                          <option value="Slovak Republic">Slovak Republic</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option>
                                          <option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia">South Georgia</option>
                                          <option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option>
                                          <option value="St. Christopher, Nevis">St. Christopher, Nevis</option><option value="St. Helena">St. Helena</option><option value="St. Lucia">St. Lucia</option>
                                          <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option value="St. Vincent and Gren">St. Vincent and Gren</option>
                                          <option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard And Jan M Isl">Svalbard And Jan M Isl</option>
                                          <option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option>
                                          <option value="Syrian Arab Rep">Syrian Arab Rep</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option>
                                          <option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option>
                                          <option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                          <option value="Tristan da Cunha">Tristan da Cunha</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option>
                                          <option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Isl">Turks and Caicos Isl</option><option value="Tuvalu">Tuvalu</option>
                                          <option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option>
                                          <option value="United Kingdom">United Kingdom</option><option value="Great Britain">Great Britain</option>
                                          <option value="United States" selected="selected">United States</option><option value="U.S. Minor Outlying Isl">U.S. Minor Outlying Isl</option>
                                          <option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option>
                                          <option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option>
                                          <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option><option value="Wallis and Furuna Isl">Wallis and Furuna Isl</option>
                                          <option value="Western Sahara">Western Sahara</option><option value="Western Samoa">Western Samoa</option><option value="Yemen">Yemen</option>
                                          <option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                              </select>
                        </div>
                    </div><!-----------------end of row-->
                    
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">Telephone</label>
                            <input type="phone" class="form-control"  value="{{ $Clients_edit->telephone }}" name="telephone" placeholder="phone">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="new-project-name">Alternate Phone Number</label>
                            <input type="phone" class="form-control"  value="{{ $Clients_edit->telephone2 }}" name="phone" placeholder="Alt phone">
                        </div>
                    </div>
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">Mobile Phone</label>
                            <input type="number" class="form-control"  name="mobile" value="{{ $Clients_edit->cellphone }}" placeholder="Mobile Phone">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="new-project-name">E-mail</label>
                            <input type="email" class="form-control"  value="{{ $Clients_edit->email }}"  name="email" placeholder="Email">
                        </div>
                    </div>
                    <h2 class="text-center mx-auto">LOGIN DETAILS</h2>
                    <div class="form-group-row d-flex">
                        <div class="form-group col-md-6 pl-0">
                            <label for="new-project-name">Password</label>
                            <input type="password" name="password"  value="{{ $Clients_edit->password }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="new-project-name">Confirm Password</label>
                            <input type="password"  name="password2" value="{{ $Clients_edit->password }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Update Client</button>
                    </div>
                </form>


            </div>
        </div>
     
    </div>
    <!-- Content Wrapper END -->
@endsection