<?php

/* @FOSCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_bf07c3197c14c0af4cbd99b5344606d2b1a8b54e9cc583579c6b9e36d6caec39 extends Twig_Template
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
 * @var CKEditorRendererInterface|FormView[]
 * @var object                               \$form
 * @var string                               \$value
 * @var bool                                 \$enable
 * @var bool                                 \$async
 */
use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;
use Symfony\\Component\\Form\\FormView;

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("", "@FOSCKEditor/Form/ckeditor_widget.html.php", "/Users/mbr/Documents/a_MAMP/ampli_symfony/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.php");
    }
}
