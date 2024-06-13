
<?php include("class_header.php"); ?>

<a href="../..">Go to vehicle page</a>
<br><br>

<table>
        <tr>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="add_class">
                <label class="add-label" for="class">Enter Vehicle Class</label>
                <input class="add-form" type="text" id="class" name="class" required>
                <button class="add-btn">Add</button>
            </form>
        </tr>
</table>
<br><br>


<?php if ($classes) 
{ ?>
    <table>
        <tr>
            <th>Class ID</th>
            <th>Class</th>
        </tr>
     

        <?php
        foreach ($classes as $class) : ?>

            <tr>
                <td><?php echo $class["class_id"]; ?></td>
                <td><?php echo $class["class"]; ?></td>

                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="action" value="delete_class">
                        <input type="hidden" name="classID" value="<?php echo $class["class_id"] ?>">
                        <button class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
                      
        <?php endforeach; ?>

    </table>
<?php }


else 
{ ?>
        <p>No class has been added yet.</p>
<?php } ?>

<?php include("../../view/footer.php") ?>
