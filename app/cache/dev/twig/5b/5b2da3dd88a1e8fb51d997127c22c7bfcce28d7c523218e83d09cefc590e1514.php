<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_d27b4b6208de2299e3b3405fdf38a45e54e9c0f355997295115dd9da9d44684a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d0c8d1437b1df1716b23b055e040bc23abdfd1fd897b9aaf41e6317f425e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d0c8d1437b1df1716b23b055e040bc23abdfd1fd897b9aaf41e6317f425e24->enter($__internal_61d0c8d1437b1df1716b23b055e040bc23abdfd1fd897b9aaf41e6317f425e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >

 <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\"/>
 <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/price-range.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
 <link  rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" />

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
   <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
   <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
   <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    </head>
    <body>
      <header id=\"header\"> <!--header-->
\t\t<div class=\"header_top\"><!--header_top-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contactinfo\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@delvino.com</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"social-icons pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header_top-->

\t\t<div class=\"header-middle\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo pull-left\">
\t\t\t\t\t\t\t<a href=\"\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/logo.png"), "html", null, true);
        echo "\" alt=\"\" width=\"150px\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canada</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">UK</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tEURO
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canadian Dollar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pound</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"shop-menu pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user\"></i> Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> Panier</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-lock\"></i> Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-middle-->

\t\t<div class=\"header-bottom\"><!--header-bottom-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mainmenu pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"active\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Produits<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Vin</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product-details.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">Panier</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                                    </ul>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"blog.html\">Blog List</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
                                    </ul>
                                </li>
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact-us.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"search_box pull-right\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-bottom-->
\t</header><!--/header-->

        ";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "        <hr />
        <footer id=\"footer\"><!--Footer-->
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"companyinfo\">
\t\t\t\t\t\t\t<h2><span>N</span>os partenaires</h2>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/iframe1.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/iframe2.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/iframe3.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/iframe4.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home/cartefrance.png"), "html", null, true);
        echo "\" alt=\"\" />

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-widget\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Service Client</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
                ";
        // line 235
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PagesBundle:Pages:menu"), array());
        // line 236
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
                <br><br><br>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Esoace Mariage</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Meilleurs prix du net</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Grantis</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Parrainage</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Société</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Qui sommes nous ?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Conditions Generales De Vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Vie privée et cookies</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Plan du site</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          <div class=\"col-sm-2\">
            <div class=\"single-widget\">
                <br><br><br>
              <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"#\">Foire aux vins</a></li>
                <li><a href=\"#\">partenaires</a></li>

              </ul>
            </div>
          </div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Produits</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Toutes nos marques</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Nouveautés</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"pull-left\">Copyright © 2016 DelvinoInc. All rights reserved.</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</footer><!--/Footer-->
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/price-range.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "') }}\"></script>
        ";
        // line 308
        $this->displayBlock('javascripts', $context, $blocks);
        // line 309
        echo "    </body>
</html>
";
        
        $__internal_61d0c8d1437b1df1716b23b055e040bc23abdfd1fd897b9aaf41e6317f425e24->leave($__internal_61d0c8d1437b1df1716b23b055e040bc23abdfd1fd897b9aaf41e6317f425e24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f40229b5dc7ad89bb843b5ed05fa51884b16bff8348960d360718c486528fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f40229b5dc7ad89bb843b5ed05fa51884b16bff8348960d360718c486528fcf->enter($__internal_8f40229b5dc7ad89bb843b5ed05fa51884b16bff8348960d360718c486528fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Delvino!";
        
        $__internal_8f40229b5dc7ad89bb843b5ed05fa51884b16bff8348960d360718c486528fcf->leave($__internal_8f40229b5dc7ad89bb843b5ed05fa51884b16bff8348960d360718c486528fcf_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cce3e898401815d2feaa34a42d84f7a294ee69b20a3de55d53d5cf035e3d65f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce3e898401815d2feaa34a42d84f7a294ee69b20a3de55d53d5cf035e3d65f0->enter($__internal_cce3e898401815d2feaa34a42d84f7a294ee69b20a3de55d53d5cf035e3d65f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cce3e898401815d2feaa34a42d84f7a294ee69b20a3de55d53d5cf035e3d65f0->leave($__internal_cce3e898401815d2feaa34a42d84f7a294ee69b20a3de55d53d5cf035e3d65f0_prof);

    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
        $__internal_454002123a0a274ab3d53dbfa79e3c22779e7d9dcbd2f567fce5557ea2fcbf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454002123a0a274ab3d53dbfa79e3c22779e7d9dcbd2f567fce5557ea2fcbf94->enter($__internal_454002123a0a274ab3d53dbfa79e3c22779e7d9dcbd2f567fce5557ea2fcbf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_454002123a0a274ab3d53dbfa79e3c22779e7d9dcbd2f567fce5557ea2fcbf94->leave($__internal_454002123a0a274ab3d53dbfa79e3c22779e7d9dcbd2f567fce5557ea2fcbf94_prof);

    }

    // line 308
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4a1393ee706796e00b29b4bc4d6b9fc6b77adfaeb596e79fad27865aac10f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a1393ee706796e00b29b4bc4d6b9fc6b77adfaeb596e79fad27865aac10f83->enter($__internal_f4a1393ee706796e00b29b4bc4d6b9fc6b77adfaeb596e79fad27865aac10f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4a1393ee706796e00b29b4bc4d6b9fc6b77adfaeb596e79fad27865aac10f83->leave($__internal_f4a1393ee706796e00b29b4bc4d6b9fc6b77adfaeb596e79fad27865aac10f83_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 308,  488 => 145,  477 => 19,  465 => 5,  456 => 309,  454 => 308,  450 => 307,  446 => 306,  442 => 305,  438 => 304,  434 => 303,  430 => 302,  426 => 301,  422 => 300,  356 => 236,  354 => 235,  336 => 220,  320 => 207,  302 => 192,  284 => 177,  266 => 162,  248 => 146,  246 => 145,  219 => 121,  215 => 120,  209 => 117,  203 => 114,  178 => 92,  174 => 91,  139 => 59,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  84 => 20,  82 => 19,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Delvino!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" >

 <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\" />
 <link rel=\"stylesheet\" href=\"{{ asset('css/prettyPhoto.css') }}\"/>
 <link rel=\"stylesheet\" href=\"{{ asset('css/price-range.css') }}\" />
 <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" />
 <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
 <link  rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\" />

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('images/ico/apple-touch-icon-144-precomposed.png')}}\">
   <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('images/ico/apple-touch-icon-114-precomposed.png')}}\">
   <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('images/ico/apple-touch-icon-72-precomposed.png')}}\">
   <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('images/ico/apple-touch-icon-57-precomposed.png')}}\">
    </head>
    <body>
      <header id=\"header\"> <!--header-->
\t\t<div class=\"header_top\"><!--header_top-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contactinfo\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@delvino.com</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"social-icons pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header_top-->

\t\t<div class=\"header-middle\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo pull-left\">
\t\t\t\t\t\t\t<a href=\"\"><img src=\"{{ asset('images/home/logo.png')}}\" alt=\"\" width=\"150px\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canada</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">UK</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tEURO
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canadian Dollar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pound</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"shop-menu pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user\"></i> Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('panier')}}\"><i class=\"fa fa-shopping-cart\"></i> Panier</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('fos_user_security_login') }}\"><i class=\"fa fa-lock\"></i> Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-middle-->

\t\t<div class=\"header-bottom\"><!--header-bottom-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mainmenu pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('produits')}}\" class=\"active\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Produits<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"{{path('produits')}}\">Vin</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product-details.html\"></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('panier')}}\">Panier</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('fos_user_security_login') }}\">Login</a></li>
                                    </ul>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"blog.html\">Blog List</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
                                    </ul>
                                </li>
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact-us.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"search_box pull-right\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-bottom-->
\t</header><!--/header-->

        {% block body %}{% endblock %}
        <hr />
        <footer id=\"footer\"><!--Footer-->
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"companyinfo\">
\t\t\t\t\t\t\t<h2><span>N</span>os partenaires</h2>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/home/iframe1.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/home/iframe2.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/home/iframe3.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/home/iframe4.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<img src=\"{{asset('images/home/cartefrance.png')}}\" alt=\"\" />

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-widget\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Service Client</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
                {% render(controller('PagesBundle:Pages:menu')) %}

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
                <br><br><br>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Esoace Mariage</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Meilleurs prix du net</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Grantis</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Parrainage</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Société</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Qui sommes nous ?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Conditions Generales De Vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Vie privée et cookies</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Plan du site</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          <div class=\"col-sm-2\">
            <div class=\"single-widget\">
                <br><br><br>
              <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"#\">Foire aux vins</a></li>
                <li><a href=\"#\">partenaires</a></li>

              </ul>
            </div>
          </div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Produits</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Toutes nos marques</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Nouveautés</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"pull-left\">Copyright © 2016 DelvinoInc. All rights reserved.</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</footer><!--/Footer-->
<script src=\"{{ asset('js/jquery.js')}}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('js/jquery.scrollUp.min.js') }}\"></script>
<script src=\"{{ asset('js/price-range.js')}}\"></script>
<script src=\"{{ asset('js/jquery.prettyPhoto.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
<script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.js') }}') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::layout/layout.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app/Resources\\views/layout/layout.html.twig");
    }
}
