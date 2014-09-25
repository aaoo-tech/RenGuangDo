<div class="clear"></div>
</div>
</div>
<?php 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://www.renguangdo.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$_output = curl_exec($ch);
curl_close($ch);
$_dom = new DOMDocument();
$_dom->loadHTML($_output);
$_finder = new DOMXPath($_dom);
$_footer = new DOMDocument();

$_nodes = $_finder->query("//*[contains(@class, 'footer-wrapper')]");
foreach ($_nodes as $_node) {
  $_footer->appendChild($_footer->importNode($_node, true));
}

echo $_footer->saveHTML(); 
?>
</div>
</body>
</html>
