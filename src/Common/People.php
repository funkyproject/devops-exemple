<?php
namespace FDJ\Common;

class People
{

    private $mood;

    public function say($string)
    {
        if ($this->mood) {
            return $this->mood->emphasize($string);
        }
        return $string;
    }

    public function feel(MoodInterface $mood)
    {
        $this->mood = $mood;
    }


}