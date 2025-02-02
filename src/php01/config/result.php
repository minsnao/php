<?php
$onamae = htmlspecialchars($_POST["onamae"], ENT_QUOTES);
$qes = htmlspecialchars($_POST["qes"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は" . $onamae . "<br />";
print "ご希望の商品は" . $qes . "<br />";
print "注文数は" . $number . "です";

