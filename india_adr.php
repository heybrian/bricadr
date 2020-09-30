<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "india";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("india")) 
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
<title>The Complete List of India ADR stocks | BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia.">
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
<noscript>
<iframe src="//www.googletagmanager.com/ns.html?id=GTM-WQ2LMV"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQ2LMV');</script> 
<!-- End Google Tag Manager -->
<div class="container">
  <header>
    <?php include("includes/bricHead.htm"); ?>
    <h1><strong>India:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Indian companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br>
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
          <td>Bombay Stock Exchange Index</td>
          <td><a href="http://finance.yahoo.com/q?s=^BSESN" target="_blank">^BSESN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=^BSESN&f=l1c1p2rj1y&e=.csv");
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
          <td>Index</td>
          <td><a href="http://finance.yahoo.com/echarts?s=MINDX+Interactive#chart3:symbol=mindx;range=2y;compare=scif+indy+iff+pin+epi+inp+ifn;indicator=sma%2850,200%29+bollinger+volume;charttype=line;crosshair=on;ohlcvalues=0;logscale=off;source=undefined" target="_blank">Compare</a></td>
        </tr>
        <tr>
          <td>Dr. Reddy&rsquo;s Laboratories</td>
          <td><a href="http://finance.yahoo.com/q?s=RDY" target="_blank">RDY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RDY&f=l1c1p2rj1y&e=.csv");
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
          <td>Health</td>
          <td>Pharma</td>
        </tr>
        <tr>
          <td>HDFC Bank</td>
          <td><a href="http://finance.yahoo.com/q?s=HDB" target="_blank">HDB</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HDB&f=l1c1p2rj1y&e=.csv");
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
          <td>ICICI Bank</td>
          <td><a href="http://finance.yahoo.com/q?s=IBN" target="_blank">IBN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IBN&f=l1c1p2rj1y&e=.csv");
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
          <td>iGATE Corporation</td>
          <td><a href="http://finance.yahoo.com/q?s=IGTE" target="_blank">IGTE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IGTE&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
        <tr>
          <td>India Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=IFN" target="_blank">IFN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IFN&f=l1c1p2rj1y&e=.csv");
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
          <td>Infosys Technolo</td>
          <td><a href="http://finance.yahoo.com/q?s=INFY" target="_blank">INFY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=INFY&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
        <tr>
          <td>iPath MSCI India Index</td>
          <td><a href="http://finance.yahoo.com/q?s=INP" target="_blank">INP</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=INP&f=l1c1p2rj1y&e=.csv");
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
          <td>ETN</td>
        </tr>
        <tr>
          <td>iShares S&amp;P India Nifty 50</td>
          <td><a href="http://finance.yahoo.com/q?s=INDY" target="_blank">INDY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=INDY&f=l1c1p2rj1y&e=.csv");
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
          <td>Mahanagar Telephone Nigam</td>
          <td><a href="http://finance.yahoo.com/q?s=MTENY" target="_blank">MTENY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MTENY&f=l1c1p2rj1y&e=.csv");
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
          <td>Telecom</td>
        </tr>
        <tr>
          <td><a href="http://www.makemytrip.com/" target="_blank">MakeMyTrip Limited</a></td>
          <td><a href="http://finance.yahoo.com/q?s=MMYT" target="_blank">MMYT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MMYT&f=l1c1p2rj1y&e=.csv");
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
          <td>Travel</td>
          <td>Ticketing</td>
        </tr>
        <tr>
          <td>Market Vectors India Small-Cap</td>
          <td><a href="http://finance.yahoo.com/q?s=SCIF" target="_blank">SCIF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SCIF&f=l1c1p2rj1y&e=.csv");
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
          <td> ETF</td>
        </tr>
        <tr>
          <td>Matthews India Investor</td>
          <td><a href="http://finance.yahoo.com/q?s=MINDX" target="_blank">MINDX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SCIF&f=l1c1p2rj1y&e=.csv");
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
          <td>MS India Investment Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=IIF" target="_blank">IIF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IIF&f=l1c1p2rj1y&e=.csv");
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
          <td>PowerShares India</td>
          <td><a href="http://finance.yahoo.com/q?s=PIN" target="_blank">PIN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PIN&f=l1c1p2rj1y&e=.csv");
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
          <td>Rediff.com India</td>
          <td><a href="http://finance.yahoo.com/q?s=REDF" target="_blank">REDF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=REDF&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
        <tr>
          <td>Sify Technologies</td>
          <td><a href="http://finance.yahoo.com/q?s=SIFY" target="_blank">SIFY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SIFY&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
        <tr>
          <td>Tata Motors Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=TTM" target="_blank">TTM</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TTM&f=l1c1p2rj1y&e=.csv");
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
          <td>Auto</td>
          <td>Production</td>
        </tr>
        <tr>
          <td>Vedanta Resources</td>
          <td><a href="http://finance.yahoo.com/q?s=VDNRF" target="_blank">VDNRF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VDNRF&f=l1c1p2rj1y&e=.csv");
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
          <td>Copper</td>
        </tr>
        <tr>
          <td>Wipro</td>
          <td><a href="http://finance.yahoo.com/q?s=WIT" target="_blank">WIT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=WIT&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
        <tr>
          <td>Wisdomtree Trust</td>
          <td><a href="http://finance.yahoo.com/q?s=EPI" target="_blank">EPI</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EPI&f=l1c1p2rj1y&e=.csv");
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
          <td>WNS (Holdings)</td>
          <td><a href="http://finance.yahoo.com/q?s=WNS" target="_blank">WNS</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=WNS&f=l1c1p2rj1y&e=.csv");
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
          <td>Consulting</td>
        </tr>
      </tbody>
    </table>
    <!--<p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>--> 
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
		document.write(iRowCount + ' Indian ADRs on this page.');
	  </script>
      <?php include("includes/bricFooter.htm"); ?>
  </footer>
</div>
<div style="display: none;">
  <?php include("includes/bricBox.htm"); ?>
</div>
<script src="js/jquery.document.ready.js" type="text/javascript"></script>
</body>
</html>
<?php
// page generation complete
// retrieve the page from the buffer 
$page = ob_get_contents(); 
// and save it in the cache for future use
$objCache->save($page, "india");
// also display the buffer and then flush it
ob_end_flush();
}
?>
