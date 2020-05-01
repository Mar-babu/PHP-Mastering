<?php
require_once "vendor/autoload.php";
use KubAT\PhpSimple\HtmlDomParser;

$word = strtolower("Night");
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&formate=json";
echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);
//curl_exec($ch);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

$dom = HtmlDomParser::str_get_html( $result );
$short = $dom->getElementByTagName("p.short");
echo "<strong>Short Meaning of {$word} is:</strong> {$short}";

echo "<br>";
echo "<br>";

$long = $dom->getElementByTagName("p.long");
echo "<strong>Long Meaning of {$word} is:</strong> {$long}";

echo "Synonym = ". $dom->getElementByTagName("dd");

//foreach ($dom->getElementsByTagName("dd a") as $tag){
////    echo $tag."<br/>";
////    print_r($tag."<br/>");
//    echo $tag->plaintext."<br/>";
//}

//foreach ($dom->find("dd a") as $tag){
////    echo $tag."<br/>";
////    print_r($tag."<br/>");
//    echo $tag->plaintext."<br/>";
//}


echo "<br/>";
echo "<br/>";


$alldd = $dom->find("dd");
echo "Synonyms = ". $alldd[0]->plaintext . "<br/>";
echo "Antonyms = ". $alldd[1]->plaintext. "<br/>";
echo "Types = ". $alldd[2]->plaintext. "<br/>";
echo "Types = ". $alldd[3]->plaintext. "<br/>";
echo "Types of cd= ". $alldd[4]->plaintext. "<br/>";
echo "Types of = ". $alldd[7]->plaintext. "<br/>";
echo "Types of = ". $alldd[8]->plaintext. "<br/>";

