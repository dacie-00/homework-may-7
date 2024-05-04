<?php

class Hangman
{
    private array $word;
    private array $guessedWord;
    private array $misses;
    private int $guessCount;
    private int $lives;
    private bool $win;
    private bool $lose;

    function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $words = ["bongo", "guitar", "piano", "overcomplicated", "occult", "foobar"];
        $chosenWord = strtoupper($words[rand(0, count($words) - 1)]);
        $this->word = str_split($chosenWord);
        $this->guessedWord = [];
        foreach ($this->word as $char) {
            $this->guessedWord[] = "_";
        }
        $this->misses = [];
        $this->win = false;
        $this->lose = false;
        $this->guessCount = 0;
        $this->lives = 5;
    }

    private function displayLoseStatus()
    {
        echo "You lost! RIP\n";
        $this->promptPlayAgain();
    }

    private function promptPlayAgain(): void
    {
        while (true) {
            echo "0) Play again\n";
            echo "1) Quit\n";
            $action = readline("Action: ");

            if (!in_array($action, ["0", "1"])) {
                echo "Invalid choice!\n";
                continue;
            }

            if ($action === "0") {
                echo "Starting new game!\n";
                $this->initialize();
                $this->play();
                break;
            }

            if ($action === "1") {
                echo "Goodbye!\n";
                exit();
            }
        }
    }

    public function play()
    {
        $this->playTurn();
    }

    private function playTurn()
    {
        while (true) {
            $this->display();
            if ($this->win) {
                $this->displayWinStatus();
                break;
            }
            if ($this->lose) {
                $this->displayLoseStatus();
                break;
            }
            $response = $this->promptUser();
            if (!$response) {
                continue;
            }
            $this->checkInput($response);
            $this->checkWin();
            $this->checkLose();
        }
    }

    private function display()
    {
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
        echo "\n";

        echo "Word: ";
        foreach ($this->guessedWord as $char) {
            echo "$char ";
        }

        echo "\n\n";

        echo "Misses: ";
        foreach ($this->misses as $char) {
            echo "$char";
        }

        echo "\n\n";

        echo "HP ";
        echo "|";
        echo str_repeat("=", $this->lives);
        echo "|";

        echo "\n\n";
    }

    private function displayWinStatus()
    {
        $missCount = count($this->misses);
        $hitRate = ($this->guessCount === 0) ? 0 : round(100 * ($this->guessCount - $missCount) / $this->guessCount);
        echo "Congratulations, you won!\n";
        echo "Correct guess rate - $hitRate%!\n";
        $this->promptPlayAgain();
    }

    private function promptUser()
    {
        $response = readline("Guess: ");
        if (!preg_match("/^[a-z]$/", strtolower($response))) {
            echo "Guess must be an alphabetic character!\n";
            return false;
        }
        if (strlen($response) !== 1) {
            echo "Guess must be a single character!\n";
            $this->playTurn();
            return false;
        }
        return strtoupper($response);
    }

    private function checkInput($input): void
    {
        if (in_array($input, $this->misses) || in_array($input, $this->guessedWord)) {
            echo "You already guessed this character!\n";
            return;
        }
        $guessCountIncremented = false;
        if (in_array($input, $this->word)) {
            foreach ($this->word as $index => $char) {
                if ($input == $char) {
                    $this->guessedWord[$index] = $char;
                    if (!$guessCountIncremented) {
                        $this->guessCount++;
                        $guessCountIncremented = true;
                    }
                }
            }
        } else {
            $this->misses[] = $input;
            $this->lives -= 1;
            $this->guessCount++;
        }
    }

    private function checkWin()
    {
        if (!in_array("_", $this->guessedWord)) {
            $this->win = true;
        }
    }

    private function checkLose()
    {
        if ($this->lives <= 0) {
            $this->lose = true;
        }
    }
}

$hangman = new Hangman();
$hangman->play();