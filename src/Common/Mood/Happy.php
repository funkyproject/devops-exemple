<?php
namespace FDJ\Common\Mood;

use FDJ\Common\MoodInterface;

class Happy implements MoodInterface
{

    public function emphasize($string)
    {
        return sprintf("Hey man, %s !", $string);
    }
}