<?php

Breadcrumbs::for('admin.post.index', function ($trail) {
    $trail->parent('admin.post.index');
    $trail->push(__('menus.backend.access.roles.management'), route('admin.post.index'));
});


Breadcrumbs::for('admin.post.create', function ($trail) {
    $trail->parent('admin.post.index');
    $trail->push(__('menus.backend.access.roles.create'), route('admin.post.create'));
});