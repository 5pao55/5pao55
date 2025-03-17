<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carteirinha {
            background: url('carteirinha.png') no-repeat center;
            background-size: cover;
            width: 500px;
            height: 300px;
            position: relative;
            padding: 20px;
            margin: 20px auto;
            color: black;
            font-weight: bold;
            display: none;
        }
        .campo {
            position: absolute;
            font-size: 16px;
        }
        #campo-nome { top: 95px; left: 180px; }
        #campo-escola { top: 135px; left: 180px; }
        #campo-rg { top: 213px; left: 190px; }
        #campo-rm { top: 213px; left: 318px; }
        #campo-nasc { top: 213px; left: 385px; }
        #campo-validade { top: 245px; left: 375px; }
    </style>
</head>
<body>
    <div class="container mt-5" id="formContainer">
        <div class="card p-4 shadow-lg">
            <h2 class="text-center">Formulário Carteirinha</h2>
            <form id="formCadastro">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="rm" class="form-label">RM / Matrícula</label>
                    <input type="text" class="form-control" id="rm" name="rm" required>
                </div>
                <div class="mb-3">
                    <label for="rg" class="form-label">RG (Registro Geral)</label>
                    <input type="text" class="form-control" id="rg" name="rg" required>
                </div>
                <div class="mb-3">
                    <label for="escola" class="form-label">Nome da Escola / Instituição de Ensino</label>
                    <input type="text" class="form-control" id="escola" name="escola" required>
                </div>
                <div class="mb-3">
                    <label for="nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="nasc" name="nasc" required>
                </div>
                <div class="mb-3">
                    <label for="validade" class="form-label">Data de Validade</label>
                    <input type="date" class="form-control" id="validade" name="validade" required>
                </div>
                <button type="button" class="btn btn-primary w-100" onclick="preencherCarteirinha()">Gerar Carteirinha</button>
            </form>
        </div>
    </div>

    <div class="carteirinha" id="carteirinha">
        <div id="campo-nome" class="campo"></div>
        <div id="campo-escola" class="campo"></div>
        <div id="campo-rg" class="campo"></div>
        <div id="campo-rm" class="campo"></div>
        <div id="campo-nasc" class="campo"></div>
        <div id="campo-validade" class="campo"></div>
    </div>

    <script>
        function preencherCarteirinha() {
            document.getElementById("campo-nome").innerText = document.getElementById("nome").value;
            document.getElementById("campo-escola").innerText = document.getElementById("escola").value;
            document.getElementById("campo-rg").innerText = document.getElementById("rg").value;
            document.getElementById("campo-rm").innerText = document.getElementById("rm").value;
            document.getElementById("campo-nasc").innerText = document.getElementById("nasc").value;
            document.getElementById("campo-validade").innerText = document.getElementById("validade").value;
            
            document.getElementById("formContainer").style.display = "none";
            document.getElementById("carteirinha").style.display = "block";
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>