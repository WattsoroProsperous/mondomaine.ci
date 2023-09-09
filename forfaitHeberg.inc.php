 
 <?php 
 require 'db.classe.php';
 $db = new db() ?>
<section class="section section-no-border mt-0" id="plans"
                     echo "<pre class='pre-style5'></pre>
					<div class="container " id="plans"><br><br><br><br><br>
                        <div class="col-lg-12  text-center">   
                                <div class="row "> 
								<h2 class="heading-dark  mt-4 mt-100 " style="color:#0A2B5D"><strong>Forfaits d'hébergement</strong></h2>
								<p class="mb-5">Commencez ici et choisissez celui qui vous convient le mieux.</p>
							</div>
						</div>
						<div class="pricing-table pricing-table-no-gap pb-3 mb-5 mt-3">
							 
							<?PHP $product=$db->query('SELECT * FROM product') ?>
							<?php foreach($product as $products): ?>
							<div class="col-md-6 col-lg-3">
								<div class="plan">
									<div class="plan-header" style="background:#0A2B5D">
										<h3><?= $products["nom"] ?></h3>
									</div>
									<div class="plan-price">
										<span class="price"><?= $products["Price"] ?><span class="price-unit">F CFA</span></span>
										<label class="price-label">Par Mois</label>
									</div>
									<div class="plan-features">
										<ul>
											<li><strong><?= $products["espaceDisque"] ?></strong></li>
											<li><strong><?= $products["bandePassante"] ?></strong></li>
											<li><strong><?= $products["compteMail"] ?></strong></li>
											<li><strong><?= $products["sousDomaine"] ?></strong></li>
										</ul>
									</div>
									<div class="plan-footer">
										<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choisissez un forfait</a>
									</div>
								</div>
							</div>
							<?php endforeach; ; ?>
 
						</div>
					</div>
				</section>