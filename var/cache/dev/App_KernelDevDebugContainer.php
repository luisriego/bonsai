<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOTqFA7J\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOTqFA7J/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOTqFA7J.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOTqFA7J\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOTqFA7J\App_KernelDevDebugContainer([
    'container.build_hash' => 'OTqFA7J',
    'container.build_id' => '03b2856c',
    'container.build_time' => 1622717021,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOTqFA7J');