<?php

/* :default:bootstrap_3_horizontal_layout_custom.html.twig */
class __TwigTemplate_01e639b99bc8756c6e72e610e05f197c1a5c9e2c0ab15434eae195c983649f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", ":default:bootstrap_3_horizontal_layout_custom.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'checkbox_attributes' => array($this, 'block_checkbox_attributes'),
                'checkbox_widget_custom' => array($this, 'block_checkbox_widget_custom'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_start' => array($this, 'block_form_start'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aad498eb9e383a28f46c664a10d726691037c05f27ed160e1c6a8ad28263b7d = $this->env->getExtension("native_profiler");
        $__internal_6aad498eb9e383a28f46c664a10d726691037c05f27ed160e1c6a8ad28263b7d->enter($__internal_6aad498eb9e383a28f46c664a10d726691037c05f27ed160e1c6a8ad28263b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:bootstrap_3_horizontal_layout_custom.html.twig"));

        // line 2
        echo "
";
        // line 5
        $this->displayBlock('checkbox_attributes', $context, $blocks);
        // line 21
        $this->displayBlock('checkbox_widget_custom', $context, $blocks);
        // line 26
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 33
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 41
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('button_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('money_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('date_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('time_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('form_label', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('choice_label', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('radio_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 211
        echo "
";
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('form_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('button_row', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('choice_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('date_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('time_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('radio_row', $context, $blocks);
        // line 265
        echo "
";
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('form_errors', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_start', $context, $blocks);
        // line 286
        echo "
";
        // line 288
        echo "
";
        // line 289
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 292
        echo "
";
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('submit_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_6aad498eb9e383a28f46c664a10d726691037c05f27ed160e1c6a8ad28263b7d->leave($__internal_6aad498eb9e383a28f46c664a10d726691037c05f27ed160e1c6a8ad28263b7d_prof);

    }

    // line 5
    public function block_checkbox_attributes($context, array $blocks = array())
    {
        $__internal_2b3bbe5333a9e305d440fa36e3e8c7abd33b66cedd40a634d63fee1c7813d78e = $this->env->getExtension("native_profiler");
        $__internal_2b3bbe5333a9e305d440fa36e3e8c7abd33b66cedd40a634d63fee1c7813d78e->enter($__internal_2b3bbe5333a9e305d440fa36e3e8c7abd33b66cedd40a634d63fee1c7813d78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_attributes"));

        // line 6
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 7
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 8
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\" ";
        }
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 10
            echo " ";
            // line 11
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 12
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 13
$context["attrvalue"] === true)) {
                // line 14
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 15
$context["attrvalue"] === false)) {
                // line 16
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2b3bbe5333a9e305d440fa36e3e8c7abd33b66cedd40a634d63fee1c7813d78e->leave($__internal_2b3bbe5333a9e305d440fa36e3e8c7abd33b66cedd40a634d63fee1c7813d78e_prof);

    }

    // line 21
    public function block_checkbox_widget_custom($context, array $blocks = array())
    {
        $__internal_5c3c4ee575c238f4fb44dc132dbbc6ed0985d3449cc3fd20572cbbcc0513ef4a = $this->env->getExtension("native_profiler");
        $__internal_5c3c4ee575c238f4fb44dc132dbbc6ed0985d3449cc3fd20572cbbcc0513ef4a->enter($__internal_5c3c4ee575c238f4fb44dc132dbbc6ed0985d3449cc3fd20572cbbcc0513ef4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget_custom"));

        // line 22
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("checkbox_attributes", $context, $blocks);
        echo " value=\"true\" ";
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    <input type=\"hidden\" ";
        // line 23
        $this->displayBlock("checkbox_attributes", $context, $blocks);
        echo " value=\"false\" />";
        
        $__internal_5c3c4ee575c238f4fb44dc132dbbc6ed0985d3449cc3fd20572cbbcc0513ef4a->leave($__internal_5c3c4ee575c238f4fb44dc132dbbc6ed0985d3449cc3fd20572cbbcc0513ef4a_prof);

    }

    // line 26
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_173a6b85ac6b32ee66a0428f5fedd1e0fb723a1d0065a59781d12ff78870e5cf = $this->env->getExtension("native_profiler");
        $__internal_173a6b85ac6b32ee66a0428f5fedd1e0fb723a1d0065a59781d12ff78870e5cf->enter($__internal_173a6b85ac6b32ee66a0428f5fedd1e0fb723a1d0065a59781d12ff78870e5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 27
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-control ")) : ("form-control ")))));
        }
        // line 30
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_173a6b85ac6b32ee66a0428f5fedd1e0fb723a1d0065a59781d12ff78870e5cf->leave($__internal_173a6b85ac6b32ee66a0428f5fedd1e0fb723a1d0065a59781d12ff78870e5cf_prof);

    }

    // line 33
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_efa36035f6902a1d75d6c868ddcb6a1e52247d0850e0b46b22e92d9990ae9abd = $this->env->getExtension("native_profiler");
        $__internal_efa36035f6902a1d75d6c868ddcb6a1e52247d0850e0b46b22e92d9990ae9abd->enter($__internal_efa36035f6902a1d75d6c868ddcb6a1e52247d0850e0b46b22e92d9990ae9abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 34
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 37
        $this->displayBlock("form_rows", $context, $blocks);
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        
        $__internal_efa36035f6902a1d75d6c868ddcb6a1e52247d0850e0b46b22e92d9990ae9abd->leave($__internal_efa36035f6902a1d75d6c868ddcb6a1e52247d0850e0b46b22e92d9990ae9abd_prof);

    }

    // line 41
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_61aadadc3c2f8dd7bc33c1ecae16af77cbab221349dcb8b7aef4611e6b384fe3 = $this->env->getExtension("native_profiler");
        $__internal_61aadadc3c2f8dd7bc33c1ecae16af77cbab221349dcb8b7aef4611e6b384fe3->enter($__internal_61aadadc3c2f8dd7bc33c1ecae16af77cbab221349dcb8b7aef4611e6b384fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 42
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-control ")) : ("form-control ")))));
        // line 43
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_61aadadc3c2f8dd7bc33c1ecae16af77cbab221349dcb8b7aef4611e6b384fe3->leave($__internal_61aadadc3c2f8dd7bc33c1ecae16af77cbab221349dcb8b7aef4611e6b384fe3_prof);

    }

    // line 46
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_206435666ba59c56a475b0ef86a653e9cf7681ae944066d73087b814c7ba3749 = $this->env->getExtension("native_profiler");
        $__internal_206435666ba59c56a475b0ef86a653e9cf7681ae944066d73087b814c7ba3749->enter($__internal_206435666ba59c56a475b0ef86a653e9cf7681ae944066d73087b814c7ba3749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 47
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-primary")) : ("btn-primary")) . " btn"))));
        // line 48
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_206435666ba59c56a475b0ef86a653e9cf7681ae944066d73087b814c7ba3749->leave($__internal_206435666ba59c56a475b0ef86a653e9cf7681ae944066d73087b814c7ba3749_prof);

    }

    // line 51
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8746149c76663ff222076b9e49959d0838fe43732996ef0f99b6ceee82c008c2 = $this->env->getExtension("native_profiler");
        $__internal_8746149c76663ff222076b9e49959d0838fe43732996ef0f99b6ceee82c008c2->enter($__internal_8746149c76663ff222076b9e49959d0838fe43732996ef0f99b6ceee82c008c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 52
        echo "<div class=\"input-group\">
        <span class=\"input-group-addon\"> R\$ </span>";
        // line 54
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 55
        echo "</div>";
        
        $__internal_8746149c76663ff222076b9e49959d0838fe43732996ef0f99b6ceee82c008c2->leave($__internal_8746149c76663ff222076b9e49959d0838fe43732996ef0f99b6ceee82c008c2_prof);

    }

    // line 58
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e7d8b156052dbafcabaaa5439f07286a4e13f56003bd5e7f17f9f39e498d6904 = $this->env->getExtension("native_profiler");
        $__internal_e7d8b156052dbafcabaaa5439f07286a4e13f56003bd5e7f17f9f39e498d6904->enter($__internal_e7d8b156052dbafcabaaa5439f07286a4e13f56003bd5e7f17f9f39e498d6904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 59
        echo "<div class=\"input-group\">";
        // line 60
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 61
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e7d8b156052dbafcabaaa5439f07286a4e13f56003bd5e7f17f9f39e498d6904->leave($__internal_e7d8b156052dbafcabaaa5439f07286a4e13f56003bd5e7f17f9f39e498d6904_prof);

    }

    // line 65
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_040fde0403a3543ff866405d64b82a0d90166def732df4977e232ac6b190b26f = $this->env->getExtension("native_profiler");
        $__internal_040fde0403a3543ff866405d64b82a0d90166def732df4977e232ac6b190b26f->enter($__internal_040fde0403a3543ff866405d64b82a0d90166def732df4977e232ac6b190b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 66
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 67
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 69
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 70
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 75
            echo "</div>";
        }
        
        $__internal_040fde0403a3543ff866405d64b82a0d90166def732df4977e232ac6b190b26f->leave($__internal_040fde0403a3543ff866405d64b82a0d90166def732df4977e232ac6b190b26f_prof);

    }

    // line 79
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9dd64e4385beb8e5ca6a27827e5e0951d2866aa23acc54ef39318e01cb74622a = $this->env->getExtension("native_profiler");
        $__internal_9dd64e4385beb8e5ca6a27827e5e0951d2866aa23acc54ef39318e01cb74622a->enter($__internal_9dd64e4385beb8e5ca6a27827e5e0951d2866aa23acc54ef39318e01cb74622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 80
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 81
            echo "        ";
            if (array_key_exists("type", $context)) {
                // line 82
                $context["type"] = twig_replace_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "date", "text");
            }
            // line 84
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control date-picker date-mask"))));
            // line 85
            echo "<div class=\"input-group\">";
            // line 86
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 87
            echo "<span class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </span>
        </div>
    ";
        } else {
            // line 92
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 93
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 94
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 96
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 97
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 98
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 99
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 101
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 102
                echo "</div>";
            }
        }
        
        $__internal_9dd64e4385beb8e5ca6a27827e5e0951d2866aa23acc54ef39318e01cb74622a->leave($__internal_9dd64e4385beb8e5ca6a27827e5e0951d2866aa23acc54ef39318e01cb74622a_prof);

    }

    // line 107
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0be3ae3bde4cec528edb11a69607580de99cf3030718c45dcbcf5544d83b4ff0 = $this->env->getExtension("native_profiler");
        $__internal_0be3ae3bde4cec528edb11a69607580de99cf3030718c45dcbcf5544d83b4ff0->enter($__internal_0be3ae3bde4cec528edb11a69607580de99cf3030718c45dcbcf5544d83b4ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 108
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 116
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 117
                echo "</div>";
            }
        }
        
        $__internal_0be3ae3bde4cec528edb11a69607580de99cf3030718c45dcbcf5544d83b4ff0->leave($__internal_0be3ae3bde4cec528edb11a69607580de99cf3030718c45dcbcf5544d83b4ff0_prof);

    }

    // line 122
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5da2ee4b29d4d40c36499b2e67ec0b39a385f2f9a629ebd81d66684da0e01524 = $this->env->getExtension("native_profiler");
        $__internal_5da2ee4b29d4d40c36499b2e67ec0b39a385f2f9a629ebd81d66684da0e01524->enter($__internal_5da2ee4b29d4d40c36499b2e67ec0b39a385f2f9a629ebd81d66684da0e01524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 123
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
        // line 124
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5da2ee4b29d4d40c36499b2e67ec0b39a385f2f9a629ebd81d66684da0e01524->leave($__internal_5da2ee4b29d4d40c36499b2e67ec0b39a385f2f9a629ebd81d66684da0e01524_prof);

    }

    // line 127
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c657de596b76f7728191ddffbc9612a3574670d819a37bd8dd31c2c190e4e7d6 = $this->env->getExtension("native_profiler");
        $__internal_c657de596b76f7728191ddffbc9612a3574670d819a37bd8dd31c2c190e4e7d6->enter($__internal_c657de596b76f7728191ddffbc9612a3574670d819a37bd8dd31c2c190e4e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 128
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 129
            echo "<div class=\"control-group\">";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 131
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 132
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 133
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>";
        } else {
            // line 138
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 141
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 142
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "</div>";
        }
        
        $__internal_c657de596b76f7728191ddffbc9612a3574670d819a37bd8dd31c2c190e4e7d6->leave($__internal_c657de596b76f7728191ddffbc9612a3574670d819a37bd8dd31c2c190e4e7d6_prof);

    }

    // line 149
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a69ac521cacf433bf4ca141dbf4eaddbc6214c158a20882421c065572ed942b0 = $this->env->getExtension("native_profiler");
        $__internal_a69ac521cacf433bf4ca141dbf4eaddbc6214c158a20882421c065572ed942b0->enter($__internal_a69ac521cacf433bf4ca141dbf4eaddbc6214c158a20882421c065572ed942b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        
        $__internal_a69ac521cacf433bf4ca141dbf4eaddbc6214c158a20882421c065572ed942b0->leave($__internal_a69ac521cacf433bf4ca141dbf4eaddbc6214c158a20882421c065572ed942b0_prof);

    }

    // line 153
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f7174cb216e92f82ccbd79573b86c7e528b9c87cbd9f5a6737ee521285e61582 = $this->env->getExtension("native_profiler");
        $__internal_f7174cb216e92f82ccbd79573b86c7e528b9c87cbd9f5a6737ee521285e61582->enter($__internal_f7174cb216e92f82ccbd79573b86c7e528b9c87cbd9f5a6737ee521285e61582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 155
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"radio\">";
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_f7174cb216e92f82ccbd79573b86c7e528b9c87cbd9f5a6737ee521285e61582->leave($__internal_f7174cb216e92f82ccbd79573b86c7e528b9c87cbd9f5a6737ee521285e61582_prof);

    }

    // line 166
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e19bf2908391e95f58400048d6bcbbff26325b7a49d309a0d6b7b69facbaa7d8 = $this->env->getExtension("native_profiler");
        $__internal_e19bf2908391e95f58400048d6bcbbff26325b7a49d309a0d6b7b69facbaa7d8->enter($__internal_e19bf2908391e95f58400048d6bcbbff26325b7a49d309a0d6b7b69facbaa7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 167
        ob_start();
        // line 168
        echo "        ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 169
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 171
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 172
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 173
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 175
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e19bf2908391e95f58400048d6bcbbff26325b7a49d309a0d6b7b69facbaa7d8->leave($__internal_e19bf2908391e95f58400048d6bcbbff26325b7a49d309a0d6b7b69facbaa7d8_prof);

    }

    // line 178
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_43590772ec4b0d8a6ba4dd15882bdd3a4085d0292bce131c295da8a5c94eeaf4 = $this->env->getExtension("native_profiler");
        $__internal_43590772ec4b0d8a6ba4dd15882bdd3a4085d0292bce131c295da8a5c94eeaf4->enter($__internal_43590772ec4b0d8a6ba4dd15882bdd3a4085d0292bce131c295da8a5c94eeaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 180
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 181
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_43590772ec4b0d8a6ba4dd15882bdd3a4085d0292bce131c295da8a5c94eeaf4->leave($__internal_43590772ec4b0d8a6ba4dd15882bdd3a4085d0292bce131c295da8a5c94eeaf4_prof);

    }

    // line 184
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8837a09636cf5bcbd9921d3b71f762a22505916bdaa3970cbf1af9d19da191fa = $this->env->getExtension("native_profiler");
        $__internal_8837a09636cf5bcbd9921d3b71f762a22505916bdaa3970cbf1af9d19da191fa->enter($__internal_8837a09636cf5bcbd9921d3b71f762a22505916bdaa3970cbf1af9d19da191fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 185
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8837a09636cf5bcbd9921d3b71f762a22505916bdaa3970cbf1af9d19da191fa->leave($__internal_8837a09636cf5bcbd9921d3b71f762a22505916bdaa3970cbf1af9d19da191fa_prof);

    }

    // line 188
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9b61de9e93795b8bbaade1b0a6eec085ef3f13eb8ded5a53405537cb18fc429f = $this->env->getExtension("native_profiler");
        $__internal_9b61de9e93795b8bbaade1b0a6eec085ef3f13eb8ded5a53405537cb18fc429f->enter($__internal_9b61de9e93795b8bbaade1b0a6eec085ef3f13eb8ded5a53405537cb18fc429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9b61de9e93795b8bbaade1b0a6eec085ef3f13eb8ded5a53405537cb18fc429f->leave($__internal_9b61de9e93795b8bbaade1b0a6eec085ef3f13eb8ded5a53405537cb18fc429f_prof);

    }

    // line 192
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a7174c3b1ee15e4ec4593c481848ee20d0f27ba0752800dd7cdaefd776d6e7d1 = $this->env->getExtension("native_profiler");
        $__internal_a7174c3b1ee15e4ec4593c481848ee20d0f27ba0752800dd7cdaefd776d6e7d1->enter($__internal_a7174c3b1ee15e4ec4593c481848ee20d0f27ba0752800dd7cdaefd776d6e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 193
        echo "    ";
        // line 194
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 195
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 196
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 197
                echo "        ";
            }
            // line 198
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 199
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 200
                echo "        ";
            }
            // line 201
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 202
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 203
            echo "<label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 204
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 205
            echo "</label>
        <div class=\"";
            // line 206
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 207
            echo twig_replace_filter((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), array("required=\"required\" " => ""));
            // line 208
            echo "</div>
    ";
        }
        
        $__internal_a7174c3b1ee15e4ec4593c481848ee20d0f27ba0752800dd7cdaefd776d6e7d1->leave($__internal_a7174c3b1ee15e4ec4593c481848ee20d0f27ba0752800dd7cdaefd776d6e7d1_prof);

    }

    // line 214
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1eb503c91fe0534c5667c2e3095e1c242e53757fa61f90276e7cd3d71dc5da6e = $this->env->getExtension("native_profiler");
        $__internal_1eb503c91fe0534c5667c2e3095e1c242e53757fa61f90276e7cd3d71dc5da6e->enter($__internal_1eb503c91fe0534c5667c2e3095e1c242e53757fa61f90276e7cd3d71dc5da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 215
        ob_start();
        // line 216
        echo "    <div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 218
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1eb503c91fe0534c5667c2e3095e1c242e53757fa61f90276e7cd3d71dc5da6e->leave($__internal_1eb503c91fe0534c5667c2e3095e1c242e53757fa61f90276e7cd3d71dc5da6e_prof);

    }

    // line 226
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5da92c8288ac745dc4398106ae3f127b40047cf3e43010ce20b887c73eeab8c8 = $this->env->getExtension("native_profiler");
        $__internal_5da92c8288ac745dc4398106ae3f127b40047cf3e43010ce20b887c73eeab8c8->enter($__internal_5da92c8288ac745dc4398106ae3f127b40047cf3e43010ce20b887c73eeab8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 227
        echo "<div class=\"form-group\">";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 229
        echo "</div>";
        
        $__internal_5da92c8288ac745dc4398106ae3f127b40047cf3e43010ce20b887c73eeab8c8->leave($__internal_5da92c8288ac745dc4398106ae3f127b40047cf3e43010ce20b887c73eeab8c8_prof);

    }

    // line 232
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_744c58fd4fc328f7d7db67b6c3cc5d4202f86659a23f61e50e8380e9a166f74b = $this->env->getExtension("native_profiler");
        $__internal_744c58fd4fc328f7d7db67b6c3cc5d4202f86659a23f61e50e8380e9a166f74b->enter($__internal_744c58fd4fc328f7d7db67b6c3cc5d4202f86659a23f61e50e8380e9a166f74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 233
        $context["force_error"] = true;
        // line 234
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_744c58fd4fc328f7d7db67b6c3cc5d4202f86659a23f61e50e8380e9a166f74b->leave($__internal_744c58fd4fc328f7d7db67b6c3cc5d4202f86659a23f61e50e8380e9a166f74b_prof);

    }

    // line 237
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bec57b9ee0f5f080f075990755759d70ab03d3cacf162e546ca1b7e95e0aa862 = $this->env->getExtension("native_profiler");
        $__internal_bec57b9ee0f5f080f075990755759d70ab03d3cacf162e546ca1b7e95e0aa862->enter($__internal_bec57b9ee0f5f080f075990755759d70ab03d3cacf162e546ca1b7e95e0aa862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bec57b9ee0f5f080f075990755759d70ab03d3cacf162e546ca1b7e95e0aa862->leave($__internal_bec57b9ee0f5f080f075990755759d70ab03d3cacf162e546ca1b7e95e0aa862_prof);

    }

    // line 242
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_81df6ac7fbbe72bdfbcbe6041a69b53801001f6fda1e72fed230a110eec52757 = $this->env->getExtension("native_profiler");
        $__internal_81df6ac7fbbe72bdfbcbe6041a69b53801001f6fda1e72fed230a110eec52757->enter($__internal_81df6ac7fbbe72bdfbcbe6041a69b53801001f6fda1e72fed230a110eec52757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_81df6ac7fbbe72bdfbcbe6041a69b53801001f6fda1e72fed230a110eec52757->leave($__internal_81df6ac7fbbe72bdfbcbe6041a69b53801001f6fda1e72fed230a110eec52757_prof);

    }

    // line 247
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c62cd8894be72d0256f0d71db82b3657276bf6e8784b1fa71d7386986acf489d = $this->env->getExtension("native_profiler");
        $__internal_c62cd8894be72d0256f0d71db82b3657276bf6e8784b1fa71d7386986acf489d->enter($__internal_c62cd8894be72d0256f0d71db82b3657276bf6e8784b1fa71d7386986acf489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c62cd8894be72d0256f0d71db82b3657276bf6e8784b1fa71d7386986acf489d->leave($__internal_c62cd8894be72d0256f0d71db82b3657276bf6e8784b1fa71d7386986acf489d_prof);

    }

    // line 252
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c5b5e9ad74e75a159e5fd4d9a9e44ce78fb5e6eb94fc0e1a8b2f86d874604080 = $this->env->getExtension("native_profiler");
        $__internal_c5b5e9ad74e75a159e5fd4d9a9e44ce78fb5e6eb94fc0e1a8b2f86d874604080->enter($__internal_c5b5e9ad74e75a159e5fd4d9a9e44ce78fb5e6eb94fc0e1a8b2f86d874604080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 253
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 256
        echo "</div>";
        
        $__internal_c5b5e9ad74e75a159e5fd4d9a9e44ce78fb5e6eb94fc0e1a8b2f86d874604080->leave($__internal_c5b5e9ad74e75a159e5fd4d9a9e44ce78fb5e6eb94fc0e1a8b2f86d874604080_prof);

    }

    // line 259
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9bdcfc8d69f64605fbbd8e8a4ff03afcc45e6cefc855d01e0010826e2fbeaec5 = $this->env->getExtension("native_profiler");
        $__internal_9bdcfc8d69f64605fbbd8e8a4ff03afcc45e6cefc855d01e0010826e2fbeaec5->enter($__internal_9bdcfc8d69f64605fbbd8e8a4ff03afcc45e6cefc855d01e0010826e2fbeaec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 260
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 263
        echo "</div>";
        
        $__internal_9bdcfc8d69f64605fbbd8e8a4ff03afcc45e6cefc855d01e0010826e2fbeaec5->leave($__internal_9bdcfc8d69f64605fbbd8e8a4ff03afcc45e6cefc855d01e0010826e2fbeaec5_prof);

    }

    // line 268
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_86f7b85e89b4ce6b244ce5e914faaecc756bd08f5aa7fce6469cb337f6d44d34 = $this->env->getExtension("native_profiler");
        $__internal_86f7b85e89b4ce6b244ce5e914faaecc756bd08f5aa7fce6469cb337f6d44d34->enter($__internal_86f7b85e89b4ce6b244ce5e914faaecc756bd08f5aa7fce6469cb337f6d44d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 269
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 270
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 271
            echo "    <ul class=\"list-unstyled\">";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 273
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "</ul>
    ";
            // line 276
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_86f7b85e89b4ce6b244ce5e914faaecc756bd08f5aa7fce6469cb337f6d44d34->leave($__internal_86f7b85e89b4ce6b244ce5e914faaecc756bd08f5aa7fce6469cb337f6d44d34_prof);

    }

    // line 282
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a573b289d1e471ff7ba46478f8bf19e973d24766159282bfeed4921baa3545ab = $this->env->getExtension("native_profiler");
        $__internal_a573b289d1e471ff7ba46478f8bf19e973d24766159282bfeed4921baa3545ab->enter($__internal_a573b289d1e471ff7ba46478f8bf19e973d24766159282bfeed4921baa3545ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 283
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 284
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a573b289d1e471ff7ba46478f8bf19e973d24766159282bfeed4921baa3545ab->leave($__internal_a573b289d1e471ff7ba46478f8bf19e973d24766159282bfeed4921baa3545ab_prof);

    }

    // line 289
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_58863796c4c8e794c8a8980169f7867e0ab925561abbdf5f8a593e74feffbe09 = $this->env->getExtension("native_profiler");
        $__internal_58863796c4c8e794c8a8980169f7867e0ab925561abbdf5f8a593e74feffbe09->enter($__internal_58863796c4c8e794c8a8980169f7867e0ab925561abbdf5f8a593e74feffbe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 290
        echo "col-sm-2 no-padding-right";
        
        $__internal_58863796c4c8e794c8a8980169f7867e0ab925561abbdf5f8a593e74feffbe09->leave($__internal_58863796c4c8e794c8a8980169f7867e0ab925561abbdf5f8a593e74feffbe09_prof);

    }

    // line 295
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_da40d6e77ab1dcd07224f5e102c5499f1ee8c7f019c7505fefbefea53fb96587 = $this->env->getExtension("native_profiler");
        $__internal_da40d6e77ab1dcd07224f5e102c5499f1ee8c7f019c7505fefbefea53fb96587->enter($__internal_da40d6e77ab1dcd07224f5e102c5499f1ee8c7f019c7505fefbefea53fb96587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 296
        ob_start();
        // line 297
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 298
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 299
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da40d6e77ab1dcd07224f5e102c5499f1ee8c7f019c7505fefbefea53fb96587->leave($__internal_da40d6e77ab1dcd07224f5e102c5499f1ee8c7f019c7505fefbefea53fb96587_prof);

    }

    // line 307
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cdef586c60b03bf92770c07fbfa147046013ef386ac39137284b6647348b8248 = $this->env->getExtension("native_profiler");
        $__internal_cdef586c60b03bf92770c07fbfa147046013ef386ac39137284b6647348b8248->enter($__internal_cdef586c60b03bf92770c07fbfa147046013ef386ac39137284b6647348b8248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 308
        ob_start();
        // line 309
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 310
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 311
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cdef586c60b03bf92770c07fbfa147046013ef386ac39137284b6647348b8248->leave($__internal_cdef586c60b03bf92770c07fbfa147046013ef386ac39137284b6647348b8248_prof);

    }

    // line 318
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_43ee78d51af08790abc0d3ef35ac89abf844e21621fae8172acf65020fcf4392 = $this->env->getExtension("native_profiler");
        $__internal_43ee78d51af08790abc0d3ef35ac89abf844e21621fae8172acf65020fcf4392->enter($__internal_43ee78d51af08790abc0d3ef35ac89abf844e21621fae8172acf65020fcf4392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 319
        echo "col-sm-3";
        
        $__internal_43ee78d51af08790abc0d3ef35ac89abf844e21621fae8172acf65020fcf4392->leave($__internal_43ee78d51af08790abc0d3ef35ac89abf844e21621fae8172acf65020fcf4392_prof);

    }

    public function getTemplateName()
    {
        return ":default:bootstrap_3_horizontal_layout_custom.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1113 => 319,  1107 => 318,  1095 => 312,  1091 => 311,  1087 => 310,  1084 => 309,  1082 => 308,  1076 => 307,  1064 => 301,  1060 => 300,  1056 => 299,  1052 => 298,  1045 => 297,  1043 => 296,  1037 => 295,  1030 => 290,  1024 => 289,  1017 => 284,  1015 => 283,  1009 => 282,  997 => 276,  994 => 275,  986 => 273,  982 => 272,  980 => 271,  974 => 270,  972 => 269,  966 => 268,  959 => 263,  957 => 262,  955 => 261,  949 => 260,  943 => 259,  936 => 256,  934 => 255,  932 => 254,  926 => 253,  920 => 252,  913 => 249,  911 => 248,  905 => 247,  898 => 244,  896 => 243,  890 => 242,  883 => 239,  881 => 238,  875 => 237,  868 => 234,  866 => 233,  860 => 232,  853 => 229,  851 => 228,  849 => 227,  843 => 226,  831 => 220,  827 => 219,  823 => 218,  819 => 217,  812 => 216,  810 => 215,  804 => 214,  795 => 208,  793 => 207,  790 => 206,  787 => 205,  785 => 204,  768 => 203,  766 => 202,  764 => 201,  761 => 200,  758 => 199,  755 => 198,  752 => 197,  749 => 196,  746 => 195,  743 => 194,  741 => 193,  735 => 192,  728 => 189,  722 => 188,  715 => 185,  709 => 184,  702 => 181,  700 => 180,  694 => 178,  686 => 175,  683 => 173,  681 => 172,  678 => 171,  672 => 169,  669 => 168,  667 => 167,  661 => 166,  653 => 160,  651 => 159,  649 => 158,  646 => 156,  644 => 155,  642 => 154,  636 => 153,  629 => 150,  623 => 149,  615 => 145,  609 => 142,  608 => 141,  607 => 140,  603 => 139,  599 => 138,  596 => 136,  590 => 133,  589 => 132,  588 => 131,  584 => 130,  582 => 129,  580 => 128,  574 => 127,  567 => 124,  565 => 123,  559 => 122,  550 => 117,  547 => 116,  539 => 115,  534 => 113,  532 => 112,  530 => 111,  527 => 109,  525 => 108,  519 => 107,  510 => 102,  508 => 101,  506 => 99,  505 => 98,  504 => 97,  503 => 96,  498 => 94,  496 => 93,  494 => 92,  487 => 87,  485 => 86,  483 => 85,  480 => 84,  477 => 82,  474 => 81,  472 => 80,  466 => 79,  458 => 75,  456 => 74,  454 => 73,  452 => 72,  450 => 71,  446 => 70,  444 => 69,  441 => 67,  439 => 66,  433 => 65,  425 => 61,  423 => 60,  421 => 59,  415 => 58,  408 => 55,  406 => 54,  403 => 52,  397 => 51,  390 => 48,  388 => 47,  382 => 46,  375 => 43,  373 => 42,  367 => 41,  360 => 38,  358 => 37,  355 => 35,  353 => 34,  347 => 33,  340 => 30,  337 => 28,  335 => 27,  329 => 26,  321 => 23,  312 => 22,  306 => 21,  291 => 16,  289 => 15,  284 => 14,  282 => 13,  277 => 12,  275 => 11,  273 => 10,  269 => 9,  265 => 8,  261 => 7,  255 => 6,  249 => 5,  242 => 318,  239 => 317,  237 => 307,  234 => 306,  232 => 295,  229 => 294,  226 => 292,  224 => 289,  221 => 288,  218 => 286,  216 => 282,  213 => 281,  210 => 279,  208 => 268,  205 => 267,  202 => 265,  200 => 259,  197 => 258,  195 => 252,  192 => 251,  190 => 247,  187 => 246,  185 => 242,  182 => 241,  180 => 237,  177 => 236,  175 => 232,  172 => 231,  170 => 226,  167 => 225,  165 => 214,  162 => 213,  159 => 211,  157 => 192,  154 => 191,  152 => 188,  149 => 187,  147 => 184,  144 => 183,  142 => 178,  139 => 177,  137 => 166,  134 => 165,  131 => 163,  129 => 153,  126 => 152,  124 => 149,  121 => 148,  119 => 127,  116 => 126,  114 => 122,  111 => 121,  109 => 107,  106 => 106,  104 => 79,  101 => 78,  99 => 65,  96 => 64,  94 => 58,  91 => 57,  89 => 51,  86 => 50,  84 => 46,  81 => 45,  79 => 41,  77 => 33,  75 => 26,  73 => 21,  71 => 5,  68 => 2,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {# Widgets #}*/
/* */
/* {%- block checkbox_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only and attr.readonly is not defined %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled" {% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock checkbox_attributes -%}*/
/* */
/* {%- block checkbox_widget_custom -%}*/
/*     <input type="checkbox" {{ block('checkbox_attributes') }} value="true" {% if checked %} checked="checked"{% endif %} />*/
/*     <input type="hidden" {{ block('checkbox_attributes') }} value="false" />*/
/* {%- endblock checkbox_widget_custom -%}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or 'file' != type %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('form-control '))|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {%- if form.parent is empty -%}*/
/*         {{ form_errors(form) }}*/
/*     {%- endif -%}*/
/*     {{- block('form_rows') -}}*/
/*     {{- form_rest(form) -}}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('form-control '))|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-primary') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         <span class="input-group-addon"> R$ </span>*/
/*         {{- block('form_widget_simple') -}}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {% if type is defined %}*/
/*             {%- set type = type|replace('date','text') -%}*/
/*         {% endif %}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control date-picker date-mask')|trim}) -%}*/
/*         <div class="input-group">*/
/*             {{- block('form_widget_simple') -}}*/
/*             <span class="input-group-addon">*/
/*                 <i class="fa fa-calendar"></i>*/
/*             </span>*/
/*         </div>*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default(''))|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {% spaceless %}*/
/*         {% if label is sameas(false) %}*/
/*             <div class="{{ block('form_label_class') }}"></div>*/
/*         {% else %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*             {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*             {{- parent() -}}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not sameas(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*         <label for="{{id}}" {% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- label is not sameas(false) ? (translation_domain is sameas(false) ? label : label|trans({}, translation_domain)) -}}*/
/*         </label>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- widget|replace({'required="required" ':''})|raw -}}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{ form_label(form) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*     {% if form.parent %}<span class="help-block">{% else %}<div class="alert alert-danger">{% endif %}*/
/*     <ul class="list-unstyled">*/
/*         {%- for error in errors -%}*/
/*             <li><span class="glyphicon glyphicon-exclamation-sign"></span> {{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
/* {# Form #}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2 no-padding-right*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-3*/
/* {%- endblock form_group_class %}*/
/* */
