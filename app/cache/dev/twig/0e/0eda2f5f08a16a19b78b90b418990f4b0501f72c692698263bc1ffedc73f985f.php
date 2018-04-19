<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_824cef22fd3704c12f5895c2789826213fb638a6271ed809862d30ab2e604e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c77a9d3e931a71e877dd308542cee2d95d4822066ae67738414de662a0599086 = $this->env->getExtension("native_profiler");
        $__internal_c77a9d3e931a71e877dd308542cee2d95d4822066ae67738414de662a0599086->enter($__internal_c77a9d3e931a71e877dd308542cee2d95d4822066ae67738414de662a0599086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c77a9d3e931a71e877dd308542cee2d95d4822066ae67738414de662a0599086->leave($__internal_c77a9d3e931a71e877dd308542cee2d95d4822066ae67738414de662a0599086_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_136e123d92355353427cf959093fd0447aa740c2e1197771648b6d92c5b91f4d = $this->env->getExtension("native_profiler");
        $__internal_136e123d92355353427cf959093fd0447aa740c2e1197771648b6d92c5b91f4d->enter($__internal_136e123d92355353427cf959093fd0447aa740c2e1197771648b6d92c5b91f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_136e123d92355353427cf959093fd0447aa740c2e1197771648b6d92c5b91f4d->leave($__internal_136e123d92355353427cf959093fd0447aa740c2e1197771648b6d92c5b91f4d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99c531f7d0b35002d87e1c8af28dbc515b12dd73088e143c733c98ac243d16f = $this->env->getExtension("native_profiler");
        $__internal_e99c531f7d0b35002d87e1c8af28dbc515b12dd73088e143c733c98ac243d16f->enter($__internal_e99c531f7d0b35002d87e1c8af28dbc515b12dd73088e143c733c98ac243d16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_e99c531f7d0b35002d87e1c8af28dbc515b12dd73088e143c733c98ac243d16f->leave($__internal_e99c531f7d0b35002d87e1c8af28dbc515b12dd73088e143c733c98ac243d16f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae8d90c1b654c1f1c5e9b18cc23817d6e3ade6b608cafff76d9520e8fb4df3e = $this->env->getExtension("native_profiler");
        $__internal_aae8d90c1b654c1f1c5e9b18cc23817d6e3ade6b608cafff76d9520e8fb4df3e->enter($__internal_aae8d90c1b654c1f1c5e9b18cc23817d6e3ade6b608cafff76d9520e8fb4df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 20
        echo "
    <div class=\"block\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
        <p>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("api.doc.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
        </p>
    </div>

    ";
        // line 29
        if (array_key_exists("code", $context)) {
            // line 30
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 32
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_aae8d90c1b654c1f1c5e9b18cc23817d6e3ade6b608cafff76d9520e8fb4df3e->leave($__internal_aae8d90c1b654c1f1c5e9b18cc23817d6e3ade6b608cafff76d9520e8fb4df3e_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_76a6f674f9dfd2711a4424371c5de8a53f467c4381f64334a362e553decefeaf = $this->env->getExtension("native_profiler");
        $__internal_76a6f674f9dfd2711a4424371c5de8a53f467c4381f64334a362e553decefeaf->enter($__internal_76a6f674f9dfd2711a4424371c5de8a53f467c4381f64334a362e553decefeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_76a6f674f9dfd2711a4424371c5de8a53f467c4381f64334a362e553decefeaf->leave($__internal_76a6f674f9dfd2711a4424371c5de8a53f467c4381f64334a362e553decefeaf_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_aaa4009b5a7aeda00cef41720c1e70692920f5a355221b98a030ed75820fad08 = $this->env->getExtension("native_profiler");
        $__internal_aaa4009b5a7aeda00cef41720c1e70692920f5a355221b98a030ed75820fad08->enter($__internal_aaa4009b5a7aeda00cef41720c1e70692920f5a355221b98a030ed75820fad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_aaa4009b5a7aeda00cef41720c1e70692920f5a355221b98a030ed75820fad08->leave($__internal_aaa4009b5a7aeda00cef41720c1e70692920f5a355221b98a030ed75820fad08_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_381f8777fee721799acb69dc0f6db1392f57b8f66d1fb5f621af3192087e34ef = $this->env->getExtension("native_profiler");
        $__internal_381f8777fee721799acb69dc0f6db1392f57b8f66d1fb5f621af3192087e34ef->enter($__internal_381f8777fee721799acb69dc0f6db1392f57b8f66d1fb5f621af3192087e34ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_381f8777fee721799acb69dc0f6db1392f57b8f66d1fb5f621af3192087e34ef->leave($__internal_381f8777fee721799acb69dc0f6db1392f57b8f66d1fb5f621af3192087e34ef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 22,  143 => 14,  137 => 13,  127 => 16,  125 => 13,  122 => 12,  116 => 11,  105 => 32,  101 => 30,  99 => 29,  90 => 25,  86 => 23,  84 => 22,  80 => 20,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/demo.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Demo Bundle' %}*/
/* */
/* {% block body %}*/
/*     {% block content_header %}*/
/*         <ul id="menu">*/
/*             {% block content_header_more %}*/
/*                 <li><a href="{{ path('_demo') }}">Demo Home</a></li>*/
/*             {% endblock %}*/
/*         </ul>*/
/* */
/*         <div style="clear: both"></div>*/
/*     {% endblock %}*/
/* */
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/* */
/*         <p>*/
/*             <a href="{{ path('nelmio_api_doc_index') }}">{{ 'api.doc.link'|trans({}, 'AppBundle') }}</a>*/
/*         </p>*/
/*     </div>*/
/* */
/*     {% if code is defined %}*/
/*         <h2>Code behind this page</h2>*/
/*         <div class="block">*/
/*             <div class="symfony-content">{{ code|raw }}</div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
