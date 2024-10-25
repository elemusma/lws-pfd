<?php

// echo get_template_part('lead-magnet/lead-magnet');

echo '<footer>';
echo '<section class="bg-accent-secondary position-relative" style="padding-top:50px;padding-bottom:25px;">';

echo wp_get_attachment_image(9,'full','',array(
    'class'=>'w-100 h-100 position-absolute',
    'style'=>'top:0;left:0;object-fit:cover;mix-blend-mode:color-burn;pointer-events:none;'
));

echo '<div class="container">';
echo '<div class="row justify-content-center">';

// echo '<div class="col-lg-9 text-center" style="">';
// echo do_shortcode('[button href="tel:+1' . globalPhone() . '" class="" title="phone number link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '"]Speak with an Expert[/button]');
// echo do_shortcode('[button href="/wp-content/uploads/2024/04/Mark-McFarland-CV-Not-Retained.pdf" target="_blank" class=""]CV Download[/button]');
// echo do_shortcode('[button href="/contact/" class=""]Contact Now[/button]');
// echo '</div>';
echo '</div>';
echo '</div>';

echo '<hr style="margin:40px auto !important;border-color:#f7f7f7;">';

echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-lg-3 col-md-6 text-center">';
echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '" class="logo-footer d-flex justify-content-center">';

echo '<div class="white" id="logoMain" style="width:50%;transition:all .75s ease-in-out;background:white;width:125px;height:125px;border-radius:50%;padding:5px;background:url(/wp-content/uploads/2024/10/Bg-Texture-02.jpg);background-size:cover;">';
echo '<div style="pointer-events:none;">';
echo logoSVG();
echo '</div>';
echo '</div>';

echo '</a>';

echo '<p class="text-white">' . companyAbout() . '</p>';

echo '<p style="margin-bottom:0px;margin-top:35px;" class="d-flex align-items-center justify-content-center text-white small">Follow Us On <svg style="width:25px;margin-left:15px;" fill="white" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.11 500">
    <g id="Layer_1-2" data-name="Layer 1">
      <path class="" style="" d="M250.11,121.81c-70.96,0-128.19,57.24-128.19,128.19s57.24,128.19,128.19,128.19,128.19-57.24,128.19-128.19-57.24-128.19-128.19-128.19ZM250.11,333.34c-45.86,0-83.34-37.38-83.34-83.34s37.38-83.34,83.34-83.34,83.34,37.38,83.34,83.34-37.49,83.34-83.34,83.34h0ZM413.45,116.56c0,16.62-13.39,29.9-29.9,29.9s-29.9-13.39-29.9-29.9,13.39-29.9,29.9-29.9,29.9,13.39,29.9,29.9ZM498.35,146.91c-1.9-40.05-11.05-75.53-40.39-104.76C428.73,12.91,393.26,3.77,353.2,1.76c-41.28-2.34-165.01-2.34-206.29,0-39.94,1.9-75.42,11.05-104.76,40.28C12.8,71.27,3.77,106.74,1.76,146.8c-2.34,41.28-2.34,165.01,0,206.29,1.9,40.05,11.05,75.53,40.39,104.76,29.34,29.23,64.71,38.38,104.76,40.39,41.28,2.34,165.01,2.34,206.29,0,40.05-1.9,75.53-11.05,104.76-40.39,29.23-29.23,38.38-64.71,40.39-104.76,2.34-41.28,2.34-164.9,0-206.18h0ZM445.02,397.38c-8.7,21.87-25.55,38.71-47.53,47.53-32.91,13.05-111.01,10.04-147.38,10.04s-114.58,2.9-147.38-10.04c-21.87-8.7-38.71-25.55-47.53-47.53-13.05-32.91-10.04-111.01-10.04-147.38s-2.9-114.58,10.04-147.38c8.7-21.87,25.55-38.71,47.53-47.53,32.91-13.05,111.01-10.04,147.38-10.04s114.58-2.9,147.38,10.04c21.87,8.7,38.71,25.55,47.53,47.53,13.05,32.91,10.04,111.01,10.04,147.38s3.01,114.58-10.04,147.38Z"/>
    </g>
  </svg></p>';
  echo do_shortcode('[button href="https://www.instagram.com/prodigy_futbol_development/" target="_blank" class="" style="margin-left:0px;font-size:12px;padding:5px 10px;"]
  <div class="d-flex align-items-center">
  @prodigy_futbol_development
  </div>[/button]');

echo '</div>';
echo '<div class="col-lg-9 col-md-12 text-white">';

// echo expertWitness();

// echo '<div class="row">';
// echo '<div class="col-lg-3 col-md-6">';

// echo '</div>';
// echo '</div>';

echo '<p><strong>Soccer Performance Services</strong></p>';
wp_nav_menu(array(
    'menu' => 'Services',
    'menu_class'=>'menu list-unstyled mb-0 d-flex flex-wrap'
));

echo '<p><strong>About Prodigy Futbol Development</strong></p>';
wp_nav_menu(array(
    'menu' => 'About',
    'menu_class'=>'menu list-unstyled mb-0 d-flex flex-wrap'
));

// wp_nav_menu(array(
//     'menu' => 'Forensic Electrical, Telecom, & Wireless Engineering',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));

echo '</div>';
// echo '<div class="col-lg-3 col-md-6 text-white">';
// echo '<p><strong>Client Resources</strong></p>';

// wp_nav_menu(array(
//     'menu' => 'footer',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));

// echo '</div>';

// echo '<div class="col-12 text-center" style="color:white;">';

// echo '<p style="margin-bottom:0px;" class="d-flex align-items-center justify-content-center">Follow Us on <svg style="width:25px;margin-left:15px;" fill="white" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.11 500">
//   <g id="Layer_1-2" data-name="Layer 1">
//     <path class="" style="" d="M250.11,121.81c-70.96,0-128.19,57.24-128.19,128.19s57.24,128.19,128.19,128.19,128.19-57.24,128.19-128.19-57.24-128.19-128.19-128.19ZM250.11,333.34c-45.86,0-83.34-37.38-83.34-83.34s37.38-83.34,83.34-83.34,83.34,37.38,83.34,83.34-37.49,83.34-83.34,83.34h0ZM413.45,116.56c0,16.62-13.39,29.9-29.9,29.9s-29.9-13.39-29.9-29.9,13.39-29.9,29.9-29.9,29.9,13.39,29.9,29.9ZM498.35,146.91c-1.9-40.05-11.05-75.53-40.39-104.76C428.73,12.91,393.26,3.77,353.2,1.76c-41.28-2.34-165.01-2.34-206.29,0-39.94,1.9-75.42,11.05-104.76,40.28C12.8,71.27,3.77,106.74,1.76,146.8c-2.34,41.28-2.34,165.01,0,206.29,1.9,40.05,11.05,75.53,40.39,104.76,29.34,29.23,64.71,38.38,104.76,40.39,41.28,2.34,165.01,2.34,206.29,0,40.05-1.9,75.53-11.05,104.76-40.39,29.23-29.23,38.38-64.71,40.39-104.76,2.34-41.28,2.34-164.9,0-206.18h0ZM445.02,397.38c-8.7,21.87-25.55,38.71-47.53,47.53-32.91,13.05-111.01,10.04-147.38,10.04s-114.58,2.9-147.38-10.04c-21.87-8.7-38.71-25.55-47.53-47.53-13.05-32.91-10.04-111.01-10.04-147.38s-2.9-114.58,10.04-147.38c8.7-21.87,25.55-38.71,47.53-47.53,32.91-13.05,111.01-10.04,147.38-10.04s114.58-2.9,147.38,10.04c21.87,8.7,38.71,25.55,47.53,47.53,13.05,32.91,10.04,111.01,10.04,147.38s3.01,114.58-10.04,147.38Z"/>
//   </g>
// </svg></p>';
// echo do_shortcode('[button href="/wp-content/uploads/2024/04/Mark-McFarland-CV-Not-Retained.pdf" target="_blank" class=""]
// <div class="d-flex align-items-center">
// @prodigy_futbol_development
// </div>[/button]');
// echo '</div>';

echo '<div class="col-12 text-center" style="color:gray;padding-top:100px;padding-left:40px;padding-right:40px;">';
// echo '<div class="text-center" style="">';
    // echo '<div class="d-flex justify-content-center align-items-center">';
        echo '<small class=""><a href="https://latinowebstudio.com/" target="_blank" rel="noopener noreferrer" title="Web Design, Web Development & SEO done by Latino Web Studio in Denver, CO" style="color:var(--accent-primary);" class="">Web Design &amp; Development in Denver, CO</a> done by Latino Web Studio.</small>';
    // echo '</div>';
// echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

// echo '<section class="pt-5 bg-accent">';
// echo '<div class="container">';
// echo '<div class="row justify-content-center">';
// echo '<div class="col-12">';



// echo '</div>';
// echo '<div class="col-12 text-center text-white">';

// // echo get_template_part('partials/si');

// echo '<div class="text-gray-1 pt-4">';

// // the_field('website_message','options');

// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';



// echo '<div id="servicesMenuModal" class="modal" style="opacity:1;">';
// //   <!-- Modal content -->
// echo '<div class="modal-content" style="background:var(--light);border:none;width:90%;max-width: 1120px;padding:0px;height:0px;transition:all .5s ease-in-out;border-radius:0px;">';
// // echo '<span class="close">&times;</span>';

// echo '<div class="row" style="padding:20px;">';
// echo '<div class="col-lg-6">';
// echo '<p><strong>Forensic Electrical,Telecom, &amp; Wireless Engineering</strong></p>';

// wp_nav_menu(array(
//     'menu' => 'Forensic Electrical, Telecom, & Wireless Engineering',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));

// echo '</div>';
// echo '<div class="col-lg-6">';
// echo '<p><strong>Applied Research &amp; Analytics</strong></p>';

// wp_nav_menu(array(
//     'menu' => 'Applied Research & Analytics',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));

// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';


// <!-- The first Modal -->
echo '<div id="mobileMenu" class="modal mobile-menu">';
//   <!-- Modal content -->
echo '<div class="modal-content-menu modal-content" style="background:var(--accent-secondary);padding-top:50px;">';
echo '<span class="close" id="navMenuClose">&times;</span>';

echo wp_get_attachment_image(9,'full','',array(
    'class'=>'w-100 h-100 position-absolute',
    'style'=>'top:0;left:0;object-fit:cover;mix-blend-mode:color-burn;pointer-events:none;'
));

// echo do_shortcode('[spacer style="height:25px;"]');

echo '<div style="width:100%;max-width:205px;">';
echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '" class="logo-footer d-flex justify-content-center">';

echo '<div class="white" id="logoMain" style="width:50%;transition:all .75s ease-in-out;background:white;width:125px;height:125px;border-radius:50%;padding:15px;background:url(/wp-content/uploads/2024/10/Bg-Texture-02.jpg);background-size:cover;">';
echo '<div style="pointer-events:none;">';
echo logoSVG();
echo '</div>';
echo '</div>';

echo '</a>';
echo '</div>';

echo do_shortcode('[spacer style="height:45px;"]');

// echo '<a href="/">Home</a>';

// <!-- <div class="accordions"> -->
// echo '<div class="accordion-nav expert-witness">';
// echo '<p class="button text-white" style="cursor:pointer;margin-bottom:0;">Forensic Electrical, Telecom, &amp; Wireless Engineering <svg style="width: 15px;
// fill: white;
// transform: translate(5px, 2px);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></p>';
// echo '<div class="accordion-nav-content">';
// echo '<div class="accordion-nav-content-inner">';

// echo '<div style="padding-left:15px;">';
// wp_nav_menu(array(
//     'menu' => 'Forensic Electrical, Telecom, & Wireless Engineering',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));
// echo '</div>';

// echo '</div>';
// echo '</div>';
// echo '</div>';

// echo '<div class="accordion-nav applied-research">';
// echo '<p class="button text-white" style="cursor:pointer;margin-bottom:0;">Applied Research & Analytics <svg style="width: 15px;
// fill: white;
// transform: translate(5px, 2px);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></p>';
// echo '<div class="accordion-nav-content">';
// echo '<div class="accordion-nav-content-inner">';

// echo '<div style="padding-left:15px;">';
// wp_nav_menu(array(
//     'menu' => 'Applied Research & Analytics',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));
// echo '</div>';

// echo '</div>';
// echo '</div>';
// echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0'
));

wp_nav_menu(array(
    'menu' => 'About',
    'menu_class'=>'menu list-unstyled mb-0'
));

echo do_shortcode('[spacer style="height:25px;"]');

echo do_shortcode('[button href="/schedule-session/" title="phone number link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '" style="font-size:12px;margin:0px;" class=""]Schedule a Session[/button]');

echo '</div>';
echo '</div>';
// end of mobile nav menu


echo '</footer>';


echo codeFooter();
// if(get_field('footer', 'options')) { the_field('footer', 'options'); }
// if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>