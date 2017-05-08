<?php

/* PWMyBundle:Default:about.html.twig */
class __TwigTemplate_4440ace475f99bdcdea65e439f84255e10d928dfa2703fdf5d35c2b2641c0079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWMyBundle::layout.html.twig", "PWMyBundle:Default:about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69ec4498ba92dd61b85e9941cde3ed2ffe7abe2d952ea508aa85bfb72619718d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ec4498ba92dd61b85e9941cde3ed2ffe7abe2d952ea508aa85bfb72619718d->enter($__internal_69ec4498ba92dd61b85e9941cde3ed2ffe7abe2d952ea508aa85bfb72619718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:about.html.twig"));

        $__internal_60c1cf29a3a9f458623cd07d80791ce9b8763eb24cda6f30cee94a9a6c1d3287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c1cf29a3a9f458623cd07d80791ce9b8763eb24cda6f30cee94a9a6c1d3287->enter($__internal_60c1cf29a3a9f458623cd07d80791ce9b8763eb24cda6f30cee94a9a6c1d3287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ec4498ba92dd61b85e9941cde3ed2ffe7abe2d952ea508aa85bfb72619718d->leave($__internal_69ec4498ba92dd61b85e9941cde3ed2ffe7abe2d952ea508aa85bfb72619718d_prof);

        
        $__internal_60c1cf29a3a9f458623cd07d80791ce9b8763eb24cda6f30cee94a9a6c1d3287->leave($__internal_60c1cf29a3a9f458623cd07d80791ce9b8763eb24cda6f30cee94a9a6c1d3287_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4428296febb0b8ec58dda138a0474d7c0db96b9be6b20f19ee9099216b734c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4428296febb0b8ec58dda138a0474d7c0db96b9be6b20f19ee9099216b734c96->enter($__internal_4428296febb0b8ec58dda138a0474d7c0db96b9be6b20f19ee9099216b734c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5767088af6811d3f35c1c32b3374316356d6c36fc149f7a30d99b782d947d133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5767088af6811d3f35c1c32b3374316356d6c36fc149f7a30d99b782d947d133->enter($__internal_5767088af6811d3f35c1c32b3374316356d6c36fc149f7a30d99b782d947d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t\tA propos
\t";
        
        $__internal_5767088af6811d3f35c1c32b3374316356d6c36fc149f7a30d99b782d947d133->leave($__internal_5767088af6811d3f35c1c32b3374316356d6c36fc149f7a30d99b782d947d133_prof);

        
        $__internal_4428296febb0b8ec58dda138a0474d7c0db96b9be6b20f19ee9099216b734c96->leave($__internal_4428296febb0b8ec58dda138a0474d7c0db96b9be6b20f19ee9099216b734c96_prof);

    }

    // line 6
    public function block_form($context, array $blocks = array())
    {
        $__internal_8e1151fe5e39a333074b18c517dafb0a1534f0ee446fe79fdd2b97724432a5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1151fe5e39a333074b18c517dafb0a1534f0ee446fe79fdd2b97724432a5d4->enter($__internal_8e1151fe5e39a333074b18c517dafb0a1534f0ee446fe79fdd2b97724432a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_4702109b85c54ccff53280b5f6788e1d26ea4c9782955693c1849157187112b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4702109b85c54ccff53280b5f6788e1d26ea4c9782955693c1849157187112b3->enter($__internal_4702109b85c54ccff53280b5f6788e1d26ea4c9782955693c1849157187112b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 7
        echo "\t\t<div class = \"container\">
\t\t            \t<p>
\t\t            \t\tJeu multijoueur persistant sur navigateur<br>
\t\t\t\t\t\t  \t-chaque user posséde une ou plusieurs entités<br>
\t\t\t\t\t\t  \t-effectue des actions pour evoluer dans le jeu<br>
\t\t\t\t\t\t  \t-rechargement à intervalles réguliers des PA<br>
\t\t            \t</p>
\t\t     
\t    </div>
\t";
        
        $__internal_4702109b85c54ccff53280b5f6788e1d26ea4c9782955693c1849157187112b3->leave($__internal_4702109b85c54ccff53280b5f6788e1d26ea4c9782955693c1849157187112b3_prof);

        
        $__internal_8e1151fe5e39a333074b18c517dafb0a1534f0ee446fe79fdd2b97724432a5d4->leave($__internal_8e1151fe5e39a333074b18c517dafb0a1534f0ee446fe79fdd2b97724432a5d4_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  61 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PWMyBundle::layout.html.twig\" %}

\t{% block title %}
\t\tA propos
\t{% endblock %}
\t{% block form %}
\t\t<div class = \"container\">
\t\t            \t<p>
\t\t            \t\tJeu multijoueur persistant sur navigateur<br>
\t\t\t\t\t\t  \t-chaque user posséde une ou plusieurs entités<br>
\t\t\t\t\t\t  \t-effectue des actions pour evoluer dans le jeu<br>
\t\t\t\t\t\t  \t-rechargement à intervalles réguliers des PA<br>
\t\t            \t</p>
\t\t     
\t    </div>
\t{% endblock %}
\t", "PWMyBundle:Default:about.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/about.html.twig");
    }
}
