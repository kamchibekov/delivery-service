<?php

namespace app\dom;

class Button extends Input
{
    public function __construct(string $name, string $title, string $type)
    {
        $this->type = $type;
        parent::__construct($name, $title, $type);
    }

    public function html(): string
    {
        return "<button class=\"w-100 btn btn-primary btn-lg\" type=\"{$this->type}\">{$this->title}</button>";
    }
}
