<?php

namespace app\dom;

class Select extends Element
{
    protected array $options;

    public function __construct(string $name, string $title)
    {
        parent::__construct($name, $title);
    }

    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    public function html(): string
    {
        $options = "";

        foreach ($this->options as $value => $title) {
            $options .= "<option value=\"$value\">$title</option>";
        }
        return "<div class=\"col-12\">
                <label for=\"{$this->name}\" class=\"form-label\">{$this->title}</label>
                <select class=\"form-select\" name=\"{$this->name}\" value=\"{$this->value}\">
                            <option value=\"\">Choose...</option>
                            $options
                        </select>
                <div class=\"invalid-feedback\">
                    Valid first name is required.
                </div>
            </div>";
    }
}
