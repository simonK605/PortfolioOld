<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Project;
use App\Models\BackProject;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;

class EducationController extends Controller
{
    public $skillsCount;
    public $certificatesCount;
    public $projectsCount;
    public $backProjectsCount;
    public $contactsCount;
    public $educationsCount;
    public $experiencesCount;
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

    public function setContactsCount($contactsCount)
    {
        $this->contactsCount = $contactsCount;
    }
    public function getContactsCount()
    {
        return $this->contactsCount;
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::orderBy('id', 'DESC')->paginate(10);
        $this->countsArr['educations'] = $educations;
        return view('admin.education.education', $this->countsArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education.create', $this->countsArr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Education::insert([
            'name' => $request->name,
            'profession' => $request->profession,
            'date' => $request->date,
        ]);
        return redirect(route('educations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Education::findOrFail($id);
        $this->countsArr['education'] = $item;
        return view('admin.education.edit', $this->countsArr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Education::findOrFail($id);
        $item->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'date' => $request->date,
        ]);
        return redirect(route('educations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Education::findOrFail($id);
        $item->delete();
        return redirect(route('educations.index'));
    }
}
