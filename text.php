
   
    
    

    echo "<table width='800' align='center' cellspacing='3'>";
   

   
   while ($row = mysqli_fetch_assoc($result)){  echo "<tr>";
     echo "<td width='120' cellSpacing=0>
           <img class='headimg' src='images/".mt_rand(1, 43) . ".jpg'></td>";?>
   <td>
     <div class="card">
         <h4 class="card-header" ><?php echo $row['title'];?>
         <?php if(@$_SESSION["id"]===$row["uid"]){?>
             <a href="mes.php?method=del&id=<?php echo $row["id"]?>" class="btn btn-danger mybtn">刪除</a>
             <a href="update_mes.php?id=<?php echo $row["id"]?>" class="btn btn-primary mybtn">編輯</a>
         <?php }?>
         </h4>

         
         <div class="card-body">
         <h5 class="card-title">暱稱：<?php echo $row["name"];?></h5>
             <h5 class="card-title">日期：<?php echo $row["date"];?></h5><br>
             <p class="card-text">
                 <?php echo $row["content"];?>
             </p>
         </div>
     </div>	</td>	 
     </tr><?php  
 }
  echo "</table>" ;



  mysqli_free_result($result);
  ?></div>














echo "<table width='800' align='center' cellspacing='3'>";



while ($row = mysqli_fetch_assoc($result)){  echo "<tr>";
 echo "<td width='120' cellSpacing=0>
       <img class='headimg' src='images/".mt_rand(1, 43) . ".jpg'></td>";?>
<td>
 <div class="card">
    

     
     <div class="card-body"> <?php if(@$_SESSION["id"]===$row["uid"]){?>
         <a href="mes_reply.php?method=del&id=<?php echo $row["id"]?>" class="btn btn-danger mybtn">刪除</a>
         <a href="update_mes.php?id=<?php echo $row["id"]?>" class="btn btn-primary mybtn">編輯</a>
     <?php }?>
     <h5 class="card-title">暱稱：<?php echo $row["name"];?></h5>
         <h5 class="card-title">日期：<?php echo $row["date"];?></h5><br>
         <p class="card-text">
             <?php echo $row["content"];?>
         </p>
     </div>
 </div>	</td>	 
 </tr><?php  
}
echo "</table>" ;