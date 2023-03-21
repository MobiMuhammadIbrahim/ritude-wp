<?php
 

// SOCIAL ICONS SHORTCODE START

function social_icons_function() {
    
$social_icons = "<ul class='social-icons'>";


        if($link = get_theme_mod( 'blank_wordpress_facebook_icon' )){
            $social_icons .=  "<li class='facebook-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-facebook-f'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_instagram_icon' )){
            $social_icons .=  "<li class='instagram-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-instagram'></i>
            </a>
            </li>";
        }

        
        if($link = get_theme_mod( 'blank_wordpress_whatsapp_icon' )){
            $social_icons .=  "<li class='whatsapp-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-whatsapp'></i>
            </a>
            </li>";
        }

        
        if($link = get_theme_mod( 'blank_wordpress_Youtube_icon' )){
            $social_icons .=  "<li class='youtube-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-youtube'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_twitter_icon' )){
            $social_icons .=  "<li class='twitter-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-twitter'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_googleplus_icon' )){
            $social_icons .=  "<li class='google-plus-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-google-plus-g'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_pinterest_icon' )){
            $social_icons .=  "<li class='pinterest-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-pinterest-p'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_linkedin_icon' )){
            $social_icons .=  "<li class='linkedin-icon'>
            <a href=".$link." target='_blank'>
            <i class='fab fa-linkedin'></i>
            </a>
            </li>";
        }

        if($link = get_theme_mod( 'blank_wordpress_rss_icon' )){
            $social_icons .=  "<li class='rss-icon'>
            <a href=".$link." target='_blank'>
            <i class='fas fa-rss'></i>
            </a>
            </li>";
        }
       
			
	$social_icons .= "</ul>";

return $social_icons;
        
        
    
}


add_shortcode('social_icons', 'social_icons_function');


// SOCIAL ICONS SHORTCODE END





// FOOTER CONTACT US SHORTCODE START


function contact_us_function() {
    
$contact_us = "<ul>";
        if ( $phone = get_theme_mod( 'blank_wordpress_phone_footer' )){
            $contact_us .=  "<li class='phone'>CALL:
            <a href='tel:".$phone."'> ".$phone. "</a></li>";
        }

        if($email = get_theme_mod( 'blank_wordpress_email_footer' )){
            $contact_us .=  "<li class='email'>Email:
            <a href='mailto:".$email."'> ".$email." </a></li>";
        }

        
    $contact_us .= "</ul>";

return $contact_us;
        

}


add_shortcode('contact_us', 'contact_us_function');


// FOOTER CONTACT US SHORTCODE END



// FOOTER ADDRESS SHORTCODE START


    


function company_address_function() {
    
    $company_address = "<ul>";
        
    if($google_link = get_theme_mod( 'blank_wordpress_address_footer' )){
              $google_link .=  "";
      }
      
      if($address_txt = get_theme_mod( 'blank_wordpress_address_text_footer' )){
          $company_address .=  "<li class='address-txt'>Address:
          <a href='".$google_link."' target='_blank'> ".$address_txt." </a></li>";
      }

  
          
      $company_address .= "</ul>";
    
    return $company_address;
            
    
    }
    
    
    add_shortcode('$company_address', 'company_address_function');
    


    
// FOOTER ADDRESS SHORTCODE END








?>