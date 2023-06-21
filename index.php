<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>

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

        .container{
            background-color: white;
            width: 700px;
            display:flex;
        }

    </style>
</head>
<body>
    <div class="password">
        <h5> <?php $my_passwords ?></h5>
    </div>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <div class="container p-3 flex-row" >
        <div class="row flex-column"  >
            <div class=" col ">
                <span>Lunghezza password:</span>
                <input type="text">
            </div>
            
       
      

       
        <div class="col">
            <span>Consenti ripetizioni di uno o più caratteri:</span>
            <input type="radio" name="ripetizione" id="Yes">
            <label for="Yes" >Yes</label>
            <input type="radio" name="ripetizione" id="No">
            <label for="No">No</label>
        </div>
    </div>

    
       
    </div>
</body>
</html>


