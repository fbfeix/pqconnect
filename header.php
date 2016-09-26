<head>
  
  <?php		
			
			$requiresWrapping = false;
			
			
			/*
			using different referers
			*/
			
			$refs = array(
				0 => ""
			);
			
			$targetReferer = $refs[rand(0, count($refs)-1)];
			
			if(!empty($_SERVER["HTTP_REFERER"]))
			{				
				if($_SERVER["HTTP_REFERER"] != "")
				{
					if(preg_match("/easyhits4u/", $_SERVER["HTTP_REFERER"]))
					{
						$requiresWrapping = true;
					}
				}
			}
			
		?>
  
  
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/imgs/icon.png" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/normalize/normalize.css">
  
  
  <!-- Facebook Conversion Code for pie-conversion -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6023797095322', {'value':'0.01','currency':'EUR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6023797095322&amp;cd[value]=0.01&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>
  
  
  
  

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" >
  
  
  
    <?php
    wp_head();
    
    ?>
  
