<?php

namespace ride\web\documentation;

use ride\library\event\Event;

use ride\web\base\view\MenuItem;
use ride\web\base\view\Menu;

class ApplicationListener {

    public function prepareTaskbar(Event $event) {
        $taskbar = $event->getArgument('taskbar');

        $menu = new Menu();
        $menu->setTranslation('title.documentation');

        $menuItem = new MenuItem();
        $menuItem->setTranslation('title.api');
        $menuItem->setRoute('api');
        $menu->addMenuItem($menuItem);

        $menuItem = new MenuItem();
        $menuItem->setTranslation('title.manual');
        $menuItem->setRoute('manual');
        $menu->addMenuItem($menuItem);

        $taskbar->getSettingsMenu()->addMenu($menu);
    }

}