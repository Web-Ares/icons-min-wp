
<?php if(!is_page_template('page-thx-down.php')):?>
<!-- site__footer -->
<footer class="site__footer">

    <!-- site__footer-layout -->
    <div class="site__footer-layout">
        <p>Copyright © 2016 Icons Mind. All rights reserved</p>
    </div>
    <!-- /site__footer-layout -->

</footer>
<!-- /site__footer -->
<?php endif; ?>
<?php wp_footer(); ?>
</div>
<!-- /site -->

<!-- popup -->
<div class="popup">

    <!-- popup__wrap -->
    <div class="popup__wrap">

        <!-- popup__content -->
        <div class="popup__content popup__video">

            <!-- video-popup__content -->
            <div class="video-popup__content">

                <span class="popup__close">close</span>

                <div class="video-popup__frame">
                    <div>
                        <iframe id="player" type="text/html" width="640" height="390"
                                src="https://www.youtube.com/embed/lcFYdgZKZxY?enablejsapi=1"
                                frameborder="0"></iframe>
                    </div>
                </div>

            </div>
            <!-- /video-popup__content -->

        </div>
        <!-- /popup__content -->

    </div>
    <!-- /popup__wrap -->

</div>
<!-- /popup -->



<script>

    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {

        });
    }

    $('[data-popup="video"]').on({
        click: function() {
            player.playVideo();
        }
    });

    $( '.popup, .popup__close, .popup__cancel' ).on({
        click: function() {
            player.pauseVideo();
        }
    });


</script>
</body>
</html>
