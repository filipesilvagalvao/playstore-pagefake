
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" defer></script>
    <title>Página da Play Store</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="app-header">
        <div class="app-info">

            <img src="<?php the_field('img_logo'); ?>" alt="logo app" class="app-logo">

            <div class="app-details">
                <h1><span><?php the_field('title_app'); ?></span></h1>
                <div class="app-subtitle">
                    <div class="subtitle"><a><span><?php the_field('subtitle_app'); ?></span></a></div>
                    <div class="subtitle-info">
                        <div><span>Contém anúncios · Compras no aplicativo</span></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="app-rating">
            <div class="container-app-rating">
                <div id="rating-1">
                    <span class="header-rating"><?php the_field('note_stars'); ?><span class="material-icons"
                            style="color:#FFD600; font-size:1.1em; margin-left:4px;">star</span></span>
                    <span class="body-rating"><?php the_field('qtd_reviews'); ?></span>
                </div>
                <div id="rating-2">
                    <span class="header-rating"><?php the_field('qtd_downloads'); ?></span>
                    <span class="body-rating">Downloads</span>
                </div>
                <div id="rating-3">
                    <span class="header-rating"><span class="material-symbols-outlined">
                            workspace_premium
                        </span></span>
                    <span class="body-rating">Seleção dos nossos especialistas</span>
                </div>
                <div id="rating-4">
                    <span class="header-rating">18</span>
                    <span class="body-rating">Para maiores de 18 anos <span class="material-icons"
                            style="color:#5f6368; font-size:1em; margin-left:4px;">info</span></span>
                </div>
            </div>
        </div>

        <div class="download-app">
            <button>Download</button>
            <div class="add-wishlist">
                <span class="header_btnContentAddFavBtn_icon__80TSv" aria-hidden="true"><svg width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M7 3H17C18.1045 3 19 3.8955 19 5V21L12 18L5 21L5.01075 5C5.01075 3.8955 5.8965 3 7 3ZM12 15.824L17 18V5H7V18L12 15.824ZM13 7V9H15V11H13V13H11V11H9V9H11V7H13Z">
                        </path>
                    </svg></span>
                <span class="add-wishlist-text">Adicionar à lista de desejos</span>
            </div>
            <div class="app-available">
                <span class="material-symbols-outlined">
                    devices
                </span>
                <span>Este app está disponível para todos os seus dispositivos</span>
            </div>
        </div>
    </header>