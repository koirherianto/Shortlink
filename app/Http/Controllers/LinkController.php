<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function requestLink()
    {
        $link = request('link');

        // Tambahkan protokol jika tidak ada
        if (!preg_match("~^(?:f|ht)tps?://~i", $link)) {
            $link = "https://" . $link;
        }

        // Validasi URL
        if (!filter_var($link, FILTER_VALIDATE_URL)) {
            return back()->with('error', 'Invalid URL');
        }

        $last = Link::max('id');
        $lastLink = Link::where('id', $last)->first();

        if (!$lastLink) {
            $last = 'a';
        } else {
            $last = $lastLink->sort_link;
            $this->increment($last);
        }

        $result = [
            'link' => $link,
            'sort_link' => $last,
            'view' => 0
        ];

        Link::create($result);

        return view('index', [
            'sortLink' => url($last),
            'link' => $link
        ]);
    }

    public function see(Link $link)
    {
        $link->increment('view');
        return redirect($link->link);
    }

    public function view(Link $link)
    {
        return view('view', ['view' => $link]);
    }

    public function increment(&$string)
    {
        $last_char = substr($string, -1);
        $rest = substr($string, 0, -1);
        switch ($last_char) {
            case '':
                $next = 'a';
                break;
            case 'z':
                $next = '0';
                break;
            case 'Z':
                $next = '0';
                break;
            case '9':
                $this->increment($rest);
                $next = 'a';
                break;
            default:
                $next = ++$last_char;
        }
        $string = $rest . $next;
    }
}
