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
        $__internal_d4f3889f47325d5e1fb2d2603a4e60d964ae248464171059d02331f358cc953f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f3889f47325d5e1fb2d2603a4e60d964ae248464171059d02331f358cc953f->enter($__internal_d4f3889f47325d5e1fb2d2603a4e60d964ae248464171059d02331f358cc953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $__internal_d53272f420651ee7552dbe47cca278a032ac0b7c7c9e205efbba4477f85e06e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53272f420651ee7552dbe47cca278a032ac0b7c7c9e205efbba4477f85e06e1->enter($__internal_d53272f420651ee7552dbe47cca278a032ac0b7c7c9e205efbba4477f85e06e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f3889f47325d5e1fb2d2603a4e60d964ae248464171059d02331f358cc953f->leave($__internal_d4f3889f47325d5e1fb2d2603a4e60d964ae248464171059d02331f358cc953f_prof);

        
        $__internal_d53272f420651ee7552dbe47cca278a032ac0b7c7c9e205efbba4477f85e06e1->leave($__internal_d53272f420651ee7552dbe47cca278a032ac0b7c7c9e205efbba4477f85e06e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c41d4b9a8cbb20740f7a72488b9c51d387e8c8e7218b4625e8a176da7b1c796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c41d4b9a8cbb20740f7a72488b9c51d387e8c8e7218b4625e8a176da7b1c796->enter($__internal_0c41d4b9a8cbb20740f7a72488b9c51d387e8c8e7218b4625e8a176da7b1c796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2c9a1bf226b29ed69848f5492bc007280d4ac3a2db49c0ee58b00acce5d3f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c9a1bf226b29ed69848f5492bc007280d4ac3a2db49c0ee58b00acce5d3f60->enter($__internal_f2c9a1bf226b29ed69848f5492bc007280d4ac3a2db49c0ee58b00acce5d3f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t\tBienvenue
\t";
        
        $__internal_f2c9a1bf226b29ed69848f5492bc007280d4ac3a2db49c0ee58b00acce5d3f60->leave($__internal_f2c9a1bf226b29ed69848f5492bc007280d4ac3a2db49c0ee58b00acce5d3f60_prof);

        
        $__internal_0c41d4b9a8cbb20740f7a72488b9c51d387e8c8e7218b4625e8a176da7b1c796->leave($__internal_0c41d4b9a8cbb20740f7a72488b9c51d387e8c8e7218b4625e8a176da7b1c796_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_dafb06f98323515a9105edaa518e3a85787e3247541bece3229fb971510b3d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafb06f98323515a9105edaa518e3a85787e3247541bece3229fb971510b3d26->enter($__internal_dafb06f98323515a9105edaa518e3a85787e3247541bece3229fb971510b3d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_589dd9b7304d84acac89cadce3cc2b1a7a3adbdbee0f50b63b7a92ac20669bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589dd9b7304d84acac89cadce3cc2b1a7a3adbdbee0f50b63b7a92ac20669bc5->enter($__internal_589dd9b7304d84acac89cadce3cc2b1a7a3adbdbee0f50b63b7a92ac20669bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t\t<div class = \"container\">
\t      <div class=\"wrapper\">
\t        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">
\t            <h2 class=\"form-signin-heading\">Bienvenue sur le site de KENYLAM Game!</h2>
\t            <h3 class=\"form-signin-heading\">Connectez vous s'il vous plait!</h3>
\t            <hr class=\"colorgraph\"><br>
\t              ";
        // line 13
        $this->displayBlock('login', $context, $blocks);
        // line 23
        echo "      
\t        </form>     
\t      </div>
\t    </div>
\t    <div class = \"container\">
\t      <div class=\"wrapper\">
\t        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
\t            <h3 class=\"form-signin-heading\">Inscription! </h3>
\t            <hr class=\"colorgraph\"><br>
\t              ";
        // line 32
        $this->displayBlock('register', $context, $blocks);
        // line 39
        echo "      
\t        </form>     
\t      </div>
\t    </div> 
\t";
        
        $__internal_589dd9b7304d84acac89cadce3cc2b1a7a3adbdbee0f50b63b7a92ac20669bc5->leave($__internal_589dd9b7304d84acac89cadce3cc2b1a7a3adbdbee0f50b63b7a92ac20669bc5_prof);

        
        $__internal_dafb06f98323515a9105edaa518e3a85787e3247541bece3229fb971510b3d26->leave($__internal_dafb06f98323515a9105edaa518e3a85787e3247541bece3229fb971510b3d26_prof);

    }

    // line 13
    public function block_login($context, array $blocks = array())
    {
        $__internal_6f059a5a542e2c2c5bb23c99bf81fe059bfcfc136c0665d5f6a137d05863d9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f059a5a542e2c2c5bb23c99bf81fe059bfcfc136c0665d5f6a137d05863d9e2->enter($__internal_6f059a5a542e2c2c5bb23c99bf81fe059bfcfc136c0665d5f6a137d05863d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_3eaaf28d20d39239f26c8bed3e85bae61b5184ee34e6f662f48df84bcb0db4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaaf28d20d39239f26c8bed3e85bae61b5184ee34e6f662f48df84bcb0db4b6->enter($__internal_3eaaf28d20d39239f26c8bed3e85bae61b5184ee34e6f662f48df84bcb0db4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 14
        echo "\t                ";
        if (array_key_exists("erreurCo", $context)) {
            // line 15
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurCo"]) ? $context["erreurCo"] : $this->getContext($context, "erreurCo")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'widget');
        echo "
\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_end');
        echo "
\t\t\t\t\t";
        // line 20
        if (array_key_exists("erreurIns", $context)) {
            // line 21
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurIns"]) ? $context["erreurIns"] : $this->getContext($context, "erreurIns")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 22
        echo "  
\t              ";
        
        $__internal_3eaaf28d20d39239f26c8bed3e85bae61b5184ee34e6f662f48df84bcb0db4b6->leave($__internal_3eaaf28d20d39239f26c8bed3e85bae61b5184ee34e6f662f48df84bcb0db4b6_prof);

        
        $__internal_6f059a5a542e2c2c5bb23c99bf81fe059bfcfc136c0665d5f6a137d05863d9e2->leave($__internal_6f059a5a542e2c2c5bb23c99bf81fe059bfcfc136c0665d5f6a137d05863d9e2_prof);

    }

    // line 32
    public function block_register($context, array $blocks = array())
    {
        $__internal_701271a45e2d73cc360cc60d034933463afd6ee45225a5b60406e370eef5a9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701271a45e2d73cc360cc60d034933463afd6ee45225a5b60406e370eef5a9a7->enter($__internal_701271a45e2d73cc360cc60d034933463afd6ee45225a5b60406e370eef5a9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_95523d84ed899c2f1211d37f96f608e7953043c5ec640177518a29086726ff57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95523d84ed899c2f1211d37f96f608e7953043c5ec640177518a29086726ff57->enter($__internal_95523d84ed899c2f1211d37f96f608e7953043c5ec640177518a29086726ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 33
        echo "\t                  ";
        if (array_key_exists("reussiIns", $context)) {
            // line 34
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["reussiIns"]) ? $context["reussiIns"] : $this->getContext($context, "reussiIns")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'widget');
        echo "
\t\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_end');
        echo "
\t              ";
        
        $__internal_95523d84ed899c2f1211d37f96f608e7953043c5ec640177518a29086726ff57->leave($__internal_95523d84ed899c2f1211d37f96f608e7953043c5ec640177518a29086726ff57_prof);

        
        $__internal_701271a45e2d73cc360cc60d034933463afd6ee45225a5b60406e370eef5a9a7->leave($__internal_701271a45e2d73cc360cc60d034933463afd6ee45225a5b60406e370eef5a9a7_prof);

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
        return array (  186 => 38,  182 => 37,  177 => 36,  171 => 34,  168 => 33,  159 => 32,  148 => 22,  142 => 21,  140 => 20,  136 => 19,  132 => 18,  127 => 17,  121 => 15,  118 => 14,  109 => 13,  95 => 39,  93 => 32,  82 => 23,  80 => 13,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
\t            <h2 class=\"form-signin-heading\">Bienvenue sur le site de KENYLAM Game!</h2>
\t            <h3 class=\"form-signin-heading\">Connectez vous s'il vous plait!</h3>
\t            <hr class=\"colorgraph\"><br>
\t              {% block login%}
\t                {% if erreurCo is defined %}
\t\t\t\t\t\t{{ erreurCo }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{form_start(connexion)}}
\t\t\t\t\t{{form_widget(connexion)}}
\t\t\t\t\t{{form_end(connexion)}}
\t\t\t\t\t{% if erreurIns is defined %}
\t\t\t\t\t\t{{ erreurIns }}
\t\t\t\t\t{% endif %}  
\t              {% endblock %}      
\t        </form>     
\t      </div>
\t    </div>
\t    <div class = \"container\">
\t      <div class=\"wrapper\">
\t        <form action=\"\" method=\"post\" name=\"Login_Form\" class=\"form-signin\">       
\t            <h3 class=\"form-signin-heading\">Inscription! </h3>
\t            <hr class=\"colorgraph\"><br>
\t              {% block register%}
\t                  {% if reussiIns is defined %}
\t\t\t\t\t\t{{ reussiIns }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{form_start(inscription)}}
\t\t\t\t\t{{form_widget(inscription)}}
\t\t\t\t\t{{form_end(inscription)}}
\t              {% endblock %}      
\t        </form>     
\t      </div>
\t    </div> 
\t{% endblock %}
\t", "PWMyBundle:Default:accueil.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/accueil.html.twig");
    }
}
