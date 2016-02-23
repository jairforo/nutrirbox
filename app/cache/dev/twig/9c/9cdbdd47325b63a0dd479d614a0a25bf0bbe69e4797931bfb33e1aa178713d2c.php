<?php

/* NutrirBoxBundle:Pessoa:perfil.html.twig */
class __TwigTemplate_b41e5ba65d58cdf7f1c0a96419d17ee1e8e33346f42e2d26e796f163e217d666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NutrirBoxBundle::base.html.twig", "NutrirBoxBundle:Pessoa:perfil.html.twig", 1);
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
        $__internal_6ed59c826db50c75618988b71260c96c02bd280c94065ba9bcff05b4e310ef6c = $this->env->getExtension("native_profiler");
        $__internal_6ed59c826db50c75618988b71260c96c02bd280c94065ba9bcff05b4e310ef6c->enter($__internal_6ed59c826db50c75618988b71260c96c02bd280c94065ba9bcff05b4e310ef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NutrirBoxBundle:Pessoa:perfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed59c826db50c75618988b71260c96c02bd280c94065ba9bcff05b4e310ef6c->leave($__internal_6ed59c826db50c75618988b71260c96c02bd280c94065ba9bcff05b4e310ef6c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_37b05eeceedc340ddaa5ec40db50d616adfa7faa7c82d430fa678ce1d54ec143 = $this->env->getExtension("native_profiler");
        $__internal_37b05eeceedc340ddaa5ec40db50d616adfa7faa7c82d430fa678ce1d54ec143->enter($__internal_37b05eeceedc340ddaa5ec40db50d616adfa7faa7c82d430fa678ce1d54ec143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Perfil";
        
        $__internal_37b05eeceedc340ddaa5ec40db50d616adfa7faa7c82d430fa678ce1d54ec143->leave($__internal_37b05eeceedc340ddaa5ec40db50d616adfa7faa7c82d430fa678ce1d54ec143_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_05d655ae7baaa78523c2a34bce9122613ec499e2f7a1827f61dfec52c9c39041 = $this->env->getExtension("native_profiler");
        $__internal_05d655ae7baaa78523c2a34bce9122613ec499e2f7a1827f61dfec52c9c39041->enter($__internal_05d655ae7baaa78523c2a34bce9122613ec499e2f7a1827f61dfec52c9c39041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " Perfil ";
        
        $__internal_05d655ae7baaa78523c2a34bce9122613ec499e2f7a1827f61dfec52c9c39041->leave($__internal_05d655ae7baaa78523c2a34bce9122613ec499e2f7a1827f61dfec52c9c39041_prof);

    }

    // line 4
    public function block_subheader($context, array $blocks = array())
    {
        $__internal_b4555a6e6ac13d67422b1ecb99cd8d0000b72e70c8d8aa7b9ecdd85eb635d096 = $this->env->getExtension("native_profiler");
        $__internal_b4555a6e6ac13d67422b1ecb99cd8d0000b72e70c8d8aa7b9ecdd85eb635d096->enter($__internal_b4555a6e6ac13d67422b1ecb99cd8d0000b72e70c8d8aa7b9ecdd85eb635d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subheader"));

        echo " fale um pouco sobre você ";
        
        $__internal_b4555a6e6ac13d67422b1ecb99cd8d0000b72e70c8d8aa7b9ecdd85eb635d096->leave($__internal_b4555a6e6ac13d67422b1ecb99cd8d0000b72e70c8d8aa7b9ecdd85eb635d096_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5db4144628e968bbcd6d1f164a9047ef248cbe485e271f067d6084a730f806af = $this->env->getExtension("native_profiler");
        $__internal_5db4144628e968bbcd6d1f164a9047ef248cbe485e271f067d6084a730f806af->enter($__internal_5db4144628e968bbcd6d1f164a9047ef248cbe485e271f067d6084a730f806af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <!-- page specific plugin styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/jquery.gritter.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/select2.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/datepicker.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/css/bootstrap-editable.min.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_5db4144628e968bbcd6d1f164a9047ef248cbe485e271f067d6084a730f806af->leave($__internal_5db4144628e968bbcd6d1f164a9047ef248cbe485e271f067d6084a730f806af_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bee170e68e5537d762ce688da4a80c843e140146835369854d874f907f65b5c = $this->env->getExtension("native_profiler");
        $__internal_6bee170e68e5537d762ce688da4a80c843e140146835369854d874f907f65b5c->enter($__internal_6bee170e68e5537d762ce688da4a80c843e140146835369854d874f907f65b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- PAGE CONTENT BEGINS -->
                <div class=\"clearfix\">
                    <div class=\"pull-left alert alert-success no-margin\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <i class=\"ace-icon fa fa-times\"></i>
                        </button>

                        <i class=\"ace-icon fa fa-umbrella bigger-120 blue\"></i>
                        Clique na imagem abaixo ou nos campos para atualizar seu cadastro.
                    </div>
                </div>

                <div class=\"hr dotted\"></div>

                <div>
                    <div id=\"user-profile-1\" class=\"user-profile row\">
                        <div class=\"col-xs-12 col-sm-3 center\">
                            <div>
                                <span class=\"profile-picture\">
";
        // line 41
        echo "                                        <img id=\"avatar\" class=\"editable img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/avatars/profile-pic.jpg"), "html", null, true);
        echo "\" />
";
        // line 43
        echo "                                </span>

                                <div class=\"space-4\"></div>

                                <div class=\"width-80 label label-info label-xlg arrowed-in arrowed-in-right\">
                                    <div class=\"inline position-relative\">
                                        <a href=\"#\" class=\"user-title-label dropdown-toggle\" data-toggle=\"dropdown\">
                                            <i class=\"ace-icon fa fa-circle light-green\"></i>
                                            &nbsp;
                                            <span class=\"white\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "noNome", array()), "html", null, true);
        echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"space-6\"></div>
                            <div class=\"hr hr16 dotted\"></div>
                        </div>

                        <div class=\"col-xs-12 col-sm-9\">
                            <div class=\"profile-user-info profile-user-info-striped\">
                                <form action=\"#\">                                                        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Nome </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"noNome\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "noNome", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Email </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"noEmail\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "noEmail", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> CPF </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"nuCpf\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nuCpf", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Sexo </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"tpSexo\" data-value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "tpSexo", array()), "html", null, true);
        echo "\"></span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Telefone </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"nuTelefone\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nuTelefone", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Celular </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"nuCelular\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nuCelular", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>

                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Data de Nascimento </div>

                                        <div class=\"profile-info-value\">
                                            <span class=\"editable\" id=\"dtNascimento\">";
        // line 117
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dtNascimento", array()) != "")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dtNascimento", array()), "d/m/Y")) : ("")), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class=\"space-6\"></div>

                            <div>
                                <form name=\"form\" method=\"post\" action=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo "\" class=\"form-horizontal\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                    <div class=\"form-group\">
                                        <div class=\"col-sm-3\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary btn-white btn-round btn-delete\">
                                                <span class=\"bigger-110\">Desativar Conta</span>
                                            </button>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" class=\"form-control\" value=\"S85HyzJ7P3RFYYYKIlUhcFUvWV3k6CEaI5zmMR_6CNQ\" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    ";
        
        $__internal_6bee170e68e5537d762ce688da4a80c843e140146835369854d874f907f65b5c->leave($__internal_6bee170e68e5537d762ce688da4a80c843e140146835369854d874f907f65b5c_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_016108b856e779da97583c1946e2345383f288c3c748a1cc3576356efeb1d004 = $this->env->getExtension("native_profiler");
        $__internal_016108b856e779da97583c1946e2345383f288c3c748a1cc3576356efeb1d004->enter($__internal_016108b856e779da97583c1946e2345383f288c3c748a1cc3576356efeb1d004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src=\"dist/js/excanvas.min.js\"></script>
        <![endif]-->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/x-editable/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/x-editable/ace-editable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nutrirbox/dist/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <!-- inline scripts related to this page -->
        <script type=\"text/javascript\">
                    jQuery(function (\$) {


                            //editables
                            \$.fn.editable.defaults.mode = 'inline';
                            \$.fn.editableform.loading = \"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>\";
                            \$.fn.editableform.buttons = '<button type=\"submit\" class=\"btn btn-info editable-submit\"><i class=\"ace-icon fa fa-check\"></i></button>' +
                            '<button type=\"button\" class=\"btn editable-cancel\"><i class=\"ace-icon fa fa-times\"></i></button>';
                            \$(document).on(\"click\", \".editable-submit\", function () {
                    if (\$(\".cpf-mask\")){
                    \$(\".cpf-mask\").mask(\"99999999999\");
                    }
                    if (\$(\".telefone-mask\")){
                    \$(\".telefone-mask\").mask(\"9999999999\");
                    }
                    if (\$(\".celular-mask\")) {
                    \$(\".celular-mask\").mask(\"9999999999?9\");
                    }
                    if (\$(\".date-mask\")){
                    \$(\".date-mask\").mask(\"99-99-9999\");
                    }
                    });
                            //editables
                            \$('#noNome')
                            .editable({
                            type: 'text',
                                    name: 'noNome',
                                    url:  'update-pessoa-json',
                                    pk:";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                                    validate: function(value){
                                    if (\$.trim(value) == '')
                                            return 'Informe seu Nome.';
                                    }
                            });
                            \$('#nuCpf')
                            .editable({
                            type: 'number',
                                    name: 'nuCpf',
                                    emptytext: 'Informe seu CPF',
                                    tpl: '<input type=\"text\" id=\"nuCpfInput\" class=\"cpf-mask form-control input-sm\" style=\"padding-right: 24px;\">',
                                    url:  'update-pessoa-json',
                                    pk:";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                                    display: function(value) {
                                    \$(this).text(formataCampo(\"999.999.999-99\", value));
                                    }
                            });
                            \$('#nuTelefone')
                            .editable({
                            type: 'tel',
                                    name: 'nuTelefone',
                                    emptytext: 'Informe seu Telefone',
                                    tpl: '<input type=\"text\" id =\"nuTelefoneInput\" class=\"telefone-mask form-control input-sm\" style=\"padding-right: 24px;\">',
                                    url:  'update-pessoa-json',
                                    pk:";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                                    display: function(value) {
                                    \$(this).text(formataCampo(\"(99) 9999-9999\", value));
                                    }
                            });
                            \$('#nuCelular')
                            .editable({
                            type: 'tel',
                                    name: 'nuCelular',
                                    emptytext: 'Informe seu Celular',
                                    tpl: '<input type=\"text\" id =\"nuCelularInput\" class=\"celular-mask form-control input-sm\" style=\"padding-right: 24px;\">',
                                    url:  'update-pessoa-json',
                                    pk:";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                                    display: function(value) {
                                    if (value.length == 11)
                                            \$(this).text(formataCampo(\"(99) 99999-9999\", value));
                                            else if (value.length == 10)
                                            \$(this).text(formataCampo(\"(99) 9999-9999\", value));
                                            else
                                            \$(this).text(value);
                                    }
                            });
                            \$('#tpSexo')
                            .editable({
                            type: 'select',
                                    name: 'tpSexo',
                                    url:  'update-pessoa-json',
                                    emptytext: 'Informe seu sexo',
                                    pk:";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                                    source: [
                                    {value: \"M\", text: 'Masculino'},
                                    {value: \"F\", text: 'Feminino'}
                                    ]

                            });
                            \$('#dtNascimento').editable({
                    type: 'adate',
                            emptytext: 'Informe sua Data de Nascimento',
                            tpl: '<div class=\"input-group input-group-compact\"><input type=\"text\" class=\"date-mask input-medium date\" /><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span></div>',
                            url:  'update-pessoa-json',
                            pk:";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "coPessoa", array()), "html", null, true);
        echo ",
                            date: {
                            format: 'dd/mm/yyyy',
                                    viewformat: 'dd/mm/yyyy',
                                    weekStart: 1
                                    //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                            },
                            display: function(value) {
                            \$(this).text(formataCampo(\"99/99/9999\", value));
                            }
                    })

                            \$(document).ready(function (){
                    if (!isNaN(parseFloat(\$(\"#nuCpf\").html())) && isFinite(\$(\"#nuCpf\").html())){
                    \$(\"#nuCpf\").text(formataCampo(\"999.999.999-99\", \$(\"#nuCpf\").html()));
                    }
                    if (!isNaN(parseFloat(\$(\"#nuTelefone\").html())) && isFinite(\$(\"#nuTelefone\").html())){
                    \$(\"#nuTelefone\").text(formataCampo(\"(99) 9999-9999\", \$(\"#nuTelefone\").html()));
                    }
                    if (!isNaN(parseFloat(\$(\"#nuCelular\").html())) && isFinite(\$(\"#nuCelular\").html())){
                    if (parseFloat(\$(\"#nuCelular\").html().length) === 10)
                            \$(\"#nuCelular\").text(formataCampo(\"(99) 9999-9999\", \$(\"#nuCelular\").html()));
                            else
                            \$(\"#nuCelular\").text(formataCampo(\"(99) 99999-9999\", \$(\"#nuCelular\").html()));
                    }
                    });
                            function formataCampo(mascara, valor) {
                            var boleanoMascara;
                                    exp = /\\-|\\.|\\/|\\(|\\)| /g
                                    campoSoNumeros = valor;
                                    campoSoNumeros = \"00000000000\" + campoSoNumeros.replace(/\\D/g, '');
                                    campoSoNumeros = campoSoNumeros.slice(mascara.replace(/\\D/g, '').length * - 1);
                                    var posicaoCampo = 0;
                                    var novoValorCampo = \"\";
                                    var tamanhoMascara = mascara.length;
                                    if (valor.length > 0){
                            for (i = 0; i <= tamanhoMascara; i++) {
                            boleanoMascara = ((mascara.charAt(i) == \"-\") || (mascara.charAt(i) == \".\")
                                    || (mascara.charAt(i) == \"/\"));
                                    boleanoMascara = boleanoMascara || ((mascara.charAt(i) == \"(\")
                                            || (mascara.charAt(i) == \")\") || (mascara.charAt(i) == \" \"));
                                    if (boleanoMascara) {
                            novoValorCampo += mascara.charAt(i);
                            } else {
                            novoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                                    posicaoCampo++;
                            }
                            }
                            }
                            return novoValorCampo;
                            }

                    \$(document).on(\"focus\", \".cpf-mask\", function () {
                    if (this.value.length < 11)
                            this.value = (\"00000000000\" + this.value).slice( - 11)
                            \$(this).mask(\"999.999.999-99\", {placeholder:\" \"});
                    });
                            \$(document).on(\"focus\", \".date-mask\", function () {
                    \$(this).mask(\"99/99/9999\", {placeholder:\" \"});
                    });
                            \$(document).on(\"focus\", \".telefone-mask\", function () {
                    \$(this).mask(\"(99) 9999-9999\", {placeholder:\" \"});
                    });
                            \$(document).on(\"focus\", \".celular-mask\", function () {
                    \$(this).mask(\"(99) 9999-9999?9\", {placeholder:\" \"});
                    });
                            \$(document).on(\"keypress\", \".celular-mask\", function () {
                    if (this.value.replace(/\\D/g, '').length > 10)
                            \$(this).mask(\"(99) 99999-9999\", {placeholder:\" \"});
                    });
                            // *** editable avatar *** //
                            try {//ie8 throws some harmless exceptions, so let's catch'em

                            //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                            //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                            try {
                            document.createElement('IMG').appendChild(document.createElement('B'));
                            } catch (e) {
                            Image.prototype.appendChild = function (el) {
                            }
                            }

                            var last_gritter
                                    \$('#avatar').editable({
                            type: 'image',
                                    name: 'avatar',
                                    value: null,
                                    image: {
                                    //specify ace file input plugin's options here
                                    btn_choose: 'Change Avatar',
                                            droppable: true,
                                            maxSize: 110000, //~100Kb

                                            //and a few extra ones here
                                            name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                                            on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                                            if (last_gritter) \$.gritter.remove(last_gritter);
                                                    if (error_type == 1) {//file format error
                                            last_gritter = \$.gritter.add({
                                            title: 'File is not an image!',
                                                    text: 'Please choose a jpg|gif|png image!',
                                                    class_name: 'gritter-error gritter-center'
                                            });
                                            } else if (error_type == 2) {//file size rror
                                            last_gritter = \$.gritter.add({
                                            title: 'File too big!',
                                                    text: 'Image size should not exceed 100Kb!',
                                                    class_name: 'gritter-error gritter-center'
                                            });
                                            }
                                            else {//other error
                                            }
                                            },
                                            on_success : function() {
                                            \$.gritter.removeAll();
                                            }
                                    },
                                    url: function(params) {
                                    // ***UPDATE AVATAR HERE*** //
                                    var submit_url = 'update-pessoa-json'; //please modify submit_url accordingly
                                            var deferred = null;
                                            var avatar = '#avatar';
                                            //if value is empty (\"\"), it means no valid files were selected
                                            //but it may still be submitted by x-editable plugin
                                            //because \"\" (empty string) is different from previous non-empty value whatever it was
                                            //so we return just here to prevent problems
                                            var value = \$(avatar).next().find('input[type=hidden]:eq(0)').val();
                                            if (!value || value.length == 0) {
                                    deferred = new \$.Deferred
                                            deferred.resolve();
                                            return deferred.promise();
                                    }

                                    var \$form = \$(avatar).next().find('.editableform:eq(0)')
                                            var file_input = \$form.find('input[type=file]:eq(0)');
                                            var pk = \$(avatar).attr('data-pk'); //primary key to be sent to server

                                            var ie_timeout = null


                                            if (\"FormData\" in window) {
                                    var formData_object = new FormData(); //create empty FormData object

                                            //serialize our form (which excludes file inputs)
                                            \$.each(\$form.serializeArray(), function(i, item) {
                                            //add them one by one to our FormData 
                                            formData_object.append(item.name, item.value);
                                            });
                                            //and then add files
                                            \$form.find('input[type=file]').each(function(){
                                    var field_name = \$(this).attr('name');
                                            var files = \$(this).data('ace_input_files');
                                            if (files && files.length > 0) {
                                    formData_object.append(field_name, files[0]);
                                    }
                                    });
                                            //append primary key to our formData
                                            formData_object.append('pk', pk);
                                            deferred = \$.ajax({
                                            url: submit_url,
                                                    type: 'POST',
                                                    processData: false, //important
                                                    contentType: false, //important
                                                    dataType: 'json', //server response type
                                                    data: formData_object
                                            })
                                    }
                                    else {
                                    deferred = new \$.Deferred

                                            var temporary_iframe_id = 'temporary-iframe-' + (new Date()).getTime() + '-' + (parseInt(Math.random() * 1000));
                                            var temp_iframe =
                                            \$('<iframe id=\"' + temporary_iframe_id + '\" name=\"' + temporary_iframe_id + '\" \\
                                                                        frameborder=\"0\" width=\"0\" height=\"0\" src=\"about:blank\"\\
                                                                        style=\"position:absolute; z-index:-1; visibility: hidden;\"></iframe>')
                                            .insertAfter(\$form);
                                            \$form.append('<input type=\"hidden\" name=\"temporary-iframe-id\" value=\"' + temporary_iframe_id + '\" />');
                                            //append primary key (pk) to our form
                                            \$('<input type=\"hidden\" name=\"pk\" />').val(pk).appendTo(\$form);
                                            temp_iframe.data('deferrer', deferred);
                                            //we save the deferred object to the iframe and in our server side response
                                            //we use \"temporary-iframe-id\" to access iframe and its deferred object

                                            \$form.attr({
                                            action: submit_url,
                                                    method: 'POST',
                                                    enctype: 'multipart/form-data',
                                                    target: temporary_iframe_id //important
                                            });
                                            \$form.get(0).submit();
                                            //if we don't receive any response after 30 seconds, declare it as failed!
                                            ie_timeout = setTimeout(function(){
                                            ie_timeout = null;
                                                    temp_iframe.attr('src', 'about:blank').remove();
                                                    deferred.reject({'status':'fail', 'message':'Timeout!'});
                                            }, 30000);
                                    }


                                    //deferred callbacks, triggered by both ajax and iframe solution
                                    deferred
                                            .done(function(result) {//success
                                            var res = result[0]; //the `result` is formatted by your server side response and is arbitrary
                                                    if (res.status == 'OK')
                                                    \$(avatar).get(0).src = res.url;
                                                    else
                                                    alert(res.message);
                                            })
                                            .fail(function(result) {//failure
                                            alert(\"Houve um erro ao realizar o upload da imagem.\");
                                            })
                                            .always(function() {//called on both success and failure
                                            if (ie_timeout) clearTimeout(ie_timeout)
                                                    ie_timeout = null;
                                            });
                                            return deferred.promise();
                                            // ***END OF UPDATE AVATAR HERE*** //
                                    },
                                    success: function(response, newValue) {
                                    }
                            })
                            } catch (e) {
                    }

                    /**
                     //let's display edit mode by default?
                     var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                     if(blank_image) {
                     \$('#avatar').editable('show').on('hidden', function(e, reason) {
                     if(reason == 'onblur') {
                     \$('#avatar').editable('show');
                     return;
                     }
                     \$('#avatar').off('hidden');
                     })
                     }
                     */

                    //another option is using modals
                    \$('#avatar2').on('click', function () {
                    var modal =
                            '<div class=\"modal fade\">\\
                                  <div class=\"modal-dialog\">\\
                                   <div class=\"modal-content\">\\
                                        <div class=\"modal-header\">\\
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\\
                                                <h4 class=\"blue\">Change Avatar</h4>\\
                                        </div>\\
                                        \\
                                        <form class=\"no-margin\">\\
                                         <div class=\"modal-body\">\\
                                                <div class=\"space-4\"></div>\\
                                                <div style=\"width:75%;margin-left:12%;\"><input type=\"file\" name=\"file-input\" /></div>\\
                                         </div>\\
                                        \\
                                         <div class=\"modal-footer center\">\\
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\"><i class=\"ace-icon fa fa-check\"></i> Submit</button>\\
                                                <button type=\"button\" class=\"btn btn-sm\" data-dismiss=\"modal\"><i class=\"ace-icon fa fa-times\"></i> Cancel</button>\\
                                         </div>\\
                                        </form>\\
                                  </div>\\
                                 </div>\\
                                </div>';
                            var modal = \$(modal);
                            modal.modal(\"show\").on(\"hidden\", function () {
                    modal.remove();
                    });
                            var working = false;
                            var form = modal.find('form:eq(0)');
                            var file = form.find('input[type=file]').eq(0);
                            file.ace_file_input({
                            style: 'well',
                                    btn_choose: 'Click to choose new avatar',
                                    btn_change: null,
                                    no_icon: 'ace-icon fa fa-picture-o',
                                    thumbnail: 'small',
                                    before_remove: function () {
                                    //don't remove/reset files while being uploaded
                                    return !working;
                                    },
                                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                            });
                            form.on('submit', function () {
                            if (!file.data('ace_input_files'))
                                    return false;
                                    file.ace_file_input('disable');
                                    form.find('button').attr('disabled', 'disabled');
                                    form.find('.modal-body').append(\"<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>\");
                                    var deferred = new \$.Deferred;
                                    working = true;
                                    deferred.done(function () {
                                    form.find('button').removeAttr('disabled');
                                            form.find('input[type=file]').ace_file_input('enable');
                                            form.find('.modal-body > :last-child').remove();
                                            modal.modal(\"hide\");
                                            var thumb = file.next().find('img').data('thumb');
                                            if (thumb)
                                            \$('#avatar2').get(0).src = thumb;
                                            working = false;
                                    });
                                    setTimeout(function () {
                                    deferred.resolve();
                                    }, parseInt(Math.random() * 800 + 800));
                                    return false;
                            });
                    });
                            //////////////////////////////
                            \$('#profile-feed-1').ace_scroll({
                    height: '250px',
                            mouseWheelLock: true,
                            alwaysVisible: true
                    });
                            /////////////////////////////////////
                            \$(document).one('ajaxloadstart.page', function (e) {
                    //in ajax mode, remove remaining elements before leaving page
                    try {
                    \$('.editable').editable('destroy');
                    } catch (e) {
                    }
                    \$('[class*=select2]').remove();
                    });
                    });
        </script>
    ";
        
        $__internal_016108b856e779da97583c1946e2345383f288c3c748a1cc3576356efeb1d004->leave($__internal_016108b856e779da97583c1946e2345383f288c3c748a1cc3576356efeb1d004_prof);

    }

    public function getTemplateName()
    {
        return "NutrirBoxBundle:Pessoa:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 258,  429 => 246,  410 => 230,  395 => 218,  380 => 206,  364 => 193,  330 => 162,  326 => 161,  322 => 160,  318 => 159,  314 => 158,  310 => 157,  306 => 156,  302 => 155,  292 => 149,  286 => 148,  259 => 127,  255 => 126,  243 => 117,  232 => 109,  221 => 101,  210 => 93,  199 => 85,  188 => 77,  177 => 69,  157 => 52,  146 => 43,  141 => 41,  118 => 17,  112 => 16,  103 => 13,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  81 => 7,  75 => 6,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "NutrirBoxBundle::base.html.twig" %}*/
/* {% block title 'Perfil' %}*/
/*     {% block header %} Perfil {% endblock %}*/
/*     {% block subheader %} fale um pouco sobre você {% endblock %}*/
/* */
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <!-- page specific plugin styles -->*/
/*         <link rel="stylesheet" href="{{asset('bundles/nutrirbox/dist/css/jquery-ui.custom.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/nutrirbox/dist/css/jquery.gritter.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/nutrirbox/dist/css/select2.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/nutrirbox/dist/css/datepicker.min.css')}}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/nutrirbox/dist/css/bootstrap-editable.min.css')}}" />*/
/*     {% endblock %}*/
/* */
/*     {% block body %}*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <!-- PAGE CONTENT BEGINS -->*/
/*                 <div class="clearfix">*/
/*                     <div class="pull-left alert alert-success no-margin">*/
/*                         <button type="button" class="close" data-dismiss="alert">*/
/*                             <i class="ace-icon fa fa-times"></i>*/
/*                         </button>*/
/* */
/*                         <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>*/
/*                         Clique na imagem abaixo ou nos campos para atualizar seu cadastro.*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="hr dotted"></div>*/
/* */
/*                 <div>*/
/*                     <div id="user-profile-1" class="user-profile row">*/
/*                         <div class="col-xs-12 col-sm-3 center">*/
/*                             <div>*/
/*                                 <span class="profile-picture">*/
/* {#                                    {% if (app.user.imFoto) %}#}*/
/* {#                                        <img id="avatar" class="editable img-responsive" src="{{asset('uploads/avatar/')}}{{app.user.imFoto}}" />#}*/
/* {#                                    {% else  %}#}*/
/*                                         <img id="avatar" class="editable img-responsive" src="{{asset('bundles/nutrirbox/dist/avatars/profile-pic.jpg')}}" />*/
/* {#                                    {% endif %}#}*/
/*                                 </span>*/
/* */
/*                                 <div class="space-4"></div>*/
/* */
/*                                 <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">*/
/*                                     <div class="inline position-relative">*/
/*                                         <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">*/
/*                                             <i class="ace-icon fa fa-circle light-green"></i>*/
/*                                             &nbsp;*/
/*                                             <span class="white">{{ app.user.noNome }}</span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="space-6"></div>*/
/*                             <div class="hr hr16 dotted"></div>*/
/*                         </div>*/
/* */
/*                         <div class="col-xs-12 col-sm-9">*/
/*                             <div class="profile-user-info profile-user-info-striped">*/
/*                                 <form action="#">                                                        */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Nome </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="noNome">{{ app.user.noNome }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Email </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="noEmail">{{ app.user.noEmail }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> CPF </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="nuCpf">{{ app.user.nuCpf }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Sexo </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="tpSexo" data-value="{{ app.user.tpSexo }}"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Telefone </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="nuTelefone">{{ app.user.nuTelefone }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Celular </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="nuCelular">{{ app.user.nuCelular }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="profile-info-row">*/
/*                                         <div class="profile-info-name"> Data de Nascimento </div>*/
/* */
/*                                         <div class="profile-info-value">*/
/*                                             <span class="editable" id="dtNascimento">{{ app.user.dtNascimento != '' ? app.user.dtNascimento|date('d/m/Y') : '' }}</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div>*/
/* */
/*                             <div class="space-6"></div>*/
/* */
/*                             <div>*/
/*                                 <form name="form" method="post" action="{{ app.user.coPessoa }}" class="form-horizontal">*/
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*                                     <input type="hidden" name="_method" value="DELETE" />*/
/*                                     <div class="form-group">*/
/*                                         <div class="col-sm-3">*/
/*                                             <button type="submit" class="btn btn-sm btn-primary btn-white btn-round btn-delete">*/
/*                                                 <span class="bigger-110">Desativar Conta</span>*/
/*                                             </button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="hidden" id="form__token" name="form[_token]" class="form-control" value="S85HyzJ7P3RFYYYKIlUhcFUvWV3k6CEaI5zmMR_6CNQ" />*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- PAGE CONTENT ENDS -->*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*     {% endblock %} */
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <!-- page specific plugin scripts -->*/
/* */
/*         <!--[if lte IE 8]>*/
/*           <script src="dist/js/excanvas.min.js"></script>*/
/*         <![endif]-->*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/jquery-ui.custom.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/jquery.ui.touch-punch.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/jquery.gritter.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/bootbox.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/date-time/bootstrap-datepicker.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/x-editable/bootstrap-editable.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/x-editable/ace-editable.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/nutrirbox/dist/js/jquery.maskedinput.min.js')}}"></script>*/
/*         <!-- inline scripts related to this page -->*/
/*         <script type="text/javascript">*/
/*                     jQuery(function ($) {*/
/* */
/* */
/*                             //editables*/
/*                             $.fn.editable.defaults.mode = 'inline';*/
/*                             $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";*/
/*                             $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +*/
/*                             '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';*/
/*                             $(document).on("click", ".editable-submit", function () {*/
/*                     if ($(".cpf-mask")){*/
/*                     $(".cpf-mask").mask("99999999999");*/
/*                     }*/
/*                     if ($(".telefone-mask")){*/
/*                     $(".telefone-mask").mask("9999999999");*/
/*                     }*/
/*                     if ($(".celular-mask")) {*/
/*                     $(".celular-mask").mask("9999999999?9");*/
/*                     }*/
/*                     if ($(".date-mask")){*/
/*                     $(".date-mask").mask("99-99-9999");*/
/*                     }*/
/*                     });*/
/*                             //editables*/
/*                             $('#noNome')*/
/*                             .editable({*/
/*                             type: 'text',*/
/*                                     name: 'noNome',*/
/*                                     url:  'update-pessoa-json',*/
/*                                     pk:{{ app.user.coPessoa }},*/
/*                                     validate: function(value){*/
/*                                     if ($.trim(value) == '')*/
/*                                             return 'Informe seu Nome.';*/
/*                                     }*/
/*                             });*/
/*                             $('#nuCpf')*/
/*                             .editable({*/
/*                             type: 'number',*/
/*                                     name: 'nuCpf',*/
/*                                     emptytext: 'Informe seu CPF',*/
/*                                     tpl: '<input type="text" id="nuCpfInput" class="cpf-mask form-control input-sm" style="padding-right: 24px;">',*/
/*                                     url:  'update-pessoa-json',*/
/*                                     pk:{{ app.user.coPessoa }},*/
/*                                     display: function(value) {*/
/*                                     $(this).text(formataCampo("999.999.999-99", value));*/
/*                                     }*/
/*                             });*/
/*                             $('#nuTelefone')*/
/*                             .editable({*/
/*                             type: 'tel',*/
/*                                     name: 'nuTelefone',*/
/*                                     emptytext: 'Informe seu Telefone',*/
/*                                     tpl: '<input type="text" id ="nuTelefoneInput" class="telefone-mask form-control input-sm" style="padding-right: 24px;">',*/
/*                                     url:  'update-pessoa-json',*/
/*                                     pk:{{ app.user.coPessoa }},*/
/*                                     display: function(value) {*/
/*                                     $(this).text(formataCampo("(99) 9999-9999", value));*/
/*                                     }*/
/*                             });*/
/*                             $('#nuCelular')*/
/*                             .editable({*/
/*                             type: 'tel',*/
/*                                     name: 'nuCelular',*/
/*                                     emptytext: 'Informe seu Celular',*/
/*                                     tpl: '<input type="text" id ="nuCelularInput" class="celular-mask form-control input-sm" style="padding-right: 24px;">',*/
/*                                     url:  'update-pessoa-json',*/
/*                                     pk:{{ app.user.coPessoa }},*/
/*                                     display: function(value) {*/
/*                                     if (value.length == 11)*/
/*                                             $(this).text(formataCampo("(99) 99999-9999", value));*/
/*                                             else if (value.length == 10)*/
/*                                             $(this).text(formataCampo("(99) 9999-9999", value));*/
/*                                             else*/
/*                                             $(this).text(value);*/
/*                                     }*/
/*                             });*/
/*                             $('#tpSexo')*/
/*                             .editable({*/
/*                             type: 'select',*/
/*                                     name: 'tpSexo',*/
/*                                     url:  'update-pessoa-json',*/
/*                                     emptytext: 'Informe seu sexo',*/
/*                                     pk:{{ app.user.coPessoa }},*/
/*                                     source: [*/
/*                                     {value: "M", text: 'Masculino'},*/
/*                                     {value: "F", text: 'Feminino'}*/
/*                                     ]*/
/* */
/*                             });*/
/*                             $('#dtNascimento').editable({*/
/*                     type: 'adate',*/
/*                             emptytext: 'Informe sua Data de Nascimento',*/
/*                             tpl: '<div class="input-group input-group-compact"><input type="text" class="date-mask input-medium date" /><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>',*/
/*                             url:  'update-pessoa-json',*/
/*                             pk:{{ app.user.coPessoa }},*/
/*                             date: {*/
/*                             format: 'dd/mm/yyyy',*/
/*                                     viewformat: 'dd/mm/yyyy',*/
/*                                     weekStart: 1*/
/*                                     //,nativeUI: true//if true and browser support input[type=date], native browser control will be used*/
/*                             },*/
/*                             display: function(value) {*/
/*                             $(this).text(formataCampo("99/99/9999", value));*/
/*                             }*/
/*                     })*/
/* */
/*                             $(document).ready(function (){*/
/*                     if (!isNaN(parseFloat($("#nuCpf").html())) && isFinite($("#nuCpf").html())){*/
/*                     $("#nuCpf").text(formataCampo("999.999.999-99", $("#nuCpf").html()));*/
/*                     }*/
/*                     if (!isNaN(parseFloat($("#nuTelefone").html())) && isFinite($("#nuTelefone").html())){*/
/*                     $("#nuTelefone").text(formataCampo("(99) 9999-9999", $("#nuTelefone").html()));*/
/*                     }*/
/*                     if (!isNaN(parseFloat($("#nuCelular").html())) && isFinite($("#nuCelular").html())){*/
/*                     if (parseFloat($("#nuCelular").html().length) === 10)*/
/*                             $("#nuCelular").text(formataCampo("(99) 9999-9999", $("#nuCelular").html()));*/
/*                             else*/
/*                             $("#nuCelular").text(formataCampo("(99) 99999-9999", $("#nuCelular").html()));*/
/*                     }*/
/*                     });*/
/*                             function formataCampo(mascara, valor) {*/
/*                             var boleanoMascara;*/
/*                                     exp = /\-|\.|\/|\(|\)| /g*/
/*                                     campoSoNumeros = valor;*/
/*                                     campoSoNumeros = "00000000000" + campoSoNumeros.replace(/\D/g, '');*/
/*                                     campoSoNumeros = campoSoNumeros.slice(mascara.replace(/\D/g, '').length * - 1);*/
/*                                     var posicaoCampo = 0;*/
/*                                     var novoValorCampo = "";*/
/*                                     var tamanhoMascara = mascara.length;*/
/*                                     if (valor.length > 0){*/
/*                             for (i = 0; i <= tamanhoMascara; i++) {*/
/*                             boleanoMascara = ((mascara.charAt(i) == "-") || (mascara.charAt(i) == ".")*/
/*                                     || (mascara.charAt(i) == "/"));*/
/*                                     boleanoMascara = boleanoMascara || ((mascara.charAt(i) == "(")*/
/*                                             || (mascara.charAt(i) == ")") || (mascara.charAt(i) == " "));*/
/*                                     if (boleanoMascara) {*/
/*                             novoValorCampo += mascara.charAt(i);*/
/*                             } else {*/
/*                             novoValorCampo += campoSoNumeros.charAt(posicaoCampo);*/
/*                                     posicaoCampo++;*/
/*                             }*/
/*                             }*/
/*                             }*/
/*                             return novoValorCampo;*/
/*                             }*/
/* */
/*                     $(document).on("focus", ".cpf-mask", function () {*/
/*                     if (this.value.length < 11)*/
/*                             this.value = ("00000000000" + this.value).slice( - 11)*/
/*                             $(this).mask("999.999.999-99", {placeholder:" "});*/
/*                     });*/
/*                             $(document).on("focus", ".date-mask", function () {*/
/*                     $(this).mask("99/99/9999", {placeholder:" "});*/
/*                     });*/
/*                             $(document).on("focus", ".telefone-mask", function () {*/
/*                     $(this).mask("(99) 9999-9999", {placeholder:" "});*/
/*                     });*/
/*                             $(document).on("focus", ".celular-mask", function () {*/
/*                     $(this).mask("(99) 9999-9999?9", {placeholder:" "});*/
/*                     });*/
/*                             $(document).on("keypress", ".celular-mask", function () {*/
/*                     if (this.value.replace(/\D/g, '').length > 10)*/
/*                             $(this).mask("(99) 99999-9999", {placeholder:" "});*/
/*                     });*/
/*                             // *** editable avatar *** //*/
/*                             try {//ie8 throws some harmless exceptions, so let's catch'em*/
/* */
/*                             //first let's add a fake appendChild method for Image element for browsers that have a problem with this*/
/*                             //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points*/
/*                             try {*/
/*                             document.createElement('IMG').appendChild(document.createElement('B'));*/
/*                             } catch (e) {*/
/*                             Image.prototype.appendChild = function (el) {*/
/*                             }*/
/*                             }*/
/* */
/*                             var last_gritter*/
/*                                     $('#avatar').editable({*/
/*                             type: 'image',*/
/*                                     name: 'avatar',*/
/*                                     value: null,*/
/*                                     image: {*/
/*                                     //specify ace file input plugin's options here*/
/*                                     btn_choose: 'Change Avatar',*/
/*                                             droppable: true,*/
/*                                             maxSize: 110000, //~100Kb*/
/* */
/*                                             //and a few extra ones here*/
/*                                             name: 'avatar', //put the field name here as well, will be used inside the custom plugin*/
/*                                             on_error : function(error_type) {//on_error function will be called when the selected file has a problem*/
/*                                             if (last_gritter) $.gritter.remove(last_gritter);*/
/*                                                     if (error_type == 1) {//file format error*/
/*                                             last_gritter = $.gritter.add({*/
/*                                             title: 'File is not an image!',*/
/*                                                     text: 'Please choose a jpg|gif|png image!',*/
/*                                                     class_name: 'gritter-error gritter-center'*/
/*                                             });*/
/*                                             } else if (error_type == 2) {//file size rror*/
/*                                             last_gritter = $.gritter.add({*/
/*                                             title: 'File too big!',*/
/*                                                     text: 'Image size should not exceed 100Kb!',*/
/*                                                     class_name: 'gritter-error gritter-center'*/
/*                                             });*/
/*                                             }*/
/*                                             else {//other error*/
/*                                             }*/
/*                                             },*/
/*                                             on_success : function() {*/
/*                                             $.gritter.removeAll();*/
/*                                             }*/
/*                                     },*/
/*                                     url: function(params) {*/
/*                                     // ***UPDATE AVATAR HERE*** //*/
/*                                     var submit_url = 'update-pessoa-json'; //please modify submit_url accordingly*/
/*                                             var deferred = null;*/
/*                                             var avatar = '#avatar';*/
/*                                             //if value is empty (""), it means no valid files were selected*/
/*                                             //but it may still be submitted by x-editable plugin*/
/*                                             //because "" (empty string) is different from previous non-empty value whatever it was*/
/*                                             //so we return just here to prevent problems*/
/*                                             var value = $(avatar).next().find('input[type=hidden]:eq(0)').val();*/
/*                                             if (!value || value.length == 0) {*/
/*                                     deferred = new $.Deferred*/
/*                                             deferred.resolve();*/
/*                                             return deferred.promise();*/
/*                                     }*/
/* */
/*                                     var $form = $(avatar).next().find('.editableform:eq(0)')*/
/*                                             var file_input = $form.find('input[type=file]:eq(0)');*/
/*                                             var pk = $(avatar).attr('data-pk'); //primary key to be sent to server*/
/* */
/*                                             var ie_timeout = null*/
/* */
/* */
/*                                             if ("FormData" in window) {*/
/*                                     var formData_object = new FormData(); //create empty FormData object*/
/* */
/*                                             //serialize our form (which excludes file inputs)*/
/*                                             $.each($form.serializeArray(), function(i, item) {*/
/*                                             //add them one by one to our FormData */
/*                                             formData_object.append(item.name, item.value);*/
/*                                             });*/
/*                                             //and then add files*/
/*                                             $form.find('input[type=file]').each(function(){*/
/*                                     var field_name = $(this).attr('name');*/
/*                                             var files = $(this).data('ace_input_files');*/
/*                                             if (files && files.length > 0) {*/
/*                                     formData_object.append(field_name, files[0]);*/
/*                                     }*/
/*                                     });*/
/*                                             //append primary key to our formData*/
/*                                             formData_object.append('pk', pk);*/
/*                                             deferred = $.ajax({*/
/*                                             url: submit_url,*/
/*                                                     type: 'POST',*/
/*                                                     processData: false, //important*/
/*                                                     contentType: false, //important*/
/*                                                     dataType: 'json', //server response type*/
/*                                                     data: formData_object*/
/*                                             })*/
/*                                     }*/
/*                                     else {*/
/*                                     deferred = new $.Deferred*/
/* */
/*                                             var temporary_iframe_id = 'temporary-iframe-' + (new Date()).getTime() + '-' + (parseInt(Math.random() * 1000));*/
/*                                             var temp_iframe =*/
/*                                             $('<iframe id="' + temporary_iframe_id + '" name="' + temporary_iframe_id + '" \*/
/*                                                                         frameborder="0" width="0" height="0" src="about:blank"\*/
/*                                                                         style="position:absolute; z-index:-1; visibility: hidden;"></iframe>')*/
/*                                             .insertAfter($form);*/
/*                                             $form.append('<input type="hidden" name="temporary-iframe-id" value="' + temporary_iframe_id + '" />');*/
/*                                             //append primary key (pk) to our form*/
/*                                             $('<input type="hidden" name="pk" />').val(pk).appendTo($form);*/
/*                                             temp_iframe.data('deferrer', deferred);*/
/*                                             //we save the deferred object to the iframe and in our server side response*/
/*                                             //we use "temporary-iframe-id" to access iframe and its deferred object*/
/* */
/*                                             $form.attr({*/
/*                                             action: submit_url,*/
/*                                                     method: 'POST',*/
/*                                                     enctype: 'multipart/form-data',*/
/*                                                     target: temporary_iframe_id //important*/
/*                                             });*/
/*                                             $form.get(0).submit();*/
/*                                             //if we don't receive any response after 30 seconds, declare it as failed!*/
/*                                             ie_timeout = setTimeout(function(){*/
/*                                             ie_timeout = null;*/
/*                                                     temp_iframe.attr('src', 'about:blank').remove();*/
/*                                                     deferred.reject({'status':'fail', 'message':'Timeout!'});*/
/*                                             }, 30000);*/
/*                                     }*/
/* */
/* */
/*                                     //deferred callbacks, triggered by both ajax and iframe solution*/
/*                                     deferred*/
/*                                             .done(function(result) {//success*/
/*                                             var res = result[0]; //the `result` is formatted by your server side response and is arbitrary*/
/*                                                     if (res.status == 'OK')*/
/*                                                     $(avatar).get(0).src = res.url;*/
/*                                                     else*/
/*                                                     alert(res.message);*/
/*                                             })*/
/*                                             .fail(function(result) {//failure*/
/*                                             alert("Houve um erro ao realizar o upload da imagem.");*/
/*                                             })*/
/*                                             .always(function() {//called on both success and failure*/
/*                                             if (ie_timeout) clearTimeout(ie_timeout)*/
/*                                                     ie_timeout = null;*/
/*                                             });*/
/*                                             return deferred.promise();*/
/*                                             // ***END OF UPDATE AVATAR HERE*** //*/
/*                                     },*/
/*                                     success: function(response, newValue) {*/
/*                                     }*/
/*                             })*/
/*                             } catch (e) {*/
/*                     }*/
/* */
/*                     /***/
/*                      //let's display edit mode by default?*/
/*                      var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first*/
/*                      if(blank_image) {*/
/*                      $('#avatar').editable('show').on('hidden', function(e, reason) {*/
/*                      if(reason == 'onblur') {*/
/*                      $('#avatar').editable('show');*/
/*                      return;*/
/*                      }*/
/*                      $('#avatar').off('hidden');*/
/*                      })*/
/*                      }*/
/*                      *//* */
/* */
/*                     //another option is using modals*/
/*                     $('#avatar2').on('click', function () {*/
/*                     var modal =*/
/*                             '<div class="modal fade">\*/
/*                                   <div class="modal-dialog">\*/
/*                                    <div class="modal-content">\*/
/*                                         <div class="modal-header">\*/
/*                                                 <button type="button" class="close" data-dismiss="modal">&times;</button>\*/
/*                                                 <h4 class="blue">Change Avatar</h4>\*/
/*                                         </div>\*/
/*                                         \*/
/*                                         <form class="no-margin">\*/
/*                                          <div class="modal-body">\*/
/*                                                 <div class="space-4"></div>\*/
/*                                                 <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\*/
/*                                          </div>\*/
/*                                         \*/
/*                                          <div class="modal-footer center">\*/
/*                                                 <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\*/
/*                                                 <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\*/
/*                                          </div>\*/
/*                                         </form>\*/
/*                                   </div>\*/
/*                                  </div>\*/
/*                                 </div>';*/
/*                             var modal = $(modal);*/
/*                             modal.modal("show").on("hidden", function () {*/
/*                     modal.remove();*/
/*                     });*/
/*                             var working = false;*/
/*                             var form = modal.find('form:eq(0)');*/
/*                             var file = form.find('input[type=file]').eq(0);*/
/*                             file.ace_file_input({*/
/*                             style: 'well',*/
/*                                     btn_choose: 'Click to choose new avatar',*/
/*                                     btn_change: null,*/
/*                                     no_icon: 'ace-icon fa fa-picture-o',*/
/*                                     thumbnail: 'small',*/
/*                                     before_remove: function () {*/
/*                                     //don't remove/reset files while being uploaded*/
/*                                     return !working;*/
/*                                     },*/
/*                                     allowExt: ['jpg', 'jpeg', 'png', 'gif'],*/
/*                                     allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']*/
/*                             });*/
/*                             form.on('submit', function () {*/
/*                             if (!file.data('ace_input_files'))*/
/*                                     return false;*/
/*                                     file.ace_file_input('disable');*/
/*                                     form.find('button').attr('disabled', 'disabled');*/
/*                                     form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");*/
/*                                     var deferred = new $.Deferred;*/
/*                                     working = true;*/
/*                                     deferred.done(function () {*/
/*                                     form.find('button').removeAttr('disabled');*/
/*                                             form.find('input[type=file]').ace_file_input('enable');*/
/*                                             form.find('.modal-body > :last-child').remove();*/
/*                                             modal.modal("hide");*/
/*                                             var thumb = file.next().find('img').data('thumb');*/
/*                                             if (thumb)*/
/*                                             $('#avatar2').get(0).src = thumb;*/
/*                                             working = false;*/
/*                                     });*/
/*                                     setTimeout(function () {*/
/*                                     deferred.resolve();*/
/*                                     }, parseInt(Math.random() * 800 + 800));*/
/*                                     return false;*/
/*                             });*/
/*                     });*/
/*                             //////////////////////////////*/
/*                             $('#profile-feed-1').ace_scroll({*/
/*                     height: '250px',*/
/*                             mouseWheelLock: true,*/
/*                             alwaysVisible: true*/
/*                     });*/
/*                             /////////////////////////////////////*/
/*                             $(document).one('ajaxloadstart.page', function (e) {*/
/*                     //in ajax mode, remove remaining elements before leaving page*/
/*                     try {*/
/*                     $('.editable').editable('destroy');*/
/*                     } catch (e) {*/
/*                     }*/
/*                     $('[class*=select2]').remove();*/
/*                     });*/
/*                     });*/
/*         </script>*/
/*     {% endblock %} */
