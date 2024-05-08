<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_12e070c3bbb87d5d7f053292036e3516dbe6486a0c1103613f46a43573a1508f extends Twig_Template
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
        // line 1
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "exception"), "toarray", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ exception.toarray|json_encode|raw }}*/
/* */
