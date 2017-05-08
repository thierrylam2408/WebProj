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
        $__internal_326c83b7cce7066be7fd9a91538abc56143c6f2cc9f5694d356feb3469154314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326c83b7cce7066be7fd9a91538abc56143c6f2cc9f5694d356feb3469154314->enter($__internal_326c83b7cce7066be7fd9a91538abc56143c6f2cc9f5694d356feb3469154314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $__internal_9dad1a786f67f9c998874d702e6619226995ee50954884cec41297265a12c201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dad1a786f67f9c998874d702e6619226995ee50954884cec41297265a12c201->enter($__internal_9dad1a786f67f9c998874d702e6619226995ee50954884cec41297265a12c201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWMyBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326c83b7cce7066be7fd9a91538abc56143c6f2cc9f5694d356feb3469154314->leave($__internal_326c83b7cce7066be7fd9a91538abc56143c6f2cc9f5694d356feb3469154314_prof);

        
        $__internal_9dad1a786f67f9c998874d702e6619226995ee50954884cec41297265a12c201->leave($__internal_9dad1a786f67f9c998874d702e6619226995ee50954884cec41297265a12c201_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2871912b1f2aabd547856365446178014dcd26f599195e546bf9fe79c8936164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2871912b1f2aabd547856365446178014dcd26f599195e546bf9fe79c8936164->enter($__internal_2871912b1f2aabd547856365446178014dcd26f599195e546bf9fe79c8936164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c047d361b4a43d2742370234ffbe67391bfad479f19e7ce4b91c198894f24b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c047d361b4a43d2742370234ffbe67391bfad479f19e7ce4b91c198894f24b76->enter($__internal_c047d361b4a43d2742370234ffbe67391bfad479f19e7ce4b91c198894f24b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Home
";
        
        $__internal_c047d361b4a43d2742370234ffbe67391bfad479f19e7ce4b91c198894f24b76->leave($__internal_c047d361b4a43d2742370234ffbe67391bfad479f19e7ce4b91c198894f24b76_prof);

        
        $__internal_2871912b1f2aabd547856365446178014dcd26f599195e546bf9fe79c8936164->leave($__internal_2871912b1f2aabd547856365446178014dcd26f599195e546bf9fe79c8936164_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_47189b1c5aeaa75e272abea854f085f9bf70bc8bde9c6c35bd86247a14d69bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47189b1c5aeaa75e272abea854f085f9bf70bc8bde9c6c35bd86247a14d69bbb->enter($__internal_47189b1c5aeaa75e272abea854f085f9bf70bc8bde9c6c35bd86247a14d69bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_c5efe4bd2523178079992e855d462f0448c813baede25362b403a340e7b8855d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5efe4bd2523178079992e855d462f0448c813baede25362b403a340e7b8855d->enter($__internal_c5efe4bd2523178079992e855d462f0448c813baede25362b403a340e7b8855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
                         <li><a href=\"#\">Account Settings <span class=\"glyphicon glyphicon-cog pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/statistique");
        echo "\">User stats <span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
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
        
        $__internal_c5efe4bd2523178079992e855d462f0448c813baede25362b403a340e7b8855d->leave($__internal_c5efe4bd2523178079992e855d462f0448c813baede25362b403a340e7b8855d_prof);

        
        $__internal_47189b1c5aeaa75e272abea854f085f9bf70bc8bde9c6c35bd86247a14d69bbb->leave($__internal_47189b1c5aeaa75e272abea854f085f9bf70bc8bde9c6c35bd86247a14d69bbb_prof);

    }

    // line 65
    public function block_form($context, array $blocks = array())
    {
        $__internal_a85579bc88fd63894db7f5aa1ab5754eb7a3ff78a9e2109e32dfee9992f8326e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85579bc88fd63894db7f5aa1ab5754eb7a3ff78a9e2109e32dfee9992f8326e->enter($__internal_a85579bc88fd63894db7f5aa1ab5754eb7a3ff78a9e2109e32dfee9992f8326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e33d9d6a1c22ce8ee3ed707eccf5819af802df9ace5482a9f9653571eae92810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33d9d6a1c22ce8ee3ed707eccf5819af802df9ace5482a9f9653571eae92810->enter($__internal_e33d9d6a1c22ce8ee3ed707eccf5819af802df9ace5482a9f9653571eae92810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 66
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"form-horizontal\" style=\"margin-top:75px\">
      ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_start');
        echo "
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Min</label>
        <div class=\"col-md-4\">
          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "expMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Exp Max</label>
        <div class=\"col-md-4\">
          ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "expMax", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        <label  class=\"col-md-3 control-label\">Argent Min</label>
        <div class=\"col-md-4\">
          ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "argMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Argent Max</label>
        <div class=\"col-md-4\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "argMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Min</label>
        <div class=\"col-md-4\">
          ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "homMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <label  class=\"col-md-3 control-label\">Homme Max</label>
        <div class=\"col-md-4\">
          ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "homMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2\" style=\"margin-left:150px\">
          ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
          ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["rechercheForm"]) ? $context["rechercheForm"] : $this->getContext($context, "rechercheForm")), 'form_end');
        echo "
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-6\" style=\"margin-top:75px\">
    <h2 style=\"margin-left:180px\">Tous les groupes</h2>
    ";
        // line 122
        if (array_key_exists("groupes", $context)) {
            // line 123
            echo "                <table class=\"table table-striped\">
                  ";
            // line 124
            $context["all"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "all"), "method");
            // line 125
            echo "                <thread>
                  <tr> 
                    <th>
                      <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>Experience
                      <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "exp", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                    </th> 
                    <th>
                      <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>Nom
                      <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nom", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                    </th>
                    <th>
                      <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>Argent
                      <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "argent", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                    </th>
                    <th>
                      <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "desc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">-</a>Homme
                      <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/group", array("ordre" => "nbh", "sens" => "asc", "all" => (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))), "html", null, true);
            echo "\">+</a>
                    </th>
                    <th>
          
                    </th>
                  </tr>
                </thread>
                <tbody>
                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                // line 150
                echo "                    <tr>
                      <td> 
                        ";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 0, array(), "array"), "html", null, true);
                echo " 
                      </td>
                      <td>
                        <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/homme", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                echo "\"> 
                        ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getNomGroupe", array(), "method"), "html", null, true);
                echo " </a>
                      </td>
                      <td> 
                        ";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getArgent", array(), "method"), "html", null, true);
                echo " 
                      </td> 
                      <td> 
                        ";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["couple"], 2, array(), "array"), "html", null, true);
                echo " 
                      </td>
                      ";
                // line 164
                if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
                    // line 165
                    echo "                        <td>
                          <a href=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("/supprimerGrp", array("idGroupe" => $this->getAttribute($this->getAttribute($context["couple"], 1, array(), "array"), "getId", array(), "method"))), "html", null, true);
                    echo "\">
                          Supprimer</a>
                        </td>
                      ";
                }
                // line 170
                echo "                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                </tbody>
               </table>
              ";
        }
        // line 175
        echo "              <div class=\"form-horizontal\" style=\"margin-top:75px\">
                <h2 style=\"margin-left:120px\">Créer un groupe</h2>
                ";
        // line 177
        if ((array_key_exists("supprimable", $context) && ((isset($context["supprimable"]) ? $context["supprimable"] : $this->getContext($context, "supprimable")) == true))) {
            // line 178
            echo "                  ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                    <div class=\"form-group\">
                      <label  class=\"col-md-3 control-label\">Nom</label>
                      <div class=\"col-md-4\">
                        ";
            // line 182
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                    <div class=\"col-sm-2\" style=\"margin-left:150px\">
                      ";
            // line 187
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
            echo "
                    </div>
                  </div>
                  ";
            // line 190
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                  ";
        }
        // line 192
        echo "              </div>
  </div>
</div>
";
        
        $__internal_e33d9d6a1c22ce8ee3ed707eccf5819af802df9ace5482a9f9653571eae92810->leave($__internal_e33d9d6a1c22ce8ee3ed707eccf5819af802df9ace5482a9f9653571eae92810_prof);

        
        $__internal_a85579bc88fd63894db7f5aa1ab5754eb7a3ff78a9e2109e32dfee9992f8326e->leave($__internal_a85579bc88fd63894db7f5aa1ab5754eb7a3ff78a9e2109e32dfee9992f8326e_prof);

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
        return array (  408 => 192,  403 => 190,  397 => 187,  389 => 182,  381 => 178,  379 => 177,  375 => 175,  370 => 172,  363 => 170,  356 => 166,  353 => 165,  351 => 164,  346 => 162,  340 => 159,  334 => 156,  330 => 155,  324 => 152,  320 => 150,  316 => 149,  305 => 141,  301 => 140,  295 => 137,  291 => 136,  285 => 133,  281 => 132,  275 => 129,  271 => 128,  266 => 125,  264 => 124,  261 => 123,  259 => 122,  249 => 115,  245 => 114,  237 => 109,  228 => 103,  219 => 97,  210 => 91,  201 => 85,  192 => 79,  183 => 73,  176 => 69,  171 => 66,  162 => 65,  144 => 56,  135 => 50,  121 => 39,  105 => 26,  96 => 20,  92 => 19,  88 => 18,  81 => 14,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
                         <li><a href=\"#\">Account Settings <span class=\"glyphicon glyphicon-cog pull-right\"></span></a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"{{ path('/statistique')}}\">User stats <span class=\"glyphicon glyphicon-stats pull-right\"></span></a></li>
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
                      <a href=\"{{ path('/group',{'ordre':'exp','sens':'desc','all':all}) }}\">-</a>Experience
                      <a href=\"{{ path('/group',{'ordre':'exp', 'sens':'asc','all':all}) }}\">+</a>
                    </th> 
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'nom', 'sens':'desc','all':all}) }}\">-</a>Nom
                      <a href=\"{{ path('/group',{'ordre':'nom', 'sens':'asc','all':all}) }}\">+</a>
                    </th>
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'argent', 'sens':'desc','all':all}) }}\">-</a>Argent
                      <a href=\"{{ path('/group',{'ordre':'argent', 'sens':'asc','all':all}) }}\">+</a>
                    </th>
                    <th>
                      <a href=\"{{ path('/group',{'ordre':'nbh', 'sens':'desc','all':all}) }}\">-</a>Homme
                      <a href=\"{{ path('/group',{'ordre':'nbh', 'sens':'asc','all':all}) }}\">+</a>
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
