<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticleController::articles'], null, null, null, true, false, null]],
        '/morearticles' => [[['_route' => 'morearticles', '_controller' => 'App\\Controller\\ArticleController::moreArticles'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'news', '_controller' => 'App\\Controller\\ArticleController::news'], null, null, null, true, false, null]],
        '/morenews' => [[['_route' => 'more_news', '_controller' => 'App\\Controller\\ArticleController::moreNews'], null, null, null, false, false, null]],
        '/bonuses/game/classicblackjack' => [[['_route' => 'app_bonus_classicblackjack', '_controller' => 'App\\Controller\\BonusController::classicblackjack'], null, null, null, false, false, null]],
        '/bonusrendering' => [[['_route' => 'bonus_rendering', '_controller' => 'App\\Controller\\BonusController::bonusRendering'], null, null, null, false, false, null]],
        '/casinos' => [[['_route' => 'casinos', '_controller' => 'App\\Controller\\CasinoController::allCasinos'], null, null, null, true, false, null]],
        '/casino-review/191/Sloto\'Cash-Casino' => [[['_route' => 'app_casino_slotoredirection', '_controller' => 'App\\Controller\\CasinoController::slotoRedirection'], null, null, null, true, false, null]],
        '/morecasinos' => [[['_route' => 'morecasinos', '_controller' => 'App\\Controller\\CasinoController::morecasinos'], null, null, null, false, false, null]],
        '/sortedcasinos' => [[['_route' => 'sortedcasinos', '_controller' => 'App\\Controller\\CasinoController::sortedcasinos'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\NDCController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_ndc_adminredirection', '_controller' => 'App\\Controller\\NDCController::adminRedirection'], null, null, null, false, false, null]],
        '/liveactivities' => [[['_route' => 'getliveactivities', '_controller' => 'App\\Controller\\NDCController::liveactivities'], null, null, null, false, false, null]],
        '/moreliveactivities' => [[['_route' => 'moreliveactivities', '_controller' => 'App\\Controller\\NDCController::moreLiveActivities'], null, null, null, false, false, null]],
        '/moreliveactivitiesrewcas' => [[['_route' => 'moreliveactivities_for_casino_review', '_controller' => 'App\\Controller\\NDCController::moreLiveActivitiesForCasinoReview'], null, null, null, false, false, null]],
        '/usertouserlike' => [[['_route' => 'usertouserlike', '_controller' => 'App\\Controller\\NDCController::userToUserLike'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::post'], null, null, null, false, false, null]],
        '/adminremovepost' => [[['_route' => 'admin_remove_post', '_controller' => 'App\\Controller\\PostController::adminRemovePost'], null, null, null, false, false, null]],
        '/unlikepost' => [[['_route' => 'unlike', '_controller' => 'App\\Controller\\PostController::unlike'], null, null, null, false, false, null]],
        '/like' => [[['_route' => 'like', '_controller' => 'App\\Controller\\PostController::like'], null, null, null, false, false, null]],
        '/bonuslike' => [[['_route' => 'bonuslike', '_controller' => 'App\\Controller\\PostController::bonusLike'], null, null, null, false, false, null]],
        '/postadd' => [[['_route' => 'postadd', '_controller' => 'App\\Controller\\PostController::postadd'], null, null, null, false, false, null]],
        '/usercomment' => [[['_route' => 'usercomment', '_controller' => 'App\\Controller\\PostController::usercomment'], null, null, null, false, false, null]],
        '/commentadd' => [[['_route' => 'usercommentadd', '_controller' => 'App\\Controller\\PostController::usercommentadd'], null, null, null, false, false, null]],
        '/removeusercomment' => [[['_route' => 'app_post_removeusercomment', '_controller' => 'App\\Controller\\PostController::removeusercomment'], null, null, null, false, false, null]],
        '/userlikespost' => [[['_route' => 'app_post_userlikespost', '_controller' => 'App\\Controller\\PostController::userLikesPost'], null, null, null, false, false, null]],
        '/reply' => [[['_route' => 'reply', '_controller' => 'App\\Controller\\PostController::reply'], null, null, null, false, false, null]],
        '/removereply' => [[['_route' => 'removereply', '_controller' => 'App\\Controller\\PostController::removeReply'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/googlesignin' => [[['_route' => 'googlesignin', '_controller' => 'App\\Controller\\SecurityController::googleSignIn'], null, null, null, false, false, null]],
        '/facebooklogin' => [[['_route' => 'facebooklogin', '_controller' => 'App\\Controller\\SecurityController::facebooklogin'], null, null, null, false, false, null]],
        '/twitterlogin' => [[['_route' => 'twitterlogin', '_controller' => 'App\\Controller\\SecurityController::twitterlogin'], null, null, null, false, false, null]],
        '/accountconfirmation' => [[['_route' => 'accountconfirmation', '_controller' => 'App\\Controller\\SecurityController::accountConfirmation'], null, null, null, false, false, null]],
        '/bodyregister' => [[['_route' => 'testmail', '_controller' => 'App\\Controller\\SecurityController::mail'], null, null, null, false, false, null]],
        '/userinformationinitiate' => [[['_route' => 'userinformationinitiate', '_controller' => 'App\\Controller\\SecurityController::userInformationInitiate'], null, null, null, false, false, null]],
        '/updateuser' => [[['_route' => 'app_security_updateuser', '_controller' => 'App\\Controller\\SecurityController::updateuser'], null, null, null, false, false, null]],
        '/subscriptiononly' => [[['_route' => 'subscription only', '_controller' => 'App\\Controller\\SecurityController::subscriptionOnly'], null, null, null, false, false, null]],
        '/subscriptionconfirmation' => [[['_route' => 'subscription confirmation', '_controller' => 'App\\Controller\\SecurityController::subscriptionConfirmation'], null, null, null, false, false, null]],
        '/adminlogin' => [[['_route' => 'adminlogin', '_controller' => 'App\\Controller\\SecurityController::adminLogin'], null, null, null, false, false, null]],
        '/resetpasswordform' => [[['_route' => 'reset_password_form', '_controller' => 'App\\Controller\\SecurityController::resetPasswordForm'], null, null, null, false, false, null]],
        '/resetpassword' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], null, null, null, false, false, null]],
        '/resetpasswordconfirmation' => [[['_route' => 'reset_pasword_confirmation', '_controller' => 'App\\Controller\\SecurityController::resetPasswordConfirmation'], null, null, null, false, false, null]],
        '/resetpasswordfinal' => [[['_route' => 'reset_pasword_final', '_controller' => 'App\\Controller\\SecurityController::resetPasswordFinal'], null, null, null, false, false, null]],
        '/unsubscribe' => [[['_route' => 'unsubscribe_newsletter', '_controller' => 'App\\Controller\\SecurityController::unsubscribe'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\OtherPagesController::search'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\OtherPagesController::profile'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\OtherPagesController::contact'], null, null, null, true, false, null]],
        '/contactuscontent' => [[['_route' => 'contact us content', '_controller' => 'App\\Controller\\OtherPagesController::contactUsContent'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_controller' => 'App\\Controller\\OtherPagesController::siteMap'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/casino/list' => [[['_route' => 'admin_app_casino_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_list'], null, null, null, false, false, null]],
        '/admin/app/casino/create' => [[['_route' => 'admin_app_casino_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_create'], null, null, null, false, false, null]],
        '/admin/app/casino/batch' => [[['_route' => 'admin_app_casino_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_batch'], null, null, null, false, false, null]],
        '/admin/app/casino/export' => [[['_route' => 'admin_app_casino_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_export'], null, null, null, false, false, null]],
        '/admin/app/mainpage/list' => [[['_route' => 'admin_app_mainpage_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_list'], null, null, null, false, false, null]],
        '/admin/app/mainpage/create' => [[['_route' => 'admin_app_mainpage_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_create'], null, null, null, false, false, null]],
        '/admin/app/mainpage/batch' => [[['_route' => 'admin_app_mainpage_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_batch'], null, null, null, false, false, null]],
        '/admin/app/mainpage/export' => [[['_route' => 'admin_app_mainpage_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_export'], null, null, null, false, false, null]],
        '/admin/app/article/list' => [[['_route' => 'admin_app_article_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_list'], null, null, null, false, false, null]],
        '/admin/app/article/create' => [[['_route' => 'admin_app_article_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_create'], null, null, null, false, false, null]],
        '/admin/app/article/batch' => [[['_route' => 'admin_app_article_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_batch'], null, null, null, false, false, null]],
        '/admin/app/article/export' => [[['_route' => 'admin_app_article_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_export'], null, null, null, false, false, null]],
        '/admin/app/user/list' => [[['_route' => 'admin_app_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_list'], null, null, null, false, false, null]],
        '/admin/app/user/create' => [[['_route' => 'admin_app_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_create'], null, null, null, false, false, null]],
        '/admin/app/user/batch' => [[['_route' => 'admin_app_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_batch'], null, null, null, false, false, null]],
        '/admin/app/user/export' => [[['_route' => 'admin_app_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_export'], null, null, null, false, false, null]],
        '/admin/app/news/list' => [[['_route' => 'admin_app_news_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_list'], null, null, null, false, false, null]],
        '/admin/app/news/create' => [[['_route' => 'admin_app_news_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_create'], null, null, null, false, false, null]],
        '/admin/app/news/batch' => [[['_route' => 'admin_app_news_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_batch'], null, null, null, false, false, null]],
        '/admin/app/news/export' => [[['_route' => 'admin_app_news_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_export'], null, null, null, false, false, null]],
        '/admin/app/articlecategory/list' => [[['_route' => 'admin_app_articlecategory_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_list'], null, null, null, false, false, null]],
        '/admin/app/articlecategory/create' => [[['_route' => 'admin_app_articlecategory_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_create'], null, null, null, false, false, null]],
        '/admin/app/articlecategory/batch' => [[['_route' => 'admin_app_articlecategory_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_batch'], null, null, null, false, false, null]],
        '/admin/app/articlecategory/export' => [[['_route' => 'admin_app_articlecategory_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_export'], null, null, null, false, false, null]],
        '/admin/app/countrylist/list' => [[['_route' => 'admin_app_countrylist_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_list'], null, null, null, false, false, null]],
        '/admin/app/countrylist/create' => [[['_route' => 'admin_app_countrylist_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_create'], null, null, null, false, false, null]],
        '/admin/app/countrylist/batch' => [[['_route' => 'admin_app_countrylist_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_batch'], null, null, null, false, false, null]],
        '/admin/app/countrylist/export' => [[['_route' => 'admin_app_countrylist_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_export'], null, null, null, false, false, null]],
        '/admin/app/softwareslist/list' => [[['_route' => 'admin_app_softwareslist_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_list'], null, null, null, false, false, null]],
        '/admin/app/softwareslist/create' => [[['_route' => 'admin_app_softwareslist_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_create'], null, null, null, false, false, null]],
        '/admin/app/softwareslist/batch' => [[['_route' => 'admin_app_softwareslist_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_batch'], null, null, null, false, false, null]],
        '/admin/app/softwareslist/export' => [[['_route' => 'admin_app_softwareslist_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_export'], null, null, null, false, false, null]],
        '/admin/app/gameslist/list' => [[['_route' => 'admin_app_gameslist_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_list'], null, null, null, false, false, null]],
        '/admin/app/gameslist/create' => [[['_route' => 'admin_app_gameslist_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_create'], null, null, null, false, false, null]],
        '/admin/app/gameslist/batch' => [[['_route' => 'admin_app_gameslist_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_batch'], null, null, null, false, false, null]],
        '/admin/app/gameslist/export' => [[['_route' => 'admin_app_gameslist_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_export'], null, null, null, false, false, null]],
        '/admin/app/author/list' => [[['_route' => 'admin_app_author_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_list'], null, null, null, false, false, null]],
        '/admin/app/author/create' => [[['_route' => 'admin_app_author_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_create'], null, null, null, false, false, null]],
        '/admin/app/author/batch' => [[['_route' => 'admin_app_author_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_batch'], null, null, null, false, false, null]],
        '/admin/app/author/export' => [[['_route' => 'admin_app_author_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_export'], null, null, null, false, false, null]],
        '/admin/app/bonustype/list' => [[['_route' => 'admin_app_bonustype_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_list'], null, null, null, false, false, null]],
        '/admin/app/bonustype/create' => [[['_route' => 'admin_app_bonustype_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_create'], null, null, null, false, false, null]],
        '/admin/app/bonustype/batch' => [[['_route' => 'admin_app_bonustype_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_batch'], null, null, null, false, false, null]],
        '/admin/app/bonustype/export' => [[['_route' => 'admin_app_bonustype_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_export'], null, null, null, false, false, null]],
        '/admin/app/bonusvalue/list' => [[['_route' => 'admin_app_bonusvalue_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_list'], null, null, null, false, false, null]],
        '/admin/app/bonusvalue/create' => [[['_route' => 'admin_app_bonusvalue_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_create'], null, null, null, false, false, null]],
        '/admin/app/bonusvalue/batch' => [[['_route' => 'admin_app_bonusvalue_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_batch'], null, null, null, false, false, null]],
        '/admin/app/bonusvalue/export' => [[['_route' => 'admin_app_bonusvalue_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_export'], null, null, null, false, false, null]],
        '/admin/app/software/list' => [[['_route' => 'admin_app_software_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_list'], null, null, null, false, false, null]],
        '/admin/app/software/create' => [[['_route' => 'admin_app_software_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_create'], null, null, null, false, false, null]],
        '/admin/app/software/batch' => [[['_route' => 'admin_app_software_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_batch'], null, null, null, false, false, null]],
        '/admin/app/software/export' => [[['_route' => 'admin_app_software_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_export'], null, null, null, false, false, null]],
        '/admin/app/country/list' => [[['_route' => 'admin_app_country_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_list'], null, null, null, false, false, null]],
        '/admin/app/country/create' => [[['_route' => 'admin_app_country_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_create'], null, null, null, false, false, null]],
        '/admin/app/country/batch' => [[['_route' => 'admin_app_country_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_batch'], null, null, null, false, false, null]],
        '/admin/app/country/export' => [[['_route' => 'admin_app_country_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_export'], null, null, null, false, false, null]],
        '/admin/app/shortcode/list' => [[['_route' => 'admin_app_shortcode_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_list'], null, null, null, false, false, null]],
        '/admin/app/shortcode/create' => [[['_route' => 'admin_app_shortcode_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_create'], null, null, null, false, false, null]],
        '/admin/app/shortcode/batch' => [[['_route' => 'admin_app_shortcode_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_batch'], null, null, null, false, false, null]],
        '/admin/app/shortcode/export' => [[['_route' => 'admin_app_shortcode_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_export'], null, null, null, false, false, null]],
        '/admin/app/currency/list' => [[['_route' => 'admin_app_currency_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_list'], null, null, null, false, false, null]],
        '/admin/app/currency/create' => [[['_route' => 'admin_app_currency_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_create'], null, null, null, false, false, null]],
        '/admin/app/currency/batch' => [[['_route' => 'admin_app_currency_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_batch'], null, null, null, false, false, null]],
        '/admin/app/currency/export' => [[['_route' => 'admin_app_currency_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_export'], null, null, null, false, false, null]],
        '/admin/app/bonus/list' => [[['_route' => 'admin_app_bonus_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_list'], null, null, null, false, false, null]],
        '/admin/app/bonus/create' => [[['_route' => 'admin_app_bonus_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_create'], null, null, null, false, false, null]],
        '/admin/app/bonus/batch' => [[['_route' => 'admin_app_bonus_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_batch'], null, null, null, false, false, null]],
        '/admin/app/bonus/export' => [[['_route' => 'admin_app_bonus_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_export'], null, null, null, false, false, null]],
        '/admin/app/contactus/list' => [[['_route' => 'admin_app_contactus_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_list'], null, null, null, false, false, null]],
        '/admin/app/contactus/create' => [[['_route' => 'admin_app_contactus_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_create'], null, null, null, false, false, null]],
        '/admin/app/contactus/batch' => [[['_route' => 'admin_app_contactus_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_batch'], null, null, null, false, false, null]],
        '/admin/app/contactus/export' => [[['_route' => 'admin_app_contactus_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_export'], null, null, null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|rticle/([^/]++)(*:27)'
                    .'|uthors/([^/]++)(*:49)'
                .')'
                .'|/news/([^/]++)(*:71)'
                .'|/c(?'
                    .'|a(?'
                        .'|tegory/([^/]++)(*:102)'
                        .'|sino(?'
                            .'|url/([^/]++)(*:129)'
                            .'|\\-review/([^/]++)/([^/]++)(*:163)'
                        .')'
                    .')'
                    .'|urrency/([^/]++)/([^/]++)(*:198)'
                .')'
                .'|/b(?'
                    .'|onuses/(?'
                        .'|country/([^/]++)(*:238)'
                        .'|software/([^/]++)(*:263)'
                        .'|game/([^/]++)(*:284)'
                        .'|value/([^/]++)(*:306)'
                    .')'
                    .'|anking/([^/]++)/([^/]++)(*:339)'
                .')'
                .'|/language/([^/]++)/([^/]++)(*:375)'
                .'|/user/([^/]++)/([^/]++)(*:406)'
                .'|/([^/]++)(*:423)'
                .'|/admin(?'
                    .'|/(?'
                        .'|e(?'
                            .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:484)'
                            .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:527)'
                        .')'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:590)'
                        .'|app/(?'
                            .'|c(?'
                                .'|asino/([^/]++)/(?'
                                    .'|edit(*:631)'
                                    .'|delete(*:645)'
                                    .'|show(*:657)'
                                .')'
                                .'|o(?'
                                    .'|untry(?'
                                        .'|list/([^/]++)/(?'
                                            .'|edit(*:699)'
                                            .'|delete(*:713)'
                                            .'|show(*:725)'
                                        .')'
                                        .'|/([^/]++)/(?'
                                            .'|edit(*:751)'
                                            .'|delete(*:765)'
                                            .'|show(*:777)'
                                        .')'
                                    .')'
                                    .'|ntactus/([^/]++)/(?'
                                        .'|edit(*:811)'
                                        .'|delete(*:825)'
                                        .'|show(*:837)'
                                    .')'
                                .')'
                                .'|urrency/([^/]++)/(?'
                                    .'|edit(*:871)'
                                    .'|delete(*:885)'
                                    .'|show(*:897)'
                                .')'
                            .')'
                            .'|mainpage/([^/]++)/(?'
                                .'|edit(*:932)'
                                .'|delete(*:946)'
                                .'|show(*:958)'
                            .')'
                            .'|a(?'
                                .'|rticle(?'
                                    .'|/([^/]++)/(?'
                                        .'|edit(*:997)'
                                        .'|delete(*:1011)'
                                        .'|show(*:1024)'
                                    .')'
                                    .'|category/([^/]++)/(?'
                                        .'|edit(*:1059)'
                                        .'|delete(*:1074)'
                                        .'|show(*:1087)'
                                    .')'
                                .')'
                                .'|uthor/([^/]++)/(?'
                                    .'|edit(*:1120)'
                                    .'|delete(*:1135)'
                                    .'|show(*:1148)'
                                .')'
                            .')'
                            .'|user/([^/]++)/(?'
                                .'|edit(*:1180)'
                                .'|delete(*:1195)'
                                .'|show(*:1208)'
                            .')'
                            .'|news/([^/]++)/(?'
                                .'|edit(*:1239)'
                                .'|delete(*:1254)'
                                .'|show(*:1267)'
                            .')'
                            .'|s(?'
                                .'|oftware(?'
                                    .'|slist/([^/]++)/(?'
                                        .'|edit(*:1313)'
                                        .'|delete(*:1328)'
                                        .'|show(*:1341)'
                                    .')'
                                    .'|/([^/]++)/(?'
                                        .'|edit(*:1368)'
                                        .'|delete(*:1383)'
                                        .'|show(*:1396)'
                                    .')'
                                .')'
                                .'|hortcode/([^/]++)/(?'
                                    .'|edit(*:1432)'
                                    .'|delete(*:1447)'
                                    .'|show(*:1460)'
                                .')'
                            .')'
                            .'|gameslist/([^/]++)/(?'
                                .'|edit(*:1497)'
                                .'|delete(*:1512)'
                                .'|show(*:1525)'
                            .')'
                            .'|bonus(?'
                                .'|type/([^/]++)/(?'
                                    .'|edit(*:1564)'
                                    .'|delete(*:1579)'
                                    .'|show(*:1592)'
                                .')'
                                .'|value/([^/]++)/(?'
                                    .'|edit(*:1624)'
                                    .'|delete(*:1639)'
                                    .'|show(*:1652)'
                                .')'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:1679)'
                                    .'|delete(*:1694)'
                                    .'|show(*:1707)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:1720)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1761)'
                    .'|wdt/([^/]++)(*:1782)'
                    .'|profiler(?'
                        .'|(*:1802)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1841)'
                                .'|router(*:1856)'
                                .'|exception(?'
                                    .'|(*:1877)'
                                    .'|\\.css(*:1891)'
                                .')'
                            .')'
                            .'|(*:1902)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::article'], ['slug'], null, null, false, true, null]],
        49 => [[['_route' => 'author', '_controller' => 'App\\Controller\\ArticleController::author'], ['slug'], null, null, false, true, null]],
        71 => [[['_route' => 'singlenews', '_controller' => 'App\\Controller\\ArticleController::singleNews'], ['slug'], null, null, false, true, null]],
        102 => [[['_route' => 'newsbycategory', '_controller' => 'App\\Controller\\ArticleController::newsByCategory'], ['slug'], null, null, false, true, null]],
        129 => [[['_route' => 'visit_casino', '_controller' => 'App\\Controller\\CasinoController::visit_casino'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'casino-review', '_controller' => 'App\\Controller\\CasinoController::casinoReview'], ['id', 'casinoname'], null, null, true, true, null]],
        198 => [[['_route' => 'currency', '_controller' => 'App\\Controller\\CasinoController::currencyreview'], ['id', 'name'], null, null, false, true, null]],
        238 => [[['_route' => 'bonusesforcountry', '_controller' => 'App\\Controller\\BonusController::bonusesForCountry'], ['slug'], null, null, false, true, null]],
        263 => [[['_route' => 'bonusesforsoftware', '_controller' => 'App\\Controller\\BonusController::bonusesForSoftware'], ['slug'], null, null, false, true, null]],
        284 => [[['_route' => 'bonusesbygametype', '_controller' => 'App\\Controller\\BonusController::bonusesbygametype'], ['gametype'], null, null, false, true, null]],
        306 => [[['_route' => 'bonuses_by_value', '_controller' => 'App\\Controller\\BonusController::bonusesByValue'], ['slug'], null, null, false, true, null]],
        339 => [[['_route' => 'banking', '_controller' => 'App\\Controller\\CasinoController::bankingreview'], ['id', 'casinoname'], null, null, false, true, null]],
        375 => [[['_route' => 'language', '_controller' => 'App\\Controller\\CasinoController::languagereview'], ['id', 'name'], null, null, false, true, null]],
        406 => [[['_route' => 'user', '_controller' => 'App\\Controller\\OtherPagesController::user'], ['id', 'username'], null, null, false, true, null]],
        423 => [[['_route' => 'general_pages', '_controller' => 'App\\Controller\\OtherPagesController::test'], ['slug'], null, null, false, true, null]],
        484 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        527 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        590 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        631 => [[['_route' => 'admin_app_casino_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_edit'], ['id'], null, null, false, false, null]],
        645 => [[['_route' => 'admin_app_casino_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_delete'], ['id'], null, null, false, false, null]],
        657 => [[['_route' => 'admin_app_casino_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.casino', '_sonata_name' => 'admin_app_casino_show'], ['id'], null, null, false, false, null]],
        699 => [[['_route' => 'admin_app_countrylist_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_edit'], ['id'], null, null, false, false, null]],
        713 => [[['_route' => 'admin_app_countrylist_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_delete'], ['id'], null, null, false, false, null]],
        725 => [[['_route' => 'admin_app_countrylist_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.countrylist', '_sonata_name' => 'admin_app_countrylist_show'], ['id'], null, null, false, false, null]],
        751 => [[['_route' => 'admin_app_country_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_edit'], ['id'], null, null, false, false, null]],
        765 => [[['_route' => 'admin_app_country_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_delete'], ['id'], null, null, false, false, null]],
        777 => [[['_route' => 'admin_app_country_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.country', '_sonata_name' => 'admin_app_country_show'], ['id'], null, null, false, false, null]],
        811 => [[['_route' => 'admin_app_contactus_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_edit'], ['id'], null, null, false, false, null]],
        825 => [[['_route' => 'admin_app_contactus_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_delete'], ['id'], null, null, false, false, null]],
        837 => [[['_route' => 'admin_app_contactus_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.contactus', '_sonata_name' => 'admin_app_contactus_show'], ['id'], null, null, false, false, null]],
        871 => [[['_route' => 'admin_app_currency_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_edit'], ['id'], null, null, false, false, null]],
        885 => [[['_route' => 'admin_app_currency_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_delete'], ['id'], null, null, false, false, null]],
        897 => [[['_route' => 'admin_app_currency_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.currency', '_sonata_name' => 'admin_app_currency_show'], ['id'], null, null, false, false, null]],
        932 => [[['_route' => 'admin_app_mainpage_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_edit'], ['id'], null, null, false, false, null]],
        946 => [[['_route' => 'admin_app_mainpage_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_delete'], ['id'], null, null, false, false, null]],
        958 => [[['_route' => 'admin_app_mainpage_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.mainpage', '_sonata_name' => 'admin_app_mainpage_show'], ['id'], null, null, false, false, null]],
        997 => [[['_route' => 'admin_app_article_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_edit'], ['id'], null, null, false, false, null]],
        1011 => [[['_route' => 'admin_app_article_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_delete'], ['id'], null, null, false, false, null]],
        1024 => [[['_route' => 'admin_app_article_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.article', '_sonata_name' => 'admin_app_article_show'], ['id'], null, null, false, false, null]],
        1059 => [[['_route' => 'admin_app_articlecategory_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_edit'], ['id'], null, null, false, false, null]],
        1074 => [[['_route' => 'admin_app_articlecategory_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_delete'], ['id'], null, null, false, false, null]],
        1087 => [[['_route' => 'admin_app_articlecategory_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.articlecategory', '_sonata_name' => 'admin_app_articlecategory_show'], ['id'], null, null, false, false, null]],
        1120 => [[['_route' => 'admin_app_author_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_edit'], ['id'], null, null, false, false, null]],
        1135 => [[['_route' => 'admin_app_author_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_delete'], ['id'], null, null, false, false, null]],
        1148 => [[['_route' => 'admin_app_author_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.author', '_sonata_name' => 'admin_app_author_show'], ['id'], null, null, false, false, null]],
        1180 => [[['_route' => 'admin_app_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_edit'], ['id'], null, null, false, false, null]],
        1195 => [[['_route' => 'admin_app_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_delete'], ['id'], null, null, false, false, null]],
        1208 => [[['_route' => 'admin_app_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_show'], ['id'], null, null, false, false, null]],
        1239 => [[['_route' => 'admin_app_news_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_edit'], ['id'], null, null, false, false, null]],
        1254 => [[['_route' => 'admin_app_news_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_delete'], ['id'], null, null, false, false, null]],
        1267 => [[['_route' => 'admin_app_news_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.news', '_sonata_name' => 'admin_app_news_show'], ['id'], null, null, false, false, null]],
        1313 => [[['_route' => 'admin_app_softwareslist_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_edit'], ['id'], null, null, false, false, null]],
        1328 => [[['_route' => 'admin_app_softwareslist_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_delete'], ['id'], null, null, false, false, null]],
        1341 => [[['_route' => 'admin_app_softwareslist_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.softwareslist', '_sonata_name' => 'admin_app_softwareslist_show'], ['id'], null, null, false, false, null]],
        1368 => [[['_route' => 'admin_app_software_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_edit'], ['id'], null, null, false, false, null]],
        1383 => [[['_route' => 'admin_app_software_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_delete'], ['id'], null, null, false, false, null]],
        1396 => [[['_route' => 'admin_app_software_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.software', '_sonata_name' => 'admin_app_software_show'], ['id'], null, null, false, false, null]],
        1432 => [[['_route' => 'admin_app_shortcode_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_edit'], ['id'], null, null, false, false, null]],
        1447 => [[['_route' => 'admin_app_shortcode_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_delete'], ['id'], null, null, false, false, null]],
        1460 => [[['_route' => 'admin_app_shortcode_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.shortcode', '_sonata_name' => 'admin_app_shortcode_show'], ['id'], null, null, false, false, null]],
        1497 => [[['_route' => 'admin_app_gameslist_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_edit'], ['id'], null, null, false, false, null]],
        1512 => [[['_route' => 'admin_app_gameslist_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_delete'], ['id'], null, null, false, false, null]],
        1525 => [[['_route' => 'admin_app_gameslist_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.gameslist', '_sonata_name' => 'admin_app_gameslist_show'], ['id'], null, null, false, false, null]],
        1564 => [[['_route' => 'admin_app_bonustype_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_edit'], ['id'], null, null, false, false, null]],
        1579 => [[['_route' => 'admin_app_bonustype_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_delete'], ['id'], null, null, false, false, null]],
        1592 => [[['_route' => 'admin_app_bonustype_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.bonustype', '_sonata_name' => 'admin_app_bonustype_show'], ['id'], null, null, false, false, null]],
        1624 => [[['_route' => 'admin_app_bonusvalue_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_edit'], ['id'], null, null, false, false, null]],
        1639 => [[['_route' => 'admin_app_bonusvalue_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_delete'], ['id'], null, null, false, false, null]],
        1652 => [[['_route' => 'admin_app_bonusvalue_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.bonusvalue', '_sonata_name' => 'admin_app_bonusvalue_show'], ['id'], null, null, false, false, null]],
        1679 => [[['_route' => 'admin_app_bonus_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_edit'], ['id'], null, null, false, false, null]],
        1694 => [[['_route' => 'admin_app_bonus_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_delete'], ['id'], null, null, false, false, null]],
        1707 => [[['_route' => 'admin_app_bonus_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.bonus', '_sonata_name' => 'admin_app_bonus_show'], ['id'], null, null, false, false, null]],
        1720 => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], null, null, true, false, null]],
        1761 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1782 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1802 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1841 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1856 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1877 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1891 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1902 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
