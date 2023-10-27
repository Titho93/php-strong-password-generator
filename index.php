<?php 

include __DIR__ . "/partials/head.php";
include __DIR__ . "/partials/functions.php";


$msg = 'Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri';

if(isset($_GET['number'])){
    if((($_GET['number']) > 7) && (($_GET['number']) < 33)){
        session_start();
        $_SESSION['sended_psw'] = generateCharactersRandom($_GET['number']);
        header("Location: ./landing_page.php");
    }else{
        $msg = 'Errore! la lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri';
    }
}

?>

<body>

<div class="container-tb text-center">
    <h1> STRONG PASSWORD GENERATOR</h1>
    <h2>GENERA UNA PASSWORD SICURA</h2>
    <form action="index.php" method='GET'>
        <div class="mess">
            <p><?php echo $msg ?></p>
        </div>
        <div class="form p-1 ">
            <span class="px-5">Lunghezza password</span>
            <input type="number" name="number" id="number">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annula</button>
    </form>
</div>
    
</body>
</html>