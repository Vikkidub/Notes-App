<link rel="stylesheet" href="view/note.css"></link>


<form method="post" action="db_insert.php"> 

  <div class="inputs">
    <input type="text" placeholder="Title" class="title" name="title">
    <input type="text" placeholder="Author" class="author" name="author">
  </div>


  <textarea class="note" type="text" name="text"></textarea>
  
<div class="buttons">
    <button type="submit"class="saveButton">Save</button>
  </form>

  <form method="post" action="view/dashboard.php"> 
    <button type="submit">Dashboard</button>  
  </form>
 
</div>
