<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Project;
use App\Models\BackProject;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;

class RecycleBinController extends Controller
{
    public $skillsCount;
    public $certificatesCount;
    public $projectsCount;
    public $backProjectsCount;
    public $educationsCount;
    public $experiencesCount;
    public $contactsCount;
    public $usersCount;
    public $countsArr;

    public function setSkillsCount($skillsCount)
    {
        $this->skillsCount = $skillsCount;
    }
    public function getSkillsCount()
    {
        return $this->skillsCount;
    }

    public function setCertificatesCount($certificatesCount)
    {
        $this->certificatesCount = $certificatesCount;
    }
    public function getCertificatesCount()
    {
        return $this->certificatesCount;
    }

    public function setProjectsCount($projectsCount)
    {
        $this->projectsCount = $projectsCount;
    }
    public function getProjectsCount()
    {
        return $this->projectsCount;
    }

    public function setBackProjectsCount($backProjectsCount)
    {
        $this->backProjectsCount = $backProjectsCount;
    }
    public function getBackProjectsCount()
    {
        return $this->backProjectsCount;
    }

    public function setEducationsCount($educationsCount)
    {
        $this->educationsCount = $educationsCount;
    }
    public function getEducationsCount()
    {
        return $this->educationsCount;
    }

    public function setExperiencesCount($experiencesCount)
    {
        $this->experiencesCount = $experiencesCount;
    }
    public function getExperiencesCount()
    {
        return $this->experiencesCount;
    }

    public function setContactsCount($contactsCount)
    {
        $this->contactsCount = $contactsCount;
    }
    public function getContactsCount()
    {
        return $this->contactsCount;
    }

    public function setUsersCount($usersCount)
    {
        $this->usersCount = $usersCount;
    }
    public function getUsersCount()
    {
        return $this->usersCount;
    }




    public function __construct()
    {
        $skillsCount = Skill::count();
        $this->setSkillsCount($skillsCount);

        $certificatesCount = Certificate::count();
        $this->setCertificatesCount($certificatesCount);

        $projectsCount = Project::count();
        $this->setProjectsCount($projectsCount);

        $backProjectsCount = BackProject::count();
        $this->setBackProjectsCount($backProjectsCount);

        $contactsCount = Contact::count();
        $this->setContactsCount($contactsCount);

        $educationsCount = Education::count();
        $this->setEducationsCount($educationsCount);

        $experiencesCount = Experience::count();
        $this->setExperiencesCount($experiencesCount);

        $usersCount = User::count();
        $this->setUsersCount($usersCount);

        $this->countsArr = [
            'projectsCount' => $this->getProjectsCount(),
            'skillsCount' => $this->getSkillsCount(),
            'certificatesCount' => $this->getCertificatesCount(),
            'backProjectsCount' => $this->getBackProjectsCount(),
            'educationsCount' => $this->getEducationsCount(),
            'experiencesCount' => $this->getExperiencesCount(),
            'contactsCount' => $this->getContactsCount(),
            'usersCount' => $this->getUsersCount(),
        ];
    }


    public function index($table)
    {
        $items = [];
        if ($table == 'skills') {
            $items = Skill::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'certificates') {
            $items = Certificate::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'projects') {
            $items = Project::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'back-projects') {
            $items = BackProject::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'educations') {
            $items = Education::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'experiences') {
            $items = Experience::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'contacts') {
            $items = Contact::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } elseif ($table == 'users') {
            $items = User::onlyTrashed()->orderBy('id', 'DESC')->paginate(10);
        } else {
            abort(404);
        }
        $this->countsArr['items'] = $items;
        $this->countsArr['tableName'] = $table;
        return view('admin.pages.recycle', $this->countsArr);
    }

    public function restore($table, $id)
    {
        $item = [];
        if ($table == 'skills') {
            $item = Skill::withTrashed()->find($id);
        } elseif ($table == 'certificates') {
            $item = Certificate::withTrashed()->find($id);
        } elseif ($table == 'projects') {
            $item = Project::withTrashed()->find($id);
        } elseif ($table == 'back-projects') {
            $item = BackProject::withTrashed()->find($id);
        } elseif ($table == 'educations') {
            $item = Education::withTrashed()->find($id);
        } elseif ($table == 'experiences') {
            $item = Experience::withTrashed()->find($id);
        } elseif ($table == 'contacts') {
            $item = Contact::withTrashed()->find($id);
        } elseif ($table == 'users') {
            $item = User::withTrashed()->find($id);
        } else {
            abort(404);
        }

        $item->restore();
        return redirect(route('recycleBin', ['table' => $table]));
    }


    public function forcedelete($table, $id)
    {
        $item = [];
        $img = '';
        $link = '';
        if ($table == 'skills') {
            $item = Skill::withTrashed()->find($id);
        } elseif ($table == 'certificates') {
            $item = Certificate::withTrashed()->find($id);
            $img = $item->img;
            $link = $item->link;
            Storage::delete($link);
        } elseif ($table == 'projects') {
            $item = Project::withTrashed()->find($id);
            $img = $item->img;
            $link = $item->link;
        } elseif ($table == 'back-projects') {
            $item = BackProject::withTrashed()->find($id);
            $img = $item->img;
            $link = $item->link;
        } elseif ($table == 'educations') {
            $item = Education::withTrashed()->find($id);
        } elseif ($table == 'experiences') {
            $item = Experience::withTrashed()->find($id);
        } elseif ($table == 'contacts') {
            $item = Contact::withTrashed()->find($id);
        } elseif ($table == 'users') {
            $item = User::withTrashed()->find($id);
        } else {
            abort(404);
        }

        $item->forceDelete();
        Storage::delete($img);
        return redirect(route('recycleBin', ['table' => $table]));
    }



    public function restoreAll($table)
    {
        if ($table == 'skills') {
            Skill::onlyTrashed()->restore();
        } elseif ($table == 'certificates') {
            Certificate::onlyTrashed()->restore();
        } elseif ($table == 'projects') {
            Project::onlyTrashed()->restore();
        } elseif ($table == 'back-projects') {
            BackProject::onlyTrashed()->restore();
        } elseif ($table == 'educations') {
            Education::onlyTrashed()->restore();
        } elseif ($table == 'experiences') {
            Experience::onlyTrashed()->restore();
        } elseif ($table == 'contacts') {
            Contact::onlyTrashed()->restore();
        } elseif ($table == 'users') {
            User::onlyTrashed()->restore();
        } else {
            abort(404);
        }

        return redirect(route('recycleBin', ['table' => $table]));
    }



    public function deleteAll($table)
    {
        if ($table == 'skills') {
            Skill::onlyTrashed()->forceDelete();
        } elseif ($table == 'certificates') {
            $items = Certificate::onlyTrashed()->get();
            foreach ($items as $item) {
                Storage::delete($item->link);
                Storage::delete($item->img);
            }
            Certificate::onlyTrashed()->forceDelete();
        } elseif ($table == 'projects') {
            $items = Project::onlyTrashed()->get();
            foreach ($items as $item) {
                Storage::delete($item->img);
            }
            Project::onlyTrashed()->forceDelete();
        } elseif ($table == 'back-projects') {
            $items = BackProject::onlyTrashed()->get();
            foreach ($items as $item) {
                Storage::delete($item->img);
            }
            BackProject::onlyTrashed()->forceDelete();
        } elseif ($table == 'educations') {
            Education::onlyTrashed()->forceDelete();
        } elseif ($table == 'experiences') {
            Experience::onlyTrashed()->forceDelete();
        } elseif ($table == 'contacts') {
            Contact::onlyTrashed()->forceDelete();
        } elseif ($table == 'users') {
            User::onlyTrashed()->forceDelete();
        } else {
            abort(404);
        }

        return redirect(route('recycleBin', ['table' => $table]));
    }
}
