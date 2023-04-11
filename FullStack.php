<?php
trait FrontendField{
public $designSkill = "figma";
public $frontendDevelopmentSkill=["HTML","CSS","JS","API"];
public function prototypeOnFigma(){
    return "frontend Designer can create design on Figma";
}
public function frontendDevelopment(){
    return "Develop website with ".join($this->frontendDevelopmentSkill);
}
}
trait BackendField{
    public $systemDesign = "understanding the requirement of system";
    public $databaseSkill = "mysql";
    public $backendLanguage = ["node","php"];
}
trait DeploymentField{
    public $shareHosting = "cPanel";
    public $cloud="AWS";
}
class fullStackDeveloper{
    use FrontendField,BackendField,DeploymentField;
}
system("cls");
$me = new fullStackDeveloper;
print_r($me);