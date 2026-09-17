<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Formulário 2</h1>
<form method="post">
<div class="mb-3">
              <label for="cod" class="form-label">Código</label>
              <input type="number" id="cod" name="cod" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nome" class="form-label">Nome completo</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cpf" class="form-label">CPF (apenas números)</label>
              <input type="number" id="cpf" name="cpf" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cell" class="form-label">Celular</label>
              <input type="number" id="cell" name="cell" class="form-control" required="">
            </div><div class="mb-3">
              <label for="fixo" class="form-label">Telefone fixo</label>
              <input type="number" id="fixo" name="fixo" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cep" class="form-label">CEP</label>
              <input type="number" id="cep" name="cep" class="form-control" required="">
            </div><div class="mb-3">
              <label for="rua" class="form-label">Rua/avenida</label>
              <input type="text" id="rua" name="rua" class="form-control" required="">
            </div><div class="mb-3">
              <label for="numcasa" class="form-label">Nº</label>
              <input type="number" id="numcasa" name="numcasa" class="form-control" required="">
            </div><div class="mb-3">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" id="bairro" name="bairro" class="form-control" required="">
            </div><div class="mb-3">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" id="cidade" name="cidade" class="form-control" required="">
            </div><div class="mb-3">
              <label for="uf" class="form-label">UF</label>
              <input type="text" id="uf" name="uf" class="form-control" required="">
            </div><div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select id="status" name="status" class="form-select" required="">
                <option value="Positivo">Positivo</option><option value="Negativo">Negativo</option>
              </select>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
<button type="submit" class="btn btn-danger">Cancelar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>