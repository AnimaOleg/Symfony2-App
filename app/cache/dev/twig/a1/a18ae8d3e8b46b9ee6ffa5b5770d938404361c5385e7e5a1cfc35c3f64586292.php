<?php

/* :form:formView.html.twig */
class __TwigTemplate_12111760e9bee0fd7230412f12fd9d352c836337050e38140a2e15b3c51a3260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":form:formView.html.twig", 3);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Task: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "firstname"), "html", null, true);
        echo "</h1>
    <h1>DNI: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "dni"), "html", null, true);
        echo "</h1>
    <h1>Age: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "age"), "html", null, true);
        echo "</h1>
    <h1>Checkbox: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "checkbox"), "html", null, true);
        echo "</h1>
    <h1>Email: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "email"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return ":form:formView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/form/formView.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task: {{ firstname }}</h1>*/
/*     <h1>DNI: {{ dni }}</h1>*/
/*     <h1>Age: {{ age }}</h1>*/
/*     <h1>Checkbox: {{ checkbox }}</h1>*/
/*     <h1>Email: {{ email }}</h1>*/
/* {% endblock %}*/
