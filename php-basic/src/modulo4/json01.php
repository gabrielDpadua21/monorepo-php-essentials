<?php

    $gatos = array("Thor", 
                    "Frajola", 
                    "Lucifer", 
                    "Vera" => array(
                        "Lola", 
                        "Sheldon"));

                        
    $catJson = json_encode($gatos);

    print_r($catJson);