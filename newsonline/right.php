
            </div>
         </div>
       </div>
     </div>
       <div id="right">
         <div class="cauhinh">
           <h1>Menu Chinh</h1>
           <div id="menuphai">
               <ul>
<?php
 $dt->select('SELECT*FROM groupnews ORDER BY idGroup ASC');
 while($r=$dt->fetch()){
    $id=$r['idGroup'];
    $name=$r['groupName'];
    echo("<li><a href='news.php?id=$id'>$name</a></li>");
 }
?>
               </ul>
           </div>
         </div>
       </div>
    