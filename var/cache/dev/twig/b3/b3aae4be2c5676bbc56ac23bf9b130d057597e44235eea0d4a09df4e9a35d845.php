<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2b0fba9af6cb7a6113d006aee4af7f1a22e6dc60f9bc7a2a141a1e37e30cdfc4 extends Twig_Template
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
        $__internal_f7ecd6f50ccb5fb411ddb731c9112279d57b25a28c6c934c1d0427a5fe6ff700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ecd6f50ccb5fb411ddb731c9112279d57b25a28c6c934c1d0427a5fe6ff700->enter($__internal_f7ecd6f50ccb5fb411ddb731c9112279d57b25a28c6c934c1d0427a5fe6ff700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_15726a0a8d6d834f54633ec990f4a932a663f6d2c9a94ed8223e87784e821864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15726a0a8d6d834f54633ec990f4a932a663f6d2c9a94ed8223e87784e821864->enter($__internal_15726a0a8d6d834f54633ec990f4a932a663f6d2c9a94ed8223e87784e821864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ecd6f50ccb5fb411ddb731c9112279d57b25a28c6c934c1d0427a5fe6ff700->leave($__internal_f7ecd6f50ccb5fb411ddb731c9112279d57b25a28c6c934c1d0427a5fe6ff700_prof);

        
        $__internal_15726a0a8d6d834f54633ec990f4a932a663f6d2c9a94ed8223e87784e821864->leave($__internal_15726a0a8d6d834f54633ec990f4a932a663f6d2c9a94ed8223e87784e821864_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7d8e83afa1a1e69b28fa906014e08f56f8e4426ddd57b59cad053d20dcba2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d8e83afa1a1e69b28fa906014e08f56f8e4426ddd57b59cad053d20dcba2b5->enter($__internal_f7d8e83afa1a1e69b28fa906014e08f56f8e4426ddd57b59cad053d20dcba2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8137cbd8f25991e9968781546ef3014025f9d8941935de457e0bfd57ef17900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8137cbd8f25991e9968781546ef3014025f9d8941935de457e0bfd57ef17900a->enter($__internal_8137cbd8f25991e9968781546ef3014025f9d8941935de457e0bfd57ef17900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8137cbd8f25991e9968781546ef3014025f9d8941935de457e0bfd57ef17900a->leave($__internal_8137cbd8f25991e9968781546ef3014025f9d8941935de457e0bfd57ef17900a_prof);

        
        $__internal_f7d8e83afa1a1e69b28fa906014e08f56f8e4426ddd57b59cad053d20dcba2b5->leave($__internal_f7d8e83afa1a1e69b28fa906014e08f56f8e4426ddd57b59cad053d20dcba2b5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f95f48e43928f4cec79ca68e52e2b6b2c95712d35ac5b35f43e0a021e06b7079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95f48e43928f4cec79ca68e52e2b6b2c95712d35ac5b35f43e0a021e06b7079->enter($__internal_f95f48e43928f4cec79ca68e52e2b6b2c95712d35ac5b35f43e0a021e06b7079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4eae9299cc421c29cde0ff1b6e0e37093df90a3b09730aa4b21c5cc2f30866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eae9299cc421c29cde0ff1b6e0e37093df90a3b09730aa4b21c5cc2f30866a->enter($__internal_d4eae9299cc421c29cde0ff1b6e0e37093df90a3b09730aa4b21c5cc2f30866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d4eae9299cc421c29cde0ff1b6e0e37093df90a3b09730aa4b21c5cc2f30866a->leave($__internal_d4eae9299cc421c29cde0ff1b6e0e37093df90a3b09730aa4b21c5cc2f30866a_prof);

        
        $__internal_f95f48e43928f4cec79ca68e52e2b6b2c95712d35ac5b35f43e0a021e06b7079->leave($__internal_f95f48e43928f4cec79ca68e52e2b6b2c95712d35ac5b35f43e0a021e06b7079_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5b50ecc5b826cbcf73506c8ab237ffceba888e112bbdf6804f94d0e004e6d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b50ecc5b826cbcf73506c8ab237ffceba888e112bbdf6804f94d0e004e6d76->enter($__internal_e5b50ecc5b826cbcf73506c8ab237ffceba888e112bbdf6804f94d0e004e6d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e41537ecbc04fe432975537d25d3295f503eb0a2bf32f958165834f2f651ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e41537ecbc04fe432975537d25d3295f503eb0a2bf32f958165834f2f651ffc->enter($__internal_8e41537ecbc04fe432975537d25d3295f503eb0a2bf32f958165834f2f651ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8e41537ecbc04fe432975537d25d3295f503eb0a2bf32f958165834f2f651ffc->leave($__internal_8e41537ecbc04fe432975537d25d3295f503eb0a2bf32f958165834f2f651ffc_prof);

        
        $__internal_e5b50ecc5b826cbcf73506c8ab237ffceba888e112bbdf6804f94d0e004e6d76->leave($__internal_e5b50ecc5b826cbcf73506c8ab237ffceba888e112bbdf6804f94d0e004e6d76_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\WebProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
