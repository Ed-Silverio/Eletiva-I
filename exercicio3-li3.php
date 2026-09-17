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
              <label for="word1" class="form-label">Digite uma palavra: </label>
              <input type="text" id="word1" name="word1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="word2" class="form-label">Digite outra palavra: </label>
              <input type="text" id="word2" name="word2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<?php
    if ($_POST) {
        $word1 = $_POST['word1'];
        $word2 = $_POST['word2'];
        $word1lower = strtolower($word1);
        $word2lower = strtolower($word2);

        if (strpos($word1lower, $word2lower) !== false)
            echo "<p>A palavra '$word2' está contida em '$word1'!</p>";
        else 
            echo "<p>A palavra '$word2' não está contida em '$word1'!</p>";
        
    }
?>

</div>
</body>
</html>