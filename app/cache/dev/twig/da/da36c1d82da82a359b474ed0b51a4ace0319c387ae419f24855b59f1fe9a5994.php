<?php

/* AppBundle:Note:newNote.html.twig */
class __TwigTemplate_e07ae699865653eec2fcd23dc7186362a3a908c97558fd0148516b6485e38a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:newNote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11d1815c24f2452d358696e2e851093e10d14ad7b9afbb4fdc224b5703b726bc = $this->env->getExtension("native_profiler");
        $__internal_11d1815c24f2452d358696e2e851093e10d14ad7b9afbb4fdc224b5703b726bc->enter($__internal_11d1815c24f2452d358696e2e851093e10d14ad7b9afbb4fdc224b5703b726bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:newNote.html.twig"));

        // line 21
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11d1815c24f2452d358696e2e851093e10d14ad7b9afbb4fdc224b5703b726bc->leave($__internal_11d1815c24f2452d358696e2e851093e10d14ad7b9afbb4fdc224b5703b726bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0b9ed810a22bbe01e65a7fde0f382b8782dc4c6d96dd13b4d4c9ed2d05da875 = $this->env->getExtension("native_profiler");
        $__internal_c0b9ed810a22bbe01e65a7fde0f382b8782dc4c6d96dd13b4d4c9ed2d05da875->enter($__internal_c0b9ed810a22bbe01e65a7fde0f382b8782dc4c6d96dd13b4d4c9ed2d05da875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_c0b9ed810a22bbe01e65a7fde0f382b8782dc4c6d96dd13b4d4c9ed2d05da875->leave($__internal_c0b9ed810a22bbe01e65a7fde0f382b8782dc4c6d96dd13b4d4c9ed2d05da875_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_72c6f1b79123702d0f9535519a52187fbb73703f0e473bbae5156051eebd597b = $this->env->getExtension("native_profiler");
        $__internal_72c6f1b79123702d0f9535519a52187fbb73703f0e473bbae5156051eebd597b->enter($__internal_72c6f1b79123702d0f9535519a52187fbb73703f0e473bbae5156051eebd597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_72c6f1b79123702d0f9535519a52187fbb73703f0e473bbae5156051eebd597b->leave($__internal_72c6f1b79123702d0f9535519a52187fbb73703f0e473bbae5156051eebd597b_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc02b856b8e860b1a38abf577a691cba6b6920178cb5137f1b567952d1a1a978 = $this->env->getExtension("native_profiler");
        $__internal_dc02b856b8e860b1a38abf577a691cba6b6920178cb5137f1b567952d1a1a978->enter($__internal_dc02b856b8e860b1a38abf577a691cba6b6920178cb5137f1b567952d1a1a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("post_notes");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

        <input type=\"submit\" value=\"";
            // line 15
            echo $this->env->getExtension('translator')->getTranslator()->trans("note.new.submit", array(), "AppBundle");
            echo "\">
    </form>
    ";
        }
        // line 18
        echo "
";
        
        $__internal_dc02b856b8e860b1a38abf577a691cba6b6920178cb5137f1b567952d1a1a978->leave($__internal_dc02b856b8e860b1a38abf577a691cba6b6920178cb5137f1b567952d1a1a978_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:newNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  90 => 15,  85 => 13,  77 => 11,  75 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 21,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.new.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     {%  if (form is defined) %}*/
/*     <form action="{{ url('post_notes') }}" method="POST" {{ form_enctype(form) }}>*/
/* */
/*         {{ form_widget(form) }}*/
/* */
/*         <input type="submit" value="{% trans from 'AppBundle' %}note.new.submit{% endtrans %}">*/
/*     </form>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
