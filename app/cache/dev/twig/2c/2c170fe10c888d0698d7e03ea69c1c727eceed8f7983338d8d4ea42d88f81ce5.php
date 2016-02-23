<?php

/* default/sidebar.html.twig */
class __TwigTemplate_4f4178f95949580f7954cf91e1b7805a5b459c7295d5b298bb8b27ae8ddad4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb3767c6ca790f5731461848fa499ea1ecd80cc1e77114173001406b6e098a39 = $this->env->getExtension("native_profiler");
        $__internal_bb3767c6ca790f5731461848fa499ea1ecd80cc1e77114173001406b6e098a39->enter($__internal_bb3767c6ca790f5731461848fa499ea1ecd80cc1e77114173001406b6e098a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        // line 1
        echo "<div id=\"sidebar\" class=\"sidebar responsive\">
    <script type=\"text/javascript\">
        try {
            ace.settings.check('sidebar', 'fixed');
        } catch (e) {
        }
    </script>
    <div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
        <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
            <button class=\"btn btn-success\">
                <i class=\"ace-icon fa fa-signal\"></i>
            </button>
            <button class=\"btn btn-info\">
                <i class=\"ace-icon fa fa-pencil\"></i>
            </button>
            <button class=\"btn btn-warning\">
                <i class=\"ace-icon fa fa-users\"></i>
            </button>
            <button class=\"btn btn-danger\">
                <i class=\"ace-icon fa fa-cogs\"></i>
            </button>
        </div>
        <div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
            <span class=\"btn btn-success\"></span>
            <span class=\"btn btn-info\"></span>
            <span class=\"btn btn-warning\"></span>
            <span class=\"btn btn-danger\"></span>
        </div>
    </div>
    <ul class=\"nav nav-list\">
        <li class=\"\">
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("user_dashboard");
        echo "\">
                <i class=\"menu-icon fa fa-tachometer\"></i>
                <span class=\"menu-text\"> Dashboard </span>
            </a>
            <b class=\"arrow\"></b>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-book\"></i>
                <span class=\"menu-text\">
                    Meus Pedidos
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("user_meus_pedidos");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Listar
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-user\"></i>
                <span class=\"menu-text\"> Perfil </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("user_perfil");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Meus Dados
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
        <i class=\"ace-icon fa fa-angle-double-left\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
    </div>

    <script type=\"text/javascript\">
        try {
            ace.settings.check('sidebar', 'collapsed');
        } catch (e) {
        }
    </script>
</div>
";
        
        $__internal_bb3767c6ca790f5731461848fa499ea1ecd80cc1e77114173001406b6e098a39->leave($__internal_bb3767c6ca790f5731461848fa499ea1ecd80cc1e77114173001406b6e098a39_prof);

    }

    public function getTemplateName()
    {
        return "default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 73,  75 => 49,  55 => 32,  22 => 1,);
    }
}
/* <div id="sidebar" class="sidebar responsive">*/
/*     <script type="text/javascript">*/
/*         try {*/
/*             ace.settings.check('sidebar', 'fixed');*/
/*         } catch (e) {*/
/*         }*/
/*     </script>*/
/*     <div class="sidebar-shortcuts" id="sidebar-shortcuts">*/
/*         <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">*/
/*             <button class="btn btn-success">*/
/*                 <i class="ace-icon fa fa-signal"></i>*/
/*             </button>*/
/*             <button class="btn btn-info">*/
/*                 <i class="ace-icon fa fa-pencil"></i>*/
/*             </button>*/
/*             <button class="btn btn-warning">*/
/*                 <i class="ace-icon fa fa-users"></i>*/
/*             </button>*/
/*             <button class="btn btn-danger">*/
/*                 <i class="ace-icon fa fa-cogs"></i>*/
/*             </button>*/
/*         </div>*/
/*         <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">*/
/*             <span class="btn btn-success"></span>*/
/*             <span class="btn btn-info"></span>*/
/*             <span class="btn btn-warning"></span>*/
/*             <span class="btn btn-danger"></span>*/
/*         </div>*/
/*     </div>*/
/*     <ul class="nav nav-list">*/
/*         <li class="">*/
/*             <a href="{{ path('user_dashboard') }}">*/
/*                 <i class="menu-icon fa fa-tachometer"></i>*/
/*                 <span class="menu-text"> Dashboard </span>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-book"></i>*/
/*                 <span class="menu-text">*/
/*                     Meus Pedidos*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('user_meus_pedidos') }}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Listar*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-user"></i>*/
/*                 <span class="menu-text"> Perfil </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{path('user_perfil')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Meus Dados*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul><!-- /.nav-list -->*/
/* */
/*     <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">*/
/*         <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         try {*/
/*             ace.settings.check('sidebar', 'collapsed');*/
/*         } catch (e) {*/
/*         }*/
/*     </script>*/
/* </div>*/
/* */
