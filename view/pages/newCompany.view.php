<!DOCTYPE html>
<html lang="ly">
<?php include "view/_partials/head.view.php"; ?>
<body>
<?php include "view/_partials/nav.view.php"; ?>
<div class="container text-center w-100">
    <h1>Prideti nauja imone</h1>
    <form method="post">
    <input type="text" name="name" placeholder="Pavadinimas">
    <input type="text" name="code" placeholder="Kodas">
    <input type="text" name="pvm_code" placeholder="Pvm_kodas">
    <input type="text" name="address" placeholder="Adresas">
    <input type="tel" name="phone" placeholder="Tel. numeris">
    <input type="email" name="email" placeholder="El. pastas">
    <input type="text" name="activity" placeholder="Veikla">
    <input type="text" name="owner" placeholder="Vadovas">
    <button type="submit" name="send">Prideti</button>
    
    
    </form>
    
    
    </div>
    
</body>
</html>