<?php 
/* this is used for the articles single page */


$ancestors = get_post_ancestors( $post->ID );

/* Get the top Level page->ID count base 1, array base 0 so -1 */ 
$parent = ($ancestors) ? $ancestors[0]: $post->ID;
$pagelist = get_pages('child_of='. $parent .'&sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
   $pages[] += $page->ID;
}
$current = array_search(get_the_ID(), $pages);
$prevID = ( isset($pages[$current-1]) ) ? $pages[$current-1] : '';
$nextID = ( isset($pages[$current+1]) ) ? $pages[$current+1] : '';
?>

<nav id="pagination">
    <?php if (!empty($prevID)) { ?>
    <div class="alignleft">
    <a href="<?php echo get_permalink($prevID); ?>"
      title="<?php echo get_the_title($prevID); ?>" class="previous-page"><?php  echo get_the_title($prevID); ?></a>
    </div>
    <?php }
    if (!empty($nextID)) { ?>
    <div class="alignright">
    <a href="<?php echo get_permalink($nextID); ?>" 
     title="<?php  echo get_the_title($nextID); ?>" class="next-page"><?php echo get_the_title($nextID); ?></a>
    </div>
    <?php } ?>
</nav><!-- #pagination -->