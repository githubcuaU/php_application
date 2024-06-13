<?php

function view_types()
{
    global $db;
    $query = 'SELECT * FROM types';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}

function add_type($type)
{
    global $db;
    $query = 'INSERT INTO types (type) VALUES (:type)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->execute();   
    $statement->closeCursor();
}

function delete_type($typeID)
{
    global $db;
    $query = 'DELETE FROM types WHERE type_id = :typeID';
    $statement = $db->prepare($query);
    $statement->bindValue(":typeID", $typeID);
    $statement->execute();
    $statement->closeCursor();
}

