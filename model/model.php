<?php 
// NTU Never Trust Users
// Kiss Keep It simple Stupide
// RTFM Read the Fucking Manual
// DRY: Don't Repeat Yourself
function connectDB() {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=jeremy', 'jeremy', 'jeremy');
        return $dbh;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function get_all_contacts() {
    $dbh = connectDB();
    $contacts = array();
    foreach($dbh->query('SELECT * from contact') as $row) {
        $contacts[] = $row; 
    }
    return $contacts;
}

function get_contact_by_id($id) {
    $dbh = connectDB();
    $sql = 'SELECT * from contact WHERE id=:id';
    $statement = $dbh->prepare($sql);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $contact = $statement->fetch(PDO::FETCH_ASSOC);
    return $contact;
}