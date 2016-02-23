<?php

/* NutrirBoxBundle:Pessoa:show.html.twig */
class __TwigTemplate_c1f12cc0d994d25f0892ec441b07cbd72ebc4b7fb12744492be759ee310f3c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NutrirBoxBundle:Pessoa:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b2ef235103ac5e2dbe2d504f24c7a21a2e85501af6e8932a025c696c2a1f21b = $this->env->getExtension("native_profiler");
        $__internal_6b2ef235103ac5e2dbe2d504f24c7a21a2e85501af6e8932a025c696c2a1f21b->enter($__internal_6b2ef235103ac5e2dbe2d504f24c7a21a2e85501af6e8932a025c696c2a1f21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Pessoa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2ef235103ac5e2dbe2d504f24c7a21a2e85501af6e8932a025c696c2a1f21b->leave($__internal_6b2ef235103ac5e2dbe2d504f24c7a21a2e85501af6e8932a025c696c2a1f21b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e92760486af752ab9bea63b722da687f962b73509aeebab491203ebaa6ce30b = $this->env->getExtension("native_profiler");
        $__internal_0e92760486af752ab9bea63b722da687f962b73509aeebab491203ebaa6ce30b->enter($__internal_0e92760486af752ab9bea63b722da687f962b73509aeebab491203ebaa6ce30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pessoa</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Copessoa</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coPessoa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Noemail</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nosenha</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noSenha", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nucpf</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nuCpf", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nonome</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noNome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nosalt</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noSalt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dtnascimento</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtNascimento", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dtcadastro</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtCadastro", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nutelefone</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nuTelefone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nucelular</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nuCelular", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imfoto</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imFoto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isativo</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isAtivo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("user_pessoa");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_pessoa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coPessoa", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_0e92760486af752ab9bea63b722da687f962b73509aeebab491203ebaa6ce30b->leave($__internal_0e92760486af752ab9bea63b722da687f962b73509aeebab491203ebaa6ce30b_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Pessoa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  143 => 66,  135 => 61,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Pessoa</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Copessoa</th>*/
/*                 <td>{{ entity.coPessoa }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Noemail</th>*/
/*                 <td>{{ entity.noEmail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nosenha</th>*/
/*                 <td>{{ entity.noSenha }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nucpf</th>*/
/*                 <td>{{ entity.nuCpf }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nonome</th>*/
/*                 <td>{{ entity.noNome }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nosalt</th>*/
/*                 <td>{{ entity.noSalt }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dtnascimento</th>*/
/*                 <td>{{ entity.dtNascimento|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dtcadastro</th>*/
/*                 <td>{{ entity.dtCadastro|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nutelefone</th>*/
/*                 <td>{{ entity.nuTelefone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nucelular</th>*/
/*                 <td>{{ entity.nuCelular }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imfoto</th>*/
/*                 <td>{{ entity.imFoto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isativo</th>*/
/*                 <td>{{ entity.isAtivo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user_pessoa') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('user_pessoa_edit', { 'id': entity.coPessoa }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
