<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;

use Illuminate\Http\Request;
use function Symfony\Component\Console\Tests\Command\createClosure;

class CustomersController extends Controller
{
    public function index()
    {
    	//$activeCustomers = Customer::where('status',1)->get();
        //$inactiveCustomers = Customer::where('status',0)->get();

        //above two variables are same as lower ones except the syntax

        //$activeCustomers = Customer::active()->get();
        //$inactiveCustomers = Customer::inactive('status',0)->get();

        $customers = Customer::all();

    	// command use just to see data of database in the browser.....
    	//dd($customers);

	/*return view('internals.customers', [

		'customers'=>$customers,
			]);*/

	    /*return view('internals.customers',[
	        'activecustomers' => $activeCustomers,
	        'inactivecustomers' => $inactiveCustomers,

        ]);*/

       /* return view('customers.index',compact(
            'activeCustomers',
            'inactiveCustomers'));*/

       return view('customers.index',compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create',compact('companies'));
    }

    public function store()
    {
    	$data = request()->validate([
    		'cust_name'=>'required|min:3',
    		'cust_email'=>'required|email',
            'status'=>'required',
            'company_id'=>'required',
    	]);
    	/*$customer = new Customer();
    	$customer->cust_name = request('name');
    	$customer->cust_email = request('email');
        $customer->status = request('active');
    	$customer->save();
    	return back();*/
    	//dd($data);

    	//same as above commented portion
        Customer::create($data);
        //return back();

        return redirect('customers');

    	//dd(request('name'));
    }
}
