<!-- Header -->
<header id="header">
    <a href="<?= home_url() ?>" class="title">Hyperspace</a>

    <?php
    wp_nav_menu([
        "theme_location" => "main-menu",
        "container" => "nav"
    ])
    ?>

    <!-- <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html" class="active">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav> -->
</header>