# Modification for personal use of of [geecu/LoremIpsum](https://github.com/geecu/LoremIpsum)

## Reason

* Playing around with php-packages and use with github for laravel+compose
* Improved random number generator for word selection, ca. three times faster and better randomness using mt_rand function
* Added German language text.

# install using composer:

composer require filsecker/lorem-ipsum

## Basic Usage and Description

The german version is based upon the translated latin text by Marcus Tullius Cicero

* Function getContent:

Call of getContent will return a 'Lorem Ipsum' text in the selected format 'html', 'plain' or 'txt'. default value is 'html'
Format 'plain' is without parahraphs. 'txt' means intend paragraphs and line breaks.


Parameters:
* $wordsPerParagraph .. used when you generate a loreipsum-text with a specified word count. maximum value, exact paragraph words count varies.
* $format .. see description before ( 'html', 'plain' or 'txt' )
* $loremipsum .. boolean, if set to true paragraphes will begin with 'Lorem Ipsum'
* $language .. available languages are 'latin' and 'german', default parameter value is 'latin'


    $generator = new Filsecker\LoremIpsum\LoremIpsumGenerator($wordsPerParagraph=100,$language='latin');
    $numbOfWords=1000; $format = 'html'; $loremipsum = true;

    echo $generator->getContent($numbOfWords, $format, $loremipsum);


* Function getParagraphs($nrOfParagraphs,$format='array',$loremipsum=true)

allowed formats are 'array' for a php array as return value and 'html' and 'txt'.

example: $generator->getParagraphs(3,'html',true ) ;

you can also adjust for paragraph length using two parameters for mean and standard deviation of the number of sentences(showing default values:)

getParagraphs($nrOfParagraphs=1,$format='array',$loremipsum=true, $paragraphMean = 5, $paragraphStDev = 2)


## Live URL
none available, just a library

## Outside code

* https://github.com/geecu/LoremIpsum
