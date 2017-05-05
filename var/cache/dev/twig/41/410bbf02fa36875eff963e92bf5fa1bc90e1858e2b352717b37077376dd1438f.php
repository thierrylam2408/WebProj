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
        $__internal_1ed4e222b3691ca086166472a7ecb0324646a8d9110c6ccbc06aace9c5ae509e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed4e222b3691ca086166472a7ecb0324646a8d9110c6ccbc06aace9c5ae509e->enter($__internal_1ed4e222b3691ca086166472a7ecb0324646a8d9110c6ccbc06aace9c5ae509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $__internal_83e5b7bb5bbe8cc62bb72eb27373487d982c8a88df1fae89c85cf38412e874f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e5b7bb5bbe8cc62bb72eb27373487d982c8a88df1fae89c85cf38412e874f5->enter($__internal_83e5b7bb5bbe8cc62bb72eb27373487d982c8a88df1fae89c85cf38412e874f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed4e222b3691ca086166472a7ecb0324646a8d9110c6ccbc06aace9c5ae509e->leave($__internal_1ed4e222b3691ca086166472a7ecb0324646a8d9110c6ccbc06aace9c5ae509e_prof);

        
        $__internal_83e5b7bb5bbe8cc62bb72eb27373487d982c8a88df1fae89c85cf38412e874f5->leave($__internal_83e5b7bb5bbe8cc62bb72eb27373487d982c8a88df1fae89c85cf38412e874f5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3ecd1ea99c272704808561a97c66544f8e22b2570fbe9b0f6a66df0a6dc8e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ecd1ea99c272704808561a97c66544f8e22b2570fbe9b0f6a66df0a6dc8e4a->enter($__internal_e3ecd1ea99c272704808561a97c66544f8e22b2570fbe9b0f6a66df0a6dc8e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f5df398c323696a825b081f81955133b30e78d8eec062131945d92b4fcb54d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5df398c323696a825b081f81955133b30e78d8eec062131945d92b4fcb54d9->enter($__internal_0f5df398c323696a825b081f81955133b30e78d8eec062131945d92b4fcb54d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_0f5df398c323696a825b081f81955133b30e78d8eec062131945d92b4fcb54d9->leave($__internal_0f5df398c323696a825b081f81955133b30e78d8eec062131945d92b4fcb54d9_prof);

        
        $__internal_e3ecd1ea99c272704808561a97c66544f8e22b2570fbe9b0f6a66df0a6dc8e4a->leave($__internal_e3ecd1ea99c272704808561a97c66544f8e22b2570fbe9b0f6a66df0a6dc8e4a_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_822bad513b13489f55baaad2254d8550dafdf118e7d14b2612b2ffbce5a2dadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822bad513b13489f55baaad2254d8550dafdf118e7d14b2612b2ffbce5a2dadf->enter($__internal_822bad513b13489f55baaad2254d8550dafdf118e7d14b2612b2ffbce5a2dadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d5bd8243d45c55592efbbfbfb90129b1fa592fb524fa027e811fb4fb2e6f84ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bd8243d45c55592efbbfbfb90129b1fa592fb524fa027e811fb4fb2e6f84ef->enter($__internal_d5bd8243d45c55592efbbfbfb90129b1fa592fb524fa027e811fb4fb2e6f84ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_d5bd8243d45c55592efbbfbfb90129b1fa592fb524fa027e811fb4fb2e6f84ef->leave($__internal_d5bd8243d45c55592efbbfbfb90129b1fa592fb524fa027e811fb4fb2e6f84ef_prof);

        
        $__internal_822bad513b13489f55baaad2254d8550dafdf118e7d14b2612b2ffbce5a2dadf->leave($__internal_822bad513b13489f55baaad2254d8550dafdf118e7d14b2612b2ffbce5a2dadf_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_21de48113775f164ec90f2f750b2d8ba32e36fe4127114e6669c803999a87b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21de48113775f164ec90f2f750b2d8ba32e36fe4127114e6669c803999a87b48->enter($__internal_21de48113775f164ec90f2f750b2d8ba32e36fe4127114e6669c803999a87b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bbd56ec658c472e3044bc104dd9616a12bd30f4184a23a9b4a667ee9576b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbd56ec658c472e3044bc104dd9616a12bd30f4184a23a9b4a667ee9576b263->enter($__internal_1bbd56ec658c472e3044bc104dd9616a12bd30f4184a23a9b4a667ee9576b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo")), "html", null, true);
        echo "

        ";
        // line 75
        if (array_key_exists("hommes", $context)) {
            // line 76
            echo "            <table>
            <tr> 
            ";
            // line 78
            $context["id"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "idGroupe"), "method");
            // line 79
            echo "            <th><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 80
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Niveau
                <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 83
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th> 
            <th><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 86
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Nom
                <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 89
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            <th><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 92
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Sexe
                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" =>             // line 95
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            </tr>
            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hommes"]) ? $context["hommes"] : $this->getContext($context, "hommes")));
            foreach ($context['_seq'] as $context["_key"] => $context["homme"]) {
                // line 99
                echo "                <tr>
                <th> ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getNiveau", array(), "method"), "html", null, true);
                echo " </th>
                <th> ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getNom", array(), "method"), "html", null, true);
                echo "</th>
                <th> ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["homme"], "getSexe", array(), "method"), "html", null, true);
                echo " </th> 
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </table>
        ";
        }
        // line 107
        echo "        </div>
    </div>
    
";
        
        $__internal_1bbd56ec658c472e3044bc104dd9616a12bd30f4184a23a9b4a667ee9576b263->leave($__internal_1bbd56ec658c472e3044bc104dd9616a12bd30f4184a23a9b4a667ee9576b263_prof);

        
        $__internal_21de48113775f164ec90f2f750b2d8ba32e36fe4127114e6669c803999a87b48->leave($__internal_21de48113775f164ec90f2f750b2d8ba32e36fe4127114e6669c803999a87b48_prof);

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
        return array (  262 => 107,  258 => 105,  249 => 102,  245 => 101,  241 => 100,  238 => 99,  234 => 98,  228 => 95,  227 => 94,  222 => 92,  221 => 91,  216 => 89,  215 => 88,  210 => 86,  209 => 85,  204 => 83,  203 => 82,  198 => 80,  196 => 79,  194 => 78,  190 => 76,  188 => 75,  183 => 73,  178 => 71,  174 => 70,  170 => 69,  166 => 67,  157 => 66,  139 => 57,  119 => 40,  103 => 27,  94 => 21,  90 => 20,  86 => 19,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

        {{ pseudo }}

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
