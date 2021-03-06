<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>



<div id="main-home" class="site-header featured-image featured-home">
   <div class="site-featured-image">
      <figure class="post-thumbnail">
      <?php the_post_thumbnail(); ?>			
      </figure>
      <!-- .post-thumbnail -->
      <div class="container entry-header has-discussion">
          <div class="hello">
            <div class="left">
                <img alt="" src="https://0.gravatar.com/avatar/60f3d6e6f89efa314143edc5d281bb88?s=100&amp;d=mm&amp;r=g" srcset="https://0.gravatar.com/avatar/60f3d6e6f89efa314143edc5d281bb88?s=200&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 avatar-home" height="60" width="60">
                <h1 class="entry-title sentence">Bonjour ! <br/>Je suis Stéphane Broquet,<br/> <span
                class="txt-rotate"
                data-period="2000"
                data-rotate='[ "Développeur fullstack.", "Spécialiste marketing.", "Consultant B.I." ]'></span></h1>
               
            </div>
            <div class="right bottom">
                <div class="share-home">
                    <ul>

                        <li class="share-element">
                            <a href="https://twitter.com/stephanebroquet" title="Twitter" aria-label="Twitter" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-twitter">
                                <svg viewBox="0 -47 512.00203 512" xmlns="http://www.w3.org/2000/svg"><path d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0"></path></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="share-element">
                            <a href="https://www.github.com/decalages" title="Github" aria-label="Github" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-github">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-140.609375 0-256 115.390625-256 256 0 119.988281 84.195312 228.984375 196 256v-84.695312c-11.078125 2.425781-21.273438 2.496093-32.550781-.828126-15.128907-4.464843-27.421875-14.542968-36.546875-29.910156-5.816406-9.8125-16.125-20.453125-26.878906-19.671875l-2.636719-29.882812c23.253906-1.992188 43.371093 14.167969 55.3125 34.230469 5.304687 8.921874 11.410156 14.152343 19.246093 16.464843 7.574219 2.230469 15.707032 1.160157 25.183594-2.1875 2.378906-18.972656 11.070313-26.074219 17.636719-36.074219v-.015624c-66.679687-9.945313-93.253906-45.320313-103.800781-73.242188-13.976563-37.074219-6.476563-83.390625 18.238281-112.660156.480469-.570313 1.347656-2.0625 1.011719-3.105469-11.332032-34.230469 2.476562-62.546875 2.984375-65.550781 13.078125 3.867187 15.203125-3.890625 56.808593 21.386718l7.191407 4.320313c3.007812 1.792969 2.0625.769531 5.070312.542969 17.371094-4.71875 35.683594-7.324219 53.726563-7.558594 18.179687.234375 36.375 2.839844 54.464844 7.75l2.328124.234375c-.203124-.03125.632813-.148437 2.035157-.984375 51.972656-31.480469 50.105469-21.191406 64.042969-25.722656.503906 3.007812 14.128906 31.785156 2.917968 65.582031-1.511718 4.65625 45.058594 47.300781 19.246094 115.753906-10.546875 27.933594-37.117188 63.308594-103.796875 73.253907v.015624c8.546875 13.027344 18.816406 19.957032 18.761719 46.832032v105.722656c111.808594-27.015625 196-136.011719 196-256 .003906-140.609375-115.386719-256-255.996094-256zm0 0"/></svg>
                                </span>
                            </span>
                            </a>
                        </li>
                        <li class="share-element">
                            <a href="https://www.linkedin.com/in/stephanebroquet/" title="Linkedin" aria-label="Linkedin" target="_blank">
                            <span class="button-defaultState">
                                <span class="svgIcon svgIcon-linkedin">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm-256 406h-60v-210h60zm0-240h-60v-60h60zm210 240h-60v-120c0-16.539062-13.460938-30-30-30s-30 13.460938-30 30v120h-60v-210h60v11.308594c15.71875-4.886719 25.929688-11.308594 45-11.308594 40.691406.042969 75 36.546875 75 79.6875zm0 0"></path></svg>
                                </span>
                            </span>
                            </a>
                        </li>

                    </ul>
               
                </div>
            </div>

          </div>


      </div>
      <!-- .entry-header -->
   </div>
</div>


	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
            <?php
                if (have_posts()) {

                    // Load posts loop.
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content/home');
                    }

                    // Previous/next page navigation.
                    //themebroquet_the_posts_navigation();
                } else {

                    // If no content, include the "No posts found" template.
                    get_template_part('template-parts/content/content', 'none');
                }
            ?>
            </div>
       
		

		</main><!-- .site-main -->
    </section><!-- .content-area -->

    



<?php
get_footer();
