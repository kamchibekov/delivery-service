<?php

namespace app\dom;

use app\dom\Input;

class Form extends ElementCompositor
{
    protected string $action;
    protected string $method;


    public function __construct(string $name, string $title)
    {
        parent::__construct($name, $title);
    }

    public function action(string $action): Form
    {
        $this->action = $action;
        return $this;
    }

    public function method(string $method): Form
    {
        $this->method = $method;
        return $this;
    }

    public function html(): string
    {
        $html = parent::html();

        $submitButton = new Input("", "Submit", "submit");

        return "<div class=\"col-md-7 col-lg-8\">
                    <h4 class=\"mb-3\">{$this->title} {$this->name}</h4>
                    <form action=\"{$this->action}\" method=\"{$this->method}\">
                        <div class=\"row g-3\">$html</div>
                        <hr class=\"my-4\">
                        {$submitButton->html()}
                    </form>
                </div>";
    }
}
