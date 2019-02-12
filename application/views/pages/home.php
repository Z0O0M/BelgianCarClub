<div class="parallax-container center">
    <div class="container">
        <div class="col s12 white-text animatable fadeInDown" style="margin-top: 10%;">
            <h2>Belgian Car Club</h2>
            <p><?php echo $this->lang->line('msg_parallax_slogan'); ?></p>
        </div>
    </div>
    <div class="parallax">
        <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/30712985_2063045417317655_4786593008164274176_o.jpg?_nc_cat=109&_nc_ht=scontent-bru2-1.xx&oh=45b357eeae12bcc284b9f1501c595a1a&oe=5CB9C5BA">
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 animatable bounceInLeft">
                <div class="icon-block">
                    <h2 class="center cyan-text text-darken-3"><i class="material-icons medium">people</i></h2>
                    <h5 class="center"><?php echo $this->lang->line('msg_community_title'); ?></h5>
                    <p class="light"><?php echo $this->lang->line('msg_community_text'); ?></p>
                </div>
            </div>

            <div class="col s12 m4 animatable bounceIn">
                <div class="icon-block">
                    <h2 class="center cyan-text text-darken-3"><i class="material-icons medium">photo_camera</i></h2>
                    <h5 class="center"><?php echo $this->lang->line('msg_photography_title'); ?></h5>
                    <p class="light"><?php echo $this->lang->line('msg_photography_text'); ?></p>
                </div>
            </div>

            <div class="col s12 m4 animatable bounceInRight">
                <div class="icon-block">
                    <h2 class="center cyan-text text-darken-3"><i class="material-icons medium">calendar_today</i></h2>
                    <h5 class="center"><?php echo $this->lang->line('msg_events_title'); ?></h5>
                    <p class="light"><?php echo $this->lang->line('msg_events_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="carousel carousel-slider z-depth-5">
    <?php echo $instagram_feed?>
</div>
<div class="section">
    <div class="container">
        <h3 class="center">FAQ</h3>
        <ul class="collapsible popout">
        <?php
            $questions = $this->lang->line('msg_faq_questions');
            $answers = $this->lang->line('msg_faq_answers');
            $count = 0;
            foreach ($questions as $value) {
                $count += 1;
                echo '<li><div class="collapsible-header black-text" tabindex="0"><i class="material-icons">expand_more</i>'.$questions['msg_faq_q'.$count].'</div><div class="collapsible-body black-text"><span>'.$answers['msg_faq_a'.$count].'</span></div></li>';
        }
        ?>
        </ul>
    </div>
</div>
<script src="../../../assets/js/parallax.js"></script>