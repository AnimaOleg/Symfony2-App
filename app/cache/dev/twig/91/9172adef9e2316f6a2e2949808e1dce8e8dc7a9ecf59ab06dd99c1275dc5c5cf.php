<?php

/* :form:formTemplate.html.twig */
class __TwigTemplate_3f6b82aa3f28e5c2af314c35f7a0bc235a12a9ab2f0489e197b51e8ac7298e7f extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

    <input type=\"submit\" value=\"Create\"
           class=\"btn btn-default pull-right\" />
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "



";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "my-form-class")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return ":form:formTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  44 => 13,  40 => 12,  33 => 8,  26 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# app/Resources/views/form/formTemplate.html.twig #}*/
/* */
/* {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" value="Create"*/
/*            class="btn btn-default pull-right" />*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
/* {{ form_start(form, {'attr': {'class': 'my-form-class'} }) }}*/
/*     {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
