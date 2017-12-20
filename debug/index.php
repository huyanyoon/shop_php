
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=id3285701_3ewebsite', "id3285701_root", "nguyenduy3e1995");
    foreach($dbh->query('SELECT * from products') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
