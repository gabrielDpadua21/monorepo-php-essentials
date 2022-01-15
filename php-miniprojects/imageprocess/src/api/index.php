<?php

        require_once('config.php');

        $title = $_POST['title'];
        $student  = $_POST['student'];
        $font  = $_POST['font'];
        $content  = $_POST['content'];
        
        $image = new Images($title, $student, $font, $content);

        $image->imageGenerator();
        
        
