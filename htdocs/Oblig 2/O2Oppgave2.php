<!DOCTYPE html>
<html lang="no">
<head>
<title>BMI-Kalkulator</title>
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
  height: 700px; 
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
  <h2>BMI-Kalkulator</h2>
</header>

<section>
  <nav>
    <ul>
        <p><a href="../index.php"> <--Tilbake </a></p>
    </ul>
  </nav>
  
  <article>
    <h1>BMI</h1>
    <form action="O2Oppgave2.php" method="post">
        <fieldset>
            <legend>BMI-Kalkulator</legend>
        Navn:
            <br><input id="input" type="text" name="name" placeholder="Skriv inn navn" size="20"><br>
        Høyde:
            <br><input id="input" type="number" name="height" placeholder="Skriv inn høyde i cm" size="20"><br>
        Vekt:
            <br><input id="input" type="number" name="weight" placeholder="Skriv inn vekt i kg" size="20"><br>
          
        <!--Kjønn-->
            <input type="radio" name="gender" value="male">Mann
            <input type="radio" name="gender" value="female">Dame<br>
            <pre><input type="submit" value="Send inn">  <input class="resetknappen" type="reset" value="Reset" /></pre>
        </fieldset>
    </form>
  </article>
    
<?php
if (isset($_POST["name"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["gender"])){
  $navn = $_POST["name"];
  $hoyde = $_POST["height"];
  $vekt = $_POST["weight"];
  $kjonn = $_POST["gender"];
  $bmi = $vekt/(($hoyde/100)*($hoyde/100));
  $helbmi= (round("$bmi"));

  if ($kjonn == "male"){
    if ($bmi < 17){
      echo "$navn, du har lite kroppsvekt, spis mer. DIn BMI er $helbmi";
    }
    elseif($bmi >=17 && $bmi<25){
      echo "$navn, du har vanlig kroppsvekt. Din BMI er $helbmi";
    }
    else{
      echo "$navn, Trenger ikke å si noe mer til deg feitefaen. Din BMI er $helbmi";
    }
  }

  elseif ($kjonn == "female"){
    if ($bmi < 17){
      echo "$navn, Du er litt lett og har fit body for din høyde. Din BMI er $helbmi";
    }
    elseif($bmi >=17 && $bmi<25){
      echo "$navn, Du har veldig fin kroppsvekt. Din BMI er $helbmi";
    }
    else{
      echo "$navn, du er chubby, gå for diet. Din BMI er $helbmi";
    }
  }
}
?>
  </article>
</section>

<footer>
        <form action="O2Oppgave2.php" method="post">
            <fieldset> 
              <legend>Tilbakemelding</legend>
                Navn:
                <br><input type="text" name="name" placeholder="Skriv inn navn" size="20"><br>
                Melding:
                <br> <textarea name="comment" rows="16" cols="60" placeholder="Skriv inn melding" size="20"></textarea>
                <pre>                     <input type="submit" value="Send inn">  <input class="resetknappen" type="reset" value="Reset" /></pre>
            </fieldset>
        </form>
</footer>

</body>
</html>