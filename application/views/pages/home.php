<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot"></div>
    <div class="parallax"><img src="../../../images/auto.jpg" alt="First background picture" style="transform: translate3d(-50%, 298.536px, 0px); opacity: 1;"></div>
</div>
<div class="row">
<?php
    $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=7387140897.1677ed0.dc7b60ff409d441a91f2b103755dd359&count=3';
    $output = file_get_contents($url);
    $manage = json_decode($output, true);
    foreach ($manage['data'] as $value) {
        echo '<div class="col s12 m4"><blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="'.$value['link'].'" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"></blockquote></div>';
    }
?>
<script async src="//www.instagram.com/embed.js"></script>
</div>
