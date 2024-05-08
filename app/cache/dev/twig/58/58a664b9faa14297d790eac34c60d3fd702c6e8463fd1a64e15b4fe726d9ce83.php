<?php

/* form/formTemplate_result.html.twig */
class __TwigTemplate_7f5bf2ee405126671865440d7eb647064501cefd8a1ba0923d208e1ed27a3ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "form/formTemplate_result.html.twig", 3);
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
\t\t<h2>formTemplate_result.</h2>
\t\t<h3>ID: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h3>
\t\t<h3>Title: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
\t\t<h3>Summary: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["summary"]) ? $context["summary"] : $this->getContext($context, "summary")), "html", null, true);
        echo "</h3>
\t\t<h3>Content: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "</h3>
\t\t<h3>Author Email: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["authorEmail"]) ? $context["authorEmail"] : $this->getContext($context, "authorEmail")), "html", null, true);
        echo "</h3>
\t\t<h3>Published At: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publishedAt"]) ? $context["publishedAt"] : $this->getContext($context, "publishedAt")), "date", array()), "m/d/Y"), "html", null, true);
        echo "</h3>
\t\t
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "form/formTemplate_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  36 => 6,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/form/formTemplate_result.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	{{form_start(form)}}*/
/* 		{{ form_errors(form) }}*/
/* 		*/
/* 		<h2>formTemplate_result.</h2>*/
/* 		<h3>ID: {{ id }}</h3>*/
/* 		<h3>Title: {{ title }}</h3>*/
/* 		<h3>Summary: {{ summary }}</h3>*/
/* 		<h3>Content: {{ content }}</h3>*/
/* 		<h3>Author Email: {{ authorEmail }}</h3>*/
/* 		<h3>Published At: {{ publishedAt.date|date('m/d/Y') }}</h3>*/
/* 		*/
/* 		{{ form_widget(form) }}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
