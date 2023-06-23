<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>


    <?php

        include "function.php";


    ?>
</head>
<body>




    <div class="password">
        
    </div>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

        <form action="" method="GET">
        <label for="length">Length</label>    
            <input type="number" name="length" id="length">
            <input type="submit" value="CREATE">
            <br>
            <input type="checkbox" name="letters" id="letters">
            <label for="letters">letters</label>
            <input type="checkbox" name="numbers" id="numbers">
            <label for="numbers">numbers</label>
            <input type="checkbox" name="symbols" id="symbols">
            <label for="symbols">symbols</label>
            <input type="checkbox" name="ripetition" id="ripetition">
            <label for="ripetition">ripetition</label>
        </form>

        <h2> Password generata: ...</h2>

    <?php
        // 1.
        //invio dati con form
        //creazione funzione per generare password
        //generare password (sulla base dei dati inviati dal form - length)
        //stampo la password

        // 2.
        //mettere la funzione genera password in un file php a parte
        //includerlo nel file principale per usare la funzione
    ?>

    <!-- <div class="contenitore p-3">
        <div class="d-flex justify-content-between">
            <div class="text">
                <span>Lunghezza password:</span>
            </div>
            
            <input type="text">
        </div>
            
       
        <div class="d-flex justify-content-between">
            <div class="text">
                <span>Consenti ripetizioni di uno o più caratteri:</span>
            </div>

            <div class="radio ">
                <input type="radio" name="ripetizione" id="Yes" value="ripetizione">
                <label for="Yes" >Yes</label>
                <br>
                <input type="radio" name="ripetizione" id="No" value="ripetizione">
                <label for="No">No</label>
            </div>
        </div>

        <div class="check">
            <input type="checkbox" name="lettere" id="lettere">
            <input type="checkbox" name="numeri" id="numeri">
            <input type="checkbox" name="lettere" id="lettere">
        </div>
            
            
    </div> -->

    

    <style>
        body{
            text-align: center;
            background-color: #001632;
        }

        h1{
            color: #808B99;
        }

        h2{
            color: white;
        }

        .contenitore{
            background-color: white;
            width: 700px;
            display:flex;
            flex-direction: column;
            justify-content: space-between;
            margin: auto;
        }

    </style>
</body>
</html>


