<div class="pagenavContainer">
   <? 
   $pagecount = ceil($rownum / 5);
   //print("rowcount: ".$rownum.'<br>');
   //print("pagecount: ".$pagecount.'<br>');
   //print("currpage ".$pagenum.'<br>');

   ?>
       <nav aria-label="Page navigation">
        <ul class="pagination">
        <?
        echo '<li class="page-item'.(($pagenum==1)?' disabled':"").'"><a class="page-link" '.(($pagenum==1)?'':'href="main.php?page='. ($pagenum-1) .'"').'>Previous</a></li>';
        $i = 1;
        for ($i; $i <= $pagecount; $i++){
            echo '<li class="page-item'.(($i==$pagenum)?' active':"").'"><a class="page-link" href="main.php?page='. $i .'">'. $i .'</a></li>';
        }
        echo '<li class="page-item'.(($pagenum==$pagecount)?' disabled':"").'"><a class="page-link" '.(($pagenum==$pagecount)?'':'href="main.php?page='. ($pagenum+1) .'"').'>Next</a></li>';
        ?>
        </ul>
    </nav>  
</div>