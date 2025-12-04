<?php 
    include 'style.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acaju/Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
        <div class="two_web d-flex align-items-center justify-content-center position-relative py-3">
            <img class="img_login" src="imagens/LOGO_ACAJU.png" alt="logo acaju">
        </div>
    <div class="baixo"></div>
            <div class="col">
                <div class="cinza card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#00008B" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>&nbsp;&nbsp;<b>LOGIN</b></svg>
                    </div>
                    <div class="card-body text-start">
                        <form action="web.php" method="POST">
                            <label class="form-label"><b>LOGIN</b></label>
                            <input class="form-control" type="text" name="login" required/>
                            <br>
                            <label class="form-label"><b>SENHA</b></label>
                            <input class="form-control" type="password" name="senha" required/>
                            <br>
                            <br>
                            <div>
                            <button class="testbtn">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>       
</html>