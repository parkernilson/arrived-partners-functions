/**
 * Javascript Functions for the ArrivedPartners.com website.
 */

/** The "small" responsive breakpoint that wordpress uses */
const wpBreakSmall = 600;

/**
 * Disable the specified class (if it exists) on the html element by
 * adding -disabled to the class name.
 */
function disableClass(obj, cls) {
    if (obj.className.includes(cls + " ")) {
        obj.className = obj.className.replace(cls, cls + "-disabled");
    }
}

/**
 * Enable the specified class (if it exists with the -disabled suffix)
 * on the html element by removing -disabled from the class name.
 */
function enableClass(obj, cls) {
    if (obj.className.includes(cls + '-disabled')) {
        obj.className = obj.className.replace(cls + '-disabled', cls);
    }
}

/**
 * Ensure that wp media text blocks are responsive
 * (By disabling has-media-on-the-right for mobile stacked
 * media text blocks)
 */
function ensureResponsiveWpBlockMediaText($) {
    if(window.innerWidth > wpBreakSmall) {
        for (var obj of $(".wp-block-media-text")) {
            if (obj.className.includes("is-stacked-on-mobile")) {
                enableClass(obj, "has-media-on-the-right");
            }
        }
    } else {
        for (var obj of $(".wp-block-media-text")) {
            if (obj.className.includes("is-stacked-on-mobile")) {
                disableClass(obj, "has-media-on-the-right");
            }
        }
    }
}

(function($) {
    $(document).ready(function() {
        //TODO: announce activation of script in the console for debugging purposes
        console.log("ArrivedPartners Functions: Activating...");

        // When the website starts up, ensure that the wp media text blocks are responsive
        ensureResponsiveWpBlockMediaText($);

        // Make WP Media Text blocks responsive by disabling the 
        $(window).resize(function () {
            ensureResponsiveWpBlockMediaText($);
        });

    });
})(jQuery)