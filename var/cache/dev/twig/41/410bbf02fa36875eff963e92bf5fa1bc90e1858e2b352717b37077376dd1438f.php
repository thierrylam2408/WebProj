<?php

/* PWMyBundle:Default:play.html.twig */
class __TwigTemplate_4da8067b2f7326d47a3149dbb6c9142f9ac3018c6107929bfbcf6c135cda1550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWMyBundle::layout.html.twig", "PWMyBundle:Default:play.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8024963c4582578fce2cf1fce2fed5cf1b43292ef41c1d9e479282f46c5466ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8024963c4582578fce2cf1fce2fed5cf1b43292ef41c1d9e479282f46c5466ad->enter($__internal_8024963c4582578fce2cf1fce2fed5cf1b43292ef41c1d9e479282f46c5466ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $__internal_67abfe7c8812d2ab39c33f29c343b07898055649ce67c76fa33bde7efc340c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67abfe7c8812d2ab39c33f29c343b07898055649ce67c76fa33bde7efc340c68->enter($__internal_67abfe7c8812d2ab39c33f29c343b07898055649ce67c76fa33bde7efc340c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8024963c4582578fce2cf1fce2fed5cf1b43292ef41c1d9e479282f46c5466ad->leave($__internal_8024963c4582578fce2cf1fce2fed5cf1b43292ef41c1d9e479282f46c5466ad_prof);

        
        $__internal_67abfe7c8812d2ab39c33f29c343b07898055649ce67c76fa33bde7efc340c68->leave($__internal_67abfe7c8812d2ab39c33f29c343b07898055649ce67c76fa33bde7efc340c68_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e31e941b346635b6b49d7a0e8cc0d389c4793b4d3d1d3c7339ca1e13b6588cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31e941b346635b6b49d7a0e8cc0d389c4793b4d3d1d3c7339ca1e13b6588cb5->enter($__internal_e31e941b346635b6b49d7a0e8cc0d389c4793b4d3d1d3c7339ca1e13b6588cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a20dca56b0e65e0cc703ffb64cec9d78dc5d6d9928fa2d421035d15cd231fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a20dca56b0e65e0cc703ffb64cec9d78dc5d6d9928fa2d421035d15cd231fb->enter($__internal_71a20dca56b0e65e0cc703ffb64cec9d78dc5d6d9928fa2d421035d15cd231fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_71a20dca56b0e65e0cc703ffb64cec9d78dc5d6d9928fa2d421035d15cd231fb->leave($__internal_71a20dca56b0e65e0cc703ffb64cec9d78dc5d6d9928fa2d421035d15cd231fb_prof);

        
        $__internal_e31e941b346635b6b49d7a0e8cc0d389c4793b4d3d1d3c7339ca1e13b6588cb5->leave($__internal_e31e941b346635b6b49d7a0e8cc0d389c4793b4d3d1d3c7339ca1e13b6588cb5_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_89cf64bbe1a504a385ee85aba19097de165726e681975ff316842ce5eda3c6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cf64bbe1a504a385ee85aba19097de165726e681975ff316842ce5eda3c6a9->enter($__internal_89cf64bbe1a504a385ee85aba19097de165726e681975ff316842ce5eda3c6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_b79e08f2e71f421f4230df163366b3227c7b85997ca10d1d720e57de4e103bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79e08f2e71f421f4230df163366b3227c7b85997ca10d1d720e57de4e103bd9->enter($__internal_b79e08f2e71f421f4230df163366b3227c7b85997ca10d1d720e57de4e103bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "  <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
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
                <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group");
        echo "\">Mes groupes</a></li>
                <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group");
        echo "\">Mes hommes</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("all" => "true"));
        echo "\">Tous les groupes</a></li>            
             </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        <strong>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo")), "html", null, true);
        echo "</strong>
                        <span class=\"glyphicon glyphicon-chevron-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-login\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4\">
                                        <p class=\"text-center\">
                                            <span class=\"glyphicon glyphicon-user icon-size\"></span>
                                        </p>
                                    </div>
                                    <div class=\"col-lg-8\">
                                        <p class=\"text-left\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo")), "html", null, true);
        echo "</strong></p>
                                        <p class=\"text-left\">
                                            <a href=\"#\" class=\"btn btn-primary btn-block btn-sm\">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"divider navbar-login-session-bg\"></li>
                         <li><a href=\"#\">Account Settings <span class=\"glyphicon glyphicon-cog pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">User stats <span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Messages <span class=\"badge pull-right\"> 42 </span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Favourites Snippets <span class=\"glyphicon glyphicon-heart pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Sign Out <span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_b79e08f2e71f421f4230df163366b3227c7b85997ca10d1d720e57de4e103bd9->leave($__internal_b79e08f2e71f421f4230df163366b3227c7b85997ca10d1d720e57de4e103bd9_prof);

        
        $__internal_89cf64bbe1a504a385ee85aba19097de165726e681975ff316842ce5eda3c6a9->leave($__internal_89cf64bbe1a504a385ee85aba19097de165726e681975ff316842ce5eda3c6a9_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_12194a98bdd8d43c0a4f1295467c219e4c364d6c6bf15557401c650c6bc6c6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12194a98bdd8d43c0a4f1295467c219e4c364d6c6bf15557401c650c6bc6c6e0->enter($__internal_12194a98bdd8d43c0a4f1295467c219e4c364d6c6bf15557401c650c6bc6c6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07167d09d3f21f5d2fbcead01cfd46304bbc3e2320607ec146a686aee395cad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07167d09d3f21f5d2fbcead01cfd46304bbc3e2320607ec146a686aee395cad7->enter($__internal_07167d09d3f21f5d2fbcead01cfd46304bbc3e2320607ec146a686aee395cad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "    <div class = \"container\">
        <div class=\"jumbotron\">
            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'widget');
        echo "
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "

        ";
        // line 73
        if (array_key_exists("hommes", $context)) {
            // line 74
            echo "            <table>
            <tr> 
            ";
            // line 76
            $context["id"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "idGroupe"), "method");
            // line 77
            echo "            <th><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 78
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Niveau
                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 81
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th> 
            <th><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 84
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Nom
                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 87
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            <th><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 90
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Sexe
                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 93
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            </tr>
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hommes"]) ? $context["hommes"] : $this->getContext($context, "hommes")));
            foreach ($context['_seq'] as $context["_key"] => $context["homme"]) {
                // line 97
                echo "                <tr>
                <th> ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getNiveau", array(), "method"), "html", null, true);
                echo " </th>
                <th> ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getNom", array(), "method"), "html", null, true);
                echo "</th>
                <th> ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getSexe", array(), "method"), "html", null, true);
                echo " </th> 
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </table>
        ";
        }
        // line 105
        echo "        </div>
    </div>
    
";
        
        $__internal_07167d09d3f21f5d2fbcead01cfd46304bbc3e2320607ec146a686aee395cad7->leave($__internal_07167d09d3f21f5d2fbcead01cfd46304bbc3e2320607ec146a686aee395cad7_prof);

        
        $__internal_12194a98bdd8d43c0a4f1295467c219e4c364d6c6bf15557401c650c6bc6c6e0->leave($__internal_12194a98bdd8d43c0a4f1295467c219e4c364d6c6bf15557401c650c6bc6c6e0_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle:Default:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 105,  253 => 103,  244 => 100,  240 => 99,  236 => 98,  233 => 97,  229 => 96,  223 => 93,  222 => 92,  217 => 90,  216 => 89,  211 => 87,  210 => 86,  205 => 84,  204 => 83,  199 => 81,  198 => 80,  193 => 78,  191 => 77,  189 => 76,  185 => 74,  183 => 73,  178 => 71,  174 => 70,  170 => 69,  166 => 67,  157 => 66,  139 => 57,  119 => 40,  103 => 27,  94 => 21,  90 => 20,  86 => 19,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{% block title %}
    Home
{% endblock %}
{% block nav %}
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
                <li class=\"active\"><a href=\"{{ path('/group') }}\">Mes groupes</a></li>
                <li class=\"active\"><a href=\"{{ path('/group') }}\">Mes hommes</a></li>
                <li><a href=\"{{ path('/group', {'all':'true'}) }}\">Tous les groupes</a></li>            
             </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        <strong>{{pseudo}}</strong>
                        <span class=\"glyphicon glyphicon-chevron-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"navbar-login\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4\">
                                        <p class=\"text-center\">
                                            <span class=\"glyphicon glyphicon-user icon-size\"></span>
                                        </p>
                                    </div>
                                    <div class=\"col-lg-8\">
                                        <p class=\"text-left\"><strong>{{pseudo}}</strong></p>
                                        <p class=\"text-left\">
                                            <a href=\"#\" class=\"btn btn-primary btn-block btn-sm\">Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"divider navbar-login-session-bg\"></li>
                         <li><a href=\"#\">Account Settings <span class=\"glyphicon glyphicon-cog pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">User stats <span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Messages <span class=\"badge pull-right\"> 42 </span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Favourites Snippets <span class=\"glyphicon glyphicon-heart pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"{{ url('/deconnexion') }}\">Sign Out <span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}

{% block body %}
    <div class = \"container\">
        <div class=\"jumbotron\">
            {{form_start(rechercheForm)}}
        {{form_widget(rechercheForm)}}
        {{form_end(rechercheForm)}}

        {% if hommes is defined %}
            <table>
            <tr> 
            {% set id = (app.request.attributes.get('idGroupe') ) %}
            <th><a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'niveau','sens':'desc'})}}\">-</a>
            Niveau
                <a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'niveau','sens':'asc'})}}\">+</a>
            </th> 
            <th><a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'nom','sens':'desc'})}}\">-</a>
            Nom
                <a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'nom','sens':'asc'})}}\">+</a>
            </th>
            <th><a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'sexe','sens':'desc'})}}\">-</a>
            Sexe
                <a href=\"{{path('/homme',
            {'idGroupe':id,'ordre':'sexe','sens':'asc'})}}\">+</a>
            </th>
            </tr>
            {% for homme in hommes %}
                <tr>
                <th> {{ homme.getNiveau() }} </th>
                <th> {{ homme.getNom() }}</th>
                <th> {{ homme.getSexe() }} </th> 
                </tr>
            {% endfor %}
            </table>
        {% endif %}
        </div>
    </div>
    
{% endblock %}

        ", "PWMyBundle:Default:play.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/play.html.twig");
    }
}
