<?php 
// Izveidojiet masīvu ar informāciju par cilvēkiem
$people = [
    [
        "vārds" => "Timurs",          
        "e_pasts" => "timur@example.com",
        "language" => ['PHP', 'JavaScript', 'HTML']
    ],
    [
        "vārds" => "Marat",          
        "e_pasts" => "marat@example.com",
        "language" => ['Python', 'C++', 'Java']
    ],
    [
        "vārds" => "Jarik",          
        "e_pasts" => "jarik@example.com",
        "language" => ['Ruby', 'Go', 'Swift']
    ]
];
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmēšanas Valodas - Komanda</title>
</head>
<body>
    <h2>Komandas locekļi</h2>
    <ul>
        <?php
 
        foreach ($people as $person) {
            echo "<li>";

            echo "<strong>Vārds:</strong> " . htmlspecialchars($person['vārds']) . "<br>";
      
            echo "<strong>E-pasts:</strong> " . htmlspecialchars($person['e_pasts']) . "</a><br>";
     
            echo "<strong>Programmēšanas valodas:</strong> " . implode(', ', $person['language']);
            echo "</li><br>";
        }
        ?>
    </ul>
</body>
</html>
