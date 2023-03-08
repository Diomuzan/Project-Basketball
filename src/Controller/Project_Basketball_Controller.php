<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class Project_Basketball_Controller extends AbstractController
{
    #[Route ('/Project_Basketball', name: 'Project Basketball')]
    public function project_basketball(entityManagerInterface $entityManager): Response {
      $cn = $entityManager->getConnection();
      $sql = "SELECT * FROM club WHERE id IN (1, 2, 3, 4, 5);";
      $st = $cn->prepare($sql);
      $str = $st->executeQuery();
      $cl = $str->fetchAllAssociative();
      return $this->render("Project_Basketball.html.twig", ['club' => $cl]);
    }
}