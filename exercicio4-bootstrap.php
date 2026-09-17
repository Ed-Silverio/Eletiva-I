<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Formulário 4</h1>
<form method="post">
<div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="number" id="cpf" name="cpf" class="form-control" required="">
            </div><div class="mb-3">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" id="address" name="address" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nivel" class="form-label">Nível</label>
              <select id="nivel" name="nivel" class="form-select" required="">
                <option value="Bronze">Bronze</option><option value="Prata">Prata</option><option value="Ouro">Ouro</option>
              </select>
            </div><div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" required="">
            </div><div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control" required="">
            </div><div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select id="status" name="status" class="form-select" required="">
                <option value="Aprovado">Aprovado</option><option value="Reprovado">Reprovado</option>
              </select>
            </div>
<button type="submit" class="btn btn-success">Enviar</button>
<button type="button" class="btn btn-secondary">Cancelar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>