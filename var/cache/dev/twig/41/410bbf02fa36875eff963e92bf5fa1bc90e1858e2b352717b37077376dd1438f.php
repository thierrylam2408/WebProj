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
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c15ec7d43150ea9614a86d7c7cbee4acde84467da17dffb5c5e88fd246a213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c15ec7d43150ea9614a86d7c7cbee4acde84467da17dffb5c5e88fd246a213->enter($__internal_99c15ec7d43150ea9614a86d7c7cbee4acde84467da17dffb5c5e88fd246a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $__internal_6f134fe8133a379e6c6217a78f1df1b24c4e5f21c955a6891ae528c152f7534e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f134fe8133a379e6c6217a78f1df1b24c4e5f21c955a6891ae528c152f7534e->enter($__internal_6f134fe8133a379e6c6217a78f1df1b24c4e5f21c955a6891ae528c152f7534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:play.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c15ec7d43150ea9614a86d7c7cbee4acde84467da17dffb5c5e88fd246a213->leave($__internal_99c15ec7d43150ea9614a86d7c7cbee4acde84467da17dffb5c5e88fd246a213_prof);

        
        $__internal_6f134fe8133a379e6c6217a78f1df1b24c4e5f21c955a6891ae528c152f7534e->leave($__internal_6f134fe8133a379e6c6217a78f1df1b24c4e5f21c955a6891ae528c152f7534e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_66802fb6529189fa556e3feead1af08db13a7e9ce50c7230e2eb3b187a7f2e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66802fb6529189fa556e3feead1af08db13a7e9ce50c7230e2eb3b187a7f2e08->enter($__internal_66802fb6529189fa556e3feead1af08db13a7e9ce50c7230e2eb3b187a7f2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc2b448ab63313566f17bb5599e1586f718d555f5d3033fdd71b2369a1f4eadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2b448ab63313566f17bb5599e1586f718d555f5d3033fdd71b2369a1f4eadd->enter($__internal_fc2b448ab63313566f17bb5599e1586f718d555f5d3033fdd71b2369a1f4eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Homme
";
        
        $__internal_fc2b448ab63313566f17bb5599e1586f718d555f5d3033fdd71b2369a1f4eadd->leave($__internal_fc2b448ab63313566f17bb5599e1586f718d555f5d3033fdd71b2369a1f4eadd_prof);

        
        $__internal_66802fb6529189fa556e3feead1af08db13a7e9ce50c7230e2eb3b187a7f2e08->leave($__internal_66802fb6529189fa556e3feead1af08db13a7e9ce50c7230e2eb3b187a7f2e08_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_88180aaf5f8d772d64a270f2d03e70b6c7da436a3e25594a1837ade26738b257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88180aaf5f8d772d64a270f2d03e70b6c7da436a3e25594a1837ade26738b257->enter($__internal_88180aaf5f8d772d64a270f2d03e70b6c7da436a3e25594a1837ade26738b257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_c7a145fd62811236b288a0c20eea35e2248f71c22891a6676daeb5f1d5b3f4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a145fd62811236b288a0c20eea35e2248f71c22891a6676daeb5f1d5b3f4bf->enter($__internal_c7a145fd62811236b288a0c20eea35e2248f71c22891a6676daeb5f1d5b3f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo " <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\"> 
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span> 
            </button>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group");
        echo "\" class=\"navbar-brand\">KENYLAM GAME</a>
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
                         <li><a href=\"#\">Account Settings <span class=\"glyphicon glyphicon-cog pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">User stats <span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Messages <span class=\"badge pull-right\"> 42 </span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Favourites Snippets <span class=\"glyphicon glyphicon-heart pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("/deconnexion");
        echo "\">Sign Out <span class=\"glyphicon glyphicon-log-out pull-right\"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_c7a145fd62811236b288a0c20eea35e2248f71c22891a6676daeb5f1d5b3f4bf->leave($__internal_c7a145fd62811236b288a0c20eea35e2248f71c22891a6676daeb5f1d5b3f4bf_prof);

        
        $__internal_88180aaf5f8d772d64a270f2d03e70b6c7da436a3e25594a1837ade26738b257->leave($__internal_88180aaf5f8d772d64a270f2d03e70b6c7da436a3e25594a1837ade26738b257_prof);

    }

    // line 64
    public function block_form($context, array $blocks = array())
    {
        $__internal_82c747649e7d3e05e989d885c81db879fd9cadff9c115411d08acee3b12c2c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c747649e7d3e05e989d885c81db879fd9cadff9c115411d08acee3b12c2c17->enter($__internal_82c747649e7d3e05e989d885c81db879fd9cadff9c115411d08acee3b12c2c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_46bbdca2ddb4be15e8facbce793fdfb8cfede4406d041787c270394b908a17c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bbdca2ddb4be15e8facbce793fdfb8cfede4406d041787c270394b908a17c5->enter($__internal_46bbdca2ddb4be15e8facbce793fdfb8cfede4406d041787c270394b908a17c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 65
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-horizontal\" style=\"margin-top:75px\">
        <h2 style=\"margin-left:120px\">Rechercher un Homme</h2>
      ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Niv Min</label>
        <div class=\"col-md-4\">
          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "nivMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Niv Max</label>
        <div class=\"col-md-4\">
          ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "nivMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Nom</label>
        <div class=\"col-md-4\">
          ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Sexe</label>
        <div class=\"col-md-4\">
          ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Etat</label>
        <div class=\"col-md-4\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2\" style=\"margin-left:150px\">
          ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
          ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-6\" style=\"margin-top:50px\">
    <h2 style=\"margin-left:180px\">Tous mes Hommes</h2>
    <h3 style=\"margin-left:120px\">Groupe : <strong>";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["nomGroupe"]) ? $context["nomGroupe"] : $this->getContext($context, "nomGroupe")), "html", null, true);
        echo "</strong></h3>
    <h3 style=\"margin-left:120px\">Argent : <strong>";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["argent"]) ? $context["argent"] : $this->getContext($context, "argent")), "html", null, true);
        echo "</strong> </h3>
    ";
        // line 112
        if (array_key_exists("hommesEtTemps", $context)) {
            // line 113
            echo "                <table class=\"table table-striped\">
                  ";
            // line 114
            $context["all"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "all"), "method");
            // line 115
            echo "                <thread>
                  <tr> 
                    ";
            // line 117
            $context["id"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "idGroupe"), "method");
            // line 118
            echo "                    <th>
                        <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "desc")), "html", null, true);
            echo "\">-</a>Niveau
                        <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "niveau", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                    </th> 
                    <th>
                        <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "desc")), "html", null, true);
            echo "\">-</a>Nom
                        <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "nom", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                    </th>
                    <th>
                        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "desc")), "html", null, true);
            echo "\">-</a>Sexe
                        <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "sexe", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                    </th>
                    <th>
                        <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "etat", "sens" => "desc")), "html", null, true);
            echo "\">-</a>Disponibilité
                        <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "ordre" => "etat", "sens" => "asc")), "html", null, true);
            echo "\">+</a>
                    </th>
                  </tr>
                </thread>
                <tbody>
                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["hommesEtTemps"]);
            foreach ($context['_seq'] as $context["_key"] => $context["hommesEtTemps"]) {
                // line 138
                echo "                        <tr>
                            <td> ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hommesEtTemps"], 0, array(), "array"), "getNiveau", array(), "method"), "html", null, true);
                echo " </td>
                            <td> ";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hommesEtTemps"], 0, array(), "array"), "getNom", array(), "method"), "html", null, true);
                echo "</td>
                            <td> ";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hommesEtTemps"], 0, array(), "array"), "getSexe", array(), "method"), "html", null, true);
                echo " </td>
                            <td> 
                                ";
                // line 143
                if (($this->getAttribute($context["hommesEtTemps"], 1, array(), "array") <= 0)) {
                    echo " 
                                    En attente
                                ";
                } else {
                    // line 146
                    echo "                                    Occupé (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hommesEtTemps"], 1, array(), "array"), "html", null, true);
                    echo "min)
                                ";
                }
                // line 148
                echo "                            </td>  
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hommesEtTemps'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                </tbody>
               </table>
              ";
        }
        // line 154
        echo "              <div class=\"form-horizontal\" style=\"margin-top:75px\">
                <h2 style=\"margin-left:120px\">Effectuer une Mission</h2>
                ";
        // line 156
        if (array_key_exists("formMission", $context)) {
            // line 157
            echo "                  ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formMission"]) ? $context["formMission"] : $this->getContext($context, "formMission")), 'form_start');
            echo "
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Homme</label>
                      <div class=\"col-md-4\">
                        ";
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formMission"]) ? $context["formMission"] : $this->getContext($context, "formMission")), "Homme", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Mission</label>
                      <div class=\"col-md-4\">
                        ";
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formMission"]) ? $context["formMission"] : $this->getContext($context, "formMission")), "Mission", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                    <div class=\"col-sm-2\" style=\"margin-left:150px\">
                      ";
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formMission"]) ? $context["formMission"] : $this->getContext($context, "formMission")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
            echo "
                    </div>
                  </div>
                  ";
            // line 175
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formMission"]) ? $context["formMission"] : $this->getContext($context, "formMission")), 'form_end');
            echo "
                  ";
        }
        // line 177
        echo "              </div>
              
  </div>
</div>
<div class=\"panel-group\">
    <h2 class=\"text-center\">Mission Terminée</h2> 
    ";
        // line 183
        if (array_key_exists("notif", $context)) {
            // line 184
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 185
                echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "texte", array()), "html", null, true);
                echo " <br> </div>
                        </div>
                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                ";
        }
        // line 191
        echo "
                ";
        // line 192
        if (array_key_exists("notifNonVu", $context)) {
            // line 193
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifNonVu"]) ? $context["notifNonVu"] : $this->getContext($context, "notifNonVu")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 194
                echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> (!)";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "texte", array()), "html", null, true);
                echo "(!) <br> </div>
                        </div>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                ";
        }
        // line 199
        echo "
                ";
        // line 200
        if (array_key_exists("notifVu", $context)) {
            // line 201
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifVu"]) ? $context["notifVu"] : $this->getContext($context, "notifVu")));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 202
                echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> ";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "texte", array()), "html", null, true);
                echo " <br> </div>
                        </div> 
                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                ";
        }
        // line 208
        echo "</div>
";
        
        $__internal_46bbdca2ddb4be15e8facbce793fdfb8cfede4406d041787c270394b908a17c5->leave($__internal_46bbdca2ddb4be15e8facbce793fdfb8cfede4406d041787c270394b908a17c5_prof);

        
        $__internal_82c747649e7d3e05e989d885c81db879fd9cadff9c115411d08acee3b12c2c17->leave($__internal_82c747649e7d3e05e989d885c81db879fd9cadff9c115411d08acee3b12c2c17_prof);

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
        return array (  470 => 208,  467 => 207,  457 => 203,  454 => 202,  449 => 201,  447 => 200,  444 => 199,  441 => 198,  432 => 195,  429 => 194,  424 => 193,  422 => 192,  419 => 191,  416 => 190,  406 => 186,  403 => 185,  398 => 184,  396 => 183,  388 => 177,  383 => 175,  377 => 172,  369 => 167,  360 => 161,  352 => 157,  350 => 156,  346 => 154,  341 => 151,  333 => 148,  327 => 146,  321 => 143,  316 => 141,  312 => 140,  308 => 139,  305 => 138,  301 => 137,  293 => 132,  289 => 131,  283 => 128,  279 => 127,  273 => 124,  269 => 123,  263 => 120,  259 => 119,  256 => 118,  254 => 117,  250 => 115,  248 => 114,  245 => 113,  243 => 112,  239 => 111,  235 => 110,  225 => 103,  221 => 102,  213 => 97,  204 => 91,  195 => 85,  186 => 79,  177 => 73,  170 => 69,  164 => 65,  155 => 64,  137 => 55,  117 => 38,  101 => 25,  92 => 19,  88 => 18,  81 => 14,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    Homme
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
            <a href=\"{{ path('/group')}}\" class=\"navbar-brand\">KENYLAM GAME</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('/group')}}\">Home</a></li>
                <li><a href=\"{{ path('/group')}} class=\"btn btn-info\" role=\"button\" \">Les groupes</a></li>             
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

{% block form %}
<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-horizontal\" style=\"margin-top:75px\">
        <h2 style=\"margin-left:120px\">Rechercher un Homme</h2>
      {{form_start(rechercheForm)}}
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Niv Min</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.nivMin, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Niv Max</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.nivMax, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Nom</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.nom, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Sexe</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.sexe, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Etat</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.etat, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2\" style=\"margin-left:150px\">
          {{ form_widget(rechercheForm.save, {'attr': {'class':'btn btn-default'}}) }}
          {{form_end(rechercheForm)}}
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-6\" style=\"margin-top:50px\">
    <h2 style=\"margin-left:180px\">Tous mes Hommes</h2>
    <h3 style=\"margin-left:120px\">Groupe : <strong>{{nomGroupe}}</strong></h3>
    <h3 style=\"margin-left:120px\">Argent : <strong>{{argent}}</strong> </h3>
    {% if hommesEtTemps is defined %}
                <table class=\"table table-striped\">
                  {% set all = (app.request.attributes.get('all') ) %}
                <thread>
                  <tr> 
                    {% set id = (app.request.attributes.get('idGroupe') ) %}
                    <th>
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'niveau','sens':'desc'})}}\">-</a>Niveau
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'niveau','sens':'asc'})}}\">+</a>
                    </th> 
                    <th>
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'nom','sens':'desc'})}}\">-</a>Nom
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'nom','sens':'asc'})}}\">+</a>
                    </th>
                    <th>
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'sexe','sens':'desc'})}}\">-</a>Sexe
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'sexe','sens':'asc'})}}\">+</a>
                    </th>
                    <th>
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'etat','sens':'desc'})}}\">-</a>Disponibilité
                        <a href=\"{{path('/homme',{'idGroupe':id,'ordre':'etat','sens':'asc'})}}\">+</a>
                    </th>
                  </tr>
                </thread>
                <tbody>
                    {% for hommesEtTemps in hommesEtTemps %}
                        <tr>
                            <td> {{ hommesEtTemps[0].getNiveau() }} </td>
                            <td> {{ hommesEtTemps[0].getNom() }}</td>
                            <td> {{ hommesEtTemps[0].getSexe() }} </td>
                            <td> 
                                {% if hommesEtTemps[1] <= 0 %} 
                                    En attente
                                {% else %}
                                    Occupé ({{hommesEtTemps[1]}}min)
                                {% endif %}
                            </td>  
                        </tr>
                    {% endfor %}
                </tbody>
               </table>
              {% endif %}
              <div class=\"form-horizontal\" style=\"margin-top:75px\">
                <h2 style=\"margin-left:120px\">Effectuer une Mission</h2>
                {% if formMission is defined %}
                  {{form_start(formMission)}}
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Homme</label>
                      <div class=\"col-md-4\">
                        {{ form_widget(formMission.Homme, {'attr': {'class':'form-control'}}) }}
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Mission</label>
                      <div class=\"col-md-4\">
                        {{ form_widget(formMission.Mission, {'attr': {'class':'form-control'}}) }}
                      </div>
                    </div>
                    <div class=\"form-group\">
                    <div class=\"col-sm-2\" style=\"margin-left:150px\">
                      {{ form_widget(formMission.save, {'attr': {'class':'btn btn-default'}}) }}
                    </div>
                  </div>
                  {{form_end(formMission)}}
                  {% endif %}
              </div>
              
  </div>
</div>
<div class=\"panel-group\">
    <h2 class=\"text-center\">Mission Terminée</h2> 
    {% if notif is defined %}
                    {% for n in notif%}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> {{n.texte}} <br> </div>
                        </div>
                        
                    {% endfor %}
                {% endif %}

                {% if notifNonVu is defined %}
                    {% for n in notifNonVu%}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> (!){{n.texte}}(!) <br> </div>
                        </div>   
                    {% endfor %}
                {% endif %}

                {% if notifVu is defined %}
                    {% for n in notifVu%}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\"> {{n.texte}} <br> </div>
                        </div> 
                        
                    {% endfor %}
                {% endif %}
</div>
{% endblock %}", "PWMyBundle:Default:play.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/play.html.twig");
    }
}
