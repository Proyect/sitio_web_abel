<script type="text/javascript">
$(document).ready(function(){
    loadSliders();
    loadAcordion();    
});

function loadSliders() {    
    $("#slider").bxSlider({
        auto: true,
        slideWidth: 450
    });
}

function loadAcordion() {
    $("#accordion" ).accordion();
}

</script>

<br />
<br />

<h1>Servicios Incluidos</h1>
<br />

<div id="accordion" class="left">
    <h3>Ubicacion</h3>
    <div>
            <p>Ubicada a 17km del centro de la ciudad de Salta sobre ruta 51 en la 
            zona de San Luis y a 7km del Aeropuerto. 
            </p> 

            <p>Cuenta con una superficie total de 3.400 m2 de los cuales
            1.000m2 estan cubiertos. 
            </p>
            <p>Dispone de cochera para 4 vehiculos de tamaño medianos.</p>
    </div>
   

    <h3>Confort</h3>
    <div class="">
            <p>Cocina completa con heladera, microondas, horno a gas, asador, 
            vajilla completa, dispenser de Agua.</p>
        
            <p>Aire Acondicionado y calefación en todos los ambientes.</p>
            <p>Tv (Direct TV) en cada habitacion.</p>
            <p>Coneccion WiFi de Internet </p>
    </div>
    

    <h3>Habitaciones</h3>
    <div class="">
            <p>Capacidad para 12 personas: 2 camas matrimoniales, 4 cuchetas.</p>
            <p>Numero de Dormitorios: 2</p>
            <p>Incluye, ropa de cama y toallas.</p>
            <p>Baños: 5</p>
    </div>
    

    <h3>Entretenimiento</h3>
    <div class="">
            <p>Mesa de Pool</p>
            <p>Metegol</p>
            <p>Juego de Sapo</p>
            <p>Mesa de Ping Pong</p>
            <p>Canchas de Futbol y Volleyball con Iluminacion</p>
    </div>
</div>

    <div class="right">
        <ul class="slider" id="slider">
            <li><img src="<?=base_url();?>media/images/servicios/P1030762.jpg"></li>
            <li><img src="<?=base_url();?>media/images/servicios/P1030763.jpg"></li>
            <li><img src="<?=base_url();?>media/images/servicios/P1030764.jpg"></li>
        </ul>
    </div>
    <div style="clear:both;"></div>
</div>

<br />
<br />
<br />

