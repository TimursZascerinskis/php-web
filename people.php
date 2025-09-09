<?php 
class Person {
    public $name;
    public $email;
    public $language;

 
    function __construct($name, $email, $language) {
        $this->name = $name;
        $this->email = $email;
        $this->language = $language;
    }


    function get_name() {
        return $this->name;
    }
    function get_email() {
        return $this->email;
    }
    function get_language() {
        return $this->language;
    }
}


$people = [
    new Person("Timur", "timur@example.com", ['PHP', 'JavaScript', 'HTML']),
    new Person("Marat", "marat@example.com", ['Python', 'C++', 'Java']),
    new Person("Jarik", "jarik@example.com", ['Ruby', 'Go', 'Swift'])
];
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <title>Programmēšanas Valodas - Komanda</title>
</head>
<body>
    <h2>Komandas locekļi</h2>
    <ul>
        <?php
        foreach ($people as $person) {
            echo "<li>";
            echo "<strong>Vārds:</strong> " . htmlspecialchars($person->get_name()) . "<br>";
            echo "<strong>E-pasts:</strong> " . htmlspecialchars($person->get_email()) . "</a><br>";
            echo "<strong>Programmēšanas valodas:</strong> " . implode(', ', $person->get_language());
            echo "</li><br>";
        }
        ?>
    </ul>
    
</body>
</html>
