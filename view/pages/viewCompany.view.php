<!DOCTYPE html>
<html lang="lt">

<?php include "view/_partials/head.view.php"; ?>
<body>
<?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
        <h1><?=$company['pavadinimas']?></h1>

                         
            <ul>
            <li>Kodas: <?=$company['kodas']?></li>
            <li>Pvm Kodas: <?=$company['pvm_kodas']?></li>
            <li>Adresas: <?=$company['adresas']?></li>
            <li>Tel.Numeris: <?=$company['telefonas']?></li>
            <li>El.Pastas: <?=$company['elpastas']?></li>
            <li>Veikla: <?=$company['veikla']?></li>
            <li>Vadovas: <?=$company['vadovas']?></li>
            </ul>
              <a href="/delete-company/<?=$company['id']?>" class="btn btn-danger">Delete</a>
              <a href="/edit-company/<?=$company['id']?>" class="btn btn-info">Keisti</a>
                       

</div>
</body>
</html>