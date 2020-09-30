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
<title>South America ADRs - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia. Updated <?php echo date("F o");?>." />
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets" />
<link rel="stylesheet" href="css/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" href="css/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen, projection" />
<link rel="stylesheet" href="css/bricadr.css" media="screen, projection" />
<script src="https://www.google.com/jsapi?key=ABQIAAAAMbnQxKt1e2Pu4OzGnyKBPxTxhbNBmyK5psiFbd9TaTzfHM21DRThiC7BMuHe3OIs8IZ0f0vJbrcKyw" type="text/javascript"></script>
<script type="text/javascript">
	google.load("jquery", "1.4.4");
	google.load("jqueryui", "1.8.7");
</script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
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
    <?php include("includes/bricHead.htm"); ?>
    <h1><strong>South America:</strong> All stocks and funds</h1>
    <h4>A list of all South American companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h4>
  </header>
  <hr />
  <div class="column span-3"> 
    <script type="text/javascript"><!--
	google_ad_client = "ca-pub-4859703351303905";
	/* BRIC ADR (New) Verticle White */
	google_ad_slot = "9490176918";
	google_ad_width = 120;
	google_ad_height = 600;
	//-->
	</script> 
    <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
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
        <tr>
          <td>BBVA Banco Frances Argintina</td>
          <td><a href="http://finance.yahoo.com/q?s=BFR" target="_blank">BFR</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BFR&f=l1c1p2rj1y&e=.csv");
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
          <td>Compania de Minas Buenaventura (Peru)</td>
          <td><a href="http://finance.yahoo.com/q?s=BVN" target="_blank">BVN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BVN&f=l1c1p2rj1y&e=.csv");
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
          <td>Gold</td>
        </tr>
        <tr>
          <td>Petrobras Argentina</td>
          <td><a href="http://finance.yahoo.com/q?s=PZE" target="_blank">PZE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PZE&f=l1c1p2rj1y&e=.csv");
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
      </tbody>
    </table>
    <script type="text/javascript">
	var rowCount = document.getElementById("bricAdr").getElementsByTagName("tr").length; // count rows
	for (i=1; i<rowCount; i++) {
	
	mytable	= document.getElementsByTagName("table")[0]; // navigate to table
	myrow	= mytable.getElementsByTagName("tr")[i]; // navigate to the second tr
	mycel	= myrow.getElementsByTagName("td")[3]; // navigate to the third td
	mynumber= mycel.innerHTML.charAt(0);

	if(mynumber=="-") {
		mycel.style.color = "#b22222";
		}
	if(mynumber=="+") {
		mycel.style.color = "green";
		}
	}
   </script>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
  </div>
  <div class="column span-3 last"> 
    <script type="text/javascript"><!--
	google_ad_client = "ca-pub-4859703351303905";
	/* BRIC ADR (New) Verticle White */
	google_ad_slot = "9490176918";
	google_ad_width = 120;
	google_ad_height = 600;
	//-->
	</script> 
    <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 
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
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15339552-1");
pageTracker._trackPageview();
} catch(err) {}</script>
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
