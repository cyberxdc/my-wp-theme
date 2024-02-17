<!DOCTYPE html>
<html lang="en">
<?php get_template_part('includes/header'); ?>
<body>
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="logo me-auto me-lg-0"><a href="index.html">Kelly</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary-menu',
                    'depth'             => 2,
                    'container'         => false,
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var activeItems = document.querySelectorAll('.menu-item.active');
                activeItems.forEach(function(item) {
                    var link = item.querySelector('.nav-link');
                    link.classList.add('active');
                });
            });
        </script>

    </header>
</body>

</html>