<section class="player wrap" data-player>
  <div class="player__wrap">
    <h2 class="visually-hidden">Player for atmospheric music"</h2>
    <div class="player__playlist">
      <p class="player__playlist-title">All playlists</p>
      <ul class="player__playlist-list" data-playlist-list>
      </ul>
    </div>
    <div class="player__inner">
      <?php $query = new WP_Query(['category_name' => 'playlists']); ?>
      <?php if($query->have_posts()): ?>
        <?php while($query->have_posts()): ?>
          <?php $query->the_post(); ?>
          <div class="player__item" id="<?php the_title(); ?>" data-playlist-name="<?php the_title(); ?>">
            <h2 class="player__item-title"><?php the_title(); ?></h2>
            <p class="player__item-date"><?= get_the_date(); ?></p>
            <p class="player__item-description"><?php the_content(); ?></p>
          </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
