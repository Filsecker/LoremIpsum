<HTML>
<BODY>
<?php

   include("\lib\LoremIpsumGenerator.php");

    $generator = new LoremIpsumGenerator($wordsPerParagraph=100,$language='latin');
    $numbOfWords=1000; $format = 'html'; $loremipsum = true;

    echo $generator->getContent($numbOfWords, $format, $loremipsum);
    echo '----';
    echo $generator->getParagraphs(3,'html',true ) ;

?>
</BODY>
</HTML>