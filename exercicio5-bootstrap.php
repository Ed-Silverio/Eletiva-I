<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário 5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Formulário 5</h1>
<form method="post">
<div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="sobrenome" class="form-label">Sobrenome</label>
              <input type="text" id="sobrenome" name="sobrenome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" required="">
            </div><div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" required="">
            </div><div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" id="address" name="address" class="form-control" required="">
            </div><div class="mb-3">
              <label for="address2" class="form-label">Address 2 (opcional)</label>
              <input type="text" id="address2" name="address2" class="form-control">
            </div><div class="mb-3">
              <label for="pais" class="form-label">País</label>
              <select id="pais" name="pais" class="form-select" required="">
                <option value="Brasil">Brasil</option><option value="USA">USA</option><option value="Mexico">Mexico</option><option value="Peru">Peru</option>
              </select>
            </div><div class="mb-3">
              <label for="estado" class="form-label">Estado</label>
              <select id="estado" name="estado" class="form-select" required="">
                <option value="SP">SP</option><option value="RJ">RJ</option><option value="DF">DF</option>
              </select>
            </div><div class="mb-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" id="zip" name="zip" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>