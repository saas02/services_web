<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD8V2B7J\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD8V2B7J/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD8V2B7J.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD8V2B7J\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerD8V2B7J\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'D8V2B7J',
    'container.build_id' => 'f6dc4d3a',
    'container.build_time' => 1591756637,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD8V2B7J');
