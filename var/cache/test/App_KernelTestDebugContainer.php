<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3CuwoGS\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3CuwoGS/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container3CuwoGS.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container3CuwoGS\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \Container3CuwoGS\App_KernelTestDebugContainer([
    'container.build_hash' => '3CuwoGS',
    'container.build_id' => '6bf206ef',
    'container.build_time' => 1622818810,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3CuwoGS');
