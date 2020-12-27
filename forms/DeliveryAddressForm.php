<?php

namespace forms;

class DeliveryAddressForm
{
    protected $country;

    public function __construct(string $country = 'Japan')
    {
        $this->country = $country;
    }

    public function getForm() : string
    {
        $formName = strtolower($this->country);
        ob_start();
        include_once "views/{$formName}.html";
        return ob_get_clean();
    }
}
