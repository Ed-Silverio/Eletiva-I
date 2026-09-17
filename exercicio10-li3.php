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
              <label for="nomecompleto" class="form-label">Digite um nome completo</label>
              <input type="text" id="nomecompleto" name="nomecompleto" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
if ($_POST) {
    $nomecompleto = $_POST['nomecompleto'];
    preg_match_all('/\b\w/u', $nomecompleto, $achados);
    $iniciais = implode('. ', $achados[0]) . '.';
    $iniciais = strtoupper($iniciais);
    echo "<p>As iniciais do nome '$nomecompleto' são: $iniciais</p>";
}
?>

</div>
</body>
</html>