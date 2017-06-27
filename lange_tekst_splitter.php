// Lange tekst opsplitsen

// Bovenaan TP toevoegen
<?php
$text = '<%=LangeTekst1%>';
$partialtext = explode("</span>", $text);
?>

// Echo op plaats waar je de tekst wilt hebben
<?php echo $partialtext[0]; ?>
<?php echo $partialtext[1]; ?>
