<a href="?do=add" class="btn btn-primary">add categeory</a>
<table  class="table table-bordered table-hover table-responsive">
   <thead>
      <tr>
         <th>categoery name</th>
          <th>img</th>
         <th>controls</th>
         


      </tr>
   </thead>
   <tbody>
      
      <?php  
      include "fun/conn.php";
      $slktcat="SELECT * FROM categeory";
      $rescatview=$conn->query($slktcat);
       foreach ($rescatview as  $carow) {
          # code...
       
         ?>
         
         <tr>
            <td>
               <?php echo $carow['cat_name'];  ?>
            </td>
            <td>
              <img style="width:100px;height: 100px" src="fun/uploads/<?php echo $carow['img'];  ?>">
            </td>
            <td>
               <a href="?do=edit&id=<?php echo $carow['id'] ?>" class="btn btn-primary">edit</a>
               <a href="fun/deletecat.php?id=<?php echo  $carow ['id'];?>" class="btn btn-danger">delete</a>
            </td>
         </tr>
      <?php } ?>



      
   </tbody>

</table>