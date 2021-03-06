<?php

namespace App\Http\Controllers\Back;

use App\ {
    Http\Requests\PostRequest,
    Http\Controllers\Controller,
    Models\Category,
    Models\Post,
    Repositories\PostRepository
};
use GuzzleHttp\Client;

class PostController extends Controller
{
    use Indexable;

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'posts';
    }

    /**
     * Update "new" field for post.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function updateSeen(Post $post)
    {
        $post->ingoing->delete ();

        return response ()->json ();
    }

    /**
     * Update "active" field for post.
     *
     * @param  \App\Models\Post $post
     * @param  bool $status
     * @return \Illuminate\Http\Response
     */
    public function updateActive(Post $post, $status = false)
    {
        $post->active = $status;
        $post->save();

        return response ()->json ();
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('title', 'id');

        return view('back.posts.create', compact('categories'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->repository->store($request);

        return redirect(route('posts.index'))->with('post-ok', __('The post has been successfully created'));
    }

    /**
     * Display the post.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('back.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the post.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('manage', $post);

        $categories = Category::all()->pluck('title', 'id');

        return view('back.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the post in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('manage', $post);

        $this->repository->update($post, $request);

        return back()->with('post-ok', __('The post has been successfully updated'));
    }

    /**
     * Remove the post from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('manage', $post);

        $post->delete ();

        return response ()->json ();
    }


    /**
     * Display a listing of json markets.
     *
     * @return \Illuminate\Http\Response
     */
    public function markets()
    {
        $client = new Client();
        $res = $client->get('https://bittrex.com/api/v2.0/pub/Markets/GetMarketSummaries?_=1509478036773');
        $markets = json_decode($res->getBody(), true);

        $result = array();

        foreach ($markets['result'] as $market){

            if ($market['Summary']['Ask'] && $market['Summary']['Bid']) {
                $spread = 100 * ($market['Summary']['Ask'] - $market['Summary']['Bid']) / $market['Summary']['Ask'];
            } else {
                $spread = 0;
            }

            if($market['Summary']['PrevDay']){
                $change = ($market['Summary']['Last'] - $market['Summary']['PrevDay']) / $market['Summary']['PrevDay'] * 100;
            }else {
                $change = 0;
            }

            $changeString = "";
            $changeString .= number_format($change, 1);
            $changeString .= "%";

            $spreadString = "";
            $spreadString .= number_format($spread, 1);
            $spreadString .= "%";

            $result[$market['Market']['BaseCurrency']][] = [
                $market['Market']['MarketName'], //Market
                $market['Market']['MarketCurrencyLong'], //Currency
                number_format($market['Summary']['BaseVolume'], 3, '.', ','), //Volume
                $changeString,  //Change
                number_format($market['Summary']['Last'], 8, '.', ','), //Last price
                number_format($market['Summary']['High'], 8, '.', ','), //High
                number_format($market['Summary']['Low'], 8, '.', ','), //Low
                $spreadString,  //Spread
                date_format(date_create($market['Summary']['Created']),"d/m/Y")  //Added

            ];
        }
        if($res->getStatusCode() == 200){
            return response($result);
        }else{
            //@todo: Vista de error
        }
    }
}
