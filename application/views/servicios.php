<script type="text/javascript">
$(function() {
    $("#accordion" ).accordion();

    $("#slider1").bxSlider({
        auto: true,
        slideWidth: 350
    });
      
    $("#slider2").bxSlider({
        auto: true,
        slideWidth: 350
    });
    
    $("#slider3").bxSlider({
        auto: true,
        slideWidth: 350
        pause: 1000
    });

    $("#slider4").bxSlider({
        auto: true,
        pause: 1000,  
        slideWidth: 350
    });  

});
</script>

<br />
<br />

<h1>Servicios Incluidos</h1>
<br />

<div id="accordion">
    <h3>Ubicacion</h3>
    <div>
        <div class="left">
            <p>Ubicada a 17km del centro de la ciudad de Salta sobre ruta 51 en la 
            zona de San Luis y a 7km del Aeropuerto. 
            </p> 

            <p>Cuenta con una superficie total de 3.400 m2 de los cuales
            1.000m2 estan cubiertos. 
            </p>
            <p>Dispone de cochera para 4 vehiculos de tama�o medianos.</p>
        </div>

        <div class="right">
            <ul class="slider" id="slider1">
                <li><img src="<?=base_url();?>media/images/servicios/mapa.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/sanluis.jpg"></li>
            </ul>
        </div>
        <div style="clear:both;"></div>
    </div>
   

    <h3>Confort</h3>
    <div class="">
        <div class="left">
            <p>Cocina completa con heladera, microondas, horno a gas, asador, 
            vajilla completa, dispenser de Agua.</p>
        
            <p>Aire Acondicionado y calefaci�n en todos los ambientes.</p>
            <p>Tv (Direct TV) en cada habitacion.</p>
            <p>Coneccion WiFi de Internet </p>
        </div>

        <div class="right">
            <ul class="slider" id="slider2">
                <li><img src="<?=base_url();?>media/images/servicios/P1030764.jpg"></li>
            </ul>
             <div style="clear:both;"></div>
         </div>
         
        
    </div>
    

    <h3>Habitaciones</h3>
    <div class="">
        <div class="left">
            <p>Capacidad para 12 personas: 2 camas matrimoniales, 4 cuchetas.</p>
            <p>Numero de Dormitorios: 2</p>
            <p>Incluye, ropa de cama y toallas.</p>
            <p>Ba�os: 5</p>
        </div>
        <div class="right">
            <ul class="slider" id="slider3">
                <li><img src="<?=base_url();?>media/images/servicios/P1030751.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030752.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030753.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030755.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030756.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030757.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030758.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030759.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030760.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030761.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030762.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030763.jpg"></li>
                <li><img src="<?=base_url();?>media/images/servicios/P1030764.jpg"></li>
            </ul>
        </div>
        <div style="clear:both;"></div>
    </div>
    

    <h3>Entretenimiento</h3>
    <div class="">
        <div class="left">
            <p>Mesa de Pool</p>
            <p>Metegol</p>
            <p>Juego de Sapo</p>
            <p>Mesa de Ping Pong</p>
            <p>Canchas de Futbol y Volleyball con Iluminacion</p>
        </div>
        <div class="right">
            <ul class="slider" id="slider4">
                <li><img src="<?=base_url();?>media/images/servicios/P1030764.jpg"></li>
            </ul>
             <div style="clear:both;"></div>
         </div>
         
        
        
    </div>
</div>

<br />
<br />
<br />

