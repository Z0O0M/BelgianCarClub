<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../assets/css/materialize.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/animations.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <script src="../../../assets/js/jquery-3.3.1.js"></script>
    <title>
        <?php echo $title; ?> | BelgianCarClub</title>
</head>

<body>
    <div class="navbar-fixed">
        <nav class="white">
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?php if($this->uri->segment('3')==" home") {echo "#" ;} else {echo site_url('pages/view/home');}?>" class="brand-logo center"><img src="../../../assets/images/logo.png" alt="Logo van BelgianCarClub" style="height: 75px;"></a>
                <ul class="hide-on-med-and-down left">
                    <li><a href="<?php if($this->uri->segment('3')==" home") {echo "#" ;} else {echo site_url('pages/view/home');}?>">Home</a> </li> <li><a href="<?php if($this->uri->segment('3')==" news") {echo "#" ;} else {echo site_url('pages/view/news');}?>">News</a> </li> <li><a href="<?php if($this->uri->segment('3')==" events") {echo "#" ;} else {echo site_url('pages/view/events');}?>">Events</a> </li> <li><a href="<?php if($this->uri->segment('3')==" contact") {echo "#" ;} else {echo site_url('pages/view/contact');}?>">Contact</a> </li> </ul> <ul class="hide-on-med-and-down right">
                    <li><a class="dropdown-trigger" data-target="dropdown-language">
                            <?php echo $this->lang->line('language_abbrevation'); ?>
                        </a>
                        <ul id="dropdown-language" class="dropdown-content">
                            <?php if ($this->lang->line('language') != "English") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/english'); echo '">EN</a></li>';}?>
                            <?php if ($this->lang->line('language') != "Nederlands") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/nederlands'); echo '">NL</a></li>';}?>
                            <?php if ($this->lang->line('language') != "Français") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/francais'); echo '">FR</a></li>';}?>
                        </ul>
                    </li>
                    <li><a href="<?php if(!$this->session->userdata('id')) { echo site_url('login/index'); } else { echo site_url('logout/index'); } ?>"><?php if(!$this->session->userdata('id')) { echo "Login/Register"; } else { echo "Logout"; } ?></a></li>
                </ul>
                <ul id="nav-mobile" class="sidenav">
                    <li><a href="<?php if($this->uri->segment('3')==" home") {echo "#" ;} else {echo site_url('pages/view/home');}?>">Home </a> </li> <li><a href="<?php if($this->uri->segment('3')==" news") {echo "#" ;} else {echo site_url('pages/view/news');}?>">News </a> </li> <li><a href="<?php if($this->uri->segment('3')==" events") {echo "#" ;} else {echo site_url('pages/view/events');}?>">Events </a> </li> <li><a href="<?php if($this->uri->segment('3')==" contact") {echo "#" ;} else {echo site_url('pages/view/contact');}?>">Contact </a> </li> <li><a class="dropdown-trigger" data-target="dropdown-language-nav">
                                            <?php echo $this->lang->line('language'); ?></a>
                                        <ul id="dropdown-language-nav" class="dropdown-content">
                                            <?php if ($this->lang->line('language') != "English") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/english'); echo '">English</a></li>';}?>
                                            <?php if ($this->lang->line('language') != "Nederlands") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/nederlands'); echo '">Nederlands</a></li>';}?>
                                            <?php if ($this->lang->line('language') != "Français") { echo '<li><a href="'; echo site_url('LanguageSwitcher/switchLang/francais'); echo '">Français</a></li>';}?>
                                        </ul>
                    </li>
                </ul>
                <a href="#!" data-target="nav-mobile" id="open-sidenav" class="sidenav-trigger primary-color right"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
