
<?php
    try {
        $dsn = "mysql:host=box2323.bluehost.com;dbname=oechsjmy_menu;charset=utf8mb4";
        $db_user = "oechsjmy_admin25";
        $db_pass = "Bg5Q6*zAVsg0";

        $pdo = new PDO($dsn, $db_user, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    
        $query = $pdo->query("SELECT * FROM menu_items");
        $menuItems = $query->fetchAll();
    
        echo "<pre>";
        print_r($menuItems);
        echo "</pre>";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>