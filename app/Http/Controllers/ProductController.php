<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade as PDF;
use Codedge\Fpdf\Fpdf\Fpdf as FPDF;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::all();
  

//($products);
        return view('products', compact('products'));
    }
        public function pdf()
    {        
       
        $registros= Product::all(); 
                 foreach($registros as $product){
            
      
$data[] = array(0=>$product->id.' /', 1=>$product->name, 
                2=>$product->description,3=>$product->stock);

            
            }
            $header = array(0 => 'id', 1 => 'Products',2 => 'Descrip', 3 => 'stock',);
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
$fpdf=new FPDF(); 

//$fpdf->AliasNbPages();
$fpdf->AddPage();
//
$fpdf->SetFont('Arial','I',14);


    
    

    

$fpdf->BasicTable($header,$data);

$fpdf->SetFont('Arial','I',8);
//$fpdf->SetY(-15);
$fpdf->PageNo();


    // Salto de línea
    //$fpdf->Ln(20);
    
    return $fpdf->Output('D','luis.pdf'); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
