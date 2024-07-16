<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Config\Paths;
use Framework\TemplateEngine;



class AuthController {


        private TemplateEngine $view;

        public function __construct()
        {
            $this->view = new TemplateEngine(Paths::VIEWS);
        }



        public function onboarding(){

          $this->view->render("onboarding.php");

        }


}