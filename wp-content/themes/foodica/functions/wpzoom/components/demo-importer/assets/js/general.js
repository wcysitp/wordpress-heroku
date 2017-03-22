/**
 * Theme demo content import functionality
 */
var wpzoomIframeScrollIntervalID;

jQuery(document).ready(function ($) {
    $("#misc_load_demo_content").click(function (e) {
        e.preventDefault();

        if (!confirm("Are you sure you want to load the demo content? This action cannot be undone!")) {
            return false;
        }

        $("#wpzoom-demo-content-iframe-wrapper").prev('.clear').addBack().remove();
        $(this).parent().find(".cleaner").before('<div class="clear"></div><div id="wpzoom-demo-content-iframe-wrapper"><span class="spinner"></span><iframe src="' + wpzoom_ajax_url + '?action=wpzoom_demo_content&type=demo_content&_ajax_nonce=' + $("#nonce").val() + '" id="wpzoom-demo-content-iframe" /></div>');
        $("html, body").animate({scrollTop: $("#wpzoom-demo-content-iframe-wrapper").offset().top - $("#wpadminbar").outerHeight() - 10}, 1000);
        wpzoomIframeScrollIntervalID = window.setInterval(function () {
            var iframe = $("#wpzoom-demo-content-iframe").contents();
            iframe.scrollTop(iframe.height());
        }, 200);
        $(this).prop("disabled", true);

        return false;
    });

    if (!wpzoom_admin_pointer_is_dismissed("wpzoom_pointer_demo_content_importer")) {
        $("#wzm-importexport")
            .pointer({
                content: "<h3>Demo Content Importer</h3><p>You can now import the demo content for WPZOOM themes from the <em>Demo Content</em> section here under Import/Export.</p>",
                position: {edge: "left", align: "center"},
                close: function () {
                    $(this).data('wpPointer')._setOption('disabled', true);
                    $.post(ajaxurl, {
                            action: "dismiss-wp-pointer",
                            pointer: "wpzoom_pointer_demo_content_importer"
                        }
                    );
                }
            }).pointer("open");

        /* Listen for nav menu changes and reposition the pointer */
        $('#zoomWrap').on('zoom:nav:changed', function () {
            _.delay(function () {
                $("#wzm-importexport").data('wpPointer').reposition();
            }, 600);
        });
    }
});

function wpzoom_load_demo_content_done() {
    clearInterval(wpzoomIframeScrollIntervalID);
    jQuery("#misc_load_demo_content").prop("disabled", false);
    jQuery("#wpzoom-demo-content-iframe-wrapper .spinner").css("visibility", "hidden");
    jQuery('body').trigger('wpzoom:load_demo_content:done');
}

function wpzoom_admin_pointer_is_dismissed(id) {
    return "dismissedPointers" in zoomFramework && jQuery.isArray(zoomFramework.dismissedPointers) && jQuery.inArray(id, zoomFramework.dismissedPointers) != -1;
}