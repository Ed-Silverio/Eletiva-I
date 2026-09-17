<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="numb" class="form-label">Informe um número</label>
              <input type="number" id="numb" step="0.01" name="numb" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
if ($_POST) {
    $numb = $_POST['numb'];

    //round() arredonda para o inteiro mais próximo
    //ceil() arredonda para cima
    //floor() arredonda para baixo
    $arredondadonormal = round($numb);
    $arredondadocima = ceil($numb);
    $arredondadobaixo = floor($numb);
    echo "<p>Arredondado para cima:  $arredondadocima  </p>";
    echo "<p>Arredondado para baixo:  $arredondadobaixo  </p>";
    echo "<p>Arredondado normalmente:  $arredondadonormal  </p>";


}
?>

</div>
</body>
</html>