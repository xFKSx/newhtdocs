<!DOCTYPE html>
<html lang="no">
    <head>
    <title>Oblig 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    }


    header {
    background-color: black;
    padding: 10px;
    text-align: center;
    font-size: 15px;
    color: white;
    }


    nav {
    float: left;
    width: 7%;
    height: 5600px; 
    background: white;
    padding: 20px;
    }


    nav ul {
    list-style-type: none;
    padding: 0;
    }

    article {
    float: left;
    padding: 20px;
    width: 90%;
    background-color: white;
    color: black;
    height: 700px; 
    }


    section::after {
    content: "";
    display: table;
    clear: both;
    }


    footer {
    background-color: white;
    padding: 40px;
    text-align: center;
    color: black;
    }

    


    @media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
    }
    </style>
    </head>

    <body>
            <header>
                <h2>Oblig 4</h2>
            </header>

        <section>
            <nav>
                <ul>
                    <p><a href="../index.php"> <--Tilbake </a></p>
                </ul>
            </nav>

        <article>
            <form action="O4Oppgaver.php" method= "post">
            <br><input id="input" type="text" name="name" placeholder="Skriv inn navn" size="20"><br>
            
            <label for="antall"> Velg antall:</label>
                <select id="antall" name="antall">
                    <option value="1"> 1</option>
                    <option value="5"> 5</option>
                    <option value="10"> 10</option>
                </select>
                    <br><input type="Submit" value="Submit">
            </form>
                

            
            <?php
                if (isset($_POST["name"]) && isset($_POST["antall"])){
                    $name = $_POST["name"];
                    $antall = $_POST["antall"];

                if ($antall == "1"){
                    for($i=0; $i <=0; $i++){
                        echo "$name ";
                    }
                }

                if ($antall == "5"){
                    for($i=0; $i <=4; $i++){
                        echo "$name ";
                    }
                }

                if ($antall == "10"){
                    for($i=0; $i <=9; $i++){
                        echo "$name ";
                    }
                }
            }
                
            ?>

            <!-- id ( ha input for åskrive i boksen min)-- type (hatekst type for å få tekst inn i stedet for nummer)
            -- name (funksjon navnet) -- placeholder (skrive "skrive inn navn" inn i boksen) -- size "20" (størrelse)
            -->
            <br><br><br><br><input id="input" type="text" name="name" placeholder="Skriv inn navn" size="20"><br>
            <input id="input" type="text" name="name" placeholder="Skriv inn adresse" size="20"><br>
            <input type="radio" name="valg" value="levering"> Levering <br>
            <input type="radio" name="valg" value="hentes"> Hentes <br>
            <br><label for="pizza"> Velg pizza </label>
                <select name="pizza" id="pizza">
                    <option value="pepperoni"> Pepperoni Pizza</option>
                    <option value="chicago"> Chicago Pizza</option>
                    <option value="greek"> Greek Pizza</option>
                </select>
            
               <br><br> Ekstra ost:
            <br><input type="radio" name="ost" value="ekstra ost"> Ja <br>
            <input type="radio" name="ost" value="ingen"> Nei
                    <br><input type="Submit" value="Submit">
            
            <?php

            ?>

        </article>
        </section>

        <footer>
  
        </footer>

                    

    </body>


</html>
