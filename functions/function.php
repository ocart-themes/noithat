<?php

\Ocart\Page\Supports\Template::registerTemplate([
    'guest' => 'Guest'
]);

TnMedia::addSize('medium', '400', '250');

if (is_active_plugin('contact')) {
    add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
        return 'theme::shortcodes.contact-form';
    });
}