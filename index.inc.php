<div role="main" class="main">

    <section class="section border-0 mb-0 bg-color-quaternary p-relative">
        <div class="container">
            <div class="row custom-hero-row">

                <div class="col">
                    <div class="row pt-5 mt-5 mb-5 pb-5">
                        <div class="col-12 col-lg-7 p-relative pt-5 mt-5">
                            <div class="divider divider-small divider-small-lg appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                <hr class="bg-primary border-radius">
                            </div>
                            <div class="overflow-hidden mb-1">
                                <h2 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="100">
                                    Réservez votre nom de domaine.ci en ligne</h2>
                            </div>
                            <h1 class="text-color-dark font-weight-bold text-9 pb-2 mb-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Votre
                                nom de domaine
                                & e-mail au meilleur prix</h1>
								<?php
								 
include('functions.php');
$result = '';
$domain= '';
$message = '';
if(isset($_POST['domain'])){ 
	$domain = $_POST['domain'];	
	 
	$domain = trim($domain);
	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
	if(substr(strtolower($domain), 0, 8) == "https://") $domain = substr($domain, 8);
	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
	if(validateDomain($domain)) {
		$result = lookUpDomain($domain);
		 
	} else {
		$message = "Invalid Input!";
	}
}
 
?>
<?php if($message) { ?>
		<span class="text-danger"><strong><?php echo $message; ?></strong></span>
		 
		
	<?php } ?>	
	</label>
                            <form method="POST" action="?md=order">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="domain" class="form-control " autocomplete="off" value="<?php echo $domain; ?>"  placeholder="Enter domain name" id="exampleInputEmail1">
                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Validez</button>
                                    </div>
                                </div>

                            </form>

                        </div>
						<?php
                        function domainVal(){
                            global $result;
                           $position1 = strpos($result, "Registry Domain ID");
                           $position2 = strpos($result, "Domain Status: No Object Found");
                           if ($position1 !== true) {
                           echo "Dommaine Réservé";
                       } else {
                           echo "Dommaine Disponible";
                       }}
	 
	?>
                        <div class="col-12 col-lg-5 p-relative text-end">
								
                            <div class="appear-animation custom-element-wrapper custom-element-6"
                                data-appear-animation="expandIn" data-appear-animation-delay="500">
                                <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3">
                                </div>
                            </div>

                            <div class="appear-animation custom-element-wrapper custom-element-7"
                                data-appear-animation="expandIn" data-appear-animation-delay="700">
                                <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3">
                                </div>
								
                            </div>

                            <div class="appear-animation custom-element-wrapper p-relative custom-element-5"
                                data-appea!r-animation="expandIn" data-appear-animation-delay="0">
                                <div class="w-50 h-50">
                                    <div class="custom-element rotate-r-45"></div>
                                </div>
                            </div>

                            <img class="appear-animation img-fluid custom-element-wrapper custom-element-8"
                                data-appear-animation="fadeIn" data-appear-animation-delay="900"
                                src="img/mondomaine.png" alt="">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="appear-animation custom-element-wrapper custom-element-1" data-appear-animation="expandIn"
            data-appear-animation-delay="200">
            <div class="w-100 h-100" data-plugin-float-element
                data-plugin-options="{'startPos': 'bottom', 'speed': 2.1, 'transition': true, 'transitionDuration': 500}">
                <div class="custom-element rotate-r-45"></div>
            </div>
        </div>

        <div class="appear-animation custom-element-wrapper custom-element-2" data-appear-animation="expandIn"
            data-appear-animation-delay="200">
            <div class="w-100 h-100" data-plugin-float-element
                data-plugin-options="{'startPos': 'bottom', 'speed': 2.2, 'transition': true, 'transitionDuration': 500}">
                <div class="custom-element rotate-r-45"></div>
            </div>
        </div>

        <div class="appear-animation custom-element-wrapper custom-element-3" data-appear-animation="expandIn"
            data-appear-animation-delay="200">
            <div class="w-100 h-100" data-plugin-float-element
                data-plugin-options="{'startPos': 'bottom', 'speed': 2.3, 'transition': true, 'transitionDuration': 500}">
                <div class="custom-element rotate-r-45"></div>
            </div>
        </div>

        <div class="appear-animation custom-element-wrapper custom-element-4" data-appear-animation="expandIn"
            data-appear-animation-delay="200">
            <div class="w-100 h-100" data-plugin-float-element
                data-plugin-options="{'startPos': 'bottom', 'speed': 2.4, 'transition': true, 'transitionDuration': 500}">
                <div class="custom-element rotate-r-45"></div>
            </div>
        </div>

    </section>
   
    <section class="section border-0 bg-transparent m-0" id="start">
        <div class="container py-5 mb-3">
            <div class="row">
                <div class="col text-center">

                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                    <div class="overflow-hidden mb-1">
                        <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="100">Nos services</h3>
                    </div>
                    <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Domaines et
                        adresses mail sécurisés pour votre vie privée numérique</h2>

                </div>
            </div>
            <div class="row pt-4 pb-5">
                <div class="col-lg-6 text-center p-relative pt-5">

                    <div class="appear-animation custom-element-wrapper custom-element-9"
                        data-appear-animation="expandIn" data-appear-animation-delay="1000">
                        <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                    </div>

                    <div class="appear-animation custom-element-wrapper custom-element-10"
                        data-appear-animation="expandIn" data-appear-animation-delay="1200">
                        <div class="bg-color-primary particle particle-dots w-100 h-100 opacity-3"></div>
                    </div>

                    <div class="appear-animation custom-element-wrapper custom-element-11 p-relative rotate-r-45"
                        data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <img class="img-fluid" src="img/domainewww.png" alt="">
                    </div>

                </div>
                <div class="col-lg-6 pt-5 mt-5 pt-lg-0 mt-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <p class="font-weight-medium text-4-5 line-height-5">Domaines en .ci sécurisés pour
                            votre
                            vie privée numérique</p>
                        <p class="text-3-5">Chez nous, sécurité et protection contre les cybermenaces vont de
                            pair,
                            tout cela sans publicité.</p>

                        <ul class="list list-icons list-icons-style-2 list-icons-lg">
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Domaines avec extensions en
                                .ci
                            </li>
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Messagerie
                            </li>
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Hebergement

                            </li>
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Sites Web

                            </li>
                        </ul>
                    </div>

                    <div class="d-block pt-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="300">
                        <a href="demo-business-consulting-4-about-us.html"
                            class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">Reservez
                            maintenant <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="section border-0 bg-quaternary m-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col col-lg-9 text-center">

                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                    <div class="overflow-hidden mb-1">
                        <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="100">Nos offres</h3>
                    </div>

                </div>
            </div>

            <div class="row py-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div
                        class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                        <div class="card-body p-relative zindex-1 p-5 text-center">
                            <div class="anim-hover-inner-translate-top-20px transition-3ms">
                                <img width="200" height="200" src="img/dom.jpg" />
                                <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">Domaine en .ci</h4>
                                <p class="card-text text-3-5">Lorem ipsum dolor sit amet, consectetur elit.</p>
                            </div>
                            <div
                                class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                <a href="demo-business-consulting-4-services-detail.html"
                                    class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn
                                    More
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div
                        class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                        <div class="card-body p-relative zindex-1 p-5 text-center">
                            <div class="anim-hover-inner-translate-top-20px transition-3ms">
                                <img width="200" height="200" src="img/mess.jpg" alt="" />
                                <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">Messagerie</h4>
                                <p class="card-text text-3-5">Lorem ipsum dolor sit amet, consectetur elit.</p>
                            </div>
                            <div
                                class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                <a href="demo-business-consulting-4-services-detail.html"
                                    class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn
                                    More
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div
                        class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                        <div class="card-body p-relative zindex-1 p-5 text-center">
                            <div class="anim-hover-inner-translate-top-20px transition-3ms">
                                <img width="300" height="200" src="img/host.jpg" alt="" />
                                <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">Hebergement</h4>
                                <p class="card-text text-3-5">Lorem ipsum dolor sit amet, consectetur elit.</p>
                            </div>
                            <div
                                class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                <a href="demo-business-consulting-4-services-detail.html"
                                    class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn
                                    More
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div
                        class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                        <div class="card-body p-relative zindex-1 p-5 text-center">
                            <div class="anim-hover-inner-translate-top-20px transition-3ms">
                                <img width="250" height="200" src="img/site.jpg" />
                                <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">Site Web</h4>
                                <p class="card-text text-3-5">Lorem ipsum dolor sit amet, consectetur elit.</p>
                            </div>
                            <div
                                class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                <a href="demo-business-consulting-4-services-detail.html"
                                    class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn
                                    More
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-lg-9 text-center">


                </div>
            </div>
        </div>
    </section>


    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->



</div>