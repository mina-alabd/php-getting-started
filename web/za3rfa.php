<?php
ob_start();
$API_KEY = "1146216534:AAHUaKVZKBhRiXGBBnkQdpLbpGClw4mf3ZU";
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);


function bot($method,$datas=[]){
$marcus4 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$marcus4";
$marcus4 = file_get_contents($url);
return json_decode($marcus4);
}




$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$text     = $message->text;
$data = $update->callback_query->data;
$chat_id  = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;

$ashtrak = "695759710:AAG3gqTR8u288PYsFNf8c0WAvtwn_MbENsY"; 
$sudo = "495064815"; //هنآ حط ايديك .
$chs = "lloveMessages"; // هنا حط قناتك بدون @ .
$ch = "@lloveMessages"; // هنا حط معرف قناتك مع الـ @ . 

$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$username = $update->message->from->username;
$t =$message->chat->title; 


$dev_a = $sudo;
if($chat_id !== $dev_a){
bot('forwardMessage',[
'chat_id'=>$dev_a,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}





if($text == '/start'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ٴ┄•🔅•┄༻📯༺┄•🔅•┄  
مرحبا بك في اقوه بوت زخرفه في التليكرام 🎖
قم بأرسال اسمك بالعربيه ❗️
وسيتم زخرفته باحتراف 🏴
لاتنسى مشاركه البوت مع اصدقائك 🙆🏿‍♂
قناتنا $ch ➕ »

﹌ ﹌ ﹌ ﹌ ﹌ ﹌ ﹌  ",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[ 
    [['text'=>"رسائل حب ورمانسيه ،!" ,  'url'=>"https://t.me/$chs"]],
        ]
    ])
        ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
  $count = count($text);
   $face1 = $text;



$face1 =  str_replace('a',"Ꭿ",$face1);
$face1 = str_replace("b","Ᏸ",$face1);
$face1 = str_replace("c","Ꮸ",$face1);
$face1 = str_replace("d","Ꭰ",$face1);
$face1 = str_replace("e","Ꭼ",$face1);
$face1 = str_replace("f","Ꮀ",$face1);
$face1 = str_replace("g","Ꮆ",$face1);
$face1 = str_replace("h","Ꮋ",$face1);
$face1 = str_replace("i","Ꭵ",$face1);
$face1 = str_replace("j","Ꭻ",$face1);
$face1 = str_replace("k","Ꮶ",$face1);
$face1 = str_replace("l","Ꮮ",$face1);
$face1 = str_replace("m","Ꮇ",$face1);
$face1 = str_replace("n","Ꮑ",$face1);
$face1 = str_replace("o","Ꮻ",$face1);
$face1 = str_replace("p","Ꮲ",$face1);
$face1 = str_replace("q","Ꮕ",$face1);
$face1 = str_replace("r","Ꭱ",$face1);
$face1 = str_replace("s","Ꮪ",$face1);
$face1 = str_replace("t","Ꮏ",$face1);
$face1 = str_replace("u","Ꮜ",$face1);
$face1 = str_replace("v","Ꮙ",$face1);
$face1 = str_replace("w","Ꮤ",$face1);
$face1 = str_replace("x","X",$face1);
$face1 = str_replace("y","Ꮍ",$face1);
$face1 = str_replace("z","Ꮓ",$face1);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$face1."".$smile
   ]);
   }









if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
  $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','🅐',$JJ119); 
$JJ119 = str_replace("b","🅑",$JJ119); 
$JJ119 = str_replace("c","🅒",$JJ119); 
$JJ119 = str_replace("d","🅓",$JJ119); 
$JJ119 = str_replace("e","🅔",$JJ119); 
$JJ119 = str_replace("f","🅕",$JJ119); 
$JJ119 = str_replace("g","🅖",$JJ119); 
$JJ119 = str_replace("h","🅗",$JJ119); 
$JJ119 = str_replace("i","🅘",$JJ119); 
$JJ119 = str_replace("j","🅙",$JJ119); 
$JJ119 = str_replace("k","🅚",$JJ119); 
$JJ119 = str_replace("l","🅛",$JJ119); 
$JJ119 = str_replace("m","🅜",$JJ119); 
$JJ119 = str_replace("n","🅝",$JJ119); 
$JJ119 = str_replace("o","🅞",$JJ119); 
$JJ119 = str_replace("p","🅟",$JJ119); 
$JJ119 = str_replace("q","🅠",$JJ119); 
$JJ119 = str_replace("r","🅡",$JJ119); 
$JJ119 = str_replace("s","🅢",$JJ119); 
$JJ119 = str_replace("t","🅣",$JJ119); 
$JJ119 = str_replace("u"," 🅤",$JJ119); 
$JJ119 = str_replace("v","🅥",$JJ119); 
$JJ119 = str_replace("w","🅦",$JJ119); 
$JJ119 = str_replace("x","🅧",$JJ119); 
$JJ119 = str_replace("y","🅨",$JJ119); 
$JJ119 = str_replace("z","🅩",$JJ119); 
 
$JJ119 = str_replace('ض','ضً',$JJ119); 
$JJ119 = str_replace('ص','صً',$JJ119); 
$JJ119 = str_replace('ث','ثہ',$JJ119); 
$JJ119 = str_replace('ق','قہً',$JJ119); 
$JJ119 = str_replace('ف','فُہ',$JJ119); 
$JJ119 = str_replace('غ','غہ',$JJ119); 
$JJ119 = str_replace('ع','عہُ',$JJ119); 
$JJ119 = str_replace('ه','ه',$JJ119); 
$JJ119 = str_replace('خ','خہ',$JJ119); 
$JJ119 = str_replace('ح','حہ',$JJ119); 
$JJ119 = str_replace('ج','جہ',$JJ119); 
$JJ119 = str_replace('ش','شہ',$JJ119); 
$JJ119 = str_replace('س','سہ',$JJ119); 
$JJ119 = str_replace('ي','يہ',$JJ119); 
$JJ119 = str_replace('ب',' ٻً',$JJ119);
$JJ119 = str_replace('ل','لہ',$JJ119); 
$JJ119 = str_replace('ا',' ٳ',$JJ119); 
$JJ119 = str_replace('ت','تہ',$JJ119); 
$JJ119 = str_replace('ن','نٍ',$JJ119); 
$JJ119 = str_replace('ك','كُہ',$JJ119); 
$JJ119 = str_replace('م','مْ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظً',$JJ119); 
$JJ119 = str_replace('ط','طہ',$JJ119); 
 $JJ119 = str_replace('ذ','ذً',$JJ119); 
$JJ119 = str_replace('د','دِ',$JJ119); 
$JJ119 = str_replace('ز','زً',$JJ119); 
$JJ119 = str_replace('ر','ڒٍ',$JJ119); 
$JJ119 = str_replace('و','وٌ',$JJ119); 
 $JJ119 = str_replace('ى','ىّ',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }



if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$dev_a = str_replace('a','Ꭿ',$text);
$dev_a = str_replace("b","Ᏸ",$dev_a);
$dev_a = str_replace("c","Ꮸ",$dev_a);
$dev_a = str_replace("d","Ꮷ",$dev_a);
$dev_a = str_replace("e","Ꮛ",$dev_a);
$dev_a = str_replace("f","Ꭶ",$dev_a);
$dev_a = str_replace("g","Ᏻ",$dev_a);
$dev_a = str_replace("h","Ᏺ",$dev_a);
$dev_a = str_replace("i","Ꭸ",$dev_a);
$dev_a = str_replace("j","Ꮰ",$dev_a);
$dev_a = str_replace("k","Ꮵ",$dev_a);
$dev_a = str_replace("l","Ꮭ",$dev_a);
$dev_a = str_replace("m","ᗰ",$dev_a);
$dev_a = str_replace("n","Ꮑ",$dev_a);
$dev_a = str_replace("o","Ꭷ",$dev_a);
$dev_a = str_replace("p","Ꭾ",$dev_a);
$dev_a = str_replace("q","Ꮕ",$dev_a);
$dev_a = str_replace("r","ᖇ",$dev_a);
$dev_a = str_replace("s","Ꮥ",$dev_a);
$dev_a = str_replace("t","Ꮱ",$dev_a);
$dev_a = str_replace("u","Ꮼ",$dev_a);
$dev_a = str_replace("v","Ꮙ",$dev_a);
$dev_a = str_replace("w","Ꮗ",$dev_a);
$dev_a = str_replace("x","Ꮂ",$dev_a);
$dev_a = str_replace("y","Ꮍ",$dev_a);
$dev_a = str_replace("z","ᔓ",$dev_a);
                     
$dev_a = str_replace('ض','ضٰہٰٖ',$dev_a);
$dev_a = str_replace('ص','صٰہٰٖ',$dev_a);
$dev_a = str_replace('ث','ثٰہٰٖ',$dev_a);
$dev_a = str_replace('ق','قٰہٰٖ',$dev_a);
$dev_a = str_replace('ف','فٰہٰٖ',$dev_a);
$dev_a = str_replace('غ','غٰہٰٖ',$dev_a);
$dev_a = str_replace('ع','عٰہٰٖ',$dev_a);
$dev_a = str_replace('ه','هٰہٰٖ',$dev_a);
$dev_a = str_replace('خ','خٰہٰٖ',$dev_a);
$dev_a = str_replace('ح','حٰہٰٖ',$dev_a);
$dev_a = str_replace('ج','جٰہٰٖ',$dev_a);
$dev_a = str_replace('ش','شٰہٰٖ',$dev_a);
$dev_a = str_replace('س','سٰہٰٖ',$dev_a);
$dev_a = str_replace('ي','يٰہٰٖ',$dev_a);
$dev_a = str_replace('ب','بٰہٰٖ',$dev_a);
$dev_a = str_replace('ل','لہٰٖ',$dev_a);
$dev_a = str_replace('ا','اٰ',$dev_a);
$dev_a = str_replace('ت','تٰہٰٖ',$dev_a);
$dev_a = str_replace('ن','نٰہٰٖ',$dev_a);
$dev_a = str_replace('م','مٰہٰٖ',$dev_a);
$dev_a = str_replace('ك','كٰہٰٖ',$dev_a);
$dev_a = str_replace('ة','ةً',$dev_a);
$dev_a = str_replace('ء','ء',$dev_a);
$dev_a = str_replace('ظ','ظٰہٰٖ',$dev_a);
$dev_a = str_replace('ط','طٰہٰٖ',$dev_a);
$dev_a = str_replace('ذ','ذٖ',$dev_a);
$dev_a = str_replace('د','دٰ',$dev_a);
$dev_a = str_replace('ز','زٖ',$dev_a);
$dev_a = str_replace('ر','رٰ',$dev_a);
$dev_a = str_replace('و','وٰ',$dev_a);
$dev_a = str_replace('ى','ى',$dev_a);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$dev_a."".$smile
   ]);
}












if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','𝗔',$JJ119); 
$JJ119 = str_replace("b","𝗕",$JJ119); 
$JJ119 = str_replace("c","𝗖",$JJ119); 
$JJ119 = str_replace("d","𝗗",$JJ119); 
$JJ119 = str_replace("e","𝗘",$JJ119); 
$JJ119 = str_replace("f","𝗙",$JJ119); 
$JJ119 = str_replace("g","𝗚",$JJ119); 
$JJ119 = str_replace("h","𝗛",$JJ119); 
$JJ119 = str_replace("i","𝗜",$JJ119); 
$JJ119 = str_replace("j","𝗝",$JJ119); 
$JJ119 = str_replace("k","𝗞",$JJ119); 
$JJ119 = str_replace("l","𝗟",$JJ119); 
$JJ119 = str_replace("m","𝗠",$JJ119); 
$JJ119 = str_replace("n","𝗡",$JJ119); 
$JJ119 = str_replace("o","𝗢",$JJ119); 
$JJ119 = str_replace("p","𝗣",$JJ119); 
$JJ119 = str_replace("q","𝗤",$JJ119); 
$JJ119 = str_replace("r","𝗥",$JJ119); 
$JJ119 = str_replace("s","𝗦",$JJ119); 
$JJ119 = str_replace("t","𝗧",$JJ119); 
$JJ119 = str_replace("u","𝗨",$JJ119); 
$JJ119 = str_replace("v","𝗩",$JJ119); 
$JJ119 = str_replace("w","𝗪",$JJ119); 
$JJ119 = str_replace("x","𝗫",$JJ119); 
$JJ119 = str_replace("y","𝗬",$JJ119); 
$JJ119 = str_replace("z","𝗭",$JJ119); 
      
$JJ119 = str_replace('ض','ضـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ص','صـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ث','ثـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ق','قـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ف','فـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('غ','غـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ع','عـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ه','هـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('خ','خـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ح','حـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ج','جـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ش','شـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('س','سـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ي','يـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ب','بـٰ̲ـہ',$JJ119);
$JJ119 = str_replace('ل','لـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ا','اٰ',$JJ119); 
$JJ119 = str_replace('ت','تـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ن','نـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('م','مـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ك','كـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ط','طـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ذ','ذٰ',$JJ119); 
$JJ119 = str_replace('د','دٰ',$JJ119); 
$JJ119 = str_replace('ز','زٰ',$JJ119); 
$JJ119 = str_replace('ر','رٰ',$JJ119); 
$JJ119 = str_replace('و','وٰ',$JJ119); 
$JJ119 = str_replace('ى','ىَ',$JJ119); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
}
 
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$JJ119 = str_replace('a','🅰',$text); 
$JJ119 = str_replace('b','🅱',$JJ119); 
$JJ119 = str_replace('c','🅲',$JJ119); 
$JJ119 = str_replace('d','🅳',$JJ119); 
$JJ119 = str_replace('e','🅴',$JJ119); 
$JJ119 = str_replace('f','🅵',$JJ119); 
$JJ119 = str_replace('g','🅶',$JJ119); 
$JJ119 = str_replace('h','🅷',$JJ119); 
$JJ119 = str_replace('i','🅸',$JJ119); 
$JJ119 = str_replace('j','🅹',$JJ119); 
$JJ119 = str_replace('k','🅺',$JJ119); 
$JJ119 = str_replace('l','🅻',$JJ119); 
$JJ119 = str_replace('m','🅼',$JJ119); 
$JJ119 = str_replace('n','🅽',$JJ119); 
$JJ119 = str_replace('o','🅾',$JJ119); 
$JJ119 = str_replace('p','🅿',$JJ119); 
$JJ119 = str_replace('q','🆀',$JJ119); 
$JJ119 = str_replace('r','🆁',$JJ119); 
$JJ119 = str_replace('s','🆂',$JJ119); 
$JJ119 = str_replace('t','🆃',$JJ119); 
$JJ119 = str_replace('u',' 🆄',$JJ119); 
$JJ119 = str_replace('v','🆅',$JJ119); 
$JJ119 = str_replace('w','🆆',$JJ119); 
$JJ119 = str_replace('x','🆇',$JJ119); 
$JJ119 = str_replace('y','🆈',$JJ119); 
$JJ119 = str_replace('z','🆉',$JJ119); 
 
$JJ119 = str_replace('ض','ضـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ص','صـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ث','ثـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ق','قـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('غ','غـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ع','عـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ه','ۿۿہ',$JJ119); 
$JJ119 = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ح','حـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ج','جـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ش','شـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('س','سـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ي',' يـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ب','  بـ๋͜‏ـﮧ',$JJ119);
$JJ119 = str_replace('ل',' لـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ا','آ',$JJ119); 
$JJ119 = str_replace('ت','  تـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ن','نـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('م','مـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ك','ڪـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ط','طـ๋͜‏ـﮧ',$JJ119); 
 $JJ119 = str_replace('ذ','ذِ',$JJ119); 
$JJ119 = str_replace('د','دٰ',$JJ119); 
$JJ119 = str_replace('ز','زً',$JJ119); 
$JJ119 = str_replace('ر','ر',$JJ119); 
$JJ119 = str_replace('و','ﯛ̲୭',$JJ119); 
 $JJ119 = str_replace('ى','ىٰ',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$JJ119 = str_replace('a','̶a̶',$text); 
$JJ119 = str_replace('b','b̶',$JJ119); 
$JJ119 = str_replace('c','c̶',$JJ119); 
$JJ119 = str_replace('d','d̶',$JJ119); 
$JJ119 = str_replace('e','e̶',$JJ119); 
$JJ119 = str_replace('f','f̶',$JJ119); 
$JJ119 = str_replace('g','g̶',$JJ119); 
$JJ119 = str_replace('h','h̶',$JJ119); 
$JJ119 = str_replace('i','i̶',$JJ119); 
$JJ119 = str_replace('j','j̶',$JJ119); 
$JJ119 = str_replace('k','k̶',$JJ119); 
$JJ119 = str_replace('l','l̶',$JJ119); 
$JJ119 = str_replace('m','m̶',$JJ119); 
$JJ119 = str_replace('n','n̶',$JJ119); 
$JJ119 = str_replace('o','o̶',$JJ119); 
$JJ119 = str_replace('p','p̶',$JJ119); 
$JJ119 = str_replace('q','q̶',$JJ119); 
$JJ119 = str_replace('r','r̶',$JJ119); 
$JJ119 = str_replace('s','s̶',$JJ119); 
$JJ119 = str_replace('t','t̶',$JJ119); 
$JJ119 = str_replace('u','ᵘ̶ ',$JJ119); 
$JJ119 = str_replace('v','v̶',$JJ119); 
$JJ119 = str_replace('w','w̶',$JJ119); 
$JJ119 = str_replace('x','x̶',$JJ119); 
$JJ119 = str_replace('y','y̶',$JJ119); 
$JJ119 = str_replace('z','z̶',$JJ119); 

 $JJ119 = str_replace('ض','ضۜہٰٰ',$JJ119); 
$JJ119 = str_replace('ص','صۛہٰٰ',$JJ119); 
$JJ119 = str_replace('ث','ثہٰٰ',$JJ119); 
$JJ119 = str_replace('ق','قྀ̲ہٰٰٰ',$JJ119); 
$JJ119 = str_replace('ف','ف͒ہٰٰ',$JJ119); 
$JJ119 = str_replace('غ','غہٰٰ',$JJ119); 
$JJ119 = str_replace('ع','ۤ؏ـ',$JJ119); 
$JJ119 = str_replace('ه','ھہ',$JJ119); 
$JJ119 = str_replace('خ','خٰ̐ہ',$JJ119); 
$JJ119 = str_replace('ح','حہٰٰ',$JJ119); 
$JJ119 = str_replace('ج','جْۧ ',$JJ119); 
$JJ119 = str_replace('ش','شِٰہٰٰ',$JJ119); 
$JJ119 = str_replace('س','سٰٰٓ',$JJ119); 
$JJ119 = str_replace('ي','يِٰہ',$JJ119); 
$JJ119 = str_replace('ب','بّہ',$JJ119);
$JJ119 = str_replace('ل','ل',$JJ119); 
$JJ119 = str_replace('ا','آ',$JJ119); 
$JJ119 = str_replace('ت',' تَہَٰ',$JJ119); 
$JJ119 = str_replace('ن','نَِٰہ',$JJ119); 
$JJ119 = str_replace('ك','ڪٰྀہٰٰٖ',$JJ119); 
$JJ119 = str_replace('م','مـ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 


$JJ119 = str_replace('ظ','ظۗـہٰٰ',$JJ119); 
$JJ119 = str_replace('ط','طۨہٰٰ',$JJ119); 
 $JJ119 = str_replace('ذ','ذِ',$JJ119); 
$JJ119 = str_replace('د','دُ',$JJ119); 
$JJ119 = str_replace('ز','ژ',$JJ119); 
$JJ119 = str_replace('ر','رٰ',$JJ119); 
$JJ119 = str_replace('و','وً',$JJ119); 
 $JJ119 = str_replace('ى','ى',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text; 
$JJ119 = str_replace('a','⧼α⧽',$JJ119); 
$JJ119 = str_replace('b','⧼в⧽',$JJ119); 
$JJ119 = str_replace('c','⧼c⧽',$JJ119); 
$JJ119 = str_replace('d','⧼ɒ⧽',$JJ119); 
$JJ119 = str_replace('e','⧼є⧽',$JJ119); 
$JJ119 = str_replace('f','⧼f⧽',$JJ119); 
$JJ119 = str_replace('g','⧼ɢ⧽',$JJ119); 
$JJ119 = str_replace('h','⧼н⧽',$JJ119); 
$JJ119 = str_replace('i','⧼ɪ⧽',$JJ119); 
$JJ119 = str_replace('j','⧼ᴊ⧽',$JJ119); 
$JJ119 = str_replace('k','⧼ĸ⧽',$JJ119); 
$JJ119 = str_replace('l','⧼ℓ⧽',$JJ119); 
$JJ119 = str_replace('m','⧼м⧽',$JJ119); 
$JJ119 = str_replace('n','⧼и⧽',$JJ119); 
$JJ119 = str_replace('o','⧼σ⧽',$JJ119); 
$JJ119 = str_replace('p','⧼ρ⧽',$JJ119); 
$JJ119 = str_replace('q','⧼q⧽',$JJ119); 
$JJ119 = str_replace('r','⧼я⧽',$JJ119); 
$JJ119 = str_replace('s','⧼s⧽',$JJ119); 
$JJ119 = str_replace('t','⧼τ⧽',$JJ119); 
$JJ119 = str_replace('u','⧼υ⧽',$JJ119); 
$JJ119 = str_replace('v','⧼v⧽',$JJ119); 
$JJ119 = str_replace('w','⧼ω⧽',$JJ119); 
$JJ119 = str_replace('x','⧼x⧽',$JJ119); 
$JJ119 = str_replace('y','⧼y⧽',$JJ119); 
$JJ119 = str_replace('z','⧼z⧽',$JJ119); 

$JJ119 = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$JJ119); 
$JJ119 = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$JJ119); 
$JJ119 = str_replace('ث','ث̲ꫭـﮧ',$JJ119); 
$JJ119 = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$JJ119); 
$JJ119 = str_replace('ف','',$JJ119); 
$JJ119 = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$JJ119); 
$JJ119 = str_replace('ع','غـّٰ̐ہٰٰ',$JJ119); 
$JJ119 = str_replace('ه','ٰ̲ھہ',$JJ119); 
$JJ119 = str_replace('خ','خ̲ﮧ',$JJ119); 
$JJ119 = str_replace('ح','ح̲ꪳـﮧ',$JJ119); 
$JJ119 = str_replace('ج','ج̲ꪸـﮧ',$JJ119); 
$JJ119 = str_replace('ش','ش̲ꪾـﮧ',$JJ119); 
$JJ119 = str_replace('س','سـ̷ٰٰﮧْ',$JJ119); 
$JJ119 = str_replace('ي','يـِٰ̲ﮧ',$JJ119); 
$JJ119 = str_replace('ب','ب̲ꪰـﮧ',$JJ119);
$JJ119 = str_replace('ل','لٍُـّٰ̐ہ',$JJ119); 
$JJ119 = str_replace('ا',' ཻا ',$JJ119); 
$JJ119 = str_replace('ت','تـٰۧﮧ',$JJ119); 
$JJ119 = str_replace('ن','نٰ̲̐ـﮧْ',$JJ119); 
$JJ119 = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$JJ119); 
$JJ119 = str_replace('ك','كـِّﮧْٰٖ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظَـ๋͜ﮧْ',$JJ119); 
$JJ119 = str_replace('ط','ط̲꫁ـﮧ',$JJ119); 
 $JJ119 = str_replace('ذ','ذٖ',$JJ119); 
$JJ119 = str_replace('د','دُ',$JJ119); 
$JJ119 = str_replace('ز','ژٰ',$JJ119); 
$JJ119 = str_replace('ر','',$JJ119); 
$JJ119 = str_replace('و','ﯛ૭',$JJ119); 
 $JJ119 = str_replace('ى','ىِ',$JJ119); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$TlllllT = str_replace('ض', 'ضِـٰٚـِْ✮ِـٰٚـِْ', $text);
   $TlllllT = str_replace('ص', 'صِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِ͒ـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِ̐ـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('س', 'سِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('م', 'مِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ذ', 'ذِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('a',"ᵃ",$TlllllT);
$TlllllT = str_replace("b","ᵇ",$TlllllT);
$TlllllT = str_replace("c","ᶜ",$TlllllT);
$TlllllT = str_replace("d","ᵈ",$TlllllT);
$TlllllT = str_replace("e","ᵉ",$TlllllT);
$TlllllT = str_replace("f","ᶠ",$TlllllT);
$TlllllT = str_replace("g","ᵍ",$TlllllT);
$TlllllT = str_replace("h","ʰ",$TlllllT);
$TlllllT = str_replace("i","ᶤ",$TlllllT);
$TlllllT = str_replace("j","ʲ",$TlllllT);
$TlllllT = str_replace("k","ᵏ",$TlllllT);
$TlllllT = str_replace("l","ˡ",$TlllllT);
$TlllllT = str_replace("m","ᵐ",$TlllllT);
$TlllllT = str_replace("n","ᶰ",$TlllllT);
$TlllllT = str_replace("o","ᵒ",$TlllllT);
$TlllllT = str_replace("p","ᵖ",$TlllllT);
$TlllllT = str_replace("q","ᵠ",$TlllllT);
$TlllllT = str_replace("r","ʳ",$TlllllT);
$TlllllT = str_replace("s","ˢ",$TlllllT);
$TlllllT = str_replace("t","ᵗ",$TlllllT);
$TlllllT = str_replace("u","ᵘ",$TlllllT);
$TlllllT = str_replace("v","ᵛ",$TlllllT);
$TlllllT = str_replace("w","ʷ",$TlllllT);
$TlllllT = str_replace("x","ˣ",$TlllllT);
$TlllllT = str_replace("y","ʸ",$TlllllT);
$TlllllT = str_replace("z","ᶻ",$TlllllT);

   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$TlllllT = $text;
   $TlllllT = str_replace('ض', 'ض͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ص', 'ص͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'ق͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'ع͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'ح͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'ج͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'ش͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('س', 'س͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'ي͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'ب͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'ل͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'ت͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'ن͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('م', 'م͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'ط͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Θ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'ẁ' , $TlllllT);
	 $TlllllT = str_replace('e', 'ë' , $TlllllT);
  	 $TlllllT = str_replace('r', 'я' , $TlllllT);
	 $TlllllT = str_replace('t', 'ť' , $TlllllT);
  	 $TlllllT = str_replace('y', 'y' , $TlllllT);
	 $TlllllT = str_replace('u', 'ע' , $TlllllT);
  	 $TlllllT = str_replace('i', 'į' , $TlllllT);
	 $TlllllT = str_replace('o', 'ð' , $TlllllT);
  	 $TlllllT = str_replace('p', 'ρ' , $TlllllT);
	 $TlllllT = str_replace('a', 'à' , $TlllllT);
  	 $TlllllT = str_replace('s', 'ś' , $TlllllT);
	 $TlllllT = str_replace('d', 'ď' , $TlllllT);
  	 $TlllllT = str_replace('f', '∫' , $TlllllT);
	 $TlllllT = str_replace('g', 'ĝ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'ŋ' , $TlllllT);
	 $TlllllT = str_replace('j', 'Ј' , $TlllllT);
  	 $TlllllT = str_replace('k', 'қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ŀ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'ź' , $TlllllT);
	 $TlllllT = str_replace('x', 'א' , $TlllllT);
  	 $TlllllT = str_replace('c', 'ć' , $TlllllT);
	 $TlllllT = str_replace('v', 'V' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ђ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'ŋ' , $TlllllT);
	 $TlllllT = str_replace('m', 'm' , $TlllllT);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِـೋـ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِـೋـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِـೋـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِـೋـ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِ͒ـೋـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِـೋـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِـೋـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِ̐ـೋـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِـೋـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِـೋـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِـೋـ', $TlllllT);
   $TlllllT = str_replace('س', 'سِـೋـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِـೋـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِـೋـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِـೋـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِـೋـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِـೋـ', $TlllllT);
   $TlllllT = str_replace('م', 'مِـೋـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِـೋـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِـೋـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـೋـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ҩ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Щ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Є' , $TlllllT);
  	 $TlllllT = str_replace('r', 'R' , $TlllllT);
	 $TlllllT = str_replace('t', 'ƚ' , $TlllllT);
  	 $TlllllT = str_replace('y', '￥' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ц' , $TlllllT);
  	 $TlllllT = str_replace('i', 'Ī' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ø' , $TlllllT);
  	 $TlllllT = str_replace('p', 'P' , $TlllllT);
	 $TlllllT = str_replace('a', 'Â' , $TlllllT);
  	 $TlllllT = str_replace('s', '$' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ð' , $TlllllT);
  	 $TlllllT = str_replace('f', 'Ŧ' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ǥ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'Ħ' , $TlllllT);
	 $TlllllT = str_replace('j', 'ʖ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ŀ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ẕ' , $TlllllT);
	 $TlllllT = str_replace('x', 'X' , $TlllllT);
  	 $TlllllT = str_replace('c', 'Ĉ' , $TlllllT);
	 $TlllllT = str_replace('v', 'V' , $TlllllT);
  	 $TlllllT = str_replace('b', 'ß' , $TlllllT);
  	 $TlllllT = str_replace('n', 'И' , $TlllllT);
	 $TlllllT = str_replace('m', 'ⴅ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $TlllllT = str_replace('ص', 'صـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒ـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐ـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('س', 'سـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('م', 'مـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT= str_replace('q', '•🇶', $TlllllT);
   $TlllllT= str_replace('w', '•🇼', $TlllllT);
   $TlllllT= str_replace('e', '•🇪', $TlllllT);
   $TlllllT= str_replace('r', '•🇷', $TlllllT);
   $TlllllT= str_replace('t', '•🇹', $TlllllT);
   $TlllllT= str_replace('y', '•🇾', $TlllllT);
   $TlllllT= str_replace('u', '•🇻', $TlllllT);
   $TlllllT= str_replace('i', '•🇮', $TlllllT);
   $TlllllT= str_replace('o', '•🇴', $TlllllT);
   $TlllllT= str_replace('p', '•🇵', $TlllllT);
   $TlllllT= str_replace('a', '•🇦', $TlllllT);
   $TlllllT= str_replace('s', '•🇸', $TlllllT);
   $TlllllT= str_replace('d', '•🇩', $TlllllT);
   $TlllllT= str_replace('f', '•🇫', $TlllllT);
   $TlllllT= str_replace('g', '•🇬', $TlllllT);
   $TlllllT= str_replace('h', '•🇭', $TlllllT);
   $TlllllT= str_replace('j', '•🇯', $TlllllT);
   $TlllllT= str_replace('k', '•🇰', $TlllllT);
   $TlllllT= str_replace('l', '•🇱', $TlllllT);
   $TlllllT= str_replace('z', '•🇿', $TlllllT);
   $TlllllT= str_replace('x', '•🇽', $TlllllT);
   $TlllllT= str_replace('c', '•🇨', $TlllllT);
   $TlllllT= str_replace('v', '•🇺', $TlllllT);
   $TlllllT= str_replace('b', '•🇧', $TlllllT);
   $TlllllT= str_replace('n', '•🇳', $TlllllT);
   $TlllllT= str_replace('m', '•🇲', $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِٰ͒ـِۢ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِٰ̐ـِۢ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('س', 'سِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('م', 'مِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ⴓ' , $TlllllT);
     $TlllllT = str_replace('w', 'ᗯ' , $TlllllT);
	 $TlllllT = str_replace('e', 'ᕮ' , $TlllllT);
     $TlllllT = str_replace('r', 'ᖇ' , $TlllllT);
	 $TlllllT = str_replace('t', 'ͳ' , $TlllllT);
 	$TlllllT = str_replace('y', 'ϒ' , $TlllllT);
	 $TlllllT = str_replace('u', 'ᘮ' , $TlllllT);
	 $TlllllT = str_replace('i', 'ᓰ' , $TlllllT);
	 $TlllllT = str_replace('o', '〇' , $TlllllT);
	 $TlllllT = str_replace('p', 'ᖘ' , $TlllllT);
	 $TlllllT = str_replace('a', 'ᗩ' , $TlllllT);
	 $TlllllT = str_replace('s', 'ᔕ' , $TlllllT);
	 $TlllllT = str_replace('d', 'ᗪ' , $TlllllT);
	 $TlllllT = str_replace('f', 'Բ' , $TlllllT);
	 $TlllllT = str_replace('g', 'ᘐ' , $TlllllT);
	 $TlllllT = str_replace('h', 'ᕼ' , $TlllllT);
	 $TlllllT = str_replace('j', 'ᒎ' , $TlllllT);
	 $TlllllT = str_replace('k', 'Ḱ' , $TlllllT);
	 $TlllllT = str_replace('l', 'ᒪ' , $TlllllT);
	 $TlllllT = str_replace('z', 'Ꙁ' , $TlllllT);
	 $TlllllT = str_replace('x', 'Ꮖ' , $TlllllT);
	 $TlllllT = str_replace('c', 'ᑕ' , $TlllllT);
	 $TlllllT = str_replace('v', 'ᐯ' , $TlllllT);
	 $TlllllT = str_replace('b', 'ᙖ' , $TlllllT);
	 $TlllllT = str_replace('n', 'ᘉ' , $TlllllT);
	 $TlllllT = str_replace('m', 'ᙢ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'q' , $TlllllT);
  	 $TlllllT = str_replace('w', 'ω' , $TlllllT);
	 $TlllllT = str_replace('e', 'ε' , $TlllllT);
  	 $TlllllT = str_replace('r', 'я' , $TlllllT);
	 $TlllllT = str_replace('t', 'т' , $TlllllT);
  	 $TlllllT = str_replace('y', 'ү' , $TlllllT);
	 $TlllllT = str_replace('u', 'υ' , $TlllllT);
  	 $TlllllT = str_replace('i', 'ι' , $TlllllT);
	 $TlllllT = str_replace('o', 'σ' , $TlllllT);
  	 $TlllllT = str_replace('p', 'ρ' , $TlllllT);
	 $TlllllT = str_replace('a', 'α' , $TlllllT);
  	 $TlllllT = str_replace('s', 's' , $TlllllT);
	 $TlllllT = str_replace('d', '∂' , $TlllllT);
  	 $TlllllT = str_replace('f', 'ғ' , $TlllllT);
	 $TlllllT = str_replace('g', 'g' , $TlllllT);
  	 $TlllllT = str_replace('h', 'н' , $TlllllT);
	 $TlllllT = str_replace('j', 'נ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'к' , $TlllllT);
	 $TlllllT = str_replace('l', 'ℓ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'z' , $TlllllT);
	 $TlllllT = str_replace('x', 'x' , $TlllllT);
  	 $TlllllT = str_replace('c', 'c' , $TlllllT);
	 $TlllllT = str_replace('v', 'v' , $TlllllT);
  	 $TlllllT = str_replace('b', 'в' , $TlllllT);
  	 $TlllllT = str_replace('n', 'η' , $TlllllT);
	 $TlllllT = str_replace('m', 'м' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼??) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِٰ͒ـۛৣـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِٰ̐ـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('س', 'سِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('م', 'مِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِٰـۛৣـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ｑ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Ｗ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Ｅ' , $TlllllT);
  	 $TlllllT = str_replace('r', 'Ｒ' , $TlllllT);
	 $TlllllT = str_replace('t', 'Ｔ' , $TlllllT);
  	 $TlllllT = str_replace('y', 'Ｙ' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ｕ' , $TlllllT);
  	 $TlllllT = str_replace('i', 'Ｉ' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ｏ' , $TlllllT);
  	 $TlllllT = str_replace('p', 'Ｐ' , $TlllllT);
	 $TlllllT = str_replace('a', 'Ａ' , $TlllllT);
  	 $TlllllT = str_replace('s', 'Ｓ' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ｄ' , $TlllllT);
  	 $TlllllT = str_replace('f', 'Բ' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ｇ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'Ｈ' , $TlllllT);
	 $TlllllT = str_replace('j', 'Ｊ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Ｋ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ｌ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ｚ' , $TlllllT);
	 $TlllllT = str_replace('x', 'Ｘ' , $TlllllT);
  	 $TlllllT = str_replace('c', 'С' , $TlllllT);
	 $TlllllT = str_replace('v', 'Ｖ' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ｂ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'Ｎ' , $TlllllT);
	 $TlllllT = str_replace('m', 'Ⅿ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ص', 'صـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ق', 'قـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒ـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('غ', 'غـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ع', 'عـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐ـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ح', 'حـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ج', 'جـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ش', 'شـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('س', 'سـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ي', 'يـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ب', 'بـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ل', 'لـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ن', 'نـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('م', 'م', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ط', 'طـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظـۘ❈ـۘ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ҩ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Ɯ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Ɛ' , $TlllllT);
  	 $TlllllT = str_replace('r', '尺' , $TlllllT);
	 $TlllllT = str_replace('t', 'Ť' , $TlllllT);
  	 $TlllllT = str_replace('y', 'Ϥ' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ц' , $TlllllT);
  	 $TlllllT = str_replace('i', 'ɪ' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ø' , $TlllllT);
  	 $TlllllT = str_replace('p', 'þ' , $TlllllT);
	 $TlllllT = str_replace('a', 'Λ' , $TlllllT);
  	 $TlllllT = str_replace('s', 'ら' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ð' , $TlllllT);
  	 $TlllllT = str_replace('f', 'F' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ɠ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'н' , $TlllllT);
	 $TlllllT = str_replace('j', 'ﾌ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ł' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ẕ' , $TlllllT);
	 $TlllllT = str_replace('x', 'χ' , $TlllllT);
  	 $TlllllT = str_replace('c', 'ㄈ' , $TlllllT);
	 $TlllllT = str_replace('v', 'Ɣ' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ϧ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'Л' , $TlllllT);
	 $TlllllT = str_replace('m', '௱' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = str_replace('ا','ٱ',$text); 
$iBadlz = str_replace('ب','ﺑ',$iBadlz); 
$iBadlz = str_replace('ت','ﺗ̲ ',$iBadlz); 
$iBadlz = str_replace('ث','ثّـ',$iBadlz); 
$iBadlz = str_replace('ج','جّـ',$iBadlz); 
$iBadlz = str_replace('ح','ﺣّ͠ـ',$iBadlz); 
$iBadlz = str_replace('خ','ﺣ͠ ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذّ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','زْ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̭͠ ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ͠ ',$iBadlz);  
$iBadlz = str_replace('ص','ڝـ',$iBadlz); 
$iBadlz = str_replace('ض','ڞـ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','ﻋ̝̚',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̣̐',$iBadlz); 
$iBadlz = str_replace('ف','ﻓ̲̣̐ ',$iBadlz); 
$iBadlz = str_replace('ق','ﻗ̮ـ̃',$iBadlz); 
$iBadlz = str_replace('ك','ڪْ',$iBadlz); 
$iBadlz = str_replace('ل','لْـ',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ﻧـ',$iBadlz);  
$iBadlz = str_replace('ه','ھَہّ',$iBadlz); 
$iBadlz = str_replace('و','ۅ',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('q', 'Ⴓ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Ш' , $iBadlz);
	 $iBadlz = str_replace('e', 'Σ' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Γ' , $iBadlz);
	 $iBadlz = str_replace('t', 'Ƭ' , $iBadlz);
  	 $iBadlz = str_replace('y', 'Ψ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ʊ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'I' , $iBadlz);
	 $iBadlz = str_replace('o', 'Θ' , $iBadlz);
  	 $iBadlz = str_replace('p', 'Ƥ' , $iBadlz);
	 $iBadlz = str_replace('a', 'Δ' , $iBadlz);
  	 $iBadlz = str_replace('s', 'Ѕ' , $iBadlz);
	 $iBadlz = str_replace('d', 'D' , $iBadlz);
  	 $iBadlz = str_replace('f', 'F' , $iBadlz);
	 $iBadlz = str_replace('g', 'G' , $iBadlz);
  	 $iBadlz = str_replace('h', 'H' , $iBadlz);
	 $iBadlz = str_replace('j', 'J' , $iBadlz);
  	 $iBadlz = str_replace('k', 'Ƙ' , $iBadlz);
	 $iBadlz = str_replace('l', 'L' , $iBadlz);
  	 $iBadlz = str_replace('z', 'Z' , $iBadlz);
	 $iBadlz = str_replace('x', 'Ж' , $iBadlz);
  	 $iBadlz = str_replace('c', 'C' , $iBadlz);
	 $iBadlz = str_replace('v', 'Ʋ' , $iBadlz);
  	 $iBadlz = str_replace('b', 'Ɓ' , $iBadlz);
  	 $iBadlz = str_replace('n', '∏' , $iBadlz);
	 $iBadlz = str_replace('m', 'Μ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀?? ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','ب',$iBadlz); 
$iBadlz = str_replace('ت','ت',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','جۚ ּ',$iBadlz);  
$iBadlz = str_replace('ح','حۡ',$iBadlz); 
$iBadlz = str_replace('خ','خۡ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','سۜ',$iBadlz); 
$iBadlz = str_replace('ش','ش',$iBadlz); 
$iBadlz = str_replace('ص','ص',$iBadlz); 
$iBadlz = str_replace('ض','ض',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظ',$iBadlz); 
$iBadlz = str_replace('ع','ع',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','مۘ',$iBadlz); 
$iBadlz = str_replace('ن','نۨــہ',$iBadlz);  
$iBadlz = str_replace('ه','هۂَ',$iBadlz); 
$iBadlz = str_replace('ٰو','و',$iBadlz); 
$iBadlz = str_replace('ي','يۧ',$iBadlz);

$iBadlz = str_replace('q', 'Q' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Щ' , $iBadlz);
	 $iBadlz = str_replace('e', '乇' , $iBadlz);
  	 $iBadlz = str_replace('r', '尺' , $iBadlz);
	 $iBadlz = str_replace('t', 'ｲ' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ﾘ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ц' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ﾉ' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ծ' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ｱ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ﾑ' , $iBadlz);
  	 $iBadlz = str_replace('s', '丂' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'ｷ' , $iBadlz);
	 $iBadlz = str_replace('g', 'Ǥ' , $iBadlz);
  	 $iBadlz = str_replace('h', 'ん' , $iBadlz);
	 $iBadlz = str_replace('j', 'ﾌ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'ズ' , $iBadlz);
	 $iBadlz = str_replace('l', 'ﾚ' , $iBadlz);
  	 $iBadlz = str_replace('z', '乙' , $iBadlz);
	 $iBadlz = str_replace('x', 'ﾒ' , $iBadlz);
  	 $iBadlz = str_replace('c', 'ζ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Џ' , $iBadlz);
  	 $iBadlz = str_replace('b', '乃' , $iBadlz);
  	 $iBadlz = str_replace('n', '刀' , $iBadlz);
	 $iBadlz = str_replace('m', 'ᄊ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ﭥ',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','פ',$iBadlz); 
$iBadlz = str_replace('خ','ڂ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س',$iBadlz); 
$iBadlz = str_replace('ش','ش',$iBadlz); 
$iBadlz = str_replace('ص','ص',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظ',$iBadlz); 
$iBadlz = str_replace('ع','عّ',$iBadlz); 
$iBadlz = str_replace('غ','غَ ',$iBadlz); 
$iBadlz = str_replace('ف','ف̲ ',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ڪْ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̣̣',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ن',$iBadlz);  
$iBadlz = str_replace('ه','ه',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'Á', $iBadlz);
$iBadlz = str_replace('b', 'ß', $iBadlz);
$iBadlz = str_replace('c', 'Č', $iBadlz);
$iBadlz = str_replace('d', 'Ď', $iBadlz);
$iBadlz = str_replace('e', 'Ĕ', $iBadlz);
$iBadlz = str_replace('f', 'Ŧ', $iBadlz);
$iBadlz = str_replace('g', 'Ğ', $iBadlz);
$iBadlz = str_replace('h', 'Ĥ', $iBadlz);
$iBadlz = str_replace('i', 'Ĩ', $iBadlz);
$iBadlz = str_replace('j', 'Ĵ', $iBadlz);
$iBadlz = str_replace('k', 'Ķ', $iBadlz);
$iBadlz = str_replace('l', 'Ĺ', $iBadlz);
$iBadlz = str_replace('m', 'M', $iBadlz);
$iBadlz = str_replace('n', 'Ń', $iBadlz);
$iBadlz = str_replace('o', 'Ő', $iBadlz);
$iBadlz = str_replace('p', 'P', $iBadlz);
$iBadlz = str_replace('q', 'Q', $iBadlz);
$iBadlz = str_replace('r', 'Ŕ', $iBadlz);
$iBadlz = str_replace('s', 'Ś', $iBadlz);
$iBadlz = str_replace('t', 'Ť', $iBadlz);
$iBadlz = str_replace('u', 'Ú', $iBadlz);
$iBadlz = str_replace('v', 'V', $iBadlz);
$iBadlz = str_replace('w', 'Ŵ', $iBadlz);
$iBadlz = str_replace('x', 'Ж', $iBadlz);
$iBadlz = str_replace('y', 'Ŷ', $iBadlz);
$iBadlz = str_replace('z', 'Ź', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بِ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲',$iBadlz);
$iBadlz = str_replace('ث','ثْ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','ح',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','ذّ',$iBadlz); 
$iBadlz = str_replace('ر','رّ',$iBadlz); 
$iBadlz = str_replace('ز','زَ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̲ ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ̲ ',$iBadlz); 
$iBadlz = str_replace('ص','صـ',$iBadlz); 
$iBadlz = str_replace('ض','ضَ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','ﻋ',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̣̐ ',$iBadlz); 
$iBadlz = str_replace('ف','قّـ',$iBadlz); 
$iBadlz = str_replace('ق','قّـ',$iBadlz); 
$iBadlz = str_replace('ك','ڪ',$iBadlz); 
$iBadlz = str_replace('ل','ڵـ',$iBadlz);
$iBadlz = str_replace('م','ـمـ',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲ ـ',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('q', 'ҩ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'ω' , $iBadlz);
	 $iBadlz = str_replace('e', '૯' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Ր' , $iBadlz);
	 $iBadlz = str_replace('t', '੮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ע' , $iBadlz);
	 $iBadlz = str_replace('u', 'υ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ɿ' , $iBadlz);
	 $iBadlz = str_replace('o', '૦' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ƿ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ค' , $iBadlz);
  	 $iBadlz = str_replace('s', 'ς' , $iBadlz);
	 $iBadlz = str_replace('d', 'ძ' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' , $iBadlz);
	 $iBadlz = str_replace('g', '૭' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Һ' , $iBadlz);
	 $iBadlz = str_replace('j', 'ʆ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'қ' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ն' , $iBadlz);
  	 $iBadlz = str_replace('z', 'ઽ' , $iBadlz);
	 $iBadlz = str_replace('x', '૪' , $iBadlz);
  	 $iBadlz = str_replace('c', '८' , $iBadlz);
	 $iBadlz = str_replace('v', '౮' , $iBadlz);
  	 $iBadlz = str_replace('b', 'ც' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Ո' , $iBadlz);
	 $iBadlz = str_replace('m', 'ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲ ',$iBadlz);
$iBadlz = str_replace('ث','ثّـ',$iBadlz); 
$iBadlz = str_replace('ج','ﺟ',$iBadlz);  
$iBadlz = str_replace('ح','ﺣّ͠ـ',$iBadlz); 
$iBadlz = str_replace('خ','ﺣ͠ ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','دّ',$iBadlz); 
$iBadlz = str_replace('ر','ڔ',$iBadlz); 
$iBadlz = str_replace('ز','زْ',$iBadlz); 
$iBadlz = str_replace('س','سُ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ͠ ',$iBadlz); 
$iBadlz = str_replace('ص','ﺼ',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','عـ',$iBadlz); 
$iBadlz = str_replace('غ','غَ',$iBadlz); 
$iBadlz = str_replace('ف','ﻓ̲',$iBadlz); 
$iBadlz = str_replace('ق','ﻗ̮ـ̃',$iBadlz); 
$iBadlz = str_replace('ك','ﮖ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̲ ',$iBadlz);
$iBadlz = str_replace('م','ﻣ̲',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','ﯚ',$iBadlz); 
$iBadlz = str_replace('ي','يَ',$iBadlz);

$iBadlz = str_replace('q', 'Ꝙ' ,$iBadlz);
  	 $iBadlz = str_replace('w', 'Ѡ' ,$iBadlz);
	 $iBadlz = str_replace('e', 'Ɛ' ,$iBadlz);
  	 $iBadlz = str_replace('r', 'Ɽ' ,$iBadlz);
	 $iBadlz = str_replace('t', 'Ͳ' ,$iBadlz);
  	 $iBadlz = str_replace('y', 'Ỿ' ,$iBadlz);
	 $iBadlz = str_replace('u', 'Ʊ' ,$iBadlz);
  	 $iBadlz = str_replace('i', 'ị' ,$iBadlz);
	 $iBadlz = str_replace('o', 'Ỗ' ,$iBadlz);
  	 $iBadlz = str_replace('p', 'Ꝓ' ,$iBadlz);
	 $iBadlz = str_replace('a', 'Λ' ,$iBadlz);
  	 $iBadlz = str_replace('s', 'Ṥ' ,$iBadlz);
	 $iBadlz = str_replace('d', 'δ' ,$iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' ,$iBadlz);
	 $iBadlz = str_replace('g', '₲' ,$iBadlz);
  	 $iBadlz = str_replace('h', 'Ḩ' ,$iBadlz);
	 $iBadlz = str_replace('j', 'Ĵ' ,$iBadlz);
  	 $iBadlz = str_replace('k', 'Ҡ' ,$iBadlz);
	 $iBadlz = str_replace('l', 'Ⱡ' ,$iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' ,$iBadlz);
	 $iBadlz = str_replace('x', 'Ӿ' ,$iBadlz);
  	 $iBadlz = str_replace('c', 'Ƈ' ,$iBadlz);
	 $iBadlz = str_replace('v', 'Ѵ' ,$iBadlz);
  	 $iBadlz = str_replace('b', 'ß' ,$iBadlz);
  	 $iBadlz = str_replace('n', 'ⴂ' ,$iBadlz);
	 $iBadlz = str_replace('m', 'ⴅ' ,$iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','ﭜ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz); 
$iBadlz = str_replace('ث','ﭦ',$iBadlz); 
$iBadlz = str_replace('ت','ﭠ',$iBadlz); 
$iBadlz = str_replace('ح','ڂ',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','ﮃ',$iBadlz); 
$iBadlz = str_replace('ذ','ڎ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̭͠ ',$iBadlz); 
$iBadlz = str_replace('ش','شَ',$iBadlz); 
$iBadlz = str_replace('ص','ڝ',$iBadlz); 
$iBadlz = str_replace('ض','ڞ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ڟ',$iBadlz); 
$iBadlz = str_replace('ع','؏',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̐ ',$iBadlz); 
$iBadlz = str_replace('ف','ڤ',$iBadlz); 
$iBadlz = str_replace('ق','ڦ',$iBadlz); 
$iBadlz = str_replace('ك','ڳ',$iBadlz); 
$iBadlz = str_replace('ل','لَ',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ڻ',$iBadlz);  
$iBadlz = str_replace('ه','هـﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','يِّ',$iBadlz); 

$iBadlz = str_replace('q', 'Ǫ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Ш' , $iBadlz);
	 $iBadlz = str_replace('e', 'Ξ' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Я' , $iBadlz);
	 $iBadlz = str_replace('t', '₮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'Џ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ǚ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ł' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ф' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ק' , $iBadlz);
	 $iBadlz = str_replace('a', 'Λ' , $iBadlz);
  	 $iBadlz = str_replace('s', 'Ŝ' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Ŧ' , $iBadlz);
	 $iBadlz = str_replace('g', '₲' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Ḧ' , $iBadlz);
	 $iBadlz = str_replace('j', 'J' , $iBadlz);
  	 $iBadlz = str_replace('k', 'К' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ł' , $iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' , $iBadlz);
	 $iBadlz = str_replace('x', 'Ж' , $iBadlz);
  	 $iBadlz = str_replace('c', 'Ͼ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Ṽ' , $iBadlz);
  	 $iBadlz = str_replace('b', 'Б' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Л' , $iBadlz);
	 $iBadlz = str_replace('m', 'Ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
   }
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = str_replace('ا','آ̀',$text); 
$iBadlz = str_replace('ب','ب',$iBadlz); 
$iBadlz = str_replace('ت','ت',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','ج',$iBadlz);  
$iBadlz = str_replace('ح','ح̀',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','د̀',$iBadlz); 
$iBadlz = str_replace('ذ','ذ̀',$iBadlz); 
$iBadlz = str_replace('ر','ر̀',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س̀́',$iBadlz); 
$iBadlz = str_replace('ش','ش̀́',$iBadlz); 
$iBadlz = str_replace('ص','ص̀́',$iBadlz); 
$iBadlz = str_replace('ض','ض',$iBadlz); 
$iBadlz = str_replace('ط','ط̀́',$iBadlz); 
$iBadlz = str_replace('ظ','ظ̀́',$iBadlz); 
$iBadlz = str_replace('ع','ع̀́',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف̀',$iBadlz); 
$iBadlz = str_replace('ق','ق̀',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','م̀',$iBadlz); 
$iBadlz = str_replace('ن','ن̀',$iBadlz);  
$iBadlz = str_replace('ه','ه̀',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'ⓐ', $iBadlz);
$iBadlz = str_replace('b', 'ⓑ', $iBadlz);
$iBadlz = str_replace('c', '©', $iBadlz);
$iBadlz = str_replace('d', 'ⓓ', $iBadlz);
$iBadlz = str_replace('e', 'ⓔ', $iBadlz);
$iBadlz = str_replace('f', 'ⓕ', $iBadlz);
$iBadlz = str_replace('g', 'ⓖ', $iBadlz);
$iBadlz = str_replace('h', 'ⓗ', $iBadlz);
$iBadlz = str_replace('i', 'ⓘ', $iBadlz);
$iBadlz = str_replace('j', 'ⓙ', $iBadlz);
$iBadlz = str_replace('k', 'ⓚ', $iBadlz);
$iBadlz = str_replace('l', 'ⓛ', $iBadlz);
$iBadlz = str_replace('m', 'ⓜ', $iBadlz);
$iBadlz = str_replace('n', 'ⓝ', $iBadlz);
$iBadlz = str_replace('o', 'ⓞ', $iBadlz);
$iBadlz = str_replace('p', 'ⓟ', $iBadlz);
$iBadlz = str_replace('q', 'ⓠ', $iBadlz);
$iBadlz = str_replace('r', 'ⓡ', $iBadlz);
$iBadlz = str_replace('s', 'ⓢ', $iBadlz);
$iBadlz = str_replace('t', 'ⓣ', $iBadlz);
$iBadlz = str_replace('u', 'ⓤ', $iBadlz);
$iBadlz = str_replace('v', 'ⓥ', $iBadlz);
$iBadlz = str_replace('w', 'ⓦ', $iBadlz);
$iBadlz = str_replace('x', 'ⓧ', $iBadlz);
$iBadlz = str_replace('y', 'ⓨ', $iBadlz);
$iBadlz = str_replace('z', 'ⓩ', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $iBadlz = $text;
$iBadlz = str_replace('a','⎛α⎞',$iBadlz); 
$iBadlz = str_replace('b','⎛в⎞',$iBadlz); 
$iBadlz = str_replace('c','⎛c⎞',$iBadlz); 
$iBadlz = str_replace('d','⎛ɒ⎞',$iBadlz); 
$iBadlz = str_replace('e','⎛є⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛f⎞',$iBadlz); 
$iBadlz = str_replace('g','⎛ɢ⎞',$iBadlz); 
$iBadlz = str_replace('h','⎛н⎞',$iBadlz); 
$iBadlz = str_replace('i','⎛ɪ⎞',$iBadlz); 
$iBadlz = str_replace('j','⎛ᴊ⎞',$iBadlz); 
$iBadlz = str_replace('s','⎛ĸ⎞',$iBadlz); 
$iBadlz = str_replace('l','⎛ℓ⎞',$iBadlz); 
$iBadlz = str_replace('m','⎛м⎞',$iBadlz); 
$iBadlz = str_replace('n','⎛и⎞',$iBadlz); 
$iBadlz = str_replace('o','⎛σ⎞',$iBadlz); 
$iBadlz = str_replace('p','⎛ρ⎞',$iBadlz); 
$iBadlz = str_replace('q','⎛q⎞',$iBadlz); 
$iBadlz = str_replace('r','⎛я⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛s⎞',$iBadlz); 
$iBadlz = str_replace('t','⎛τ⎞ ',$iBadlz); 
$iBadlz = str_replace('u','⎛υ⎞ ',$iBadlz); 
$iBadlz = str_replace('v','⎛v⎞',$iBadlz); 
$iBadlz = str_replace('w','⎛ω⎞',$iBadlz); 
$iBadlz = str_replace('x','⎛x⎞',$iBadlz); 
$iBadlz = str_replace('y','⎛y⎞',$iBadlz); 
$iBadlz = str_replace('z','⎛z⎞',$iBadlz); 
 
$iBadlz = str_replace('ض','ضِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ص','صِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ث','ثِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ق','قِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ف','فِٰ͒ـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('غ','غِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ع','عِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ه','ۿۿہ',$iBadlz); 
$iBadlz = str_replace('خ','خِٰ̐ـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ح','حِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ج','جِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ش','شِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('س','سِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ي','يِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ب','بِٰـِﮧۢ',$iBadlz);
$iBadlz = str_replace('ل','لِٰـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('ا','آ',$iBadlz); 
$iBadlz = str_replace('ت','تِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ن','نِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('م','مِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ك','ڪِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ة','ةً',$iBadlz); 
$iBadlz = str_replace('ء','ء',$iBadlz); 
$iBadlz = str_replace('ظ','ظِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ط','طِٰـﮧِۢ',$iBadlz); 
 $iBadlz = str_replace('ذ','ذٰ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('ر','رٰ',$iBadlz); 
$iBadlz = str_replace('و','ﯛ̲୭',$iBadlz); 
 $iBadlz = str_replace('ى','ىٍ',$iBadlz);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$iBadlz."".$smile
   ]);
}




















if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','𝗔',$text);
$marcus = str_replace("b","𝗕",$marcus);
$marcus = str_replace("c","𝗖",$marcus);
$marcus = str_replace("d","𝗗",$marcus);
$marcus = str_replace("e","𝗘",$marcus);
$marcus = str_replace("E","𝗙",$marcus);
$marcus = str_replace("g","𝗚",$marcus);
$marcus = str_replace("h","𝗛",$marcus);
$marcus = str_replace("i","𝗜",$marcus);
$marcus = str_replace("j","𝗝",$marcus);
$marcus = str_replace("k","𝗞",$marcus);
$marcus = str_replace("l","𝗟",$marcus);
$marcus = str_replace("m","𝗠",$marcus);
$marcus = str_replace("n","𝗡",$marcus);
$marcus = str_replace("o","𝗢",$marcus);
$marcus = str_replace("p","𝗣",$marcus);
$marcus = str_replace("q","𝗤",$marcus);
$marcus = str_replace("r","𝗥",$marcus);
$marcus = str_replace("s","𝗦",$marcus);
$marcus = str_replace("t","𝗧",$marcus);
$marcus = str_replace("u","𝗨",$marcus);
$marcus = str_replace("v","𝗩",$marcus);
$marcus = str_replace("w","𝗪",$marcus);
$marcus = str_replace("x","𝗫",$marcus);
$marcus = str_replace("y","𝗬",$marcus);
$marcus = str_replace("z","𝗭",$marcus);
   $marcus = str_replace('ض', 'ضِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ص', 'صِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ث', 'ثِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ق', 'قِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ف', 'فِ͒ـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('غ', 'غِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ع', 'عِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('خ', 'خِ̐ـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ح', 'حِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ج', 'جِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ش', 'شِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('س', 'سِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ي', 'يِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ب', 'بِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ن', 'نِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('م', 'مِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ك', 'ڪِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ط', 'طِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ذ', 'ذِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','𝔸',$text);
$marcus = str_replace("b","𝔹",$marcus);
$marcus = str_replace("c","ℂ",$marcus);
$marcus = str_replace("d","𝔻",$marcus);
$marcus = str_replace("e","𝔼",$marcus);
$marcus = str_replace("E","𝔽",$marcus);
$marcus = str_replace("g","𝔾",$marcus);
$marcus = str_replace("h","ℍ",$marcus);
$marcus = str_replace("i","𝕀",$marcus);
$marcus = str_replace("j","𝕁",$marcus);
$marcus = str_replace("k","𝕂",$marcus);
$marcus = str_replace("l","𝕃",$marcus);
$marcus = str_replace("m","𝕄",$marcus);
$marcus = str_replace("n","ℕ",$marcus);
$marcus = str_replace("o","𝕆",$marcus);
$marcus = str_replace("p","ℙ",$marcus);
$marcus = str_replace("q","ℚ",$marcus);
$marcus = str_replace("r","ℝ",$marcus);
$marcus = str_replace("s","𝕊",$marcus);
$marcus = str_replace("t","𝕋",$marcus);
$marcus = str_replace("u","𝕌",$marcus);
$marcus = str_replace("v","𝕍",$marcus);
$marcus = str_replace("w","𝕎",$marcus);
$marcus = str_replace("x","𝕏",$marcus);
$marcus = str_replace("y","𝕐",$marcus);
$marcus = str_replace("z","ℤ",$marcus);
   $marcus = str_replace('ض', 'ﺿ', $marcus);
   $marcus = str_replace('ص', 'ﺻ', $marcus);
   $marcus = str_replace('ث', 'ﺚ', $marcus);
   $marcus = str_replace('ق', 'ﭱ', $marcus);
   $marcus = str_replace('ف', 'ﭫ', $marcus);
   $marcus = str_replace('غ', 'ڠ', $marcus);
   $marcus = str_replace('؏', 'ع', $marcus);
   $marcus = str_replace('خ', 'ݗ', $marcus);
   $marcus = str_replace('ح', 'ﺢ', $marcus);
   $marcus = str_replace('ج', 'ݘ', $marcus);
   $marcus = str_replace('ش', 'ﺸ', $marcus);
   $marcus = str_replace('س', 'ﺴ', $marcus);
   $marcus = str_replace('ي', 'ﯥ', $marcus);
   $marcus = str_replace('ب', 'ﭘ', $marcus);
   $marcus = str_replace('ل', 'ڸ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ٿ', $marcus);
   $marcus = str_replace('ن', 'ﮡ', $marcus);
   $marcus = str_replace('م', 'ﻢ', $marcus);
   $marcus = str_replace('ك', 'ﮗ', $marcus);
   $marcus = str_replace('ط', 'ﻂ', $marcus);
   $marcus = str_replace('ظ', 'ﻆ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','𝐀',$text);
$marcus = str_replace("b","𝐁",$marcus);
$marcus = str_replace("c","𝐂",$marcus);
$marcus = str_replace("d","𝐃",$marcus);
$marcus = str_replace("e","𝐄",$marcus);
$marcus = str_replace("E","𝐅",$marcus);
$marcus = str_replace("g","𝐆",$marcus);
$marcus = str_replace("h","𝐇",$marcus);
$marcus = str_replace("i","𝐈",$marcus);
$marcus = str_replace("j","𝐉",$marcus);
$marcus = str_replace("k","𝐊",$marcus);
$marcus = str_replace("l","𝑳",$marcus);
$marcus = str_replace("m","𝐌",$marcus);
$marcus = str_replace("n","𝐍",$marcus);
$marcus = str_replace("o","𝐎",$marcus);
$marcus = str_replace("p","𝐏",$marcus);
$marcus = str_replace("q","𝐐",$marcus);
$marcus = str_replace("r","𝐑",$marcus);
$marcus = str_replace("s","𝐒",$marcus);
$marcus = str_replace("t","𝐓",$marcus);
$marcus = str_replace("u","𝐔",$marcus);
$marcus = str_replace("v","𝐕",$marcus);
$marcus = str_replace("w","𝐖",$marcus);
$marcus = str_replace("x","𝐗",$marcus);
$marcus = str_replace("y","𝐘",$marcus);
$marcus = str_replace("z","𝐙",$marcus);
   $marcus = str_replace('ض', 'ضـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ص', 'صـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ث', 'ثـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ق', 'قـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ف', 'ف͒ـۘ❈ـۘ', $marcus);
   $marcus = str_replace('غ', 'غـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ع', 'عـۘ❈ـۘ', $marcus);
   $marcus = str_replace('خ', 'خ̐ـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ح', 'حـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ج', 'جـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ش', 'شـۘ❈ـۘ', $marcus);
   $marcus = str_replace('س', 'سـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ي', 'يـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ب', 'بـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ل', 'لـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ن', 'نـۘ❈ـۘ', $marcus);
   $marcus = str_replace('م', 'م', $marcus);
   $marcus = str_replace('ك', 'ڪـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ط', 'طـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ظ', 'ظـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "໋۠هہؚ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','𝐀',$text);
$marcus = str_replace("b","𝐵",$marcus);
$marcus = str_replace("c","𝐶",$marcus);
$marcus = str_replace("d","𝐷",$marcus);
$marcus = str_replace("e","𝐸",$marcus);
$marcus = str_replace("E","𝐹",$marcus);
$marcus = str_replace("g","𝐺",$marcus);
$marcus = str_replace("h","𝐻",$marcus);
$marcus = str_replace("i","𝐼",$marcus);
$marcus = str_replace("j","𝐽",$marcus);
$marcus = str_replace("k","𝐾",$marcus);
$marcus = str_replace("l","𝐿",$marcus);
$marcus = str_replace("m","𝑀",$marcus);
$marcus = str_replace("n","𝑁",$marcus);
$marcus = str_replace("o","𝑂",$marcus);
$marcus = str_replace("p","𝑃",$marcus);
$marcus = str_replace("q","𝑄",$marcus);
$marcus = str_replace("r","𝑅",$marcus);
$marcus = str_replace("s","𝑆",$marcus);
$marcus = str_replace("t","𝑇",$marcus);
$marcus = str_replace("u","𝑈",$marcus);
$marcus = str_replace("v","𝑉",$marcus);
$marcus = str_replace("w","𝑊",$marcus);
$marcus = str_replace("x","ﾒ",$marcus);
$marcus = str_replace("y","ʏ",$marcus);
$marcus = str_replace("z","𝑍",$marcus);
   $marcus = str_replace('ض', 'ض͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ص', 'ص͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ق', 'ق͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('غ', 'غ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ع', 'ع͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ح', 'ح͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ج', 'ج͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ش', 'ش͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('س', 'س͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ي', 'ي͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ب', 'ب͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ل', 'ل͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ن', 'ن͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('م', 'م͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ط', 'ط͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظــ๋͜ـ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','𝑨',$text);
$marcus = str_replace("b","𝔹",$marcus);
$marcus = str_replace("c","𝑪",$marcus);
$marcus = str_replace("d","𝑫",$marcus);
$marcus = str_replace("e","𝑬",$marcus);
$marcus = str_replace("E","𝑭",$marcus);
$marcus = str_replace("g","𝑮",$marcus);
$marcus = str_replace("h","𝑯",$marcus);
$marcus = str_replace("i","𝑰",$marcus);
$marcus = str_replace("j","𝑱",$marcus);
$marcus = str_replace("k","𝑲",$marcus);
$marcus = str_replace("l","𝑳",$marcus);
$marcus = str_replace("m","𝑴",$marcus);
$marcus = str_replace("n","𝑵",$marcus);
$marcus = str_replace("o","𝑶",$marcus);
$marcus = str_replace("p","𝑷",$marcus);
$marcus = str_replace("q","𝑸",$marcus);
$marcus = str_replace("r","𝑹",$marcus);
$marcus = str_replace("s","𝑺",$marcus);
$marcus = str_replace("t","𝑻",$marcus);
$marcus = str_replace("u","𝑼",$marcus);
$marcus = str_replace("v","𝑽",$marcus);
$marcus = str_replace("w","𝑾",$marcus);
$marcus = str_replace("x","𝑿",$marcus);
$marcus = str_replace("y","𝒀",$marcus);
$marcus = str_replace("z","𝒁",$marcus);
$marcus = str_replace('ض','ضـ๋͜‏ـﮧ ',$marcus); 
$marcus = str_replace('ص','صـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ث','ثـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ق','قـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('غ','غـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ع','عـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ه','ۿۿہ',$marcus); 
$marcus = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$marcus); 
$marcus = str_replace('ح','حـ๋͜‏ـﮧ ',$marcus); 
$marcus = str_replace('ج','جـ๋͜‏ـﮧ ',$marcus); 
$marcus = str_replace('ش','شـ๋͜‏ـﮧ ',$marcus); 
$marcus = str_replace('س','سـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ي',' يـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ب','  بـ๋͜‏ـﮧ',$marcus);
$marcus = str_replace('ل',' لـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت','  تـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ن','نـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('م','مـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ك','ڪـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظـ๋͜‏ـﮧ',$marcus); 
$marcus = str_replace('ط','طـ๋͜‏ـﮧ',$marcus); 
 $marcus = str_replace('ذ','ذِ',$marcus); 
$marcus = str_replace('د','دٰ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('و','ﯛ̲୭',$marcus); 
 $marcus = str_replace('ى','ىٰ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){
   $count = count($text); 
$marcus = str_replace('a','𝗔',$text); 
$marcus = str_replace("b","𝗕",$marcus); 
$marcus = str_replace("c","𝗖",$marcus); 
$marcus = str_replace("d","𝗗",$marcus); 
$marcus = str_replace("e","𝗘",$marcus); 
$marcus = str_replace("f","𝗙",$marcus); 
$marcus = str_replace("g","𝗚",$marcus); 
$marcus = str_replace("h","𝗛",$marcus); 
$marcus = str_replace("i","𝗜",$marcus); 
$marcus = str_replace("j","𝗝",$marcus); 
$marcus = str_replace("k","𝗞",$marcus); 
$marcus = str_replace("l","𝗟",$marcus); 
$marcus = str_replace("m","𝗠",$marcus); 
$marcus = str_replace("n","𝗡",$marcus); 
$marcus = str_replace("o","𝗢",$marcus); 
$marcus = str_replace("p","𝗣",$marcus); 
$marcus = str_replace("q","𝗤",$marcus); 
$marcus = str_replace("r","𝗥",$marcus); 
$marcus = str_replace("s","𝗦",$marcus); 
$marcus = str_replace("t","𝗧",$marcus); 
$marcus = str_replace("u","𝗨",$marcus); 
$marcus = str_replace("v","𝗩",$marcus); 
$marcus = str_replace("w","𝗪",$marcus); 
$marcus = str_replace("x","𝗫",$marcus); 
$marcus = str_replace("y","𝗬",$marcus); 
$marcus = str_replace("z","𝗭",$marcus); 
 $marcus = str_replace('ض','ضۜہٰٰ',$marcus); 
$marcus = str_replace('ص','صۛہٰٰ',$marcus); 
$marcus = str_replace('ث','ثہٰٰ',$marcus); 
$marcus = str_replace('ق','قྀ̲ہٰٰٰ',$marcus); 
$marcus = str_replace('ف','ف͒ہٰٰ',$marcus); 
$marcus = str_replace('غ','غہٰٰ',$marcus); 
$marcus = str_replace('ع','ۤ؏ـ',$marcus); 
$marcus = str_replace('ه','ھہ',$marcus); 
$marcus = str_replace('خ','خٰ̐ہ',$marcus); 
$marcus = str_replace('ح','حہٰٰ',$marcus); 
$marcus = str_replace('ج','جْۧ ',$marcus); 
$marcus = str_replace('ش','شِٰہٰٰ',$marcus); 
$marcus = str_replace('س','سٰٰٓ',$marcus); 
$marcus = str_replace('ي','يِٰہ',$marcus); 
$marcus = str_replace('ب','بّہ',$marcus);
$marcus = str_replace('ل','ل',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت',' تَہَٰ',$marcus); 
$marcus = str_replace('ن','نَِٰہ',$marcus); 
$marcus = str_replace('ك','ڪٰྀہٰٰٖ',$marcus); 
$marcus = str_replace('م','مـ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظۗـہٰٰ',$marcus); 
$marcus = str_replace('ط','طۨہٰٰ',$marcus); 
 $marcus = str_replace('ذ','ذِ',$marcus); 
$marcus = str_replace('د','دُ',$marcus); 
$marcus = str_replace('ز','ژ',$marcus); 
$marcus = str_replace('ر','رٰ',$marcus); 
$marcus = str_replace('و','وً',$marcus); 
 $marcus = str_replace('ى','ى',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','α',$text);
$marcus = str_replace("b","в",$marcus);
$marcus = str_replace("c","c",$marcus);
$marcus = str_replace("d","∂",$marcus);
$marcus = str_replace("e","ε",$marcus);
$marcus = str_replace("E","ғ",$marcus);
$marcus = str_replace("g","g",$marcus);
$marcus = str_replace("h","н",$marcus);
$marcus = str_replace("i","ι",$marcus);
$marcus = str_replace("j","נ",$marcus);
$marcus = str_replace("k","к",$marcus);
$marcus = str_replace("l","ℓ",$marcus);
$marcus = str_replace("m","м",$marcus);
$marcus = str_replace("n","η",$marcus);
$marcus = str_replace("o","σ",$marcus);
$marcus = str_replace("p","ρ",$marcus);
$marcus = str_replace("q","q",$marcus);
$marcus = str_replace("r","я",$marcus);
$marcus = str_replace("s","s",$marcus);
$marcus = str_replace("t","т",$marcus);
$marcus = str_replace("u","υ",$marcus);
$marcus = str_replace("v","v",$marcus);
$marcus = str_replace("w","ω",$marcus);
$marcus = str_replace("x","x",$marcus);
$marcus = str_replace("y","ү",$marcus);
$marcus = str_replace("z","z",$marcus);
$marcus = str_replace('ض','ضٰہٰٖ',$marcus);
$marcus = str_replace('ص','صٰہٰٖ',$marcus);
$marcus = str_replace('ث','ثٰہٰٖ',$marcus);
$marcus = str_replace('ق','قٰہٰٖ',$marcus);
$marcus = str_replace('ف','فٰہٰٖ',$marcus);
$marcus = str_replace('غ','غٰہٰٖ',$marcus);
$marcus = str_replace('ع','عٰہٰٖ',$marcus);
$marcus = str_replace('ه','هٰہٰٖ',$marcus);
$marcus = str_replace('خ','خٰہٰٖ',$marcus);
$marcus = str_replace('ح','حٰہٰٖ',$marcus);
$marcus = str_replace('ج','جٰہٰٖ',$marcus);
$marcus = str_replace('ش','شٰہٰٖ',$marcus);
$marcus = str_replace('س','سٰہٰٖ',$marcus);
$marcus = str_replace('ي','يٰہٰٖ',$marcus);
$marcus = str_replace('ب','بٰہٰٖ',$marcus);
$marcus = str_replace('ل','لہٰٖ',$marcus);
$marcus = str_replace('ا','اٰ',$marcus);
$marcus = str_replace('ت','تٰہٰٖ',$marcus);
$marcus = str_replace('ن','نٰہٰٖ',$marcus);
$marcus = str_replace('م','مٰہٰٖ',$marcus);
$marcus = str_replace('ك','كٰہٰٖ',$marcus);
$marcus = str_replace('ة','ةً',$marcus);
$marcus = str_replace('ء','ء',$marcus);
$marcus = str_replace('ظ','ظٰہٰٖ',$marcus);
$marcus = str_replace('ط','طٰہٰٖ',$marcus);
$marcus = str_replace('ذ','ذٖ',$marcus);
$marcus = str_replace('د','دٰ',$marcus);
$marcus = str_replace('ز','زٖ',$marcus);
$marcus = str_replace('ر','رٰ',$marcus);
$marcus = str_replace('و','وٰ',$marcus);
$marcus = str_replace('ى','ى',$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}




if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','ᗩ',$text);
$marcus = str_replace("b","ᗷ",$marcus);
$marcus = str_replace("c","ᑕ",$marcus);
$marcus = str_replace("d","ᗪ",$marcus);
$marcus = str_replace("e","E",$marcus);
$marcus = str_replace("E","E",$marcus);
$marcus = str_replace("g","G",$marcus);
$marcus = str_replace("h","ᕼ",$marcus);
$marcus = str_replace("i","I",$marcus);
$marcus = str_replace("j","ᒍ",$marcus);
$marcus = str_replace("k","K",$marcus);
$marcus = str_replace("l","ᒪ",$marcus);
$marcus = str_replace("m","ᗰ",$marcus);
$marcus = str_replace("n","ᑎ",$marcus);
$marcus = str_replace("o","O",$marcus);
$marcus = str_replace("p","ᑭ",$marcus);
$marcus = str_replace("q","ᑫ",$marcus);
$marcus = str_replace("r","ᖇ",$marcus);
$marcus = str_replace("s","ᔕ",$marcus);
$marcus = str_replace("t","T",$marcus);
$marcus = str_replace("u","ᑌ",$marcus);
$marcus = str_replace("v","ᐯ",$marcus);
$marcus = str_replace("w","ᗯ",$marcus);
$marcus = str_replace("x","᙭",$marcus);
$marcus = str_replace("y","Y",$marcus);
$marcus = str_replace("z","ᘔ",$marcus);
$marcus = str_replace('ع','عٰہٰٖ',$marcus); 
$marcus = str_replace('ض','ضٰہٰٖ ',$marcus); 
$marcus = str_replace('ص','صٰہٰٖ',$marcus); 
$marcus = str_replace('ث','ثٰہٰٖ',$marcus); 
$marcus = str_replace('ق','قٰہٰٖ',$marcus); 
$marcus = str_replace('ف','فٰہٰٖ',$marcus); 
$marcus = str_replace('غ','غٰہٰٖ',$marcus); 
$marcus = str_replace('ه','هٰہٰٖ',$marcus); 
$marcus = str_replace('خ','خٰہٰٖ',$marcus); 
$marcus = str_replace('ح','حٰہٰٖ',$marcus); 
$marcus = str_replace('ج','جٰہٰٖ',$marcus); 
$marcus = str_replace('ش','شٰہٰٖ',$marcus); 
$marcus = str_replace('س','سٰہٰٖ',$marcus); 
$marcus = str_replace('ب','بٰہٰٖ',$marcus); 
$marcus = str_replace('ي','يٰہٰٖ',$marcus);
$marcus = str_replace('ل','لہٰٖ',$marcus); 
$marcus = str_replace('ا','اٰ',$marcus); 
$marcus = str_replace('ت','تٰہٰٖ',$marcus); 
$marcus = str_replace('ن','نٰہٰٖ',$marcus); 
$marcus = str_replace('م','مٰہٰٖ',$marcus); 
$marcus = str_replace('ك','كٰہٰٖ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ظ','ظٰہٰٖ',$marcus); 
$marcus = str_replace('ء','ءِ',$marcus); 
$marcus = str_replace('ذ','ذٖ',$marcus); 
$marcus = str_replace('ط','طٰہٰٖ',$marcus); 
$marcus = str_replace('د','دٰ',$marcus); 
$marcus = str_replace('ز','زٰ',$marcus); 
$marcus = str_replace('ر','رٰ',$marcus); 
$marcus = str_replace('و','وَٰ',$marcus); 
$marcus = str_replace('ى','ىٰ',$marcus); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','Ꭿ',$text);
$marcus = str_replace("b","Ᏸ",$marcus);
$marcus = str_replace("c","Ꮸ",$marcus);
$marcus = str_replace("d","Ꮷ",$marcus);
$marcus = str_replace("e","Ꮛ",$marcus);
$marcus = str_replace("f","Ꭶ",$marcus);
$marcus = str_replace("g","Ᏻ",$marcus);
$marcus = str_replace("h","Ᏺ",$marcus);
$marcus = str_replace("i","Ꭸ",$marcus);
$marcus = str_replace("j","Ꮰ",$marcus);
$marcus = str_replace("k","Ꮵ",$marcus);
$marcus = str_replace("l","Ꮭ",$marcus);
$marcus = str_replace("m","ᗰ",$marcus);
$marcus = str_replace("n","Ꮑ",$marcus);
$marcus = str_replace("o","Ꭷ",$marcus);
$marcus = str_replace("p","Ꭾ",$marcus);
$marcus = str_replace("q","Ꮕ",$marcus);
$marcus = str_replace("r","ᖇ",$marcus);
$marcus = str_replace("s","Ꮥ",$marcus);
$marcus = str_replace("t","Ꮱ",$marcus);
$marcus = str_replace("u","Ꮼ",$marcus);
$marcus = str_replace("v","Ꮙ",$marcus);
$marcus = str_replace("w","Ꮗ",$marcus);
$marcus = str_replace("x","Ꮂ",$marcus);
$marcus = str_replace("y","Ꮍ",$marcus);
$marcus = str_replace("z","ᔓ",$marcus);
$marcus = str_replace('ض','ضـٰ̲ـہ',$marcus); 
$marcus = str_replace('ص','صـٰ̲ـہ',$marcus); 
$marcus = str_replace('ث','ثـٰ̲ـہ',$marcus); 
$marcus = str_replace('ق','قـٰ̲ـہ',$marcus); 
$marcus = str_replace('ف','فـٰ̲ـہ',$marcus); 
$marcus = str_replace('غ','غـٰ̲ـہ',$marcus); 
$marcus = str_replace('ع','عـٰ̲ـہ',$marcus); 
$marcus = str_replace('ه','هـٰ̲ـہ',$marcus); 
$marcus = str_replace('خ','خـٰ̲ـہ',$marcus); 
$marcus = str_replace('ح','حـٰ̲ـہ',$marcus); 
$marcus = str_replace('ج','جـٰ̲ـہ',$marcus); 
$marcus = str_replace('ش','شـٰ̲ـہ',$marcus); 
$marcus = str_replace('س','سـٰ̲ـہ',$marcus); 
$marcus = str_replace('ي','يـٰ̲ـہ',$marcus); 
$marcus = str_replace('ب','بـٰ̲ـہ',$marcus);
$marcus = str_replace('ل','لـٰ̲ـہ',$marcus); 
$marcus = str_replace('ا','اٰ',$marcus); 
$marcus = str_replace('ت','تـٰ̲ـہ',$marcus); 
$marcus = str_replace('ن','نـٰ̲ـہ',$marcus); 
$marcus = str_replace('م','مـٰ̲ـہ',$marcus); 
$marcus = str_replace('ك','كـٰ̲ـہ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظـٰ̲ـہ',$marcus); 
$marcus = str_replace('ط','طـٰ̲ـہ',$marcus); 
$marcus = str_replace('ذ','ذٰ',$marcus); 
$marcus = str_replace('د','دٰ',$marcus); 
$marcus = str_replace('ز','زٰ',$marcus); 
$marcus = str_replace('ر','رٰ',$marcus); 
$marcus = str_replace('و','وٰ',$marcus); 
$marcus = str_replace('ى','ىَ',$marcus); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
 $marcus = str_replace('q', 'Q' , $text);
  	 $marcus = str_replace('w', 'Щ' , $marcus);
	 $marcus = str_replace('e', '乇' , $marcus);
  	 $marcus = str_replace('r', '尺' , $marcus);
	 $marcus = str_replace('t', 'ｲ' , $marcus);
  	 $marcus = str_replace('y', 'ﾘ' , $marcus);
	 $marcus = str_replace('u', 'Ц' , $marcus);
  	 $marcus = str_replace('i', 'ﾉ' , $marcus);
	 $marcus = str_replace('o', 'Ծ' , $marcus);
  	 $marcus = str_replace('p', 'ｱ' , $marcus);
	 $marcus = str_replace('a', 'ﾑ' , $marcus);
  	 $marcus = str_replace('s', '丂' , $marcus);
	 $marcus = str_replace('d', 'Ð' , $marcus);
  	 $marcus = str_replace('f', 'ｷ' , $marcus);
	 $marcus = str_replace('g', 'Ǥ' , $marcus);
  	 $marcus = str_replace('h', 'ん' , $marcus);
	 $marcus = str_replace('j', 'ﾌ' , $marcus);
  	 $marcus = str_replace('k', 'ズ' , $marcus);
	 $marcus = str_replace('l', 'ﾚ' , $marcus);
  	 $marcus = str_replace('z', '乙' , $marcus);
	 $marcus = str_replace('x', 'ﾒ' , $marcus);
  	 $marcus = str_replace('c', 'ζ' , $marcus);
	 $marcus = str_replace('v', 'Џ' , $marcus);
  	 $marcus = str_replace('b', '乃' , $marcus);
  	 $marcus = str_replace('n', '刀' , $marcus);
	 $marcus = str_replace('m', 'ᄊ' , $marcus);

	$marcus = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$marcus); 
$marcus = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$marcus); 
$marcus = str_replace('ث','ث̲ꫭـﮧ',$marcus); 
$marcus = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ف','',$marcus); 
$marcus = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$marcus); 
$marcus = str_replace('ع','غـّٰ̐ہٰٰ',$marcus); 
$marcus = str_replace('ه','ٰ̲ھہ',$marcus); 
$marcus = str_replace('خ','خ̲ﮧ',$marcus); 
$marcus = str_replace('ح','ح̲ꪳـﮧ',$marcus); 
$marcus = str_replace('ج','ج̲ꪸـﮧ',$marcus); 
$marcus = str_replace('ش','ش̲ꪾـﮧ',$marcus); 
$marcus = str_replace('س','سـ̷ٰٰﮧْ',$marcus); 
$marcus = str_replace('ي','يـِٰ̲ﮧ',$marcus); 
$marcus = str_replace('ب','ب̲ꪰـﮧ',$marcus);
$marcus = str_replace('ل','لٍُـّٰ̐ہ',$marcus); 
$marcus = str_replace('ا',' ཻا ',$marcus); 
$marcus = str_replace('ت','تـٰۧﮧ',$marcus); 
$marcus = str_replace('ن','نٰ̲̐ـﮧْ',$marcus); 
$marcus = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ك','كـِّﮧْٰٖ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظَـ๋͜ﮧْ',$marcus); 
$marcus = str_replace('ط','ط̲꫁ـﮧ',$marcus); 
 $marcus = str_replace('ذ','ذٖ',$marcus); 
$marcus = str_replace('د','دُ',$marcus); 
$marcus = str_replace('ز','ژٰ',$marcus); 
$marcus = str_replace('ر','',$marcus); 
$marcus = str_replace('و','ﯛ૭',$marcus); 
 $marcus = str_replace('ى','ىِ',$marcus); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','Ａ',$text);
$marcus = str_replace("b","Ｂ",$marcus);
$marcus = str_replace("c","Ｃ",$marcus);
$marcus = str_replace("d","Ｄ",$marcus);
$marcus = str_replace("e","Ｅ",$marcus);
$marcus = str_replace("E","Ｆ",$marcus);
$marcus = str_replace("g","Ｇ",$marcus);
$marcus = str_replace("h","Ｈ",$marcus);
$marcus = str_replace("i","Ｉ",$marcus);
$marcus = str_replace("j","Ｊ",$marcus);
$marcus = str_replace("k","Ｋ",$marcus);
$marcus = str_replace("l","Ｌ",$marcus);
$marcus = str_replace("m","Ｍ",$marcus);
$marcus = str_replace("n","Ｎ",$marcus);
$marcus = str_replace("o","Ｏ",$marcus);
$marcus = str_replace("p","Ｐ",$marcus);
$marcus = str_replace("q","Ｑ",$marcus);
$marcus = str_replace("r","Ｒ",$marcus);
$marcus = str_replace("s","Ｓ",$marcus);
$marcus = str_replace("t","Ｔ",$marcus);
$marcus = str_replace("u","U",$marcus);
$marcus = str_replace("v","Ｖ",$marcus);
$marcus = str_replace("w","Ｗ",$marcus);
$marcus = str_replace("x","Ｘ",$marcus);
$marcus = str_replace("y","Ｙ",$marcus);
$marcus = str_replace("z","Ｚ",$marcus);
$marcus = str_replace('ض','ضً',$marcus); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}




if($text != '/start' and $text !='/us' and $text !='الاعضاء'){
   $count = count($text); 
$marcus = str_replace('a',"ᵃ",$text);
$marcus = str_replace('A',"ᵃ",$marcus);
$marcus = str_replace("b","ᵇ",$marcus);
$marcus = str_replace("B","ᵇ",$marcus);
$marcus = str_replace("c","ᶜ",$marcus);
$marcus = str_replace("C","ᶜ",$marcus);
$marcus = str_replace("d","ᵈ",$marcus);
$marcus = str_replace("D","ᵈ",$marcus);
$marcus = str_replace("e","ᵉ",$marcus);
$marcus = str_replace("E","ᵉ",$marcus);
$marcus = str_replace("f","ᶠ",$marcus);
$marcus = str_replace("F","ᶠ",$marcus);
$marcus = str_replace("g","ᵍ",$marcus);
$marcus = str_replace("G","ᵍ",$marcus);
$marcus = str_replace("h","ʰ",$marcus);
$marcus = str_replace("H","ʰ",$marcus);
$marcus = str_replace("i","ᶤ",$marcus);
$marcus = str_replace("I","ᶤ",$marcus);
$marcus = str_replace("j","ʲ",$marcus);
$marcus = str_replace("J","ʲ",$marcus);
$marcus = str_replace("k","ᵏ",$marcus);
$marcus = str_replace("K","ᵏ",$marcus);
$marcus = str_replace("l","ˡ",$marcus);
$marcus = str_replace("L","ˡ",$marcus);
$marcus = str_replace("m","ᵐ",$marcus);
$marcus = str_replace("M","ᵐ",$marcus);
$marcus = str_replace("n","ᶰ",$marcus);
$marcus = str_replace("N","ᶰ",$marcus);
$marcus = str_replace("o","ᵒ",$marcus);
$marcus = str_replace("O","ᵒ",$marcus);
$marcus = str_replace("p","ᵖ",$marcus);
$marcus = str_replace("P","ᵖ",$marcus);
$marcus = str_replace("q","ᵠ",$marcus);
$marcus = str_replace("Q","ᵠ",$marcus);
$marcus = str_replace("r","ʳ",$marcus);
$marcus = str_replace("R","ʳ",$marcus);
$marcus = str_replace("s","ˢ",$marcus);
$marcus = str_replace("S","ˢ",$marcus);
$marcus = str_replace("t","ᵗ",$marcus);
$marcus = str_replace("T","ᵗ",$marcus);
$marcus = str_replace("u","ᵘ",$marcus);
$marcus = str_replace("U","ᵘ",$marcus);
$marcus = str_replace("v","ᵛ",$marcus);
$marcus = str_replace("V","ᵛ",$marcus);
$marcus = str_replace("w","ʷ",$marcus);
$marcus = str_replace("W","ʷ",$marcus);
$marcus = str_replace("x","ˣ",$marcus);
$marcus = str_replace("X","ˣ",$marcus);
$marcus = str_replace("y","ʸ",$marcus);
$marcus = str_replace("Y","ʸ",$marcus);
$marcus = str_replace("z","ᶻ",$marcus);
$marcus = str_replace("Z","ᶻ",$marcus);
  $marcus = str_replace('ض','ضِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ص','صِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ث','ثِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ق','قِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ف','فِٰ͒ـِﮧۢ',$marcus); 
$marcus = str_replace('غ','غِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ع','عِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ه','ۿۿہ',$marcus); 
$marcus = str_replace('خ','خِٰ̐ـﮧِۢ',$marcus); 
$marcus = str_replace('ح','حِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ج','جِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ش','شِٰـﮧِۢ',$marcus); 
$marcus = str_replace('س','سِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ي','يِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ب','بِٰـِﮧۢ',$marcus);
$marcus = str_replace('ل','لِٰـِﮧۢ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت','تِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ن','نِٰـﮧِۢ',$marcus); 
$marcus = str_replace('م','مِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ك','ڪِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظِٰـﮧِۢ',$marcus); 
$marcus = str_replace('ط','طِٰـﮧِۢ',$marcus); 
 $marcus = str_replace('ذ','ذٰ',$marcus); 
$marcus = str_replace('د','د',$marcus); 
$marcus = str_replace('ز','ژ',$marcus); 
$marcus = str_replace('ر','رٰ',$marcus); 
$marcus = str_replace('و','ﯛ̲୭',$marcus); 
 $marcus = str_replace('ى','ىٍ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}


if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a', 'a', $text);
$marcus = str_replace('b', '🄱', $marcus);
$marcus = str_replace('c', '🄲', $marcus);
$marcus = str_replace('d', '🄳', $marcus);
$marcus = str_replace('e', '🄴', $marcus);
$marcus = str_replace('f', '🄵', $marcus);
$marcus = str_replace('g', '🄶', $marcus);
$marcus = str_replace('h', '🄷', $marcus);
$marcus = str_replace('i', '🄸', $marcus);
$marcus = str_replace('j', '🄹', $marcus);
$marcus = str_replace('k', '🄺', $marcus);
$marcus = str_replace('l', '🄻', $marcus);
$marcus = str_replace('m', '🄼', $marcus);
$marcus = str_replace('n', '🄽', $marcus);
$marcus = str_replace('o', '🄾', $marcus);
$marcus = str_replace('p', '🄿', $marcus);
$marcus = str_replace('q', '🅀', $marcus);
$marcus = str_replace('r', '🅁', $marcus);
$marcus = str_replace('s', '🅂', $marcus);
$marcus = str_replace('t', '🅃', $marcus);
$marcus = str_replace('u', '🅄', $marcus);
$marcus = str_replace('v', '🅅', $marcus);
$marcus = str_replace('w', '🅆', $marcus);
$marcus = str_replace('x', '🅇', $marcus);
$marcus = str_replace('y', '🅈', $marcus);
$marcus = str_replace('z', '🅉', $marcus);

$marcus = str_replace('ض', 'ضِـೋـ', $marcus);
   $marcus = str_replace('ص', 'صِٰـۛৣـ', $marcus);
   $marcus = str_replace('ث', 'ث๋͜ـ❀๋͜ـ', $marcus);
   $marcus = str_replace('ق', 'قـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('غ', 'غـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ه', 'ۿۿہ', $marcus);
   $marcus = str_replace('خ', 'خ๋̐͜ـ❀๋͜ـ', $marcus);
   $marcus = str_replace('ح', 'حِـೋـ', $marcus);
   $marcus = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ش', 'ش๋͜ـ❀๋͜ـ', $marcus);
   $marcus = str_replace('س', 'سِٰـِۢ', $marcus);
   $marcus = str_replace('ي', 'يِٰـِۢ', $marcus);
   $marcus = str_replace('ب', 'بِٰـۛৣـ', $marcus);
   $marcus = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تـۘ❈ـۘ', $marcus);
   $marcus = str_replace('ن', 'نِٰـِۢ', $marcus);
   $marcus = str_replace('م', 'مِٰـِۢ', $marcus);
   $marcus = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ط', 'طَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ذ', 'ذ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('و', 'و', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ة', 'ةة', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـِۢ', $marcus);
   $marcus = str_replace('د', 'د', $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a', '̅α', $text);
$marcus = str_replace('b', '̅в', $marcus);
$marcus = str_replace('c', '̅c', $marcus);
$marcus = str_replace('d', '̅ɒ', $marcus);
$marcus = str_replace('e', '̅є', $marcus);
$marcus = str_replace('f', '̅f', $marcus);
$marcus = str_replace('g', '̅ɢ', $marcus);
$marcus = str_replace('h', '̅н', $marcus);
$marcus = str_replace('i', '̅ɪ', $marcus);
$marcus = str_replace('j', '̅ᴊ', $marcus);
$marcus = str_replace('k', '̅ĸ', $marcus);
$marcus = str_replace('l', '̅ℓ', $marcus);
$marcus = str_replace('m', '̅м', $marcus);
$marcus = str_replace('n', '̅и', $marcus);
$marcus = str_replace('o', '̅σ', $marcus);
$marcus = str_replace('p', '̅ρ', $marcus);
$marcus = str_replace('q', '̅q', $marcus);
$marcus = str_replace('r', '̅я', $marcus);
$marcus = str_replace('s', '̅s', $marcus);
$marcus = str_replace('t', '̅τ', $marcus);
$marcus = str_replace('u', '̅υ', $marcus);
$marcus = str_replace('v', '̅v', $marcus);
$marcus = str_replace('w', '̅ω', $marcus);
$marcus = str_replace('x', '̅x', $marcus);
$marcus = str_replace('y', '̅y', $marcus);
$marcus = str_replace('z', '̅z', $marcus);
   $marcus = str_replace('ض', 'ض๋͜ـ♱๋ـ',$marcus);
   $marcus = str_replace('ص', 'ص๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ث', 'ث๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ق', 'ق๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ف', 'ف๋͒͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('غ', 'غ๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ع', 'ع๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('خ', 'خ๋̐͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ح', 'ح๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ج', 'ج๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ش', 'ش๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('س', 'س๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ي', 'ي๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ب', 'ب๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ل', 'ل๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ن', 'ن๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('م', 'م๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ط', 'ط๋͜ـ♱๋ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ๋͜ـ♱๋ـ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "໋۠هہؚ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}



if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','ᕱ',$text);
$marcus = str_replace("b","β",$marcus);
$marcus = str_replace("c","૮",$marcus);
$marcus = str_replace("d","Ɗ",$marcus);
$marcus = str_replace("e","ξ",$marcus);
$marcus = str_replace("E","ƒ",$marcus);
$marcus = str_replace("g","Ǥ",$marcus);
$marcus = str_replace("h","ƕ",$marcus);
$marcus = str_replace("i","Ĩ",$marcus);
$marcus = str_replace("j","ʝ",$marcus);
$marcus = str_replace("k","Ƙ",$marcus);
$marcus = str_replace("l","Ꮭ",$marcus);
$marcus = str_replace("m","ണ",$marcus);
$marcus = str_replace("n","ท",$marcus);
$marcus = str_replace("o","♡",$marcus);
$marcus = str_replace("p","Ƥ",$marcus);
$marcus = str_replace("q","𝑄",$marcus);
$marcus = str_replace("r","Ꮢ",$marcus);
$marcus = str_replace("s","Ƨ",$marcus);
$marcus = str_replace("t","Ƭ",$marcus);
$marcus = str_replace("u","Ꮜ",$marcus);
$marcus = str_replace("v","ѵ",$marcus);
$marcus = str_replace("w","ẁ́̀́",$marcus);
$marcus = str_replace("x","ﾒ",$marcus);
$marcus = str_replace("y","ɣ",$marcus);
$marcus = str_replace("z","ʑ",$marcus);
   $marcus = str_replace('ض', 'ضَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ص', 'صَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ث', 'ثَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ق', 'قَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ف', 'فَٰ͒ـُـٰٓ', $marcus);
   $marcus = str_replace('غ', 'غَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ع', 'عَٰـُـٰٓ', $marcus);
   $marcus = str_replace('خ', 'خَٰ̐ـُـٰٓ', $marcus);
   $marcus = str_replace('ح', 'حَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ج', 'جَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ش', 'شَٰـُـٰٓ', $marcus);
   $marcus = str_replace('س', 'سَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ي', 'يَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ب', 'بَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ل', 'لَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ن', 'نَٰـُـٰٓ', $marcus);
   $marcus = str_replace('م', 'مَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ك', 'ڪَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ط', 'طَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ظ', 'ظَٰـُـٰٓ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','Ꮧ',$text);
$marcus = str_replace("b","Ᏸ",$marcus);
$marcus = str_replace("c","ፈ",$marcus);
$marcus = str_replace("d","Ꮄ",$marcus);
$marcus = str_replace("e","Ꮛ",$marcus);
$marcus = str_replace("E","₣",$marcus);
$marcus = str_replace("g","Ꮆ",$marcus);
$marcus = str_replace("h","Ꮒ",$marcus);
$marcus = str_replace("i","Ꭵ",$marcus);
$marcus = str_replace("j","Ꮰ",$marcus);
$marcus = str_replace("k","Ꮶ",$marcus);
$marcus = str_replace("l","Ꮭ",$marcus);
$marcus = str_replace("m","Ꮇ",$marcus);
$marcus = str_replace("n","Ꮑ",$marcus);
$marcus = str_replace("o","Ꭷ",$marcus);
$marcus = str_replace("p","Ꭾ",$marcus);
$marcus = str_replace("q","Ꭴ",$marcus);
$marcus = str_replace("r","Ꮢ",$marcus);
$marcus = str_replace("s","Ꭶ",$marcus);
$marcus = str_replace("t","Ꮦ",$marcus);
$marcus = str_replace("u","Ꮼ",$marcus);
$marcus = str_replace("v","Ꮙ",$marcus);
$marcus = str_replace("w","Ꮗ",$marcus);
$marcus = str_replace("x","ጀ",$marcus);
$marcus = str_replace("y","Ꭹ",$marcus);
$marcus = str_replace("z","ፚ",$marcus);
   $marcus = str_replace('ض', 'ضِٰـۛৣـ', $marcus);
   $marcus = str_replace('ص', 'صِٰـۛৣـ', $marcus);
   $marcus = str_replace('ث', 'ثِٰـۛৣـ', $marcus);
   $marcus = str_replace('ق', 'قِٰـۛৣـ', $marcus);
   $marcus = str_replace('ف', 'فِٰ͒ـۛৣـ', $marcus);
   $marcus = str_replace('غ', 'غِٰـۛৣـ', $marcus);
   $marcus = str_replace('ع', 'عِٰـۛৣـ', $marcus);
   $marcus = str_replace('خ', 'خِٰ̐ـۛৣـ', $marcus);
   $marcus = str_replace('ح', 'حِٰـۛৣـ', $marcus);
   $marcus = str_replace('ج', 'جِٰـۛৣـ', $marcus);
   $marcus = str_replace('ش', 'شِٰـۛৣـ', $marcus);
   $marcus = str_replace('س', 'سِٰـۛৣـ', $marcus);
   $marcus = str_replace('ي', 'يِٰـۛৣـ', $marcus);
   $marcus = str_replace('ب', 'بِٰـۛৣـ', $marcus);
   $marcus = str_replace('ل', 'لِٰـۛৣـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِٰـۛৣـ', $marcus);
   $marcus = str_replace('ن', 'نِٰـۛৣـ', $marcus);
   $marcus = str_replace('م', 'مِٰـۛৣـ', $marcus);
   $marcus = str_replace('ك', 'ڪِٰـۛৣـ', $marcus);
   $marcus = str_replace('ط', 'طِٰـۛৣـ', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـۛৣـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "໋۠هہؚ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','ᗩ',$text);
$marcus = str_replace("b","β",$marcus);
$marcus = str_replace("c","Ｃ",$marcus);
$marcus = str_replace("d","Ɗ",$marcus);
$marcus = str_replace("e","Ｅ",$marcus);
$marcus = str_replace("E","Բ",$marcus);
$marcus = str_replace("g","Ｇ",$marcus);
$marcus = str_replace("h","ⴼ",$marcus);
$marcus = str_replace("i","Ｉ",$marcus);
$marcus = str_replace("j","Ј",$marcus);
$marcus = str_replace("k","₭",$marcus);
$marcus = str_replace("l","Ł",$marcus);
$marcus = str_replace("m","ᗰ",$marcus);
$marcus = str_replace("n","Ŋ",$marcus);
$marcus = str_replace("o","σ",$marcus);
$marcus = str_replace("p","Ꝑ",$marcus);
$marcus = str_replace("q","℺",$marcus);
$marcus = str_replace("r","Ꮢ",$marcus);
$marcus = str_replace("s","₷",$marcus);
$marcus = str_replace("t","Ƭ",$marcus);
$marcus = str_replace("u","ᵿ",$marcus);
$marcus = str_replace("v","ѵ",$marcus);
$marcus = str_replace("w","Ꮤ",$marcus);
$marcus = str_replace("x","χ",$marcus);
$marcus = str_replace("y","ɣ",$marcus);
$marcus = str_replace("z","Ꙃ",$marcus);
   $marcus = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "໋۠هہؚ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
   $marcus = str_replace('q', ' 🇶', $text);
   $marcus = str_replace('w', ' 🇼', $marcus);
   $marcus = str_replace('e', ' 🇪', $marcus);
   $marcus = str_replace('r', ' 🇷', $marcus);
   $marcus = str_replace('t', ' 🇹', $marcus);
   $marcus = str_replace('y', ' 🇾', $marcus);
   $marcus = str_replace('u', ' 🇻', $marcus);
   $marcus = str_replace('i', ' 🇮', $marcus);
   $marcus = str_replace('o', ' 🇴', $marcus);
   $marcus = str_replace('p', ' 🇵', $marcus);
   $marcus = str_replace('a', ' 🇦', $marcus);
   $marcus = str_replace('s', ' 🇸', $marcus);
   $marcus = str_replace('d', ' 🇩', $marcus);
   $marcus = str_replace('f', ' 🇫', $marcus);
   $marcus = str_replace('g', ' 🇬', $marcus);
   $marcus = str_replace('h', ' 🇭', $marcus);
   $marcus = str_replace('j', ' 🇯', $marcus);
   $marcus = str_replace('k', ' 🇰', $marcus);
   $marcus = str_replace('l', ' 🇱', $marcus);
   $marcus = str_replace('z', ' 🇿', $marcus);
   $marcus = str_replace('x', ' 🇽', $marcus);
   $marcus = str_replace('c', ' 🇨', $marcus);
   $marcus = str_replace('v', ' 🇺', $marcus);
   $marcus = str_replace('b', ' 🇧', $marcus);
   $marcus = str_replace('n', ' 🇳', $marcus);
   $marcus = str_replace('m', ' 🇲', $marcus);
   $marcus = str_replace('ض', 'ضِٰـِۢ', $marcus);
   $marcus = str_replace('ص', 'صِٰـِۢ', $marcus);
   $marcus = str_replace('ث', 'ثِٰـِۢ', $marcus);
   $marcus = str_replace('ق', 'قِٰـِۢ', $marcus);
   $marcus = str_replace('ف', 'فِٰ͒ـِۢ', $marcus);
   $marcus = str_replace('غ', 'غِٰـِۢ', $marcus);
   $marcus = str_replace('ع', 'عِٰـِۢ', $marcus);
   $marcus = str_replace('خ', 'خِٰ̐ـِۢ', $marcus);
   $marcus = str_replace('ح', 'حِٰـِۢ', $marcus);
   $marcus = str_replace('ج', 'جِٰـِۢ', $marcus);
   $marcus = str_replace('ش', 'شِٰـِۢ', $marcus);
   $marcus = str_replace('س', 'سِٰـِۢ', $marcus);
   $marcus = str_replace('ي', 'يِٰـِۢ', $marcus);
   $marcus = str_replace('ب', 'بِٰـِۢ', $marcus);
   $marcus = str_replace('ل', 'لِٰـِۢ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِٰـِۢ', $marcus);
   $marcus = str_replace('ن', 'نِٰـِۢ', $marcus);
   $marcus = str_replace('م', 'مِٰـِۢ', $marcus);
   $marcus = str_replace('ك', 'ڪِٰـِۢ', $marcus);
   $marcus = str_replace('ط', 'طِٰـِۢ', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـِۢ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
 $marcus = str_replace('q', 'Ｑ' , $text);
  	 $marcus = str_replace('w', 'Ｗ' , $marcus);
	 $marcus = str_replace('e', 'Ｅ' , $marcus);
  	 $marcus = str_replace('r', 'Ｒ' , $marcus);
	 $marcus = str_replace('t', 'Ｔ' , $marcus);
  	 $marcus = str_replace('y', 'Ｙ' , $marcus);
	 $marcus = str_replace('u', 'Ｕ' , $marcus);
  	 $marcus = str_replace('i', 'Ｉ' , $marcus);
	 $marcus = str_replace('o', 'Ｏ' , $marcus);
  	 $marcus = str_replace('p', 'Ｐ' , $marcus);
	 $marcus = str_replace('a', 'Ａ' , $marcus);
  	 $marcus = str_replace('s', 'Ｓ' , $marcus);
	 $marcus = str_replace('d', 'Ｄ' , $marcus);
  	 $marcus = str_replace('f', 'Բ' , $marcus);
	 $marcus = str_replace('g', 'Ｇ' , $marcus);
  	 $marcus = str_replace('h', 'Ｈ' , $marcus);
	 $marcus = str_replace('j', 'Ｊ' , $marcus);
  	 $marcus = str_replace('k', 'Ｋ' , $marcus);
	 $marcus = str_replace('l', 'Ｌ' , $marcus);
  	 $marcus = str_replace('z', 'Ｚ' , $marcus);
	 $marcus = str_replace('x', 'Ｘ' , $marcus);
  	 $marcus = str_replace('c', 'С' , $marcus);
	 $marcus = str_replace('v', 'Ｖ' , $marcus);
  	 $marcus = str_replace('b', 'Ｂ' , $marcus);
  	 $marcus = str_replace('n', 'Ｎ' , $marcus);
	 $marcus = str_replace('m', 'Ⅿ' , $marcus);
	    $marcus = str_replace('ض', 'ضـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ص', 'صـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ث', 'ثـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ق', 'قـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒ـ๋͜‏ـ', $marcus);
   $marcus = str_replace('غ', 'غـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ع', 'عـ๋͜‏ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐ـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ح', 'حـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ج', 'جـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ش', 'شـ๋͜‏ـ', $marcus);
   $marcus = str_replace('س', 'سـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ي', 'يـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ب', 'بـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ل', 'لـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ن', 'نـ๋͜‏ـ', $marcus);
   $marcus = str_replace('م', 'مـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ك', 'ڪـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ط', 'طـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ظ', 'ظـ๋͜‏ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}
 

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','̶a̶',$text); 
$marcus = str_replace('b','b̶',$marcus); 
$marcus = str_replace('c','c̶',$marcus); 
$marcus = str_replace('d','d̶',$marcus); 
$marcus = str_replace('e','e̶',$marcus); 
$marcus = str_replace('f','f̶',$marcus); 
$marcus = str_replace('g','g̶',$marcus); 
$marcus = str_replace('h','h̶',$marcus); 
$marcus = str_replace('i','i̶',$marcus); 
$marcus = str_replace('j','j̶',$marcus); 
$marcus = str_replace('k','k̶',$marcus); 
$marcus = str_replace('l','l̶',$marcus); 
$marcus = str_replace('m','m̶',$marcus); 
$marcus = str_replace('n','n̶',$marcus); 
$marcus = str_replace('o','o̶',$marcus); 
$marcus = str_replace('p','p̶',$marcus); 
$marcus = str_replace('q','q̶',$marcus); 
$marcus = str_replace('r','r̶',$marcus); 
$marcus = str_replace('s','s̶',$marcus); 
$marcus = str_replace('t','t̶',$marcus); 
$marcus = str_replace('u','ᵘ̶ ',$marcus); 
$marcus = str_replace('v','v̶',$marcus); 
$marcus = str_replace('w','w̶',$marcus); 
$marcus = str_replace('x','x̶',$marcus); 
$marcus = str_replace('y','y̶',$marcus); 
$marcus = str_replace('z','z̶',$marcus); 
  $marcus = str_replace('ض', 'ضِـೋـ', $marcus);
   $marcus = str_replace('ص', 'صِـೋـ', $marcus);
   $marcus = str_replace('ث', 'ثِـೋـ', $marcus);
   $marcus = str_replace('ق', 'قِـೋـ', $marcus);
   $marcus = str_replace('ف', 'فِ͒ـೋـ', $marcus);
   $marcus = str_replace('غ', 'غِـೋـ', $marcus);
   $marcus = str_replace('ع', 'عِـೋـ', $marcus);
   $marcus = str_replace('خ', 'خِ̐ـೋـ', $marcus);
   $marcus = str_replace('ح', 'حِـೋـ', $marcus);
   $marcus = str_replace('ج', 'جِـೋـ', $marcus);
   $marcus = str_replace('ش', 'شِـೋـ', $marcus);
   $marcus = str_replace('س', 'سِـೋـ', $marcus);
   $marcus = str_replace('ي', 'يِـೋـ', $marcus);
   $marcus = str_replace('ب', 'بِـೋـ', $marcus);
   $marcus = str_replace('ل', 'لِـೋـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِـೋـ', $marcus);
   $marcus = str_replace('ن', 'نِـೋـ', $marcus);
   $marcus = str_replace('م', 'مِـೋـ', $marcus);
   $marcus = str_replace('ك', 'ڪِـೋـ', $marcus);
   $marcus = str_replace('ط', 'طِـೋـ', $marcus);
   $marcus = str_replace('ظ', 'ظِـೋـ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a', 'α', $text);
$marcus = str_replace('b', 'в', $marcus);
$marcus = str_replace('c', '¢', $marcus);
$marcus = str_replace('d', '∂', $marcus);
$marcus = str_replace('e', 'є', $marcus);
$marcus = str_replace('f', 'ƒ', $marcus);
$marcus = str_replace('g', 'g', $marcus);
$marcus = str_replace('h', 'н', $marcus);
$marcus = str_replace('i', 'ι', $marcus);
$marcus = str_replace('j', 'נ', $marcus);
$marcus = str_replace('k', 'к', $marcus);
$marcus = str_replace('l', 'ℓ', $marcus);
$marcus = str_replace('m', 'м', $marcus);
$marcus = str_replace('n', 'η', $marcus);
$marcus = str_replace('o', 'σ', $marcus);
$marcus = str_replace('p', 'ρ', $marcus);
$marcus = str_replace('q', 'q', $marcus);
$marcus = str_replace('r', 'я', $marcus);
$marcus = str_replace('s', 'ѕ', $marcus);
$marcus = str_replace('t', 'т', $marcus);
$marcus = str_replace('u', 'υ', $marcus);
$marcus = str_replace('v', 'ν', $marcus);
$marcus = str_replace('w', 'ω', $marcus);
$marcus = str_replace('x', 'χ', $marcus);
$marcus = str_replace('y', 'у', $marcus);
$marcus = str_replace('z', 'z', $marcus);
$marcus = str_replace('ض','ضـٰـَہ',$marcus);
$marcus = str_replace('ص','صــ̼۬ـ',$marcus);
$marcus = str_replace('ث','ثــ̥̐ـ',$marcus);
$marcus = str_replace('ق','قــ͚͆ـ',$marcus);
$marcus = str_replace('ف','فــ͋͟ـ',$marcus);
$marcus = str_replace('غ','غــ͍̈́ـ',$marcus);
$marcus = str_replace('ع','عٓ',$marcus);
$marcus = str_replace('ه','هّٰ',$marcus);
$marcus = str_replace('خ','خــ۪ؒـ',$marcus);
$marcus = str_replace('ح','حــ̼ۤـ',$marcus);
$marcus = str_replace('ج','جــ̼ۘـ',$marcus);
$marcus = str_replace('ش','شــ͜͡ـ',$marcus);
$marcus = str_replace('س','سٰٰ',$marcus);
$marcus = str_replace('ي','يــۧ͜ـ',$marcus);
$marcus = str_replace('ب','بــ؅͜ـ',$marcus);
$marcus = str_replace('ل','لٰٰ',$marcus);
$marcus = str_replace('ا','اٰ',$marcus);
$marcus = str_replace('ت','تــۭۤـ',$marcus);
$marcus = str_replace('ن','نــ̼ۡـٌّ',$marcus);
$marcus = str_replace('م','مـٰཻ',$marcus);
$marcus = str_replace('ك','كــؓ͢ـ',$marcus);
$marcus = str_replace('ة','ة',$marcus);
$marcus = str_replace('ظ','ظــ̻͛ـ',$marcus);
$marcus = str_replace('ط','طــ۫͜ـ',$marcus);
$marcus = str_replace('ذ','ذً',$marcus);
$marcus = str_replace('د','دٌّ',$marcus);
$marcus = str_replace('ز','زٍِ',$marcus);
$marcus = str_replace('ر','رٌْ',$marcus);
$marcus = str_replace('و','وٍْ',$marcus);
$marcus = str_replace('ى','ُىْ',$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'Á', $marcus);
$marcus = str_replace('b', 'ß', $marcus);
$marcus = str_replace('c', 'Č', $marcus);
$marcus = str_replace('d', 'Ď', $marcus);
$marcus = str_replace('e', 'Ĕ', $marcus);
$marcus = str_replace('f', 'Ŧ', $marcus);
$marcus = str_replace('g', 'Ğ', $marcus);
$marcus = str_replace('h', 'Ĥ', $marcus);
$marcus = str_replace('i', 'Ĩ', $marcus);
$marcus = str_replace('j', 'Ĵ', $marcus);
$marcus = str_replace('k', 'Ķ', $marcus);
$marcus = str_replace('l', 'Ĺ', $marcus);
$marcus = str_replace('m', 'M', $marcus);
$marcus = str_replace('n', 'Ń', $marcus);
$marcus = str_replace('o', 'Ő', $marcus);
$marcus = str_replace('p', 'P', $marcus);
$marcus = str_replace('q', 'Q', $marcus);
$marcus = str_replace('r', 'Ŕ', $marcus);
$marcus = str_replace('s', 'Ś', $marcus);
$marcus = str_replace('t', 'Ť', $marcus);
$marcus = str_replace('u', 'Ú', $marcus);
$marcus = str_replace('v', 'V', $marcus);
$marcus = str_replace('w', 'Ŵ', $marcus);
$marcus = str_replace('x', 'Ж', $marcus);
$marcus = str_replace('y', 'Ŷ', $marcus);
$marcus = str_replace('z', 'Ź', $marcus);
$marcus = str_replace('ض', 'ضَّ', $marcus);
$marcus = str_replace('ص', 'صُّ', $marcus);
$marcus = str_replace('ق', 'قِّ', $marcus);
$marcus = str_replace('ف', 'فّْ', $marcus);
$marcus = str_replace('غ', 'غٌّ', $marcus);
$marcus = str_replace('ع', 'عَّ', $marcus);
$marcus = str_replace('ه', 'هّْ', $marcus);
$marcus = str_replace('خ', 'خٌّ', $marcus);
$marcus = str_replace('ح', 'حّْ', $marcus);
$marcus = str_replace('ج', 'جٍّ', $marcus);
$marcus = str_replace('ش', 'شّْ', $marcus);
$marcus = str_replace('س', 'سًّ', $marcus);
$marcus = str_replace('ي', 'ئّْ', $marcus);
$marcus = str_replace('ب', 'بّْ', $marcus);
$marcus = str_replace('ل', 'لَّ', $marcus);
$marcus = str_replace('ا', 'اٍّ', $marcus);
$marcus = str_replace('ت', 'تُّ', $marcus);
$marcus = str_replace('ن', 'نِّ', $marcus);
$marcus = str_replace('م', 'مُّ', $marcus);
$marcus = str_replace('ك', 'كّْ', $marcus);
$marcus = str_replace('ظ', 'ظُ', $marcus);
$marcus = str_replace('ط', 'طِ', $marcus);
$marcus = str_replace('ذ', 'ذِ', $marcus);
$marcus = str_replace('د', 'دٌّ', $marcus);
$marcus = str_replace('ز', 'زَ', $marcus);
$marcus = str_replace('و', 'وّ', $marcus);
$marcus = str_replace('ة', 'ةْ', $marcus);
$marcus = str_replace('ث', 'ثٌ', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ค', $marcus);
$marcus = str_replace('b', '๒', $marcus);
$marcus = str_replace('c', 'ς', $marcus);
$marcus = str_replace('d', '๔', $marcus);
$marcus = str_replace('e', 'є', $marcus);
$marcus = str_replace('f', 'Ŧ', $marcus);
$marcus = str_replace('g', 'g', $marcus);
$marcus = str_replace('h', 'ђ', $marcus);
$marcus = str_replace('i', 'เ', $marcus);
$marcus = str_replace('j', 'ן', $marcus);
$marcus = str_replace('k', 'к', $marcus);
$marcus = str_replace('l', 'l', $marcus);
$marcus = str_replace('m', '๓', $marcus);
$marcus = str_replace('n', 'ภ', $marcus);
$marcus = str_replace('o', '๏', $marcus);
$marcus = str_replace('p', 'ק', $marcus);
$marcus = str_replace('q', 'ợ', $marcus);
$marcus = str_replace('r', 'г', $marcus);
$marcus = str_replace('s', 'ร', $marcus);
$marcus = str_replace('t', 't', $marcus);
$marcus = str_replace('u', 'ย', $marcus);
$marcus = str_replace('v', 'ש', $marcus);
$marcus = str_replace('w', 'ฬ', $marcus);
$marcus = str_replace('x', 'א', $marcus);
$marcus = str_replace('y', 'ץ', $marcus);
$marcus = str_replace('z', 'z', $marcus);
   $marcus = str_replace('ض', 'ضَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ص', 'صَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ث', 'ثَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ق', 'قَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ف', 'فَٰ͒ـُـٰٓ', $marcus);
   $marcus = str_replace('غ', 'غَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ع', 'عَٰـُـٰٓ', $marcus);
   $marcus = str_replace('خ', 'خَٰ̐ـُـٰٓ', $marcus);
   $marcus = str_replace('ح', 'حَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ج', 'جَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ش', 'شَٰـُـٰٓ', $marcus);
   $marcus = str_replace('س', 'سَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ي', 'يَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ب', 'بَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ل', 'لَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ن', 'نَٰـُـٰٓ', $marcus);
   $marcus = str_replace('م', 'مَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ك', 'ڪَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ط', 'طَٰـُـٰٓ', $marcus);
   $marcus = str_replace('ظ', 'ظَٰـُـٰٓ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a', 'ä', $marcus);
$marcus = str_replace('b', 'b', $marcus);
$marcus = str_replace('c', 'ċ', $marcus);
$marcus = str_replace('d', 'd', $marcus);
$marcus = str_replace('e', 'ë', $marcus);
$marcus = str_replace('f', 'f', $marcus);
$marcus = str_replace('g', 'ġ', $marcus);
$marcus = str_replace('h', 'h', $marcus);
$marcus = str_replace('i', 'ï', $marcus);
$marcus = str_replace('j', 'j', $marcus);
$marcus = str_replace('k', 'k', $marcus);
$marcus = str_replace('l', 'l', $marcus);
$marcus = str_replace('m', 'm', $marcus);
$marcus = str_replace('n', 'n', $marcus);
$marcus = str_replace('o', 'ö', $marcus);
$marcus = str_replace('p', 'p', $marcus);
$marcus = str_replace('q', 'q', $marcus);
$marcus = str_replace('r', 'r', $marcus);
$marcus = str_replace('s', 's', $marcus);
$marcus = str_replace('t', 't', $marcus);
$marcus = str_replace('u', 'ü', $marcus);
$marcus = str_replace('v', 'v', $marcus);
$marcus = str_replace('w', 'w', $marcus);
$marcus = str_replace('x', 'x', $marcus);
$marcus = str_replace('y', 'ÿ', $marcus);
$marcus = str_replace('z', 'ż', $marcus);
   $marcus = str_replace('ض', 'ضِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $text);
   $marcus = str_replace('ص', 'صِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ث', 'ثِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ق', 'قِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ف', 'فِ͒ـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('غ', 'غِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ع', 'عِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('خ', 'خِ̐ـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ح', 'حِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ج', 'جِـٰٚـٍِْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ش', 'شِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('س', 'سِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ي', 'يِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ب', 'بِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ل', 'لِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ن', 'نِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('م', 'مِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ك', 'ڪِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ط', 'طِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ذ', 'ذِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ظ', 'ظِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظِـٰٚـٍِْْ♡ٌٍـٰٚـِْ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ɑ̝̚', $marcus);
$marcus = str_replace('b', 'в̝̚', $marcus);
$marcus = str_replace('c', 'c̝̚', $marcus);
$marcus = str_replace('d', 'd̝̚', $marcus);
$marcus = str_replace('e', 'ǝ̝̚', $marcus);
$marcus = str_replace('f', 'г̵̵', $marcus);
$marcus = str_replace('g', 'G̝̚', $marcus);
$marcus = str_replace('h', 'н̝̚', $marcus);
$marcus = str_replace('i', 'ı̝̚', $marcus);
$marcus = str_replace('j', 'τ', $marcus);
$marcus = str_replace('k', 'к̝', $marcus);
$marcus = str_replace('l', 'l̝̚', $marcus);
$marcus = str_replace('m', 'м̝̚', $marcus);
$marcus = str_replace('n', 'и̝̚', $marcus);
$marcus = str_replace('o', 'σ̝̚', $marcus);
$marcus = str_replace('p', 'ρ̝̚', $marcus);
$marcus = str_replace('q', 'Q̝̚', $marcus);
$marcus = str_replace('r', 'я̝̚', $marcus);
$marcus = str_replace('s', 'ƨ̝̚', $marcus);
$marcus = str_replace('t', 'т̝̚', $marcus);
$marcus = str_replace('u', 'υ̝̚', $marcus);
$marcus = str_replace('v', 'ν̝̚', $marcus);
$marcus = str_replace('w', 'ω̝̚', $marcus);
$marcus = str_replace('x', 'x̝̚', $marcus);
$marcus = str_replace('y', 'ч̝̚', $marcus);
$marcus = str_replace('z', 'z̝̚', $marcus);
   $marcus = str_replace('ض', 'ض͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ص', 'ص͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ق', 'ق͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('غ', 'غ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ع', 'ع͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ح', 'ح͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ج', 'ج͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ش', 'ش͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('س', 'س͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ي', 'ي͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ب', 'ب͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ل', 'ل͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ن', 'ن͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('م', 'م͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ط', 'ط͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظــ๋͜ـ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ɑ̃̾', $marcus);
$marcus = str_replace('b', 'в̃̾', $marcus);
$marcus = str_replace('c', 'c̃̾', $marcus);
$marcus = str_replace('d', 'd̃̾', $marcus);
$marcus = str_replace('e', 'ǝ̃̾', $marcus);
$marcus = str_replace('f', 'г̵̵', $marcus);
$marcus = str_replace('g', 'G̃̾', $marcus);
$marcus = str_replace('h', 'н̃̾', $marcus);
$marcus = str_replace('i', 'ı̃̾', $marcus);
$marcus = str_replace('j', 'τ̃̾', $marcus);
$marcus = str_replace('k', 'к̃̾', $marcus);
$marcus = str_replace('l', 'l̃̾', $marcus);
$marcus = str_replace('m', 'м̃̾', $marcus);
$marcus = str_replace('n', 'и̃̾', $marcus);
$marcus = str_replace('o', 'σ̃̾', $marcus);
$marcus = str_replace('p', 'ρ̃̾', $marcus);
$marcus = str_replace('q', 'Q̃̾', $marcus);
$marcus = str_replace('r', 'я̃̾', $marcus);
$marcus = str_replace('s', 'ƨ̃̾', $marcus);
$marcus = str_replace('t', 'т̃̾', $marcus);
$marcus = str_replace('u', 'υ̃̾', $marcus);
$marcus = str_replace('v', 'ν̃̾', $marcus);
$marcus = str_replace('w', 'ω̃̾', $marcus);
$marcus = str_replace('x', 'x̃̾', $marcus);
$marcus = str_replace('y', 'ч̃̾', $marcus);
$marcus = str_replace('z', 'z̃̾', $marcus);
   $marcus = str_replace('ض', 'ضٌٍَِْ ًًًٌٌٌِّّـ', $text);
   $marcus = str_replace('ص', 'صٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ث', 'ثٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ق', 'قٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ف', 'فٌٍَِْ͒ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('غ', 'غٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ع', 'عٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('خ', 'خٌٍَِْ̐ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ح', 'حٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ج', 'جٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ش', 'شٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('س', 'سٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ي', 'يٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ب', 'بٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ل', 'لٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ن', 'نٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('م', 'مٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ك', 'ڪٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ط', 'طٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ظ', 'ظٌٍَِْ ًًًٌٌٌِّّـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus  = $text;
$marcus  = str_replace('a', '[̲̅a̲̅]', $text);
$marcus  = str_replace('b', '[̲̅b̲̅]', $marcus);
$marcus  = str_replace('c', '[̲̅c̲̅]', $marcus);
$marcus  = str_replace('d', '[̲̅d̲̅]', $marcus);
$marcus  = str_replace('e', '[̲̅e̲̅]', $marcus);
$marcus  = str_replace('f', '[̲̅f̲̅]', $marcus);
$marcus  = str_replace('g', '[̲̅g̲̅]', $marcus);
$marcus  = str_replace('h', '[̲̅h̲̅]', $marcus);
$marcus  = str_replace('i', '[̲̅i̲̅]', $marcus);
$marcus  = str_replace('j', '[̲̅j̲̅]', $marcus);
$marcus  = str_replace('k', '[̲̅k̲̅]', $marcus);
$marcus  = str_replace('l', '[̲̅l̲̅]', $marcus);
$marcus  = str_replace('m', '[̲̅m̲̅]', $marcus);
$marcus  = str_replace('n', '[̲̅n̲̅]', $marcus);
$marcus  = str_replace('o', '[̲̅o̲̅]', $marcus);
$marcus  = str_replace('p', '[̲̅p̲̅]', $marcus);
$marcus  = str_replace('q', '[̲̅q̲̅]', $marcus);
$marcus  = str_replace('r', '[̲̅r̲̅]', $marcus);
$marcus  = str_replace('s', '[̲̅s̲̅]', $marcus);
$marcus  = str_replace('t', '[̲̅t̲̅]', $marcus);
$marcus  = str_replace('u', '[̲̅u̲̅]', $marcus);
$marcus  = str_replace('v', '[̲̅v̲̅]', $marcus);
$marcus  = str_replace('w', '[̲̅w̲̅]', $marcus);
$marcus  = str_replace('x', '[̲̅x̲̅]', $marcus);
$marcus  = str_replace('y', '[̲̅y̲̅]', $marcus);
$marcus    = str_replace('z', 'z', $marcus);
   $marcus = str_replace('ض', 'ضہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ص', 'صہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ث', 'ثہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ق', 'قہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ف', 'فہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('غ', 'غہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ع', 'عہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('خ', 'خہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ح', 'حہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ج', 'جہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ش', 'شہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('س', 'سہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ي', 'يہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ب', 'بہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ل', 'لٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ن', 'نہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('م', 'مہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ك', 'كہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ط', 'طہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
   $marcus = str_replace('ظ', 'ظہٌٍَِْ ًًًٌٌٌٍٍِّّ ٌْـ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "໋۠هہؚ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ɐ', $marcus);
$marcus = str_replace('b', 'q', $marcus);
$marcus = str_replace('c', 'ɔ', $marcus);
$marcus = str_replace('d', 'p', $marcus);
$marcus = str_replace('e', 'ǝ', $marcus);
$marcus = str_replace('f', 'ɟ', $marcus);
$marcus = str_replace('g', 'ƃ', $marcus);
$marcus = str_replace('h', 'ɥ', $marcus);
$marcus = str_replace('i', 'ı', $marcus);
$marcus = str_replace('j', 'ſ', $marcus);
$marcus = str_replace('k', 'ʞ', $marcus);
$marcus = str_replace('l', 'ן', $marcus);
$marcus = str_replace('m', 'ɯ', $marcus);
$marcus = str_replace('n', 'u', $marcus);
$marcus = str_replace('o', 'o', $marcus);
$marcus = str_replace('p', 'd', $marcus);
$marcus = str_replace('q', 'b', $marcus);
$marcus = str_replace('r', 'ɹ', $marcus);
$marcus = str_replace('s', 's', $marcus);
$marcus = str_replace('t', 'ʇ', $marcus);
$marcus = str_replace('u', 'n', $marcus);
$marcus = str_replace('v', 'ʌ', $marcus);
$marcus = str_replace('w', 'ʍ', $marcus);
$marcus = str_replace('x', 'x', $marcus);
$marcus = str_replace('y', 'ʎ', $marcus);
$marcus = str_replace('z', 'z', $marcus);
   $marcus = str_replace('ض', 'ﺿ', $marcus);
   $marcus = str_replace('ص', 'ﺻ', $marcus);
   $marcus = str_replace('ث', 'ﺚ', $marcus);
   $marcus = str_replace('ق', 'ﭱ', $marcus);
   $marcus = str_replace('ف', 'ﭫ', $marcus);
   $marcus = str_replace('غ', 'ڠ', $marcus);
   $marcus = str_replace('؏', 'ع', $marcus);
   $marcus = str_replace('خ', 'ݗ', $marcus);
   $marcus = str_replace('ح', 'ﺢ', $marcus);
   $marcus = str_replace('ج', 'ݘ', $marcus);
   $marcus = str_replace('ش', 'ﺸ', $marcus);
   $marcus = str_replace('س', 'ﺴ', $marcus);
   $marcus = str_replace('ي', 'ﯥ', $marcus);
   $marcus = str_replace('ب', 'ﭘ', $marcus);
   $marcus = str_replace('ل', 'ڸ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ٿ', $marcus);
   $marcus = str_replace('ن', 'ﮡ', $marcus);
   $marcus = str_replace('م', 'ﻢ', $marcus);
   $marcus = str_replace('ك', 'ﮗ', $marcus);
   $marcus = str_replace('ط', 'ﻂ', $marcus);
   $marcus = str_replace('ظ', 'ﻆ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ⓐ', $marcus);
$marcus = str_replace('b', 'ⓑ', $marcus);
$marcus = str_replace('c', '©', $marcus);
$marcus = str_replace('d', 'ⓓ', $marcus);
$marcus = str_replace('e', 'ⓔ', $marcus);
$marcus = str_replace('f', 'ⓕ', $marcus);
$marcus = str_replace('g', 'ⓖ', $marcus);
$marcus = str_replace('h', 'ⓗ', $marcus);
$marcus = str_replace('i', 'ⓘ', $marcus);
$marcus = str_replace('j', 'ⓙ', $marcus);
$marcus = str_replace('k', 'ⓚ', $marcus);
$marcus = str_replace('l', 'ⓛ', $marcus);
$marcus = str_replace('m', 'ⓜ', $marcus);
$marcus = str_replace('n', 'ⓝ', $marcus);
$marcus = str_replace('o', 'ⓞ', $marcus);
$marcus = str_replace('p', 'ⓟ', $marcus);
$marcus = str_replace('q', 'ⓠ', $marcus);
$marcus = str_replace('r', 'ⓡ', $marcus);
$marcus = str_replace('s', 'ⓢ', $marcus);
$marcus = str_replace('t', 'ⓣ', $marcus);
$marcus = str_replace('u', 'ⓤ', $marcus);
$marcus = str_replace('v', 'ⓥ', $marcus);
$marcus = str_replace('w', 'ⓦ', $marcus);
$marcus = str_replace('x', 'ⓧ', $marcus);
$marcus = str_replace('y', 'ⓨ', $marcus);
$marcus = str_replace('z', 'ⓩ', $marcus);
$marcus = str_replace('ض', 'ضْ', $marcus);
$marcus = str_replace('ص', 'صْ', $marcus);
$marcus = str_replace('ق', 'قْ', $marcus);
$marcus = str_replace('ف', 'فْ', $marcus);
$marcus = str_replace('غ', 'غْ', $marcus);
$marcus = str_replace('ع', 'عْ', $marcus);
$marcus = str_replace('ه', 'ه', $marcus);
$marcus = str_replace('خ', 'خْ', $marcus);
$marcus = str_replace('ح', 'حْ', $marcus);
$marcus = str_replace('ج', 'جْ', $marcus);
$marcus = str_replace('ش', 'شْ', $marcus);
$marcus = str_replace('س', 'سْ', $marcus);
$marcus = str_replace('ي', 'يْ', $marcus);
$marcus = str_replace('ب', 'بْ', $marcus);
$marcus = str_replace('ل',' لْﻟ̣̣', $marcus);
$marcus = str_replace('ا', 'ﺂ̣̥̐', $marcus);
$marcus = str_replace('ت', 'تْ', $marcus);
$marcus = str_replace('ن', 'نْ', $marcus);
$marcus = str_replace('م', 'مْ', $marcus);
$marcus = str_replace('ك', 'ڪْ', $marcus);
$marcus = str_replace('ظ', 'ظْ', $marcus);
$marcus = str_replace('ط', 'طْ', $marcus);
$marcus = str_replace('ذ', 'ذْ', $marcus);
$marcus = str_replace('د', 'دْ', $marcus);
$marcus = str_replace('ز', 'زْ', $marcus);
$marcus = str_replace('و', 'وْ', $marcus);
$marcus = str_replace('ة', 'ة', $marcus);
$marcus = str_replace('ث', 'ثْ', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'Ā', $marcus);
$marcus = str_replace('b', '乃', $marcus);
$marcus = str_replace('c', 'Ċ', $marcus);
$marcus = str_replace('d', 'Ɖ', $marcus);
$marcus = str_replace('e', 'Ē', $marcus);
$marcus = str_replace('f', '₣', $marcus);
$marcus = str_replace('g', 'Ǥ', $marcus);
$marcus = str_replace('h', 'Ħ', $marcus);
$marcus = str_replace('i', 'Ī', $marcus);
$marcus = str_replace('j', 'J', $marcus);
$marcus = str_replace('k', '₭', $marcus);
$marcus = str_replace('l', 'Ŀ', $marcus);
$marcus = str_replace('m', 'M', $marcus);
$marcus = str_replace('n', '₦', $marcus);
$marcus = str_replace('o', 'Ō', $marcus);
$marcus = str_replace('p', 'P', $marcus);
$marcus = str_replace('q', 'Ǭ', $marcus);
$marcus = str_replace('r', 'Ṝ', $marcus);
$marcus = str_replace('s', 'Ƨ', $marcus);
$marcus = str_replace('t', 'Ŧ', $marcus);
$marcus = str_replace('u', 'Ū', $marcus);
$marcus = str_replace('v', '∀', $marcus);
$marcus = str_replace('w', 'ฬ', $marcus);
$marcus = str_replace('x', 'Ж', $marcus);
$marcus = str_replace('y', 'Ȳ', $marcus);
$marcus = str_replace('z', 'Ƶ', $marcus);
$marcus = str_replace('ض', 'ضّـ', $marcus);
$marcus = str_replace('ص', 'صْـ', $marcus);
$marcus = str_replace('ق', 'قّـ', $marcus);
$marcus = str_replace('ف', 'فّـ', $marcus);
$marcus = str_replace('غ', 'ﻏ̣̐', $marcus);
$marcus = str_replace('ع', 'ﻋ̝̚', $marcus);
$marcus = str_replace('ه', 'ﮪ', $marcus);
$marcus = str_replace('خ', 'خـّ', $marcus);
$marcus = str_replace('ح', 'حّـ', $marcus);
$marcus = str_replace('ج', 'جّـ', $marcus);
$marcus = str_replace('ش', 'ﺷ͠', $marcus);
$marcus = str_replace('س', 'ﺳ̶', $marcus);
$marcus = str_replace('ي', 'ې', $marcus);
$marcus = str_replace('ب', 'بّ', $marcus);
$marcus = str_replace('ل', 'ﻟ̣̣', $marcus);
$marcus = str_replace('ا', 'ﺂ̣̥̐', $marcus);
$marcus = str_replace('ت', 'تٌ', $marcus);
$marcus = str_replace('ن', 'نّ', $marcus);
$marcus = str_replace('م', 'ﻣ̝', $marcus);
$marcus = str_replace('ك', 'ﮗ', $marcus);
$marcus = str_replace('ظ', 'ظَّ', $marcus);
$marcus = str_replace('ط', 'طِّ', $marcus);
$marcus = str_replace('ذ', 'ذِ', $marcus);
$marcus = str_replace('د', 'دّ', $marcus);
$marcus = str_replace('ز', 'زّ', $marcus);
$marcus = str_replace('و', 'وٌ', $marcus);
$marcus = str_replace('ة', 'ة', $marcus);
$marcus = str_replace('ث', 'ثّـ', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ᾋ', $marcus);
$marcus = str_replace('b', 'ϐ', $marcus);
$marcus = str_replace('c', 'Ƈ', $marcus);
$marcus = str_replace('d', 'Ɖ', $marcus);
$marcus = str_replace('e', 'Ἕ', $marcus);
$marcus = str_replace('f', 'Ғ', $marcus);
$marcus = str_replace('g', 'Ɠ', $marcus);
$marcus = str_replace('h', 'Ἤ', $marcus);
$marcus = str_replace('i', 'Ἷ', $marcus);
$marcus = str_replace('j', 'Ј', $marcus);
$marcus = str_replace('k', 'Ḱ', $marcus);
$marcus = str_replace('l', 'Ŀ', $marcus);
$marcus = str_replace('m', 'Ṃ', $marcus);
$marcus = str_replace('n', 'Ɲ', $marcus);
$marcus = str_replace('o', 'Ὃ', $marcus);
$marcus = str_replace('p', 'Ƥ', $marcus);
$marcus = str_replace('q', 'Q', $marcus);
$marcus = str_replace('r', 'Ȓ', $marcus);
$marcus = str_replace('s', 'Ṩ', $marcus);
$marcus = str_replace('t', 'Ҭ', $marcus);
$marcus = str_replace('u', 'Ȗ', $marcus);
$marcus = str_replace('v', 'V', $marcus);
$marcus = str_replace('w', 'Ẃ', $marcus);
$marcus = str_replace('x', 'Ẋ', $marcus);
$marcus = str_replace('y', 'Ὓ', $marcus);
$marcus = str_replace('z', 'Ẕ', $marcus);
$marcus = str_replace('ض','ضً',$marcus); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'მ', $marcus);
$marcus = str_replace('b', 'ჩ', $marcus);
$marcus = str_replace('c', 'ƈ', $marcus);
$marcus = str_replace('d', 'ძ', $marcus);
$marcus = str_replace('e', 'ε', $marcus);
$marcus = str_replace('f', 'բ', $marcus);
$marcus = str_replace('g', 'ց', $marcus);
$marcus = str_replace('h', 'հ', $marcus);
$marcus = str_replace('i', 'ἶ', $marcus);
$marcus = str_replace('j', 'ʝ', $marcus);
$marcus = str_replace('k', 'ƙ', $marcus);
$marcus = str_replace('l', 'l', $marcus);
$marcus = str_replace('m', 'ო', $marcus);
$marcus = str_replace('n', 'ղ', $marcus);
$marcus = str_replace('o', 'օ', $marcus);
$marcus = str_replace('p', 'ր', $marcus);
$marcus = str_replace('q', 'գ', $marcus);
$marcus = str_replace('r', 'ɾ', $marcus);
$marcus = str_replace('s', 'ʂ', $marcus);
$marcus = str_replace('t', 'է', $marcus);
$marcus = str_replace('u', 'մ', $marcus);
$marcus = str_replace('v', 'ν', $marcus);
$marcus = str_replace('w', 'ω', $marcus);
$marcus = str_replace('x', 'ჯ', $marcus);
$marcus = str_replace('y', 'ყ', $marcus);
$marcus = str_replace('z', 'z', $marcus);
   $marcus = str_replace('ض', 'ض͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ص', 'ص͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ق', 'ق͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('غ', 'غ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ع', 'ع͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ح', 'ح͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ج', 'ج͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ش', 'ش͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('س', 'س͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ي', 'ي͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ب', 'ب͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ل', 'ل͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ن', 'ن͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('م', 'م͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ط', 'ط͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظــ๋͜ـ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'λ', $marcus);
$marcus = str_replace('b', 'ß', $marcus);
$marcus = str_replace('c', 'Ȼ', $marcus);
$marcus = str_replace('d', 'ɖ', $marcus);
$marcus = str_replace('e', 'ε', $marcus);
$marcus = str_replace('f', 'ʃ', $marcus);
$marcus = str_replace('g', 'Ģ', $marcus);
$marcus = str_replace('h', 'ħ', $marcus);
$marcus = str_replace('i', 'ί', $marcus);
$marcus = str_replace('j', 'ĵ', $marcus);
$marcus = str_replace('k', 'κ', $marcus);
$marcus = str_replace('l', 'ι', $marcus);
$marcus = str_replace('m', 'ɱ', $marcus);
$marcus = str_replace('n', 'ɴ', $marcus);
$marcus = str_replace('o', 'Θ', $marcus);
$marcus = str_replace('p', 'ρ', $marcus);
$marcus = str_replace('q', 'ƣ', $marcus);
$marcus = str_replace('r', 'ર', $marcus);
$marcus = str_replace('s', 'Ș', $marcus);
$marcus = str_replace('t', 'τ', $marcus);
$marcus = str_replace('u', 'Ʋ', $marcus);
$marcus = str_replace('v', 'ν', $marcus);
$marcus = str_replace('w', 'ώ', $marcus);
$marcus = str_replace('x', 'Χ', $marcus);
$marcus = str_replace('y', 'ϓ', $marcus);
$marcus = str_replace('z', 'Հ', $marcus);
   $marcus = str_replace('ض', 'ضِٰـِۢ', $marcus);
   $marcus = str_replace('ص', 'صِٰـِۢ', $marcus);
   $marcus = str_replace('ث', 'ثِٰـِۢ', $marcus);
   $marcus = str_replace('ق', 'قِٰـِۢ', $marcus);
   $marcus = str_replace('ف', 'فِٰ͒ـِۢ', $marcus);
   $marcus = str_replace('غ', 'غِٰـِۢ', $marcus);
   $marcus = str_replace('ع', 'عِٰـِۢ', $marcus);
   $marcus = str_replace('خ', 'خِٰ̐ـِۢ', $marcus);
   $marcus = str_replace('ح', 'حِٰـِۢ', $marcus);
   $marcus = str_replace('ج', 'جِٰـِۢ', $marcus);
   $marcus = str_replace('ش', 'شِٰـِۢ', $marcus);
   $marcus = str_replace('س', 'سِٰـِۢ', $marcus);
   $marcus = str_replace('ي', 'يِٰـِۢ', $marcus);
   $marcus = str_replace('ب', 'بِٰـِۢ', $marcus);
   $marcus = str_replace('ل', 'لِٰـِۢ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِٰـِۢ', $marcus);
   $marcus = str_replace('ن', 'نِٰـِۢ', $marcus);
   $marcus = str_replace('م', 'مِٰـِۢ', $marcus);
   $marcus = str_replace('ك', 'ڪِٰـِۢ', $marcus);
   $marcus = str_replace('ط', 'طِٰـِۢ', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـِۢ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', '🅐', $marcus);
$marcus = str_replace('b', '🅑', $marcus);
$marcus = str_replace('c', '🅒', $marcus);
$marcus = str_replace('d', '🅓', $marcus);
$marcus = str_replace('e', '🅔', $marcus);
$marcus = str_replace('f', '🅕', $marcus);
$marcus = str_replace('g', '🅖', $marcus);
$marcus = str_replace('h', '🅗', $marcus);
$marcus = str_replace('i', '🅘', $marcus);
$marcus = str_replace('j', '🅙', $marcus);
$marcus = str_replace('k', '🅚', $marcus);
$marcus = str_replace('l', '🅛', $marcus);
$marcus = str_replace('m', '🅜', $marcus);
$marcus = str_replace('n', '🅝', $marcus);
$marcus = str_replace('o', '🅞', $marcus);
$marcus = str_replace('p', '🅟', $marcus);
$marcus = str_replace('q', '🅠', $marcus);
$marcus = str_replace('r', '🅡', $marcus);
$marcus = str_replace('s', '🅢', $marcus);
$marcus = str_replace('t', '🅣', $marcus);
$marcus = str_replace('u', '🅤', $marcus);
$marcus = str_replace('v', '🅥', $marcus);
$marcus = str_replace('w', '🅦', $marcus);
$marcus = str_replace('x', '🅧', $marcus);
$marcus = str_replace('y', '🅨', $marcus);
$marcus = str_replace('z', '🅩', $marcus);
$marcus = str_replace('ا','ٱ',$marcus); 
$marcus = str_replace('ب','بّـ',$marcus); 
$marcus = str_replace('ت','ﭥ',$marcus);
$marcus = str_replace('ث','ث',$marcus); 
$marcus = str_replace('ج','چ',$marcus);  
$marcus = str_replace('ح','פ',$marcus); 
$marcus = str_replace('خ','ڂ',$marcus); 
$marcus = str_replace('د','د',$marcus); 
$marcus = str_replace('ذ','ذ',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ز','ز',$marcus); 
$marcus = str_replace('س','س',$marcus); 
$marcus = str_replace('ش','ش',$marcus); 
$marcus = str_replace('ص','ص',$marcus); 
$marcus = str_replace('ض','ضَّ',$marcus); 
$marcus = str_replace('ط','ط',$marcus); 
$marcus = str_replace('ظ','ظ',$marcus); 
$marcus = str_replace('ع','عّ',$marcus); 
$marcus = str_replace('غ','غَ ',$marcus); 
$marcus = str_replace('ف','ف̲ ',$marcus); 
$marcus = str_replace('ق','ق',$marcus); 
$marcus = str_replace('ك','ڪْ',$marcus); 
$marcus = str_replace('ل','ﻟ̣̣',$marcus);
$marcus = str_replace('م','م',$marcus); 
$marcus = str_replace('ن','ن',$marcus);  
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('و','و',$marcus); 
$marcus = str_replace('ي','ي',$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', '۰۪۫A۪۫۰', $marcus);
$marcus = str_replace('b', '۰۪۫B۪۫۰', $marcus);
$marcus = str_replace('c', '۰۪۫C۪۫۰', $marcus);
$marcus = str_replace('d', '۰۪۫D۪۫۰', $marcus);
$marcus = str_replace('e', '۰۪۫E۪۫۰', $marcus);
$marcus = str_replace('f', '۰۪۫F۪۫۰', $marcus);
$marcus = str_replace('g', '۰۪۫G۪۫۰', $marcus);
$marcus = str_replace('h', '۰۪۫H۪۫۰', $marcus);
$marcus = str_replace('i', '۰۪۫I۪۫۰', $marcus);
$marcus = str_replace('j', '۰۪۫J۪۫۰', $marcus);
$marcus = str_replace('k', '۰۪۫K۪۫۰', $marcus);
$marcus = str_replace('l', '۰۪۫L۪۫۰', $marcus);
$marcus = str_replace('m', '۰۪۫M۪۫۰', $marcus);
$marcus = str_replace('n', '۰۪۫N۪۫۰', $marcus);
$marcus = str_replace('o', '۰۪۫O۪۫۰', $marcus);
$marcus = str_replace('p', '۰۪۫P۪۫۰', $marcus);
$marcus = str_replace('q', '۰۪۫Q۪۫۰', $marcus);
$marcus = str_replace('r', '۰۪۫R۪۫۰', $marcus);
$marcus = str_replace('s', '۰۪۫S۪۫۰', $marcus);
$marcus = str_replace('t', '۰۪۫T۪۫۰', $marcus);
$marcus = str_replace('u', '۰۪۫U۪۫۰', $marcus);
$marcus = str_replace('v', '۰۪۫V۪۫۰', $marcus);
$marcus = str_replace('w', '۰۪۫W۪۫۰', $marcus);
$marcus = str_replace('x', '۰۪۫X۪۫۰', $marcus);
$marcus = str_replace('y', '۰۪۫Y۪۫۰', $marcus);
$marcus = str_replace('z', '۰۪۫Z۪۫۰', $marcus);
   $marcus = str_replace('ض', 'ﺿ', $marcus);
   $marcus = str_replace('ص', 'ﺻ', $marcus);
   $marcus = str_replace('ث', 'ﺚ', $marcus);
   $marcus = str_replace('ق', 'ﭱ', $marcus);
   $marcus = str_replace('ف', 'ﭫ', $marcus);
   $marcus = str_replace('غ', 'ڠ', $marcus);
   $marcus = str_replace('؏', 'ع', $marcus);
   $marcus = str_replace('خ', 'ݗ', $marcus);
   $marcus = str_replace('ح', 'ﺢ', $marcus);
   $marcus = str_replace('ج', 'ݘ', $marcus);
   $marcus = str_replace('ش', 'ﺸ', $marcus);
   $marcus = str_replace('س', 'ﺴ', $marcus);
   $marcus = str_replace('ي', 'ﯥ', $marcus);
   $marcus = str_replace('ب', 'ﭘ', $marcus);
   $marcus = str_replace('ل', 'ڸ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ٿ', $marcus);
   $marcus = str_replace('ن', 'ﮡ', $marcus);
   $marcus = str_replace('م', 'ﻢ', $marcus);
   $marcus = str_replace('ك', 'ﮗ', $marcus);
   $marcus = str_replace('ط', 'ﻂ', $marcus);
   $marcus = str_replace('ظ', 'ﻆ', $marcus);
  $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'a̷', $marcus);
$marcus = str_replace('b', 'b̷', $marcus);
$marcus = str_replace('c', 'c̷', $marcus);
$marcus = str_replace('d', 'd̷', $marcus);
$marcus = str_replace('e', 'e̷', $marcus);
$marcus = str_replace('f', 'f̷', $marcus);
$marcus = str_replace('g', 'g̷', $marcus);
$marcus = str_replace('h', 'h̷', $marcus);
$marcus = str_replace('i', 'i̷', $marcus);
$marcus = str_replace('j', 'j̷', $marcus);
$marcus = str_replace('k', 'k̷', $marcus);
$marcus = str_replace('l', 'l̷', $marcus);
$marcus = str_replace('m', 'm̷', $marcus);
$marcus = str_replace('n', 'n̷', $marcus);
$marcus = str_replace('o', 'o̷', $marcus);
$marcus = str_replace('p', 'p̷', $marcus);
$marcus = str_replace('q', 'q̷', $marcus);
$marcus = str_replace('r', 'r̷', $marcus);
$marcus = str_replace('s', 's̷', $marcus);
$marcus = str_replace('t', 't̷', $marcus);
$marcus = str_replace('u', 'u̷', $marcus);
$marcus = str_replace('v', 'v̷', $marcus);
$marcus = str_replace('w', 'w̷', $marcus);
$marcus = str_replace('x', 'x̷', $marcus);
$marcus = str_replace('y', 'y̷', $marcus);
$marcus = str_replace('z', 'z̷', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}
if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('a', 'ᴀ', $marcus);
$marcus = str_replace('b', 'ʙ', $marcus);
$marcus = str_replace('c', 'ᴄ', $marcus);
$marcus = str_replace('d', 'ᴅ', $marcus);
$marcus = str_replace('e', 'ᴇ', $marcus);
$marcus = str_replace('f', 'ᴈ', $marcus);
$marcus = str_replace('g', 'ɢ', $marcus);
$marcus = str_replace('h', 'ʜ', $marcus);
$marcus = str_replace('i', 'ɪ', $marcus);
$marcus = str_replace('j', 'ᴊ', $marcus);
$marcus = str_replace('k', 'ᴋ', $marcus);
$marcus = str_replace('l', 'ʟ', $marcus);
$marcus = str_replace('m', 'ᴍ', $marcus);
$marcus = str_replace('n', 'ɴ', $marcus);
$marcus = str_replace('o', 'ᴏ', $marcus);
$marcus = str_replace('p', 'ᴘ', $marcus);
$marcus = str_replace('q', 'ᴓ', $marcus);
$marcus = str_replace('r', 'ʀ', $marcus);
$marcus = str_replace('s', 'ᴤ', $marcus);
$marcus = str_replace('t', 'ᴛ', $marcus);
$marcus = str_replace('u', 'ᴜ', $marcus);
$marcus = str_replace('v', 'ᴠ', $marcus);
$marcus = str_replace('w', 'ᴡ', $marcus);
$marcus = str_replace('x', 'ᴥ', $marcus);
$marcus = str_replace('y', 'ʏ', $marcus);
$marcus = str_replace('z', 'ᴢ', $marcus);
   $marcus = str_replace('ض', 'ض͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ص', 'ص͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ق', 'ق͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ف', 'ف͒͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('غ', 'غ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ع', 'ع͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('خ', 'خ̐͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ح', 'ح͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ج', 'ج͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ش', 'ش͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('س', 'س͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ي', 'ي͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ب', 'ب͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ل', 'ل͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ت͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ن', 'ن͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('م', 'م͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ك', 'ڪ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ط', 'ط͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ظ', 'ظ͜ــ๋͜ـ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('ظ', 'ظــ๋͜ـ', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = str_replace('a','⧼α⧽',$text); 
$marcus = str_replace('b','⧼в⧽',$marcus); 
$marcus = str_replace('c','⧼c⧽',$marcus); 
$marcus = str_replace('d','⧼ɒ⧽',$marcus); 
$marcus = str_replace('e','⧼є⧽',$marcus); 
$marcus = str_replace('f','⧼f⧽',$marcus); 
$marcus = str_replace('g','⧼ɢ⧽',$marcus); 
$marcus = str_replace('h','⧼н⧽',$marcus); 
$marcus = str_replace('i','⧼ɪ⧽',$marcus); 
$marcus = str_replace('j','⧼ᴊ⧽',$marcus); 
$marcus = str_replace('k','⧼ĸ⧽',$marcus); 
$marcus = str_replace('l','⧼ℓ⧽',$marcus); 
$marcus = str_replace('m','⧼м⧽',$marcus); 
$marcus = str_replace('n','⧼и⧽',$marcus); 
$marcus = str_replace('o','⧼σ⧽',$marcus); 
$marcus = str_replace('p','⧼ρ⧽',$marcus); 
$marcus = str_replace('q','⧼q⧽',$marcus); 
$marcus = str_replace('r','⧼я⧽',$marcus); 
$marcus = str_replace('s','⧼s⧽',$marcus); 
$marcus = str_replace('t','⧼τ⧽',$marcus); 
$marcus = str_replace('u','⧼υ⧽',$marcus); 
$marcus = str_replace('v','⧼v⧽',$marcus); 
$marcus = str_replace('w','⧼ω⧽',$marcus); 
$marcus = str_replace('x','⧼x⧽',$marcus); 
$marcus = str_replace('y','⧼y⧽',$marcus); 
$marcus = str_replace('z','⧼z⧽',$marcus); 
$marcus = str_replace('ا','ٱ',$marcus); 
$marcus = str_replace('ب','ﭜ',$marcus); 
$marcus = str_replace('ج','چ',$marcus); 
$marcus = str_replace('ث','ﭦ',$marcus); 
$marcus = str_replace('ت','ﭠ',$marcus); 
$marcus = str_replace('ح','ڂ',$marcus); 
$marcus = str_replace('خ','خ',$marcus); 
$marcus = str_replace('د','ﮃ',$marcus); 
$marcus = str_replace('ذ','ڎ',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ز','ژ',$marcus); 
$marcus = str_replace('س','ﺳ̭͠ ',$marcus); 
$marcus = str_replace('ش','شَ',$marcus); 
$marcus = str_replace('ص','ڝ',$marcus); 
$marcus = str_replace('ض','ڞ',$marcus); 
$marcus = str_replace('ط','ط',$marcus); 
$marcus = str_replace('ظ','ڟ',$marcus); 
$marcus = str_replace('ع','؏',$marcus); 
$marcus = str_replace('غ','ﻏ̐ ',$marcus); 
$marcus = str_replace('ف','ڤ',$marcus); 
$marcus = str_replace('ق','ڦ',$marcus); 
$marcus = str_replace('ك','ڳ',$marcus); 
$marcus = str_replace('ل','لَ',$marcus);
$marcus = str_replace('م','م',$marcus); 
$marcus = str_replace('ن','ڻ',$marcus);  
$marcus = str_replace('ه','هـﮧ',$marcus); 
$marcus = str_replace('و','و',$marcus); 
$marcus = str_replace('ي','يِّ',$marcus); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$marcus."".$zhrfaadd
]);}

if($text != '/start' and $text !='/us' and $text !='الاعضاء'){

   $count = count($text); 
$marcus = $text;
$marcus = str_replace('ج', '   ﭴﺑﻣ̝̚ ', $marcus);
$marcus = str_replace('ح', ' פﺂء ', $marcus);
$marcus = str_replace('خ', ' ﺧﺂء ', $marcus);
$marcus = str_replace('ه', ' ھَہّﺂء ', $marcus);
$marcus = str_replace('ع', ' ﻋﯾﻧ ', $marcus);
$marcus = str_replace('غ', ' ﻏ̣̐ﯾﻧ ', $marcus);
$marcus = str_replace('ف', ' ﭬﺂء ', $marcus);
$marcus = str_replace('ق', ' ﻗ̮ـ̃ﺂﭬ ', $marcus);
$marcus = str_replace('ث', ' ﭥﺂء  ', $marcus);
$marcus = str_replace('ص', ' ﺻﺂﮃ ', $marcus);
$marcus = str_replace('ض', ' ﺿﺂﮃ', $marcus);
$marcus = str_replace('ط', ' ﻁْﺂء ', $marcus);
$marcus = str_replace('ك', ' گـﺂﭬ ', $marcus);
$marcus = str_replace('م', ' ﻣ̝̚ﯾﻣ̝̚ ', $marcus);
$marcus = str_replace('ن', ' ﻧۆﻧ ', $marcus);
$marcus = str_replace('ت', ' تآءُ ', $marcus);
$marcus = str_replace('ا', ' ﺂﻟﭬ ', $marcus);
$marcus = str_replace('ل', ' ﻟﺂﻣ̝̚ ', $marcus);
$marcus = str_replace('ب', ' ﺑﺂء ', $marcus);
$marcus = str_replace('ي', '  ﯾﺂء ', $marcus);
$marcus = str_replace('س', ' ﺳﯾﻧ ', $marcus);
$marcus = str_replace('ش', ' ﺷﯾﻧ ', $marcus);
$marcus = str_replace('د', ' ﮃﺂﻟ ', $marcus);
$marcus = str_replace('ظ', ' ﻅﺂﮃ ', $marcus);
$marcus = str_replace('ز', ' ژﺂﯾ ', $marcus);
$marcus = str_replace('و', ' ۆﺂۆ ', $marcus);
$marcus = str_replace('ر', ' ړُﺂء  ', $marcus);
$marcus = str_replace('ذ', ' ذﺂﻟ  ', $marcus);
 $marcus = str_replace('q', 'Ҩ' , $marcus);
  	 $marcus = str_replace('w', 'Ɯ' , $marcus);
	   $marcus = str_replace('e', 'Ɛ' , $marcus);
  	 $marcus = str_replace('r', '尺' , $marcus);
	   $marcus = str_replace('t', 'Ť' , $marcus);
  	 $marcus = str_replace('y', 'Ϥ' , $marcus);
	   $marcus = str_replace('u', 'Ц' , $marcus);
  	 $marcus = str_replace('i', 'ɪ' , $marcus);
	   $marcus = str_replace('o', 'Ø' , $marcus);
  	 $marcus = str_replace('p', 'þ' , $marcus);
	   $marcus = str_replace('a', 'Λ' , $marcus);
  	 $marcus = str_replace('s', 'ら' , $marcus);
	   $marcus = str_replace('d', 'Ð' , $marcus);
  	 $marcus = str_replace('f', 'F' , $marcus);
	   $marcus = str_replace('g', 'Ɠ' , $marcus);
  	 $marcus = str_replace('h', 'н' , $marcus);
	   $marcus = str_replace('j', 'ﾌ' , $marcus);
  	 $marcus = str_replace('k', 'Қ' , $marcus);
	   $marcus = str_replace('l', 'Ł' , $marcus);
  	 $marcus = str_replace('z', 'Ẕ' , $marcus);
	   $marcus = str_replace('x', 'χ' , $marcus);
  	 $marcus = str_replace('c', 'ㄈ' , $marcus);
	   $marcus = str_replace('v', 'Ɣ' , $marcus);
  	 $marcus = str_replace('b', 'Ϧ' , $marcus);
  	 $marcus = str_replace('n', 'Л' , $marcus);
	   $marcus = str_replace('m', '௱' , $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$marcus."".$zhrfaadd
]);
    bot('sendMessage',[
'chat_id'=>$chat_id,
        'text'=>
"",
]);}


/*
- الزخرفةه هنا
- لاتلعب بيها ولا تغير اي شي ،!
BY : @GG1ZZ . 
*/
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','🅐',$JJ119); 
$JJ119 = str_replace("b","🅑",$JJ119); 
$JJ119 = str_replace("c","🅒",$JJ119); 
$JJ119 = str_replace("d","🅓",$JJ119); 
$JJ119 = str_replace("e","🅔",$JJ119); 
$JJ119 = str_replace("f","🅕",$JJ119); 
$JJ119 = str_replace("g","🅖",$JJ119); 
$JJ119 = str_replace("h","🅗",$JJ119); 
$JJ119 = str_replace("i","🅘",$JJ119); 
$JJ119 = str_replace("j","🅙",$JJ119); 
$JJ119 = str_replace("k","🅚",$JJ119); 
$JJ119 = str_replace("l","🅛",$JJ119); 
$JJ119 = str_replace("m","🅜",$JJ119); 
$JJ119 = str_replace("n","🅝",$JJ119); 
$JJ119 = str_replace("o","🅞",$JJ119); 
$JJ119 = str_replace("p","🅟",$JJ119); 
$JJ119 = str_replace("q","🅠",$JJ119); 
$JJ119 = str_replace("r","🅡",$JJ119); 
$JJ119 = str_replace("s","🅢",$JJ119); 
$JJ119 = str_replace("t","🅣",$JJ119); 
$JJ119 = str_replace("u"," 🅤",$JJ119); 
$JJ119 = str_replace("v","🅥",$JJ119); 
$JJ119 = str_replace("w","🅦",$JJ119); 
$JJ119 = str_replace("x","🅧",$JJ119); 
$JJ119 = str_replace("y","🅨",$JJ119); 
$JJ119 = str_replace("z","🅩",$JJ119); 
 
$JJ119 = str_replace('ض','ضً',$JJ119); 
$JJ119 = str_replace('ص','صً',$JJ119); 
$JJ119 = str_replace('ث','ثہ',$JJ119); 
$JJ119 = str_replace('ق','قہً',$JJ119); 
$JJ119 = str_replace('ف','فُہ',$JJ119); 
$JJ119 = str_replace('غ','غہ',$JJ119); 
$JJ119 = str_replace('ع','عہُ',$JJ119); 
$JJ119 = str_replace('ه','ه',$JJ119); 
$JJ119 = str_replace('خ','خہ',$JJ119); 
$JJ119 = str_replace('ح','حہ',$JJ119); 
$JJ119 = str_replace('ج','جہ',$JJ119); 
$JJ119 = str_replace('ش','شہ',$JJ119); 
$JJ119 = str_replace('س','سہ',$JJ119); 
$JJ119 = str_replace('ي','يہ',$JJ119); 
$JJ119 = str_replace('ب',' ٻً',$JJ119);
$JJ119 = str_replace('ل','لہ',$JJ119); 
$JJ119 = str_replace('ا',' ٳ',$JJ119); 
$JJ119 = str_replace('ت','تہ',$JJ119); 
$JJ119 = str_replace('ن','نٍ',$JJ119); 
$JJ119 = str_replace('ك','كُہ',$JJ119); 
$JJ119 = str_replace('م','مْ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظً',$JJ119); 
$JJ119 = str_replace('ط','طہ',$JJ119); 
 $JJ119 = str_replace('ذ','ذً',$JJ119); 
$JJ119 = str_replace('د','دِ',$JJ119); 
$JJ119 = str_replace('ز','زً',$JJ119); 
$JJ119 = str_replace('ر','ڒٍ',$JJ119); 
$JJ119 = str_replace('و','وٌ',$JJ119); 
 $JJ119 = str_replace('ى','ىّ',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','𝗔',$JJ119); 
$JJ119 = str_replace("b","𝗕",$JJ119); 
$JJ119 = str_replace("c","𝗖",$JJ119); 
$JJ119 = str_replace("d","𝗗",$JJ119); 
$JJ119 = str_replace("e","𝗘",$JJ119); 
$JJ119 = str_replace("f","𝗙",$JJ119); 
$JJ119 = str_replace("g","𝗚",$JJ119); 
$JJ119 = str_replace("h","𝗛",$JJ119); 
$JJ119 = str_replace("i","𝗜",$JJ119); 
$JJ119 = str_replace("j","𝗝",$JJ119); 
$JJ119 = str_replace("k","𝗞",$JJ119); 
$JJ119 = str_replace("l","𝗟",$JJ119); 
$JJ119 = str_replace("m","𝗠",$JJ119); 
$JJ119 = str_replace("n","𝗡",$JJ119); 
$JJ119 = str_replace("o","𝗢",$JJ119); 
$JJ119 = str_replace("p","𝗣",$JJ119); 
$JJ119 = str_replace("q","𝗤",$JJ119); 
$JJ119 = str_replace("r","𝗥",$JJ119); 
$JJ119 = str_replace("s","𝗦",$JJ119); 
$JJ119 = str_replace("t","𝗧",$JJ119); 
$JJ119 = str_replace("u","𝗨",$JJ119); 
$JJ119 = str_replace("v","𝗩",$JJ119); 
$JJ119 = str_replace("w","𝗪",$JJ119); 
$JJ119 = str_replace("x","𝗫",$JJ119); 
$JJ119 = str_replace("y","𝗬",$JJ119); 
$JJ119 = str_replace("z","𝗭",$JJ119); 
      
$JJ119 = str_replace('ض','ضـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ص','صـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ث','ثـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ق','قـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ف','فـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('غ','غـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ع','عـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ه','هـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('خ','خـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ح','حـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ج','جـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ش','شـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('س','سـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ي','يـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ب','بـٰ̲ـہ',$JJ119);
$JJ119 = str_replace('ل','لـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ا','اٰ',$JJ119); 
$JJ119 = str_replace('ت','تـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ن','نـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('م','مـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ك','كـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ط','طـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ذ','ذٰ',$JJ119); 
$JJ119 = str_replace('د','دٰ',$JJ119); 
$JJ119 = str_replace('ز','زٰ',$JJ119); 
$JJ119 = str_replace('ر','رٰ',$JJ119); 
$JJ119 = str_replace('و','وٰ',$JJ119); 
$JJ119 = str_replace('ى','ىَ',$JJ119); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
}
 
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $iBadlz = $text;
$iBadlz = str_replace('ع','ع',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','مۘ',$iBadlz); 
$iBadlz = str_replace('ن','نۨــہ',$iBadlz);  
$iBadlz = str_replace('ه','هۂَ',$iBadlz); 
$iBadlz = str_replace('ٰو','و',$iBadlz); 
$iBadlz = str_replace('ي','يۧ',$iBadlz);

$iBadlz = str_replace('q', 'Q' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Щ' , $iBadlz);
	 $iBadlz = str_replace('e', '乇' , $iBadlz);
  	 $iBadlz = str_replace('r', '尺' , $iBadlz);
	 $iBadlz = str_replace('t', 'ｲ' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ﾘ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ц' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ﾉ' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ծ' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ｱ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ﾑ' , $iBadlz);
  	 $iBadlz = str_replace('s', '丂' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'ｷ' , $iBadlz);
	 $iBadlz = str_replace('g', 'Ǥ' , $iBadlz);
  	 $iBadlz = str_replace('h', 'ん' , $iBadlz);
	 $iBadlz = str_replace('j', 'ﾌ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'ズ' , $iBadlz);
	 $iBadlz = str_replace('l', 'ﾚ' , $iBadlz);
  	 $iBadlz = str_replace('z', '乙' , $iBadlz);
	 $iBadlz = str_replace('x', 'ﾒ' , $iBadlz);
  	 $iBadlz = str_replace('c', 'ζ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Џ' , $iBadlz);
  	 $iBadlz = str_replace('b', '乃' , $iBadlz);
  	 $iBadlz = str_replace('n', '刀' , $iBadlz);
	 $iBadlz = str_replace('m', 'ᄊ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ﭥ',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','פ',$iBadlz); 
$iBadlz = str_replace('خ','ڂ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س',$iBadlz); 
$iBadlz = str_replace('ش','ش',$iBadlz); 
$iBadlz = str_replace('ص','ص',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظ',$iBadlz); 
$iBadlz = str_replace('ع','عّ',$iBadlz); 
$iBadlz = str_replace('غ','غَ ',$iBadlz); 
$iBadlz = str_replace('ف','ف̲ ',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ڪْ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̣̣',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ن',$iBadlz);  
$iBadlz = str_replace('ه','ه',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'Á', $iBadlz);
$iBadlz = str_replace('b', 'ß', $iBadlz);
$iBadlz = str_replace('c', 'Č', $iBadlz);
$iBadlz = str_replace('d', 'Ď', $iBadlz);
$iBadlz = str_replace('e', 'Ĕ', $iBadlz);
$iBadlz = str_replace('f', 'Ŧ', $iBadlz);
$iBadlz = str_replace('g', 'Ğ', $iBadlz);
$iBadlz = str_replace('h', 'Ĥ', $iBadlz);
$iBadlz = str_replace('i', 'Ĩ', $iBadlz);
$iBadlz = str_replace('j', 'Ĵ', $iBadlz);
$iBadlz = str_replace('k', 'Ķ', $iBadlz);
$iBadlz = str_replace('l', 'Ĺ', $iBadlz);
$iBadlz = str_replace('m', 'M', $iBadlz);
$iBadlz = str_replace('n', 'Ń', $iBadlz);
$iBadlz = str_replace('o', 'Ő', $iBadlz);
$iBadlz = str_replace('p', 'P', $iBadlz);
$iBadlz = str_replace('q', 'Q', $iBadlz);
$iBadlz = str_replace('r', 'Ŕ', $iBadlz);
$iBadlz = str_replace('s', 'Ś', $iBadlz);
$iBadlz = str_replace('t', 'Ť', $iBadlz);
$iBadlz = str_replace('u', 'Ú', $iBadlz);
$iBadlz = str_replace('v', 'V', $iBadlz);
$iBadlz = str_replace('w', 'Ŵ', $iBadlz);
$iBadlz = str_replace('x', 'Ж', $iBadlz);
$iBadlz = str_replace('y', 'Ŷ', $iBadlz);
$iBadlz = str_replace('z', 'Ź', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بِ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲',$iBadlz);
$iBadlz = str_replace('ث','ثْ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','ح',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','ذّ',$iBadlz); 
$iBadlz = str_replace('ر','رّ',$iBadlz); 
$iBadlz = str_replace('ز','زَ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̲ ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ̲ ',$iBadlz); 
$iBadlz = str_replace('ص','صـ',$iBadlz); 
$iBadlz = str_replace('ض','ضَ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','ﻋ',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̣̐ ',$iBadlz); 
$iBadlz = str_replace('ف','قّـ',$iBadlz); 
$iBadlz = str_replace('ق','قّـ',$iBadlz); 
$iBadlz = str_replace('ك','ڪ',$iBadlz); 
$iBadlz = str_replace('ل','ڵـ',$iBadlz);
$iBadlz = str_replace('م','ـمـ',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲ ـ',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('q', 'ҩ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'ω' , $iBadlz);
	 $iBadlz = str_replace('e', '૯' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Ր' , $iBadlz);
	 $iBadlz = str_replace('t', '੮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ע' , $iBadlz);
	 $iBadlz = str_replace('u', 'υ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ɿ' , $iBadlz);
	 $iBadlz = str_replace('o', '૦' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ƿ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ค' , $iBadlz);
  	 $iBadlz = str_replace('s', 'ς' , $iBadlz);
	 $iBadlz = str_replace('d', 'ძ' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' , $iBadlz);
	 $iBadlz = str_replace('g', '૭' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Һ' , $iBadlz);
	 $iBadlz = str_replace('j', 'ʆ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'қ' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ն' , $iBadlz);
  	 $iBadlz = str_replace('z', 'ઽ' , $iBadlz);
	 $iBadlz = str_replace('x', '૪' , $iBadlz);
  	 $iBadlz = str_replace('c', '८' , $iBadlz);
	 $iBadlz = str_replace('v', '౮' , $iBadlz);
  	 $iBadlz = str_replace('b', 'ც' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Ո' , $iBadlz);
	 $iBadlz = str_replace('m', 'ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲ ',$iBadlz);
$iBadlz = str_replace('ث','ثّـ',$iBadlz); 
$iBadlz = str_replace('ج','ﺟ',$iBadlz);  
$iBadlz = str_replace('ح','ﺣّ͠ـ',$iBadlz); 
$iBadlz = str_replace('خ','ﺣ͠ ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','دّ',$iBadlz); 
$iBadlz = str_replace('ر','ڔ',$iBadlz); 
$iBadlz = str_replace('ز','زْ',$iBadlz); 
$iBadlz = str_replace('س','سُ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ͠ ',$iBadlz); 
$iBadlz = str_replace('ص','ﺼ',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','عـ',$iBadlz); 
$iBadlz = str_replace('غ','غَ',$iBadlz); 
$iBadlz = str_replace('ف','ﻓ̲',$iBadlz); 
$iBadlz = str_replace('ق','ﻗ̮ـ̃',$iBadlz); 
$iBadlz = str_replace('ك','ﮖ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̲ ',$iBadlz);
$iBadlz = str_replace('م','ﻣ̲',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','ﯚ',$iBadlz); 
$iBadlz = str_replace('ي','يَ',$iBadlz);

$iBadlz = str_replace('q', 'Ꝙ' ,$iBadlz);
  	 $iBadlz = str_replace('w', 'Ѡ' ,$iBadlz);
	 $iBadlz = str_replace('e', 'Ɛ' ,$iBadlz);
  	 $iBadlz = str_replace('r', 'Ɽ' ,$iBadlz);
	 $iBadlz = str_replace('t', 'Ͳ' ,$iBadlz);
  	 $iBadlz = str_replace('y', 'Ỿ' ,$iBadlz);
	 $iBadlz = str_replace('u', 'Ʊ' ,$iBadlz);
  	 $iBadlz = str_replace('i', 'ị' ,$iBadlz);
	 $iBadlz = str_replace('o', 'Ỗ' ,$iBadlz);
  	 $iBadlz = str_replace('p', 'Ꝓ' ,$iBadlz);
	 $iBadlz = str_replace('a', 'Λ' ,$iBadlz);
  	 $iBadlz = str_replace('s', 'Ṥ' ,$iBadlz);
	 $iBadlz = str_replace('d', 'δ' ,$iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' ,$iBadlz);
	 $iBadlz = str_replace('g', '₲' ,$iBadlz);
  	 $iBadlz = str_replace('h', 'Ḩ' ,$iBadlz);
	 $iBadlz = str_replace('j', 'Ĵ' ,$iBadlz);
  	 $iBadlz = str_replace('k', 'Ҡ' ,$iBadlz);
	 $iBadlz = str_replace('l', 'Ⱡ' ,$iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' ,$iBadlz);
	 $iBadlz = str_replace('x', 'Ӿ' ,$iBadlz);
  	 $iBadlz = str_replace('c', 'Ƈ' ,$iBadlz);
	 $iBadlz = str_replace('v', 'Ѵ' ,$iBadlz);
  	 $iBadlz = str_replace('b', 'ß' ,$iBadlz);
  	 $iBadlz = str_replace('n', 'ⴂ' ,$iBadlz);
	 $iBadlz = str_replace('m', 'ⴅ' ,$iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','ﭜ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz); 
$iBadlz = str_replace('ث','ﭦ',$iBadlz); 
$iBadlz = str_replace('ت','ﭠ',$iBadlz); 
$iBadlz = str_replace('ح','ڂ',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','ﮃ',$iBadlz); 
$iBadlz = str_replace('ذ','ڎ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̭͠ ',$iBadlz); 
$iBadlz = str_replace('ش','شَ',$iBadlz); 
$iBadlz = str_replace('ص','ڝ',$iBadlz); 
$iBadlz = str_replace('ض','ڞ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ڟ',$iBadlz); 
$iBadlz = str_replace('ع','؏',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̐ ',$iBadlz); 
$iBadlz = str_replace('ف','ڤ',$iBadlz); 
$iBadlz = str_replace('ق','ڦ',$iBadlz); 
$iBadlz = str_replace('ك','ڳ',$iBadlz); 
$iBadlz = str_replace('ل','لَ',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ڻ',$iBadlz);  
$iBadlz = str_replace('ه','هـﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','يِّ',$iBadlz); 

$iBadlz = str_replace('q', 'Ǫ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Ш' , $iBadlz);
	 $iBadlz = str_replace('e', 'Ξ' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Я' , $iBadlz);
	 $iBadlz = str_replace('t', '₮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'Џ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ǚ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ł' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ф' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ק' , $iBadlz);
	 $iBadlz = str_replace('a', 'Λ' , $iBadlz);
  	 $iBadlz = str_replace('s', 'Ŝ' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Ŧ' , $iBadlz);
	 $iBadlz = str_replace('g', '₲' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Ḧ' , $iBadlz);
	 $iBadlz = str_replace('j', 'J' , $iBadlz);
  	 $iBadlz = str_replace('k', 'К' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ł' , $iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' , $iBadlz);
	 $iBadlz = str_replace('x', 'Ж' , $iBadlz);
  	 $iBadlz = str_replace('c', 'Ͼ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Ṽ' , $iBadlz);
  	 $iBadlz = str_replace('b', 'Б' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Л' , $iBadlz);
	 $iBadlz = str_replace('m', 'Ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
   }
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = str_replace('ا','آ̀',$text); 
$iBadlz = str_replace('ب','ب',$iBadlz); 
$iBadlz = str_replace('ت','ت',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','ج',$iBadlz);  
$iBadlz = str_replace('ح','ح̀',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','د̀',$iBadlz); 
$iBadlz = str_replace('ذ','ذ̀',$iBadlz); 
$iBadlz = str_replace('ر','ر̀',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س̀́',$iBadlz); 
$iBadlz = str_replace('ش','ش̀́',$iBadlz); 
$iBadlz = str_replace('ص','ص̀́',$iBadlz); 
$iBadlz = str_replace('ض','ض',$iBadlz); 
$iBadlz = str_replace('ط','ط̀́',$iBadlz); 
$iBadlz = str_replace('ظ','ظ̀́',$iBadlz); 
$iBadlz = str_replace('ع','ع̀́',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف̀',$iBadlz); 
$iBadlz = str_replace('ق','ق̀',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','م̀',$iBadlz); 
$iBadlz = str_replace('ن','ن̀',$iBadlz);  
$iBadlz = str_replace('ه','ه̀',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'ⓐ', $iBadlz);
$iBadlz = str_replace('b', 'ⓑ', $iBadlz);
$iBadlz = str_replace('c', '©', $iBadlz);
$iBadlz = str_replace('d', 'ⓓ', $iBadlz);
$iBadlz = str_replace('e', 'ⓔ', $iBadlz);
$iBadlz = str_replace('f', 'ⓕ', $iBadlz);
$iBadlz = str_replace('g', 'ⓖ', $iBadlz);
$iBadlz = str_replace('h', 'ⓗ', $iBadlz);
$iBadlz = str_replace('i', 'ⓘ', $iBadlz);
$iBadlz = str_replace('j', 'ⓙ', $iBadlz);
$iBadlz = str_replace('k', 'ⓚ', $iBadlz);
$iBadlz = str_replace('l', 'ⓛ', $iBadlz);
$iBadlz = str_replace('m', 'ⓜ', $iBadlz);
$iBadlz = str_replace('n', 'ⓝ', $iBadlz);
$iBadlz = str_replace('o', 'ⓞ', $iBadlz);
$iBadlz = str_replace('p', 'ⓟ', $iBadlz);
$iBadlz = str_replace('q', 'ⓠ', $iBadlz);
$iBadlz = str_replace('r', 'ⓡ', $iBadlz);
$iBadlz = str_replace('s', 'ⓢ', $iBadlz);
$iBadlz = str_replace('t', 'ⓣ', $iBadlz);
$iBadlz = str_replace('u', 'ⓤ', $iBadlz);
$iBadlz = str_replace('v', 'ⓥ', $iBadlz);
$iBadlz = str_replace('w', 'ⓦ', $iBadlz);
$iBadlz = str_replace('x', 'ⓧ', $iBadlz);
$iBadlz = str_replace('y', 'ⓨ', $iBadlz);
$iBadlz = str_replace('z', 'ⓩ', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $iBadlz = $text;
$iBadlz = str_replace('a','⎛α⎞',$iBadlz); 
$iBadlz = str_replace('b','⎛в⎞',$iBadlz); 
$iBadlz = str_replace('c','⎛c⎞',$iBadlz); 
$iBadlz = str_replace('d','⎛ɒ⎞',$iBadlz); 
$iBadlz = str_replace('e','⎛є⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛f⎞',$iBadlz); 
$iBadlz = str_replace('g','⎛ɢ⎞',$iBadlz); 
$iBadlz = str_replace('h','⎛н⎞',$iBadlz); 
$iBadlz = str_replace('i','⎛ɪ⎞',$iBadlz); 
$iBadlz = str_replace('j','⎛ᴊ⎞',$iBadlz); 
$iBadlz = str_replace('s','⎛ĸ⎞',$iBadlz); 
$iBadlz = str_replace('l','⎛ℓ⎞',$iBadlz); 
$iBadlz = str_replace('m','⎛м⎞',$iBadlz); 
$iBadlz = str_replace('n','⎛и⎞',$iBadlz); 
$iBadlz = str_replace('o','⎛σ⎞',$iBadlz); 
$iBadlz = str_replace('p','⎛ρ⎞',$iBadlz); 
$iBadlz = str_replace('q','⎛q⎞',$iBadlz); 
$iBadlz = str_replace('r','⎛я⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛s⎞',$iBadlz); 
$iBadlz = str_replace('t','⎛τ⎞ ',$iBadlz); 
$iBadlz = str_replace('u','⎛υ⎞ ',$iBadlz); 
$iBadlz = str_replace('v','⎛v⎞',$iBadlz); 
$iBadlz = str_replace('w','⎛ω⎞',$iBadlz); 
$iBadlz = str_replace('x','⎛x⎞',$iBadlz); 
$iBadlz = str_replace('y','⎛y⎞',$iBadlz); 
$iBadlz = str_replace('z','⎛z⎞',$iBadlz); 
 
$iBadlz = str_replace('ض','ضِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ص','صِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ث','ثِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ق','قِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ف','فِٰ͒ـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('غ','غِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ع','عِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ه','ۿۿہ',$iBadlz); 
$iBadlz = str_replace('خ','خِٰ̐ـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ح','حِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ج','جِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ش','شِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('س','سِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ي','يِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ب','بِٰـِﮧۢ',$iBadlz);
$iBadlz = str_replace('ل','لِٰـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('ا','آ',$iBadlz); 
$iBadlz = str_replace('ت','تِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ن','نِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('م','مِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ك','ڪِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ة','ةً',$iBadlz); 
$iBadlz = str_replace('ء','ء',$iBadlz); 
$iBadlz = str_replace('ظ','ظِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ط','طِٰـﮧِۢ',$iBadlz); 
 $iBadlz = str_replace('ذ','ذٰ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('ر','رٰ',$iBadlz); 
$iBadlz = str_replace('و','ﯛ̲୭',$iBadlz); 
 $iBadlz = str_replace('ى','ىٍ',$iBadlz);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$iBadlz."".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "[̲̅q̲̅]", $k);
$k = str_replace("w", "[̲̅w̲̅]", $k);
$k = str_replace("e", "[̲̅є̲̅]", $k);
$k = str_replace("r", "[̲̅я̲̅]", $k);
$k = str_replace("t", "[̲̅т̲̅]", $k);
$k = str_replace("y", "[̲̅y̲̅]", $k);
$k = str_replace("u", "[̲̅υ̲̅]", $k);
$k = str_replace("i", "[̲̅i̲̅]", $k);
$k = str_replace("o", "[̲̅σ̲̅]", $k);
$k = str_replace("p", "[̲̅ρ̲̅]", $k);
$k = str_replace("a", "[̲̅α̲̅]", $k);
$k = str_replace("s", "[̲̅s̲̅]", $k);
$k = str_replace("d", "[̲̅d̲̅]", $k);
$k = str_replace("f", "[̲̅f̲̅]", $k);
$k = str_replace("g", "[̲̅g̲̅]", $k);
$k = str_replace("h", "[̲̅н̲̅]", $k);
$k = str_replace("j", "[̲̅j̲̅]", $k);
$k = str_replace("k", "[̲̅k̲̅]", $k);
$k = str_replace("l", "[̲̅l̲̅]", $k);
$k = str_replace("z", "[̲̅z̲̅]", $k);
$k = str_replace("x", "[̲̅x̲̅]", $k);
$k = str_replace("c", "[̲̅c̲̅]", $k);
$k = str_replace("v", "[̲̅v̲̅]", $k);
$k = str_replace("b", "[̲̅b̲̅]", $k);
$k = str_replace("n", "[̲̅и̲̅]", $k);
$k = str_replace("m", "[̲̅м̲̅]", $k);

$k = str_replace('ض', 'ضِـٰٚـِْ✮ِـٰٚـِْ', $text);
   $k = str_replace('ص', 'صِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ث', 'ثِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ق', 'قِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ف', 'فِ͒ـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('غ', 'غِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ع', 'عِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('خ', 'خِ̐ـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ح', 'حِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ج', 'جِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ش', 'شِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('س', 'سِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ي', 'يِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ب', 'بِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ن', 'نِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('م', 'مِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ك', 'ڪِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ط', 'طِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ذ', 'ذِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
$k = $text;
   $k = str_replace('ض', 'ضٰـہٰٖ', $k);
   $k = str_replace('ص', 'صٰـہٰٖ', $k);
   $k = str_replace('ث', 'ثٰـہٰٖ', $k);
   $k = str_replace('ق', 'قٰـہٰٖ', $k);
   $k = str_replace('ف', 'فٰـہٰٖ', $k);
   $k = str_replace('غ', 'غٰـہٰٖ', $k);
   $k = str_replace('خ', 'خٰـہٰٖ', $k);
   $k = str_replace('ح', 'حٰـہٰٖ', $k);
   $k = str_replace('ج', 'جٰـہٰٖ', $k);
   $k = str_replace('ش', 'شٰـہٰٖ', $k);
   $k = str_replace('س', 'سٰـہٰٖ', $k);
   $k = str_replace('ي', 'يٰـہٰٖ', $k);
   $k = str_replace('ب', 'بٰـہٰٖ', $k);
   $k = str_replace('ل', 'لـہٰٖ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تٰـہٰٖ', $k);
   $k = str_replace('ن', 'نٰـہٰٖ', $k);
   $k = str_replace('م', 'مٰـہٰٖ', $k);
   $k = str_replace('ك', 'كٰـہٰٖ', $k);
   $k = str_replace('ط', 'طٰـہٰٖ', $k);
   $k = str_replace('ظ', 'ظٰـہٰٖ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);

$k = str_replace('a', 'ᴀ', $k);
$k = str_replace('b', 'ʙ', $k);
$k = str_replace('c', 'ᴄ', $k);
$k = str_replace('d', 'ᴅ', $k);
$k = str_replace('e', 'ᴇ', $k);
$k = str_replace('f', 'ғ', $k);
$k = str_replace('g', 'ɢ', $k);
$k = str_replace('h', 'ʜ', $k);
$k = str_replace('i', 'ɪ', $k);
$k = str_replace('j', 'ᴊ', $k);
$k = str_replace('k', 'ᴋ', $k);
$k = str_replace('l', 'ʟ', $k);
$k = str_replace('m', 'ᴍ', $k);
$k = str_replace('n', 'ɴ', $k);
$k = str_replace('o', 'ᴏ', $k);
$k = str_replace('p', 'ᴘ', $k);
$k = str_replace('q', 'ǫ', $k);
$k = str_replace('r', 'ʀ', $k);
$k = str_replace('s', 's', $k);
$k = str_replace('t', 'ᴛ', $k);
$k = str_replace('u', 'ᴜ', $k);
$k = str_replace('v', 'ᴠ', $k);
$k = str_replace('w', 'ᴡ', $k);
$k = str_replace('x', 'x', $k);
$k = str_replace('y', 'ʏ', $k);
$k = str_replace('z', 'ᴢ', $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
$k = $text;
$k = str_replace("q", "ⓠ", $k);
$k = str_replace("w", "ⓦ", $k);
$k = str_replace("e", "ⓔ", $k);
$k = str_replace("r", "ⓡ", $k);
$k = str_replace("t", "ⓣ", $k);
$k = str_replace("y", "ⓨ", $k);
$k = str_replace("u", "ⓤ", $k);
$k = str_replace("i", "ⓘ", $k);
$k = str_replace("o", "ⓞ", $k);
$k = str_replace("p", "ⓟ", $k);
$k = str_replace("a", "ⓐ", $k);
$k = str_replace("s", "ⓢ", $k);
$k = str_replace("d", "ⓓ", $k);
$k = str_replace("f", "ⓕ", $k);
$k = str_replace("g", "ⓖ", $k);
$k = str_replace("h", "ⓗ", $k);
$k = str_replace("j", "ⓙ", $k);
$k = str_replace("k", "ⓚ", $k);
$k = str_replace("l", "ⓛ", $k);
$k = str_replace("z", "ⓩ", $k);
$k = str_replace("x", "ⓧ", $k);
$k = str_replace("c", "ⓒ", $k);
$k = str_replace("v", "ⓥ", $k);
$k = str_replace("b", "ⓑ", $k);
$k = str_replace("n", "ⓝ", $k);
$k = str_replace("m", "ⓜ", $k);

$k = str_replace('ض', 'ض͜ــ๋͜ـ', $k);
   $k = str_replace('ص', 'ص͜ــ๋͜ـ', $k);
   $k = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $k);
   $k = str_replace('ق', 'ق͜ــ๋͜ـ', $k);
   $k = str_replace('ف', 'ف͒͜ــ๋͜ـ', $k);
   $k = str_replace('غ', 'غ͜ــ๋͜ـ', $k);
   $k = str_replace('ع', 'ع͜ــ๋͜ـ', $k);
   $k = str_replace('خ', 'خ̐͜ــ๋͜ـ', $k);
   $k = str_replace('ح', 'ح͜ــ๋͜ـ', $k);
   $k = str_replace('ج', 'ج͜ــ๋͜ـ', $k);
   $k = str_replace('ش', 'ش͜ــ๋͜ـ', $k);
   $k = str_replace('س', 'س͜ــ๋͜ـ', $k);
   $k = str_replace('ي', 'ي͜ــ๋͜ـ', $k);
   $k = str_replace('ب', 'ب͜ــ๋͜ـ', $k);
   $k = str_replace('ل', 'ل͜ــ๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت͜ــ๋͜ـ', $k);
   $k = str_replace('ن', 'ن͜ــ๋͜ـ', $k);
   $k = str_replace('م', 'م͜ــ๋͜ـ', $k);
   $k = str_replace('ك', 'ڪ͜ــ๋͜ـ', $k);
   $k = str_replace('ط', 'ط͜ــ๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ͜ــ๋͜ـ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظــ๋͜ـ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "๖ۣۜQ", $k);
$k = str_replace("w", "๖ۣۜW", $k);
$k = str_replace("e", "๖ۣۜE", $k);
$k = str_replace("r", "๖ۣۜR", $k);
$k = str_replace("t", "๖ۣۜT", $k);
$k = str_replace("y", "๖ۣۜY", $k);
$k = str_replace("u", "๖ۣۜU", $k);
$k = str_replace("i", "๖ۣۜI", $k);
$k = str_replace("o", "๖ۣۜO", $k);
$k = str_replace("p", "๖ۣۜP", $k);
$k = str_replace("a", "๖ۣۜA", $k);
$k = str_replace("s", "๖ۣۜS", $k);
$k = str_replace("d", "๖ۣۜD", $k);
$k = str_replace("f", "๖ۣۜF", $k);
$k = str_replace("g", "๖ۣۜG", $k);
$k = str_replace("h", "๖ۣۜH", $k);
$k = str_replace("j", "๖ۣۜJ", $k);
$k = str_replace("k", "๖ۣۜK", $k);
$k = str_replace("l", "๖ۣۜL", $k);
$k = str_replace("z", "๖ۣۜZ", $k);
$k = str_replace("x", "๖ۣۜX", $k);
$k = str_replace("c", "๖ۣۜC", $k);
$k = str_replace("v", "๖ۣۜV", $k);
$k = str_replace("b", "๖ۣۜB", $k);
$k = str_replace("n", "๖ۣۜN", $k);
$k = str_replace("m", "๖ۣۜM", $k);

$k = str_replace('ض', 'ضِـೋـ', $k);
   $k = str_replace('ص', 'صِـೋـ', $k);
   $k = str_replace('ث', 'ثِـೋـ', $k);
   $k = str_replace('ق', 'قِـೋـ', $k);
   $k = str_replace('ف', 'فِ͒ـೋـ', $k);
   $k = str_replace('غ', 'غِـೋـ', $k);
   $k = str_replace('ع', 'عِـೋـ', $k);
   $k = str_replace('خ', 'خِ̐ـೋـ', $k);
   $k = str_replace('ح', 'حِـೋـ', $k);
   $k = str_replace('ج', 'جِـೋـ', $k);
   $k = str_replace('ش', 'شِـೋـ', $k);
   $k = str_replace('س', 'سِـೋـ', $k);
   $k = str_replace('ي', 'يِـೋـ', $k);
   $k = str_replace('ب', 'بِـೋـ', $k);
   $k = str_replace('ل', 'لِـೋـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِـೋـ', $k);
   $k = str_replace('ن', 'نِـೋـ', $k);
   $k = str_replace('م', 'مِـೋـ', $k);
   $k = str_replace('ك', 'ڪِـೋـ', $k);
   $k = str_replace('ط', 'طِـೋـ', $k);
   $k = str_replace('ظ', 'ظِـೋـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
 $k = $text;
   $k = str_replace('ض', 'ض͜ــ๋͜ـ', $k);
   $k = str_replace('ص', 'ص͜ــ๋͜ـ', $k);
   $k = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $k);
   $k = str_replace('ق', 'ق͜ــ๋͜ـ', $k);
   $k = str_replace('ف', 'ف͒͜ــ๋͜ـ', $k);
   $k = str_replace('غ', 'غ͜ــ๋͜ـ', $k);
   $k = str_replace('ع', 'ع͜ــ๋͜ـ', $k);
   $k = str_replace('خ', 'خ̐͜ــ๋͜ـ', $k);
   $k = str_replace('ح', 'ح͜ــ๋͜ـ', $k);
   $k = str_replace('ج', 'ج͜ــ๋͜ـ', $k);
   $k = str_replace('ش', 'ش͜ــ๋͜ـ', $k);
   $k = str_replace('س', 'س͜ــ๋͜ـ', $k);
   $k = str_replace('ي', 'ي͜ــ๋͜ـ', $k);
   $k = str_replace('ب', 'ب͜ــ๋͜ـ', $k);
   $k = str_replace('ل', 'ل͜ــ๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت͜ــ๋͜ـ', $k);
   $k = str_replace('ن', 'ن͜ــ๋͜ـ', $k);
   $k = str_replace('م', 'م͜ــ๋͜ـ', $k);
   $k = str_replace('ك', 'ڪ͜ــ๋͜ـ', $k);
   $k = str_replace('ط', 'ط͜ــ๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ͜ــ๋͜ـ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظــ๋͜ـ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);

$k = str_replace('a', 'A꯭', $k);
$k = str_replace('b', 'B꯭', $k);
$k = str_replace('c', 'C꯭', $k);
$k = str_replace('d', 'D꯭', $k);
$k = str_replace('e', 'E꯭', $k);
$k = str_replace('f', 'F꯭', $k);
$k = str_replace('g', 'G꯭', $k);
$k = str_replace('h', 'H꯭', $k);
$k = str_replace('i', 'I꯭', $k);
$k = str_replace('j', 'J꯭', $k);
$k = str_replace('k', 'K꯭', $k);
$k = str_replace('l', 'L꯭', $k);
$k = str_replace('m', 'M꯭', $k);
$k = str_replace('n', 'N꯭', $k);
$k = str_replace('o', 'O꯭', $k);
$k = str_replace('p', 'P꯭', $k);
$k = str_replace('q', 'Q꯭', $k);
$k = str_replace('r', 'R꯭', $k);
$k = str_replace('s', 'S꯭', $k);
$k = str_replace('t', 'T꯭', $k);
$k = str_replace('u', 'U꯭', $k);
$k = str_replace('v', 'V꯭', $k);
$k = str_replace('w', 'W꯭', $k);
$k = str_replace('x', 'X꯭', $k);
$k = str_replace('y', 'Y꯭', $k);
$k = str_replace('z', 'Z꯭', $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "ℚ", $k);
$k = str_replace("w", "Ꮗ", $k);
$k = str_replace("e", "ℰ", $k);
$k = str_replace("r", "ℛ", $k);
$k = str_replace("t", "Ꮖ", $k);
$k = str_replace("y", "Ꮍ", $k);
$k = str_replace("u", "Ū", $k);
$k = str_replace("i", "ℐ", $k);
$k = str_replace("o", "Ꮎ", $k);
$k = str_replace("p", "ℙ", $k);
$k = str_replace("a", "Ꭿ", $k);
$k = str_replace("s", "Ѕ", $k);
$k = str_replace("d", "ⅅ", $k);
$k = str_replace("f", "ℱ", $k);
$k = str_replace("g", "Ꮆ", $k);
$k = str_replace("h", "ℋ", $k);
$k = str_replace("j", "Ꭻ", $k);
$k = str_replace("k", "Ꮶ", $k);
$k = str_replace("l", "ℒ", $k);
$k = str_replace("z", "ℤ", $k);
$k = str_replace("x", "X", $k);
$k = str_replace("c", "ℂ", $k);
$k = str_replace("v", "Ꮙ", $k);
$k = str_replace("b", "ℬ", $k);
$k = str_replace("n", "ℕ", $k);
$k = str_replace("m", "ℳ", $k);

$k = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $k = str_replace('ص', 'صـ๋͜‏ـ', $k);
   $k = str_replace('ث', 'ثـ๋͜‏ـ', $k);
   $k = str_replace('ق', 'قـ๋͜‏ـ', $k);
   $k = str_replace('ف', 'ف͒ـ๋͜‏ـ', $k);
   $k = str_replace('غ', 'غـ๋͜‏ـ', $k);
   $k = str_replace('ع', 'عـ๋͜‏ـ', $k);
   $k = str_replace('خ', 'خ̐ـ๋͜‏ـ', $k);
   $k = str_replace('ح', 'حـ๋͜‏ـ', $k);
   $k = str_replace('ج', 'جـ๋͜‏ـ', $k);
   $k = str_replace('ش', 'شـ๋͜‏ـ', $k);
   $k = str_replace('س', 'سـ๋͜‏ـ', $k);
   $k = str_replace('ي', 'يـ๋͜‏ـ', $k);
   $k = str_replace('ب', 'بـ๋͜‏ـ', $k);
   $k = str_replace('ل', 'لـ๋͜‏ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تـ๋͜‏ـ', $k);
   $k = str_replace('ن', 'نـ๋͜‏ـ', $k);
   $k = str_replace('م', 'مـ๋͜‏ـ', $k);
   $k = str_replace('ك', 'ڪـ๋͜‏ـ', $k);
   $k = str_replace('ط', 'طـ๋͜‏ـ', $k);
   $k = str_replace('ظ', 'ظـ๋͜‏ـ', $k);
$k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "ǫ", $k);
$k = str_replace("w", "ω", $k);
$k = str_replace("e", "૯", $k);
$k = str_replace("r", "ʀ", $k);
$k = str_replace("t", "τ", $k);
$k = str_replace("y", "ყ", $k);
$k = str_replace("u", "υ", $k);
$k = str_replace("i", "เ", $k);
$k = str_replace("o", "๏", $k);
$k = str_replace("p", "ρ", $k);
$k = str_replace("a", "Δ", $k);
$k = str_replace("s", "ઽ", $k);
$k = str_replace("d", "ᴅ", $k);
$k = str_replace("f", "ƒ", $k);
$k = str_replace("g", "ɢ", $k);
$k = str_replace("h", "み", $k);
$k = str_replace("j", "ʝ", $k);
$k = str_replace("k", "ҡ", $k);
$k = str_replace("l", "ɭ", $k);
$k = str_replace("z", "ʑ", $k);
$k = str_replace("x", "ﾒ", $k);
$k = str_replace("c", "૮", $k);
$k = str_replace("v", "ѵ", $k);
$k = str_replace("b", "β", $k);
$k = str_replace("n", "ท", $k);
$k = str_replace("m", "ണ", $k);

$k = str_replace('ض', 'ضِٰـِۢ', $k);
   $k = str_replace('ص', 'صِٰـِۢ', $k);
   $k = str_replace('ث', 'ثِٰـِۢ', $k);
   $k = str_replace('ق', 'قِٰـِۢ', $k);
   $k = str_replace('ف', 'فِٰ͒ـِۢ', $k);
   $k = str_replace('غ', 'غِٰـِۢ', $k);
   $k = str_replace('ع', 'عِٰـِۢ', $k);
   $k = str_replace('خ', 'خِٰ̐ـِۢ', $k);
   $k = str_replace('ح', 'حِٰـِۢ', $k);
   $k = str_replace('ج', 'جِٰـِۢ', $k);
   $k = str_replace('ش', 'شِٰـِۢ', $k);
   $k = str_replace('س', 'سِٰـِۢ', $k);
   $k = str_replace('ي', 'يِٰـِۢ', $k);
   $k = str_replace('ب', 'بِٰـِۢ', $k);
   $k = str_replace('ل', 'لِٰـِۢ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِٰـِۢ', $k);
   $k = str_replace('ن', 'نِٰـِۢ', $k);
   $k = str_replace('م', 'مِٰـِۢ', $k);
   $k = str_replace('ك', 'ڪِٰـِۢ', $k);
   $k = str_replace('ط', 'طِٰـِۢ', $k);
   $k = str_replace('ظ', 'ظِٰـِۢ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "℺", $k);
$k = str_replace("w", "Ꮤ", $k);
$k = str_replace("e", "Ｅ", $k);
$k = str_replace("r", "Ꮢ", $k);
$k = str_replace("t", "Ƭ", $k);
$k = str_replace("y", "ɣ", $k);
$k = str_replace("u", "ᵿ", $k);
$k = str_replace("i", "Ｉ", $k);
$k = str_replace("o", "σ", $k);
$k = str_replace("p", "Ꝑ", $k);
$k = str_replace("a", "ᗩ", $k);
$k = str_replace("s", "₷", $k);
$k = str_replace("d", "Ɗ", $k);
$k = str_replace("f", "Բ", $k);
$k = str_replace("g", "Ｇ", $k);
$k = str_replace("h", "ⴼ", $k);
$k = str_replace("j", "Ј", $k);
$k = str_replace("k", "₭", $k);
$k = str_replace("l", "Ł", $k);
$k = str_replace("z", "Ꙃ", $k);
$k = str_replace("x", "χ", $k);
$k = str_replace("c", "Ｃ", $k);
$k = str_replace("v", "ѵ", $k);
$k = str_replace("b", "β", $k);
$k = str_replace("n", "Ŋ", $k);
$k = str_replace("m", "ᗰ", $k);

$k = str_replace('ض', 'ضِٰـۛৣـ', $k);
   $k = str_replace('ص', 'صِٰـۛৣـ', $k);
   $k = str_replace('ث', 'ثِٰـۛৣـ', $k);
   $k = str_replace('ق', 'قِٰـۛৣـ', $k);
   $k = str_replace('ف', 'فِٰ͒ـۛৣـ', $k);
   $k = str_replace('غ', 'غِٰـۛৣـ', $k);
   $k = str_replace('ع', 'عِٰـۛৣـ', $k);
   $k = str_replace('خ', 'خِٰ̐ـۛৣـ', $k);
   $k = str_replace('ح', 'حِٰـۛৣـ', $k);
   $k = str_replace('ج', 'جِٰـۛৣـ', $k);
   $k = str_replace('ش', 'شِٰـۛৣـ', $k);
   $k = str_replace('س', 'سِٰـۛৣـ', $k);
   $k = str_replace('ي', 'يِٰـۛৣـ', $k);
   $k = str_replace('ب', 'بِٰـۛৣـ', $k);
   $k = str_replace('ل', 'لِٰـۛৣـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِٰـۛৣـ', $k);
   $k = str_replace('ن', 'نِٰـۛৣـ', $k);
   $k = str_replace('م', 'مِٰـۛৣـ', $k);
   $k = str_replace('ك', 'ڪِٰـۛৣـ', $k);
   $k = str_replace('ط', 'طِٰـۛৣـ', $k);
   $k = str_replace('ظ', 'ظِٰـۛৣـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "░q░", $k);
$k = str_replace("w", "░w░", $k);
$k = str_replace("e", "░e░", $k);
$k = str_replace("r", "░r░", $k);
$k = str_replace("t", "░t░", $k);
$k = str_replace("y", "░y░", $k);
$k = str_replace("u", "░u░", $k);
$k = str_replace("i", "░i░", $k);
$k = str_replace("o", "░o░", $k);
$k = str_replace("p", "░p░", $k);
$k = str_replace("a", "░a░", $k);
$k = str_replace("s", "░s░", $k);
$k = str_replace("d", "░d░", $k);
$k = str_replace("f", "░f░", $k);
$k = str_replace("g", "░g░", $k);
$k = str_replace("h", "░h░", $k);
$k = str_replace("j", "░j░", $k);
$k = str_replace("k", "░k░", $k);
$k = str_replace("l", "░l░", $k);
$k = str_replace("z", "░z░", $k);
$k = str_replace("x", "░x░", $k);
$k = str_replace("c", "░c░", $k);
$k = str_replace("v", "░v░", $k);
$k = str_replace("b", "░b░", $k);
$k = str_replace("n", "░n░", $k);
$k = str_replace("m", "░m░", $k);

$k = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "ᑫ", $k);
$k = str_replace("w", "ᗯ", $k);
$k = str_replace("e", "E", $k);
$k = str_replace("r", "ᖇ", $k);
$k = str_replace("t", "T", $k);
$k = str_replace("y", "Y", $k);
$k = str_replace("u", "ᑌ", $k);
$k = str_replace("i", "I", $k);
$k = str_replace("o", "O", $k);
$k = str_replace("p", "ᑭ", $k);
$k = str_replace("a", "ᗩ", $k);
$k = str_replace("s", "ᔕ", $k);
$k = str_replace("d", "ᗪ", $k);
$k = str_replace("f", "ᖴ", $k);
$k = str_replace("g", "G", $k);
$k = str_replace("h", "ᕼ", $k);
$k = str_replace("j", "ᒍ", $k);
$k = str_replace("k", "K", $k);
$k = str_replace("l", "ᒪ", $k);
$k = str_replace("z", "ᘔ", $k);
$k = str_replace("x", "᙭", $k);
$k = str_replace("c", "ᑕ", $k);
$k = str_replace("v", "ᐯ", $k);
$k = str_replace("b", "ᗷ", $k);
$k = str_replace("n", "ᑎ", $k);
$k = str_replace("m", "ᗰ", $k);

$k = str_replace('ض', 'ض๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ص', 'ص๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ث', 'ث๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ق', 'ق๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ف', 'ف๋͒͜ـ❀๋͜ـ', $k);
   $k = str_replace('غ', 'غ๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ع', 'ع๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('خ', 'خ๋̐͜ـ❀๋͜ـ', $k);
   $k = str_replace('ح', 'ح๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ج', 'ج๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ش', 'ش๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('س', 'س๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ي', 'ي๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ب', 'ب๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ل', 'ل๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ن', 'ن๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('م', 'م๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ك', 'ڪ๋͜ـ❀๋͜ـ', $k);


   $k = str_replace('ط', 'ط๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ๋͜ـ❀๋͜ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "Ꭴ", $k);
$k = str_replace("w", "Ꮗ", $k);
$k = str_replace("e", "Ꮛ", $k);
$k = str_replace("r", "Ꮢ", $k);
$k = str_replace("t", "Ꮦ", $k);
$k = str_replace("y", "Ꭹ", $k);
$k = str_replace("u", "Ꮼ", $k);
$k = str_replace("i", "Ꭵ", $k);
$k = str_replace("o", "Ꭷ", $k);
$k = str_replace("p", "Ꭾ", $k);
$k = str_replace("a", "Ꮧ", $k);
$k = str_replace("s", "Ꭶ", $k);
$k = str_replace("d", "Ꮄ", $k);
$k = str_replace("f", "₣", $k);
$k = str_replace("g", "Ꮆ", $k);
$k = str_replace("h", "Ꮒ", $k);
$k = str_replace("j", "Ꮰ", $k);
$k = str_replace("k", "Ꮶ", $k);
$k = str_replace("l", "Ꮭ", $k);
$k = str_replace("z", "ፚ", $k);
$k = str_replace("x", "ጀ", $k);
$k = str_replace("c", "ፈ", $k);
$k = str_replace("v", "Ꮙ", $k);
$k = str_replace("b", "Ᏸ", $k);
$k = str_replace("n", "Ꮑ", $k);
$k = str_replace("m", "Ꮇ", $k);

 $k = str_replace('ض', 'ضـۘ❈ـۘ', $k);
   $k = str_replace('ص', 'صـۘ❈ـۘ', $k);
   $k = str_replace('ث', 'ثـۘ❈ـۘ', $k);
   $k = str_replace('ق', 'قـۘ❈ـۘ', $k);
   $k = str_replace('ف', 'ف͒ـۘ❈ـۘ', $k);
   $k = str_replace('غ', 'غـۘ❈ـۘ', $k);
   $k = str_replace('ع', 'عـۘ❈ـۘ', $k);
   $k = str_replace('خ', 'خ̐ـۘ❈ـۘ', $k);
   $k = str_replace('ح', 'حـۘ❈ـۘ', $k);
   $k = str_replace('ج', 'جـۘ❈ـۘ', $k);
   $k = str_replace('ش', 'شـۘ❈ـۘ', $k);
   $k = str_replace('س', 'سـۘ❈ـۘ', $k);
   $k = str_replace('ي', 'يـۘ❈ـۘ', $k);
   $k = str_replace('ب', 'بـۘ❈ـۘ', $k);
   $k = str_replace('ل', 'لـۘ❈ـۘ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تـۘ❈ـۘ', $k);
   $k = str_replace('ن', 'نـۘ❈ـۘ', $k);
   $k = str_replace('م', 'م', $k);
   $k = str_replace('ك', 'ڪـۘ❈ـۘ', $k);
   $k = str_replace('ط', 'طـۘ❈ـۘ', $k);
   $k = str_replace('ظ', 'ظـۘ❈ـۘ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "ᵠ", $k);
$k = str_replace("w", "ʷ", $k);
$k = str_replace("e", "ᵉ", $k);
$k = str_replace("r", "ʳ", $k);
$k = str_replace("t", "ᵗ", $k);
$k = str_replace("y", "ʸ", $k);
$k = str_replace("u", "ᵘ", $k);
$k = str_replace("i", "ᶤ", $k);
$k = str_replace("o", "ᵒ", $k);
$k = str_replace("p", "ᵖ", $k);
$k = str_replace("a", "ᵃ", $k);
$k = str_replace("s", "ˢ", $k);
$k = str_replace("d", "ᵈ", $k);
$k = str_replace("f", "ᶠ", $k);
$k = str_replace("g", "ᵍ", $k);
$k = str_replace("h", "ʰ", $k);
$k = str_replace("j", "ʲ", $k);
$k = str_replace("k", "ᵏ", $k);
$k = str_replace("l", "ˡ", $k);
$k = str_replace("z", "ᶻ", $k);
$k = str_replace("x", "ˣ", $k);
$k = str_replace("c", "ᶜ", $k);
$k = str_replace("v", "ᵛ", $k);
$k = str_replace("b", "ᵇ", $k);
$k = str_replace("n", "ᶰ", $k);
$k = str_replace("m", "ᵐ", $k);

$k = str_replace('ض', 'ض͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ص', 'ص͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ث', 'ث͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ق', 'ق͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ف', 'ف͒͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('غ', 'غ͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ع', 'ع͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('خ', 'خ̐͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ح', 'ح͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ج', 'ج͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ش', 'ش͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('س', 'س͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ي', 'ي͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ب', 'ب͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ل', 'ل͜ــ๋͜ہ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت͜ــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ن', 'ن͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('م', 'م͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ك', 'ڪ͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ط', 'ط͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ظ', 'ظ͜ــ๋͜ـ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظــ͟͟͞͞ᬼ͟͟͞ـْـٍٍٍْْْْْۘۘ͜͡', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️?? •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "🅠", $k);
$k = str_replace("w", "🅦", $k);
$k = str_replace("e", "🅔", $k);
$k = str_replace("r", "🅡", $k);
$k = str_replace("t", "🅣", $k);
$k = str_replace("y", "🅨", $k);
$k = str_replace("u", "🅤", $k);
$k = str_replace("i", "🅘", $k);
$k = str_replace("o", "🅞", $k);
$k = str_replace("p", "🅟", $k);
$k = str_replace("a", "🅐", $k);
$k = str_replace("s", "🅢", $k);
$k = str_replace("d", "🅓", $k);
$k = str_replace("f", "🅕", $k);
$k = str_replace("g", "🅖", $k);
$k = str_replace("h", "🅗", $k);
$k = str_replace("j", "🅙", $k);
$k = str_replace("k", "🅚", $k);
$k = str_replace("l", "🅛", $k);
$k = str_replace("z", "🅩", $k);
$k = str_replace("x", "🅧", $k);
$k = str_replace("c", "🅒", $k);
$k = str_replace("v", "🅥", $k);
$k = str_replace("b", "🅑", $k);
$k = str_replace("n", "🅝", $k);
$k = str_replace("m", "🅜", $k);

  $k = str_replace('ض', ' ضـٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ', $k);
   $k = str_replace('ص', ' صـٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ث', 'ث๋͜ـٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ـ', $k);
   $k = str_replace('ق', 'ق๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ف', 'ف๋͒͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('غ', 'غ๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ع', 'ع๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ـ', $k);
   $k = str_replace('خ', 'خ๋̐͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜٜٜؐؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ح', 'ح๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ج', 'ج๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ش', 'ش๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ـ', $k);
   $k = str_replace('س', 'س๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ي', 'ي๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ب', 'ب๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ل', 'ل๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت๋͜ـٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ن', 'ن๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜؐ�ٜٜٜٜٜٜـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ـ', $k);
   $k = str_replace('م', 'م๋͜ـٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
$k = str_replace('ك', 'ڪ๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ـ', $k);
   $k = str_replace('ط', 'ط๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ๋͜ــٌٜٜٜٜٜـٜٜٜٜٜٜٜؐٓـٜٜٜٜٜٜٜٜؐـَ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؒؔؓؔـََ۪۪ٜ۪۪۪ٜ۪۪ٜ۪۪ٜ۪۪۪ٜ۪۪ٜؒؔؓؔؒؔؓؔـَ۪۪ٜ۪۪۪ٜ۪۪ٜٓؒؔؓـٜٜٜٜٜٜٜٜؐـٜٜٜٜٜٜٜؐـٜٜٜٜٜٜؐـٜٜٜٜؐ ๋͜ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "q͓̽", $k);
$k = str_replace("w", "w͓̽", $k);
$k = str_replace("e", "e͓̽", $k);
$k = str_replace("r", "r͓̽", $k);
$k = str_replace("t", "t͓̽", $k);
$k = str_replace("y", "y͓̽", $k);
$k = str_replace("u", "u͓̽", $k);
$k = str_replace("i", "i͓̽", $k);
$k = str_replace("o", "o͓̽", $k);
$k = str_replace("p", "p͓̽", $k);
$k = str_replace("a", "a͓̽", $k);
$k = str_replace("s", "s͓̽", $k);
$k = str_replace("d", "d͓̽", $k);
$k = str_replace("f", "f͓̽", $k);
$k = str_replace("g", "g͓̽", $k);
$k = str_replace("h", "h͓̽", $k);
$k = str_replace("j", "j͓̽", $k);
$k = str_replace("k", "k͓̽", $k);
$k = str_replace("l", "l͓̽", $k);
$k = str_replace("z", "z͓̽", $k);
$k = str_replace("x", "x͓̽", $k);
$k = str_replace("c", "c͓̽", $k);
$k = str_replace("v", "v͓̽", $k);
$k = str_replace("b", "b͓̽", $k);
$k = str_replace("n", "n͓̽", $k);
$k = str_replace("m", "m͓̽", $k);

$k = str_replace('ض', 'ضــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ص', 'ص๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ث', 'ث๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ق', 'ق๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ف', 'فـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ف','فــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ع', 'ع๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('خ', 'خ๋̐͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ح', 'ح๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ج', 'ج๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ش', 'ش๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('س', 'س๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ي', 'ي๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ب', 'بــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ل', 'ل๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت๋͜ــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ن', 'ن๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('م', 'م๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ك', 'ڪ๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ط', 'ط๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
   $k = str_replace('ظ', 'ظ๋͜ـــَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـَٰٰٰٖٖٖٖٖ͜͜͜͜͡͡͡͡͡͡͡ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨�?⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
$k = str_replace("q", "Ｑ", $k);
$k = str_replace("w", "Ɯ", $k);
$k = str_replace("e", "Ꭼ", $k);
$k = str_replace("r", "Ʀ", $k);
$k = str_replace("t", "Ƭ", $k);
$k = str_replace("y", "Y҈", $k);
$k = str_replace("u", "ꀎ", $k);
$k = str_replace("i", "ⅈ", $k);
$k = str_replace("o", "Ծ", $k);
$k = str_replace("p", "թ", $k);
$k = str_replace("a", "ᗩ", $k);
$k = str_replace("s", "Տ", $k);
$k = str_replace("d", "ᗞ", $k);
$k = str_replace("f", "Բ", $k);
$k = str_replace("g", "Ꮆ", $k);
$k = str_replace("h", "ɧ", $k);
$k = str_replace("j", "ᒍ", $k);
$k = str_replace("k", "ꀘ", $k);
$k = str_replace("l", "l⃟ ", $k);
$k = str_replace("z", "z", $k);
$k = str_replace("x", "x", $k);
$k = str_replace("c", "ç", $k);
$k = str_replace("v", "v", $k);
$k = str_replace("b", "b", $k);
$k = str_replace("n", "ñ", $k);
$k = str_replace("m", "m", $k);

  $k = str_replace('ض', 'ضـہۣۣۗۗ', $k);
   $k = str_replace('ص', 'ص͜ہۣۣۗۗ', $k);
   $k = str_replace('ث', 'ث͜ـہۣۣۗۗ', $k);
   $k = str_replace('ق', 'ق͜ـہۣۣۗۗ', $k);
   $k = str_replace('ف', 'ف͒͜ـہۣۣۗۗ', $k);
   $k = str_replace('غ', 'غ͜ـہۣۣۗۗ', $k);
   $k = str_replace('ع', 'ع͜ـہۣۣۗۗ', $k);
   $k = str_replace('خ', 'خ̐͜ـہۣۣۗۗ', $k);
   $k = str_replace('ح', 'ح͜ـہۣۣۗۗ', $k);
   $k = str_replace('ج', 'ج͜ـہۣۣۗۗ', $k);
   $k = str_replace('ش', 'ش͜ـہۣۣۗۗ', $k);
   $k = str_replace('س', 'س͜ـہۣۣۗۗ', $k);
   $k = str_replace('ي', 'ي͜ـہۣۣۗۗ', $k);
   $k = str_replace('ب', 'ب͜ـہۣۣۗۗ', $k);
   $k = str_replace('ل', 'ل͜ـہۣۣۗۗ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت͜ـہۣۣۗۗ', $k);
   $k = str_replace('ن', 'ن͜ـہۣۣۗۗ', $k);
   $k = str_replace('م', 'م͜ـہۣۣۗۗ', $k);
   $k = str_replace('ك', 'ڪ͜ـہۣۣۗۗ', $k);
   $k = str_replace('ط', 'ط͜ـہۣۣۗۗ', $k);
   $k = str_replace('ظ', 'ظ͜ـہۣۣۗۗ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظـہۣۣۗۗ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = $text;
   $k = str_replace('ض' ,'ضـ҉', $k);
   $k = str_replace('ص', 'صـ҉', $k);
   $k = str_replace('ث', 'ثـ҉', $k);
   $k = str_replace('ق', 'قـ҉', $k);
   $k = str_replace('ف', 'فـ҉', $k);
   $k = str_replace('غ', 'غـ҉', $k);
   $k = str_replace('ع', 'عـ҉', $k);
   $k = str_replace('خ', 'خـ҉', $k);
   $k = str_replace('ح', 'حـ҉', $k);
   $k = str_replace('ج', 'جـ҉', $k);
   $k = str_replace('ش', 'شـ҉', $k);
   $k = str_replace('س', 'سـ҉', $k);
   $k = str_replace('ي', 'يـ҉', $k);
   $k = str_replace('ب', 'بـ҉', $k);
   $k = str_replace('ل', 'لـ҉', $k);
   $k = str_replace('ا', '҉آ', $k);
   $k = str_replace('ت', 'تـ҉', $k);
   $k = str_replace('ن', 'نـ҉', $k);
   $k = str_replace('م', 'مـ҉', $k);
   $k = str_replace('ك', 'گـ҉', $k);
   $k = str_replace('ط', 'طـ҉', $k);
   $k = str_replace('ظ', 'ظـ҉', $k);
   $k = str_replace('ء', '҉ء', $k);
   $k = str_replace('ؤ', 'ﯛ҉', $k);
   $k = str_replace('ر', '҉ر', $k);
   $k = str_replace('ى', '҉ى', $k);
   $k = str_replace('ز', '҉ز', $k);
   $k = str_replace('ظ', 'ظـ҉', $k);
   $k = str_replace('و', '҉ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿ҉ۿہ", $k);

$k = str_replace('a', 'A҉', $k);
$k = str_replace('b', 'B҉', $k);
$k = str_replace('c', 'C҉', $k);
$k = str_replace('d', 'D҉', $k);
$k = str_replace('e', 'E҉', $k);
$k = str_replace('f', 'F҉', $k);
$k = str_replace('g', 'G҉', $k);
$k = str_replace('h', 'H҉', $k);
$k = str_replace('i', 'I҉', $k);
$k = str_replace('j', 'J҉', $k);
$k = str_replace('k', 'K҉', $k);
$k = str_replace('l', 'L҉', $k);
$k = str_replace('m', 'M҉', $k);
$k = str_replace('n', 'N҉', $k);
$k = str_replace('o', 'O҉', $k);
$k = str_replace('p', 'P҉', $k);
$k = str_replace('q', 'Q҉', $k);
$k = str_replace('r', 'R҉', $k);
$k = str_replace('s', 'S҉', $k);
$k = str_replace('t', 'T҉', $k);
$k = str_replace('u', 'U҉', $k);
$k = str_replace('v', 'V҉', $k);
$k = str_replace('w', 'W҉', $k);
$k = str_replace('x', 'X҉', $k);
$k = str_replace('y', 'Y҉', $k);
$k = str_replace('z', 'Z҉', $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $Ailnoor = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $dev_a1 = array_rand($Ailnoor,1);
  $dev_i1 = $Ailnoor[$dev_a1];
   $count = count($text); 
$dev_i = str_replace('a','ᗩ',$text);
$dev_i = str_replace("b","ᗷ",$dev_i);
$dev_i = str_replace("c","ᑕ",$dev_i);
$dev_i = str_replace("d","ᗪ",$dev_i);
$dev_i = str_replace("e","E",$dev_i);
$dev_i = str_replace("E","E",$dev_i);
$dev_i = str_replace("g","G",$dev_i);
$dev_i = str_replace("h","ᕼ",$dev_i);
$dev_i = str_replace("i","I",$dev_i);
$dev_i = str_replace("j","ᒍ",$dev_i);
$dev_i = str_replace("k","K",$dev_i);
$dev_i = str_replace("l","ᒪ",$dev_i);
$dev_i = str_replace("m","ᗰ",$dev_i);
$dev_i = str_replace("n","ᑎ",$dev_i);
$dev_i = str_replace("o","O",$dev_i);
$dev_i = str_replace("p","ᑭ",$dev_i);
$dev_i = str_replace("q","ᑫ",$dev_i);
$dev_i = str_replace("r","ᖇ",$dev_i);
$dev_i = str_replace("s","ᔕ",$dev_i);
$dev_i = str_replace("t","T",$dev_i);
$dev_i = str_replace("u","ᑌ",$dev_i);
$dev_i = str_replace("v","ᐯ",$dev_i);
$dev_i = str_replace("w","ᗯ",$dev_i);
$dev_i = str_replace("x","᙭",$dev_i);
$dev_i = str_replace("y","Y",$dev_i);
$dev_i = str_replace("z","ᘔ",$dev_i);

$dev_i = str_replace('ض','᎗ᘞ̇',$dev_i); 
$dev_i = str_replace('ص','᎗ᘗ',$dev_i); 
$dev_i = str_replace('ث','᎗̇̈ɹ',$dev_i); 
$dev_i = str_replace('ق','ᓆ',$dev_i); 
$dev_i = str_replace('ف','ᓅ',$dev_i); 
$dev_i = str_replace('غ','᎗ჺ',$dev_i); 
$dev_i = str_replace('ع','᎗ϛ',$dev_i); 
$dev_i = str_replace('ه','᎗බ',$dev_i); 
$dev_i = str_replace('خ','ᓘ',$dev_i); 
$dev_i = str_replace('ح','ᓗ',$dev_i); 
$dev_i = str_replace('ج','ᓗฺ',$dev_i); 
$dev_i = str_replace('ش','᎗ɹ̇̈ɹɹ',$dev_i); 
$dev_i = str_replace('س','᎗ɹɹɹ',$dev_i); 
$dev_i = str_replace('ي','᎗̤ɹ',$dev_i); 
$dev_i = str_replace('ب','᎗̣ɹ',$dev_i);
$dev_i = str_replace('ل','⅃',$dev_i); 
$dev_i = str_replace('ا','Ȋ',$dev_i); 
$dev_i = str_replace('ت','᎗̈ɹ',$dev_i); 
$dev_i = str_replace('ن','᎗̇ɹ',$dev_i); 
$dev_i = str_replace('ܭ','ك',$dev_i); 
$dev_i = str_replace('م','ᓄ',$dev_i); 
$dev_i = str_replace('ة','᎗Ꭷ',$dev_i); 
$dev_i = str_replace('ء','ء',$dev_i); 
$dev_i = str_replace('ظ','᎗̇Ь',$dev_i); 
$dev_i = str_replace('ط','᎗Ь',$dev_i); 
 $dev_i = str_replace('ذ','̇ↄ',$dev_i); 
$dev_i = str_replace('د','ↄ',$dev_i); 
$dev_i = str_replace('ز','j',$dev_i); 
$dev_i = str_replace('ر','ȷ',$dev_i); 
$dev_i = str_replace('و','g',$dev_i); 
 $dev_i = str_replace('ى','ʟɾʅ',$dev_i);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$dev_i."".$dev_i1
   ]);
}

if($text != '/start'and$text!='/us'){
  $Ailnoor = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $dev_a1 = array_rand($Ailnoor,1);
  $dev_i1 = $Ailnoor[$dev_a1];
   $count = count($text); 
$dev_a = str_replace('a','Ꭿ',$text);
$dev_a = str_replace("b","Ᏸ",$dev_a);
$dev_a = str_replace("c","Ꮸ",$dev_a);
$dev_a = str_replace("d","Ꮷ",$dev_a);
$dev_a = str_replace("e","Ꮛ",$dev_a);
$dev_a = str_replace("f","Ꭶ",$dev_a);
$dev_a = str_replace("g","Ᏻ",$dev_a);
$dev_a = str_replace("h","Ᏺ",$dev_a);
$dev_a = str_replace("i","Ꭸ",$dev_a);
$dev_a = str_replace("j","Ꮰ",$dev_a);
$dev_a = str_replace("k","Ꮵ",$dev_a);
$dev_a = str_replace("l","Ꮭ",$dev_a);
$dev_a = str_replace("m","ᗰ",$dev_a);
$dev_a = str_replace("n","Ꮑ",$dev_a);
$dev_a = str_replace("o","Ꭷ",$dev_a);
$dev_a = str_replace("p","Ꭾ",$dev_a);
$dev_a = str_replace("q","Ꮕ",$dev_a);
$dev_a = str_replace("r","ᖇ",$dev_a);
$dev_a = str_replace("s","Ꮥ",$dev_a);
$dev_a = str_replace("t","Ꮱ",$dev_a);
$dev_a = str_replace("u","Ꮼ",$dev_a);
$dev_a = str_replace("v","Ꮙ",$dev_a);
$dev_a = str_replace("w","Ꮗ",$dev_a);
$dev_a = str_replace("x","Ꮂ",$dev_a);
$dev_a = str_replace("y","Ꮍ",$dev_a);
$dev_a = str_replace("z","ᔓ",$dev_a);
                     
$dev_a = str_replace('ض','ضٰہٰٖ',$dev_a);
$dev_a = str_replace('ص','صٰہٰٖ',$dev_a);
$dev_a = str_replace('ث','ثٰہٰٖ',$dev_a);
$dev_a = str_replace('ق','قٰہٰٖ',$dev_a);
$dev_a = str_replace('ف','فٰہٰٖ',$dev_a);
$dev_a = str_replace('غ','غٰہٰٖ',$dev_a);
$dev_a = str_replace('ع','عٰہٰٖ',$dev_a);
$dev_a = str_replace('ه','هٰہٰٖ',$dev_a);
$dev_a = str_replace('خ','خٰہٰٖ',$dev_a);
$dev_a = str_replace('ح','حٰہٰٖ',$dev_a);
$dev_a = str_replace('ج','جٰہٰٖ',$dev_a);
$dev_a = str_replace('ش','شٰہٰٖ',$dev_a);
$dev_a = str_replace('س','سٰہٰٖ',$dev_a);
$dev_a = str_replace('ي','يٰہٰٖ',$dev_a);
$dev_a = str_replace('ب','بٰہٰٖ',$dev_a);
$dev_a = str_replace('ل','لہٰٖ',$dev_a);
$dev_a = str_replace('ا','اٰ',$dev_a);
$dev_a = str_replace('ت','تٰہٰٖ',$dev_a);
$dev_a = str_replace('ن','نٰہٰٖ',$dev_a);
$dev_a = str_replace('م','مٰہٰٖ',$dev_a);
$dev_a = str_replace('ك','كٰہٰٖ',$dev_a);
$dev_a = str_replace('ة','ةً',$dev_a);
$dev_a = str_replace('ء','ء',$dev_a);
$dev_a = str_replace('ظ','ظٰہٰٖ',$dev_a);
$dev_a = str_replace('ط','طٰہٰٖ',$dev_a);
$dev_a = str_replace('ذ','ذٖ',$dev_a);
$dev_a = str_replace('د','دٰ',$dev_a);
$dev_a = str_replace('ز','زٖ',$dev_a);
$dev_a = str_replace('ر','رٰ',$dev_a);
$dev_a = str_replace('و','وٰ',$dev_a);
$dev_a = str_replace('ى','ى',$dev_a);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$dev_a."".$dev_i1
   ]);
}

if($text != '/start'and$text!='/us'){
  $Ailnoor = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $dev_a1 = array_rand($Ailnoor,1);
  $dev_i1 = $Ailnoor[$dev_a1];
   $count = count($text); 
$dev_i = str_replace('a','Ａ',$text);
$dev_i = str_replace("b","Ｂ",$dev_i);
$dev_i = str_replace("c","Ｃ",$dev_i);
$dev_i = str_replace("d","Ｄ",$dev_i);
$dev_i = str_replace("e","Ｅ",$dev_i);
$dev_i = str_replace("E","Ｆ",$dev_i);
$dev_i = str_replace("g","Ｇ",$dev_i);
$dev_i = str_replace("h","Ｈ",$dev_i);
$dev_i = str_replace("i","Ｉ",$dev_i);
$dev_i = str_replace("j","Ｊ",$dev_i);
$dev_i = str_replace("k","Ｋ",$dev_i);
$dev_i = str_replace("l","Ｌ",$dev_i);
$dev_i = str_replace("m","Ｍ",$dev_i);
$dev_i = str_replace("n","Ｎ",$dev_i);
$dev_i = str_replace("o","Ｏ",$dev_i);
$dev_i = str_replace("p","Ｐ",$dev_i);
$dev_i = str_replace("q","Ｑ",$dev_i);
$dev_i = str_replace("r","Ｒ",$dev_i);
$dev_i = str_replace("s","Ｓ",$dev_i);
$dev_i = str_replace("t","Ｔ",$dev_i);
$dev_i = str_replace("u","U",$dev_i);
$dev_i = str_replace("v","Ｖ",$dev_i);
$dev_i = str_replace("w","Ｗ",$dev_i);
$dev_i = str_replace("x","Ｘ",$dev_i);
$dev_i = str_replace("y","Ｙ",$dev_i);
$dev_i = str_replace("z","Ｚ",$dev_i);

$dev_i = str_replace('ع','عٰہٰٖ',$dev_i); 
$dev_i = str_replace('ض','ضٰہٰٖ ',$dev_i); 
$dev_i = str_replace('ص','صٰہٰٖ',$dev_i); 
$dev_i = str_replace('ث','ثٰہٰٖ',$dev_i); 
$dev_i = str_replace('ق','قٰہٰٖ',$dev_i); 
$dev_i = str_replace('ف','فٰہٰٖ',$dev_i); 
$dev_i = str_replace('غ','غٰہٰٖ',$dev_i); 
$dev_i = str_replace('ه','هٰہٰٖ',$dev_i); 
$dev_i = str_replace('خ','خٰہٰٖ',$dev_i); 
$dev_i = str_replace('ح','حٰہٰٖ',$dev_i); 
$dev_i = str_replace('ج','جٰہٰٖ',$dev_i); 
$dev_i = str_replace('ش','شٰہٰٖ',$dev_i); 
$dev_i = str_replace('س','سٰہٰٖ',$dev_i); 
$dev_i = str_replace('ب','بٰہٰٖ',$dev_i); 
$dev_i = str_replace('ي','يٰہٰٖ',$dev_i);
$dev_i = str_replace('ل','لہٰٖ',$dev_i); 
$dev_i = str_replace('ا','اٰ',$dev_i); 
$dev_i = str_replace('ت','تٰہٰٖ',$dev_i); 
$dev_i = str_replace('ن','نٰہٰٖ',$dev_i); 
$dev_i = str_replace('م','مٰہٰٖ',$dev_i); 
$dev_i = str_replace('ك','كٰہٰٖ',$dev_i); 
$dev_i = str_replace('ة','ةً',$dev_i); 
$dev_i = str_replace('ظ','ظٰہٰٖ',$dev_i); 
$dev_i = str_replace('ء','ءِ',$dev_i); 
$dev_i = str_replace('ذ','ذٖ',$dev_i); 
$dev_i = str_replace('ط','طٰہٰٖ',$dev_i); 
$dev_i = str_replace('د','دٰ',$dev_i); 
$dev_i = str_replace('ز','زٰ',$dev_i); 
$dev_i = str_replace('ر','رٰ',$dev_i); 
$dev_i = str_replace('و','وَٰ',$dev_i); 
$dev_i = str_replace('ى','ىٰ',$dev_i); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$dev_i."".$dev_i1
   ]);
}

if($text != '/start'and$text!='/us'){
  $Ailnoor = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤�?﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                           ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇�?🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $dev_a1 = array_rand($Ailnoor,1);
  $dev_i1 = $Ailnoor[$dev_a1];
   $count = count($text); 
$dev_i = str_replace('a','𝗔',$text); 
$dev_i = str_replace("b","𝗕",$dev_i); 
$dev_i = str_replace("c","𝗖",$dev_i); 
$dev_i = str_replace("d","𝗗",$dev_i); 
$dev_i = str_replace("e","𝗘",$dev_i); 
$dev_i = str_replace("f","𝗙",$dev_i); 
$dev_i = str_replace("g","𝗚",$dev_i); 
$dev_i = str_replace("h","𝗛",$dev_i); 
$dev_i = str_replace("i","𝗜",$dev_i); 
$dev_i = str_replace("j","𝗝",$dev_i); 
$dev_i = str_replace("k","𝗞",$dev_i); 
$dev_i = str_replace("l","𝗟",$dev_i); 
$dev_i = str_replace("m","𝗠",$dev_i); 
$dev_i = str_replace("n","𝗡",$dev_i); 
$dev_i = str_replace("o","𝗢",$dev_i); 
$dev_i = str_replace("p","𝗣",$dev_i); 
$dev_i = str_replace("q","𝗤",$dev_i); 
$dev_i = str_replace("r","𝗥",$dev_i); 
$dev_i = str_replace("s","𝗦",$dev_i); 
$dev_i = str_replace("t","𝗧",$dev_i); 
$dev_i = str_replace("u","𝗨",$dev_i); 
$dev_i = str_replace("v","𝗩",$dev_i); 
$dev_i = str_replace("w","𝗪",$dev_i); 
$dev_i = str_replace("x","𝗫",$dev_i); 
$dev_i = str_replace("y","𝗬",$dev_i); 
$dev_i = str_replace("z","𝗭",$dev_i); 
                    
$dev_i = str_replace('ض','ضـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ص','صـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ث','ثـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ق','قـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ف','فـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('غ','غـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ع','عـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ه','هـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('خ','خـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ح','حـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ج','جـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ش','شـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('س','سـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ي','يـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ب','بـٰ̲ـہ',$dev_i);
$dev_i = str_replace('ل','لـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ا','اٰ',$dev_i); 
$dev_i = str_replace('ت','تـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ن','نـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('م','مـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ك','كـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ة','ةً',$dev_i); 
$dev_i = str_replace('ء','ء',$dev_i); 
$dev_i = str_replace('ظ','ظـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ط','طـٰ̲ـہ',$dev_i); 
$dev_i = str_replace('ذ','ذٰ',$dev_i); 
$dev_i = str_replace('د','دٰ',$dev_i); 
$dev_i = str_replace('ز','زٰ',$dev_i); 
$dev_i = str_replace('ر','رٰ',$dev_i); 
$dev_i = str_replace('و','وٰ',$dev_i); 
$dev_i = str_replace('ى','ىَ',$dev_i); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$dev_i."".$dev_i1
   ]);
}



if($text && $text !=="/start"and$text!='/us'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" • ⚜┇تم زخرفهہ اسمڪ  بـ 92 شكلاً مختلفاً مع البايو ،  
⠀⠀◂⠀━━━━❊━━━━⠀▸",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"- اضغَط ههٓنآ وتابع جديدنآ ؛🖤*", 'url'=>"https://t.me/$chs"]
     ]

   ]
   ])
   ]); return false;}


if($text == "/start" && $chat_id != $sudo) {
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
 ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
  ٭ تم دخول شخص الى البوت الخاص بك 🔰؛

• معلومات العضو ، 👋🏻.

• الاسم ؛ $name ،

• المعرف ؛ @$username ،

• الايدي ؛ $from_id ،

• اليوم ؛ " . date("j") . "\n" . " 
",
]);
}






