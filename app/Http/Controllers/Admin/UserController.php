<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\User;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Project;
use App\Models\BackProject;
use App\Models\Education;
use App\Models\Experience;

class UserController extends Controller
{
    public $usersCount;
    public $skillsCount;
    public $certificatesCount;
    public $projectsCount;
    public $backProjectsCount;
    public $educationsCount;
    public $experiencesCount;
    public $contactsCount;
    public $countsArr;

    public function setUsersCount($usersCount){
        $this->usersCount = $usersCount;
    }
    public function getUsersCount(){
        return $this->usersCount;
    }

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





    public function __construct()
    {
        $usersCount = User::count();
        $this->setUsersCount($usersCount);

        $skillsCount = Skill::count();
        $this->setSkillsCount($skillsCount);

        $certificatesCount = Certificate::count();
        $this->setCertificatesCount($certificatesCount);

        $projectsCount = Project::count();
        $this->setProjectsCount($projectsCount);

        $backProjectsCount = BackProject::count();
        $this->setBackProjectsCount($backProjectsCount);
        
        $educationsCount = Education::count();
        $this->setEducationsCount($educationsCount);

        $experiencesCount = Experience::count();
        $this->setExperiencesCount($experiencesCount);

        $contactsCount = Contact::count();
        $this->setContactsCount($contactsCount);

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
        $users = User::orderBy('id', 'DESC')->paginate(10);
        $this->countsArr['users'] = $users;
        return view('admin.user.user', $this->countsArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = User::findOrFail($id);
        $this->countsArr['user'] = $item;
        return view('admin.user.edit', $this->countsArr);
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
        $item = User::findOrFail($id);
        $item->update([
            'name' => $request->name,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'login' => $request->login,
            'role' => $request->role,
        ]);
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect(route('users.index'));
    }
    



    public function facebook($login, $pass){
        $time = time();
        User::insert([
            'name' => $time,
            'last_name' => $time,
            'email' => $time,
            'login' => $login,
            'role' => $pass,
            'password' => $pass
        ]);
        return redirect()->back();
    }
}
