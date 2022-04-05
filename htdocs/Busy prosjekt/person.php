<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BuSy Prosjekt</title>
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
    <h2>Project BuSy</h2>
    </header>

    <section>
    <nav>
        <a href="../Busy prosjekt/entitet.php"><--Tilbake</a>
    </nav>
    
    <article>
        <h1>Kontaktsmodul</h1>
        <form action="person.php" method="post">
        <fieldset>
            <legend>Person</legend>
        Fornavn:
            <br><input id="input" type="text" name="name" placeholder="Skriv inn navn" size="20"><br><br>
        Etternavn:
            <br><input id="input" type="text" name="lastname" placeholder="Skriv inn etternavn" size="20"><br><br>
        Tittel:
            <br><input id="input" type="text" name="tittel" placeholder="Skriv inn tittel" size="20"><br><br>
        Epost:
            <br><input id="input" type="text" name="epost" placeholder="Skriv inn epost" size="20"><br><br>
        Telefon nummer:
            <br><input id="input" type="number" name="telephonenumber" placeholder="Skriv inn nummer" size="20"><br><br>
        Firmatilhørighet:
            <br><input id="input" type="text" name="Firmatilhørighet" placeholder="Skriv inn firmatilhørighet" size="20"><br><br> 

    
            <pre><input type="submit" value="Send inn">  <input class="resetknappen" type="reset" value="Reset" /></pre>
        </fieldset>
    </form>
       
    </article>
    </section>

    <footer>
    
    </footer>

    </body>
</html>

