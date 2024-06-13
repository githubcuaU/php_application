
<?php include("view/vehicle_header.php"); ?>

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
            </tr>
                      
        <?php endforeach; ?>

    </table>
<?php }


if (empty($vehicles)) 
{ ?>
        <p>No results match your searching criteria.</p>
        <a href=".">Go back to vehicle list</a>
<?php }
?>

<?php include("view/footer.php") ?>