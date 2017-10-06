<?php 

require_once("twitteroauth.php");

 //oauth 1.0 authorization

	$consumer = "Ex2iTrsp6bDF1j4Ru12aiDZYy";

	$consemersecret = "C6HBPU8PMxYvGItW58xrStbZUgDffdSuiepfeqP7E0CdhbU7S6";

	$accestoken = "914810761054101504-F9iVrvWl1B3iX1TSdOng3ROZ3u481Dd";

	$accestokensecret = "gixpJMeoeddRBYP5jwXHc11db439RtmvofBvvl8VR99Zo";

// Mention your city woeid code to find top hashtags in twitters

	$Woeid_country_id = 2295424; // chennai WOEID

 //calling TwitterOauth

	$twitter = new TwitterOAuth($consumer,$consemersecret,$accestoken,$accestokensecret);

 // Twitter api url for hashtags in countrywise.
	$tweets = $twitter->get('https://api.twitter.com/1.1/trends/place.json?id='.$Woeid_country_id);

	$trends = $tweets[0]->trends;

	foreach($trends as $trend){
		
     	echo $trend->name.'<br>';  
    } 

?>
