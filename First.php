<?php

session_start();

include("conn.php");
if(isset($_POST['login'])){
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
if(!empty($username) && !empty($password)){
    if(proveriKorisnika($username,$password)){
        $_SESSION['username'] = $username;
}else{
    echo "Pogresan username ili password";
}
}else{
    echo "Niste uneli sve podatke";
}
}
if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/respond.js"> </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
</head>
<body class="bodyclass">
    <div class="row">
    <nav class="navbar navbar-default">
        <div class="nav navbar-nav">
            <ul class="nav navbar-nav">
                <li class="liclass"><a href="#"><h5 class="liclass">Sobe</h5></a></li>
                <li class="liclass"><a href="#"><h5 class="liclass">Restoran</h5></a></li>
                <li class="liclass"><a href="#"><h5 class="liclass">Istorija</h5></a></li>
                <li class="liclass"><a href="#"><h5 class="liclass">Spa</h5></a></li>
                <li class="liclass"><a href="#"><h5 class="liclass">Kontakt</h5></a></li>
                <li class="liclass"><a href="logout.php"><h5 class="liclass">Logout</h5></a></li>
            </ul>
        </div>
    </nav>
    </div>
    <div class="image">
        <div class="row">
            <div class="col-xs-6 col-sm-4"></div>
            <div class="col-lg-10"><h1 class="h1kolona">Met air hotel</h1></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
                            </div>
                        </div>
                    </div>
                </div>

    <hr class="hrklasa">

        <div class="col-md-4">
            <div class="rezervacija">
                <div class="col-md-4 textContainer">
                    <h4>Rezervacije</h4>
                </div>
                <div class="push"></div>
                <div class="tabela">
                   <table class="table">
                       <tr>
                           <td><p>Date</p></td>
                           <td><input type="text" id="datepicker" class="form-control" placeholder="izaberi datum"></td>
                       </tr>
                       <tr>
                           <td><p>Br. noci</p></td>
                           <td><input type="text" class="form-control" placeholder="broj noci"></td>
                       </tr>
                       <tr>
                           <td><p>Br. osoba</p></td>
                           <td><input type="text" class="form-control" placeholder="broj osoba"></td>
                       </tr>
                   </table>
                   <div class="dugme"><button type="button" class="btn btn-primary active">Submit</button></div>
                </div>
                </div>
            </div>
        <div class="col-md-8">
            <div class="ribbon"><span>NAJBOLJE</span></div>
                <div class="box-soba1">
                    <div class="soba1"></div>
                </div>
        </div>

        <div class="col-md-9">
            <div class="push2"></div>
            <div class="box-restoran">
                <div class="restoran"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="push2"></div>
            <div class="opis">
                <div class="textContainer">
                    <p> Jedan od najstarijih restorana u gradu  se nalazi u nasem hotelu.
                        Veliki izbor izmedju domacih jela i usluga ciji je kvalitet gradjen godinama.
                        Nase osoblje ce uciniti da vas boravak bude nezaboravan.
                    </p>
                </div>
            </div>
        </div>

    <div class="push"></div>

    <hr class="hrklasa">

    <div class="dole">
        <div class="row">
            <div class="col-md-3">
                <div class="prevoz">
                    <div class="ikonica">
                    <i class="fa fa-bus fa-4x"></i>
                    </div>
                    <p> Mozete doci autobusom</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="prevoz">
                    <div class="ikonica">
                    <i class="fa fa-car fa-4x"></i>
                    </div>
                    <p> Mozete doci kolima</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="prevoz">
                    <div class="ikonica">
                    <i class="fa fa-train fa-4x"></i>
                    </div>
                    <p> Mozete doci vozom</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="prevoz">
                    <div class="ikonica">
                    <i class="fa fa-plane fa-4x"></i>
                    </div>
                    <p> Mozete doci avionom</p>
                </div>
            </div>
        </div>
        <div class="kvota">
            <p>„105 godina tradicije koja se nastavlja!“</p>
        </div>
    </div>

    <div class="footer navbar-fixed-bottom">
        <p class="text-muted"> Metropolitan &copy 2016
            Stafana Nemanje 34 | +381 65 778 90 90 |
            +381 64 543 34 34 | info@metair.com</p>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
    <?php
}