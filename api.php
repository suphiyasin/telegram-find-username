<?php
error_reporting(0);
class tele{
  public $cookie;
public function tgfind(){
	$myfile = fopen("tara.txt", "r") or die("Unable to open file!");
$a = fread($myfile,filesize("tara.txt"));
$ulist = explode("
", $a);
$random_keys=array_rand($ulist,1);
$plu = $ulist[$random_keys];
$plu2 = "$plu
";
			
$oha = strlen($plu);
	if($oha > 50){
		unlink("tara.txt");
		touch("tara.txt");
		echo '<div style="border-left:10px solid green;color:green;background-color:#2b2b2b;padding:30px;">Cleaned tara.txt..</div>';
	}
	else if($oha < 4){
		echo '<div style="border-left:10px solid green;color:green;background-color:#2b2b2b;padding:30px;">EMPTY</div>';
	
	}else{



$ch = curl_init();
require("load.php");
curl_setopt($ch, CURLOPT_URL, "https://t.me/$plu");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: t.me';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Cookie: '.$this->cookie.'';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"102\", \"Google Chrome\";v=\"102\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$ig=str_get_html($result);
$qenzy=$ig->find("div[class='tgme_page_title']",0);

$count = strlen($qenzy);
if($qenzy != NULL){
	echo "<font color=red>Taken</font><br/>";
	echo "Nick : ".$plu."<br/> Account Name :".$qenzy;
}else{
	echo "<font color=green>Take Now</font><br/>";
	echo $plu;
}
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
	$contentsxx = file_get_contents("tara.txt");
			$contentsxx = str_replace($plu2, '', $contentsxx);
//$contents2 = str_replace('', '', $contents2);
file_put_contents("tara.txt", $contentsxx);

	}
}





}
