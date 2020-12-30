<?php

namespace app\dom;

class ElementCompositor extends Element
{
    protected $elements = [];

    public function add(Element $element)
    {
        $name = $element->getName();
        $this->elements[$name] = $element;
    }

    public function remove(Element $element)
    {
        $name = $element->getName();
        if (array_key_exists($name, $this->elements)) {
            unset($this->elements[$name]);
        }
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->elements as $element) {
            $html .= $element->html();
        }
        return $html;
    }
}
