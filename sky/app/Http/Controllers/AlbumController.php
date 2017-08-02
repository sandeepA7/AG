<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Album;
use App\Photo;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class AlbumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $matchThese = ['deleted' => '0', 'user_id' => Auth::user()->id];
        $album = Album::where($matchThese)->orderBy('created_at','desc')->paginate(12);
        $albums = Album::where($matchThese)->orderBy('created_at','desc')->get();

        if(count($albums) == 1){
            $matchPhoto = ['album_id' => $album[0]['id'], 'user_id' => Auth::user()->id];
            $photo= Photo::where($matchPhoto)->orderBy('created_at','desc')->paginate(12);
             return view('albums.index', compact('albums'));
        }
        else
            return view('albums.index',compact('albums'));
    }
    /**
     * Show the application for album photos.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_album($slug)
    {
        $matchThese = ['album_id' => $slug, 'user_id' => Auth::user()->id];
        $photo= Photo::where($matchThese)->orderBy('created_at','desc')->paginate(12);
        return view('albums.my_album', ['album_id' => $slug,'photo' => $photo]);        
    } 
    /**
     * Show the application settings.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function settings()
    {
        return view('albums.settings');
    }*/    
    /**
     * Show the application for create album.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_album()
    {
        return view('albums.new_album');
    }  
    /**
     * Show the application for save album.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_album(Request $request)
    {
        $albumData = Album::create([
            'name' => $request['name'],
            'description' => $request['description'],           
            'size' => 0,
            'user_id' =>Auth::user()->id     
        ]);
        if($albumData)
        {
        Session::flash('success', 'New Album created successfully'); 
          return Redirect::to('album/my-album/'.$albumData->id);
        }
    }       
    /**
     * Show the application for shared album.
     *
     * @return \Illuminate\Http\Response
     */
    public function shared_album()
    {
        return view('albums.shared_album');
    }    
    /**
     * Show the application for favourite album.
     *
     * @return \Illuminate\Http\Response
     */
    public function favourite_album()
    {
        return view('albums.favourite_album');
    } 
    public function albumMainImage(Request $request){
        $post = $request->all();
        dd($post);
        $list=$post['name'];
        $name=explode(',', $list);
        $size=$post['size'];
        $file_count = count($name);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($name as $file) {
           $messages=[
                 'name.required'=>'The Image field is required',
        ];
        $rules = [
                'name' => 'required'];  
           $validator=Validator::make($post,$rules,$messages);
          if($validator->passes()){ 
            $destinationPath = 'uploads';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            $photo = Photo::create(['user_id' => Auth::user()->id,'name' => $name]);
            $uploadcount ++;
             }else{

            }  
        }
        if($uploadcount == $file_count){
          Session::flash('success', 'Upload successfully'); 
          return Redirect::to('albums.index');
        } 
        else {
         Session::flash('error', 'failed');
          return Redirect::to('albums.index');
        }
 


        //   $messages=[
        //          'name.required'=>'The Image field is required',
        // ];
        // $rules = [
        //         'name' => 'required'];  
        //    $validator=Validator::make($post,$rules,$messages);
        //   if($validator->passes()){ 
        //     $destinationPath = 'uploads';
        //     $filename = $files->getClientOriginalName();
        //     $upload_success = $files->move($destinationPath, $filename);
        //     $photo = Album::create(['user_id' => Auth::user()->id,'name' => $name,'size' => $size]);
        //     }else{
        //         return "pass";
        //     }
        //    Session::flash('success', 'Upload successfully'); 
        //   return redirect()->back();
        
    } 
    public function multiple_upload(Request $request) {
         // getting all of the post data 
        $input = $request->all();
        dd($input);
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
          $rules = array('file' => 'required|mimes:png,gif,jpeg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          $validator = Validator::make(array('file'=> $file), $rules);
          if($validator->passes()){
            $destinationPath = 'uploads';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            $photo = Photo::create(['user_id' => Auth::user()->id,'album_id' =>$request['album_id'],'name' => $filename,'description' => $filename]);
            $uploadcount ++;
          }
        }
        if($uploadcount == $file_count){
          Session::flash('success', 'Upload successfully'); 
          return Redirect::to('album/my-album/'.$request['album_id']);
        } 
        else {
         Session::flash('error', 'failed');
          return Redirect::to('album/my-album/'.$request['album_id'])->withInput()->withErrors($validator);
        }
    }          

}
