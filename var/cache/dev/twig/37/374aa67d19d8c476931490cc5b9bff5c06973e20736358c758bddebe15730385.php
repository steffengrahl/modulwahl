<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_236cb270e92a6606f015f5802d4777db7340b52e60990727a502a905ea5aebb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236cb270e92a6606f015f5802d4777db7340b52e60990727a502a905ea5aebb0->enter($__internal_236cb270e92a6606f015f5802d4777db7340b52e60990727a502a905ea5aebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6e9fb282b9e4c9a78d30375574d1391051fa150898f76fb7e54986e74e957eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9fb282b9e4c9a78d30375574d1391051fa150898f76fb7e54986e74e957eae->enter($__internal_6e9fb282b9e4c9a78d30375574d1391051fa150898f76fb7e54986e74e957eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236cb270e92a6606f015f5802d4777db7340b52e60990727a502a905ea5aebb0->leave($__internal_236cb270e92a6606f015f5802d4777db7340b52e60990727a502a905ea5aebb0_prof);

        
        $__internal_6e9fb282b9e4c9a78d30375574d1391051fa150898f76fb7e54986e74e957eae->leave($__internal_6e9fb282b9e4c9a78d30375574d1391051fa150898f76fb7e54986e74e957eae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c1bbdea263b42dd0182a01e30dc5aa43b349f296766c8dd43fe1d508b523cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1bbdea263b42dd0182a01e30dc5aa43b349f296766c8dd43fe1d508b523cee->enter($__internal_7c1bbdea263b42dd0182a01e30dc5aa43b349f296766c8dd43fe1d508b523cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_038756d5ab8f3c613b1304ffad1ef75824d1c10b595bba20951c622aac51d05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038756d5ab8f3c613b1304ffad1ef75824d1c10b595bba20951c622aac51d05f->enter($__internal_038756d5ab8f3c613b1304ffad1ef75824d1c10b595bba20951c622aac51d05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_038756d5ab8f3c613b1304ffad1ef75824d1c10b595bba20951c622aac51d05f->leave($__internal_038756d5ab8f3c613b1304ffad1ef75824d1c10b595bba20951c622aac51d05f_prof);

        
        $__internal_7c1bbdea263b42dd0182a01e30dc5aa43b349f296766c8dd43fe1d508b523cee->leave($__internal_7c1bbdea263b42dd0182a01e30dc5aa43b349f296766c8dd43fe1d508b523cee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7564806bce11e586d62a86b04fa2835dca60f3423fa99382d15d4a661b3ab8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7564806bce11e586d62a86b04fa2835dca60f3423fa99382d15d4a661b3ab8b9->enter($__internal_7564806bce11e586d62a86b04fa2835dca60f3423fa99382d15d4a661b3ab8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e177407c126ec2e44604bf5377c54fd77512c431c89c2248f561e7fb44dd75b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e177407c126ec2e44604bf5377c54fd77512c431c89c2248f561e7fb44dd75b3->enter($__internal_e177407c126ec2e44604bf5377c54fd77512c431c89c2248f561e7fb44dd75b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e177407c126ec2e44604bf5377c54fd77512c431c89c2248f561e7fb44dd75b3->leave($__internal_e177407c126ec2e44604bf5377c54fd77512c431c89c2248f561e7fb44dd75b3_prof);

        
        $__internal_7564806bce11e586d62a86b04fa2835dca60f3423fa99382d15d4a661b3ab8b9->leave($__internal_7564806bce11e586d62a86b04fa2835dca60f3423fa99382d15d4a661b3ab8b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bb0e38d5b7b75db9682cc2ff2e90d5e9f12b4dda2796262d1eef9db7eb244fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb0e38d5b7b75db9682cc2ff2e90d5e9f12b4dda2796262d1eef9db7eb244fb->enter($__internal_6bb0e38d5b7b75db9682cc2ff2e90d5e9f12b4dda2796262d1eef9db7eb244fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d3e24e104e561ea4505115165d2f73d88d1113f485c968ab5e58d34461ceb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3e24e104e561ea4505115165d2f73d88d1113f485c968ab5e58d34461ceb4e->enter($__internal_8d3e24e104e561ea4505115165d2f73d88d1113f485c968ab5e58d34461ceb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d3e24e104e561ea4505115165d2f73d88d1113f485c968ab5e58d34461ceb4e->leave($__internal_8d3e24e104e561ea4505115165d2f73d88d1113f485c968ab5e58d34461ceb4e_prof);

        
        $__internal_6bb0e38d5b7b75db9682cc2ff2e90d5e9f12b4dda2796262d1eef9db7eb244fb->leave($__internal_6bb0e38d5b7b75db9682cc2ff2e90d5e9f12b4dda2796262d1eef9db7eb244fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/my_symfony_projekt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
