<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_52821a30ec7a3d20749aae68e51c5bf9ccc703f629ebdb4a5ef740810fd24fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_193efdf6edb9839243588d229e4530ce39f2c44b53258ac74b155dded70ebe83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193efdf6edb9839243588d229e4530ce39f2c44b53258ac74b155dded70ebe83->enter($__internal_193efdf6edb9839243588d229e4530ce39f2c44b53258ac74b155dded70ebe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_24c5e32298e2e82f905d4872f52a0a39980b90501e316eed0dd59a792a0706e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c5e32298e2e82f905d4872f52a0a39980b90501e316eed0dd59a792a0706e6->enter($__internal_24c5e32298e2e82f905d4872f52a0a39980b90501e316eed0dd59a792a0706e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193efdf6edb9839243588d229e4530ce39f2c44b53258ac74b155dded70ebe83->leave($__internal_193efdf6edb9839243588d229e4530ce39f2c44b53258ac74b155dded70ebe83_prof);

        
        $__internal_24c5e32298e2e82f905d4872f52a0a39980b90501e316eed0dd59a792a0706e6->leave($__internal_24c5e32298e2e82f905d4872f52a0a39980b90501e316eed0dd59a792a0706e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd79b99f6e189603e6d3a241b4980ef0f513518eb1052b25b0d1ce30ae877a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd79b99f6e189603e6d3a241b4980ef0f513518eb1052b25b0d1ce30ae877a1b->enter($__internal_cd79b99f6e189603e6d3a241b4980ef0f513518eb1052b25b0d1ce30ae877a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc86d56dd5a2ecd4cba34c97a8b9a180cb21d1706a741a3ed20607907c5eef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc86d56dd5a2ecd4cba34c97a8b9a180cb21d1706a741a3ed20607907c5eef37->enter($__internal_fc86d56dd5a2ecd4cba34c97a8b9a180cb21d1706a741a3ed20607907c5eef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fc86d56dd5a2ecd4cba34c97a8b9a180cb21d1706a741a3ed20607907c5eef37->leave($__internal_fc86d56dd5a2ecd4cba34c97a8b9a180cb21d1706a741a3ed20607907c5eef37_prof);

        
        $__internal_cd79b99f6e189603e6d3a241b4980ef0f513518eb1052b25b0d1ce30ae877a1b->leave($__internal_cd79b99f6e189603e6d3a241b4980ef0f513518eb1052b25b0d1ce30ae877a1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\WebProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
