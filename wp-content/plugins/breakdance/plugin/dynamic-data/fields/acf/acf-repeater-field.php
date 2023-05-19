<?php

namespace Breakdance\DynamicData;

class AcfRepeaterField extends RepeaterField
{
    /**
     * @var ACFField
     */
    public array $field;

    /**
     * @param ACFField $field
     */
    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * @inheritDoc
     */
    public function label()
    {
        return $this->field['label'];
    }

    /**
     * @inheritDoc
     */
    public function slug()
    {
        return 'acf_repeater_' . $this->field['key'];
    }

    /**
     * @inheritDoc
     */
    public function parentField()
    {
        return DynamicDataController::getInstance()->getField('acf_repeater_' . $this->field['parent_key']);
    }

    /**
     * @param $postId
     * @return bool
     */
    public function hasSubFields($postId = false)
    {
        if ($this->field['is_sub_field'] && !acf_get_loop('active')) {
            $parentField = $this->parentField();
            if ($parentField) {
                $parentField->hasSubFields($postId);
            }
        }
        return has_sub_fields($this->field['name'], $postId);
    }

    /**
     * @inheritDoc
     */
    public function setSubFieldIndex($index) {
        acf_update_loop( 'active', 'i', $index);
    }
}
