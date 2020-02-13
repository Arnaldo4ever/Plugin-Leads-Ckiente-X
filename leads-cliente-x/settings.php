<h1>Settings Leads Cliente X</h1>
<p>
Para usar este plugin usted deberá usar el Atajo <span style='background: #ccc;font-size: 1rem;font-style: italic;padding: 0px 5px;'>[formulario_leads]</span> dentro de la página donde quiera mostrar el formulario y registrar tus leads!
</p>

<div class="container">
<form method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <label class="label-form">Ingresa la ULR del logo *</label> 
                <input type="text" name="logo" id="logo" placeholder="Ingresa la ULR del logo *" class="input-form" required>
            </div> 
            <div class="col-md-12">
                <label class="label-form">Ingresa un texto (opcional)</label> 
                <input type="text" name="texto" id="texto" placeholder="Ingresa un texto" class="input-form">
            </div> 
            <div class="col-md-12">
                <button type="submit" name="submit" class="button action">Guardar</button>
            </div>
        </div>
    </div>
</form>
</div>

<?php
function actualizar_wpdb(){
  global $wpdb;
  $table_name=$wpdb->prefix.'nombretabla_settings';
  
  //Toma los datos
  $var_logo=$_POST['logo'];
  $var_texto=$_POST['texto'];
    if(isset($_POST['submit'])) {
        $data_update = array('logo' => $var_logo ,'texto' => $var_texto);
        $data_where = array('id' => 1);
        $wpdb->update($table_name , $data_update, $data_where);
    
    }
}