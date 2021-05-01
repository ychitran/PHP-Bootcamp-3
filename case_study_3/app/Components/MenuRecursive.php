<?php

namespace App\Components;


class MenuRecursive
{
    private $menus;
    private $htmlSelect = '';

    public function __construct($menus)
    {
        $this->menus = $menus;
    }

    public function menuRecursive($parent_id, $id = 0, $text = '')
    {
        foreach ($this->menus as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_id) && $parent_id == $value['id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                }

                $this->menuRecursive($parent_id, $value['id'], $text . " - ");
            }
        }
        return $this->htmlSelect;
    }
}
