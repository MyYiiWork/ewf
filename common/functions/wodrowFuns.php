<?php

namespace common\functions;

class wodrowFuns {
    static public function test1(){
        echo '111111';
        exit;
    }
    
    static public function wodrowShow($data='null',$ctrl=0){
        switch ($ctrl){
            case 0:
                echo '<pre>';
                var_dump($data);
                echo "</pre>";
            break;
            case 1:
                echo '<pre>';
                var_dump($data);
                echo "</pre>";
                exit();
            break;
        }
    }
}

