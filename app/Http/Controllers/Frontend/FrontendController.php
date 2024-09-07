<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Project;
use App\Models\Slider;
// use App\Models\Tab;
// use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller {
    public function __invoke() {
        $data['sliders'] = Slider::where( 'status', 'active' )->get();
        $data['testimonials'] = Testimonial::where( 'status', 'active' )->orderBy( 'rating' )->get();
        return view( 'frontend.homePage', $data );
    }
    public function index() {
//        dd('hi');
        $data['sliders'] = Slider::where( 'status', 'active' )->get();
        $data['testimonials'] = Testimonial::where( 'status', 'active' )->orderBy( 'rating' )->get();
        return view( 'frontend.homePage', $data );
    }
    public function about() {
        return view( 'frontend.aboutPage' );
    }
    // public function whoWeAre() {
    //     $overview = Overview::where( 'type', 'about_us' )->first();
    //     return view( 'frontend._who_we_are', compact( 'overview' ) );
    // }

    public function services() {
        return view( 'frontend.layouts._service' );
    }
    public function team() {
        // $teams = Team::where( 'status', 'active' )->orderBy( 'order', 'desc' )->get()->all();
        // $tabs = Tab::where( 'status', 'active' )->get()->all() , compact( 'teams', 'tabs' );
        return view( 'frontend.team' );
    }
    public function carrier() {
        return view( 'frontend.carrier' );
    }
    public function carrier_details() {
        return view( 'frontend.carrier_details' );
    }

    public function coe() {
        return view( 'frontend.coe' );
    }
    public function pageDetails( $menu, $slug ) {
        $data['page'] = Page::where( 'page_category', $menu )->where( 'slug', $slug )->first();
        if ( $data['page'] ) {
            return view( 'frontend.page', $data );
        } else {
            return redirect()->route( 'home.all' );
        }
    }
    public function projectAll() {
        $id = 1;
        $data['single_project'] = Project::where( 'status', 'active' )->where( 'id', $id )->firstOrFail();
        $data['projects'] = Project::where( 'status', 'active' )->get();
        return view( 'frontend.project', $data );
    }

    public function projectType( $projectType ) {

        $data['projectType'] = $projectType;
        $id = 1;
        $data['single_project'] = Project::where( 'status', 'active' )->where( 'id', $id )->firstOrFail();
        $data['projects'] = Project::where( 'project_type', $projectType )->where( 'status', 'active' )->get();
        return view( 'frontend.project_category_wise', $data );

    }
    public function singleProject( $id, $slug = "" ) {
        $data['projects'] = Project::where( 'status', 'active' )->get();
        $data['single_project'] = Project::where( 'status', 'active' )->where( 'id', $id )->firstOrFail();

        $data['pageTitle'] = $data['single_project']->title;
        return view( 'frontend.single_project', $data );
    }

    public function galleries() {
        $data['galleries'] = Gallery::where( 'status', 'active' )->orderBy( 'created_at' )->get();
        return view( 'frontend.galleryPage', $data );
    }

    public function blogs() {
        $data['blogs'] = Post::where( 'status', 'active' )->paginate( 5 );
        $data['categories'] = PostCategory::where( 'status', 'active' )->get();
        $data['recentPosts'] = Post::where( 'status', 'active' )->limit( '3' )->orderBy( 'created_at', 'DESC' )->get();
        return view( 'frontend.blogPage', $data );
    }

    public function blogDetails( $id, $slug = "" ) {
        $data['blog'] = Post::where( 'status', 'active' )->where( 'id', $id )->firstOrFail();

        $data['pageTitle'] = $data['blog']->title;
        $data['categories'] = PostCategory::where( 'status', 'active' )->get();
        $data['recentPosts'] = Post::where( 'status', 'active' )->limit( '3' )->orderBy( 'created_at', 'DESC' )->get();
        return view( 'frontend.single_blog', $data );
    }

    public function blogCategoryDetails( $id, $slug = "" ) {

        $data['blogs'] = Post::where( 'status', 'active' )->where( 'category_id', $id )->get();
        $pageTitle = PostCategory::where( 'id', $id )->first();
        $data['pageTitle'] = $pageTitle->category_name;
        $data['categoryLists'] = PostCategory::where( 'status', 'active' )->get();
        $data['popularPosts'] = Post::where( 'status', 'active' )->limit( '3' )->orderBy( 'created_at', 'DESC' )->get();
        return view( 'frontend.category_blog', $data );
    }

    public function contact() {
        return view( 'frontend.contactPage' );
    }

    public function contactStore( Request $request ) {

        $request->validate( [
            'name'    => ['required', 'string', 'min:3', 'max:40'],
            'email'   => ['nullable', 'email', 'max:50'],
            'phone'   => ['nullable', 'string', 'min:11', 'max:13'],
            'address' => ['nullable', 'string', 'min:3', 'max:100'],
//            'company_name' => ['nullable','string','min:3','max:80'],
            'subject' => ['required', 'string', 'min:2', 'max:40'],
            'message' => ['required', 'string', 'min:3', 'max:256'],
        ], [
            'name.required' => 'Name required',
        ] );

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
//        $data['company_name'] = $request->company_name;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['type'] = 'user_contact';

        $contact = Contact::create( $data );
//        return redirect()->back()->with('success','Successfully Submit Your Information');
        return redirect()->route( 'home.all' )->with( 'success', 'Successfully Submit Your Information' );
    }

}
