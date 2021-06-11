<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peticiones Http</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .form {
            width: 550px;
        }
    </style>
</head>
<body>
    <?php
    if(isset( $_GET["numero1"]) && isset( $_GET["numero2"])){
        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];
        $op = $_GET["operaciones"];

        $opraciones = new Operaciones($num1,$num2);

        switch($op){
            case "suma":
                $opraciones->setSumar();
                $simbolo = "+";
                break;
            case "resta":
                $opraciones->setRestar();
                $simbolo = "-";
                break;
            case "multiplicación":
                $opraciones->setMulti();
                $simbolo = "x";
                break;
            case "división":
                $opraciones->setDivi();
                $simbolo = "÷";
                break;
        }
        $resultado = $opraciones->getResultado();
       
        include('show.php');
    }else {
        include_once('form.php');
    }

    class Operaciones{
        private $num1;
        private $num2;
        private $res;

        // function __constructor($pnum1, $pnum2){
        //     $this->num1 = $pnum1;
        //     $this->num2 = $pnum2;
        //     $this->res = 0.0;
        // }

        function __construct($pnum1, $pnum2){
             $this->num1 = $pnum1;
             $this->num2 = $pnum2;
             $this->res = 0.0;
        }

        public function setSumar(){
            echo var_dump($this->num1);

            $this->res = $this->num1 + $this->num2;
        }

        public function setRestar(){

            $this->res = $this->num1 - $this->num2;
        }

        public function setMulti(){

            $this->res = $this->num1 * $this->num2;
        }

        public function setDivi(){

            $this->res = $this->num1 / $this->num2;
        }

        public function getResultado(){
            return $this->res;
        }
    }
    
    ?>
</body>
</html>