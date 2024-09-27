<?php
// Connexion à PostgreSQL
$host = 'db';
$db   = 'mydb';
$user = 'user';
$pass = 'password';
$dsn = "pgsql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    // Créer une table si elle n'existe pas déjà
    $pdo->exec("CREATE TABLE IF NOT EXISTS items (id SERIAL PRIMARY KEY, name VARCHAR(255))");

    // Insérer un élément aléatoire
    $randomItem = 'Item ' . rand(1, 100);
    $pdo->prepare("INSERT INTO items (name) VALUES (?)")->execute([$randomItem]);

    // Récupérer et afficher tous les éléments
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
