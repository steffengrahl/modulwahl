<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_effb55ba8cd0dd4a570bf14a03b0c1c4143a020fc5831d6435918a6fb68581c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effb55ba8cd0dd4a570bf14a03b0c1c4143a020fc5831d6435918a6fb68581c5->enter($__internal_effb55ba8cd0dd4a570bf14a03b0c1c4143a020fc5831d6435918a6fb68581c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fffcc801b739895b19d6aa1bde01d78056f3e794bd926dfa07a69e3a65856a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffcc801b739895b19d6aa1bde01d78056f3e794bd926dfa07a69e3a65856a0d->enter($__internal_fffcc801b739895b19d6aa1bde01d78056f3e794bd926dfa07a69e3a65856a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <header class=\"page-header\">
        <h1 class=\"page-title\">
            <a href=\"\" class=\"home\">Modulwahl</a>
        </h1>
    </header>
    <main class=\"page-content\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    </main>
    <footer class=\"page-footer\">
        <p>
            Made with <span class=\"heart\"><3</span> by <a href=\"https://w01e6742rahl.de\">Steffen Grahl</a>
        </p>
    </footer>
</body>
</html>";
        
        $__internal_effb55ba8cd0dd4a570bf14a03b0c1c4143a020fc5831d6435918a6fb68581c5->leave($__internal_effb55ba8cd0dd4a570bf14a03b0c1c4143a020fc5831d6435918a6fb68581c5_prof);

        
        $__internal_fffcc801b739895b19d6aa1bde01d78056f3e794bd926dfa07a69e3a65856a0d->leave($__internal_fffcc801b739895b19d6aa1bde01d78056f3e794bd926dfa07a69e3a65856a0d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1368a0e1cbb838a7c21e4da40f1f3fbfe443efbb0bbd1b7ad079fee7dabf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1368a0e1cbb838a7c21e4da40f1f3fbfe443efbb0bbd1b7ad079fee7dabf3d->enter($__internal_6b1368a0e1cbb838a7c21e4da40f1f3fbfe443efbb0bbd1b7ad079fee7dabf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10ad2afb5e5e9289f541120355efce63a0d996f37575cbde18e7e3c02584cbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad2afb5e5e9289f541120355efce63a0d996f37575cbde18e7e3c02584cbb3->enter($__internal_10ad2afb5e5e9289f541120355efce63a0d996f37575cbde18e7e3c02584cbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HSEL >> Medieninformatik >> Modulwahl";
        
        $__internal_10ad2afb5e5e9289f541120355efce63a0d996f37575cbde18e7e3c02584cbb3->leave($__internal_10ad2afb5e5e9289f541120355efce63a0d996f37575cbde18e7e3c02584cbb3_prof);

        
        $__internal_6b1368a0e1cbb838a7c21e4da40f1f3fbfe443efbb0bbd1b7ad079fee7dabf3d->leave($__internal_6b1368a0e1cbb838a7c21e4da40f1f3fbfe443efbb0bbd1b7ad079fee7dabf3d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb561c59a27b1d83fbfe4cb0038d224afdf025ee8140234ba3fef3d88556ec8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb561c59a27b1d83fbfe4cb0038d224afdf025ee8140234ba3fef3d88556ec8e->enter($__internal_fb561c59a27b1d83fbfe4cb0038d224afdf025ee8140234ba3fef3d88556ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d25a224a948cf636d6900e4429b6ed143ea7050657ebd0e83ca7b094b6ddf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d25a224a948cf636d6900e4429b6ed143ea7050657ebd0e83ca7b094b6ddf4e->enter($__internal_4d25a224a948cf636d6900e4429b6ed143ea7050657ebd0e83ca7b094b6ddf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_4d25a224a948cf636d6900e4429b6ed143ea7050657ebd0e83ca7b094b6ddf4e->leave($__internal_4d25a224a948cf636d6900e4429b6ed143ea7050657ebd0e83ca7b094b6ddf4e_prof);

        
        $__internal_fb561c59a27b1d83fbfe4cb0038d224afdf025ee8140234ba3fef3d88556ec8e->leave($__internal_fb561c59a27b1d83fbfe4cb0038d224afdf025ee8140234ba3fef3d88556ec8e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5214590cb7f3a82758542d97d2ca88274a1b06f71b977cfca26c5f5b11b6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5214590cb7f3a82758542d97d2ca88274a1b06f71b977cfca26c5f5b11b6ca->enter($__internal_5c5214590cb7f3a82758542d97d2ca88274a1b06f71b977cfca26c5f5b11b6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef94b11d463f4bdd31784e753b9428a3ad97f6efb180e62a4f900f4135d8c23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef94b11d463f4bdd31784e753b9428a3ad97f6efb180e62a4f900f4135d8c23a->enter($__internal_ef94b11d463f4bdd31784e753b9428a3ad97f6efb180e62a4f900f4135d8c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef94b11d463f4bdd31784e753b9428a3ad97f6efb180e62a4f900f4135d8c23a->leave($__internal_ef94b11d463f4bdd31784e753b9428a3ad97f6efb180e62a4f900f4135d8c23a_prof);

        
        $__internal_5c5214590cb7f3a82758542d97d2ca88274a1b06f71b977cfca26c5f5b11b6ca->leave($__internal_5c5214590cb7f3a82758542d97d2ca88274a1b06f71b977cfca26c5f5b11b6ca_prof);

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
        return array (  113 => 19,  100 => 8,  91 => 7,  73 => 6,  56 => 20,  54 => 19,  41 => 10,  39 => 7,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>{% block title %}HSEL >> Medieninformatik >> Modulwahl{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    <header class=\"page-header\">
        <h1 class=\"page-title\">
            <a href=\"\" class=\"home\">Modulwahl</a>
        </h1>
    </header>
    <main class=\"page-content\">
        {% block body %}{% endblock %}
    </main>
    <footer class=\"page-footer\">
        <p>
            Made with <span class=\"heart\"><3</span> by <a href=\"https://w01e6742rahl.de\">Steffen Grahl</a>
        </p>
    </footer>
</body>
</html>", "base.html.twig", "/Applications/MAMP/htdocs/my_symfony_projekt/app/Resources/views/base.html.twig");
    }
}
