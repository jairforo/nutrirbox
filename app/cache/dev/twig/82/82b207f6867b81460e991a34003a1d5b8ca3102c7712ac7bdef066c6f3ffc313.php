<?php

/* ::base.html.twig */
class __TwigTemplate_fe49323110e86d55df2277939e080f3f2e2f9847d4a98cb5138eb6c8a5e4bbaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'subheader' => array($this, 'block_subheader'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f81b792a04bbf7503b44dd0d0c9df6c1c1012edf1bd82fa1504457255e4474f3 = $this->env->getExtension("native_profiler");
        $__internal_f81b792a04bbf7503b44dd0d0c9df6c1c1012edf1bd82fa1504457255e4474f3->enter($__internal_f81b792a04bbf7503b44dd0d0c9df6c1c1012edf1bd82fa1504457255e4474f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    <body class=\"no-skin\">
        <!-- GOOGLE Analytics GETTIME -->
        <script>
            /*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
             })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
             
             ga('create', 'UA-72706148-1', 'auto');
             ga('send', 'pageview');*/
        </script>
        <!-- / GOOGLE Analytics GETTIME-->
        <!-- NAVBAR -->
        ";
        // line 40
        echo twig_include($this->env, $context, "default/navbar.html.twig");
        echo "
        <!-- ./NAVBAR -->
        <div class=\"main-container\" id=\"main-container\">
            <script type=\"text/javascript\">
                try {
                    ace.settings.check('main-container', 'fixed');
                } catch (e) {
                }
            </script>
            <!-- SIDEBAR -->
            ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                ";
            echo twig_include($this->env, $context, "default/sidebar-admin.html.twig");
            echo "
            ";
        } else {
            // line 53
            echo "                ";
            echo twig_include($this->env, $context, "default/sidebar.html.twig");
            echo "
            ";
        }
        // line 55
        echo "            <!-- ./SIDEBAR -->
            <div class=\"main-content animated fadeInRight\">
                <div class=\"main-content-inner\">
                    <!-- BREADCRUMBS -->
                    ";
        // line 59
        echo twig_include($this->env, $context, "default/breadcrumbs.html.twig");
        echo "
                    <!-- ./BREADCRUMBS -->
                    <div class=\"page-content\">
                        <div class=\"page-header\">
                            <h1>
                            ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "                            <small>
                                <i class=\"ace-icon fa fa-angle-double-right\"></i>
                            ";
        // line 67
        $this->displayBlock('subheader', $context, $blocks);
        // line 68
        echo "                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <!-- Mensagens do Sistema -->
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 73
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 74
                echo "                        <div class=\"alert alert-block alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                            <button data-dismiss=\"alert\" class=\"close\" type=\"button\">
                                <i class=\"ace-icon fa fa-times\"></i>
                            </button>
                            ";
                // line 79
                echo "                            ";
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                <!-- Fim Mensagens do Sistema -->
                <!-- Body -->
                ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "                <!-- Fim Body -->
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    ";
        // line 92
        echo twig_include($this->env, $context, "default/footer.html.twig");
        echo "
    <!-- ./FOOTER -->

    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div>
<!-- Modal -->
<div class=\"modal fade animated rubberBand\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Evento</h4>
            </div>
            <div class=\"modal-body\">

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                <button type=\"button\" class=\"btn btn-primary\">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "</body>
</html>
";
        
        $__internal_f81b792a04bbf7503b44dd0d0c9df6c1c1012edf1bd82fa1504457255e4474f3->leave($__internal_f81b792a04bbf7503b44dd0d0c9df6c1c1012edf1bd82fa1504457255e4474f3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d7a914c773fa78759af79432c1176658c241f09817d4774e30ccd4d3448b66 = $this->env->getExtension("native_profiler");
        $__internal_e1d7a914c773fa78759af79432c1176658c241f09817d4774e30ccd4d3448b66->enter($__internal_e1d7a914c773fa78759af79432c1176658c241f09817d4774e30ccd4d3448b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bem vindo";
        
        $__internal_e1d7a914c773fa78759af79432c1176658c241f09817d4774e30ccd4d3448b66->leave($__internal_e1d7a914c773fa78759af79432c1176658c241f09817d4774e30ccd4d3448b66_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2436f590ad698dc94a33c69627af7c597e270186f765d92f12d79e5454b91cc3 = $this->env->getExtension("native_profiler");
        $__internal_2436f590ad698dc94a33c69627af7c597e270186f765d92f12d79e5454b91cc3->enter($__internal_2436f590ad698dc94a33c69627af7c597e270186f765d92f12d79e5454b91cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <!-- bootstrap & fontawesome -->
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/css5c0a.css?family=Open+Sans:400,300"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/animate.css"), "html", null, true);
        echo "\" />

            <!--[if lte IE 9]>
                <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
            <![endif]-->

            <!--[if lte IE 9]>
                <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
            <![endif]-->
        ";
        
        $__internal_2436f590ad698dc94a33c69627af7c597e270186f765d92f12d79e5454b91cc3->leave($__internal_2436f590ad698dc94a33c69627af7c597e270186f765d92f12d79e5454b91cc3_prof);

    }

    // line 64
    public function block_header($context, array $blocks = array())
    {
        $__internal_1eaabde6301f6bb02ff12f6d2c3eee8e4bbbc686eec1525d77fa654c74fc2dfe = $this->env->getExtension("native_profiler");
        $__internal_1eaabde6301f6bb02ff12f6d2c3eee8e4bbbc686eec1525d77fa654c74fc2dfe->enter($__internal_1eaabde6301f6bb02ff12f6d2c3eee8e4bbbc686eec1525d77fa654c74fc2dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_1eaabde6301f6bb02ff12f6d2c3eee8e4bbbc686eec1525d77fa654c74fc2dfe->leave($__internal_1eaabde6301f6bb02ff12f6d2c3eee8e4bbbc686eec1525d77fa654c74fc2dfe_prof);

    }

    // line 67
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_e9fba0f1b492f9322a490cf9095fab0dc477360014f51d95eb177137e9da2787 = $this->env->getExtension("native_profiler");
        $__internal_e9fba0f1b492f9322a490cf9095fab0dc477360014f51d95eb177137e9da2787->enter($__internal_e9fba0f1b492f9322a490cf9095fab0dc477360014f51d95eb177137e9da2787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        
        $__internal_e9fba0f1b492f9322a490cf9095fab0dc477360014f51d95eb177137e9da2787->leave($__internal_e9fba0f1b492f9322a490cf9095fab0dc477360014f51d95eb177137e9da2787_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_677555961affdfbe22bf97abe07ef4096df27f8cd977cce371359e1746f7abf8 = $this->env->getExtension("native_profiler");
        $__internal_677555961affdfbe22bf97abe07ef4096df27f8cd977cce371359e1746f7abf8->enter($__internal_677555961affdfbe22bf97abe07ef4096df27f8cd977cce371359e1746f7abf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_677555961affdfbe22bf97abe07ef4096df27f8cd977cce371359e1746f7abf8->leave($__internal_677555961affdfbe22bf97abe07ef4096df27f8cd977cce371359e1746f7abf8_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_707bdbe05493c35bb66709ec9be1597ba628d3b7a9bbcd8274ae57cb13ec79dd = $this->env->getExtension("native_profiler");
        $__internal_707bdbe05493c35bb66709ec9be1597ba628d3b7a9bbcd8274ae57cb13ec79dd->enter($__internal_707bdbe05493c35bb66709ec9be1597ba628d3b7a9bbcd8274ae57cb13ec79dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "    <!-- ace settings handler -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!--[if lte IE 8]>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <!--[if !IE]> -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- <![endif]-->

    <!--[if IE]>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <![endif]-->

    <!--[if !IE]> -->
    <script type=\"text/javascript\">
                window.jQuery || document.write(\"<script src='";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
        <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
        </script>
    <![endif]-->
    <script type=\"text/javascript\">
        if ('ontouchstart' in document.documentElement)
            document.write(\"<script src='";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\" + \"<\" + \"/script>\");
    </script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/x-editable/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/x-editable/ace-editable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/fuelux/fuelux.spinner.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.inputlimiter.1.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_707bdbe05493c35bb66709ec9be1597ba628d3b7a9bbcd8274ae57cb13ec79dd->leave($__internal_707bdbe05493c35bb66709ec9be1597ba628d3b7a9bbcd8274ae57cb13ec79dd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 172,  440 => 171,  436 => 170,  432 => 169,  428 => 168,  424 => 167,  420 => 166,  416 => 165,  412 => 164,  408 => 163,  404 => 162,  400 => 161,  396 => 160,  392 => 159,  388 => 158,  384 => 157,  380 => 156,  376 => 155,  372 => 154,  368 => 153,  364 => 152,  360 => 151,  356 => 150,  351 => 148,  343 => 143,  333 => 136,  321 => 127,  315 => 124,  311 => 123,  305 => 120,  302 => 119,  296 => 118,  284 => 85,  273 => 67,  262 => 64,  252 => 23,  245 => 19,  239 => 16,  235 => 15,  231 => 14,  227 => 13,  223 => 12,  220 => 11,  214 => 10,  202 => 6,  193 => 174,  191 => 118,  162 => 92,  154 => 86,  152 => 85,  148 => 83,  142 => 82,  132 => 79,  124 => 74,  119 => 73,  115 => 72,  109 => 68,  107 => 67,  103 => 65,  101 => 64,  93 => 59,  87 => 55,  81 => 53,  75 => 51,  73 => 50,  60 => 40,  44 => 26,  42 => 10,  35 => 6,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pt-br">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="utf-8" />*/
/*         <title>{% block title %}Bem vindo{% endblock %}</title>*/
/*         <meta name="description" content="" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*         {% block stylesheets %}*/
/*             <!-- bootstrap & fontawesome -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/font-awesome.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/css5c0a.css?family=Open+Sans:400,300') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/animate.css') }}" />*/
/* */
/*             <!--[if lte IE 9]>*/
/*                 <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />*/
/*             <![endif]-->*/
/* */
/*             <!--[if lte IE 9]>*/
/*                 <link rel="stylesheet" href="{{ asset('bundles/nutrirbox/dist/css/ace-ie.min.css') }}" />*/
/*             <![endif]-->*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="no-skin">*/
/*         <!-- GOOGLE Analytics GETTIME -->*/
/*         <script>*/
/*             /*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/*              */
/*              ga('create', 'UA-72706148-1', 'auto');*/
/*              ga('send', 'pageview');*//* */
/*         </script>*/
/*         <!-- / GOOGLE Analytics GETTIME-->*/
/*         <!-- NAVBAR -->*/
/*         {{ include('default/navbar.html.twig') }}*/
/*         <!-- ./NAVBAR -->*/
/*         <div class="main-container" id="main-container">*/
/*             <script type="text/javascript">*/
/*                 try {*/
/*                     ace.settings.check('main-container', 'fixed');*/
/*                 } catch (e) {*/
/*                 }*/
/*             </script>*/
/*             <!-- SIDEBAR -->*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 {{ include('default/sidebar-admin.html.twig') }}*/
/*             {% else %}*/
/*                 {{ include('default/sidebar.html.twig') }}*/
/*             {% endif %}*/
/*             <!-- ./SIDEBAR -->*/
/*             <div class="main-content animated fadeInRight">*/
/*                 <div class="main-content-inner">*/
/*                     <!-- BREADCRUMBS -->*/
/*                     {{ include('default/breadcrumbs.html.twig') }}*/
/*                     <!-- ./BREADCRUMBS -->*/
/*                     <div class="page-content">*/
/*                         <div class="page-header">*/
/*                             <h1>*/
/*                             {% block header %}{% endblock %}*/
/*                             <small>*/
/*                                 <i class="ace-icon fa fa-angle-double-right"></i>*/
/*                             {% block subheader %}{% endblock %}*/
/*                         </small>*/
/*                     </h1>*/
/*                 </div><!-- /.page-header -->*/
/*                 <!-- Mensagens do Sistema -->*/
/*                 {% for label, flashes in app.session.flashbag.all %}*/
/*                     {% for flash in flashes %}*/
/*                         <div class="alert alert-block alert-{{ label }}">*/
/*                             <button data-dismiss="alert" class="close" type="button">*/
/*                                 <i class="ace-icon fa fa-times"></i>*/
/*                             </button>*/
/*                             {#<i class="ace-icon fa fa-check green"></i>#}*/
/*                             {{ flash }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*                 <!-- Fim Mensagens do Sistema -->*/
/*                 <!-- Body -->*/
/*                 {% block body %} {% endblock %}*/
/*                 <!-- Fim Body -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- FOOTER -->*/
/*     {{ include('default/footer.html.twig') }}*/
/*     <!-- ./FOOTER -->*/
/* */
/*     <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">*/
/*         <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>*/
/*     </a>*/
/* </div>*/
/* <!-- Modal -->*/
/* <div class="modal fade animated rubberBand" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                 <h4 class="modal-title" id="myModalLabel">Evento</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>*/
/*                 <button type="button" class="btn btn-primary">Salvar</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /Modal -->*/
/* {% block javascripts %}*/
/*     <!-- ace settings handler -->*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/ace-extra.min.js') }}"></script>*/
/* */
/*     <!--[if lte IE 8]>*/
/*         <script src="{{ asset('bundles/nutrirbox/dist/js/html5shiv.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/nutrirbox/dist/js/respond.min.js') }}"></script>*/
/*     <![endif]-->*/
/*     <!--[if !IE]> -->*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/jquery.min.js') }}"></script>*/
/*     <!-- <![endif]-->*/
/* */
/*     <!--[if IE]>*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!--[if !IE]> -->*/
/*     <script type="text/javascript">*/
/*                 window.jQuery || document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery.min.js') }}'>" + "<" + "/script>");*/
/*     </script>*/
/* */
/*     <!-- <![endif]-->*/
/* */
/*     <!--[if IE]>*/
/*         <script type="text/javascript">*/
/*             window.jQuery || document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery.min.js') }}'>"+"<"+"/script>");*/
/*         </script>*/
/*     <![endif]-->*/
/*     <script type="text/javascript">*/
/*         if ('ontouchstart' in document.documentElement)*/
/*             document.write("<script src='{{ asset('bundles/nutrirbox/dist/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");*/
/*     </script>*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/ace-elements.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/ace.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nutrirbox/dist/js/jquery.maskedinput.min.js') }}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery-ui.custom.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery.ui.touch-punch.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery.gritter.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/bootbox.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/x-editable/bootstrap-editable.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/x-editable/ace-editable.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/chosen.jquery.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/fuelux/fuelux.spinner.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/date-time/bootstrap-timepicker.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/date-time/moment.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/date-time/daterangepicker.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/date-time/bootstrap-datetimepicker.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/bootstrap-colorpicker.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery.knob.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/autosize.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/jquery.maskedinput.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/nutrirbox/dist/js/bootstrap-tag.min.js')}}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
