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
        $__internal_396d9172ba5c0d773e3779a1797a3f26938a497ad6838be1fbbf0da6e8ddb5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396d9172ba5c0d773e3779a1797a3f26938a497ad6838be1fbbf0da6e8ddb5b8->enter($__internal_396d9172ba5c0d773e3779a1797a3f26938a497ad6838be1fbbf0da6e8ddb5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_63e4c6be668dc45e62aec071474f34dd3bea68d9c31f9ee39618de17c014f935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e4c6be668dc45e62aec071474f34dd3bea68d9c31f9ee39618de17c014f935->enter($__internal_63e4c6be668dc45e62aec071474f34dd3bea68d9c31f9ee39618de17c014f935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

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
        // line 36
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    <footer class=\"navbar-default navbar-fixed-bottom\">
      <div class=\"container-fluid\">
        <p>The sky's the limit © ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
      </div>
    </footer>
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "  </body>
</html>";
        
        $__internal_396d9172ba5c0d773e3779a1797a3f26938a497ad6838be1fbbf0da6e8ddb5b8->leave($__internal_396d9172ba5c0d773e3779a1797a3f26938a497ad6838be1fbbf0da6e8ddb5b8_prof);

        
        $__internal_63e4c6be668dc45e62aec071474f34dd3bea68d9c31f9ee39618de17c014f935->leave($__internal_63e4c6be668dc45e62aec071474f34dd3bea68d9c31f9ee39618de17c014f935_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25f8ceb8c721461190bee45ccf3caac474d035521352ac2ce713520cba38668e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f8ceb8c721461190bee45ccf3caac474d035521352ac2ce713520cba38668e->enter($__internal_25f8ceb8c721461190bee45ccf3caac474d035521352ac2ce713520cba38668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb5c5ed8a7aaa13b75e6a3fb75382b5435aa10e76e78a429c76de0f6885fcb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5c5ed8a7aaa13b75e6a3fb75382b5435aa10e76e78a429c76de0f6885fcb3a->enter($__internal_eb5c5ed8a7aaa13b75e6a3fb75382b5435aa10e76e78a429c76de0f6885fcb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_eb5c5ed8a7aaa13b75e6a3fb75382b5435aa10e76e78a429c76de0f6885fcb3a->leave($__internal_eb5c5ed8a7aaa13b75e6a3fb75382b5435aa10e76e78a429c76de0f6885fcb3a_prof);

        
        $__internal_25f8ceb8c721461190bee45ccf3caac474d035521352ac2ce713520cba38668e->leave($__internal_25f8ceb8c721461190bee45ccf3caac474d035521352ac2ce713520cba38668e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcda525c37d50fd5c6276d0570c2a1d7cf8c1b918cbacec0c3f196ecc1ea94f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcda525c37d50fd5c6276d0570c2a1d7cf8c1b918cbacec0c3f196ecc1ea94f9->enter($__internal_fcda525c37d50fd5c6276d0570c2a1d7cf8c1b918cbacec0c3f196ecc1ea94f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c8ae2a58e4373a1d19172520ba895f67c7fcf41fce32c91e9af53a166e74f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8ae2a58e4373a1d19172520ba895f67c7fcf41fce32c91e9af53a166e74f61->enter($__internal_9c8ae2a58e4373a1d19172520ba895f67c7fcf41fce32c91e9af53a166e74f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        
        $__internal_9c8ae2a58e4373a1d19172520ba895f67c7fcf41fce32c91e9af53a166e74f61->leave($__internal_9c8ae2a58e4373a1d19172520ba895f67c7fcf41fce32c91e9af53a166e74f61_prof);

        
        $__internal_fcda525c37d50fd5c6276d0570c2a1d7cf8c1b918cbacec0c3f196ecc1ea94f9->leave($__internal_fcda525c37d50fd5c6276d0570c2a1d7cf8c1b918cbacec0c3f196ecc1ea94f9_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b89c860d54a9dc027f14f69bf87073f0dcb24074c1b34bfd51d22fce3b411669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89c860d54a9dc027f14f69bf87073f0dcb24074c1b34bfd51d22fce3b411669->enter($__internal_b89c860d54a9dc027f14f69bf87073f0dcb24074c1b34bfd51d22fce3b411669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_9a6f0a06dde94069fd4cf63eda87bf733be7c6d04b1a5856f5a10bf3423b0495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6f0a06dde94069fd4cf63eda87bf733be7c6d04b1a5856f5a10bf3423b0495->enter($__internal_9a6f0a06dde94069fd4cf63eda87bf733be7c6d04b1a5856f5a10bf3423b0495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                <li class=\"active\"><a href=\"about.html.twig\" target=\"_blank\">About</a></li>          
              </ul>  
            </div>
          </div>
      </div>
    ";
        
        $__internal_9a6f0a06dde94069fd4cf63eda87bf733be7c6d04b1a5856f5a10bf3423b0495->leave($__internal_9a6f0a06dde94069fd4cf63eda87bf733be7c6d04b1a5856f5a10bf3423b0495_prof);

        
        $__internal_b89c860d54a9dc027f14f69bf87073f0dcb24074c1b34bfd51d22fce3b411669->leave($__internal_b89c860d54a9dc027f14f69bf87073f0dcb24074c1b34bfd51d22fce3b411669_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab460ca45c90234c3558d23482ba8a6636b340b3387849dd304d6c0fe95c7e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab460ca45c90234c3558d23482ba8a6636b340b3387849dd304d6c0fe95c7e96->enter($__internal_ab460ca45c90234c3558d23482ba8a6636b340b3387849dd304d6c0fe95c7e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d6a01da7d610e8b4d677e66eb1a9d36230abe34ae77bffdfdbff939dbe4c466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6a01da7d610e8b4d677e66eb1a9d36230abe34ae77bffdfdbff939dbe4c466->enter($__internal_0d6a01da7d610e8b4d677e66eb1a9d36230abe34ae77bffdfdbff939dbe4c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    
    ";
        
        $__internal_0d6a01da7d610e8b4d677e66eb1a9d36230abe34ae77bffdfdbff939dbe4c466->leave($__internal_0d6a01da7d610e8b4d677e66eb1a9d36230abe34ae77bffdfdbff939dbe4c466_prof);

        
        $__internal_ab460ca45c90234c3558d23482ba8a6636b340b3387849dd304d6c0fe95c7e96->leave($__internal_ab460ca45c90234c3558d23482ba8a6636b340b3387849dd304d6c0fe95c7e96_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_468c21c0b9917ecc2f228fa4109fa2547b3f4f3fcff670033dd5b57e907f5b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468c21c0b9917ecc2f228fa4109fa2547b3f4f3fcff670033dd5b57e907f5b65->enter($__internal_468c21c0b9917ecc2f228fa4109fa2547b3f4f3fcff670033dd5b57e907f5b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fda1797bfb3c0e0a717e192a2655ac3d93c05b16992fa24322b357fb3efada90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1797bfb3c0e0a717e192a2655ac3d93c05b16992fa24322b357fb3efada90->enter($__internal_fda1797bfb3c0e0a717e192a2655ac3d93c05b16992fa24322b357fb3efada90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_fda1797bfb3c0e0a717e192a2655ac3d93c05b16992fa24322b357fb3efada90->leave($__internal_fda1797bfb3c0e0a717e192a2655ac3d93c05b16992fa24322b357fb3efada90_prof);

        
        $__internal_468c21c0b9917ecc2f228fa4109fa2547b3f4f3fcff670033dd5b57e907f5b65->leave($__internal_468c21c0b9917ecc2f228fa4109fa2547b3f4f3fcff670033dd5b57e907f5b65_prof);

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
        return array (  188 => 46,  183 => 45,  174 => 44,  163 => 37,  154 => 36,  126 => 17,  117 => 16,  104 => 9,  95 => 8,  77 => 7,  66 => 48,  64 => 44,  58 => 41,  54 => 39,  51 => 36,  49 => 16,  44 => 13,  42 => 8,  38 => 7,  30 => 1,);
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
                <li class=\"active\"><a href=\"about.html.twig\" target=\"_blank\">About</a></li>          
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
