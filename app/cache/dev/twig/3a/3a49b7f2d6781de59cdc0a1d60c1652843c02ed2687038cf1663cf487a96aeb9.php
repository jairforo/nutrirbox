<?php

/* default/sidebar-admin.html.twig */
class __TwigTemplate_349f8e62e98bcbc646898a28651dad1181176ba8d2f139d325a195506582aa57 extends Twig_Template
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
        $__internal_2480636eed8c25c0e3785718ca2976b739949836b4191068e4fde503fa4ebd4a = $this->env->getExtension("native_profiler");
        $__internal_2480636eed8c25c0e3785718ca2976b739949836b4191068e4fde503fa4ebd4a->enter($__internal_2480636eed8c25c0e3785718ca2976b739949836b4191068e4fde503fa4ebd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sidebar-admin.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                <i class=\"menu-icon fa fa-tachometer\"></i>
                <span class=\"menu-text\"> Dashboard </span>
            </a>
            <b class=\"arrow\"></b>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-user\"></i>
                <span class=\"menu-text\">
                    Perfil
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_perfil");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Lista
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_perfil_new");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-users\"></i>
                <span class=\"menu-text\">
                    Clientes
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("admin_pessoa");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Lista
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("admin_pessoa_new");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-money\"></i>
                <span class=\"menu-text\">
                    Tipos de Ingredientes
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Lista
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("admin_tipoingrediente_new");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-money\"></i>
                <span class=\"menu-text\">
                    Ingredientes
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("admin_ingrediente");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Lista
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("admin_ingrediente_new");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
                    </a>
                    <b class=\"arrow\"></b>
                </li>
            </ul>
        </li>
        <li class=\"\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-money\"></i>
                <span class=\"menu-text\">
                    Pedido
                </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">
                <li class=\"\">
                    <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("admin_pedido");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Lista
                    </a>
                    <b class=\"arrow\"></b>
                </li>
                <li class=\"\">
                    <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("admin_pedido_new");
        echo "\">
                        <i class=\"menu-icon fa fa-caret-right\"></i>
                        Novo
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
        
        $__internal_2480636eed8c25c0e3785718ca2976b739949836b4191068e4fde503fa4ebd4a->leave($__internal_2480636eed8c25c0e3785718ca2976b739949836b4191068e4fde503fa4ebd4a_prof);

    }

    public function getTemplateName()
    {
        return "default/sidebar-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 160,  203 => 153,  181 => 134,  171 => 127,  149 => 108,  139 => 101,  117 => 82,  107 => 75,  85 => 56,  75 => 49,  55 => 32,  22 => 1,);
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
/*             <a href="{{ path('admin_dashboard') }}">*/
/*                 <i class="menu-icon fa fa-tachometer"></i>*/
/*                 <span class="menu-text"> Dashboard </span>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-user"></i>*/
/*                 <span class="menu-text">*/
/*                     Perfil*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_perfil')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Lista*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_perfil_new')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-users"></i>*/
/*                 <span class="menu-text">*/
/*                     Clientes*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_pessoa')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Lista*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_pessoa_new')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-money"></i>*/
/*                 <span class="menu-text">*/
/*                     Tipos de Ingredientes*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_tipoingrediente')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Lista*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_tipoingrediente_new')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-money"></i>*/
/*                 <span class="menu-text">*/
/*                     Ingredientes*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_ingrediente')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Lista*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_ingrediente_new')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         <li class="">*/
/*             <a href="#" class="dropdown-toggle">*/
/*                 <i class="menu-icon fa fa-money"></i>*/
/*                 <span class="menu-text">*/
/*                     Pedido*/
/*                 </span>*/
/*                 <b class="arrow fa fa-angle-down"></b>*/
/*             </a>*/
/*             <b class="arrow"></b>*/
/*             <ul class="submenu">*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_pedido')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Lista*/
/*                     </a>*/
/*                     <b class="arrow"></b>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="{{ path('admin_pedido_new')}}">*/
/*                         <i class="menu-icon fa fa-caret-right"></i>*/
/*                         Novo*/
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
