<?php

function view_classes()
{
    global $db;
    $query = 'SELECT * FROM classes';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();
    return $classes;
}

function add_class($class)
{
    global $db;
    $query = 'INSERT INTO classes (class) VALUES (:class)';
    $statement = $db->prepare($query);
    $statement->bindValue(':class', $class);
    $statement->execute();   
    $statement->closeCursor();
}

function delete_class($classID)
{
    global $db;
    $query = 'DELETE FROM classes WHERE class_id = :classID';
    $statement = $db->prepare($query);
    $statement->bindValue(":classID", $classID);
    $statement->execute();
    $statement->closeCursor();
}

