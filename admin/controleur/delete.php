<?php
include ('../../modele/connect.php');

if (isset($_GET['id'])) {
   require ('../modele/mod_delete.php');
    }

header("Location: ../templates/list.php");