<?php
echo '<!DOCTYPE html>';
echo '<html ';
language_attributes();
echo '>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

echo codeHeader();

wp_head(); 

echo '</head>';
echo '<body '; 
body_class(); 
echo '>';
echo codeBody();

echo '<div class="blank-space" style=""></div>';
echo '<header class="header-nav box-shadow bg-accent-secondary w-100" style="top:0;left:0;z-index:10;">';

echo wp_get_attachment_image(9, 'full','',array(
    'class'=>'position-absolute w-100 h-100',
    'style'=>'top:0;left:0;object-fit:cover;object-position:bottom;mix-blend-mode:color-burn;'
));

// echo '<div class="bg-white d-md-none d-block text-center" style="padding:0px 15px;">';
// echo '<div class="container">';
// echo '<div class="row">';
// // echo '<div class="col-6">';
// // echo '<p><small>Call an Expert</small></p>';
// // echo '</div>';

// echo '<div class="col-12">';
// echo '<a class="btn-main" href="tel:+1' . globalPhone() . '" style="padding:10px;font-size:12px;">';
// echo '<div class="d-flex">';
// echo '<svg style="width:15px;margin-right:5px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 267 267">
//   <defs>
//     <style>
//       .cls-1.phone {
//         fill: #2f2f2f;
//       }

//       .cls-1, .cls-2 {
//         stroke-width: 0px;
//       }

//       .cls-2 {
//         fill: #fff;
//       }
//     </style>
//   </defs>
//   <g id="Layer_1-2" data-name="Layer 1">
//     <g>
//       <rect class="cls-2" x="0" width="267" height="267" rx="30" ry="30"/>
//       <path class="cls-1 phone" d="M164.64,54.42c2.63-6.36,9.57-9.74,16.2-7.93l30.08,8.2c5.95,1.64,10.08,7.04,10.08,13.19,0,84.56-68.56,153.12-153.12,153.12-6.15,0-11.55-4.14-13.19-10.08l-8.2-30.08c-1.81-6.63,1.57-13.57,7.93-16.2l32.81-13.67c5.57-2.32,12.03-.72,15.82,3.96l13.81,16.85c24.06-11.38,43.54-30.86,54.92-54.92l-16.85-13.77c-4.68-3.83-6.29-10.25-3.96-15.82l13.67-32.81v-.03Z"/>
//     </g>
//   </g>
// </svg>';

// echo 'Call Now to Speak with an Expert';

// echo '</div>';
// echo '</a>';
// echo '</div>'; // col-6
// echo '</div>'; // row
// echo '</div>'; // container

// echo '</div>'; // outer

echo '<div class="nav" style="padding-top:10px;padding-bottom:10px;">';
echo '<div class="container">';
echo '<div class="row justify-content-between">';

echo '<div class="col-lg-2 col-md-4 col-6 text-center">';

echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '">';
echo '<div class="white" id="logoMain" style="width:50%;transition:all .75s ease-in-out;background:white;width:75px;height:75px;border-radius:50%;padding:5px;background:url(/wp-content/uploads/2024/10/Bg-Texture-02.jpg);background-size:cover;">';
echo '<div style="pointer-events:none;">';
echo logoSVG();
echo '</div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-1 mobile-hidden"></div>';

echo '<div class="col-lg-5 col-6 text-center mobile-hidden d-flex justify-content-end">';

// echo '<a href="' . get_permalink(20) . '" class="text-white h-100 d-block d-flex align-items-center openModalBtn" data-modal-id="servicesMenuModal" style="padding:0px 10px;" title="Services Link">Services<br><svg style="width: 15px;
// height: 15px;
// fill: white;
// padding-left: 10px;
// margin-top:-5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></a>';
// echo '<a href="' . get_permalink(949) . '" class="text-white h-100 d-block d-flex align-items-center" style="padding:0px 10px;" title="About link">Case Studies</a>';
// echo '<a href="' . get_permalink(18) . '" class="text-white h-100 d-block d-flex align-items-center" style="padding:0px 10px;" title="About link">About</a>';
// echo '<a href="' . get_permalink(22) . '" class="text-white h-100 d-block d-flex align-items-center" style="padding:0px 10px;" title="blog link">Blog</a>';
// echo '<a href="' . get_permalink(16) . '" class="text-white h-100 d-block d-flex align-items-center" style="padding:0px 10px;" title="contact link">Contact</a>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0 d-flex h-100 align-items-center justify-content-end'
));

echo '</div>';

// echo '<div class="col-2 desktop-hidden">';
// echo '<a class="btn-main d-flex" href="#" style="padding:5px;font-size:12px;">';
// echo '<div class="d-flex">';
// echo '<svg style="width:15px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 267 267">
//   <defs>
//     <style>
//       .cls-1.phone {
//         fill: #2f2f2f;
//       }

//       .cls-1, .cls-2 {
//         stroke-width: 0px;
//       }

//       .cls-2 {
//         fill: #fff;
//       }
//     </style>
//   </defs>
//   <g id="Layer_1-2" data-name="Layer 1">
//     <g>
//       <rect class="cls-2" x="0" width="267" height="267" rx="30" ry="30"/>
//       <path class="cls-1 phone" d="M164.64,54.42c2.63-6.36,9.57-9.74,16.2-7.93l30.08,8.2c5.95,1.64,10.08,7.04,10.08,13.19,0,84.56-68.56,153.12-153.12,153.12-6.15,0-11.55-4.14-13.19-10.08l-8.2-30.08c-1.81-6.63,1.57-13.57,7.93-16.2l32.81-13.67c5.57-2.32,12.03-.72,15.82,3.96l13.81,16.85c24.06-11.38,43.54-30.86,54.92-54.92l-16.85-13.77c-4.68-3.83-6.29-10.25-3.96-15.82l13.67-32.81v-.03Z"/>
//     </g>
//   </g>
// </svg>';

// echo 'Call Now';

// echo '</div>';
// echo '</a>';
// echo '</div>';

echo '<div class="col-lg-3 col-md-8 justify-content-end col-6 text-white d-md-flex align-items-center">';

// echo '<small>Call Now</small><br>';

// echo '<div class="d-flex align-items-center justify-content-end">';

echo do_shortcode('[button href="tel:+1' . globalPhone() . '" title="phone number link for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '" style="font-size:12px;" class=""]Book a Session[/button]');

// echo '<a href="tel:+1' . globalPhone() . '" class="text-white mobile-hidden" title="phone number for ' . get_bloginfo('name') . ' specializing in ' . get_bloginfo('description') . '" style="padding:10px 0px;">' . globalPhone() . '</a>';
// echo '<div class="d-inline-block mobile-hidden" style="width:28px;height:28px;padding-left:10px;">';
// echo '<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 267 267">
//   <defs>
//     <style>
//       .cls-1.phone {
//         fill: #2f2f2f;
//       }

//       .cls-1, .cls-2 {
//         stroke-width: 0px;
//       }

//       .cls-2 {
//         fill: #fff;
//       }
//     </style>
//   </defs>
//   <g id="Layer_1-2" data-name="Layer 1">
//     <g>
//       <rect class="cls-2" x="0" width="267" height="267" rx="30" ry="30"/>
//       <path class="cls-1 phone" d="M164.64,54.42c2.63-6.36,9.57-9.74,16.2-7.93l30.08,8.2c5.95,1.64,10.08,7.04,10.08,13.19,0,84.56-68.56,153.12-153.12,153.12-6.15,0-11.55-4.14-13.19-10.08l-8.2-30.08c-1.81-6.63,1.57-13.57,7.93-16.2l32.81-13.67c5.57-2.32,12.03-.72,15.82,3.96l13.81,16.85c24.06-11.38,43.54-30.86,54.92-54.92l-16.85-13.77c-4.68-3.83-6.29-10.25-3.96-15.82l13.67-32.81v-.03Z"/>
//     </g>
//   </g>
// </svg>';
// echo '</div>';
// echo '</div>';


echo '<div>';
echo '<a id="mobileMenuToggle" class="openModalBtn nav-toggle" data-modal-id="mobileMenu" title="mobile menu nav toggle for Mark McFarland, P.E. - Expert Witness & Forensic Engineering">';
echo '<div style="padding:10px 0px;">';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

// echo get_search_form();

echo '</div>';



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';


?>