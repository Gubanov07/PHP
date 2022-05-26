<?php
class Passsword extends Input
    {
        public function __construct()
        {
            $this->setAttr('type', 'password');
            parent::__construct();
        }
    }
?>