
<?php
  $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"],1);

//   mysql_connect($server, $username, $password);

//   mysql_select_db($db);
?>


<?php
$con =mysqli_connect($server, $username, $password, $db);
//check connection
if (mysqli_connect_errno()){
    echo "Failed to connect ot MySQL: " . mysqli_connect_errno();
}


?>

