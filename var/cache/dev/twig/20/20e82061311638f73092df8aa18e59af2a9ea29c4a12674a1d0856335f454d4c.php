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

/* FOSCKEditorBundle:Form:_ckeditor_javascript.html.php */
class __TwigTemplate_c99107d22acb6d38daa4b7e5525b3bb76dcddf36073317d303aa9cd0934fb008 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSCKEditorBundle:Form:_ckeditor_javascript.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSCKEditorBundle:Form:_ckeditor_javascript.html.php"));

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

@trigger_error(
    'The _ckeditor_javascript.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSCKEditorBundle:Form:_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

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

@trigger_error(
    'The _ckeditor_javascript.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

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
", "FOSCKEditorBundle:Form:_ckeditor_javascript.html.php", "/var/www/ndc_new/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/_ckeditor_javascript.html.php");
    }
}
