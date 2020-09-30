<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Africa / Middle East stocks traded on U.S. exchanges - BRICADR.com</title>
<meta name="description" content="Comprehensive list of all BRIC stocks traded on American exchanges &mdash; Invest in China, India, Brazil and Russia." />
<meta name="keywords" content="BRIC, investing, Brazil, Russia, India, China, ADR, invest in emerging markets" />
<link rel="stylesheet" href="http://bricadr.com/css/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" href="http://bricadr.com/css/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="http://bricadr.com/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="http://bricadr.com/css/jquery.fancybox-1.3.4.css" media="screen, projection" />
<link rel="stylesheet" href="http://bricadr.com/css/bricadr.css" media="screen, projection" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
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
    <?php include("../includes/bricHead.htm"); ?>
    <h1><strong>Africa / Middle East:</strong> All stocks and funds</h1>
    <h2>A list of all African & Middle Eastern companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
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
          <td>Aberdeen Israel Fund</td>
          <td><a href="http://finance.yahoo.com/q?s=ISL" target="_blank">ISL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ISL&f=l1c1p2rj1y&e=.csv");
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
          <td>Investment bank</td>
        </tr>
        <tr>
          <td>Ampal-American Israel Corp.</td>
          <td><a href="http://finance.yahoo.com/q?s=AMPL" target="_blank">AMPL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AMPL&f=l1c1p2rj1y&e=.csv");
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
          <td>Investment bank</td>
        </tr>
        <tr>
          <td>AngloGold Ashanti</td>
          <td><a href="http://finance.yahoo.com/q?s=AU" target="_blank">AU</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AU&f=l1c1p2rj1y&e=.csv");
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
          <td>Cellcom Israel</td>
          <td><a href="http://finance.yahoo.com/q?s=CEL" target="_blank">CEL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=CEL&f=l1c1p2rj1y&e=.csv");
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
          <td>Telecom (celular)</td>
        </tr>
        <tr>
          <td>DRDGOLD Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=DROOY" target="_blank">DROOY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=DROOY&f=l1c1p2rj1y&e=.csv");
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
          <td> Gold</td>
        </tr>
        <tr>
          <td>First Quantum Minera (Zambia)</td>
          <td><a href="http://finance.yahoo.com/q?s=FQVLF" target="_blank">FQVLF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=FQVLF&f=l1c1p2rj1y&e=.csv");
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
          <td> Copper</td>
        </tr>
        <tr>
          <td>Gold Fields Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=GFI" target="_blank">GFI</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GFI&f=l1c1p2rj1y&e=.csv");
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
          <td> Gold</td>
        </tr>
        <tr>
          <td>Harmony Gold Mining Co. Ltd.</td>
          <td><a href="http://finance.yahoo.com/q?s=HMY" target="_blank">HMY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=HMY&f=l1c1p2rj1y&e=.csv");
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
          <td> Gold</td>
        </tr>
        <tr>
          <td>Impala Platinum Holdings</td>
          <td><a href="http://finance.yahoo.com/q?s=IMPUY" target="_blank">IMPUY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=IMPUY&f=l1c1p2rj1y&e=.csv");
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
          <td>Platinum</td>
        </tr>
        <tr>
          <td>iShares  Israel Cap Invest</td>
          <td><a href="http://finance.yahoo.com/q?s=EIS" target="_blank">EIS</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EIS&f=l1c1p2rj1y&e=.csv");
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
          <td>iShares South Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=EZA" target="_blank">EZA</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EZA&f=l1c1p2rj1y&e=.csv");
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
          <td>Market Vectors Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=AFK" target="_blank">AFK</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=AFK&f=l1c1p2rj1y&e=.csv");
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
          <td>Market Vectors Egypt</td>
          <td><a href="http://finance.yahoo.com/q?s=EGPT" target="_blank">EGPT</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=EGPT&f=l1c1p2rj1y&e=.csv");
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
          <td>Market Vectors Gulf States</td>
          <td><a href="http://finance.yahoo.com/q?s=MES" target="_blank">MES</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MES&f=l1c1p2rj1y&e=.csv");
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
          <td>MTN Group</td>
          <td><a href="http://finance.yahoo.com/q?s=MTNOY" target="_blank">MTNOY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=MTNOY&f=l1c1p2rj1y&e=.csv");
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
          <td> Telecom (celular)</td>
        </tr>
        <tr>
          <td>Naspers</td>
          <td><a href="http://finance.yahoo.com/q?s=NPSNY" target="_blank">NPSNY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NPSNY&f=l1c1p2rj1y&e=.csv");
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
          <td> Media</td>
        </tr>
        <tr>
          <td>Nile Pan Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=NAFAX" target="_blank">NAFAX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=NAFAX&f=l1c1p2rj1y&e=.csv");
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
          <td> Mutual</td>
        </tr>
        <tr>
          <td>Orascom Construction Industries (Egypt)</td>
          <td><a href="http://finance.yahoo.com/q?s=ORSDF" target="_blank">ORSDF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=ORSDF&f=l1c1p2rj1y&e=.csv");
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
          <td>Industry</td>
          <td> Construction</td>
        </tr>
        <tr>
          <td>Sappi Limited</td>
          <td><a href="http://finance.yahoo.com/q?s=SPP" target="_blank">SPP</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SPP&f=l1c1p2rj1y&e=.csv");
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
          <td>Sasol</td>
          <td><a href="http://finance.yahoo.com/q?s=SSL" target="_blank">SSL</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SSL&f=l1c1p2rj1y&e=.csv");
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
          <td> Oil</td>
        </tr>
        <tr>
          <td>SPDR Emerging Middle East &amp; Africa</td>
          <td><a href="http://finance.yahoo.com/q?s=GAF" target="_blank">GAF</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=GAF&f=l1c1p2rj1y&e=.csv");
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
          <td> Paper</td>
        </tr>
        <tr>
          <td>Standard Bank Group</td>
          <td><a href="http://finance.yahoo.com/q?s=SBGOY" target="_blank">SBGOY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SBGOY&f=l1c1p2rj1y&e=.csv");
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
          <td> Bank</td>
        </tr>
        <tr>
          <td>Telkom SA</td>
          <td><a href="http://finance.yahoo.com/q?s=TLKGY" target="_blank">TLKGY</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TLKGY&f=l1c1p2rj1y&e=.csv");
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
          <td> Telecom (fixed)</td>
        </tr>
        <tr>
          <td>T. Rowe Price Africa &amp; Middle East</td>
          <td><a href="http://finance.yahoo.com/q?s=TRAMX" target="_blank">TRAMX</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=TRAMX&f=l1c1p2rj1y&e=.csv");
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
          <td> Mutual</td>
        </tr>
        <tr>
          <td>WisdomTree Dreyfus South African Rand</td>
          <td><a href="http://finance.yahoo.com/q?s=SZR" target="_blank">SZR</a></td>
          <?php $curl=curl_init();
			curl_setopt ($curl,CURLOPT_URL,"http://download.finance.yahoo.com/d/quotes.csv?s=SZR&f=l1c1p2rj1y&e=.csv");
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
      </tbody>
    </table>
    <p>&uarr;= top brand (rank) | <span class="orange">*</span>= recent IPO, non-reverse-merger</p>
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
		document.write(iRowCount + ' African &amp; Middle Eastern ADRs on this page.');
	  </script>
      <?php include("../includes/bricFooter.htm"); ?>
  </footer>
</div>
<div style="display: none;">
  <?php include("../includes/bricBox.htm"); ?>
</div>
<script src="../js/jquery.document.ready.js" type="text/javascript"></script>
</body>
</html>
