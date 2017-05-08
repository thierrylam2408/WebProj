<?php

/* PWMyBundle:Default:statistique.html.twig */
class __TwigTemplate_dae3c960182857a710f5612803cd9bf43fbf7757860057eadf7df82e1cfccce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWMyBundle::layout.html.twig", "PWMyBundle:Default:statistique.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6e30e04b53c92f5d6f958bf009ef93c57829b3e1bfb1e7d40eaef14e2621e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6e30e04b53c92f5d6f958bf009ef93c57829b3e1bfb1e7d40eaef14e2621e0->enter($__internal_2b6e30e04b53c92f5d6f958bf009ef93c57829b3e1bfb1e7d40eaef14e2621e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:statistique.html.twig"));

        $__internal_b20b23914cf096ab706e1c49d27ab74d28a5bdc18c1b63a66ce9fd7799c194bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20b23914cf096ab706e1c49d27ab74d28a5bdc18c1b63a66ce9fd7799c194bb->enter($__internal_b20b23914cf096ab706e1c49d27ab74d28a5bdc18c1b63a66ce9fd7799c194bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:statistique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6e30e04b53c92f5d6f958bf009ef93c57829b3e1bfb1e7d40eaef14e2621e0->leave($__internal_2b6e30e04b53c92f5d6f958bf009ef93c57829b3e1bfb1e7d40eaef14e2621e0_prof);

        
        $__internal_b20b23914cf096ab706e1c49d27ab74d28a5bdc18c1b63a66ce9fd7799c194bb->leave($__internal_b20b23914cf096ab706e1c49d27ab74d28a5bdc18c1b63a66ce9fd7799c194bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bec3b1b364e5f6ec2bdec710a49c38c6a8da01a79e92ba63b7e8c8e78c57390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bec3b1b364e5f6ec2bdec710a49c38c6a8da01a79e92ba63b7e8c8e78c57390->enter($__internal_6bec3b1b364e5f6ec2bdec710a49c38c6a8da01a79e92ba63b7e8c8e78c57390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60ae914fbc1850df885627901451a65a77aca0b20adba91f5521cc88cedb576f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ae914fbc1850df885627901451a65a77aca0b20adba91f5521cc88cedb576f->enter($__internal_60ae914fbc1850df885627901451a65a77aca0b20adba91f5521cc88cedb576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Statistique
";
        
        $__internal_60ae914fbc1850df885627901451a65a77aca0b20adba91f5521cc88cedb576f->leave($__internal_60ae914fbc1850df885627901451a65a77aca0b20adba91f5521cc88cedb576f_prof);

        
        $__internal_6bec3b1b364e5f6ec2bdec710a49c38c6a8da01a79e92ba63b7e8c8e78c57390->leave($__internal_6bec3b1b364e5f6ec2bdec710a49c38c6a8da01a79e92ba63b7e8c8e78c57390_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ba6e287a3c28ccd68a6839e491245665006b79a14a264a83d8febd9d4d43a833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6e287a3c28ccd68a6839e491245665006b79a14a264a83d8febd9d4d43a833->enter($__internal_ba6e287a3c28ccd68a6839e491245665006b79a14a264a83d8febd9d4d43a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_e07829b673b521235174c577c45b84856f10f3e06ab92e2cfc9498455cf8a5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07829b673b521235174c577c45b84856f10f3e06ab92e2cfc9498455cf8a5f2->enter($__internal_e07829b673b521235174c577c45b84856f10f3e06ab92e2cfc9498455cf8a5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group");
        echo " class=\"btn btn-info\" role=\"button\" \">Les groupes</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/statistique");
        echo "\">Statistique</a></li>           
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
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/statistique");
        echo "\">Statistique<span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Déconnexion<span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_e07829b673b521235174c577c45b84856f10f3e06ab92e2cfc9498455cf8a5f2->leave($__internal_e07829b673b521235174c577c45b84856f10f3e06ab92e2cfc9498455cf8a5f2_prof);

        
        $__internal_ba6e287a3c28ccd68a6839e491245665006b79a14a264a83d8febd9d4d43a833->leave($__internal_ba6e287a3c28ccd68a6839e491245665006b79a14a264a83d8febd9d4d43a833_prof);

    }

    // line 59
    public function block_form($context, array $blocks = array())
    {
        $__internal_31466cc3d1530084442823f3a37605580ca12fcafb5cebd68fbb8b4cbd666b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31466cc3d1530084442823f3a37605580ca12fcafb5cebd68fbb8b4cbd666b07->enter($__internal_31466cc3d1530084442823f3a37605580ca12fcafb5cebd68fbb8b4cbd666b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f4d38fdcade62a8c21e87cef154e2cb4a5c7ce3b20f9ec147cc4e7f935f51234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d38fdcade62a8c21e87cef154e2cb4a5c7ce3b20f9ec147cc4e7f935f51234->enter($__internal_f4d38fdcade62a8c21e87cef154e2cb4a5c7ce3b20f9ec147cc4e7f935f51234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 60
        echo "<div class=\"row\" style=\"margin-top:70px\">
    <h2 class=\"text-center\">Statistiques</h2>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre joueur <strong>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["nbJoueur"]) ? $context["nbJoueur"] : $this->getContext($context, "nbJoueur")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre groupe <strong></strong>";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["nbGroupe"]) ? $context["nbGroupe"] : $this->getContext($context, "nbGroupe")), "html", null, true);
        echo "</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus haut exp <strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expMax"]) ? $context["expMax"] : $this->getContext($context, "expMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expMax"]) ? $context["expMax"] : $this->getContext($context, "expMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus d'homme <strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hommeMax"]) ? $context["hommeMax"] : $this->getContext($context, "hommeMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hommeMax"]) ? $context["hommeMax"] : $this->getContext($context, "hommeMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus argent <strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argMax"]) ? $context["argMax"] : $this->getContext($context, "argMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argMax"]) ? $context["argMax"] : $this->getContext($context, "argMax")), 1, array(), "array"), "html", null, true);
        echo "\$</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">exp moyen <strong>";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["expMoyen"]) ? $context["expMoyen"] : $this->getContext($context, "expMoyen")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">argent moyen <strong>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["argMoyen"]) ? $context["argMoyen"] : $this->getContext($context, "argMoyen")), "html", null, true);
        echo "</strong></div>
          </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Perso plus fort <strong>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["niveauMax"]) ? $context["niveauMax"] : $this->getContext($context, "niveauMax")), 0, array(), "array"), "html", null, true);
        echo " niveau ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["niveauMax"]) ? $context["niveauMax"] : $this->getContext($context, "niveauMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Niveau moyen <strong></strong>";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["niveauMoyen"]) ? $context["niveauMoyen"] : $this->getContext($context, "niveauMoyen")), "html", null, true);
        echo "</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["pourcentageH"]) ? $context["pourcentageH"] : $this->getContext($context, "pourcentageH")), "html", null, true);
        echo "%</strong> d'homme <strong>";
        echo twig_escape_filter($this->env, (isset($context["pourcentageF"]) ? $context["pourcentageF"] : $this->getContext($context, "pourcentageF")), "html", null, true);
        echo "%</strong> de femme</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Missions effectuées <strong>";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["Missions"]) ? $context["Missions"] : $this->getContext($context, "Missions")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pourcentageLO"]) ? $context["pourcentageLO"] : $this->getContext($context, "pourcentageLO")), 0, array(), "array"), "html", null, true);
        echo "%</strong> de personne libre</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pourcentageLO"]) ? $context["pourcentageLO"] : $this->getContext($context, "pourcentageLO")), 1, array(), "array"), "html", null, true);
        echo "%</strong> de personne occupé</div>
          </div>
        </div>
    </div>
</div>

    

";
        
        $__internal_f4d38fdcade62a8c21e87cef154e2cb4a5c7ce3b20f9ec147cc4e7f935f51234->leave($__internal_f4d38fdcade62a8c21e87cef154e2cb4a5c7ce3b20f9ec147cc4e7f935f51234_prof);

        
        $__internal_31466cc3d1530084442823f3a37605580ca12fcafb5cebd68fbb8b4cbd666b07->leave($__internal_31466cc3d1530084442823f3a37605580ca12fcafb5cebd68fbb8b4cbd666b07_prof);

    }

    public function getTemplateName()
    {
        return "PWMyBundle:Default:statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 105,  249 => 102,  243 => 99,  235 => 96,  229 => 93,  221 => 90,  211 => 83,  205 => 80,  197 => 77,  189 => 74,  181 => 71,  175 => 68,  169 => 65,  162 => 60,  153 => 59,  135 => 50,  130 => 48,  118 => 39,  102 => 26,  93 => 20,  89 => 19,  85 => 18,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    Statistique
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
                <li><a href=\"{{ path('/group')}}\">Home</a></li>
                <li><a href=\"{{ path('/group')}} class=\"btn btn-info\" role=\"button\" \">Les groupes</a></li>
                <li><a href=\"{{ path('/statistique') }}\">Statistique</a></li>           
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
                        <li><a href=\"{{ path('/statistique')}}\">Statistique<span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"{{ url('/deconnexion') }}\">Déconnexion<span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}

{% block form %}
<div class=\"row\" style=\"margin-top:70px\">
    <h2 class=\"text-center\">Statistiques</h2>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre joueur <strong>{{nbJoueur}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre groupe <strong></strong>{{nbGroupe}}</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus haut exp <strong>{{expMax[0]}} avec {{expMax[1]}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus d'homme <strong>{{hommeMax[0]}} avec {{hommeMax[1]}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus argent <strong>{{argMax[0]}} avec {{argMax[1]}}\$</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">exp moyen <strong>{{expMoyen}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">argent moyen <strong>{{argMoyen}}</strong></div>
          </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Perso plus fort <strong>{{niveauMax[0]}} niveau {{niveauMax[1]}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Niveau moyen <strong></strong>{{niveauMoyen}}</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>{{pourcentageH}}%</strong> d'homme <strong>{{pourcentageF}}%</strong> de femme</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Missions effectuées <strong>{{Missions}}</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>{{pourcentageLO[0]}}%</strong> de personne libre</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>{{pourcentageLO[1]}}%</strong> de personne occupé</div>
          </div>
        </div>
    </div>
</div>

    

{% endblock %}


        ", "PWMyBundle:Default:statistique.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/statistique.html.twig");
    }
}
