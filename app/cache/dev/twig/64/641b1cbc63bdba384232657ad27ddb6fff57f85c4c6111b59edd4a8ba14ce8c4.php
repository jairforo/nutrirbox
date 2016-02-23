<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b83ac74b2e8de71d5392e7add1eaf9cc1ae4a70accd317e6b9868f92515b35fd extends Twig_Template
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
        $__internal_b1cc4c91a341a89778c3b4123a8d8e9542aeaf9a3e8f8c155edf3eaa2f05f985 = $this->env->getExtension("native_profiler");
        $__internal_b1cc4c91a341a89778c3b4123a8d8e9542aeaf9a3e8f8c155edf3eaa2f05f985->enter($__internal_b1cc4c91a341a89778c3b4123a8d8e9542aeaf9a3e8f8c155edf3eaa2f05f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b1cc4c91a341a89778c3b4123a8d8e9542aeaf9a3e8f8c155edf3eaa2f05f985->leave($__internal_b1cc4c91a341a89778c3b4123a8d8e9542aeaf9a3e8f8c155edf3eaa2f05f985_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
