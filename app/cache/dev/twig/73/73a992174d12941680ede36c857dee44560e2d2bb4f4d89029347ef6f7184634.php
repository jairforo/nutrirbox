<?php

/* default/navbar.html.twig */
class __TwigTemplate_bcdab428a4ae85fdb019b4d9cf142a047aac86fc84099c227150e5cd13b8884f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_690b052b1b4a1cd666b1c230ac67a62237e2cb2fc8e7a58941dac5aab3da6281 = $this->env->getExtension("native_profiler");
        $__internal_690b052b1b4a1cd666b1c230ac67a62237e2cb2fc8e7a58941dac5aab3da6281->enter($__internal_690b052b1b4a1cd666b1c230ac67a62237e2cb2fc8e7a58941dac5aab3da6281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        // line 1
        echo "<div id=\"navbar\" class=\"navbar navbar-default\">
    ";
        // line 2
        $this->displayBlock('navbar', $context, $blocks);
        // line 73
        echo "</div>
";
        
        $__internal_690b052b1b4a1cd666b1c230ac67a62237e2cb2fc8e7a58941dac5aab3da6281->leave($__internal_690b052b1b4a1cd666b1c230ac67a62237e2cb2fc8e7a58941dac5aab3da6281_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2b5fd209e98a60d475ad18df3a7abba3da4944ed138f713c4da33dacc973c877 = $this->env->getExtension("native_profiler");
        $__internal_2b5fd209e98a60d475ad18df3a7abba3da4944ed138f713c4da33dacc973c877->enter($__internal_2b5fd209e98a60d475ad18df3a7abba3da4944ed138f713c4da33dacc973c877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
        <script type=\"text/javascript\">
            try {
                ace.settings.check('navbar', 'fixed');
            } catch (e) {
            }
        </script>
        <div class=\"navbar-container\" id=\"navbar-container\">
            <button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
                <span class=\"sr-only\">Toggle sidebar</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"navbar-header pull-left\">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_dashboard");
        echo "\" class=\"navbar-brand\">
                    <small>
                        <i class=\"fa fa-pencil-square-o\"></i>
                        ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : $this->getContext($context, "app_name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["app_slogan"]) ? $context["app_slogan"] : $this->getContext($context, "app_slogan")), "html", null, true);
        echo "
                    </small>
                </a>
            </div>
            <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
                <ul class=\"nav ace-nav\">
";
        // line 28
        echo "                    ";
        // line 29
        echo "                    <li class=\"light-blue\">
                        <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
";
        // line 34
        echo "                                <img alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "noNome", array()), "html", null, true);
        echo "\" class=\"nav-user-photo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/avatars/profile-pic.jpg"), "html", null, true);
        echo "\" />
";
        // line 36
        echo "                            <span class=\"user-info\">
                                ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tpSexo", array()) == "F")) {
            // line 38
            echo "                                    <small>Bem vinda,</small>
                                ";
        } else {
            // line 40
            echo "                                    <small>Bem vindo,</small>
                                ";
        }
        // line 42
        echo "                                ";
        $context["noPessoa"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "noNome", array()), " ");
        // line 43
        echo "                                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noPessoa"]) ? $context["noPessoa"] : $this->getContext($context, "noPessoa")), 0, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noPessoa"]) ? $context["noPessoa"] : $this->getContext($context, "noPessoa")), (twig_length_filter($this->env, (isset($context["noPessoa"]) ? $context["noPessoa"] : $this->getContext($context, "noPessoa"))) - 1), array(), "array"), "html", null, true);
        echo "
                            </span>
                            <i class=\"ace-icon fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                            <li>
                                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("user_perfil");
        echo "\">
                                    <i class=\"ace-icon fa fa-user\"></i>
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tourn-btn\">
                                    <i class=\"ace-icon fa fa-globe\"></i>
                                    Tour
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                                    <i class=\"ace-icon fa fa-power-off\"></i>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    ";
        
        $__internal_2b5fd209e98a60d475ad18df3a7abba3da4944ed138f713c4da33dacc973c877->leave($__internal_2b5fd209e98a60d475ad18df3a7abba3da4944ed138f713c4da33dacc973c877_prof);

    }

    public function getTemplateName()
    {
        return "default/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  116 => 49,  104 => 43,  101 => 42,  97 => 40,  93 => 38,  91 => 37,  88 => 36,  81 => 34,  77 => 29,  75 => 28,  64 => 20,  58 => 17,  36 => 2,  28 => 73,  26 => 2,  23 => 1,);
    }
}
/* <div id="navbar" class="navbar navbar-default">*/
/*     {% block navbar %} */
/*         <script type="text/javascript">*/
/*             try {*/
/*                 ace.settings.check('navbar', 'fixed');*/
/*             } catch (e) {*/
/*             }*/
/*         </script>*/
/*         <div class="navbar-container" id="navbar-container">*/
/*             <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">*/
/*                 <span class="sr-only">Toggle sidebar</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <div class="navbar-header pull-left">*/
/*                 <a href="{{ path('user_dashboard') }}" class="navbar-brand">*/
/*                     <small>*/
/*                         <i class="fa fa-pencil-square-o"></i>*/
/*                         {{ app_name }} {{ app_slogan }}*/
/*                     </small>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="navbar-buttons navbar-header pull-right" role="navigation">*/
/*                 <ul class="nav ace-nav">*/
/* {#                    {{ render(controller('NutrirBoxBundle:Default:widgetPlanejamento')) }}#}*/
/* {#                    {{ render(controller('NutrirBoxBundle:Default:widgetAlerta')) }}#}*/
/*                     {#{{ render(controller('NutrirBoxBundle:Default:widgetMensagem')) }}#}*/
/*                     <li class="light-blue">*/
/*                         <a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* {#                            {% if (app.user.imFoto) %}#}*/
/* {#                                <img alt="{{app.user.noNome}}" class="nav-user-photo" src="{{asset('uploads/avatar/')}}{{app.user.imFoto}}" />#}*/
/* {#                            {% else  %}#}*/
/*                                 <img alt="{{app.user.noNome}}" class="nav-user-photo" src="{{asset('bundles/nutrirbox/dist/avatars/profile-pic.jpg')}}" />*/
/* {#                            {% endif %}#}*/
/*                             <span class="user-info">*/
/*                                 {% if (app.user.tpSexo == 'F')%}*/
/*                                     <small>Bem vinda,</small>*/
/*                                 {% else %}*/
/*                                     <small>Bem vindo,</small>*/
/*                                 {% endif %}*/
/*                                 {% set noPessoa = app.user.noNome|split(' ') %}*/
/*                                 {{ noPessoa[0] }} {{ noPessoa[noPessoa|length -1]}}*/
/*                             </span>*/
/*                             <i class="ace-icon fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/*                             <li>*/
/*                                 <a href="{{ path('user_perfil') }}">*/
/*                                     <i class="ace-icon fa fa-user"></i>*/
/*                                     Perfil*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tourn-btn">*/
/*                                     <i class="ace-icon fa fa-globe"></i>*/
/*                                     Tour*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="{{ path('logout') }}">*/
/*                                     <i class="ace-icon fa fa-power-off"></i>*/
/*                                     Sair*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* </div>*/
/* */
