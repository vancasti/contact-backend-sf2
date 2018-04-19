<?php

/* AppBundle:Note:getNotes.html.twig */
class __TwigTemplate_fd652bdc55b180a05f3a88e66904b7cfb2fae9335383dc00f178ba1f4ba2e811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:getNotes.html.twig", 1);
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
        $__internal_c4e659c50a5c0116e8f3b7c953063091810e95aef3b787e1c924a3af51aa5f50 = $this->env->getExtension("native_profiler");
        $__internal_c4e659c50a5c0116e8f3b7c953063091810e95aef3b787e1c924a3af51aa5f50->enter($__internal_c4e659c50a5c0116e8f3b7c953063091810e95aef3b787e1c924a3af51aa5f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:getNotes.html.twig"));

        // line 30
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e659c50a5c0116e8f3b7c953063091810e95aef3b787e1c924a3af51aa5f50->leave($__internal_c4e659c50a5c0116e8f3b7c953063091810e95aef3b787e1c924a3af51aa5f50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_961f066c69ffccb0237c2813b122c75804e0e76127d196f3f7ce171a9cfe0643 = $this->env->getExtension("native_profiler");
        $__internal_961f066c69ffccb0237c2813b122c75804e0e76127d196f3f7ce171a9cfe0643->enter($__internal_961f066c69ffccb0237c2813b122c75804e0e76127d196f3f7ce171a9cfe0643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_961f066c69ffccb0237c2813b122c75804e0e76127d196f3f7ce171a9cfe0643->leave($__internal_961f066c69ffccb0237c2813b122c75804e0e76127d196f3f7ce171a9cfe0643_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9ac24fb9618168c99b429cd9cd5b9731504236f5615760309adc17e91ed6c635 = $this->env->getExtension("native_profiler");
        $__internal_9ac24fb9618168c99b429cd9cd5b9731504236f5615760309adc17e91ed6c635->enter($__internal_9ac24fb9618168c99b429cd9cd5b9731504236f5615760309adc17e91ed6c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_9ac24fb9618168c99b429cd9cd5b9731504236f5615760309adc17e91ed6c635->leave($__internal_9ac24fb9618168c99b429cd9cd5b9731504236f5615760309adc17e91ed6c635_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_59ac90ff808447a0daf0fd5a3f30b5c3d66cc266553d7b1650d998538daa6c4e = $this->env->getExtension("native_profiler");
        $__internal_59ac90ff808447a0daf0fd5a3f30b5c3d66cc266553d7b1650d998538daa6c4e->enter($__internal_59ac90ff808447a0daf0fd5a3f30b5c3d66cc266553d7b1650d998538daa6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.offset", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) : ("-")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.limit", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "limit", array()), "html", null, true);
        echo "
    </p>

    <ul id=\"note-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "notes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["note"]) {
            // line 16
            echo "        <li>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_note", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["note"], "html", null, true);
            echo "</a>
            [<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.edit.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
            [<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.remove.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.empty", array(), "AppBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
    <p>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("new_note");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
    </p>
";
        
        $__internal_59ac90ff808447a0daf0fd5a3f30b5c3d66cc266553d7b1650d998538daa6c4e->leave($__internal_59ac90ff808447a0daf0fd5a3f30b5c3d66cc266553d7b1650d998538daa6c4e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:getNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  128 => 24,  119 => 22,  109 => 19,  103 => 18,  97 => 17,  94 => 16,  89 => 15,  76 => 11,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 30,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.list.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     <p>*/
/*         {{ 'note.offset'|trans({}, 'AppBundle') }}: {{ data.offset ?: '-' }}, {{ 'note.limit'|trans({}, 'AppBundle') }}: {{ data.limit }}*/
/*     </p>*/
/* */
/*     <ul id="note-list">*/
/*         {% for id, note in data.notes %}*/
/*         <li>*/
/*             <a href="{{ path('get_note', {'id': id}) }}">{{ note }}</a>*/
/*             [<a href="{{ path('edit_notes', {'id': id}) }}">{{ 'note.edit.link'|trans({}, 'AppBundle') }}</a>]*/
/*             [<a href="{{ path('remove_notes', {'id': id}) }}">{{ 'note.remove.link'|trans({}, 'AppBundle') }}</a>]*/
/*         </li>*/
/*         {% else %}*/
/*         <li>{{ 'note.list.empty'|trans({}, 'AppBundle') }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <p>*/
/*         <a href="{{ path('new_note') }}">{{ 'note.new.link'|trans({}, 'AppBundle') }}</a>*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
