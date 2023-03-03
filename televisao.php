<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

        class televisao {
            #atributos
            private $status;
            private $canal;
            private $volume;
    
            #metodos
            public function __construct(){
                $this->status = true;
                $this->canal = 3;
                $this->volume = 10;
            
            }

            public function ligaDesliga(){
                $this->status = !$this->status;
                #if($this->status === "OFF"){
                #   $this->status = "ON";
                # }else{
                #    $this->status = "OFF";
                #}

            }
            public function aumentoCanal(){
                $this-> canal +=1;
                
            }
            public function diminuiCanal(){
                $this->canal -=1;

            }
            public function mostraCanal(){
                return $this->canal;

            }
            public function mostraVolume(){
                return $this->volume;

            }
            public function mostraStatus(){
                return $this->status==true?"desligada":"ligada";
            }

        }
        
        $tv = new televisao();
        print_r($tv);

        echo '<hr>';
        $tv->aumentoCanal();
        print_r($tv);

        echo'<hr>';
        $tv->ligaDesliga();
        print_r($tv);

        echo'<hr>';
        $tv->mostraStatus();
        print_r($tv);

    ?>
    
</body>
</html>