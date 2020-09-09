#!/usr/bin/php -q
<?php
// $api_key = "gt0nIpCK6bj5dtnsoJ9D";
// $password = "x";
// $yourdomain = "callpromn";
$number = $_GET['number'];
echo $number;
// echo "<script>console.log('Debug Objects: " . $number . "' );</script>";
// $urlSearch = "https://$yourdomain.freshdesk.com/api/v2/contacts?phone=".$number;
// $methodSearch = "get";
// $ticket_data = '';
// $responseSearch = make_request($ticket_data, $methodSearch, $urlSearch, $api_key, $password);
// $resContact = json_decode($responseSearch, true);
// $code = $resContact["info"]["http_code"];
// if($code == '200'){
//   $resContacts = json_decode($resContact["response"], true);
//   if(!empty($resContacts)){
//     foreach ($resContacts as $key => $contact) {
//       $method = "post";
//       $url = "https://$yourdomain.freshdesk.com/api/v2/tickets";
//       $ticket_data = json_encode(array(
//         "description" => $number." created this ticket by call",
//         "subject" => "Support needed..",
//         "email" => $number."@callpro.local",
//         "phone" => $number,
//         "requester_id" => $contact['id'],
//         "priority" => 1,
//         "status" => 2
//       ));
//       echo $response = make_request($ticket_data, $method, $url, $api_key, $password);
//     }
//   }else{
//     $contact_data = json_encode(array(
//       "name" => $number,
//       "email" => $number."@callpro.local",
//       "active" => true,
//       "phone" => $number
//     ));
//     $url = "https://$yourdomain.freshdesk.com/api/v2/contacts";
//     $method = "post";
//     $responseContact = make_request($contact_data, $method, $url, $api_key, $password);
//     $resContact = json_decode($responseContact, true);
//     $code = $resContact["info"]["http_code"];
//     if($code == 201) {
//       $method = "post";
//       $url = "https://$yourdomain.freshdesk.com/api/v2/tickets";
//       $ticket_data = json_encode(array(
//         "description" => $number." created this ticket by call",
//         "subject" => "Support needed..",
//         "email" => $number."@callpro.local",
//         "phone" => $number,
//         "requester_id" => $resContact["response"]["id"],
//         "priority" => 1,
//         "status" => 2
//       ));
//      echo $response = make_request($ticket_data, $method, $url, $api_key, $password);
//     }
//   }
// }

// function make_request($ticket_data, $method, $url, $api_key, $password){
//   if($method == "get"){
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_HEADER, true);
//     curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 2);
//     $server_output = curl_exec($ch);
//     $info = curl_getinfo($ch);
//     $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//     $headers = substr($server_output, 0, $header_size);
//     $response = substr($server_output, $header_size);
//   }elseif($method == "post"){
//     $ch = curl_init($url);
//     $header[] = "Content-type: application/json";
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//     curl_setopt($ch, CURLOPT_HEADER, true);
//     curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $ticket_data);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 2);
//     $server_output = curl_exec($ch);
//     $info = curl_getinfo($ch);
//     $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//     $headers = substr($server_output, 0, $header_size);
//     $response = substr($server_output, $header_size);
//   }
//    $response = json_encode(array(
//     "info" => $info,
//     "response" => $response
//   ));
//   // $logData = "URL =>".$url."\n"." data =>".$ticket_data."\n"." response =>".$response;
//   // writeToLog($logData);
//   return $response;
// }
// function  writeToLog($logdata)
// {
//   $file_name= "freshdesk.txt";
//   if(!file_exists($file_name)) $handle = fopen($file_name, 'w+');	
//   else $handle = fopen($file_name, 'a+');
//   if($handle) fwrite($handle, date('Y-m-d H:i:s')." ".$logdata."\n\r");
//   fclose($handle);
// }
// ?>
