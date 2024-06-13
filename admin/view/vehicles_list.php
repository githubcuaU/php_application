
<?php include("view/vehicle_header.php"); ?>

<a href="admin/controller/types.php">Go to type page</a><br><br>
<a href="admin/controller/classes.php">Go to class page</a><br><br>
<a href="admin/controller/makes.php">Go to make page</a><br><br>

<table>
        <tr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="add_vehicle">
                <td>
                    <label class="add-label" for="year">Year</label>
                    <input class="add-form" type="text" id="year" name="year" required>
                </td>
                <td>
                    <label class="add-label" for="model">Model</label>
                    <input class="add-form" type="text" id="model" name="model" required>
                </td>
                <td>
                    <label class="add-label" for="price">Price</label>
                    <input class="add-form" type="text" id="price" name="price" required>
                </td>
                <td>
                    <label class="add-label" for="typeID">Type ID</label>
                    <input class="add-form" type="text" id="typeID" name="typeID" required>
                </td>
                <td>
                    <label class="add-label" for="classID">Class ID</label>
                    <input class="add-form" type="text" id="classID" name="classID" required>
                </td>
                <td>
                    <label class="add-label" for="makeID">Make ID</label>
                    <input class="add-form" type="text" id="makeID" name="makeID" required>
                </td>
                <td>
                    <button class="add-btn">Add</button>
                </td>
            </form>
        </tr>          
</table>
<br><br>


<?php if ($vehicles) 
{ ?>
    <table>
        <tr>
            <th>
                Year
                <br><br>
                
                <form action="." method="POST">
                    <select type="hidden" name="action">
                        <option value="">Select order</option>  
                        <option value="ascYear">Ascending</option>
                        <option value="descYear">Descending</option>
                    </select>
                    <button type="submit">Select</button>
                </form>
            </th>

            <th>
                    Make
                    <br><br>
                
                    <form action="." method="POST">
                        <select type="hidden" name="action">
                            <option value="">Select make</option>  
                            <option value="makeChevy">Chevy</option>
                            <option value="makeFord">Ford</option>
                            <option value="makeCadillac">Cadillac</option>
                            <option value="makeNissan">Nissan</option>
                            <option value="makeHyundai">Hyundai</option>
                            <option value="makeDodge">Dodge</option>
                            <option value="makeInfiniti">Infiniti</option>
                            <option value="makeBuick">Buick</option>
                        </select>
                        <button type="submit">Select</button>
                    </form>
            </th>
            
            <th>
                Model
                <br><br>
            </th>

            <th>
                    Type
                    <br><br>
                
                    <form action="." method="POST">
                        <select type="hidden" name="action">
                            <option value="">Select type</option>  
                            <option value="typeSUV">SUV</option>
                            <option value="typeTruck">Truck</option>
                            <option value="typeSedan">Sedan</option>
                            <option value="typeCoupe">Coupe</option>
                        </select>
                        <button type="submit">Select</button>
                    </form>
            </th>

            <th>
                    Class
                    <br><br>
                
                    <form action="." method="POST">
                        <select type="hidden" name="action">
                            <option value="">Select class</option>  
                            <option value="classUtility">Utility</option>
                            <option value="classEconomy">Economy</option>
                            <option value="classLuxury">Luxury</option>
                            <option value="classSports">Sports</option>
                        </select>
                        <button type="submit">Select</button>
                    </form>
            </th>

            <th>
                    Price
                    <br><br>
                
                    <form action="." method="POST">
                        <select type="hidden" name="action">
                            <option value="">Select order</option>  
                            <option value="ascPrice">Ascending</option>
                            <option value="descPrice">Descending</option>
                        </select>
                        <button type="submit">Select</button>
                    </form>
            </th>       
        </tr>
     

        <?php
        foreach ($vehicles as $vehicle) : ?>

            <tr>
                <td><?php echo $vehicle["year"]; ?></td>
                <td><?php echo $vehicle["make"]; ?></td>
                <td><?php echo $vehicle["model"]; ?></td>
                <td><?php echo $vehicle["type"]; ?></td>
                <td><?php echo $vehicle["class"]; ?></td>
                <td><?php echo $vehicle["price"]; ?></td>

                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="action" value="delete_vehicle">
                        <input type="hidden" name="vehicleID" value="<?php echo $vehicle["vehicle_id"] ?>">
                        <button class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
                      
        <?php endforeach; ?>

    </table>
<?php }


else if (empty($vehicles)) 
{ ?>
        <p>No results match your searching criteria.</p>
        <a href=".">Go back to vehicle list</a>
<?php }


else 
{ ?>
        <p>No vehicle has been added yet.</p>
<?php } ?>


<?php include("view/footer.php") ?>