<?php

declare(strict_types=1);

namespace Modules\Api\Rest\V1\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use Modules\Api\Rest\V1\Config\Services;
use Modules\Platforms\Entities\Platform;
use Modules\Platforms\Models\PlatformModel;

class PlatformController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        Services::restApiExceptions()->initialize();
    }

    public function list(int $podcastId, string $platformType = 'podcasting'): ResponseInterface
    {
        if (! in_array($platformType, ['podcasting', 'social', 'funding'], true)) {
            return $this->failNotFound('Platform of type not found');
        }

        $builder = (new PlatformModel());

        $data = $builder->getPlatformsWithData($podcastId, $platformType);

        $data = array_filter($data, static function (Platform $platform): bool {
            return $platform->is_visible;
        });

        return $this->respond($data);
    }
}
