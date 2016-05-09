<<<<<<< HEAD
    <?php session_start();
=======
    <?php
>>>>>>> 53dc1ff42e52e7907973af8bc1315755cd2928f9
    //antwoord pagina voor opdrachten met 1 invoervak

    for($e = 0; $e<10; $e++){
            $eindantwoord[$e] = "";
            $eindantwoord1[$e] = "";
            $eindbericht[$e] = "";
            $status[$e] = "incorrect";             
            }
            
            $score = 0;
            $nummer = 0;
            $checknummer = 0;
            $knop = "Invullen";
            $optie1 = "Goed gedaan!";
            $optie2 = "Het is je helaas nog niet helemaal gelukt.";
            $optie3 = "Helaas, probeer het nog een keer.";
            $optie4 = "Het is je helaas niet helemaal gelukt.";
            $optie5 = "Helaas, het is je niet gelukt.";
            
            if($_POST["button"]){
                
                $nummer1 = $_POST["nummer"];
                $score = $_POST["score"];
                $checknummer = $_POST["check"];
                
                $resultaat = array(
                        $_POST["vraag0"],
                        $_POST["vraag1"],
                        $_POST["vraag2"],
                        $_POST["vraag3"],
                        $_POST["vraag4"],
                        $_POST["vraag5"],
                        $_POST["vraag6"],
                        $_POST["vraag7"],
                        $_POST["vraag8"],
                        $_POST["vraag9"]
        );
                
                
                $controle = array(
                    $_POST["controle0"],
                    $_POST["controle1"],
                    $_POST["controle2"],
                    $_POST["controle3"],
                    $_POST["controle4"],
                    $_POST["controle5"],
                    $_POST["controle6"],
                    $_POST["controle7"],
                    $_POST["controle8"],
                    $_POST["controle9"],
            );
                
                
            
            for($a = 0; $a<10; $a++){
                
                if($velden == 1){
                    
                
                    if($nummer1 == 0){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];               
                            $eindbericht[$a] = "Goed gedaan!";
                            $score = $score + 10;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                            $eindantwoord[$a] = "";
                            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 1;
                            $knop = "Invullen";
                        } 
                    }
                    
                    else if($nummer1 == 1){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $eindbericht[$a] = "Goed gedaan!";
                            if($controle[$a] == $optie1){
                                $score = $score + 0;
                                $checknummer = $checknummer + 0;
                            }
                            else{
                                $score = $score + 6;
                                $checknummer = $checknummer + 1;
                            }                                                                                  
                        }                
                        else{
                            $eindantwoord[$a] = "";
                            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 2;
                            $knop = "Invullen";
                        } 
                        
                    }
                    
                    else if($nummer1 == 2){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $eindbericht[$a] = "Goed gedaan!";
                            if($controle[$a] == $optie1){
                                $score = $score + 0;
                                $checknummer = $checknummer + 0;
                            }
                            else{
                                $score = $score + 2;
                                $checknummer = $checknummer + 1;
                            }                  
                        }                
                        else{
                            $eindantwoord[$a] = "";
                            $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 3;
                            $knop = "Check antwoorden";
                        } 
        
                    }
                    
                    else if($nummer1 == 3){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $eindbericht[$a] = "Goed gedaan!";
                        }                     
                        else{
                            $eindantwoord[$a] = $antwoord[$a];                    
                            $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                        }
                        $nummer = 4;
                        $knop = "Opslaan"; 
                    }
                    
                    else if($nummer1 == 4){
                    
                        setcookie($cookie, $score, time() + 86400, "/");
                        echo $exitLink;    
                        exit;   
                    
                    }
                    
                    
                }
                else if($velden == 2){
                    
                    $resultaat1 = array(
                        $_POST["vraag10"],
                        $_POST["vraag11"],
                        $_POST["vraag12"],
                        $_POST["vraag13"],
                        $_POST["vraag14"],
                        $_POST["vraag15"],
                        $_POST["vraag16"],
                        $_POST["vraag17"],
                        $_POST["vraag18"],
                        $_POST["vraag19"]
        );
                    
                    $controle1 = array(
                        $_POST["controle10"],
                        $_POST["controle11"],
                        $_POST["controle12"],
                        $_POST["controle13"],
                        $_POST["controle14"],
                        $_POST["controle15"],
                        $_POST["controle16"],
                        $_POST["controle17"],
                        $_POST["controle18"],
                        $_POST["controle19"],
            );
                    
                    
                    
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
                    
                        setcookie($cookie, $score, time() + 86400, "/");
                        echo $exitLink;    
                        exit;   
                    
                    }
                    
                    
                }
                
                else if($velden == 3){
                    
                if($nummer1 == 0){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];               
                            $eindbericht[$a] = "Goed gedaan!";
                            $status[$a] = "correct";
                            $score = $score + 10;
                            $checknummer = $checknummer + 1;
                        }
                        else{
                            $eindantwoord[$a] = "";
                            $status[$a] = "incorrect";
                            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 1;
                            $knop = "Invullen";
                        } 
                    }
                    
                    else if($nummer1 == 1){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $eindbericht[$a] = "Goed gedaan!";
                            if($controle[$a] == $optie1){
                                $score = $score + 0;
                                $status[$a] = "correct";
                                $checknummer = $checknummer + 0;
                            }
                            else{
                                $score = $score + 6;
                                $status[$a] = "correct";
                                $checknummer = $checknummer + 1;
                            }                                                                                  
                        }                
                        else{
                            $eindantwoord[$a] = "";
                            $status[$a] = "incorrect";
                            $eindbericht[$a] = "Helaas, probeer het nog een keer.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 2;
                            $knop = "Invullen";
                        } 
                        
                    }
                    
                    else if($nummer1 == 2){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $eindbericht[$a] = "Goed gedaan!";
                            if($controle[$a] == $optie1){
                                $score = $score + 0;
                                $status[$a] = "correct";
                                $checknummer = $checknummer + 0;
                            }
                            else{
                                $score = $score + 2;
                                $status[$a] = "correct";
                                $checknummer = $checknummer + 1;
                            }                  
                        }                
                        else{
                            $eindantwoord[$a] = "";
                            $status[$a] = "incorrect";
                            $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                        }
                        if ($checknummer == 10){
                            $nummer = 4;
                            $knop = "Opslaan";
                        }else{
                            $nummer = 3;
                            $knop = "Check antwoorden";
                        } 
        
                    }
                    
                    else if($nummer1 == 3){
                        if($resultaat[$a] == $antwoord[$a]){
                            $eindantwoord[$a] = $antwoord[$a];
                            $status[$a] = "correct";  
                            $eindbericht[$a] = "Goed gedaan!";
                        }                     
                        else{
                            $eindantwoord[$a] = $antwoord[$a];
                            $status[$a] = "correct";                    
                            $eindbericht[$a] = "Helaas, het is je niet gelukt.";
                        }
                        $nummer = 4;
                        $knop = "Opslaan"; 
                    }
                    
                    else if($nummer1 == 4){
                    
                        setcookie($cookie, $score, time() + 86400, "/");
                        echo $exitLink;    
                        exit;   
                    
                    }
                    
                    
                }   
                
                    
                
                    
                }
            }
            ?>