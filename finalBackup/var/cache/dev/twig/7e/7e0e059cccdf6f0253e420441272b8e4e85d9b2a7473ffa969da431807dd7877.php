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

/* /kitList.html.twig */
class __TwigTemplate_496b7c3afaeebb1b00f14f6873df43f10ac74aa652443d340f5f9a88608a3e26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/kitList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/kitList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/kitList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProductController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    ";
        // line 12
        echo "    <li ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12) == "main_page")) ? ("active") : (""));
        echo ">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_page");
        echo "\">Вернуться на главную</a>
    </li>

    ";
        // line 16
        $context["totalPrice"] = 0;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kits"]) || array_key_exists("kits", $context) ? $context["kits"] : (function () { throw new RuntimeError('Variable "kits" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["kit"]) {
            // line 18
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 18) != false)) {
                // line 19
                echo "            <div>
                <div>
";
                // line 22
                echo "                    <h3>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 22), "pizzaName", [], "any", false, false, false, 22), "html", null, true);
                echo "</h3>
                    <div>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 23), "pizzaPrice", [], "any", false, false, false, 23), "html", null, true);
                echo " руб.</div>
                    <div>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 24), "pizzaSize", [], "any", false, false, false, 24), "html", null, true);
                echo " см.</div>
                    <p>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 25), "pizzaComposition", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removePizza", ["id" => twig_get_attribute($this->env, $this->source, $context["kit"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">Удалить из корзины</a>
                    ";
                // line 27
                $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 27, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryPizzaInKit", [], "any", false, false, false, 27), "pizzaPrice", [], "any", false, false, false, 27));
                // line 28
                echo "                </div>
            </div>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 30
$context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 30) != false)) {
                // line 31
                echo "            <div>
                <div>
";
                // line 34
                echo "                    <h3>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 34), "drinkName", [], "any", false, false, false, 34), "html", null, true);
                echo "</h3>
                    <div>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 35), "drinkPrice", [], "any", false, false, false, 35), "html", null, true);
                echo " руб.</div>
                    <div>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 36), "drinkVolume", [], "any", false, false, false, 36), "html", null, true);
                echo " мл.</div>
                    <p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 37), "drinkComposition", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeDrink", ["id" => twig_get_attribute($this->env, $this->source, $context["kit"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">Удалить из корзины</a>
                    ";
                // line 39
                $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 39, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryDrinkInKit", [], "any", false, false, false, 39), "drinkPrice", [], "any", false, false, false, 39));
                // line 40
                echo "                </div>
            </div>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
$context["kit"], "deliveryRollInKit", [], "any", false, false, false, 42) != false)) {
                // line 43
                echo "            <div>
                <div>
";
                // line 46
                echo "                    <h3>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryRollInKit", [], "any", false, false, false, 46), "rollName", [], "any", false, false, false, 46), "html", null, true);
                echo "</h3>
                    <div>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryRollInKit", [], "any", false, false, false, 47), "rollPrice", [], "any", false, false, false, 47), "html", null, true);
                echo " руб.</div>
                    <div>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryRollInKit", [], "any", false, false, false, 48), "rollQuantity", [], "any", false, false, false, 48), "html", null, true);
                echo " шт.</div>
                    <p>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryRollInKit", [], "any", false, false, false, 49), "rollComposition", [], "any", false, false, false, 49), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeRoll", ["id" => twig_get_attribute($this->env, $this->source, $context["kit"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">Удалить из корзины</a>
                    ";
                // line 51
                $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 51, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["kit"], "deliveryRollInKit", [], "any", false, false, false, 51), "rollPrice", [], "any", false, false, false, 51));
                // line 52
                echo "                </div>
            </div>
        ";
            }
            // line 55
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    <h3>Итого: ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " руб.</h3>

    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "\">Оформить заказ</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/kitList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 60,  224 => 58,  221 => 57,  214 => 55,  209 => 52,  207 => 51,  203 => 50,  199 => 49,  195 => 48,  191 => 47,  186 => 46,  182 => 43,  180 => 42,  176 => 40,  174 => 39,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  153 => 34,  149 => 31,  147 => 30,  143 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  120 => 22,  116 => 19,  113 => 18,  108 => 17,  106 => 16,  100 => 13,  95 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    {#        <h1>Hello {{ controller_name }}</h1>#}
    <li {{ app.request.get('_route') == 'main_page' ? 'active' }}>
        <a href=\"{{ path('main_page') }}\">Вернуться на главную</a>
    </li>

    {% set totalPrice = 0 %}
    {% for kit in kits %}
        {% if kit.deliveryPizzaInKit != false %}
            <div>
                <div>
{#                    <div>{{ kit.id }}</div>#}
                    <h3>{{ kit.deliveryPizzaInKit.pizzaName }}</h3>
                    <div>{{ kit.deliveryPizzaInKit.pizzaPrice }} руб.</div>
                    <div>{{ kit.deliveryPizzaInKit.pizzaSize }} см.</div>
                    <p>{{ kit.deliveryPizzaInKit.pizzaComposition }}</p>
                    <a href=\"{{ path('removePizza', {'id':kit.id}) }}\">Удалить из корзины</a>
                    {% set totalPrice = totalPrice + kit.deliveryPizzaInKit.pizzaPrice %}
                </div>
            </div>
        {% elseif kit.deliveryDrinkInKit != false %}
            <div>
                <div>
{#                    <div>{{ kit.id }}</div>#}
                    <h3>{{ kit.deliveryDrinkInKit.drinkName }}</h3>
                    <div>{{ kit.deliveryDrinkInKit.drinkPrice }} руб.</div>
                    <div>{{ kit.deliveryDrinkInKit.drinkVolume }} мл.</div>
                    <p>{{ kit.deliveryDrinkInKit.drinkComposition }}</p>
                    <a href=\"{{ path('removeDrink', {'id':kit.id}) }}\">Удалить из корзины</a>
                    {% set totalPrice = totalPrice + kit.deliveryDrinkInKit.drinkPrice %}
                </div>
            </div>
        {% elseif kit.deliveryRollInKit != false %}
            <div>
                <div>
{#                    <div>{{ kit.id }}</div>#}
                    <h3>{{ kit.deliveryRollInKit.rollName }}</h3>
                    <div>{{ kit.deliveryRollInKit.rollPrice }} руб.</div>
                    <div>{{ kit.deliveryRollInKit.rollQuantity }} шт.</div>
                    <p>{{ kit.deliveryRollInKit.rollComposition }}</p>
                    <a href=\"{{ path('removeRoll', {'id':kit.id}) }}\">Удалить из корзины</a>
                    {% set totalPrice = totalPrice + kit.deliveryRollInKit.rollPrice %}
                </div>
            </div>
        {% endif %}

    {% endfor %}

    <h3>Итого: {{ totalPrice }} руб.</h3>

    <a href=\"{{ path('order') }}\">Оформить заказ</a>

{% endblock %}
", "/kitList.html.twig", "C:\\myfiles\\MyPhpProjects\\final2\\FT1\\templates\\kitList.html.twig");
    }
}
