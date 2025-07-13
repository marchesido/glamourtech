<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: #ffd7d5;
        }

        .footer {
            background-color: #ffd7d5;
        }
    </style>
</head>

<body>

    <?php include 'components/header.php'; ?>

    <div class="container">
        <h2 class="text-center">Formulário de Contato</h2>
        <form id="formContato" action="" method="POST" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Digite seu nome completo">
            </div>

            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" min="18" max="120" required placeholder="Digite sua idade">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="" disabled selected>Selecione seu gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="XXX.XXX.XXX-XX">
                <div class="form-text">Exemplo de formato: 000.000.000-00</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail">
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required placeholder="Digite seu endereço">
            </div>

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" required pattern="\d{5}-\d{3}" placeholder="00000-000">
                <div class="form-text">Exemplo de formato: 87260-000</div>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Número de Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required pattern="\(\d{2}\) \d{4,5}-\d{4}" placeholder="(XX) XXXX-XXXX">
                <div class="form-text">Exemplo de formato: (44) 99892-3204</div>
            </div>

            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required placeholder="Digite sua mensagem"></textarea>
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script>
        function cpfValidator(cpf) {
            if (!cpf) return false;

            const cpfNumerico = cpf.replace(/\D/g, '');

            if (cpfNumerico.length !== 11 || /^(\d)\1{10}$/.test(cpfNumerico)) {
                return false;
            }

            let soma = 0;
            for (let i = 0; i < 9; i++) {
                soma += parseInt(cpfNumerico.charAt(i)) * (10 - i);
            }

            let resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            if (resto !== parseInt(cpfNumerico.charAt(9))) return false;

            soma = 0;
            for (let i = 0; i < 10; i++) {
                soma += parseInt(cpfNumerico.charAt(i)) * (11 - i);
            }

            resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            if (resto !== parseInt(cpfNumerico.charAt(10))) return false;

            return true;
        }

        document.getElementById('formContato').addEventListener('submit', function(e) {
            alert('TEXTO DIFERENTE');
            const cpf = document.getElementById('cpf').value.trim();
            const telefone = document.getElementById('telefone').value.trim();
            const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
            const telRegex = /^\(\d{2}\) \d{4,5}-\d{4}$/;
            alert(cpf);

            if (!cpfRegex.test(cpf)) {
                alert('CPF inválido. Use o formato 000.000.000-00.');
                e.preventDefault();
            }

            if (!telRegex.test(telefone)) {
                alert('Telefone inválido. Use o formato (44) 99892-3204.');
                e.preventDefault();
            }
            if (!cpfValidator(cpf)) {
                alert('CPF VALIDO');
            }
        });
    </script>

</body>

</html>