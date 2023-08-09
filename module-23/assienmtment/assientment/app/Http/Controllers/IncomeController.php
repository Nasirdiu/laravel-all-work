<?php

namespace App\Http\Controllers;

use App\Models\income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{

    public function income()
    {
        return view('income.income');
    }
    public function addIncome()
    {
        return view('income.addIncome');
    }

    public function incomeFrom(Request $request)
    {
       $data = new income();

       $data->amount = $request->amount;
       $data->description = $request->description;
       $data->date = $request->date;
       $data->category = $request->category;
       $data->save();
       return redirect('incomeView');
    }

    public function incomeView()
    {
        $data = income::all();
        $sum = income::sum('amount');
        $count = income::count('id');
        return view('income.incomeView',compact('data','sum','count'));
    }

    public function deleteIncome($id)
    {
        $data = income::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editIncome($id)
    {
        $data = income::find($id);
        return view('income.editIncome',compact('data'));
    }
    public function editIncomeFrom(Request $request, $id)
    {
        $data = income::find($id);
        $data->amount = $request->amount;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->category = $request->category;
        $data->save();
        return redirect('incomeView');
    }

    public function filterIncome()
    {
        return view('income.filterIncome');
    }
    public function dateIncome()
    {
        return view('income.startEndDate');

    }
    public function filterByDateIncome(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $data = income::whereBetween('date',[$start_date, $end_date])
            ->orderBy('date', 'ASC')
            ->get();

        $sum = income::whereBetween('date',[$start_date, $end_date])
            ->orderBy('date', 'ASC')
            ->sum('amount');
        $count = income::whereBetween('date',[$start_date, $end_date])
            ->orderBy('date', 'ASC')
            ->count('id');
        return view('income.incomeView',compact('data','sum','count'));
    }
    public function amountIncomeAsc()
    {
        $data = income::orderBy('amount', 'ASC')
            ->get();
        $sum = income::orderBy('amount', 'ASC')
            ->sum('amount');
        $count = income::orderBy('amount', 'ASC')
            ->count('id');
        return view('income.incomeView',compact('data','sum','count'));
    }
    public function amountIncomeDsc()
    {
        $data = income::orderBy('amount', 'desc')
            ->get();
        $sum = income::orderBy('amount', 'desc')
            ->sum('amount');
        $count = income::orderBy('amount', 'desc')
            ->count('id');
        return view('income.incomeView',compact('data','sum','count'));
    }
    public function filterIncomeCat()
    {
        return view('income.filterIncomeCat');
    }

    public function incomeFilterByCat(Request $request)
    {

        $data = income::where('category','=',$request->category)
            ->orderBy('date', 'ASC')
            ->get();

        $sum = income::where('category','=',$request->category)
            ->orderBy('date', 'ASC')
            ->sum('amount');
        $count = income::where('category','=',$request->category)
            ->orderBy('date', 'ASC')
            ->count('id');
        return view('income.incomeView',compact('data','sum','count'));
    }
}
