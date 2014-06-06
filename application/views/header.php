<!DOCTYPE html>
<html lang="es-ar">
<head>
    <title>Descansar Salta</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/reset.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/styles.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/forms-ui.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/metro-ui-buttons.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/lightbox.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>media/styles/bxslider.css">
    
    <script src="<?=base_url();?>media/scripts/jquery-1.11.0.min.js"></script>
    <script src="<?=base_url();?>media/scripts/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?=base_url();?>media/scripts/lightbox.js"></script>
    <!-- script>
        $.noConflict();
    </script -->
    <script src="<?=base_url();?>media/scripts/jquery.bxslider.js"></script>

    <!-- facebook -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?=$fb_app_id;?>',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/es_LA/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- twitter -->
    <script>
        !function(d,s,id) {
            var js,fjs=d.getElementsByTagName(s)[0];
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src="https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }(document,"script","twitter-wjs");
    </script>
    
</head>

<body>
    <header style="text-align: center">
        <br />
        <br />
        <div class="line">
            <span>z</span>
        </div>
    
        <nav>
        <ul>
        <li><a href="<?=base_url()?>">Casa en Villa don Carlos</a></li>
            <li><a href="<?=base_url();?>disponibilidad">Disponibilidad</a></li>
            <li><a href="<?=base_url();?>fotos">Galeria Imagenes</a></li>
            <li><a href="<?=base_url();?>servicios">Servicios</a></li>
            <li><a href="<?=base_url()?>promociones">Promociones</a></li>
            <li><a href="<?=base_url();?>contacto">Contacto</a></li>
        </ul>
        </nav>
    </header>    
    <section>
        <div class="section">
            
        
