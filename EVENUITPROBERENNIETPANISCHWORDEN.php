<?php

$post = array(
    "Vraag1" => array(
        "antwoord"  => "Weefsel",
        "vraag"     => "Weet je wat nummer 18 is",
    ),
);

//Nakijken
//Voor elke post $key = Vraag1, $vraag = ingevulde
foreach($_POST as $key => $vraag)
{
    if($vraag == $post[$key]['antwoord']) {
        //Goed
        echo "Goed";
    }else{
        //Fout
        echo "Fout";
    }
}

?>
<pre><?= print_r($_POST, true); ?></pre>
<hr>
<form method="POST">
    <input type="text" name="Vraag1" value="Weefsel">
    <input type="submit">
</form>
