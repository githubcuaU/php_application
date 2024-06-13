<?php

include("model/database.php");

if ($username === 'root')
{
    include("admin/index.php");
}

else
{
    include("customer.php");
}