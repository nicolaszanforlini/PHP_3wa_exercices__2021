<?php 

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ . '/..' );
$dotenv->load();

$conn = new Connect;
$pdo = $conn::connect();

$pdo->query("CREATE TABLE IF NOT EXISTS product (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(100),
    price DECIMAL(7,2),
    total DECIMAL(7,2) NOT NULL DEFAULT 0.00);");

$pdo->exec("DELETE FROM product;");

$pdo->query("INSERT INTO product (name, price) VALUES  ('apple', 10.5), ('raspberry', 13.0), ('strawberry', 7.8);
");

$results = $pdo->query('SELECT * FROM product');
while ($row = $results->fetch()) {
    var_dump($row);
}

$conn::disconnect( $pdo );


