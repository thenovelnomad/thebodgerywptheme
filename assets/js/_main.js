

/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

$(function () {
  var $needle = $('#needle'), needleTo = 0, rect = {}, $active = $('li.active a');
  if ($needle.length) {
    if ($active.length) {
      rect = $active[0].getBoundingClientRect();
      needleTo = rect.left + (rect.width / 2) - 12;
    } else {
      needleTo = document.body.getBoundingClientRect().width / 2;
    }
    $needle.css('left', needleTo + 'px');
    $('nav a').hover(function (e) {
      rect = this.getBoundingClientRect();
      $needle.css('left', (rect.left + (rect.width / 2) - 12) + 'px');
    });
  }
});

function sendAJAX(url, method, callback, data, headers) {
    try {
      var xhReq = new XMLHttpRequest(),
        xhTimeout = setTimeout(function () {xhReq.abort();}, 45000);
      if (method !== "POST" && method !== "GET" && method !== "PUT" && method !== "DELETE") {
        return false;
      }
      xhReq.open(method, url);
      if (typeof(headers) !== "undefined") {
        for (var i = 0; i < headers.headers.length; i++) {
          xhReq.setRequestHeader(headers.headers[i].type, headers.headers[i].value);
        }
      }
      xhReq.onreadystatechange = function () {
        if (xhReq.readyState !== 4){ return;}
        clearTimeout(xhTimeout);
        callback(xhReq);
      };
      if (xhReq.readyState === 4 ){ return xhReq;}
      xhReq.send(data);
    } catch (ex) {
      catchError(ex);
    }
  }
  function checkStatus() {
    sendAJAX('http://localhost/bodgery/misc/checkstatus.php', 'GET', function (resp) {
      if (resp.status === 200) {
        var data = JSON.parse(resp.responseText);
        if (data && (data.status === "1")) {
          $status.className = 'open';
        } else {
          $status.className = 'closed';
        }
      }
    });
  }
  var $status = {};
  document.addEventListener('DOMContentLoaded', function () {
    $status = document.getElementById('statusSign');
    if ($status) {
      window.setInterval(checkStatus, 30000);
      checkStatus();
    }
  });


})(jQuery); // Fully reference jQuery after this point.
