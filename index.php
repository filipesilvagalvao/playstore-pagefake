<?php get_header(); ?>
<?php
// Template Name: home
?>
<main>
        <section class="slider-app-images">

            <div class="slider-container">
                <?php if(have_rows('screenshots_app')): while(have_rows('screenshots_app')) : the_row(); ?>
                <div class="slider-item">
                    <img src="<?php the_sub_field('img_screenshot'); ?>">
                </div>
                <?php endwhile; else : endif; ?>
            </div>
        </section>
        <section class="app-description">

            <div class="description-header">
                <h2>Sobre este app</h2>
                <button>
                    <span class="material-symbols-outlined">
                        arrow_right_alt
                    </span>
                </button>
            </div>

            <div class="text-description">
                <?php the_field('description_text'); ?>
            </div>

            <div class="app-updates">
                <h3>Última atualização</h3>
                <p><?php the_field('update'); ?></p>
            </div>

        </section>
        <section class="securite-data">

            <div class="info-securite">
                <h2>Segurança dos dados</h2>
                <button>
                    <span class="material-symbols-outlined">
                        arrow_right_alt
                    </span>
                </button>
            </div>

            <div class="text-securite">
                <p>Nesta seção, os desenvolvedores podem especificar como os aplicativos coletam e usam dados.</saiba
                        mais emavap>
            </div>

            <div class="data-sharing">
                <div class="data-sharing-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/share.webp" alt="nenhum dado compartilhado">
                    <div class="data-sharing-text">
                        <span>Nenhum dado é compartilhado com terceiros</span>
                        <span class="more-details">Saiba mais sobre como os desenvolvedores declaram o que
                            compartilham</span>
                    </div>
                </div>
                <div class="data-sharing-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/upload.webp" alt="nenhum dado coletado">
                    <div class="data-sharing-text">
                        <span>Nenhum dado é coletado</span>
                        <span class="more-details">Saiba mais sobre como os desenvolvedores relatam o que
                            coletam.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="app-reviews">
            <div class="reviews-header">
                <h2>Avaliações e Comentários</h2>
                <div class="reviews-header-rating-downloads">
                    <div class="reviews-header-rating">
                        <span class="classification-note">4.8</span>
                        <span class="classification-stars">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </span>
                        <span class="classification-text">20 mil</span>
                    </div>
                    <div class="reviews-header-downloads">
                        <div>
                            <span>5</span>
                            <div id="review-rating-5" class="review-rating">
                                <span style="width: <?php the_field('star_level_5'); ?>%;"></span>
                            </div>
                        </div>
                        <div>
                            <span id="ratin">4</span>
                            <div id="review-rating-4" class="review-rating">
                                <span style="width: <?php the_field('star_level_4'); ?>%;"></span>
                            </div>
                        </div>
                        <div>
                            <span>3</span>
                            <div id="review-rating-3" class="review-rating">
                                <span style="width: <?php the_field('star_level_3'); ?>%;"></span>
                            </div>
                        </div>
                        <div>
                            <span>2</span>
                            <div id="review-rating-2" class="review-rating">
                                <span style="width: <?php the_field('star_level_2'); ?>%;"></span>
                            </div>
                        </div>
                        <div>
                            <span>1</span>
                            <div id="review-rating-1" class="review-rating">
                                <span style="width: <?php the_field('star_level_1'); ?>%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="coments">

    <?php if (have_rows('coment')): while (have_rows('coment')) : the_row(); ?>
        <div class="coment">
            <div class="profile">
                <img src="<?php the_sub_field('photo_profile'); ?>" alt="Foto de perfil">
                <span><?php the_sub_field('name_person'); ?></span>
            </div>

            <div>
                <div>
                    <span class="user-review-stars">
                        <?php if (have_rows('star_coment')): while (have_rows('star_coment')) : the_row(); ?>
                            <span class="material-icons"><?php the_sub_field('star'); ?></span>
                        <?php endwhile; endif; ?>
                    </span>
                    <span class="user-review-date">
                        <?php the_sub_field('review_date'); ?>
                    </span>
                </div>

                <p class="coment-user">
                    <?php the_sub_field('text_coment'); ?>
                </p>

                <span class="review-coment-user">
                    Essa avaliação foi marcada como útil por <?php the_sub_field('qtd_person_valiate'); ?> pessoas
                </span>

                <div class="ask-helpfull-coment">
                    <span>Você achou isso útil?</span>
                    <div>
                        <button>Sim</button>
                        <button>Não</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>

</section>

        <section class="display-modal" style="display: none;">
            <div class="show-modal">
                <button><span class="material-symbols-outlined">
                        chevron_left
                    </span></button>
                <img src="img/img-1.webp" alt="">
                <button><span class="material-symbols-outlined">
                        chevron_right
                    </span></button>
            </div>
        </section>
    </main>
<?php get_footer(); ?>