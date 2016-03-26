<?php 
if ($input == 1){

    for($i = 0; $i<10; $i++){
            
            if($controle[$i] == $optie5) {
                $color = 'style="color:red;"';             
            }else{
                $color = 'style="color:black;"';                         
            }?> 
                
                <div class="col-md-5"><label><?=$vraag[$i]?></label></div>
                <div class="col-md-3"><input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off" <?= $color ?> class="form-control"></div>
                <div class="col-md-4"><?=$eindbericht[$i]?></div>
                <br><br>
                
                
                <input class="hidden" type="text" name="nummer" value="<?=$nummer?>" >
                <input class="hidden" type="text" name="score" value="<?=$score?>">
                <input class="hidden" type="text" name="<?="controle{$i}"?>" value="<?=$eindbericht[$i]?>">
                <input class="hidden" type="text" name="check" value="<?=$checknummer?>">
                
<?php } ?>
                </div>
                <br><input type="submit" name="button" value="<?=$knop?>">
        
<?php }  

else if($input == 2){

    for($i = 0; $i<10; $i++){
            if($controle[$i] == $optie5) {
                $color = 'style="color:red;"';
                $color1 = 'style="color:red;"';
            }else if($controle[$i] == $optie4){
                if($controle1[$i] == ""){
                    $color = 'style="color:red;"';
                    $color1 = 'style="color:black;"';
                }else{
                    $color = 'style="color:black;"';
                    $color1 = 'style="color:red;"';
                }
                
            }else{
                $color = 'style="color:black;"';
                $color1 = 'style="color:black;"';             
            }?> 
            
                <div class="col-md-5"><label><?=$vraag[$i]?></label></div>
                <div class="col-md-2"><input type="text" name="<?="vraag{$i}"?>" value="<?=$eindantwoord[$i]?>" autocomplete="off" <?= $color ?> class="form-control"></div>
                <div class="col-md-2"><input type="text" name="<?="vraag1{$i}"?>" value="<?=$eindantwoord1[$i]?>" autocomplete="off" <?= $color1 ?> class="form-control"></div>
                <div class="col-md-3"><?=$eindbericht[$i]?></div>
                <br><br>
                
                
                <input class="hidden" type="text" name="nummer" value="<?=$nummer?>" >
                <input class="hidden" type="text" name="score" value="<?=$score?>">
                <input class="hidden" type="text" name="<?="controle{$i}"?>" value="<?=$eindbericht[$i]?>">
                <input class="hidden" type="text" name="<?="controle1{$i}"?>" value="<?=$eindantwoord[$i]?>">
                <input class="hidden" type="text" name="check" value="<?=$checknummer?>">
                
<?php } ?>
                </div>
                <br><input type="submit" name="button" value="<?=$knop?>">
            
<?php } ?>