<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Controllers\Admin;

use App\Authorization\GroupModel;
use App\Models\PodcastModel;
use App\Models\UserModel;

class Contributor extends BaseController
{
    /**
     * @var \App\Entities\Podcast
     */
    protected $podcast;

    /**
     * @var \App\Entities\User|null
     */
    protected $user;

    public function _remap($method, ...$params)
    {
        $this->podcast = (new PodcastModel())->getPodcastById($params[0]);

        if (count($params) > 1) {
            if (
                !($this->user = (new UserModel())->getPodcastContributor(
                    $params[1],
                    $params[0]
                ))
            ) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }

        return $this->$method();
    }

    public function list()
    {
        $data = [
            'podcast' => $this->podcast,
        ];

        replace_breadcrumb_params([0 => $this->podcast->title]);
        return view('admin/contributor/list', $data);
    }

    public function view()
    {
        $data = [
            'contributor' => (new UserModel())->getPodcastContributor(
                $this->user->id,
                $this->podcast->id
            ),
        ];

        replace_breadcrumb_params([
            0 => $this->podcast->title,
            1 => $this->user->username,
        ]);
        return view('admin/contributor/view', $data);
    }

    public function add()
    {
        helper('form');

        $users = (new UserModel())->findAll();
        $userOptions = array_reduce(
            $users,
            function ($result, $user) {
                $result[$user->id] = $user->username;
                return $result;
            },
            []
        );

        $roles = (new GroupModel())->getContributorRoles();
        $roleOptions = array_reduce(
            $roles,
            function ($result, $role) {
                $result[$role->id] = lang('Contributor.roles.' . $role->name);
                return $result;
            },
            []
        );

        $data = [
            'podcast' => $this->podcast,
            'userOptions' => $userOptions,
            'roleOptions' => $roleOptions,
        ];

        replace_breadcrumb_params([0 => $this->podcast->title]);
        return view('admin/contributor/add', $data);
    }

    public function attemptAdd()
    {
        try {
            (new PodcastModel())->addPodcastContributor(
                $this->request->getPost('user'),
                $this->podcast->id,
                $this->request->getPost('role')
            );
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', [
                    lang('Contributor.messages.alreadyAddedError'),
                ]);
        }

        return redirect()->route('contributor-list', [$this->podcast->id]);
    }

    public function edit()
    {
        helper('form');

        $roles = (new GroupModel())->getContributorRoles();
        $roleOptions = array_reduce(
            $roles,
            function ($result, $role) {
                $result[$role->id] = lang('Contributor.roles.' . $role->name);
                return $result;
            },
            []
        );

        $data = [
            'podcast' => $this->podcast,
            'user' => $this->user,
            'contributorGroupId' => (new PodcastModel())->getContributorGroupId(
                $this->user->id,
                $this->podcast->id
            ),
            'roleOptions' => $roleOptions,
        ];

        replace_breadcrumb_params([
            0 => $this->podcast->title,
            1 => $this->user->username,
        ]);
        return view('admin/contributor/edit', $data);
    }

    public function attemptEdit()
    {
        (new PodcastModel())->updatePodcastContributor(
            $this->user->id,
            $this->podcast->id,
            $this->request->getPost('role')
        );

        return redirect()->route('contributor-list', [$this->podcast->id]);
    }

    public function remove()
    {
        if ($this->podcast->created_by == $this->user->id) {
            return redirect()
                ->back()
                ->with('errors', [
                    lang('Contributor.messages.removeOwnerContributorError'),
                ]);
        }

        $podcastModel = new PodcastModel();
        if (
            !$podcastModel->removePodcastContributor(
                $this->user->id,
                $this->podcast->id
            )
        ) {
            return redirect()
                ->back()
                ->with('errors', $podcastModel->errors());
        }

        return redirect()
            ->back()
            ->with(
                'message',
                lang('Contributor.messages.removeContributorSuccess', [
                    'username' => $this->user->username,
                    'podcastTitle' => $this->podcast->title,
                ])
            );
    }
}