
<?php
$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$db   = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

$dsn = "mysql:host=$host;port=$port;
dbname=$db;charset=utf8mb4;sslmode=REQUIRED";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "✅ Connected successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>