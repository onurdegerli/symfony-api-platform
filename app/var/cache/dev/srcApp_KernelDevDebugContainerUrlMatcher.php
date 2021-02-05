<?php

use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:77)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:107)'
                            .'|c(?'
                                .'|ontexts/(.+)(?:\\.([^/]++))?(*:146)'
                                .'|heese_listings(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:189)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:227)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            77 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            107 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            146 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            189 => [
                [['_route' => 'api_cheese_listings_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_cheese_listings_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            227 => [
                [['_route' => 'api_cheese_listings_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_cheese_listings_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_cheese_listings_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_cheese_listings_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CheeseListing', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
                [null, null, null, null, false, false, 0],
            ],
        ];
    }
}
