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

class SkillController extends Controller
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

    public function setSkillsCount($skillsCount){
        $this->skillsCount = $skillsCount;
    }
    public function getSkillsCount(){
        return $this->skillsCount;
    }

    public function setCertificatesCount($certificatesCount){
        $this->certificatesCount = $certificatesCount;
    }
    public function getCertificatesCount(){
        return $this->certificatesCount;
    }

    public function setProjectsCount($projectsCount){
        $this->projectsCount = $projectsCount;
    }
    public function getProjectsCount(){
        return $this->projectsCount;
    }

    public function setBackProjectsCount($backProjectsCount){
        $this->backProjectsCount = $backProjectsCount;
    }
    public function getBackProjectsCount(){
        return $this->backProjectsCount;
    }

    public function setEducationsCount($educationsCount){
        $this->educationsCount = $educationsCount;
    }
    public function getEducationsCount(){
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

    public function setContactsCount($contactsCount){
        $this->contactsCount = $contactsCount;
    }
    public function getContactsCount(){
        return $this->contactsCount;
    }

    public function setUsersCount($usersCount){
        $this->usersCount = $usersCount;
    }
    public function getUsersCount(){
        return $this->usersCount;
    }




    public function __construct(){
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
        $skills = Skill::orderBy('id', 'DESC')->paginate(10);
        $this->countsArr['skills'] = $skills;
        return view('admin.skill.skill', $this->countsArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create', $this->countsArr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percent' => 'numeric|min:1|max:100',
        ]);

        Skill::insert([
            'name' => $request->name,
            'percent' => $request->percent,
        ]);
        return redirect(route('skills.index'));
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
        $item = Skill::findOrFail($id);
        $this->countsArr['skill'] = $item;
        return view('admin.skill.edit', $this->countsArr);
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
        $request->validate([
            'name' => 'required',
            'percent' => 'numeric|min:1|max:100',
        ]);

        $item = Skill::findOrFail($id);
        $item->update([
            'name' => $request->name,
            'percent' => $request->percent,
        ]);
        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Skill::findOrFail($id);
        $item->delete();
        return redirect(route('skills.index'));
    }
}
