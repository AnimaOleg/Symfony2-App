<?php

/* :form:new.html.twig */
class __TwigTemplate_7d5691aac256d1b8a2d7116a21a53d6b6133b6eaf92d523676e91136c868e850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
    }

    public function getTemplateName()
    {
        return ":form:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
    }
}
/* {# app/Resources/views/form/new.html.twig #}*/
/*  */
/* {{ form(form) }}*/
