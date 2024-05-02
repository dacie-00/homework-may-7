<?php

//Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.
//(...a game already in progress)
//
//	X   O
//	O X X
//	  X O
//
//'O', choose your location (row, column): 0 1
//
//	X O O
//	O X X
//	  X O
//
//'X', choose your location (row, column): 2 0
//
//	X O O
//	O X X
//	X X O
//
//The game is a tie.

class Cell
{
    const EMPTY = " ";
    const X = "X";
    const O = "O";
}

class State
{
    const WIN = 1;
    const TIE = 2;
    const PLAY = 3;
}

class TicTacToe
{
    private array $board;
    private string $turn;
    private string $winner;
    private int $state;

    public function __construct()
    {
        $this->initialize();
    }

    private function initialize()
    {
        $this->board = [[Cell::EMPTY, Cell::EMPTY, Cell::EMPTY], [Cell::EMPTY, Cell::EMPTY, Cell::EMPTY], [Cell::EMPTY, Cell::EMPTY, Cell::EMPTY]];
        $this->turn = Cell::X;
        $this->state = State::PLAY;
        $this->winner = Cell::EMPTY;
    }

    public function play()
    {
        while (true) {
            $this->displayBoard($this->board);
            if ($this->state == State::WIN) {
                echo "Congratulations, '$this->winner'. You've won!\n";
                $this->showEndScreen();
                break;
            }
            if ($this->state == State::TIE) {
                echo "It's a tie!\n";
                $this->showEndScreen();
                break;
            }
            $response = $this->promptUserTurn($this->turn);
            $position = $this->interpretResponse($response);
            if (!$position) {
                continue;
            }
            if ($this->setCell($position[0], $position[1], $this->turn)) {
                if ($this->checkWinner() == $this->turn) {
                    $this->state = State::WIN;
                    $this->winner = $this->turn;
                    continue;
                }
                $this->turn = $this->turn === CELL::X ? CELL::O : CELL::X;
            }
            foreach ($this->board as $row) {
                if (in_array(CELL::EMPTY, $row)) {
                    continue 2;
                }
            }
            $this->state = State::TIE;
        }
    }

    private function displayBoard(array $board): void
    {
        echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
        echo "---+---+---\n";
        echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
        echo "---+---+---\n";
        echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
    }

    private function showEndScreen()
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

    private function promptUserTurn($user): string
    {
        return readline("'$user', choose your location! (row, column): ");
    }

    private function interpretResponse(string $response): ?array
    {
        $words = preg_split("/[\s,]+/", $response);

        if (count($words) > 2 || count($words) < 2) {
            echo "Invalid parameter count!\n";
            return null;
        }
        foreach ($words as $word) {
            if (!is_numeric($word)) {
                echo "Positions have to be integers\n";
                return null;
            }

            if ($word > 2 || $word < 0) {
                echo "Position is out of bounds!\n";
                return null;
            }
        }

        return [$words[0], $words[1]];
    }

    function setCell($row, $column, string $Cell): bool
    {
        if ($this->board[$row][$column] !== Cell::EMPTY) {
            echo "Invalid position, cell is taken!\n";
            return false;
        }
        $this->board[$row][$column] = $Cell;
        return true;
    }

    private function checkWinner(): string
    {
        foreach ($this->board as $row) {
            if ($this->cellsMatch($row)) {
                return $this->turn;
            }
        }
        for ($col = 0; $col < 2; $col++) {
            if ($this->cellsMatch(array_column($this->board, $col))) {
                return $this->turn;
            }
        }
        $diagonals = [
            [$this->board[0][0], $this->board[1][1], $this->board[2][2]],
            [$this->board[2][0], $this->board[1][1], $this->board[0][2]]
        ];
        foreach ($diagonals as $diagonal) {
            if ($this->cellsMatch($diagonal)) {
                return $this->turn;
            }
        }
        return CELL::EMPTY;
    }

    private function cellsMatch($cells): bool
    {
        return (count(array_unique($cells)) === 1) && $cells[0] !== CELL::EMPTY;
    }
}

$ticTacToe = new TicTacToe();
$ticTacToe->play();