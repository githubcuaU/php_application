
<?php include("make_header.php"); ?>

<a href="../..">Go to vehicle page</a>
<br><br>

<table>
        <tr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="add_make">
                <label class="add-label" for="make">Enter Vehicle Make</label>
                <input class="add-form" type="text" id="make" name="make" required>
                <button class="add-btn">Add</button>
            </form>
        </tr>
</table>
<br><br>


<?php if ($makes) 
{ ?>
    <table>
        <tr>
            <th>Make ID</th>
            <th>Make</th>
        </tr>
     

        <?php
        foreach ($makes as $make) : ?>

            <tr>
                <td><?php echo $make["make_id"]; ?></td>
                <td><?php echo $make["make"]; ?></td>

                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="action" value="delete_make">
                        <input type="hidden" name="makeID" value="<?php echo $make["make_id"] ?>">
                        <button class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
                      
        <?php endforeach; ?>

    </table>
<?php }


else 
{ ?>
        <p>No make has been added yet.</p>
<?php } ?>

<?php include("../../view/footer.php") ?>
