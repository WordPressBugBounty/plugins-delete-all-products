<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d9bf8c267a2108c3868131fe85b8832
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DAPRODS\\App\\Admin_Pages\\DeleteAllProductsAdmin' => __DIR__ . '/../..' . '/app/admin-pages/class-delete-all-products-admin.php',
        'DAPRODS\\App\\Endpoints\\V1\\ProductsDelete' => __DIR__ . '/../..' . '/app/endpoints/v1/class-products-delete.php',
        'DAPRODS\\App\\Endpoints\\V1\\ProductsRestore' => __DIR__ . '/../..' . '/app/endpoints/v1/class-products-restore.php',
        'DAPRODS\\App\\Endpoints\\V1\\ProductsSearch' => __DIR__ . '/../..' . '/app/endpoints/v1/class-products-search.php',
        'DAPRODS\\App\\Endpoints\\V1\\ProductsStat' => __DIR__ . '/../..' . '/app/endpoints/v1/class-products-stat.php',
        'DAPRODS\\App\\Endpoints\\V1\\ProductsTrash' => __DIR__ . '/../..' . '/app/endpoints/v1/class-products-trash.php',
        'DAPRODS\\App\\Endpoints\\V1\\Settings' => __DIR__ . '/../..' . '/app/endpoints/v1/class-settings.php',
        'DAPRODS\\Core\\Base' => __DIR__ . '/../..' . '/core/class-base.php',
        'DAPRODS\\Core\\Endpoint' => __DIR__ . '/../..' . '/core/class-endpoint.php',
        'DAPRODS\\Core\\Loader' => __DIR__ . '/../..' . '/core/class-loader.php',
        'DAPRODS\\Core\\ProductHelper' => __DIR__ . '/../..' . '/core/class-product-helper.php',
        'DAPRODS\\Core\\Singleton' => __DIR__ . '/../..' . '/core/class-singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6d9bf8c267a2108c3868131fe85b8832::$classMap;

        }, null, ClassLoader::class);
    }
}
