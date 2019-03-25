<?php

namespace App\Displayers;

class JsonDisplayer implements DisplayerInterface
{

    public function display($data)
    {
        return json_encode($data);
    }
}