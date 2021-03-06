<?php

class ViewModel
{
    protected $data = [];


    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function display($template)
    {
        foreach($this->data as $key => $value){
            $$key = $value;
        }
        include ROOT . '/views/' . $template;
    }
}