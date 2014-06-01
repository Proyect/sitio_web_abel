<h1>Contacto</h1>
<br />
<br />
<p>Todos los campos del Formularios son obligatorios</p>
<br />

<div class="left">
    <div class="form-ui" style="width:400px; margin: 0 auto;">
    <?=form_open('contacto');?>

    <p>
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?=set_value('nombre');?>" class="f-xlarge"/>
    <?=form_error('nombre');?>
    </p>

    <p>
    <label>Telefono:</label>
    <input type="text" name="telefono" value="" class="f-xlarge"/>
    <?=form_error('telefono');?>
    </p>

    <p>
    <label>Asunto:</label>
    <input type="text" name="asunto" value="" class="f-xlarge"/>
    <?=form_error('asunto');?>
    </p>
    

    <p>
    <label>Email:</label>
    <input type="text" name="email" value="" class="f-xlarge"/>
    <?=form_error('email');?>
    </p>

    <p>
    <label>Mensaje:</label>
    <textarea name="mensaje" cols="43" rows="10"></textarea>
    <?=form_error('mensaje');?>
    </p>

    <p style="text-align: center">
    <input type="reset" value="Limpiar" class="metro-ui-button green"/>
    <input type="submit" value="Enviar" class="metro-ui-button green"/>
    </p>
    
    </form>
    </div>


</div>


<div class="right">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    src="https://www.google.com.ar/maps?q=-24.850615,-65.520455&amp;num=1&amp;hl=es-419&amp;ie=UTF8&amp;t=m&amp;z=12&amp;ll=Descansar Salta&amp;output=embed">
    </iframe>
    
</div>

<div style="clear: both;"></div>
<br />

