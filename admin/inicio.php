<?php
$conexion= mysqli_connect("db5003386753.hosting-data.io", "dbu1004409", "drupie2020", "dbs2743657") or
die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select nombre,correo,telefono,texto
from registro") or
die("Problemas en el select:" . mysqli_error($conexion));
echo '<style>
*{
  padding:0;
  margin:0;
  box-sizing:border-box;
}
div{

  width:800px;
  display:flex;
  flex-wrap:wrap;
  margin:20px auto;
}
div section{
  width:20%;
  margin-left:5px;
  background:#2d3436;
  color:#fafafa;
  text-align:center;
  padding:10px;
}

</style>';
echo '<a href="cerrar.php">Cerrar sesión</a>';
while ($reg = mysqli_fetch_array($registros)) {

echo '<div>
<section>'.$reg[0].'</section>
<section>'.$reg[1].'</section>
<section>'.$reg[2].'</section>
<section>'.$reg[3].'</section>
</div>';
}

mysqli_close($conexion);
?>