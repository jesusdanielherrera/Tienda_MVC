<?php
    class Controllers
    {
        public function __construct()
        {
            $this->views = new Views();
            $this->loadModel();
        }
        public function loadModel()
        {
            //HomeModel
            $model = get_class($this)."model";
            $routClass = "Models/".$model.".php";
            if(file_exists($routClass))
            {
                require_once($routClass);
                $this->model = new $model();
            }
        }
    }   

?>