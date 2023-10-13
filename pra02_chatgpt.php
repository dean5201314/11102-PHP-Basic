<!DOCTYPE html>
<html>
<head>
    <title>九九乘法表</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>九九乘法表</h1>
    <table>
        <thead>
            <tr>
                <th>&times;</th>
                <?php
                for ($i = 1; $i <= 9; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 9; $j++) {
                    $result = $i * $j;
                    echo "<td>$result</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
