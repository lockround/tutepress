<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lockrounds
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(is_archive()) : ?><div class="col-md-10 col-sm-12 col-xs-12 blog_post"> <?php else: echo ""; endif; ?>
	<div class="entry-header-wrapper" style="background-image: url('<?php do_action('single-post-header'); ?>'); background-size: cover;">
	<header class="entry-header">
		<?php
          

         if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!--<?php lockrounds_posted_on(); ?>--><?php lockrounds_meta_entry_cats(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;


		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		 ?>
	</header><!-- .entry-header --></div>

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lockrounds' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lockrounds' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


	<?php if(is_single()) :  ?>

	<div class="after_post clearfix">
		<div class="col-md-6 author_details">

			<div class="col-md-4"></div>



                        <?php 
                        // Detect if it is a single post with a post author
                          if ( is_single() && isset( $post->post_author ) ) {
                          // Get author's display name 
                           $display_name = get_the_author_meta( 'display_name', $post->post_author );
                           // If display name is not available then use nickname as display name
                           if ( empty( $display_name ) )
                           $display_name = get_the_author_meta( 'nickname', $post->post_author );
                           // Get author's biographical information or description
                           $user_description = get_the_author_meta( 'user_description', $post->post_author );
                           // Get author's website URL 
                            $user_website = get_the_author_meta('url', $post->post_author);
                            // Get link to the author archive page
                            $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

                            $user_avatar = get_avatar( get_the_author_meta('user_email') , 90 );
 
                             if ( ! empty( $display_name ) )
                            $author_details = '<div class="avatar">' . $user_avatar . '</div>';

                             $author_details .= '<div class="authorinfo"><h3>' . $display_name .'</h3>';
                             if ( ! empty( $user_description ) )
                             // Author avatar and bio
                             	$author_details .= $user_description;
                             	// Check if author has a website in their profile
                             if ( ! empty( $user_website ) ) {
                             // Display author website link
                             	$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
                             } else { 
                             // if there is no author website then just close the paragraph
                             	$author_details .= '</div>';
                             }
                             // Pass all this info to post content  
                             $content = $content.' '.$author_details;
                         }
                         echo $content;
                         ?>
           </div>
           <div class="col-md-6 site-detail">
                <h3>About Us</h3>
                <p>This website is designed and developed by shubham tiwari.</p>
            </div>
    </div> 
         	
         	<?php else :
         	       echo "";
         	       endif;  
         	  ?>
    
	             <?php if(is_archive()) : ?>
                   <footer class="entry-footer">
		
                    <?php do_action('navig'); ?> 
                       <hr>
		               <!-- <?php lockrounds_entry_footer(); ?> -->
		               <div class="read-more-link"><a href="<?php the_permalink(); ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a></div>
	               </footer>
                 <?php else: echo ""; endif; ?>
	
<?php if(is_archive()) : ?></div><?php else: echo ""; endif; ?>
</article><!-- #post-## -->