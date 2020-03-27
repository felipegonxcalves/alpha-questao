<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style_login.css"/>

    <!--    <link rel="stylesheet" href="{{ asset('css/checkbox.css') }}"/>-->
    <!--    <link rel="stylesheet" type="text/css" href="checkbox.css">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
</head>

<body>
<div class="questao" id="q0" style="width: 85vw; height: 430;">
    <form action="/validate-login.php" method="post">
        <table id="form" class="fundoGradient">
            <tbody>
            <tr>
                <td>
                    <div class="numero"></div><span>CPF</span>
                </td>
                <td><input type="text" id="cpf" style="width: 350px;" value="" name="cpf">
                </td>
                <td>
                    <button id="enviar">ENVIAR</button></td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

<!--<script src="{{ asset('js/scripts.js') }}"></script>-->
</body>
</html>
