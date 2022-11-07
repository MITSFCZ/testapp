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

/* default/admin/home.html.twig */
class __TwigTemplate_b8913547c9f10611aa93de05cfc1f4884b5ef153d1a8e57381be956cfbc4b474 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/admin/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/admin/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin/home.css"), "html", null, true);
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
        echo "

<div class=\"body\" style=\"\">
 <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back2.png"), "html", null, true);
        echo "\" style=\"height:100vh; background-cover:center; width:100%; position:absolute; height:100%; bottom:0; top:0; right:0; left:0; width:100%;\">
";
        // line 18
        echo "
";
        // line 52
        echo "
   <div class=\"\" style=\"padding:11px; background-color:white;  border-bottom: 3px solid #2c3e50; position:relative;\">
      <div class=\"container\">
            <div style=\"display:inline-block\"> 
               <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profile.png"), "html", null, true);
        echo "\" style=\"height:45px;\"></a>
            </div>

            <div style=\"float:right;\"> 
              <a  href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("settings.png"), "html", null, true);
        echo "\" style=\"height:45px;\"></a>
            </div>
            <div   style=\"position:absolute; left:50%; top:25%; font-weight:bold; border:1px solid #2c3e50; 
                   padding:6px 10px; border-radius: 15px 0px 15px 0px; color:#2c3e50;\">
               ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
            </div>
      </div>
   </div>

     ";
        // line 70
        echo "
     <div class=\"container\" style=\"height: 91%; display: flex; justify-content: center; margin-top: 2%;\">
 


       <div class=\"form-upload\" style=\"position:relative;\">
       
      
            <form  method=\"post\" action=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_piece");
        echo "\" enctype=\"multipart/form-data\" name=\"myForm\">

                
                <div class=\"alert alert-danger errors\" role=\"alert\" style=\"\">
                    This is a primary alert—check it out!
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Etablissement\" id=\"Etablissement\">
                      <option value=\"choix\">Choix Etablissement...</option> 
                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Formation\" id=\"Formation\" >
                      ";
        // line 94
        echo "                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Promotion\" id=\"Promotion\" >
                     ";
        // line 100
        echo "                    </select>
                </div>

                <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Semestre\" id=\"Semestre\">
                      ";
        // line 106
        echo "                    </select>
                </div>

                <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Module\" id=\"Module\">
                      ";
        // line 112
        echo "                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Element\" id=\"Element\">
                      ";
        // line 118
        echo "                    </select>
                </div>
                
                <div class=\"select\" style=\"border-radius:4px 4px 2px 2px;\">
                    <select name=\"active\" id=\"slct\">
                        <option value=\"1\" style=\"font-size:15px;\">Active</option>
                        <option value=\"2\" style=\"font-size:15px;\">Inactive</option>
                    </select>
                </div>


                ";
        // line 130
        echo "                ";
        // line 131
        echo "                ";
        // line 132
        echo "                ";
        // line 133
        echo "                ";
        // line 137
        echo "                    ";
        // line 138
        echo " 


               

                ";
        // line 147
        echo "                  
                ";
        // line 149
        echo "                
                 ";
        // line 161
        echo "                ";
        // line 162
        echo "
                <div class=\"form-group text-area\">
                    <textarea placeholder=\"Titre\" class=\"form-control\" name=\"description\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>

                
                ";
        // line 171
        echo "



                <button type=\"submit\" class=\"btn btn-outline-success submit-button\" style=\"position:relative; z-index:8000;\">
                      <i class=\"fas fa-upload\"></i> Téleverser 
               </button>
            </form>

    </div>

     
     </div>

     </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 171,  232 => 162,  230 => 161,  227 => 149,  224 => 147,  217 => 138,  215 => 137,  213 => 133,  211 => 132,  209 => 131,  207 => 130,  194 => 118,  187 => 112,  180 => 106,  173 => 100,  166 => 94,  148 => 78,  138 => 70,  130 => 64,  121 => 60,  112 => 56,  106 => 52,  103 => 18,  99 => 14,  94 => 11,  87 => 10,  78 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block stylesheets %}
{{ parent() }}
 <link rel=\"stylesheet\"  href=\"{{ asset('css/admin/home.css') }}\" >
{% endblock %}

{% block body %}


<div class=\"body\" style=\"\">
 <img src=\"{{ asset('back2.png') }}\" style=\"height:100vh; background-cover:center; width:100%; position:absolute; height:100%; bottom:0; top:0; right:0; left:0; width:100%;\">
{#  </div>

 <div style=\"z-index:9999; position:relative;\"> #}

{# <div class=\"example-wrapper\">

    
    <nav class=\"navbar navbar-expand-lg \">
      <img src=\"{{ asset('uploads/logoWW.png') }}\" class=\"logo\" />
      <div class=\"container\">

        <a class=\"navbar-brand\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">HOME <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {{username}}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">se deconnecter</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

</div> #}

   <div class=\"\" style=\"padding:11px; background-color:white;  border-bottom: 3px solid #2c3e50; position:relative;\">
      <div class=\"container\">
            <div style=\"display:inline-block\"> 
               <a href=\"{{path('app_logout')}}\"><img src=\"{{ asset('profile.png') }}\" style=\"height:45px;\"></a>
            </div>

            <div style=\"float:right;\"> 
              <a  href=\"{{path('home')}}\"><img src=\"{{ asset('settings.png') }}\" style=\"height:45px;\"></a>
            </div>
            <div   style=\"position:absolute; left:50%; top:25%; font-weight:bold; border:1px solid #2c3e50; 
                   padding:6px 10px; border-radius: 15px 0px 15px 0px; color:#2c3e50;\">
               {{ username}}
            </div>
      </div>
   </div>

     {# ------------------------------------------------------------------------ #}

     <div class=\"container\" style=\"height: 91%; display: flex; justify-content: center; margin-top: 2%;\">
 


       <div class=\"form-upload\" style=\"position:relative;\">
       
      
            <form  method=\"post\" action=\"{{ path('info_piece') }}\" enctype=\"multipart/form-data\" name=\"myForm\">

                
                <div class=\"alert alert-danger errors\" role=\"alert\" style=\"\">
                    This is a primary alert—check it out!
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Etablissement\" id=\"Etablissement\">
                      <option value=\"choix\">Choix Etablissement...</option> 
                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Formation\" id=\"Formation\" >
                      {# <option value=\"AL\">Choix formation...</option> #}
                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Promotion\" id=\"Promotion\" >
                     {#  <option value=\"AL\">Choix Promotion...</option> #}
                    </select>
                </div>

                <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Semestre\" id=\"Semestre\">
                      {# <option value=\"AL\">Choix Semester...</option> #}
                    </select>
                </div>

                <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Module\" id=\"Module\">
                      {# <option value=\"AL\">Choix Module...</option> #}
                    </select>
                </div>

                 <div class=\"select\">
                    <select class=\"js-example-basic-single\" name=\"Element\" id=\"Element\">
                      {#  <option value=\"AL\">Choix Eelement...</option> #}
                    </select>
                </div>
                
                <div class=\"select\" style=\"border-radius:4px 4px 2px 2px;\">
                    <select name=\"active\" id=\"slct\">
                        <option value=\"1\" style=\"font-size:15px;\">Active</option>
                        <option value=\"2\" style=\"font-size:15px;\">Inactive</option>
                    </select>
                </div>


                {#Select image to upload:#}
                {#<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">#}
                {# <label for=\"files\">Select files:</label> #}
                {# <input type=\"file\" id=\"files\" name=\"files[file][]\" multiple><br><br> #}
                {# 
                <div class=\"fileUpload blue-btn btn width100\">
                    <span> <i class=\"fas fa-upload\"></i> Selectionner video / thumbnail </span>
                    {# <input type=\"file\" class=\"uploadlogo\" /> #}
                    {# <input type=\"file\" id=\"files\" class=\"uploadlogo\" name=\"files[file][]\" multiple><br><br>
                </div> #} 


               

                {# <div class=\"fileUpload blue-btn btn width100\">
                    <span>  <i class=\"fas fa-mouse-pointer\"></i> Sélectionner une image</span>
                    <input type=\"file\" name=\"fileToUpload\" class=\"uploadlogo\" />
                </div> #}
                  
                {# -------------------------------------------- dernier commantaire ------------------------------------ #}
                
                 {#  <div class=\"fileUpload blue-btn btn width100\">
                      <span> <i class=\"fas fa-mouse-pointer\"></i>  Sélectionner une video</span>
                      <input type=\"file\" name=\"videoToUpload\" class=\"uploadlogo\" />
                  </div>

                   <div class=\"fileUpload blue-btn btn width100\">
                      <span> <i class=\"fas fa-mouse-pointer\"></i> Selectionner des fichiers </span>
                      <input type=\"file\" class=\"uploadlogo\" />
                      <input type=\"file\" id=\"files\" class=\"uploadlogo\" name=\"files[file][]\" multiple><br><br>
                  </div> 
 #}
                {# -------------------------------------------- dernier commantaire ------------------------------------ #}

                <div class=\"form-group text-area\">
                    <textarea placeholder=\"Titre\" class=\"form-control\" name=\"description\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>

                
                {# Select image to upload:
                <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
                <input type=\"submit\" value=\"Upload Image\" name=\"submit\"> #}




                <button type=\"submit\" class=\"btn btn-outline-success submit-button\" style=\"position:relative; z-index:8000;\">
                      <i class=\"fas fa-upload\"></i> Téleverser 
               </button>
            </form>

    </div>

     
     </div>

     </div>

{% endblock %}


", "default/admin/home.html.twig", "/home/uiassonline/public_html/templates/default/admin/home.html.twig");
    }
}
