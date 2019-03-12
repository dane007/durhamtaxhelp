<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * nav-menu
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durhamtaxhelp
 */

 get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div id='splash' class="landing-page">
                <div class="page1">
                    <div class="site-branding">
                        <?php
					    the_custom_logo();
					?>
                            <?php
				$durham_tax_help = get_bloginfo( 'description', 'display' );
				if ( $durham_tax_help || is_customize_preview() ) :
					?>
                          <p class="site-description">
                              <?php echo $durham_tax_help; /* WPCS: xss ok. */ ?>
                          </p>
                          <?php endif; ?>
                    </div>

                    <?php
					if ( function_exists( 'get_field' ) ) {
					$home_contents = get_field( 'home_contents' );
				?>
                        <?php
				foreach ( $home_contents as $home_content ) {
					$title = $home_content['title'];
					$statement = $home_content['statement'];
                    $image1 = $home_content['image1'];
                    $image2 = $home_content['image2'];
                    $image3 = $home_content['image3'];
                    $image4 = $home_content['image4'];
					$conversion_messages = $home_content['conversion_messages'];
					$findhelp = $home_content['find_help_button'];
					$qualify = $home_content['convert_button'];

                    // Conversion statements
                    $begin = $conversion_messages['begin'];
                    // $failed = $conversion_messages['failed'];
                    // $failed = $conversion_messages['success'];
                    // $invalid = $conversion_messages['invalid'];

					// var_dump( $image );
				?>

          <div class="characters">
              <img id="main_img_chara1" src="<?php echo $image1['url'] ?>" alt="">
              <img id="main_img_chara2" src="<?php echo $image2['url'] ?>" alt="">
              <img id="main_img_chara3" src="<?php echo $image3['url'] ?>" alt="">
              <img id="main_img_chara4" src="<?php echo $image4['url'] ?>" alt="">
          </div>
          <!-- Main Content for Front-Page -->

          <div class="intro grid-x grid-margin-x">

              <h1 id="main_site_title" class="title small-12"><?php echo $title; ?></h1>
              <p class="statement fadeOn small-12">
                  <?php echo $statement; ?>
              </p>
              <p class="conversion fadeOn small-12 medium-12">
                  <?php echo $begin; ?>
              </p>
              <div class="inp fadeOn small-6 medium-4 large-4">
                  <input class="userInp" type="number" name="" value="" placeholder="Example: 30000">
              </div>
              <div class="btn fadeOn small-6 medium-2 large-3">
                  <button class="calculate" type="button" name="button">
                      <?php echo $qualify; ?>
                  </button>
              </div>
              <div class="two_button_container">
                  <p class="fadeOn" id="or">OR</p>
                  <div class="bigbtn fadeOn small-12">
                      <a href="#volunteer_page">
                          <button class="findTxHp" type="button" name="button">
                              <?php echo $findhelp; ?>
                          </button>
                      </a>
                  </div>
              </div>
              <?php
				}
				?>
      <?php
			}
			?>
            </div>
        </div>

		
		<?php 
		if( function_exists( 'get_field' ) ){
			$form_id        = get_field( 'form_id' );
			$form_shortcode = get_field( 'form_shortcode' );
			if ( $form_id || $form_shortcode ){
			?>
			<section class="contact-form">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-y">
							<div class="cell small-12 medium-6">
								<h2>FORM ID</h2>
								<?php echo do_shortcode( '[ws_form id="' . $form_id . '"]' ); ?>
							</div>

							<div class="cell small-12 medium-6">
								<h2>FORM SHORTCODE</h2>
								<?php echo $form_shortcode; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
			}

		}
		
		?>

        </div>

        </main>


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
                    <h1 class="section_titles"><?php echo $qheading; ?></h1>



                    <div class="grid-container financial_empowerment_grid">

                        <div class="grid-x grid-margin-x">

                            <div class="how_to_qualify_btn_container">
                                <!-- Buttons -->
                                <button id="eligible_btn" class="qualify_buttons">
                                    Am I Eligible?
                                </button>

                                <button id="receipts_btn" class="qualify_buttons">
                                   Receipts
                                </button>

                                <button id="infoSlips_btn" class="qualify_buttons">
                                    Information Slips
                                </button>
                            </div>

                            <div class="large-9">


                                <div class="box qualify_box">
                                    <article id="article_box01" class="article_box">
                                        <h2 class="am_i_eligible_title"><?php echo $heading1; ?></h2>
                                        <p class="paragraph0101"><?php echo $statement; ?></p>
                                        <!-- <p class="paragraph0201">Each clinic has specific eligibility criteria based upon
                                            income level and place of residence. Please review the clinic description carefully.</p> -->

                                        <h3 class="volunteer_warning"><?php echo $paragraph1_heading; ?></h3>

                                        <ul class="volunteer_warning_list">
                                        <?php echo $paragraph1_content; ?>
                                            <!-- <li>deceased individuals</li>
                                            <li>bankruptcies</li>
                                            <li>capital gains or losses</li>
                                            <li>employment expenses</li>
                                            <li>business or rental income and expenses</li> -->
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
                                            <!-- <li>Rent or property taxes paid, where you lived, and the name of your landlord</li>
                                            <li>Charitable or political donation receipts</li>
                                            <li>Child care expenses</li>
                                            <li>Disability Tax Credit Certificate (T2001)</li>
                                            <li>Interest paid on student loans</li>
                                            <li>Medical and dental expenses</li>
                                            <li>RRSP contributions</li>
                                            <li>Your previous year’s Income Tax Return</li>
                                            <li>Your previous year’s Notice of Assessment</li> -->
                                        </ul>
                                    <!--- End "What to Bring: Receipts" section --->
                                    </article>

                                    <article id="article_box03" class="article_box">
                                        <h2 class="what_to_bring_title"><?php echo $heading3; ?></h2>
                                        <ul class="information_slips_list">

                                        <?php echo $content3; ?>
                                            <!-- <li>Social Insurance Number (SIN) for you,
                                                your spouse, and any dependents such as
                                                children.</li>
                                            <li>List of  your dependents' names and dates of birth</li>
                                            <li>Details of your spouse's income</li>
                                            <li>Details of your dependent's income</li>
                                            <li>Direct deposit information for your refund, such as a void cheque</li>
                                            <li>Anything you think might be needed for your income taxes</li>
                                            <li>T3 - Statement of Trust Income</li>
                                            <li>T4 – Statement of Remuneration Paid – received for paid employment</li>
                                            <li>T4A – Statement of Pension, Retirement, Annuity, and Other Income</li>
                                            <li>T4(OAS) – Old Age Security</li>
                                            <li>T4A(P) – Canada Pension</li>
                                            <li>T4RSP – Registered Retirement Savings</li>
                                            <li>T4RIFT4U – Income from Retirement Savings</li>
                                            <li>T5 – Statement of Investment Income</li>
                                            <li>T5007 – Statement of Benefits</li>
                                            <li>RC62 – Universal child care benefit statement</li>
                                            <li>PT5007 (statement of benefits)</li> -->
                                        </ul>
                                    <!--- End "What to Bring: Information Slips" section --->
                                    </article>


                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="download">
                     <a href="<?php echo get_template_directory_uri() . '/assets/img/TaxFilingChecklist.pdf'; ?>" download>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/pdf.png'; ?>" />
                     </a>
                        <p>Click here to download in PDF format.</p>
                     </div>

                     <?php
                        }
                    ?>

                </section>





                <!-- Locations Page -->
                <section class="content_sections" id="locations_page">
                    <div id='locations' class="locations-page page2">
                    <h1 class="section_titles">Locations</h1>
                        <div id="map-section" class="grid-x">

                            <div id="map-list" class="small-12 medium-12 large-3">
                                <div class="map-list-option" data-id="0" data-name='divFinGrp'>
                                    <h3>Diverse Financial Group</h3>
                                    <h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
                                </div>
                                <div class="map-list-option" data-id="1" data-name='durhamComLegClin'>
                                    <h3>Durham Community Legal Clinic</h3>
                                    <h4>200 John Street West, Unit B1, Oshawa</h4>
                                </div>
                            </div>

                            <div id="map-box" class="small-12 medium-12 large-6">
                                <div id="leafletMap"></div>
                            </div>

                            <div id="map-info" class="small-12 medium-12 large-3">
                                <h3>Diverse Financial Group</h3>
                                <h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
                                <p>By apointment only</p>
                                <p>Current and prior year returns</p>
                                <p>call 647-887-8725</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Volunteer Section -->
                <section class="content_sections" id="volunteer_page">
                    <div class="volunteer grid-container">

                        <?php
                    if ( function_exists( 'get_field' ) ) {
                    $volunteer_contents = get_field( 'volunteer_contents' );
                ?>
                            <?php
                foreach ( $volunteer_contents as $volunteer_content ) {
                    $main_title = $volunteer_content['main_title'];
                    $title_1 = $volunteer_content['title_1'];
                    $content_1 = $volunteer_content['content_1'];
                    $video = $volunteer_content['video'];
                    // $videovideo = $volunteer_content['videovideo'];
                    $video_description = $volunteer_content['video_description'];
                    $title_2 = $volunteer_content['title_2'];
                    $content_2 = $volunteer_content['content_2'];
                    // var_dump( $image );



                ?>

                    <?php
                    $videovideo = get_field('videovideo');

                    $attr = array(
                        'mp4'     => $videovideo,
                        'preload' => 'auto'
                    );
                    ?>

                    <!-- Main Content for Volunteer-Section -->

                    <h1 class="section_titles cell"><?php echo $main_title; ?></h1>


                    <div class="volunteer grid-x grid-margin-x">

                        <div class="cell small-12 large-4 volunteer_content_container">
                            <h4 class="volunteer_subtitles"><?php echo $title_1; ?></h4>
                            <p class="">
                                <?php echo $content_1; ?>
                            </p>
                            <div class="volunteer_button_container">
                                <a href="#locations_page">
                                    <button class="volunteer_button" type="button" name="button">Organizations >></button>
                                </a>
                            </div>
                            <p id="volunteer_p2">To officially register or to get more information about being a volunteer, click the button below.</p>
                            <div class="volunteer_button_container">
                                <a href="https://www.canada.ca/en/revenue-agency/services/tax/individuals/community-volunteer-income-tax-program/lend-a-hand-individuals.html">
                                    <button class="volunteer_button" type="button" name="button">Learn More >></button>
                                </a>
                            </div>
                        </div>

                        <div class="cell small-12 large-4">
                            <div id="video_container">
                                <div id="short_video">
                                    <?php echo wp_video_shortcode( $attr ) ?>
                                </div>
                            </div>
                            <p id="video_description">
                                <?php echo $video_description; ?>
                            </p>
                        </div>

                        <div class="cell small-12 large-4 volunteer_content_container">
                            <h4 class="volunteer_subtitles"><?php echo $title_2; ?></h4>
                            <p class="">
                                <?php echo $content_2; ?>
                            </p>
                            <div id="volunteer_last_btn" class="volunteer_button_container">
                                <a href="https://www.canada.ca/en/revenue-agency/news/newsroom/tax-tips/tax-tips-2014/tax-clinics-your-community-organization.html">
                                    <button class="volunteer_button" type="button" name="button">Click here >></button>
                                </a>
                            </div>
                        </div>
                    </div>


                    <?php
                }
                ?>
                                    <?php
            }
            ?>

                    </div>
                    <!-- end of Volunteer Section -->
                </section>

                <section class="content_sections" id="financial_empowerment">

                    <h1 class="section_titles">Financial Empowerment</h1>


                    <div class="grid-container align-center financial_empowerment_grid">

                        <div class="grid-x grid-margin-x">
                            <div class="cell large-1">
                                <div id="sidebar">
                                    <div id="arrow1"><img src="<?php echo get_template_directory_uri() . '/assets/img/middle.png'; ?>"></div>
                                    <div id="arrow2"><img src="<?php echo get_template_directory_uri() . '/assets/img/middle.png'; ?>"></div>
                                    <div id="arrow3"><img src="<?php echo get_template_directory_uri() . '/assets/img/middle.png'; ?>"></div>
                                    <div id="arrow4"><img src="<?php echo get_template_directory_uri() . '/assets/img/middle.png'; ?>"></div>
                                </div>

                                <div id="sideNav">

                                    <nav>
                                        <ol>

                                            <li class="one">
                                                Low Cost
                                                <br />Banking
                                            </li>
                                            <li class="two">Credit and Debt

                                            </li>
                                            <li class="three">Tax Refund
                                            </li>
                                            <li class="four">Canada
                                                <br />Learning Bond
                                            </li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>

                            <div class="cell large-11">

                                <div class="box">

                                    <div id="overview">

                                        <h1> Overview</h1>
                                        <p>Financial empowerment is an approach to poverty reduction that focuses
                    on improving the financial security of low-income people. It does this by introducing
                    a set of interventions that together help low-income Canadians to
                    grow their incomes, improve their credit scores, savings and debt levels, and
                    build wealth through education, employment, entrepreneurship and improved
                    housing.<br />
                    <br />Financial empowerment isn’t like most other poverty reduction approaches.
                    It focuses on helping low-income people participate and feel included in
                    our financial system. It increases their opportunities and knowledge, and
                    fosters behaviours that are critical to their economic security and their ability
                    to invest in their future.</p>

                                    </div>

                                    <div id="cost">

                                        <p class="firstPara">

                                            Most bank accounts have a service fee, and the Government of Canada has agreements with most major banks to offer low fee accounts. Service fees on these accounts cannot exceed $4.00/month. These accounts must also include:
                                        </p>

                                        <ul>
                                            <li> At least 12 free debit transactions/month</li>

                                            <li>Debit card</li>

                                            <li>Pre-authorized payments</li>

                                            <li>Monthly printed statements</li>

                                            <li> Unlimited deposits</li>
                                        </ul>

                                        <p class="secondPara">
                                            These accounts are available for free for some groups including: youth, students, seniors receiving GIS and RDSP beneficiaries. More info and a list of accounts is available at
                                            <a href="https://www.canada.ca/en/financial-consumer-agency/services/banking/bank-accounts/low-cost-no-cost.html">Canada.ca</a>
                                        </p>
                                    </div>

                                    <div id="credit">

                                        <p class="thirdPara">
                                            Getting access to neutral information about debt and credit can be difficult. How Credit Counselling Helps A credit counsellor can help with budgeting, basic credit counselling and tips and options for negotiating with creditors. Do some research because some companies offering to help pay off debt are misleading customers. Agencies may be not for profit but this doesn’t mean that all services are free. Look for agencies accredited with these associations:
                                        </p>

                                        <li> Credit Counselling Canada</li>

                                        <li> Canadian Association of Credit Counselling Service</li>

                                        <li> Canadian Association of Independent Credit Counselling Agencies</li>

                                        <li> Ontario Association of Credit Counselling Services</li>

                                        <p class="fourthPara">More info at <a href="https://www.canada.ca/en/financial-consumer-agency/services/banking/bank-accounts/low-cost-no-cost.html">Canada.ca</a></p>

                                    </div>

                                    <div id="tax">

                                        <h1>What to do with your tax refund? </h1>
                                        <p>See attached income tax refund doc from Financial Consumer Agency of Canada document to link for information and options.</p>
                                        <div class="filingPdf"><a href="<?php echo get_template_directory_uri() . '/assets/img/TaxFilingChecklist.pdf'; ?>">Tax Filing Checklist<img src="<?php echo get_template_directory_uri() . '/assets/img/pdf.png'; ?>" alt="pdf">
                                </a></div>
                                        <br />
                                        <div class="RefundPdf"><a href="<?php echo get_template_directory_uri() . '/assets/img/income-tax-refund.pdf'; ?>">Income Tax Refund <img src="<?php echo get_template_directory_uri() . '/assets/img/pdf.png'; ?>" alt="pdf"></a></div>
                                    </div>

                                    <div id="bond">

                                        <p class="sixthPara">The Canada Learning Bond (CLB) is free money from the Government of Canada for children from low income families to support education after high school. Up to $2000 per child is deposited into an Registered Education Savings Plan (RESP) and no personal contribution is ever required to get the bond. Children are eligible if:
                                            <br />

                                            <br /> Born in 2004 or later

                                            <br />Annual net family income is less than $47,000
                                            <br />

                                            <br />
                                            <br /> You can get more information and even start your application online at <a href="SmartSaver.org"> SmartSaver.org</a> for a No fee/No deposit RESP and the Canada Learning Bond. Or contact any bank, credit union or RESP provider and ask about an RESP and the Canada Learning Bond. Already have an RESP? Contact your RESP provider and ask for the Canada Learning Bond today.
                                            <br /> More info at <a href="https://www.canada.ca/en/employment-social-development/services/learning-bond.html">Canada.ca</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                <section class="content_sections" id="testimonials_page">
                    <!-- Page Heading -->
                    <h1 class="section_titles"> Testimonials</h1>

                    <!-- Content for Testimonials Page -->
                    <div class="testimonials-page">

                        <!-- Grid Container for positoong of testimonials cards -->
                        <div class="grid-x grid-margin-x container align-center">

                            <?php
                if ( function_exists( 'get_field' ) ) {
                $testimonials = get_field( 'testimonials' );
            ?>

                                <!-- for each function to output card for each field added -->
                                <?php
                foreach ( $testimonials as $testimonial ) {

                    $statement = $testimonial['statement'];
                    $image = $testimonial['image'];
                    $imageBG = $testimonial['imageBG'];

                ?>

                <!-- <div class="grid-container"> -->
                    <!-- card structure -->
                    <!-- outer most div containing all smaller elements -->
                    <div class="cell card small-offset-0 small-12 medium-offset-1 medium-10 large-offset-0  large-6">
                        <!-- background image for text -->
                        <img class="imageBG" src="<?php echo $imageBG['url'] ?>" alt="">
                        <div class="grid-x grid-margin-x">
                            <!-- larger div for text to be placed inside -->
                            <div class="cell small-offset-1 small-10 medium-10  large-10 textContainer">
                                <p class="statement">
                                    <?php echo $statement; ?>
                                </p>
                            </div>

                            <!-- frame for image to be placed inside -->
                            <div class="cell small-offset-3 small-6 medium-6 large-6 large-offset-3 imageFrame">
                                <div id="frame">
                                    <img class="image" src="<?php echo $image['url'] ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                <!-- </div> -->

                    <?php
        }
        ?>
                                        <?php
        }
        ?>
                </section>


                <!-- Benefits Finder -->
                <section id="benefits_finder_section">
                <?php
                        if ( function_exists( 'get_field' ) ) {
                        $benefits_contents = get_field( 'benefits_contents' );

                    // var_dump( $image );
                    ?>
                    <?php
                    foreach( $benefits_contents as $benefits_content ) {
                        $heading = $benefits_content['heading'];
                        $content = $benefits_content['content'];
                        $link = $benefits_content['link'];

                    ?>
                    <?php
                    }
                    ?>

                    <div class="grid-container">
                        <h1 class="section_titles"><?php echo $heading; ?></h1>
                        <p> <?php echo $content; ?> </p>
                        <a href="https://srv138.services.gc.ca/daf/q?id=e9c78bbd-255d-42a0-a8a0-3b60f96d9965&GoCTemplateCulture=en-CA" id="questionnaire_link">
                        <?php echo $link; ?>
                        </a>
                    </div>
                 </section>

                 <section id="footer">
                     <div id="footer_holder">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/money_makes_cents_logo.png'; ?>" alt="Money Makes Cents Logo" />
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/North House Logo_Colour.jpg'; ?>" alt="North House Logo" />
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/JHS_Logo_65px_high.png'; ?>" alt="John Howard Logo" />
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/enactus_logo.png'; ?>" alt="Enactus Logo" />
						 <?php if ( get_theme_mod( 'underscores_facebook_url' ) ) { ?>
						<a class="icon facebook" href="<?php echo get_theme_mod( 'underscores_facebook_url' ); ?>" target="_blank">Facebook</a>
						<?php } ?>
						  <?php if ( get_theme_mod( 'underscores_twitter_url' ) ) { ?>
						<a class="icon twitter" href="<?php echo get_theme_mod( 'underscores_twitter_url' ); ?>" target="_blank">Twitter</a>
						<?php } ?>
                     </div>



                 </section>

                 <?php
                    }
                    ?>


                </div>
                </div>
            </div>
        </main>
    </div>
    <!-- #primary -->

    <?php
// get_sidebar();
get_footer();
