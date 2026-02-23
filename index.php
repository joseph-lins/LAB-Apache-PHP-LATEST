<?php
require __DIR__ . '/db_config.php';

/* Simulação de registro */
$recordId = rand(1, 100); // só visual
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Teste Bem Sucedido</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0b1020, #050914);
        color: #e5e7eb;
    }

    .card {
        background: #111827;
        padding: 50px 60px;
        border-radius: 16px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.6);
        max-width: 720px;
        width: 90%;
    }

    h1 {
        font-size: 42px;
        letter-spacing: 3px;
        margin-bottom: 25px;
    }

    .info {
        margin-top: 10px;
        font-size: 18px;
        color: #cbd5e1;
    }

    .badge {
        display: inline-block;
        background: #1f2937;
        padding: 6px 12px;
        border-radius: 6px;
        margin: 0 5px;
        font-family: monospace;
    }

    .sql {
        margin-top: 15px;
        display: inline-block;
        background: #1f2937;
        padding: 8px 14px;
        border-radius: 8px;
        font-family: monospace;
        font-size: 14px;
    }
</style>
</head>
<body>

<div class="card">
    <h1>TESTE BEM SUCEDIDO</h1>

    <div class="info">
        Registro gravado no MySQL:
        <span class="badge">#<?= $recordId ?></span>
    </div>

    <div class="info">
        Banco:
        <span class="badge"><?= DB_NAME ?></span>
        Tabela:
        <span class="badge">access_log</span>
    </div>

    <div class="info">
        Consulta:
        <div class="sql">
            SELECT * FROM access_log ORDER BY id DESC LIMIT 20;
        </div>
    </div>
</div>

</body>
</html>
