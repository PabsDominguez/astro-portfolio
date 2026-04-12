<?php snippet('header') ?>
<script src="https://use.typekit.net/fio0tcc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>from the past!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div class="page about">
    <div class="wrapper">
      <header id="mainheader" class="clearfix ">
        <h1 class="logo gallery"><a href="http://tinybigstudio.com">
          <svg width="107" height="112" viewBox="0 0 167 172" xmlns="http://www.w3.org/2000/svg">
            <title>
              Logo
            </title>
            <path d="M109.9 46.36l.046-.047L63.633 0l-44.3 44.3c-24.465 24.465-24.465 64.132 0 88.598 24.467 24.466 64.134 24.466 88.6 0 23.79-23.79 24.444-61.954 1.966-86.538zM67.66 92.748c-2.223 2.224-5.83 2.224-8.054 0s-2.224-5.83 0-8.054c2.224-2.225 5.83-2.225 8.055 0 2.225 2.224 2.225 5.83 0 8.054zm32.716-40.07l-.01-.01L64.13 16.43l-8.053 8.054 16.11 16.11-28.192 28.19c-11.12 11.12-11.12 29.15 0 40.272 11.12 11.12 29.152 11.12 40.272 0 11.12-11.12 11.12-29.152 0-40.272-1.38-1.38-2.865-2.587-4.43-3.624l-8.34 8.34c1.704.816 3.304 1.926 4.716 3.338 6.672 6.672 6.673 17.49 0 24.163-6.672 6.673-17.49 6.673-24.163 0-6.673-6.672-6.673-17.49 0-24.163l28.19-28.19 12.082 12.08v.002c15.57 15.57 15.57 40.81 0 56.38s-40.812 15.57-56.38 0c-15.57-15.57-15.57-40.812 0-56.38l20.135-20.137-8.054-8.054-20.137 20.137c-20.017 20.018-20.017 52.472 0 72.49 20.018 20.017 52.473 20.017 72.49 0 20.018-20.018 20.018-52.472 0-72.49z" fill="#17A7DE" fill-rule="evenodd"  />
          </svg>
        </a>
        </h1>
        <nav class="site-nav">
        <ul>
          <li><a href="<?php echo url('principles')?>" class="nav_item_principles">Principles</a> </li>
          <li><a href="<?php echo url('portfolio')?>" class="nav_item_cases">portfolio</a> </li>
          <li><a href="<?php echo url('gallery')?>" class="nav_item_gallery">gallery</a></li>
          <li><a href="<?php echo url('about')?>" class="nav_item_about">about</a></li>
          <li><a href="<?php echo page('blog')->children()->visible()->sortBy('desc')->last()->url()?>" class="nav_item_blog">blog</a></li>
        </ul>
        </nav>
      </header>

      <article class="post">
<br><br>

        <div class="article-text">
        <img src="assets/images/about.gif">
          <div class="article-header">

            <h2 class="about">Hi, I'm Pablo.</h2>
            <p>
            There are a few Pablos, good and bad you might be familiar with, surely <a href="https://www.wikiwand.com/en/Pablo_Escobar">Escobar</a> comes to mind but it's not the best example for our name. My parents decided to name me Pablo in 1974 based in <a href="https://www.wikiwand.com/en/Pablo_Neruda">Pablo Neruda</a>, <a href="https://www.wikiwand.com/en/Pablo_Picasso">Picasso</a> and <a href="https://www.wikiwand.com/en/Pablo_Casals">Casals</a> who all died the previous year. So given the path I've taken, you can read on safely.<br>
           <p>
            I am an interaction and visual designer with an itch for product management,  big thing that will entertain us: 

            </p>            
          </div>


        </div>
</article>
        <br>
        <br>

<?php snippet('footer') ?>
