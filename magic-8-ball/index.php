<?php

function magic8Ball()
{
    echo "Tell me... What is your question?\n";
    $question = readline(">");
    echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: ";

    $choice = rand(0, 19);

    echo "\n" . $choice;

    echo "\n";

    switch ($choice) {
        case 0:
            echo "It is certain";
            break;
        case 1:
            echo "It is decidedly so.";
            break;
        case 2:
            echo "Without a doubt.";
            break;
        case 3:
            echo "Yes - definitely.";
            break;
        case 4:
            echo "You may rely on it.";
            break;
        case 5:
            echo "As I see it, yes.";
            break;
        case 6:
        case 7:
        case 8:
            echo "Most likely.";
            break;
        case 9:
        case 10:
        case 11:
            echo "Odds are kind of in your favour";
            break;
        case 12:
        case 13:
        case 14:
            echo "Not looking likely";
            break;
        case 15:
        case 16:
        case 17:
            echo "Slim chance";
            break;
        case 18:
            echo "2% percent chance";
            break;
        case 19:
            echo "Good God no";
            break;
    }
}

magic8Ball();
echo "\n";
magic8Ball();
echo "\n";
magic8Ball();
