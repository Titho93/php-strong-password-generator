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

<div class="container-tb text-center">
    <h1> STRONG PASSWORD GENERATOR</h1>
    <h2>GENERA UNA PASSWORD SICURA</h2>
    <form action="index.php" method='GET'>
        <div class="mess">
        <h3>Ecco la tua password:</h3> 
        </div>
        <div class="form p-1 ">
        <p><?php echo $psw ?></p>
        </div>
    </form>
    <a href="index.php">Return</a>
</div>
</body>
</html>