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

/* default/video.html.twig */
class __TwigTemplate_e6dc86ff7e936964632bf3cdcd233c1b41c278c1b5a429d07377b457af4ea07a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/video.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/video.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Video";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link rel=\"stylesheet\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/video/video.css"), "html", null, true);
        echo "\" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<style>
   
</style>

<div class=\"body\" style=\"\">

      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back2.png"), "html", null, true);
        echo "\" style=\"  height:100vh; background-cover:center; width:100%; position:absolute; height:100%; bottom:0; top:0; right:0; left:0; width:100%;\">

        <div class=\"\" style=\"padding:11px; background-color:white;  border-bottom: 3px solid #2c3e50; position:relative;\">
          <div class=\"container\">
                <div style=\"display:inline-block\"> 
                   <a href=\"https://www.ues.ma/\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profile.png"), "html", null, true);
        echo "\" style=\"height:45px;\"></a>
                </div>

                <div style=\"float:right;\"> 
                  <a  href=\"#\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("splashf.png"), "html", null, true);
        echo "\" style=\"height:42px;\"></a>
                </div>
                <div   style=\"position:absolute; left:43.5%; top:25%; font-weight:bold; border:1px solid #2c3e50; 
                       padding:6px 10px; border-radius: 15px 0px 15px 0px; color:#2c3e50;\">
                   ";
        // line 30
        echo " adm
                </div>
          </div>
        </div>



<div class=\"container mt-5\">
    <div class=\"row\" >
      <div class=\"col-xl-8 col-md-7 col-12\" style=\"margin-bottom: 15px\">
           ";
        // line 41
        echo "           <video width=\"100%\"  controls controlsList=\"nodownload\">
           
                <source src=";
        // line 43
        echo twig_escape_filter($this->env, ("https://videos.uiass-online.ma" . twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 43, $this->source); })()), "video", [], "any", false, false, false, 43), ["+" => "/"])), "html", null, true);
        echo "   type=\"video/mp4\">
            </video> 
            ";
        // line 48
        echo "
            ";
        // line 50
        echo "
            ";
        // line 69
        echo "
            ";
        // line 71
        echo "
      </div>
      <div class=\"col-xl-4 col-md-5 col-12 suggestion card-video\">
          
         ";
        // line 76
        echo "
        
         <div id=\"accordion1\" class=\"piece-joint-accordion\">
                <div class=\"card\">
                    <div class=\"card-header card-header-pieces-jointe\" data-toggle=\"collapse\"   id=\"headingOne\"  data-target=\"#collapseToo\" >
                        <p class=\"piece-joint\" > <i class=\"fas fa-file\" style=\"margin-right: 5px;\"> </i> Pieces joints</p>
                        <h5 class=\"mb-0 accordian-button\" >
                            <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseToo\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-plus\" style=\"color: white\"> </i>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseToo\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion1\">
                    <div class=\"card-body\">
                          <div class=\"row\">
                             
                                
                                        ";
        // line 94
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 94, $this->source); })()), "piece", [], "any", false, false, false, 94))) {
            // line 95
            echo "                                                
                                            ";
            // line 96
            $context["pieces"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 96, $this->source); })()), "piece", [], "any", false, false, false, 96), "|");
            // line 97
            echo "
                                            ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pieces"]) || array_key_exists("pieces", $context) ? $context["pieces"] : (function () { throw new RuntimeError('Variable "pieces" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
                // line 99
                echo "                                                        
                                                    ";
                // line 100
                $context["exts"] = twig_split_filter($this->env, $context["piece"], ".");
                // line 101
                echo "                                                    ";
                $context["name"] = twig_split_filter($this->env, $context["piece"], "!!");
                // line 102
                echo "                                                        
                                                    ";
                // line 103
                if ((0 !== twig_compare($context["piece"], null))) {
                    // line 104
                    echo "
                                                        <div class=\"col-xl-2\"  style=\"padding-left: 30px;\">
                                                            ";
                    // line 107
                    echo "                                                        
                                                            <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . $context["piece"])), "html", null, true);
                    echo "\" target=\"_blank\" id=\"PJ\">
                                                                ";
                    // line 109
                    if (((((((0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "tif")) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "png"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "jpg"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "gif"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "jpeg"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 109, $this->source); })()), 1, [], "array", false, false, false, 109)), "tiff")))) {
                        // line 110
                        echo "                                                                    <i class=\"fa fa-file-image icon-file\" style=\"color:#717171;\"></i> 
                                                                ";
                    } elseif ((0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 111
(isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 111, $this->source); })()), 1, [], "array", false, false, false, 111)), "pdf"))) {
                        // line 112
                        echo "                                                                    <i class=\"fa fa-file-pdf icon-file\"  style=\"color:#AC1D19;\" ></i>   
                                                                ";
                    } elseif (((((((0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 113
(isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xlsx")) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xlsx"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xlsm"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xlsb"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xls"))) || (0 === twig_compare(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exts"]) || array_key_exists("exts", $context) ? $context["exts"] : (function () { throw new RuntimeError('Variable "exts" does not exist.', 113, $this->source); })()), 1, [], "array", false, false, false, 113)), "xlam")))) {
                        // line 114
                        echo "                                                                    <i class=\"fa fa-file-excel icon-file\" style=\"color:green;\"></i>  
                                                                ";
                    } else {
                        // line 115
                        echo "      
                                                                <i class=\"fa fa-file icon-file\" style=\"color:#F7A326;\" ></i>           
                                                                ";
                    }
                    // line 117
                    echo " 
                                                            </a>
                                                        </div>

                                                        <div class=\"col-xl-10\">
                                                             ";
                    // line 122
                    $context["Singlename"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 122, $this->source); })()), 1, [], "array", false, false, false, 122), ".");
                    // line 123
                    echo "                                                            <p> ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["Singlename"]) || array_key_exists("Singlename", $context) ? $context["Singlename"] : (function () { throw new RuntimeError('Variable "Singlename" does not exist.', 123, $this->source); })()), 0, [], "array", false, false, false, 123) . ".") . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Singlename"]) || array_key_exists("Singlename", $context) ? $context["Singlename"] : (function () { throw new RuntimeError('Variable "Singlename" does not exist.', 123, $this->source); })()), 1, [], "array", false, false, false, 123))), "html", null, true);
                    echo " </p>
                                                        </div>

                                                    ";
                }
                // line 127
                echo "                                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                                                                                            
                                        ";
        }
        // line 131
        echo "
                            </div>

                            ";
        // line 135
        echo "
                          
                           ";
        // line 169
        echo "

                       </div>
                    </div>
                </div>
            </div>

         
          
        ";
        // line 179
        echo "
        
      </div>
    </div>
</div> 

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 179,  276 => 169,  272 => 135,  267 => 131,  263 => 129,  256 => 127,  248 => 123,  246 => 122,  239 => 117,  234 => 115,  230 => 114,  228 => 113,  225 => 112,  223 => 111,  220 => 110,  218 => 109,  214 => 108,  211 => 107,  207 => 104,  205 => 103,  202 => 102,  199 => 101,  197 => 100,  194 => 99,  190 => 98,  187 => 97,  185 => 96,  182 => 95,  180 => 94,  160 => 76,  154 => 71,  151 => 69,  148 => 50,  145 => 48,  140 => 43,  136 => 41,  124 => 30,  117 => 26,  110 => 22,  102 => 17,  94 => 11,  87 => 10,  78 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Video{% endblock %}

{% block stylesheets %}
{{ parent() }}
 <link rel=\"stylesheet\"  href=\"{{ asset('css/video/video.css') }}\" >
{% endblock %}

{% block body %}
<style>
   
</style>

<div class=\"body\" style=\"\">

      <img src=\"{{ asset('back2.png') }}\" style=\"  height:100vh; background-cover:center; width:100%; position:absolute; height:100%; bottom:0; top:0; right:0; left:0; width:100%;\">

        <div class=\"\" style=\"padding:11px; background-color:white;  border-bottom: 3px solid #2c3e50; position:relative;\">
          <div class=\"container\">
                <div style=\"display:inline-block\"> 
                   <a href=\"https://www.ues.ma/\"><img src=\"{{ asset('profile.png') }}\" style=\"height:45px;\"></a>
                </div>

                <div style=\"float:right;\"> 
                  <a  href=\"#\"><img src=\"{{ asset('splashf.png') }}\" style=\"height:42px;\"></a>
                </div>
                <div   style=\"position:absolute; left:43.5%; top:25%; font-weight:bold; border:1px solid #2c3e50; 
                       padding:6px 10px; border-radius: 15px 0px 15px 0px; color:#2c3e50;\">
                   {# {{ adm }} #} adm
                </div>
          </div>
        </div>



<div class=\"container mt-5\">
    <div class=\"row\" >
      <div class=\"col-xl-8 col-md-7 col-12\" style=\"margin-bottom: 15px\">
           {# <video width=\"100%\"  controls controlsList=\"nodownload\"> #}
           <video width=\"100%\"  controls controlsList=\"nodownload\">
           
                <source src={{ \"https://videos.uiass-online.ma\" ~ video.video|replace({ ('+'): '/' }) }}   type=\"video/mp4\">
            </video> 
            {# <p class=\"p-description-video\"> 
                 Le Lorem Ipsum est simplement du faux texte employé dans la composition 
            </p> #}

            {# ------------------------------------------- accordian -------------------------------------------- #}

            {# <div id=\"accordion\" class=\"commantaire\">
                <div class=\"card\">
                    <div class=\"card-header card-header-commentaire\" data-toggle=\"collapse\"   id=\"headingOne\"  data-target=\"#collapseOne\" >
                        <p class=\"piece-joint\" > <i class=\"fas fa-comments\" style=\"margin-right: 5px;\"> </i> Commentaires </p>
                        <h5 class=\"mb-0 accordian-button\" >
                            <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-plus\" style=\"color: white\"> </i>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                    <div class=\"card-body\">
                        Anim pariatur cliche reprehenderit, enim eiusmod high lif
                    </div>
                    </div>
                </div>
            </div> #}

            {# ------------------------------------------------- accordian ------------------------------------- #}

      </div>
      <div class=\"col-xl-4 col-md-5 col-12 suggestion card-video\">
          
         {# ------------------------------------------------- accordian ------------------------------------- #}

        
         <div id=\"accordion1\" class=\"piece-joint-accordion\">
                <div class=\"card\">
                    <div class=\"card-header card-header-pieces-jointe\" data-toggle=\"collapse\"   id=\"headingOne\"  data-target=\"#collapseToo\" >
                        <p class=\"piece-joint\" > <i class=\"fas fa-file\" style=\"margin-right: 5px;\"> </i> Pieces joints</p>
                        <h5 class=\"mb-0 accordian-button\" >
                            <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseToo\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <i class=\"fas fa-plus\" style=\"color: white\"> </i>
                            </button>
                        </h5>
                    </div>

                    <div id=\"collapseToo\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion1\">
                    <div class=\"card-body\">
                          <div class=\"row\">
                             
                                
                                        {% if  video.piece is not empty %}
                                                
                                            {% set pieces = video.piece | split('|') %}

                                            {% for piece in pieces %}
                                                        
                                                    {% set exts = piece |split('.') %}
                                                    {% set name = piece |split('!!') %}
                                                        
                                                    {% if piece != null %}

                                                        <div class=\"col-xl-2\"  style=\"padding-left: 30px;\">
                                                            {# <i class=\"fas fa-file\" style=\"font-size: 17px; margin-top: 4px; color:#F7A326;\"> </i> #}
                                                        
                                                            <a href=\"{{ asset('uploads/' ~ piece ) }}\" target=\"_blank\" id=\"PJ\">
                                                                {% if  exts[1] |lower  == 'tif' or  exts[1] |lower  == 'png' or exts[1] |lower  == 'jpg' or exts[1] |lower  == 'gif' or exts[1] |lower  == 'jpeg' or exts[1] |lower  == 'tiff' %}
                                                                    <i class=\"fa fa-file-image icon-file\" style=\"color:#717171;\"></i> 
                                                                {% elseif exts[1] |lower == 'pdf' %}
                                                                    <i class=\"fa fa-file-pdf icon-file\"  style=\"color:#AC1D19;\" ></i>   
                                                                {% elseif exts[1] |lower == 'xlsx' or exts[1] |lower == 'xlsx' or exts[1] |lower == 'xlsm' or exts[1] |lower == 'xlsb' or exts[1] |lower == 'xls' or exts[1] |lower == 'xlam' %}
                                                                    <i class=\"fa fa-file-excel icon-file\" style=\"color:green;\"></i>  
                                                                {% else %}      
                                                                <i class=\"fa fa-file icon-file\" style=\"color:#F7A326;\" ></i>           
                                                                {% endif %} 
                                                            </a>
                                                        </div>

                                                        <div class=\"col-xl-10\">
                                                             {% set Singlename = name[1] |split('.') %}
                                                            <p> {{ Singlename[0] ~ '.' ~ Singlename[1] |lower }} </p>
                                                        </div>

                                                    {% endif %}
                                                            
                                            {% endfor %}
                                                                                            
                                        {% endif %}

                            </div>

                            {# --------------------------------------- row ---------------------------------------------- #}

                          
                           {# 
                            <div class=\"row\">
                                <div class=\"col-xl-2\"  style=\"padding-left: 30px;\">
                                    <i class=\"fas fa-file-excel\" style=\"font-size: 17px; margin-top: 4px; color:green;\"> </i>
                                </div>

                                <div class=\"col-xl-10\">
                                    <p> Anim pariatur cliche reprehenderit enim eiusmod high lif </p>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-xl-2\"  style=\"padding-left: 30px;\">
                                    <i class=\"fas fa-file-image\" style=\"font-size: 17px; margin-top: 4px; color:#717171;\"> </i>
                                </div>

                                <div class=\"col-xl-10\">
                                    <p> Anim pariatur cliche reprehenderit enim eiusmod high lif </p>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-xl-2\"  style=\"padding-left: 30px;\">
                                    <i class=\"fas fa-file-pdf\" style=\"font-size: 17px; margin-top: 4px; color:#AC1D19;\"> </i>
                                </div>

                                <div class=\"col-xl-10\">
                                    <p> Anim pariatur cliche reprehenderit enim eiusmod high lif </p>
                                </div>
                            </div>*
                          
                           #}


                       </div>
                    </div>
                </div>
            </div>

         
          
        {# ------------------------------------------------- accordian ------------------------------------- #}

        
      </div>
    </div>
</div> 

</div>



{% endblock %}

", "default/video.html.twig", "/home/uiassonline/public_html/templates/default/video.html.twig");
    }
}
