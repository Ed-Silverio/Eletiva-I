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
<form method="post" action="resposta16.php">
<div class="mb-3">
              <label for="capital" class="form-label">Insira o seu capital</label>
              <input type="number" step="0.1" id="capital" name="capital" class="form-control" required="">
            </div><div class="mb-3">
              <label for="taxa" class="form-label">Insira a taxa de juros (Ex: 10): </label>
              <input type="number" id="taxa" name="taxa" class="form-control" required="">
            </div><div class="mb-3">
              <label for="periodo" class="form-label">Insira o período:</label>
              <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>