<?php

trait FrontendField {
    public $frontendDesignSkill = "Figma";
    public $frontendDevelopmentSkill = ["HTML" , "Css" , "JS" , "API"];


    public function prortoypeOnFigma () {
        return "frontend designer can create desgin on figma";
    }

    public function frontendDevelopment () {
        return "develop website with " .join($this->frontendDevelopmentSkill);
    }

}

trait BackendField  {
    public $systemDesign = "Understanding the requirement of system";
    public $databaseSkill = "mysql";

    public $backendLanguage =  ["node" , "php"];

}

trait DeploymentField {
    public $shareHosting = "cPanel";
    public $cloud = "AWS";

    
}

class FullStackDeveloper {
    use FrontendField,BackendField,DeploymentField;
}

$lmo = new FullStackDeveloper;

print_r($lmo);