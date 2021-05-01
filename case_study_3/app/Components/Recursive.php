<?php

namespace App\Components;


class Recursive
{
    private $categories;
    private $htmlSelect = '';

    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    public function categoryRecursive($parent_id, $id = 0, $text = '')
    {
        foreach ($this->categories as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_id) && $parent_id == $value['id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                }

                $this->categoryRecursive($parent_id, $value['id'], $text . " - ");
            }
        }
        return $this->htmlSelect;
    }
}
