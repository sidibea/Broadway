<?php

/* BWFrontBundle::orders.html.twig */
class __TwigTemplate_34eb55f3dab1e4d662af17949edd607407903c036242eea31a9a26ca4a333a50 extends Twig_Template
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
        $__internal_288e5cfabf07e2eff80316a6399360c56b2a46918c224914c213b255fad5281c = $this->env->getExtension("native_profiler");
        $__internal_288e5cfabf07e2eff80316a6399360c56b2a46918c224914c213b255fad5281c->enter($__internal_288e5cfabf07e2eff80316a6399360c56b2a46918c224914c213b255fad5281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BWFrontBundle::orders.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE 2 | Invoice</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/bootstrap-select.css"), "html", null, true);
        echo "\">
    <!-- FontAwesome 4.3.0 -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/bootstrap/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/bootstrap-select.css"), "html", null, true);
        echo "\">



    <!-- Theme style -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <![endif]-->
</head>
<body >
<div class=\"wrapper\">
    <!-- Main content -->
    <section class=\"invoice\">
        <!-- title row -->
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h2 class=\"page-header\">
                    <i class=\"fa fa-globe\"></i> Broadway Cafe.
                    <small class=\"pull-right\">Date: ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class=\"row invoice-info\">

            <div class=\"col-sm-4 invoice-col\">
                Client
                <address>
                    <strong>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "lastname", array()), "html", null, true);
        echo "</strong><br>
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address1", array()), "html", null, true);
        echo "<br>
                   ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address2", array()), "html", null, true);
        echo "<br>
                    Telephone: ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "phone", array()), "html", null, true);
        echo "<br/>
                    Email: ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "users", array()), "email", array()), "html", null, true);
        echo "
                </address>
            </div><!-- /.col -->

        </div><!-- /.row -->

        <!-- Table row -->
        <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Images</th>
                        <th>Produit</th>
                        <th>Qte</th>
                        <th>Sous-total</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 75
        $context["total"] = 0;
        // line 76
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 77
            echo "
                        <tr>
                            <td><img title=\"product\" alt=\"product\" src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/products/" . $this->getAttribute($this->getAttribute($context["val"], "products", array()), "images", array()))), "html", null, true);
            echo "\" width=\"100\"></td>


                            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "products", array()), "name", array()), "html", null, true);
            echo " </td>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "quantity", array()), "html", null, true);
            echo "</td>
                            <td> <b>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "products", array()), "price", array()), "html", null, true);
            echo " FCFA</b></td>
                            <td ><b> ";
            // line 85
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["val"], "products", array()), "price", array()) * $this->getAttribute($context["val"], "quantity", array())), "html", null, true);
            echo " FCFA";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($this->getAttribute($context["val"], "products", array()), "price", array()) * $this->getAttribute($context["val"], "quantity", array())));
            echo "</b></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class=\"row\">
            <div class=\"col-xs-6\">

            </div><!-- /.col -->

            <div class=\"col-xs-6\">
                <p class=\"lead\">Date de la commande ";
        // line 100
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</p>
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <tr>
                            <th style=\"width:50%\">Sous-total:</th>
                            <td>";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " FCFA</td>
                        </tr>

                        <tr>
                            <th>Livraison:</th>
                            <td>500 FCFA</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>";
        // line 114
        echo twig_escape_filter($this->env, ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + 500), "html", null, true);
        echo " FCFA</td>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src=\"../../dist/js/app.min.js\" type=\"text/javascript\"></script>
</body>
</html>";
        
        $__internal_288e5cfabf07e2eff80316a6399360c56b2a46918c224914c213b255fad5281c->leave($__internal_288e5cfabf07e2eff80316a6399360c56b2a46918c224914c213b255fad5281c_prof);

    }

    public function getTemplateName()
    {
        return "BWFrontBundle::orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 114,  201 => 105,  193 => 100,  179 => 88,  168 => 85,  164 => 84,  160 => 83,  156 => 82,  150 => 79,  146 => 77,  141 => 76,  139 => 75,  117 => 56,  113 => 55,  109 => 54,  105 => 53,  99 => 52,  86 => 42,  63 => 22,  57 => 19,  49 => 14,  45 => 13,  40 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>AdminLTE 2 | Invoice</title>*/
/*     <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*     <!-- Bootstrap 3.3.2 -->*/
/*     <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('admin/dist/css/bootstrap-select.css') }}">*/
/*     <!-- FontAwesome 4.3.0 -->*/
/*     <link href="{{ asset('admin/dist/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!-- Ionicons 2.0.0 -->*/
/*     <link href="{{ asset('admin/bootstrap/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('admin/dist/css/bootstrap-select.css') }}">*/
/* */
/* */
/* */
/*     <!-- Theme style -->*/
/*     <link href="{{ asset('admin/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />*/
/*    <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     <![endif]-->*/
/* </head>*/
/* <body >*/
/* <div class="wrapper">*/
/*     <!-- Main content -->*/
/*     <section class="invoice">*/
/*         <!-- title row -->*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h2 class="page-header">*/
/*                     <i class="fa fa-globe"></i> Broadway Cafe.*/
/*                     <small class="pull-right">Date: {{ "now" | date('d/m/Y') }}</small>*/
/*                 </h2>*/
/*             </div><!-- /.col -->*/
/*         </div>*/
/*         <!-- info row -->*/
/*         <div class="row invoice-info">*/
/* */
/*             <div class="col-sm-4 invoice-col">*/
/*                 Client*/
/*                 <address>*/
/*                     <strong>{{ customer.firstname }} {{ customer.lastname }}</strong><br>*/
/*                     {{ customer.address1  }}<br>*/
/*                    {{ customer.address2 }}<br>*/
/*                     Telephone: {{ customer.phone }}<br/>*/
/*                     Email: {{ customer.users.email }}*/
/*                 </address>*/
/*             </div><!-- /.col -->*/
/* */
/*         </div><!-- /.row -->*/
/* */
/*         <!-- Table row -->*/
/*         <div class="row">*/
/*             <div class="col-xs-12 table-responsive">*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Images</th>*/
/*                         <th>Produit</th>*/
/*                         <th>Qte</th>*/
/*                         <th>Sous-total</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% set total = 0 %}*/
/*                     {% for key, val in cart %}*/
/* */
/*                         <tr>*/
/*                             <td><img title="product" alt="product" src="{{ asset('uploads/products/'~val.products.images) }}" width="100"></td>*/
/* */
/* */
/*                             <td>{{ val.products.name }} </td>*/
/*                             <td>{{ val.quantity }}</td>*/
/*                             <td> <b>{{ val.products.price }} FCFA</b></td>*/
/*                             <td ><b> {{ val.products.price * val.quantity }} FCFA{% set total = total + (val.products.price * val.quantity) %}</b></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/* */
/*             </div><!-- /.col -->*/
/* */
/*             <div class="col-xs-6">*/
/*                 <p class="lead">Date de la commande {{ "now" | date('d/m/Y') }}</p>*/
/*                 <div class="table-responsive">*/
/*                     <table class="table">*/
/*                         <tr>*/
/*                             <th style="width:50%">Sous-total:</th>*/
/*                             <td>{{ total }} FCFA</td>*/
/*                         </tr>*/
/* */
/*                         <tr>*/
/*                             <th>Livraison:</th>*/
/*                             <td>500 FCFA</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Total:</th>*/
/*                             <td>{{ total + 500 }} FCFA</td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*     </section><!-- /.content -->*/
/* </div><!-- ./wrapper -->*/
/* <!-- AdminLTE App -->*/
/* <script src="../../dist/js/app.min.js" type="text/javascript"></script>*/
/* </body>*/
/* </html>*/
