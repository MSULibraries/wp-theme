<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University Libraries</title>
    <?php wp_head(); ?>
    <?php wp_meta(); ?>
<script>
    $( document ).ready(function() {
        // Replace Search Dropdown with selected category 
        $(".dropdown-item").click(function(){
            var selText = $(this).text();
            $(this).parents('.dropdown').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
        });
    });
</script>
</head>

<body class="">
    <header class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="#">
                        <img class="main-brand" src="<?php bloginfo('template_url') ?>/images/HORIZONTAL_WEB_white.png" alt="University Libraries White Logo">
                    </a>
                </div>
                <div class="col-3  todays-hours">
                    <span class="">
                        <a href="#hours">
                            Open From: 7am – 4:45pm
                        </a>
                    </span>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <span class="mobile-todays-hours">
                <a href="#hours">
                    Open From: 7am – 4:45pm
                </a>
            </span>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/search">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Borrow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/technologies">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="dropdown">

                                <button class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Everything</a>
                                    <a class="dropdown-item" href="#">Discovery</a>
                                    <a class="dropdown-item" href="#">Online Catalog</a>
                                    <a class="dropdown-item" href="#">Databases</a>
                                    <a class="dropdown-item" href="#">E-Journals</a>
                                    <a class="dropdown-item" href="#">Course Reserves</a>
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Search Resources By Category" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
    </header>
    <div class="breadcrumbs container" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display') && !is_front_page())
        {
            bcn_display();
        }?>
    </div>
