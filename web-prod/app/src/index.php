<?php
$host = 'db';
$db = 'mydb';
$user = 'user';
$pass = 'password';
$dsn = "mysql:host=$host;dbname=$db";

$maxRetries = 5;
$retryCount = 0;
$connected = false;

while (!$connected && $retryCount < $maxRetries) {
    try {
        $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $connected = true;
    } catch (PDOException $e) {
        $retryCount++;
        sleep(2); // Wait for 2 seconds before retrying
    }
}

if (!$connected) {
    die("Database connection failed after $maxRetries attempts.");
}

try {
    $pdo->exec("CREATE TABLE IF NOT EXISTS items (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255))");
    $randomItem = 'Item ' . rand(1, 100);
    $pdo->prepare("INSERT INTO items (name) VALUES (?)")->execute([$randomItem]);

    $stmt = $pdo->query("SELECT * FROM items");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Liste des éléments dans la base de données :</h1>";
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>" . htmlspecialchars($item['name']) . "</li>";
    }
    echo "</ul>";
    
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
