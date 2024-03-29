<?php

namespace ContainerUnT2vuj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app' => 'getCache_AppService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.system' => 'getCache_SystemService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
        ];
        $this->fileMap = [
            'App\\Controller\\ArticleController' => 'getArticleControllerService.php',
            'App\\Controller\\BonusController' => 'getBonusControllerService.php',
            'App\\Controller\\CasinoController' => 'getCasinoControllerService.php',
            'App\\Controller\\NDCController' => 'getNDCControllerService.php',
            'App\\Controller\\OtherPagesController' => 'getOtherPagesControllerService.php',
            'App\\Controller\\PostController' => 'getPostControllerService.php',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService.php',
            'App\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService.php',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => 'getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateController2Service.php',
            'admin.article' => 'getAdmin_ArticleService.php',
            'admin.article.template_registry' => 'getAdmin_Article_TemplateRegistryService.php',
            'admin.articlecategory' => 'getAdmin_ArticlecategoryService.php',
            'admin.articlecategory.template_registry' => 'getAdmin_Articlecategory_TemplateRegistryService.php',
            'admin.author' => 'getAdmin_AuthorService.php',
            'admin.author.template_registry' => 'getAdmin_Author_TemplateRegistryService.php',
            'admin.bonus' => 'getAdmin_BonusService.php',
            'admin.bonus.template_registry' => 'getAdmin_Bonus_TemplateRegistryService.php',
            'admin.bonustype' => 'getAdmin_BonustypeService.php',
            'admin.bonustype.template_registry' => 'getAdmin_Bonustype_TemplateRegistryService.php',
            'admin.bonusvalue' => 'getAdmin_BonusvalueService.php',
            'admin.bonusvalue.template_registry' => 'getAdmin_Bonusvalue_TemplateRegistryService.php',
            'admin.casino' => 'getAdmin_CasinoService.php',
            'admin.casino.template_registry' => 'getAdmin_Casino_TemplateRegistryService.php',
            'admin.contactus' => 'getAdmin_ContactusService.php',
            'admin.contactus.template_registry' => 'getAdmin_Contactus_TemplateRegistryService.php',
            'admin.country' => 'getAdmin_CountryService.php',
            'admin.country.template_registry' => 'getAdmin_Country_TemplateRegistryService.php',
            'admin.countrylist' => 'getAdmin_CountrylistService.php',
            'admin.countrylist.template_registry' => 'getAdmin_Countrylist_TemplateRegistryService.php',
            'admin.currency' => 'getAdmin_CurrencyService.php',
            'admin.currency.template_registry' => 'getAdmin_Currency_TemplateRegistryService.php',
            'admin.gameslist' => 'getAdmin_GameslistService.php',
            'admin.gameslist.template_registry' => 'getAdmin_Gameslist_TemplateRegistryService.php',
            'admin.mainpage' => 'getAdmin_MainpageService.php',
            'admin.mainpage.template_registry' => 'getAdmin_Mainpage_TemplateRegistryService.php',
            'admin.news' => 'getAdmin_NewsService.php',
            'admin.news.template_registry' => 'getAdmin_News_TemplateRegistryService.php',
            'admin.shortcode' => 'getAdmin_ShortcodeService.php',
            'admin.shortcode.template_registry' => 'getAdmin_Shortcode_TemplateRegistryService.php',
            'admin.software' => 'getAdmin_SoftwareService.php',
            'admin.software.template_registry' => 'getAdmin_Software_TemplateRegistryService.php',
            'admin.softwareslist' => 'getAdmin_SoftwareslistService.php',
            'admin.softwareslist.template_registry' => 'getAdmin_Softwareslist_TemplateRegistryService.php',
            'admin.user' => 'getAdmin_UserService.php',
            'admin.user.template_registry' => 'getAdmin_User_TemplateRegistryService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService.php',
            'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'error_controller' => 'getErrorControllerService.php',
            'filesystem' => 'getFilesystemService.php',
            'fm_elfinder.loader' => 'getFmElfinder_LoaderService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService.php',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService.php',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService.php',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService.php',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService.php',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService.php',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService.php',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService.php',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService.php',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService.php',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService.php',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService.php',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService.php',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService.php',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService.php',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService.php',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService.php',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService.php',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService.php',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService.php',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService.php',
            'sonata.core.form.type.array_legacy' => 'getSonata_Core_Form_Type_ArrayLegacyService.php',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService.php',
            'sonata.core.form.type.boolean_legacy' => 'getSonata_Core_Form_Type_BooleanLegacyService.php',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService.php',
            'sonata.core.form.type.collection_legacy' => 'getSonata_Core_Form_Type_CollectionLegacyService.php',
            'sonata.core.form.type.color_legacy' => 'getSonata_Core_Form_Type_ColorLegacyService.php',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService.php',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService.php',
            'sonata.core.form.type.date_picker_legacy' => 'getSonata_Core_Form_Type_DatePickerLegacyService.php',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService.php',
            'sonata.core.form.type.date_range_legacy' => 'getSonata_Core_Form_Type_DateRangeLegacyService.php',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService.php',
            'sonata.core.form.type.date_range_picker_legacy' => 'getSonata_Core_Form_Type_DateRangePickerLegacyService.php',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService.php',
            'sonata.core.form.type.datetime_picker_legacy' => 'getSonata_Core_Form_Type_DatetimePickerLegacyService.php',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService.php',
            'sonata.core.form.type.datetime_range_legacy' => 'getSonata_Core_Form_Type_DatetimeRangeLegacyService.php',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService.php',
            'sonata.core.form.type.datetime_range_picker_legacy' => 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService.php',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService.php',
            'sonata.core.form.type.equal_legacy' => 'getSonata_Core_Form_Type_EqualLegacyService.php',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService.php',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
            include_once \dirname(__DIR__, 4).'/src/Repository/BonusRepository.php';
            include_once \dirname(__DIR__, 4).'/src/Repository/CasinoRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ApcuTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ApcuAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Profiler/DataCollector/BlockDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sluggable/SluggableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/AbstractTrackingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/SoftDeleteable/SoftDeleteableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'/src/Twig/AppExtension.php';
            include_once \dirname(__DIR__, 4).'/src/Utils/ShortCodeProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/DebugExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/GlobalsInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FormTypeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Twig/Extension/DeprecatedTextExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Twig/Extension/StatusExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTemplateExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Twig/Extension/BlockExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/TemplateRegistryExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRendererInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Twig/CKEditorExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRenderer.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Builder/JsonBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Twig/Extension/FMElfinderExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/Twig/EntryFilesTwigExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'/src/Utils/BonusImportance.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Twig/GlobalVariables.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockContextManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockContextManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockLoaderChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Loader/ServiceLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockRendererInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockRenderer.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Strategy/StrategyManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/HelperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/Helper.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Templating/Helper/BlockHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/MatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Matcher/Matcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/ChainProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/Extension/SonataAdminExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/Pool.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Twig/GlobalVariables.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/TemplateRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\ApcuAdapter('b5pn2uahkx', 0, $this->getParameter('container.build_id'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ksJCVWzV4h', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();

        $c = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $e = new \Gedmo\Sluggable\SluggableListener();

        $f = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $e->setAnnotationReader($f);
        $g = new \Gedmo\Timestampable\TimestampableListener();
        $g->setAnnotationReader($f);
        $h = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $h->setAnnotationReader($f);

        $d->addEventSubscriber($e);
        $d->addEventSubscriber($g);
        $d->addEventSubscriber($h);
        $d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => []], $a, $d, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        $this->services['doctrine.orm.default_entity_listener_resolver'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\EntityListener\\ArticleCategoryListener' => ['privates', 'App\\EntityListener\\ArticleCategoryListener', 'getArticleCategoryListenerService.php', true],
            'App\\EntityListener\\ArticleListener' => ['privates', 'App\\EntityListener\\ArticleListener', 'getArticleListenerService.php', true],
            'App\\EntityListener\\BankingListener' => ['privates', 'App\\EntityListener\\BankingListener', 'getBankingListenerService.php', true],
            'App\\EntityListener\\BonusListener' => ['privates', 'App\\EntityListener\\BonusListener', 'getBonusListenerService.php', true],
            'App\\EntityListener\\BonusTypeListener' => ['privates', 'App\\EntityListener\\BonusTypeListener', 'getBonusTypeListenerService.php', true],
            'App\\EntityListener\\CasinoListener' => ['privates', 'App\\EntityListener\\CasinoListener', 'getCasinoListenerService.php', true],
            'App\\EntityListener\\CountryListListener' => ['privates', 'App\\EntityListener\\CountryListListener', 'getCountryListListenerService.php', true],
            'App\\EntityListener\\CountryListener' => ['privates', 'App\\EntityListener\\CountryListener', 'getCountryListenerService.php', true],
            'App\\EntityListener\\CurrencyListener' => ['privates', 'App\\EntityListener\\CurrencyListener', 'getCurrencyListenerService.php', true],
            'App\\EntityListener\\GamesListListener' => ['privates', 'App\\EntityListener\\GamesListListener', 'getGamesListListenerService.php', true],
            'App\\EntityListener\\LanguageListener' => ['privates', 'App\\EntityListener\\LanguageListener', 'getLanguageListenerService.php', true],
            'App\\EntityListener\\NewsListener' => ['privates', 'App\\EntityListener\\NewsListener', 'getNewsListenerService.php', true],
            'App\\EntityListener\\ScreenshotListener' => ['privates', 'App\\EntityListener\\ScreenshotListener', 'getScreenshotListenerService.php', true],
            'App\\EntityListener\\SoftwareListener' => ['privates', 'App\\EntityListener\\SoftwareListener', 'getSoftwareListenerService.php', true],
            'App\\EntityListener\\SoftwaresListListener' => ['privates', 'App\\EntityListener\\SoftwaresListListener', 'getSoftwaresListListenerService.php', true],
            'App\\EntityListener\\UserListener' => ['privates', 'App\\EntityListener\\UserListener', 'getUserListenerService.php', true],
        ], [
            'App\\EntityListener\\ArticleCategoryListener' => '?',
            'App\\EntityListener\\ArticleListener' => '?',
            'App\\EntityListener\\BankingListener' => '?',
            'App\\EntityListener\\BonusListener' => '?',
            'App\\EntityListener\\BonusTypeListener' => '?',
            'App\\EntityListener\\CasinoListener' => '?',
            'App\\EntityListener\\CountryListListener' => '?',
            'App\\EntityListener\\CountryListener' => '?',
            'App\\EntityListener\\CurrencyListener' => '?',
            'App\\EntityListener\\GamesListListener' => '?',
            'App\\EntityListener\\LanguageListener' => '?',
            'App\\EntityListener\\NewsListener' => '?',
            'App\\EntityListener\\ScreenshotListener' => '?',
            'App\\EntityListener\\SoftwareListener' => '?',
            'App\\EntityListener\\SoftwaresListListener' => '?',
            'App\\EntityListener\\UserListener' => '?',
        ]));

        $instance->registerService('App\\EntityListener\\ArticleCategoryListener', 'App\\EntityListener\\ArticleCategoryListener');
        $instance->registerService('App\\EntityListener\\ArticleCategoryListener', 'App\\EntityListener\\ArticleCategoryListener');
        $instance->registerService('App\\EntityListener\\ArticleListener', 'App\\EntityListener\\ArticleListener');
        $instance->registerService('App\\EntityListener\\ArticleListener', 'App\\EntityListener\\ArticleListener');
        $instance->registerService('App\\EntityListener\\BankingListener', 'App\\EntityListener\\BankingListener');
        $instance->registerService('App\\EntityListener\\BonusListener', 'App\\EntityListener\\BonusListener');
        $instance->registerService('App\\EntityListener\\BonusTypeListener', 'App\\EntityListener\\BonusTypeListener');
        $instance->registerService('App\\EntityListener\\BonusTypeListener', 'App\\EntityListener\\BonusTypeListener');
        $instance->registerService('App\\EntityListener\\CasinoListener', 'App\\EntityListener\\CasinoListener');
        $instance->registerService('App\\EntityListener\\CasinoListener', 'App\\EntityListener\\CasinoListener');
        $instance->registerService('App\\EntityListener\\CountryListListener', 'App\\EntityListener\\CountryListListener');
        $instance->registerService('App\\EntityListener\\CountryListener', 'App\\EntityListener\\CountryListener');
        $instance->registerService('App\\EntityListener\\CurrencyListener', 'App\\EntityListener\\CurrencyListener');
        $instance->registerService('App\\EntityListener\\GamesListListener', 'App\\EntityListener\\GamesListListener');
        $instance->registerService('App\\EntityListener\\LanguageListener', 'App\\EntityListener\\LanguageListener');
        $instance->registerService('App\\EntityListener\\NewsListener', 'App\\EntityListener\\NewsListener');
        $instance->registerService('App\\EntityListener\\NewsListener', 'App\\EntityListener\\NewsListener');
        $instance->registerService('App\\EntityListener\\ScreenshotListener', 'App\\EntityListener\\ScreenshotListener');
        $instance->registerService('App\\EntityListener\\SoftwareListener', 'App\\EntityListener\\SoftwareListener');
        $instance->registerService('App\\EntityListener\\SoftwaresListListener', 'App\\EntityListener\\SoftwaresListListener');
        $instance->registerService('App\\EntityListener\\UserListener', 'App\\EntityListener\\UserListener');
        $instance->registerService('App\\EntityListener\\UserListener', 'App\\EntityListener\\UserListener');
        $instance->registerService('App\\EntityListener\\UserListener', 'App\\EntityListener\\UserListener');

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity')]);

        $b->addDriver($c, 'App\\Entity');
        $b->addDriver($c, 'Gedmo\\Sluggable\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'GedmoSluggable' => 'Gedmo\\Sluggable\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(($this->services['doctrine.orm.default_entity_listener_resolver'] ?? $this->getDoctrine_Orm_DefaultEntityListenerResolverService()));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\ArticleCategoryRepository' => ['privates', 'App\\Repository\\ArticleCategoryRepository', 'getArticleCategoryRepositoryService.php', true],
            'App\\Repository\\ArticleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService.php', true],
            'App\\Repository\\AuthorRepository' => ['privates', 'App\\Repository\\AuthorRepository', 'getAuthorRepositoryService.php', true],
            'App\\Repository\\BankingRepository' => ['privates', 'App\\Repository\\BankingRepository', 'getBankingRepositoryService.php', true],
            'App\\Repository\\BonusLikesRepository' => ['privates', 'App\\Repository\\BonusLikesRepository', 'getBonusLikesRepositoryService.php', true],
            'App\\Repository\\BonusRepository' => ['privates', 'App\\Repository\\BonusRepository', 'getBonusRepositoryService', false],
            'App\\Repository\\BonusTypeRepository' => ['privates', 'App\\Repository\\BonusTypeRepository', 'getBonusTypeRepositoryService.php', true],
            'App\\Repository\\BonusValueRepository' => ['privates', 'App\\Repository\\BonusValueRepository', 'getBonusValueRepositoryService.php', true],
            'App\\Repository\\CasinoAndBonusLikesAndPostsRepository' => ['privates', 'App\\Repository\\CasinoAndBonusLikesAndPostsRepository', 'getCasinoAndBonusLikesAndPostsRepositoryService.php', true],
            'App\\Repository\\CasinoBankingRepository' => ['privates', 'App\\Repository\\CasinoBankingRepository', 'getCasinoBankingRepositoryService.php', true],
            'App\\Repository\\CasinoDetailsRepository' => ['privates', 'App\\Repository\\CasinoDetailsRepository', 'getCasinoDetailsRepositoryService.php', true],
            'App\\Repository\\CasinoLikesRepository' => ['privates', 'App\\Repository\\CasinoLikesRepository', 'getCasinoLikesRepositoryService.php', true],
            'App\\Repository\\CasinoRepository' => ['privates', 'App\\Repository\\CasinoRepository', 'getCasinoRepositoryService', false],
            'App\\Repository\\ContactUsRepository' => ['privates', 'App\\Repository\\ContactUsRepository', 'getContactUsRepositoryService.php', true],
            'App\\Repository\\ContinentRepository' => ['privates', 'App\\Repository\\ContinentRepository', 'getContinentRepositoryService.php', true],
            'App\\Repository\\CountryGroupsRepository' => ['privates', 'App\\Repository\\CountryGroupsRepository', 'getCountryGroupsRepositoryService.php', true],
            'App\\Repository\\CountryListRepository' => ['privates', 'App\\Repository\\CountryListRepository', 'getCountryListRepositoryService.php', true],
            'App\\Repository\\CountryRepository' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService.php', true],
            'App\\Repository\\CurrenciesRepository' => ['privates', 'App\\Repository\\CurrenciesRepository', 'getCurrenciesRepositoryService.php', true],
            'App\\Repository\\CurrencyRepository' => ['privates', 'App\\Repository\\CurrencyRepository', 'getCurrencyRepositoryService.php', true],
            'App\\Repository\\CustomBonusRepository' => ['privates', 'App\\Repository\\CustomBonusRepository', 'getCustomBonusRepositoryService.php', true],
            'App\\Repository\\FiltersRepository' => ['privates', 'App\\Repository\\FiltersRepository', 'getFiltersRepositoryService.php', true],
            'App\\Repository\\GamesListRepository' => ['privates', 'App\\Repository\\GamesListRepository', 'getGamesListRepositoryService.php', true],
            'App\\Repository\\LanguageRepository' => ['privates', 'App\\Repository\\LanguageRepository', 'getLanguageRepositoryService.php', true],
            'App\\Repository\\LikeAndPostTypeRepository' => ['privates', 'App\\Repository\\LikeAndPostTypeRepository', 'getLikeAndPostTypeRepositoryService.php', true],
            'App\\Repository\\LikesAndPostsRepository' => ['privates', 'App\\Repository\\LikesAndPostsRepository', 'getLikesAndPostsRepositoryService.php', true],
            'App\\Repository\\MainPageRepository' => ['privates', 'App\\Repository\\MainPageRepository', 'getMainPageRepositoryService.php', true],
            'App\\Repository\\NewsRepository' => ['privates', 'App\\Repository\\NewsRepository', 'getNewsRepositoryService.php', true],
            'App\\Repository\\NoDepositBonusCodesRepository' => ['privates', 'App\\Repository\\NoDepositBonusCodesRepository', 'getNoDepositBonusCodesRepositoryService.php', true],
            'App\\Repository\\NoDepositBonusMailsRepository' => ['privates', 'App\\Repository\\NoDepositBonusMailsRepository', 'getNoDepositBonusMailsRepositoryService.php', true],
            'App\\Repository\\PostRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService.php', true],
            'App\\Repository\\RegionRepository' => ['privates', 'App\\Repository\\RegionRepository', 'getRegionRepositoryService.php', true],
            'App\\Repository\\RegionsRepository' => ['privates', 'App\\Repository\\RegionsRepository', 'getRegionsRepositoryService.php', true],
            'App\\Repository\\ReplyRepository' => ['privates', 'App\\Repository\\ReplyRepository', 'getReplyRepositoryService.php', true],
            'App\\Repository\\ScreenshotRepository' => ['privates', 'App\\Repository\\ScreenshotRepository', 'getScreenshotRepositoryService.php', true],
            'App\\Repository\\ScreenshotsRepository' => ['privates', 'App\\Repository\\ScreenshotsRepository', 'getScreenshotsRepositoryService.php', true],
            'App\\Repository\\ShortCodeRepository' => ['privates', 'App\\Repository\\ShortCodeRepository', 'getShortCodeRepositoryService.php', true],
            'App\\Repository\\SiteVisitsRepository' => ['privates', 'App\\Repository\\SiteVisitsRepository', 'getSiteVisitsRepositoryService.php', true],
            'App\\Repository\\SoftwareRepository' => ['privates', 'App\\Repository\\SoftwareRepository', 'getSoftwareRepositoryService.php', true],
            'App\\Repository\\SoftwaresListRepository' => ['privates', 'App\\Repository\\SoftwaresListRepository', 'getSoftwaresListRepositoryService.php', true],
            'App\\Repository\\SubscriptionRepository' => ['privates', 'App\\Repository\\SubscriptionRepository', 'getSubscriptionRepositoryService.php', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
            'App\\Repository\\UserToUserLikeRepository' => ['privates', 'App\\Repository\\UserToUserLikeRepository', 'getUserToUserLikeRepositoryService.php', true],
            'App\\Repository\\UserToUserPostRepository' => ['privates', 'App\\Repository\\UserToUserPostRepository', 'getUserToUserPostRepositoryService.php', true],
        ], [
            'App\\Repository\\ArticleCategoryRepository' => '?',
            'App\\Repository\\ArticleRepository' => '?',
            'App\\Repository\\AuthorRepository' => '?',
            'App\\Repository\\BankingRepository' => '?',
            'App\\Repository\\BonusLikesRepository' => '?',
            'App\\Repository\\BonusRepository' => '?',
            'App\\Repository\\BonusTypeRepository' => '?',
            'App\\Repository\\BonusValueRepository' => '?',
            'App\\Repository\\CasinoAndBonusLikesAndPostsRepository' => '?',
            'App\\Repository\\CasinoBankingRepository' => '?',
            'App\\Repository\\CasinoDetailsRepository' => '?',
            'App\\Repository\\CasinoLikesRepository' => '?',
            'App\\Repository\\CasinoRepository' => '?',
            'App\\Repository\\ContactUsRepository' => '?',
            'App\\Repository\\ContinentRepository' => '?',
            'App\\Repository\\CountryGroupsRepository' => '?',
            'App\\Repository\\CountryListRepository' => '?',
            'App\\Repository\\CountryRepository' => '?',
            'App\\Repository\\CurrenciesRepository' => '?',
            'App\\Repository\\CurrencyRepository' => '?',
            'App\\Repository\\CustomBonusRepository' => '?',
            'App\\Repository\\FiltersRepository' => '?',
            'App\\Repository\\GamesListRepository' => '?',
            'App\\Repository\\LanguageRepository' => '?',
            'App\\Repository\\LikeAndPostTypeRepository' => '?',
            'App\\Repository\\LikesAndPostsRepository' => '?',
            'App\\Repository\\MainPageRepository' => '?',
            'App\\Repository\\NewsRepository' => '?',
            'App\\Repository\\NoDepositBonusCodesRepository' => '?',
            'App\\Repository\\NoDepositBonusMailsRepository' => '?',
            'App\\Repository\\PostRepository' => '?',
            'App\\Repository\\RegionRepository' => '?',
            'App\\Repository\\RegionsRepository' => '?',
            'App\\Repository\\ReplyRepository' => '?',
            'App\\Repository\\ScreenshotRepository' => '?',
            'App\\Repository\\ScreenshotsRepository' => '?',
            'App\\Repository\\ShortCodeRepository' => '?',
            'App\\Repository\\SiteVisitsRepository' => '?',
            'App\\Repository\\SoftwareRepository' => '?',
            'App\\Repository\\SoftwaresListRepository' => '?',
            'App\\Repository\\SubscriptionRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
            'App\\Repository\\UserToUserLikeRepository' => '?',
            'App\\Repository\\UserToUserPostRepository' => '?',
        ])));
        $a->addCustomHydrationMode('CasinoHydrator', 'App\\Hydrator\\CasinoHydrator');
        $a->addCustomHydrationMode('SoftwareHydrator', 'App\\Hydrator\\SoftwareHydrator');
        $a->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([0 => 'softdeleteable'], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ApcuCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ApcuCache();

        $instance->setNamespace('sf_orm_default_1d6e820038a1e9ed211a8b2d64310dca2d277f78bf954563a4e70c784694c128');

        return $instance;
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['App\\EventListener\\ArticleRedirectListener'] ?? $this->load('getArticleRedirectListenerService.php'));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['App\\EventListener\\LoginListener'] ?? $this->load('getLoginListenerService.php'));
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['App\\EventListener\\NotAuthorizedListener'] ?? ($this->privates['App\\EventListener\\NotAuthorizedListener'] = new \App\EventListener\NotAuthorizedListener()));
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('new.no.deposit.bonus', [0 => function () {
            return ($this->privates['App\\EventListener\\NewNoDepositBonusEventSubscriber'] ?? $this->load('getNewNoDepositBonusEventSubscriberService.php'));
        }, 1 => 'prepareMails'], 0);
        $instance->addListener('contact_message.added', [0 => function () {
            return ($this->privates['App\\EventSubscribers\\ContactUsSubscriber'] ?? $this->load('getContactUsSubscriberService.php'));
        }, 1 => 'sendContactMail'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->load('getDebug_ArgumentResolver_NotTaggedControllerService.php'));
        }, 8)), $a));
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->load('getKnpMenu_Voter_RouterService.php'));
            yield 1 => ($this->services['sonata.admin.menu.matcher.voter.admin'] ?? $this->load('getSonata_Admin_Menu_Matcher_Voter_AdminService.php'));
            yield 2 => ($this->services['sonata.admin.menu.matcher.voter.active'] ?? ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter()));
        }, 3));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.messenger.restart_workers_signal', ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('cache.webpack_encore', ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService()));
        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $e->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService()), $this->parameters['sonata.block.container.types']));
        $instance->add($f);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'NDC ADMIN', 'bundles/sonataadmin/logo_title.png', ['html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js', 22 => 'assets/sonataadmin/admin.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css', 15 => 'assets/sonataadmin/admin.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $instance->setTemplateRegistry(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()));
        $instance->setAdminServiceIds([0 => 'admin.casino', 1 => 'admin.mainpage', 2 => 'admin.article', 3 => 'admin.user', 4 => 'admin.news', 5 => 'admin.articlecategory', 6 => 'admin.countrylist', 7 => 'admin.softwareslist', 8 => 'admin.gameslist', 9 => 'admin.author', 10 => 'admin.bonustype', 11 => 'admin.bonusvalue', 12 => 'admin.software', 13 => 'admin.country', 14 => 'admin.shortcode', 15 => 'admin.currency', 16 => 'admin.bonus', 17 => 'admin.contactus']);
        $instance->setAdminGroups($this->parameters['sonata.admin.configuration.dashboard_groups']);
        $instance->setAdminClasses(['App\\Entity\\Casino' => [0 => 'admin.casino'], 'App\\Entity\\MainPage' => [0 => 'admin.mainpage'], 'App\\Entity\\Article' => [0 => 'admin.article'], 'App\\Entity\\User' => [0 => 'admin.user'], 'App\\Entity\\News' => [0 => 'admin.news'], 'App\\Entity\\ArticleCategory' => [0 => 'admin.articlecategory'], 'App\\Entity\\CountryList' => [0 => 'admin.countrylist'], 'App\\Entity\\SoftwaresList' => [0 => 'admin.softwareslist'], 'App\\Entity\\GamesList' => [0 => 'admin.gameslist'], 'App\\Entity\\Author' => [0 => 'admin.author'], 'App\\Entity\\BonusType' => [0 => 'admin.bonustype'], 'App\\Entity\\BonusValue' => [0 => 'admin.bonusvalue'], 'App\\Entity\\Software' => [0 => 'admin.software'], 'App\\Entity\\Country' => [0 => 'admin.country'], 'App\\Entity\\ShortCode' => [0 => 'admin.shortcode'], 'App\\Entity\\Currency' => [0 => 'admin.currency'], 'App\\Entity\\Bonus' => [0 => 'admin.bonus'], 'App\\Entity\\ContactUs' => [0 => 'admin.contactus']]);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['translator'] ?? $this->getTranslatorService()), $this, ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), 'data:image/png;base64,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');
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => new \Sonata\BlockBundle\Block\Loader\ServiceLoader($this->parameters['sonata_blocks.block_types'])]), ($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', []);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', []);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', []);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        $a = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);
        $a->setDefaultFilter('debug_only');
        $a->setDefaultRenderer('throw');

        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $a, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), true);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), 'SonataDatagrid');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/views'), '!SonataDatagrid');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views'), 'SonataCore');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views'), '!SonataCore');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/views'), 'SonataBlock');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/views'), '!SonataBlock');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/views'), 'SonataAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/views'), '!SonataAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), 'SonataDoctrineORMAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views'), '!SonataDoctrineORMAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), 'FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), '!FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Resources/views'), 'FMElfinder');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/Resources/views'), '!FMElfinder');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService());
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = ($this->services['router'] ?? $this->getRouterService());
        $g = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $h = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $h->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $e]);
        $i = new \Knp\Menu\Util\MenuManipulator();
        $j = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $k = new \Symfony\Bridge\Twig\AppVariable();
        $k->setEnvironment('dev');
        $k->setDebug(true);
        if ($this->has('security.token_storage')) {
            $k->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $k->setRequestStack($g);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($g, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \App\Twig\AppExtension(new \App\Utils\ShortCodeProcessor(($this->privates['App\\Repository\\BonusRepository'] ?? $this->getBonusRepositoryService()), ($this->privates['App\\Repository\\CasinoRepository'] ?? $this->getCasinoRepositoryService()), ($this->services['cache.app'] ?? $this->getCache_AppService()))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($h));
        $instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? ($this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension())));
        $instance->addExtension(new \Sonata\Twig\Extension\FormTypeExtension('standard'));
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
        $instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\StatusExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\DeprecatedTemplateExtension());
        $instance->addExtension(new \Sonata\Twig\Extension\TemplateExtension(true, $c, ($this->services['sonata.core.model.adapter.chain'] ?? $this->load('getSonata_Core_Model_Adapter_ChainService.php'))));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(($this->privates['sonata.block.templating.helper'] ?? $this->getSonata_Block_Templating_HelperService())));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService.php', true],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService.php', true],
        ], [
            'list' => '?',
            'twig' => '?',
        ]), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->getKnpMenu_MenuProvider_ChainService()), $i, $j), $j, $i));
        $instance->addExtension(($this->services['sonata.admin.twig.extension'] ?? $this->getSonata_Admin_Twig_ExtensionService()));
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(($this->services['sonata.admin.global_template_registry'] ?? $this->getSonata_Admin_GlobalTemplateRegistryService()), $this));
        $instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())), $f, $d, $g, (($this->has("twig")) ? ($this->get("twig")) : ($this->get("templating"))), (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)))));
        $instance->addExtension(new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($instance));
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService.php', true],
            'webpack_encore.tag_renderer' => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService.php', true],
        ], [
            'webpack_encore.entrypoint_lookup_collection' => '?',
            'webpack_encore.tag_renderer' => '?',
        ])));
        $instance->addGlobal('app', $k);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => ['privates', 'sonata.core.flashmessage.twig.runtime', 'getSonata_Core_Flashmessage_Twig_RuntimeService.php', true],
            'Sonata\\Twig\\Extension\\StatusRuntime' => ['privates', 'sonata.core.twig.status_runtime', 'getSonata_Core_Twig_StatusRuntimeService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'Sonata\\Twig\\Extension\\FlashMessageRuntime' => '?',
            'Sonata\\Twig\\Extension\\StatusRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('bonus_importance', new \App\Utils\BonusImportance());
        $instance->addGlobal('new_google_client_id', $this->getEnv('NEW_GOOGLE_CLIENT_ID'));
        $instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']));
        $instance->addGlobal('sonata_admin', ($this->services['sonata.admin.twig.global'] ?? $this->getSonata_Admin_Twig_GlobalService()));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private 'App\Repository\BonusRepository' shared autowired service.
     *
     * @return \App\Repository\BonusRepository
     */
    protected function getBonusRepositoryService()
    {
        return $this->privates['App\\Repository\\BonusRepository'] = new \App\Repository\BonusRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'App\Repository\CasinoRepository' shared autowired service.
     *
     * @return \App\Repository\CasinoRepository
     */
    protected function getCasinoRepositoryService()
    {
        return $this->privates['App\\Repository\\CasinoRepository'] = new \App\Repository\CasinoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+R3oufHPZ-', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        $a = new \Symfony\Component\Cache\Adapter\ApcuAdapter('9KHrct8CFk', 0, $this->getParameter('container.build_id'));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->privates['cache.messenger.restart_workers_signal'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Di2CLCoi1B', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('U5HlZ9CSQ3', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('4VLBSuiJCP', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iL6zRxPJ9S', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.webpack_encore' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_WebpackEncoreService()
    {
        return $this->privates['cache.webpack_encore'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iVHoo0JL9N', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'knp_menu.menu_provider.chain' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProvider_ChainService()
    {
        return $this->privates['knp_menu.menu_provider.chain'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->load('getKnpMenu_MenuProvider_LazyService.php'));
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php'));
            yield 2 => ($this->privates['sonata.admin.menu.group_provider'] ?? $this->load('getSonata_Admin_Menu_GroupProviderService.php'));
        }, 3));
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /**
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->privates['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->getSonata_Block_ManagerService()), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->getSonata_Block_Renderer_DefaultService()), ($this->services['sonata.block.context_manager.default'] ?? $this->getSonata_Block_ContextManager_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.bg.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.bg.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ca.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ca.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ca.xliff')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.cs.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.cs.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.de.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.de.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.de.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.en.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.en.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.en.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.es.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.es.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.eu.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.eu.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fa.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fa.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fi.xliff')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.fr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.fr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.fr.xliff'), 7 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hr.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.hr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hr.xliff')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.hu.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.hu.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.it.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.it.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ja.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ja.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lb.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.lb.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lb.xliff')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.lt.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.lt.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.lv.xliff')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.nl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.nl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt.xliff'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pt.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt.xliff')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.pt_BR.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ro.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ro.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.ru.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.ru.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sk.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.sk.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sk.xliff')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.sl.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.sl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sl.xliff')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.uk.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.uk.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations/SonataDatagridBundle.zh_CN.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_CN.xliff')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'sv_SE' => [0 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations/SonataAdminBundle.zh_HK.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Resources/translations'), 7 => (\dirname(__DIR__, 4).'/translations'), 8 => (\dirname(__DIR__, 4).'/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 10 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/translations'), 12 => (\dirname(__DIR__, 4).'/src/Resources/MakerBundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-cache-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineCacheBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineMigrationsBundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/WebServerBundle/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 22 => (\dirname(__DIR__, 4).'/src/Resources/SensioFrameworkExtraBundle/translations'), 23 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 24 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 25 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 26 => (\dirname(__DIR__, 4).'/src/Resources/MonologBundle/translations'), 27 => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/translations'), 28 => (\dirname(__DIR__, 4).'/src/Resources/WebProfilerBundle/translations'), 29 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 30 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 31 => (\dirname(__DIR__, 4).'/src/Resources/SonataDatagridBundle/translations'), 32 => (\dirname(__DIR__, 4).'/src/Resources/SonataCoreBundle/translations'), 33 => (\dirname(__DIR__, 4).'/src/Resources/SonataBlockBundle/translations'), 34 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/translations'), 35 => (\dirname(__DIR__, 4).'/src/Resources/KnpMenuBundle/translations'), 36 => (\dirname(__DIR__, 4).'/src/Resources/SonataAdminBundle/translations'), 37 => (\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/translations'), 38 => (\dirname(__DIR__, 4).'/src/Resources/SonataDoctrineORMAdminBundle/translations'), 39 => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle/translations'), 40 => (\dirname(__DIR__, 4).'/src/Resources/StofDoctrineExtensionsBundle/translations'), 41 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations'), 42 => (\dirname(__DIR__, 4).'/src/Resources/SwiftmailerBundle/translations'), 43 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src/translations'), 44 => (\dirname(__DIR__, 4).'/src/Resources/FOSCKEditorBundle/translations'), 45 => (\dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src/translations'), 46 => (\dirname(__DIR__, 4).'/src/Resources/FMElfinderBundle/translations'), 47 => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/translations'), 48 => (\dirname(__DIR__, 4).'/src/Resources/WebpackEncoreBundle/translations'), 49 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/sonata-project/datagrid-bundle/src/Resources/translations', 4 => 'vendor/sonata-project/core-bundle/src/CoreBundle/Resources/translations', 5 => 'vendor/sonata-project/block-bundle/src/Resources/translations', 6 => 'vendor/sonata-project/admin-bundle/src/Resources/translations', 7 => 'translations', 8 => 'translations', 9 => 'vendor/symfony/framework-bundle/translations', 10 => 'src/Resources/FrameworkBundle/translations', 11 => 'vendor/symfony/maker-bundle/src/translations', 12 => 'src/Resources/MakerBundle/translations', 13 => 'vendor/doctrine/doctrine-cache-bundle/translations', 14 => 'src/Resources/DoctrineCacheBundle/translations', 15 => 'vendor/doctrine/doctrine-bundle/translations', 16 => 'src/Resources/DoctrineBundle/translations', 17 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 18 => 'src/Resources/DoctrineMigrationsBundle/translations', 19 => 'vendor/symfony/web-server-bundle/translations', 20 => 'src/Resources/WebServerBundle/translations', 21 => 'vendor/sensio/framework-extra-bundle/src/translations', 22 => 'src/Resources/SensioFrameworkExtraBundle/translations', 23 => 'vendor/symfony/twig-bundle/translations', 24 => 'src/Resources/TwigBundle/translations', 25 => 'vendor/symfony/monolog-bundle/translations', 26 => 'src/Resources/MonologBundle/translations', 27 => 'vendor/symfony/web-profiler-bundle/translations', 28 => 'src/Resources/WebProfilerBundle/translations', 29 => 'vendor/symfony/security-bundle/translations', 30 => 'src/Resources/SecurityBundle/translations', 31 => 'src/Resources/SonataDatagridBundle/translations', 32 => 'src/Resources/SonataCoreBundle/translations', 33 => 'src/Resources/SonataBlockBundle/translations', 34 => 'vendor/knplabs/knp-menu-bundle/src/translations', 35 => 'src/Resources/KnpMenuBundle/translations', 36 => 'src/Resources/SonataAdminBundle/translations', 37 => 'vendor/sonata-project/doctrine-orm-admin-bundle/src/translations', 38 => 'src/Resources/SonataDoctrineORMAdminBundle/translations', 39 => 'vendor/stof/doctrine-extensions-bundle/translations', 40 => 'src/Resources/StofDoctrineExtensionsBundle/translations', 41 => 'vendor/symfony/swiftmailer-bundle/translations', 42 => 'src/Resources/SwiftmailerBundle/translations', 43 => 'vendor/friendsofsymfony/ckeditor-bundle/src/translations', 44 => 'src/Resources/FOSCKEditorBundle/translations', 45 => 'vendor/helios-ag/fm-elfinder-bundle/src/translations', 46 => 'src/Resources/FMElfinderBundle/translations', 47 => 'vendor/symfony/webpack-encore-bundle/src/translations', 48 => 'src/Resources/WebpackEncoreBundle/translations', 49 => 'src/Resources/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales([0 => 'en', 1 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);

        return $instance;
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService.php', true],
            'Sonata\\Form\\Validator\\InlineValidator' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService.php', true],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'sonata.admin.validator.inline' => ['services', 'sonata.admin.validator.inline', 'getSonata_Admin_Validator_InlineService.php', true],
            'sonata.core.validator.inline' => ['privates', 'sonata.core.validator.inline', 'getSonata_Core_Validator_InlineService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ], [
            'Sonata\\CoreBundle\\Validator\\InlineValidator' => '?',
            'Sonata\\Form\\Validator\\InlineValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'sonata.admin.validator.inline' => '?',
            'sonata.core.validator.inline' => '?',
            'validator.expression' => '?',
        ]));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SonataDatagridBundle' => 'Sonata\\DatagridBundle\\SonataDatagridBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'WebpackEncoreBundle' => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'WebServerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SonataDatagridBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/datagrid-bundle/src'),
                    'namespace' => 'Sonata\\DatagridBundle',
                ],
                'SonataCoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataBlockBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'SonataAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
                'SonataDoctrineORMAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'FOSCKEditorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ],
                'FMElfinderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/helios-ag/fm-elfinder-bundle/src'),
                    'namespace' => 'FM\\ElfinderBundle',
                ],
                'WebpackEncoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => '@FMElfinder/Form/elfinder_widget.html.twig',
                1 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                2 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'sonata.core.flashmessage.manager.class' => 'Sonata\\Twig\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.search_result' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.text' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.container' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.empty' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.rss' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.menu' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.template' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.admin.block.stats' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.admin.block.admin_list',
                1 => 'sonata.admin.block.search_result',
                2 => 'sonata.block.service.text',
                3 => 'sonata.block.service.container',
                4 => 'sonata.block.service.empty',
                5 => 'sonata.block.service.rss',
                6 => 'sonata.block.service.menu',
                7 => 'sonata.block.service.template',
                8 => 'sonata.admin.block.stats',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.container' => 'sonata.cache.noop',
                    'sonata.block.service.empty' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                    'sonata.block.service.menu' => 'sonata.cache.noop',
                    'sonata.block.service.template' => 'sonata.cache.noop',
                    'sonata.admin.block.stats' => 'sonata.cache.noop',
                ],
            ],
            'sonata_blocks.default_contexts' => [

            ],
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'user_block' => '@SonataAdmin/Core/user_block.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'layout' => '@SonataAdmin/standard_layout.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [
                'app.admin.group.casino' => [
                    'label' => 'Casino',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.casino',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.articles' => [
                    'label' => 'Articles and News',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.article',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        1 => [
                            'admin' => 'admin.news',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        2 => [
                            'admin' => 'admin.articlecategory',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.bonuspages' => [
                    'label' => 'Bonuses Pages',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.countrylist',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        1 => [
                            'admin' => 'admin.softwareslist',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        2 => [
                            'admin' => 'admin.gameslist',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        3 => [
                            'admin' => 'admin.bonusvalue',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.user' => [
                    'label' => 'User',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.user',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.mainpages' => [
                    'label' => 'Main Pages',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.mainpage',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.author' => [
                    'label' => 'Author',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.author',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.bonuses' => [
                    'label' => 'Bonuses',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.bonus',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.bonustypes' => [
                    'label' => 'Bonus Types',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.bonustype',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
                'app.admin.group.other' => [
                    'label' => 'Other',
                    'label_catalogue' => 'App',
                    'items' => [
                        0 => [
                            'admin' => 'admin.shortcode',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        1 => [
                            'admin' => 'admin.currency',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        2 => [
                            'admin' => 'admin.country',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                        3 => [
                            'admin' => 'admin.contactus',
                            'label' => '',
                            'route' => '',
                            'route_params' => [

                            ],
                            'route_absolute' => false,
                            'roles' => [

                            ],
                        ],
                    ],
                    'icon' => '<i class="fa fa-folder"></i>',
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => [

                    ],
                    'roles' => [

                    ],
                ],
            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'roles' => [

                    ],
                    'settings' => [

                    ],
                    'class' => 'col-md-4',
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.mosaic_background' => 'data:image/png;base64,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',
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => NULL,
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [

            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => [
                'types' => [
                    'list' => [
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'integer' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataAdmin/CRUD/list_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ],
                    'show' => [
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'currency' => '@SonataAdmin/CRUD/show_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ],
                ],
                'form' => [
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ],
                'filter' => [
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ],
            ],
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => [
                'instances' => [
                    'default' => [
                        'include_assets' => true,
                        'relative_path' => true,
                        'connector' => [
                            'roots' => [
                                'uploads' => [
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads',
                                    'volume_id' => 0,
                                    'autoload' => false,
                                    'phash' => '',
                                    'trash_hash' => '',
                                    'locale' => '',
                                    'i18n_folder_name' => false,
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'security_voter' => '',
                                    'start_path' => '',
                                    'encoding' => 'UTF-8',
                                    'url' => '',
                                    'alias' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'fileMode' => 420,
                                    'upload_allow' => [
                                        0 => 'image',
                                    ],
                                    'upload_deny' => [
                                        0 => 'all',
                                    ],
                                    'upload_order' => [
                                        0 => 'deny',
                                        1 => 'allow',
                                    ],
                                    'upload_max_size' => 0,
                                    'defaults' => [
                                        'read' => true,
                                        'write' => true,
                                    ],
                                    'attributes' => [

                                    ],
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => [

                                    ],
                                    'tree_deep' => 0,
                                    'check_subfolders' => 1,
                                    'separator' => '/',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => [

                                    ],
                                    'archivers' => [
                                        'enabled' => false,
                                        'create' => [

                                        ],
                                        'extract' => [

                                        ],
                                    ],
                                    'flysystem' => [
                                        'enabled' => false,
                                        'filesystem' => '',
                                        'type' => '',
                                        'adapter_service' => '',
                                    ],
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => [

                                    ],
                                    'driver_options' => [

                                    ],
                                    'dropbox2_settings' => [
                                        'enabled' => false,
                                        'aliasFormat' => '%s@Dropbox',
                                        'path' => '/',
                                        'separator' => '/',
                                        'acceptedName' => '%s@Dropbox',
                                        'rootCssClass' => 'elfinder-navbar-root-dropbox',
                                        'getThumbSize' => 'medium',
                                    ],
                                    'box_settings' => [
                                        'enabled' => false,
                                        'root' => 'Box.com',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-box',
                                    ],
                                    'onedrive_settings' => [
                                        'enabled' => false,
                                        'root' => 'OneDrive.com',
                                        'OneDriveApiClient' => '',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-onedrive',
                                        'useApiThumbnail' => true,
                                    ],
                                    'ftp_settings' => [
                                        'enabled' => false,
                                    ],
                                    'mysql_settings' => [
                                        'enabled' => false,
                                        'port' => NULL,
                                        'socket' => NULL,
                                        'files_table' => 'elfinder_file',
                                        'tmbPath' => '',
                                        'tmpPath' => '',
                                        'rootCssClass' => 'elfinder-navbar-root-sql',
                                        'noSessionCache' => 'hasdirs',
                                    ],
                                ],
                            ],
                            'debug' => false,
                            'binds' => [

                            ],
                            'plugins' => [

                            ],
                        ],
                        'locale' => NULL,
                        'cors_support' => false,
                        'editor' => 'simple',
                        'editor_template' => NULL,
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'path_prefix' => '/',
                        'visible_mime_types' => [

                        ],
                    ],
                ],
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => 'assets',
                'loader' => 'fm_elfinder.loader.default',
            ],
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'sonata.block.data_collector' => [
                    0 => 'block',
                    1 => '@SonataBlock/Profiler/block.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'sonata.core.form.types' => [
                0 => 'App\\Form\\ContactUsType',
                1 => 'App\\Form\\NewsletterType',
                2 => 'App\\Form\\UserType',
                3 => 'App\\Form\\UserupdateType',
                4 => 'form.type.form',
                5 => 'form.type.choice',
                6 => 'form.type.file',
                7 => 'form.type.entity',
                8 => 'sonata.core.form.type.array_legacy',
                9 => 'sonata.core.form.type.boolean_legacy',
                10 => 'sonata.core.form.type.collection_legacy',
                11 => 'sonata.core.form.type.translatable_choice',
                12 => 'sonata.core.form.type.date_range_legacy',
                13 => 'sonata.core.form.type.datetime_range_legacy',
                14 => 'sonata.core.form.type.date_picker_legacy',
                15 => 'sonata.core.form.type.datetime_picker_legacy',
                16 => 'sonata.core.form.type.date_range_picker_legacy',
                17 => 'sonata.core.form.type.datetime_range_picker_legacy',
                18 => 'sonata.core.form.type.equal_legacy',
                19 => 'sonata.core.form.type.color_selector',
                20 => 'sonata.core.form.type.color_legacy',
                21 => 'sonata.core.form.type.array',
                22 => 'sonata.core.form.type.boolean',
                23 => 'sonata.core.form.type.collection',
                24 => 'sonata.core.form.type.date_range',
                25 => 'sonata.core.form.type.datetime_range',
                26 => 'sonata.core.form.type.date_picker',
                27 => 'sonata.core.form.type.datetime_picker',
                28 => 'sonata.core.form.type.date_range_picker',
                29 => 'sonata.core.form.type.datetime_range_picker',
                30 => 'sonata.core.form.type.equal',
                31 => 'sonata.block.form.type.block',
                32 => 'sonata.block.form.type.container_template',
                33 => 'sonata.admin.form.type.admin',
                34 => 'sonata.admin.form.type.model_choice',
                35 => 'sonata.admin.form.type.model_list',
                36 => 'sonata.admin.form.type.model_reference',
                37 => 'sonata.admin.form.type.model_hidden',
                38 => 'sonata.admin.form.type.model_autocomplete',
                39 => 'sonata.admin.form.type.collection',
                40 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                41 => 'sonata.admin.form.filter.type.number',
                42 => 'sonata.admin.form.filter.type.choice',
                43 => 'sonata.admin.form.filter.type.default',
                44 => 'sonata.admin.form.filter.type.date',
                45 => 'sonata.admin.form.filter.type.daterange',
                46 => 'sonata.admin.form.filter.type.datetime',
                47 => 'sonata.admin.form.filter.type.datetime_range',
                48 => 'fos_ck_editor.form.type',
                49 => 'fm_elfinder.form.type',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'sonata.admin.form.extension.field',
                9 => 'sonata.admin.form.extension.field.mopa',
                10 => 'sonata.admin.form.extension.choice',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
                5 => 'console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            ],
        ];
    }
}
