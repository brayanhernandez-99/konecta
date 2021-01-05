<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Konecta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        body {
            font-size: 12px;
            background-color: #FFF;
        }

        #container {
            width: 400px;
            margin: 50px auto;
            background-color: #F3EDED;
            border: 1px solid #ECE8E8;
            height: 400px;
            border-radius: 8px;
            padding: 0px 9px 0px 9px;
        }

        .icon span {
            background: #A8A6A6;
            padding: 20px;
            border-radius: 120px;
        }

        .icon {
            margin-top: 10px;
            margin-bottom: 10px;
            color: #FFF;
            font-size: 50px;
            text-align: center;
        }

        .checkin {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>

</head>

<body>
    <div id="container">
        <div class="icon">
            <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="ContentForm">
            <form action="" method="post" name="login">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" id="email" name="email" placeholder="Correo" class="form-control" aria-describedby="sizing-addon1" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="password" name="password" placeholder="******" class="form-control" aria-describedby="sizing-addon1" required>
                </div>
                <br>
                <button type="submit" id="signin" name="signin" class="btn btn-lg btn-primary btn-block btn-signin">Entrar</button>
                <div class="checkin"><a href="">Iniciar como:</a></div>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>