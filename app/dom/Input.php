<?php

namespace app\dom;

class Input extends Element
{
    protected $type;

    public function __construct(string $name, string $title, string $type)
    {
        $this->type = $type;
        parent::__construct($name, $title);
    }

    public function html(): string
    {
        return "<div class=\"col-12\">
            <label for=\"{$this->name}\" class=\"form-label\">{$this->title}</label>
            <input type=\"{$this->type}\" name=\"{$this->name}\" class=\"form-control\" required value=\"{$this->value}\">
            <div class=\"invalid-feedback\">
                Valid first name is required.
            </div>
        </div>";
    }
}
