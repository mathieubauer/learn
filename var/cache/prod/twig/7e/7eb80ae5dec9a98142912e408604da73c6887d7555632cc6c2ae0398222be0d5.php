<?php

/* @FOSCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_7f4bf57a20724d698dde04a20e9cf0208eba13816baeecb0ee5f9f56a84c8e58 extends Twig_Template
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

use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;

/*
 * @var CKEditorRendererInterface[] \$view
 * @var string \$id
 * @var string \$base_path
 * @var string \$js_path
 * @var string \$jquery_path
 * @var bool \$jquery
 * @var bool \$require_js
 * @var string[][] \$styles
 * @var string[][] \$plugins
 * @var string[][] \$templates
 * @var string \$auto_inline
 * @var string \$input_sync
 * @var string \$inline
 * @var string \$filebrowsers
 * @var array \$config
 */

?>
<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['fos_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['fos_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['fos_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['fos_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['fos_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['fos_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['fos_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', ''); ?>

    <?php echo \$view['fos_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline' => \$auto_inline,
            'inline' => \$inline,
            'input_sync' => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/_ckeditor_javascript.html.php";
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
        return new Twig_Source("", "@FOSCKEditor/Form/_ckeditor_javascript.html.php", "/Users/mbr/Documents/a_MAMP/ampli_symfony/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/_ckeditor_javascript.html.php");
    }
}
