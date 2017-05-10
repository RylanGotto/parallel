<?php

/* modular/2col.html.twig */
class __TwigTemplate_8508fb7716502344330683f2f806e2c74fd71b1ded317be07e8dfb657f74ff5b extends Twig_Template
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
        echo "<div style=\"background: #f6f6f6;\" class=\"modular-row col1-3_2-3 ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo " \">
<div class=\"container\">
";
        // line 3
        echo ($context["content"] ?? null);
        echo "
<div class=\"grid pure-g-r\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "    ";
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 7
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 8
                echo "            <div  class=\"block size-1-2 pure-u-1-2\">
            ";
                // line 9
                if (($context["image"] ?? null)) {
                    // line 10
                    echo "            <div class=\"cell-image\" style=\"background:url(";
                    echo $this->getAttribute(($context["image"] ?? null), "url", array());
                    echo ") no-repeat center center; height:220px; background-size:cover;\"></div> 
            ";
                }
                // line 12
                echo "            <div>
            ";
                // line 13
                echo $this->getAttribute($context["p"], "content", array());
                echo "
            </div>

            </div>
        ";
            } else {
                // line 18
                echo "            <div  class=\"block size-1-2 pure-u-1-2\">
            ";
                // line 19
                if (($context["image"] ?? null)) {
                    // line 20
                    echo "            <div class=\"cell-image\" style=\"background:url(";
                    echo $this->getAttribute(($context["image"] ?? null), "url", array());
                    echo ") no-repeat center center; height:220px; background-size:cover;\"></div> 
            ";
                }
                // line 22
                echo "            <div>
            ";
                // line 23
                echo $this->getAttribute($context["p"], "content", array());
                echo "
            </div>

            </div>
        ";
            }
            // line 28
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/2col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  97 => 28,  89 => 23,  86 => 22,  80 => 20,  78 => 19,  75 => 18,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"background: #f6f6f6;\" class=\"modular-row col1-3_2-3 {{ page.header.class}} \">
<div class=\"container\">
{{content}}
<div class=\"grid pure-g-r\">
    {% for p in page.children() %}
    {% set image = p.media.images|first %}
        {% if loop.index == 1 %}
            <div  class=\"block size-1-2 pure-u-1-2\">
            {% if image %}
            <div class=\"cell-image\" style=\"background:url({{ image.url }}) no-repeat center center; height:220px; background-size:cover;\"></div> 
            {% endif %}
            <div>
            {{p.content}}
            </div>

            </div>
        {% else %}
            <div  class=\"block size-1-2 pure-u-1-2\">
            {% if image %}
            <div class=\"cell-image\" style=\"background:url({{ image.url }}) no-repeat center center; height:220px; background-size:cover;\"></div> 
            {% endif %}
            <div>
            {{p.content}}
            </div>

            </div>
        {% endif %}
    {% endfor %}
    </div>
    </div>
</div>", "modular/2col.html.twig", "C:\\MAMP\\htdocs\\parallel\\user\\themes\\parallel55\\templates\\modular\\2col.html.twig");
    }
}
