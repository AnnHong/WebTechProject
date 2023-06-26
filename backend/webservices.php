<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

class db
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'webtechw10';
    public function connect()
    {
        $mysql_connect_str = "mysql:host=$this->host;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect_str, $this->user, $this->password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
}
$db = new db();
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    try {
        $connection = $db->connect();
        $statement = $connection->query("SELECT * FROM collections");
        $collections = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
    if (isset($_GET['endpoint']) && $_GET['endpoint'] === 'collections') {
        echo json_encode($collections);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint not found']);
    }
}
