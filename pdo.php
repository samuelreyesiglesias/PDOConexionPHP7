

<?php
$usuario="root";
$password="root2019";
$DB = new PDO('mysql:host=localhost;dbname=turisticabatabase', $usuario, $password);
// Utilizar la conexión aquí
$query = $DB->query('SELECT * FROM lugar');
foreach($query->fetchAll() as $lugar){
    echo "$lugar[Nombre] / $lugar[Ubicacion]<br>";
}
// Ya se ha terminado; se cierra
$query = null;
$DB = null;
?>