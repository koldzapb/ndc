/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/scss/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
global.$ = global.jQuery = $;

require('bootstrap/dist/js/bootstrap.bundle');
require('slick-carousel');
require('lightbox2');
require('jquery-lazyload');

require('../js/ndc_link_tracking_ga.js');
require('../js/subscription_cookie.js');
require('../js/tinybox2/tinybox.js');
require('../js/mousewheel.min.js');
require('../js/scroll-to.js');
require('../js/jqtoast/jquery.freeow.js');
require('../js/jcarousellite.min.js');
require('../js/select-image.js');
// require('../js/jquery-ui-1.8.22.custom/js/jquery-ui-1.8.22.custom.min.js');

require('../js/Ajax/login.js');
require('../js/Ajax/register.js');
require('../js/Ajax/removecomment.js');
require('../js/Ajax/newsletter.js');
require('../js/Ajax/adminRemoveUserComment.js');
require('../js/Ajax/like.js');
require('../js/Ajax/tynyRegLog.js');
require('../js/Ajax/update_user.js');
require('../js/Ajax/contact_us.js');
require('../js/Ajax/ouimodalsubscription.js');
require('../js/Ajax/reset_password.js');
require('../js/Ajax/index.js');
require('../js/Ajax/moreBonuses.js');
require('../js/Ajax/loadAllBonuses.js');
require('../js/Ajax/bonusesSort.js');
require('../js/Ajax/MoreLiveActivities.js');
require('../js/Ajax/userLikeUserPost.js');
require('../js/Ajax/unlikePost.js');
require('../js/Ajax/load_more_bonuses_by_gametype.js');
require('../js/Ajax/load_all_bonuses_by_gametype.js');
require('../js/Ajax/bonusessortforgametype.js');
require('../js/Ajax/load_more_bonuses_for_country.js');
require('../js/Ajax/load_all_bonuses_for_country.js');
require('../js/Ajax/bonuses_sort_for_country.js');
require('../js/Ajax/value_bonus_sorting.js');
require('../js/Ajax/all_bonuses_for_software.js');
require('../js/Ajax/bonuses_sort_for_software.js');
require('../js/Ajax/more_bonuses_for_software.js');
require('../js/Ajax/casinosLoadMore.js');
require('../js/Ajax/loadAllCasinos.js');
require('../js/Ajax/casinosSort.js');
require('../js/Ajax/post.js');
require('../js/Ajax/cas_rew_more_live_act.js');
require('../js/Ajax/all_activities_cas_rew.js');
require('../js/Ajax/articleLoadMore.js');
require('../js/Ajax/news_load_more.js');
require('../js/Ajax/user_to_user_like.js');
require('../js/Ajax/comment-reply.js');
require('../js/Ajax/remove_reply.js');
require('../js/Ajax/usercomments.js');
require('../js/Ajax/bonus_like');

require('../js/base.js');