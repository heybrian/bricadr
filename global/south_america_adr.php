<?php
// include the package
require_once("/home/heybrian/php/Cache/Lite.php");

// set an ID for this cache
$id = "chile";  

// set some variables
$options = array(
"cacheDir" => "cache/",
"lifeTime" => 86400
);

// create a Cache_Lite object
$objCache = new Cache_Lite($options);

// test if there exists a valid cache
if ($page = $objCache->get("chile")) 
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
<title>Chile stocks traded on U.S. exchanges - BRICADR.com</title>
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
    <h1><strong>Chile:</strong> Sortable list of all stocks and funds</h1>
    <h2>A list of all Chilean companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
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
          <td>afp provida common shares</td>
          <td><a href="http://finance.yahoo.com/q?s=PVD" target="_blank">PVD</a></td>
          <?php $fp = fopen ("http://finance.yahoo.com/d/quotes.csv?s=OGZPY.PK&f=l1c1rj1&e=.csv","r");
			$data = fgetcsv ($fp, 1000, ",") ?>
          <td><a href="http://finance.yahoo.com/q?s=<strong><?php echo $data[0] ?></strong>" target="_blank"><strong><?php echo $data[0] ?></strong></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[1] ?>" target="_blank"><?php echo $data[1] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[2] ?>" target="_blank"><?php echo $data[2] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[3] ?>" target="_blank"><?php echo $data[3] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=Energy" target="_blank">Energy</a></td>
          <td><a href="http://finance.yahoo.com/q?s= Natural gas" target="_blank"> Natural gas</a></td>
          <?php fclose ($fp); ?>
        </tr>
        <tr>
          <td>banco bhif &quot;g&quot; shares</td>
          <td><a href="http://finance.yahoo.com/q?s=BB" target="_blank">BB</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>banco de a. edwards</td>
          <td><a href="http://finance.yahoo.com/q?s=AED" target="_blank">AED</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>banco santander chile</td>
          <td><a href="http://finance.yahoo.com/q?s=BSB" target="_blank">BSB</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>banco santiago</a></td>
          <td><a href="http://finance.yahoo.com/q?s=SAN" target="_blank">SAN</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>chilectra s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CLRAY" target="_blank">CLRAY</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>chilquinta, s.a. 144a</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CQNAY" target="_blank">CQNAY</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Compania Cervecerias Unidas</a></td>
          <td><a href="http://finance.yahoo.com/q?s=<a href="http://finance.yahoo.com/q?s=CCU" target="_blank">CCU</a></td>
          <td><a href="http://finance.yahoo.com/q?s=<strong><?php echo $data[0] ?></strong>" target="_blank"><strong><?php echo $data[0] ?></strong></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[1] ?>" target="_blank"><?php echo $data[1] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[2] ?>" target="_blank"><?php echo $data[2] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=<?php echo $data[3] ?>" target="_blank"><?php echo $data[3] ?></a></td>
          <td><a href="http://finance.yahoo.com/q?s=Consumer" target="_blank">Consumer</a></td>
          <td><a href="http://finance.yahoo.com/q?s=Beer &amp; beverages" target="_blank">Beer &amp; beverages</a></td>
        </tr>
        <tr>
          <td>compania de telecom. de chile &quot;a&quot; shares</td>
          <td><a href="http://finance.yahoo.com/q?s=CTC" target="_blank">CTC</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>cristalerias de chile, s.a.</td>
          <td><a href="http://finance.yahoo.com/q?s=CGW" target="_blank">CGW</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>distribucion y servicio d &amp; s s.a.</td>
          <td><a href="http://finance.yahoo.com/q?s=DYS" target="_blank">DYS</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>distribuidora chilectra metropolitana sa</td>
          <td><a href="http://finance.yahoo.com/q?s=DCM144A" target="_blank">DCM144A</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>embotelladora andina, s.a. &quot;a&quot; shares</td>
          <td><a href="http://finance.yahoo.com/q?s=AKOA" target="_blank">AKOA</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>embotelladora andina, s.a. &quot;b&quot; shares</td>
          <td><a href="http://finance.yahoo.com/q?s=AKOB" target="_blank">AKOB</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>empresas telex-chile common shares</td>
          <td><a href="http://finance.yahoo.com/q?s=TL" target="_blank">TL</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>endesa-empresa nacional de electricidad</td>
          <td><a href="http://finance.yahoo.com/q?s=EOC" target="_blank">EOC</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>enersis s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=ENI" target="_blank">ENI</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>gener s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=CHR" target="_blank">CHR</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>laboratorio chile s.a. &quot;b&quot; shares</td>
          <td><a href="http://finance.yahoo.com/q?s=LBC" target="_blank">LBC</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>lan chile s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=LFL" target="_blank">LFL</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>madeco common shares</td>
          <td><a href="http://finance.yahoo.com/q?s=MAD" target="_blank">MAD</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>masisa s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=MYS" target="_blank">MYS</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>quinenco s.a.</a></td>
          <td><a href="http://finance.yahoo.com/q?s=LQ" target="_blank">LQ</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>santa isabel</a></td>
          <td><a href="http://finance.yahoo.com/q?s=ISA" target="_blank">ISA</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>sociedad quimica y minera de chile &quot;b&quot;</td>
          <td><a href="http://finance.yahoo.com/q?s=SQM" target="_blank">SQM</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>supermercados unimarc common shares</td>
          <td><a href="http://finance.yahoo.com/q?s=UNR" target="_blank">UNR</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>vina concha y toro common shares</td>
          <td><a href="http://finance.yahoo.com/q?s=VCO" target="_blank">VCO</a></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
		document.write(iRowCount + ' Chilean ADRs on this page.');
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
$objCache->save($page, "chile");
// also display the buffer and then flush it
ob_end_flush();
}
?>
