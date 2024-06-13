
<?php include("type_header.php"); ?>

<a href="../..">Go to vehicle page</a>
<br><br>

<table>
        <tr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="add_type">
                <label class="add-label" for="type">Enter Vehicle Type</label>
                <input class="add-form" type="text" id="type" name="type" required>
                <button class="add-btn">Add</button>
            </form>
        </tr>
</table>
<br><br>


<?php if ($types) 
{ ?>
    <table>
        <tr>
            <th>Type ID</th>
            <th>Type</th>
        </tr>
     

        <?php
        foreach ($types as $type) : ?>

            <tr>
                <td><?php echo $type["type_id"]; ?></td>
                <td><?php echo $type["type"]; ?></td>

                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="action" value="delete_type">
                        <input type="hidden" name="typeID" value="<?php echo $type["type_id"] ?>">
                        <button class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
                      
        <?php endforeach; ?>

    </table>
<?php }


else 
{ ?>
        <p>No type has been added yet.</p>
<?php } ?>

<?php include("../../view/footer.php") ?>