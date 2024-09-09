<div class="p-12">

    <?php


    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    switch ($uri) {
        case '/':
        case '':
            require 'controllers/home-controller.php';
            break;
        case '/about':
            require 'controllers/about-controller.php';
            break;

        case '/contact':
            require 'controllers/contact-controller.php';
            break;
        case '/notes':
            require 'controllers/notes-controller.php';
            break;
        default:
            require 'views/error-view.php';
            break;
    }

    ?>

</div>