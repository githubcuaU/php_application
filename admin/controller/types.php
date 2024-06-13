<?php

include("../../model/database.php");
include("../../model/types_db.php");

$typeID = filter_input(INPUT_POST, "typeID", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS);

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) 
{
       $action = "view_types"; 
}

switch($action)
{     
        case "view_types":
                $types = view_types($action);
                include("../view/types_list.php");
        break;


        case "add_type":
                if ($type) 
                {
                        add_type($type);
                        header("Location: types.php?action='view_types'");          
                } 
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;


        case "delete_type":
                if ($typeID) 
                {
                        delete_type($typeID);
                        header("Location: types.php?action='view_types'");
                }
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;
}