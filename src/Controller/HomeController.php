<?php

namespace App\Controller;

use App\Repository\CarRepository;
use App\Repository\MotoRepository;
use App\Repository\VehicleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    private VehicleRepository $vehicleRepository;
    private MotoRepository $motoRepository;
    private CarRepository $carRepository;

    public function __construct(VehicleRepository $vehicleRepository, MotoRepository $motoRepository, CarRepository $carRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->carRepository = $carRepository;
        $this->motoRepository = $motoRepository;
    }

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {

        $type = $request->get('type');

        if ($type == "voiture") {
            $vehicles = $this->carRepository->findAll();
        } else if ($type == "moto") {
            $vehicles = $this->motoRepository->findAll();
        } else {
            $vehicles = $this->vehicleRepository->findAll();
        }

        return $this->render('home/index.html.twig', [
            'vehicles' => $vehicles
        ]);
    }
}
