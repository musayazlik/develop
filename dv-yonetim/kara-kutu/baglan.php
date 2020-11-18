<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=develop", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>