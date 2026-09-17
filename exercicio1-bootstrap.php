<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Formulário 1</h1>
<form method="post">
<div class="mb-3">
              <label for="PNome" class="form-label">Primeiro nome</label>
              <input type="text" id="PNome" name="PNome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="sobrenome" class="form-label">Sobrenome</label>
              <input type="text" id="sobrenome" name="sobrenome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" id="cidade" name="cidade" class="form-control" required="">
            </div><div class="mb-3">
              <label for="uf" class="form-label">UF</label>
              <input type="text" id="uf" name="uf" class="form-control" required="">
            </div><div class="mb-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" id="zip" name="zip" class="form-control" required="">
            </div><div class="mb-3">
              <div class="form-check ">
                <input type="checkbox" id="termos" name="termos" class="form-check-input">
                <label for="termos" class="form-check-label">Concordo com os termos de serviço</label>
              </div>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>