<?php

    if (isset($_POST['kwh_holder'])) {
        $kwh_var = $_POST['kwh_holder'];
        $url = "generate-results.php?kwh_holder=" . $kwh_var;
        header('Location: ' . $url);
        exit();
    }

?>