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
            'form' => array($this, 'block_form'),
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
        $__internal_867e44f7910924eb3b713a4b0fa602430ea99b60b53d93360c7944ba96010fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867e44f7910924eb3b713a4b0fa602430ea99b60b53d93360c7944ba96010fa8->enter($__internal_867e44f7910924eb3b713a4b0fa602430ea99b60b53d93360c7944ba96010fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $__internal_9ef3fe9cec8d5e7fd3ac10b3b6927a47bd6e7679827098702614a0ddd7820d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef3fe9cec8d5e7fd3ac10b3b6927a47bd6e7679827098702614a0ddd7820d37->enter($__internal_9ef3fe9cec8d5e7fd3ac10b3b6927a47bd6e7679827098702614a0ddd7820d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_867e44f7910924eb3b713a4b0fa602430ea99b60b53d93360c7944ba96010fa8->leave($__internal_867e44f7910924eb3b713a4b0fa602430ea99b60b53d93360c7944ba96010fa8_prof);

        
        $__internal_9ef3fe9cec8d5e7fd3ac10b3b6927a47bd6e7679827098702614a0ddd7820d37->leave($__internal_9ef3fe9cec8d5e7fd3ac10b3b6927a47bd6e7679827098702614a0ddd7820d37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63776519265aa90dffe48531ab21f7ae3731ab88d4b97f35330e616909de8033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63776519265aa90dffe48531ab21f7ae3731ab88d4b97f35330e616909de8033->enter($__internal_63776519265aa90dffe48531ab21f7ae3731ab88d4b97f35330e616909de8033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89a1e3a22a1c483aa9aec1d9286e38271e03d2b692b6b640bc6e6c76db410197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a1e3a22a1c483aa9aec1d9286e38271e03d2b692b6b640bc6e6c76db410197->enter($__internal_89a1e3a22a1c483aa9aec1d9286e38271e03d2b692b6b640bc6e6c76db410197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t\tBienvenue
\t";
        
        $__internal_89a1e3a22a1c483aa9aec1d9286e38271e03d2b692b6b640bc6e6c76db410197->leave($__internal_89a1e3a22a1c483aa9aec1d9286e38271e03d2b692b6b640bc6e6c76db410197_prof);

        
        $__internal_63776519265aa90dffe48531ab21f7ae3731ab88d4b97f35330e616909de8033->leave($__internal_63776519265aa90dffe48531ab21f7ae3731ab88d4b97f35330e616909de8033_prof);

    }

    // line 6
    public function block_form($context, array $blocks = array())
    {
        $__internal_aea060916ddf5924e7601ad3dc04df4c14fee6a1938ceffe78b8163eb2ce31e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea060916ddf5924e7601ad3dc04df4c14fee6a1938ceffe78b8163eb2ce31e5->enter($__internal_aea060916ddf5924e7601ad3dc04df4c14fee6a1938ceffe78b8163eb2ce31e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f89c2fd552d0cc210324f970d411ef8e940089b5fe989e2421ee173250c5701c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89c2fd552d0cc210324f970d411ef8e940089b5fe989e2421ee173250c5701c->enter($__internal_f89c2fd552d0cc210324f970d411ef8e940089b5fe989e2421ee173250c5701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 7
        echo "\t<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"text-center\">Bienvenue</h1>
        </div>
         <div class=\"modal-body\">
             <div class=\"form-group\">
                 ";
        // line 14
        $this->displayBlock('login', $context, $blocks);
        // line 35
        echo "         </div>
         <div class=\"modal-body\">
             <div class=\"form-group\">
             \t<h1 class=\"text-center\">Inscription</h1>
                 ";
        // line 39
        $this->displayBlock('register', $context, $blocks);
        // line 61
        echo "           
                  </div>
    </div>
 </div>
</div>
";
        
        $__internal_f89c2fd552d0cc210324f970d411ef8e940089b5fe989e2421ee173250c5701c->leave($__internal_f89c2fd552d0cc210324f970d411ef8e940089b5fe989e2421ee173250c5701c_prof);

        
        $__internal_aea060916ddf5924e7601ad3dc04df4c14fee6a1938ceffe78b8163eb2ce31e5->leave($__internal_aea060916ddf5924e7601ad3dc04df4c14fee6a1938ceffe78b8163eb2ce31e5_prof);

    }

    // line 14
    public function block_login($context, array $blocks = array())
    {
        $__internal_9985b6221a094c5aeea25c38b759c8c08333302555d68dbe17a07e41ce699038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9985b6221a094c5aeea25c38b759c8c08333302555d68dbe17a07e41ce699038->enter($__internal_9985b6221a094c5aeea25c38b759c8c08333302555d68dbe17a07e41ce699038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_5ff22c2cb8b8117ff2a6a3032d5f6b1fc177f112e9d58727472a9fc254f6f7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff22c2cb8b8117ff2a6a3032d5f6b1fc177f112e9d58727472a9fc254f6f7a6->enter($__internal_5ff22c2cb8b8117ff2a6a3032d5f6b1fc177f112e9d58727472a9fc254f6f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 15
        echo "\t\t\t                ";
        if (array_key_exists("erreurCo", $context)) {
            // line 16
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurCo"]) ? $context["erreurCo"] : $this->getContext($context, "erreurCo")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), "login", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
             </div>

             <div class=\"form-group\">
                 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), "mdp", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
             </div>

             <div class=\"form-group\">
                 ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-block btn-lg btn-primary")));
        echo "
       
             </div>
\t\t\t\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["connexion"]) ? $context["connexion"] : $this->getContext($context, "connexion")), 'form_end');
        echo "
\t\t\t\t\t\t\t";
        // line 31
        if (array_key_exists("erreurIns", $context)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["erreurIns"]) ? $context["erreurIns"] : $this->getContext($context, "erreurIns")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 33
        echo "  
\t\t        ";
        
        $__internal_5ff22c2cb8b8117ff2a6a3032d5f6b1fc177f112e9d58727472a9fc254f6f7a6->leave($__internal_5ff22c2cb8b8117ff2a6a3032d5f6b1fc177f112e9d58727472a9fc254f6f7a6_prof);

        
        $__internal_9985b6221a094c5aeea25c38b759c8c08333302555d68dbe17a07e41ce699038->leave($__internal_9985b6221a094c5aeea25c38b759c8c08333302555d68dbe17a07e41ce699038_prof);

    }

    // line 39
    public function block_register($context, array $blocks = array())
    {
        $__internal_11f49195a8f2d2a6e7542ce5bab7d76a565d50a525538711adf54ffaeab548c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f49195a8f2d2a6e7542ce5bab7d76a565d50a525538711adf54ffaeab548c0->enter($__internal_11f49195a8f2d2a6e7542ce5bab7d76a565d50a525538711adf54ffaeab548c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_441e216314804757424749733b820eddd5d4ba25d46149516781aff05ea88408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441e216314804757424749733b820eddd5d4ba25d46149516781aff05ea88408->enter($__internal_441e216314804757424749733b820eddd5d4ba25d46149516781aff05ea88408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 40
        echo "                        ";
        if (array_key_exists("reussiIns", $context)) {
            // line 41
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["reussiIns"]) ? $context["reussiIns"] : $this->getContext($context, "reussiIns")), "html", null, true);
            echo "
                      ";
        }
        // line 43
        echo "                      ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_start');
        echo "
                      <div class=\"form-group\">
                                 ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "pseudo", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                 ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "login", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                 ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "mdp", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                 ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "avatar", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
                            </div>
                            <div class=\"form-group\">
                                 ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-block btn-lg btn-primary")));
        echo "
                             </div>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'widget');
        echo "
                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), 'form_end');
        echo "
                      ";
        
        $__internal_441e216314804757424749733b820eddd5d4ba25d46149516781aff05ea88408->leave($__internal_441e216314804757424749733b820eddd5d4ba25d46149516781aff05ea88408_prof);

        
        $__internal_11f49195a8f2d2a6e7542ce5bab7d76a565d50a525538711adf54ffaeab548c0->leave($__internal_11f49195a8f2d2a6e7542ce5bab7d76a565d50a525538711adf54ffaeab548c0_prof);

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
        return array (  229 => 60,  225 => 59,  220 => 57,  214 => 54,  208 => 51,  202 => 48,  196 => 45,  190 => 43,  184 => 41,  181 => 40,  172 => 39,  161 => 33,  155 => 32,  153 => 31,  149 => 30,  143 => 27,  136 => 23,  129 => 19,  124 => 18,  118 => 16,  115 => 15,  106 => 14,  91 => 61,  89 => 39,  83 => 35,  81 => 14,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
\t{% block form %}
\t<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"text-center\">Bienvenue</h1>
        </div>
         <div class=\"modal-body\">
             <div class=\"form-group\">
                 {% block login%}
\t\t\t                {% if erreurCo is defined %}
\t\t\t\t\t\t\t\t{{ erreurCo }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{{form_start(connexion)}}
\t\t\t\t\t\t\t{{ form_widget(connexion.login, {'attr': {'class':'form-control input-lg'}}) }}
             </div>

             <div class=\"form-group\">
                 {{ form_widget(connexion.mdp, {'attr': {'class':'form-control input-lg'}}) }}
             </div>

             <div class=\"form-group\">
                 {{ form_widget(connexion.save, {'attr': {'class':'btn btn-block btn-lg btn-primary'}}) }}
       
             </div>
\t\t\t\t\t\t\t{{form_end(connexion)}}
\t\t\t\t\t\t\t{% if erreurIns is defined %}
\t\t\t\t\t\t\t\t{{ erreurIns }}
\t\t\t\t\t\t\t{% endif %}  
\t\t        {% endblock %}
         </div>
         <div class=\"modal-body\">
             <div class=\"form-group\">
             \t<h1 class=\"text-center\">Inscription</h1>
                 {% block register%}
                        {% if reussiIns is defined %}
                        {{ reussiIns }}
                      {% endif %}
                      {{form_start(inscription)}}
                      <div class=\"form-group\">
                                 {{ form_widget(inscription.pseudo, {'attr': {'class':'form-control input-lg'}}) }}
                            </div>
                            <div class=\"form-group\">
                                 {{ form_widget(inscription.login, {'attr': {'class':'form-control input-lg'}}) }}
                            </div>
                            <div class=\"form-group\">
                                 {{ form_widget(inscription.mdp, {'attr': {'class':'form-control input-lg'}}) }}
                            </div>
                            <div class=\"form-group\">
                                 {{ form_widget(inscription.avatar, {'attr': {'class':'form-control input-lg'}}) }}
                            </div>
                            <div class=\"form-group\">
                                 {{ form_widget(inscription.save, {'attr': {'class':'btn btn-block btn-lg btn-primary'}}) }}
                             </div>
                        {{form_widget(inscription)}}
                        {{form_end(inscription)}}
                      {% endblock %}           
                  </div>
    </div>
 </div>
</div>
{% endblock %}
\t", "PWMyBundle:Default:accueil.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/accueil.html.twig");
    }
}
