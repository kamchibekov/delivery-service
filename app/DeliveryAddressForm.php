<?php

namespace app;

use app\dom\Form;
use app\dom\Input;

class DeliveryAddressForm
{
    protected $country;

    protected $countryList = [];

    public function __construct(string $country = 'Japan')
    {
        $this->country = $country;
    }

    public function getForm() : string
    {
        $form = new Form($this->country, "Delivery address for");
        $form->action("/index.php")->method("POST");
        $form->add(new Input("fullname", "Full Name", "input"));
        $form->add(new Input("email", "Email", "email"));
        $form->add(new Input("phone", "Phone", "tel"));
        $form->add(new Input("address", "Address", "input"));

        return $form->html();

    }
}
