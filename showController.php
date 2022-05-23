<?php
    include "model/model.php";

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); //NTU
    $contact = get_contact_by_id($id);
    
    include "vue/showVue.php";