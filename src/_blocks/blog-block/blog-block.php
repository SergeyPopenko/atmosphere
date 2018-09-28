<section class="blog-block wrap" data-blog-section>
  <div class="blog-block__wrap">
    <h2 class="visually-hidden">Blog for atmospheric music"</h2>
    <div class="blog-block__container">
      <div class="blog-block__inner">
        <div class="blog-block__items">
          <?php $query = new WP_Query(['category_name' => 'blog']); ?>
          <?php if($query->have_posts()): ?>
            <?php while($query->have_posts()): ?>
              <div class="blog-block__item">
                <?php $query->the_post(); ?>
                <h3 class="blog-block__item-title"><?php the_title(); ?></h3>
                <div class="blog-block__item-description"><?php the_content(); ?></div>
                <time class="blog-block__item-date"><i> <?= get_the_date(); ?></i></time>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

