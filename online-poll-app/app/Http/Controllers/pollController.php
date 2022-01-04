<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pollController extends Controller
{
    public function displayPolls()
    {
        $polls=DB::table('tblpolll')->get();
        //dd($polls);
       $data=array();
       foreach($polls as $poll ){
           //echo $poll->PollId;
           $pollanswer=DB::table('tblpollanswer')->where('PollId',$poll->PollId)->get('Title');
           $list=array();
           foreach($pollanswer as $ans){
                $list[]=$ans->Title;
           }
           $options= implode(',', $list);
           $poll->options=$options;
           $data[]=$poll;

       }
//dd($data);
     return view('displayallPoll',['data'=>$data]);
    }
    public function status($id)
   {
    DB::table('tblpolll')->update(['IsActive'=>"N"]);
    DB::table('tblpolll')->where('PollId',$id)->update(['IsActive'=>"Y"]);

    return redirect('polls');
   }
   public function insertpoll(Request $request)
   {
      $pollid=DB::table('tblpolll')->insertGetId([
        'PollTitle'=>$request->title,
        'IsActive'=>'N',

      ]);
      //dd($request->answer);
      foreach($request->answer as $ans){
        $rec=DB::table('tblpollanswer')->insert([
            "PollId"=>$pollid,
            "Title"=>$ans,
        ]);
    }
    return redirect('polls');
    // dd($rec);
   }

   public function result($id)
   {
        $polldata=DB::table('tblpolll')->where('PollId',$id)->get();
        return $this->showresult($polldata);
      //  return view('pollResult');

   }
   public function showresult($data)
   {
       //dd($data);
       $votes=DB::table('tblpollanswer')->where('PollId',$data[0]->PollId)->sum('Votes');
       //echo $votes;
       $pollanswer=DB::table('tblpollanswer')->where('PollId',$data[0]->PollId)->get();
      //  dd($pollanswer);
$finaldata=['data'=>$pollanswer,"votes"=>$votes,"PollTitle"=>$data[0]->PollTitle];
//dd($finaldata);
     return view('pollResult',['data'=>$finaldata]);
    }

    public function playpoll()
    {
        $data=DB::table('tblpolll')->where('IsActive','Y')->get();
        $pollanswer=DB::table('tblpollanswer')->where('PollId',$data[0]->PollId)->get();

        $newdata["poll"]=$data[0];
        $newdata["options"]=$pollanswer;
        //dd($newdata);

        return view('userplaypoll',['data'=>$newdata]);
    }

    public function submitpoll(Request $request)
    {
       $rec=DB::table('tblpollanswer')->where("PollAnsId",$request->Answer)->update(['Votes'=>DB::raw('Votes + 1')]);
       return $this->userresult();

    }
    public function userresult()
    {
         $polldata=DB::table('tblpolll')->where('IsActive','Y')->get();
         return $this->showresult($polldata);
       //  return view('pollResult');

    }
}
