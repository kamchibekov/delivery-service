<?php

namespace app;

use app\DeliveryAddressForm;

class App
{

    public function run()
    {
        $form = new DeliveryAddressForm();
        $content = $form->getForm();

        ob_start();
        include_once 'views/main.html';
        echo ob_get_clean();
    }
}
