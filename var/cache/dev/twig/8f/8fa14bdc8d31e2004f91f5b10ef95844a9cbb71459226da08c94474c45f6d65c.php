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
        $__internal_5ab193ddffd1dd016bbf3190e1514ac45b6ce618b597c273db90bae2a0c59034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab193ddffd1dd016bbf3190e1514ac45b6ce618b597c273db90bae2a0c59034->enter($__internal_5ab193ddffd1dd016bbf3190e1514ac45b6ce618b597c273db90bae2a0c59034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $__internal_8778e94a24c5b779b7800e01cad5c8a06f373037e5a45b0ecee4ab7226613dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8778e94a24c5b779b7800e01cad5c8a06f373037e5a45b0ecee4ab7226613dd4->enter($__internal_8778e94a24c5b779b7800e01cad5c8a06f373037e5a45b0ecee4ab7226613dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab193ddffd1dd016bbf3190e1514ac45b6ce618b597c273db90bae2a0c59034->leave($__internal_5ab193ddffd1dd016bbf3190e1514ac45b6ce618b597c273db90bae2a0c59034_prof);

        
        $__internal_8778e94a24c5b779b7800e01cad5c8a06f373037e5a45b0ecee4ab7226613dd4->leave($__internal_8778e94a24c5b779b7800e01cad5c8a06f373037e5a45b0ecee4ab7226613dd4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee953ff0eb0f4c3c934a828dab65b1eea2c0ffef22aafcb11bc933dfdaf6b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee953ff0eb0f4c3c934a828dab65b1eea2c0ffef22aafcb11bc933dfdaf6b82->enter($__internal_bee953ff0eb0f4c3c934a828dab65b1eea2c0ffef22aafcb11bc933dfdaf6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72177a02dca5d90785232371054ef32345be63d4f2ef27e07ebe45b016e5153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72177a02dca5d90785232371054ef32345be63d4f2ef27e07ebe45b016e5153e->enter($__internal_72177a02dca5d90785232371054ef32345be63d4f2ef27e07ebe45b016e5153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_72177a02dca5d90785232371054ef32345be63d4f2ef27e07ebe45b016e5153e->leave($__internal_72177a02dca5d90785232371054ef32345be63d4f2ef27e07ebe45b016e5153e_prof);

        
        $__internal_bee953ff0eb0f4c3c934a828dab65b1eea2c0ffef22aafcb11bc933dfdaf6b82->leave($__internal_bee953ff0eb0f4c3c934a828dab65b1eea2c0ffef22aafcb11bc933dfdaf6b82_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0c79f27978e0a24fa49ea1407b99b7cd90e15b41557de5053054d33f5bcc7ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c79f27978e0a24fa49ea1407b99b7cd90e15b41557de5053054d33f5bcc7ff0->enter($__internal_0c79f27978e0a24fa49ea1407b99b7cd90e15b41557de5053054d33f5bcc7ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_749a3da19ecf9d0db22635c4500f40996f963e5d57a9f140c81ed3b1cf1636f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749a3da19ecf9d0db22635c4500f40996f963e5d57a9f140c81ed3b1cf1636f7->enter($__internal_749a3da19ecf9d0db22635c4500f40996f963e5d57a9f140c81ed3b1cf1636f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("all" => "true"));
        echo "\">Tous les groupes</a></li>            
             </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        <strong>";
        // line 26
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
        // line 39
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
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Sign Out <span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_749a3da19ecf9d0db22635c4500f40996f963e5d57a9f140c81ed3b1cf1636f7->leave($__internal_749a3da19ecf9d0db22635c4500f40996f963e5d57a9f140c81ed3b1cf1636f7_prof);

        
        $__internal_0c79f27978e0a24fa49ea1407b99b7cd90e15b41557de5053054d33f5bcc7ff0->leave($__internal_0c79f27978e0a24fa49ea1407b99b7cd90e15b41557de5053054d33f5bcc7ff0_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac9e1182567d43f95ff5d185edf520cfb174790723adf9b8409ed63b3f76af66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9e1182567d43f95ff5d185edf520cfb174790723adf9b8409ed63b3f76af66->enter($__internal_ac9e1182567d43f95ff5d185edf520cfb174790723adf9b8409ed63b3f76af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cd94f472c58f625bcbc992b09a754b309be6ed566ed64f5fc7106be84c8c7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd94f472c58f625bcbc992b09a754b309be6ed566ed64f5fc7106be84c8c7e1->enter($__internal_9cd94f472c58f625bcbc992b09a754b309be6ed566ed64f5fc7106be84c8c7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 66
        echo "    <div class = \"container\">
        <div class=\"jumbotron\">
            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'widget');
        echo "
            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "

            ";
        // line 72
        if (array_key_exists("mesGroupes", $context)) {
            // line 73
            echo "                <table>
                <tr> 
                <th><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
                    Experience
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                </th> 
                <th><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
                Nom
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                </th>
                <th><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
                Argent
                <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                </th>
                <th><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
                Homme
                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                </th>
                </tr>
                ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesGroupes"]) ? $context["mesGroupes"] : $this->getContext($context, "mesGroupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                // line 93
                echo "                    <tr>
                    <th> ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 0, array(), "array"), "html", null, true);
                echo " </th>
                    <th> ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getNomGroupe", array(), "method"), "html", null, true);
                echo " </th>
                    <th> ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getArgent", array(), "method"), "html", null, true);
                echo " </th> 
                    <th> ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 2, array(), "array"), "html", null, true);
                echo " </th>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                </table>
            ";
        }
        // line 102
        echo "
            ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    
";
        
        $__internal_9cd94f472c58f625bcbc992b09a754b309be6ed566ed64f5fc7106be84c8c7e1->leave($__internal_9cd94f472c58f625bcbc992b09a754b309be6ed566ed64f5fc7106be84c8c7e1_prof);

        
        $__internal_ac9e1182567d43f95ff5d185edf520cfb174790723adf9b8409ed63b3f76af66->leave($__internal_ac9e1182567d43f95ff5d185edf520cfb174790723adf9b8409ed63b3f76af66_prof);

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
        return array (  269 => 105,  265 => 104,  261 => 103,  258 => 102,  254 => 100,  245 => 97,  241 => 96,  237 => 95,  233 => 94,  230 => 93,  226 => 92,  220 => 89,  215 => 87,  210 => 85,  205 => 83,  200 => 81,  195 => 79,  190 => 77,  185 => 75,  181 => 73,  179 => 72,  174 => 70,  170 => 69,  166 => 68,  162 => 66,  153 => 65,  135 => 56,  115 => 39,  99 => 26,  90 => 20,  86 => 19,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

            {% if mesGroupes is defined %}
                <table>
                <tr> 
                <th><a href=\"{{ path('/group', {'ordre':'exp', 'sens':'desc'}) }}\">-</a>
                    Experience
                    <a href=\"{{ path('/group', {'ordre':'exp', 'sens':'asc'}) }}\">+</a>
                </th> 
                <th><a href=\"{{ path('/group', {'ordre':'nom', 'sens':'desc'}) }}\">-</a>
                Nom
                <a href=\"{{ path('/group', {'ordre':'nom', 'sens':'asc'}) }}\">+</a>
                </th>
                <th><a href=\"{{ path('/group', {'ordre':'argent', 'sens':'desc'}) }}\">-</a>
                Argent
                <a href=\"{{ path('/group', {'ordre':'argent', 'sens':'asc'}) }}\">+</a>
                </th>
                <th><a href=\"{{ path('/group', {'ordre':'nbh', 'sens':'desc'}) }}\">-</a>
                Homme
                <a href=\"{{ path('/group', {'ordre':'nbh', 'sens':'asc'}) }}\">+</a>
                </th>
                </tr>
                {% for couple in mesGroupes %}
                    <tr>
                    <th> {{ couple[0] }} </th>
                    <th> {{ couple[1].getNomGroupe()}} </th>
                    <th> {{ couple[1].getArgent()}} </th> 
                    <th> {{ couple[2]}} </th>
                    </tr>
                {% endfor %}
                </table>
            {% endif %}

            {{form_start(form)}}
            {{form_widget(form)}}
            {{form_end(form)}}
        </div>
    </div>
    
{% endblock %}
", "PWMyBundle:Default:home.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/home.html.twig");
    }
}
