<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Oblig 6</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
        background-color: black;
        padding: 10px;
        text-align: center;
        font-size: 15px;
        color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
        float: left;
        width: 10%;
        height: 700px; /* only for demonstration, should be removed */
        background: white;
        padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
        list-style-type: none;
        padding: 0;
        }

        article {
        float: left;
        padding: 20px;
        width: 70%;
        background-color: #f1f1f1;
        height: 1000px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section::after {
        content: "";
        display: table;
        clear: both;
        }

        /* Style the footer */
        footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
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
    <h2>Oblig 6</h2>
    </header>

    <section>
    <nav>
        <a href="../index.php"><--Tilbake</a>
    </nav>
    
    <article>
        <h1>Oppgave 1</h1>
            <?php
            $myfile = fopen ("sitat.txt", "w") or die("Unable to open file!");
            $txt = "1. Jeg har lenge hatt lyst til ?? trene. Ikke regelmessig, fri og bevare meg, nei, jeg ??nsker innerst inne ?? trene ??n gang for alle. Ferdig med det.\n \n";
            fwrite($myfile, $txt);
            $txt = "2. Det sies at visdommen kommer med alderen, men jeg har ogs?? sett eksempler p?? at alderen har kommet helt alene.\n \n";
            fwrite($myfile, $txt);
            $txt = "3. Du vet n??r en tulipan henger med huet, og s?? tr??kker man den inn blant de andre for at den skal st?? oppreist. Et s??nt samfunn vil jeg ha.\n \n";
            fwrite($myfile, $txt);
            $txt = "4. Det er synd mennesker ikke kan bytte problemer. Alle vet n??yaktig hvordan de skal l??se andres.\n \n";
            fwrite($myfile, $txt);
            $txt = "5. Livet jobber p?? spreng i julen. Kaster oss inn i et hav av minner, lukter og f??lelser. Det er derfor den er s?? deilig. Og s?? vond.\n \n";
            fwrite($myfile, $txt);
            $txt = "6. All erfaring har nok dessverre ikke gjort meg klokere, men jeg er definitivt forvirret p?? et h??yere niv??.\n \n";
            fwrite($myfile, $txt);
            $txt = "7. Styrke er evnen til ?? bryte en sjokoladeplate i fire deler med bare hendene - og s?? bare spise ??n av delene.\n \n";
            fwrite($myfile, $txt);
            $txt = "8. Med tre ord kan jeg summere opp alt jeg har l??rt om livet: Det g??r videre.\n \n";
            fwrite($myfile, $txt);
            $txt = "9. Hvorfor er det s?? viktig ?? finne sin rette hylle - helst s?? fort som mulig? Hva i all verden skal vi sitte der for - og dingle med bena resten av livet?\n \n";
            fwrite($myfile, $txt);
            $txt = "10. ?? feire f??dselsdag er sunt. Statistikken viser at de som feirer flest f??dselsdager, ogs?? er de som lever lengst.\n \n";
            fwrite($myfile, $txt);
            fclose($myfile);


            $myfile = fopen("Sitat.txt","r");

            while( $linje = fgets($myfile) ) 
            {
                echo  $linje . "<br />";  
            }

            fclose($myfile);

            ?>
    
        <h1>Oppgave 2</h1>
            <?php
            
            $sitat = array("1. Jeg har lenge hatt lyst til ?? trene. Ikke regelmessig, fri og bevare meg, nei, jeg ??nsker innerst inne ?? trene ??n gang for alle. Ferdig med det.",
                            "2. Det sies at visdommen kommer med alderen, men jeg har ogs?? sett eksempler p?? at alderen har kommet helt alene.", 
                            "3. Du vet n??r en tulipan henger med huet, og s?? tr??kker man den inn blant de andre for at den skal st?? oppreist. Et s??nt samfunn vil jeg ha.",
                            "4. Det er synd mennesker ikke kan bytte problemer. Alle vet n??yaktig hvordan de skal l??se andres.",
                            "5. Livet jobber p?? spreng i julen. Kaster oss inn i et hav av minner, lukter og f??lelser. Det er derfor den er s?? deilig. Og s?? vond.",
                            "6. All erfaring har nok dessverre ikke gjort meg klokere, men jeg er definitivt forvirret p?? et h??yere niv??.",
                            "7. Styrke er evnen til ?? bryte en sjokoladeplate i fire deler med bare hendene - og s?? bare spise ??n av delene.",
                            "8. Med tre ord kan jeg summere opp alt jeg har l??rt om livet: Det g??r videre.",
                            "9. Hvorfor er det s?? viktig ?? finne sin rette hylle - helst s?? fort som mulig? Hva i all verden skal vi sitte der for - og dingle med bena resten av livet?",
                            "10. ?? feire f??dselsdag er sunt. Statistikken viser at de som feirer flest f??dselsdager, ogs?? er de som lever lengst.");
            echo $sitat[array_rand($sitat)]
            ?>
        <br><br>    
        <h1>Oppgave 3</h1>
            <form action="O6Oppgaver.php" method="post">
                <input id="sitat" name="sitat" type="text" placeholder="Skriv inn sitat" size="60"><br><br>
                <input id="navn" name="navn" type="text" placeholder="Skriv inn forfatterens sitat" size="30"><br><br>
                <input type="submit" value="Send inn"><br><br>
            </form>
                
                <?php
                if (isset($_POST["sitat"]) && isset($_POST["navn"])){
                    $sitat = $_POST["sitat"];
                    $navn = $_POST["navn"];

                    $myfile = fopen("sitat.txt", "a") or die("Unable to open file!");
                    $sitatekst = ucfirst(trim($sitat));
                    $sitatnavn = ucfirst(trim($navn));
                    fwrite($myfile, $sitatekst );
                    fwrite($myfile, $sitatnavn);
                    fclose($myfile);
                        echo $sitatekst, " Av " ,$sitatnavn;
                }
                ?>
        <br><br>
        <h1>Oppgave 4</h1>
            <form action="O6Oppgaver" method="post">
                <input id="navn" name="navn" type="text" placeholder="Skriv inn navn" size="30"><br><br>
                <input id="score" name="score"  type="number" placeholder= "Skriv inn score"><br><br>
                <input type="submit" value="Send inn"><br><br>
            </form>
            <?php
                if (isset($_POST["navn"]) && isset($_POST["score"])){
                    $scorenavn = $_POST["navn"];
                    $score = $_POST["score"];

                    $scorefile = fopen("score.txt", "a") or die("Unable to open file!");
                    $scoretekst = ucfirst("$scorenavn;$score \n");
                    fwrite($scorefile, $scoretekst);
                    fclose($scorefile);
                       
                    $myfile = fopen("score.txt","r");

                    while( $linje = fgets($myfile) ) 
                    {
                        echo  $linje . "<br />";  
                    }
        
                    fclose($myfile);
        

                    
                }
            ?>

    </article>
    </section>

    <footer>
    
    </footer>

    </body>
</html>
