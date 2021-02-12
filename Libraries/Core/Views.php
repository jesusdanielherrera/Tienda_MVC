<?php

    class Views
    {
        function getView($controller, $view, $data="")
        {
            $controller =  get_class($controller);
            if($controller == "Home")
            {   
                $view = 'Views/s'.$view.".php";
            }else{
                $view = 'Views/'.$controller."/".$view.".php";    
            }
            require_once($view);
        }
    }
?>