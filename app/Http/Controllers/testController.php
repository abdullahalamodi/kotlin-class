<?php

namespace App\Http\Controllers;
use App\Paper;
use App\Department_paper;
use App\Department;
;

use Illuminate\Http\Request;

class testController extends Controller
{
    
    public function test(){
        // $paper = new Paper();
        // $paper->title = "do projects";
        // $paper->save();

        // $paper2 = new Paper();
        // $paper2->title = "move employee";
        // $paper2->save();



        // $department = new Department();
        // $department->name="boss";
        // $department->phone="715556428";
        // $department->save();

        // $department2 = new Department();
        // $department2->name="muhafed";
        // $department2->phone="715556428";
        // $department2->save();

        // $department2 = new Department();
        // $department2->name="management";
        // $department2->phone="715556428";
        // $department2->save();

        // $craetePaper = new Department_paper();
        // $craetePaper->paper_id=1;
        // $craetePaper->department_id=1;
        // $craetePaper->type=2;
        // $craetePaper->save();
        // $craetePaper = new Department_paper();
        // $craetePaper->paper_id=1;
        // $craetePaper->department_id=2;
        // $craetePaper->type=1;
        // $craetePaper->save();

        // $craetePaper = new Department_paper();
        // $craetePaper->paper_id=2;
        // $craetePaper->department_id=1;
        // $craetePaper->type=1;
        // $craetePaper->save();

        // $craetePaper = new Department_paper();
        // $craetePaper->paper_id=2;
        // $craetePaper->department_id=3;
        // $craetePaper->type=1;
        // $craetePaper->save();


        $papers = Department_paper::all();
            foreach($papers as $item){
                echo("dep name : ".$item->department->name. "   for paper   : ".$item->paper->title."   was :   ".$item->type."<br/>");
            }
            
    }
}
