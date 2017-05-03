<?php

/* PWMyBundle:Default:accueil.html.twig */
class __TwigTemplate_b4e6d9a11c2b2ab9bb66d806bcb08f4c2e25faf01184723beda19276fbb668fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWMyBundle::layout.html.twig", "PWMyBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16382ec9faa2c66ec0700b58ee43b3f8ab1f918d02e94bd3ed0eab4a589995ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16382ec9faa2c66ec0700b58ee43b3f8ab1f918d02e94bd3ed0eab4a589995ba->enter($__internal_16382ec9faa2c66ec0700b58ee43b3f8ab1f918d02e94bd3ed0eab4a589995ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $__internal_9be78c643c2337f85441e0d714bef2a58a501e5bbf80b1526ca46ba9da169aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be78c643c2337f85441e0d714bef2a58a501e5bbf80b1526ca46ba9da169aea->enter($__internal_9be78c643c2337f85441e0d714bef2a58a501e5bbf80b1526ca46ba9da169aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16382ec9faa2c66ec0700b58ee43b3f8ab1f918d02e94bd3ed0eab4a589995ba->leave($__internal_16382ec9faa2c66ec0700b58ee43b3f8ab1f918d02e94bd3ed0eab4a589995ba_prof);

        
        $__internal_9be78c643c2337f85441e0d714bef2a58a501e5bbf80b1526ca46ba9da169aea->leave($__internal_9be78c643c2337f85441e0d714bef2a58a501e5bbf80b1526ca46ba9da169aea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c407208cc9231b05cbed818cda4877f23b47c743a0163fc83909fccef6ec96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c407208cc9231b05cbed818cda4877f23b47c743a0163fc83909fccef6ec96->enter($__internal_46c407208cc9231b05cbed818cda4877f23b47c743a0163fc83909fccef6ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ade34c5a8bc94608b6f5c982481a3bdae064b586f6ce59ae41e755750f5efdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade34c5a8bc94608b6f5c982481a3bdae064b586f6ce59ae41e755750f5efdc2->enter($__internal_ade34c5a8bc94608b6f5c982481a3bdae064b586f6ce59ae41e755750f5efdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t\tBienvenue
\t";
        
        $__internal_ade34c5a8bc94608b6f5c982481a3bdae064b586f6ce59ae41e755750f5efdc2->leave($__internal_ade34c5a8bc94608b6f5c982481a3bdae064b586f6ce59ae41e755750f5efdc2_prof);

        
        $__internal_46c407208cc9231b05cbed818cda4877f23b47c743a0163fc83909fccef6ec96->leave($__internal_46c407208cc9231b05cbed818cda4877f23b47c743a0163fc83909fccef6ec96_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_90aa04262ab4fd76a9f5a292eccfa0932682814d4b9bcc8a3a1c2fc6b3578d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90aa04262ab4fd76a9f5a292eccfa0932682814d4b9bcc8a3a1c2fc6b3578d58->enter($__internal_90aa04262ab4fd76a9f5a292eccfa0932682814d4b9bcc8a3a1c2fc6b3578d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_340455dd1cebfacc25e78a51580179d4aab2e8ece03abd637fd691674009a088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340455dd1cebfacc25e78a51580179d4aab2e8ece03abd637fd691674009a088->enter($__internal_340455dd1cebfacc25e78a51580179d4aab2e8ece03abd637fd691674009a088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t\t<div class = \"container\">
\t      <div class=\"wrapper\">
\t        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
\t        \t<div class=\"jumbotron\">
\t        \t\t<div class=\"col-md-8\">
\t        \t\t\t<h3 class=\"form-signin-heading\">Bienvenue sur le site de KENYLAM Game!</h3>
\t        \t\t</div> 
\t\t            <hr class=\"colorgraph\"><br>
\t\t            <div class=\"col-md-6\">
\t\t            \t<h3 class=\"form-signin-heading\">Connectez vous!</h3>
\t\t              \t";
        // line 17
        $this->displayBlock('login', $context, $blocks);
        // line 28
        echo "\t\t            </div>
\t\t            <div class=\"col-md-6\" >
\t\t            \t<h3 class=\"form-signin-heading\">Inscription! </h3>
\t\t            \t";
        // line 31
        $this->displayBlock('register', $context, $blocks);
        // line 39
        echo "\t\t            </div>     
\t\t        </div> 
\t        </form>     
\t      </div>
\t    </div>
\t";
        
        $__internal_340455dd1cebfacc25e78a51580179d4aab2e8ece03abd637fd691674009a088->leave($__internal_340455dd1cebfacc25e78a51580179d4aab2e8ece03abd637fd691674009a088_prof);

        
        $__internal_90aa04262ab4fd76a9f5a292eccfa0932682814d4b9bcc8a3a1c2fc6b3578d58->leave($__internal_90aa04262ab4fd76a9f5a292eccfa0932682814d4b9bcc8a3a1c2fc6b3578d58_prof);

    }

    // line 17
    public function block_login($context, array $blocks = array())
    {
        $__internal_8aa87875b913e1c6b6ac7d6aa59845ae05cb3803963d8739f8e5795fb85c1f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa87875b913e1c6b6ac7d6aa59845ae05cb3803963d8739f8e5795fb85c1f46->enter($__internal_8aa87875b913e1c6b6ac7d6aa59845ae05cb3803963d8739f8e5795fb85c1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_9a93840f852b37d28332e6b1e728f787615e6bd9c64cc9bec3751a11af2c1130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a93840f852b37d28332e6b1e728f787615e6bd9c64cc9bec3751a11af2c1130->enter($__internal_9a93840f852b37d28332e6b1e728f787615e6bd9c64cc9bec3751a11af2c1130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 18
        echo "\t\t\t                ";
        if (array_key_exists("erreurCo", $context)) {
            // line 19
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurCo"]) ? $context["erreurCo"] : $this->getContext($context, "erreurCo")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'widget');
        echo "
\t\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_end');
        echo "
\t\t\t\t\t\t\t";
        // line 24
        if (array_key_exists("erreurIns", $context)) {
            // line 25
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurIns"]) ? $context["erreurIns"] : $this->getContext($context, "erreurIns")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 26
        echo "  
\t\t              \t";
        
        $__internal_9a93840f852b37d28332e6b1e728f787615e6bd9c64cc9bec3751a11af2c1130->leave($__internal_9a93840f852b37d28332e6b1e728f787615e6bd9c64cc9bec3751a11af2c1130_prof);

        
        $__internal_8aa87875b913e1c6b6ac7d6aa59845ae05cb3803963d8739f8e5795fb85c1f46->leave($__internal_8aa87875b913e1c6b6ac7d6aa59845ae05cb3803963d8739f8e5795fb85c1f46_prof);

    }

    // line 31
    public function block_register($context, array $blocks = array())
    {
        $__internal_8a6541119b6b59a6215d16236bf9d694c6304aa1362a6a96d95b5faed9e735c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6541119b6b59a6215d16236bf9d694c6304aa1362a6a96d95b5faed9e735c8->enter($__internal_8a6541119b6b59a6215d16236bf9d694c6304aa1362a6a96d95b5faed9e735c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_3d95f0c9a98f2639b1a0af0542f1c166b982abdf8caa11cf8652248ec5d598ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d95f0c9a98f2639b1a0af0542f1c166b982abdf8caa11cf8652248ec5d598ad->enter($__internal_3d95f0c9a98f2639b1a0af0542f1c166b982abdf8caa11cf8652248ec5d598ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 32
        echo "\t\t\t                  ";
        if (array_key_exists("reussiIns", $context)) {
            // line 33
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["reussiIns"]) ? $context["reussiIns"] : $this->getContext($context, "reussiIns")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'widget');
        echo "
\t\t\t\t\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_end');
        echo "
\t\t\t            ";
        
        $__internal_3d95f0c9a98f2639b1a0af0542f1c166b982abdf8caa11cf8652248ec5d598ad->leave($__internal_3d95f0c9a98f2639b1a0af0542f1c166b982abdf8caa11cf8652248ec5d598ad_prof);

        
        $__internal_8a6541119b6b59a6215d16236bf9d694c6304aa1362a6a96d95b5faed9e735c8->leave($__internal_8a6541119b6b59a6215d16236bf9d694c6304aa1362a6a96d95b5faed9e735c8_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 37,  181 => 36,  176 => 35,  170 => 33,  167 => 32,  158 => 31,  147 => 26,  141 => 25,  139 => 24,  135 => 23,  131 => 22,  126 => 21,  120 => 19,  117 => 18,  108 => 17,  93 => 39,  91 => 31,  86 => 28,  84 => 17,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
\t\tBienvenue
\t{% endblock %}
\t{% block body %}
\t\t<div class = \"container\">
\t      <div class=\"wrapper\">
\t        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
\t        \t<div class=\"jumbotron\">
\t        \t\t<div class=\"col-md-8\">
\t        \t\t\t<h3 class=\"form-signin-heading\">Bienvenue sur le site de KENYLAM Game!</h3>
\t        \t\t</div> 
\t\t            <hr class=\"colorgraph\"><br>
\t\t            <div class=\"col-md-6\">
\t\t            \t<h3 class=\"form-signin-heading\">Connectez vous!</h3>
\t\t              \t{% block login%}
\t\t\t                {% if erreurCo is defined %}
\t\t\t\t\t\t\t\t{{ erreurCo }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{{form_start(connexion)}}
\t\t\t\t\t\t\t{{form_widget(connexion)}}
\t\t\t\t\t\t\t{{form_end(connexion)}}
\t\t\t\t\t\t\t{% if erreurIns is defined %}
\t\t\t\t\t\t\t\t{{ erreurIns }}
\t\t\t\t\t\t\t{% endif %}  
\t\t              \t{% endblock %}
\t\t            </div>
\t\t            <div class=\"col-md-6\" >
\t\t            \t<h3 class=\"form-signin-heading\">Inscription! </h3>
\t\t            \t{% block register%}
\t\t\t                  {% if reussiIns is defined %}
\t\t\t\t\t\t\t\t{{ reussiIns }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{{form_start(inscription)}}
\t\t\t\t\t\t\t{{form_widget(inscription)}}
\t\t\t\t\t\t\t{{form_end(inscription)}}
\t\t\t            {% endblock %}
\t\t            </div>     
\t\t        </div> 
\t        </form>     
\t      </div>
\t    </div>
\t{% endblock %}
\t", "PWMyBundle:Default:accueil.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/accueil.html.twig");
    }
}
