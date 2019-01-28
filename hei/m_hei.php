<?php require_once 'templates/header.php';?>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>hEI! - We need you</title>

    <!-- CSS   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/hei/css/style.css">

    <!-- Javascript   -->   
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="shortcut icon" href="imagens/fave_icon.ico" type="image/x-icon"> -->
     
</head>

<body>

<!-- video-->

<p style="font-family:Jazz LET, fantasy; font-size:60px; color:rgb(23, 67, 104); margin-left:30px;">Mais sobre o HEI!</p>

<div class="container cima text-md-left">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3 surgiu">
            <p style="font-size:25px; color:#045FB4;">Como surgiu o HEI! :</p>
        </div>

    <div class="col-md-6 mb-md-0 mb-3 t-right video">
        <p> Neste pequeno video conseguimos perceber que a motivação e a persistência, juntamente com o apoio de quem nos rodeia, são o segredo para alcançar o que se deseja.</p>
        <video width="560" controls>
            <source src="assets/video/cordas.mp4" type="video/mp4">
        </video>
    </div>
    </div>


</div>

<!-- Entrevista -->
<div class="container baixo text-md-left">
    <div class="row">
        <div class="titulo" style="margin-top:400px; font-family:Jazz LET, fantasy; font-size:40px; color:rgb(23, 67, 104); text-align: center;">Testemunho real de como a inclusão é possível :</div>
        <div class="intro" style="font-size:18px; margin-top:15px;">Vamos falar um pouco da história da Ana Patrícia, Tita como gosta de ser chamada, uma jovem de 20 anos que nasceu com algumas condicionantes especiais.</div>
        
        <div class="col-md-6 mt-md-0 mt-3 entrevista">
            <?php require_once 'templates/entrevista.php';?>
        </div>
    
    <div class="col-md-6 mb-md-0 mb-3 p-dois">
        <img class="img-responsive" style="border-style: solid; border-radius: 15px;" src="assets/imagens/tita.png"> 
        <?php require_once 'templates/parte-dois.php';?>
    </div> 
    </div>
</div>

<!-- Footer -->
<?php require_once 'templates/footer.php';?>
</body>
</html>
