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
        $__internal_2c3c0a8511740bc68f25375a763245f57025bd30f66f60cccc8362f29a24790d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3c0a8511740bc68f25375a763245f57025bd30f66f60cccc8362f29a24790d->enter($__internal_2c3c0a8511740bc68f25375a763245f57025bd30f66f60cccc8362f29a24790d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:statistique.html.twig"));

        $__internal_8691c5d031c44bf26281943ccc38906a83768ec2b361af42f03d54e0fb6c498e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8691c5d031c44bf26281943ccc38906a83768ec2b361af42f03d54e0fb6c498e->enter($__internal_8691c5d031c44bf26281943ccc38906a83768ec2b361af42f03d54e0fb6c498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:statistique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3c0a8511740bc68f25375a763245f57025bd30f66f60cccc8362f29a24790d->leave($__internal_2c3c0a8511740bc68f25375a763245f57025bd30f66f60cccc8362f29a24790d_prof);

        
        $__internal_8691c5d031c44bf26281943ccc38906a83768ec2b361af42f03d54e0fb6c498e->leave($__internal_8691c5d031c44bf26281943ccc38906a83768ec2b361af42f03d54e0fb6c498e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dae9a6815e54a8830e7896534beadc06338a015195f315bc1afb4b3c5357ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dae9a6815e54a8830e7896534beadc06338a015195f315bc1afb4b3c5357ba8->enter($__internal_3dae9a6815e54a8830e7896534beadc06338a015195f315bc1afb4b3c5357ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3bcdd73070760c8e19d4e26c98d8abf0d920dcdb089964e165202d05a3e8c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bcdd73070760c8e19d4e26c98d8abf0d920dcdb089964e165202d05a3e8c3f->enter($__internal_f3bcdd73070760c8e19d4e26c98d8abf0d920dcdb089964e165202d05a3e8c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Statistique
";
        
        $__internal_f3bcdd73070760c8e19d4e26c98d8abf0d920dcdb089964e165202d05a3e8c3f->leave($__internal_f3bcdd73070760c8e19d4e26c98d8abf0d920dcdb089964e165202d05a3e8c3f_prof);

        
        $__internal_3dae9a6815e54a8830e7896534beadc06338a015195f315bc1afb4b3c5357ba8->leave($__internal_3dae9a6815e54a8830e7896534beadc06338a015195f315bc1afb4b3c5357ba8_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a814e97587c0a602570012b2696711f1641b889b889ea0191608a73130890374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a814e97587c0a602570012b2696711f1641b889b889ea0191608a73130890374->enter($__internal_a814e97587c0a602570012b2696711f1641b889b889ea0191608a73130890374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_da369c7e3aa8625db5b649a71be95a5040cacdec459254e1edd21af03cffb096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da369c7e3aa8625db5b649a71be95a5040cacdec459254e1edd21af03cffb096->enter($__internal_da369c7e3aa8625db5b649a71be95a5040cacdec459254e1edd21af03cffb096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/statistique");
        echo "\">Statistique</a></li>           
             </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        <strong>";
        // line 25
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
        // line 38
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
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/statistique");
        echo "\">Statistique<span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Déconnexion<span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_da369c7e3aa8625db5b649a71be95a5040cacdec459254e1edd21af03cffb096->leave($__internal_da369c7e3aa8625db5b649a71be95a5040cacdec459254e1edd21af03cffb096_prof);

        
        $__internal_a814e97587c0a602570012b2696711f1641b889b889ea0191608a73130890374->leave($__internal_a814e97587c0a602570012b2696711f1641b889b889ea0191608a73130890374_prof);

    }

    // line 58
    public function block_form($context, array $blocks = array())
    {
        $__internal_25b5d956bbbcfab728e448c1eab88a533877d2a223b568a29fc6f6efc3d722f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b5d956bbbcfab728e448c1eab88a533877d2a223b568a29fc6f6efc3d722f5->enter($__internal_25b5d956bbbcfab728e448c1eab88a533877d2a223b568a29fc6f6efc3d722f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_2872be58061142bb05ed45b4062bc98f528816a7f6523e1cffbd6189cc6eccd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2872be58061142bb05ed45b4062bc98f528816a7f6523e1cffbd6189cc6eccd0->enter($__internal_2872be58061142bb05ed45b4062bc98f528816a7f6523e1cffbd6189cc6eccd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 59
        echo "<div class=\"row\" style=\"margin-top:70px\">
    <h2 class=\"text-center\">Statistiques</h2>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre joueur <strong>";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["nbJoueur"]) ? $context["nbJoueur"] : $this->getContext($context, "nbJoueur")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">nombre groupe <strong></strong>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["nbGroupe"]) ? $context["nbGroupe"] : $this->getContext($context, "nbGroupe")), "html", null, true);
        echo "</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus haut exp <strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expMax"]) ? $context["expMax"] : $this->getContext($context, "expMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expMax"]) ? $context["expMax"] : $this->getContext($context, "expMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus d'homme <strong>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hommeMax"]) ? $context["hommeMax"] : $this->getContext($context, "hommeMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hommeMax"]) ? $context["hommeMax"] : $this->getContext($context, "hommeMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Le groupe plus argent <strong>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argMax"]) ? $context["argMax"] : $this->getContext($context, "argMax")), 0, array(), "array"), "html", null, true);
        echo " avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["argMax"]) ? $context["argMax"] : $this->getContext($context, "argMax")), 1, array(), "array"), "html", null, true);
        echo "\$</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">exp moyen <strong>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["expMoyen"]) ? $context["expMoyen"] : $this->getContext($context, "expMoyen")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">argent moyen <strong>";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["argMoyen"]) ? $context["argMoyen"] : $this->getContext($context, "argMoyen")), "html", null, true);
        echo "</strong></div>
          </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"panel-group\" >
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Perso plus fort <strong>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["niveauMax"]) ? $context["niveauMax"] : $this->getContext($context, "niveauMax")), 0, array(), "array"), "html", null, true);
        echo " niveau ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["niveauMax"]) ? $context["niveauMax"] : $this->getContext($context, "niveauMax")), 1, array(), "array"), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Niveau moyen <strong></strong>";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["niveauMoyen"]) ? $context["niveauMoyen"] : $this->getContext($context, "niveauMoyen")), "html", null, true);
        echo "</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["pourcentageH"]) ? $context["pourcentageH"] : $this->getContext($context, "pourcentageH")), "html", null, true);
        echo "%</strong> d'homme <strong>";
        echo twig_escape_filter($this->env, (isset($context["pourcentageF"]) ? $context["pourcentageF"] : $this->getContext($context, "pourcentageF")), "html", null, true);
        echo "%</strong> de femme</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">Missions effectuées <strong>";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["Missions"]) ? $context["Missions"] : $this->getContext($context, "Missions")), "html", null, true);
        echo "</strong></div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pourcentageLO"]) ? $context["pourcentageLO"] : $this->getContext($context, "pourcentageLO")), 0, array(), "array"), "html", null, true);
        echo "%</strong> de personne libre</div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\"><strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pourcentageLO"]) ? $context["pourcentageLO"] : $this->getContext($context, "pourcentageLO")), 1, array(), "array"), "html", null, true);
        echo "%</strong> de personne occupé</div>
          </div>
        </div>
    </div>
</div>

    

";
        
        $__internal_2872be58061142bb05ed45b4062bc98f528816a7f6523e1cffbd6189cc6eccd0->leave($__internal_2872be58061142bb05ed45b4062bc98f528816a7f6523e1cffbd6189cc6eccd0_prof);

        
        $__internal_25b5d956bbbcfab728e448c1eab88a533877d2a223b568a29fc6f6efc3d722f5->leave($__internal_25b5d956bbbcfab728e448c1eab88a533877d2a223b568a29fc6f6efc3d722f5_prof);

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
        return array (  251 => 104,  245 => 101,  239 => 98,  231 => 95,  225 => 92,  217 => 89,  207 => 82,  201 => 79,  193 => 76,  185 => 73,  177 => 70,  171 => 67,  165 => 64,  158 => 59,  149 => 58,  131 => 49,  126 => 47,  114 => 38,  98 => 25,  89 => 19,  85 => 18,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
