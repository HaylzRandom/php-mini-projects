<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
    $story = "\nThe ${singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd $distance_unit to go before I $verb.\n";
    return $story;
}

echo generateStory("dog", "eat", "purple", "yards");
echo generateStory("car", "cook", "vermilion", "meters");
echo generateStory("empty void", "speak", "beige", "miles");
