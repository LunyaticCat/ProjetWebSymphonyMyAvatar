<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_3d255e3e21e66820a695f6d4f61d35c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 42
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "messages", [], "any", false, false, false, 42)) > 0)) {
            // line 43
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 43)) ? ("red") : (""));
            // line 44
            echo "        ";
            ob_start();
            // line 45
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 46
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "messages", [], "any", false, false, false, 46)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
        ";
            // line 49
            ob_start();
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "buses", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 51
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 51);
                // line 52
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 53
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 55, $this->source); })()), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 56
                echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 56, $this->source); })())) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 58
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 58)), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "
        ";
            // line 64
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 64, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 69
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 69)) ? (" label-status-error") : (""));
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "messages", [], "any", false, false, false, 69))) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 70
        echo twig_source($this->env, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
        <strong>Messages</strong>
        ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 72) > 0)) {
            // line 73
            echo "            <span class=\"count\">
                <span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 74), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 77
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 81
        echo "    <h2>Messages</h2>

    ";
        // line 83
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "messages", [], "any", false, false, false, 83))) {
            // line 84
            echo "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "buses", [], "any", false, false, false, 87)))) {
            // line 88
            echo "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 89
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "messages", [], "any", false, false, false, 89), true], 89, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 91
            echo "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 93
            $context["messages"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "messages", [], "any", false, false, false, 93);
            // line 94
            echo "                ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 94);
            // line 95
            echo "                <h3 class=\"tab-title\">All<span class=\"badge ";
            echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 95, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 95, $this->source); })()) == twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 95, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 95, $this->source); })())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 99
            echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 99, $this->source); })()), true], 99, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "buses", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 104
                echo "                <div class=\"tab message-bus\">
                    ";
                // line 105
                $context["messages"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 105);
                // line 106
                echo "                    ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 106);
                // line 107
                echo "                    <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "<span class=\"badge ";
                echo (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 107, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 107, $this->source); })()) == twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 107, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 107, $this->source); })())), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 110
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</code> bus</p>
                        ";
                // line 111
                echo twig_call_macro($macros["_self"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 111, $this->source); })())], 111, $context, $this->getSourceContext());
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </div>
    ";
        }
        // line 117
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 121
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 122
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 122, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 123
                echo "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 127
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 127, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 127), "html", null, true);
                echo "-details\"
                    data-toggle-initial=\"";
                // line 128
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 128)) ? ("display") : (""));
                echo "\"
                >
                    <span class=\"dump-inline\">";
                // line 130
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 130), "type", [], "any", false, false, false, 130));
                echo "</span>
                    ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 131)) {
                    // line 132
                    echo "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 134
                echo "                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">";
                // line 135
                echo twig_source($this->env, "@WebProfiler/images/icon-minus-square.svg");
                echo "</span>
                        <span class=\"icon icon-open\">";
                // line 136
                echo twig_source($this->env, "@WebProfiler/images/icon-plus-square.svg");
                echo "</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 141
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 141), "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                // line 146
                $context["caller"] = twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 146);
                // line 147
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 147, $this->source); })()), "line", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 148, $this->source); })()), "file", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 148, $this->source); })()), "line", [], "any", false, false, false, 148));
                    // line 149
                    echo "                        ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 149, $this->source); })())) {
                        // line 150
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 150, $this->source); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 150, $this->source); })()), "file", [], "any", false, false, false, 150), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 150, $this->source); })()), "name", [], "any", false, false, false, 150), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 152
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 152, $this->source); })()), "file", [], "any", false, false, false, 152), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 152, $this->source); })()), "name", [], "any", false, false, false, 152), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 154
                    echo "                    ";
                } else {
                    // line 155
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 155, $this->source); })()), "name", [], "any", false, false, false, 155), "html", null, true);
                    echo "
                    ";
                }
                // line 157
                echo "                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 157, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 157), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 157, $this->source); })()), "line", [], "any", false, false, false, 157), "html", null, true);
                echo "</button>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 159
                echo twig_escape_filter($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 159, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 159), "html", null, true);
                echo "\">
                        <div class=\"trace\">
                            ";
                // line 161
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 161, $this->source); })()), "file", [], "any", false, false, false, 161), twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 161, $this->source); })()), "line", [], "any", false, false, false, 161)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 166
                echo "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 171
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new RuntimeError('Variable "showBus" does not exist.', 171, $this->source); })())) {
                    // line 172
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 174), "html", null, true);
                    echo "</td>
                </tr>
            ";
                }
                // line 177
                echo "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                // line 179
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 179), "value", [], "any", false, false, false, 179), 2);
                echo "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 184));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 185
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 187
                    echo "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                </td>
            </tr>
            ";
                // line 191
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 191)) {
                    // line 192
                    echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                    // line 195
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 195));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 196
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        echo "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 198
                        echo "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "                    </td>
                </tr>
            ";
                }
                // line 203
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 203)) {
                    // line 204
                    echo "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 207
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 207), "value", [], "any", false, false, false, 207), 1);
                    echo "
                    </td>
                </tr>
            ";
                }
                // line 211
                echo "        </tbody>
    </table>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 211,  604 => 207,  599 => 204,  596 => 203,  591 => 200,  584 => 198,  576 => 196,  571 => 195,  566 => 192,  564 => 191,  560 => 189,  553 => 187,  545 => 185,  540 => 184,  532 => 179,  528 => 177,  522 => 174,  518 => 172,  516 => 171,  509 => 166,  507 => 161,  500 => 159,  490 => 157,  484 => 155,  481 => 154,  473 => 152,  463 => 150,  460 => 149,  457 => 148,  454 => 147,  452 => 146,  442 => 141,  434 => 136,  430 => 135,  427 => 134,  423 => 132,  421 => 131,  417 => 130,  412 => 128,  406 => 127,  400 => 123,  382 => 122,  379 => 121,  359 => 120,  348 => 117,  344 => 115,  334 => 111,  330 => 110,  319 => 107,  316 => 106,  314 => 105,  311 => 104,  307 => 103,  300 => 99,  290 => 95,  287 => 94,  285 => 93,  281 => 91,  276 => 89,  273 => 88,  271 => 87,  266 => 84,  264 => 83,  260 => 81,  250 => 80,  239 => 77,  233 => 74,  230 => 73,  228 => 72,  223 => 70,  217 => 69,  207 => 68,  194 => 64,  191 => 63,  188 => 62,  178 => 58,  173 => 56,  169 => 55,  164 => 53,  161 => 52,  158 => 51,  153 => 50,  151 => 49,  148 => 48,  143 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  119 => 41,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? 'red' %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/messenger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? 'red' }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'messenger', status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label{{ collector.exceptionsCount ? ' label-status-error' }}{{ collector.messages is empty ? ' disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/messenger.svg') }}</span>
        <strong>Messages</strong>
        {% if collector.exceptionsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.exceptionsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    {% elseif 1 == collector.buses|length %}
        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        {{ _self.render_bus_messages(collector.messages, true) }}
    {% else %}
        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                {% set messages = collector.messages %}
                {% set exceptionsCount = collector.exceptionsCount %}
                <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    {{ _self.render_bus_messages(messages, true) }}
                </div>
            </div>

            {% for bus in collector.buses %}
                <div class=\"tab message-bus\">
                    {% set messages = collector.messages(bus) %}
                    {% set exceptionsCount = collector.exceptionsCount(bus) %}
                    <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                        {{ _self.render_bus_messages(messages) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-{{ discr }}-{{ loop.index0 }}-details\"
                    data-toggle-initial=\"{{ loop.first ? 'display' }}\"
                >
                    <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                    {% if dispatchCall.exception is defined %}
                        <span class=\"label status-error\">exception</span>
                    {% endif %}
                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">{{ source('@WebProfiler/images/icon-minus-square.svg') }}</span>
                        <span class=\"icon icon-open\">{{ source('@WebProfiler/images/icon-plus-square.svg') }}</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ loop.index0 }}-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    {% set caller = dispatchCall.caller %}
                    {% if caller.line %}
                        {% set link = caller.file|file_link(caller.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                        {% else %}
                            <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ caller.name }}
                    {% endif %}
                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ discr }}-{{ loop.index0 }}\">{{ caller.line }}</button>

                    <div class=\"hidden\" id=\"sf-trace-{{ discr }}-{{ loop.index0 }}\">
                        <div class=\"trace\">
                            {{ caller.file|file_excerpt(caller.line)|replace({
                                '#DD0000': 'var(--highlight-string)',
                                '#007700': 'var(--highlight-keyword)',
                                '#0000BB': 'var(--highlight-default)',
                                '#FF8000': 'var(--highlight-comment)'
                            })|raw }}
                        </div>
                    </div>
                </td>
            </tr>
            {% if showBus %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>{{ dispatchCall.bus }}</td>
                </tr>
            {% endif %}
            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth=2) }}</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    {% for item in dispatchCall.stamps %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted font-normal\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            {% if dispatchCall.stamps_after_dispatch is defined %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        {% for item in dispatchCall.stamps_after_dispatch %}
                            {{ profiler_dump(item) }}
                        {% else %}
                            <span class=\"text-muted\">No items</span>
                        {% endfor %}
                    </td>
                </tr>
            {% endif %}
            {% if dispatchCall.exception is defined %}
                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        {{ profiler_dump(dispatchCall.exception.value, maxDepth=1) }}
                    </td>
                </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "/home/ann3/bruny/PhpstormProjects/ProjetWebSymphony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
