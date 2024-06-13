<?php

include("model/database.php");
include("model/vehicles_db.php");

$vehicleID = filter_input(INPUT_POST, "vehicleID", FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, "year", FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, "model", FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);
$typeID = filter_input(INPUT_POST, "typeID", FILTER_VALIDATE_INT);
$classID = filter_input(INPUT_POST, "classID", FILTER_VALIDATE_INT);
$makeID = filter_input(INPUT_POST, "makeID", FILTER_VALIDATE_INT);

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) 
{
        $action = "";
}

switch($action)
{       
        case "add_vehicle":
                if ($year && $model && $price && $typeID && $classID && $makeID) 
                {
                        add_vehicle($year, $model, $price, $typeID, $classID, $makeID);
                        header("Location: .?action=''"); // go to default case
                } 
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;


        case "delete_vehicle":
                if ($vehicleID) 
                {
                        delete_vehicle($vehicleID);
                        header("Location: .?action=''");
                }
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;

        // sort items based on drop down menu selections
        default:  
                $vehicles = view_vehicles($action);
                include("admin/view/vehicles_list.php");
        break;
}