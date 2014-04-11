<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>
<?php if (has_post_thumbnail()): ?>
<div class="content" style="float: left; width: 70%; ">
<?php $excerpt = get_the_excerpt() ?>
<?php echo mb_substr($excerpt, 0, 300, 'utf-8'); ?>
 ... [<a href="<?php the_permalink(); ?>"><?php echo '閱讀更多'; ?></a>]
</div>
<div class="thumbnail" style="float: right; width: 30%;">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
<?php else: ?>
<div class="content">
<?php $excerpt = get_the_excerpt() ?>
<?php echo mb_substr($excerpt, 0, 300, 'utf-8'); ?>
 ... [<a href="<?php the_permalink(); ?>"><?php echo '閱讀更多'; ?></a>]
</div>
<?php endif; ?>
<div class="clear"></div>
<?php // if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>
