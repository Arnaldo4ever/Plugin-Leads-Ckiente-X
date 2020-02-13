<?php

  global $wpdb;
  $table_name=$wpdb->prefix.'nombretabla_settings';
  $resultados=$wpdb->get_results("SELECT * FROM $table_name");

    foreach($resultados as $rows) {
    $id = $rows->id;
    $logo = $rows->logo;
    $texto = $rows->texto;
    }
?>
<div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
				<img src="<?php echo $logo; ?>" data-rjs="<?php echo $logo; ?>" class="margin-eight-bottom" alt=""/>
                <p class="mbr-text pb-3 mbr-fonts-style display-5"><?php echo $texto; ?></p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column">
                        <form method="post" class="mbr-form form-with-styler">
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="nombre">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required="required" class="form-control px-3 display-7">
                                </div>
                                <div class="col-md-12 form-group " data-for="apellido">
                                    <input type="text" name="apellido" name="apellido" placeholder="Apellido" required="required" class="form-control px-3 display-7">
                                </div>
                                <div class="col-md-12 input-group-btn text-center">
									<button type="submit" name="submit" class="btn btn-secondary btn-form display-4">Suscribirme</button>
								</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
function insertar_data() {
  global $wpdb;
  $table_name=$wpdb->prefix.'nombretabla';

  //Toma los datos
  $var_nombre=$_POST['nombre'];
  $var_apellido=$_POST['apellido'];

  //Ingresa los datos
  if(isset($_POST['submit'])) {
  $wpdb->insert($table_name,
                array(
                    'Nombre'=> $var_nombre,
					'Apellido'=> $var_apellido
                ),
                array(
                    '%s',
					'%s'					
                )
  );
 ?>
<script type="text/javascript">
      document.location.href="<?php bloginfo('url'); ?>/gracias-cliente-x";
</script>
<?php
  }
}