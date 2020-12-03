<!DOCTYPE HTML>
<?php
    if(((isset($_POST["verstuur"])))&&(isset($_POST["voornaam"])))
    {
        $mysqli= new MySQLi ("localhost", "root", "", "scobra");
        if(mysqli_connect_errno())
        {
            trigger_error("Fout bij verbinding: ".$mysqli->error);
        }
        else
        {
            $sql = "INSERT INTO tblleden(Voornaam)
                    VALUES(?)";
                
                if($stmt = $mysqli->prepare($sql))
                {
                    $stmt->bind_param("s",$voornaam);
                    $voornaam = $mysqli->real_escape_string($_POST["voornaam"]);
                    
                    
                    if(!$stmt->execute())
                    {
                        echo "Het uitvoeren van de query is mislukt:";
                    }
                    else
                    {
                        echo "Het updaten is gelukt";
                    }
                    $stmt->close();
                }
                else
                {
                    echo "Er zit een fout in de query";
                }
        }
    }        
?>

<html>
<head>
    <title>Inschrijven</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
    <h1>Inschrijvingsformulier</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        
        <h4>Voornaam:<input type="text" name="voornaam" id="voornaam">Naam:<input type="text" name="naam" id="naam"></h4>
        <h4>Geboortedatum:<input type="date" name="gemeente" id="geboortedatum"></h4>
        <h4>Geslacht:</h4><p>Man:<input type="radio" name="geslacht" id="geslacht"><p>Vrouw:<input type="radio" name="geslacht" id="geslacht"></p>
        <h4>Email:<input type="email" name="mail" id="mail">Telefoonnummer<input type="text" name="telnr" id="telnr"></h4>
        <h4>Adresgegevens:</h4>
        <p>Gemeente:<input type="text" name="gemeente" id="gemeente">Postcode:<input type="text" name="postcode" id="postcode"></p>
        <p>Straat:<input type="text" name="straat" id="straat">Huisnummer:<input type="text" name="huisnr" id="huisnr"></p>
        <h4>Voornaam ouder1:<input type="text" name="voornaamO1" id="voornaamO1">Naam ouder1:<input type="text" name="naamO1" id="naamO1"></h4>
        <h4>Voornaam ouder2:<input type="text" name="voornaamO2" id="voornaamO2">Naam ouder2:<input type="text" name="naamO2" id="naamO2"></h4>
        <h4>Email ouder:<input type="email" name="mailO" id="mailO">Telefoonnummer ouder:<input type="text" name="telnrO" id="telnrO"></h4>
        <h4>Rekeningnummer:<input type="text" id="reknr" name="reknr"></h4>
        <h4>Wenst u financiële ondersteuning(Scouting Op Maat?)</h4>
        <h4>Ja:<input type="radio" name="SoM" id="SoM">Nee:<input type="radio" name="SoM" id="SoM"></h4>
        <input type="submit" value="verstuur" name="verstuur">
    </form>
        
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Start
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OverOns.html"s>Over ons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inschrijven.php">inschrijven</a>
              <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.html"s>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <!-- Page Content -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>