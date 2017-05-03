<?php

/* PWMyBundle::layout.html.twig */
class __TwigTemplate_1a48206e29bb72156fa568187ca971e72d712aaf76eb9da2444c3c0e19588065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c54232c9f1844f6d103e320f93d8854dad1710fcfc7677673c65fadc8c689eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54232c9f1844f6d103e320f93d8854dad1710fcfc7677673c65fadc8c689eb8->enter($__internal_c54232c9f1844f6d103e320f93d8854dad1710fcfc7677673c65fadc8c689eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_92850617efc2685da562326e2781e359106defb4e037d950425f6923e682aa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92850617efc2685da562326e2781e359106defb4e037d950425f6923e682aa6c->enter($__internal_92850617efc2685da562326e2781e359106defb4e037d950425f6923e682aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    
  </head>
  <body>
    ";
        // line 16
        $this->displayBlock('nav', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    <footer class=\"navbar-default navbar-fixed-bottom\">
      <div class=\"container-fluid\">
        <p>The sky's the limit © ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
      </div>
    </footer>
    ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "  </body>
</html>";
        
        $__internal_c54232c9f1844f6d103e320f93d8854dad1710fcfc7677673c65fadc8c689eb8->leave($__internal_c54232c9f1844f6d103e320f93d8854dad1710fcfc7677673c65fadc8c689eb8_prof);

        
        $__internal_92850617efc2685da562326e2781e359106defb4e037d950425f6923e682aa6c->leave($__internal_92850617efc2685da562326e2781e359106defb4e037d950425f6923e682aa6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c626fa368d5bd721cfe6500af5ba47c2cce19f1d15ef6bf4a77a969e15c88b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c626fa368d5bd721cfe6500af5ba47c2cce19f1d15ef6bf4a77a969e15c88b5f->enter($__internal_c626fa368d5bd721cfe6500af5ba47c2cce19f1d15ef6bf4a77a969e15c88b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a433d6bc42e1688fd15d58659b1537132f8f5f46377986b9ccc3034371da1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a433d6bc42e1688fd15d58659b1537132f8f5f46377986b9ccc3034371da1f1->enter($__internal_7a433d6bc42e1688fd15d58659b1537132f8f5f46377986b9ccc3034371da1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_7a433d6bc42e1688fd15d58659b1537132f8f5f46377986b9ccc3034371da1f1->leave($__internal_7a433d6bc42e1688fd15d58659b1537132f8f5f46377986b9ccc3034371da1f1_prof);

        
        $__internal_c626fa368d5bd721cfe6500af5ba47c2cce19f1d15ef6bf4a77a969e15c88b5f->leave($__internal_c626fa368d5bd721cfe6500af5ba47c2cce19f1d15ef6bf4a77a969e15c88b5f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aa63ea8f6fc0e9a14da1e9b29898d79ea60a12f64fb11fcba94bf00b8eb3cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa63ea8f6fc0e9a14da1e9b29898d79ea60a12f64fb11fcba94bf00b8eb3cd3->enter($__internal_5aa63ea8f6fc0e9a14da1e9b29898d79ea60a12f64fb11fcba94bf00b8eb3cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fca8e4317d6a3be083c13b3fa2289bf903e67be590e7bf49bf44431f6b902bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fca8e4317d6a3be083c13b3fa2289bf903e67be590e7bf49bf44431f6b902bf->enter($__internal_1fca8e4317d6a3be083c13b3fa2289bf903e67be590e7bf49bf44431f6b902bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        
        $__internal_1fca8e4317d6a3be083c13b3fa2289bf903e67be590e7bf49bf44431f6b902bf->leave($__internal_1fca8e4317d6a3be083c13b3fa2289bf903e67be590e7bf49bf44431f6b902bf_prof);

        
        $__internal_5aa63ea8f6fc0e9a14da1e9b29898d79ea60a12f64fb11fcba94bf00b8eb3cd3->leave($__internal_5aa63ea8f6fc0e9a14da1e9b29898d79ea60a12f64fb11fcba94bf00b8eb3cd3_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6f6c8f08abe0330a0c7ffa9d2146a14510611efe4034bbf6cf304e1e7e80967d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6c8f08abe0330a0c7ffa9d2146a14510611efe4034bbf6cf304e1e7e80967d->enter($__internal_6f6c8f08abe0330a0c7ffa9d2146a14510611efe4034bbf6cf304e1e7e80967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3220a4d89a0909ca885eef9274433addf3c0a0d13afdd892de4c7ea1e0c6a12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3220a4d89a0909ca885eef9274433addf3c0a0d13afdd892de4c7ea1e0c6a12f->enter($__internal_3220a4d89a0909ca885eef9274433addf3c0a0d13afdd892de4c7ea1e0c6a12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "      <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\"> 
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span> 
            </button>
            <a target=\"_blank\" href=\"#\" class=\"navbar-brand\">KENYLAM GAME</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\"><a href=\"#\" target=\"_blank\">About</a></li>
                 <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">DropDown
                    <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Link 2</a></li>
                    </ul>
                 </li>              
             </ul>  
        </div>
    </div>
</div>
    ";
        
        $__internal_3220a4d89a0909ca885eef9274433addf3c0a0d13afdd892de4c7ea1e0c6a12f->leave($__internal_3220a4d89a0909ca885eef9274433addf3c0a0d13afdd892de4c7ea1e0c6a12f_prof);

        
        $__internal_6f6c8f08abe0330a0c7ffa9d2146a14510611efe4034bbf6cf304e1e7e80967d->leave($__internal_6f6c8f08abe0330a0c7ffa9d2146a14510611efe4034bbf6cf304e1e7e80967d_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a94b4f4ff6171e92200b1ef2abd07fcad1a88fafe787102ff31ccc6f222eb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a94b4f4ff6171e92200b1ef2abd07fcad1a88fafe787102ff31ccc6f222eb7f->enter($__internal_3a94b4f4ff6171e92200b1ef2abd07fcad1a88fafe787102ff31ccc6f222eb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58670eba08aa59416fd3addda10988b7a7bde7cb9c8c7aa309007ab0d2f68dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58670eba08aa59416fd3addda10988b7a7bde7cb9c8c7aa309007ab0d2f68dcf->enter($__internal_58670eba08aa59416fd3addda10988b7a7bde7cb9c8c7aa309007ab0d2f68dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "    
    ";
        
        $__internal_58670eba08aa59416fd3addda10988b7a7bde7cb9c8c7aa309007ab0d2f68dcf->leave($__internal_58670eba08aa59416fd3addda10988b7a7bde7cb9c8c7aa309007ab0d2f68dcf_prof);

        
        $__internal_3a94b4f4ff6171e92200b1ef2abd07fcad1a88fafe787102ff31ccc6f222eb7f->leave($__internal_3a94b4f4ff6171e92200b1ef2abd07fcad1a88fafe787102ff31ccc6f222eb7f_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d3a2718210964e5ac0a33f86a2763ef18bb6c6cbb6a4210b6bebfb5ace9412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3a2718210964e5ac0a33f86a2763ef18bb6c6cbb6a4210b6bebfb5ace9412d->enter($__internal_6d3a2718210964e5ac0a33f86a2763ef18bb6c6cbb6a4210b6bebfb5ace9412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffda238f5231f8be7baafd8f207c73116da30cfb217628345efcac5ae02e28f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffda238f5231f8be7baafd8f207c73116da30cfb217628345efcac5ae02e28f9->enter($__internal_ffda238f5231f8be7baafd8f207c73116da30cfb217628345efcac5ae02e28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_ffda238f5231f8be7baafd8f207c73116da30cfb217628345efcac5ae02e28f9->leave($__internal_ffda238f5231f8be7baafd8f207c73116da30cfb217628345efcac5ae02e28f9_prof);

        
        $__internal_6d3a2718210964e5ac0a33f86a2763ef18bb6c6cbb6a4210b6bebfb5ace9412d->leave($__internal_6d3a2718210964e5ac0a33f86a2763ef18bb6c6cbb6a4210b6bebfb5ace9412d_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 54,  191 => 53,  182 => 52,  171 => 45,  162 => 44,  126 => 17,  117 => 16,  104 => 9,  95 => 8,  77 => 7,  66 => 56,  64 => 52,  58 => 49,  54 => 47,  51 => 44,  49 => 16,  44 => 13,  42 => 8,  38 => 7,  30 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title%} {% endblock %} </title>
    {% block stylesheets %}
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    {% endblock %}
    
  </head>
  <body>
    {% block nav%}
      <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\"> 
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span> 
            </button>
            <a target=\"_blank\" href=\"#\" class=\"navbar-brand\">KENYLAM GAME</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Home</a></li>
                <li class=\"active\"><a href=\"#\" target=\"_blank\">About</a></li>
                 <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">DropDown
                    <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Link 2</a></li>
                    </ul>
                 </li>              
             </ul>  
        </div>
    </div>
</div>
    {% endblock%}
    {% block body %}
    
    {% endblock %}
    <footer class=\"navbar-default navbar-fixed-bottom\">
      <div class=\"container-fluid\">
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
      </div>
    </footer>
    {% block javascripts %}
        <script src=\"{{ asset('bootstrap/js/jquery.min.jss') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.jss') }}\"></script>
    {% endblock %}
  </body>
</html>", "PWMyBundle::layout.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/layout.html.twig");
    }
}
