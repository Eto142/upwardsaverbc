<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.trader.digitalcryptocurrencytrade.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 19:23:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="eoH8gBoy6Ta98jODmhTHlIwvVtFwAxOSPlnvaVbT">
        <title>DigitalCryptoTrade | Creaet Account</title>
        
        
        <link rel="icon" href="auth/storage/app/public/photos/UvJWMw59672-cryptocurrency-mining-blockchain-bitcoin-pool-free-transparent-image-hq.png1655237630" type="image/png"/>
                   
            <link href="auth/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="auth/temp/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        
            <link rel="auth/stylesheet" href="temp/css/line.css">
            
            <!-- Main Css -->
            <link href="auth/temp/css/style.css" rel="stylesheet" type="text/css" />
            <link href="auth/temp/css/colors/default.css" rel="stylesheet">
        

    </head>
    <body class="h-100 bg-soft-primary">
       <section class="y auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <a href="index.html"><img src="storage/app/public/photos/UvJWMwDigital%20Crypto%20Trade.png1655237630" alt="" class="mb-3 img-fluid auth__logo"></a>
                    
                                                    
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Create an Account</h4>
                            <form method="POST" action="{{ url('/register-user') }}">
                                                   @csrf
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>UserName <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" id="input1" class="pl-5 form-control"  name="username" :value="old('username')" id="input1" placeholder="Enter Unique Username" required>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>FullName <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control"  name="name" :value="old('name')" id="f_name" placeholder="Enter FullName" required>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name="email" :value="old('email')" id="email" placeholder="name@example.com" required>
                                                                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="phone" class="pl-5 form-control" name="phone" :value="old('phone')" id="phone" placeholder="Enter Phone number" required>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" type="password" name="password" id="password" placeholder="Enter Password" required>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" type="password" name="password_confirmation" id="confirm-password" placeholder="Confirm Password" required>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label>Country <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                                <select class="pl-5 form-control" name="country" :value="old('country')" id="country" required>
                                                    <option selected disabled>Choose Country</option>
                                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>                                                </select>
                                            </div>
                                                                                    </div>
                                    </div>
                                    
                                                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Referral ID <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control"  type="text" name="referral" :value="old('referral')" placeholder="optional referral id">
                                            </div>
                                        </div>
                                    </div>
                                                                        
                                                                                                            
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Register</button>
                                    </div>
                                    <!--end col-->

                                    <div class="mt-4 text-center col-lg-12">
                                                                                <h6>Or Login With</h6>
                                        <div class="row">
                                            <!--end col-->
                                            <div class="mt-3 col-12">
                                                <a href="https://accounts.google.com/o/oauth2/auth?client_id=your+client+ID&amp;redirect_uri=http%3A%2F%2Fyoursiteurl%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=iRaLAJlXEVoxHZxNufScbEdS2EfRpiyiJhiTkTt6" class="btn btn-block btn-light"><i
                                                        class="mdi mdi-google text-danger"></i> Google</a>
                                            </div>
                                            <!--end col-->
                                        </div>
                                                                            </div>
                                    <!--end col-->
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Already have an account
                                                </small> <a href="login.html"
                                                class="text-dark font-weight-bold">Login</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2022 &nbsp; DigitalCryptoTrade &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




                 <script src="auth/temp/js/jquery-3.5.1.min.js"></script>
            <script src="auth/temp/js/bootstrap.bundle.min.js"></script>
            
            <!-- SLIDER -->
            <script src="auth/temp/js/owl.carousel.min.js"></script>
            <script src="auth/temp/js/owl.init.js"></script>
            <!-- Icons -->
            <script src="auth/temp/js/feather.min.js"></script>
            <script src="auth/temp/js/bundle.html"></script>
            
            <script src="auth/temp/js/app.js"></script>
            <script src="auth/temp/js/widget.js"></script>
       
<script>
    $('#input1').on('keypress', function(e) {
        return e.which !== 32;
    });
</script>
    </body>

<!-- Mirrored from www.trader.digitalcryptocurrencytrade.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 19:23:36 GMT -->
</html>
