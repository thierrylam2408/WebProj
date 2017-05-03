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
        $__internal_82e7b5a555029df1d4abb4bbdbdd712cfe9870872bb0918122134f9ce4f7e02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e7b5a555029df1d4abb4bbdbdd712cfe9870872bb0918122134f9ce4f7e02e->enter($__internal_82e7b5a555029df1d4abb4bbdbdd712cfe9870872bb0918122134f9ce4f7e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $__internal_7f0b80970304e1bc52150e46644e67931c4935719c5d11039d20a741711cfe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b80970304e1bc52150e46644e67931c4935719c5d11039d20a741711cfe4f->enter($__internal_7f0b80970304e1bc52150e46644e67931c4935719c5d11039d20a741711cfe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e7b5a555029df1d4abb4bbdbdd712cfe9870872bb0918122134f9ce4f7e02e->leave($__internal_82e7b5a555029df1d4abb4bbdbdd712cfe9870872bb0918122134f9ce4f7e02e_prof);

        
        $__internal_7f0b80970304e1bc52150e46644e67931c4935719c5d11039d20a741711cfe4f->leave($__internal_7f0b80970304e1bc52150e46644e67931c4935719c5d11039d20a741711cfe4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_28754cbe35a699bad76ab6b9e9013985274dff322844937e93f407e4555d817e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28754cbe35a699bad76ab6b9e9013985274dff322844937e93f407e4555d817e->enter($__internal_28754cbe35a699bad76ab6b9e9013985274dff322844937e93f407e4555d817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3539c416b058c97910573439e2eb4fbfe387096da44f33172363c5040e760873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3539c416b058c97910573439e2eb4fbfe387096da44f33172363c5040e760873->enter($__internal_3539c416b058c97910573439e2eb4fbfe387096da44f33172363c5040e760873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_3539c416b058c97910573439e2eb4fbfe387096da44f33172363c5040e760873->leave($__internal_3539c416b058c97910573439e2eb4fbfe387096da44f33172363c5040e760873_prof);

        
        $__internal_28754cbe35a699bad76ab6b9e9013985274dff322844937e93f407e4555d817e->leave($__internal_28754cbe35a699bad76ab6b9e9013985274dff322844937e93f407e4555d817e_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_91cca6a6c2d5cc69ca356794430ac58e31cc1564c7065931541ce9a5aaf64e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cca6a6c2d5cc69ca356794430ac58e31cc1564c7065931541ce9a5aaf64e22->enter($__internal_91cca6a6c2d5cc69ca356794430ac58e31cc1564c7065931541ce9a5aaf64e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_c5bef6791f12b65ed91cf6e28c76661070305bc423bb88e80c3ef75b2f7a71ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bef6791f12b65ed91cf6e28c76661070305bc423bb88e80c3ef75b2f7a71ec->enter($__internal_c5bef6791f12b65ed91cf6e28c76661070305bc423bb88e80c3ef75b2f7a71ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Deconnexion</a></li>
                 <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">DropDown
                    <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Link 2</a></li>
                    </ul>
                 </li>              
             </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        <strong>";
        // line 35
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
        // line 48
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
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Sign Out <span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_c5bef6791f12b65ed91cf6e28c76661070305bc423bb88e80c3ef75b2f7a71ec->leave($__internal_c5bef6791f12b65ed91cf6e28c76661070305bc423bb88e80c3ef75b2f7a71ec_prof);

        
        $__internal_91cca6a6c2d5cc69ca356794430ac58e31cc1564c7065931541ce9a5aaf64e22->leave($__internal_91cca6a6c2d5cc69ca356794430ac58e31cc1564c7065931541ce9a5aaf64e22_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_22cbe81e2ff99e29bffdc81b572199850955b3b557fe3479303b7943cb813420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cbe81e2ff99e29bffdc81b572199850955b3b557fe3479303b7943cb813420->enter($__internal_22cbe81e2ff99e29bffdc81b572199850955b3b557fe3479303b7943cb813420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43247a5860172ce1cdef38f612dc8ec1c0094bcee49f8af5d1402bc14804eb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43247a5860172ce1cdef38f612dc8ec1c0094bcee49f8af5d1402bc14804eb07->enter($__internal_43247a5860172ce1cdef38f612dc8ec1c0094bcee49f8af5d1402bc14804eb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'widget');
        echo "
        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "

        ";
        // line 79
        if (array_key_exists("mesGroupes", $context)) {
            // line 80
            echo "            <table>
            <tr> 
            <th><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
                Experience
                <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th> 
            <th><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Nom
            <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            <th><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Argent
            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            <th><a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "desc")), "html", null, true);
            echo "\">-</a>
            Homme
            <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
            </th>
            </tr>
            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesGroupes"]) ? $context["mesGroupes"] : $this->getContext($context, "mesGroupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                // line 100
                echo "                <tr>
                <th> ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 0, array(), "array"), "html", null, true);
                echo " </th>
                <th> ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getNomGroupe", array(), "method"), "html", null, true);
                echo " </th>
                <th> ";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getArgent", array(), "method"), "html", null, true);
                echo " </th> 
                <th> ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 2, array(), "array"), "html", null, true);
                echo " </th>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            </table>
        ";
        }
        // line 109
        echo "
        ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_43247a5860172ce1cdef38f612dc8ec1c0094bcee49f8af5d1402bc14804eb07->leave($__internal_43247a5860172ce1cdef38f612dc8ec1c0094bcee49f8af5d1402bc14804eb07_prof);

        
        $__internal_22cbe81e2ff99e29bffdc81b572199850955b3b557fe3479303b7943cb813420->leave($__internal_22cbe81e2ff99e29bffdc81b572199850955b3b557fe3479303b7943cb813420_prof);

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
        return array (  278 => 112,  274 => 111,  270 => 110,  267 => 109,  263 => 107,  254 => 104,  250 => 103,  246 => 102,  242 => 101,  239 => 100,  235 => 99,  229 => 96,  224 => 94,  219 => 92,  214 => 90,  209 => 88,  204 => 86,  199 => 84,  194 => 82,  190 => 80,  188 => 79,  183 => 77,  179 => 76,  174 => 75,  165 => 74,  147 => 65,  127 => 48,  111 => 35,  94 => 21,  90 => 20,  86 => 19,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
                <li><a href=\"{{ url('/deconnexion') }}\">Deconnexion</a></li>
                 <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">DropDown
                    <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Link 2</a></li>
                    </ul>
                 </li>              
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
{% endblock %}
", "PWMyBundle:Default:home.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/home.html.twig");
    }
}
