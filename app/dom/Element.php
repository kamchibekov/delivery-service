<?php

namespace app\dom;

abstract class Element {

    protected $name;
    protected $title;
    protected $value;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function setValue($value) : void
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function html(): string;
}