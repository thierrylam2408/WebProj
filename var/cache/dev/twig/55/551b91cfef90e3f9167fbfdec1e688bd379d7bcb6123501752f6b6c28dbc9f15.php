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
        $__internal_4c20fe6e65b2e972dac7f9581febad507fbd223dac99fe804045bb086ede5c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c20fe6e65b2e972dac7f9581febad507fbd223dac99fe804045bb086ede5c2a->enter($__internal_4c20fe6e65b2e972dac7f9581febad507fbd223dac99fe804045bb086ede5c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_5807dab950f9105ba91ab957eed0bb72cb463d308cf493812d05a5424fbc37c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5807dab950f9105ba91ab957eed0bb72cb463d308cf493812d05a5424fbc37c4->enter($__internal_5807dab950f9105ba91ab957eed0bb72cb463d308cf493812d05a5424fbc37c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

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
        
        $__internal_4c20fe6e65b2e972dac7f9581febad507fbd223dac99fe804045bb086ede5c2a->leave($__internal_4c20fe6e65b2e972dac7f9581febad507fbd223dac99fe804045bb086ede5c2a_prof);

        
        $__internal_5807dab950f9105ba91ab957eed0bb72cb463d308cf493812d05a5424fbc37c4->leave($__internal_5807dab950f9105ba91ab957eed0bb72cb463d308cf493812d05a5424fbc37c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_818328ffeda2f39c54863aa07c30691060c8c38e998cbe2a18de63d0c9862717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818328ffeda2f39c54863aa07c30691060c8c38e998cbe2a18de63d0c9862717->enter($__internal_818328ffeda2f39c54863aa07c30691060c8c38e998cbe2a18de63d0c9862717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cfc4e42ee3d36b17b49ffe0b93e4e3107f800cac450aa072ea2e020aea116c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfc4e42ee3d36b17b49ffe0b93e4e3107f800cac450aa072ea2e020aea116c2->enter($__internal_7cfc4e42ee3d36b17b49ffe0b93e4e3107f800cac450aa072ea2e020aea116c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_7cfc4e42ee3d36b17b49ffe0b93e4e3107f800cac450aa072ea2e020aea116c2->leave($__internal_7cfc4e42ee3d36b17b49ffe0b93e4e3107f800cac450aa072ea2e020aea116c2_prof);

        
        $__internal_818328ffeda2f39c54863aa07c30691060c8c38e998cbe2a18de63d0c9862717->leave($__internal_818328ffeda2f39c54863aa07c30691060c8c38e998cbe2a18de63d0c9862717_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9abe7068d966a5432459b794bc8e7de7d86613c6b5e2c4e1ad48876cdb6b9138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abe7068d966a5432459b794bc8e7de7d86613c6b5e2c4e1ad48876cdb6b9138->enter($__internal_9abe7068d966a5432459b794bc8e7de7d86613c6b5e2c4e1ad48876cdb6b9138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03d2cc42c582269b0b021da41f8f84f2ee64a9d555d5b6f5247bc4f7fa04b8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d2cc42c582269b0b021da41f8f84f2ee64a9d555d5b6f5247bc4f7fa04b8e0->enter($__internal_03d2cc42c582269b0b021da41f8f84f2ee64a9d555d5b6f5247bc4f7fa04b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        
        $__internal_03d2cc42c582269b0b021da41f8f84f2ee64a9d555d5b6f5247bc4f7fa04b8e0->leave($__internal_03d2cc42c582269b0b021da41f8f84f2ee64a9d555d5b6f5247bc4f7fa04b8e0_prof);

        
        $__internal_9abe7068d966a5432459b794bc8e7de7d86613c6b5e2c4e1ad48876cdb6b9138->leave($__internal_9abe7068d966a5432459b794bc8e7de7d86613c6b5e2c4e1ad48876cdb6b9138_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2e4e1edcd4beb48c6c9c591bb0250657968d7a68aadb2a7ff7617cfd81fd076d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4e1edcd4beb48c6c9c591bb0250657968d7a68aadb2a7ff7617cfd81fd076d->enter($__internal_2e4e1edcd4beb48c6c9c591bb0250657968d7a68aadb2a7ff7617cfd81fd076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_0e5db869787fa2fe71c2f0a97f055b6adf678654147d4d474f8572eb0be7e365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5db869787fa2fe71c2f0a97f055b6adf678654147d4d474f8572eb0be7e365->enter($__internal_0e5db869787fa2fe71c2f0a97f055b6adf678654147d4d474f8572eb0be7e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
              </ul>  
            </div>
          </div>
      </div>
    ";
        
        $__internal_0e5db869787fa2fe71c2f0a97f055b6adf678654147d4d474f8572eb0be7e365->leave($__internal_0e5db869787fa2fe71c2f0a97f055b6adf678654147d4d474f8572eb0be7e365_prof);

        
        $__internal_2e4e1edcd4beb48c6c9c591bb0250657968d7a68aadb2a7ff7617cfd81fd076d->leave($__internal_2e4e1edcd4beb48c6c9c591bb0250657968d7a68aadb2a7ff7617cfd81fd076d_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_585c7aeb96058f44352b599716df34eb4725730017ceac3219d56efec3ea9dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585c7aeb96058f44352b599716df34eb4725730017ceac3219d56efec3ea9dc6->enter($__internal_585c7aeb96058f44352b599716df34eb4725730017ceac3219d56efec3ea9dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0530e25fffa40f924dde72e8ddd5460207c08f4cde46303257671a015ce20243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0530e25fffa40f924dde72e8ddd5460207c08f4cde46303257671a015ce20243->enter($__internal_0530e25fffa40f924dde72e8ddd5460207c08f4cde46303257671a015ce20243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    
    ";
        
        $__internal_0530e25fffa40f924dde72e8ddd5460207c08f4cde46303257671a015ce20243->leave($__internal_0530e25fffa40f924dde72e8ddd5460207c08f4cde46303257671a015ce20243_prof);

        
        $__internal_585c7aeb96058f44352b599716df34eb4725730017ceac3219d56efec3ea9dc6->leave($__internal_585c7aeb96058f44352b599716df34eb4725730017ceac3219d56efec3ea9dc6_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4753c30cd53263485432bb0ca9531d9eb16c391f00af6362764e97d2fec222d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4753c30cd53263485432bb0ca9531d9eb16c391f00af6362764e97d2fec222d1->enter($__internal_4753c30cd53263485432bb0ca9531d9eb16c391f00af6362764e97d2fec222d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b48f4ae92305e683a949202534dae1dc211e3ffc9b0a1b778c830dcd7649199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48f4ae92305e683a949202534dae1dc211e3ffc9b0a1b778c830dcd7649199b->enter($__internal_b48f4ae92305e683a949202534dae1dc211e3ffc9b0a1b778c830dcd7649199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_b48f4ae92305e683a949202534dae1dc211e3ffc9b0a1b778c830dcd7649199b->leave($__internal_b48f4ae92305e683a949202534dae1dc211e3ffc9b0a1b778c830dcd7649199b_prof);

        
        $__internal_4753c30cd53263485432bb0ca9531d9eb16c391f00af6362764e97d2fec222d1->leave($__internal_4753c30cd53263485432bb0ca9531d9eb16c391f00af6362764e97d2fec222d1_prof);

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
                <li class=\"active\"><a href=\"#\" target=\"_blank\">About</a></li>          
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
