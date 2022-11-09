<?php
namespace Config\migrations;
use Core\Application;

class m_0001_initial
{
    public function up(): void
    {
        $db=Application::$app->db;
        $SQL="CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY ,
  name VARCHAR(255) NOT NULL,
  line1 VARCHAR(255) NOT NULL,
  line2 VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  postal INT NOT NULL,
  tel VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  status TINYINT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    ENGINE=InnoDB";

        $db->pdo->exec($SQL);
    }

    public function down(): void
    {
        $db=Application::$app->db;
        $SQL="DROP TABLE `users`";
        $db->pdo->exec($SQL);
        
    }

}