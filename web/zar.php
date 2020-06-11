<?php
ob_start();
$API_KEY = "1107009022:AAHkOzKjK4pDf9D7i-C8-PH5x1NI-61iVe8";
define('API_KEY',$API_KEY);

function bot($method,$datas=[]){
    $ABoWaTaN = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ABoWaTaN";
        $ABoWaTaN_Sy = file_get_contents($url);
        return json_decode($ABoWaTaN_Sy);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$chs = "lloveMessages";
if($text == '/start'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ٴ┄•🔅•┄༻📯༺┄•🔅•┄  
مرحبا بك في اقوه بوت زخرفه في التليكرام 🎖
قم بأرسال اسمك بالعربيه ❗️
وسيتم زخرفته باحتراف 🏴
لاتنسى مشاركه البوت مع اصدقائك 🙆🏿‍♂
قناتنا @$ch ➕ »

﹌ ﹌ ﹌ ﹌ ﹌ ﹌ ﹌  ",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[ 
    [['text'=>"رسائل حب ورمانسيه ،!" ,  'url'=>"https://t.me/$chs"]],
        ]
    ])
        ]);
}
if($text !="/start"){
$zhrfa = json_decode(file_get_contents("http://minaalabd.000webhostapp.com/boot/api/api.php?text=".urlencode($text)))->result;
for($i = 0; $i <count($zhrfa); $i++){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$zhrfa[$i],
]);
}}









