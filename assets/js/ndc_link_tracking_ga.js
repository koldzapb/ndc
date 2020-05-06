(function(){
 // Escape dots in hostname for use in regex
  var domain = window.location.hostname.replace(new RegExp('\\.','g'), '\\.');
  jQuery('a').click( function() {

    if (typeof(ga) == 'undefined') return;

    // Test its a URL to avoid including stuff like javascript:Recaptcha.reload() etc
    var url = new RegExp("^(#|https?:\\/\\/)", "i");
 
    if (url.test(this.href)) {
      
      // Check if link is internal - either same domain or in-page anchor (starts with #)
      var internal = new RegExp("^(#|https?:\\/\\/" + domain + ")", "i");
      if (internal.test(this.href)) {
        var action, label;
        // Check for outbound redirect links
        var outbound = new RegExp("^https:\\/\\/" + domain + "\\/(casinourl)\\/\\d+\\/$", "i");
        
        var matches = outbound.exec(this.href);
        
        if (matches) {
          action = 'Click';
          label = this.title;
          //alert ('action:' + action + ', label:' + label); // For debugging
          if (label!="") {
            ga('send', 'event', 'AffLink', action, label, {
    hitCallback: function() {
      console.log('action: ' + action + ', label:' + label + ' ,domain: ' + domain);
    }
  });
          }
          // Enhance & 7Search click conversion tracking images
          //(new Image(1,1)).src= "http://c.enhance.com/t?cid=XXXXXXX&filltype=1";
          //(new Image(1,1)).src= "http://conversion.7search.com/conversion/v1/?advid=XXXXX8&urlid=&type=purchase&value=1&noscript=1";
        }
      }
      else {
        // Filter out clicks to CDN and subdomains so we only log clicks to external sites
        internal = new RegExp("^(#|https?:\\/\\/([A-z\\d]+\\.)?nodepositcasino\\.org)", "i");
        if (!internal.test(this.href)) {
          ga('send', 'event', 'Link', 'ClickOff', this.href.replace(/^https?:\/\//i, ''));
        }
      }
    }
  });
})();