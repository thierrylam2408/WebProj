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
        $__internal_b0a17da4153a3ea62b38d95de770b65694922bb6699fe9a7cbf88883befb886a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a17da4153a3ea62b38d95de770b65694922bb6699fe9a7cbf88883befb886a->enter($__internal_b0a17da4153a3ea62b38d95de770b65694922bb6699fe9a7cbf88883befb886a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $__internal_c12b2878900938904f016b6a4e7ac0c8bfdc9a0d811326c64625f806f8697984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12b2878900938904f016b6a4e7ac0c8bfdc9a0d811326c64625f806f8697984->enter($__internal_c12b2878900938904f016b6a4e7ac0c8bfdc9a0d811326c64625f806f8697984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a17da4153a3ea62b38d95de770b65694922bb6699fe9a7cbf88883befb886a->leave($__internal_b0a17da4153a3ea62b38d95de770b65694922bb6699fe9a7cbf88883befb886a_prof);

        
        $__internal_c12b2878900938904f016b6a4e7ac0c8bfdc9a0d811326c64625f806f8697984->leave($__internal_c12b2878900938904f016b6a4e7ac0c8bfdc9a0d811326c64625f806f8697984_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81ef6f7d8aace11763af7dce60976a54c701b0de9a9fdab1373c95979c81aaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ef6f7d8aace11763af7dce60976a54c701b0de9a9fdab1373c95979c81aaa9->enter($__internal_81ef6f7d8aace11763af7dce60976a54c701b0de9a9fdab1373c95979c81aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4604920c1f6418ab3ca2aa9c095fb6892331af4a9b29cf69d7a24872e6f14874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4604920c1f6418ab3ca2aa9c095fb6892331af4a9b29cf69d7a24872e6f14874->enter($__internal_4604920c1f6418ab3ca2aa9c095fb6892331af4a9b29cf69d7a24872e6f14874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t\tBienvenue
\t";
        
        $__internal_4604920c1f6418ab3ca2aa9c095fb6892331af4a9b29cf69d7a24872e6f14874->leave($__internal_4604920c1f6418ab3ca2aa9c095fb6892331af4a9b29cf69d7a24872e6f14874_prof);

        
        $__internal_81ef6f7d8aace11763af7dce60976a54c701b0de9a9fdab1373c95979c81aaa9->leave($__internal_81ef6f7d8aace11763af7dce60976a54c701b0de9a9fdab1373c95979c81aaa9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_32864e9300f1d130e805df053c7c2ab5ce4a8ddba2f0239b47a65675e1e7f8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32864e9300f1d130e805df053c7c2ab5ce4a8ddba2f0239b47a65675e1e7f8b7->enter($__internal_32864e9300f1d130e805df053c7c2ab5ce4a8ddba2f0239b47a65675e1e7f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9faa24a40d7927a433594cc2bf851cb45d76e93a19f91e35aa809bde6365ee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faa24a40d7927a433594cc2bf851cb45d76e93a19f91e35aa809bde6365ee93->enter($__internal_9faa24a40d7927a433594cc2bf851cb45d76e93a19f91e35aa809bde6365ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9faa24a40d7927a433594cc2bf851cb45d76e93a19f91e35aa809bde6365ee93->leave($__internal_9faa24a40d7927a433594cc2bf851cb45d76e93a19f91e35aa809bde6365ee93_prof);

        
        $__internal_32864e9300f1d130e805df053c7c2ab5ce4a8ddba2f0239b47a65675e1e7f8b7->leave($__internal_32864e9300f1d130e805df053c7c2ab5ce4a8ddba2f0239b47a65675e1e7f8b7_prof);

    }

    // line 13
    public function block_login($context, array $blocks = array())
    {
        $__internal_14c65467ba1a4c066a6dfa2999d02a1b694dd253461b62da3f7346b7b6c34dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c65467ba1a4c066a6dfa2999d02a1b694dd253461b62da3f7346b7b6c34dd0->enter($__internal_14c65467ba1a4c066a6dfa2999d02a1b694dd253461b62da3f7346b7b6c34dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_ff777db7e779d5d2050fe8c0794d0b92e4c734dfada560be7200c3b50abba8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff777db7e779d5d2050fe8c0794d0b92e4c734dfada560be7200c3b50abba8be->enter($__internal_ff777db7e779d5d2050fe8c0794d0b92e4c734dfada560be7200c3b50abba8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_ff777db7e779d5d2050fe8c0794d0b92e4c734dfada560be7200c3b50abba8be->leave($__internal_ff777db7e779d5d2050fe8c0794d0b92e4c734dfada560be7200c3b50abba8be_prof);

        
        $__internal_14c65467ba1a4c066a6dfa2999d02a1b694dd253461b62da3f7346b7b6c34dd0->leave($__internal_14c65467ba1a4c066a6dfa2999d02a1b694dd253461b62da3f7346b7b6c34dd0_prof);

    }

    // line 32
    public function block_register($context, array $blocks = array())
    {
        $__internal_126252fdca63497f06ff89039b1fa9eecfd6e5f878829bdf0139a8e51525f5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126252fdca63497f06ff89039b1fa9eecfd6e5f878829bdf0139a8e51525f5ce->enter($__internal_126252fdca63497f06ff89039b1fa9eecfd6e5f878829bdf0139a8e51525f5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_1c90105febab1d85c33b0f688bebba1c7bdfbd0da7d4a743bab6fed51ee5b801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c90105febab1d85c33b0f688bebba1c7bdfbd0da7d4a743bab6fed51ee5b801->enter($__internal_1c90105febab1d85c33b0f688bebba1c7bdfbd0da7d4a743bab6fed51ee5b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

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
        
        $__internal_1c90105febab1d85c33b0f688bebba1c7bdfbd0da7d4a743bab6fed51ee5b801->leave($__internal_1c90105febab1d85c33b0f688bebba1c7bdfbd0da7d4a743bab6fed51ee5b801_prof);

        
        $__internal_126252fdca63497f06ff89039b1fa9eecfd6e5f878829bdf0139a8e51525f5ce->leave($__internal_126252fdca63497f06ff89039b1fa9eecfd6e5f878829bdf0139a8e51525f5ce_prof);

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
