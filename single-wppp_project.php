<?php
/* query and print results */


function wppp_show_projects() {
    $args = [
        'post_type'      => 'wppp_project',
        'posts_per_page' => 10,
    ];
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
        ?>
        <div class="entry-content">
            <?php echo'<h1>'; the_title(); echo'</h1>'; ?>
            <?php echo '<p>'; the_content(); echo'</p>'; ?>
        </div>
        <?php
    }
}
add_action('admin_bar_menu', 'wppp_show_projects');
