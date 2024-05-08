<?php

/* form/emailTemplate.html.twig */
class __TwigTemplate_eeb0a5ce4363def37d5609c080feb53ae8595270003eeee22fa42c1869276b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "form/emailTemplate.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t\t<h2>emailTemplate.</h2>
\t\t
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "form/emailTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  43 => 10,  36 => 6,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/form/emailTemplate.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	{{form_start(form)}}*/
/* 		{{ form_errors(form) }}*/
/* 		*/
/* 		<h2>emailTemplate.</h2>*/
/* 		*/
/* 		{{ form_widget(form) }}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
