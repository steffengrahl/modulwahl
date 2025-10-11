<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53641507b241d3136a6a41876e1e656f34dc7d9828e36f7ed8c7233970529ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53641507b241d3136a6a41876e1e656f34dc7d9828e36f7ed8c7233970529ebb->enter($__internal_53641507b241d3136a6a41876e1e656f34dc7d9828e36f7ed8c7233970529ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_52aa1b4c20cedf8966114b6c18cdaf008ca26f8b88676b4efc69ffbaf0d3cfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aa1b4c20cedf8966114b6c18cdaf008ca26f8b88676b4efc69ffbaf0d3cfb0->enter($__internal_52aa1b4c20cedf8966114b6c18cdaf008ca26f8b88676b4efc69ffbaf0d3cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_53641507b241d3136a6a41876e1e656f34dc7d9828e36f7ed8c7233970529ebb->leave($__internal_53641507b241d3136a6a41876e1e656f34dc7d9828e36f7ed8c7233970529ebb_prof);

        
        $__internal_52aa1b4c20cedf8966114b6c18cdaf008ca26f8b88676b4efc69ffbaf0d3cfb0->leave($__internal_52aa1b4c20cedf8966114b6c18cdaf008ca26f8b88676b4efc69ffbaf0d3cfb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63038d271cdfa65c1603e2cd3ad54927a63246fb7464f99e85439ac69f1a8e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63038d271cdfa65c1603e2cd3ad54927a63246fb7464f99e85439ac69f1a8e79->enter($__internal_63038d271cdfa65c1603e2cd3ad54927a63246fb7464f99e85439ac69f1a8e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51889dd9b08542e29991db333f9659243f2d5e84a95eef4fc1c0849206572258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51889dd9b08542e29991db333f9659243f2d5e84a95eef4fc1c0849206572258->enter($__internal_51889dd9b08542e29991db333f9659243f2d5e84a95eef4fc1c0849206572258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_51889dd9b08542e29991db333f9659243f2d5e84a95eef4fc1c0849206572258->leave($__internal_51889dd9b08542e29991db333f9659243f2d5e84a95eef4fc1c0849206572258_prof);

        
        $__internal_63038d271cdfa65c1603e2cd3ad54927a63246fb7464f99e85439ac69f1a8e79->leave($__internal_63038d271cdfa65c1603e2cd3ad54927a63246fb7464f99e85439ac69f1a8e79_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c8bc9ac11c65f1943c2da039ec290cee0ade552757cc72a6ccdb65961aee6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8bc9ac11c65f1943c2da039ec290cee0ade552757cc72a6ccdb65961aee6ac->enter($__internal_6c8bc9ac11c65f1943c2da039ec290cee0ade552757cc72a6ccdb65961aee6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4198f41d4bc935c93d65529e9daf82db6a962fdba910870083412fd26056950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4198f41d4bc935c93d65529e9daf82db6a962fdba910870083412fd26056950->enter($__internal_a4198f41d4bc935c93d65529e9daf82db6a962fdba910870083412fd26056950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a4198f41d4bc935c93d65529e9daf82db6a962fdba910870083412fd26056950->leave($__internal_a4198f41d4bc935c93d65529e9daf82db6a962fdba910870083412fd26056950_prof);

        
        $__internal_6c8bc9ac11c65f1943c2da039ec290cee0ade552757cc72a6ccdb65961aee6ac->leave($__internal_6c8bc9ac11c65f1943c2da039ec290cee0ade552757cc72a6ccdb65961aee6ac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fda5969d242b6c1844e63e256f1abfdb2f71b07d35a3c9d22c7339b53d3b854a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda5969d242b6c1844e63e256f1abfdb2f71b07d35a3c9d22c7339b53d3b854a->enter($__internal_fda5969d242b6c1844e63e256f1abfdb2f71b07d35a3c9d22c7339b53d3b854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_101215f9deab0357ae79c8b0a498a9563fd291eee90f7a3cc341eed8bfaa58d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101215f9deab0357ae79c8b0a498a9563fd291eee90f7a3cc341eed8bfaa58d3->enter($__internal_101215f9deab0357ae79c8b0a498a9563fd291eee90f7a3cc341eed8bfaa58d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_101215f9deab0357ae79c8b0a498a9563fd291eee90f7a3cc341eed8bfaa58d3->leave($__internal_101215f9deab0357ae79c8b0a498a9563fd291eee90f7a3cc341eed8bfaa58d3_prof);

        
        $__internal_fda5969d242b6c1844e63e256f1abfdb2f71b07d35a3c9d22c7339b53d3b854a->leave($__internal_fda5969d242b6c1844e63e256f1abfdb2f71b07d35a3c9d22c7339b53d3b854a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/my_symfony_projekt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
