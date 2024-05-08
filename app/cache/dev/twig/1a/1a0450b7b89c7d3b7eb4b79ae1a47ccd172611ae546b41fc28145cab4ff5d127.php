<?php

/* Email/emailTemplateRegistration.html.twig */
class __TwigTemplate_0b3b7b733d16fc9dceb90d9dc6e454c4f928afdae385b1e0b25e1e8c94fd0eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "Email/emailTemplateRegistration.html.twig", 3);
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
        // line 9
        echo "\t
\t\t<h2>emailTemplateRegistration.</h2>
\t\t
\t\tReply NAME: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
\t\t
\t\t";
        // line 15
        echo "\t\t<h3>You did it! You registered!</h3>

\t\tHi ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! You're successfully registered.

\t\t";
        // line 20
        echo "
\t\tThanks!

\t\t";
        // line 24
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo!\" />
\t\t
\t\t
\t";
        // line 31
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "Email/emailTemplateRegistration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  57 => 24,  52 => 20,  47 => 17,  43 => 15,  38 => 12,  33 => 9,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/form/emailTemplate.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	{#*/
/* 	{{form_start(form)}}*/
/* 		{{ form_errors(form) }}*/
/* 	#}*/
/* 	*/
/* 		<h2>emailTemplateRegistration.</h2>*/
/* 		*/
/* 		Reply NAME: {{ name }}*/
/* 		*/
/* 		{# app/Resources/views/Emails/registration.html.twig #}*/
/* 		<h3>You did it! You registered!</h3>*/
/* */
/* 		Hi {{ name }}! You're successfully registered.*/
/* */
/* 		{# example, assuming you have a route named "login" #}*/
/* */
/* 		Thanks!*/
/* */
/* 		{# Makes an absolute URL to the /images/logo.png file #}*/
/* 		<img src="{{ asset('images/logo.png') }}" alt="Logo!" />*/
/* 		*/
/* 		*/
/* 	{#*/
/* 		{{ form_widget(form) }}*/
/* 	{{form_end(form)}}*/
/* 	#}*/
/* 	*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
