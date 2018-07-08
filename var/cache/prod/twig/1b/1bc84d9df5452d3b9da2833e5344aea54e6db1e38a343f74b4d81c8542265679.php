<?php

/* @FOSCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_78e96f3f5f7af0209205d60776dff9358f2c7d5b3835c5a1a86892db4cd6184e extends Twig_Template
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
        echo "<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @var bool
 * @var bool \$async
 */
?>
<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSCKEditor/Form/ckeditor_javascript.html.php", "/Users/mbr/Documents/a_MAMP/ampli_symfony/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
