<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Project;
use App\Models\BackProject;
use App\Models\Education;
use App\Models\Experience;

class PagesController extends Controller
{
    public $certificates;
    public $skills;
    public $projectsIndex;
    public $projects;
    public $backProjects;
    public $educations;
    public $experiences;

    public function setCertificate($certificates){
        $this->certificates = $certificates;
    }
    public function getCertificate(){
        return $this->certificates;
    }

    public function setSkill($skills){
        $this->skills = $skills;
    }
    public function getSkill(){
        return $this->skills;
    }

    public function setProjectIndex($projectsIndex){
        $this->projectsIndex = $projectsIndex;
    }
    public function getProjectIndex(){
        return $this->projectsIndex;
    }

    public function setProject($projects){
        $this->projects = $projects;
    }
    public function getProject(){
        return $this->projects;
    }

    public function setBackProject($backProjects){
        $this->backProjects = $backProjects;
    }
    public function getBackProject(){
        return $this->backProjects;
    }

    public function setEducations($educations){
        $this->educations = $educations;
    }
    public function getEducations(){
        return $this->educations;
    }

    public function setExperiences($experiences){
        $this->experiences = $experiences;
    }
    public function getExperiences(){
        return $this->experiences;
    }



    public function index(){
        $certificates = Certificate::get();
        $this->setCertificate($certificates);

        $skills = Skill::get();
        $this->setSkill($skills);

        $educations = Education::orderBy('id', 'DESC')->get();
        $this->setEducations($educations);

        $experiences = Experience::orderBy('id', 'DESC')->get();
        $this->setExperiences($experiences);

        $projectsIndex = Project::where('name', 'etecc')->orWhere('name',  'thomsoon')->orWhere('name', 'digital')
        ->orWhere('name', 'fusemap')->get();
        $this->setProjectIndex($projectsIndex);

        $backProjects = BackProject::where('name', 'burgerking')->orWhere('name', 'diana')->orWhere('name', 'thewayShop')
            ->orWhere('name', 'Justice Academy')->get();
        $this->setBackProject($backProjects);

        return view('index', [
            'title' => 'Portfolio',
            'certificates' => $this->getCertificate(),
            'skills' => $this->getSkill(),
            'educations' => $this->getEducations(),
            'experiences' => $this->getExperiences(),
            'projects' => $this->getProjectIndex(),
            'backProjects' => $this->getBackProject(),
            'user' => Auth::user(),
        ]);
    }






    public function projects(){
        $projects = Project::get();
        $this->setProject($projects);

        return view('projects', [
            'title' => 'Projects',
            'projects' => $this->getProject(),
            'user' => Auth::user(),
        ]);
    }






    public function backProjects(){
        $backProjects = BackProject::orderBy('id', 'DESC')->get();
        $this->setBackProject($backProjects);
        return view('backProjects', [
            'title' => 'back Projects',
            'backProjects' => $this->getBackProject(),
            'user' => Auth::user(),
        ]);
    }





    public function registration(){
        return view('registration', [
            'title' => 'Registration',
            'user' => Auth::user(),
        ]);
    }





    public function resumeDownload(){
        $file = public_path().'\media\img\CV.pdf';
        $headers = ['Content-Type: application/pdf'];

        return response()->download($file, "Simon's Resume.pdf", $headers);
    }
}
