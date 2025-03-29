<?php //<--- you see this shit right here, that php tag, it better be the first thing in the file
		//If there is even a space or a newline before that tag, shit will break
    // Connection settings:
     
    $servers = Array();
     
    /*
    Example: (copy paste this to somewhere AFTER the comment and fill with your own information)
    If you have multiple servers, list them one after the other. Change the id from 1 to 2, 3, 4, etc. tho.
     
    "address" and "port": is the ip or url you use to connect: Normally you see
    byond://123.123.123.123:56372. The 123.123.123.123 part is the address, the 56372
    part is the port. Fill with your own information, obviously. If you use an url
    and you connect to something like byond://game.mysite.com:1234, then
    game.mysite.com is the address and 1234 the port
    "servername": is just a string that gets written on the image. Can be
    pretty much anything
	errortext, when defined, replaces the "connection failed" error with the string given
     
    //My Server
    $servers[1] = Array();
    $servers[1]["address"] = "192.168.0.100";
    $servers[1]["port"] = 56372;
    $servers[1]["servername"] = "SS13: My Server";
     
    */
     
    //Copy paste the code above to after this line
     
    //Rustest
    $servers[0] = Array();
	$servers[0]["port"] = 55551;
    $servers[0]["servername"] = "Rustest [Lambda]";
    $servers[0]["address"] = "147.45.40.133";
    $servers[0]["errortext"] = "Сектор временно закрыт.";

    //Civ13
    $servers[1] = Array();
    $servers[1]["port"] = 55555;
    $servers[1]["servername"] = "Cilivization 13 [TDM]";
    $servers[1]["address"] = "147.45.40.133";
	$servers[1]["errortext"] = "Выбираем новую карту...";
     
    //World Of Darkness 13
    $servers[2] = Array();
    $servers[2]["port"] = 55558;
    $servers[2]["servername"] = "Darkness 13 [Vampire]";
    $servers[2]["address"] = "147.45.40.133";
	$servers[2]["errortext"] = "Ночь ещё не наступила.";

    //Secondary
    $servers[3] = Array();
    $servers[3]["port"] = 55553;
    $servers[3]["servername"] = "Secondary 13 [Temp]";
    $servers[3]["address"] = "147.45.40.133";
	$servers[3]["errortext"] = "Временный сервер закрыт.";


 ///\/ you see this shit right here, that closing php tag, it better be the last thing in the file
		//If there is even a space or a newline after that tag, shit will break
?>
