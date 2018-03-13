<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Repositories\ArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
Use Bschmitt\Amqp\Facades\Amqp;
use Bschmitt\Amqp\Message;


class ArticleController extends AppBaseController
{
    /** @var  ArticleRepository */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
    }

    /**
     * Display a listing of the Article.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articleRepository->pushCriteria(new RequestCriteria($request));
        $articles = $this->articleRepository->all();

        return view('articles.index')
            ->with('articles', $articles);
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param CreateArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();

        //idfournisseur
        //stock


        //$article["rowid"] = $input->idarticle;
        //$article["ref"] = $input->desc_court;
        $article["entity"] = 1;
        $article["recuperableonly"] = 0;
        $article["localtax1Type"] = 1;
        $article["localtax2Type"] = 1;
        $article["tobatch"] = 0;
        $article["pmp"] = 0;
        $article["datec"] = date("Y-m-d");
        $article["tms"] = date("Y-m-d");
        $article["description"] = $request->desc_long;
        $article["label"] = $request->desc_long;
        $article["customcode"] = $request->ref_interne;
        $article["price"] = intval($request->prix_vente_ht);
        $article["price_ttc"] = intval($request->prix_vente_ttc);
        $article["duration"] = $request->duree_garantie;
        $article["seuil_stock_alerte"] = intval($request->stock_minima);
        $article["barcode"] = $request->code_barre;
        $article["partnumber"] = $request->num_serie;
        $article["weight"] = intval($request->poids);
        $article["crud"] = "STORE";
        //dd($article);
        $message = new Message(json_encode($article), ['content_type' => 'application/json', 'delivery_mode' => 2]);

        Amqp::publish('store-article', $message , ['queue' => 'store-article']);
        $article = $this->articleRepository->create($input);
        Flash::success('Article enregistré.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error("Cet article n/'existe pas");

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error("Cet article n/'existe pas");

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified Article in storage.
     *
     * @param  int              $id
     * @param UpdateArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleRequest $request)
    {

        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error("Cet article n/'existe pas");

            return redirect(route('articles.index'));
        }

        $article = $this->articleRepository->update($request->all(), $id);

        $articleASauver["entity"] = 1;
        $articleASauver["recuperableonly"] = 0;
        $articleASauver["localtax1Type"] = 1;
        $articleASauver["localtax2Type"] = 1;
        $articleASauver["tobatch"] = 0;
        $articleASauver["pmp"] = 0;
        $articleASauver["datec"] = date("Y-m-d");
        $articleASauver["tms"] = date("Y-m-d");
        $articleASauver["description"] = $request->desc_long;
        $articleASauver["label"] = $request->desc_long;
        $articleASauver["customcode"] = $request->ref_interne;
        $articleASauver["price"] = intval($request->prix_vente_ht);
        $articleASauver["price_ttc"] = intval($request->prix_vente_ttc);
        $articleASauver["duration"] = $request->duree_garantie;
        $articleASauver["seuil_stock_alerte"] = intval($request->stock_minima);
        $articleASauver["barcode"] = $request->code_barre;
        $articleASauver["partnumber"] = $request->num_serie;
        $articleASauver["weight"] = intval($request->poids);
        $articleASauver["crud"] = "UPDATE";
        //dd($article);

        //Amqp::publish('store-article', json_encode($articleASauver) , ['queue' => 'store-article']);
        

        Flash::success("L/'article a été mis à jour.");

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error("Cet article n/'existe pas");

            return redirect(route('articles.index'));
        }

        $article["id"] = intval($request->id);
        $article["crud"] = "DELETE";
        //dd($article);

        Amqp::publish('store-article', json_encode($articleASauver) , ['queue' => 'store-article']);
        

        $this->articleRepository->delete($id);

        Flash::success('Cet article a été supprimé.');

        return redirect(route('articles.index'));
    }
}
