<?php

\Ocart\Page\Supports\Template::registerTemplate([
    'guest' => 'Guest'
]);

TnMedia::addSize('medium', '300', '300');
TnMedia::addSize('large', '1080', '1080');

if (is_active_plugin('contact')) {
    add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
        return 'theme::shortcodes.contact-form';
    });
}
