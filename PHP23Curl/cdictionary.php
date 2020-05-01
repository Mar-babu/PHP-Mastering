<?php
$word = strtolower("PRAYER");
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&formate=json";
echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);
//curl_exec($ch);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$short_start = strpos($result,'<p class="short">')+17;
$short_end = strpos($result,'</p>',$short_start);
$short = substr($result,$short_start,($short_end - $short_start));
echo "<strong>Short Meaning of {$word} is:</strong> {$short}";

echo "<br>";
echo "<br>";

$long_start = strpos($result,'<p class="long">')+16;
$long_end = strpos($result,'</p>',$long_start);
$short = substr($result,$long_start,($long_end - $long_start));
echo "<strong>Long Meaning of {$word} is:</strong> {$short}";