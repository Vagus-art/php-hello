<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
include('dbconfig-postgres.php');

if ($dbconfig) {
    $dbconn = pg_connect($dbconfig) or die('No se ha podido conectar: ' . pg_last_error());
} else {
    $dbconn = pg_connect("host=localhost dbname=php_postgres user=php password=password")
        or die('No se ha podido conectar: ' . pg_last_error());
}

$search = $_GET['search'];
$id = $_GET['id'];

if ($search&&!$id){
    $query = "SELECT * FROM contacts WHERE name ILIKE " . "'%" . $search . "%'" . " LIMIT 10";
}
else if($id&&!$search){
    $query = "SELECT * FROM contacts WHERE id = $id";
}
else {
    $query = "SELECT * FROM contacts LIMIT 10";
}

$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$response = array();

while ($row = pg_fetch_array($result,null,PGSQL_ASSOC)) {
    $response[] = $row;
}

echo json_encode($response);