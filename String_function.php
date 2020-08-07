<?php
 echo "----html_entity_decode and htmlentities----<br>";
 $orig = "I'II \"walk\" the <b>dog</b> now";

 $a = htmlentities($orig);// I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

 $b = html_entity_decode($orig);// I'll "walk" the <b>dog</b> now

 echo $a."<br>";
// echo "<b>";
 echo $b;

?>

<br><br>

<?php

$str = "A 'quote' is <b>bold<b>";

echo htmlentities($str)."<br>";//A 'quote' is &lt;b&gt;bold&lt;/b&gt;

echo htmlentities($str,ENT_QUOTES)."<br>";//A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;

$str1 = "\X8F!!!";

echo htmlentities($str1,ENT_QUOTES, "UTF-8")."<br>";//output an empty string

echo htmlentities($str1,ENT_QUOTES | ENT_IGNORE, "UTF-8");


?>

<br><br>

<?php
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

// note that here the quotes aren't converted
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>


<?php
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new."<br>"; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>