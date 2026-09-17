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
              <input type="number" id="numb" name="numb" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
if ($_POST) {
    $numb = $_POST['numb'];


    //pesquisando mais a fundo encontrei a função 'pow()' que calcula a potência 
    //e achei a função 'sqrt()' que calcula a raiz

    // $raizq = sqrt($numb);
    // echo "<p>A raiz quadrada de $numb é $raizq</p>";

    $raiz = $numb ** 0.5;
    echo "<p>A raiz quadrada de $numb é $raiz</p>";


}
?>

</div>
</body>
</html>