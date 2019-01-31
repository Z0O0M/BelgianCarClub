<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot"></div>
    <div class="parallax"><img src="../../../assets/images/auto.jpg" alt="First background picture" style="transform: translate3d(-50%, 298.536px, 0px); opacity: 1;"></div>
</div>
<div class="row">
    <div class="col s10 offset-s1 z-depth-5">
        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center orange-text text-darken-3"><i class="material-icons">shutter_speed</i></h2>
                        <h5 class="center">Double the speed</h5>

                        <p class="light">Your website needs to go online as fast as possible. Luckily, we're ready to get stuff done in any time limit.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center orange-text text-darken-3"><i class="material-icons">accessibility_new</i></h2>
                        <h5 class="center">Double the care</h5>

                        <p class="light">Our projects are not just coded and designed with the future in mind, but are user-friendly, W3 validated and accessible for everyone.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center orange-text text-darken-3"><i class="material-icons">money</i></h2>
                        <h5 class="center">Double the value</h5>

                        <p class="light">Why should you pay top dollar for someone who'll use an overkill Wordpress template? We'll build the website with technology that best fits your vision and ideas, with pricing that is actually fair.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s10 offset-s1">
        <div class="row">
            <div class="col s12 l8 first-col-m"></div>
            <div class="col s12 l4 center">
                <?php
                    $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=7387140897.1677ed0.dc7b60ff409d441a91f2b103755dd359&count=2';
                    $output = file_get_contents($url);
                    $manage = json_decode($output, true);
                    foreach ($manage['data'] as $value) {
                        echo '<div class="z-depth-2" style="margin: auto; min-width: 180px; max-width: 500px"><blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="'.$value['link'].'" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"></blockquote></div>';
                    }
                    //foreach ($manage['data'] as $value) {
                        //echo '<div class="col s12 m4 center"><div class="material-placeholder"><img style="width:'.$value['images']['standard_resolution']['width'].';height:'.$value['images']['standard_resolution']['height'].';" //class="materialboxed col s12" src="'.$value['images']['standard_resolution']['url'].'"/></div></div>';
                    //}
                ?>
            </div>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>
    </div>
</div>
