<?php

/* course/form.html.twig */
class __TwigTemplate_86ced1d9f7d55c0df80100182552fc9f48b5f30f3603e9459b55de297c508fe2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <form method=\"post\" action=\"\" id=\"courseform\">
            <div class=\"course-wrapper\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 8
            echo "                <div class=\"course-button";
            if ((0 == $this->getAttribute($context["course"], "assignable", array()))) {
                echo " course-notassignable";
            }
            echo "\">
                    <input
                            type=\"checkbox\"
                            name=\"course[]\"
                            value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            class=\"out-of-sight\"
                            id=\"course_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            ";
            // line 15
            if (($this->getAttribute($context["course"], "selected", array()) == 1)) {
                echo " checked";
            }
            // line 16
            echo "                    >
                    <label
                            for=\"course_";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\"
                            class=\"course-label";
            // line 19
            if ((0 == $this->getAttribute($context["course"], "wpf", array()))) {
                echo " course-wpf";
            }
            echo "\"
                    >
                        <span class=\"course-name\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "</span>
                        <span class=\"course-semester\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "semester", array()), "html", null, true);
            echo "</span>
                    </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
            <aside class=\"settings\">
                <div class=\"settings-box\">
                    <h3 class=\"settings-box-title\">Legende</h3>
                    <ul class=\"legend\">
                        <li class=\"legend-item\">
                            <span class=\"legend-color legend-color-white\">&nbsp;</span>
                            <span class=\"legend-label\">Pflichtmodul</span>
                        </li>
                        <li class=\"legend-item\">
                            <span class=\"legend-color legend-color-white course-notassignable\">&nbsp;</span>
                            <span class=\"legend-label\">nicht dieses Semester<!-- angeboten --></span>
                        </li>
                        <li class=\"legend-item\">
                            <span class=\"legend-color legend-color-grey\">&nbsp;</span>
                            <span class=\"legend-label\">Wahlpflichtmodul</span>
                        </li>
                        <li class=\"legend-item\">
                            <span class=\"legend-color legend-color-teal\">&nbsp;</span>
                            <span class=\"legend-label\">Modul bestanden</span>
                        </li>
                    </ul>
                </div>
            </aside>
        </form>
    </section>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        \$(\"#courseform\").on(\"change\", 'input[type=\"checkbox\"]', function(){
            \$(this).closest(\"form\").submit();
        });
    </script>
";
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
        return array (  92 => 26,  82 => 22,  78 => 21,  71 => 19,  67 => 18,  63 => 16,  59 => 15,  55 => 14,  50 => 12,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/form.html.twig", "/www/htdocs/w01e6742/hsel/modulwahl/app/Resources/views/course/form.html.twig");
    }
}
