<option value="" selected>-- Sila Pilih --</option>
<?php
include('conn.php');
//collect the passed id
$id = $_GET['id_maj'];
$stmt = mysql_query("SELECT id,name_maj FROM majlis_name WHERE id_maj= '$id' ORDER BY name_maj");

while($row = mysql_fetch_array($stmt)) {
?>
<option value="<?php echo $row['id']; ?>" name="majlis_name" ><?php echo $row['name_maj']; ?></option>
<?php
}
?>