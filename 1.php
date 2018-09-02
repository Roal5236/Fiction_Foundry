<?php
$addOn=$_POST['title'];
echo $addOn;
$addOn=str_replace(" ", "+", $addOn);
$addOn1="find?ref_=nv_sr_fn&s=all&q=";
$searchUrl="https://www.imdb.com/".$addOn1.$addOn;
$no=5;

$curl = curl_init($searchUrl);
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

  $x1=explode("<td", $page);
  $link=explode('href=', $x1[2])[1];
  $link=explode('"', $link)[1];
  $link=explode('?ref_=fn_al_tt_1', $link);

$searchUrl2="https://www.imdb.com".$link[0]."episodes?season=".$no."&ref_=tt_eps_sn_".$no;
echo $searchUrl2;

?>