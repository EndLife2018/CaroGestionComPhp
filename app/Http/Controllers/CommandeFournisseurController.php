<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommandeFournisseurRequest;
use App\Http\Requests\UpdateCommandeFournisseurRequest;
use App\Repositories\CommandeFournisseurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CommandeFournisseurController extends AppBaseController
{
    /** @var  CommandeFournisseurRepository */
    private $commandeFournisseurRepository;

    public function __construct(CommandeFournisseurRepository $commandeFournisseurRepo)
    {
        $this->middleware('auth');
        $this->commandeFournisseurRepository = $commandeFournisseurRepo;
    }

    /**
     * Display a listing of the CommandeFournisseur.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->commandeFournisseurRepository->pushCriteria(new RequestCriteria($request));
        $commandeFournisseurs = $this->commandeFournisseurRepository->all();

        return view('commande_fournisseurs.index')
            ->with('commandeFournisseurs', $commandeFournisseurs);
    }

    /**
     * Show the form for creating a new CommandeFournisseur.
     *
     * @return Response
     */
    public function create()
    {
        return view('commande_fournisseurs.create');
    }

    /**
     * Store a newly created CommandeFournisseur in storage.
     *
     * @param CreateCommandeFournisseurRequest $request
     *
     * @return Response
     */
    public function store(CreateCommandeFournisseurRequest $request)
    {
        $input = $request->all();

        $commandeFournisseur = $this->commandeFournisseurRepository->create($input);

        Flash::success('Commande Fournisseur saved successfully.');

        return redirect(route('commandeFournisseurs.index'));
    }

    /**
     * Display the specified CommandeFournisseur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commandeFournisseur = $this->commandeFournisseurRepository->findWithoutFail($id);

        if (empty($commandeFournisseur)) {
            Flash::error('Commande Fournisseur not found');

            return redirect(route('commandeFournisseurs.index'));
        }

        return view('commande_fournisseurs.show')->with('commandeFournisseur', $commandeFournisseur);
    }

    /**
     * Show the form for editing the specified CommandeFournisseur.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commandeFournisseur = $this->commandeFournisseurRepository->findWithoutFail($id);

        if (empty($commandeFournisseur)) {
            Flash::error('Commande Fournisseur not found');

            return redirect(route('commandeFournisseurs.index'));
        }

        return view('commande_fournisseurs.edit')->with('commandeFournisseur', $commandeFournisseur);
    }

    /**
     * Update the specified CommandeFournisseur in storage.
     *
     * @param  int              $id
     * @param UpdateCommandeFournisseurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommandeFournisseurRequest $request)
    {
        $commandeFournisseur = $this->commandeFournisseurRepository->findWithoutFail($id);

        if (empty($commandeFournisseur)) {
            Flash::error('Commande Fournisseur not found');

            return redirect(route('commandeFournisseurs.index'));
        }

        $commandeFournisseur = $this->commandeFournisseurRepository->update($request->all(), $id);

        Flash::success('Commande Fournisseur updated successfully.');

        return redirect(route('commandeFournisseurs.index'));
    }

    /**
     * Remove the specified CommandeFournisseur from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commandeFournisseur = $this->commandeFournisseurRepository->findWithoutFail($id);

        if (empty($commandeFournisseur)) {
            Flash::error('Commande Fournisseur not found');

            return redirect(route('commandeFournisseurs.index'));
        }

        $this->commandeFournisseurRepository->delete($id);

        Flash::success('Commande Fournisseur deleted successfully.');

        return redirect(route('commandeFournisseurs.index'));
    }
}
