@extends("Shop/shoplayout")
@section("title")
Solar Consult
@endsection
@section("contant")
<main id="smooth-wrapper">

   
                
    

        <div id="smooth-content">



        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">Contact Us</h6>
                            <h1 class="fz-55">Let's make <br> your brand brilliant!</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>We help our clients succeed by creating brand identities, digital experiences, and print materials that communicate clearly, achieve marketing goals, and look fantastic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                            <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                            <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                                touch, we’d love to hear from you!</p>
                            
                           
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form id="contact-form" action="/insert-contact" method="post">
                              @csrf
                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="nameinp" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="emailinp" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="number" name="phoneinp" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="messageinp" placeholder="Message" rows="4"
                                                required="required"></textarea>
                                        </div>
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

    

<footer>
               <div class="footer-1 js-parallax-section cover-bg bg-ol-dark-7" style="background-image: url('../assets/img/img-370.jpg');">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-md-9">
                           <h4 class="js-split-words-up f1-mail">
                              <a href="mailto:ubaidullah2206f@gmail.com" class="link-1 link-hover-1" aria-label="Contact Us" data-cursor-text="MAIL" data-cursor="-lg">SOLAR X. Ltd</a>
                           </h4>
                        </div>
                        <div class="col-md-11">
                           <div class="row">
                             
                              <div class="col-md-4">
                                 <div class="f1-info">
                                    <h5 class="f1-address">
                                       <a href="#" class="link-1 link-hover-1" data-cursor="-opaque">Karachi</a>
                                    </h5>
                                    <h5 class="f1-t-address">
                                       Aptech Garden Center
                                    </h5>
                                    <p>
                                    APWA Complex, 1st Floor, Agha Khan 3 Rd, <br>
                                    Garden East Saddar Town, Karachi, Sindh 74400<br>
                                       phone: (021) 32237040
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 align-jc">
                                 <div class="align-self-end d-inline-block me-5" data-cursor="-exclusion -sm">
                                    <h6 class="f1-link">
                                       <a href="/" class="link-1 link-hover-1">Home</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/consult" class="link-1 link-hover-1">Consultion</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/shop" class="link-1 link-hover-1">Shop</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/about" class="link-1 link-hover-1">About</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/contact" class="link-1 link-hover-1">Contact</a>
                                    </h6>
                                    @guest
                                    @if (Route::has('login'))
                                    <h6 class="f1-link">
                                       <a href="/login" class="link-1 link-hover-1">Login</a>
                                    </h6>
                                    @endif
                                    @endguest
                                    
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-11">
                           <div class="ms-4">
                              <h6 class="js-fade f1-social">
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-opaque">SOLAR X</a>
                              </h6>
                              
                           </div>
                        </div>
                        <div class="col-md-11">
                           <div class="align-jb ms-4 me-4">
                              <h6 class="f1-text-end">
                                 Service &amp;
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-exclusion -sm">Wga Support</a>
                              </h6>
                              <h6 class="f1-text-end">
                                 &copy; 2023
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-exclusion -sm">SOLAR X</a>
                              </h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>


            </div>
          </main>






 

    <!-- custom scripts -->
    <script src="assets2/js/scripts.js"></script>

@endsection

