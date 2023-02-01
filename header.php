<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- Style-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <title>Document</title>
</head>

<body>
    <!-- navbar-->
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'navegacion',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">%3$s</ul>',
                        'menu_class' => 'nav-item'
                    )
                ); ?>
            </div>
        </nav>
    </div>
    <!-- end navbar -->
    <!-- subscribe-->
    <div class="container-fluid subscribe d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1>Lorem ipsum dolor sit</h1>
        </div>
        <form action="" class="flex-column flex-sm-row d-flex justify-content-center align-items-center">
            <div class="form-group col me-sm-2">
                <input type="text" placeholder="Nombre" class="form-control ">
            </div>
            <div class="form-group col me-sm-2">
                <input type="text" placeholder="Email" class="form-control ">
            </div>
            <div class="form-group col-md-auto">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- end subscribe-->


