<?php
echo "ASDASDASDASDAS";
$start = $_POST['start'];
$id = $_POST['id'];
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
echo "<script>console.log( 'function' );</script>";
if($start == 'started'){
  echo "<script>console.log( 'Entrou' );</script>";

  include '../connections/conn.php';

  $resut = mysqli_query($conn,"SELECT nome FROM people WHERE id_interno = $id");

  if(mysqli_num_rows($resut) == 0){
  mysqli_query($conn,"INSERT INTO people (id_interno,nome,empresa)
VALUES ($id,'$nome','$empresa')");
}
$start = '';

}

?>
