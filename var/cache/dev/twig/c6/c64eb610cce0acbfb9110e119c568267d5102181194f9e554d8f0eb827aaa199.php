<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0e31c3554ced5b17787e0390ccdeb62a7992744828a1c42ffcd1db47770de6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e31c3554ced5b17787e0390ccdeb62a7992744828a1c42ffcd1db47770de6d6->enter($__internal_0e31c3554ced5b17787e0390ccdeb62a7992744828a1c42ffcd1db47770de6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_57a54fb15f3f1671cc1e3decedb160b4a014fa261d401d22b98ca6b994e9b7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a54fb15f3f1671cc1e3decedb160b4a014fa261d401d22b98ca6b994e9b7a0->enter($__internal_57a54fb15f3f1671cc1e3decedb160b4a014fa261d401d22b98ca6b994e9b7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e31c3554ced5b17787e0390ccdeb62a7992744828a1c42ffcd1db47770de6d6->leave($__internal_0e31c3554ced5b17787e0390ccdeb62a7992744828a1c42ffcd1db47770de6d6_prof);

        
        $__internal_57a54fb15f3f1671cc1e3decedb160b4a014fa261d401d22b98ca6b994e9b7a0->leave($__internal_57a54fb15f3f1671cc1e3decedb160b4a014fa261d401d22b98ca6b994e9b7a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87ca5d17a1a8cb53cf2edbf6a76536caa2074da4c7bc2ffed62df73bc7024196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ca5d17a1a8cb53cf2edbf6a76536caa2074da4c7bc2ffed62df73bc7024196->enter($__internal_87ca5d17a1a8cb53cf2edbf6a76536caa2074da4c7bc2ffed62df73bc7024196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0cc3254a219c45f14ca0b256f6f88d40d06ddead383dc8a6f0bf29e1b69166ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc3254a219c45f14ca0b256f6f88d40d06ddead383dc8a6f0bf29e1b69166ac->enter($__internal_0cc3254a219c45f14ca0b256f6f88d40d06ddead383dc8a6f0bf29e1b69166ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0cc3254a219c45f14ca0b256f6f88d40d06ddead383dc8a6f0bf29e1b69166ac->leave($__internal_0cc3254a219c45f14ca0b256f6f88d40d06ddead383dc8a6f0bf29e1b69166ac_prof);

        
        $__internal_87ca5d17a1a8cb53cf2edbf6a76536caa2074da4c7bc2ffed62df73bc7024196->leave($__internal_87ca5d17a1a8cb53cf2edbf6a76536caa2074da4c7bc2ffed62df73bc7024196_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_219aec6b4115493da0fffcb2d2505240a693de5b1ac6d0eb3664d133f482f9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219aec6b4115493da0fffcb2d2505240a693de5b1ac6d0eb3664d133f482f9b8->enter($__internal_219aec6b4115493da0fffcb2d2505240a693de5b1ac6d0eb3664d133f482f9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_551c8e5220a5d6d7c22aebba3ff1512f33d2895a43c955dd04bcb641e0e9d0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551c8e5220a5d6d7c22aebba3ff1512f33d2895a43c955dd04bcb641e0e9d0fc->enter($__internal_551c8e5220a5d6d7c22aebba3ff1512f33d2895a43c955dd04bcb641e0e9d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_551c8e5220a5d6d7c22aebba3ff1512f33d2895a43c955dd04bcb641e0e9d0fc->leave($__internal_551c8e5220a5d6d7c22aebba3ff1512f33d2895a43c955dd04bcb641e0e9d0fc_prof);

        
        $__internal_219aec6b4115493da0fffcb2d2505240a693de5b1ac6d0eb3664d133f482f9b8->leave($__internal_219aec6b4115493da0fffcb2d2505240a693de5b1ac6d0eb3664d133f482f9b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d70eadfe555c4ac375de4583685aea6b73c6af2dda8461482cab95004b57ad16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70eadfe555c4ac375de4583685aea6b73c6af2dda8461482cab95004b57ad16->enter($__internal_d70eadfe555c4ac375de4583685aea6b73c6af2dda8461482cab95004b57ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11e5c65432b72f9280ac74956afd07e97c4bf172ab06895a41bf2c7fde5044ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e5c65432b72f9280ac74956afd07e97c4bf172ab06895a41bf2c7fde5044ea->enter($__internal_11e5c65432b72f9280ac74956afd07e97c4bf172ab06895a41bf2c7fde5044ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_11e5c65432b72f9280ac74956afd07e97c4bf172ab06895a41bf2c7fde5044ea->leave($__internal_11e5c65432b72f9280ac74956afd07e97c4bf172ab06895a41bf2c7fde5044ea_prof);

        
        $__internal_d70eadfe555c4ac375de4583685aea6b73c6af2dda8461482cab95004b57ad16->leave($__internal_d70eadfe555c4ac375de4583685aea6b73c6af2dda8461482cab95004b57ad16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/my_symfony_projekt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
