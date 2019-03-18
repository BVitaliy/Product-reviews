<?php
    $title = "Сторінка Адміністратора";
    require "header.php";
    $reviews = getReviews ();
?>

      
   
    <div class="container">   
       <?php
            $a = 0;
            $b = 0;
            $c = 0;
        
            for($i = 0; $i < count($reviews); $i++){
                if ($reviews[$i]["status"] == 1) $a++;
                else if ($reviews[$i]["status"] == 2) $b++;
                else $c++;
            }      
           echo '<table class="table"> 
                <thead> 
                    <tr> 
                        <th>Відхилено (1)</th> 
                        <th>Опубліковано (2)</th> 
                        <th>В черзі (3)</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <tr> 
                        <td>'.$a.'</td> 
                        <td>'.$b.'</td> 
                        <td>'.$c.'</td>
                    </tr> 
                </tbody> 
            </table>';
            ?>          
         
        <div class="reviews-list">
        <?php
            for($i = 0; $i < count($reviews); $i++){
                    echo '                    
                          <div class="review-item">
                            <div class="review-header">
                                <div class="review-photo">
                                    <img src="uploads/'.$reviews[$i]["photo"].'" alt="'.$reviews[$i]["photo"].'">
                                </div>
                                <div class="review-info">
                                    <div class="name">'.$reviews[$i]["name"].'</div>
                                    <a href="" class="email">'.$reviews[$i]["email"].'</a>   
                                    <div class="date">'.$reviews[$i]["date"].' | '.$reviews[$i]["time"].'</div>
                                </div>
                                <div class="options-btn">
                                ';
                if ($reviews[$i]["status"] == 1 || $reviews[$i]["status"] == 3){
                    echo '<a href="functions/approve.php?id='.$reviews[$i]["id"].'" class="btn btn-success" title="Одобрити">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          </a>';                                
                }
                if ($reviews[$i]["status"] == 2 || $reviews[$i]["status"] == 3){
                    echo '<a href="functions/reject.php?id='.$reviews[$i]["id"].'" class="btn btn-warning" title="Відхилити">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                          </a>';                                
                }                
                    echo    '       <a href="functions/delete.php?id='.$reviews[$i]["id"].'" class="btn btn-danger" title="Видалити">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="review-text">
                                 '.$reviews[$i]["message"].'
                            </div>
                        </div> ';
            }      
        ?>
           
        </div>
    </div>        

<?php
    require "footer.php"
?>