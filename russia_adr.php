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
<meta charset="utf-8">
<title>The Complete List of Russian ADR stocks | BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia. Updated <?php echo date("F o");?>.">
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/blueprint/screen.css" media="screen, projection">
<link rel="stylesheet" href="css/blueprint/print.css" media="print">
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen, projection">
<link rel="stylesheet" href="css/bricadr.css" media="screen, projection">
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
    <h1><strong>Russia:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Russian companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br>
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h4>
  </header>
  <hr>
  <div class="column span-3"> 
    <script type="text/javascript" src="js/google.vert.ad.js"></script> 
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
  </div><?php include("includes/mobile-ad.html"); ?>
  <div class="column span-18">
    <h4><strong>Sortable Table &mdash;</strong> Click column header to sort; hold &lsquo;shift&rsquo; key to subsort second column.</h4>
    <table id="bricAdr" class="tablesorter">
      <thead>
        <tr>
          <th>ADR Name</th>
          <th>Ticker</th>
          <th>Price</th>
          <th>Change</th>
          <th style="text-align:center">%</th>
          <th>P/E</th>
          <th>MarCap</th>
          <th>Yield</th>
          <th>Sector</th>
          <th>Industry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="https://www.dws-investments.com/EN/products/central-europe-russia-turkey-fund.jsp?core-key=2506" target="_blank">Central Europe, Russia and Turkey Fund</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CEE" target="_blank">CEE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CEE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>CEF</td>
        </tr>
        <tr>
          <td>CTC Media, Inc</td>
          <td><a href="http://finance.yahoo.com/q?s=CTCM" target="_blank">CTCM</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CTCM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Entertainment</td>
          <td>Television</td>
        </tr>
        <tr>
          <td><a href="http://www.direxionfunds.com/products/direxion-daily-russia-bear-3x-etf" target="_blank">Direxion Daily Russia Bear 3X</a></td>
          <td><a href="http://finance.yahoo.com/q?s=RUSS" target="_blank">RUSS</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RUSS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td><a href="http://www.direxionfunds.com/products/direxion-daily-russia-bull-3x-etf" target="_blank">Direxion Daily Russia Bull 3X</a></td>
          <td><a href="http://finance.yahoo.com/q?s=RUSL" target="_blank">RUSL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RUSL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Gazprom (1)</td>
          <td><a href="http://finance.yahoo.com/q?s=OGZPY" target="_blank">OGZPY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=OGZPY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Energy</td>
          <td> Natural gas</td>
        </tr>
        <tr>
          <td>iShares MSCI Russia Capped Index</td>
          <td><a href="http://finance.yahoo.com/q?s=ERUS" target="_blank">ERUS</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ERUS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Lukoil (2)</td>
          <td><a href="http://finance.yahoo.com/q?s=LUKOY" target="_blank">LUKOY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LUKOY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td><a href="http://www.luxoft.com" target="_blank">Luxoft</a></td>
          <td><a href="http://finance.yahoo.com/q?s=LXFT" target="_blank">LXFT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LXFT&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Technology</td>
          <td>Outsourcing</td>
        </tr>
        <tr>
          <td>Market Vectors Russia</td>
          <td><a href="http://finance.yahoo.com/q?s=RSX" target="_blank">RSX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RSX&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Market Vectors Russia Small-Cap</td>
          <td><a href="http://finance.yahoo.com/q?s=RSXJ" target="_blank">RSXJ</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RSXJ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Mechel OAO</td>
          <td><a href="http://finance.yahoo.com/q?s=MTL" target="_blank">MTL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MTL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Mining</td>
          <td>Steel &amp; Iron</td>
        </tr>
        <tr>
          <td>Mobile TeleSystems</td>
          <td><a href="http://finance.yahoo.com/q?s=MBT" target="_blank">MBT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MBT&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td>Norilsk Nickel (9)</td>
          <td><a href="http://finance.yahoo.com/q?s=NILSY" target="_blank">NILSY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NILSY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Mining</td>
          <td>Ni, Pd</td>
        </tr>
        <tr>
          <td><a href="https://www.qiwi.com/" target="_blank">Qiwi</a></td>
          <td><a href="http://finance.yahoo.com/q?s=QIWI" target="_blank">QIWI</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=QIWI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Finance</td>
          <td>Payments</td>
        </tr>
        <tr>
          <td>Rosneft (3)</td>
          <td><a href="http://finance.yahoo.com/q?s=RNFTF" target="_blank">RNFTF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RNFTF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td>Rostelecom</td>
          <td><a href="http://finance.yahoo.com/q?s=ROSYY" target="_blank">ROSYY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ROSYY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td>Sberbank (5)</td>
          <td><a href="http://finance.yahoo.com/q?s=SBRCY" target="_blank">SBRCY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SBRCY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td>SPDR S&amp;P Russia</td>
          <td><a href="http://finance.yahoo.com/q?s=RBL" target="_blank">RBL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RBL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Surgutneftegas (7)</td>
          <td><a href="http://finance.yahoo.com/q?s=SGTZY" target="_blank">SGTZY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SGTZY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td>Templeton Russia &amp; E. Europe</td>
          <td><a href="http://finance.yahoo.com/q?s=TRF" target="_blank">TRF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TRF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>CEF</td>
        </tr>
        <tr>
          <td>Vimpel-Communications</td>
          <td><a href="http://finance.yahoo.com/q?s=VIP" target="_blank">VIP</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VIP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td>Voya Russia A (formerly ING)</td>
          <td><a href="http://finance.yahoo.com/q?s=LETRX" target="_blank">LETRX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LETRX&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Fund</td>
          <td>Mutual</td>
        </tr>
        <tr>
          <td>Yandex Я́ндекс</td>
          <td><a href="http://finance.yahoo.com/q?s=YNDX" target="_blank">YNDX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YNDX&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			 ?>
          <td>Technology</td>
          <td>search</td>
        </tr>
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
  </div><?php include("includes/mobile-ad.html"); ?>
  <div class="column span-3 last"><script type="text/javascript" src="js/google.vert.ad.js"></script> 
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
  </div>
  <hr>
  <footer>
    <p> 
      <script type="text/javascript">
		var oRows = document.getElementById('bricAdr').getElementsByTagName('tr');
		var iRowCount = oRows.length - 1;
		document.write(iRowCount + ' Russian ADRs on this page.');
	  </script>
      <?php include("includes/bricFooter.htm"); ?>
  </footer>
</div>
<div style="display: none;">
  <?php include("includes/bricBox.htm"); ?>
</div>
<script src="js/jquery.document.ready.js" type="text/javascript"></script>
</body></html>
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
