<?php

/* NutrirBoxBundle:Auth:login.html.twig */
class __TwigTemplate_79d60e44217e6fa860ffda7fd07ab1095e00cbedf9d3692d3759cbd2c9030620 extends Twig_Template
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
        $__internal_ff4b6d2d3af5ff9ff276d156e939127fd871e45dd9dde235675ff6e13cb8519e = $this->env->getExtension("native_profiler");
        $__internal_ff4b6d2d3af5ff9ff276d156e939127fd871e45dd9dde235675ff6e13cb8519e->enter($__internal_ff4b6d2d3af5ff9ff276d156e939127fd871e45dd9dde235675ff6e13cb8519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Auth:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"utf-8\" />
        <title>Login - Planejador de Estudos</title>
        <meta name=\"description\" content=\"User login page\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        <!-- bootstrap & fontawesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

        <!-- text fonts -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/css/css5c0a.css?family=Open+Sans:400,300"), "html", null, true);
        echo "\" />

        <!-- ace styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace.min.css"), "html", null, true);
        echo "\" />

        <!--[if lte IE 9]>
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace-part2.min.css"), "html", null, true);
        echo "\" />
        <![endif]-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

        <!--[if lte IE 9]>
          <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
        <![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    <body class=\"login-layout light-login\">
        <div class=\"main-container\">
            <div class=\"main-content\">
                <div class=\"row\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <div class=\"login-container\">
                            <div class=\"center\">
                                ";
        // line 50
        echo "                            </div>
                            <div class=\"space-6\"></div>
                            <div class=\"position-relative\">
                                <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
                                    <div class=\"widget-body\">
                                        <div class=\"widget-main\">
                                            <h4 class=\"header blue lighter bigger\">
                                                <i class=\"ace-icon fa fa-coffee green\"></i>
                                                Insira suas informações
                                            </h4>
                                            <div class=\"space-6\"></div>
                                            <form action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                                                ";
        // line 62
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 63
            echo "                                                    <div class=\"alert alert-block alert-warning\">
                                                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">
                                                            <i class=\"ace-icon fa fa-times\"></i>
                                                        </button>

                                                        <i class=\"ace-icon fa fa-check red\"></i>
                                                        <strong class=\"red\">
                                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "
                                                        </strong>
                                                    </div>
                                                ";
        }
        // line 74
        echo "                                                <fieldset>
                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"E-mail\" />
                                                            <i class=\"ace-icon fa fa-user\"></i>
                                                        </span>
                                                    </label>
                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Senha\" />
                                                            <i class=\"ace-icon fa fa-lock\"></i>
                                                        </span>
                                                    </label>
                                                    <div class=\"space\"></div>
                                                    <div class=\"clearfix\">
                                                        <label class=\"inline\">
                                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                                                            <span class=\"lbl\"> Lembre de mim</span>
                                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                                        </label>
                                                        <button type=\"submit\" class=\"width-35 pull-right btn btn-sm btn-primary\">
                                                            <i class=\"ace-icon fa fa-key\"></i>
                                                            <span class=\"bigger-110\">Entrar</span>
                                                        </button>
                                                    </div>
                                                    <div class=\"space-4\"></div>
                                                </fieldset>
                                            </form>
                                            <div class=\"social-or-login center\">
                                                <span class=\"bigger-110\">Ou entre Usando</span>
                                            </div>
                                            <div class=\"space-6\"></div>
                                            <div class=\"social-login center\">
                                                <a class=\"btn btn-primary\">
                                                    <i class=\"ace-icon fa fa-facebook\"></i>
                                                </a>
                                                <a class=\"btn btn-info\">
                                                    <i class=\"ace-icon fa fa-twitter\"></i>
                                                </a>
                                                <a class=\"btn btn-danger\">
                                                    <i class=\"ace-icon fa fa-google-plus\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"toolbar clearfix\">
                                            <div>
                                                <a href=\"#\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
                                                    <i class=\"ace-icon fa fa-arrow-left\"></i>
                                                    Esqueci minha senha
                                                </a>
                                            </div>
                                            <div>
                                                <a href=\"#\" data-target=\"#signup-box\" class=\"user-signup-link\">
                                                    Quero me cadastrar
                                                    <i class=\"ace-icon fa fa-arrow-right\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
                                    <div class=\"widget-body\">
                                        <div class=\"widget-main\">
                                            <h4 class=\"header red lighter bigger\">
                                                <i class=\"ace-icon fa fa-key\"></i>
                                                Recuperar a senha
                                            </h4>
                                            <div class=\"space-6\"></div>
                                            <p>
                                                Digite seu e-mail para receber as instruções.
                                            </p>
                                            <form>
                                                <fieldset>
                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"email\" class=\"form-control\" placeholder=\"E-mail\" />
                                                            <i class=\"ace-icon fa fa-envelope\"></i>
                                                        </span>
                                                    </label>
                                                    <div class=\"clearfix\">
                                                        <button type=\"button\" class=\"width-35 pull-right btn btn-sm btn-danger\">
                                                            <i class=\"ace-icon fa fa-lightbulb-o\"></i>
                                                            <span class=\"bigger-110\">Recuperar</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class=\"toolbar center\">
                                            <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                                Voltar ao Login
                                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id=\"signup-box\" class=\"signup-box widget-box no-border\">
                                    <div class=\"widget-body\">
                                        <div class=\"widget-main\">
                                            <h4 class=\"header green lighter bigger\">
                                                <i class=\"ace-icon fa fa-users blue\"></i>
                                                Cadastrar Novo Usuário
                                            </h4>

                                            <div class=\"space-6\"></div>
                                            <p> Inserir os dados de Cadastro: </p>

                                            <form action=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("pessoa_create");
        echo "\" method=\"POST\">
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                                <fieldset>
                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"text\" class=\"form-control\" id=\"noNome\" name=\"noNome\" placeholder=\"Nome\" />
                                                            <i class=\"ace-icon fa fa-user\"></i>
                                                        </span>
                                                    </label>

                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"email\" class=\"form-control\" id=\"noEmail\" name=\"noEmail\" placeholder=\"E-mail\" />
                                                            <i class=\"ace-icon fa fa-envelope\"></i>
                                                        </span>
                                                    </label>

                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"password\" class=\"form-control\" id=\"noSenha\" name=\"noSenha\" placeholder=\"Senha\" />
                                                            <i class=\"ace-icon fa fa-lock\"></i>
                                                        </span>
                                                    </label>

                                                    <label class=\"block clearfix\">
                                                        <span class=\"block input-icon input-icon-right\">
                                                            <input type=\"password\" class=\"form-control\" placeholder=\"Repita a Senha\" />
                                                            <i class=\"ace-icon fa fa-retweet\"></i>
                                                        </span>
                                                    </label>

                                                    <label class=\"block\">
                                                        <input type=\"checkbox\" class=\"ace\" />
                                                        <span class=\"lbl\">
                                                            Eu aceito o  
                                                            <a href=\"#\">Contrato de Usuário</a>
                                                        </span>
                                                    </label>

                                                    <div class=\"space-24\"></div>

                                                    <div class=\"clearfix\">
                                                        <button type=\"reset\" class=\"width-30 pull-left btn btn-sm\">
                                                            <i class=\"ace-icon fa fa-refresh\"></i>
                                                            <span class=\"bigger-110\">Limpar</span>
                                                        </button>

                                                        <button type=\"submit\" class=\"width-65 pull-right btn btn-sm btn-success\">
                                                            <span class=\"bigger-110\">Cadastrar</span>

                                                            <i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class=\"toolbar center\">
                                            <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                                <i class=\"ace-icon fa fa-arrow-left\"></i>
                                                Voltar ao Login
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                            <!--<div class=\"navbar-fixed-top align-right\">
                                <br />
                                &nbsp;
                                <a id=\"btn-login-dark\" href=\"#\">Dark</a>
                                &nbsp;
                                <span class=\"blue\">/</span>
                                &nbsp;
                                <a id=\"btn-login-blur\" href=\"#\">Blur</a>
                                &nbsp;
                                <span class=\"blue\">/</span>
                                &nbsp;
                                <a id=\"btn-login-light\" href=\"#\">Light</a>
                                &nbsp; &nbsp; &nbsp;
                            </div>-->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.min.js"), "html", null, true);
        echo ">\" + \"<\" + \"/script>\");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type=\"text/javascript\">
window.jQuery || document.write(\"<script src='";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery1x.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->
        <script type=\"text/javascript\">
            if ('ontouchstart' in document.documentElement)
                document.write(\"<script src='";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
        </script>

        <!-- inline scripts related to this page -->
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = \$(this).data('target');
                    \$('.widget-box.visible').removeClass('visible');//hide others
                    \$(target).addClass('visible');//show target
                });
            });



            //you don't need this, just used for changing background
            jQuery(function (\$) {
                \$('#btn-login-dark').on('click', function (e) {
                    \$('body').attr('class', 'login-layout');
                    \$('#id-text2').attr('class', 'white');
                    \$('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                \$('#btn-login-light').on('click', function (e) {
                    \$('body').attr('class', 'login-layout light-login');
                    \$('#id-text2').attr('class', 'grey');
                    \$('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                \$('#btn-login-blur').on('click', function (e) {
                    \$('body').attr('class', 'login-layout blur-login');
                    \$('#id-text2').attr('class', 'white');
                    \$('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        </script>
    </body>
</html>";
        
        $__internal_ff4b6d2d3af5ff9ff276d156e939127fd871e45dd9dde235675ff6e13cb8519e->leave($__internal_ff4b6d2d3af5ff9ff276d156e939127fd871e45dd9dde235675ff6e13cb8519e_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 294,  361 => 289,  351 => 282,  338 => 272,  246 => 183,  242 => 182,  149 => 92,  129 => 74,  122 => 70,  113 => 63,  111 => 62,  107 => 61,  94 => 50,  80 => 33,  76 => 32,  67 => 26,  61 => 23,  56 => 21,  50 => 18,  44 => 15,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt-br">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>Login - Planejador de Estudos</title>*/
/*         <meta name="description" content="User login page" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         <!-- bootstrap & fontawesome -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/bootstrap.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/css/font-awesome.min.css') }}" />*/
/* */
/*         <!-- text fonts -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/css/css5c0a.css?family=Open+Sans:400,300') }}" />*/
/* */
/*         <!-- ace styles -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace.min.css') }}" />*/
/* */
/*         <!--[if lte IE 9]>*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace-part2.min.css') }}" />*/
/*         <![endif]-->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace-rtl.min.css') }}" />*/
/* */
/*         <!--[if lte IE 9]>*/
/*           <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace-ie.min.css') }}" />*/
/*         <![endif]-->*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* */
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ asset('bundles/nutrirbox/dist/js/html5shiv.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/nutrirbox/dist/js/respond.min.js') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     <body class="login-layout light-login">*/
/*         <div class="main-container">*/
/*             <div class="main-content">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-10 col-sm-offset-1">*/
/*                         <div class="login-container">*/
/*                             <div class="center">*/
/*                                 {#<h1>*/
/*                                     <i class="ace-icon fa fa-leaf green"></i>*/
/*                                     <span class="red">Planejador</span>*/
/*                                     <span class="grey" id="id-text2">de Estudos</span>*/
/*                                 </h1>*/
/*                                 <h4 class="blue" id="id-company-text">&copy; Company Name</h4>#}*/
/*                             </div>*/
/*                             <div class="space-6"></div>*/
/*                             <div class="position-relative">*/
/*                                 <div id="login-box" class="login-box visible widget-box no-border">*/
/*                                     <div class="widget-body">*/
/*                                         <div class="widget-main">*/
/*                                             <h4 class="header blue lighter bigger">*/
/*                                                 <i class="ace-icon fa fa-coffee green"></i>*/
/*                                                 Insira suas informações*/
/*                                             </h4>*/
/*                                             <div class="space-6"></div>*/
/*                                             <form action="{{ path('login_check') }}" method="POST">*/
/*                                                 {% if error %}*/
/*                                                     <div class="alert alert-block alert-warning">*/
/*                                                         <button data-dismiss="alert" class="close" type="button">*/
/*                                                             <i class="ace-icon fa fa-times"></i>*/
/*                                                         </button>*/
/* */
/*                                                         <i class="ace-icon fa fa-check red"></i>*/
/*                                                         <strong class="red">*/
/*                                                             {{ error.message }}*/
/*                                                         </strong>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 <fieldset>*/
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="email" class="form-control" id="username" name="_username" placeholder="E-mail" />*/
/*                                                             <i class="ace-icon fa fa-user"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="password" class="form-control" id="password" name="_password" placeholder="Senha" />*/
/*                                                             <i class="ace-icon fa fa-lock"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/*                                                     <div class="space"></div>*/
/*                                                     <div class="clearfix">*/
/*                                                         <label class="inline">*/
/*                                                             <input type="checkbox" id="remember_me" name="_remember_me" checked />*/
/*                                                             <span class="lbl"> Lembre de mim</span>*/
/*                                                             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                                                         </label>*/
/*                                                         <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">*/
/*                                                             <i class="ace-icon fa fa-key"></i>*/
/*                                                             <span class="bigger-110">Entrar</span>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*                                                     <div class="space-4"></div>*/
/*                                                 </fieldset>*/
/*                                             </form>*/
/*                                             <div class="social-or-login center">*/
/*                                                 <span class="bigger-110">Ou entre Usando</span>*/
/*                                             </div>*/
/*                                             <div class="space-6"></div>*/
/*                                             <div class="social-login center">*/
/*                                                 <a class="btn btn-primary">*/
/*                                                     <i class="ace-icon fa fa-facebook"></i>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-info">*/
/*                                                     <i class="ace-icon fa fa-twitter"></i>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-danger">*/
/*                                                     <i class="ace-icon fa fa-google-plus"></i>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="toolbar clearfix">*/
/*                                             <div>*/
/*                                                 <a href="#" data-target="#forgot-box" class="forgot-password-link">*/
/*                                                     <i class="ace-icon fa fa-arrow-left"></i>*/
/*                                                     Esqueci minha senha*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                             <div>*/
/*                                                 <a href="#" data-target="#signup-box" class="user-signup-link">*/
/*                                                     Quero me cadastrar*/
/*                                                     <i class="ace-icon fa fa-arrow-right"></i>*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div id="forgot-box" class="forgot-box widget-box no-border">*/
/*                                     <div class="widget-body">*/
/*                                         <div class="widget-main">*/
/*                                             <h4 class="header red lighter bigger">*/
/*                                                 <i class="ace-icon fa fa-key"></i>*/
/*                                                 Recuperar a senha*/
/*                                             </h4>*/
/*                                             <div class="space-6"></div>*/
/*                                             <p>*/
/*                                                 Digite seu e-mail para receber as instruções.*/
/*                                             </p>*/
/*                                             <form>*/
/*                                                 <fieldset>*/
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="email" class="form-control" placeholder="E-mail" />*/
/*                                                             <i class="ace-icon fa fa-envelope"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/*                                                     <div class="clearfix">*/
/*                                                         <button type="button" class="width-35 pull-right btn btn-sm btn-danger">*/
/*                                                             <i class="ace-icon fa fa-lightbulb-o"></i>*/
/*                                                             <span class="bigger-110">Recuperar</span>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*                                                 </fieldset>*/
/*                                             </form>*/
/*                                         </div>*/
/*                                         <div class="toolbar center">*/
/*                                             <a href="#" data-target="#login-box" class="back-to-login-link">*/
/*                                                 Voltar ao Login*/
/*                                                 <i class="ace-icon fa fa-arrow-right"></i>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div id="signup-box" class="signup-box widget-box no-border">*/
/*                                     <div class="widget-body">*/
/*                                         <div class="widget-main">*/
/*                                             <h4 class="header green lighter bigger">*/
/*                                                 <i class="ace-icon fa fa-users blue"></i>*/
/*                                                 Cadastrar Novo Usuário*/
/*                                             </h4>*/
/* */
/*                                             <div class="space-6"></div>*/
/*                                             <p> Inserir os dados de Cadastro: </p>*/
/* */
/*                                             <form action="{{ path('pessoa_create') }}" method="POST">*/
/*                                                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                                                 <fieldset>*/
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="text" class="form-control" id="noNome" name="noNome" placeholder="Nome" />*/
/*                                                             <i class="ace-icon fa fa-user"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/* */
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="email" class="form-control" id="noEmail" name="noEmail" placeholder="E-mail" />*/
/*                                                             <i class="ace-icon fa fa-envelope"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/* */
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="password" class="form-control" id="noSenha" name="noSenha" placeholder="Senha" />*/
/*                                                             <i class="ace-icon fa fa-lock"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/* */
/*                                                     <label class="block clearfix">*/
/*                                                         <span class="block input-icon input-icon-right">*/
/*                                                             <input type="password" class="form-control" placeholder="Repita a Senha" />*/
/*                                                             <i class="ace-icon fa fa-retweet"></i>*/
/*                                                         </span>*/
/*                                                     </label>*/
/* */
/*                                                     <label class="block">*/
/*                                                         <input type="checkbox" class="ace" />*/
/*                                                         <span class="lbl">*/
/*                                                             Eu aceito o  */
/*                                                             <a href="#">Contrato de Usuário</a>*/
/*                                                         </span>*/
/*                                                     </label>*/
/* */
/*                                                     <div class="space-24"></div>*/
/* */
/*                                                     <div class="clearfix">*/
/*                                                         <button type="reset" class="width-30 pull-left btn btn-sm">*/
/*                                                             <i class="ace-icon fa fa-refresh"></i>*/
/*                                                             <span class="bigger-110">Limpar</span>*/
/*                                                         </button>*/
/* */
/*                                                         <button type="submit" class="width-65 pull-right btn btn-sm btn-success">*/
/*                                                             <span class="bigger-110">Cadastrar</span>*/
/* */
/*                                                             <i class="ace-icon fa fa-arrow-right icon-on-right"></i>*/
/*                                                         </button>*/
/*                                                     </div>*/
/*                                                 </fieldset>*/
/*                                             </form>*/
/*                                         </div>*/
/* */
/*                                         <div class="toolbar center">*/
/*                                             <a href="#" data-target="#login-box" class="back-to-login-link">*/
/*                                                 <i class="ace-icon fa fa-arrow-left"></i>*/
/*                                                 Voltar ao Login*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     </div><!-- /.widget-body -->*/
/*                                 </div><!-- /.signup-box -->*/
/*                             </div><!-- /.position-relative -->*/
/* */
/*                             <!--<div class="navbar-fixed-top align-right">*/
/*                                 <br />*/
/*                                 &nbsp;*/
/*                                 <a id="btn-login-dark" href="#">Dark</a>*/
/*                                 &nbsp;*/
/*                                 <span class="blue">/</span>*/
/*                                 &nbsp;*/
/*                                 <a id="btn-login-blur" href="#">Blur</a>*/
/*                                 &nbsp;*/
/*                                 <span class="blue">/</span>*/
/*                                 &nbsp;*/
/*                                 <a id="btn-login-light" href="#">Light</a>*/
/*                                 &nbsp; &nbsp; &nbsp;*/
/*                             </div>-->*/
/*                         </div>*/
/*                     </div><!-- /.col -->*/
/*                 </div><!-- /.row -->*/
/*             </div><!-- /.main-content -->*/
/*         </div><!-- /.main-container -->*/
/* */
/*         <!-- basic scripts -->*/
/* */
/*         <!--[if !IE]> -->*/
/*         <script src="{{ asset('bundles/nutrirbox/dist/js/jquery.min.js') }}"></script>*/
/* */
/*         <!-- <![endif]-->*/
/* */
/*         <!--[if IE]>*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* <![endif]-->*/
/* */
/*         <!--[if !IE]> -->*/
/*         <script type="text/javascript">*/
/*             window.jQuery || document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery.min.js') }}>" + "<" + "/script>");*/
/*         </script>*/
/* */
/*         <!-- <![endif]-->*/
/* */
/*         <!--[if IE]>*/
/* <script type="text/javascript">*/
/* window.jQuery || document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery1x.min.js') }}'>"+"<"+"/script>");*/
/* </script>*/
/* <![endif]-->*/
/*         <script type="text/javascript">*/
/*             if ('ontouchstart' in document.documentElement)*/
/*                 document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");*/
/*         </script>*/
/* */
/*         <!-- inline scripts related to this page -->*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $(document).on('click', '.toolbar a[data-target]', function (e) {*/
/*                     e.preventDefault();*/
/*                     var target = $(this).data('target');*/
/*                     $('.widget-box.visible').removeClass('visible');//hide others*/
/*                     $(target).addClass('visible');//show target*/
/*                 });*/
/*             });*/
/* */
/* */
/* */
/*             //you don't need this, just used for changing background*/
/*             jQuery(function ($) {*/
/*                 $('#btn-login-dark').on('click', function (e) {*/
/*                     $('body').attr('class', 'login-layout');*/
/*                     $('#id-text2').attr('class', 'white');*/
/*                     $('#id-company-text').attr('class', 'blue');*/
/* */
/*                     e.preventDefault();*/
/*                 });*/
/*                 $('#btn-login-light').on('click', function (e) {*/
/*                     $('body').attr('class', 'login-layout light-login');*/
/*                     $('#id-text2').attr('class', 'grey');*/
/*                     $('#id-company-text').attr('class', 'blue');*/
/* */
/*                     e.preventDefault();*/
/*                 });*/
/*                 $('#btn-login-blur').on('click', function (e) {*/
/*                     $('body').attr('class', 'login-layout blur-login');*/
/*                     $('#id-text2').attr('class', 'white');*/
/*                     $('#id-company-text').attr('class', 'light-blue');*/
/* */
/*                     e.preventDefault();*/
/*                 });*/
/* */
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
