<?php
require_once ('inc/scripts.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="<?= BASE_URL;?>/assets/css/login.css" rel="stylesheet"/>
    </head>
    <body class="bodyBckgColor">
        <main class="w-100 m-auto form-entrar">
        	<form method="POST">
                <h1 class="h3 mb-3 fw-normal text-center">Entrar <i class="bi bi-bookmark-star text-danger"></i></h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Digite seu e-mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Digite sua senha</label>
                </div>
                <br>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Entrar</button>
                <p class="mt-5 mb-3 text-muted text-center">© Redfin - 2022</p>

        		<?php if(isset($error) && !empty($error)): ?>
        		<div class="warning"><?php echo $error; ?></div>
        		<?php endif; ?>
        	</form>
        </main>
    </body>
</html>
