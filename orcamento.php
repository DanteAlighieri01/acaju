<?php 
    include 'style.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acaju/Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
        <div class="two d-flex align-items-center justify-content-center position-relative py-3">
            <img src="imagens/LOGO_ACAJU.png" alt="logo acaju">
        </div>
    <div class="baixo"></div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="orcamento.php">Orçamentos</a></li>
    </ul>
            <div class=table_jobs>
                <!-- job enviado/declinado/aprovado/negociação/sem_retorno -->
                 <table>
                <tr>
                    <th>Marca</th>
                    <th>Data Pedido</th>
                    <th>Data Aprovação</th>
                    <th>Status</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Mexico</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td>Mexico</td>
                    <td>Mexico</td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
</body>
</html>