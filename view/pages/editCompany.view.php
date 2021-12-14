<!DOCTYPE html>
<html lang="ly">
<?php include "view/_partials/head.view.php"; ?>
<body>
<?php include "view/_partials/nav.view.php"; ?>
<div class="container text-center w-100">
    <h1>Imones redagavimas</h1>
    <form method="post">
    <input type="text" name="name" value="<?=$company['pavadinimas']?>" placeholder="Pavadinimas">
    <input type="text" name="code" value="<?=$company['kodas']?>" placeholder="Kodas">
    <input type="text" name="pvm_code" value="<?=$company['pvm_kodas']?>" placeholder="Pvm_kodas">
    <input type="text" name="address" value="<?=$company['adresas']?>" placeholder="Adresas">
    <input type="tel" name="phone" value="<?=$company['telefonas']?>" placeholder="Tel. numeris">
    <input type="email" name="email" value="<?=$company['elpastas']?>" placeholder="El. pastas">
    <input type="text" name="activity" value="<?=$company['veikla']?>" placeholder="Veikla">
    <input type="text" name="owner" value="<?=$company['vadovas']?>" placeholder="Vadovas">
    <button type="submit" name="send">Redaguoti</button>
    
    
    </form>
    
    
    </div>
    
</body>
</html>