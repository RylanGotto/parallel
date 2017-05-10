<?php

/* modular/3col.html.twig */
class __TwigTemplate_c14f955685891f3d45dab1831b5af17d77bdce40278754ba2940a73c6e06ed1a extends Twig_Template
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
        echo "<div style=\"background: #f6f6f6;\" class=\"modular-row col3 ";
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "    ";
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array())), "grayscale", array(), "method");
            // line 7
            echo "            <div  class=\"block size-1-3 pure-u-1-3\">
    <div class=\"cell-image\" style=\"background:url(";
            // line 8
            echo $this->getAttribute(($context["image"] ?? null), "url", array());
            echo ") no-repeat center center; height:220px; background-size:cover;\"></div> 
            <h5>";
            // line 9
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h5>

            <div>
            ";
            // line 12
            echo $this->getAttribute($context["p"], "content", array());
            echo "
            </div>
            ";
            // line 14
            if ($this->getAttribute($context["p"], "button", array())) {
                // line 15
                echo "            <div>

            <a class=\"button";
                // line 17
                if ($this->getAttribute($this->getAttribute($context["p"], "button", array()), "primary", array())) {
                    echo " primary";
                }
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute($context["p"], "button", array()), "url", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "button", array()), "text", array());
                echo "</a>
            </div>
            ";
            }
            // line 20
            echo "            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/3col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  73 => 20,  61 => 17,  57 => 15,  55 => 14,  50 => 12,  44 => 9,  40 => 8,  37 => 7,  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"background: #f6f6f6;\" class=\"modular-row col3 {{ page.header.class}} \">
<div class=\"container\">
{{content}}
<div class=\"grid pure-g-r\">
    {% for p in page.children() %}
    {% set image = p.media.images|first.grayscale() %}
            <div  class=\"block size-1-3 pure-u-1-3\">
    <div class=\"cell-image\" style=\"background:url({{ image.url }}) no-repeat center center; height:220px; background-size:cover;\"></div> 
            <h5>{{p.title}}</h5>

            <div>
            {{p.content}}
            </div>
            {% if p.button %}
            <div>

            <a class=\"button{% if p.button.primary %} primary{% endif %}\" href=\"{{ p.button.url }}\">{{ p.button.text }}</a>
            </div>
            {% endif %}
            </div>
    {% endfor %}
    </div>
    </div>
</div>", "modular/3col.html.twig", "C:\\MAMP\\htdocs\\parallel\\user\\themes\\parallel55\\templates\\modular\\3col.html.twig");
    }
}
