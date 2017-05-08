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
        $__internal_055f715f5513d475adb895e17b7f34f9cc033d4a34ba4086d4b7b538fc9996d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055f715f5513d475adb895e17b7f34f9cc033d4a34ba4086d4b7b538fc9996d0->enter($__internal_055f715f5513d475adb895e17b7f34f9cc033d4a34ba4086d4b7b538fc9996d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ae79b243b4b92b2616c7faa7e5efcf1fd2eb52f87ce4dae7e2858382b0c0bb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae79b243b4b92b2616c7faa7e5efcf1fd2eb52f87ce4dae7e2858382b0c0bb04->enter($__internal_ae79b243b4b92b2616c7faa7e5efcf1fd2eb52f87ce4dae7e2858382b0c0bb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055f715f5513d475adb895e17b7f34f9cc033d4a34ba4086d4b7b538fc9996d0->leave($__internal_055f715f5513d475adb895e17b7f34f9cc033d4a34ba4086d4b7b538fc9996d0_prof);

        
        $__internal_ae79b243b4b92b2616c7faa7e5efcf1fd2eb52f87ce4dae7e2858382b0c0bb04->leave($__internal_ae79b243b4b92b2616c7faa7e5efcf1fd2eb52f87ce4dae7e2858382b0c0bb04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cf4953fa80d330329e7b48611e98892b2f13eec140efda45aa96166e8f0dc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf4953fa80d330329e7b48611e98892b2f13eec140efda45aa96166e8f0dc0c->enter($__internal_2cf4953fa80d330329e7b48611e98892b2f13eec140efda45aa96166e8f0dc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33dc731443079d2e3e20fbb77cf59c6624adbae3c01384ad5da08319c8f97ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dc731443079d2e3e20fbb77cf59c6624adbae3c01384ad5da08319c8f97ef4->enter($__internal_33dc731443079d2e3e20fbb77cf59c6624adbae3c01384ad5da08319c8f97ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_33dc731443079d2e3e20fbb77cf59c6624adbae3c01384ad5da08319c8f97ef4->leave($__internal_33dc731443079d2e3e20fbb77cf59c6624adbae3c01384ad5da08319c8f97ef4_prof);

        
        $__internal_2cf4953fa80d330329e7b48611e98892b2f13eec140efda45aa96166e8f0dc0c->leave($__internal_2cf4953fa80d330329e7b48611e98892b2f13eec140efda45aa96166e8f0dc0c_prof);

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
