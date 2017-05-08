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
        $__internal_09d4fb75b3234bbe93f60c26a4fd6967abd84d9dc43ae7327c0d5eed54fe4c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d4fb75b3234bbe93f60c26a4fd6967abd84d9dc43ae7327c0d5eed54fe4c89->enter($__internal_09d4fb75b3234bbe93f60c26a4fd6967abd84d9dc43ae7327c0d5eed54fe4c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_9ddaddbf4a39aa7533694dbb0f308d7d7390bf5af76de3d97e9f4b83655a45bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddaddbf4a39aa7533694dbb0f308d7d7390bf5af76de3d97e9f4b83655a45bb->enter($__internal_9ddaddbf4a39aa7533694dbb0f308d7d7390bf5af76de3d97e9f4b83655a45bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

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
        
        $__internal_09d4fb75b3234bbe93f60c26a4fd6967abd84d9dc43ae7327c0d5eed54fe4c89->leave($__internal_09d4fb75b3234bbe93f60c26a4fd6967abd84d9dc43ae7327c0d5eed54fe4c89_prof);

        
        $__internal_9ddaddbf4a39aa7533694dbb0f308d7d7390bf5af76de3d97e9f4b83655a45bb->leave($__internal_9ddaddbf4a39aa7533694dbb0f308d7d7390bf5af76de3d97e9f4b83655a45bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_715382505a26ec295483b9cd7d37448a57fe5bb9c141917351c3816360428283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715382505a26ec295483b9cd7d37448a57fe5bb9c141917351c3816360428283->enter($__internal_715382505a26ec295483b9cd7d37448a57fe5bb9c141917351c3816360428283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c942aa21632a412a5f7946d82ace5de7eff7a11e8d6d5913e330652b23d2eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c942aa21632a412a5f7946d82ace5de7eff7a11e8d6d5913e330652b23d2eaf->enter($__internal_5c942aa21632a412a5f7946d82ace5de7eff7a11e8d6d5913e330652b23d2eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_5c942aa21632a412a5f7946d82ace5de7eff7a11e8d6d5913e330652b23d2eaf->leave($__internal_5c942aa21632a412a5f7946d82ace5de7eff7a11e8d6d5913e330652b23d2eaf_prof);

        
        $__internal_715382505a26ec295483b9cd7d37448a57fe5bb9c141917351c3816360428283->leave($__internal_715382505a26ec295483b9cd7d37448a57fe5bb9c141917351c3816360428283_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2983a20b797a3add3741d6e7e212f8e0ae96969be96a86d671fefd8e4a4d0a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2983a20b797a3add3741d6e7e212f8e0ae96969be96a86d671fefd8e4a4d0a9d->enter($__internal_2983a20b797a3add3741d6e7e212f8e0ae96969be96a86d671fefd8e4a4d0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e77bc26b0f6843e6ea00049b29de3926452037d4a648a884989acf199ae95a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e77bc26b0f6843e6ea00049b29de3926452037d4a648a884989acf199ae95a5->enter($__internal_4e77bc26b0f6843e6ea00049b29de3926452037d4a648a884989acf199ae95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
    ";
        
        $__internal_4e77bc26b0f6843e6ea00049b29de3926452037d4a648a884989acf199ae95a5->leave($__internal_4e77bc26b0f6843e6ea00049b29de3926452037d4a648a884989acf199ae95a5_prof);

        
        $__internal_2983a20b797a3add3741d6e7e212f8e0ae96969be96a86d671fefd8e4a4d0a9d->leave($__internal_2983a20b797a3add3741d6e7e212f8e0ae96969be96a86d671fefd8e4a4d0a9d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6f60efab7f4868213db978039fca10ffa6cfe69baf265383f8d68eada6a57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6f60efab7f4868213db978039fca10ffa6cfe69baf265383f8d68eada6a57e->enter($__internal_1a6f60efab7f4868213db978039fca10ffa6cfe69baf265383f8d68eada6a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cc4e6b599ec70843bbd3303b2d6ac45fa3818e78061ce1f8d55748b28981c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc4e6b599ec70843bbd3303b2d6ac45fa3818e78061ce1f8d55748b28981c02->enter($__internal_0cc4e6b599ec70843bbd3303b2d6ac45fa3818e78061ce1f8d55748b28981c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0cc4e6b599ec70843bbd3303b2d6ac45fa3818e78061ce1f8d55748b28981c02->leave($__internal_0cc4e6b599ec70843bbd3303b2d6ac45fa3818e78061ce1f8d55748b28981c02_prof);

        
        $__internal_1a6f60efab7f4868213db978039fca10ffa6cfe69baf265383f8d68eada6a57e->leave($__internal_1a6f60efab7f4868213db978039fca10ffa6cfe69baf265383f8d68eada6a57e_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_8669ce1ab8465a2f84160726f320b67f120428b5be93eb622c8e7fe819743ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8669ce1ab8465a2f84160726f320b67f120428b5be93eb622c8e7fe819743ebf->enter($__internal_8669ce1ab8465a2f84160726f320b67f120428b5be93eb622c8e7fe819743ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_dedc48126bba1d0735dde3cc47a672dd71c299ae1a72957409f1f490fd582670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedc48126bba1d0735dde3cc47a672dd71c299ae1a72957409f1f490fd582670->enter($__internal_dedc48126bba1d0735dde3cc47a672dd71c299ae1a72957409f1f490fd582670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                  <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/about");
        echo "\" class=\"btn btn-info\" role=\"button\">About</a></li>          
                </ul>  
              </div>
            </div>
        </div>
      ";
        
        $__internal_dedc48126bba1d0735dde3cc47a672dd71c299ae1a72957409f1f490fd582670->leave($__internal_dedc48126bba1d0735dde3cc47a672dd71c299ae1a72957409f1f490fd582670_prof);

        
        $__internal_8669ce1ab8465a2f84160726f320b67f120428b5be93eb622c8e7fe819743ebf->leave($__internal_8669ce1ab8465a2f84160726f320b67f120428b5be93eb622c8e7fe819743ebf_prof);

    }

    // line 37
    public function block_form($context, array $blocks = array())
    {
        $__internal_b5a20e8b0b321cdb3c35f22deb0ccd292d0b7743737902e12b8425ad61b9e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a20e8b0b321cdb3c35f22deb0ccd292d0b7743737902e12b8425ad61b9e9d9->enter($__internal_b5a20e8b0b321cdb3c35f22deb0ccd292d0b7743737902e12b8425ad61b9e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f727c9730ee58bec9b4391d34bb8cba301f2a327af8b53fb31e5edb83805b054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f727c9730ee58bec9b4391d34bb8cba301f2a327af8b53fb31e5edb83805b054->enter($__internal_f727c9730ee58bec9b4391d34bb8cba301f2a327af8b53fb31e5edb83805b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_f727c9730ee58bec9b4391d34bb8cba301f2a327af8b53fb31e5edb83805b054->leave($__internal_f727c9730ee58bec9b4391d34bb8cba301f2a327af8b53fb31e5edb83805b054_prof);

        
        $__internal_b5a20e8b0b321cdb3c35f22deb0ccd292d0b7743737902e12b8425ad61b9e9d9->leave($__internal_b5a20e8b0b321cdb3c35f22deb0ccd292d0b7743737902e12b8425ad61b9e9d9_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77f55276919fa658467cff20ec35b99d3cf1bbb4cf8fed8edd1dade8efa03406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f55276919fa658467cff20ec35b99d3cf1bbb4cf8fed8edd1dade8efa03406->enter($__internal_77f55276919fa658467cff20ec35b99d3cf1bbb4cf8fed8edd1dade8efa03406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e9833b6f4adfc006e6531759567a2302e51612936901f2f8302691a5357f048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9833b6f4adfc006e6531759567a2302e51612936901f2f8302691a5357f048->enter($__internal_8e9833b6f4adfc006e6531759567a2302e51612936901f2f8302691a5357f048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_8e9833b6f4adfc006e6531759567a2302e51612936901f2f8302691a5357f048->leave($__internal_8e9833b6f4adfc006e6531759567a2302e51612936901f2f8302691a5357f048_prof);

        
        $__internal_77f55276919fa658467cff20ec35b99d3cf1bbb4cf8fed8edd1dade8efa03406->leave($__internal_77f55276919fa658467cff20ec35b99d3cf1bbb4cf8fed8edd1dade8efa03406_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 67,  233 => 66,  224 => 65,  193 => 38,  184 => 37,  168 => 31,  161 => 27,  151 => 19,  142 => 18,  132 => 69,  130 => 65,  124 => 62,  120 => 60,  117 => 37,  114 => 18,  105 => 17,  92 => 9,  83 => 8,  65 => 7,  53 => 70,  51 => 17,  45 => 13,  43 => 8,  39 => 7,  31 => 1,);
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
                  <li><a href=\"{{ path('/about') }}\" class=\"btn btn-info\" role=\"button\">About</a></li>          
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
