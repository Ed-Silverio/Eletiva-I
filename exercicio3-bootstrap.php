<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário 3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Formulário 3</h1>
<form method="post">
<div class="mb-3">
              <label for="pname" class="form-label">Partner name</label>
              <input type="text" id="pname" name="pname" class="form-control" required="">
            </div><div class="mb-3">
              <label for="plname" class="form-label">Partner legal name</label>
              <input type="text" id="plname" name="plname" class="form-control" required="">
            </div><div class="mb-3">
              <label for="paddress" class="form-label">Partner address</label>
              <input type="email" id="paddress" name="paddress" class="form-control" required="">
            </div><div class="mb-3">
              <label for="pemailid" class="form-label">Partner email ID</label>
              <input type="text" id="pemailid" name="pemailid" class="form-control" required="">
            </div><div class="mb-3">
              <label for="pmobile" class="form-label">Partner mobile</label>
              <input type="number" id="pmobile" name="pmobile" class="form-control" required="">
            </div><div class="mb-3">
              <label for="sdate" class="form-label">Start date</label>
              <input type="date" id="sdate" name="sdate" class="form-control" required="">
            </div><div class="mb-3">
              <label for="Edate" class="form-label">Expiry date</label>
              <input type="date" id="Edate" name="Edate" class="form-control" required="">
            </div><div class="mb-3">
              <label for="mla" class="form-label">Min Loan amount</label>
              <input type="text" id="mla" name="mla" class="form-control" required="">
            </div><div class="mb-3">
              <label for="mla" class="form-label">Max Loan Amount</label>
              <input type="number" id="mla" name="mla" class="form-control" required="">
            </div><div class="mb-3">
              <label for="irate" class="form-label">Interest Rate</label>
              <input type="number" id="irate" name="irate" class="form-control" required="">
            </div><div class="mb-3">
              <label for="damount" class="form-label">Deposit amount</label>
              <input type="number" id="damount" name="damount" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>