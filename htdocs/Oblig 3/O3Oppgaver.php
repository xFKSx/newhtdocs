<!DOCTYPE html>
<html lang="no">
    <head>
    <title>Oblig 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
    box-sizing: border-box;
    }

    body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
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
    text-align: center;
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
                <h2>Oblig 3</h2>
            </header>

        <section>
            <nav>
                <ul>
                    <p><a href="../index.php"> <--Tilbake </a></p>
                </ul>
            </nav>
        <article>
            <?php
                $a=3;
                $b=5;
                $c = 8;
                $d = false;

                if($a >= $b) { 
                    echo "True";
                }

                else{
                    echo "False";
                }

            ?>
            <h1>Oppgave 1</h1>
                
                    <b>$a = 3 og $b = 5</b>
                       
                            <p>a)	$a < $b = TRUE</p>
                            <p>b)	$a >= $b = FALSE</p>
                            <p>c)	$a == $b = FALSE</p>
                            <p>d)	3 != $a = FALSE</p>
                            <p>e)	false == false = </p>
                            <p>f)	($a + $b) > 7 = TRUE</p>
                            <p>g)	($b % 3) > 3 = FALSE</p>
                            <p>h)	($b % 3) >= 0 = TRUE</p>
                        

            <h1>Oppgave 2</h1>
                
                    <b>$a = 3, $b = 5, $c = 8 og $d = false</b>
                        
                            <p>a)	($a > $b) && ($a+$b == $c) = FALSE</p>
                            <p>b)	($a > $b) || ($a+$b == $c) = TRUE</p>
                            <p>c)	!($a > $b) = TRUE</p>
                            <p>d)	!$d || false = TRUE</p>
                            <p>e)	($a == 2 || $b == 5) && ($d != ( $a < $b) ) = TRUE</p>
                            <p>f)	($a > $b) && ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ) = FALSE</p>
                            <p>g)	($a < $b) || ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ); = TRUE</p>
                        

            <h1>Oppgave 3</h1>
                <table border="2" width="60%">
                    <caption>Lage logiske uttrykk</caption>

                    <thead>
                        <tr>
                            <th>$x ulik $y</th>
                            <th>$x != $y</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>$x lik $y</th>
                            <th>$x == $y</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>$x lik $y ELLER $y ulik $x</th>
                            <th>$x == $y || $y != $x</th>
                        </tr>
                    </tfoot>
                    <tfoot>
                        <tr>
                            <th>$x lik $y og $y lik $z, ELLER $z større enn eller lik $x</th>
                            <th>$x == $y && $y == $z, || $z >= $x</th>
                        </tr>
                    </tfoot>
                    <tfoot>
                        <tr>
                            <th>$x er større enn $y OG $y er større enn $z</th>
                            <th>$x > $y && $y > $z</th>
                        </tr>
                    </tfoot>
                    <tfoot>
                        <tr>
                            <th>$x er lik $y OG $y er lik $z</th>
                            <th>$x == $y && $y == $z</th>
                        </tr>
                    </tfoot>
                </table>
                
            <h1>Oppgave 4</h1>
                
                    <p><b>a og b</b></p>
                        <?php
                        $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                            foreach($tabell as $indeks => $verdi)
                        {
                            echo "$indeks -> $verdi <br/>";
                        }
                        ?>
                

                
                    <p><b>c</b></p>
                        <?php
                        $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                            foreach($tabell as $indeks => $verdi)
                        {
                            if($verdi<25)
                            echo "$indeks -> $verdi <br/>";
                        }
                        ?>
            

            
                    <p><b>d</b></p>
                        <?php
                        $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                            foreach($tabell as $indeks => $verdi)
                        {
                            if($verdi >10 && $verdi <40)
                            echo "$indeks -> $verdi <br/>";
                        }
                        ?>
            
                
                
                    <p><b>e,f og g</b></p>
                        <?php
                        $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                        $antall = 0;
                        $sum = 0;
                            foreach($tabell as $indeks => $verdi)
                        {
                            if($verdi>10){
                            echo "$indeks -> $verdi <br/>";

                            $antall ++;
                            $sum += $verdi;
                        }
                            
                        }
                        $gjennomsnitt=$sum/$antall;
                        echo "Antall verdier $antall <br>";
                        echo "Sum av verdiene i array: $sum <br>";
                        echo"Gjennomsnitt av verdien i array: $gjennomsnitt <br>";
                        ?>


            
                    <p><b>h</b></p>
                        <?php
                        $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                            foreach($tabell as $indeks => $verdi)
                        {
                            if($verdi % 2 == 0)
                            echo "$indeks -> $verdi <br/>";
                        }
                        ?>

                    <p><b>i</b></p>
                        <?php
                            $tabell = array(1,2,3,4,5,6,7,8,9,20,23,26,29,33,35,39,41,45,47,50);
                                foreach($tabell as $indeks => $verdi)
                            {
                                if($verdi % 2 != 0)
                                echo "$indeks -> $verdi <br/>";
                            }
                        ?>


                    

                <h1>Oppgave 5</h1>

                    <p><b>a</b></p>
                        Mer forstårelse

                    <p><b>b og c</b></p>
                        <?php
                            $skole = array(
                                "Elev 1" => array("Navn: " => "Kim", "Etternavn: " => "Yong", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 5", "Tidsforbruk " => "Tid: 2 timer"),
                                "Elev 2" => array("Navn: " => "Jovan", "Etternavn: " => "Rys", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 2", "Tidsforbruk " => "Tid: 4 timer"),
                                "Elev 3" => array("Navn: " => "Sung", "Etternavn: " => "Woon", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 5", "Tidsforbruk " => "Tid: 3 timer"),
                                "Elev 4" => array("Navn: " => "Tai", "Etternavn: " => "Ming", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 4", "Tidsforbruk " => "Tid: 2 timer"),
                                "Elev 5" => array("Navn: " => "Jin", "Etternavn: " => "Han-un", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 6", "Tidsforbruk " => "Tid: 3 timer"),
                            );

                            $skole["Elev 2"] = array("Navn: " => "Jovan", "Etternavn: " => "Rys", "Klasse: " => "Klasse: 3H", "Karakter: " => "Karakter 2", "Tidsforbruk " => "Tid: 4 timer");
                            
                            foreach($skole as $indeks => $verdi){
                                echo $indeks . ": <br>";
                                echo $verdi["Navn: "] . " ";
                                echo $verdi["Etternavn: "] . "<br>";
                                echo $verdi["Klasse: "] . "<br>";
                                echo $verdi["Karakter: "] . "<br>";
                                echo $verdi["Tidsforbruk "] . "<br><br>";
                            }

                        ?>

                <h1>Oppgave 6</h1>
        </article>
        </section>

        <footer>
  
        </footer>

                    

    </body>


</html>
