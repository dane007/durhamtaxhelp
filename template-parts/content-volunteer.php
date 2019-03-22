<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

?>

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
