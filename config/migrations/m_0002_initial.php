<?php
namespace Config\migrations;
use Core\Application;

class m_0002_initial
{
    public function up(): void
    {
        $db=Application::$app->db;
        $SQL="CREATE TABLE logger (
  id INT AUTO_INCREMENT PRIMARY KEY ,
  email VARCHAR(255) NOT NULL,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  status TINYINT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    ENGINE=InnoDB";

        $db->pdo->exec($SQL);
    }

    public function down(): void
    {
        $db=Application::$app->db;
        $SQL="DROP TABLE `logger`";
        $db->pdo->exec($SQL);
        
    }

}