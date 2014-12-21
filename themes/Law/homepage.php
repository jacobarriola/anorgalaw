<?php 
/* 
Template Name: HomePage
*/
?>
<?php get_header(); ?>
<?php if ( get_option('chameleon_featured') == 'on' ) get_template_part('includes/featured'); ?>
<?php if ( get_option('chameleon_quote') == 'on' ) { ?>

<div id="category-name">
  <div id="category-inner">
    <?php if ( get_option('chameleon_quote_one') <> '' ) { ?>
    <h3 style=" font-size: 24px;">155 North Lake Avenue, Suite 800, Pasadena California 91101 | <a href="mailto:info@anorgalaw.com" style=" font-size: 24px;    font-weight: lighter; color:#c59d4e;">info@anorgalaw.com</a></h3>
    <?php } ?>
    <?php if ( get_option('chameleon_quote_two') <> '' ) { ?>
    <?php } ?>
  </div>
</div>
<!-- end .category-name -->
<?php } ?>
<div style=" padding: 0px 48px 0px;">
  <div id="services" class="clearfix">
 
    <div class="clearfix" id="services">
      <div class="service">
        <h3 class="title">LITIGATION</h3>
        <p> The Anorga Law Firm  litigates various types of legal disputes including Contractual Disputes, Real  Property Disputes, Employment Disputes...<a href="<?php echo get_settings('home'); ?>/litigation/">Read more &raquo;</a></p>
      </div>
      <!-- end .service -->
      <div class="service">
        <h3 class="title">TRANSACTIONAL</h3>
        <p> We draft certain types of  legal documents, including Entity Formation, Partnership Formation, Drafting  and Negotiating Contracts or Agreements...<a href="<?php echo get_settings('home'); ?>/transactional/">Read more &raquo;</a></p>
      </div>
      <!-- end .service -->
      <div class="service last"> 
        <h3 class="title">FRANCHISE</h3>
        <p>The Anorga Law Firm counsels both franchisors and franchisees and assists in the establishment of, and becoming a part of, franchise systems.  <a href="<?php echo get_settings('home'); ?>/franchise/">Read more &raquo;</a></p>
      </div>
      <!-- end .service -->
    </div>
    <!-- end .service -->
    
  </div>
</div>
<div id="content" class="clearfix">
  <div id="left-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="entry post clearfix" style="padding-top: 0px;">
      <?php if (get_option('chameleon_page_thumbnails') == 'on') { ?>
      <?php 
					$thumb = '';
					$width = 186;
					$height = 186;
					$classtext = 'post-thumb';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Entry');
					$thumb = $thumbnail["thumb"];
				?>
      <?php if($thumb <> '') { ?>
      <div class="post-thumbnail"> <?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?> <span class="post-overlay"></span> </div>
      <!-- end .post-thumbnail -->
      <?php } ?>
      <?php } ?>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','Chameleon').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php edit_post_link(esc_html__('Edit this page','Chameleon')); ?>
    </div>
    <!-- end .entry -->
    <?php if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
    <?php endwhile; endif; ?>
  </div>
  <!-- end #left-area -->
  <div id="sidebar" style="padding-top: 0px;">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
    <?php endif; ?>
  </div>
  <!-- end #sidebar -->
</div>
<!-- end #content -->
<?php get_footer(); ?>
