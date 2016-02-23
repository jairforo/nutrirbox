<?php

/* default/breadcrumbs.html.twig */
class __TwigTemplate_f3702b0b6e0672a37bd35affa756d336033b5f3e057708a65f189194ae4c63fa extends Twig_Template
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
        $__internal_fe425a0ed5834bbfdaa596bcbcc9b62a46c0b34988e179ef77eb676e320c1e61 = $this->env->getExtension("native_profiler");
        $__internal_fe425a0ed5834bbfdaa596bcbcc9b62a46c0b34988e179ef77eb676e320c1e61->enter($__internal_fe425a0ed5834bbfdaa596bcbcc9b62a46c0b34988e179ef77eb676e320c1e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/breadcrumbs.html.twig"));

        // line 1
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <script type=\"text/javascript\">
        try {
            ace.settings.check('breadcrumbs', 'fixed');
        } catch (e) {
        }
    </script>

    <!-- /.breadcrumb -->
    ";
        // line 10
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
    ";
        // line 22
        echo "    <!-- /.breadcrumb -->
    <!-- busca -->
    ";
        // line 32
        echo "    <!-- busca -->
</div>";
        
        $__internal_fe425a0ed5834bbfdaa596bcbcc9b62a46c0b34988e179ef77eb676e320c1e61->leave($__internal_fe425a0ed5834bbfdaa596bcbcc9b62a46c0b34988e179ef77eb676e320c1e61_prof);

    }

    public function getTemplateName()
    {
        return "default/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 32,  37 => 22,  33 => 10,  22 => 1,);
    }
}
/* <div class="breadcrumbs" id="breadcrumbs">*/
/*     <script type="text/javascript">*/
/*         try {*/
/*             ace.settings.check('breadcrumbs', 'fixed');*/
/*         } catch (e) {*/
/*         }*/
/*     </script>*/
/* */
/*     <!-- /.breadcrumb -->*/
/*     {{ wo_render_breadcrumbs() }}*/
/*     {#<ul class="breadcrumb">*/
/*         <li>*/
/*             <i class="ace-icon fa fa-home home-icon"></i>*/
/*             <a href="#">Home</a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             <a href="#">Other Pages</a>*/
/*         </li>*/
/*         <li class="active">Blank Page</li>*/
/*     </ul>#}*/
/*     <!-- /.breadcrumb -->*/
/*     <!-- busca -->*/
/*     {#<div class="nav-search" id="nav-search">*/
/*         <form class="form-search">*/
/*             <span class="input-icon">*/
/*                 <input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />*/
/*                 <i class="ace-icon fa fa-search nav-search-icon"></i>*/
/*             </span>*/
/*         </form>*/
/*     </div>#}*/
/*     <!-- busca -->*/
/* </div>*/
