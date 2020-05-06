
function trim(str)
{
if(str == "")
	{
return "";
	}
return str.replace(/^\s+|\s+$/g,'');
}
function ucfirst(text)
{
return text.substr(0, 1).toUpperCase() + text.substr(1);
}

function ucwords (str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}

function number_format(number, decimals, dec_point, thousands_sep)
	{
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function utf8_encode ( argString ) {
    var string = (argString+''); // .replace(/\r\n/g, "\n").replace(/\r/g, "\n");

    var utftext = "";
    var start, end;
    var stringl = 0;

    start = end = 0;
    stringl = string.length;
    for (var n = 0; n < stringl; n++) {
        var c1 = string.charCodeAt(n);
        var enc = null;

        if (c1 < 128) {
            end++;
        } else if (c1 > 127 && c1 < 2048) {
            enc = String.fromCharCode((c1 >> 6) | 192) + String.fromCharCode((c1 & 63) | 128);
        } else {
            enc = String.fromCharCode((c1 >> 12) | 224) + String.fromCharCode(((c1 >> 6) & 63) | 128) + String.fromCharCode((c1 & 63) | 128);
        }
        if (enc !== null) {
            if (end > start) {
                utftext += string.substring(start, end);
            }
            utftext += enc;
            start = end = n+1;
        }
    }

    if (end > start) {
        utftext += string.substring(start, string.length);
    }

    return utftext;
}


function isset(  ) {
var a=arguments; var l=a.length; var i=0;
while ( i!=l ) {
if (typeof(a[i])=='undefined') { 
return false; 
} else { 
i++; 
}
}
return true;
}


function in_array (needle, haystack, argStrict) {

var key = '', strict = !!argStrict; 
if (strict) {
for (key in haystack) {
if (haystack[key] === needle) {
return true;            }
}
} else {
for (key in haystack) {
if (haystack[key] == needle) {                return true;
}
}
}
return false;
}



function str_replace (search, replace, subject, count) {
    var i = 0, j = 0, temp = '', repl = '', sl = 0, fl = 0,
            f = [].concat(search),
            r = [].concat(replace),
            s = subject,
            ra = r instanceof Array, sa = s instanceof Array;
    s = [].concat(s);
    if (count) {
        this.window[count] = 0;
    }

    for (i=0, sl=s.length; i < sl; i++) {
        if (s[i] === '') {
            continue;
        }
        for (j=0, fl=f.length; j < fl; j++) {
            temp = s[i]+'';
            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
            s[i] = (temp).split(f[j]).join(repl);
            if (count && s[i] !== temp) {
                this.window[count] += (temp.length-s[i].length)/f[j].length;}
        }
    }
    return sa ? s : s[0];
}



function htmlentities (string, quote_style)
{
var hash_map = {}, symbol = '', tmp_str = '', entity = '';
tmp_str = string.toString();

if (false === (hash_map = this.get_html_translation_table('HTML_ENTITIES', quote_style))) {
return false;
}
hash_map["'"] = '&#039;';
for (symbol in hash_map) {
entity = hash_map[symbol];
tmp_str = tmp_str.split(symbol).join(entity);
}

return tmp_str;
}


function get_html_translation_table (table, quote_style) {
   
    var entities = {}, hash_map = {}, decimal = 0, symbol = '';
    var constMappingTable = {}, constMappingQuoteStyle = {};
    var useTable = {}, useQuoteStyle = {};
    
    // Translate arguments
    constMappingTable[0]      = 'HTML_SPECIALCHARS';
    constMappingTable[1]      = 'HTML_ENTITIES';
    constMappingQuoteStyle[0] = 'ENT_NOQUOTES';
    constMappingQuoteStyle[2] = 'ENT_COMPAT';
    constMappingQuoteStyle[3] = 'ENT_QUOTES';

    useTable       = !isNaN(table) ? constMappingTable[table] : table ? table.toUpperCase() : 'HTML_SPECIALCHARS';
    useQuoteStyle = !isNaN(quote_style) ? constMappingQuoteStyle[quote_style] : quote_style ? quote_style.toUpperCase() : 'ENT_COMPAT';

    if (useTable !== 'HTML_SPECIALCHARS' && useTable !== 'HTML_ENTITIES') {
        throw new Error("Table: "+useTable+' not supported');
        // return false;
    }

    entities['38'] = '&amp;';
    if (useTable === 'HTML_ENTITIES') {
        entities['160'] = '&nbsp;';
        entities['161'] = '&iexcl;';
        entities['162'] = '&cent;';
        entities['163'] = '&pound;';
        entities['164'] = '&curren;';
        entities['165'] = '&yen;';
        entities['166'] = '&brvbar;';
        entities['167'] = '&sect;';
        entities['168'] = '&uml;';
        entities['169'] = '&copy;';
        entities['170'] = '&ordf;';
        entities['171'] = '&laquo;';
        entities['172'] = '&not;';
        entities['173'] = '&shy;';
        entities['174'] = '&reg;';
        entities['175'] = '&macr;';
        entities['176'] = '&deg;';
        entities['177'] = '&plusmn;';
        entities['178'] = '&sup2;';
        entities['179'] = '&sup3;';
        entities['180'] = '&acute;';
        entities['181'] = '&micro;';
        entities['182'] = '&para;';
        entities['183'] = '&middot;';
        entities['184'] = '&cedil;';
        entities['185'] = '&sup1;';
        entities['186'] = '&ordm;';
        entities['187'] = '&raquo;';
        entities['188'] = '&frac14;';
        entities['189'] = '&frac12;';
        entities['190'] = '&frac34;';
        entities['191'] = '&iquest;';
        entities['192'] = '&Agrave;';
        entities['193'] = '&Aacute;';
        entities['194'] = '&Acirc;';
        entities['195'] = '&Atilde;';
        entities['196'] = '&Auml;';
        entities['197'] = '&Aring;';
        entities['198'] = '&AElig;';
        entities['199'] = '&Ccedil;';
        entities['200'] = '&Egrave;';
        entities['201'] = '&Eacute;';
        entities['202'] = '&Ecirc;';
        entities['203'] = '&Euml;';
        entities['204'] = '&Igrave;';
        entities['205'] = '&Iacute;';
        entities['206'] = '&Icirc;';
        entities['207'] = '&Iuml;';
        entities['208'] = '&ETH;';
        entities['209'] = '&Ntilde;';
        entities['210'] = '&Ograve;';
        entities['211'] = '&Oacute;';
        entities['212'] = '&Ocirc;';
        entities['213'] = '&Otilde;';
        entities['214'] = '&Ouml;';
        entities['215'] = '&times;';
        entities['216'] = '&Oslash;';
        entities['217'] = '&Ugrave;';
        entities['218'] = '&Uacute;';
        entities['219'] = '&Ucirc;';
        entities['220'] = '&Uuml;';
        entities['221'] = '&Yacute;';
        entities['222'] = '&THORN;';
        entities['223'] = '&szlig;';
        entities['224'] = '&agrave;';
        entities['225'] = '&aacute;';
        entities['226'] = '&acirc;';
        entities['227'] = '&atilde;';
        entities['228'] = '&auml;';
        entities['229'] = '&aring;';
        entities['230'] = '&aelig;';
        entities['231'] = '&ccedil;';
        entities['232'] = '&egrave;';
        entities['233'] = '&eacute;';
        entities['234'] = '&ecirc;';
        entities['235'] = '&euml;';
        entities['236'] = '&igrave;';
        entities['237'] = '&iacute;';
        entities['238'] = '&icirc;';
        entities['239'] = '&iuml;';
        entities['240'] = '&eth;';
        entities['241'] = '&ntilde;';
        entities['242'] = '&ograve;';
        entities['243'] = '&oacute;';
        entities['244'] = '&ocirc;';
        entities['245'] = '&otilde;';
        entities['246'] = '&ouml;';
        entities['247'] = '&divide;';
        entities['248'] = '&oslash;';
        entities['249'] = '&ugrave;';
        entities['250'] = '&uacute;';
        entities['251'] = '&ucirc;';
        entities['252'] = '&uuml;';
        entities['253'] = '&yacute;';
        entities['254'] = '&thorn;';
        entities['255'] = '&yuml;';
    }

    if (useQuoteStyle !== 'ENT_NOQUOTES') {
        entities['34'] = '&quot;';
    }
    if (useQuoteStyle === 'ENT_QUOTES') {
        entities['39'] = '&#39;';
    }
    entities['60'] = '&lt;';
    entities['62'] = '&gt;';


    // ascii decimals to real symbols
    for (decimal in entities) {
        symbol = String.fromCharCode(decimal);
        hash_map[symbol] = entities[decimal];
    }
    
    return hash_map;
}


function urldecode(str)
{
//id = id.replace(/ /gi, "");
//str = str.replace(/#/gi, "");
//str = str.replace(/%/gi, "");
//id = id.replace(/'/gi, "");
//id = id.replace(/"/gi, "");
//id = id.replace(/=/gi, "");
return decodeURIComponent(str).replace(/\+/g, ' ');
}


function urlencode (str) {
    return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').
                                                                    replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
}












function ndc_api(r, m, cd)
{ // start ndc_api
//define essentials:
this.mirrordir = m;
this.cookiedomain=cd;
this.live_activities_last_time_shown=0;


this.init = function()
{

},
this.set_live_activities_last_time_shown = function(val)
{
this.live_activities_last_time_shown=val;
},

this.loading = function()
{
return this.mirrordir + "img/loading.gif";
},

this.like_wall = function(wall_id, liking, title_name)
	{
if(userid <= 0)
		{
alert("You must login/register to do that");
return false;
		}

jQuery.ajax({
  url: rootdir+'index.php?p=xml_wall_like&wall_id='+wall_id+"&liking="+liking,
  cache: false
}).done(function( html ) {


var json_obj = false;
try
{
json_obj = jQuery.parseJSON(html);
}
catch (e)
{

}
if(json_obj != false && json_obj.success == true && json_obj.like_part)
	  {
jQuery("#wall_like_"+wall_id).html(json_obj.like_part);

var text_show = "Your like has been saved!";
var title_show = "Liked " + title_name;
if(liking == 0)
		  {
var title_show = "Like removed: " + title_name;
var text_show = "Your like has been removed";
		  }
var ndc_toast = new toast(title_show, text_show);
ndc_toast.set_icon("tick");
ndc_toast.set_autohide(true);
ndc_toast.run();

	  }
else if(json_obj != false && json_obj.success == false)
	  {
alert(json_obj.errmsg);
	  }
	  else
	  {
alert("Failed to like");
	  }


});


return false;

	},





this.like_wall_post = function(post_id, liking)
	{
if(userid <= 0)
		{
alert("You must login/register to do that");
return false;
		}

jQuery.ajax({
  url: rootdir+'index.php?p=xml_wall_like_post&post_id='+post_id+"&liking="+liking,
  cache: false
}).done(function( html ) {


var json_obj = false;
try
{
json_obj = jQuery.parseJSON(html);
}
catch (e)
{

}
if(json_obj != false && json_obj.success == true)
	  {
jQuery("#wall_like_post_"+post_id).html(json_obj.post_liked_part);
	  }
else if(json_obj != false && json_obj.success == false)
	  {
alert(json_obj.errmsg);
	  }
	  else
	  {
alert("Failed to remove");
	  }


});


return false;

	},

this.remove_wall_post = function(post_id)
	{
if(userid <= 0)
		{
alert("You must login/register to do that");
return false;
		}
if(confirm("Are you sure?"))
		{
jQuery.ajax({
  url: rootdir+'index.php?p=xml_wall_remove_post&post_id='+post_id,
  cache: false
}).done(function( html ) {


var json_obj = false;
try
{
json_obj = jQuery.parseJSON(html);
}
catch (e)
{

}
if(json_obj != false && json_obj.success == true)
	  {
//window.location=json_obj.reload_link;
//jQuery("#wall_post_"+post_id).html("This post has been removed");
//jQuery("#wall_post_"+post_id).delay(1000).hide();
jQuery("#wall_post_"+post_id).fadeOut('slow', function() {
    // Animation complete.
  });



	  }
else if(json_obj != false && json_obj.success == false)
	  {
alert(json_obj.errmsg);
	  }
	  else
	  {
alert("Failed to remove");
	  }







});


		}
return false;

	},



this.live_activies_ajax = function(from_time)
	{

jQuery.ajax({
  url: rootdir+'index.php?p=xml_wall_live_activies&from_time='+from_time,
  cache: false
}).done(function( html ) {
 // ajax good.

var json_obj = false;
try
{
json_obj = jQuery.parseJSON(html);
}
catch (e)
{

}
if(json_obj != false && json_obj.success == true && json_obj.new_time)
	  {
setTimeout("ndc_api.live_activies_ajax("+json_obj.new_time+");", 5000);

for(item in json_obj.arr)
		  {
var content_use = json_obj.arr[item];
var id_check = "live_"+item;
if(!document.getElementById(id_check))
			  {
jQuery(content_use).hide().prependTo("#ndc_live_activities").fadeIn("slow");
			  }

		  }



	  }

}); // ajax good.




	},






this.live_activies_ajax_more = function()
	{
jQuery.ajax({
  url: rootdir+'index.php?p=xml_wall_live_activies&before_time='+this.live_activities_last_time_shown,
  cache: false
}).done(function( html ) {
 // ajax good.
		var json_obj = false;
		try
		{
		json_obj = jQuery.parseJSON(html);
		}
		catch (e)
		{

		}
		if(json_obj != false && json_obj.success == true && json_obj.earliest_post_time)
		{
			for(item in json_obj.arr)
			{
				var content_use = json_obj.arr[item];
				var id_check = "live_"+item;
				if(!document.getElementById(id_check))
				{
					jQuery(content_use).hide().appendTo("#ndc_live_activities").fadeIn("slow"); //append.
				}
			}
ndc_api.set_live_activities_last_time_shown(json_obj.earliest_post_time);
		}

}); // ajax good.




	},







this.register_form_check = function()
{

if(jQuery("#reg_username").val() == "")
	{
jQuery("#register_form_display_area").html("Must enter a username");
return false;
	}
else if(jQuery("#reg_username").val().length <= 1)
	{
jQuery("#register_form_display_area").html("Username must be at least 2 characters");
return false;
	}
else if(jQuery("#reg_password").val().length <= 5)
	{
jQuery("#register_form_display_area").html("Password must be at least 6 characters");
return false;
	}
else if(jQuery("#reg_password").val() != jQuery("#reg_password2").val())
	{
jQuery("#register_form_display_area").html("Passwords do not match");
return false;
	}
else if(jQuery("#reg_email").val().length <= 3)
	{
jQuery("#register_form_display_area").html("Invalid Email address");
return false;
	}
return true;
}




this.set_cookie = function(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";

var domain_part = "";
if (typeof global_cookie_domain != "undefined" && global_cookie_domain != "")
{
domain_part = "; domain="+global_cookie_domain;
}
document.cookie = name+"="+value+expires+"; path=/"+""+domain_part;
}


this.read_cookie = function( check_name ) {
	// first we'll split this cookie up into name/value pairs
	// note: document.cookie only returns name=value, not the other components
	var a_all_cookies = document.cookie.split( ';' );
	var a_temp_cookie = '';
	var cookie_name = '';
	var cookie_value = '';
	var b_cookie_found = false; // set boolean t/f default f

	for ( i = 0; i < a_all_cookies.length; i++ )
	{
		// now we'll split apart each name=value pair
		a_temp_cookie = a_all_cookies[i].split( '=' );


		// and trim left/right whitespace while we're at it
		cookie_name = a_temp_cookie[0].replace(/^\s+|\s+$/g, '');

		// if the extracted name matches passed check_name
		if ( cookie_name == check_name )
		{
			b_cookie_found = true;
			// we need to handle case where cookie has no value but exists (no = sign, that is):
			if ( a_temp_cookie.length > 1 )
			{
				cookie_value = unescape( a_temp_cookie[1].replace(/^\s+|\s+$/g, '') );
			}
			// note that in cases where cookie is initialized but no value, null is returned
			return cookie_value;
			break;
		}
		a_temp_cookie = null;
		cookie_name = '';
	}
	if ( !b_cookie_found )
	{
		return null;
	}
}

this.erase_cookie = function(name) {
	this.create_cookie(name,"",-1);
}












}  // end ndc_api


/*
POST request. (add cache?
jQuery.ajax({
  type: "POST",
  url: "some.php",
  data: { name: "John", location: "Boston" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});
*/

//split to own file?

function ndc_chart()
{ // start ndc_chart
//define essentials:
this.size="small";
this.area="top";
this.page=1

this.init = function()
{

var current_area = ndc_api.read_cookie('ndc_default_chart_area');
if(current_area != "")
	{
this.area=current_area;
	}
var current_size = ndc_api.read_cookie('ndc_default_chart_size');
if(current_size != "")
	{
this.size=current_size;
	}
}

this.change_size = function(s)
{
this.size=s;
this.page=1;
this.load();
}

this.change_area = function(s)
{
this.area=s;
this.page=1;
this.load();
}


this.page_increase = function()
{
this.page = this.page + 1;
this.load();
}

this.page_decrease = function()
{
this.page = this.page - 1;
this.load();
}


this.load = function()
{
if(this.page <= 0)
	{
this.page = 1;
	}


ndc_api.set_cookie('ndc_default_chart_area', this.area, 120);
ndc_api.set_cookie('ndc_default_chart_size', this.size, 120);


jQuery("#index_spinner_area").html('<img src="'+ndc_api.loading()+'" alt=""/>');
jQuery.ajax({
  url: rootdir+'index.php?p=xml_chart&area='+this.area+'&size='+this.size+'&chart_page='+this.page,
  cache: false
}).done(function( html ) {
  jQuery("#homepage_chart_area").html(html);
});


}



}  // end ndc_chart











		function toast(title, msg)
		{
this.title=title;
this.message=msg;
this.slide=true;
this.style="gray"; // gray, smokey, osx, simple
this.prepend=true;
this.autohidedelay = 6500;
this.autohide = true;
this.icon = "tick"; // tick, pushpin, error
this.arealocation="tr"; // br as well.
		}
	
	toast.prototype = {
		set_autohide: function(val) {
this.autohide=val;
		},
		set_autohidedelay: function(val) {
this.autohidedelay=val;
		},
		set_icon: function(val) {
this.icon=val;
		},
		set_arealocation: function(val) {
this.arealocation=val;
		},

		run: function() {




var opts, container;
opts = {};

/*
<option value="smokey">Smokey</option>
<option value="gray">Gray</option>
<option value="osx">OSX</option>
<option value="simple">Simple</option>
*/


opts.classes = [this.style];
opts.prepend = this.prepend;
opts.autoHideDelay = this.autohidedelay;
opts.autoHide = this.autohide;
if(this.slide == true)
{
	//opts.classes.push("slide");
	opts.hideStyle = {
		opacity: 0,
		left: "400px"
	};
	opts.showStyle = {
		opacity: 1,
		left: 0
	};
}

opts.classes.push(this.icon);
container = "#jqtoast-" + this.arealocation; // or br
jQuery(container).freeow(this.title, this.message, opts);



		},
		

		ccc: function() {


		}
	} //end toast
	


















//autocomplete
function ndc_init_dropdown(id_use, type_use, extra_url, gotourl)
		{

if(!document.getElementById(id_use))
			{
return;
			}



if (typeof extra_url == "undefined" || !isset(extra_url))
{
extra_url = "";
}
if (typeof gotourl == "undefined" || !isset(gotourl))
{
gotourl = false;
}


//http://192.168.1.100/www.snapfxnetwork.com/index.php?p=dropdown_search&type=user&term=as
//		source: rootdir+"index.php?p=dropdown_search&type="+type_use,
jQuery(function() {

	jQuery( "#"+id_use ).autocomplete({
		source: rootdir+"index.php?p=xml_dropdown_search&type="+type_use + extra_url,
		minLength: 2,
		select: function( event, ui ) {

jQuery( "#messaging_to_area" ).append('<span class="sfx_msg_user" id="msg_uid_'+ui.item.id+'"><input type="hidden" class="msg_uid" name="msg_uid[]" value="'+ui.item.id+'"/><a href="#" class="sfx_closeimg" onclick="jQuery(\'#msg_uid_'+ui.item.id+'\').remove();return false;"></a><span>'+ui.item.label+'</a></span>');


if(isset(ui.item.js) && trim(ui.item.js) != "")
			{
eval(ui.item.js);
setTimeout('document.getElementById("'+id_use+'").value="";', 50); // filthy.
			}
else if(type_use == "all" && ui.item.url != "" || gotourl == true && ui.item.url != "")
			{
window.location=ui.item.url; // change to use snaps gotourl [sometimes will be /profile/1/ and sometimes http://www.cybergamer.org/pdsfsdfdsf
//jQuerycg.gotoURL(ui.item.url);
setTimeout('document.getElementById("'+id_use+'").value="";', 50); // filthy.
			}

	
		}

	})
		
	.data( "autocomplete" )._renderItem = function( ul, item ) {

if(1 == 1)
		{ // SHOW.

var extra_type_show = "";
if(type_use == "all" && isset(item.type) && item.type != "")
			{
	var type_display = item.type;
	type_display = str_replace("_", " ", type_display);
extra_type_show = '<span style="float:right;font-size:12px;color:grey;">'+ucwords(type_display)+'</span>';
			}

if(item.icon == "")
		{
var data_to_append = '<a><div><b style="font-size:16px;">' + extra_type_show + item.label + '</b></div><div style="font-size:12px;">' + item.desc + '</div></a>';
		}
		else
		{
var data_to_append = '<a><img src="'+item.icon+'" width="50" height="50" style="float:left"/><div style="margin-left:60px;"><b style="font-size:16px;">' + extra_type_show + item.label + '</b></div><div style="margin-left:60px;font-size:12px;">' + item.desc + '</div></a>';
		}

		return jQuery( "<li></li>" )
			.data( "item.autocomplete", item )
			.append( data_to_append )
			.appendTo( ul );

		} // SHOW.

	};




});


	}


