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

/* FOSCKEditorBundle:Form:ckeditor_widget.html.php */
class __TwigTemplate_081079af6a5cbfdab22efce75615dfda37391581c583688d344bce035597da38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSCKEditorBundle:Form:ckeditor_widget.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSCKEditorBundle:Form:ckeditor_widget.html.php"));

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

@trigger_error(
    'The ckeditor_widget.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSCKEditorBundle:Form:ckeditor_widget.html.php";
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

/**
 * @var CKEditorRendererInterface|FormView[]
 * @var object                               \$form
 * @var string                               \$value
 * @var bool                                 \$enable
 * @var bool                                 \$async
 */
use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;
use Symfony\\Component\\Form\\FormView;

@trigger_error(
    'The ckeditor_widget.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
", "FOSCKEditorBundle:Form:ckeditor_widget.html.php", "/var/www/ndc_new/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.php");
    }
}
