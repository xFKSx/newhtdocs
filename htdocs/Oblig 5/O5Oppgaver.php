<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 5</title>
    </head>

    <body>
        <p><a href="../index.php"> <--Tilbake </a></p>
        <h1>Oppgave 1</h1>
            <ul>
                <li><b>a.</b></li>
                    <p>Funskjon er en ferdig definert kodeblokk som utfører en bestemt oppgave.</p><br>
                        <!--Eksempel funskjon-->
                            <?php
                                function summerToTall ($tall1, $tall2){
                                    $sum = $tall1 + $tall2;
                                    return $sum;
                                }
                            ?>
                <li><b>b.</b></li>
                    <p>Funksjonkall kaller på tilgjengelige funksjoner fra koden vår. </p>
                        <!--Eksempel funskjonkall-->
                            <?php
                                $beregning = summerToTall(200,300);
                            ?>               
            </ul>

        <h1>Oppgave 2</h1>
            <?php
                function minFunskjon(){
                    echo "Hallo";
                }
                minFunskjon();
            ?>

        <h1>Oppgave 3</h1>
            <?php
                function OpphavsrettNavn($oname){
                    echo "$oname har opphavsrett til materialet på websiden.<br>";
                }

                OpphavsrettNavn("Fredrik");
                OpphavsrettNavn("Jovan");
                OpphavsrettNavn("Szymon");
                OpphavsrettNavn("Steinar");
                OpphavsrettNavn("Luan");
            ?>
        <h1>Oppgave 4</h1>
            <?php
                function MattematikkFunksjon($tall1, $tall2){
                    $tall1 = 1;
                    $tall2 = 2;
                    $sum = $tall1 + $tall2;
                    echo "$sum";
                }

                
            ?>
        <h1>Oppgave 5</h1>
            <?php
                $informasjon = array(
                    "Elev 1" => array("Navn: " => "Fredrik", "Etternavn: " => "Sträng", "Adresse: " => "Høyåsveien 50", "Telefonnummer: " => "46520755"),
                    "Elev 2" => array("Navn: " => "Jovan", "Etternavn: " => "Milenkovic", "Adresse: " => "Høyåsveien 50", "Telefonnummer: " => "46520755"),
                    "Elev 3" => array("Navn: " => "Szymon", "Etternavn: " => "Rys", "Adresse: " => "Høyåsveien 50", "Telefonnummer: " => "46520755"),
                    );

                    $informasjon["Elev 2"] = array("Navn: " => "Jovan", "Etternavn: " => "Milenkovic", "Adresse: " => "Høyåsveien 50", "Telefonnummer: " => "46520755");
                            
                    foreach($informasjon as $indeks => $verdi){
                    echo $indeks . ": <br>";
                    echo $verdi["Navn: "] . " ";
                    echo $verdi["Etternavn: "] . "<br>";
                    echo $verdi["Adresse: "] . "<br>";
                    echo $verdi["Telefonnummer: "] . "<br><br>";
                    }
            ?>
        <h1>Oppgave 6</h1>
            
    </body>
</html>