<?php

define('API_KEY', '1107009022:AAEAwEsEkUhesKJRULWj9Z7PblHTnIDx_OQ');

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;

$get = json_decode(file_get_contents("https://minaalabd.000webhostapp.com/boot/api/zar.php?text=".urlencode($text)));

$z1= $get->result->z1;
$z2= $get->result->z2;
$z3= $get->result->z3;
$z4= $get->result->z4;
$z5= $get->result->z5;
$z6= $get->result->z6;
$z7= $get->result->z7;
$z8= $get->result->z8;
$z9= $get->result->z9;
$z10= $get->result->z10;
$z11= $get->result->z11;
$z12= $get->result->z12;
$z13= $get->result->z13;
$z14= $get->result->z14;
$z15= $get->result->z15;
$z16= $get->result->z16;
$z17= $get->result->z17;
$z18= $get->result->z18;
$z19= $get->result->z19;
$z20= $get->result->z20;
$z21= $get->result->z21;
$z22= $get->result->z22;
$z23= $get->result->z23;
$z24= $get->result->z24;
$z25= $get->result->z25;
$z26= $get->result->z26;
$z27= $get->result->z27;
$z28= $get->result->z28;
$z29= $get->result->z29;
$z30= $get->result->z30;
$z31= $get->result->z31;
$z32= $get->result->z32;
$z33= $get->result->z33;
$z34= $get->result->z34;
$z35= $get->result->z35;
$z36= $get->result->z36;
$z37= $get->result->z37;
$z38= $get->result->z38;
$z39= $get->result->z39;
$z40= $get->result->z40;
$z41= $get->result->z41;
$z42= $get->result->z42;
$z43= $get->result->z43;
$z44= $get->result->z44;
$z45= $get->result->z45;
$z46= $get->result->z46;
$z47= $get->result->z47;
$z48= $get->result->z48;
$z49= $get->result->z49;
$z50= $get->result->z50;
$z51= $get->result->z51;
$z52= $get->result->z52;
$z53= $get->result->z53;
$z54= $get->result->z54;
$z55= $get->result->z55;
$z56= $get->result->z56;
$z57= $get->result->z57;
$z58= $get->result->z58;
$z59= $get->result->z59;
$z60= $get->result->z60;
$z61= $get->result->z61;
$z62= $get->result->z62;
$z63= $get->result->z63;
$z64= $get->result->z64;
$z65= $get->result->z65;
$z66= $get->result->z66;
$z67= $get->result->z67;
$z68= $get->result->z68;
$z69= $get->result->z69;
$z70= $get->result->z70;






if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" أهلا بك في بوت الزخرفة الانجليزي 
يرجا الكتابه وارسال الاسماء بالانجليزي فقط ",
]);
}

if($text and $text !="/start"){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
1 - `$z1` 
2 - `$z2` 
3 - `$z3`
4 - `$z4`
5 - `$z5`
6 - `$z6`
7 - `$z7`
8 - `$z8`
9 - `$z9`
10 - `$z10`
11 - `$z11`
12 - `$z12`
13 - `$z13`
14 - `$z14`
15 - `$z15`
16 - `$z16`
17 - `$z17`
18 - `$z18`
19 - `$z19`
20 - `$z20`
21- `$z21`
22- `$z22`
23 - `$z23`
24 - `$z24`
25 - `$z25`
26 - `$z26`
27 - `$z27`
28 - `$z28`
29 - `$z29`
30 - `$z30`
31 - `$z31`
32 - `$z32`
33 - `$z33`
34 - `$z34`
35 - `$z35`
36 - `$z36`
37 - `$z37`
38 - `$z38`
39 - `$z39`
40 - `$z40`
41 - `$z41`
42 - `$z42`
43 - `$z43`
44 - `$z44`
45 - `$z45`
46 - `$z46`
47 - `$z47`
48 - `$z48`
49 - `$z49`
50 - `$z50`
51 - `$z51`
52 - `$z52`
53 - `$z53`
54 - `$z54`
55 - `$z55`
56 - `$z56`
57 - `$z57`
58 - `$z58`
59 - `$z59`
60 - `$z60`
61 - `$z61`
62 - `$z62`
63 - `$z63`
64 - `$z64`
65 - `$z65`
66 - `$z66`
67 - `$z67`
68 - `$z68`
69 - `$z69`
70 - `$z70`



تمت الزخرفه بــــــ 109ـــــ شــــــكل


",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
]);
}
