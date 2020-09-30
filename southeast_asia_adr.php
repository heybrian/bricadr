<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "seasia";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("seasia")) 
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
<title>Indonesia, Philippines, Malyasia and Vietnam stocks traded on U.S. exchanges - BRICADR.com</title>
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
    <h1><strong>Southeast Asia:</strong> List of all stocks and funds</h1>
    <h4>A list of all Indonesian, Filipino, Malyasian and Vietnamese companies traded on U.S. exchanges,<br>
      sortable by price, P/E, name and industry. Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h4>
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
          <td>Aberdeen Indonesia Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=IF" target="_blank">IF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IF&f=l1c1p2rj1y&e=.csv");
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
          <td>iShares Indonesia</td>
          <td><a href="http://finance.yahoo.com/q?s=EIDO" target="_blank">EIDO</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EIDO&f=l1c1p2rj1y&e=.csv");
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
          <td>iShares Philippines</td>
          <td><a href="http://finance.yahoo.com/q?s=EPHE" target="_blank">EPHE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EPHE&f=l1c1p2rj1y&e=.csv");
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
          <td>Market Vectors Indonesia Index</td>
          <td><a href="http://finance.yahoo.com/q?s=IDX" target="_blank">IDX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IDX&f=l1c1p2rj1y&e=.csv");
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
          <td>Market Vectors Vietnam</td>
          <td><a href="http://finance.yahoo.com/q?s=VNM" target="_blank">VNM</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VNM&f=l1c1p2rj1y&e=.csv");
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
          <td>P.T. Indosat</td>
          <td><a href="http://finance.yahoo.com/q?s=PTINY" target="_blank">PTINY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PTINY&f=l1c1p2rj1y&e=.csv");
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
          <td>Wireless, fixed line</td>
        </tr>
        <tr>
          <td>Philippine Long Distance</td>
          <td><a href="http://finance.yahoo.com/q?s=PHI" target="_blank">PHI</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PHI&f=l1c1p2rj1y&e=.csv");
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
          <td>Telkom Indonesia</td>
          <td><a href="http://finance.yahoo.com/q?s=TLK" target="_blank">TLK</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TLK&f=l1c1p2rj1y&e=.csv");
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
          <td>Kuala Lumpur Kepong Berhad</td>
          <td><a href="http://finance.yahoo.com/q?s=KLKBY" target="_blank">KLKBY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KLKBY&f=l1c1p2rj1y&e=.csv");
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
          <td>Palm, rubber</td>
        </tr>
        <tr>
          <td>Sime Darby Berhad</td>
          <td><a href="http://finance.yahoo.com/q?s=SMEBF" target="_blank">SMEBF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SMEBF&f=l1c1p2rj1y&e=.csv");
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
          <td>Food,  machinery</td>
        </tr>
        <tr>
          <td>Tenaga Nasional Berhad</td>
          <td><a href="http://finance.yahoo.com/q?s=TNABY" target="_blank">TNABY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TNABY&f=l1c1p2rj1y&e=.csv");
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
          <td>Utility</td>
          <td>Electricity</td>
        </tr>
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
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
		document.write(iRowCount + ' Indonesia, Philippines, Malyasia and Vietnam ADRs on this page.');
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
$objCache->save($page, "seasia");
// also display the buffer and then flush it
ob_end_flush();
}
?>
