<?php

class Flasher{
    public static function setFlash($action, $message, $type){
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type,
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '
            <div class="col-12 d-flex justify-content-start px-0">
                    <div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show col-6" role="alert">
                        ' . $_SESSION['flash']['action']  . ' <strong>' . $_SESSION['flash']['message'] . '</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            ';
            unset($_SESSION['flash']);
        }
    }
}