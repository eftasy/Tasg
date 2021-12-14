<!DOCTYPE html>
<html lang="lt">

<?php include "view/_partials/head.view.php"; ?>
<body>
<?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
        <h1>Visos imones</h1>
        <table class="table table-info table-striped">
                <thead>
                <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Adresas</th>
                <th scope="col">El.pastas</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($companies->allCompanies($page) as $company): ?>
                <tr>
                <th scope="row"><a href="/imone/<?=$company['id']?>"><?=$company['pavadinimas']?></a></th>
                <td><?=$company['adresas']?></td>
                <td><?=$company['elpastas']?></td>
                </tr>
        <?php endforeach;?>
        </tbody>
        </table>

        
        <nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php if($page != 1): ?>
    <li class="page-item"><a class="page-link" href="/all/<?=$page-1?>">Atgal</a></li>
        <?php endif?>
    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li> -->
    <li class="page-item"><a class="page-link" href="/all/<?=$page+1?>">Kitas</a></li>
  </ul>
</nav>
        </div>
</body>
</html>