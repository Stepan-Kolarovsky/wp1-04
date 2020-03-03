<?php
  $age=18;
if ($age >=18) {
    $answer="Děkujeme za kšeft. Přiďte zas.";
    $imgURL="https://www.ruskolobok.cz/i/?i=4601728011086.jpg";
} else {
    $answer="Máš smůlu chlapče, alkohol a tabák prodáváme osobám starším 18 let";
    $imgURL="https://previews.123rf.com/images/axis213/axis2131802/axis213180200004/94912552-no-alcohol-drink-sign-vector-logo-element-no-drinking-sign-no-alcohol-sign-isolated-on-white-backgro.jpg" ;

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?=$answer ?> 
     <img src="<?=$imgURL?>">

</body>
</html>