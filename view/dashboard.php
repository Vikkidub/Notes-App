<link rel="stylesheet" href="dashboard.css"></link>

<?php include_once "../db_select.php"; ?>


<form method="post" action="../index.php">
  <button class="noteButton">New note</button>
</form>
</br>

<div>Delete note</div>
<form method="post" action="../db_delete.php">
 <label for="numberInput">Enter Note ID:</label>
 <input type="number" placeholder="0" name="input_id">

  <button type="submit" class="deleteButton">Delete</button>
</form>
