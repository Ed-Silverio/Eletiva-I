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
              <label for="frase" class="form-label">Escreva uma frase</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
if ($_POST) {
    $frase = $_POST['frase'];
    $FraseDividida = preg_match_all('/\w+/u', $frase, $palavrasEncontradas);
    $palavras = count($palavrasEncontradas[0]);
    echo "<p>A frase '$frase' contém $palavras palavras.</p>";

    $maior = $palavrasEncontradas[0][0];
    for ($i = 1; $i < $palavras; $i++) {
    if (strlen($palavrasEncontradas[0][$i]) > strlen($maior)) {
        $maior = $palavrasEncontradas[0][$i];
    }

    }
    echo "<p>A maior palavra da frase é '$maior'.</p>";


}
?>

</div>
</body>
</html>