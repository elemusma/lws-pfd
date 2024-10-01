<?php

echo get_template_part('lead-magnet/lead-magnet');

echo '<footer>';
echo '<section class="bg-accent-secondary" style="padding-top:50px;padding-bottom:25px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-lg-9 text-center" style="">';
echo do_shortcode('[button href="tel:+1' . globalPhone() . '" class="white" title="phone number link for Mark McFarland, P.E. - Expert Witness & Forensic Engineering"]Speak with an Expert[/button]');
echo do_shortcode('[button href="/wp-content/uploads/2024/04/Mark-McFarland-CV-Not-Retained.pdf" target="_blank" class="white"]CV Download[/button]');
echo do_shortcode('[button href="/contact/" class="white"]Contact Now[/button]');
echo '</div>';
echo '</div>';
echo '</div>';

echo '<hr style="margin:40px auto !important;border-color:#f7f7f7;">';

echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-lg-5 col-md-6 text-white">';
echo '<a href="' . home_url() . '" title="Homepage link for Mark McFarland, P.E. - Expert Witness & Forensic Engineering">';
echo '<div style="width:205px;fill:white;">';
echo logoSVG();
echo '</div>';
echo '</a>';

echo '<p class="">' . companyAbout() . '</p>';

echo '</div>';
echo '<div class="col-lg-3 col-md-6 text-white">';
echo '<p><strong>Expert Witness And Analytic Services</strong></p>';

echo expertWitness();

// wp_nav_menu(array(
//     'menu' => 'Forensic Electrical, Telecom, & Wireless Engineering',
//     'menu_class'=>'menu list-unstyled mb-0'
// ));

echo '</div>';
echo '<div class="col-lg-3 col-md-6 text-white">';
echo '<p><strong>Client Resources</strong></p>';

wp_nav_menu(array(
    'menu' => 'footer',
    'menu_class'=>'menu list-unstyled mb-0'
));

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
// echo '<div class="text-center bg-light" style="padding:15px 45px;">';
//     echo '<div class="d-flex justify-content-center align-items-center">';
//         echo '<small class=""><a href="https://latinowebstudio.com/" target="_blank" rel="noopener noreferrer" title="Web Design, Web Development & SEO done by Latino Web Studio in Denver, CO" style="color:var(--accent-secondary);" class="">Web Design, Web Development & SEO in Denver, CO</a> done by Latino Web Studio</small>';
//     echo '</div>';
// echo '</div>';


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

// echo do_shortcode('[spacer style="height:25px;"]');

echo '<div style="width:100%;max-width:205px;">';
echo '<a href="' . home_url() . '" title="Homepage link for Mark McFarland, P.E. - Expert Witness & Forensic Engineering">';
// echo wp_get_attachment_image(logoImg()['id'],'full','',[
//     'class'=>'w-100 h-auto',
// ]);
echo logoSVG();
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

echo do_shortcode('[spacer style="height:25px;"]');

echo do_shortcode('[button href="tel:+1' . globalPhone() . '" style="margin-left:0;" title="phone number link for Mark McFarland, P.E. - Expert Witness & Forensic Engineering"]Speak with an Expert[/button]');

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