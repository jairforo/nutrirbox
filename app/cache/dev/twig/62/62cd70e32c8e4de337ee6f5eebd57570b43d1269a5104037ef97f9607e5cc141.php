<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_361cb028b0875b82773ae5d4573046598a0404834bdb01163b3656249644ed19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d52e8a42f293ed31447cd904c8d064b0e2f3b24f3afc49edbace2b9550d0905 = $this->env->getExtension("native_profiler");
        $__internal_2d52e8a42f293ed31447cd904c8d064b0e2f3b24f3afc49edbace2b9550d0905->enter($__internal_2d52e8a42f293ed31447cd904c8d064b0e2f3b24f3afc49edbace2b9550d0905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d52e8a42f293ed31447cd904c8d064b0e2f3b24f3afc49edbace2b9550d0905->leave($__internal_2d52e8a42f293ed31447cd904c8d064b0e2f3b24f3afc49edbace2b9550d0905_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a31a532442032888fb93ffe29675fb5138437b30022f6e7618e918a25e4bf0e4 = $this->env->getExtension("native_profiler");
        $__internal_a31a532442032888fb93ffe29675fb5138437b30022f6e7618e918a25e4bf0e4->enter($__internal_a31a532442032888fb93ffe29675fb5138437b30022f6e7618e918a25e4bf0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a31a532442032888fb93ffe29675fb5138437b30022f6e7618e918a25e4bf0e4->leave($__internal_a31a532442032888fb93ffe29675fb5138437b30022f6e7618e918a25e4bf0e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b75f3e981dcd98f39df7ba18a384e9558cda71bdb5b647a9c973aa5ca2f9d180 = $this->env->getExtension("native_profiler");
        $__internal_b75f3e981dcd98f39df7ba18a384e9558cda71bdb5b647a9c973aa5ca2f9d180->enter($__internal_b75f3e981dcd98f39df7ba18a384e9558cda71bdb5b647a9c973aa5ca2f9d180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b75f3e981dcd98f39df7ba18a384e9558cda71bdb5b647a9c973aa5ca2f9d180->leave($__internal_b75f3e981dcd98f39df7ba18a384e9558cda71bdb5b647a9c973aa5ca2f9d180_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f2f8ba9be6fe5a10b3f6df71f1809f2236167d1d2f08364aa1deb74dfd7e559 = $this->env->getExtension("native_profiler");
        $__internal_9f2f8ba9be6fe5a10b3f6df71f1809f2236167d1d2f08364aa1deb74dfd7e559->enter($__internal_9f2f8ba9be6fe5a10b3f6df71f1809f2236167d1d2f08364aa1deb74dfd7e559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9f2f8ba9be6fe5a10b3f6df71f1809f2236167d1d2f08364aa1deb74dfd7e559->leave($__internal_9f2f8ba9be6fe5a10b3f6df71f1809f2236167d1d2f08364aa1deb74dfd7e559_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
