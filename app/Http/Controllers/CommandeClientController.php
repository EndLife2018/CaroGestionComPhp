<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommandeClientRequest;
use App\Http\Requests\UpdateCommandeClientRequest;
use App\Repositories\CommandeClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CommandeClientController extends AppBaseController
{
    /** @var  CommandeClientRepository */
    private $commandeClientRepository;

    public function __construct(CommandeClientRepository $commandeClientRepo)
    {
        $this->commandeClientRepository = $commandeClientRepo;
    }

    /**
     * Display a listing of the CommandeClient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->commandeClientRepository->pushCriteria(new RequestCriteria($request));
        $commandeClients = $this->commandeClientRepository->all();

        return view('commande_clients.index')
            ->with('commandeClients', $commandeClients);
    }

    /**
     * Show the form for creating a new CommandeClient.
     *
     * @return Response
     */
    public function create()
    {
        return view('commande_clients.create');
    }

    /**
     * Store a newly created CommandeClient in storage.
     *
     * @param CreateCommandeClientRequest $request
     *
     * @return Response
     */
    public function store(CreateCommandeClientRequest $request)
    {
        $input = $request->all();

        $commandeClient = $this->commandeClientRepository->create($input);

        Flash::success('Commande Client saved successfully.');

        return redirect(route('commandeClients.index'));
    }

    /**
     * Display the specified CommandeClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commandeClient = $this->commandeClientRepository->findWithoutFail($id);

        if (empty($commandeClient)) {
            Flash::error('Commande Client not found');

            return redirect(route('commandeClients.index'));
        }

        return view('commande_clients.show')->with('commandeClient', $commandeClient);
    }

    /**
     * Show the form for editing the specified CommandeClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commandeClient = $this->commandeClientRepository->findWithoutFail($id);

        if (empty($commandeClient)) {
            Flash::error('Commande Client not found');

            return redirect(route('commandeClients.index'));
        }

        return view('commande_clients.edit')->with('commandeClient', $commandeClient);
    }

    /**
     * Update the specified CommandeClient in storage.
     *
     * @param  int              $id
     * @param UpdateCommandeClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommandeClientRequest $request)
    {
        $commandeClient = $this->commandeClientRepository->findWithoutFail($id);

        if (empty($commandeClient)) {
            Flash::error('Commande Client not found');

            return redirect(route('commandeClients.index'));
        }

        $commandeClient = $this->commandeClientRepository->update($request->all(), $id);

        Flash::success('Commande Client updated successfully.');

        return redirect(route('commandeClients.index'));
    }

    /**
     * Remove the specified CommandeClient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commandeClient = $this->commandeClientRepository->findWithoutFail($id);

        if (empty($commandeClient)) {
            Flash::error('Commande Client not found');

            return redirect(route('commandeClients.index'));
        }

        $this->commandeClientRepository->delete($id);

        Flash::success('Commande Client deleted successfully.');

        return redirect(route('commandeClients.index'));
    }
}
