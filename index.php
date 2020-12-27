<?php

require_once('auto_loader.php');

use app\App;
use forms\DeliveryAddressForm;

$form = new DeliveryAddressForm();

$content = $form->getForm();

(new App())->run($content);
