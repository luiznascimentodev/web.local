<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 500px;
            width: 100%;
            padding: 70px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
    </style>
</head>
<body>
<video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1; opacity: 0.5;">
        <source src="/assets/img/background.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
<div class="container" style="background-color: rgba(0, 0, 0, 0.7);">
<div class="image-container" style="max-width: 400px; margin: 0 auto; text-align: center;">
    <img src="../assets/img/marca.webp" id="imagem" alt="Marca" style="width: 100%; border-radius: 0;">
</div>
<?php if(session()->getFlashdata('validation')):?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('validation')->listErrors() ?>
    </div>
<?php endif;?>
<?php if(session()->getFlashdata('errors')):?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('errors') ?>
    </div>
<?php endif;?>
<form action="/register/store" method="post" style="border-radius: 15px; overflow: hidden;">
    <div class="form-group">
        <label for="username"></label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Cadastre seu usuário" value="<?= set_value('username') ?>" required style="background-color: rgba(0, 0, 0, 0.7); color: white; border: none; border-radius: 30px; width: 100%;padding: 10px 40px;">
    </div>
    <div class="form-group">
        <label for="password"></label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Cadastre sua senha" required style="background-color: rgba(0, 0, 0, 0.7); color: white; border: none; border-radius: 30px; width: 100%;padding: 10px 40px;margin-top: -20px">
    </div>
    <button type="submit" class="btn btn-primary" style="background-color: #FF4500; border-color: #FF4500; margin-bottom: 20px; padding: 10px 70px; border-radius: 150px; font-size: 16px;">Registrar</button>
</form>
<p style="color: white;">Já tem uma conta? <a href="/login" style="color: #FF4500">Login</a></p>
</div>
<?php if(isset($js)): ?>
    <script src="<?= $js ?>"></script>
<?php endif; ?>
</body>
</html>
