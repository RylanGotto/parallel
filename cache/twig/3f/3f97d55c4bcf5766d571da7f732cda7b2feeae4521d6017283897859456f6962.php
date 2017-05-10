<?php

/* modular/showcase1.html.twig */
class __TwigTemplate_4bb08edf5d33cc5c9a06f697039a914a8ef3894a55295f5d5b5347f2b9c0e91d extends Twig_Template
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
        $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -120), "method"), "colorize", array(0 => 248, 1 => 208, 2 => 160), "method");
        // line 2
        if (($context["showcase_image"] ?? null)) {
            // line 3
            echo "\t<div class=\"modular-row showcase flush-top\" style=\"background-image: url(";
            echo $this->getAttribute(($context["showcase_image"] ?? null), "url", array());
            echo "); background-position: center center;\">
";
        } else {
            // line 5
            echo "<div class=\"modular-row showcase1\">
";
        }
        // line 7
        echo "\t<div style=\"\" class=\"showcase-content\">
    ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 10
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  44 => 10,  40 => 9,  36 => 8,  33 => 7,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set showcase_image = page.media.images|first.grayscale().contrast(20).brightness(-120).colorize(248,208,160) %}
{% if showcase_image %}
\t<div class=\"modular-row showcase flush-top\" style=\"background-image: url({{ showcase_image.url }}); background-position: center center;\">
{% else %}
<div class=\"modular-row showcase1\">
{% endif %}
\t<div style=\"\" class=\"showcase-content\">
    {{ content }}
    {% for button in page.header.buttons %}
        <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    </div>

</div>
", "modular/showcase1.html.twig", "C:\\MAMP\\htdocs\\parallel\\user\\themes\\parallel55\\templates\\modular\\showcase1.html.twig");
    }
}
