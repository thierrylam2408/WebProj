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
        $__internal_e83724da28f2a57fe8fe63726bd8de34c519b6a9067dacbd28605c781ee89fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83724da28f2a57fe8fe63726bd8de34c519b6a9067dacbd28605c781ee89fde->enter($__internal_e83724da28f2a57fe8fe63726bd8de34c519b6a9067dacbd28605c781ee89fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f29fa2acaa4eba3d3ab59f3afaef9f68a64f6f742dc4225609ab858fa1749e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29fa2acaa4eba3d3ab59f3afaef9f68a64f6f742dc4225609ab858fa1749e6a->enter($__internal_f29fa2acaa4eba3d3ab59f3afaef9f68a64f6f742dc4225609ab858fa1749e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83724da28f2a57fe8fe63726bd8de34c519b6a9067dacbd28605c781ee89fde->leave($__internal_e83724da28f2a57fe8fe63726bd8de34c519b6a9067dacbd28605c781ee89fde_prof);

        
        $__internal_f29fa2acaa4eba3d3ab59f3afaef9f68a64f6f742dc4225609ab858fa1749e6a->leave($__internal_f29fa2acaa4eba3d3ab59f3afaef9f68a64f6f742dc4225609ab858fa1749e6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec438bb701c640a044a427163e012e3e55c776506c7878f62b9e6986971bd736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec438bb701c640a044a427163e012e3e55c776506c7878f62b9e6986971bd736->enter($__internal_ec438bb701c640a044a427163e012e3e55c776506c7878f62b9e6986971bd736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97bdad761012ba79cebf2c39b92afacb2bf65bff30df9efd86faffdf911d720c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bdad761012ba79cebf2c39b92afacb2bf65bff30df9efd86faffdf911d720c->enter($__internal_97bdad761012ba79cebf2c39b92afacb2bf65bff30df9efd86faffdf911d720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97bdad761012ba79cebf2c39b92afacb2bf65bff30df9efd86faffdf911d720c->leave($__internal_97bdad761012ba79cebf2c39b92afacb2bf65bff30df9efd86faffdf911d720c_prof);

        
        $__internal_ec438bb701c640a044a427163e012e3e55c776506c7878f62b9e6986971bd736->leave($__internal_ec438bb701c640a044a427163e012e3e55c776506c7878f62b9e6986971bd736_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb85b6e6985fd048a3839751aacfbcb3a3b146f3292c19ef1d890ff9ab5be6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb85b6e6985fd048a3839751aacfbcb3a3b146f3292c19ef1d890ff9ab5be6b7->enter($__internal_bb85b6e6985fd048a3839751aacfbcb3a3b146f3292c19ef1d890ff9ab5be6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02df97d9c3406e8939decd47aa8893bed6060138e8e60435f749785d922e5d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02df97d9c3406e8939decd47aa8893bed6060138e8e60435f749785d922e5d37->enter($__internal_02df97d9c3406e8939decd47aa8893bed6060138e8e60435f749785d922e5d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02df97d9c3406e8939decd47aa8893bed6060138e8e60435f749785d922e5d37->leave($__internal_02df97d9c3406e8939decd47aa8893bed6060138e8e60435f749785d922e5d37_prof);

        
        $__internal_bb85b6e6985fd048a3839751aacfbcb3a3b146f3292c19ef1d890ff9ab5be6b7->leave($__internal_bb85b6e6985fd048a3839751aacfbcb3a3b146f3292c19ef1d890ff9ab5be6b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6a5d461f0d778dbfe5f8f770b6efa2d0cefcb08ba7bb28288b7f89c962fee90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a5d461f0d778dbfe5f8f770b6efa2d0cefcb08ba7bb28288b7f89c962fee90->enter($__internal_b6a5d461f0d778dbfe5f8f770b6efa2d0cefcb08ba7bb28288b7f89c962fee90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9765743660dfaa5ae90a9f23324ef8c548f413fb7d628ab665468ffb5ead5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9765743660dfaa5ae90a9f23324ef8c548f413fb7d628ab665468ffb5ead5cd->enter($__internal_a9765743660dfaa5ae90a9f23324ef8c548f413fb7d628ab665468ffb5ead5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9765743660dfaa5ae90a9f23324ef8c548f413fb7d628ab665468ffb5ead5cd->leave($__internal_a9765743660dfaa5ae90a9f23324ef8c548f413fb7d628ab665468ffb5ead5cd_prof);

        
        $__internal_b6a5d461f0d778dbfe5f8f770b6efa2d0cefcb08ba7bb28288b7f89c962fee90->leave($__internal_b6a5d461f0d778dbfe5f8f770b6efa2d0cefcb08ba7bb28288b7f89c962fee90_prof);

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
