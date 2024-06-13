<?php

include("model/database.php");
include("model/vehicles_db.php");

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) 
{
        $action = "";
}

switch($action)
{
        // sort items based on drop down menu selections
        default:
                $vehicles = view_vehicles($action);
                include("view/vehicles_list.php");
        break;
}
