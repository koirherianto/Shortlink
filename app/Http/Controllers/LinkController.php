<?php

namespace App\Http\Controllers;
use \App\Models\Link;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class LinkController extends Controller{

    public function index()
    {
        return view('index');
    }

    public function requestLink()
    {

        $last = Link::max('id');

        $last = Link::where('id',$last)->first()->sort_link;

        $this->increment($last);

        $result = [
            'link' => request('link'),
            'sort_link' => $last,
            'view' => 0
        ];

        if(request('link')){
            Link::create($result);
        }

        return view('index',[
            'sortLink' => $last,
            'link' => request('link')
        ]);
    }

    public function see(Link $link){
        $update = [
            'view' => $link->view + 1
        ];

        Link::where('id',$link->id)->update($update);
        return redirect($link->link);
    }

    public function view(Link $link){
        $view = link::where('id',$link->id)->get()[0];
        return view('view',[
            'view' => $view
        ]);
    }
    
    public function increment(&$string){
        $last_char=substr($string,-1);
        $rest=substr($string, 0, -1);
        switch ($last_char) {
        case '':
            $next= 'a';
            break;
        case 'z':
            $next= '0';
            break;
        case 'Z':
            $next= '0';
            break;
        case '9':
            $this->increment($rest);
            $next= 'a';
            break;
        default:
            $next= ++$last_char;
        }
        $string=$rest.$next;
    }

    public function hasCapital(String $string){
        $strings = str_split($string);
        foreach($strings as $s){
            if(ctype_upper($s)){
                
                return true;
            }
        }
        return false;
    }
}
