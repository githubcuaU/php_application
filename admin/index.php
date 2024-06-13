<?php

include("model/database.php");

if ($username === 'root')
{
    include("admin/controller/vehicles.php");
}