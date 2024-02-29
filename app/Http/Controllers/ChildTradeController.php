<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChildTradeRequest;
use App\Http\Requests\UpdateChildTradeRequest;
use App\Repositories\ChildTradeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB; 
use App\Models\Trade;
class ChildTradeController extends AppBaseController
{
    /** @var  ChildTradeRepository */
    private $childTradeRepository;

    public function __construct(ChildTradeRepository $childTradeRepo)
    {   
        $this->middleware('auth:admin');
        $this->childTradeRepository = $childTradeRepo;
    }

    /**
     * Display a listing of the ChildTrade.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->childTradeRepository->pushCriteria(new RequestCriteria($request));
        $childTrades = $this->childTradeRepository->all();
         $trade =  DB::table('child_trades')
            ->leftJoin('trades', 'child_trades.tradeid', '=', 'trades.id') 
            ->select('child_trades.*', 'trades.name as trade')
            ->paginate(10);
            
        return view('child_trades.index')
            ->with('childTrades', $trade);
    }

    /**
     * Show the form for creating a new ChildTrade.
     *
     * @return Response
     */
    public function create()
    {   

        $trade = Trade::all();
        $tradeid  = '';
        return view('child_trades.create',compact('trade','tradeid'));
    }

    /**
     * Store a newly created ChildTrade in storage.
     *
     * @param CreateChildTradeRequest $request
     *
     * @return Response
     */
    public function store(CreateChildTradeRequest $request)
    {
        $input = $request->all();

        $childTrade = $this->childTradeRepository->create($input);

        Flash::success('Child Trade saved successfully.');

        return redirect(route('childTrades.index'));
    }

    /**
     * Display the specified ChildTrade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $childTrade = $this->childTradeRepository->findWithoutFail($id);

        if (empty($childTrade)) {
            Flash::error('Child Trade not found');

            return redirect(route('childTrades.index'));
        }

        return view('child_trades.show')->with('childTrade', $childTrade);
    }

    /**
     * Show the form for editing the specified ChildTrade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $childTrade = $this->childTradeRepository->findWithoutFail($id);

        if (empty($childTrade)) {
            Flash::error('Child Trade not found');

            return redirect(route('childTrades.index'));
        }

        return view('child_trades.edit')->with('childTrade', $childTrade);
    }

    /**
     * Update the specified ChildTrade in storage.
     *
     * @param  int              $id
     * @param UpdateChildTradeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChildTradeRequest $request)
    {
        $childTrade = $this->childTradeRepository->findWithoutFail($id);

        if (empty($childTrade)) {
            Flash::error('Child Trade not found');

            return redirect(route('childTrades.index'));
        }

        $childTrade = $this->childTradeRepository->update($request->all(), $id);

        Flash::success('Child Trade updated successfully.');

        return redirect(route('childTrades.index'));
    }

    /**
     * Remove the specified ChildTrade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $childTrade = $this->childTradeRepository->findWithoutFail($id);

        if (empty($childTrade)) {
            Flash::error('Child Trade not found');

            return redirect(route('childTrades.index'));
        }

        $this->childTradeRepository->delete($id);

        Flash::success('Child Trade deleted successfully.');

        return redirect(route('childTrades.index'));
    }
}
