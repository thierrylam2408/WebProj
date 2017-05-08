<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f2be85d8fbdce1642edd9acd0c61b9eab5e658c007c332529d19052e7bab1bc extends Twig_Template
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
        $__internal_8a051ac659295b0bbdc1d0a50c89e3eb6e3e8fb52981ab36002d063849be6294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a051ac659295b0bbdc1d0a50c89e3eb6e3e8fb52981ab36002d063849be6294->enter($__internal_8a051ac659295b0bbdc1d0a50c89e3eb6e3e8fb52981ab36002d063849be6294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_97f83350c04e32f721e6d1b6e79966da6d5790dea01448121cb32a9d2ab30f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f83350c04e32f721e6d1b6e79966da6d5790dea01448121cb32a9d2ab30f62->enter($__internal_97f83350c04e32f721e6d1b6e79966da6d5790dea01448121cb32a9d2ab30f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a051ac659295b0bbdc1d0a50c89e3eb6e3e8fb52981ab36002d063849be6294->leave($__internal_8a051ac659295b0bbdc1d0a50c89e3eb6e3e8fb52981ab36002d063849be6294_prof);

        
        $__internal_97f83350c04e32f721e6d1b6e79966da6d5790dea01448121cb32a9d2ab30f62->leave($__internal_97f83350c04e32f721e6d1b6e79966da6d5790dea01448121cb32a9d2ab30f62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7726b51986634788ebd338ee71206ad7ab8044afb85d25926fc6e66d07c15ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7726b51986634788ebd338ee71206ad7ab8044afb85d25926fc6e66d07c15ac7->enter($__internal_7726b51986634788ebd338ee71206ad7ab8044afb85d25926fc6e66d07c15ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df44e560e90e7ece3e7aac90173770b766e19f6d597e9431460cbba2a52d7ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df44e560e90e7ece3e7aac90173770b766e19f6d597e9431460cbba2a52d7ad0->enter($__internal_df44e560e90e7ece3e7aac90173770b766e19f6d597e9431460cbba2a52d7ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df44e560e90e7ece3e7aac90173770b766e19f6d597e9431460cbba2a52d7ad0->leave($__internal_df44e560e90e7ece3e7aac90173770b766e19f6d597e9431460cbba2a52d7ad0_prof);

        
        $__internal_7726b51986634788ebd338ee71206ad7ab8044afb85d25926fc6e66d07c15ac7->leave($__internal_7726b51986634788ebd338ee71206ad7ab8044afb85d25926fc6e66d07c15ac7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63b92119ef2de932f7eedec2a1a4c4fe6553d141b629a5d1024459074e0c30e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b92119ef2de932f7eedec2a1a4c4fe6553d141b629a5d1024459074e0c30e8->enter($__internal_63b92119ef2de932f7eedec2a1a4c4fe6553d141b629a5d1024459074e0c30e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46b51d694b9b62adf8816ef372ba7f7fbf888510441d5265d0b12ac60d1d1112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b51d694b9b62adf8816ef372ba7f7fbf888510441d5265d0b12ac60d1d1112->enter($__internal_46b51d694b9b62adf8816ef372ba7f7fbf888510441d5265d0b12ac60d1d1112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46b51d694b9b62adf8816ef372ba7f7fbf888510441d5265d0b12ac60d1d1112->leave($__internal_46b51d694b9b62adf8816ef372ba7f7fbf888510441d5265d0b12ac60d1d1112_prof);

        
        $__internal_63b92119ef2de932f7eedec2a1a4c4fe6553d141b629a5d1024459074e0c30e8->leave($__internal_63b92119ef2de932f7eedec2a1a4c4fe6553d141b629a5d1024459074e0c30e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b959d999bc3b80910a7161d9621e31457a1c1e153b17764d9fbf096a9c691c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b959d999bc3b80910a7161d9621e31457a1c1e153b17764d9fbf096a9c691c34->enter($__internal_b959d999bc3b80910a7161d9621e31457a1c1e153b17764d9fbf096a9c691c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b8e2a23c6e6e6b2bbcbbc1ae308a814a48e5997e9780974d724ca9a953a0a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8e2a23c6e6e6b2bbcbbc1ae308a814a48e5997e9780974d724ca9a953a0a70->enter($__internal_5b8e2a23c6e6e6b2bbcbbc1ae308a814a48e5997e9780974d724ca9a953a0a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b8e2a23c6e6e6b2bbcbbc1ae308a814a48e5997e9780974d724ca9a953a0a70->leave($__internal_5b8e2a23c6e6e6b2bbcbbc1ae308a814a48e5997e9780974d724ca9a953a0a70_prof);

        
        $__internal_b959d999bc3b80910a7161d9621e31457a1c1e153b17764d9fbf096a9c691c34->leave($__internal_b959d999bc3b80910a7161d9621e31457a1c1e153b17764d9fbf096a9c691c34_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\WebProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
