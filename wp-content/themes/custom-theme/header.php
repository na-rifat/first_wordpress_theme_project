<html>
<head>   
    <?php wp_head(); ?>
    <!-- bootstrap -->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <title>Wordpress practice</title>


</head>
<body>

<header class="w-100 bg-dark" >
<div class="container header-container">
    <h1 class="h4 text-light">Wordpress practice</h1>
    <?php 
        wp_nav_menu(array(
            'menu_class' => 'header-menu'
        ));    
    ?>
</div>
</header>
