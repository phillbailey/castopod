<?php

declare(strict_types=1);

namespace Modules\Api\Rest\V1\Controllers;

use App\Entities\Credit;
use App\Models\CreditModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use Modules\Api\Rest\V1\Config\Services;

class CreditController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        Services::restApiExceptions()->initialize();
    }

    public function list(int $podcastId = null, $episodeId = null): ResponseInterface
    {
        $query = $this->request->getGet('query');
        $podcastIds = $this->request->getGet('podcastIds');
        $episodeIds = $this->request->getGet('episodeIds');

        $builder = (new CreditModel());

        if ($podcastId !== null) {
            $builder->where('podcast_id', (string) $podcastId);
            if ($episodeId !== null) {
                $builder->where('episode_id', (string) $episodeId);
            }
        } else {
            if ($podcastIds !== null) {
                $builder->whereIn('podcast_id', explode(',', (string) $podcastIds));
            }

            if ($episodeIds !== null) {
                $builder->whereIn('episode_id', explode(',', (string) $episodeIds));
            }
        }

        $data = $builder->findAll(
            (int) ($this->request->getGet('limit') ?? config('RestApi')->limit),
            (int) $this->request->getGet('offset')
        );

        array_map(static function ($credit): void {
            self::mapCredit($credit);
        }, $data);

        return $this->respond($data);
    }

    protected static function mapCredit(Credit $credit): Credit
    {
        $person = $credit->getPerson();
        $credit->information_url = $person->information_url;
        if (is_object($person->getAvatar())) {
            $avatar = [
                'url' => $person->getAvatar()
->file_url,
            ];
            foreach ($person->getAvatar()->sizes as $name => $size) {
                $avatar[$name] = [
                    'url' => $person->getAvatar()
->{$name . '_url'},
                    'width' => $person->getAvatar()
->sizes[$name]['width'],
                    'height' => $person->getAvatar()
->sizes[$name]['height'],
                ];
            }
        }
        $credit->avatar = $avatar ??= null;
        $credit->group = [
            'id'    => $credit->person_group,
            'label' => $credit->getGroupLabel(),
        ];
        $credit->role = [
            'id'    => $credit->person_role,
            'label' => $credit->getRoleLabel(),
        ];
        unset($credit->person_group);
        unset($credit->person_role);

        return $credit;
    }
}
