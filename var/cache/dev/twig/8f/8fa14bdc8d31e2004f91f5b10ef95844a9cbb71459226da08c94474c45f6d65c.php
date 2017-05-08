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
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWMyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ccc40d3c383e5e28502d4f64eab59c9ff4dbcb0d76f4b66ad5ad00b012087fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccc40d3c383e5e28502d4f64eab59c9ff4dbcb0d76f4b66ad5ad00b012087fd->enter($__internal_4ccc40d3c383e5e28502d4f64eab59c9ff4dbcb0d76f4b66ad5ad00b012087fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $__internal_a2ef2db9621567f2f5396ac8b20f07550f9b349ff8e5e02b483d6eed0aa92c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ef2db9621567f2f5396ac8b20f07550f9b349ff8e5e02b483d6eed0aa92c62->enter($__internal_a2ef2db9621567f2f5396ac8b20f07550f9b349ff8e5e02b483d6eed0aa92c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ccc40d3c383e5e28502d4f64eab59c9ff4dbcb0d76f4b66ad5ad00b012087fd->leave($__internal_4ccc40d3c383e5e28502d4f64eab59c9ff4dbcb0d76f4b66ad5ad00b012087fd_prof);

        
        $__internal_a2ef2db9621567f2f5396ac8b20f07550f9b349ff8e5e02b483d6eed0aa92c62->leave($__internal_a2ef2db9621567f2f5396ac8b20f07550f9b349ff8e5e02b483d6eed0aa92c62_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fffce63054b7203109353eac7245a9e3790e82cb6091ae7d75a90793fc1b9df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fffce63054b7203109353eac7245a9e3790e82cb6091ae7d75a90793fc1b9df1->enter($__internal_fffce63054b7203109353eac7245a9e3790e82cb6091ae7d75a90793fc1b9df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4544aebfdc5c4120ee4254eb23a9683e3f0ec5cc64eec423bac461cc966c51ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4544aebfdc5c4120ee4254eb23a9683e3f0ec5cc64eec423bac461cc966c51ac->enter($__internal_4544aebfdc5c4120ee4254eb23a9683e3f0ec5cc64eec423bac461cc966c51ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_4544aebfdc5c4120ee4254eb23a9683e3f0ec5cc64eec423bac461cc966c51ac->leave($__internal_4544aebfdc5c4120ee4254eb23a9683e3f0ec5cc64eec423bac461cc966c51ac_prof);

        
        $__internal_fffce63054b7203109353eac7245a9e3790e82cb6091ae7d75a90793fc1b9df1->leave($__internal_fffce63054b7203109353eac7245a9e3790e82cb6091ae7d75a90793fc1b9df1_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4a857896e58db2821ab1f45199815c4a6b6ba58273157cfe436e5ba5aadf4fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a857896e58db2821ab1f45199815c4a6b6ba58273157cfe436e5ba5aadf4fab->enter($__internal_4a857896e58db2821ab1f45199815c4a6b6ba58273157cfe436e5ba5aadf4fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_e01c7f0bc8029a9f9d889644d29057cbe54915c00664ee3655e1b407f01c34fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01c7f0bc8029a9f9d889644d29057cbe54915c00664ee3655e1b407f01c34fa->enter($__internal_e01c7f0bc8029a9f9d889644d29057cbe54915c00664ee3655e1b407f01c34fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "  <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
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
        
        $__internal_e01c7f0bc8029a9f9d889644d29057cbe54915c00664ee3655e1b407f01c34fa->leave($__internal_e01c7f0bc8029a9f9d889644d29057cbe54915c00664ee3655e1b407f01c34fa_prof);

        
        $__internal_4a857896e58db2821ab1f45199815c4a6b6ba58273157cfe436e5ba5aadf4fab->leave($__internal_4a857896e58db2821ab1f45199815c4a6b6ba58273157cfe436e5ba5aadf4fab_prof);

    }

    // line 58
    public function block_form($context, array $blocks = array())
    {
        $__internal_70182255e213648a8f5237d89eaae2c04b4af218bc4e9e7030600cee7b0965d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70182255e213648a8f5237d89eaae2c04b4af218bc4e9e7030600cee7b0965d4->enter($__internal_70182255e213648a8f5237d89eaae2c04b4af218bc4e9e7030600cee7b0965d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6ae960aa51747997665c7cc3bf4390c97fec5aad9157d3689ac1f9b7f0716279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae960aa51747997665c7cc3bf4390c97fec5aad9157d3689ac1f9b7f0716279->enter($__internal_6ae960aa51747997665c7cc3bf4390c97fec5aad9157d3689ac1f9b7f0716279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 59
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-horizontal\" style=\"margin-top:75px\">
      ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Min</label>
        <div class=\"col-md-4\">
          ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "expMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Max</label>
        <div class=\"col-md-4\">
          ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "expMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Nom</label>
        <div class=\"col-md-4\">
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Argent Min</label>
        <div class=\"col-md-4\">
          ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "argMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Argent Max</label>
        <div class=\"col-md-4\">
          ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "argMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Min</label>
        <div class=\"col-md-4\">
          ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "homMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Max</label>
        <div class=\"col-md-4\">
          ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "homMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2\" style=\"margin-left:150px\">
          ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
          ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-6\" style=\"margin-top:75px\">
    <h2 style=\"margin-left:180px\">Tous les groupes</h2>
    ";
        // line 115
        if (array_key_exists("groupes", $context)) {
            // line 116
            echo "                <table class=\"table table-striped\">
                  ";
            // line 117
            $context["all"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "all"), "method");
            // line 118
            echo "                <thread>
                  <tr> 
                    <th>
                      <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                      </a>Experience
                      <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th> 
                    <th>
                        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                        </a>Nom
                      <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
                      <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                        </a>Argent
                      <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
                      <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span></a>Homme
                      <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
          
                    </th>
                  </tr>
                </thread>
                <tbody>
                  ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                // line 149
                echo "                    <tr>
                      <td> 
                        ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 0, array(), "array"), "html", null, true);
                echo " 
                      </td>
                      <td>
                        <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                echo "\"> 
                        ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getNomGroupe", array(), "method"), "html", null, true);
                echo " </a>
                      </td>
                      <td> 
                        ";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getArgent", array(), "method"), "html", null, true);
                echo " 
                      </td> 
                      <td> 
                        ";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 2, array(), "array"), "html", null, true);
                echo " 
                      </td>
                      ";
                // line 163
                if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
                    // line 164
                    echo "                        <td>
                          <a href=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/supprimerGrp", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                          Supprimer</a>
                        </td>
                      ";
                }
                // line 169
                echo "                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                </tbody>
               </table>
              ";
        }
        // line 174
        echo "              <div class=\"form-horizontal\" style=\"margin-top:75px\">
                <h2 style=\"margin-left:120px\">Créer un groupe</h2>
                ";
        // line 176
        if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
            // line 177
            echo "                  ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Nom</label>
                      <div class=\"col-md-4\">
                        ";
            // line 181
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                    <div class=\"col-sm-2\" style=\"margin-left:150px\">
                      ";
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
            echo "
                    </div>
                  </div>
                  ";
            // line 189
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                  ";
        }
        // line 191
        echo "              </div>
  </div>
</div>
";
        
        $__internal_6ae960aa51747997665c7cc3bf4390c97fec5aad9157d3689ac1f9b7f0716279->leave($__internal_6ae960aa51747997665c7cc3bf4390c97fec5aad9157d3689ac1f9b7f0716279_prof);

        
        $__internal_70182255e213648a8f5237d89eaae2c04b4af218bc4e9e7030600cee7b0965d4->leave($__internal_70182255e213648a8f5237d89eaae2c04b4af218bc4e9e7030600cee7b0965d4_prof);

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
        return array (  404 => 191,  399 => 189,  393 => 186,  385 => 181,  377 => 177,  375 => 176,  371 => 174,  366 => 171,  359 => 169,  352 => 165,  349 => 164,  347 => 163,  342 => 161,  336 => 158,  330 => 155,  326 => 154,  320 => 151,  316 => 149,  312 => 148,  301 => 140,  297 => 139,  291 => 136,  285 => 133,  279 => 130,  273 => 127,  267 => 124,  261 => 121,  256 => 118,  254 => 117,  251 => 116,  249 => 115,  239 => 108,  235 => 107,  227 => 102,  218 => 96,  209 => 90,  200 => 84,  191 => 78,  182 => 72,  173 => 66,  166 => 62,  161 => 59,  152 => 58,  134 => 49,  129 => 47,  117 => 38,  101 => 25,  92 => 19,  88 => 18,  81 => 14,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
            <a href=\"{{ path('/group')}}\" class=\"navbar-brand\">KENYLAM GAME</a>
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
<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-horizontal\" style=\"margin-top:75px\">
      {{form_start(rechercheForm)}}
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Min</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.expMin, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Max</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.expMax, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Nom</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.nom, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Argent Min</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.argMin, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Argent Max</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.argMax, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Min</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.homMin, {'attr': {'class':'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Max</label>
        <div class=\"col-md-4\">
          {{ form_widget(rechercheForm.homMax, {'attr': {'class':'form-control'}}) }}
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
  <div class=\"col-md-6\" style=\"margin-top:75px\">
    <h2 style=\"margin-left:180px\">Tous les groupes</h2>
    {% if groupes is defined %}
                <table class=\"table table-striped\">
                  {% set all = (app.request.attributes.get('all') ) %}
                <thread>
                  <tr> 
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'exp','sens':'desc','all':all}) }}\">
                        <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                      </a>Experience
                      <a href=\"{{ path('/group',{'ordre':'exp', 'sens':'asc','all':all}) }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th> 
                    <th>
                        <a href=\"{{ path('/group',{'ordre':'nom', 'sens':'desc','all':all}) }}\">
                            <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                        </a>Nom
                      <a href=\"{{ path('/group',{'ordre':'nom', 'sens':'asc','all':all}) }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'argent', 'sens':'desc','all':all}) }}\">
                        <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                        </a>Argent
                      <a href=\"{{ path('/group',{'ordre':'argent', 'sens':'asc','all':all}) }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'nbh', 'sens':'desc','all':all}) }}\"><span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span></a>Homme
                      <a href=\"{{ path('/group',{'ordre':'nbh', 'sens':'asc','all':all}) }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></a>
                    </th>
                    <th>
          
                    </th>
                  </tr>
                </thread>
                <tbody>
                  {% for couple in groupes %}
                    <tr>
                      <td> 
                        {{ couple[0] }} 
                      </td>
                      <td>
                        <a href=\"{{ path('/homme', {'idGroupe':couple[1].getId() }) }}\"> 
                        {{ couple[1].getNomGroupe()}} </a>
                      </td>
                      <td> 
                        {{ couple[1].getArgent()}} 
                      </td> 
                      <td> 
                        {{ couple[2]}} 
                      </td>
                      {% if supprimable is defined and supprimable == true %}
                        <td>
                          <a href=\"{{ path('/supprimerGrp', {'idGroupe':couple[1].getId() }) }}\">
                          Supprimer</a>
                        </td>
                      {% endif %}
                    </tr>
                  {% endfor %}
                </tbody>
               </table>
              {% endif %}
              <div class=\"form-horizontal\" style=\"margin-top:75px\">
                <h2 style=\"margin-left:120px\">Créer un groupe</h2>
                {% if supprimable is defined and supprimable == true %}
                  {{form_start(form)}}
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Nom</label>
                      <div class=\"col-md-4\">
                        {{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}
                      </div>
                    </div>
                    <div class=\"form-group\">
                    <div class=\"col-sm-2\" style=\"margin-left:150px\">
                      {{ form_widget(form.save, {'attr': {'class':'btn btn-default'}}) }}
                    </div>
                  </div>
                  {{form_end(form)}}
                  {% endif %}
              </div>
  </div>
</div>
{% endblock %}
", "PWMyBundle:Default:home.html.twig", "C:\\wamp\\www\\WebProj\\src\\PW\\MyBundle/Resources/views/Default/home.html.twig");
    }
}
