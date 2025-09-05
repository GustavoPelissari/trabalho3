<?php
$mysqli = new mysqli("mysql", "lampuser", "lamppass", "lampdb");
if ($mysqli->connect_errno) {
 echo "Falha na conexao: " . $mysqli->connect_error;
 exit();
}
echo "Conexao bem-sucedida!\n";
phpinfo();