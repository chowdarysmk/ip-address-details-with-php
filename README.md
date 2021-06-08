# ip-address-details-with-php


https://maheshsurapaneni.000webhostapp.com/project/city-country-details-with-php.php


**Got some background stroy from Online.**<br>
$_SERVER['REMOTE_ADDR'] may not actually contain real client IP addresses, as it will give you a proxy address for clients connected through a proxy, for example. That may well be what you really want, though, depending what your doing with the IPs. Someone's private RFC1918 address may not do you any good if you're say, trying to see where your traffic is originating from, or remembering what IP the user last connected from, where the public IP of the proxy or NAT gateway might be the more appropriate to store.
<br><br>
There are several HTTP headers like X-Forwarded-For which may or may not be set by various proxies. The problem is that those are merely HTTP headers which can be set by anyone. There's no guarantee about their content. $_SERVER['REMOTE_ADDR'] is the actual physical IP address that the web server received the connection from and that the response will be sent to. Anything else is just arbitrary and voluntary information. There's only one scenario in which you can trust this information: you are controlling the proxy that sets this header. Meaning only if you know 100% where and how the header was set should you heed it for anything of importance.
<br><br>
**Editor Notes:** 
Using the above code has security implications. The client can set all HTTP header information (ie. $_SERVER['HTTP_...) to any arbitrary value it wants. As such it's far more reliable to use $_SERVER['REMOTE_ADDR'], as this cannot be set by the user.<br><br>

**Do NOT use the above code unless you know EXACTLY what it does!** I've seen MASSIVE security holes due to this. The client can set the X-Forwarded-For or the Client-IP header to any arbitrary value it wants. Unless you have a trusted reverse proxy, you shouldn't use any of those values. 
