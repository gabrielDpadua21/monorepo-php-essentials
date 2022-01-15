<?php

    # RECURSIVE FUNCTIONS ...

    $hierarquia = array(
        array(
            "nome_cargo" => "CEO",
            "subordinados" => array (
                array(
                    "nome_cargo" => "CTO",
                    "subordinados" => array(
                        array(
                            "nome_cargo" => "IT MANAGER",
                            "subordinados" => array(
                                array(
                                    "nome_cargo" => "DEVELOPERS"
                                )
                            )
                        )
                    )
                ),

                array(
                    "nome_cargo" => "CFO",
                    "subordinados" => array(
                        array(
                            "nome_cargo" => "FINANCIAL MANAGER",
                            "subordinados" => array(
                                array(
                                    "nome_cargo" => "FINANCIAL ANALYST"
                                )
                            )
                        )
                    )
                )
            )
        )
    );

    function displayRecursive($offices) {

        $html = "<ul>";

        foreach($offices as $office) {
            
            $html .= "<li>";

            $html .= $office['nome_cargo'];

            if(isset($office['subordinados']) && count($office['subordinados']) > 0) {
                $html .= displayRecursive($office['subordinados']);
            }

            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;
    }

    echo displayRecursive($hierarquia);