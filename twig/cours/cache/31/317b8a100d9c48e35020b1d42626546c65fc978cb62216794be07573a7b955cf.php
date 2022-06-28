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

/* home.twig */
class __TwigTemplate_353649062f861cbad94b7f0e986ea17805f3e2f4c5f38c7516a045f3ac693d15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p>Bonjour ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "civility", [], "any", false, false, false, 1), "firstName", [], "any", false, false, false, 1) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "civility", [], "any", false, false, false, 1), "lastName", [], "any", false, false, false, 1)), "html", null, true);
        echo " !</p>

<p>Vous habitez :</p>
<ul>
    <li>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address", [], "any", false, false, false, 5), "street", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
    <li>";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address", [], "any", false, false, false, 6), "zip", [], "any", false, false, false, 6) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address", [], "any", false, false, false, 6), "city", [], "any", false, false, false, 6)), "html", null, true);
        echo "</li>
</ul>


<!-- équivalent PHP -->
<!-- <p>Bonjour <?= \$person['civility']['firstName'] . ' ' . \$person['civility']['lastName'] ?> !</p> -->
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Bonjour {{ person.civility.firstName ~ ' ' ~ person.civility.lastName }} !</p>

<p>Vous habitez :</p>
<ul>
    <li>{{ person.address.street }}</li>
    <li>{{ person.address.zip ~ ' ' ~ person.address.city }}</li>
</ul>


<!-- équivalent PHP -->
<!-- <p>Bonjour <?= \$person['civility']['firstName'] . ' ' . \$person['civility']['lastName'] ?> !</p> -->
", "home.twig", "/Applications/MAMP/htdocs/DWWM27/twig/cours/templates/home.twig");
    }
}
