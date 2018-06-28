<nav class="navbar navbar-expand-lg grey-theme-transparent subpage-nav">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="./images/logo.png" alt="CSS Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars white-text"></i>
                            </span>
                        </button>

                <div class="collapse navbar-collapse " id="navbarNav">

                    <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarNav',
                                'menu_class'        => 'navbar-nav nav-fill w-100',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>

                </div>
            </div>
            <!--end of container-->
</nav>




