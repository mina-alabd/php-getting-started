<?php
ob_start();
$API_KEY = "1107009022:AAEAwEsEkUhesKJRULWj9Z7PblHTnIDx_OQ";
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
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$admin = 495064815; // آيديك
$chs = "lloveMessages"; // معرف قناتك بدون @ ;
$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$chs&user_id=".$from_id);
$ABoWaTan = explode("\n",file_get_contents("ABoWaTan.txt"));
$OoO4o = count($ABoWaTan)-1;
$ABoWaTan1 = file_get_contents("ABoWaTan1.txt");
if ($update && !in_array($chat_id, $ABoWaTan)) {
    file_put_contents("ABoWaTan.txt", $chat_id."\n",FILE_APPEND);
  }
  
  if($text == 'الاوامر' and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"▪︎ حسناً ، إختر ماتريد من قائمة الاوامر ..
-",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text'=>'👤 عدد المشتركين','callback_data'=>'member'],['text'=>'📢 رسالة للكل','callback_data'=>'sendall']],
]])]);}
if($data == '🔙' and $chat_id2 == $admin){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"▪︎ حسناً ، إختر ماتريد من قائمة الاوامر ..
-",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text'=>'👤 عدد المشتركين','callback_data'=>'member'],['text'=>'📢 رسالة للكل','callback_data'=>'sendall']],
]])]);
unlink("ABoWaTan1.txt");
}
if($data == "member" and $chat_id2 == $admin){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- عدد المشتركين ' $OoO4o 🎯.",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
  [['text'=>"رجوع 🔙",'callback_data'=>"🔙"]],
]])]);}
if($data == "sendall" and $chat_id2 == $admin){
 file_put_contents("ABoWaTan1.txt", "Send");
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
'message_id'=>$message_id,
    'text'=>"- أرسل رسالتك وسيتم إرسالها لـ ( $OoO4o ) مشترك ' ✅",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
  [['text'=>"رجوع 🔙",'callback_data'=>"🔙"]],
]])
]);
}
if($text and $text != "/start" and $text != "الاوامر" and $ABoWaTan1 == "Send" and $chat_id == $admin){
  for ($i=0; $i < count($ABoWaTan); $i++) { 
file_put_contents("ABoWaTan1.txt", "unll"); 
    bot('sendMessage',[
      'chat_id'=>$ABoWaTan[$i],
      'text'=>$text,
    ]);}
  unlink("ABoWaTan1.txt");
}
#~~~~~@ABoWaTan~~~~~#
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ @$chs
◼️ إشترك في القناة ثم أرسل /start ، 📛",
]);return false;}
#~~~~~@ABoWaTan~~~~~#
if ($text == '/start') {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 👋┇ أهلاً وسهلاً بك يا ؛ [$name](tg://user?id=$chat_id)
- بوت الزخرفةه المتطور ، 🔰
- أرسل النص الذي تريد زخرفته وسيتم زخرفته ، 🧸 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[- اضغط هنا وتابع جديدنا ، 🍯](t.me/$chs)",
'disable_web_page_preview'=>'true',
'parse_mode'=>'Markdown',
]);}
#~~~~~@ABoWaTan~~~~~#
if($text !="/start" and $text != 'الاوامر'){
$zhrfa = json_decode(file_get_contents("https://minaalabd.000webhostapp.com/boot/api/api.php?text=".urlencode($text)))->result;
for($i = 0; $i <count($zhrfa); $i++){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$zhrfa[$i],
]);
}}
