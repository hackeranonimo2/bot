$token = '1830920565:AAFh6WZNzUwlu6jRne33Hh9EHynZW5LguTw';
function bot($method,$datas=[]){
  global $token;
      $url = "https://api.telegram.org/bot".$token."/".$method;
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
$cid = $message->chat->id;
$mid = $message->message_id;
$text = $message->text;


if($text=="/api1"){
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"π<b>Cargando...</b>",
 'parse_mode'=>"HTML"
 ]);//manba: 
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'β³Cargando...
ππππππππππ 10%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'β³Cargando...
ππππππππππ 20%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 30% '
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 40%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 50% '
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 60%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 70%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 80%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 90%'
 ]);//manba: 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'β³Cargando...
ππππππππππ 100%'
 ]); //manba: 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);//manba: 
 sleep(0.5);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"βaqui pon\nlo que vas a mostrarβ",
]);
}




https://api.telegram.org/bot1609058719:AAEKOeWPpv-lb2qeOWanDmvgtURqqIDuLLs/setWebhook?url=https://checker-logis-cental-anomoinomo.000webhostapp.com/index.php
