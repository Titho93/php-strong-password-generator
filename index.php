<?php 

include __DIR__ . "/partials/head.php";
$msg = '';


?>

<body>

<div class="container text-center p-5">
    <h1> STRONG PASSWORD GENERATOR</h1>
    <h2>GENNERA UNA PASSWORD SICURA</h2>
    <div class="mess">
        <p><?php echo $msg ?></p>
    </div>
    <div class="form p-5 ">
        <span class="px-5">Lunghezza password</span>
        <input type="number" name="number" id="number">
    </div>
    <button type="button" class="btn btn-primary">Invia</button>
    <button type="button" class="btn btn-secondary">Annula</button>
</div>
    
</body>
</html>