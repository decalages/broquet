<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<!-- single.php -->

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container article-container">
			<?php

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content/content', 'single');

                

               

            endwhile; // End of the loop.
            ?>
            </div>
            <aside class="share-stuff">
                <div class="share-content share-show">
                    <ul>

                        <li class="share-element">
                            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()) ?>&url=<?php echo urlencode(get_the_permalink()) ?>" title="Partager sur Twitter" aria-label="Partager sur Twitter" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-twitter">
                                <svg viewBox="0 -47 512.00203 512" xmlns="http://www.w3.org/2000/svg"><path d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0"/></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="share-element">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()) ?>" title="Partager sur Facebook" aria-label="Partager sur Facebook" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-facebook">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="share-element">
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_the_permalink()) ?>" title="Partager sur Linkedin" aria-label="Partager sur Linkedin" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-linkedin">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm-256 406h-60v-210h60zm0-240h-60v-60h60zm210 240h-60v-120c0-16.539062-13.460938-30-30-30s-30 13.460938-30 30v120h-60v-210h60v11.308594c15.71875-4.886719 25.929688-11.308594 45-11.308594 40.691406.042969 75 36.546875 75 79.6875zm0 0"/></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="share-element"> 
                            <a href="https://api.whatsapp.com/send?text=<?php echo rawurlencode(get_the_title()) ?> (<?php echo urlencode(get_the_permalink()) ?>)" title="Partager sur whatsapp" aria-label="Partager sur whatsapp" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-whatsapp">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-140.609375 0-256 115.390625-256 256 0 46.40625 12.511719 91.582031 36.238281 131.105469l-36.238281 124.894531 124.894531-36.238281c39.523438 23.726562 84.699219 36.238281 131.105469 36.238281 140.609375 0 256-115.390625 256-256s-115.390625-256-256-256zm160.054688 364.167969-11.910157 11.910156c-16.851562 16.851563-55.605469 15.515625-80.507812 10.707031-82.800781-15.992187-179.335938-109.5625-197.953125-190.59375-9.21875-40.140625-4.128906-75.039062 9.183594-88.355468l11.910156-11.910157c6.574218-6.570312 17.253906-6.5625 23.820312 0l47.648438 47.652344c3.179687 3.179687 4.921875 7.394531 4.921875 11.90625s-1.742188 8.730469-4.921875 11.898437l-11.90625 11.921876c-13.125 13.15625-13.125 34.527343 0 47.652343l78.683594 77.648438c13.164062 13.164062 34.46875 13.179687 47.652343 0l11.910157-11.90625c6.148437-6.183594 17.632812-6.203125 23.832031 0l47.636719 47.636719c6.46875 6.441406 6.714843 17.113281 0 23.832031zm0 0"/></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
                </aside>

                <div class="comments">
                <?php
                 // If comments are open or we have at least one comment, load up the comment template.
                 if (comments_open() || get_comments_number()) {
                     comments_template();
                 }
                
                ?>
                
                </div>

		</main><!-- #main -->
	</section><!-- #primary -->

	

<?php
get_footer();
