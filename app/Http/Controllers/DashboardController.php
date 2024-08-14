<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $products = [
        //     [
        //         "name"=>"Moondrop Kato",
        //         "image"=>"img/kato.jpg",
        //         "desc"=>"Optimized the structure and volume ofdynamic driver and acoustic cavity through FEA finite 
        //                     element simulationcombined with repeated experimental verification, so as to achieve unparalleled
        //                     linear distortion performance."
        //     ],
        //     [
        //         "name"=>"SpinFit CP100",
        //         "image"=>"img/spinfitcp100.webp",
        //         "desc"=>"The SpinFit CP100 eartips are premium silicone ear tips designed to enhance the audio 
        //                     experience by providing superior comfort and improved sound isolation. Featuring a unique 
        //                     360-degree flexible design, they can adapt to the shape of the ear canal, ensuring a secure 
        //                     and snug fit. This flexibility not only enhances comfort during extended use but also optimizes 
        //                     the acoustic seal, resulting in better bass response and overall audio clarity."
        //     ],
        //     [
        //         "name"=>"keephifi MMCX Cable<",
        //         "image"=>"img/keephifiMMCx.jpg",
        //         "desc"=>"The pure siver upgrade cable is woven into one core by 10 0.1mm strands, and is added DuPont 
        //                     Aramid imported from Germany. With a total number of 80 strands in8core and a more purer sound 
        //                     bottom of 4N high-purity and high-fidelity, sound quality improvement is obvious. "
        //     ],
        //     [
        //         "name"=>"Truthear Hexa",
        //         "image"=>"img/hexa.jpg",
        //         "desc"=>"Adopting the polyurethane suspension composite liquid crystal dome diaphragm and dual-cavity 
        //                     internal magnetic circuit dynamic driver of N52 magnet. Utilizing the DLP-3D printed cavity 
        //                     commonly used in high-end multi-driver and custom earphone. Come with the copper 
        //                     silver-plated cable with a thicker diameter of the single strand. Present the 
        //                     excellent objective index."
        //     ],
        //     [
        //         "name"=>"Truthear Hexa",
        //         "image"=>"img/hexa.jpg",
        //         "desc"=>"Adopting the polyurethane suspension composite liquid crystal dome diaphragm and dual-cavity 
        //                     internal magnetic circuit dynamic driver of N52 magnet. Utilizing the DLP-3D printed cavity 
        //                     commonly used in high-end multi-driver and custom earphone. Come with the copper 
        //                     silver-plated cable with a thicker diameter of the single strand. Present the 
        //                     excellent objective index."
        //     ],
        //     [
        //         "name"=>"Truthear Hexa",
        //         "image"=>"img/hexa.jpg",
        //         "desc"=>"Adopting the polyurethane suspension composite liquid crystal dome diaphragm and dual-cavity 
        //                     internal magnetic circuit dynamic driver of N52 magnet. Utilizing the DLP-3D printed cavity 
        //                     commonly used in high-end multi-driver and custom earphone. Come with the copper 
        //                     silver-plated cable with a thicker diameter of the single strand. Present the 
        //                     excellent objective index."
        //     ],
        // ];
        $products = Product::orderBy('name', 'ASC')->get(); //def: by order, 'DESC'
        return view('dashboard')->with("products", $products);
    }
}
