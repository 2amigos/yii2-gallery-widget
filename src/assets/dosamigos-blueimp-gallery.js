/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
if (typeof dosamigos == "undefined" || !dosamigos) {
    var dosamigos = {};
}
dosamigos.gallery = (function($){
    var pub = {
        registerLightBoxHandlers: function(selector, options) {
            $(document).off('click.gallery', selector).on('click.gallery', selector, function() {
                var links = $(this).parent().find('a.gallery-item');
                var options = options || {};
                options.index = $(this)[0];
                blueimp.Gallery(links, options);
                return false;
            });
        }
    };
    return pub;
})(jQuery);