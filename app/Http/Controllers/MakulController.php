<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMakulRequest;
use App\Http\Requests\UpdateMakulRequest;
use App\Repositories\MakulRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MakulController extends AppBaseController
{
    /** @var MakulRepository $makulRepository*/
    private $makulRepository;

    public function __construct(MakulRepository $makulRepo)
    {
        $this->makulRepository = $makulRepo;
    }

    /**
     * Display a listing of the Makul.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $makuls = $this->makulRepository->all();

        return view('makuls.index')
            ->with('makuls', $makuls);
    }

    /**
     * Show the form for creating a new Makul.
     *
     * @return Response
     */
    public function create()
    {
        return view('makuls.create');
    }

    /**
     * Store a newly created Makul in storage.
     *
     * @param CreateMakulRequest $request
     *
     * @return Response
     */
    public function store(CreateMakulRequest $request)
    {
        $input = $request->all();

        $makul = $this->makulRepository->create($input);

        Flash::success('Makul saved successfully.');

        return redirect(route('makuls.index'));
    }

    /**
     * Display the specified Makul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $makul = $this->makulRepository->find($id);

        if (empty($makul)) {
            Flash::error('Makul not found');

            return redirect(route('makuls.index'));
        }

        return view('makuls.show')->with('makul', $makul);
    }

    /**
     * Show the form for editing the specified Makul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $makul = $this->makulRepository->find($id);

        if (empty($makul)) {
            Flash::error('Makul not found');

            return redirect(route('makuls.index'));
        }

        return view('makuls.edit')->with('makul', $makul);
    }

    /**
     * Update the specified Makul in storage.
     *
     * @param int $id
     * @param UpdateMakulRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMakulRequest $request)
    {
        $makul = $this->makulRepository->find($id);

        if (empty($makul)) {
            Flash::error('Makul not found');

            return redirect(route('makuls.index'));
        }

        $makul = $this->makulRepository->update($request->all(), $id);

        Flash::success('Makul updated successfully.');

        return redirect(route('makuls.index'));
    }

    /**
     * Remove the specified Makul from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $makul = $this->makulRepository->find($id);

        if (empty($makul)) {
            Flash::error('Makul not found');

            return redirect(route('makuls.index'));
        }

        $this->makulRepository->delete($id);

        Flash::success('Makul deleted successfully.');

        return redirect(route('makuls.index'));
    }
}
