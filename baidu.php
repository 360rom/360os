<?php

$urls = array(
    'https://https://www.360os.top',
    'https://https://www.360os.top/index.html',
	'https://https://www.360os.top/index.htm',
	'https://https://www.360os.top/360os/360os/',
	'https://https://www.360os.top/360os/360n7lite/360n7lite.html',
	'https://https://www.360os.top/360os/360n7/360n7.html',
	'https://https://www.360os.top/360os/360n7pro/360n7pro.html',
	'https://https://www.360os.top/360os/360n6lite/360n6lite.html',
	'https://https://www.360os.top/360os/360n6/360n6.html',
	'https://https://www.360os.top/360os/360n6pro/360n6pro.html',
	'https://https://www.360os.top/360os/360n5/360n5.html',
	'https://https://www.360os.top/360os/360n5s/360n5s.html',
	'https://https://www.360os.top/360os/360n4sQualcomm/360n4sQualcomm.html',
	'https://https://www.360os.top/360os/360vizza/360vizza.html',
	'https://https://www.360os.top/360os/360q5/360q5.html',
	'https://https://www.360os.top/360os/360q5plus/360q5plus',
);
$api = 'http://data.zz.baidu.com/urls?site=https://www.360os.top&token=GL6Maa5f0LscHVrr';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
						

?>