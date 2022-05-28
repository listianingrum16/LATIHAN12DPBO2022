<?php

    include("model/Template.class.php");
    include("model/DB.class.php");
    include("model/Pasien.class.php");
    include("model/TabelPasien.class.php");
    include("view/TampilPasien.php");

    $prosespasien = new ProsesPasien();

    if(isset($_POST['add'])){
        $prosespasien->prosesAddPasien($_POST);
        header("location:index.php");
    }

    if(isset($_POST['update'])){
        $prosespasien->prosesUpdatePasien($_POST);
        header("location:index.php");
    }

    if(isset($_GET['id_delete'])){
        $id = $_GET['id_delete'];
        $prosespasien->prosesDeletePasien($id);
        header("location:index.php");
    }

?>