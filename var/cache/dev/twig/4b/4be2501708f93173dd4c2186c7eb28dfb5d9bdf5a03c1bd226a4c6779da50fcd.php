<?php

/* course/form.html.twig */
class __TwigTemplate_231a8152435d9c3a64e8e1bb9a1023c96775a224b85c5a05cd8af2e50feb5466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/form.html.twig", 1);
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
        $__internal_5d90784a48aa573e08f31a9aaeaef89a8718c8f51aba392d5365f50b3ffda5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d90784a48aa573e08f31a9aaeaef89a8718c8f51aba392d5365f50b3ffda5e8->enter($__internal_5d90784a48aa573e08f31a9aaeaef89a8718c8f51aba392d5365f50b3ffda5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/form.html.twig"));

        $__internal_c029aab8e51e9deb5ad09af5cbe1b1815c3aa9c27c42c18c6dd03978c2ec0ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c029aab8e51e9deb5ad09af5cbe1b1815c3aa9c27c42c18c6dd03978c2ec0ff2->enter($__internal_c029aab8e51e9deb5ad09af5cbe1b1815c3aa9c27c42c18c6dd03978c2ec0ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d90784a48aa573e08f31a9aaeaef89a8718c8f51aba392d5365f50b3ffda5e8->leave($__internal_5d90784a48aa573e08f31a9aaeaef89a8718c8f51aba392d5365f50b3ffda5e8_prof);

        
        $__internal_c029aab8e51e9deb5ad09af5cbe1b1815c3aa9c27c42c18c6dd03978c2ec0ff2->leave($__internal_c029aab8e51e9deb5ad09af5cbe1b1815c3aa9c27c42c18c6dd03978c2ec0ff2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b90502692a8ab65140221771ecd05248eddb5d0d344ed5c2c8b4e00c6a057c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b90502692a8ab65140221771ecd05248eddb5d0d344ed5c2c8b4e00c6a057c1->enter($__internal_1b90502692a8ab65140221771ecd05248eddb5d0d344ed5c2c8b4e00c6a057c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_214b37ce82d4d103a6247a781b9ac7126c89648a43914c71275a6da51f4b8729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214b37ce82d4d103a6247a781b9ac7126c89648a43914c71275a6da51f4b8729->enter($__internal_214b37ce82d4d103a6247a781b9ac7126c89648a43914c71275a6da51f4b8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        <p>
            W&auml;hle die von dir bereits bestandenen Module aus. Dadurch werden die Module angezeigt, die du als
            n&auml;chstes belegen kannst.
        </p>
        <h3>Legende</h3>
        <ul class=\"legend\">
            <li><span class=\"btn\">&nbsp;</span> Modul w&auml;hlbar (Pflichtmodul)</li>
            <li><span class=\"btn wpf\">&nbsp;</span> Modul w&auml;hlbar (Wahlpflichtmodul)</li>
            <li><span class=\"btn selected\">&nbsp;</span> Modul gew&auml;hlt</li>
        </ul>
    </section>
    <section>
        <form method=\"post\" action=\"\" id=\"courseform\">
            <button type=\"reset\">Auswahl zur&uuml;cksetzen</button>
            <div class=\"course-wrapper\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 21
            echo "                <div class=\"course-button\">
                    <input
                            type=\"checkbox\"
                            name=\"course[]\"
                            value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            class=\"out-of-sight\"
                            id=\"course_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            ";
            // line 28
            if (($this->getAttribute($context["course"], "selected", array()) == 1)) {
                echo " checked";
            }
            // line 29
            echo "                    >
                    <label
                            for=\"course_";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            class=\"course-label";
            // line 32
            if ((0 == $this->getAttribute($context["course"], "wpf", array()))) {
                echo " course-wpf";
            }
            echo "\"
                    >
                        <span class=\"course-name\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "</span>
                    </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </form>
    </section>
    <!-- ToDo get rid of this jQuery junk -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        \$(\"#courseform\").on(\"change\", 'input[type=\"checkbox\"]', function(){
            \$(this).closest(\"form\").submit();
        });
    </script>
";
        
        $__internal_214b37ce82d4d103a6247a781b9ac7126c89648a43914c71275a6da51f4b8729->leave($__internal_214b37ce82d4d103a6247a781b9ac7126c89648a43914c71275a6da51f4b8729_prof);

        
        $__internal_1b90502692a8ab65140221771ecd05248eddb5d0d344ed5c2c8b4e00c6a057c1->leave($__internal_1b90502692a8ab65140221771ecd05248eddb5d0d344ed5c2c8b4e00c6a057c1_prof);

    }

    public function getTemplateName()
    {
        return "course/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  105 => 34,  98 => 32,  94 => 31,  90 => 29,  86 => 28,  82 => 27,  77 => 25,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <section>
        <p>
            W&auml;hle die von dir bereits bestandenen Module aus. Dadurch werden die Module angezeigt, die du als
            n&auml;chstes belegen kannst.
        </p>
        <h3>Legende</h3>
        <ul class=\"legend\">
            <li><span class=\"btn\">&nbsp;</span> Modul w&auml;hlbar (Pflichtmodul)</li>
            <li><span class=\"btn wpf\">&nbsp;</span> Modul w&auml;hlbar (Wahlpflichtmodul)</li>
            <li><span class=\"btn selected\">&nbsp;</span> Modul gew&auml;hlt</li>
        </ul>
    </section>
    <section>
        <form method=\"post\" action=\"\" id=\"courseform\">
            <button type=\"reset\">Auswahl zur&uuml;cksetzen</button>
            <div class=\"course-wrapper\">
                {% for course in courses %}
                <div class=\"course-button\">
                    <input
                            type=\"checkbox\"
                            name=\"course[]\"
                            value=\"{{ course.id }}\"
                            class=\"out-of-sight\"
                            id=\"course_{{ course.id }}\"
                            {% if course.selected == 1 %} checked{% endif %}
                    >
                    <label
                            for=\"course_{{ course.id }}\"
                            class=\"course-label{% if 0 == course.wpf %} course-wpf{% endif %}\"
                    >
                        <span class=\"course-name\">{{ course.name }}</span>
                    </label>
                </div>
                {% endfor %}
            </div>
        </form>
    </section>
    <!-- ToDo get rid of this jQuery junk -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        \$(\"#courseform\").on(\"change\", 'input[type=\"checkbox\"]', function(){
            \$(this).closest(\"form\").submit();
        });
    </script>
{% endblock %}", "course/form.html.twig", "/Applications/MAMP/htdocs/my_symfony_projekt/app/Resources/views/course/form.html.twig");
    }
}
