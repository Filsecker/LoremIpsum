<HTML>
<BODY>
<?php

   include("\lib\LoremIpsumGenerator.php");

    $generator = new LoremIpsumGenerator($wordsPerParagraph=100,$language='german');
    $numbOfWords=1000; $format = 'html'; $loremipsum = true;

    echo $generator->getContent($numbOfWords, $format, $loremipsum);
    echo '----';
    print_r (  $generator->getParagraphs(3,'html',true ) );

?>
</BODY>
</HTML>