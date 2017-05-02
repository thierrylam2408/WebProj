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
            'login' => array($this, 'block_login'),
            'register' => array($this, 'block_register'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1dcdcdfe1f12a6ff7957e51b182ca013be1bc5f58fe4933da23ef7fcec082f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dcdcdfe1f12a6ff7957e51b182ca013be1bc5f58fe4933da23ef7fcec082f4->enter($__internal_b1dcdcdfe1f12a6ff7957e51b182ca013be1bc5f58fe4933da23ef7fcec082f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

        $__internal_f9e07e09ef4cb91ab99c136c2d8160d4d6e65ae416cbbd0b63bd1e6f28116c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e07e09ef4cb91ab99c136c2d8160d4d6e65ae416cbbd0b63bd1e6f28116c2b->enter($__internal_f9e07e09ef4cb91ab99c136c2d8160d4d6e65ae416cbbd0b63bd1e6f28116c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle::layout.html.twig"));

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
        // line 11
        echo "    
  </head>
  <body>
    ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    <footer>
      <p>The sky's the limit © ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>
    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "  </body>
</html>";
        
        $__internal_b1dcdcdfe1f12a6ff7957e51b182ca013be1bc5f58fe4933da23ef7fcec082f4->leave($__internal_b1dcdcdfe1f12a6ff7957e51b182ca013be1bc5f58fe4933da23ef7fcec082f4_prof);

        
        $__internal_f9e07e09ef4cb91ab99c136c2d8160d4d6e65ae416cbbd0b63bd1e6f28116c2b->leave($__internal_f9e07e09ef4cb91ab99c136c2d8160d4d6e65ae416cbbd0b63bd1e6f28116c2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_780589234f50b6895792a32ecd33cdf4e5a384a0ceab51f0f63a546daf2a3961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780589234f50b6895792a32ecd33cdf4e5a384a0ceab51f0f63a546daf2a3961->enter($__internal_780589234f50b6895792a32ecd33cdf4e5a384a0ceab51f0f63a546daf2a3961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bfa3d9227112a759f6e23b31b3bfb447ed9e541032d23c2a27258acf4f2170c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfa3d9227112a759f6e23b31b3bfb447ed9e541032d23c2a27258acf4f2170c->enter($__internal_6bfa3d9227112a759f6e23b31b3bfb447ed9e541032d23c2a27258acf4f2170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_6bfa3d9227112a759f6e23b31b3bfb447ed9e541032d23c2a27258acf4f2170c->leave($__internal_6bfa3d9227112a759f6e23b31b3bfb447ed9e541032d23c2a27258acf4f2170c_prof);

        
        $__internal_780589234f50b6895792a32ecd33cdf4e5a384a0ceab51f0f63a546daf2a3961->leave($__internal_780589234f50b6895792a32ecd33cdf4e5a384a0ceab51f0f63a546daf2a3961_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5419bdb2978493029fb6ab430b5e2b7ac9e82180331c3c73a536d4b268db703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5419bdb2978493029fb6ab430b5e2b7ac9e82180331c3c73a536d4b268db703->enter($__internal_a5419bdb2978493029fb6ab430b5e2b7ac9e82180331c3c73a536d4b268db703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_024d1ec98ceecf381f6649b8c9f34b6d8154f08018f3c8835537faa91937cf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024d1ec98ceecf381f6649b8c9f34b6d8154f08018f3c8835537faa91937cf28->enter($__internal_024d1ec98ceecf381f6649b8c9f34b6d8154f08018f3c8835537faa91937cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_024d1ec98ceecf381f6649b8c9f34b6d8154f08018f3c8835537faa91937cf28->leave($__internal_024d1ec98ceecf381f6649b8c9f34b6d8154f08018f3c8835537faa91937cf28_prof);

        
        $__internal_a5419bdb2978493029fb6ab430b5e2b7ac9e82180331c3c73a536d4b268db703->leave($__internal_a5419bdb2978493029fb6ab430b5e2b7ac9e82180331c3c73a536d4b268db703_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f00ca74901dc461b7c1691cdd13223f7769f1abb2d9ea0781c1192d64b27d94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00ca74901dc461b7c1691cdd13223f7769f1abb2d9ea0781c1192d64b27d94d->enter($__internal_f00ca74901dc461b7c1691cdd13223f7769f1abb2d9ea0781c1192d64b27d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_8ac06238d6e423dced2b268976f8491796b6d378f05c55d104a926fba29eb2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac06238d6e423dced2b268976f8491796b6d378f05c55d104a926fba29eb2b8->enter($__internal_8ac06238d6e423dced2b268976f8491796b6d378f05c55d104a926fba29eb2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "      <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">KENYLAM Game</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Link</a></li>
            <li><a href=\"#\">Link</a></li>
          </ul>
          <button class=\"btn btn-danger navbar-btn\">Button</button>
        </div>
      </nav>
    ";
        
        $__internal_8ac06238d6e423dced2b268976f8491796b6d378f05c55d104a926fba29eb2b8->leave($__internal_8ac06238d6e423dced2b268976f8491796b6d378f05c55d104a926fba29eb2b8_prof);

        
        $__internal_f00ca74901dc461b7c1691cdd13223f7769f1abb2d9ea0781c1192d64b27d94d->leave($__internal_f00ca74901dc461b7c1691cdd13223f7769f1abb2d9ea0781c1192d64b27d94d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_896a1e6c6115b3e6b7ad43fffc320ef5a6136f8197f2d2c9ece3f8baf2d53b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896a1e6c6115b3e6b7ad43fffc320ef5a6136f8197f2d2c9ece3f8baf2d53b8d->enter($__internal_896a1e6c6115b3e6b7ad43fffc320ef5a6136f8197f2d2c9ece3f8baf2d53b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1f648f2f490f4fcd7671576cfb751862344b1897111c24f81a1c7380159a581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f648f2f490f4fcd7671576cfb751862344b1897111c24f81a1c7380159a581->enter($__internal_e1f648f2f490f4fcd7671576cfb751862344b1897111c24f81a1c7380159a581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "    <div class = \"container\">
      <div class=\"wrapper\">
        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
            <h3 class=\"form-signin-heading\">Bienvenue! Connectez vous s'il vous plait!</h3>
            <hr class=\"colorgraph\"><br>
              ";
        // line 35
        $this->displayBlock('login', $context, $blocks);
        // line 37
        echo "      
        </form>     
      </div>
    </div>
    <div class = \"container\">
      <div class=\"wrapper\">
        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
            <h3 class=\"form-signin-heading\">Inscription! </h3>
            <hr class=\"colorgraph\"><br>
              ";
        // line 46
        $this->displayBlock('register', $context, $blocks);
        // line 48
        echo "      
        </form>     
      </div>
    </div> 
    ";
        
        $__internal_e1f648f2f490f4fcd7671576cfb751862344b1897111c24f81a1c7380159a581->leave($__internal_e1f648f2f490f4fcd7671576cfb751862344b1897111c24f81a1c7380159a581_prof);

        
        $__internal_896a1e6c6115b3e6b7ad43fffc320ef5a6136f8197f2d2c9ece3f8baf2d53b8d->leave($__internal_896a1e6c6115b3e6b7ad43fffc320ef5a6136f8197f2d2c9ece3f8baf2d53b8d_prof);

    }

    // line 35
    public function block_login($context, array $blocks = array())
    {
        $__internal_ee94698eafab92ba85931e760ac55cb03cfb91c8dbd7a9779b093b78d42edda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee94698eafab92ba85931e760ac55cb03cfb91c8dbd7a9779b093b78d42edda6->enter($__internal_ee94698eafab92ba85931e760ac55cb03cfb91c8dbd7a9779b093b78d42edda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_a2fc8d49f2d7bf582ea45f85ddb025041656b1bca69bb7ef85da10e19d4a7ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fc8d49f2d7bf582ea45f85ddb025041656b1bca69bb7ef85da10e19d4a7ded->enter($__internal_a2fc8d49f2d7bf582ea45f85ddb025041656b1bca69bb7ef85da10e19d4a7ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 36
        echo "                  
              ";
        
        $__internal_a2fc8d49f2d7bf582ea45f85ddb025041656b1bca69bb7ef85da10e19d4a7ded->leave($__internal_a2fc8d49f2d7bf582ea45f85ddb025041656b1bca69bb7ef85da10e19d4a7ded_prof);

        
        $__internal_ee94698eafab92ba85931e760ac55cb03cfb91c8dbd7a9779b093b78d42edda6->leave($__internal_ee94698eafab92ba85931e760ac55cb03cfb91c8dbd7a9779b093b78d42edda6_prof);

    }

    // line 46
    public function block_register($context, array $blocks = array())
    {
        $__internal_c4ac148e7d20c32cee18d7010d45f8c6bb38364f048356191b07ab1969461976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ac148e7d20c32cee18d7010d45f8c6bb38364f048356191b07ab1969461976->enter($__internal_c4ac148e7d20c32cee18d7010d45f8c6bb38364f048356191b07ab1969461976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_57e75e4ccc7ecc203022e6dfa4a9dc9f553894f23f6cd33959135bcc6c088ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e75e4ccc7ecc203022e6dfa4a9dc9f553894f23f6cd33959135bcc6c088ebe->enter($__internal_57e75e4ccc7ecc203022e6dfa4a9dc9f553894f23f6cd33959135bcc6c088ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 47
        echo "                  
              ";
        
        $__internal_57e75e4ccc7ecc203022e6dfa4a9dc9f553894f23f6cd33959135bcc6c088ebe->leave($__internal_57e75e4ccc7ecc203022e6dfa4a9dc9f553894f23f6cd33959135bcc6c088ebe_prof);

        
        $__internal_c4ac148e7d20c32cee18d7010d45f8c6bb38364f048356191b07ab1969461976->leave($__internal_c4ac148e7d20c32cee18d7010d45f8c6bb38364f048356191b07ab1969461976_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68f179f58c8e5dfefc4a8569f1b5c12bb43b1c949e897d644d7335ab44934023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f179f58c8e5dfefc4a8569f1b5c12bb43b1c949e897d644d7335ab44934023->enter($__internal_68f179f58c8e5dfefc4a8569f1b5c12bb43b1c949e897d644d7335ab44934023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aad43d485231ddd8f4d602e06018c5218e8dd9f6b31ceda6321d15400398c2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad43d485231ddd8f4d602e06018c5218e8dd9f6b31ceda6321d15400398c2f2->enter($__internal_aad43d485231ddd8f4d602e06018c5218e8dd9f6b31ceda6321d15400398c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.jss"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_aad43d485231ddd8f4d602e06018c5218e8dd9f6b31ceda6321d15400398c2f2->leave($__internal_aad43d485231ddd8f4d602e06018c5218e8dd9f6b31ceda6321d15400398c2f2_prof);

        
        $__internal_68f179f58c8e5dfefc4a8569f1b5c12bb43b1c949e897d644d7335ab44934023->leave($__internal_68f179f58c8e5dfefc4a8569f1b5c12bb43b1c949e897d644d7335ab44934023_prof);

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
        return array (  249 => 59,  244 => 58,  235 => 57,  224 => 47,  215 => 46,  204 => 36,  195 => 35,  181 => 48,  179 => 46,  168 => 37,  166 => 35,  159 => 30,  150 => 29,  127 => 15,  118 => 14,  105 => 9,  96 => 8,  78 => 7,  67 => 61,  65 => 57,  59 => 54,  56 => 53,  53 => 29,  51 => 14,  46 => 11,  44 => 8,  40 => 7,  32 => 1,);
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
        <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
    
  </head>
  <body>
    {% block nav%}
      <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">KENYLAM Game</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Link</a></li>
            <li><a href=\"#\">Link</a></li>
          </ul>
          <button class=\"btn btn-danger navbar-btn\">Button</button>
        </div>
      </nav>
    {% endblock%}
    {% block body %}
    <div class = \"container\">
      <div class=\"wrapper\">
        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
            <h3 class=\"form-signin-heading\">Bienvenue! Connectez vous s'il vous plait!</h3>
            <hr class=\"colorgraph\"><br>
              {% block login%}
                  
              {% endblock %}      
        </form>     
      </div>
    </div>
    <div class = \"container\">
      <div class=\"wrapper\">
        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
            <h3 class=\"form-signin-heading\">Inscription! </h3>
            <hr class=\"colorgraph\"><br>
              {% block register%}
                  
              {% endblock %}      
        </form>     
      </div>
    </div> 
    {% endblock %}
    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>
    {% block javascripts %}
        <script src=\"{{ asset('bootstrap/js/jquery.min.jss') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.jss') }}\"></script>
    {% endblock %}
  </body>
</html>", "PWMyBundle::layout.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/layout.html.twig");
    }
}
