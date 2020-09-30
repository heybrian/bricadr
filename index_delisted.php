<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "china";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("china")) 
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
<title>China stocks traded on U.S. exchanges - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia." />
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
    <h1><strong>China:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Chinese companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
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
          <th>Change</th>          <th style="text-align:center">%</th>
<th>P/E</th>
          <th>MarCap</th>
          <th>Yield</th>
          <th>Sector</th>
          <th>Industry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Noah Education</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NED" target="_blank">NED</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NED&f=l1c1p2rj1y&e=.csv");
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
          <td>Services</td>
          <td>Education</td>
        </tr><tr>
          <td><a href="http://www.ambow.com.cn/" target="_blank">Ambow Education Holding</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMBO" target="_blank">AMBO</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AMBO&f=l1c1p2rj1y&e=.csv");
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
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td><a href="http://www.asiainfo.com/" target="_blank">AsiaInfo-Linkage</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ASIA" target="_blank">ASIA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ASIA&f=l1c1p2rj1y&e=.csv");
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
          <td>Software</td>
        </tr>
        <tr>
          <?php
			//stock quote script
			//this is the url for Yahoo's stock quote, we are opening it for reading
			//r2 = P/E; v=volume; j1=MarCap;
			$fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ssrx&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>3SBIO</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SSRX" target="_blank">SSRX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php
			//close the filehandle $fp
			fclose ($fp);
			?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=VNET&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.21vianet.com.cn/cn/index/" target="_blank">21Vianet Group Inc</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VNET" target="_blank">VNET</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Data center</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JOBS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.51job.com/" target="_blank">51job</a><span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JOBS" target="_blank">JOBS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Staffing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SVN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.7daysinn.com/" target="_blank">7 Days Group Holdings</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SVN" target="_blank">SVN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Hotels</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=APWR&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>A-Power Energy Generation</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=APWR" target="_blank">APWR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Electricity</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ATV&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.chinadrtv.com/" target="_blank">Acorn</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ATV" target="_blank">ATV</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>TV sales</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ACTS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.actions-semi.com/" target="_blank">Actions Semiconductor</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ACTS" target="_blank">ACTS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Semiconductors</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FEED&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>AgFeed Industries<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FEED" target="_blank">FEED</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Farm products</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GRO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.agriacorp.com/" target="_blank">Agria Corp</a>.<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GRO" target="_blank">GRO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Agribiz</td>
          <td>Seed/sheep</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AMCN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>AirMedia Group Inc.</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMCN" target="_blank">AMCN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Airports</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ALBCF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Alibaba.com (1688.HK) &uarr;27</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ALBCF.PK" target="_blank">ALBCF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Internet</td>
          <td>B2B</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ACH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Aluminum Corp. Of China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ACH" target="_blank">ACH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Mining</td>
          <td>Aluminum</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AMBO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.ambow.com.cn/" target="_blank">Ambow Education Holding</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMBO" target="_blank">AMBO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ADY&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>American Dairy<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ADY" target="_blank">ADY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Dairy</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ALN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>American Lorain Corporation<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ALN" target="_blank">ALN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Chestnuts</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AOB&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>American Oriental Bioengineering<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AOB" target="_blank">AOB</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Biotech</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AMCF&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Andatee China Marine Fuel<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMCF" target="_blank">AMCF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Marine fuel</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ANPDF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Anta Sports (2020.HK) &uarr;21</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ANPDF.PK" target="_blank">ANPDF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Sporting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ASIA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.asiainfo.com/" target="_blank">AsiaInfo-Linkage</a><span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ASIA" target="_blank">ASIA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Software</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ATAI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ATA Inc<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ATAI" target="_blank">ATAI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Testing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AUTC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.autokaiyuan.com/" target="_blank">AutoChina International</a><span class="green">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AUTC" target="_blank">AUTC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Leasing trucks</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=AMAP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>AutoNavi Holdings<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMAP" target="_blank">AMAP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Navigation</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BIDU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Baidu &uarr;17</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BIDU" target="_blank">BIDU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BCMXY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Bank Of Communications (3328.HK) &uarr;11</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BCMXY.PK" target="_blank">BCMXY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BSPM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Biostar Pharmaceuticals<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BSPM" target="_blank">BSPM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Marketing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BITA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.bitauto.com" target="_blank">Bitauto Holdings</a><span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BITA" target="_blank">BITA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Research</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BONA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Bona Film Group<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BONA" target="_blank">BONA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Entertainment</td>
          <td>Movies</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CIS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.camelotchina.com/" target="_blank">Camelot Information Systems</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CIS" target="_blank">CIS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>IT Consulting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CYOU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Changyou.com</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CYOU" target="_blank">CYOU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHRM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Charm Communications<span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHRM" target="_blank">CHRM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Agency</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CPC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ChemSpec International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CPC" target="_blank">CPC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Chemicals</td>
          <td>Flourine</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <td>China Medical Technologies</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMEDQ" target="_blank">CMEDQ</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CMEDQ&f=l1c1p2rj1y&e=.csv");
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
          <td>Devices</td>
        </tr>
        <tr>
          <td>China North East Petroleum</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNEP" target="_blank">CNEP</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CNEP&f=l1c1p2rj1y&e=.csv");
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
          <td>ChinaEdu</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEDU" target="_blank">CEDU</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CEDU&f=l1c1p2rj1y&e=.csv");
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
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td>Fuqi International</td>
          <td><a href="http://finance.yahoo.com/q/pr?s=FUQI" target="_blank">FUQI</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FUQI&f=l1c1p2rj1y&e=.csv");
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
          <td>Jewelry</td>
        </tr>
        <tr>
          <td>Jade International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JADE" target="_blank">JADE</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JADE&f=l1c1p2rj1y&e=.csv");
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
          <td>Jewelry</td>
        </tr>
        <tr>
          <td>Linktone</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LTON" target="_blank">LTON</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LTON&f=l1c1p2rj1y&e=.csv");
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
          <td>Wireless</td>
        </tr>
        <tr>
          <td><a href="http://www.spreadtrum.com/chs/" target="_blank">Spreadtrum Communications</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SPRD" target="_blank">SPRD</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SPRD&f=l1c1p2rj1y&e=.csv");
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
          <td>Semiconductors</td>
        </tr>
        <tr>
          <td>Tri-Tech Holding</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TRIT" target="_blank">TRIT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TRIT&f=l1c1p2rj1y&e=.csv");
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
          <td>Water treatment</td>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CAGC.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Agritech<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CAGC.PK" target="_blank">CAGC.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Agribiz</td>
          <td>Fertilizer</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CAAS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Automotive Systems<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CAAS" target="_blank">CAAS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Steering</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHBT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.chn-biotics.com/" target="_blank">China-Biotics</a><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHBT" target="_blank">CHBT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>probiotics</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CBPO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Biologic Products<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CBPO" target="_blank">CBPO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma R&amp;D</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CCIH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.chinacache.com/" target="_blank">ChinaCache International</a><span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?s=CCIH" target="_blank">CCIH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>IT content</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CICHF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.ccb.com/" target="_blank">China Construction Bank</a> (0939.HK) &uarr;3</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CICHF.PK" target="_blank">CICHF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=STV&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Digital TV Holding</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=STV" target="_blank">STV</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>TV</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Distance Education</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DL" target="_blank">DL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CEA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Eastern Airlines</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEA" target="_blank">CEA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Transportation</td>
          <td>Airline</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CEDU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ChinaEdu<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEDU" target="_blank">CEDU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CEU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Education Alliance Inc.<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEU" target="_blank">CEU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CELM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Electric Motors<span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CELM" target="_blank">CELM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Motors</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SNP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Energy (Oil) &amp; Chemical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SNP" target="_blank">SNP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CFSG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Fire &amp; Security Group</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CFSG" target="_blank">CFSG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Fire &amp; Safety</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JRJC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Finance Online</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JRJC" target="_blank">JRJC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Quote content</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CGA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.cgagri.com/" target="_blank">China Green Agriculture</a><span style="color: #b22222;">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CGA" target="_blank">CGA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Agribiz</td>
          <td>Fertilizer</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GRRF&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China GrenTech</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GRRF" target="_blank">GRRF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Wireless</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Hydroelectric<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHC" target="_blank">CHC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Hydro</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CNIT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.chinacnit.com/" target="_blank">China Information Technology</a><span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNIT" target="_blank">CNIT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Security</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CIIC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Infrastructure Investment<span style="color: #b22222;">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CIIC" target="_blank">CIIC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Construction</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CBEH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Integrated Energy<span style="color: #b22222;">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CBEH" target="_blank">CBEH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Biofuel</td>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CIL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Intelligent Lighting<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CIL" target="_blank">CIL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Lights</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CJJD&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Jo-Jo Drugstores<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CJJD" target="_blank">CJJD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Pharmacy</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=KH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Kanghui<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KH" target="_blank">KH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Devices</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LFC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Life Insurance &uarr;2</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LFC" target="_blank">LFC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Insurance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HTHT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Lodging Group<span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HTHT" target="_blank">HTHT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Hotels</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CMFO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Marine Food Group<span style="color: #b22222;">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMFO" target="_blank">CMFO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Seafood</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CMM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Mass Media</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMM" target="_blank">CMM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Agency</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CCME.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China MediaExpress Holdings</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CCME.PK" target="_blank">CCME.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Bus TVs</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CMED&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Medical Technologies</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMED" target="_blank">CMED</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Devices</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CIHKY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Merchants Bank &uarr;7</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CIHKY.PK" target="_blank">CIHKY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CNR&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Metro-Rural Holdings</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNR" target="_blank">CNR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Wholesale</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MY&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Ming Yang Wind Power<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MY" target="_blank">MY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Wind</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Mobile &uarr;1</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHL" target="_blank">CHL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CEO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China National Offshore Oil</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEO" target="_blank">CEO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHNG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Natural Gas, Inc.<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHNG" target="_blank">CHNG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Nat gas</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=BORN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China New Borun Corporation</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BORN" target="_blank">BORN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Bijiu</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NPD&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.nepstar.cn/" target="_blank">China Nepstar Chain Drugstore</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NPD" target="_blank">NPD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Pharmacy</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NEP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China North East Petroleum<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NEP" target="_blank">NEP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NKBP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Nuokang Bio-Pharma<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NKBP" target="_blank">NKBP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>BioPharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CREQF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Rare Earth (<a href="http://finance.yahoo.com/q?s=0769.HK" target="_blank">0769.HK</a>)</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CREQF.PK" target="_blank">CREQF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Mining</td>
          <td>Rare earths</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CRIC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Real Estate Information</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CRIC" target="_blank">CRIC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Real Estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=csr&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Security &amp; Surveillance<span style="color: #b22222;">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?s=CSR" target="_blank">CSR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Security</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=KUN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Shenghuo Pharmaceutical<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KUN" target="_blank">KUN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>OTC &amp; ginseng</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SHZ&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Shen Zhou Mining &amp; Resources</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SHZ" target="_blank">SHZ</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Mining</td>
          <td>Flourite / copper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CSKI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Sky One Medical<span class="red">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CSKI" target="_blank">CSKI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>OTC</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ZNH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Southern Airlines</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ZNH" target="_blank">ZNH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Transportation</td>
          <td>Airline</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CSUN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Sunergy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CSUN" target="_blank">CSUN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CNTF&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Techfaith Wireless Communication</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNTF" target="_blank">CNTF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Wireless</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Telecom</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHA" target="_blank">CHA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ctfo&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.chinatransinfo.com/" target="_blank">China TransInfo Technology</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CTFO" target="_blank">CTFO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Transportation</td>
          <td>Software</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CHU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Unicom (Hong Kong)</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHU" target="_blank">CHU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CVVT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.cvalve.com/" target="_blank">China Valves Technology</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CVVT" target="_blank">CVVT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Valves</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CNYD&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>China Yida Holding</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNYD" target="_blank">CNYD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Tourism</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CLPHY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>CLP Holdings Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CLPHY.PK" target="_blank">CLPHY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Insurance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CISG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>CNinsure Inc.<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CISG" target="_blank">CISG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Insurance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CCSC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Country Style Cooking Restaurant<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?s=CCSC" target="_blank">CCSC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Restaurants</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=cogo&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Cogo Group, Inc.</td>
          <td><a href="http://finance.yahoo.com/q?s=COGO" target="_blank">COGO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Electronics</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CTRP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Ctrip.com International &uarr;33<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CTRP" target="_blank">CTRP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Ticketing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DQ&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Daqo New Energy Corp.<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DQ" target="_blank">DQ</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DEER&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Deer Consumer Products<span class="red">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DEER" target="_blank">DEER</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Kitchen</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DHRM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Dehaier Medical Systems<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DHRM" target="_blank">DHRM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Devices</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DNFGF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Dongfeng Motor Group &uarr;20</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DNFGF.PK" target="_blank">DNFGF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Production</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DGW&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Duoyuan Global Water</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DGW" target="_blank">DGW</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Water treatment</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DYNP.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Duoyuan Printing, Inc.<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?s=DYNP.PK" target="_blank">DYNP.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Printing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DANG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>E-Commerce China Dangdang<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DANG" target="_blank">DANG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>e-Commerce</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=EJ&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>E-House (China)</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=EJ" target="_blank">EJ</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Real Estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LONG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>eLong</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LONG" target="_blank">LONG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Ticketing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FMCN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Focus Media Holding</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FMCN" target="_blank">FMCN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Displays</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FUQI.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Fuqi International<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q/pr?s=FUQI.PK" target="_blank">FUQI.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Jewelry</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FFHL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Fuwei Films</td>
          <td><a href="http://finance.yahoo.com/q/pr?s=FFHL" target="_blank">FFHL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Plastic</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=fsin&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Fushi Copperweld<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q/pr?s=FSIN" target="_blank">FSIN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Copper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GELYF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.geelyauto.com.hk/" target="_blank">Geely Automobile</a> (0175.HK) &uarr;49</td>
          <td><a href="http://finance.yahoo.com/q?s=GELYF.PK" target="_blank">GELYF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Production</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=gsi&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>General Steel Holdings</td>
          <td><a href="http://finance.yahoo.com/q?s=GSI" target="_blank">GSI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Steel</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Giant Interactive Group</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GA" target="_blank">GA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GEDU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Global Education &amp; Technology</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GEDU" target="_blank">GEDU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GAI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Global-Tech Advanced Innovations</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GAI" target="_blank">GAI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Appliances</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GWLLF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Great Wall Motor</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GWLLF.PK" target="_blank">GWLLF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Production</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GSH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.gsrc.com/" target="_blank">Guangshen Railway</a><span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GSH" target="_blank">GSH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Transportation</td>
          <td>RxR</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GFRE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Gulf Resources<span class="red">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GFRE" target="_blank">GFRE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Chemicals</td>
          <td>Bromine</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Gushan Environmental Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GU" target="_blank">GU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HRELY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Haier Electronic (<a href="http://finance.yahoo.com/q?s=1169.HK&ql=0" target="_blank">1169.HK</a>) &uarr;36</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HRELY.PK" target="_blank">HRELY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Appliances</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HSOL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Hanwha SolarOne</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HSOL" target="_blank">HSOL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HRBN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Harbin Electric<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HRBN" target="_blank">HRBN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Motors</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HSFT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.hisoft.com/" target="_blank">HiSoft Technology International</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HSFT" target="_blank">HSFT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Consulting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HOLI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Hollysys Automation Technologies</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HOLI" target="_blank">HOLI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Electric</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HMIN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Home Inns &amp; Hotels Management</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HMIN" target="_blank">HMIN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Hotels</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HNP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Huaneng Power International<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HNP" target="_blank">HNP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Utilities</td>
          <td>Electricity</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CTC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>IFM Investments (Century 21 China)<span class="green">*</span><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CTC" target="_blank">CTC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Real Estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=IDCBF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ICBC (<a href="http://finance.yahoo.com/q?s=1398.HK&ql=0" target="_blank">1398.HK</a>) &uarr;4</td>
          <td><a href="http://finance.yahoo.com/q?s=IDCBF.PK" target="_blank">IDCBF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Bank</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ewh&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>iShares MSCI Hong Kong Index</td>
          <td><a href="http://finance.yahoo.com/q?s=EWH" target="_blank">EWH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ewt&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>iShares MSCI Taiwan Index</td>
          <td><a href="http://finance.yahoo.com/q?s=EWT" target="_blank">EWT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ISS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.isoftstone.com/" target="_blank">iSoftStone Holdings</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ISS" target="_blank">ISS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Consulting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JASO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>JA Solar</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JASO" target="_blank">JASO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JADE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Jade International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JADE" target="_blank">JADE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Jewelry</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JGBO&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.jiangbopharma.com/" target="_blank">Jiangbo Pharmaceuticals</a><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JGBO" target="_blank">JGBO</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=DATE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Jiayuan.com<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DATE" target="_blank">DATE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Dating</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=JKS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>JinkoSolar<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JKS" target="_blank">JKS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=KONE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Kingtone Wirelessinfo Solution<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KONE" target="_blank">KONE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Mobile software</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=KONG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>KongZhong</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KONG" target="_blank">KONG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Telecom</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=KUTV&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Ku6 Media Co.</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KUTV" target="_blank">KUTV</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Video sharing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LLEN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>L &amp; L Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LLEN" target="_blank">LLEN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Coal</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GAGA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.legaga.com.hk/html/index.php" target="_blank">Le Gaga Holdings</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?s=GAGA" target="_blank">GAGA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Vegetables</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LNVGF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://lenovo.com/" target="_blank">Lenovo</a> (<a href="http://finance.yahoo.com/q?s=0992.HK&ql=0" target="_blank">0992.HK</a>) &uarr;12</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LNVGF.PK" target="_blank">LNVGF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Hardware</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LAS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Lentuo International Inc.<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q/pr?s=LAS" target="_blank">LAS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Retail</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LDK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>LDK Solar</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LDK" target="_blank">LDK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LNNGF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Li Ning Company (<a href="http://finance.yahoo.com/q?s=2331.HK&ql=0" target="_blank">2331.HK</a>) &uarr;19</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LNNGF.PK" target="_blank">LNNGF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Sporting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LIWA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Lihua International<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LIWA" target="_blank">LIWA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Copper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LTON&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Linktone</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LTON" target="_blank">LTON</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Wireless</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LFT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Longtop Financial Technologies<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LFT" target="_blank">LFT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Finance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=LPH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Longwei Petroleum Investment</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LPH" target="_blank">LPH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil transport</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=PEK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Market Vectors China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PEK" target="_blank">PEK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CNY&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Market Vectors RMB/USD</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNY" target="_blank">CNY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MCOX&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.m18.com/" target="_blank">Mecox Lane Limited</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MCOX" target="_blank">MCOX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>&#9792; clothes</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MR&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Mindray Medical International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MR" target="_blank">MR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Devices</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=caf&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Morgan Stanley China A-Share</td>
          <td><a href="http://finance.yahoo.com/q?s=CAF" target="_blank">CAF</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>CEF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NTES&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Netease.com &uarr;34</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NTES" target="_blank">NTES</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Security</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NQ&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>NetQin Mobile<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NQ" target="_blank">NQ</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=EDU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>New Oriental Education &uarr;40</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=EDU" target="_blank">EDU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NINE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Ninetowns Internet Technology</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NINE" target="_blank">NINE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NED&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Noah Education</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NED" target="_blank">NED</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NOAH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Noah Holdings<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NOAH" target="_blank">NOAH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Asset Management</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=ONP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Orient Paper<span class="red">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ONP" target="_blank">ONP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Paper</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SEED&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Origin Agritech Limited</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SEED" target="_blank">SEED</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Agribiz</td>
          <td>Farm products</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=OSN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Ossen Innovation Co.<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=OSN" target="_blank">OSN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Steel</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=QXM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Qiao Xing Mobile Communication<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=QXM" target="_blank">QXM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Wireless</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=QIHU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Qihoo 360 Technology</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=QIHU" target="_blank">QIHU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=PWRD&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Perfect World</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PWRD" target="_blank">PWRD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=FENG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Phoenix New Media<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FENG" target="_blank">FENG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=PIAIF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.pingan.com/" target="_blank">Ping An Insurance</a> <a href="http://finance.yahoo.com/q?s=2318.HK" target="`_blank">(2318.HK)</a> &uarr;6</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PIAIF.PK" target="_blank">PIAIF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Insurance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=PTR&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>PetroChina</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PTR" target="_blank">PTR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=PUDA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Puda Coal<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PUDA" target="_blank">PUDA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Coal</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SOL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ReneSola</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SOL" target="_blank">SOL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=RENN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.renren-inc.com/en/" target="_blank">Renren</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=RENN" target="_blank">RENN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Social networking</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=RINO.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>RINO International<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=RINO.PK" target="_blank">RINO.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Water treatment</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=GAME&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Shanda Games</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GAME" target="_blank">GAME</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SNDA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Shanda Interactive Entertainment</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SNDA" target="_blank">SNDA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SDTH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>ShengdaTech<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SDTH" target="_blank">SDTH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Chemicals</td>
          <td>NPCC</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SCR&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Simcere Pharmaceutical<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SCR" target="_blank">SCR</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SINA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sina Corporation</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SINA" target="_blank">SINA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SCEI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sino Clean Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SCEI" target="_blank">SCEI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Coal-water slurry fuel</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SCOK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>SinoCoking and Coke Chemical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SCOK" target="_blank">SCOK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Coal</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SHI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sinopec Shanghai Petrochemical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SHI" target="_blank">SHI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Chemicals</td>
          <td>Synthetics</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CTE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>SinoTech Energy<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CTE" target="_blank">CTE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil recovery</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=MOBI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.sky-mobi.com/" target="_blank">Sky-mobi Limited</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MOBI" target="_blank">MOBI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Mobile software</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SPU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>SkyPeople Fruit Juice</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SPU" target="_blank">SPU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Fruit juice</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SKBI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Skystar Bio-Pharmaceutical<span class="red">*</span><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SKBI" target="_blank">SKBI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Vet drugs</td>
          <?php fclose ($fp); ?>
        </tr>
        
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SOHU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Sohu.com &uarr;32</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SOHU" target="_blank">SOHU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Internet</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SORL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.sorl.cn/" target="_blank">SORL Auto Parts</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SORL" target="_blank">SORL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Brakes</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SFUN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>SouFun Holdings</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SFUN" target="_blank">SFUN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Real estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SPRD&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.spreadtrum.com/chs/" target="_blank">Spreadtrum Communications</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SPRD" target="_blank">SPRD</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Semiconductors</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=STP&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Suntech Power</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=STP" target="_blank">STP</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <td>Universal Travel Group</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=UTRA" target="_blank">UTRA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=UTRA&f=l1c1p2rj1y&e=.csv");
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
          <td>Reservations</td>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SYUT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.shengyuan.com.cn/web/index.jsp" target="_blank">Synutra International</a><span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SYUT" target="_blank">SYUT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Dairy</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=SYSW&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.syswin.com/" target="_blank">Syswin Inc.</a><span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SYSW" target="_blank">SYSW</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Finance</td>
          <td>Real Estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=XRS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>TAL Education Group<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XRS" target="_blank">XRS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TCTZF.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.tencent.com.hk/" target="_blank">Tencent Holdings</a> (0700.HK) &uarr;8</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TCTZF.PK" target="_blank">TCTZF.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Chat</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=NCTY&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>The9</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NCTY" target="_blank">NCTY</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Gaming</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=OINK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tianli Agritech<span class="orange">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=OINK" target="_blank">OINK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Pork bellies</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TPI&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tianyin Pharmaceutical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TPI" target="_blank">TPI</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TBV&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tiens Biotech Group<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TBV" target="_blank">TBV</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>OTC</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TCM&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tongjitang Chinese Medicines</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TCM" target="_blank">TCM</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TXIC.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tongxin International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TXIC.PK" target="_blank">TXIC.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Chassis</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TSL&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Trina Solar<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TSL" target="_blank">TSL</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TSGTY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.tsingtao.com.cn/" target="_blank">Tsingtao Brewery</a><span class="green">*</span> (<a href="http://finance.yahoo.com/q?s=0168.HK&ql=1" target="_blank">0168.HK</a>) &uarr;14</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TSGTY.PK" target="_blank">TSGTY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Beer</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=TRIT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Tri-Tech Holding</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TRIT" target="_blank">TRIT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Water treatment</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=UTA&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Universal Travel Group<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=UTA" target="_blank">UTA</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Travel</td>
          <td>Ticketing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=VIT&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>VanceInfo Technologies<span class="green">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VIT" target="_blank">VIT</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Consulting</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=VIMC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Vimicro International</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VIMC" target="_blank">VIMC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Semiconductors</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=VISN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.visionchina.cn/phoenix.zhtml?c=215970&p=index" target="_blank">VisionChina Media</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VISN" target="_blank">VISN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Advertising</td>
          <td>Trains</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=WWIN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Winner Medical Group<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WWIN" target="_blank">WWIN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Devices</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=CYB&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>WisdomTree Dreyfus Chinese Yuan</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CYB" target="_blank">CYB</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Fund</td>
          <td>RMB ETF</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=WATG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Wonder Auto Technology</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WATG" target="_blank">WATG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Auto</td>
          <td>Electrical</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=WH&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>WSP Holdings</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WH" target="_blank">WH</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Oil</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=WX&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>WuXi Pharmatech</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WX" target="_blank">WX</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Health</td>
          <td>Pharma</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=XUE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.21edu.com/" target="_blank">Xueda Education Group</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XUE" target="_blank">XUE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Services</td>
          <td>Education</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=XSELY.PK&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Xinhua Sports &amp; Entertainment</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XSELY.PK" target="_blank">XSELY.PK</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Entertainment</td>
          <td>TV, radio, ads</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=XIN&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.xyre.com/" target="_blank">Xinyuan Real Estate</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XIN" target="_blank">XIN</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Industrial</td>
          <td>Real Estate</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YZC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Yanzhou Coal Mining</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YZC" target="_blank">YZC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Coal</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YGE&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Yingli Green Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YGE" target="_blank">YGE</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Energy</td>
          <td>Solar</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YONG&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Yongye International<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YONG" target="_blank">YONG</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Agribiz</td>
          <td>Fertilizer</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YOKU&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://www.youku.com/" target="_blank">Youku.com Inc.<span class="green">*</span><span class="orange">*</span></a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YOKU" target="_blank">YOKU</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Video sharing</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YTEC&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Yucheng Technologies<span class="red">*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YTEC" target="_blank">YTEC</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Technology</td>
          <td>Finance</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=YUII&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Yuhe International<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YUII" target="_blank">YUII</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Chickens</td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=HOGS&f=l1c1p2rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td>Zhongpin<span>*</span></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HOGS" target="_blank">HOGS</a></td>
          <td><strong><?php echo $data[0] ?></strong></td>
          <td><?php echo $data[1] ?></td>
          <td><?php echo $data[2] ?></td>
          <td><?php echo $data[3] ?></td>
          <td><?php echo $data[4] ?></td>
          <td>Consumer</td>
          <td>Pork bellies</td>
          <?php fclose ($fp); ?>
        </tr>
        
        <tr>
          <td>Century 21 China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CTC" target="_blank">CTC</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CTC&f=l1c1p2rj1y&e=.csv");
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
          <td>Sales</td>
        </tr>
        
        <tr>
          <td>SmartHeat</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HEAT" target="_blank">HEAT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HEAT&f=l1c1p2rj1y&e=.csv");
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
          <td>PHEs</td>
        </tr>
        
        <tr>
          <td><a href="http://www.guanweirecycling.com/" target="_blank">Guanwei Recycling Cor</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GPRC" target="_blank">GPRC</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GPRC&f=l1c1p2rj1y&e=.csv");
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
          <td>Waste mgmt</td>
        </tr>
        
        <tr>
          <td>Lihua</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LIWA" target="_blank">LIWA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LIWA&f=l1c1p2rj1y&e=.csv");
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
          <td>Copper</td>
        </tr>
        
        <tr>
          <td>Deer Consumer Products</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DEER" target="_blank">DEER</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DEER&f=l1c1p2rj1y&e=.csv");
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
          <td>Kitchen</td>
        </tr>
        
        <tr>
          <td><a href="http://www.zstdigital.com/" target="_blank">ZST Digital Networks</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ZSTN" target="_blank">ZSTN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ZSTN&f=l1c1p2rj1y&e=.csv");
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
          <td>Networking</td>
        </tr>
        
        <tr>
          <td>L &amp; L Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LLEN" target="_blank">LLEN</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LLEN&f=l1c1p2rj1y&e=.csv");
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
          <td>Coal</td>
        </tr>
        
        
        
        
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
  </div>
  <div class="column span-3 last">
    <script type="text/javascript" src="js/google.vert.ad.js"></script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    <br>
    <br>
    <div><a href="http://www.amazon.com/gp/product/0060555661?ie=UTF8&amp;tag=overlandexplorer&amp;linkCode=as2&amp;camp=1789&amp;creative=9325&amp;creativeASIN=0060555661">Warren Buffett&rsquo;s favorite book<br>
      <img src="images/intelligent_investor.jpg" alt="Intelligent Investor" width="106" height="160"></a><img src="http://www.assoc-amazon.com/e/ir?t=overlandexplorer&amp;l=as2&amp;o=1&amp;a=0060555661" width="1" height="1" alt="" /></div>
  </div>
  <hr />
  <footer>
    <p>
      <script type="text/javascript">
		var oRows = document.getElementById('bricAdr').getElementsByTagName('tr');
		var iRowCount = oRows.length - 1;
		document.write(iRowCount + ' Chinese ADRs on this page.');
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
$objCache->save($page, "china");
// also display the buffer and then flush it
ob_end_flush();
}
?>
