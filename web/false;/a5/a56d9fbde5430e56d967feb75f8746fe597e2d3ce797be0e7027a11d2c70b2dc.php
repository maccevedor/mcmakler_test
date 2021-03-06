<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_58ffab57d429cdeb48a512551d884c425624ef7d83a7c032f8512338e1177ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2cf78fe281c1cca5f791988bba2eb622367e53f70e0079cd95c1031588c6c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cf78fe281c1cca5f791988bba2eb622367e53f70e0079cd95c1031588c6c07->enter($__internal_e2cf78fe281c1cca5f791988bba2eb622367e53f70e0079cd95c1031588c6c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9410f75a4ca0b200f3307cecb7a7b3fa5f260aa1d3d17cdbe5ff1541cb780be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9410f75a4ca0b200f3307cecb7a7b3fa5f260aa1d3d17cdbe5ff1541cb780be0->enter($__internal_9410f75a4ca0b200f3307cecb7a7b3fa5f260aa1d3d17cdbe5ff1541cb780be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cf78fe281c1cca5f791988bba2eb622367e53f70e0079cd95c1031588c6c07->leave($__internal_e2cf78fe281c1cca5f791988bba2eb622367e53f70e0079cd95c1031588c6c07_prof);

        
        $__internal_9410f75a4ca0b200f3307cecb7a7b3fa5f260aa1d3d17cdbe5ff1541cb780be0->leave($__internal_9410f75a4ca0b200f3307cecb7a7b3fa5f260aa1d3d17cdbe5ff1541cb780be0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf1f88d7c12a2fac062f3d309f78d020b3b0346918b68d37f491a87fd428e579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1f88d7c12a2fac062f3d309f78d020b3b0346918b68d37f491a87fd428e579->enter($__internal_cf1f88d7c12a2fac062f3d309f78d020b3b0346918b68d37f491a87fd428e579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54bacf943c7b9c019517031dd65245f87bcb5f899bc510a29d20f0dc79ce2193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bacf943c7b9c019517031dd65245f87bcb5f899bc510a29d20f0dc79ce2193->enter($__internal_54bacf943c7b9c019517031dd65245f87bcb5f899bc510a29d20f0dc79ce2193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_54bacf943c7b9c019517031dd65245f87bcb5f899bc510a29d20f0dc79ce2193->leave($__internal_54bacf943c7b9c019517031dd65245f87bcb5f899bc510a29d20f0dc79ce2193_prof);

        
        $__internal_cf1f88d7c12a2fac062f3d309f78d020b3b0346918b68d37f491a87fd428e579->leave($__internal_cf1f88d7c12a2fac062f3d309f78d020b3b0346918b68d37f491a87fd428e579_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6da763b90cd5288e1f47b548e9efdfc3a38044683c4d68cc51cbf0a0f1a0b7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da763b90cd5288e1f47b548e9efdfc3a38044683c4d68cc51cbf0a0f1a0b7da->enter($__internal_6da763b90cd5288e1f47b548e9efdfc3a38044683c4d68cc51cbf0a0f1a0b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac2a54ed38c30ed3b63fe98811d88ad57b5ccd5eb834e9a3da9fd7c52129331c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2a54ed38c30ed3b63fe98811d88ad57b5ccd5eb834e9a3da9fd7c52129331c->enter($__internal_ac2a54ed38c30ed3b63fe98811d88ad57b5ccd5eb834e9a3da9fd7c52129331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac2a54ed38c30ed3b63fe98811d88ad57b5ccd5eb834e9a3da9fd7c52129331c->leave($__internal_ac2a54ed38c30ed3b63fe98811d88ad57b5ccd5eb834e9a3da9fd7c52129331c_prof);

        
        $__internal_6da763b90cd5288e1f47b548e9efdfc3a38044683c4d68cc51cbf0a0f1a0b7da->leave($__internal_6da763b90cd5288e1f47b548e9efdfc3a38044683c4d68cc51cbf0a0f1a0b7da_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f8ef3556385bf1184f1d92186993f718c1c7aecded44d0fb09e4b7ea447596d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8ef3556385bf1184f1d92186993f718c1c7aecded44d0fb09e4b7ea447596d->enter($__internal_4f8ef3556385bf1184f1d92186993f718c1c7aecded44d0fb09e4b7ea447596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90d9d99a03e0287f519b021b0884d0aee6c35b91383984d2db9be24e8a6d7c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d9d99a03e0287f519b021b0884d0aee6c35b91383984d2db9be24e8a6d7c7d->enter($__internal_90d9d99a03e0287f519b021b0884d0aee6c35b91383984d2db9be24e8a6d7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_90d9d99a03e0287f519b021b0884d0aee6c35b91383984d2db9be24e8a6d7c7d->leave($__internal_90d9d99a03e0287f519b021b0884d0aee6c35b91383984d2db9be24e8a6d7c7d_prof);

        
        $__internal_4f8ef3556385bf1184f1d92186993f718c1c7aecded44d0fb09e4b7ea447596d->leave($__internal_4f8ef3556385bf1184f1d92186993f718c1c7aecded44d0fb09e4b7ea447596d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
