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
        $__internal_a3dcbed0302efd2a62707320a6c38bb9b48ea0b7fab130d1a73ed290ae3aa4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dcbed0302efd2a62707320a6c38bb9b48ea0b7fab130d1a73ed290ae3aa4f2->enter($__internal_a3dcbed0302efd2a62707320a6c38bb9b48ea0b7fab130d1a73ed290ae3aa4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e4a120aa6e2174adf376139e349590ec384cb7e2f8f0f307f8b418c93a8715c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a120aa6e2174adf376139e349590ec384cb7e2f8f0f307f8b418c93a8715c8->enter($__internal_e4a120aa6e2174adf376139e349590ec384cb7e2f8f0f307f8b418c93a8715c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3dcbed0302efd2a62707320a6c38bb9b48ea0b7fab130d1a73ed290ae3aa4f2->leave($__internal_a3dcbed0302efd2a62707320a6c38bb9b48ea0b7fab130d1a73ed290ae3aa4f2_prof);

        
        $__internal_e4a120aa6e2174adf376139e349590ec384cb7e2f8f0f307f8b418c93a8715c8->leave($__internal_e4a120aa6e2174adf376139e349590ec384cb7e2f8f0f307f8b418c93a8715c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7265e73b2dbe99c8a13127264d12b1b10081af78daaca54b08e68378d6cbb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7265e73b2dbe99c8a13127264d12b1b10081af78daaca54b08e68378d6cbb62->enter($__internal_d7265e73b2dbe99c8a13127264d12b1b10081af78daaca54b08e68378d6cbb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03c2930351c2219f1eb9c30675252f81debdc9bcb156debbc8ab58658296d4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c2930351c2219f1eb9c30675252f81debdc9bcb156debbc8ab58658296d4eb->enter($__internal_03c2930351c2219f1eb9c30675252f81debdc9bcb156debbc8ab58658296d4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03c2930351c2219f1eb9c30675252f81debdc9bcb156debbc8ab58658296d4eb->leave($__internal_03c2930351c2219f1eb9c30675252f81debdc9bcb156debbc8ab58658296d4eb_prof);

        
        $__internal_d7265e73b2dbe99c8a13127264d12b1b10081af78daaca54b08e68378d6cbb62->leave($__internal_d7265e73b2dbe99c8a13127264d12b1b10081af78daaca54b08e68378d6cbb62_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a821c91ed30a52bd3932ab5aa537cc434a33fbc9d63dd4d6ad0c8a88096f0a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a821c91ed30a52bd3932ab5aa537cc434a33fbc9d63dd4d6ad0c8a88096f0a1e->enter($__internal_a821c91ed30a52bd3932ab5aa537cc434a33fbc9d63dd4d6ad0c8a88096f0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9775dd9bb548b397b5fd6c4dc4111cce4b5c61ae5c17609839288126f46e4b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9775dd9bb548b397b5fd6c4dc4111cce4b5c61ae5c17609839288126f46e4b51->enter($__internal_9775dd9bb548b397b5fd6c4dc4111cce4b5c61ae5c17609839288126f46e4b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9775dd9bb548b397b5fd6c4dc4111cce4b5c61ae5c17609839288126f46e4b51->leave($__internal_9775dd9bb548b397b5fd6c4dc4111cce4b5c61ae5c17609839288126f46e4b51_prof);

        
        $__internal_a821c91ed30a52bd3932ab5aa537cc434a33fbc9d63dd4d6ad0c8a88096f0a1e->leave($__internal_a821c91ed30a52bd3932ab5aa537cc434a33fbc9d63dd4d6ad0c8a88096f0a1e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_502b9b7b40190f02a4e7ae9e0d7c27b795a523cbd1cab47cde06df2543304490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502b9b7b40190f02a4e7ae9e0d7c27b795a523cbd1cab47cde06df2543304490->enter($__internal_502b9b7b40190f02a4e7ae9e0d7c27b795a523cbd1cab47cde06df2543304490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5bfbbb6e38a3b52c6599ae9c5d39028f7049d1032d7792c5d680bc5db786fef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfbbb6e38a3b52c6599ae9c5d39028f7049d1032d7792c5d680bc5db786fef9->enter($__internal_5bfbbb6e38a3b52c6599ae9c5d39028f7049d1032d7792c5d680bc5db786fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5bfbbb6e38a3b52c6599ae9c5d39028f7049d1032d7792c5d680bc5db786fef9->leave($__internal_5bfbbb6e38a3b52c6599ae9c5d39028f7049d1032d7792c5d680bc5db786fef9_prof);

        
        $__internal_502b9b7b40190f02a4e7ae9e0d7c27b795a523cbd1cab47cde06df2543304490->leave($__internal_502b9b7b40190f02a4e7ae9e0d7c27b795a523cbd1cab47cde06df2543304490_prof);

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
