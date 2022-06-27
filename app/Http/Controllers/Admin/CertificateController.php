<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

class CertificateController extends Controller
{
    public $skillsCount;
    public $certificatesCount;
    public $backProjectsCount;
    public $projectsCount;
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
        $certificateCount = Certificate::count();
        $this->setCertificatesCount($certificateCount);
        
        $skillsCount = Skill::count();
        $this->setSkillsCount($skillsCount);
        
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
        $certificates = Certificate::orderBy('id', 'DESC')->paginate(10);

        $this->countsArr['certificates'] = $certificates;
        return view('admin.certificate.certificate', $this->countsArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificate.create', $this->countsArr);
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
            'img' => 'required',
            'link' => 'required',
        ]);
        $pathImg = $request->file('img')->store('certificates');
        $pathPdf = $request->file('link')->store('certificates');

        Certificate::insert([
            'name' => $request->name,
            'img' => $pathImg,
            'link' => $pathPdf,
        ]);
        return redirect(route('certificates.index'));
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
        $item = Certificate::findOrFail($id);
        $this->countsArr['certificate'] = $item;
        return view('admin.certificate.edit', $this->countsArr);
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
        $img = $request->imgHid;
        $link = $request->linkHid;

        if(!empty($request->img)){
            Storage::delete($request->imgHid);
            $img = $request->file('img')->store('certificates');
        }
        if(!empty($request->link)){
            Storage::delete($request->linkHid);
            $link = $request->file('link')->store('certificates');
        }
        $item = Certificate::findorFail($id);
        $item->update([
            'name' => $request->name,
            'img' => $img,
            'link' => $link,
        ]);
        return redirect(route('certificates.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Certificate::findorFail($id);
        $item->delete();
        return redirect(route('certificates.index'));
    }
}
