
            <div class="section">
                <div class="container">

                    <h1 class="display-5 fw-bold mb-5">
                        How can we help?
                    </h1>

                    <div class="row g-xl-5">

                        <div class="col-12 col-lg-8 mb-7">

                            <!-- map -->
                            <div class="bg-white shadow-primary-xs rounded p-2 mb-5">

                                <!--
                                    Map
                                -->
                                <div class="map-leaflet w-100 rounded" style="height:450px"  
                                    data-map-tile="voyager" 
                                    data-map-zoom="13" 
                                    data-map-json='[
                                        { 
                                            "map_lat": 6.551766615965339,
                                            "map_long": 3.3929284654924756,
                                            "map_popup": "No.1 Rasaq Onabule Crescent Road,Ifako Bus Stop, Gbagada Lagos<br> <a href=`tel:08023400089`>+234 80234 00089</a>"
                                        }
                                    ]'><!-- map container--></div>

                            </div>

                            <h2 class="fw-bold mb-4">
                                Tell us about your dream
                            </h2>

                            <!-- form -->
                            <div class="bg-light p-4 p-lg-5 rounded">


                                <!-- 
                                    CONTACT FORM : AJAX [TESTED|WORKING AS IT IS]

                                        Plugin required: SOW Ajax Forms

                                        In order to work as ajax form, SOW Ajax Forms should be available/enabled
                                        Else, SOW Form Validation plugin is used.
                                        If none of them are available, normal submit is used and you can remove:
                                            .js-ajax
                                            .bs-validate
                                            novalidate
                                            any data-ajax-*
                                            any data-error-*

                                        ** Remove data-error-toast-* for no error toast notifications




                                    Ajax will control success/fail alerts according to server response:
                                        
                                        1. unexpected error:        if server response is this string: {:err:unexpected:}
                                        2. mising mandatory:        if server response is this string: {:err:required:}
                                        3. success:                 if server response is this string: {:success:}
                                        
                                        data-ajax-control-alerts="true"
                                        data-ajax-control-alert-succes="#contactSuccess" 
                                        data-ajax-control-alert-unexpected="#contactErrorUnexpected" 
                                        data-ajax-control-alert-mandaroty="#contactErrorMandatory" 

                                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                        WORKING CONTACT! Edit your php/config.inc.php
                                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                -->
                                <form   novalidate 
                                        action="php/contact_form.php" 
                                        method="POST" 

                                        data-ajax-container="#ajax_dd_contact_response_container" 
                                        data-ajax-update-url="false" 
                                        data-ajax-show-loading-icon="true" 
                                        data-ajax-callback-function="" 
                                        data-error-scroll-up="false" 
                                        
                                        data-ajax-control-alerts="true"
                                        data-ajax-control-alert-succes="#contactSuccess" 
                                        data-ajax-control-alert-unexpected="#contactErrorUnexpected" 
                                        data-ajax-control-alert-mandaroty="#contactErrorMandatory" 

                                        data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Please, complete all required fields!" 
                                        data-error-toast-delay="2000" 
                                        data-error-toast-position="bottom-center"

                                        class="bs-validate js-ajax">


                                    <!-- 1. 
                                        optional, hidden action for your backend

                                        PHP Basic Example
                                        if($_POST['action'] == 'contact_form_submit') {
                                            ... send message
                                        }
                                    -->
                                    <input type="hidden" name="action" value="contact_form_submit" tabindex="-1"> 
                                    <!-- -->


                                    <!-- 2. 
                                        A very small optional trick (using .hide class instead of type="hidden") for some low spam robots. 
                                        If this is not empty, the process should stop. A normal user/visitor should not be able to see this field.

                                        PHP Basic Example
                                        if($_POST['norobot'] != '') {
                                            exit;
                                        }
                                    -->
                                    <input type="text" name="norobot" value="" class="hide" tabindex="-1"> 
                                    <!-- -->

                                    <div class="form-floating mb-3">
                                        <input required placeholder="Name" id="contact_name" name="contact_name" type="text" class="form-control">
                                        <label for="contact_name">Name</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input required placeholder="Email" id="contact_email" name="contact_email" type="email" class="form-control">
                                        <label for="contact_email">Email</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input required placeholder="Phone" id="contact_phone" name="contact_phone" type="text" class="form-control">
                                        <label for="contact_phone">Phone</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea required placeholder="Message" id="contact_message" name="contact_message" class="form-control" rows="3" style="min-height:120px"></textarea>
                                        <label for="contact_message">Message</label>
                                    </div>

                                    <!-- GDPR CONSENT -->
                          <div class="mb-3 border p-3 rounded">

                            <p class="small mb-3 pb-3 border-bottom">
                              I consent that my personal data is stored according to <span class="fw-medium">2016/679/UE (UE GDPR)</span>. 
                            </p>

                        <div class="form-check">
                          <input required class="form-check-input" id="contact_gdpr" name="contact_gdpr" type="checkbox" value="1">
                          <label class="form-check-label" for="contact_gdpr">
                            I do accept Smarty <a class="text-decoration-none" href="shop-page-terms.html" target="_blank">terms & conditions</a>.
                          </label>
                        </div>

                          </div>
                                    <!-- /GDPR CONSENT -->




                                    <!-- 
                                        Server detailed error
                                        !ONLY! If debug is enabled!
                                        Else, shown ony "Server Error!"
                                    -->
                                    <div id="ajax_dd_contact_response_container"></div>

                                    <!-- {:err:unexpected:} internal server error -->
                                    <div id="contactErrorUnexpected" class="hide alert alert-danger p-3">
                                        Unexpected Error!
                                    </div>

                                    <!-- {:err:required:} mandatory fields -->
                                    <div id="contactErrorMandatory" class="hide alert alert-danger p-3">
                                        Please, review your data and try again!
                                    </div>

                                    <!-- {:success:} message sent -->
                                    <div id="contactSuccess" class="hide alert alert-success p-3">
                                        Thank you for your message!
                                    </div>




                                    <button type="submit" class="btn btn-primary w-100">
                                        Send Message
                                    </button>

                                </form>
                                <!-- /CONTACT FORM : AJAX -->


                            </div>

                        </div>


                        <div class="col-12 col-lg-4 mb-3">

                            <div class="sticky-top z-index-0" style="top:120px">

                                <div class="d-flex">

                                    <div class="float-none me-3">
                                        <i class="fi fi-shape-abstract-dots text-gray-500 float-start fs-2"></i> 
                                    </div>

                                    <div>
                                        <h2 class="fs-5">Sogofex Trade Service Consult.</h2>
                                        <ul class="list-unstyled m-0 fs-6"> 
                                            <li class="list-item text-muted">Phone:  +234 80234 00089, +234 816 960 6075</li> 
                                            <li class="list-item text-muted">No.1 Rasaq Onabule Crescent Road</li> 
                                            <li class="list-item text-muted">Ifako Bus Stop, Gbagada Lagos</li> 
                                            <li class="mt-3 list-item text-muted">Nigeria</li>
                                        </ul>
                                    </div>

                                </div>


                                <div class="d-flex mt-4">

                                    <div class="float-none me-3">
                                        <i class="fi fi-time text-gray-500 float-start fs-2"></i> 
                                    </div>

                                    <div>
                                        <h3 class="h5"> Working Hours</h3>
                                        <ul class="list-unstyled m-0 fs-6">
                                            <li class="list-item text-muted">Monday &ndash; Friday: 09:00 – 18:00</li>
                                            <li class="list-item text-muted">Sunday: 09:00 – 12:00</li>
                                        </ul>
                                    </div>

                                </div>


                                <div class="d-flex mt-4">

                                    <div class="float-none me-3">
                                        <i class="fi fi-phone text-gray-500 float-start fs-2"></i> 
                                    </div>

                                    <div>
                                        <h3 class="h5"> Phone Number</h3>
                                        <ul class="list-unstyled m-0">
                                            <li class="list-item mb-2 text-gray-500">
                                                <a class="link-muted" href="tel:08023400089">+234 80234 00089</a>
                                            </li>
                                            <li class="list-item mb-2 text-gray-500">
                                                <a class="link-muted" href="tel:08169606075">+234 816 960 6075</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>
            </div>


            <!-- INFO BOX -->
            <div class="mb-7 mx-3">
                <div class="container py-3 border border-3 border-dotted">

                    <div class="row g-4">

                        <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4" data-aos="fade-in" data-aos-delay="0" data-aos-offset="0">

                            <img width="60" height="60" class="lazy" data-src="demo.files/svg/various/trendy.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                            <div class="ps-3">
                                <h3 class="fs-5 mb-1">Trendy & Modern</h3>
                                <p class="m-0">Love it! Use it! Reuse it!</p>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4" data-aos="fade-in" data-aos-delay="150" data-aos-offset="0">

                            <img width="60" height="60" class="lazy" data-src="demo.files/svg/various/hot_deal.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                            <div class="ps-3">
                                <h3 class="fs-5 mb-1">Free Updates</h3>
                                <p class="m-0">Lifetime <b>free</b> updates!</p>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4" data-aos="fade-in" data-aos-delay="250" data-aos-offset="0">

                            <img width="60" height="60" class="lazy" data-src="demo.files/svg/various/new.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                            <div class="ps-3">
                                <h3 class="fs-5 mb-1">Frontend & Admin</h3>
                                <p class="m-0">Sharing the same core!</p>
                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 d-flex text-center-xs py-2 py-sm-3 py-lg-4" data-aos="fade-in" data-aos-delay="350" data-aos-offset="0">

                            <!-- link example -->
                            <a href="#" class="text-dark text-decoration-none d-flex">

                                <img width="60" height="60" class="lazy" data-src="demo.files/svg/various/ok_like.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                <div class="ps-3">
                                    <h3 class="fs-5 mb-1">You're Covered</h3>
                                    <p class="m-0">Frontend + Admin</p>
                                </div>

                            </a>

                        </div>

                    </div>

                </div>
            </div>
            <!-- /INFO BOX -->



