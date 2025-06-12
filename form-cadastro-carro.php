<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="w-50 m-auto mt-5">

    <h3 class="text-center mb-4">Formulário de Cadastro de Carros</h3>

    <form action="cadastro-carro.php" method="get">
        <div class="mb-3">
            <label class="form-label fw-bold">Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Digite o modelo">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Marca</label>
            <input type="text" class="form-control" name="marca" placeholder="Digite a marca">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Ano</label>
            <input type="text" class="form-control" name="ano" placeholder="Digite o ano">
        </div>

        <button type="submit" class="btn btn-danger fw-bold w-100">Enviar</button>
    </form>


</body>

</html>