<?php namespace Stevenmaguire\ElvishIpsum;

interface GenerateInterface
{
    public function getWords($count);
    public function getSentences($count);
    public function getParagraphs($count);
}
