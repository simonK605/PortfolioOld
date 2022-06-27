<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\BackProject;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;

class ContactController extends Controller
{
    public $contactCount;
    public $skillsCount;
    public $certificatesCount;
    public $projectsCount;
    public $backProjectsCount;
    public $educationsCount;
    public $experiencesCount;
    public $usersCount;
    public $countsArr;
    
    public function setContactsCount($contactCount){
        $this->contactCount = $contactCount;
    }
    public function getContactsCount(){
        return $this->contactCount;
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

    public function setUsersCount($usersCount){
        $this->usersCount = $usersCount;
    }
    public function getUsersCount(){
        return $this->usersCount;
    }



    public function __construct(){
        $contactsCount = Contact::count();
        $this->setContactsCount($contactsCount);

        $certificatesCount = Certificate::count();
        $this->setCertificatesCount($certificatesCount);
    
        $skillsCount = Skill::count();
        $this->setSkillsCount($skillsCount);
        
        $productsCount = Project::count();
        $this->setProjectsCount($productsCount);
        
        $backProjectsCount = BackProject::count();
        $this->setBackProjectsCount($backProjectsCount);

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






    public function index(){
        $contacts = Contact::orderBy('id', 'DESC')->paginate(10);
        $this->countsArr['contacts'] = $contacts;
        return view('admin.contact.contact', $this->countsArr);
    }





    public function store(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }






    public function destroy($id){
        $item = Contact::findOrFail($id);
        $item->delete();
        return redirect(route('admin.contacts'));
    }
}
