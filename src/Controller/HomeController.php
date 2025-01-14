<?php

namespace App\Controller;

use App\Repository\VehicleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    private VehicleRepository $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    #[Route('/', name: 'app_home')]
    public function searchAll(): Response
    {
        $vehicles = $this->vehicleRepository->findAll();

        return $this->render('home/index.html.twig', [
            'vehicles' => $vehicles
        ]);
    }
}
