<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "russia";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("russia")) 
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
<title>Russia stocks traded on U.S. exchanges - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia." />
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets" />
<link rel="stylesheet" href="../css/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" href="../css/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" media="screen, projection" />
<link rel="stylesheet" href="../css/bricadr.css" media="screen, projection" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
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

<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#bricAdr").tablesorter();
		$(".bricBox").fancybox({		//About Me lightbox
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});
    } 
);
</script>
<div class="container">
  <header>
    <?php include("../includes/bricHead.htm"); ?>
    <h1><strong>Russia:</strong> Sortable list of all stocks and funds</h1>
    <h2>A list of all Russian companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h2>
  </header>
  <hr />
  <div class="column span-3">
    <script type="text/javascript" src="../js/google.vert.ad.js"></script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
  </div>
  <div class="column span-18">
    <h2><strong>Sortable Table &mdash;</strong> Click column header to sort; hold &lsquo;shift&rsquo; key to subsort second column.</h2>
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
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CTCM&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>CTC Media, Inc</td>
          <td><a href="http://finance.yahoo.com/q?s=CTCM" target="_blank">CTCM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Entertainment</td>
          <td>Television</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=OGZPY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Gazprom (1)</td>
          <td><a href="http://finance.yahoo.com/q?s=OGZPY.PK" target="_blank">OGZPY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Energy</td>
          <td> Natural gas</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=VIP&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Vimpel-Communications</td>
          <td><a href="http://finance.yahoo.com/q?s=VIP" target="_blank">VIP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LUKOY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Lukoil (2)</td>
          <td><a href="http://finance.yahoo.com/q?s=LUKOY.PK" target="_blank">LUKOY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=RSX&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Market Vectors Russia</td>
          <td><a href="http://finance.yahoo.com/q?s=RSX" target="_blank">RSX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MTL&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Mechel OAO</td>
          <td><a href="http://finance.yahoo.com/q?s=MTL" target="_blank">MTL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td>Steel &amp; Iron</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MBT&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Mobile TeleSystems</td>
          <td><a href="http://finance.yahoo.com/q?s=MBT" target="_blank">MBT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NILSY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Norilsk Nickel (9)</td>
          <td><a href="http://finance.yahoo.com/q?s=NILSY.PK" target="_blank">NILSY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Mining</td>
          <td>Ni, Pd</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NISQY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Novolipetsk Steel  (10)</td>
          <td><a href="http://finance.yahoo.com/q?s=NISQY.PK" target="_blank">NISQY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Industrial</td>
          <td>Steel</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=RNGZY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Rosneft (3)</td>
          <td><a href="http://finance.yahoo.com/q?s=RNGZY.PK" target="_blank">RNGZY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ROS&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Rostelecom OAO</td>
          <td><a href="http://finance.yahoo.com/q?s=ROS" target="_blank">ROS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SBRBF.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sberbank (5)</td>
          <td><a href="http://finance.yahoo.com/q?s=SBRBF.PK" target="_blank">SBRBF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Finance</td>
          <td>Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SGTZY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Surgutneftegas (7)</td>
          <td><a href="http://finance.yahoo.com/q?s=SGTZY.PK" target="_blank">SGTZY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TRF&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Templeton Russia &amp; E. Europe</td>
          <td><a href="http://finance.yahoo.com/q?s=TRF" target="_blank">TRF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Fund</td>
          <td>CEF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TNKBF.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>TNK-BP Holding (4)</td>
          <td><a href="http://finance.yahoo.com/q?s=TNKBF.PK" target="_blank">TNKBF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=WBD&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Wimm-Bill-Dann Foods</td>
          <td><a href="http://finance.yahoo.com/q?s=WBD" target="_blank">WBD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td>Consumer</td>
          <td>Dairy</td>
          <?php fclose ($fp); ?>
        </tr>
      </tbody>
    </table><p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
  </div>
  <div class="column span-3 last">
    <script type="text/javascript" src="../js/google.vert.ad.js"></script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
  </div>
  <hr />
  <footer>
    <p>
      <script type="text/javascript">
		var oRows = document.getElementById('bricAdr').getElementsByTagName('tr');
		var iRowCount = oRows.length - 1;
		document.write(iRowCount + ' Russian ADRs on this page.');
	  </script>
      <?php include("../includes/bricFooter.htm"); ?>
  </footer>
</div>
<div style="display: none;">
  <?php include("../includes/bricBox.htm"); ?>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
<?php
// page generation complete
// retrieve the page from the buffer 
$page = ob_get_contents(); 
// and save it in the cache for future use
$objCache->save($page, "russia");
// also display the buffer and then flush it
ob_end_flush();
}
?>
