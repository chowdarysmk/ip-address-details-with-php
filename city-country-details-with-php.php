<html><head>
    <title>IP Address Details With PHP
</title>
<meta name="keywords" content="IP Address detect, geoplugin,Mahesh Surapaneni,Mahesh Kumar Surapaneni,web developer">
    <meta name="google-site-verification" content="ZKyT8ToCwRmktXMN-ebErWjlWTl7VdsN2ftrPj3E2Go" />   
    <meta name="description" content="Server Address Details all the information">
    <link rel="shortcut icon" href="Images/mahesh.jpg" type="image/jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>  
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCRNNQ4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->     
<?php /*Get user ip address*/
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
/*Get user ip address details with geoplugin.net*/
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
/*Get City name by return array*/
$city = $addrDetailsArr['geoplugin_city'];
/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];
/*echo '<pre>';
print_r($addrDetailsArr);
echo '</pre>';
die();*/
if(!$city){
   $city='Not Define';
}
if(!$country){
   $country='Not Define';
}
echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
echo '<strong>City</strong>:- '.$city.'<br/>';
echo '<strong>Country</strong>:- '.$country.'<br/>';
?>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7BRN5RKDHV"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TCRNNQ4');</script>
<!-- End Google Tag Manager --> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7BRN5RKDHV');
</script>
</body></html>