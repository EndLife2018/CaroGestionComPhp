<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFournisseurRequest;
use App\Http\Requests\UpdateFournisseurRequest;
use App\Repositories\FournisseurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FournisseurController extends AppBaseController
{
    /** @var  FournisseurRepository */
    private $fournisseurRepository;

    public function __construct(FournisseurRepository $fournisseurRepo)
    {
        $this->middleware('auth');
        $this->fournisseurRepository = $fournisseurRepo;
    }

    /**
     * Display a listing of the Fournisseur.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fournisseurRepository->pushCriteria(new RequestCriteria($request));
        $fournisseurs = $this->fournisseurRepository->all();

        return view('fournisseurs.index')
            ->with('fournisseurs', $fournisseurs);
    }

    /**
     * Show the form for creating a new Fournisseur.
     *
     * @return Response
     */
    public function create()
    {
        return view('fournisseurs.create');
    }

    /**
     * Store a newly created Fournisseur in storage.
     *
     * @param CreateFournisseurRequest $request
     *
     * @return Response
     */
    public function store(CreateFournisseurRequest $request)
    {
        $input = $request->all();

        $fournisseur = $this->fournisseurRepository->create($input);

        Flash::success('Le fournisseur a été enregistré.');

        return redirect(route('fournisseurs.index'));
    }

    /**
     * Display the specified Fournisseur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fournisseur = $this->fournisseurRepository->findWithoutFail($id);

        if (empty($fournisseur)) {
            Flash::error("Le fournisseur n'existe pas");

            return redirect(route('fournisseurs.index'));
        }

        return view('fournisseurs.show')->with('fournisseur', $fournisseur);
    }

    /**
     * Show the form for editing the specified Fournisseur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fournisseur = $this->fournisseurRepository->findWithoutFail($id);

        if (empty($fournisseur)) {
            Flash::error("Le fournisseur n'existe pas");

            return redirect(route('fournisseurs.index'));
        }

        return view('fournisseurs.edit')->with('fournisseur', $fournisseur);
    }

    /**
     * Update the specified Fournisseur in storage.
     *
     * @param  int              $id
     * @param UpdateFournisseurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFournisseurRequest $request)
    {
        $fournisseur = $this->fournisseurRepository->findWithoutFail($id);

        if (empty($fournisseur)) {
            Flash::error("Le fournisseur n'existe pas");

            return redirect(route('fournisseurs.index'));
        }

        $fournisseur = $this->fournisseurRepository->update($request->all(), $id);

        Flash::success('Le fournisseur a été mis à jour.');

        return redirect(route('fournisseurs.index'));
    }

    /**
     * Remove the specified Fournisseur from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fournisseur = $this->fournisseurRepository->findWithoutFail($id);

        if (empty($fournisseur)) {
            Flash::error("Le fournisseur n'existe pas");

            return redirect(route('fournisseurs.index'));
        }

        $this->fournisseurRepository->delete($id);

        Flash::success('Le fournisseur a été supprimé.');

        return redirect(route('fournisseurs.index'));
    }
}
