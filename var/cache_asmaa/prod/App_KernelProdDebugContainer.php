<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9EOZQoS\App_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9EOZQoS/App_KernelProdDebugContainer.php') {
    touch(__DIR__.'/Container9EOZQoS.legacy');

    return;
}

if (!\class_exists(App_KernelProdDebugContainer::class, false)) {
    \class_alias(\Container9EOZQoS\App_KernelProdDebugContainer::class, App_KernelProdDebugContainer::class, false);
}

return new \Container9EOZQoS\App_KernelProdDebugContainer([
    'container.build_hash' => '9EOZQoS',
    'container.build_id' => '0f1cceb6',
    'container.build_time' => 1604941038,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9EOZQoS');