<ul class="activity-list-wrapper fadein">
        <?php
        $args = array(
        'post_type' => 'activity',
        'posts_per_page' => 6, /* 表示する数 */
        ); ?>

        <?php $my_query = new WP_Query($args); ?>

        <ul>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <li class="activity-list">
            <time class="day"><?php echo the_time('Y.m.d'); ?></time>
            <span class="title"><?php the_title();?></span>
        </li>

        <?php endwhile; ?>

        </ul>

        <?php wp_reset_postdata(); ?>
</ul>