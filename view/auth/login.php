<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Sistem</title>
    <link rel="stylesheet" href="./addon/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
</head>
<body class="h-100 bg-light">
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="mb-3 py-3 border-bottom text-center">Login</h4>
                        <?php
                        if(isset($_SESSION["ERROR_SISTEM"])){
                            echo '<div class="alert alert-danger" role="alert">'.$_SESSION["ERROR_SISTEM"].'</div>';
                            unset($_SESSION["ERROR_SISTEM"]);
                        }
                        ?>
                        <div class="fst-italic mb-3 text-center">Silahkan login untuk masuk ke dalam sistem informasi perpustakaan</div>
                        <form action="index.php?modul=auth&proses=vlogin" method="post">
                            <div class="form-group mb-3">
                                <label>Username :</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password :</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                            </div>
                            <hr/>
                           <button type="submit" class="btn btn-success w-100 py-2">
    <i class="bi bi-box-arrow-in-right me-2"></i> Login
</button>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./addon/jquery.js"></script>
    <script src="./addon/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>