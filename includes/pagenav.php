<div class="pagenavContainer">
   <? 
   $pagecount = ceil($rownum / 5);
   print("rowcount: ".$rownum.'<br>');
   print("pagecount: ".$pagecount.'<br>');
   print("currpage ".$pagenum.'<br>');

   ?>
       <nav aria-label="Page navigation">
        <ul class="pagination">
        <?
        if($rownum > $postsperpage){ //more than 1 page
            
            if($pagenum >= ($pagecount - 4)){// starts pages within x of the end at 10 from the end so they'll always be 10 pages to click
                $s = $i = ($pagecount - 9);
            }
            elseif($pagenum >= 6){
                $s = $i = ($pagenum - 4); //starts pages > x at page-4 so page 6 lists pages 2-11 and so on
            }
            else{
                $s = $i = 1;
            }

            echo '<li class="page-item'.(($pagenum==1)?' disabled':"").'"><a class="page-link" '.(($pagenum==1)?'':'href="main.php?page='. ($pagenum-1) .'"').'>Previous</a></li>';
            for ($i; $i <= $pagecount && $i <= $s + 9; $i++){ //lists all pages or 10 in total
                echo '<li class="page-item'.(($i==$pagenum)?' active':"").'"><a class="page-link" href="main.php?page='. $i .'">'. $i .'</a></li>';
            }
            echo '<li class="page-item'.(($pagenum==$pagecount)?' disabled':"").'"><a class="page-link" '.(($pagenum==$pagecount)?'':'href="main.php?page='. ($pagenum+1) .'"').'>Next</a></li>';
        }
        ?>
        </ul>
    </nav>  
</div>