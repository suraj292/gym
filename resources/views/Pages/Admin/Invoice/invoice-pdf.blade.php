<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<section>
    <div style="text-align: center">
        TAX INVOICE
    </div>
    <div style="border: black 1px solid; position: relative">
        <div>
            <div style="text-align: center; margin-top: 10px">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="100">
            </div>
            <div style="text-align: center"> <h1><strong>Athlete Nutrition</strong></h1> </div>
            <div style="text-align: center"> A 55, B 3 NikunjAppartment, Shyam Park Extension, Sahibabad, Ghaziabad (201005) </div>
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

        <div style="display: flex; border-top: black 1px solid; margin-top: 65px">
            <div style="border-right: black 1px solid; width: 49.5%; float: left; padding-left: 10px; margin-bottom: 10px">
                <p><strong>Billing Details (Bill To)</strong></p>
                <br>
                <strong>Name: {{ $customer_address['name'] }}</strong> <br>
                <strong>Address: {{ $customer_address['address'] }}</strong> <br>
                <strong>State: {{ $customer_address['state'] }}</strong> <br>
                <strong>Phone: {{ $customer_address['phone'] }}</strong> <br>
                <strong>GSTIN: {{ $customer_address['gstin'] }}</strong>
            </div>
            <div style="padding: 0; width: 49.5%; float: right; margin-bottom: 10px">
                <div style="padding: 10px">
                    <table>
                        <tr>
                            <td><strong>Invoice No. : {{ $invoice['invoice_number'] }}</strong>2 &nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Date : </strong> {{ date('d-m-Y', strtotime($invoice['invoice_date'])) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="p-2" style="border-top: black 1px solid; padding-left: 10px;">
                    <table style="font-size: 14px">
                        <tr>
                            <td colspan="2"><strong>Company Bank Details</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Bank Name</strong></td>
                            <td><strong>: HDFC BANK LTD</strong></td>
                        </tr>
                        <tr>
                            <td><strong>A/C No</strong></td>
                            <td><strong>:50200080989560</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Branch</strong></td>
                            <td><strong>:RAJENDER NAGAR, GHAZIABAD</strong></td>
                        </tr>
                        <tr>
                            <td><strong>IFS Code</strong></td>
                            <td><strong>:HDFC0001266</strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div style="margin-top: 200px">
            <style>
                .custom-table tr{
                    border: black 1px solid;
                }
                .custom-table td{
                    border: black 1px solid;
                }
                .custom-table th{
                    border: black 1px solid;
                }
            </style>
            <table border="1" style="border-collapse: collapse; width: 100%; font-size: 14px" class="custom-table">
                <tr class="text-center">
                    <th colspan="1">SlNo</th>
                    <th colspan="3">Item Description</th>
                    <th colspan="1">Hsn Code</th>
                    <th colspan="1">Qty</th>
                    <th colspan="1">Rate</th>
                    <th colspan="1">Amount</th>
                </tr>
                <tr>
                    <td>1
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                    <td colspan="3">{{ $customer_product['product_name'] }}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                    <td>{{ $customer_product['hsn_code'] }}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                    <td>{{ $customer_product['qty'] }}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                    <td>{{ $customer_product['rate'] }}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                    <td>{{ $customer_product['qty'] * $customer_product['rate'] }}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </table>
        </div>

        <div style="border-bottom: black 1px solid; display: flex">
            <div class="custom-table" style="border-right: black 1px solid; width: 66%; float: left">
                <table border="1" style="border-collapse: collapse; width: 90%; font-size: 8px; margin: 10px">
                    <tr>
                        <th>TAXABLE AMT</th>
                        <th>CGST %</th>
                        <th>CGST</th>
                        <th>SGST %</th>
                        <th>SGST AMT</th>
                        <th>IGST %</th>
                        <th>IGST AMT</th>
                    </tr>
                    <tr>
                        <td>TAXABLE AMT</td>
                        <td>{{ $customer_tax['cgst_p'] }}</td>
                        <td>{{ $customer_tax['cgst_a'] }}</td>
                        <td>{{ $customer_tax['sgst_p'] }}</td>
                        <td>{{ $customer_tax['sgst_a'] }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TAXABLE AMT</td>
                        <td>CGST %</td>
                        <td>CGST</td>
                        <td>SGST %</td>
                        <td>SGST AMT</td>
                        <th>IGST %</th>
                        <th>IGST AMT</th>
                    </tr>
                </table>

                <div style="margin-top: 20px; padding-left: 10px">
                    <strong>Amount in Words:</strong>
                    <br>
                    {{ $customer_tax['amount_in_words'] }}

                </div>
            </div>
            <style>
                .tr-left tr td:first-child{
                    padding-left: 20px;
                }
            </style>
            <div class="tr-left" style="padding: 0; width: 33%; float: right;">
                <table border="1" style="border-collapse: collapse; width: 100%; font-size: 12px;">
                    <tr>
                        <td>Taxable Value</td>
                        <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <?php
                            $tb = ((int)$customer_tax['grand_total']) - ((int)$customer_tax['cgst_a'] + (int)$customer_tax['sgst_a']);
                        ?>
                        <td>{{ $tb }}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>CGST Amt</td>
                        <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{ $customer_tax['cgst_a'] }}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>SGST Amt</td>
                        <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{ $customer_tax['sgst_a'] }}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Total Value</td>
                        <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{ $customer_tax['grand_total'] }}</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- terms and condition -->
        <div style="width: 100%; left: -0px; margin-top: 150px;">
            <table border="1" style="border-collapse: collapse; width: 100%;">
                <tr>
                    <th>Terms & Condition</th>
                </tr>
                <tr>
                    <td style="padding: 10px">
                        1. The credit period for goods should not exceed 15 days.
                        <br>
                    </td>
                </tr>
            </table>
        </div>

        <div style="width: 100%; left: -0px; margin-top: 50px">
            <table border="1" style="border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="padding: 10px">
                        RECEIVED THE MATERIAL IN GOOD CONDITION
                        <br>
                        <br>
                        <br>
                        <br>
                        RECEIVER'S SIGNATURE AND SEAL
                    </td>
                    <td style="padding: 10px">
                        FOR BRAND
                        <br>
                        <br>
                        <br>
                        <br>
                        Authorized Signatory
                    </td>
                </tr>
            </table>
        </div>

    </div>
</section>



</body>
</html>
