<?php
if (isset($_POST['id']) && isset($_POST['predmet']) && isset($_POST['katedra']) 
    && isset($_POST['sala']) && isset($_POST['datum'])) {
        $id = $_POST['id'];
        $predmet = $_POST['predmet'];
        $katedra = $_POST['katedra'];
        $sala = $_POST['sala'];
        $datum = $_POST['datum'];

        $novaPrijava = new Prijava($id, $predmet, $katedra, $sala, $datum);
        $status = Prijava::update($novaPrijava, $mysqli);

        if ($status) {
            echo "Podaci o prijavi su uspesno azurirani.";
        } else {
            echo "Greska prilikom azuriranja podataka o prijavi.";
        }

    } 
    else{
        echo"Nisu poslati svi podaci!"
    }
?>