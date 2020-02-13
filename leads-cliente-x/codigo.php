<?php

  global $wpdb;
  $table_name=$wpdb->prefix.'nombretabla';
  $resultados=$wpdb->get_results("SELECT * FROM $table_name");

?>
<h1>Leads Cliente X</h1>
<table id="leads">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
	<th>Apellido</th>
  </tr>
<?php foreach($resultados as $rows) {
    $id = $rows->id;
    $nombre = $rows->Nombre;
	$apellido = $rows->Apellido;
?>
  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $nombre; ?></td>
	<td><?php echo $apellido; ?></td>
  </tr>
<?php } ?>
</table>