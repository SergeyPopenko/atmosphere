<section class="player">
  <div class="player__inner">
    <?php $query = new WP_Query(['category_name' => 'playlists']); ?>
    <?php if($query->have_posts()): ?>
      <?php while($query->have_posts()): ?>
        <div class="blog-item">
          <?php $query->the_post(); ?>
          <div class="blog-item__title"><?php the_title(); ?></div>
          <p class="blog-item__description"><?php the_content(); ?></p>
          <span class="blog-item_date"><?= get_the_date(); ?></span>
        </div>
        <br>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
