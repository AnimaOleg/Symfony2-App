<?php

/* form/formTemplate_edition.html.twig */
class __TwigTemplate_4d740fab340df1426776abd07fe031a56322d9fa8adcb4e201d891b96604f1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "form/formTemplate_edition.html.twig", 3);
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
        echo "    <h1>ID: ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    <h1>Title: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
    <h1>Summary: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["summary"]) ? $context["summary"] : $this->getContext($context, "summary")), "html", null, true);
        echo "</h1>
    <h1>Content: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "</h1>
    <h1>Author Email: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["authorEmail"]) ? $context["authorEmail"] : $this->getContext($context, "authorEmail")), "html", null, true);
        echo "</h1>
    <h1>Published At: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publishedAt"]) ? $context["publishedAt"] : $this->getContext($context, "publishedAt")), "date", array()), "m/d/Y"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "form/formTemplate_edition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/form/formTemplate_edition.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ID: {{ id }}</h1>*/
/*     <h1>Title: {{ title }}</h1>*/
/*     <h1>Summary: {{ summary }}</h1>*/
/*     <h1>Content: {{ content }}</h1>*/
/*     <h1>Author Email: {{ authorEmail }}</h1>*/
/*     <h1>Published At: {{ publishedAt.date|date('m/d/Y') }}</h1>*/
/* {% endblock %}*/
