define(["jquery", "bootstrap"], function ($) {

    function isObject(value) {
        return value && typeof value === 'object' && value.constructor === Object;
    }

    function createToast(type, content, title) {
        let backgroundClass = "";
        let textClass = "";
        let html = '';
        let _content = (isObject(content)) ? content.message : content;

        switch (type) {
            case 'info':
                backgroundClass = 'bg-info';
                textClass = 'text-white';
                break;

            case 'success':
                backgroundClass = 'bg-success';
                textClass = 'text-white';
                break;

            case 'warning':
            case 'warn':
                backgroundClass = 'bg-warning';
                textClass = 'text-white'; 
                break;

            case 'error':
            case 'danger':
                backgroundClass = 'bg-danger';
                textClass = 'text-white';
                break;
        }

        html += '<div class="toast ' + backgroundClass + ' ' + textClass + '" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: relative; z-index: 9999999999">';

        if (title) {
            html += '<div class="toast-header">';
            html += '    <span class="mr-auto"> ' + title + ' </span>';
            html += '    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">';
            html += '        <span aria-hidden="true">&times;</span>';
            html += '    </button>';
            html += '</div>';
        }

        html += '    <div class="toast-body">';
        html += _content;
        html += '    </div>';
        html += '</div>';

        $("#toasts-container").append(html);

        $(".toast").toast('show');

        $(".toast").click(function (evt) {
            evt.preventDefault();
            $(this).toast('hide')
        });

        $("body").on("hidden.bs.toast", ".toast", function () {
            $(this).remove();
        });
    }

    var module = {
        info: function (content, title) {
            createToast("info", content, title);
        },
        success: function (content, title) {
            createToast("success", content, title);
        },
        warning: function (content, title) {
            createToast("warning", content, title);
        },
        warn: function (content, title) {
            createToast("warn", content, title);
        },
        error: function (content, title) {
            createToast("error", content, title);
        },
        danger: function (content, title) {
            createToast("danger", content, title);
        },
        clear: function () {
            $('.toast').each(function (v, i) {
                $(this).remove();
            });
        }
    };

    return module;
});