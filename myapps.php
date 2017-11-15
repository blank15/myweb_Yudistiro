<?php 
    @$sisi = $_GET['sisi'];
    @$volume = $sisi * $sisi * $sisi;
    @$luas = 6 * $sisi;
?>
<!DOCTYPE html>
<html>
<head>	
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CV Yudistiro Septian Dwi Saputro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
<ul class="topnav">
  <li><a  href="index.html">Profile</a></li>
  <li><a class="active" href="myapps.php">MyApps</a></li>
</ul>
<div class="row">
  <div class="card" style="padding:15px">
      <h2>Aplikasi penghitung Luas dan Volume Kubus </h2>
        <img src="img/kubus.png" style="width: 20%"/>
      <form method="GET">
            <table>
                <tr>
                    <td>sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Volume Kubus = ".$volume." cm^3<br/>";
            ?>
             <?php
                echo "Volume Kubus = ".$luas." cm^3<br/>";
            ?>
        </form>
    
  </div>
</div>
</body>
</html>