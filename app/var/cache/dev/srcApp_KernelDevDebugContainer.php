<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAysy7h2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAysy7h2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAysy7h2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAysy7h2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAysy7h2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Aysy7h2',
    'container.build_id' => '2382a63b',
    'container.build_time' => 1612620229,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAysy7h2');
