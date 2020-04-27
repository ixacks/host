<?php
define('API_KEY','1231506492:AAFE_4jF16g8U2tOn4_276jud87bQbXKcLw'); 
$admin = "834522122"; //admin id

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

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
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("\n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$tx = $message->text;
$text = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");

$soat1 = date('H:i:s',strtotime('2 hour')); 
$sana1 = date('d-M Y',strtotime('2 hour'));
$sana2 = date('z',strtotime('2 hour'));
$gmt = date('O',strtotime('2 hour'));
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));

$namegroup = $update->message->chat->title;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$tedadmsg = $update->message->message_id;


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="uzphpkodbot"; //bot useri
$soat = date('H:i', strtotime('2 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$text = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("stat");

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;

$text1 = $update->message->text;
$chat_id = $update->message->chat->id;
if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
'parse_mode'=>"html",
]);
}

$kid = 'OSIYO_HACKERLARI'; $kkid = '@OSIYO_HACKERLARI'; if(isset($update->message->text)){ $gett = bot('getChatMember',[ 'chat_id' =>$kkid, 'user_id' => $update->message->chat->id, ]); $gget = $gett->result->status; if($gget == "member" or $gget == "creator" or $gget == "administrator"){ } else{ bot('sendMessage',[ 'chat_id'=>$update->message->chat->id, 'message_id'=>$update->message->message_id, 'parse_mode'=>'markdown', 'text'=>"*👋┇ Salom bot xush kelibsiz

🌟┇ Botdan foydalanish uchun kanalimizga a'zo boling

📡┇Kanalimiz
@OSIYO_HACKERLARI👈
👆👆👆

📌┇ A'zo bolib /start ni bosin *",  'reply_markup'=>json_encode([  'inline_keyboard'=>[  [['text'=>"A'zo bo'lish 🎗",'url'=>'http://t.me/'.$kid.'']], 
] 

]) 

]);return true;
}
    
}
if(isset($tx)){
ty($cid);
}


if($text=="/start"){
file_put_contents("odam/$cid.dat","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>✋Salom $first_name botimizga ga xush kelibsiz. 
🤖Bu bot orqalik siz kanallarda yoq phplarga tekinga olishngiz mumkin

💭Bot admini [@UzBeK_o7]
😈Kanaimiz [@OSIYO_HACKERLARI] </b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'keyboard'=>[
[['text'=>"🎁Tekin php kodlar"]],
[['text'=>"💰Pullik php kodlar"]], 
[['text'=>"😚Qiziqarli boʻlim"]],
   
   ]
   ]), 
   ]);
}

if($text=="Back🔙"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>✋Salom $first_name botimizga ga xush kelibsiz. 
🤖Bu bot orqalik siz kanallarda yoq phplarga tekinga olishngiz mumkin

💭Bot admini [@UzBeK_o7]
😈Kanaimiz [@OSIYO_HACKERLARI] </b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'keyboard'=>[
[['text'=>"🎁Tekin php kodlar"]],
[['text'=>"💰Pullik php kodlar"]], 
[['text'=>"😚Qiziqarli boʻlim"]],
   ]
   ]), 
   ]);
}

if($text=="🔙Back"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"😚Siz *Qiziqarli boʻlim* boʻlimdasiz.
_Uzingizga kerakli funksiayni tanlang👇_",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'keyboard'=>[
[['text'=>"⛄Yangi Yilga"],['text'=>"🇺🇿Telegram Tillar🇺🇸"]],
[['text'=>"🎨Logotip✨"],['text'=>"💭Nicklar"]],
[['text'=>"🎇Telegram fon"],['text'=>"⏳Sana va ⌚Vqat"]],
[['text'=>"📰Yangiliklar"],['text'=>"Back🔙"]],
   ]
   ]), 
   ]);
}

if($text=="😚Qiziqarli boʻlim"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"😚Siz *Qiziqarli boʻlim* boʻlimdasiz.
_Uzingizga kerakli funksiayni tanlang👇_",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'keyboard'=>[
[['text'=>"⛄Yangi Yilga"],['text'=>"🇺🇿Telegram Tillar🇺🇸"]],
[['text'=>"🎨Logotip✨"],['text'=>"💭Nicklar"]],
[['text'=>"🎇Telegram fon"],['text'=>"⏳Sana va ⌚Vqat"]],
[['text'=>"📚Matematika"],['text'=>"🕌Quron haqida"]],
[['text'=>"📰Yangiliklar"],['text'=>"Back🔙"]],
   ]
   ]), 
   ]);
}

if($text=="📚Matematika"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"*📚Matematika boʻlimidasiz
🔢Misolni kiriting*",
'parse_mode'=>'markdown',
]);
}

if($text=="🕌Quron haqida"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🌸🌸Quron haqida🌸🌸
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼon (arab. القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra,
Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), 
„Furqon“ (haq bilan botilning orasini ayiruvchi), 
„Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), 
„Hudo“ (hidoyat), „Muborak“ (barakotli),
 „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), 
„Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), 
„Bashir“ (bashorat beruvchi), 
„Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. 
Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. 
Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.*
➖➖➖➖➖➖➖➖➖➖➖➖
Quroning tuzulishi
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼonning boʻlimlari sura deyiladi,
uni shartli ravishda bob bilan taqqoslash mumkin.
Har sura oyatlarga boʻlingan. 
Qurʼon 114 sura, 6236 oyatdan iborat.
Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. 
Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar,
voqealar yohud asosiy qahramon nomi bilan atalgan. 
Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arab.juz, fors. pora)ga boʻlingan.
Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, 
oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. 
Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar —
„Makka suralari“ (610—622 yillar, 90 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 24 sura) ga ajratiladi.
Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.
➖➖➖➖➖➖➖➖➖➖➖➖

👮Bot admini: @UzBeK_o7</b>",
'parse_mode'=>'html',
]);
}



if($text=="🎇Telegram fon"){
$cid = $message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🌐Telegram fonlar uzingizga yoqqanini tanlang.</b>",
'parse_mode'=>html,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
 [['text'=>'🌅Telegram 1fon','url'=>'https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs'],['text'=>'🌅Telegram 2fon','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ']], 
   [['text'=>'🌅Telegram 3fon','url'=>'https://t.me/bg/MzLRSHubAVIBAAAAqKgYQTObnhw'],['text'=>'🌅Telegram 4fon','url'=>'https://t.me/bg/Br6nNA9WAVIBAAAAe6AHvL7eOMM']], 
     [['text'=>'🌅Telegram 5fon','url'=>'https://t.me/bg/MiE64ER4AFIBAAAAHQZRZyDCfu0'],['text'=>'🌅Telegram 6fon','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ']],
      [['text'=>'🌅Telegram 7fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'],['text'=>'🌅Telegram 8fon','url'=>'https://t.me/bg/EhCMFgys-FEBAAAA04qJyrs1G6M']], 
         [['text'=>'🌅Telegram 9fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'],['text'=>'🌅Telegram 10fon','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY']], 
         [['text'=>'🌅Telegram 11fon','url'=>'https://t.me/bg/FJIYygt_iVIBAAAA8tzV8Ju0QvM'],['text'=>'🌅Telegram 12fon','url'=>'https://t.me/bg/Qe9IiLLfiVIBAAAAn_BDUKSYaCs']]
]
]),
]);
}

  $url = 'https://daryo.uz/feed/';
  $rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item){
  $line = $item->title;
  break;
}  
if($text=="📰Yangiliklar"){
  $soat = date('H:i', strtotime('GMT 2 hour'));
  bot('sendmessage',[
    'chat_id'=>$cid, 
    'text'=>"📰 $line

⏰ Soat: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}

if($text =="🎨Logotip✨" ){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"Logotip bulimini tanglang ...",
 'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⚽Sport logotip🏆"],['text' =>"🌀QR Cod🌀" ]],
[['text'=>"🔥Epic logotip🔥"],['text'=>"🎻Music logotip🎺"]], 
[['text'=>"✨Erkak & Ayol✨"],['text'=>"🔆Crazy logotip✨"]],
[['text'=>"🚗Moshin logotip🚖"],['text'=>"🎤DJ logotip🎤"]], 
[['text'=>"🎉Best logotip🎉"],['text'=>"🔙Back"]],
]
]),
 ]);
}


if($text =="🔥Epic logotip🔥" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"Epic logotiplar yasaw uchun comandalarni yozing
`epic1` va text
`epic2` va text
`epic3` va text
`epic4` va text
`epic5` va text
`epic6` va text
`epic7` va text
`epic8` va text
`epic9` vatext
`epicX` va text ", 
    ]);
}

if($text =="🌀QR Cod🌀" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"Siz ozingiz QR code yasawingiz mumkin
`QR` va text", 
    ]);
}

if($text =="🎤DJ logo🎤" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"To create DJ logos, type the command
`dj1` and text
`dj2` and text
`dj3` and text
`dj4` and text
`dj5` and text
`dj6` and text
`dj7` and text 
`dj8` and text
`dj9` and text
`djX` and text", 
    ]);
}

if($text =="🎻Music logotip🎺" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"To create the music logos, click
`msc1` and text
`msc2` and text
`msc3` and text
`msc4` and text
`msc5` and text
`msc6` and text
`msc7` and text
`msc8` and text
`msc9` and text
`mscX` and text ", 
    ]);
}

if($text =="🔆Crazy logotip✨" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"To create the craze logos, click
`crazy1` and text
`crazy2` and text
`crazy3` and text
`crazy4` and text
`crazy5` and text
`crazy6` and text
`crazy7` and text
`crazy8` and text
`crazy9` and text
`crazyX` and text ", 
    ]);
}
if($text =="⚽Sport logotip🏆" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"To create the sport logos, click
`sport1` and text
`sport2` and text
`sport3` and text
`sport4` and text
`sport5` and text
`sport6` and text
`sport7` and text
`sport8` and text
`sport9` and text
`sportX` and text ", 
    ]);
}

if($text =="✨Erkak & Ayol✨" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"Bayramlar  logolar  yasaw uchun comandalarni yozing
`girl1` va text
`8martch` va text
`girl2` va text
`girl3` va text
`girl4` va text 
`men1` va text
`men2` va text", 
    ]);
}
if($text =="🎉Best logotip🎉" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"Bayram logotiplar yasaw uchun comandalarni yozing
`rok` va text
`idea` va text
`cars2` va text
`cars1` va text
`moto` va text
`game1` va text
`game2` va text
`st1` va text
`st2` va text
`para` va text
`btf` va text ", 
    ]);
}

if($text =="🚗Moshin logotip🚖" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"Moshin logotiplar yasaw uchun comandalarni yozing
`tach1` va text
`tach2` va text
`tach3` va text
`tach4` va text
`tach5` va text
`tach6` va text
`tach7` va text
`tach8` va text
`tach9` vatext
`tachX` va text ", 
    ]);
}
if($text =="🎤DJ logotip🎤" ){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
        'text'=>"DJ logotiplar yasaw uchun comandalarni yozing
`dj1` va text
`dj2` va text
`dj3` va text
`dj4` va text
`dj5` va text
`dj6` va text
`dj7` va text
`dj8` va text
`dj9` vatext
`djX` va text ", 
    ]);
}

  if($text1=="⛄Yangi Yilga" or $text=="/yangi_yil$botim"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $uui="🎅 <b>Yangi yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!</b> ⛄";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$uui,
    'parse_mode'=>'html',
  ]);
}

if($text=="💰Pullik php kodlar"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>💰Pullik botlar yaratib beramiz 
😈Murojat uchun [@UzBeK_o7]
⌚Ish vaqti 8:00 dan 17:00 gacha
🎁Kanalimiz [@OSIYO_HACKERLARI] </b>",
'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'Back🔙']],
			]
		]),
	]);
}

 


if($text=="🇺🇿Telegram Tillar🇺🇸"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"🇺🇿 *Bu bo'lim orqali telegramingiz tilini qulay oson o'zgartira olasiz!
⬇️ Shunchaki o'rnatmoqchi bo'lgan tilingizni tanlang:*

[🇸🇱O'zbek](tg://setlanguage?lang=uzbekcyr)

[🇷🇺 Русский](tg://setlanguage?lang=ru)

[🇵🇷 English](tg://setlanguage?lang=en)",
'parse_mode'=>'markdown',
]);
}

if($text=="⏳Sana va ⌚Vqat"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"*📆Bugun: $sana1-yil
⌚Soat: $soat1
📅Oy nomi: $oynomi
📅Yilning: $sana2-kuni
⏳Vaqt mintaqasi: $gmt
📅Bu oy $buoy kundan iborat*",
'parse_mode'=>'markdown',
]);
}

if($text=="💭Nicklar"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"*??Chiroyli nick yasamoqchi bölsangiz👇*/

`/nick` *Musohon shu tarzda yuboring*",
'parse_mode'=>'markdown',
]);
}

if($text == "/panel"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum admin panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'👤Userlar'],['text'=>'👥Guruhlar']],
				[['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "🔙orqaga"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum admin panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'👤Userlar'],['text'=>'👥Guruhlar']],
				[['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "👥Guruhlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
  'parse_mode'=>'html',
 ]);
 }

if($text == "👤Userlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
  'parse_mode'=>'html',
]);
}

if($text == "📊Statistika"&&$fadmin==$admin){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
   bot('sendmessage',[
   'chat_id'=>$admin,
    'reply_to_message_id'=>$mesid,
    'text'=> "<b> Bot statistikasi:</b>\n\nA'zolar: <b>$us</b>",
'parse_mode' => 'html',
]);
}

if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }

if($text=="🎁Tekin php kodlar"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👇Uzingizga kerakli phpni oling.
🎁Phplar qoʻshilishda davom etadi</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'keyboard'=>[
  [['text'=>"Yangi CronBot🎁"],['text'=>" KomentariyaBot kodi🎁"]],
 [['text'=>"@TozalaymizBot ni kodi🎁"],['text'=>"Kanal nick soat🎁"]],
  [['text'=>"@Advokad_Bot ni kodi🎁"],['text'=>"@YuborBot ni kodi🎁"]],
[['text'=>"Obmen bot kodi🎁"],['text'=>" YouTubeBot kodi🎁"]],
[['text'=>"@LampaBot ni kodi🎁"],['text'=>"@LikeUzShare_Robot kodi🎁"]],
[['text'=>"Prasmotrbot kodi🎁"],['text'=>"Admemberbot kodi🎁"]],
[['text'=>"KanalgaSoatbot kodi🎁"],['text'=>"Profilga soat🎁"]],
[['text'=>"@iLogobot ni kodi🎁"],['text'=>"@xobot ni kodi🎁"]],
[['text'=>"Quronbot kodi🎁"],['text'=>" @goPhpbot kodi🎁"]],
[['text'=>"@U_LikeRobot ni kodi🎁"],['text'=>" Logotifbot kodi🎁"]],
[['text'=>"Reklamabot kodi🎁"],['text'=>" Nickbot kodi🎁"]],
[['text'=>"Back🔙"]]
   ]
   ]), 
   ]);
}

if($text == "KomentariyaBot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/Uz_KoderlarGroup/315",
        'caption'=>"KomentariyaBot kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Yangi CronBot🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/9045",
        'caption'=>"YangiCoronBot kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Kanal nick soat🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/rud6wy7a5/5",
        'caption'=>"Kanal nickiga soat ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@TozalaymizBot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/9039",
        'caption'=>"@TozalaymizBot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@YuborBot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/3497",
        'caption'=>"@yuborbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Obmen bot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/110",
        'caption'=>"Obmenbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@LampaBot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/64",
        'caption'=>"@Lampabot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "YouTubeBot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/108",
        'caption'=>"YouTubeBot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@LikeUzShare_Robot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/65",
        'caption'=>"@LikeUzShare_Robot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Prasmotrbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/52",
        'caption'=>"Prasmotrbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Admemberbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/45",
        'caption'=>"AdmemberBot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@xobot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/3",
        'caption'=>"@xobot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Profilga soat🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/112",
        'caption'=>"☃Yangi yilga profilga soat ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@Advokad_Bot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/4",
        'caption'=>"@Advokad_Bot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "KanalgaSoatbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/rud6wy7a5/6",
        'caption'=>"KanalgaSoatBot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@iLogobot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/6",
        'caption'=>"@iLogobot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@goPhpbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/7",
        'caption'=>"@goPhpbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Quronbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/4334",
        'caption'=>"Quronbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "@U_LikeRobot ni kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/Uz_Koderlar/5460",
        'caption'=>"@U_LikeRobot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Logotifbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/8",
        'caption'=>"Logotifbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Nickbot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/10",
        'caption'=>"Nickbot ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}

if($text == "Reklamabot kodi🎁"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://telegram.me/kanaamansnnsnsns/9",
        'caption'=>"Reklama ni php kodi🎁
😈Kanalimiz @OSIYO_HACKERLARI",
        ]);
}


       $EN =   explode("/nick", $text1);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
 
    ]);
    }
    $EN0 =   explode("/nick", $text1);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],
 
    ]);
    }
    $EN1 =   explode("/nick", $text1);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],
 
    ]);
    }
    //-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
    $EN2 =   explode("/nick", $text1);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],
  
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//

$EN3 =   explode("/nick", $text1);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
  
    ]);
    }
$EN3 =   explode("/nick", $text1);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
 
    ]);
    }
 $EN5 =   explode("/nick", $text1);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],
 
    ]);
    }
   $EN6 =   explode("/nick", $text1);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'Ⴓ' , $EN6);
  	 $EN6 = str_replace('w', 'Ш' , $EN6);
	 $EN6 = str_replace('e', 'Σ' , $EN6);
  	 $EN6 = str_replace('r', 'Γ' , $EN6);
	 $EN6 = str_replace('t', 'Ƭ' , $EN6);
  	 $EN6 = str_replace('y', 'Ψ' , $EN6);
	 $EN6 = str_replace('u', 'Ʊ' , $EN6);
  	 $EN6 = str_replace('i', 'I' , $EN6);
	 $EN6 = str_replace('o', 'Θ' , $EN6);
  	 $EN6 = str_replace('p', 'Ƥ' , $EN6);
	 $EN6 = str_replace('a', 'Δ' , $EN6);
  	 $EN6 = str_replace('s', 'Ѕ' , $EN6);
	 $EN6 = str_replace('d', 'D' , $EN6);
  	 $EN6 = str_replace('f', 'F' , $EN6);
	 $EN6 = str_replace('g', 'G' , $EN6);
  	 $EN6 = str_replace('h', 'H' , $EN6);
	 $EN6 = str_replace('j', 'J' , $EN6);
  	 $EN6 = str_replace('k', 'Ƙ' , $EN6);
	 $EN6 = str_replace('l', 'L' , $EN6);
  	 $EN6 = str_replace('z', 'Z' , $EN6);
	 $EN6 = str_replace('x', 'Ж' , $EN6);
  	 $EN6 = str_replace('c', 'C' , $EN6);
	 $EN6 = str_replace('v', 'Ʋ' , $EN6);
  	 $EN6 = str_replace('b', 'Ɓ' , $EN6);
  	 $EN6 = str_replace('n', '∏' , $EN6);
	 $EN6 = str_replace('m', 'Μ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],
   
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@OSIYO_HACKERLARI-_-_-_-_-_-_-_-_-_//
$EN7 =   explode("/nick", $text1);
    if($EN7[1]){
	 $EN7 = str_replace('q', 'Q' , $EN7);
  	 $EN7 = str_replace('w', 'Щ' , $EN7);
	 $EN7 = str_replace('e', '乇' , $EN7);
  	 $EN7 = str_replace('r', '尺' , $EN7);
	 $EN7 = str_replace('t', 'ｲ' , $EN7);
  	 $EN7 = str_replace('y', 'ﾘ' , $EN7);
	 $EN7 = str_replace('u', 'Ц' , $EN7);
  	 $EN7 = str_replace('i', 'ﾉ' , $EN7);
	 $EN7 = str_replace('o', 'Ծ' , $EN7);
  	 $EN7 = str_replace('p', 'ｱ' , $EN7);
	 $EN7 = str_replace('a', 'ﾑ' , $EN7);
  	 $EN7 = str_replace('s', '丂' , $EN7);
	 $EN7 = str_replace('d', 'Ð' , $EN7);
  	 $EN7 = str_replace('f', 'ｷ' , $EN7);
	 $EN7 = str_replace('g', 'Ǥ' , $EN7);
  	 $EN7 = str_replace('h', 'ん' , $EN7);
	 $EN7 = str_replace('j', 'ﾌ' , $EN7);
  	 $EN7 = str_replace('k', 'ズ' , $EN7);
	 $EN7 = str_replace('l', 'ﾚ' , $EN7);
  	 $EN7 = str_replace('z', '乙' , $EN7);
	 $EN7 = str_replace('x', 'ﾒ' , $EN7);
  	 $EN7 = str_replace('c', 'ζ' , $EN7);
	 $EN7 = str_replace('v', 'Џ' , $EN7);
  	 $EN7 = str_replace('b', '乃' , $EN7);
  	 $EN7 = str_replace('n', '刀' , $EN7);
	 $EN7 = str_replace('m', 'ᄊ' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],
  
    ]);
    }
    $EN8 =   explode("/nick", $text1);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'ợ' , $EN8);
  	 $EN8 = str_replace('w', 'ฬ' , $EN8);
	 $EN8 = str_replace('e', 'є' , $EN8);
  	 $EN8 = str_replace('r', 'г' , $EN8);
	 $EN8 = str_replace('t', 't' , $EN8);
  	 $EN8 = str_replace('y', 'ץ' , $EN8);
	 $EN8 = str_replace('u', 'ย' , $EN8);
  	 $EN8 = str_replace('i', 'เ' , $EN8);
	 $EN8 = str_replace('o', '๏' , $EN8);
  	 $EN8 = str_replace('p', 'թ' , $EN8);
	 $EN8 = str_replace('a', 'ค' , $EN8);
  	 $EN8 = str_replace('s', 'ร' , $EN8);
	 $EN8 = str_replace('d', '๔' , $EN8);
  	 $EN8 = str_replace('f', 'Ŧ' , $EN8);
	 $EN8 = str_replace('g', 'ɠ' , $EN8);
  	 $EN8 = str_replace('h', 'ђ' , $EN8);
	 $EN8 = str_replace('j', 'ן' , $EN8);
  	 $EN8 = str_replace('k', 'к' , $EN8);
	 $EN8 = str_replace('l', 'l' , $EN8);
  	 $EN8 = str_replace('z', 'z' , $EN8);
	 $EN8 = str_replace('x', 'א' , $EN8);
  	 $EN8 = str_replace('c', 'ς' , $EN8);
	 $EN8 = str_replace('v', 'ⱴ' , $EN8);
  	 $EN8 = str_replace('b', '๒' , $EN8);
  	 $EN8 = str_replace('n', 'ภ' , $EN8);
	 $EN8 = str_replace('m', '๓' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],
    ]);
    }
$EN9 =   explode("/nick", $text1);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ҩ' , $EN9);
  	 $EN9 = str_replace('w', 'ω' , $EN9);
	 $EN9 = str_replace('e', '૯' , $EN9);
  	 $EN9 = str_replace('r', 'Ր' , $EN9);
	 $EN9 = str_replace('t', '੮' , $EN9);
  	 $EN9 = str_replace('y', 'ע' , $EN9);
	 $EN9 = str_replace('u', 'υ' , $EN9);
  	 $EN9 = str_replace('i', 'ɿ' , $EN9);
	 $EN9 = str_replace('o', '૦' , $EN9);
  	 $EN9 = str_replace('p', 'ƿ' , $EN9);
	 $EN9 = str_replace('a', 'ค' , $EN9);
  	 $EN9 = str_replace('s', 'ς' , $EN9);
	 $EN9 = str_replace('d', 'ძ' , $EN9);
  	 $EN9 = str_replace('f', 'Բ' , $EN9);
	 $EN9 = str_replace('g', '૭' , $EN9);
  	 $EN9 = str_replace('h', 'Һ' , $EN9);
	 $EN9 = str_replace('j', 'ʆ' , $EN9);
  	 $EN9 = str_replace('k', 'қ' , $EN9);
	 $EN9 = str_replace('l', 'Ն' , $EN9);
  	 $EN9 = str_replace('z', 'ઽ' , $EN9);
	 $EN9 = str_replace('x', '૪' , $EN9);
  	 $EN9 = str_replace('c', '८' , $EN9);
	 $EN9 = str_replace('v', '౮' , $EN9);
  	 $EN9 = str_replace('b', 'ც' , $EN9);
  	 $EN9 = str_replace('n', 'Ո' , $EN9);
	 $EN9 = str_replace('m', 'ɱ' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1], 
    ]);
    }
 $EN10 =   explode("/nick", $text1);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],
    ]);
    }
 $EN11 =   explode("/nick", $text1);
    if($EN11[1]){
	 $EN11 = str_replace('q', 'ǫ' , $EN11);
  	 $EN11 = str_replace('w', 'ᴡ' , $EN11);
	 $EN11 = str_replace('e', 'ᴇ' , $EN11);
  	 $EN11 = str_replace('r', 'ʀ' , $EN11);
	 $EN11 = str_replace('t', 'ᴛ' , $EN11);
  	 $EN11 = str_replace('y', 'ʏ' , $EN11);
	 $EN11 = str_replace('u', 'ᴜ' , $EN11);
  	 $EN11 = str_replace('i', 'ɪ' , $EN11);
	 $EN11 = str_replace('o', 'ᴏ' , $EN11);
  	 $EN11 = str_replace('p', 'ᴘ' , $EN11);
	 $EN11 = str_replace('a', 'ᴀ' , $EN11);
  	 $EN11 = str_replace('s', 'ѕ' , $EN11);
	 $EN11 = str_replace('d', 'ᴅ' , $EN11);
  	 $EN11 = str_replace('f', 'ғ' , $EN11);
	 $EN11 = str_replace('g', 'ɢ' , $EN11);
  	 $EN11 = str_replace('h', 'ʜ' , $EN11);
	 $EN11 = str_replace('j', 'ᴊ' , $EN11);
  	 $EN11 = str_replace('k', 'ᴋ' , $EN11);
	 $EN11 = str_replace('l', 'ʟ' , $EN11);
  	 $EN11 = str_replace('z', 'ᴢ' , $EN11);
	 $EN11 = str_replace('x', 'х' , $EN11);
  	 $EN11 = str_replace('c', 'ᴄ' , $EN11);
	 $EN11 = str_replace('v', 'ᴠ' , $EN11);
  	 $EN11 = str_replace('b', 'ʙ' , $EN11);
  	 $EN11 = str_replace('n', 'ɴ' , $EN11);
	 $EN11 = str_replace('m', 'ᴍ' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],
     ]);
    }
 //-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//



 $EN12 =   explode("/nick", $text1);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 =   explode("/nick", $text1);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
 $EN13 =   explode("/nick", $text1);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'q' , $EN13);
  	 $EN13 = str_replace('w', 'w' , $EN13);
	 $EN13 = str_replace('e', 'є' , $EN13);
  	 $EN13 = str_replace('r', 'r' , $EN13);
	 $EN13 = str_replace('t', 't' , $EN13);
  	 $EN13 = str_replace('y', 'ч' , $EN13);
	 $EN13 = str_replace('u', 'u' , $EN13);
  	 $EN13 = str_replace('i', 'í' , $EN13);
	 $EN13 = str_replace('o', 'σ' , $EN13);
  	 $EN13 = str_replace('p', 'p' , $EN13);
	 $EN13 = str_replace('a', 'α' , $EN13);
  	 $EN13 = str_replace('s', 'ѕ' , $EN13);
	 $EN13 = str_replace('d', 'd' , $EN13);
  	 $EN13 = str_replace('f', 'f' , $EN13);
	 $EN13 = str_replace('g', 'g' , $EN13);
  	 $EN13 = str_replace('h', 'h' , $EN13);
	 $EN13 = str_replace('j', 'j' , $EN13);
  	 $EN13 = str_replace('k', 'k' , $EN13);
	 $EN13 = str_replace('l', 'l' , $EN13);
  	 $EN13 = str_replace('z', 'z' , $EN13);
	 $EN13 = str_replace('x', 'х' , $EN13);
  	 $EN13 = str_replace('c', 'c' , $EN13);
	 $EN13 = str_replace('v', 'v' , $EN13);
  	 $EN13 = str_replace('b', 'в' , $EN13);
  	 $EN13 = str_replace('n', 'n' , $EN13);
	 $EN13 = str_replace('m', 'm' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
	 $EN14 =  explode("/nick", $text1);
    if($EN14[1]){
	 $EN14 = str_replace('q', 'ⓠ' , $EN14);
  	 $EN14 = str_replace('w', 'ⓦ' , $EN14);
	 $EN14 = str_replace('e', 'ⓔ' , $EN14);
  	 $EN14 = str_replace('r', 'ⓡ' , $EN14);
	 $EN14 = str_replace('t', 'ⓣ' , $EN14);
  	 $EN14 = str_replace('y', 'ⓨ' , $EN14);
	 $EN14 = str_replace('u', 'ⓤ' , $EN14);
  	 $EN14 = str_replace('i', 'ⓘ' , $EN14);
	 $EN14 = str_replace('o', 'ⓞ' , $EN14);
  	 $EN14 = str_replace('p', 'ⓟ' , $EN14);
	 $EN14 = str_replace('a', 'ⓐ' , $EN14);
  	 $EN14 = str_replace('s', 'ⓢ' , $EN14);
	 $EN14 = str_replace('d', 'ⓓ' , $EN14);
  	 $EN14 = str_replace('f', 'ⓕ' , $EN14);
	 $EN14 = str_replace('g', 'ⓖ' , $EN14);
  	 $EN14 = str_replace('h', 'ⓗ' , $EN14);
	 $EN14 = str_replace('j', 'ⓙ' , $EN14);
  	 $EN14 = str_replace('k', 'ⓚ' , $EN14);
	 $EN14 = str_replace('l', 'ⓛ' , $EN14);
  	 $EN14 = str_replace('z', 'ⓩ' , $EN14);
	 $EN14 = str_replace('x', 'ⓧ' , $EN14);
  	 $EN14 = str_replace('c', 'ⓒ' , $EN14);
	 $EN14 = str_replace('v', 'ⓥ' , $EN14);
  	 $EN14 = str_replace('b', 'ⓑ' , $EN14);
  	 $EN14 = str_replace('n', 'ⓝ' , $EN14);
	 $EN14 = str_replace('m', 'ⓜ' , $EN14);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN14[1], 
    ]);
	  }
	 $EN15 =   explode("/nick", $text1);
    if($EN15[1]){
	 $EN15 = str_replace('q', 'Q⃟' , $EN15);
  	 $EN15 = str_replace('w', 'W⃟' , $EN15);
	 $EN15 = str_replace('e', 'E⃟' , $EN15);
  	 $EN15 = str_replace('r', 'R⃟' , $EN15);
	 $EN15 = str_replace('t', 'T⃟' , $EN15);
  	 $EN15 = str_replace('y', 'Y⃟' , $EN15);
	 $EN15 = str_replace('u', 'U⃟' , $EN15);
  	 $EN15 = str_replace('i', 'I⃟' , $EN15);
	 $EN15 = str_replace('o', 'O⃟' , $EN15);
  	 $EN15 = str_replace('p', 'P⃟' , $EN15);
	 $EN15 = str_replace('a', 'A⃟' , $EN15);
  	 $EN15 = str_replace('s', 'S⃟' , $EN15);
	 $EN15 = str_replace('d', 'D⃟' , $EN15);
  	 $EN15 = str_replace('f', 'F⃟' , $EN15);
	 $EN15 = str_replace('g', 'G⃟' , $EN15);
  	 $EN15 = str_replace('h', 'H⃟' , $EN15);
	 $EN15 = str_replace('j', 'J⃟' , $EN15);
  	 $EN15 = str_replace('k', 'K⃟' , $EN15);
	 $EN15 = str_replace('l', 'L⃟' , $EN15);
  	 $EN15 = str_replace('z', 'Z⃟' , $EN15);
	 $EN15 = str_replace('x', 'X⃟' , $EN15);
  	 $EN15 = str_replace('c', 'C⃟' , $EN15);
	 $EN15 = str_replace('v', 'V⃟' , $EN15);
  	 $EN15 = str_replace('b', 'B⃟' , $EN15);
  	 $EN15 = str_replace('n', 'N⃟' , $EN15);
	 $EN15 = str_replace('m', 'M⃟' , $EN15);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN15[1], 
    ]);
	  }
	 $EN16 =   explode("/nick", $text1);
    if($EN16[1]){
	 $EN16 = str_replace('q', 'Qཽ' , $EN16);
  	 $EN16 = str_replace('w', 'Wཽ' , $EN16);
	 $EN16 = str_replace('e', 'Eཽ' , $EN16);
  	 $EN16 = str_replace('r', 'Rཽ' , $EN16);
	 $EN16 = str_replace('t', 'Tཽ' , $EN16);
  	 $EN16 = str_replace('y', 'Yཽ' , $EN16);
	 $EN16 = str_replace('u', 'Uཽ' , $EN16);
  	 $EN16 = str_replace('i', 'Iཽ' , $EN16);
	 $EN16 = str_replace('o', 'Oཽ' , $EN16);
  	 $EN16 = str_replace('p', 'Pཽ' , $EN16);
	 $EN16 = str_replace('a', 'Aཽ' , $EN16);
  	 $EN16 = str_replace('s', 'Sཽ' , $EN16);
	 $EN16 = str_replace('d', 'Dཽ' , $EN16);
  	 $EN16 = str_replace('f', 'Fཽ' , $EN16);
	 $EN16 = str_replace('g', 'Gཽ' , $EN16);
  	 $EN16 = str_replace('h', 'Hཽ' , $EN16);
	 $EN16 = str_replace('j', 'Jཽ' , $EN16);
  	 $EN16 = str_replace('k', 'Kཽ' , $EN16);
	 $EN16 = str_replace('l', 'Lཽ' , $EN16);
  	 $EN16 = str_replace('z', 'Zཽ' , $EN16);
	 $EN16 = str_replace('x', 'Xཽ' , $EN16);
  	 $EN16 = str_replace('c', 'Cཽ' , $EN16);
	 $EN16 = str_replace('v', 'Vཽ' , $EN16);
  	 $EN16 = str_replace('b', 'Bཽ' , $EN16);
  	 $EN16 = str_replace('n', 'Nཽ' , $EN16);
	 $EN16 = str_replace('m', 'Mཽ' , $EN16);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN16[1], 
    ]);
	  }
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//



	 $EN17 =   explode("/nick", $text1);
    if($EN17[1]){
	 $EN17 = str_replace('q', 'ⓠ' , $EN17);
  	 $EN17 = str_replace('w', 'ẘ' , $EN17);
	 $EN17 = str_replace('e', 'ε' , $EN17);
  	 $EN17 = str_replace('r', 'я' , $EN17);
	 $EN17 = str_replace('t', '⊥' , $EN17);
  	 $EN17 = str_replace('y', '¥' , $EN17);
	 $EN17 = str_replace('u', 'ʊ' , $EN17);
  	 $EN17 = str_replace('i', 'ḯ' , $EN17);
	 $EN17 = str_replace('o', 'ø' , $EN17);
  	 $EN17 = str_replace('p', '℘' , $EN17);
	 $EN17 = str_replace('a', '∀' , $EN17);
  	 $EN17 = str_replace('s', '﹩' , $EN17);
	 $EN17 = str_replace('d', '∂' , $EN17);
  	 $EN17 = str_replace('f', 'ḟ' , $EN17);
	 $EN17 = str_replace('g', 'ℊ' , $EN17);
  	 $EN17 = str_replace('h', 'н' , $EN17);
	 $EN17 = str_replace('j', 'ʝ' , $EN17);
  	 $EN17 = str_replace('k', 'ḱ' , $EN17);
	 $EN17 = str_replace('l', 'ʟ' , $EN17);
  	 $EN17 = str_replace('z', 'ℨ' , $EN17);
	 $EN17 = str_replace('x', '✖' , $EN17);
  	 $EN17 = str_replace('c', 'ḉ' , $EN17);
	 $EN17 = str_replace('v', 'ṽ' , $EN17);
  	 $EN17 = str_replace('b', '♭' , $EN17);
  	 $EN17 = str_replace('n', 'η' , $EN17);
	 $EN17 = str_replace('m', 'ღ' , $EN17);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN17[1], 
    ]);
	  }
	 $EN18 =   explode("/nick", $text1);
    if($EN18[1]){
	 $EN18 = str_replace('q', 'ǭ' , $EN18);
  	 $EN18 = str_replace('w', 'ω' , $EN18);
	 $EN18 = str_replace('e', 'ḙ' , $EN18);
  	 $EN18 = str_replace('r', 'Ի' , $EN18);
	 $EN18 = str_replace('t', 'т' , $EN18);
  	 $EN18 = str_replace('y', '⑂' , $EN18);
	 $EN18 = str_replace('u', 'ṳ' , $EN18);
  	 $EN18 = str_replace('i', '!' , $EN18);
	 $EN18 = str_replace('o', '✺' , $EN18);
  	 $EN18 = str_replace('p', '℘' , $EN18);
	 $EN18 = str_replace('a', 'ᾰ' , $EN18);
  	 $EN18 = str_replace('s', 'ṧ' , $EN18);
	 $EN18 = str_replace('d', 'ᖱ' , $EN18);
  	 $EN18 = str_replace('f', 'ḟ' , $EN18);
	 $EN18 = str_replace('g', '❡' , $EN18);
  	 $EN18 = str_replace('h', 'ℏ' , $EN18);
	 $EN18 = str_replace('j', '♩' , $EN18);
  	 $EN18 = str_replace('k', 'к' , $EN18);
	 $EN18 = str_replace('l', 'ℓ' , $EN18);
  	 $EN18 = str_replace('z', 'ℨ' , $EN18);
	 $EN18 = str_replace('x', '✘' , $EN18);
  	 $EN18 = str_replace('c', 'ḉ' , $EN18);
	 $EN18 = str_replace('v', 'ṽ' , $EN18);
  	 $EN18 = str_replace('b', '♭' , $EN18);
  	 $EN18 = str_replace('n', 'ℵ' , $EN18);
	 $EN18 = str_replace('m', 'Պ' , $EN18);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN18[1], 
    ]);
	  }
	 $EN19 =   explode("/nick", $text1);
    if($EN19[1]){
	 $EN19 = str_replace('q', 'զ' , $EN19);
  	 $EN19 = str_replace('w', 'Ŵ' , $EN19);
	 $EN19 = str_replace('e', 'є' , $EN19);
  	 $EN19 = str_replace('r', 'я' , $EN19);
	 $EN19 = str_replace('t', 'ṭ' , $EN19);
  	 $EN19 = str_replace('y', 'ʏ' , $EN19);
	 $EN19 = str_replace('u', 'ȗ' , $EN19);
  	 $EN19 = str_replace('i', 'ı' , $EN19);
	 $EN19 = str_replace('o', 'ȏ' , $EN19);
  	 $EN19 = str_replace('p', 'ק' , $EN19);
	 $EN19 = str_replace('a', 'ѧ' , $EN19);
  	 $EN19 = str_replace('s', 'ś' , $EN19);
	 $EN19 = str_replace('d', 'Ԁ' , $EN19);
  	 $EN19 = str_replace('f', 'ғ' , $EN19);
	 $EN19 = str_replace('g', 'ɢ' , $EN19);
  	 $EN19 = str_replace('h', 'һ' , $EN19);
	 $EN19 = str_replace('j', 'j' , $EN19);
  	 $EN19 = str_replace('k', 'ҡ' , $EN19);
	 $EN19 = str_replace('l', 'ʟ' , $EN19);
  	 $EN19 = str_replace('z', '' , $EN19);
	 $EN19 = str_replace('x', '×' , $EN19);
  	 $EN19 = str_replace('c', 'ċ' , $EN19);
	 $EN19 = str_replace('v', 'ṿ' , $EN19);
  	 $EN19 = str_replace('b', 'ɞ' , $EN19);
  	 $EN19 = str_replace('n', 'ṅ' , $EN19);
	 $EN19 = str_replace('m', 'ṃ' , $EN19);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN19[1], 
    ]);
	  }
	 $EN20 =   explode("/nick", $text1);
    if($EN20[1]){
	 $EN20 = str_replace('q', 'q̲̅' , $EN20);
  	 $EN20 = str_replace('w', 'w̲̅' , $EN20);
	 $EN20 = str_replace('e', 'e̲̅' , $EN20);
  	 $EN20 = str_replace('r', 'r̲̅' , $EN20);
	 $EN20 = str_replace('t', 't̲̅' , $EN20);
  	 $EN20 = str_replace('y', 'y̲̅' , $EN20);
	 $EN20 = str_replace('u', 'u̲̅' , $EN20);
  	 $EN20 = str_replace('i', 'i̲̅' , $EN20);
	 $EN20 = str_replace('o', 'o̲̅' , $EN20);
  	 $EN20 = str_replace('p', 'p̲̅' , $EN20);
	 $EN20 = str_replace('a', 'a̲̅' , $EN20);
  	 $EN20 = str_replace('s', 's̲̅' , $EN20);
	 $EN20 = str_replace('d', 'd̲̅' , $EN20);
  	 $EN20 = str_replace('f', 'f̲̅' , $EN20);
	 $EN20 = str_replace('g', 'g̲̅' , $EN20);
  	 $EN20 = str_replace('h', 'h̲̅' , $EN20);
	 $EN20 = str_replace('j', 'j̲̅' , $EN20);
  	 $EN20 = str_replace('k', 'k̲̅' , $EN20);
	 $EN20 = str_replace('l', 'l̲̅' , $EN20);
  	 $EN20 = str_replace('z', 'z̲̅' , $EN20);
	 $EN20 = str_replace('x', 'x̲̅' , $EN20);
  	 $EN20 = str_replace('c', 'c̲̅' , $EN20);
	 $EN20 = str_replace('v', 'v̲̅' , $EN20);
  	 $EN20 = str_replace('b', 'b̲̅' , $EN20);
  	 $EN20 = str_replace('n', 'n̲̅' , $EN20);
	 $EN20 = str_replace('m', 'm̲̅' , $EN20);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN20[1], 
    ]);
	  }
	$EN21 =   explode("/nick", $text1);
    if($EN21[1]){
	 $EN21 = str_replace('q', 'q͙' , $EN21);
  	 $EN21 = str_replace('w', 'w͙' , $EN21);
	 $EN21 = str_replace('e', 'e͙' , $EN21);
  	 $EN21 = str_replace('r', 'r͙' , $EN21);
	 $EN21 = str_replace('t', 't͙' , $EN21);
  	 $EN21 = str_replace('y', 'y͙' , $EN21);
	 $EN21 = str_replace('u', 'u͙' , $EN21);
  	 $EN21 = str_replace('i', 'i͙' , $EN21);
	 $EN21 = str_replace('o', 'o͙' , $EN21);
  	 $EN21 = str_replace('p', 'p͙' , $EN21);
	 $EN21 = str_replace('a', 'a͙' , $EN21);
  	 $EN21 = str_replace('s', 's͙' , $EN21);
	 $EN21 = str_replace('d', 'd͙' , $EN21);
  	 $EN21 = str_replace('f', 't͙' , $EN21);
	 $EN21 = str_replace('g', 'g͙' , $EN21);
  	 $EN21 = str_replace('h', 'h͙' , $EN21);
	 $EN21 = str_replace('j', 'j͙' , $EN21);
  	 $EN21 = str_replace('k', 'k͙' , $EN21);
	 $EN21 = str_replace('l', 'l͙' , $EN21);
  	 $EN21 = str_replace('z', 'z͙' , $EN21);
	 $EN21 = str_replace('x', 'x͙' , $EN21);
  	 $EN21 = str_replace('c', 'c͙' , $EN21);
	 $EN21 = str_replace('v', 'v͙' , $EN21);
  	 $EN21 = str_replace('b', 'b͙' , $EN21);
  	 $EN21 = str_replace('n', 'n͙' , $EN21);
	 $EN21 = str_replace('m', 'm͙' , $EN21);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN21[1], 
    ]);
	  }
	 $EN22 =   explode("/nick", $text1);
    if($EN22[1]){
	 $EN22 = str_replace('q', 'q⃠' , $EN22);
  	 $EN22 = str_replace('w', 'w⃠' , $EN22);
	 $EN22 = str_replace('e', 'e⃠' , $EN22);
  	 $EN22 = str_replace('r', 'r⃠' , $EN22);
	 $EN22 = str_replace('t', 't⃠' , $EN22);
  	 $EN22 = str_replace('y', 'y⃠' , $EN22);
	 $EN22 = str_replace('u', 'u⃠' , $EN22);
  	 $EN22 = str_replace('i', 'i⃠' , $EN22);
	 $EN22 = str_replace('o', 'o⃠' , $EN22);
  	 $EN22 = str_replace('p', 'p⃠' , $EN22);
	 $EN22 = str_replace('a', 'a⃠' , $EN22);
  	 $EN22 = str_replace('s', 's⃠' , $EN22);
	 $EN22 = str_replace('d', 'd⃠' , $EN22);
  	 $EN22 = str_replace('f', 'f⃠' , $EN22);
	 $EN22 = str_replace('g', 'g⃠' , $EN22);
  	 $EN22 = str_replace('h', 'h⃠' , $EN22);
	 $EN22 = str_replace('j', 'j⃠' , $EN22);
  	 $EN22 = str_replace('k', 'k⃠' , $EN22);
	 $EN22 = str_replace('l', 'l⃠' , $EN22);
  	 $EN22 = str_replace('z', 'z⃠' , $EN22);
	 $EN22 = str_replace('x', 'x⃠' , $EN22);
  	 $EN22 = str_replace('c', 'c⃠' , $EN22);
	 $EN22 = str_replace('v', 'v⃠' , $EN22);
  	 $EN22 = str_replace('b', 'b⃠' , $EN22);
  	 $EN22 = str_replace('n', 'n⃠' , $EN22);
	 $EN22 = str_replace('m', 'm⃠' , $EN22);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN22[1], 
    ]);
	  }
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@UzBeK_o7_-_-_-_-_-_-_-_-_-_//



	 $EN23 =   explode("/nick", $text1);
    if($EN23[1]){
	 $EN23 = str_replace('q', 'Ꮔ' , $EN23);
  	 $EN23 = str_replace('w', 'Ꮚ' , $EN23);
	 $EN23 = str_replace('e', 'Ꮛ' , $EN23);
  	 $EN23 = str_replace('r', 'ᖇ' , $EN23);
	 $EN23 = str_replace('t', 'Ꮏ' , $EN23);
  	 $EN23 = str_replace('y', 'Ꭹ' , $EN23);
	 $EN23 = str_replace('u', 'Ꮜ' , $EN23);
  	 $EN23 = str_replace('i', 'Ꮂ' , $EN23);
	 $EN23 = str_replace('o', 'Ꮻ' , $EN23);
  	 $EN23 = str_replace('p', 'Ꮅ' , $EN23);
	 $EN23 = str_replace('a', 'Ꭿ' , $EN23);
  	 $EN23 = str_replace('s', 'Ꭶ' , $EN23);
	 $EN23 = str_replace('d', 'Ꮄ' , $EN23);
  	 $EN23 = str_replace('f', 'Ꮏ' , $EN23);
	 $EN23 = str_replace('g', 'Ꮆ' , $EN23);
  	 $EN23 = str_replace('h', 'Ꮒ' , $EN23);
	 $EN23 = str_replace('j', 'Ꮰ' , $EN23);
  	 $EN23 = str_replace('k', 'Ꮶ' , $EN23);
	 $EN23 = str_replace('l', 'l' , $EN23);
  	 $EN23 = str_replace('z', 'Ꮓ' , $EN23);
	 $EN23 = str_replace('x', 'Ꮿ' , $EN23);
  	 $EN23 = str_replace('c', 'Ꮳ' , $EN23);
	 $EN23 = str_replace('v', 'Ꮙ' , $EN23);
  	 $EN23 = str_replace('b', 'Ᏸ' , $EN23);
  	 $EN23 = str_replace('n', 'Ꮑ' , $EN23);
	 $EN23 = str_replace('m', 'm' , $EN23);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN23[1], 
    ]);
	  }
	
	if(mb_stripos($text,"sport1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4b4b23e4-f3d3-42b1-9c5d-615ac62ef5ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
} 
if(mb_stripos($text,"sport2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/08e30364-b0cf-48df-80f2-964bfe5547e4/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2aeefb25-2d78-4058-8cc7-74e2b4083e50/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fc3c8bc5-a48c-47f0-b034-b258b3abce68/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/79ff2b19-667e-43c4-9164-332330dc6f1b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e33c12b4-1128-4129-b31f-2c31cb0878c7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"st1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/d1d5e766-8cd8-424f-aa4d-fbc07908a8d2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
} 
if(mb_stripos($text,"st2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/99e9e246-fca4-4fbb-a7b2-a2ff497d85b3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"QR") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$ex[1] ",
'caption'=>"QR CODE by @iPHPCODEBOT
You write $ex[1]",
]);
}
if(mb_stripos($text,"para") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fa5b9460-2773-4c4d-a3d6-1f733bc42dba/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"test4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=356&text1=$ex[1]&text2=dhurgham ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bd00f834-d5f9-475a-ad48-0c6126f077c6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sport9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/48125ab7-a743-4f54-8da8-b2c6230e710f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}

if(mb_stripos($text,"crazy1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a23b1f8-1793-46ee-993b-d6c83b8df0dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/87ea7fe8-4e10-4819-8814-60d63ce8f9b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi??",
]);
}
if(mb_stripos($text,"crazy3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f8d2306a-8987-40a0-9de8-d448a6f2b048/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5e47943d-4857-474d-b7ca-009652b9e52d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/55829798-84dd-428f-871f-0a83955e2d49/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef89e50c-2d4e-42da-a6bb-90af099b66fa/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ab03a446-9f79-4278-aebf-141d6baa5e79/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bf0b8391-41e4-4f60-ace9-a18a114306e1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazy9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/cddaf4c3-5ab9-4957-9da0-437cd56d7a6c/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"crazyX") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/297c288d-4c21-4f1d-958b-e617feaef9be/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2368b276-9678-4611-8d9f-232f858ffc5a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/95e81a44-d412-49cf-a492-bf9530c0bcf2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea44541f-995f-4525-89d4-17739b855a2e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1bfbead8-fd97-43f7-8e10-020578e6c349/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/85c09ff0-40bb-40c3-8c0c-802cc19a2297/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a97a62b-9851-42c0-96c8-8afe40f57e0a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b43f1777-660c-482c-bacd-2e1642baf003/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/11a70f98-24bf-41ff-8470-b9b096af31dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"msc9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ae3a80f0-5fd7-4fe6-bde8-a1ae017e33c1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"mscX") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f05edb5b-c016-4d31-955f-73a3e082e1c2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d70e3bd-71b3-46e0-9dc8-7dfe3389e7e5/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/72b97da3-2e87-4e4b-889d-04c8711e805d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0b55f069-103e-459b-bd33-6dbdfc7ca811/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/93857f38-1788-47e3-9560-0220b88ac94e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e18e8c65-b2aa-49e6-8a07-ef2464ff25ae/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e0e7aaf6-f3e6-457f-99ed-dc3487e29912/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/23eaaf26-a0f8-41f4-9ef5-468dc8b5bde3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epic9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45218131-8405-40a4-bb04-24d1710eff0d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"epicX") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b6d2d7ef-e4cb-44cd-9979-12068b09ec47/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"rok") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4a2ea46d-5501-48a5-9d8d-8110f9420b85/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"sp") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2de6d448-afc7-425a-b51f-903fb0bc9340/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"game1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b54cb74a-f0c5-4071-934b-019257430e4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @iPHPCODEBOT
You write $ex[1]",
]);
}
if(mb_stripos($text,"game2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a9a8ca01-e658-4339-917d-0010ddeaa0b6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @iPHPCODEBOT
You write $ex[1]",
]);
}
if(mb_stripos($text,"men1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/163f89d3-60a5-40ac-9325-0299844d5d67/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"men2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/983dc163-be5a-406d-848e-9cc4e2b60109/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"girl1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=372&text1=$ex[1]&text2=dhurgham ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"girl2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d3db074-52eb-4888-8a35-f683ec1cef0f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"girl3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9988e891-579c-47f5-bfaf-959c3a2d8e25/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"girl4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dff12af1-28d3-4645-aba0-b209b6ee8ed7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"idea") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2085a114-720f-4f81-bfeb-778ea5ac2052/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"cars1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1d774b95-f479-4380-a92b-51fe4c821129/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"8martch") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fbff98fe-0132-4346-aa2b-af4488ebb4fd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"cars2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b3236a76-dc4b-4605-a7a3-6649fb2da488/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"moto") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45c72bf1-5935-4eee-a65e-e8dd850e37b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"moto logotip by @iPHPCODEBOT
You write $ex[1]",
]);
}
if(mb_stripos($text,"btf") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a3defcce-fb2e-4a44-b654-4e3246141f94/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/707a772e-87ac-4225-be00-5715df731443/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/be26c778-4cbd-4a14-b8b1-4b8b1fe07952/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4e78e518-91c8-40ea-bbc9-eba385c6d796/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/28ebcaf7-2371-43e9-8e1a-da980a834b1a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0a676c20-7b98-4bea-8652-dc0ad06f6c54/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0d556a87-9ade-426a-b60a-e7575aa3edeb/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e05bef29-964a-4a57-b6c2-128266b9c2c3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5223e7c6-3cc7-41b2-bb43-9ca4fc8b2d99/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tach9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7d1a812d-9e8b-4451-a38c-d384ab1ed98e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"tachX") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/127564ac-8114-43ce-9686-2f6befb8b14a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨",
]);
}
if(mb_stripos($text,"dj1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9bd9f7b0-971d-460b-9f35-b30091cc32f6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dde89710-82d1-4d2a-8752-42bebc9b9a05/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7229c0d6-cc4f-4e47-87b2-3b01285f502d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ad38bcc8-b76b-483c-88cb-41af5218d9ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/3f607d24-e269-4fd0-8ad1-34d315a51558/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5275891b-6017-49a1-86cf-def79699e926/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/27a7162f-f00f-4d64-82aa-d77561298f14/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ce7f825f-150c-46a0-842a-7235bc0442af/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"dj9") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7c8b9cd6-4636-4230-bd82-d083b414c141/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}
if(mb_stripos($text,"djX") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea509e1b-89eb-457b-810b-2f3d42cc6841/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"😀Chiroyli logotipni @iPHPCODEBOT yasadi🎨
You write $ex[1]",
]);
}

$text1 = $update->message->text;
$chat_id = $update->message->chat->id;
if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
'parse_mode'=>"html",
]);
}

$replyik = $message->reply_to_message->text;
    $yubbi = "📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text == "👤Send user" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }   
      
       if($text == "👥Send group" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text == "/cancel"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
}

if(isset($update) and $Skirish == "true"){
if(isset($message->new_chat_member) or isset($message->left_chat_member)!==false){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
}

if($text1 == '/file' and $chat_id == $admin){
bot('sendDocument',['chat_id'=>$chat_id,'document'=>new CURLFile(__FILE__)]);
}


//bu kod @UzBeK_o7 tomonidan yozilgan @OSIYO_HACKERLARI va @PhpCoderTM kanallarida tarqatildi//
?>
	
	
	
	