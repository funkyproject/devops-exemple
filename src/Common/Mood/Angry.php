<?php
namespace FDJ\Common\Mood;

use FDJ\Common\MoodInterface;

class Angry implements MoodInterface
{

    public function emphasize($string)
    {
        return sprintf("Oh, %s !!!", $string);
    }
}