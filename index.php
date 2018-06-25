<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META HTTP-EQUIV="refresh" CONTENT="600; URL=index.php">
<title>IOTA Kopen</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="gratisiota.html">Gratis IOTA</a>
  <a href="iotawallet.html">Online IOTA Wallet</a>
</div>
<body id="main_body" >

	<img id="top" src="top.png" alt="">
	<div id="form_container">
	<center>
		<h1><a>IOTA Kopen</a></h1>
		<form id="form_14600" class="appnitro"  method="post" action="insert.php" target="_blank">
					<div class="form_description">
						<img src="iotaheader.gif" width="35%" height="35%">

			<p>Snel, Gemakkelijk &amp; Persoonlijk IOTA aanschaffen.</p>
		</div>
		<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tv-medium-widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-IOTAUSD/" rel="noopener" target="_blank"></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "container_id": "tv-medium-widget",
  "symbols": [
    [
      "IOTA",
      "BINANCE:IOTAUSD|1d"
    ]
  ],
  "greyText": "Quotes by",
  "gridLineColor": "#e9e9ea",
  "fontColor": "#83888D",
  "underLineColor": "#dbeffb",
  "trendLineColor": "#4bafe9",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "chartOnly": true
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<br>
<div>
		<img src="iota.png" width="15%" height="15%">
		<br>
<h3>&euro;
		<?php
		$url = "https://api.bitfinex.com/v1/ticker/iotusd";
		$json = json_decode(file_get_contents($url), true);
		$price = $json["last_price"];
		echo $price;

		?>
		<input type="hidden" name="iotaprice" id="iotaprice" value=<?php echo $price ?>>
</div

</h3>
		<br>
		<br>
		Aantal:<br>
		<input type="number" name="amount" id="amount" value="10" min="10" max="100">
		<br>
		<br>
		Totaal bedrag:<br>
		<input type="text" name="totalprice" id="totalprice" value="12,34" readonly><br>
		<sub>Incl. transactie kosten.</sub>
		<br>
		<br>
		<br>
		E-Mail:
		<br>
		<input type="email" name="email" id="email "placeholder="Vul hier uw E-Mail adres in." size="50">
		<br>
		<br>
		<br>
		IOTA ontvangst adres:
		<br>
		<input type="text" name="receiveaddress" id="receiveaddress" placeholder="Vul hier uw IOTA ontvangst adres in." size="50">
		<br>
		<br><br>
		<input type="image" src="paypalexpress.png" border="0" alt="Submit" height="30%" width="30%"/>
		<br>
		<br>
		</form>
  </form>

			<center>
		<div id="footer">
			<a target="_blank" href="https://api.whatsapp.com/send?phone=0612345678&text=Beste%20Helpdesk,%20Ik%20heb%20een%20vraag%20over%20mijn%20bestelling:"><img src="whatsapp.png" width="5%" height="5%">
				<br>
					<sub>Stel uw vraag via Whatsapp</sub>
			<br>
			Powered by <a href="http://www.cryptocoinskopen.nl">Crypto Coins Kopen</a>

		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>

		<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<sub>Deze bestelling bevat een geschatte levering en zal binnen 48 uur worden verwerkt.</sub>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
	var spinner = jQuery(this),
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.quantity-up'),
		amount = spinner.find('#amount'),
		btnDown = spinner.find('.quantity-down'),
		min = input.attr('min'),
		max = input.attr('max');

	btnUp.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue >= max) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue + 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});


	btnDown.click(function() {
		var oldValue = parseFloat(input.val());
		if (oldValue <= min) {
			var newVal = oldValue;
		} else {
			var newVal = oldValue - 1;
		}
		spinner.find("input").val(newVal);
		spinner.find("input").trigger("change");
	});

});

jQuery(document).ready(function(){

	calculateTotal();
	debugger;
	jQuery("#amount").on('change',function(event){
		debugger;
		calculateTotal();

	});

	function calculateTotal(){
		var amount = jQuery("#amount").val();
		var iotaprice = jQuery("#iotaprice").val();

		var total = amount * iotaprice;

		jQuery("#totalprice").val("€ "+total.toFixed(2));

		jQuery("#payPalUrl").attr("href", "https://www.paypal.me/orderx/"+total.toFixed(2));
	}
});

</script>
</html>
