<?php


class Message
{

    public static function setFlash($message, $action, $type)
    {
        var_dump($type);
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash'])) {
            echo ' <div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show text-center" role="alert">
                    Data Santri<strong> '. $_SESSION['flash']['message'].' </strong>
                    '. $_SESSION['flash']['action'] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                unset($_SESSION['flash']);
        }
    }

}