<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "south_america";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("south_america")) 
{

// if so, display it
echo $page;

// add a message indicating this is cached output: echo " [cached]";
}

else
{
// no cache
// so display the HTML output
// and save it to a buffer
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>South America stocks traded on U.S. exchanges - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia. Updated <?php echo date("F o");?>." />
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets" />
<link rel="stylesheet" href="css/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" href="css/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen, projection" />
<link rel="stylesheet" href="css/bricadr.css" media="screen, projection" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WQ2LMV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQ2LMV');</script>
<!-- End Google Tag Manager -->
<div class="container">
  <header>
    <?php include("includes/bricHead.htm"); ?>
    <h1><strong>South America:</strong> All stocks and funds</h1>
    <h4>A list of all South American companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h4>
  </header>
  <hr />
  <div class="column span-3">
    <script type="text/javascript" src="js/google.vert.ad.js"></script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
  </div>
  <div class="column span-18">
    <h4><strong>Sortable Table &mdash;</strong> Click column header to sort; hold &lsquo;shift&rsquo; key to subsort second column.</h4>
    <table id="bricAdr" class="tablesorter">
      <thead>
        <tr>
          <th>ADR Name</th>
          <th>Ticker</th>
          <th>Price</th>
          <th>Change</th>
          <th>P/E</th>
          <th>MarCap</th>
          <th>Sector</th>
          <th>Industry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ISL&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Aberdeen Israel Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=ISL" target="_blank">ISL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td>Investment bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AMPL&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Ampal-American Israel Corp.</td>
          <td><a href="http://finance.yahoo.com/q?s=AMPL" target="_blank">AMPL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Finance</td>
          <td>Investment bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AU&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>AngloGold Ashanti</td>
          <td><a href="http://finance.yahoo.com/q?s=AU" target="_blank">AU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td>Gold</td>
          <?php fclose ($fp); ?>
        </tr>
        
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CEL&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Cellcom Israel</td>
          <td><a href="http://finance.yahoo.com/q?s=CEL" target="_blank">CEL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Telecom</td>
          <td>Wireless (celular)</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DROOY&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>DRDGOLD Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=DROOY" target="_blank">DROOY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td> Gold</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FQVLF.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>First Quantum Minera (Zambia)</td>
          <td><a href="http://finance.yahoo.com/q?s=FQVLF.PK" target="_blank">FQVLF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td> Copper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GFI&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Gold Fields Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=GFI" target="_blank">GFI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td> Gold</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HMY&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Harmony Gold Mining Co. Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=HMY" target="_blank">HMY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td> Gold</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=IMPUY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Impala Platinum Holdings</td>
          <td><a href="http://finance.yahoo.com/q?s=IMPUY.PK" target="_blank">IMPUY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td>Platinum</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=EIS&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>iShares MSCI Israel Cap Invest</td>
          <td><a href="http://finance.yahoo.com/q?s=EIS" target="_blank">EIS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=EZA&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>iShares South Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=EZA" target="_blank">EZA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AFK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Market Vectors Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=AFK" target="_blank">AFK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=EGPT&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Market Vectors Egypt</td>
          <td><a href="http://finance.yahoo.com/q?s=EGPT" target="_blank">EGPT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MTNOY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>MTN Group</td>
          <td><a href="http://finance.yahoo.com/q?s=MTNOY.PK" target="_blank">MTNOY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td> Telecom (celular)</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NPSNY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Naspers</td>
          <td><a href="http://finance.yahoo.com/q?s=NPSNY.PK" target="_blank">NPSNY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Consumer</td>
          <td> Media</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NAFAX&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Nile Pan Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=NAFAX" target="_blank">NAFAX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> Mutual</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ORSDF.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Orascom Construction Industries (Egypt)</td>
          <td><a href="http://finance.yahoo.com/q?s=ORSDF.PK" target="_blank">ORSDF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Industry</td>
          <td> Construction</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SPP&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sappi Limited</td>
          <td><a href="http://finance.yahoo.com/q?s=SPP" target="_blank">SPP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SSL&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sasol</td>
          <td><a href="http://finance.yahoo.com/q?s=SSL" target="_blank">SSL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Energy</td>
          <td> Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GAF&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>SPDR Emerging Middle East &amp; Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=GAF" target="_blank">GAF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Consumer</td>
          <td> Paper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SBGOY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Standard Bank Group</td>
          <td><a href="http://finance.yahoo.com/q?s=SBGOY.PK" target="_blank">SBGOY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Finance</td>
          <td> Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TLKGY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Telkom SA</td>
          <td><a href="http://finance.yahoo.com/q?s=TLKGY.PK" target="_blank">TLKGY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td> Telecom (fixed)</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TRAMX&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>T. Rowe Price Africa &amp; Middle East</td>
          <td><a href="http://finance.yahoo.com/q?s=TRAMX" target="_blank">TRAMX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td> Mutual</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SZR&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>WisdomTree Dreyfus South African Rand</td>
          <td><a href="http://finance.yahoo.com/q?s=SZR" target="_blank">SZR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
      </tbody>
    </table><p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
  </div>
  <div class="column span-3 last">
    <script type="text/javascript" src="js/google.vert.ad.js"></script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
  </div>
  <hr />
  <footer>
    <p>
      <script type="text/javascript">
		var oRows = document.getElementById('bricAdr').getElementsByTagName('tr');
		var iRowCount = oRows.length - 1;
		document.write(iRowCount + ' South American ADRs on this page.');
	  </script>
      <?php include("includes/bricFooter.htm"); ?>
  </footer>
</div>
<div style="display: none;">
  <?php include("includes/bricBox.htm"); ?>
</div>
</body>
</html>
<?php
// page generation complete
// retrieve the page from the buffer 
$page = ob_get_contents(); 
// and save it in the cache for future use
$objCache->save($page, "south_america");
// also display the buffer and then flush it
ob_end_flush();
}
?>
