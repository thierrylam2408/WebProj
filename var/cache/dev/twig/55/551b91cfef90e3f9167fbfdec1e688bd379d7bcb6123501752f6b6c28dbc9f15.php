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
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'form' => array($this, 'block_form'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55d66248cb3683ed3890f3ebc3953e0b578266200613a38aa55c09ef6727872f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d66248cb3683ed3890f3ebc3953e0b578266200613a38aa55c09ef6727872f->enter($__internal_55d66248cb3683ed3890f3ebc3953e0b578266200613a38aa55c09ef6727872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_04aa1112f0ca2bf8aa82e42a2e46302b8262177c1507d4d85ad4695d59b62b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04aa1112f0ca2bf8aa82e42a2e46302b8262177c1507d4d85ad4695d59b62b14->enter($__internal_04aa1112f0ca2bf8aa82e42a2e46302b8262177c1507d4d85ad4695d59b62b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

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
    <div class = \"container\">
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "    </div>
  </body>
</html>";
        
        $__internal_55d66248cb3683ed3890f3ebc3953e0b578266200613a38aa55c09ef6727872f->leave($__internal_55d66248cb3683ed3890f3ebc3953e0b578266200613a38aa55c09ef6727872f_prof);

        
        $__internal_04aa1112f0ca2bf8aa82e42a2e46302b8262177c1507d4d85ad4695d59b62b14->leave($__internal_04aa1112f0ca2bf8aa82e42a2e46302b8262177c1507d4d85ad4695d59b62b14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f20c2bedaf6c4ac016707aaef369a0b896b3a658ebf1ab38d84fc14626e1b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f20c2bedaf6c4ac016707aaef369a0b896b3a658ebf1ab38d84fc14626e1b56->enter($__internal_3f20c2bedaf6c4ac016707aaef369a0b896b3a658ebf1ab38d84fc14626e1b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6ffd8dff4bdda162254ee4c6aebc4267b71af281c063a2634304a1955538f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ffd8dff4bdda162254ee4c6aebc4267b71af281c063a2634304a1955538f9e->enter($__internal_d6ffd8dff4bdda162254ee4c6aebc4267b71af281c063a2634304a1955538f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_d6ffd8dff4bdda162254ee4c6aebc4267b71af281c063a2634304a1955538f9e->leave($__internal_d6ffd8dff4bdda162254ee4c6aebc4267b71af281c063a2634304a1955538f9e_prof);

        
        $__internal_3f20c2bedaf6c4ac016707aaef369a0b896b3a658ebf1ab38d84fc14626e1b56->leave($__internal_3f20c2bedaf6c4ac016707aaef369a0b896b3a658ebf1ab38d84fc14626e1b56_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_988562ff028296d13a444d81a5d26d419b4fb3371d90e83535060a15a0a9e520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988562ff028296d13a444d81a5d26d419b4fb3371d90e83535060a15a0a9e520->enter($__internal_988562ff028296d13a444d81a5d26d419b4fb3371d90e83535060a15a0a9e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecf2a88f1663e05b348076f99dfc679e1a8c2c85a55fc5c63fc18aacf8bbb001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf2a88f1663e05b348076f99dfc679e1a8c2c85a55fc5c63fc18aacf8bbb001->enter($__internal_ecf2a88f1663e05b348076f99dfc679e1a8c2c85a55fc5c63fc18aacf8bbb001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        
        $__internal_ecf2a88f1663e05b348076f99dfc679e1a8c2c85a55fc5c63fc18aacf8bbb001->leave($__internal_ecf2a88f1663e05b348076f99dfc679e1a8c2c85a55fc5c63fc18aacf8bbb001_prof);

        
        $__internal_988562ff028296d13a444d81a5d26d419b4fb3371d90e83535060a15a0a9e520->leave($__internal_988562ff028296d13a444d81a5d26d419b4fb3371d90e83535060a15a0a9e520_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef875c0652c2e0166e1efe0c6e804c01c84dab587b76a170c1360f0054ba941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef875c0652c2e0166e1efe0c6e804c01c84dab587b76a170c1360f0054ba941->enter($__internal_2ef875c0652c2e0166e1efe0c6e804c01c84dab587b76a170c1360f0054ba941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_710adff87af1e5e87c91ee4cfd332755b8e43e7b6d03601669d4aef1b1197761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710adff87af1e5e87c91ee4cfd332755b8e43e7b6d03601669d4aef1b1197761->enter($__internal_710adff87af1e5e87c91ee4cfd332755b8e43e7b6d03601669d4aef1b1197761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "      ";
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "      ";
        $this->displayBlock('form', $context, $blocks);
        // line 60
        echo "      <footer class=\"navbar-default navbar-fixed-bottom\">
        <div class=\"container-fluid\">
          <p>The sky's the limit © ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </div>
      </footer>
      ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    ";
        
        $__internal_710adff87af1e5e87c91ee4cfd332755b8e43e7b6d03601669d4aef1b1197761->leave($__internal_710adff87af1e5e87c91ee4cfd332755b8e43e7b6d03601669d4aef1b1197761_prof);

        
        $__internal_2ef875c0652c2e0166e1efe0c6e804c01c84dab587b76a170c1360f0054ba941->leave($__internal_2ef875c0652c2e0166e1efe0c6e804c01c84dab587b76a170c1360f0054ba941_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2d5cd2a553dfbfec9569fd952bad796d2952a4d691850027622d1eca326b4527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5cd2a553dfbfec9569fd952bad796d2952a4d691850027622d1eca326b4527->enter($__internal_2d5cd2a553dfbfec9569fd952bad796d2952a4d691850027622d1eca326b4527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3a89702ed004eaa5a254e668e4a1ed1fb77a0ade10da9fb5708f2aba7f21dd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89702ed004eaa5a254e668e4a1ed1fb77a0ade10da9fb5708f2aba7f21dd7c->enter($__internal_3a89702ed004eaa5a254e668e4a1ed1fb77a0ade10da9fb5708f2aba7f21dd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\"> 
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span> 
                </button>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/");
        echo "\" class=\"navbar-brand\">KENYLAM GAME</a>
              </div>
              <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                            
                </ul>  
              </div>
            </div>
        </div>
      ";
        
        $__internal_3a89702ed004eaa5a254e668e4a1ed1fb77a0ade10da9fb5708f2aba7f21dd7c->leave($__internal_3a89702ed004eaa5a254e668e4a1ed1fb77a0ade10da9fb5708f2aba7f21dd7c_prof);

        
        $__internal_2d5cd2a553dfbfec9569fd952bad796d2952a4d691850027622d1eca326b4527->leave($__internal_2d5cd2a553dfbfec9569fd952bad796d2952a4d691850027622d1eca326b4527_prof);

    }

    // line 37
    public function block_form($context, array $blocks = array())
    {
        $__internal_5e257cdc9abf673ad5e95aac7681f6bee9fcd9c3ae8918addd98af8e63947a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e257cdc9abf673ad5e95aac7681f6bee9fcd9c3ae8918addd98af8e63947a93->enter($__internal_5e257cdc9abf673ad5e95aac7681f6bee9fcd9c3ae8918addd98af8e63947a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_099317f07a4f6f911c98f9109f1203f8df39e55c7f2c06c8ba1d34169b330a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099317f07a4f6f911c98f9109f1203f8df39e55c7f2c06c8ba1d34169b330a5d->enter($__internal_099317f07a4f6f911c98f9109f1203f8df39e55c7f2c06c8ba1d34169b330a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 38
        echo "        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h1 class=\"text-center\">Welcome</h1>
              </div>
               <div class=\"modal-body\">
                   <div class=\"form-group\">
                       <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\"/>
                   </div>

                   <div class=\"form-group\">
                       <input type=\"password\" class=\"form-control input-lg\" placeholder=\"Password\"/>
                   </div>

                   <div class=\"form-group\">
                       <input type=\"submit\" class=\"btn btn-block btn-lg btn-primary\" value=\"Login\"/>
                       <span class=\"pull-right\"><a href=\"#\">Register</a></span><span><a href=\"#\">Forgot Password</a></span>
                   </div>
               </div>
          </div>
       </div>
      ";
        
        $__internal_099317f07a4f6f911c98f9109f1203f8df39e55c7f2c06c8ba1d34169b330a5d->leave($__internal_099317f07a4f6f911c98f9109f1203f8df39e55c7f2c06c8ba1d34169b330a5d_prof);

        
        $__internal_5e257cdc9abf673ad5e95aac7681f6bee9fcd9c3ae8918addd98af8e63947a93->leave($__internal_5e257cdc9abf673ad5e95aac7681f6bee9fcd9c3ae8918addd98af8e63947a93_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_254edeb7514b4b63b72280e7a293944823720ad550b6a02c7a4f7ec0704811f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254edeb7514b4b63b72280e7a293944823720ad550b6a02c7a4f7ec0704811f0->enter($__internal_254edeb7514b4b63b72280e7a293944823720ad550b6a02c7a4f7ec0704811f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce511df734bece8e3b29f7844b5dec8be89f7cc5e58a3c903fd3d7662c5af7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce511df734bece8e3b29f7844b5dec8be89f7cc5e58a3c903fd3d7662c5af7c5->enter($__internal_ce511df734bece8e3b29f7844b5dec8be89f7cc5e58a3c903fd3d7662c5af7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_ce511df734bece8e3b29f7844b5dec8be89f7cc5e58a3c903fd3d7662c5af7c5->leave($__internal_ce511df734bece8e3b29f7844b5dec8be89f7cc5e58a3c903fd3d7662c5af7c5_prof);

        
        $__internal_254edeb7514b4b63b72280e7a293944823720ad550b6a02c7a4f7ec0704811f0->leave($__internal_254edeb7514b4b63b72280e7a293944823720ad550b6a02c7a4f7ec0704811f0_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  235 => 67,  230 => 66,  221 => 65,  190 => 38,  181 => 37,  161 => 27,  151 => 19,  142 => 18,  132 => 69,  130 => 65,  124 => 62,  120 => 60,  117 => 37,  114 => 18,  105 => 17,  92 => 9,  83 => 8,  65 => 7,  53 => 70,  51 => 17,  45 => 13,  43 => 8,  39 => 7,  31 => 1,);
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
    <div class = \"container\">
    {% block body%}
      {% block nav%}
        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\"> 
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span> 
                </button>
                <a href=\"{{ path('/') }}\" class=\"navbar-brand\">KENYLAM GAME</a>
              </div>
              <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                            
                </ul>  
              </div>
            </div>
        </div>
      {% endblock%}
      {% block form %}
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h1 class=\"text-center\">Welcome</h1>
              </div>
               <div class=\"modal-body\">
                   <div class=\"form-group\">
                       <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\"/>
                   </div>

                   <div class=\"form-group\">
                       <input type=\"password\" class=\"form-control input-lg\" placeholder=\"Password\"/>
                   </div>

                   <div class=\"form-group\">
                       <input type=\"submit\" class=\"btn btn-block btn-lg btn-primary\" value=\"Login\"/>
                       <span class=\"pull-right\"><a href=\"#\">Register</a></span><span><a href=\"#\">Forgot Password</a></span>
                   </div>
               </div>
          </div>
       </div>
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
    {% endblock %}
    </div>
  </body>
</html>", "PWMyBundle::layout.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/layout.html.twig");
    }
}
