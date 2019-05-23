<?php
/**
 * Template Name:Homepage
 */

get_header();
?>
        <main>
            <section class="top">
                <div class="top_block top_block_one">
                    <p><?php print_r(get_theme_mod('one_subscription')) ?></p>
                </div>
                <div class="top_block top_block_two">
                    <p>
                        <?php print_r(get_theme_mod('two_subscription')) ?>
                    </p>
                </div>
                <div class="top_block top_block_three ">
                    <p><?php print_r(get_theme_mod('thre_subscription')) ?></p>
                </div>
                <div class="top_block top_block_four">
                    <p>
                        <?php print_r(get_theme_mod('four_subscription')) ?>
                    </p>
                </div>
            </section>

            <section id="team" class="team">
                <div class="container-elastic">
                    <div class="team_flex">
                        <div class="team_flex_lable">
                            <!--                        <p>-->
                            <!--                            FC ATLETIK-->
                            <!--                        </p>-->
                            <img src="<?php echo get_template_directory_uri() ?>/img/Combined%20Shape.png">
                        </div>
                        <div class="team_flex_block">
                            <h2 class="h2_text_title"><?php print_r(get_theme_mod('title_team_subscription')) ?></h2>
                            <span class="span"></span>
                            <h3 class="h3_text_title"><?php print_r(get_theme_mod('text_team_subscription')) ?> </h3>

                            <?php $teams = new WP_Query(array('post_type' => 'teams')); ?>
                            <?php if ($teams->have_posts()) : ?>
                                <?php while ($teams->have_posts()) :
                                $teams->the_post(); ?>
                                    <div class="team_flex_person">
                                        <div class="team_flex_person_img">
                                            <img src="<?php the_post_thumbnail_url(); ?>"></div>
                                        <div class="team_flex_person_text">
                                            <h2><?php the_title(); ?></h2>
                                            <span class="span"></span>
                                            <h3><?php the_excerpt(); ?></h3>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else :
                        endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="values">
                <div class="container-elastic">
                    <h2>ЧОМУ ВАРТО ОБРАТИ ФК «АТЛЕТИК»</h2>
                    <div class="values_flex">
                        <?php $teams = new WP_Query(array('post_type' => 'advantages')); ?>
                        <?php if ($teams->have_posts()) : ?>
                            <?php while ($teams->have_posts()) :
                            $teams->the_post(); ?>
                                <div class="values_flex_block">
                                    <div class="values_flex_block_img">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </div>
                                    <div class="values_flex_block_text">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else :
                    endif; ?>
                    </div>
                    <a class="values_bt_more values_bt" href="http://dev-vty.pantheonsite.io/про-нас">
                        Більше інформації про нас
                    </a>
                </div>
            </section>
        </main>


<?php
get_footer();
