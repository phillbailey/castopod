<?php

declare(strict_types=1);

namespace Modules\Plugins\Manifest;

use CodeIgniter\HTTP\URI;
use Exception;

/**
 * @property string $name
 * @property ?string $email
 * @property ?URI $url
 */
class Author extends ManifestObject
{
    protected const VALIDATION_RULES = [
        'name'  => 'required',
        'email' => 'permit_empty|valid_email',
        'url'   => 'permit_empty|valid_url_strict',
    ];

    protected const AUTHOR_STRING_PATTERN = '/^(?<name>[^<>()]*)\s*(<(?<email>.*)>)?\s*(\((?<url>.*)\))?$/';

    /**
     * @var array<string,array{string}|string>
     */
    protected const CASTS = [
        'url' => URI::class,
    ];

    protected string $name;

    protected ?string $email = null;

    protected ?URI $url = null;

    public function __construct(array|string $data)
    {
        if (is_string($data)) {
            $result = preg_match(self::AUTHOR_STRING_PATTERN, $data, $matches);

            if (! $result) {
                throw new Exception('Author string is not valid.');
            }

            $data = [
                'name'  => $matches['name'],
                'email' => $matches['email'],
                'url'   => $matches['url'],
            ];
        }

        parent::__construct($data);
    }
}
