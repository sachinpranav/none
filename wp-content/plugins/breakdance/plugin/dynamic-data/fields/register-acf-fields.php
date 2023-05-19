<?php

namespace Breakdance\DynamicData;

if ( !class_exists( '\acf' ) && !function_exists( 'acf_get_field_groups' ) ) {
    return; // Bail out if ACF is not installed.
}
$defaultFields = [AcfField::class];
$fieldsMap = [
    'link' => [AcfLinkField::class],
    'image' => [AcfImageField::class, AcfImageUrlField::class],
    'url' => [AcfField::class, AcfImageField::class],
    'oembed' => [AcfOembedField::class],
    'gallery' => [AcfGalleryField::class, AcfGalleryImageField::class],
    'google_map' => [AcfGoogleMapsField::class],
    'user' => [AcfUserField::class],
    'taxonomy' => [AcfTaxonomyField::class],
    'checkbox' => [AcfCheckboxField::class],
    'post_object' => [AcfPostField::class],
    'repeater' => [AcfRepeaterField::class],
];

$excludedFieldTypes = [
    'message',
    'tab',
    'group',
    'accordion',
    'flexible_content',
    'clone',
    'taxonomy'
];

$fields = \Breakdance\DynamicData\get_acf_fields(null, $excludedFieldTypes);

foreach($fields as $field) {
    $dynamicFields = $fieldsMap[$field['type']] ?? $defaultFields;
    foreach ($dynamicFields as $dynamicField) {
        if (class_exists($dynamicField)) {
            DynamicDataController::getInstance()->registerField(
                new $dynamicField($field)
            );
        }
    }
}

