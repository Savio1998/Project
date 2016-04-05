<?php 
        
        for($a = 0; $a<10; $a++){
            if($nummer1 == 0){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    $score = $score + 10;
                    $checknummer = $checknummer + 2;
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        $score = $score + 5;
                        $checknummer = $checknummer + 1;
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        $score = $score + 5;
                        $checknummer = $checknummer + 1;  
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                if ($checknummer == 20){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 1;
                    $knop = "Invullen";
                } 
            }
            
            else if($nummer1 == 1){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie2){
                        $score = $score + 3;
                        $checknummer = $checknummer + 1;
                    }
                    else if($controle[$a] == $optie1){
                        $score = $score + 0;
                        $checknummer = $checknummer + 0;
                    }
                    else{
                        $score = $score + 6;
                        $checknummer = $checknummer + 2;
                    }
                                           
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 3;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                           $score = $score + 0;
                           $checknummer = $checknummer + 0; 
                        }
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas nog niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 3;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                           $score = $score + 0;
                           $checknummer = $checknummer + 0; 
                        }
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                }
                if ($checknummer == 20){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 2;
                    $knop = "Invullen";
                } 
                 
            }
            
            else if($nummer1 == 2){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                    if($controle[$a] == $optie2){
                        $score = $score + 1;
                        $checknummer = $checknummer + 1;
                    }
                    else if($controle[$a] == $optie1){
                        $score = $score + 0;
                        $checknummer = $checknummer + 0;
                    }
                    else{
                        $score = $score + 2;
                        $checknummer = $checknummer + 2;
                    }
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = "";
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 1;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                           $score = $score + 0;
                           $checknummer = $checknummer + 0; 
                        }
                    }
                    else{
                        $eindantwoord[$a] = "";
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        if($controle[$a] == $optie3){
                            $score = $score + 1;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                           $score = $score + 0;
                           $checknummer = $checknummer + 0; 
                        }  
                    }
                }     
                else{
                    $eindantwoord[$a] = "";
                    $eindantwoord1[$a] = "";
                    $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                }
                if ($checknummer == 20){
                    $nummer = 4;
                    $knop = "Opslaan";
                }else{
                    $nummer = 3;
                    $knop = "Check antwoorden";
                } 
 
            }
            
            else if($nummer1 == 3){
                if($resultaat[$a] == $antwoord[$a] && $resultaat1[$a] == $antwoord1[$a]){
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Goed gedaan!";
                }
                else if($resultaat[$a] == $antwoord[$a] || $resultaat1[$a] == $antwoord1[$a]){
                    if($resultaat[$a] == $antwoord[$a]){
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                        
                    }
                    else{
                        $eindantwoord[$a] = $antwoord[$a];
                        $eindantwoord1[$a] = $antwoord1[$a];
                        $eindbericht[$a] = "Het is je helaas niet helemaal gelukt.";
                          
                    }
                }     
                else{
                    $eindantwoord[$a] = $antwoord[$a];
                    $eindantwoord1[$a] = $antwoord1[$a];
                    $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                }
                $nummer = 4;
                $knop = "Opslaan"; 
            }
            
            else if($nummer1 == 4){
                
                setcookie("opdr-nl-zo-ond-n1-opdr1", $score, time() + 86400, "/");
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=/opdrachten/nederlands/zinsontleding/onderwerp/niveau1.php">';    
                exit;   
                
            }
            
                 
        }
        
        
?>

