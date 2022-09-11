<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GSW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
</head>

<body style="background:#343957;">
<div class="alert alert-success" role="alert">
  <center>Contabilidad</center>
</div>
<div class="d-flex justify-content-center mt-5">
    <div class="login-form mt-5">

        <form method="POST" action="#">
            <div class="form-group mt-5">
               <input type="text"  class="form-control mt-1" id="usuario" name="usuario" placeholder="Nombre">
            </div>
           
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30 mt-1" name ="btn">Enviar</button>
        </form>
    </div>
</div>
</body>

</html>
<?php
if(isset($_REQUEST['btn'])){
   
        $nombre = $_POST['usuario'];
       
        print "<div class='d-flex justify-content-center mt-5'><p class='lead ml-5 text-white'> $nombre </p></div> ";
	 } 
            
?>