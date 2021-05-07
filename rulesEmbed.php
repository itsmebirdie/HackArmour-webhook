<?php

require "./botEmbed.php";

$dw = new DiscordWebhook($webhook);

$msg = $dw->newMessage()
 -> #content goes here
$res = $msg->send();