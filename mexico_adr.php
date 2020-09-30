<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "mexico";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("mexico")) 
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
<title>Mexico stocks traded on U.S. exchanges - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all Mexican stocks traded on American exchanges &mdash; Invest in Mexico. Updated <?php echo date("F o");?>." />
<meta name="keywords" content="BRIC, investing, Mexico, ADR, invest in emerging markets" />
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
    <h1><strong>Mexico:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Mexican companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
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
          <td>América Móvil</td>
          <td><a href="http://finance.yahoo.com/q?s=AMOV" target="_blank">AMOV</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AMOV&f=l1c1p2rj1y&e=.csv");
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
          <td>América Móvil</td>
          <td><a href="http://finance.yahoo.com/q?s=AMX" target="_blank">AMX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AMX&f=l1c1p2rj1y&e=.csv");
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
          <td>Cemex</td>
          <td><a href="http://finance.yahoo.com/q?s=CX" target="_blank">CX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CX&f=l1c1p2rj1y&e=.csv");
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
          <td>Industrial</td>
          <td>Construction</td>
        </tr>
        <tr>
          <td>Coca-Cola Femsa</td>
          <td><a href="http://finance.yahoo.com/q?s=KOF" target="_blank">KOF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KOF&f=l1c1p2rj1y&e=.csv");
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
          <td>Consumer</td>
          <td>Beverages</td>
        </tr>
        <tr>
          <td>Empresas ICA</td>
          <td><a href="http://finance.yahoo.com/q?s=ICA" target="_blank">ICA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ICA&f=l1c1p2rj1y&e=.csv");
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
          <td>Industrial</td>
          <td>Construction</td>
        </tr>
        <tr>
          <td>Fomento Economico Mexicano</td>
          <td><a href="http://finance.yahoo.com/q?s=FMX" target="_blank">FMX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FMX&f=l1c1p2rj1y&e=.csv");
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
          <td>Consumer</td>
          <td>Beverages</td>
        </tr>
        <tr>
          <td>Gruma</td>
          <td><a href="http://finance.yahoo.com/q?s=GMK" target="_blank">GMK</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GMK&f=l1c1p2rj1y&e=.csv");
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
          <td>Consumer</td>
          <td>Food</td>
        </tr>
        <tr>
          <td>Grupo Aeroportuario del Centro Norte</td>
          <td><a href="http://finance.yahoo.com/q?s=OMAB" target="_blank">OMAB</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=OMAB&f=l1c1p2rj1y&e=.csv");
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
          <td>Transportation</td>
          <td>Airplanes</td>
        </tr>
        <tr>
          <td>Grupo Aeroportuario del Pacifico</td>
          <td><a href="http://finance.yahoo.com/q?s=PAC" target="_blank">PAC</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PAC&f=l1c1p2rj1y&e=.csv");
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
          <td>Transportation</td>
          <td>Airplanes</td>
        </tr>
        <tr>
          <td>Grupo Aeroportuario del Sureste</td>
          <td><a href="http://finance.yahoo.com/q?s=ASR" target="_blank">ASR</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ASR&f=l1c1p2rj1y&e=.csv");
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
          <td>Transportation</td>
          <td>Airplanes</td>
        </tr>
        <tr>
          <td>Grupo Financiero Santander Mexico</td>
          <td><a href="http://finance.yahoo.com/q?s=BSMX" target="_blank">BSMX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BSMX&f=l1c1p2rj1y&e=.csv");
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
          <td>Grupo Simec</td>
          <td><a href="http://finance.yahoo.com/q?s=SIM" target="_blank">SIM</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SIM&f=l1c1p2rj1y&e=.csv");
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
          <td>Basic Materials</td>
          <td>Steel &amp; Iron</td>
        </tr>
        <tr>
          <td>Grupo Televisa</td>
          <td><a href="http://finance.yahoo.com/q?s=TV" target="_blank">TV</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TV&f=l1c1p2rj1y&e=.csv");
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
          <td>Media</td>
          <td>Media</td>
        </tr>
        <tr>
          <td>Grupo TMM</td>
          <td><a href="http://finance.yahoo.com/q?s=GTMAY" target="_blank">GTMAY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GTMAY&f=l1c1p2rj1y&e=.csv");
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
          <td>Transportation</td>
          <td>Shipping</td>
        </tr>
        <tr>
          <td>Homex</td>
          <td><a href="http://finance.yahoo.com/q?s=DHOXQ" target="_blank">DHOXQ</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DHOXQ&f=l1c1p2rj1y&e=.csv");
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
          <td>Real Estate</td>
          <td>Development</td>
        </tr>
        <tr>
          <td>Industrias Bachoco</td>
          <td><a href="http://finance.yahoo.com/q?s=IBA" target="_blank">IBA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IBA&f=l1c1p2rj1y&e=.csv");
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
          <td>Consumer</td>
          <td>Food</td>
        </tr>
        <tr>
          <td>iShares MSCI Mexico Capped</td>
          <td><a href="http://finance.yahoo.com/q?s=EWW" target="_blank">EWW</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EWW&f=l1c1p2rj1y&e=.csv");
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
          <td>Maxcom</td>
          <td><a href="http://finance.yahoo.com/q?s=MXT" target="_blank">MXT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MXT&f=l1c1p2rj1y&e=.csv");
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
          <td>Mexico Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=MXF" target="_blank">MXF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MXF&f=l1c1p2rj1y&e=.csv");
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
          <td>Mexico Equity and Income Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=MXE" target="_blank">MXE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MXE&f=l1c1p2rj1y&e=.csv");
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
          <td>ProShares Ultra Mexico Capped</td>
          <td><a href="http://finance.yahoo.com/q?s=UMX" target="_blank">UMX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=UMX&f=l1c1p2rj1y&e=.csv");
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
          <td>Wal-Mart de Mexico</td>
          <td><a href="http://finance.yahoo.com/q?s=WMMVY" target="_blank">WMMVY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=WMMVY&f=l1c1p2rj1y&e=.csv");
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
          <td>Consumer</td>
          <td>Discounter</td>
        </tr>
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO</p>
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
		document.write(iRowCount + ' Mexican ADRs on this page.');
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
$objCache->save($page, "mexico");
// also display the buffer and then flush it
ob_end_flush();
}
?>
