<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        @media print {
            body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
            }

            h1, p {
                font-size: 12pt; /* Adjust the font size as needed */
                margin: 10px; /* Add margins as needed */
            }
        }
    </style>
</head>
<body>
<div id="invoice-box"
     style="max-width: 890px; margin: auto; padding:10px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 14px; line-height: 24px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #555;">
    <div style="text-align: center">
        TAX INVOICE
    </div>
    <div style="border: black 1px solid; position: relative">
        <div>
            <div style="text-align: center; margin-top: 10px">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="100">
            </div>
            <div style="text-align: center">
                <h1><strong>Athlete Nutrition</strong></h1>
            </div>
            <div style="text-align: center"> A 55, B 3 NikunjAppartment, Shyam Park Extension, Sahibabad, Ghaziabad
                (201005) </div>
            <br>
            <div style="display: flex">
                <div style="width: 49.5%; float: left; border-right: black 1px solid">
                    <table>
                        <tr>
                            <td><strong>GSTIN</strong></td>
                            <td>: 09AIKPC5298E1Z2</td>
                        </tr>
                        <tr>
                            <td><strong>STATE</strong></td>
                            <td>: Uttar Pradesh</td>
                        </tr>
                    </table>
                </div>
                <div style="width: 49.5%; float: right">
                    <table>
                        <tr>
                            <td><strong>Email Id</strong></td>
                            <td>: contact@athletenutrition.in</td>
                        </tr>
                        <tr>
                            <td><strong>Phone No.</strong></td>
                            <td>: 9210040321</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <table cellpadding="0" cellspacing="0"
           style="width: 100%; line-height: inherit; text-align: left; border-bottom: solid 1px #ccc;">
        <tr class="top">
            <td colspan="3" style="padding: 5px; vertical-align:middle;">
                <table style="width: 100%; line-height: inherit; text-align: left; border-bottom: solid 1px #ccc;">
                    <tr>
                        <td style="padding:5px;vertical-align:middle;padding-bottom:20px;width:100%;display:block;">
                            <b> Sold By: Athlete Nutrition </b> <br>
                            <strong>Order No</strong>: ANON-{{ sprintf("%06d", $invoice->order->order_number) }} <br>
                            <strong>Date</strong>: {{ $invoice->created_at->format('d M Y') }} <br>
                            <strong>Company Bank Details</strong> <br>
                            <strong>Bank Name</strong>:HDFC BANK LTD <br>
                            <strong>A/C No</strong>:50200080989560 <br>
                            <strong>Branch</strong>:RAJENDER NAGAR, GHAZIABAD <br>
                            <strong>IFS Code</strong>:HDFC0001266 <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="information">
            <td colspan="3" style="padding: 5px; vertical-align:middle;">
                <table style="width: 100%; line-height: inherit; text-align: left; border-bottom: solid 1px #ccc;">
                    <tr>
                        <table style="width: 100%;">
                            <tbody>
                            <tr>
                                <td><b> Shipping Address:- </b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td> : {{ $invoice->address->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td> : {{ $invoice->address->address }}</td>
                            </tr>
                            <tr>
                                <td><strong>City</strong></td>
                                <td> : {{ $invoice->address->city }}</td>
                            </tr>
                            <tr>
                                <td><strong>State</strong></td>
                                <td> : {{ $invoice->address->state }}</td>
                            </tr>
                            <tr>
                                <td><strong>Pincode</strong></td>
                                <td> : {{ $invoice->address->pincode }}</td>
                            </tr>
                            <tr>
                                <td><strong>Phone</strong></td>
                                <td> : {{ $invoice->address->mobile }}</td>
                            </tr>
                            <tr>
                                <td><strong>Landmark</strong></td>
                                <td> : {{ $invoice->address->landmark }}</td>
                            </tr>
                            </tbody>
                        </table>


                    </tr>
                </table>
            </td>
        </tr>
        <td colspan="3" style="padding: 5px;
        vertical-align:middle;">
            <table class="GeneratedTable"
                   style="width: 100%; background-color: #ffffff; border-collapse: collapse; border-width: 1px; border-color: #000000; border-style: solid; color: #000000;">
                <thead style="background-color: #ffffff;">
                    <tr>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">S
                            no</th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">
                            Name</th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">HSN
                            Code</th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">Qty
                        </th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">
                            Rate
                        </th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">
                            Discount
                        </th>
                        <th style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">
                            Amount</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $invoiceOrder = $invoice->order->cart;
                    $orders = json_decode($invoiceOrder);
                    $finalPrice = 0;
                @endphp
                @foreach($orders as $index => $order)
                    <tr>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">
                            {{ $index + 1 }}
                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; width: 30%; text-align: center;">
                            {{ $order->name }}
                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">

                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">
                            {{ $order->quantity }}
                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">
                            {{ $order->price }}
                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">
                            {{ $discount = $order->discount ?? 0 }}
                        </td>
                        <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">
                            {{ $total = $order->price - $discount }}
                        </td>
                        @php
                            $finalPrice = $finalPrice + $total;
                        @endphp
                    </tr>
                @endforeach
                </tbody>
            </table>
        </td>
        <td>
            <br>
            <table class="GeneratedTable" style="width: 100%; background-color: #ffffff; border-collapse: collapse; border-width: 1px; border-color: #000000; border-style: solid; color: #000000;">
                <tbody>
                <tr>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">Taxable Value</td>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">: {{ $finalPrice - ($finalPrice * 12 / 100) }}</td>
                </tr>
                <tr>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">CGST Amt</td>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">: {{ $finalPrice * 6 / 100 }}</td>
                </tr>
                <tr>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">SGST Amt</td>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">: {{ $finalPrice * 6 / 100 }}</td>
                </tr>
                <tr>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px; text-align: center;">Total Value</td>
                    <td style="border-width: 1px; border-color: #000000; border-style: solid; padding: 3px;">: {{ $finalPrice }}</td>
                </tr>
                </tbody>
            </table>
            <br>
        </td>
        <!--
        <tr class="total">
            <td colspan="3" align="right" style="padding: 5px;
        vertical-align:middle;"> Total Amount in Words : <b> Three Hundred Eighty Rupees Only </b> </td>
        </tr>
        -->
        <tr>
            <td colspan="3" style="padding: 5px;
        vertical-align:middle;">
                <table cellspacing="0px" cellpadding="2px"
                       style="width: 100%; line-height: inherit; text-align: left; border-bottom: solid 1px #ccc; margin-top: 10px;">
                    <tr>
                        <td width="50%" style="padding: 5px; vertical-align:middle;">
                            <b> Declaration: </b> <br>
                            We declare that this invoice shows the actual price of the goods
                            described above and that all particulars are true and correct. The
                            goods sold are intended for end user consumption and for not resale.
                        </td>
                        <td style="padding:5px;vertical-align:middle;text-align:right;">
                            <b> Authorized Signature </b>
                            <br><br>
                            ...................................
                            <br><br><br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div>
        <button onclick="saveAsPDF()">Download</button>
    </div>
</div>

<script>
    // save this page as pdf
    function saveAsPDF() {
        const invoice = document.getElementById("invoice-box");
        window.print();
    }
</script>
</body>

</html>
