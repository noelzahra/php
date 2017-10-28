<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees list</title>
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
    <?php include 'employees_list.php'; ?>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead class="thead-inverse">
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Role</th>
                        <th>Annual Salary</th>
                        <th>Weekly salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($employees as $key => $employee) 
                        {
                            echo '<tr>';
                                $string = '<td>' . $employee::$counter . '</td>';
                                $string .= '<td>' . $employee->getFirstName() . '</td>';
                                $string .= '<td>' . $employee->getLastName() . '</td>';
                                $string .= '<td>' . ucwords($employee->getRole()) . '</td>';
                                $string .= '<td> &euro;' . $employee->getAnnualSalary() . '</td>';
                                $string .= '<td> &euro;' . $employee->getWeeklySalary() . '</td>';
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