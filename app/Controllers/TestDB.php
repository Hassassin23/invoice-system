<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class TestDB extends Controller {
    public function index() {
        $db = \Config\Database::connect();
        try {
            $db->query('SELECT 1');
            echo "Връзката с базата данни е успешна! 🎉";
        } catch (\Exception $e) {
            echo "Грешка: " . $e->getMessage();
        }
    }
}