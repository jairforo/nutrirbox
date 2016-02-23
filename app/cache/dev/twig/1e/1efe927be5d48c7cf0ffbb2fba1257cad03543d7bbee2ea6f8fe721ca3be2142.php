<?php

/* default/footer.html.twig */
class __TwigTemplate_7df9113fda9d28dbe9739ed9bd47b671047dbd2609d8932bfa0516310879677f extends Twig_Template
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
        $__internal_1328bed00011997ad1c6e5649c855e4fd97fef95491924f89e68fb16bfe0c29c = $this->env->getExtension("native_profiler");
        $__internal_1328bed00011997ad1c6e5649c855e4fd97fef95491924f89e68fb16bfe0c29c->enter($__internal_1328bed00011997ad1c6e5649c855e4fd97fef95491924f89e68fb16bfe0c29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<div class=\"footer\">
    <div class=\"footer-inner\">
        <div class=\"footer-content\">
            <span class=\"bigger-120\">
                <span class=\"blue bolder\">&copy; ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["app_year"]) ? $context["app_year"] : $this->getContext($context, "app_year")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : $this->getContext($context, "app_name")), "html", null, true);
        echo "</span>
                <small>Versão: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : $this->getContext($context, "app_version")), "html", null, true);
        echo "</small>
            </span>
           ";
        // line 20
        echo "        </div>
    </div>
</div>";
        
        $__internal_1328bed00011997ad1c6e5649c855e4fd97fef95491924f89e68fb16bfe0c29c->leave($__internal_1328bed00011997ad1c6e5649c855e4fd97fef95491924f89e68fb16bfe0c29c_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 20,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="footer">*/
/*     <div class="footer-inner">*/
/*         <div class="footer-content">*/
/*             <span class="bigger-120">*/
/*                 <span class="blue bolder">&copy; {{ app_year }} {{ app_name }}</span>*/
/*                 <small>Versão: {{ app_version }}</small>*/
/*             </span>*/
/*            {# &nbsp; &nbsp;*/
/*             <span class="action-buttons">*/
/*                 <a href="#">*/
/*                     <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>*/
/*                 </a>*/
/*                 <a href="#">*/
/*                     <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>*/
/*                 </a>*/
/*                 <a href="#">*/
/*                     <i class="ace-icon fa fa-rss-square orange bigger-150"></i>*/
/*                 </a>*/
/*             </span>#}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
