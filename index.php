<?php
// error_reporting(0);
session_start();
include("config/database.php");

if(isset($_POST['username'])){
    $sql = mysqli_query($connection, "SELECT * FROM user WHERE username = '".$_POST['username']."' AND password = '".md5($_POST['password'])."'");
    $row = mysqli_fetch_assoc($sql);

    if(empty($row)){
        $message = "Username atau password salah.";
    }else{
        $_SESSION['username'] = $row['username'];
    }
}

?>
<html>

    <head>
        <title>Selamat datang di perpustakaan</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css" />
    </head>

    <body>
        <div class="container" style="margin-top: 50px;">
            <?php if(isset($_SESSION['username'])) : ?>
            <h3>Selamat datang <?= $_SESSION['username'] ?></h3>
            (<a href="logout.php">Logout</a>)
            <?php else: ?>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <?php if(isset($message)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $message ?>
                                </div>
                            <?php endif; ?>
                            <form method="post">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                <br />
                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </body>
</html>