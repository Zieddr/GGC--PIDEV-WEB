<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD6CIns0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD6CIns0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD6CIns0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD6CIns0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerD6CIns0\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'D6CIns0',
    'container.build_id' => 'f84b81bb',
    'container.build_time' => 1649432487,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD6CIns0');
