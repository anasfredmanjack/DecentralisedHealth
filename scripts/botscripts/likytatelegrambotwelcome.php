<?php
$path = "https://api.telegram.org/bot7336174449:AAFQQ5C1i_sdjdNMviB1xPol-MFeM1n3ATI";

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$first_name = $update['message']['chat']['first_name'];
$message = $update["message"]["text"];

if (strpos($message, "/start") === 0) {
   // Create keyboard
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "Test Likyta",
                    "url" => "https://likyta.com/"
                ],
                [
                    "text" => "Join the Community",
                    "url" => "https://t.me/Likyta"
                ]
            ]
        ]
    ]);
    
       $responseMessage = "Hello $first_name,\n\n"
            . "Likyta is a forward-thinking healthcare ecosystem that aims to bring the next generation of medical services to the forefront. Long wait times and limited access to healthcare are now a thing of the past. With Likyta, quality healthcare is just a click away.\n\n"
            . "Come and explore the features of Likyta, and discover its potential to transform the healthcare experience. Let's redefine the standards in healthcare delivery and make the patient journey even better.\n\n"
            . "We invite you to join us in creating a future where healthcare is genuinely inclusive and accessible to everyone.";
    
    // Send keyboard

file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=".urlencode($responseMessage)."&reply_markup={$keyboard}");
}
?>