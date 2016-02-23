<?php

/* NutrirBoxBundle:Default:dashboard.html.twig */
class __TwigTemplate_3c5a967dcae3a7a3db54d7ad0e51004ac8d0b3896cecb114587c4c035b9567f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'subheader' => array($this, 'block_subheader'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NutrirBoxBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44c9b2030ee26d817d3c259a6d39926ff27c25b58885c2fc4f376b1eb9f56d76 = $this->env->getExtension("native_profiler");
        $__internal_44c9b2030ee26d817d3c259a6d39926ff27c25b58885c2fc4f376b1eb9f56d76->enter($__internal_44c9b2030ee26d817d3c259a6d39926ff27c25b58885c2fc4f376b1eb9f56d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c9b2030ee26d817d3c259a6d39926ff27c25b58885c2fc4f376b1eb9f56d76->leave($__internal_44c9b2030ee26d817d3c259a6d39926ff27c25b58885c2fc4f376b1eb9f56d76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efe08c4b88cc3cd5e74d3dae132f99f5faf608ff3a1a4fd022a5afb646ff0967 = $this->env->getExtension("native_profiler");
        $__internal_efe08c4b88cc3cd5e74d3dae132f99f5faf608ff3a1a4fd022a5afb646ff0967->enter($__internal_efe08c4b88cc3cd5e74d3dae132f99f5faf608ff3a1a4fd022a5afb646ff0967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_efe08c4b88cc3cd5e74d3dae132f99f5faf608ff3a1a4fd022a5afb646ff0967->leave($__internal_efe08c4b88cc3cd5e74d3dae132f99f5faf608ff3a1a4fd022a5afb646ff0967_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_d3ce71ab196cc0358a3cd54cf697243f71f05ab29e03e575cf133fb3d1f2d3cd = $this->env->getExtension("native_profiler");
        $__internal_d3ce71ab196cc0358a3cd54cf697243f71f05ab29e03e575cf133fb3d1f2d3cd->enter($__internal_d3ce71ab196cc0358a3cd54cf697243f71f05ab29e03e575cf133fb3d1f2d3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Dashboard ";
        
        $__internal_d3ce71ab196cc0358a3cd54cf697243f71f05ab29e03e575cf133fb3d1f2d3cd->leave($__internal_d3ce71ab196cc0358a3cd54cf697243f71f05ab29e03e575cf133fb3d1f2d3cd_prof);

    }

    // line 5
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_703f94e990098ce4eb3c5cbbad03c85e6d39471edded92e01392533db16638a0 = $this->env->getExtension("native_profiler");
        $__internal_703f94e990098ce4eb3c5cbbad03c85e6d39471edded92e01392533db16638a0->enter($__internal_703f94e990098ce4eb3c5cbbad03c85e6d39471edded92e01392533db16638a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " Estatíticas ";
        
        $__internal_703f94e990098ce4eb3c5cbbad03c85e6d39471edded92e01392533db16638a0->leave($__internal_703f94e990098ce4eb3c5cbbad03c85e6d39471edded92e01392533db16638a0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3519a1b0850db000cfb957bb172e7ab1a5e71d522abeddf4c9a8c0312e2fe7a1 = $this->env->getExtension("native_profiler");
        $__internal_3519a1b0850db000cfb957bb172e7ab1a5e71d522abeddf4c9a8c0312e2fe7a1->enter($__internal_3519a1b0850db000cfb957bb172e7ab1a5e71d522abeddf4c9a8c0312e2fe7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <!-- page specific plugin styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3519a1b0850db000cfb957bb172e7ab1a5e71d522abeddf4c9a8c0312e2fe7a1->leave($__internal_3519a1b0850db000cfb957bb172e7ab1a5e71d522abeddf4c9a8c0312e2fe7a1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a4931baa3ec7ce35300d39008a487e9fe5375aa945b3edbff3d05610d7f0c1 = $this->env->getExtension("native_profiler");
        $__internal_18a4931baa3ec7ce35300d39008a487e9fe5375aa945b3edbff3d05610d7f0c1->enter($__internal_18a4931baa3ec7ce35300d39008a487e9fe5375aa945b3edbff3d05610d7f0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
        </div>
    </div>
";
        
        $__internal_18a4931baa3ec7ce35300d39008a487e9fe5375aa945b3edbff3d05610d7f0c1->leave($__internal_18a4931baa3ec7ce35300d39008a487e9fe5375aa945b3edbff3d05610d7f0c1_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b2e39d41abcb15f2ceef91131bb62bd219f143d3783742eb931ea3371df767d = $this->env->getExtension("native_profiler");
        $__internal_0b2e39d41abcb15f2ceef91131bb62bd219f143d3783742eb931ea3371df767d->enter($__internal_0b2e39d41abcb15f2ceef91131bb62bd219f143d3783742eb931ea3371df767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- ace scripts -->
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootstrap-tour-standalone.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            //bootbox.alert('Olá, Jair Foro seja bem vindo ao nosso Sistema');
            
            var tour = new Tour({
                name: \"tour-welcome\",
                backdrop: true,
                backdropPadding: 0,
                template: \"<div class='popover tour' style='max-width: 570px;'>\" +
                        \"\t<div class='arrow'></div>\" +
                        \"\t\t<h3 class='popover-title'></h3>\" +
                        \"\t\t<div class='popover-content'></div>\" +
                        \"\t\t<div class='popover-navigation'>\" +
                        \"\t\t\t<button class='btn btn-default' data-role='prev'>« Anterior</button>\" +
                        \"\t\t\t<button class='btn btn-default' data-role='next'>Proximo »</button>\" +
                        \"\t\t\t<span data-role='separator'>&nbsp;</span>\" +
                        \"\t\t\t<button class='btn btn-default' data-role='end'>Finalizar</button>\" +
                        \"\t\t</div>\" +
                        \"</div>\",
                steps: [
                    {
                        placement: \"bottom\",
                        element: \".light-blue\",
                        title: \"Apresentação Geral\",
                        content: \"<p>Nesta primeira etapa, que envolve o diagnóstico da rede de ensino, o sistema apresenta os 6 ícones que estão em destaque.</p>\" +
                                \"<p>A seguir, faremos uma visita guiada em cada um desses ícones.</p>\"
                    },
                    {
                        placement: \"bottom\",
                        element: \"#sidebar-shortcuts\",
                        title: \"Apresentação Geral\",
                        content: \"<p>Nesta primeira etapa, que envolve o diagnóstico da rede de ensino, o sistema apresenta os 6 ícones que estão em destaque.</p>\" +
                                \"<p>A seguir, faremos uma visita guiada em cada um desses ícones.</p>\"
                    },
                    {
                        placement: \"bottom\",
                        element: \".light-blue\",
                        title: \"Diagnóstico\",
                        content: \"<p>O diagnóstico tem por objetivo promover uma ampla reflexão acerca da situação educacional da rede municipal ou estadual/distrital. Assim, a coleta de informações e o seu detalhamento deverão ser realizados em conjunto pela equipe técnica local.</p>\" +
                                \"<p>Ao clicar neste ícone o usuário avançará para o início do seu Diagnóstico. Caso tenha esquecido de preencher alguns dos campos obrigatórios dos ícones anteriores, no entanto, o sistema emitirá um alerta e mostrará quais os campos estão faltando ser preenchidos.</p>\",
                        ";
        // line 68
        echo "                    },
                    {
                        orphan: true,
                        title: \"Diagnóstico\",
                        content: \"Aguarde redirecionando...\",
                        container: \"body\",
                    }
                ]});

            \$('.tourn-btn').on('click', function () {
                tour.restart();
            });
        });
    </script>
";
        
        $__internal_0b2e39d41abcb15f2ceef91131bb62bd219f143d3783742eb931ea3371df767d->leave($__internal_0b2e39d41abcb15f2ceef91131bb62bd219f143d3783742eb931ea3371df767d_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 68,  129 => 24,  125 => 23,  119 => 21,  113 => 20,  102 => 14,  96 => 13,  87 => 10,  81 => 8,  75 => 7,  63 => 5,  51 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "NutrirBoxBundle::base.html.twig" %}*/
/* */
/* {% block title %}Dashboard{% endblock %}*/
/* {% block header %} Dashboard {% endblock %}*/
/* {% block subheader %} Estatíticas {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <!-- page specific plugin styles -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/bootstrap-tour.min.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <!-- ace scripts -->*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/bootstrap-tour.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/bootstrap-tour-standalone.min.js')}}"></script>*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             //bootbox.alert('Olá, Jair Foro seja bem vindo ao nosso Sistema');*/
/*             */
/*             var tour = new Tour({*/
/*                 name: "tour-welcome",*/
/*                 backdrop: true,*/
/*                 backdropPadding: 0,*/
/*                 template: "<div class='popover tour' style='max-width: 570px;'>" +*/
/*                         "	<div class='arrow'></div>" +*/
/*                         "		<h3 class='popover-title'></h3>" +*/
/*                         "		<div class='popover-content'></div>" +*/
/*                         "		<div class='popover-navigation'>" +*/
/*                         "			<button class='btn btn-default' data-role='prev'>« Anterior</button>" +*/
/*                         "			<button class='btn btn-default' data-role='next'>Proximo »</button>" +*/
/*                         "			<span data-role='separator'>&nbsp;</span>" +*/
/*                         "			<button class='btn btn-default' data-role='end'>Finalizar</button>" +*/
/*                         "		</div>" +*/
/*                         "</div>",*/
/*                 steps: [*/
/*                     {*/
/*                         placement: "bottom",*/
/*                         element: ".light-blue",*/
/*                         title: "Apresentação Geral",*/
/*                         content: "<p>Nesta primeira etapa, que envolve o diagnóstico da rede de ensino, o sistema apresenta os 6 ícones que estão em destaque.</p>" +*/
/*                                 "<p>A seguir, faremos uma visita guiada em cada um desses ícones.</p>"*/
/*                     },*/
/*                     {*/
/*                         placement: "bottom",*/
/*                         element: "#sidebar-shortcuts",*/
/*                         title: "Apresentação Geral",*/
/*                         content: "<p>Nesta primeira etapa, que envolve o diagnóstico da rede de ensino, o sistema apresenta os 6 ícones que estão em destaque.</p>" +*/
/*                                 "<p>A seguir, faremos uma visita guiada em cada um desses ícones.</p>"*/
/*                     },*/
/*                     {*/
/*                         placement: "bottom",*/
/*                         element: ".light-blue",*/
/*                         title: "Diagnóstico",*/
/*                         content: "<p>O diagnóstico tem por objetivo promover uma ampla reflexão acerca da situação educacional da rede municipal ou estadual/distrital. Assim, a coleta de informações e o seu detalhamento deverão ser realizados em conjunto pela equipe técnica local.</p>" +*/
/*                                 "<p>Ao clicar neste ícone o usuário avançará para o início do seu Diagnóstico. Caso tenha esquecido de preencher alguns dos campos obrigatórios dos ícones anteriores, no entanto, o sistema emitirá um alerta e mostrará quais os campos estão faltando ser preenchidos.</p>",*/
/*                         {#onNext: function () {*/
/*                             document.location.href = "par3.php?modulo=principal/planoTrabalho/indicadoresQualitativos&acao=A&inuid=" + $('#inuid').val() + "&visualizar-sintese-diagnostico=1&tour=1";*/
/*                         }#}*/
/*                     },*/
/*                     {*/
/*                         orphan: true,*/
/*                         title: "Diagnóstico",*/
/*                         content: "Aguarde redirecionando...",*/
/*                         container: "body",*/
/*                     }*/
/*                 ]});*/
/* */
/*             $('.tourn-btn').on('click', function () {*/
/*                 tour.restart();*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %} */
/* */
