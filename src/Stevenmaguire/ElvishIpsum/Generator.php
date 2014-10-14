<?php namespace Stevenmaguire\ElvishIpsum;

use \Badcow\LoremIpsum\Generator as IpsumGenerator;

class Generator implements GenerateInterface
{
    private $gen;

    public function __construct($words = [])
    {
        $this->gen = new IpsumGenerator;
        if (!empty($words)) {
            $this->gen->setWords($words);
        }
    }

    public function getWords($count)
    {
        return $this->gen->getRandomWords($count);
    }

    public function getSentences($count)
    {
        return $this->gen->getSentences($count);
    }

    public function getParagraphs($count)
    {
        return $this->gen->getParagraphs($count);
    }
}
