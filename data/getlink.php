<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("link.xml");
$link=$xmlDoc->getElementsByTagName('link');
$q=$_GET["q"];
//lookup our links from the xml
if (strlen($q)>0) {
	$suggestion ="";
	for($i=0; $i<$link->length; $i++) {
		$title=$link->item($i) ->getElementsByTagName('title');
		$url=$link->item($i) ->getElementsByTagName('url');
		if($title->item(0)->nodeType==1) {
			//PLEASE find a matching link
			if(stristr($title->item(0)->childNodes->item(0)->nodeValue, $q)) {
				if($suggestion==""){
					$suggestion="<a href='" .
					$url->item(0)->childNodes->item(0)->nodeValue .
					"' target='_blank'>" .
					$title->item(0)->childNodes->item(0)->nodeValue .
					"</a>";
				} else {
					$suggestion= $suggestion . "<br /><br /><a href='" .
					$url->item(0)->childNodes->item(0)->nodeValue .
					"' target='_blank'>" .
					$title->item(0)->childNodes->item(0)->nodeValue .
					"</a>";
				}
			}
		}
	}
}
if($suggestion == ""){
	$response = "There is no site to suit your needs you unhappy sap!";
} else {
	$response = $suggestion;
}
echo $response;
?>
