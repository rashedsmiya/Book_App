<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class TaskController extends Controller
    {
        public function index(){
            $tasks = DB::table('tasks')->orderBy('id', 'desc')->paginate(3);
            // return view('tasks.index',['tasks' => $tasks]);
            return view('tasks.index',compact('tasks'));
        }

        public function create()
        {
            return view('tasks.create'); 
        }

        public function store(Request $request){
            $imagePath = null;
            if($request->hasFile('image')){
                $imagePath = $request->file('image')->store('tasks', 'public');
            }       

            DB::table('tasks')->insert([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('tasks.index')->with('success','Task Created Successfully');
        }

        public function destroy($id){
            $task = DB::table('tasks')->where('id',$id)->first();

            // Delete Imaage file if exists
            if ($task->image && Storage::disk('public')->exists($task->image)){
                Storage::disk('public')->delete($task->image);
            }
                
            // Delete Data From database
            DB::table('tasks')->where('id', $id)->delete();
            return redirect()->route('tasks.index')->with('Success','Task delete successfully');
        }
    }
