<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\InvoiceTax;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('customer_address', 'customer_product', 'customer_tax')->latest()->get();
        return view('Pages.Admin.Invoice.index', compact('invoices'));
    }

    public function create()
    {
        return view('Pages.Admin.Invoice.add');
    }

    public function store(Request $request)
    {
        try {
            $inv = Invoice::latest()->first();
            $invoice_num = is_null($inv) ? null : $inv->id;
            $invoice_number = is_null($invoice_num) ? sprintf("%06d", 1) : sprintf("%06d", $invoice_num + 1);
            $invoice = Invoice::create([
                'invoice_number' => 'INV'.$invoice_number,
            ]);
            $invoice->customer_address()->create([
                'invoice_id' => $invoice->id,
                'name' => $request->c_name,
                'address' => $request->c_address,
                'state' => $request->c_state,
                'phone' => $request->c_phone,
                'gstin' => $request->c_gstin,
            ]);
            $productData = [
                'invoice_id' => $invoice->id,
                'product_name' => $request->p_name,
                'hsn_code' => $request->p_hsn,
                'qty' => (int)$request->p_qty,
                'rate' => (int)$request->p_rate,
                'amount' => (int)$request->p_qty * (int)$request->p_rate,
                ];
            $product =  InvoiceProduct::create([
                'invoice_id' => $invoice->id,
                'product_name' => $request->p_name,
                'hsn_code' => $request->p_hsn,
                'qty' => (int)$request->p_qty,
                'rate' => (int)$request->p_rate,
                'amount' => (int)$request->p_qty * (int)$request->p_rate,
            ]);
            $halfTax = (int)$product->amount * 6/100;
            $tax = [
                'cgst_p' => is_null($request->t_cgst_p) ? 6 : $request->t_cgst_p,
                'cgst_a' => is_null($request->t_cgst_a) ? $halfTax : $request->t_cgst_a,
                'sgst_p' => is_null($request->t_sgst_p) ? 6 : $request->t_sgst_p,
                'sgst_a' => is_null($request->t_sgst_a) ? $halfTax : $request->t_sgst_a,
                'total_amount' => $product->amount,
            ];
            $invoice->customer_tax()->create([
                'cgst_p' => $tax['cgst_p'],
                'cgst_a' => $tax['cgst_a'],
                'sgst_p' => $tax['sgst_p'],
                'sgst_a' => $tax['sgst_a'],
                'total_amount' => $tax['total_amount'],
                'grand_total' => $tax['total_amount'],
                'amount_in_words' => $request->t_amount_in_words,
            ]);
            return redirect()->route('admin.invoice.index')->with('success', 'Invoice Created Successfully');
        }catch (\Exception $e){
            dd($e);
        }
    }

    public function edit($id)
    {
        $invoice = Invoice::with('customer_address', 'customer_product', 'customer_tax')->find($id);
        return view('Pages.Admin.Invoice.edit', compact('invoice'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $invoice = Invoice::with('customer_address', 'customer_product', 'customer_tax')->find($id);

            $invoice->customer_address()->update([
                'invoice_id' => $invoice->id,
                'name' => $request->c_name,
                'address' => $request->c_address,
                'state' => $request->c_state,
                'phone' => $request->c_phone,
                'gstin' => $request->c_gstin,
            ]);
            $product = InvoiceProduct::where('invoice_id', $invoice->id)->first();
            if ($product){
                $product->update([
                    'invoice_id' => $invoice->id,
                    'product_name' => $request->p_name,
                    'hsn_code' => $request->p_hsn,
                    'qty' => (int)$request->p_qty,
                    'rate' => (int)$request->p_rate,
                    'amount' => (int)$request->p_qty * (int)$request->p_rate,
                ]);
            }
            $halfTax = (int)$product->amount * 6/100;
            $tax = [
                'cgst_p' => is_null($request->t_cgst_p) ? 6 : $request->t_cgst_p,
                'cgst_a' => is_null($request->t_cgst_a) ? $halfTax : $request->t_cgst_a,
                'sgst_p' => is_null($request->t_sgst_p) ? 6 : $request->t_sgst_p,
                'sgst_a' => is_null($request->t_sgst_a) ? $halfTax : $request->t_sgst_a,
                'total_amount' => $product->amount,
            ];
            $invoice->customer_tax()->update([
                'cgst_p' => $tax['cgst_p'],
                'cgst_a' => $tax['cgst_a'],
                'sgst_p' => $tax['sgst_p'],
                'sgst_a' => $tax['sgst_a'],
                'total_amount' => $tax['total_amount'],
                'grand_total' => $tax['total_amount'],
                'amount_in_words' => $request->t_amount_in_words,
            ]);

            return redirect()->route('admin.invoice.index')->with('success', 'Invoice Created Successfully');
        }catch (\Exception $e){
            dd($e);
        }
    }

    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()->route('admin.invoice.index')->with('success', 'Invoice Deleted Successfully');
    }

    public function download($id)
    {
        $invoice = Invoice::with('customer_address', 'customer_product', 'customer_tax')->find($id)->toArray();
        $data = [
            'invoice' => [
                'invoice_number' => $invoice['invoice_number'],
                'invoice_date' => $invoice['created_at'],
            ],
            'customer_address' => $invoice['customer_address'],
            'customer_product' => $invoice['customer_product'],
            'customer_tax' => $invoice['customer_tax'],
        ];
//        dd($invoice['created_at']);
        $pdf = Pdf::loadView('Pages.Admin.Invoice.invoice-pdf', $data);
//        return $pdf;
        return $pdf->download('invoice'.'0000'.'.pdf');
    }


}
