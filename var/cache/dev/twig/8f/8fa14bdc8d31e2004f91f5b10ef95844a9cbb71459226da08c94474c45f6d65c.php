<?php

/* PWMyBundle:Default:home.html.twig */
class __TwigTemplate_5e3fd35a394872d2124cce1797a85476662e61ed585fe2bea41c06e3e58e78f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWMyBundle::layout.html.twig", "PWMyBundle:Default:home.html.twig", 1);
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
        $__internal_254dc6e7021d00d311f713d067ddfbb754f59bad101fe75edf3c903e26c2bf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254dc6e7021d00d311f713d067ddfbb754f59bad101fe75edf3c903e26c2bf4d->enter($__internal_254dc6e7021d00d311f713d067ddfbb754f59bad101fe75edf3c903e26c2bf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $__internal_b39abbc1d98e7ee8c0fbf93bb49ca69366f660fcf737b74c61b0679c629814c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39abbc1d98e7ee8c0fbf93bb49ca69366f660fcf737b74c61b0679c629814c7->enter($__internal_b39abbc1d98e7ee8c0fbf93bb49ca69366f660fcf737b74c61b0679c629814c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254dc6e7021d00d311f713d067ddfbb754f59bad101fe75edf3c903e26c2bf4d->leave($__internal_254dc6e7021d00d311f713d067ddfbb754f59bad101fe75edf3c903e26c2bf4d_prof);

        
        $__internal_b39abbc1d98e7ee8c0fbf93bb49ca69366f660fcf737b74c61b0679c629814c7->leave($__internal_b39abbc1d98e7ee8c0fbf93bb49ca69366f660fcf737b74c61b0679c629814c7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_61925dd39bff02c56434a07a52f124fd279567f8c275492aec17e0df256bb241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61925dd39bff02c56434a07a52f124fd279567f8c275492aec17e0df256bb241->enter($__internal_61925dd39bff02c56434a07a52f124fd279567f8c275492aec17e0df256bb241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52037a8b11e33d80f2f4508cab8caf444262e7298d4f638c65079f39bd7d267e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52037a8b11e33d80f2f4508cab8caf444262e7298d4f638c65079f39bd7d267e->enter($__internal_52037a8b11e33d80f2f4508cab8caf444262e7298d4f638c65079f39bd7d267e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_52037a8b11e33d80f2f4508cab8caf444262e7298d4f638c65079f39bd7d267e->leave($__internal_52037a8b11e33d80f2f4508cab8caf444262e7298d4f638c65079f39bd7d267e_prof);

        
        $__internal_61925dd39bff02c56434a07a52f124fd279567f8c275492aec17e0df256bb241->leave($__internal_61925dd39bff02c56434a07a52f124fd279567f8c275492aec17e0df256bb241_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b29c7233c546bffc9ec0a327f3bd6fa0f2ad1661ef9de89e03c1c2decfe8e9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29c7233c546bffc9ec0a327f3bd6fa0f2ad1661ef9de89e03c1c2decfe8e9c5->enter($__internal_b29c7233c546bffc9ec0a327f3bd6fa0f2ad1661ef9de89e03c1c2decfe8e9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_b0d8b52b702882c4e10137af3ebf90268fbbef91a43fd07ae797b553b3b4a44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d8b52b702882c4e10137af3ebf90268fbbef91a43fd07ae797b553b3b4a44d->enter($__internal_b0d8b52b702882c4e10137af3ebf90268fbbef91a43fd07ae797b553b3b4a44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_b0d8b52b702882c4e10137af3ebf90268fbbef91a43fd07ae797b553b3b4a44d->leave($__internal_b0d8b52b702882c4e10137af3ebf90268fbbef91a43fd07ae797b553b3b4a44d_prof);

        
        $__internal_b29c7233c546bffc9ec0a327f3bd6fa0f2ad1661ef9de89e03c1c2decfe8e9c5->leave($__internal_b29c7233c546bffc9ec0a327f3bd6fa0f2ad1661ef9de89e03c1c2decfe8e9c5_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_0404820cc64a6fda9c05d8e0b0b6e7cb374fc6f99467202f5e3c093cffc3f3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0404820cc64a6fda9c05d8e0b0b6e7cb374fc6f99467202f5e3c093cffc3f3cc->enter($__internal_0404820cc64a6fda9c05d8e0b0b6e7cb374fc6f99467202f5e3c093cffc3f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1aa21bb558164b8b0646711fe6ca8bac5de523e9a628853b3949458b416c772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa21bb558164b8b0646711fe6ca8bac5de523e9a628853b3949458b416c772d->enter($__internal_1aa21bb558164b8b0646711fe6ca8bac5de523e9a628853b3949458b416c772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (array_key_exists("groupes", $context)) {
            // line 74
            echo "                <table>
                ";
            // line 75
            $context["all"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "all"), "method");
            // line 76
            echo "                <tr> 
                <th><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "desc", "all" =>             // line 78
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>
                    Experience
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "asc", "all" =>             // line 81
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                </th> 
                <th><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "desc", "all" =>             // line 84
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>
                Nom
                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "asc", "all" =>             // line 87
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                </th>
                <th><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "desc", "all" =>             // line 90
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>
                Argent
                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "asc", "all" =>             // line 93
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                </th>
                <th><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "desc", "all" =>             // line 96
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>
                Homme
                <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "asc", "all" =>             // line 99
(isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                </th>
                </tr>
            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                // line 103
                echo "                <tr>
                <th> ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 0, array(), "array"), "html", null, true);
                echo " </th>
                <th><a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                echo "\"> 
                    ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getNomGroupe", array(), "method"), "html", null, true);
                echo " </a></th>
                <th> ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getArgent", array(), "method"), "html", null, true);
                echo " </th> 
                <th> ";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 2, array(), "array"), "html", null, true);
                echo " </th>
                ";
                // line 109
                if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
                    // line 110
                    echo "                <th>
                <a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/supprimerGrp", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                Supprimer</a>
                </th>
                ";
                }
                // line 115
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </table>
            ";
        }
        // line 119
        echo "
            ";
        // line 120
        if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
            // line 121
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
            ";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 123
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
            ";
        }
        // line 125
        echo "        </div>
    </div>
    
";
        
        $__internal_1aa21bb558164b8b0646711fe6ca8bac5de523e9a628853b3949458b416c772d->leave($__internal_1aa21bb558164b8b0646711fe6ca8bac5de523e9a628853b3949458b416c772d_prof);

        
        $__internal_0404820cc64a6fda9c05d8e0b0b6e7cb374fc6f99467202f5e3c093cffc3f3cc->leave($__internal_0404820cc64a6fda9c05d8e0b0b6e7cb374fc6f99467202f5e3c093cffc3f3cc_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 125,  306 => 123,  302 => 122,  297 => 121,  295 => 120,  292 => 119,  288 => 117,  281 => 115,  274 => 111,  271 => 110,  269 => 109,  265 => 108,  261 => 107,  257 => 106,  253 => 105,  249 => 104,  246 => 103,  242 => 102,  236 => 99,  235 => 98,  230 => 96,  229 => 95,  224 => 93,  223 => 92,  218 => 90,  217 => 89,  212 => 87,  211 => 86,  206 => 84,  205 => 83,  200 => 81,  199 => 80,  194 => 78,  193 => 77,  190 => 76,  188 => 75,  185 => 74,  183 => 73,  178 => 71,  174 => 70,  170 => 69,  166 => 67,  157 => 66,  139 => 57,  119 => 40,  103 => 27,  94 => 21,  90 => 20,  86 => 19,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

            {% if groupes is defined %}
                <table>
                {% set all = (app.request.attributes.get('all') ) %}
                <tr> 
                <th><a href=\"{{ path('/group', 
                {'ordre':'exp','sens':'desc','all':all}) }}\">-</a>
                    Experience
                    <a href=\"{{ path('/group', 
                    {'ordre':'exp', 'sens':'asc','all':all}) }}\">+</a>
                </th> 
                <th><a href=\"{{ path('/group', 
                {'ordre':'nom', 'sens':'desc','all':all}) }}\">-</a>
                Nom
                <a href=\"{{ path('/group', 
                {'ordre':'nom', 'sens':'asc','all':all}) }}\">+</a>
                </th>
                <th><a href=\"{{ path('/group', 
                {'ordre':'argent', 'sens':'desc','all':all}) }}\">-</a>
                Argent
                <a href=\"{{ path('/group', 
                {'ordre':'argent', 'sens':'asc','all':all}) }}\">+</a>
                </th>
                <th><a href=\"{{ path('/group', 
                {'ordre':'nbh', 'sens':'desc','all':all}) }}\">-</a>
                Homme
                <a href=\"{{ path('/group', 
                {'ordre':'nbh', 'sens':'asc','all':all}) }}\">+</a>
                </th>
                </tr>
            {% for couple in groupes %}
                <tr>
                <th> {{ couple[0] }} </th>
                <th><a href=\"{{ path('/homme', {'idGroupe':couple[1].getId() }) }}\"> 
                    {{ couple[1].getNomGroupe()}} </a></th>
                <th> {{ couple[1].getArgent()}} </th> 
                <th> {{ couple[2]}} </th>
                {% if supprimable is defined and supprimable == true %}
                <th>
                <a href=\"{{ path('/supprimerGrp', {'idGroupe':couple[1].getId() }) }}\">
                Supprimer</a>
                </th>
                {% endif %}
                </tr>
            {% endfor %}
            </table>
            {% endif %}

            {% if supprimable is defined and supprimable == true %}
            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
            {% endif %}
        </div>
    </div>
    
{% endblock %}
", "PWMyBundle:Default:home.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/home.html.twig");
    }
}
