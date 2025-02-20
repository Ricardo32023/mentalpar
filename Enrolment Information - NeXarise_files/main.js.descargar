require(["jquery","app", "forms", "bootstrap", "extensions"], function ($, app, forms) {
    $(function () {
        
        // Auto-create popovers for all links configured to be popovers
        $(document).popover({
            selector: 'a[data-toggle="popover"]',
            html: true,
            placement: 'top'
        });

        // Added logic to hide pop over when any other area of the page is clicked - Charles W.
        $(document).on("shown.bs.popover", function (e) {
            $('a[data-toggle="popover"]').not(e.target).popover("hide");
        });

        // Bind accordions to manage an active class
        $(document).on({
            'show.bs.collapse': function (event) {
                $(event.target).parents('.panel').addClass('active');
            },
            'hide.bs.collapse': function (event) {
                $(event.target).parents('.panel').removeClass('active');
            }
        });


        // Make Bootstrap dropdowns hoverable
        $('.dropdown-toggle').dropdownHover({
            delay: 250,
            instantlyCloseOthers: true,
            hoverDelay: 0
        });

        // Restrict appropriate field inputs by key
        forms.restrictInput('[data-restrict-input]');
    });

    
    // Start an application timeout feature
    if (app.authenticated) {
        require(["jquery", "idletimeout"], function ($) {
            $(function () {

                // Ensure that we have everything wrapped up for the smudging
                if ($('#__idlemask').length == 0) {
                    $('body').wrapInner('<div id="__idlemask"></div>');
                }

                // Inject the modal
                var modalHtml = [
                '<div class="modal" id="idletimeoutmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="idletimeoutmodalLabel" aria-hidden="true">',
                    '<div class="modal-dialog">',
                        '<div class="modal-content">',
                            '<div class="modal-header">',
                                '<h4 class="modal-title" id="idletimeoutmodalLabel">Are you still there?</h4>',
                            '</div>',
                            '<div class="modal-body">',
                                '<p>We notice you\'ve been idle for a while. To keep your account safe, we will sign you out in <span id="idletimeoutcountdown" style="font-weight:bold"></span> seconds.</p>',
                                '<p>Do you want to continue your session?</p>',
                            '</div>',
                            '<div class="modal-footer">',
                                '<button type="button" class="btn btn-primary">Yes, keep working</button>',
                                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="$.idleTimeout.options.onTimeout.call(this);">No, sign out</button>',
                            '</div>',
                        '</div>',
                    '</div>',
                '</div>'].join('');
                $('body').append(modalHtml);

                // Start the idle timer
                $.idleTimeout('#idletimeoutmodal', '#idletimeoutmodal .modal-footer button:first', {
                    keepAliveURL: app.path("app/keepalive"),
                    serverResponseEquals: "OK",
                    pollingInterval: 59,
                    idleAfter: (app.sessiontimeout - 3) * 60,
                    warningLength: 60,
                    onTimeout: function () {
                        window.location = app.path("/www/account/logout");
                    },
                    onIdle: function () {
                        $(this).modal("show");
                        $('#__idlemask').addClass('smudged');
                    },
                    onResume: function () {
                        $(this).modal("hide");
                        $('#__idlemask').removeClass('smudged');
                    },
                    onCountdown: function (counter) {
                        $("#idletimeoutcountdown").html(counter); // update the counter
                    }
                });
            });
        });
    }
});