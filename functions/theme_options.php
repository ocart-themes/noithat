<?php
use \Illuminate\Routing\Events\RouteMatched;
use \Illuminate\Support\Facades\Event;
use Ocart\Core\Forms\Field;

Event::listen(RouteMatched::class, function () {
    theme_options()->setField([
        'id' => 'domain_web',
        'section_id' => 'opt-general',
        'type' => Field::TEXT,
        'name' => 'domain_web',
        'label' => trans('Domain Web'),
        'attr' => [
            'placeholder' => trans('Domain Web'),
        ]
    ])->setField([
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
    ])->setField([
        'id' => 'section_list',
        'section_id' => 'opt-sections',
        'type' => Field::TEXT,
        'name' => 'section_list',
        'label' => trans('Section List'),
        'attr' => [
            'placeholder' => trans('["banner","banner2","banner3","blog1","blog2","blog3","blog4","blog5","blog6","slide","slide2","slide3"]'),
        ]
    ]);
});
