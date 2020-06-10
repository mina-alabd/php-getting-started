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

$get = json_decode(file_get_contents("https://minaalabd.000webhostapp.com/boot/api/api.php?text=".urlencode($text)));

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
'text'=>"`$z1` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z2` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z3` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z4` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z5` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z6` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z7` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z8` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z9` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z10` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z11` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z12` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z13` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z14` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z15` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z16` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z17` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z18` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z19` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z20` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z21` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z22` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z23` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z24` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z25` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z26` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z27` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z28` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z29` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z30` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z31` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z32` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z33` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z34` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z35` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z36` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z37` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z38` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z39` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$z40` ",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
 ]);

    
    
    
}
