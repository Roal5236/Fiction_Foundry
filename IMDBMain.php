<?php
set_time_limit(110000);

$newUrlz=split("episodes", $URLz)[0];

$curl = curl_init($newUrlz);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	  
	$page = curl_exec($curl);

	if(curl_errno($curl)) // check for execution errors
	{
		print('Scraper error: ' . curl_error($curl));
		exit;
	}
	 
	curl_close($curl);

	$a1=explode("h1", $page);
	$titlez = explode('class="">', $a1[1]);
	$titlez = explode('&nbsp', $titlez[1]);
	$Title= $titlez[0];

	$Description = explode('<div class="summary_text">',$a1[2]);
	$Description = explode('"',$Description[1]);
	$DES = $Description[0];

	$actor1=$Description[6];
	$actor2=$Description[8];
	$actor1=explode(",", $actor1)[0];
	$actor1=explode(">", $actor1)[1];

	$actor2=explode(",", $actor2)[0];

?>