<?php
namespace TurboLabIt\ShopifySdk\Request;

use Twig\Environment;
use TurboLabIt\ShopifySdk\Connector\ShopifyAdminConnector;



abstract class ShopifyBaseAdminRequest extends ShopifyBaseRequest
{
    public function __construct(protected Environment $twig, protected ShopifyAdminConnector $connector)
    { }
}
