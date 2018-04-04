<?php

//League classification table
//Iterating through array of game results 
//build associative array with team stats
//rank the teams according to team stats values

class GameResult
{
    private $teamA;
    private $teamB;
    private $scoreA = 0;
    private $scoreB = 0;

    public function __construct(
        string $teamA, 
        string $teamB,
        int $scoreA,
        int $scoreB
        )
        {
            $this->teamA = $teamA;
            $this->teamB = $teamB;
            $this->scoreA = $scoreA;
            $this->scoreB = $scoreB;
        }

    //teams
    public function getTeamA(): string
    {
        return $this->teamA;
    }

    public function getTeamB(): string
    {
        return $this->teamB;
    }

    //scores
    public function getScoreA(): int
    {
        return $this->scoreA;
    }

    public function getScoreB(): int
    {
        return $this->scoreB;
    }

}

$game1 = new GameResult('A', 'B', 1, 2);
$game2 = new GameResult('C', 'D', 1, 1);
$game3 = new GameResult('B', 'C', 2, 2);
$game4 = new GameResult('A', 'D', 1, 2);
$game5 = new GameResult('A', 'C', 3, 3);
$game6 = new GameResult('B', 'D', 0, 1);
$game7 = new GameResult('E', 'A', 2, 2);
$game8 = new GameResult('C', 'E', 2, 4);
$game9 = new GameResult('E', 'D', 1, 1);
$game10 = new GameResult('E', 'B', 3, 3);

$season = [ $game1, 
            $game2, 
            $game3, 
            $game4, 
            $game5, 
            $game6,
            $game7,
            $game8,
            $game9,
            $game10
        ];

class LeagueTableEntry extends GameResult
{
    private $team;

    //games stats for $this->team
    private $gamesPlayed = 0;
    private $gamesWon = 0;
    private $gamesDrawn = 0;
    private $gamesLost = 0;
    private $goalsFor = 0;
    private $goalsAgainst = 0;
    private $goalDifference = 0;
    private $points = 0;
    
    public function __construct(string $team)
    {
        $this->team = $team;
    }

    //Find matches for $this->team only
    private function matches(): array
    {
        global $season;
        $array = [];
        foreach($season as $game)
        {
          while($game->getTeamA() === $this->team || $game->getTeamB() === $this->team)
          {
            $array[] = $game;
            break;
          }
        }
        
        return $array;
    }

    private function goalDifference()
    {
        $this->goalDifference = $this->goalsFor - $this->goalsAgainst;
    }

    //Game Stats
    private function getGamesStats()
    {
        foreach($this->matches() as $game)
        {
            $this->gamesPlayed++;

            if ($game->getTeamA() === $this->team)
            {
                $this->goalsFor += $game->getScoreA();
                $this->goalsAgainst += $game->getScoreB();
                $this->goalDifference();

                if ($game->getScoreA() > $game->getScoreB())
                {
                    $this->gamesWon++;
                    $this->points +=3;
                } elseif($game->getScoreA() === $game->getScoreB()) {
                    $this->gamesDrawn++;
                    $this->points +=1;
                } else {
                    $this->gamesLost++;
                }
            }

            if ($game->getTeamB() === $this->team)
            {
                $this->goalsFor += $game->getScoreB();
                $this->goalsAgainst += $game->getScoreA();
                $this->goalDifference();

                if ($game->getScoreA() < $game->getScoreB())
                {
                    $this->gamesWon++;
                    $this->points +=3;
                } else {
                    $this->gamesLost++;
                }
            } 
        }
    }
    
    //Scoreboard
    public function getTeamStats(): array
    {
        $this->getGamesStats();

        $teamStats = [];
        $stats = [
            'team'          =>  $this->team,
            'gamesPlayed'   =>  $this->gamesPlayed,
            'gamesWon'      =>  $this->gamesWon, 
            'gamesLost'     =>  $this->gamesLost,
            'gamesDrawn'    =>  $this->gamesDrawn,
            'goalsFor'      =>  $this->goalsFor,
            'goalsAgainst'  =>  $this->goalsAgainst,
            'goalDifference'=>  $this->goalDifference,
            'points'        =>  $this->points
        ];

        foreach ($stats as $key => $value) 
        {
            $teamStats[$key] = $value;
        } 

        return $teamStats;
    }

    //Testing methods
    public function printGameStats()
    {
        $string = "\n==============\nTeam $this->team\n==============\n";
        $string .= 'Plays: ' . $this->gamesPlayed . "\n";
        $string .= 'Wins: ' . $this->gamesWon . "\n";
        $string .= 'Losses: ' . $this->gamesLost . "\n";
        $string .= 'Drawn: ' . $this->gamesDrawn . "\n";
        $string .= 'Goals For: ' . $this->goalsFor . "\n";
        $string .= 'Goals Against: ' . $this->goalsAgainst . "\n";
        $string .= 'Points: ' . $this->points . "\n";

        echo $string;
    }

    public function listMatchesForTeam()
    {
        var_dump($this->matches());
    }
}


$entryA = new LeagueTableEntry('A');
$entryB = new LeagueTableEntry('B');
$entryC = new LeagueTableEntry('C');
$entryD = new LeagueTableEntry('D');
$entryE = new LeagueTableEntry('E');

// $entryA->listMatchesForTeam();

$results = [$entryA, $entryB, $entryC, $entryD, $entryE];
$rank = [];

//Populate rank array with team stats from object array
foreach ($results as $result) 
{
    $rank[] = $result->getTeamStats();
}

//sorting according to points, goal difference, goals for an alphabetic order
array_multisort(array_column($rank, 'points'), SORT_DESC, 
                array_column($rank, 'goalDifference'), SORT_DESC, 
                array_column($rank, 'goalsFor'), SORT_DESC,
                array_column($rank, 'team'), SORT_DESC,
                $rank);

print_r($rank);