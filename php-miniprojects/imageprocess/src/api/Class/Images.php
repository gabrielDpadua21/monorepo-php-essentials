<?php


    class Images 
    {

        private $title;
        private $student;
        private $font;
        private $content;
        private $image;
        private $imageDir = '../images/certificado.jpg';
        private $newImage = '../../images/newCertificado.jpg';

        public function __construct($title, $student, $font, $content)
        {
            $this->title = $title;
            $this->student = $student;
            $this->font = $font;
            $this->content = $content;
        }

        public function imageGenerator() 
        {

            $this->image = imagecreatefromjpeg($this->imageDir);

            $titleColor = imagecolorallocate($this->image, 0, 0, 0);

            $color = imagecolorallocate($this->image, 100, 100, 100);

            imagettftext($this->image, 32, 0, 320, 250, $titleColor, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', $this->title);
            imagettftext($this->image, 32, 0, 375, 350, $titleColor, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', utf8_decode($this->student));
            imagettftext($this->image, 15, 0, 400, 450, $color, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', $this->content);
            imagestring($this->image, 3, 440, 370, "Concluido em: " .date("d/m/Y"), $color);

            header("Content-type: image/jpg");

            imagejpeg($this->image);

            imagedestroy($this->image); 

        }

        public function imageDownload()
        {
            $this->image = imagecreatefromjpeg($this->imageDir);

            $titleColor = imagecolorallocate($this->image, 0, 0, 0);

            $color = imagecolorallocate($this->image, 100, 100, 100);

            imagettftext($this->image, 32, 0, 320, 250, $titleColor, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', $this->title);
            imagettftext($this->image, 32, 0, 375, 350, $titleColor, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', utf8_decode($this->student));
            imagettftext($this->image, 15, 0, 400, 450, $color, '../'.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$this->font.DIRECTORY_SEPARATOR.$this->font.'-Regular.ttf', $this->content);
            imagestring($this->image, 3, 440, 370, "Concluido em: " .date("d/m/Y"), $color);

            imagejpeg($this->image, $this->newImage);

            imagedestroy($this->image);
            
            $content = file_get_contents($this->newImage);

            $parse = parse_url($this->newImage);

            $basename = basename($parse['path']);

            $file = fopen($basename, 'w+');

            fwrite($file, $content);

            fclose($file);

        }

    }