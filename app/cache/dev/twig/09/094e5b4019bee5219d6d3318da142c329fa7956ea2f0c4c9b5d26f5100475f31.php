<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_49c4c5d8ecda26dfff0dda005d2ef62499b6c31e9499583b57fc68144f57fb50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0) || ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0))) {
            // line 5
            echo "
        ";
            // line 6
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 7
            echo "
        ";
            // line 8
            ob_start();
            // line 9
            echo "            ";
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 10
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 12
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
                echo "</span>
                    ";
                // line 13
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
                    // line 14
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 16
                echo "                    ";
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) {
                    // line 17
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 19
                echo "
            ";
            } else {
                // line 21
                echo "
                ";
                // line 22
                $context["status"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("red") : (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 23
                echo "
                ";
                // line 24
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 26
                if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) == 0) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0))) {
                    // line 27
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 30
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 33
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 37
                echo "
            ";
            }
            // line 39
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            ob_start();
            // line 42
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 48
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 52
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 54
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheEnabled", array())) {
                // line 55
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 61
                echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 65
                echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 68
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 73
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 74
            echo "
        ";
            // line 75
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "")) : (""))));
            echo "

    ";
        }
    }

    // line 80
    public function block_menu($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 82
        echo "
    ";
        // line 83
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 84
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 90
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 95
            echo "
        <span class=\"label ";
            // line 96
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 97
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 99
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array())) {
                // line 100
                echo "                <span class=\"count\">
                    <span>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 104
            echo "        </span>

    ";
        }
    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 111
        echo "
    ";
        // line 112
        if (("explain" == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
            // line 113
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 114
(isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 116
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 117
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 118
            echo "
    ";
        } else {
            // line 120
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 124
    public function block_queries($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 126
            echo "        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>
    ";
        }
        // line 142
        echo "
    <h2>Queries</h2>

    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 146
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) > 1)) {
                // line 147
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 149
            echo "
        ";
            // line 150
            if (twig_test_empty($context["queries"])) {
                // line 151
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 155
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 165
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <td>";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nowrap\">";
                    // line 167
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                            <td>
                                ";
                    // line 169
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->getAttribute($context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 176
                    echo ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 180
                    echo ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 182
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 183
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 184
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 186
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 188
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 189
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->getAttribute($context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 192
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 193
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->env->getExtension('doctrine_extension')->replaceQueryParameters(($this->getAttribute($context["query"], "sql", array()) . ";"), $this->getAttribute($context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 196
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 197
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\"></div>
                                ";
                    }
                    // line 199
                    echo "                            </td>
                        </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                </tbody>
            </table>
        ";
            }
            // line 205
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
    <h2>Database Connections</h2>

    ";
        // line 209
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) {
            // line 210
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 214
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 216
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 219
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) {
            // line 220
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 224
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 226
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 229
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheEnabled", array())) {
            // line 230
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 234
            echo "        ";
            if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array())) {
                // line 235
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 239
                echo "            ";
                if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                    // line 240
                    echo "                ";
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array())), false);
                    echo "
            ";
                } else {
                    // line 242
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 244
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 249
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 254
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 259
                echo "
            ";
                // line 260
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())) {
                    // line 261
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 262
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "hits", array())), false);
                    echo "
            ";
                }
                // line 264
                echo "
            ";
                // line 265
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())) {
                    // line 266
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 267
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "misses", array())), false);
                    echo "
            ";
                }
                // line 269
                echo "
            ";
                // line 270
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())) {
                    // line 271
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 272
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "cacheRegions", array()), "puts", array())), false);
                    echo "
            ";
                }
                // line 274
                echo "        ";
            }
            // line 275
            echo "    ";
        }
        // line 276
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 280
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) > 1)) {
                // line 281
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 283
            echo "
        ";
            // line 284
            if (twig_test_empty($context["classes"])) {
                // line 285
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 289
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 298
                    echo "                    ";
                    $context["contains_errors"] = ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 299
                    echo "                    <tr class=\"";
                    echo (((isset($context["contains_errors"]) ? $context["contains_errors"] : $this->getContext($context, "contains_errors"))) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 300
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 302
                    if ((isset($context["contains_errors"]) ? $context["contains_errors"] : $this->getContext($context, "contains_errors"))) {
                        // line 303
                        echo "                                <ul>
                                    ";
                        // line 304
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 305
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 307
                        echo "                                </ul>
                            ";
                    } else {
                        // line 309
                        echo "                                No errors.
                            ";
                    }
                    // line 311
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 314
                echo "                </tbody>
            </table>
        ";
            }
            // line 317
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 376
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 377
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 394
        echo "
        //]]></script>
";
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  860 => 394,  841 => 377,  839 => 376,  779 => 318,  773 => 317,  768 => 314,  760 => 311,  756 => 309,  752 => 307,  743 => 305,  739 => 304,  736 => 303,  734 => 302,  729 => 300,  724 => 299,  721 => 298,  717 => 297,  707 => 289,  701 => 285,  699 => 284,  696 => 283,  690 => 281,  687 => 280,  683 => 279,  678 => 276,  675 => 275,  672 => 274,  667 => 272,  664 => 271,  662 => 270,  659 => 269,  654 => 267,  651 => 266,  649 => 265,  646 => 264,  641 => 262,  638 => 261,  636 => 260,  633 => 259,  625 => 254,  617 => 249,  609 => 244,  605 => 242,  599 => 240,  596 => 239,  590 => 235,  587 => 234,  581 => 230,  579 => 229,  574 => 226,  568 => 224,  562 => 220,  560 => 219,  555 => 216,  549 => 214,  543 => 210,  541 => 209,  536 => 206,  522 => 205,  517 => 202,  501 => 199,  493 => 197,  491 => 196,  485 => 193,  479 => 192,  473 => 189,  467 => 188,  463 => 186,  454 => 184,  451 => 183,  449 => 182,  440 => 180,  429 => 176,  422 => 172,  416 => 169,  411 => 167,  407 => 166,  400 => 165,  383 => 164,  379 => 163,  372 => 159,  368 => 158,  363 => 155,  357 => 151,  355 => 150,  352 => 149,  346 => 147,  343 => 146,  326 => 145,  321 => 142,  303 => 126,  300 => 125,  297 => 124,  289 => 120,  285 => 118,  283 => 117,  282 => 116,  281 => 114,  279 => 113,  277 => 112,  274 => 111,  271 => 110,  268 => 109,  261 => 104,  255 => 101,  252 => 100,  250 => 99,  245 => 97,  239 => 96,  236 => 95,  228 => 90,  224 => 89,  217 => 84,  215 => 83,  212 => 82,  209 => 81,  206 => 80,  198 => 75,  195 => 74,  192 => 73,  185 => 68,  177 => 65,  168 => 61,  161 => 57,  157 => 55,  155 => 54,  148 => 52,  141 => 48,  134 => 44,  130 => 42,  128 => 41,  125 => 40,  122 => 39,  118 => 37,  111 => 33,  104 => 30,  97 => 27,  95 => 26,  90 => 24,  87 => 23,  85 => 22,  82 => 21,  78 => 19,  72 => 17,  69 => 16,  63 => 14,  61 => 13,  53 => 12,  49 => 10,  46 => 9,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  21 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}*/
/* */
/*         {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*         {% set icon %}*/
/*             {% if profiler_markup_version == 1 %}*/
/* */
/*                 <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC" />*/
/*                     <span class="sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}">{{ collector.querycount }}</span>*/
/*                     {% if collector.querycount > 0 %}*/
/*                         <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*                     {% endif %}*/
/*                     {% if collector.invalidEntityCount > 0 %}*/
/*                         <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red">{{ collector.invalidEntityCount }}</span>*/
/*                     {% endif %}*/
/* */
/*             {% else %}*/
/* */
/*                 {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}*/
/* */
/*                 {{ include('@Doctrine/Collector/icon.svg') }}*/
/* */
/*                 {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}*/
/*                     <span class="sf-toolbar-value">{{ collector.invalidEntityCount }}</span>*/
/*                     <span class="sf-toolbar-label">errors</span>*/
/*                 {% else %}*/
/*                     <span class="sf-toolbar-value">{{ collector.querycount }}</span>*/
/*                     <span class="sf-toolbar-info-piece-additional-detail">*/
/*                         <span class="sf-toolbar-label">in</span>*/
/*                         <span class="sf-toolbar-value">{{ '%0.2f'|format(collector.time * 1000) }}</span>*/
/*                         <span class="sf-toolbar-label">ms</span>*/
/*                     </span>*/
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Database Queries</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.querycount }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Query time</b>*/
/*                 <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Invalid entities</b>*/
/*                 <span class="sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}">{{ collector.invalidEntityCount }}</span>*/
/*             </div>*/
/*             {% if collector.cacheEnabled %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Cache hits</b>*/
/*                     <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.cacheHitsCount }}</span>*/
/*                 </div>*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Cache misses</b>*/
/*                     <span class="sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}">{{ collector.cacheMissesCount }}</span>*/
/*                 </div>*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Cache puts</b>*/
/*                     <span class="sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}">{{ collector.cachePutsCount }}</span>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Second Level Cache</b>*/
/*                     <span class="sf-toolbar-status">disabled</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% if profiler_markup_version == 1 %}*/
/* */
/*         <span class="label">*/
/*             <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="" /></span>*/
/*             <strong>Doctrine</strong>*/
/*             <span class="count">*/
/*                 <span>{{ collector.querycount }}</span>*/
/*                 <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*             </span>*/
/*         </span>*/
/* */
/*     {% else %}*/
/* */
/*         <span class="label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}">*/
/*             <span class="icon">{{ include('@Doctrine/Collector/icon.svg') }}</span>*/
/*             <strong>Doctrine</strong>*/
/*             {% if collector.invalidEntityCount %}*/
/*                 <span class="count">*/
/*                     <span>{{ collector.invalidEntityCount }}</span>*/
/*                 </span>*/
/*             {% endif %}*/
/*         </span>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% if 'explain' == page %}*/
/*         {{ render(controller('DoctrineBundle:Profiler:explain', {*/
/*             token: token,*/
/*             panel: 'db',*/
/*             connectionName: app.request.query.get('connection'),*/
/*             query: app.request.query.get('query')*/
/*         })) }}*/
/*     {% else %}*/
/*         {{ block('queries') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block queries %}*/
/*     {% if profiler_markup_version == 1 %}*/
/*         <style>*/
/*             .hidden { display: none; }*/
/*             .queries-table td, .queries-table th { vertical-align: top; }*/
/*             .queries-table td > div { margin-bottom: 6px; }*/
/*             .highlight pre { margin: 0; white-space: pre-wrap; }*/
/*             .highlight .keyword   { color: #8959A8; font-weight: bold; }*/
/*             .highlight .word      { color: #222222; }*/
/*             .highlight .variable  { color: #916319; }*/
/*             .highlight .symbol    { color: #222222; }*/
/*             .highlight .comment   { color: #999999; }*/
/*             .highlight .backtick  { color: #718C00; }*/
/*             .highlight .string    { color: #718C00; }*/
/*             .highlight .number    { color: #F5871F; font-weight: bold; }*/
/*             .highlight .error     { color: #C82829; }*/
/*         </style>*/
/*     {% endif %}*/
/* */
/*     <h2>Queries</h2>*/
/* */
/*     {% for connection, queries in collector.queries %}*/
/*         {% if collector.connections|length > 1 %}*/
/*             <h3>{{ connection }} <small>connection</small></h3>*/
/*         {% endif %}*/
/* */
/*         {% if queries is empty %}*/
/*             <div class="empty">*/
/*                 <p>No database queries were performed.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             <table class="alt queries-table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th class="nowrap" onclick="javascript:sortTable(this, 0, 'queries-{{ loop.index }}')" data-sort-direction="-1" style="cursor: pointer;">#<span class="text-muted">&#9650;</span></th>*/
/*                     <th class="nowrap" onclick="javascript:sortTable(this, 1, 'queries-{{ loop.index }}')" style="cursor: pointer;">Time<span></span></th>*/
/*                     <th style="width: 100%;">Info</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody id="queries-{{ loop.index }}">*/
/*                     {% for i, query in queries %}*/
/*                         <tr id="queryNo-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                             <td>{{ loop.index }}</td>*/
/*                             <td class="nowrap">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>*/
/*                             <td>*/
/*                                 {{ query.sql|doctrine_pretty_query(highlight_only = true) }}*/
/* */
/*                                 <div>*/
/*                                     <strong class="font-normal text-small">Parameters</strong>: {{ query.params|yaml_encode }}*/
/*                                 </div>*/
/* */
/*                                 <div class="text-small font-normal">*/
/*                                     <a href="#" {{ profiler_markup_version == 1 ? 'onclick="return toggleRunnableQuery(this);"' }} class="sf-toggle link-inverse" data-toggle-selector="#formatted-query-{{ i }}-{{ loop.parent.loop.index }}" data-toggle-alt-content="Hide formatted query">View formatted query</a>*/
/* */
/*                                     &nbsp;&nbsp;*/
/* */
/*                                     <a href="#" {{ profiler_markup_version == 1 ? 'onclick="return toggleRunnableQuery(this);"' }} class="sf-toggle link-inverse" data-toggle-selector="#original-query-{{ i }}-{{ loop.parent.loop.index }}" data-toggle-alt-content="Hide runnable query">View runnable query</a>*/
/* */
/*                                     {% if query.explainable %}*/
/*                                         &nbsp;&nbsp;*/
/*                                         <a class="link-inverse" href="{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}" onclick="return explain(this);" data-target-id="explain-{{ i }}-{{ loop.parent.loop.index }}">Explain query</a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/*                                 <div id="formatted-query-{{ i }}-{{ loop.parent.loop.index }}" class="sql-runnable hidden">*/
/*                                     {{ query.sql|doctrine_pretty_query }}*/
/*                                 </div>*/
/* */
/*                                 <div id="original-query-{{ i }}-{{ loop.parent.loop.index }}" class="sql-runnable hidden">*/
/*                                     {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}*/
/*                                 </div>*/
/* */
/*                                 {% if query.explainable %}*/
/*                                     <div id="explain-{{ i }}-{{ loop.parent.loop.index }}"></div>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <h2>Database Connections</h2>*/
/* */
/*     {% if not collector.connections %}*/
/*         <div class="empty">*/
/*             <p>There are no configured database connections.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.connections, labels: ['Name', 'Service'] }, with_context = false ) }}*/
/*     {% endif %}*/
/* */
/*     <h2>Entity Managers</h2>*/
/* */
/*     {% if not collector.managers %}*/
/*         <div class="empty">*/
/*             <p>There are no configured entity managers.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.managers, labels: ['Name', 'Service'] }, with_context = false ) }}*/
/*     {% endif %}*/
/* */
/*     <h2>Second Level Cache</h2>*/
/* */
/*     {% if not collector.cacheEnabled %}*/
/*         <div class="empty">*/
/*             <p>Second Level Cache is not enabled.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {% if not collector.cacheCounts %}*/
/*             <div class="empty">*/
/*                 <p>Second level cache information is not available.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             {% if profiler_markup_version == 1 %}*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheCounts }, with_context = false) }}*/
/*             {% else %}*/
/*                 <div class="metrics">*/
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.hits }}</span>*/
/*                         <span class="label">Hits</span>*/
/*                     </div>*/
/* */
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.misses }}</span>*/
/*                         <span class="label">Misses</span>*/
/*                     </div>*/
/* */
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.puts }}</span>*/
/*                         <span class="label">Puts</span>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.hits %}*/
/*                 <h3>Number of cache hits</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.hits }, with_context = false) }}*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.misses %}*/
/*                 <h3>Number of cache misses</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.misses }, with_context = false) }}*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.puts %}*/
/*                 <h3>Number of cache puts</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.puts }, with_context = false) }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <h2>Entities Mapping</h2>*/
/* */
/*     {% for manager, classes in collector.entities %}*/
/*         {% if collector.managers|length > 1 %}*/
/*             <h3>{{ manager }} <small>entity manager</small></h3>*/
/*         {% endif %}*/
/* */
/*         {% if classes is empty %}*/
/*             <div class="empty">*/
/*                 <p>No loaded entities.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Class</th>*/
/*                     <th scope="col">Mapping errors</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for class in classes %}*/
/*                     {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}*/
/*                     <tr class="{{ contains_errors ? 'status-error' }}">*/
/*                         <td>{{ class }}</td>*/
/*                         <td class="font-normal">*/
/*                             {% if contains_errors %}*/
/*                                 <ul>*/
/*                                     {% for error in collector.mappingErrors[manager][class] %}*/
/*                                         <li>{{ error }}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             {% else %}*/
/*                                 No errors.*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script type="text/javascript">//<![CDATA[*/
/*         function explain(link) {*/
/*             "use strict";*/
/* */
/*             var targetId = link.getAttribute('data-target-id');*/
/*             var targetElement = document.getElementById(targetId);*/
/* */
/*             if (targetElement.style.display != 'block') {*/
/*                 Sfjs.load(targetId, link.href, null, function(xhr, el) {*/
/*                     el.innerHTML = 'An error occurred while loading the query explanation.';*/
/*                 });*/
/* */
/*                 targetElement.style.display = 'block';*/
/*                 link.innerHTML = 'Hide query explanation';*/
/*             } else {*/
/*                 targetElement.style.display = 'none';*/
/*                 link.innerHTML = 'Explain query';*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function sortTable(header, column, targetId) {*/
/*             "use strict";*/
/* */
/*             var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,*/
/*                 items = [],*/
/*                 target = document.getElementById(targetId),*/
/*                 rows = target.children,*/
/*                 headers = header.parentElement.children,*/
/*                 i;*/
/* */
/*             for (i = 0; i < rows.length; ++i) {*/
/*                 items.push(rows[i]);*/
/*             }*/
/* */
/*             for (i = 0; i < headers.length; ++i) {*/
/*                 headers[i].removeAttribute('data-sort-direction');*/
/*                 if (headers[i].children.length > 0) {*/
/*                     headers[i].children[0].innerHTML = '';*/
/*                 }*/
/*             }*/
/* */
/*             header.setAttribute('data-sort-direction', (-1*direction).toString());*/
/*             header.children[0].innerHTML = direction > 0 ? '<span class="text-muted">&#9650;</span>' : '<span class="text-muted">&#9660;</span>';*/
/* */
/*             items.sort(function(a, b) {*/
/*                 return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));*/
/*             });*/
/* */
/*             for (i = 0; i < items.length; ++i) {*/
/*                 Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');*/
/*                 Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');*/
/*                 target.appendChild(items[i]);*/
/*             }*/
/*         }*/
/* */
/*         {% if profiler_markup_version == 1 %}*/
/*             function toggleRunnableQuery(target) {*/
/*                 var targetSelector = target.getAttribute('data-toggle-selector');*/
/*                 var targetDataAltContent = target.getAttribute('data-toggle-alt-content');*/
/*                 var targetElement = document.querySelector(targetSelector);*/
/*                 target.setAttribute('data-toggle-alt-content', target.innerHTML);*/
/* */
/*                 if (targetElement.style.display != 'block') {*/
/*                     targetElement.style.display = 'block';*/
/*                     target.innerHTML = targetDataAltContent;*/
/*                 } else {*/
/*                     targetElement.style.display = 'none';*/
/*                     target.innerHTML = targetDataAltContent;*/
/*                 }*/
/* */
/*                 return false;*/
/*             }*/
/*         {% endif %}*/
/* */
/*         //]]></script>*/
/* {% endblock %}*/
/* */
