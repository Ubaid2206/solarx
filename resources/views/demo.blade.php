@extends("Shop/shoplayout")
@section("title")
Solar Consult
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
                    <h3 style="color: #917655;">"<span style="color: #FFF; text-transform: uppercase;"><b><i>{{ Auth::user()->name }}</span></i></b>"<span style="color: #FFF; text-transform: uppercase; font-size:25px; "> your solar consumption </span></h3>
            <p>In residential areas, solar panels are installed on rooftops to convert sunlight into electricity, allowing homeowners to generate their power and reduce their dependence on grid electricity. This not only helps reduce electricity bills but also contributes to a greener environment by lowering carbon emissions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start cart ==================== -->

<section class="shop-cart section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <form action="/AnalizeData" method="post">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table >
                            <thead>
                                <tr>
                                    <th>Your Required Panels</th>
                                    <th>Your Required Batteries</th>
                                    <th>Your Required Area</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-column="Your Required Panels">
                                        <div class="d-flex align-items-center">
                                            <h5 class="main-color4 fz-18">{{ $panelsRequired }}</h5>
                                            <div class="ml-30">
                                                <h6>Panels of 550 watts</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-column="Your Required Batteries">
                                        <div class="d-flex align-items-center">
                                            <h5 class="main-color4 fz-18">{{ $batteriesRequired }}</h5>
                                            <div class="ml-30">
                                                <h6>Batteries of 280 ampere</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-column="Your Required Area">
                                        <div class="d-flex align-items-center">
                                            <h5 class="main-color4 fz-18">{{ $givenarea }}</h5>
                                            <div class="ml-30">
                                                <h6>square yards required</h6>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4 mt-lg-5">Energy Independence: Solar panels enable individuals and businesses to generate their electricity, reducing their dependence on utility companies and the grid. This energy independence provides a degree of security against power outages and rising energy prices.</p>

                    <div class="row mt-4 mt-lg-5">
                        <div class="col-lg-3">
                        <?php
                        $data = [
                          'panel'       => $panelsRequired,
                          'batteries'   => $batteriesRequired ,
                          'area'        => $givenarea ,
                        ];
                        
                        ?>
                            <a href="{{ route('pdf.data', $data) }}" class="butn butn-md butn-bg bg-white text-dark mt-30">
                                <span class="text-u fz-13 fw-600">Download PDF<i class="fa fa-download" style="margin-left: 5px;"></i></span>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <div class="coupon">
                                <form action="/email" method="post">
                                    @csrf
                                    <div class="form-group d-flex mt-30">
                                        <input type="email" placeholder="Enter Email" name="mailinp">
                                        <button type="submit" class="butn butn-md butn-bord">
                                            <span>Sent</span>
                                        </button>
                                    </div>
                                    <p class="fz-13">Enter your Email, the report will be sent to your email.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- ==================== End cart ==================== -->


</main>






            </div>
          </main>






 

    <!-- custom scripts -->
    <script src="assets2/js/scripts.js"></script>

@endsection



