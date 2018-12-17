<?php
if (class_exists('Cobra_WPCommand')) return;

class Cobra_WPCommand
{

    protected $env;

    public function __construct($env)
    {

        $this->env = $env;
    }

    private function run($command, $return_raw = false)
    {

        $result = $this->env->sendCommandViaSsh($command);

        return ( $return_raw ? $result : $this->parse($result) );
    }

    private function parse($str)
    {

        return json_decode($str['output']);
    }

}
