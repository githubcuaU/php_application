<?php

include("../../model/database.php");
include("../../model/makes_db.php");

$makeID = filter_input(INPUT_POST, "makeID", FILTER_VALIDATE_INT);
$make = filter_input(INPUT_POST, "make", FILTER_SANITIZE_SPECIAL_CHARS);

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) 
{
       $action = "view_makes";
}

switch($action)
{ 
        case "view_makes":
                $makes = view_makes($action);
                include("../view/makes_list.php");
        break;


        case "add_make":
                if ($make) 
                {
                        add_make($make);
                        header("Location: makes.php?action='view_makes'");             
                } 
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;


        case "delete_make":
                if ($makeID) 
                {
                        delete_make($makeID);
                        header("Location: makes.php?action='view_makes'");             
                }
                else 
                {
                        $error_message = "Invalid data";
                        include("admin/view/error.php");
                }
        break;
}