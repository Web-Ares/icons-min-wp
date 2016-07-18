<?php get_header('default'); ?>

    <!-- site__content -->
    <div class="site__content">
    
        <!-- head-title -->
        <div class="head-title">
    
            <!-- head-title__inner -->
            <div class="head-title__inner">
    
                <h1 class="site__title site__title_5"><?php the_title(); ?></h1>

                <?php if($author_id = get_field( 'choose_the_author' )):
                $author_title = get_the_title($author_id);
                $get_time_format = get_the_date('Y-m-d');
                $get_time = get_the_date('d F Y');
                $thumb_id = get_post_thumbnail_id($author_id);
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0]; ?>

                <!-- head-title__author -->
                <div class="head-title__author">
    
                    <!-- head-title__author__ava -->
                    <div class="head-title__author__ava">
                        <img src="<?= $thumb_url; ?>" alt="ava"/>
                    </div>
                    <!-- /head-title__author__ava -->
    
                    <!-- head-title__author__content -->
                    <div class="head-title__author__content">


                            <!-- head-title__author__name -->
                            <span class="head-title__author__name"><?= $author_title; ?></span>
                            <!-- /head-title__author__name -->


                        <time datetime="<?= $get_time_format; ?>"><?= $get_time; ?></time>
                    </div>
                    <!-- /head-title__author__content -->
    
                </div>
                <!-- /head-title__author -->
                <?php endif; ?>

                <!-- social-networks -->
                <div class="social-networks">
                    <a href="#" target="_blank" class="social-networks__item">
    
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path style="fill:#fff;" d="M296.296,512H200.36V256h-64v-88.225l64-0.029l-0.104-51.976C200.256,43.794,219.773,0,304.556,0h70.588v88.242h-44.115
                                        c-33.016,0-34.604,12.328-34.604,35.342l-0.131,44.162h79.346l-9.354,88.225L296.36,256L296.296,512z"/>
                                </svg>
    
                    </a>
                    <a href="#" target="_blank" class="social-networks__item">
    
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;"
                             xml:space="preserve">
                                    <path style="fill:#fff;" d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
            c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
            c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
            c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
            c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
            c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
            c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
            C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                                </svg>
    
                    </a>
                    <a href="#" target="_blank" class="social-networks__item">
    
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 508.52 508.52" style="enable-background:new 0 0 508.52 508.52;" xml:space="preserve">
                                    <path style="fill:#fff;" d="M277.588,39.442H144.547c-59.624,0-115.752,45.195-115.752,97.54
                                        c0,53.49,40.65,96.682,101.354,96.682l12.332-0.381c-3.941,7.532-6.77,16.018-6.77,24.854c0,14.874,8.009,26.92,18.116,36.741
                                        l-23.074,0.254C56.859,295.1,0,342.202,0,390.956c0,48.087,62.357,78.121,136.22,78.121c84.224,0,130.753-47.801,130.753-95.856
                                        c0-38.52-11.378-61.626-46.53-86.48c-12.014-8.518-35.024-29.208-35.024-41.381c0-14.27,4.068-21.294,25.553-38.075
                                        c21.993-17.194,37.567-41.381,37.567-69.477c0-33.467-14.906-66.108-42.906-76.85h42.175L277.588,39.442z M231.154,364.958
                                        c1.049,4.45,1.621,8.994,1.621,13.73c0,38.87-25.013,69.19-96.809,69.19c-51.074,0-87.942-32.323-87.942-71.161
                                        c0-38.044,45.735-69.699,96.809-69.19c11.918,0.159,23.042,2.034,33.117,5.308C205.664,332.063,225.56,342.965,231.154,364.958z
                                         M149.378,220.094c-34.293-1.017-66.87-38.361-72.782-83.365c-5.912-45.036,17.067-79.488,51.329-78.471
                                        c34.262,1.017,66.87,37.154,72.782,82.158C206.65,185.451,183.639,221.111,149.378,220.094z"/>
                            <polygon style="fill:#fff;" points="413.172,133.741 413.172,39.442 381.39,39.442 381.39,133.741 286.042,133.741
                                        286.042,165.523 381.39,165.523 381.39,261.919 413.172,261.919 413.172,165.523 508.52,165.523 508.52,133.741 			"/>
                                </svg>
    
                    </a>
                </div>
                <!-- /social-networks -->
    
            </div>
            <!-- /head-title__inner -->
    
        </div>
        <!-- /head-title -->
    
        <!-- blog -->
        <div class="blog">
    
            <!-- social -->
            <div class="social-blog">
                <a href="#" target="_blank" class="social-blog__item social-blog__item_fc">
    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path style="fill:#fff;" d="M296.296,512H200.36V256h-64v-88.225l64-0.029l-0.104-51.976C200.256,43.794,219.773,0,304.556,0h70.588v88.242h-44.115
                                        c-33.016,0-34.604,12.328-34.604,35.342l-0.131,44.162h79.346l-9.354,88.225L296.36,256L296.296,512z"/>
                                </svg>
    
                </a>
                <a href="#" target="_blank" class="social-blog__item social-blog__item_tw">
    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;"
                         xml:space="preserve">
                                    <path style="fill:#fff;" d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
            c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
            c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
            c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
            c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
            c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
            c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
            C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                                </svg>
    
                </a>
                <a href="#" target="_blank" class="social-blog__item social-blog__item_gp">
    
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve" width="512px" height="512px">
                                <path d="M377.472,224.957H201.319v58.718H308.79c-16.032,51.048-63.714,88.077-120.055,88.077     c-69.492,0-125.823-56.335-125.823-125.824c0-69.492,56.333-125.823,125.823-125.823c34.994,0,66.645,14.289,89.452,37.346     l42.622-46.328c-34.04-33.355-80.65-53.929-132.074-53.929C84.5,57.193,0,141.693,0,245.928s84.5,188.737,188.736,188.737     c91.307,0,171.248-64.844,188.737-150.989v-58.718L377.472,224.957L377.472,224.957z" fill="#FFFFFF"/>
                        <polygon points="491.858,224.857 455.827,224.857 455.827,188.826 424.941,188.826 424.941,224.857 388.91,224.857      388.91,255.74 424.941,255.74 424.941,291.772 455.827,291.772 455.827,255.74 491.858,255.74    " fill="#FFFFFF"/>
                            </svg>
    
                </a>
            </div>
            <!-- /social -->
    
            <!-- site__center -->
            <div class="site__center">
    
                <div class="content">
    
                  <?php the_content(); ?>
    
                </div>

                <?php if($author_id): ?>

                <!-- author -->
                <div class="author">
    
                    <!-- author__ava -->
                    <div class="author__ava">
                        <img src="<?= $thumb_url; ?>" width="97" height="97" alt="ava">
                    </div>
                    <!-- /author__ava -->


                    <!-- author__content -->
                    <div class="author__content">
    
                        <!-- author__name -->
                        <span class="author__name">By <?= $author_title; ?></span>
                        <!-- /author__name -->
                        <?= get_field('authors_description',$author_id); ?>
                    </div>
                    <!-- /author__content -->

                </div>
                <!-- /author -->
                <?php endif; ?>

                <!-- comments -->
                <div class="comments">
                    
                    <!-- comments__frame -->
                    <div class="comments__frame">

                        <?php echo do_shortcode('[fbcomments]'); ?>

                    </div>
                    <!-- /comments__frame -->

                </div>
                <!-- /comments -->

                <?= similar_posts($post->ID);
                    adoric_post_nav(); ?>
    
            </div>
            <!-- /site__center -->
    
        </div>
        <!-- /blog -->
    
    </div>
    <!-- /site__content -->
    
<?php get_footer('default'); ?>