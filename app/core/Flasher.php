<?php

class Flasher {

    public static function setFlash($statement, $action, $type){

        $_SESSION['flash'] = [
            'statement' => $statement,
            'action' => $action,
            'type' => $type,
        ];
    }


    public static function Flash(){


        if( isset($_SESSION['flash']) ){

            echo '<div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show" role="alert">
                    Log Masuk
                    <strong>'. $_SESSION['flash']['statement'] . '</strong>' . $_SESSION['flash']['action'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            
            unset($_SESSION['flash']);

        }
    }

    public static function CheckConsult(){


        if( isset($_SESSION['flash']) ){

            echo '<div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show" role="alert">
                    
                    <strong>'. $_SESSION['flash']['statement'] . '</strong>' . $_SESSION['flash']['action'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            
            unset($_SESSION['flash']);

        }
    }
}


?>