

<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';

$controller = new BukuController($pdo);

$aksi = $_GET['aksi'] ?? 'index';


if ($aksi === 'tambah') {
    $controller->create();
} elseif ($aksi === 'simpan' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
} elseif ($aksi === 'edit') {
    $controller->edit();
} elseif ($aksi === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update();
} elseif ($aksi === 'delete' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->delete();
} else {
    $controller->index();
}


