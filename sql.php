<html>
<body>
<?php

$obstacklePosition = intval($_GET[obstacklePos]);
$sprintTime = floatval($_GET[sprintTime]);
$jumpDistance = intval($_GET[jumpDistance]);
$obstackleSize = intval($_GET[obstackleSize]);
$isWin = intval($_GET[isWin]);

$host = 'localhost';
$db   = 'testDB';
$user = 'sanjka';
$pass = '1324';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
$pdo->prepare('INSERT INTO sprints(obstacklePos, sprintTime, jumpDistance, obstackleSize, isWin) VALUES(?,?,?,?,?)')->execute([$obstacklePosition, $sprintTime, $jumpDistance, $obstackleSize, $isWin]);
echo "Данные переданны";
?>
</body>
</html>