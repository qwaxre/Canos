<?php

ob_start();

///////////===[IMPORTING RESOURCES]===///////////

include "Vars.php";
include "Functions.php";

$API_KEY ="6306153897:AAGqVVKdH0D2mNGBeOstUWty05WmSbvoVEo"
///////////===[IMPORTING PLUGINS]===///////////

include "bin.php";
include "iban.php";
include "stripekey.php";
include "weather.php";
include "dictionary.php";
include "proxy.php";
include "covid.php";
include "currency.php";


////////////////=========[START MESSAGE]=========////////////////

if(strpos($text, "/start") === 0){
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"<b>SEN $from_fname,

@QCC_CHECKER_BOT'A HOŞ GELDİNİZ 

KOMUTLARI ÖĞRENMEK İÇİN HELP BUTONUNA BASINIZ !</b>",
	'parse_mode'=>'html',
	'reply_to_message_id'=> $message_id,
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Help 💬",'callback_data'=>"help"]],[['text'=>"Our Channel 🌐",'url'=>"http://t.me/rovespro"],['text'=>"My Source Code ✅",'url'=>"https://www.instagram.com/qw4xre"]]
  ],'resize_keyboard'=>true])
	
  ]);


//////////////////////////////////////////////

if (isset($TG_DUMP_CHAT)) {

    bot('sendmessage',[
	'chat_id'=>$TG_DUMP_CHAT,
	'text'=>"<b>User Started Bot</b>

First Name:- $from_fname
User Name:- @$username2
User ID:- <code>$from_id</code>
Current Time:- <code>$date1</code>",
	'parse_mode'=>'html',
	
  ]);
}

}

////////////////=========[HELP MENU]=========////////////////

if($data == "help"){ //Sends Help Menu if Help Button is clicked
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>Hello there! I'm $USERNAMEBOT
I can do Several Things!</b>

Click on the buttons below to get documentation about specific modules!",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keybard'=>[
	[['text'=>"Bin Checker",'callback_data'=>"bin"],['text'=>"Covid-19 Stats",'callback_data'=>"covid"],['text'=>"Currency Converter",'callback_data'=>"monigay"]],[['text'=>"Dictionary",'callback_data'=>"dict"],['text'=>"IBAN Checker",'callback_data'=>"iban"],['text'=>"Proxy Scrapper",'callback_data'=>"proxy"]],[['text'=>"SK Checker",'callback_data'=>"stripe"],['text'=>"Weather",'callback_data'=>"weather"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[HELP MENU]=========////////////////

if(strpos($text, "/help") === 0){ //Sends Help Menu if User sent /help. 
	bot('sendmessage',[    //Can't use "OR" Operator because it edits the Message in Callback Query and Sends Message in /help.
	'chat_id'=>$chat_id,
	'text'=>"<b>Hello there! I'm $USERNAMEBOT
I can do Several Things!</b>

Click on the buttons below to get documentation about specific modules!",
	'parse_mode'=>'html',
	'reply_to_message_id'=> $message_id,
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Bin Checker",'callback_data'=>"bin"],['text'=>"Covid-19 Stats",'callback_data'=>"covid"],['text'=>"Currency Converter",'callback_data'=>"monigay"]],[['text'=>"Dictionary",'callback_data'=>"dict"],['text'=>"IBAN Checker",'callback_data'=>"iban"],['text'=>"Proxy Scrapper",'callback_data'=>"proxy"]],[['text'=>"SK Checker",'callback_data'=>"stripe"],['text'=>"Weather",'callback_data'=>"weather"]],
	],'resize_keyboard'=>true])
	]);
}

////////////////=========[BIN INFO]=========////////////////

if($data == "bin"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Bin Checker 🌀

Command:</b>

/bin <code>&lt;bin&gt;</code> - Checks the Bin and Provides Information",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[COVID-19 STATS]=========////////////////

if($data == "covid"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Covid-19 Stats 🌀

Command:</b>

/covid - Provides Worldwide Covid-19 Stats
/covid <code>&lt;country&gt;</code> - Provides Covid-19 Stats for the Given Country",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[CURRENCY CONVERTER]=========////////////////

if($data == "monigay"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Currency Converter 🌀

Command:</b>

/cash <code>&lt;Value&gt;&lt;from&gt;&lt;to&gt;</code> - Converts the Currency

<b>Example:- /cash 20 USD INR - Converts 20 USD to INR</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[DICTIONARY]=========////////////////

if($data == "dict"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Dictionary 🌀

Command:</b>

/dict <code>&lt;word&gt;</code> - Provides the Meaning of the Given Word.",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[IBAN CHECKER]=========////////////////

if($data == "iban"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 IBAN Checker 🌀

Command:</b>

/iban <code>&lt;iban&gt;</code> - Checks if the Provided IBAN is Valid or Invalid.",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[STRIPE KEY CHECKER]=========////////////////

if($data == "stripe"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 SK Key Checker 🌀

Command:</b>

/sk <code>&lt;sk_live_xxxx&gt;</code> - Checks if the Provided Stripe API Key is Valid or Invalid.",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[PROXY]=========////////////////

if($data == "proxy"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Proxy Scrapper 🌀

Command:</b>

/http - Sends Fresh HTTPs Proxies
/socks4 - Sends Fresh Socks4 Proxies
/socks5 - Sends Fresh Socks5 Proxies",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[WEATHER INFO]=========////////////////

if($data == "weather"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Weather Info 🌀

Command:</b>

/weather <code>&lt;Name of City&gt;</code> - Provides the Current Weather of the Provided City.

<b>Note:-</b> <code>It only Supports Cities.</code>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


?>
