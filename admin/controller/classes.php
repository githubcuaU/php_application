<?php

include("../../model/database.php");
include("../../model/classes_db.php");

$classID = filter_input(INPUT_POST, "classID", FILTER_VALIDATE_INT);
$class = filter_input(INPUT_POST, "class", FILTER_SANITIZE_SPECIAL_CHARS);

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) 
{
       $action = "view_classes"; 
}

switch($action)
{       
        case "view_classes":
                $classes = view_classes($action);
                include("../view/classes_list.php");
        break;


        case "add_class":
                if ($class) 
                {
                        add_class($class);
                        header("Location: classes.php?action='view_classes'");             
                } 
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;


        case "delete_class":
                if ($classID) 
                {
                        delete_class($classID);
                        header("Location: classes.php?action='view_classes'");             
                }
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;
}