<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>League scoreboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
     body {
         font: 16px, 1.4em, "Tahoma", Arial, sans-serif;
         color: #292b2c;
     }
     th {
        font-weight: bold;
        color: #fff;
     }
    </style>
</head>
<body>
    <?php require_once 'league_table.php'; ?>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>Rank</th>
                        <th>Team</th>
                        <th>Plays</th>
                        <th>Wins</th>
                        <th>Losses</th>
                        <th>Drawn</th>
                        <th>Goals For</th>
                        <th>Goals Against</th>
                        <th>Goal Difference</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $counter = 1;
                        foreach($rank as $team) 
                        {
                            echo '<tr>';
                                $string = '<td>' . $counter++ . '</td>';
                                $string .= '<td>' . $team['team'] . '</td>';
                                $string .= '<td>' . $team['gamesPlayed'] . '</td>';
                                $string .= '<td>' . $team['gamesWon'] . '</td>';
                                $string .= '<td>' . $team['gamesLost'] . '</td>';
                                $string .= '<td>' . $team['gamesDrawn'] . '</td>';
                                $string .= '<td>' . $team['goalsFor'] . '</td>';
                                $string .= '<td>' . $team['goalsAgainst'] . '</td>';
                                $string .= '<td>' . $team['goalDifference'] . '</td>';
                                $string .= '<td>' . $team['points'] . '</td>';
                                echo $string;
                            echo '</tr>';
                        }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>