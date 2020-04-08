<?php

namespace App\Http\Controllers\Admin;

use App\Chapter;
use App\Course;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChapterWrite;
use App\Http\Requests\CourseWrite;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //课程列表
    public function index(Request $request ,Course $course){
        $courses = $course->orderBy('sort','asc')->get();
        $data = [
            'courses' =>$courses,
        ];
        return view('admin.course.index',$data);

    }

    //课程详细
    public function detail(Request $request,Course $course){
        $data = [
            'course' => $course
        ];
        return view('admin.course.detail',$data);

    }

    //课程添加编辑

    public function add(Request $request,Course $course){
        $data = [
            'course' => $course
        ];
        return view('admin.course.add',$data);

    }

    //课程保存

    public function save(CourseWrite $request,Course $course,File $fileModel){
        $data = $request->validated();
        $data['image'] = '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file =$request->file('image');
            if(!in_array($file->extension(),config('project.upload.image'))){
                alert('不被允许的文件类型','danger');
                return redirect()->back();
            }
            $data['image'] = $file->store('course','public');
            $fileModel->saveFile('course_image',$data['image'],$file);
        }
        if($course->id){
            $course->update($data);
        }
        else{
            $course->create($data);
        }
        

        alert('操作成功');
        return back();


    }

    //课程移除
    public function remove(Request $request,Course $course){
        $course->delete();
        alert('删除成功');
        return back();

        

    }

    //章节添加编辑
    public function chapterAdd(ChapterWrite $request,Course $course,Chapter $chapter){
        $data = [
            'course'=>$course,
            'chapter'=>$chapter
        ];
        return view('admin.course.chapter_add',$data);

    }

    //章节保存
    public function chapterSave(ChapterWrite $request,Course $course,Chapter $chapter){
        $data= $request->validated();
        dump($data);

    }

    //章节移除
    public function chapterRemove(Request $request,Course $course,Chapter $chapter){

    }

    //资源关联
    public function ResourceAdd(Request $request,Course $course,Chapter $chapter){
        $data = [];
        return view('admin.course.resource_add',$data);

    }

    //资源保存
    public function ResourceSave(Request $request,Course $course,Chapter $chapter){

    }
}
