<?php
    session_start();
    if (!empty($_POST['namaDepan']) && !empty($_POST['namaTengah']) && !empty($_POST['namaBelakang']) && !empty($_POST['tempatLahir']) && !empty($_POST['tglLahir']) && !empty($_POST['NIK']) && !empty($_POST['wargaNegara']) && !empty($_POST['email']) && !empty($_POST['noHP']) && !empty($_POST['alamat']) && !empty($_POST['kodePos']) && !empty($_FILES['fotoProfil']) && !empty($_POST['username']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {
        $_SESSION['namaDepan'] = $_POST['namaDepan'];
        $_SESSION['namaTengah'] = $_POST['namaTengah'];
        $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
        $_SESSION['tempatLahir'] = $_POST['username'];
        $_SESSION['tanggalLahir'] = $_POST['tglLahir'];
        $_SESSION['NIK'] = $_POST['NIK'];
        $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['noHP'] = $_POST['noHP'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['kodePos'] = $_POST['kodePos'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password1'] = $_POST['password1'];
        $_SESSION['password2'] = $_POST['password2'];
        $fotoProfil = $_FILES["fotoProfil"];
        $tmp_name = $fotoProfil["tmp_name"];
        move_uploaded_file($tmp_name, "images/"."profile.png");
        header("location:index.php");
    } else {
        header("location:register.php");
    }
?>