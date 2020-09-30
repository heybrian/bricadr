<?php /*
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
*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The complete List of Chinese ADR stock quotes | BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia. Updated <?php echo date("F o"); ?>.">
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/blueprint/screen.css" media="screen, projection">
<link rel="stylesheet" href="css/blueprint/print.css" media="print">
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen, projection">
<link rel="stylesheet" href="css/bricadr.css" media="screen, projection">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
    <h1><strong>China:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Chinese companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br>
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.</h4>
  </header>
  <hr>
  <div class="column span-3"> 
    <script type="text/javascript" src="js/google.vert.ad.js"></script> 
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script type="text/javascript" src="js/google.vert.ad.js"></script> 
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div><!--<a href="http://www.amazon.com/gp/product/0060555661?ie=UTF8&amp;tag=overlandexplorer&amp;linkCode=as2&amp;camp=1789&amp;creative=9325&amp;creativeASIN=0060555661">Warren Buffett&rsquo;s favorite book<br>
      <img src="images/intelligent_investor.jpg" alt="Intelligent Investor" width="106" height="160"></a><img src="http://www.assoc-amazon.com/e/ir?t=overlandexplorer&amp;l=as2&amp;o=1&amp;a=0060555661" width="1" height="1" alt="">--></div>
  </div>
  <div class="mobile-ad"> 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
  <!-- bricadr-responsive --> 
  <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4859703351303905"
     data-ad-slot="2984187151"
     data-ad-format="auto"></ins> 
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script> 
</div>

  <div class="column span-18">
    <h4><strong>Sortable Table &mdash;</strong> Click column header to sort; hold &lsquo;shift&rsquo; key to subsort second column.</h4>
    <table id="bricAdr" class="tablesorter">
      <thead>
        <tr>
          <th>ADR Name</th>
          <th>Ticker</th>
          <!--<th>Price</th>
          <th>Change</th>
          <th style="text-align:center">%</th>
          <th>P/E</th>
          <th>MarCap</th>
          <th>Yield</th>-->
          <th>Sector</th>
          <th>Industry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="http://www.en.21vianet.com/" target="_blank">21Vianet</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VNET" target="_blank">VNET</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VNET&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Data center</td>
        </tr>
        <tr>
          <td><a href="http://www.51job.com/" target="_blank">51job</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JOBS" target="_blank">JOBS</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JOBS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Staffing</td>
        </tr>
        <tr>
          <td><a href="http://www.58.com/" target="_blank">58.com</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WUBA" target="_blank">WUBA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=WUBA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Consumer</td>
        </tr>
        <tr>
          <td><a href="http://www.chinadrtv.com/" target="_blank">Acorn</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ATV" target="_blank">ATV</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ATV&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>TV sales</td>
        </tr>
        <tr>
          <td>Agricultural Bank of China &uarr;6</td>
          <td><a href="http://finance.yahoo.com/q?s=ACGBY" target="_blank">ACGBY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ACGBY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td>Alibaba</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BABA" target="_blank">BABA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BABA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>E-commerce</td>
        </tr>
        <tr>
          <td>Aluminum Corp. Of China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ACH" target="_blank">ACH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ACH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Mining</td>
          <td>Aluminum</td>
        </tr>
        <tr>
          <td>Andatee China Marine Fuel</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=AMCF" target="_blank">AMCF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AMCF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Marine fuel</td>
        </tr>
        <tr>
          <td><a href="http://www.anta.com" target="_blank">Anta Sports</a> &uarr;21</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ANPDY" target="_blank">ANPDY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ANPDY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Sporting</td>
        </tr>
        <tr>
          <td>ATA</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ATAI" target="_blank">ATAI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ATAI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Testing</td>
        </tr>
        <tr>
          <td>Baidu &uarr;5</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BIDU" target="_blank">BIDU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BIDU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Internet</td>
        </tr>
        <tr>
          <td>Bank of China &uarr;7</td>
          <td><a href="http://finance.yahoo.com/q?s=BACHY" target="_blank">BACHY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BACHY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td>Bank Of Communications &uarr;16</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BCMXY" target="_blank">BCMXY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BCMXY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td><a href="http://www.biostarpharmaceuticals.com" target="_blank">Biostar Pharmaceuticals</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BSPM" target="_blank">BSPM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BSPM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Pharma</td>
        </tr>
        <tr>
          <td><a href="http://www.bitauto.com" target="_blank">Bitauto</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BITA" target="_blank">BITA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BITA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Research</td>
        </tr>
        <tr>
          <td>Changyou </td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CYOU" target="_blank">CYOU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CYOU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Gaming</td>
        </tr>
        <tr>
          <td><a href="http://www.ijinshan.com">Cheetah Mobile</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMCM" target="_blank">CMCM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CMCM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Security</td>
        </tr>
        <tr>
          <td><a href="http://www.chinaautologisticsinc.com" target="_blank">China Auto Logistic</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CALI" target="_blank">CALI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CALI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Retail</td>
        </tr>
        <tr>
          <td>China Automotive Systems</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CAAS" target="_blank">CAAS</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CAAS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Steering</td>
        </tr>
        <tr>
          <td>China Biologic Products</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CBPO" target="_blank">CBPO</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CBPO&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Biotech</td>
        </tr>
        <tr>
          <td><a href="http://www.chinacache.com/" target="_blank">ChinaCache</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CCIH" target="_blank">CCIH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CCIH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>IT content</td>
        </tr>
        <tr>
          <td>China Coal Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CCOZY" target="_blank">CCOZY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CCOZY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Coal</td>
        </tr>
        <tr>
          <td><a href="http://www.ccb.com/" target="_blank">China Construction Bank</a> &uarr;4</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CICHY" target="_blank">CICHY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CICHY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td>China Distance Education</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DL" target="_blank">DL</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td>China Eastern Airlines &uarr;29</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEA" target="_blank">CEA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CEA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Transportation</td>
          <td>Airline</td>
        </tr>
        <tr>
          <td>Sinopec &uarr;9</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SNP" target="_blank">SNP</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SNP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td>China Finance Online</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JRJC" target="_blank">JRJC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JRJC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Quote content</td>
        </tr>
        <tr>
          <td><a href="http://www.cgagri.com/" target="_blank">China Green Agriculture</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CGA" target="_blank">CGA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CGA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Agribiz</td>
          <td>Fertilizer</td>
        </tr>
        <tr>
          <td><a href="http://www.chinahgs.com" target="_blank">China HGS Real Estate</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HGSH" target="_blank">HGSH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HGSH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Real Estate</td>
          <td>Development</td>
        </tr>
        <tr>
          <td>China Jo-Jo Drugstores</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CJJD" target="_blank">CJJD</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CJJD&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Pharmacy</td>
        </tr>
        <tr>
          <td>China Life Insurance &uarr;10</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LFC" target="_blank">LFC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LFC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Insurance</td>
        </tr>
        <tr>
          <td>China Lodging</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HTHT" target="_blank">HTHT</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HTHT&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Travel</td>
          <td>Hotels</td>
        </tr>
        <tr>
          <td>China Marine Food</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CMFO" target="_blank">CMFO</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CMFO&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Seafood</td>
        </tr>
        <tr>
          <td>China Merchants Bank &uarr;14</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CIHKY" target="_blank">CIHKY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CIHKY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td>China Mobile &uarr;1</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHL" target="_blank">CHL</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CHL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td>China National Offshore Oil</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CEO" target="_blank">CEO</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CEO&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td><a href="http://www.chinapharmaholdings.com/" target="_blank">China Pharma</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CPHI" target="_blank">CPHI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CPHI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Pharma</td>
        </tr>
        <tr>
          <td>China Rare Earth</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CREQF" target="_blank">CREQF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CREQF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Mining</td>
          <td>Rare earths</td>
        </tr>
        <tr>
          <td><a href="http://www.creg-cn.com" target="_blank">China Recycling Energy</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CREG" target="_blank">CREG</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CREG&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Waste mgmt</td>
        </tr>
        <tr>
          <td>China Southern Airlines &uarr;34</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ZNH" target="_blank">ZNH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ZNH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Transportation</td>
          <td>Airline</td>
        </tr>
        <tr>
          <td>China Telecom &uarr;13</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHA" target="_blank">CHA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CHA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td>China Unicom &uarr;17</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHU" target="_blank">CHU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CHU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Telecom</td>
          <td>Wireless</td>
        </tr>
        <tr>
          <td><a href="http://www.chinaxd.net/" target="_blank">China XD Plastics</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CXDC" target="_blank">CXDC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CXDC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Plastic</td>
        </tr>
        <tr>
          <td><a href="http://www.cyilimited.com" target="_blank">China Yuchai</a> (Singapore)</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CYD" target="_blank">CYD</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CYD&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Engines</td>
        </tr>
        <tr>
          <td>CLP</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CLPHY" target="_blank">CLPHY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CLPHY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Insurance</td>
        </tr>
        <tr>
          <td><a href="http://www.cmsholdings.com" target="_blank">Concord Medical Services</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CCM" target="_blank">CCM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CCM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Imaging</td>
        </tr>
        <tr>
          <td>Daqo New Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DQ" target="_blank">DQ</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DQ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Solar</td>
        </tr>
        <tr>
          <td>db X-trackers Harvest China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ASHR" target="_blank">ASHR</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ASHR&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Direxion Daily China Bull 3X Shares</td>
          <td><a href="http://finance.yahoo.com/q?s=YINN" target="_blank">YINN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FXI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Dongfeng Motor &uarr;20</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DNFGF" target="_blank">DNFGF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DNFGF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Production</td>
        </tr>
        <tr>
          <td><a href="http://www.everglorygroup.com" target="_blank">Ever-Glory</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=EVK" target="_blank">EVK</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EVK&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Travel</td>
          <td>Reservations</td>
        </tr>
        <tr>
          <td>Fangdd Network Group</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DUO" target="_blank">DUO</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FFHL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";BEST
			*/ ?>
          <td>Real Estate</td>
          <td>Services</td>
        </tr>
        <tr>
          <td>Fuwei Films</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FFHL" target="_blank">FFHL</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FFHL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";BEST
			*/ ?>
          <td>Consumer</td>
          <td>Packaging</td>
        </tr>
        <tr>
          <td><a href="http://www.geelyauto.com.hk/" target="_blank">Geely Automobile</a> &uarr;49</td>
          <td><a href="http://finance.yahoo.com/q?s=GELYF" target="_blank">GELYF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GELYF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Production</td>
        </tr>
        <tr>
          <td>Global X China Financials</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CHIX" target="_blank">CHIX</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CHIX&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Great Wall Motor</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GWLLF" target="_blank">GWLLF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GWLLF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Production</td>
        </tr>
        <tr>
          <td><a href="http://www.gsrc.com/" target="_blank">Guangshen Railway</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GSH" target="_blank">GSH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GSH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Transportation</td>
          <td>RxR</td>
        </tr>
        <tr>
          <td><a href="http://www.gulfresourcesinc.com" target="_blank">Gulf Resources</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=GURE" target="_blank">GURE</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GURE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Chemicals</td>
        </tr>
        <tr>
          <td>Haier Electronic &uarr;37</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HRELF" target="_blank">HRELF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HRELF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Appliances</td>
        </tr>
        <tr>
          <td><a href="http://www.highpowertech.com" target="_blank">Highpower</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HPJ" target="_blank">HPJ</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HPJ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Batteries</td>
        </tr>
        <tr>
          <td>Hollysys Automation Technologies</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HOLI" target="_blank">HOLI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HOLI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Electric</td>
        </tr>
        <tr>
          <td>Home Inns &amp; Hotels Management</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HMIN" target="_blank">HMIN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HMIN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Travel</td>
          <td>Hotels</td>
        </tr>
        <tr>
          <td>Huaneng Power</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=HNP" target="_blank">HNP</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HNP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Utilities</td>
          <td>Electricity</td>
        </tr>
        <tr>
          <td>ICBC &uarr;2</td>
          <td><a href="http://finance.yahoo.com/q?s=IDCBY" target="_blank">IDCBY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IDCBY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Bank</td>
        </tr>
        <tr>
          <td><a href="http://www.ikanggroup.com" target="_blank">iKang Healthcare</a></td>
          <td><a href="http://finance.yahoo.com/q?s=KANG" target="_blank">KANG</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KANG&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Lab</td>
        </tr>
        <tr>
          <td>iShares China Large-Cap</td>
          <td><a href="http://finance.yahoo.com/q?s=FXI" target="_blank">FXI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FXI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>iShares Hong Kong Index</td>
          <td><a href="http://finance.yahoo.com/q?s=EWH" target="_blank">EWH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EWH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>iShares Taiwan Index</td>
          <td><a href="http://finance.yahoo.com/q?s=EWT" target="_blank">EWT</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EWT&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>JA Solar</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JASO" target="_blank">JASO</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JASO&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Solar</td>
        </tr>
        <tr>
          <td><a href="http://www.jd.com/" target="_blank">JD.com</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JD" target="_blank">JD</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JD&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>e-Commerce</td>
        </tr>
        <tr>
          <td>Jiayuan.com</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=DATE" target="_blank">DATE</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DATE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Dating</td>
        </tr>
        <tr>
          <td><a href="http://www.jinkosolar.com" target="_blank">JinkoSolar</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JKS" target="_blank">JKS</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JKS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Solar</td>
        </tr>
        <tr>
          <td><a href="http://www.jinpaninternational.com" target="_blank">Jinpan</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=JST" target="_blank">JST</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=JST&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Electric</td>
        </tr>
        <tr>
          <td><a href="http://www.kanditechnology.com">Kandi Technolgies</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KNDI" target="_blank">KNDI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KNDI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Light vehicles</td>
        </tr>
        <tr>
          <td>Kingtone Wirelessinfo Solution</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KONE" target="_blank">KONE</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KONE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Mobile software</td>
        </tr>
        <tr>
          <td><a href="http://www.kingoldjewelry.com" target="_blank">Kingtgold Jewelry</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KGJI" target="_blank">KGJI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KGJI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Jewelry Gold</td>
        </tr>
        <tr>
          <td>KongZhong</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KZ" target="_blank">KZ</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KZ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Gaming</td>
        </tr>
        <tr>
          <td>KraneShares CSI China Internet</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=KWEB" target="_blank">KWEB</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=KWEB&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Leju</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LEJU" target="_blank">LEJU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LEJU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Real Estate</td>
          <td>Sales</td>
        </tr>
        <tr>
          <td><a href="http://lenovo.com/" target="_blank">Lenovo</a> &uarr;24</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LNVGY" target="_blank">LNVGY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LNVGY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Hardware</td>
        </tr>
        <tr>
          <td>Li Ning Company &uarr;19</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LNNGF" target="_blank">LNNGF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LNNGF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Sporting</td>
        </tr>
        <tr>
          <td><a href="http://www.lightinthebox.com" target="_blank">Light In The Box</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LITB" target="_blank">LITB</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LITB&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Retail</td>
        </tr>
        <tr>
          <td><a href="http://www.longweipetroleum.com" target="_blank">Longwei Petroleum</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=LPIH" target="_blank">LPIH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=LPIH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Apparel</td>
        </tr>
        <tr>
          <td>Market Vectors China</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PEK" target="_blank">PEK</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PEK&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Market Vectors RMB/USD</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CNY" target="_blank">CNY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CNY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td><a href="http://www.m18.com/" target="_blank">Mecox Lane</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MCOX" target="_blank">MCOX</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MCOX&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Apparel &#9792;</td>
        </tr>
        <tr>
          <td>Morgan Stanley China A-Share</td>
          <td><a href="http://finance.yahoo.com/q?s=CAF" target="_blank">CAF</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CAF&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>CEF</td>
        </tr>
        <tr>
          <td>Netease.com &uarr;45</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NTES" target="_blank">NTES</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NTES&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Security</td>
        </tr>
        <tr>
          <td>NetQin Mobile</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NQ" target="_blank">NQ</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NQ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Internet</td>
        </tr>
        <tr>
          <td>New Oriental Education &uarr;40</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=EDU" target="_blank">EDU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EDU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td><a href="http://www.nfenergy.com" target="_blank">NF Energy Saving</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NFEC" target="_blank">NFEC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NFEC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Heavy Mfg</td>
        </tr>
        <tr>
          <td>Noah</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NOAH" target="_blank">NOAH</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NOAH&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Asset Management</td>
        </tr>
        <tr>
          <td>Orient Paper</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ONP" target="_blank">ONP</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ONP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Paper</td>
        </tr>
        <tr>
          <td>Origin Agritech</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SEED" target="_blank">SEED</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SEED&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Agribiz</td>
          <td>Farm products</td>
        </tr>
        <tr>
          <td>Ossen Innovation</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=OSN" target="_blank">OSN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=OSN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Basic Materials</td>
          <td>Steel &amp; Iron</td>
        </tr>
        <tr>
          <td>PetroChina &uarr;8</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PTR" target="_blank">PTR</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PTR&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Oil</td>
        </tr>
        <tr>
          <td>Phoenix New Media</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FENG" target="_blank">FENG</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FENG&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Gaming</td>
        </tr>
        <tr>
          <td><a href="http://www.pingan.com/" target="_blank">Ping An Insurance</a> &uarr;11</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=PNGAY" target="_blank">PNGAY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PNGAY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Insurance</td>
        </tr>
        <tr>
          <td>PowerShares Golden Dragon China</td>
          <td><a href="http://finance.yahoo.com/q?s=PGJ" target="_blank">PGJ</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=PGJ&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>ProShares UltraShort FTSE China 25</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=FXP" target="_blank">FXP</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FXP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>ETF</td>
        </tr>
        <tr>
          <td>Qihoo 360</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=QIHU" target="_blank">QIHU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=QIHU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Internet</td>
        </tr>
        <tr>
          <td><a href="http://www.qunar.com/" target="_blank">Qunar</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=QUNR" target="_blank">QUNR</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=QUNR&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Travel</td>
          <td>Reservations</td>
        </tr>
        <tr>
          <td><a href="http://www.recon.cn" target="_blank">Recon</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=RCON" target="_blank">RCON</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RCON&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Oil services</td>
        </tr>
        <tr>
          <td>ReneSola</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SOL" target="_blank">SOL</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SOL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Solar</td>
        </tr>
        <tr>
          <td><a href="http://www.renren-inc.com/en/" target="_blank">Renren</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=RENN" target="_blank">RENN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=RENN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Social networking</td>
        </tr>
        <tr>
          <td><a href="http://www.sgocogroup.com" target="_blank">SGOCO</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SGOC" target="_blank">SGOC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SGOC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Electronics</td>
        </tr>
        <tr>
          <td>Shengkai Innovations</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VALV" target="_blank">VALV</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VALV&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>Valves</td>
        </tr>
        <tr>
          <td><a href="http://www.shinerinc.com" target="_blank">Shiner Internationa</a>l</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=BEST" target="_blank">BEST</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=BEST&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Packaging</td>
        </tr>
        <tr>
          <td>Sina &uarr;41</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SINA" target="_blank">SINA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SINA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Internet</td>
        </tr>
        <tr>
          <td><a href="http://www.spc.com.cn" target="_blank">Sinopec Shanghai Petrochemical</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SHI" target="_blank">SHI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SHI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Oil Refining</td>
        </tr>
        <tr>
          <td><a href="http://www.sinovac.com" target="_blank">Sinovac Biotech</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SVA" target="_blank">SVA</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SVA&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Biotech</td>
        </tr>
        <tr>
          <td><a href="http://www.sky-mobi.com/" target="_blank">Sky-mobi</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=MOBI" target="_blank">MOBI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MOBI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Mobile software</td>
        </tr>
        <tr>
          <td>SkyPeople Fruit Juice</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SPU" target="_blank">SPU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SPU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Fruit juice</td>
        </tr>
        <tr>
          <td>Skystar Bio-Pharmaceutical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SKBI" target="_blank">SKBI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SKBI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Vet drugs</td>
        </tr>
        <tr>
          <td>Sohu.com &uarr;32</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SOHU" target="_blank">SOHU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SOHU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Internet</td>
        </tr>
        <tr>
          <td><a href="http://www.sorl.cn/" target="_blank">SORL Auto Parts</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SORL" target="_blank">SORL</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SORL&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Brakes</td>
        </tr>
        <tr>
          <td>SouFun</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SFUN" target="_blank">SFUN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SFUN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Real estate</td>
        </tr>
        <tr>
          <td><a href="http://www.shengyuan.com.cn/web/index.jsp" target="_blank">Synutra</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=SYUT" target="_blank">SYUT</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SYUT&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Dairy</td>
        </tr>
        <tr>
          <td>TAL Education</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XRS" target="_blank">XRS</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=XRS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td>Taomee</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TAOM" target="_blank">TAOM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TAOM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Entertainment</td>
          <td>Children</td>
        </tr>
        
        <tr>
			<td><a href="http://www.taop.com" target="_blank">Taoping</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TAOP" target="_blank">TAOP</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TAOP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Software—Infrastructure</td>
        </tr>
        <tr>
          <td><a href="http://www.tarena.com.cn" target="_blank">Tarena Intl</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TEDU" target="_blank">TEDU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TEDU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td><a href="http://www.tencent.com.hk/" target="_blank">Tencent</a> &uarr;3</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TCEHY" target="_blank">TCEHY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TCEHY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Chat</td>
        </tr>
        <tr>
          <td>The9</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=NCTY" target="_blank">NCTY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NCTY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Gaming</td>
        </tr>
        <tr>
          <td><a href="http://www.tht.cn" target="_blank">THT</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=THTI" target="_blank">THTI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=THTI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Industrial</td>
          <td>PHEs</td>
        </tr>
        <tr>
          <td>Tianyin Pharmaceutical</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TPI" target="_blank">TPI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TPI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Health</td>
          <td>Pharma</td>
        </tr>
        <tr>
          <td><a href="http://www.tigermedia.com" target="_blank">Tiger Media</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=IDI" target="_blank">IDI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IDI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Advertising</td>
          <td>LCD screens</td>
        </tr>
        <tr>
          <td>Tongxin</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TXIC" target="_blank">TXIC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TXIC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Auto</td>
          <td>Chassis</td>
        </tr>
        <tr>
          <td>Trip.com &uarr;33</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TCOM" target="_blank">TCOM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CTRP&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Travel</td>
          <td>Reservations</td>
        </tr>
        <tr>
          <td><a href="http://www.tsingtao.com.cn/" target="_blank">Tsingtao Brewery</a> &uarr;31</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=TSGTY" target="_blank">TSGTY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TSGTY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Consumer</td>
          <td>Beer</td>
        </tr>
        <tr>
          <td><a href="http://www.utstar.com" target="_blank">UTStarcom</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=UTSI" target="_blank">UTSI</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=UTSI&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Mobile software</td>
        </tr>
        <tr>
          <td><a href="http://www.cogo.com.cn" target="_blank">Viewtran</a> (Cogo)</td>
          <td><a href="http://finance.yahoo.com/q?s=VIEW" target="_blank">VIEW</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VIEW&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Finance</td>
        </tr>
        <tr>
          <td>Vimicro</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VIMC" target="_blank">VIMC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VIMC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Semi-conductors</td>
        </tr>
        <tr>
          <td><a href="http://www.vipshop.com" target="_blank">Vipshop</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VIPS" target="_blank">VIPS</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VIPS&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Retail</td>
        </tr>
        <tr>
          <td><a href="http://www.visionchina.cn/phoenix.zhtml?c=215970&p=index" target="_blank">VisionChina Media</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=VISN" target="_blank">VISN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=VISN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Advertising</td>
          <td>Trains</td>
        </tr>
        <tr>
          <td><a href="http://www.weibo.com" target="_blank">Weibo</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=WB" target="_blank">WB</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=WB&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Social media</td>
        </tr>
        <tr>
          <td>WisdomTree Dreyfus Chinese Yuan</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=CYB" target="_blank">CYB</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CYB&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Fund</td>
          <td>RMB ETF</td>
        </tr>
        <tr>
          <td><a href="http://www.21edu.com/" target="_blank">Xueda Education</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XUE" target="_blank">XUE</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=XUE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Services</td>
          <td>Education</td>
        </tr>
        <tr>
          <td><a href="http://www.xyre.com/" target="_blank">Xinyuan Real Estate</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=XIN" target="_blank">XIN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=XIN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Real Estate</td>
          <td>Development</td>
        </tr>
        <tr>
          <td>Yanzhou Coal Mining</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YZC" target="_blank">YZC</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YZC&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Coal</td>
        </tr>
        <tr>
          <td>Yingli Green Energy</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YGE" target="_blank">YGE</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YGE&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Energy</td>
          <td>Solar</td>
        </tr>
        <tr>
          <td>Yintech</td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YIN" target="_blank">YIN</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YIN&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Finance</td>
          <td>Brokerage</td>
        </tr>
        <tr>
          <td><a href="http://www.youku.com/" target="_blank">Youku</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YOKU" target="_blank">YOKU</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YOKU&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Video sharing</td>
        </tr>
        <tr>
          <td><a href="http://www.yy.com/" target="_blank">YY</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=YY" target="_blank">YY</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=YY&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Chat</td>
        </tr>
        <tr>
          <td><a href="http://www.zoom.com" target="_blank">Zoom</a></td>
          <td><a href="http://finance.yahoo.com/q?d=t&amp;s=ZOOM" target="_blank">ZOOM</a></td>
          <?php /* $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ZOOM&f=l1c1p2rj1y&e=.csv");
			curl_setopt ($curl,CURLOPT_HEADER,0);
			ob_start();
			curl_exec ($curl);
			curl_close ($curl);
			$data=ob_get_clean();
			$data=explode(",",$data);
			$data=str_replace('"','',$data);
			foreach ($data as $results)
			echo "<td>$results</td>";
			*/ ?>
          <td>Technology</td>
          <td>Mobile software</td>
        </tr>
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span style="color: gold;">&lowast;</span> = Recent IPO</p>
  </div>
  <?php include("includes/mobile-ad.html"); ?>
  <div class="column span-3 last"><script type="text/javascript" src="js/google.vert.ad.js"></script> 
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
  </div>
  <hr>
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
</body>
</html>
<?php /*
// page generation complete
// retrieve the page from the buffer 
$page = ob_get_contents(); 
// and save it in the cache for future use
$objCache->save($page, "china");
// also display the buffer and then flush it
ob_end_flush();
}
*/ ?>
