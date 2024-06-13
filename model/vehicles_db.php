<?php

function view_vehicles($action)
{
    global $db;

    // ---------------------------------------------------YEAR------------------------------------------------------------

    if ($action === "ascYear")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        ORDER BY year ASC
        ';
    }
    else if ($action === "descYear")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        ORDER BY year DESC
        ';
    }

    // ---------------------------------------------------MAKE------------------------------------------------------------

    else if ($action === "makeChevy")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 1
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeFord")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 2
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeCadillac")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 3
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeNissan")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 4
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeHyundai")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 5
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeDodge")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 6
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeInfiniti")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 7
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "makeBuick")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND makes.make_id = 8
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }

    // ---------------------------------------------------TYPE------------------------------------------------------------

    else if ($action === "typeSUV")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND types.type_id = 1
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "typeTruck")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND types.type_id = 2
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "typeSedan")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND types.type_id = 3
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "typeCoupe")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND types.type_id = 4
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }

    // ---------------------------------------------------CLASS------------------------------------------------------------

    else if ($action === "classUtility")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND classes.class_id = 1
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "classEconomy")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND classes.class_id = 2
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "classLuxury")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND classes.class_id = 3
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }
    else if ($action === "classSports")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        AND classes.class_id = 4
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }

    // ---------------------------------------------------PRICE------------------------------------------------------------

    else if ($action === "ascPrice")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        ORDER BY price ASC
        ';
    }
    else if ($action === "descPrice")
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        ORDER BY price DESC
        ';
    }

    // ---------------------------------------------------DEFAULT------------------------------------------------------------
   
    else
    {
        $query =
        'SELECT vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        FROM vehicles
        INNER JOIN makes
        ON vehicles.make_id = makes.make_id
        INNER JOIN types
        ON vehicles.type_id = types.type_id
        INNER JOIN classes
        ON vehicles.class_id = classes.class_id
        GROUP BY vehicles.vehicle_id, vehicles.year, makes.make, vehicles.model, types.type, classes.class, vehicles.price
        ';
    }

    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function add_vehicle($year, $model, $price, $typeID, $classID, $makeID)
{
    global $db;
    $query = 'INSERT INTO vehicles (year, model, price, type_id, class_id, make_id) 
    VALUES (:year, :model, :price, :typeID, :classID, :makeID)';
    $statement = $db->prepare($query);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':model', $model);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':typeID', $typeID);
    $statement->bindValue(':classID', $classID);
    $statement->bindValue(':makeID', $makeID);
    $statement->execute();   
    $statement->closeCursor();
}


function delete_vehicle($vehicleID)
{
    global $db;
    $query = 'DELETE FROM vehicles WHERE vehicle_id = :vehicleID';
    $statement = $db->prepare($query);
    $statement->bindValue(":vehicleID", $vehicleID);
    $statement->execute();
    $statement->closeCursor();
}

