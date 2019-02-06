<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../assets/css/materialize.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../../assets/css/test.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>
        <?php echo $title; ?> | BelgianCarClub</title>
</head>

<body>
    <div class="navbar-fixed">
        <nav class="white">
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?php if($this->uri->segment('3')=="home") {echo "#";} else {echo site_url('pages/view/home');}?>" class="brand-logo center"><img src="../../../assets/images/logo.png" alt="Logo van BelgianCarClub" style="height: 75px;"></a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="<?php if($this->uri->segment('3')=="home") {echo "#";} else {echo site_url('pages/view/home');}?>">Home</a></li>
                    <li><a href="<?php if($this->uri->segment('3')=="news") {echo "#";} else {echo site_url('pages/view/news');}?>">News</a></li>
                    <li><a href="<?php if($this->uri->segment('3')=="contact") {echo "#";} else {echo site_url('pages/view/contact');}?>">Contact</a></li>
                </ul>
                <ul id="nav-mobile" class="sidenav">
                    <li><a href="<?php if($this->uri->segment('3')=="home") {echo "#";} else {echo site_url('pages/view/home');}?>">Home</a></li>
                    <li><a href="<?php if($this->uri->segment('3')=="news") {echo "#";} else {echo site_url('pages/view/news');}?>">News</a></li>
                    <li><a href="<?php if($this->uri->segment('3')=="contact") {echo "#";} else {echo site_url('pages/view/contact');}?>">Contact</a></li>
                </ul>
                <a href="#!" data-target="nav-mobile" id="open-sidenav" class="sidenav-trigger primary-color right"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
