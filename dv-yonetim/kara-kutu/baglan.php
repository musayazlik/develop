<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=develop", "admin1", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>