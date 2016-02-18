<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Sean Feil - Web Software Developer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sean.css" rel="stylesheet">
    <!--[if lt IE 9]>k,
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      window.base_url='<?=base_url() ?>'
    </script>
  </head>
  <body<?php if($this->uri->segment(1) == "skills") { echo(" data-spy=\"scroll\" data-offset=\"150\""); } ?>>
    <header id="topbar">
      <p id="name"><a href="<?=base_url() ?>about">Sean Feil</a></p>
      <div id="navhamburger">
          <svg viewBox="0 0 800 600">
            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
            <path d="M300,320 L540,320" id="middle"></path>
            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
          </svg>
          <span id="menuword">Menu</span>
      </div>
      <div class="external-link-buttons hidden-xs" id="elb-full">
        <a href="https://www.linkedin.com/in/seanfeil" style="text-decoration:none;"><span><img src="content/Linkedin.png" width="20" height="20" alt="View Sean Feil's LinkedIn profile" style="vertical-align:middle;" border="0"></span></a>

        <a href="https://github.com/resorath" style="text-decoration:none;"><span><img src="content/GitHub-Mark-Light-32px.png" width="20" height="20" alt="View Sean Feil's GitHub repositories" style="vertical-align:middle;" border="0"></span></a>


        <a href="https://stackexchange.com/users/227625/" style="text-decoration:none;"><span><img src="content/so-icon.png" width="20" height="20" alt="View Sean Feil's Stack Exchange profile" style="vertical-align:middle;" border="0"></span></a>

      </div>
    </header>

    <nav id="menu" class="nav-hidden">

      <div class="external-link-buttons visible-xs-block" id="elb-mobile">
        <a href="https://www.linkedin.com/in/seanfeil" style="text-decoration:none;"><span><img src="content/Linkedin.png" width="20" height="20" alt="View Sean Feil's LinkedIn profile" style="vertical-align:middle;" border="0"></span></a>

        <a href="https://github.com/resorath" style="text-decoration:none;"><span><img src="content/GitHub-Mark-Light-32px.png" width="20" height="20" alt="View Sean Feil's GitHub repositories" style="vertical-align:middle;" border="0"></span></a>


        <a href="https://stackexchange.com/users/227625/" style="text-decoration:none;"><span><img src="content/so-icon.png" width="20" height="20" alt="View Sean Feil's Stack Exchange profile" style="vertical-align:middle;" border="0"></span></a>

      </div>

      <ul>
        <li><a href="<?=base_url() ?>">About me</a></li>
        <li><a href="<?=base_url() ?>portfolio">Web portfolio</a></li>
        <li><a href="<?=base_url() ?>skills">Technologies and languages</a></li>
        <li><a href="<?=base_url() ?>resume">Resume / CV</a></li>
        <li><a href="<?=base_url() ?>photography">Photography</a></li>
        <li><a href="http://blog.seanfeil.com">Technical blog</a></li>
        <li><a href="<?=base_url() ?>contact">Contact</a></li>
      </ul>
    </nav>