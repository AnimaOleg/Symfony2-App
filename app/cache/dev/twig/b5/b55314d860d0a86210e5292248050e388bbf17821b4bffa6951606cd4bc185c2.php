<?php

/* :form:new2.html.twig */
class __TwigTemplate_23369897f819b1b2eeceb1723cc1c704ec505b5e585630093ff2cb071b60a929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":form:new2.html.twig", 3);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "task"), "html", null, true);
        echo "</h1>
    <h1>Date: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "fecha"), "date", array()), "m/d/Y"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return ":form:new2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/form/new2.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task: {{ task }}</h1>*/
/*     <h1>Date: {{ fecha.date|date("m/d/Y") }}</h1>*/
/* {% endblock %}*/
