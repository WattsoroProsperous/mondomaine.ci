
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
                                    R servez votre nom de domaine.ci en ligne</h2>
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
		<?php
                        function domainVal(){
                            global $result;
                           $position1 = strpos($result, "Registry Domain ID");
                           $position2 = strpos($result, "Domain Status: No Object Found");
                           if ($position1 !== false) {
						   if($result) {
                            echo "<pre class='pre-style3'>\n" ."<br>". "\n</pre>\n";
								echo "<pre class='pre-style4'>\n" . "Dommaine R&eacuteserv&eacute" . "\n</pre>\n";
								echo "<pre class='pre-style5'>\n" . $result . "\n</pre>\n";
	}
                       } else {
                          
						    if($result) {
                                 
							$label = "R&eacuteserver";
                            echo "<pre class='pre-style1'>\n" ."<br>". "\n</pre>\n";
								echo  "<pre class='pre-style4'>\n" . "Dommaine Disponible" ."                             "."                                      "."                                                     "."      35 000 FCFA/AN      ".'<button type="button" class="btn btn-primary" onclick="mafonction()">' . $label . '</button>' ."\n</pre>\n";
								echo "<pre class='pre-style2'>\n" . $result . "\n</pre>\n";
								
						        
	}
						   
                       }
                       
                        }
	
	?>
                            <form method="POST" action="">
    
                                <div class="row">
                                    <div class="col-md-10">
                                        <input   type="text" name="domain" class="form-control " autocomplete="off" value="<?php echo $domain; ?>"  placeholder="Entrer votre nom de domaine" id="exampleInputEmail1">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Validez</button>
                                    </div>
                                </div>
                                
                            </form>
                            
                        </div><br><br><br>
                         
						<?php domainVal();?>
                         
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
	
  


    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->



</div>

<script>
function mafonction() {
  window.location.href = "achat.inc.php";
}
</script>