<?php
use \Illuminate\Routing\Events\RouteMatched;
use \Illuminate\Support\Facades\Event;
use Ocart\Core\Forms\Field;

Event::listen(RouteMatched::class, function () {
    theme_options()->setField([
        'id' => 'address1',
        'section_id' => 'opt-general',
        'type' => Field::TEXT,
        'name' => 'address1',
        'label' => trans('Address') . ' 1',
        'attr' => [
            'placeholder' => trans('Address') . ' 2',
        ]
    ])->setField([
        'id' => 'address2',
        'section_id' => 'opt-general',
        'type' => Field::TEXT,
        'name' => 'address2',
        'label' => trans('Address') . ' 2',
        'attr' => [
            'placeholder' => trans('Address') . ' 2',
        ]
    ])->setField([
        'id' => 'phone',
        'section_id' => 'opt-general',
        'type' => Field::TEXT,
        'name' => 'phone',
        'label' => trans('Hotline'),
        'attr' => [
            'placeholder' => trans('Phone Number'),
        ]
    ]);
});
