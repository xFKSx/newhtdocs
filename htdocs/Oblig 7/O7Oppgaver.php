<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Oblig 7</title>
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
    <h2>Oblig 7</h2>
    </header>

    <section>
    <nav>
        <a href="../index.php"><--Tilbake</a>
    </nav>
    
    <article>
       <h1>Oppgave 1</h1>
            <ul>
                <li><p><b>a.</b></p></li>
                    <p>Klasse er en skisse for et PHP objekt. Klasse inneholder både variabler og funksjoner som former en pakke kaller vi for et objekt. </p>
                    <p>Objekt er en variabel som man lager inne i en klasse</p>
                    <p>Eksempel på Klasse: Frukt</p>
                    <p>Eksempel på Objekt: Eple, banan, pære</p><br>

                <li><p><b>b.</b></p></li>
                    <p>Vises i koden</p><br>
                        <?php
                            class Job {
                            }
                        ?>

                <li><p><b>c.</b></p></li>
                    <p>nøkkelord som blir brukt for å lage et nytt objekt er $eple, $banan</p><br>
                        <?php
                            class Frukt {
                            public $name;
                            }
                            $eple = new Frukt();
                        ?>

                <li><p><b>d.</b></p></li>
                    <p>Vises i koden</p><br>
                        <?php
                            class Fruit {
                            public $name;
                            function set_name($name) {
                                $this->name = $name;
                            }
                            }
                            $eple = new Fruit();
                            $eple->set_name("Eple");

                            echo $eple->name;
                        ?>
                    <br>

                <li><p><b>e.</b></p></li>
                    ... <br>

                <li><p><b>f.</b></p></li>
                    <p>Konstruktor lar deg initialisere et objekts egenskaper ved opprettelse av objektet. </p><br>

                <li><p><b>g.</b></p></li>
                    <p>....</p><br>

                <li><p><b>h.</b></p></li>
                    <p>Når en klasse er definert, er det mulig å lage en ny klasse avledet fra den som utvider funksjonaliteten til 
                        den opprinnelige klassen. Opprinnelige klassen kalles superclass og barnet subclass. Hele prosessen omtales
                        som subclassing.</p><br>
            </ul>
        <h1>Oppgave 2</h1>
            <ul>
                <li><p><b>a.</b></p></li>
                    <p>Polymorfisme</p>
            </ul>

    </article>
    </section>

    <footer>
    
    </footer>

    </body>
</html>
