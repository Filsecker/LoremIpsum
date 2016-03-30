# Modification for personal use of of [geecu/LoremIpsum](https://github.com/geecu/LoremIpsum)

## Reason

* Playing around with php-packages and use with github for laravel+compose
* Improved random number generator for word selection, ca. three times faster and better randomness using mt_rand function

## Basic Usage and Description

* Function getContent:

Call of getContent will return a 'Lorem Ipsum' text in the selected format 'html', 'plain' or 'txt'. default value is 'html'
Format 'plain' is without parahraphs. 'txt' means intend paragraphs and line breaks.


Parameters:
* $numbOfWords .. number of words of returned text.
* $format .. see description before ( 'html', 'plain' or 'txt' )
* $loremipsum .. boolean, if set to true paragraphes will begin with 'Lorem Ipsum'


    $generator = new LoremIpsumGenerator();
    $numbOfWords=1000; $format = 'html'; $loremipsum = true;

    echo $generator->getContent($numbOfWords, $format, $loremipsum);


* Function getParagraphs($nrOfParagraphs,$format='array',$loremipsum=true)

allowed formats are 'array' for a php array as return value and 'html' and 'txt'.

example: $generator->getParagraphs(3,'html',true ) ;


## Live URL
none available, just a library

## Outside code

* https://github.com/geecu/LoremIpsum
