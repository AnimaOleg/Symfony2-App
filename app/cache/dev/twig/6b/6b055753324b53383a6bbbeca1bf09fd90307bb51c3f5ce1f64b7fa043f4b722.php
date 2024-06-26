<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_3beab0502fec2c74245f90ebc4fc7157047bbd70edb57cf63484ebb189dd6207 extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script>/*<![CDATA[*//* */
/*     Sfjs = (function() {*/
/*         "use strict";*/
/* */
/*         var noop = function() {},*/
/* */
/*             profilerStorageKey = 'sf2/profiler/',*/
/* */
/*             request = function(url, onSuccess, onError, payload, options) {*/
/*                 var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');*/
/*                 options = options || {};*/
/*                 options.maxTries = options.maxTries || 0;*/
/*                 xhr.open(options.method || 'GET', url, true);*/
/*                 xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');*/
/*                 xhr.onreadystatechange = function(state) {*/
/*                     if (4 !== xhr.readyState) {*/
/*                         return null;*/
/*                     }*/
/* */
/*                     if (xhr.status == 404 && options.maxTries > 1) {*/
/*                         setTimeout(function(){*/
/*                             options.maxTries--;*/
/*                             request(url, onSuccess, onError, payload, options);*/
/*                         }, 500);*/
/* */
/*                         return null;*/
/*                     }*/
/* */
/*                     if (200 === xhr.status) {*/
/*                         (onSuccess || noop)(xhr);*/
/*                     } else {*/
/*                         (onError || noop)(xhr);*/
/*                     }*/
/*                 };*/
/*                 xhr.send(payload || '');*/
/*             },*/
/* */
/*             hasClass = function(el, klass) {*/
/*                 return el.className.match(new RegExp('\\b' + klass + '\\b'));*/
/*             },*/
/* */
/*             removeClass = function(el, klass) {*/
/*                 el.className = el.className.replace(new RegExp('\\b' + klass + '\\b'), ' ');*/
/*             },*/
/* */
/*             addClass = function(el, klass) {*/
/*                 if (!hasClass(el, klass)) { el.className += " " + klass; }*/
/*             },*/
/* */
/*             getPreference = function(name) {*/
/*                 if (!window.localStorage) {*/
/*                     return null;*/
/*                 }*/
/* */
/*                 return localStorage.getItem(profilerStorageKey + name);*/
/*             },*/
/* */
/*             setPreference = function(name, value) {*/
/*                 if (!window.localStorage) {*/
/*                     return null;*/
/*                 }*/
/* */
/*                 localStorage.setItem(profilerStorageKey + name, value);*/
/*             };*/
/* */
/*         return {*/
/*             hasClass: hasClass,*/
/* */
/*             removeClass: removeClass,*/
/* */
/*             addClass: addClass,*/
/* */
/*             getPreference: getPreference,*/
/* */
/*             setPreference: setPreference,*/
/* */
/*             request: request,*/
/* */
/*             load: function(selector, url, onSuccess, onError, options) {*/
/*                 var el = document.getElementById(selector);*/
/* */
/*                 if (el && el.getAttribute('data-sfurl') !== url) {*/
/*                     request(*/
/*                         url,*/
/*                         function(xhr) {*/
/*                             el.innerHTML = xhr.responseText;*/
/*                             el.setAttribute('data-sfurl', url);*/
/*                             removeClass(el, 'loading');*/
/*                             (onSuccess || noop)(xhr, el);*/
/*                         },*/
/*                         function(xhr) { (onError || noop)(xhr, el); },*/
/*                         '',*/
/*                         options*/
/*                     );*/
/*                 }*/
/* */
/*                 return this;*/
/*             },*/
/* */
/*             toggle: function(selector, elOn, elOff) {*/
/*                 var tmp = elOn.style.display,*/
/*                     el = document.getElementById(selector);*/
/* */
/*                 elOn.style.display = elOff.style.display;*/
/*                 elOff.style.display = tmp;*/
/* */
/*                 if (el) {*/
/*                     el.style.display = 'none' === tmp ? 'none' : 'block';*/
/*                 }*/
/* */
/*                 return this;*/
/*             }*/
/*         }*/
/*     })();*/
/* /*]]>*//* </script>*/
/* */
