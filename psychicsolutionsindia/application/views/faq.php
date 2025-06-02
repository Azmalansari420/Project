<?php include('header.php'); ?>
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.php">Home</a>
						<span>Faq's</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->


			<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-3 banner-left bg-cover align-items-end" style="background-image: url(<?=base_url() ?>images/faq.jpeg)"></div>
					<div class="col-xl-9">
						<div class="faq-wrap">
							<div class="text-center text-md-left">
								<div class="title-wrap">
									<h2 class="h1"><span class="theme-color">FAQ's</span></h2>
								</div>
							</div>

							<div id="faqAccordion" class="faq-accordion mt-2 mt-lg-3" data-children=".faq-item">
								<?php
								$i=0;
								$faq = $this->crud->selectDataByMultipleWhere('faq',array('status'=>1,));
								foreach($faq as $key => $data)
									{ $i++; ?>

								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion<?=$key ?>" href="#faqItem<?=$key ?>" aria-expanded="true"><span><?=$i ?>.</span><span><?=$data->question ?></span></a>
									<div id="faqItem<?=$key ?>" class="collapse <?php if($key==0) echo 'show'; ?> faq-item-content" role="tabpanel">
										<div>
											<p><?=$data->answere ?></p>
										</div>
									</div>
								</div>


							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include('footer.php'); ?>