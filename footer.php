<aside id="secondary" class="widget-area col-md-3 order-md-1">
            <div id="block-3" class="widget widget_block">
                <div class="wp-container-1 wp-block-group">
                    <div class="wp-block-group__inner-container">
                        <div class="widget widget_nav_menu">
                            <div class="menu-kse-2022-container">
                                <ul id="menu-kse-2022" class="menu">
                                    <ul id="modal-menu" class="navbar-nav menu-primary-menu">
                                    <?php 
                                        $menu_name = 'menu';
                                        $menu_object = wp_get_nav_menu_object($menu_name);
                                        $menu_items = wp_get_nav_menu_items($menu_object->term_id);
                                        $count = 0;
                                        
                                        if(!empty($menu_items)) {
                                        foreach( $menu_items as $menu_item) {
                                            if ($menu_item->menu_item_parent == 0) {
                                                if($count == 0) {
                                                    echo '
                                                    <li id ="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href ="' . $menu_item->url . '" aria-current="page">' . $menu_item->title . '</a></li>
                                                ';
                                                }
                                                 else {
                                                    echo '
                                                    <li id = "menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href ="' . $menu_item->url . '">' . $menu_item->title . '</a></li>
                                                ';
                                                }
                                                $count = $count + 1;
                                            }
                                            }
                                        }
                                    ?>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Technical Sponsors</h2>



            <h2 style="font-size:22px">IEEE Vietnam Section</h2>



            <figure class="is-layout-flex wp-block-gallery-1 wp-block-gallery aligncenter has-nested-images columns-default is-cropped">
                <div class="wp-block-image">
                    <figure class="aligncenter size-full is-resized"><a href="https://ieeexplore.ieee.org/Xplore/home.jsp"><img decoding="async" loading="lazy" data-id="104" src="http://kse2023.actvn.edu.vn/wp-content/uploads/2022/08/image-4.png" alt="" class="wp-image-104" width="229" height="81" /></a></figure>
                </div>
            </figure>



            <h2>Organizers</h2>



            <h4 style="font-size:22px">Academy of Cryptography Techniques (ACT)</h4>


            <div class="wp-block-image">
                <figure class="aligncenter size-full is-resized"><a href="https://actvn.edu.vn"><img decoding="async" loading="lazy" src="http://kse2023.actvn.edu.vn/wp-content/uploads/2022/08/Logo-Hoc-Vien-Ky-Thuat-Mat-Ma-ACTVN.webp" alt="Học viện Kỹ thuật Mật mã" class="wp-image-159" width="121" height="120" /></a></figure>
            </div>


            <h4 style="font-size:22px">VNU University of Engineering and Technology (VNU-UET)</h4>


            <div class="wp-block-image">
                <figure class="aligncenter size-full is-resized"><a href="https://uet.vnu.edu.vn/"><img decoding="async" loading="lazy" src="http://kse2023.actvn.edu.vn/wp-content/uploads/2023/03/anh-DH-cong-nghe-chuan.jpg" alt="" class="wp-image-645" width="142" height="143" srcset="http://kse2023.actvn.edu.vn/wp-content/uploads/2023/03/anh-DH-cong-nghe-chuan.jpg 224w, http://kse2023.actvn.edu.vn/wp-content/uploads/2023/03/anh-DH-cong-nghe-chuan-150x150.jpg 150w" sizes="(max-width: 142px) 100vw, 142px" /></a></figure>
            </div>


            <h1>Endorsed by</h1>



            <h4 style="font-size:22px">Japan Advanced Institute of Science and Technology (JAIST)</h4>


            <div class="wp-block-image">
                <figure class="aligncenter size-full is-resized"><img decoding="async" loading="lazy" src="http://kse2023.actvn.edu.vn/wp-content/uploads/2022/09/logo-jaist.jpg" alt="" class="wp-image-342" width="135" height="79" /></figure>
            </div>


            <h4 style="font-size:22px">Vietnam Club Faculties Institutes Schools Universities of ICT</h4>


            <div class="wp-block-image">
                <figure class="aligncenter size-full is-resized"><img decoding="async" loading="lazy" src="http://kse2023.actvn.edu.vn/wp-content/uploads/2022/09/fisu_logo.jpg" alt="" class="wp-image-333" width="156" height="148" /></figure>
            </div>
            <div id="block-5" class="widget widget_block">
                <div class="wp-container-7 wp-block-group">
                    <div class="wp-block-group__inner-container"></div>
                </div>
            </div>
            <div id="block-6" class="widget widget_block">
                <div class="wp-container-8 wp-block-group">
                    <div class="wp-block-group__inner-container"></div>
                </div>
            </div>
        </aside><!-- #secondary -->




    </div><!-- #maincolumns -->


    <footer class="site-footer pt-4 pb-2 bg-dark text-white">
        <div class="container">
            <p id="authorship">
                &copy; Copyright 2023 15th IEEE International Conference on Knowledge and Systems Engineering (KSE 2023) . <span class="signature">
                </span>
                <a class="smooth float-end" href="#primary"><span>&uarr;</span>Back</a>
            </p>
        </div>
    </footer> <!-- .site-footer -->

    <style>
        .wp-container-1>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-1>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-1>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-2>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-2>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-2>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-3>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-3>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-3>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-4 {
            display: flex;
            gap: 2em;
            flex-wrap: nowrap;
            align-items: center;
        }

        .wp-container-4>* {
            margin: 0;
        }
    </style>
    <style>
        .wp-container-5>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-5>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-5>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-6>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-6>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-6>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-7>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-7>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-7>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <style>
        .wp-container-8>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .wp-container-8>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .wp-container-8>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <!-- <script src='wp-content/themes/new-icse/assets/js/bootstrap.bundle.min.js' id='bootstrap-script-js'></script>
    <script src='wp-content/themes/new-icse/assets/js/ekiline.js' id='ekiline-layout-js'></script> -->

</body>

</html>

<?php wp_footer(); ?>