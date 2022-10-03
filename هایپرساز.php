<?php

define('API_KEY','5701002035:AAFlKTGkVptohSqbvD6wL2M7Ktr110SnjVA');

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
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 } 
//-//////
$update = json_decode(file_get_contents('php://input'));
$date= file_get_contents("https://provps.ir/td?td=date");
$time= file_get_contents("https://provps.ir/td?td=time");
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$message_id = $update->message->message_id;
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
//---------------//
if($text == '/start'){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام خوش امدید🌹
شما در ساعت[⏰](http://api.monsterbot.ir/pic/?text=ساعت:&fsize=200&color=blue&ht=-8&font=IranNastaliq&y2=200&text2=$time&color2=blue&font2=IranNastaliq&fsize2=200): $time
در تاریخ📆: $date
〰〰〰〰〰〰〰〰〰〰〰〰
اموزش استفاده ربات:
برای دریافت آموزش📚
استفاده از ربات کافیه رو دکمه 📚راهنمای استفاده و ساخت هایپر📚
بزنید✅",
 'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
     
['text' => "📢کانال📢", 'url' => "http://telegram.me/hackgm"], ['text' => "👤سازنده", 'url' => "http://telegram.me/hackgm"]
               ],
               [
['text'=>"📚راهنمای استفاده و ساخت هایپر📚", 'url' => "http://telegram.me/hackgm"]
               ],
               [
['text'=>"🌀هایپر های شکلکی و آماده👽", 'url'=> "http://telegram.me/hackgm"]
                    ],
                ]
            ])
        ]);
}
elseif ($text == '/start skay'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📚راهنمای استفاده از ربات
〰〰〰〰〰〰〰〰〰〰〰〰〰
با این ربات میتوانید بصورت پیشرفته هایپر لینک بسازید
خوب برای ساخت هایپر کافیست متنی مثل این به ربات بفرستید👇

[متن شما ](لینکی که باhttp: شروع میشه
〰〰〰〰〰〰〰〰〰〰〰〰
بجای متن شما
متن هایپر خدتون قرار بدید و بجای لینکی که با http شروع میشه

لینک خودتون که با http شروع میشه
بزارید و بفرستید به ربات تا هایپر ساخته بشه
برای مثال من میخوام با این ربات هایپر بسازم
لینک هم http://telegram.me/ssstim
و متن هایپری که میخوام  اینه:
برای عضویت به چنل sss ضربه بزنید

خوب واسه تبدیل شدنش به هایپر کافیه اینجوری بنویسم

[اون متنم که میخواد هایپر بشه اینجا مینویسم](اون لینکم هم اینجا میزارم)

که در اصل اینطوری میشه👇
[برای عضویت چنل hackgm ضربه بزنید]‌‌(http://telegram.me/hackgm)‌‌
حالا کافیه به ربات بفرستم تا هایپر ساخته بشه

شما هم همین کار بکنید واسه ساختن هایپر✅",
'pars_mode'=>"MarkDown",
]);
}
elseif ($text == '/start 222'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"هایپر های آماده👇
یک دستور را انتخاب کنید✅

/feriyal 👈هایپر شکلکی فریال
/ghalb 👈هایپر شکلکی قلب💜
/dolfin 👈هایپر شکلکی دلفین🐬",
'pars_mode'=>"MarkDown",
]);
}
elseif ($text == '/ghalb'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"متنی که قراره بالای هایپر قرار بگیره اینجا بنویسید
░▒███████
░██▓▒░░▒▓██
██▓▒░__░▒▓██___██████
██▓▒░____░▓███▓__░▒▓██
██▓▒░___░▓██▓_____░▒▓██
██▓▒░_______________░▒▓██
_██▓▒░______________░▒▓██
__██▓▒░____________░▒▓██
___██▓▒░__________░▒▓██
____██▓▒░________░▒▓██
_____██▓▒░_____░▒▓██
______██▓▒░__░▒▓██
_______█▓▒░░▒▓██
_________░▒▓██
_______░▒▓██
_____░▒▓██(لینکی که با https شروع میشه اینجا بنویسید)

وقتی متن و لینک رو قرار دادید
به ربات بفرستید تا به هایپر تبدیل شود✅",
'pars_mode'=>"MarkDown",
]);
}
elseif ($text == '/feriyal'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"متنی که قراره هایپر قرار بگیره اینجا بنویس
[█████████
_█████████████
██████████████
_███████████████
.████████████░▀▀
_███████████▒░(█
_██████████▒░░░░?
_████████▒◕░░░░♥️
_ ████████▒░░░░)
_███████▒░░
_██████▒░░
█████▒░░
_███████
█▒░███████
_█▒░░███████
_█▒░░████████
_██▒░░████████
_███▒░░███████
_████▒░░█████
████▒░░███_____▒▓█
_████▒░░░░█ ████
_███████_█_███
█████████__██
_█████████___█_█
█████████____████
█████████
█████████
_████████▌
████████
_███████▌
____███████
_██████
_██████
_██████
_██████
_██████](لینکی که با https شروع میشه اینجا بنویسید)

وقتی متن و لینک رو قرار دادید
به ربات بفرستید تا به هایپر تبدیل شود✅",
'pars_mode'=>"MarkDown",
]);
}
elseif ($text == '/dolfin'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"متنتون که بالای هایپر قرار میگیره
[________________.###*
_________.*######
_________*######
_______*#######
______*########.
_____*#########.
_____*######*###*
____*#########*##
___*##########* *#
_*###########_____*
____############
_*##*#########
_*_____########
______#######
_______*######
________*#####*
__________*####*
____________*###*
______________*##*
________________*##.
_________________*##.
__________________.##
__________________.###.
________________.######.
______________._##*___*##](لینکی که با https شروع میشه اینجا بنویسید)
وقتی متن و لینک رو قرار دادید

به ربات بفرستید تا به هایپر تبدیل شود✅",
'pars_mode'=>"MarkDown",
]);
}
else {
sendmessage($chat_id , "$text");
}

?>