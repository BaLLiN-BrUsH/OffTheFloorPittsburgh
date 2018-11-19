<?php 
  // DB constants are defined in env.php
  $connection = pg_connect($_ENV['DATABASE_URL']);
  $stat = pg_connection_status($connection);
  if ($stat === PGSQL_CONNECTION_OK) {
      echo 'Connection status ok';
  } else {
      echo 'Connection status bad';
      die();
  }
?>