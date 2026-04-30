@extends("Shop/shoplayout")
@section("title")
Consult
@endsection
@section("contant")
<main id="smooth-wrapper">

        <div id="smooth-content">


        <main class="main-bg">

<!-- ==================== Start Slider ==================== -->

<div class="work-header section-padding pb-0">
    <div class="container mt-80">
        <div class="row">
            <div class="col-12">
                <div class="caption">
                    <h1>Consult <span class="sub-title text-warning">Beta</span></h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start cart ==================== -->

<section class="shop-checkout section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="order-form md-mb50">
                    <h4 class="mb-5">Consumtion Details</h4>
                    <p class="mb-40">Enter your home appliances which would used on solar panels.</p>
                    <form action="/AnalizeData" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fan`s *</label>
                                    <input type="number" name="fan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Light`s *</label>
                                    <input type="number" name="light" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Refigerater`s *</label>
                                    <input type="number" name="refg" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Tv`s *</label>
                                    <input type="number" name="tv" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">AC / Inverter *</label>
                                    <input type="number" name="ac" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Washing Machine`s *</label>
                                    <input type="number" name="washm" required>
                                </div>
                            </div>
                            
                            <h4 class="mb-5">Backup Details</h4>
                            <p class="mb-40">Enter how many hours backup do you want so we can suggest your Battries requirement.</p>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Backup in Hours *</label>
                                    <input type="number" name="backup" required>
                                </div>
                            </div>

                            <h4 class="mb-5">Area Details</h4>
                            <p class="mb-40">Enter your area Length / Width / Volume.</p>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Length in Feet *</label>
                                    <input type="number" name="lengthinp" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Width in Feet</label>
                                    <input type="number" name="widthinp">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Volume in Feet</label>
                                    <input type="number" name="heightinp">
                                </div>
                            </div>

                            <div class="mt-30">
                                <button type="submit" class="butn butn-md butn-bg main-colorbg4 text-dark">
                                    <span class="text-u fw-600">Generate</span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>


                            
</section>

<!-- ==================== End cart ==================== -->


</main>


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



