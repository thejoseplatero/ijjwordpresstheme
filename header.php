
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    
    <!-- website meta -->
    <meta name="description" content="Was Born. Been Doing Things Since."/>
    <meta name= "keywords" content="media, culture, entertainment "/>
    <meta name="author" content="i.james.jones"/>
    
    <!-- open graph meta -->
    <meta property="og:title" content"<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="http://ijamesjones.com"/>
    <meta property="og:description" content="Was Born. Been Doing Things Since."/>
    <meta property="og:image" content="http://ijamesjones.com/assets/logo.png"/>
    
    <!-- facebook comments integration -->
    <meta property='fb:app_id' content='297600557043316' />  

    <!-- twitter meta -->
    <meta name="twitter:card" content="i.james.jones">
    <meta name="twitter:site" content="http://ijamesjones.com">
    <meta name="twitter:creator" content="@ijamesjonesTO">
    <meta name="twitter:title" content="i.james.jones">
    <meta name="twitter:description" content="Was Born. Been Doing Things Since">
    <meta name="twitter:image" content="http://ijamesjones.com/assets/logo.png">

    <!-- responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


</head>
  <body <?php body_class(); ?>>
    <div class="wrapper">

      <div class="nav">
       
        <div class="nav-inner">

          
          <div id="logo">
            <a href="#"> <?php bloginfo('name'); ?> </a>
          </div>
     

         <div class="socialStickers">
             <?php display_social_stickers();  ?>
         </div>
         
           <?php wp_nav_menu(array('menu' => 'main' )); ?> 
    
        
        </div>
      </div><!-- navigation -->


      <?php if( is_front_page() ) { ?>
        <div class="header" id="header">


        </div><!-- header -->

        
      <?php } ?>
   

    
   
  
     </div>





