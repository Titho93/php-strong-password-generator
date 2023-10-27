<?php 

session_start();

include __DIR__ . "/partials/head.php";
include __DIR__ . "/partials/functions.php";

if(isset($_SESSION["sended_psw"])){
    $psw = $_SESSION["sended_psw"];
  }else{
    header("Location: ./index.php");
  }

?>


<body>

<div class="container text-center p-5">
    <h1> STRONG PASSWORD GENERATOR</h1>
    <h2>GENERA UNA PASSWORD SICURA</h2>
    <h3>Ecco la tua password:</h3>
    <p><?php echo $psw ?></p>
</div>
    

</body>
</html>