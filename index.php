<?php get_header(); ?>
<header class="page-header">
  <nav class="primary-navigation">
    <div class="primary-navigation-menu-container">
      <ul class="primary-navigation-menu">
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">CV</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <a href="<?= home_url(); ?>"><div class="header-img"></div></a>

  <nav class="social-navigation">
    <div class="social-navigation-menu-container">
      <ul class="social-navigation-menu">
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
        <li><a href="#"><img src="url.png" /></a></li>
      </ul>
    </div>
  </nav>
</header>

<div class="page-container">

  <section class="page-content">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="post">
        <div class="post-date">
          <p class="day"><?= get_the_date('d'); ?></p>
          <p class="month"><?= get_the_date('M'); ?></p>
          <p class="year"><?= get_the_date('Y'); ?></p>
        </div>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
          
          <div class="related-content">
            <div>
              <span>Categories: </span>
              <?php the_category(", "); ?>
            </div>
            <div>
              <?php the_tags(); ?>
            </div>
          </div>
          
          <div class="comment-count">
            <?php comments_number('0','1','%'); ?>
          </div>
        
        </div>
        <?php the_post_thumbnail(); ?>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </section>

  <section class="sidebar">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </section>
  <div class="clearer"></div>
</div>

<div class="clearer"></div>

<footer class="page-footer">
  <div class="footer-container">
    Her er Deas info
  </div>
</footer>


<?php get_footer(); ?>