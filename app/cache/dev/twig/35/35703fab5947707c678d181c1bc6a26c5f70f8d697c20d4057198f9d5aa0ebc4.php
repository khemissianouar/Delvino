<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_8c746d05a5a77c05217c5b47cca3a11aebeb646c077a59319545c23c56d23e59 extends Twig_Template
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
        $__internal_c22ac9a09175a37aa53d8684c1959241dbf4fa31a8fccba51ded51b7c1482513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22ac9a09175a37aa53d8684c1959241dbf4fa31a8fccba51ded51b7c1482513->enter($__internal_c22ac9a09175a37aa53d8684c1959241dbf4fa31a8fccba51ded51b7c1482513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<section>

      <div class=\"span3\">
        <div class=\"left-sidebar\">
          <h2>Category</h2>
          <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">

                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                  Type
                  </a>
                </h4>
              </div>
              <div id=\"sportswear\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Type:menu"), array());
        // line 21
        echo "

                  </ul>
                </div>
              </div>
            </div>
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
              Couleur
                  </a>
                </h4>
              </div>
              <div id=\"mens\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                              ";
        // line 39
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:couleur:menu"), array());
        // line 40
        echo "
                  </ul>
                </div>
              </div>
            </div>

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
              Par Gout
                  </a>
                </h4>
              </div>
              <div id=\"womens\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:gout:menu"), array());
        // line 59
        echo "                  </ul>
                </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#region\">
                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                  Region
                      </a>
                    </h4>
                  </div>
                  <div id=\"region\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                      <ul>
                      ";
        // line 76
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Region:menu"), array());
        // line 77
        echo "
                      </ul>
                    </div>
                  </div>
                </div>
        




      </div>  <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#alcool\">
                <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
      Alcool
              </a>
            </h4>
</div>
          <div id=\"alcool\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
              <ul>
                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:alcool:menu"), array());
        // line 100
        echo "

              </ul>
            </div>
          </div>
        </div>

  </div>

          </div><!--/category-productsr-->




        </div>
      </div>



</section>
";
        
        $__internal_c22ac9a09175a37aa53d8684c1959241dbf4fa31a8fccba51ded51b7c1482513->leave($__internal_c22ac9a09175a37aa53d8684c1959241dbf4fa31a8fccba51ded51b7c1482513_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 100,  134 => 99,  110 => 77,  108 => 76,  89 => 59,  87 => 58,  67 => 40,  65 => 39,  45 => 21,  43 => 20,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>

      <div class=\"span3\">
        <div class=\"left-sidebar\">
          <h2>Category</h2>
          <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">

                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                  Type
                  </a>
                </h4>
              </div>
              <div id=\"sportswear\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                    {% render(controller('EcommerceBundle:Type:menu')) %}


                  </ul>
                </div>
              </div>
            </div>
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
              Couleur
                  </a>
                </h4>
              </div>
              <div id=\"mens\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                              {% render(controller('EcommerceBundle:couleur:menu')) %}

                  </ul>
                </div>
              </div>
            </div>

            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                  <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
                    <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
              Par Gout
                  </a>
                </h4>
              </div>
              <div id=\"womens\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <ul>
                {% render(controller('EcommerceBundle:gout:menu')) %}
                  </ul>
                </div>
                </div>


                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#region\">
                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                  Region
                      </a>
                    </h4>
                  </div>
                  <div id=\"region\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                      <ul>
                      {% render(controller('EcommerceBundle:Region:menu')) %}

                      </ul>
                    </div>
                  </div>
                </div>
        




      </div>  <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#alcool\">
                <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
      Alcool
              </a>
            </h4>
</div>
          <div id=\"alcool\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
              <ul>
                {% render(controller('EcommerceBundle:alcool:menu')) %}


              </ul>
            </div>
          </div>
        </div>

  </div>

          </div><!--/category-productsr-->




        </div>
      </div>



</section>
", "::modulesUsed/navigation.html.twig", "C:\\xampp\\htdocs\\Delvino5\\app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
