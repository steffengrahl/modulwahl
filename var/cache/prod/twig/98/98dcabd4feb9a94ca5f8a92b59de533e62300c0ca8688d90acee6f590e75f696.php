<?php

/* base.html.twig */
class __TwigTemplate_bd4eb6701e1f6b3016a1c675724132684496c5bf3e97cd8eacc5462004847ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0>
    <!--[if lt IE 9]>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <![endif]-->
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <header class=\"page-header\">
        <div class=\"page-title-wrapper\">
            <h1 class=\"page-title\">
                <a href=\"\" class=\"home\">Modulwahl</a>
            </h1>
            <h2 class=\"page-subtitle\">
                ";
        // line 22
        echo twig_escape_filter($this->env, ($context["page_subtitle"] ?? null), "html", null, true);
        echo "
            </h2>
        </div>
    </header>
    <main class=\"page-content\">
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    </main>
    <footer class=\"page-footer\">
        <p>
            Made with <span class=\"heart\"><3</span> by <a href=\"https://steffengrahl.de\">Steffen Grahl</a>
        </p>
    </footer>
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "HSEL >> Medieninformatik >> Modulwahl";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  81 => 11,  78 => 10,  72 => 9,  61 => 28,  59 => 27,  51 => 22,  38 => 13,  36 => 10,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/www/htdocs/w01e6742/hsel/modulwahl/app/Resources/views/base.html.twig");
    }
}
