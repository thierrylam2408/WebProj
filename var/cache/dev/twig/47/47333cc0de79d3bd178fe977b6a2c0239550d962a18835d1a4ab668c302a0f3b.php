<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_865f7ed82209055f713ae3e849a84890079ef4b689d90033fc1ba32b3ae0988b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_432b5cd4aba17ed93f00c2bb2cecaf47bee18f5bdaa90178acf01dc725ab1fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432b5cd4aba17ed93f00c2bb2cecaf47bee18f5bdaa90178acf01dc725ab1fc5->enter($__internal_432b5cd4aba17ed93f00c2bb2cecaf47bee18f5bdaa90178acf01dc725ab1fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_78a2dbb223c5eee9e1d4397a5d2eea7eb4792d9728283512072de2ef64bf9b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a2dbb223c5eee9e1d4397a5d2eea7eb4792d9728283512072de2ef64bf9b3f->enter($__internal_78a2dbb223c5eee9e1d4397a5d2eea7eb4792d9728283512072de2ef64bf9b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432b5cd4aba17ed93f00c2bb2cecaf47bee18f5bdaa90178acf01dc725ab1fc5->leave($__internal_432b5cd4aba17ed93f00c2bb2cecaf47bee18f5bdaa90178acf01dc725ab1fc5_prof);

        
        $__internal_78a2dbb223c5eee9e1d4397a5d2eea7eb4792d9728283512072de2ef64bf9b3f->leave($__internal_78a2dbb223c5eee9e1d4397a5d2eea7eb4792d9728283512072de2ef64bf9b3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c357530e1e3bf933b1a68fe5116307b0ccba663046c7c4b898c867352128831f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c357530e1e3bf933b1a68fe5116307b0ccba663046c7c4b898c867352128831f->enter($__internal_c357530e1e3bf933b1a68fe5116307b0ccba663046c7c4b898c867352128831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74c99959cf95522634bb4b6445d9f2fb708b6ceb954e5519fd6f4a28f36d8922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c99959cf95522634bb4b6445d9f2fb708b6ceb954e5519fd6f4a28f36d8922->enter($__internal_74c99959cf95522634bb4b6445d9f2fb708b6ceb954e5519fd6f4a28f36d8922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_74c99959cf95522634bb4b6445d9f2fb708b6ceb954e5519fd6f4a28f36d8922->leave($__internal_74c99959cf95522634bb4b6445d9f2fb708b6ceb954e5519fd6f4a28f36d8922_prof);

        
        $__internal_c357530e1e3bf933b1a68fe5116307b0ccba663046c7c4b898c867352128831f->leave($__internal_c357530e1e3bf933b1a68fe5116307b0ccba663046c7c4b898c867352128831f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b747c3c598b2340a5b8145df149f1270ab67c86c667f2a72699f1aa3a6ec309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b747c3c598b2340a5b8145df149f1270ab67c86c667f2a72699f1aa3a6ec309->enter($__internal_7b747c3c598b2340a5b8145df149f1270ab67c86c667f2a72699f1aa3a6ec309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6d3fc2a1382ff41f85b149669b4191abe3cd743bcfbd515c8f31ffcbb94a55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d3fc2a1382ff41f85b149669b4191abe3cd743bcfbd515c8f31ffcbb94a55e->enter($__internal_d6d3fc2a1382ff41f85b149669b4191abe3cd743bcfbd515c8f31ffcbb94a55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6d3fc2a1382ff41f85b149669b4191abe3cd743bcfbd515c8f31ffcbb94a55e->leave($__internal_d6d3fc2a1382ff41f85b149669b4191abe3cd743bcfbd515c8f31ffcbb94a55e_prof);

        
        $__internal_7b747c3c598b2340a5b8145df149f1270ab67c86c667f2a72699f1aa3a6ec309->leave($__internal_7b747c3c598b2340a5b8145df149f1270ab67c86c667f2a72699f1aa3a6ec309_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e337e39e7113794204053b1cd6d1dae658f745d203d43aa0b2ce91b9aefa6adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e337e39e7113794204053b1cd6d1dae658f745d203d43aa0b2ce91b9aefa6adc->enter($__internal_e337e39e7113794204053b1cd6d1dae658f745d203d43aa0b2ce91b9aefa6adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_589b83159cc7fd49594da0dca8d3219a5976683fa05f1c2c8639d49c467e3697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589b83159cc7fd49594da0dca8d3219a5976683fa05f1c2c8639d49c467e3697->enter($__internal_589b83159cc7fd49594da0dca8d3219a5976683fa05f1c2c8639d49c467e3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_589b83159cc7fd49594da0dca8d3219a5976683fa05f1c2c8639d49c467e3697->leave($__internal_589b83159cc7fd49594da0dca8d3219a5976683fa05f1c2c8639d49c467e3697_prof);

        
        $__internal_e337e39e7113794204053b1cd6d1dae658f745d203d43aa0b2ce91b9aefa6adc->leave($__internal_e337e39e7113794204053b1cd6d1dae658f745d203d43aa0b2ce91b9aefa6adc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\WebProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
