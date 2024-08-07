<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>
<style>
    .card-text{
        height: 20vh;
        overflow-y: auto;
    }
    .card:hover{
        cursor: pointer;
        box-shadow: 4px 4px 16px rgba(0,0,0,0.15);
        transition:box-shadow 0.2s ease;
    }
</style>
<body>
    <nav class="navbar navbar-expand bg-dark sticky-top shadow">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light">
                Dashboard
            </span>
        </div>
        <a href="/user" class="text-light mx-3">
            username
        </a>
    </nav>
    <div class="container my-5">

        <div class="row gap-2">
            
            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/kato.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Moondrop Kato</h5>
                        <p class="card-text">
                            Optimized the structure and volume ofdynamic driver and acoustic cavity through FEA finite 
                            element simulationcombined with repeated experimental verification, so as to achieve unparalleled
                            linear distortion performance.
                        </p>
                        <a href="#" class="btn btn-primary ">ADD TO CART</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/spinfitcp100.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">SpinFit CP100</h5>
                        <p class="card-text">
                            The SpinFit CP100 eartips are premium silicone ear tips designed to enhance the audio 
                            experience by providing superior comfort and improved sound isolation. Featuring a unique 
                            360-degree flexible design, they can adapt to the shape of the ear canal, ensuring a secure 
                            and snug fit. This flexibility not only enhances comfort during extended use but also optimizes 
                            the acoustic seal, resulting in better bass response and overall audio clarity. 
                        </p>
                        <a href="#" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/keephifiMMCx.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">keephifi MMCX Cable</h5>
                        <p class="card-text">
                            The pure siver upgrade cable is woven into one core by 10 0.1mm strands, and is added DuPont 
                            Aramid imported from Germany. With a total number of 80 strands in8core and a more purer sound 
                            bottom of 4N high-purity and high-fidelity, sound quality improvement is obvious. 
                        </p>
                        <a href="#" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/hexa.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Truthear Hexa </h5>
                        <p class="card-text">
                            Adopting the polyurethane suspension composite liquid crystal dome diaphragm and dual-cavity 
                            internal magnetic circuit dynamic driver of N52 magnet. Utilizing the DLP-3D printed cavity 
                            commonly used in high-end multi-driver and custom earphone. Come with the copper 
                            silver-plated cable with a thicker diameter of the single strand. Present the 
                            excellent objective index.  
                        </p>
                        <a href="#" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>