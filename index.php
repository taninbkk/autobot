<?php
require_once('./vendor/autoload.php'); 
// Namespace 
use \LINE\LINEBot\HTTPClient\CurlHTTPClient; 
use \LINE\LINEBot; 
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder; 

$channel_token = 'AEaS5PuyZeaw5YrkPJHXdjxOAZpR4BrHTO7KYfPHyEgbq12u5NG262Ly6QwsXm82psTJ9YXIK2kJQioQaebCGdTWttjMep8hUSa8iQAZnYhlZpA+MdRctJdfxtjSZxBYV6UXm8LRxxzHRQi58NdTWAdB04t89/1O/w1cDnyilFU='; 
$channel_secret = 'cdfd5ceee43ac934e4dff444627fc68b'; 
// Get message from Line API 
$content = file_get_contents('php://input'); 
$events = json_decode($content, true); 

if (!is_null($events['events'])) { 
	// Loop through each event 
	foreach ($events['events'] as $event) { 
		// Line API send a lot of event type, we interested in message only. 
		if ($event['type'] == 'message') { 
			switch($event['message']['type']) { 
				case 'text': 
				// Get replyToken 
				$replyToken = $event['replyToken']; 
					// Reply message 
					$respMessage = 'Hello, your message is '. $event['message']['text']; 
					
					$httpClient = new CurlHTTPClient($channel_token);
					$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret)); 
					$textMessageBuilder = new TextMessageBuilder($respMessage); 
					$response = $bot->replyMessage($replyToken, $textMessageBuilder); 
				break; 
			} 
		} 
	} 
} 
echo "OK";
