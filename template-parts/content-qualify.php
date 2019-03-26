<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

?>

<section class="content_sections" id="qualify_page">
		<?php
				if ( function_exists( 'get_field' ) ) {
				$qualify_contents = get_field( 'qualify_contents' );

		// var_dump( $image );
		?>
		<?php
		foreach( $qualify_contents as $qualify_content ) {
				$qheading = $qualify_content['heading'];
				$heading1 = $qualify_content['heading1'];
				$statement = $qualify_content['statement'];
				$paragraph1_heading = $qualify_content['paragraph1_heading'];
				$paragraph1_content = $qualify_content['paragraph1_content'];
				$paragraph2_heading = $qualify_content['paragraph2_heading'];
				$paragraph2_content = $qualify_content['paragraph2_content'];
				$paragraph3_heading = $qualify_content['paragraph2_heading'];
				$paragraph3_content = $qualify_content['paragraph3_content'];
				$heading2 = $qualify_content['heading2'];
				$content2 = $qualify_content['content2'];
				$heading3 = $qualify_content['heading3'];
				$content3 = $qualify_content['content3'];





		?>
		<?php
		}
		?>



		<div class="grid-container htq_grid">

				<div class="grid-x grid-margin-x fullVH">
					<h1 class="section_titles small-12">
					
					
					<?php

                    if ($qheading) {

                        ?>

                        <?php echo $qheading; ?>


                    </h1>

                    <?php

                    

                    }

                    ?>

						<div class="how_to_qualify_btn_container small-12 medium-4 large-3 grid-x">
								<!-- Buttons -->
								<button id="eligible_btn" class="qualify_buttons small-3 medium-12">
										Am I Eligible?
								</button>

								<button id="receipts_btn" class="qualify_buttons small-3 medium-12">
									 Receipts
								</button>

								<button id="infoSlips_btn" class="qualify_buttons small-3 medium-12">
										Information Slips
								</button>
						</div>

						<div class="small-12 medium-8 large-9 qualify_box">


								<div class="qualify_box box">
										<article id="article_box01" class="article_box">
												<h2 class="am_i_eligible_title">
												
												<?php

                                                if ($heading1) {

                                                ?>
												<?php echo $heading1; ?></h2>
												<?php

												}

												?>

												<p class="paragraph0101"><?php echo $statement; ?></p>

												<h3 class="volunteer_warning"><?php echo $paragraph1_heading; ?></h3>

												<ul class="volunteer_warning_list">
												<?php echo $paragraph1_content; ?>
												</ul>

												<h4 class="volunteer_CRA_Guidelines"><?php echo $paragraph2_heading; ?></h4>

												<ul class="volunteer_CRA_Guidelines_list">
												<?php echo $paragraph2_content; ?>
												</ul>

												<h5 class="chartered_Accountant_Guidelines"><?php echo $paragraph3_heading; ?></h5>

												<ul class="chartered_Accountant_Guidelines_list">
												<?php echo $paragraph3_content; ?>
												</ul>
												<!--- End "Am I Eligible" section --->
										</article>


										<article id="article_box02" class="article_box">
												<h2 class="what_to_bring_title"><?php echo $heading2; ?></h2>
												<ul class="receipts_list">

												<?php echo $content2; ?>
												</ul>
										<!--- End "What to Bring: Receipts" section --->
										</article>

										<article id="article_box03" class="article_box">
												<h2 class="what_to_bring_title"><?php echo $heading3; ?></h2>
												<ul class="information_slips_list">

												<?php echo $content3; ?>
												</ul>
										<!--- End "What to Bring: Information Slips" section --->
										</article>
										<div class="download">
										 <a href="<?php echo get_template_directory_uri() . '/assets/img/TaxFilingChecklist.pdf'; ?>" download>
														<img src="<?php echo get_template_directory_uri() . '/assets/img/pdfDLImg.png'; ?>" />
														<p class="dlPDF">Click here to download in PDF format.</p>
										 </a>
										 </div>

								</div>

						</div>

				</div>

		</div>

		 <?php
				}
		?>

</section>
