<?php 
class menuItem {
    public $id;
    public $title;
    public $parent_id;

    public function __construct($id, $title, $parent_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->parent_id = $parent_id;
    }
}

$menu = [
    new menuItem(1, "Thể Thao", 0),
    new menuItem(2, "Xã Hội", 0),
    new menuItem(3, "Thể Thao Trong Nước", 1),
    new menuItem(4, "Giao Thông", 2),
    new menuItem(5, "Môi Trường", 2),
    new menuItem(6, "Thể Thao Quốc tế", 1),
    new menuItem(7, "Môi Trường Đô Thị", 5),
    new menuItem(8, "Giao Thông ùn tắc", 4),
];

function getMenu($listMenuItem, $parent, $shift)
{
    foreach($listMenuItem as $menuItem)
    {
        if($menuItem->parent_id === $parent)
        {
            echo $shift.$menuItem->title.'<br/>';

            getMenu($listMenuItem, $menuItem->id, $shift.'--');
        }
    }
}

getMenu($menu, 0, '');