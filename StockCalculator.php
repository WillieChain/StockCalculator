<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>StockCalculator</title>
<?php
	$serviceCharge=$_POST['serviceCharge'];
	$totalShares=$_POST['totalShares'];
	$pricePerShareBought=$_POST['pricePerShareBought'];
	$pricePerShareSold=$_POST['pricePerShareSold'];
	$totalInvested=$totalShares*$pricePerShareBought;
	$totalSold=$totalShares*$pricePerShareSold;
	$serviceChargeBought=$serviceCharge*$totalInvested;
	$serviceChargeSold=$serviceCharge*$totalSold;
	$totalServiceCharge=$serviceChargeBought+$serviceChargeSold;
	$totalRecieved=($totalSold-$serviceChargeSold)-($totalInvested-$serviceChargeBought);
	$amountGainedLost=$totalRecieved-$totalInvested;
?>	
<link href="bitnami.css" rel="stylesheet" type="text/css">
</head>		
<body>
<h1>Stock Trading Calculator</h1>	
    <p>
		<br>Amount Invested<br><label><?='$'.$totalInvested;?></label>
		<br>Total Service Charges<br><label><?='$'.$totalServiceCharge;?></label>
		<br>Amount Recieved After Selling The Stock<br><label><?='$'.$totalRecieved;?></label>
		<br>Amount Gained/Lost<br><label><?='$'.$amountGainedLost;?></label>	
	<p><form><INPUT type="button" value="Back" onClick="history.go(-1);return true;"></form></p> 
</body>
</html>