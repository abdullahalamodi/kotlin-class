<?php

namespace App\Http\Controllers;

use App\Paper;
use App\Letter;
use App\Department_paper;
use App\Department;
use App\Innerdepartment;
use App\Directing;
use App\Letter_department;
use Illuminate\Support\Facades\DB;;

use Illuminate\Http\Request;

class testController extends Controller
{

    public function test()
    {
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


        // $papers = Department_paper::all();
        //     foreach($papers as $item){
        //         $inner = new Innerdepartment();
        //         $inner = $item->department->innerDepartment;
        //         echo("inner dep id : ".$inner->id."<br/>");

        //     }

        //weekly done papers
        // $weeklyLetters = Letter::whereHas('letter_department',function($query){
        //     $query->whereBetween('date',['2018-6-27','2018-7-4']);
        // })->where('state','done')->get();

        // foreach($weeklyLetters as $item){
        //     echo("weekly done papers : ".$item."<br/>");
        // }

        //  //monthly not done papers
        //  $weeklyLetters = Letter::whereHas('letter_department',function($query){
        //     $query->whereBetween('date',['2018-6-27','2018-7-27']);
        // })->where('state','!=','done');
        // echo("weekly papers where state done : ".$weeklyLetters->first()."<br/>");


        // //weekly not done papers
        // $weeklyLetters = Letter::whereHas('letter_department',function($query){
        //     $query->whereBetween('date',['2018-6-27','2018-7-27']);
        // })->where('state','!=','done');
        // echo("weekly papers where state done : ".$weeklyLetters->first()."<br/>");

        //monthly not done papers
        // $weeklyLetters = DB::table("letter_department")
        //                     ->join('letters', 'letter_department.letter_id', '=', 'letters.id')
        //                     ->join('departments','letter_department.department_id', '=', 'departments.id')
        //                     ->get();
        $weeklyLetters = Letter_department::whereHas('letter')->whereHas('department')->get();

        // echo("<pre/>");
        // print_r($weeklyLetters);
        foreach ($weeklyLetters as $item) {
            echo ("letter : " . $item->letter->paper->first()->title ."<br/>
                                    from : " . $item->department->name . "<br/>" ."to : " . DB::table("departments")
                ->where('id', '=', $item->to_id)->first()->name . "<br/>" .

                "date : " . $item->date . "<br/>" .
                "description : " . $item->discription . "<br/>");
            echo "<br/>";
        }
    }
}